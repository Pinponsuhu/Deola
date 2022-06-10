<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Guest;
use App\Models\Reservations;
use App\Models\Testimonial;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Unicodeveloper\Paystack\Facades\Paystack;

class NavigateController extends Controller
{
    public function index(){
        $testimonies = Testimonial::latest()->limit(2)->get();
        // dd($testimonies[0]->full_name);
        return view('index',['testimonies' => $testimonies]);
    }

    public function redirectToGateway(Request $request)
    {
        // dd($request->all());
        $today = Carbon::today();
        if($request->reservation_date < $today){
            return back()->with('err',"Date cannot be set to past date");
        }
        $todayDate = Carbon::now()->format('H:i:m');
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'reservation_date' => 'required|date|after_or_equal:' . $today,
            'reservation_time' => 'required|date_format:H:i' ,
            'email' => 'required|email',
            'phone' => 'required|numeric|digits:11',
            'guest' => 'required|numeric',
            'image' => 'required',
            'reference' => 'required',
            'guest_name.*' => 'required',
            'guest_no.*' => 'required',
        ]);

        $img = $request->image;

        $image_parts = explode(";base64,", $img);

        $image_type_aux = explode("image/", $image_parts[0]);

        $image_type = $image_type_aux[1];



        $image_base64 = base64_decode($image_parts[1]);

        $fileName = uniqid() . '.png';

        $success = file_put_contents(public_path().'/uploads/'.$fileName, $image_base64);
        // dd($success);
        $dest = 'public/reserve';
        // $path = $fileName->store($dest);
        $reservation = new Reservations;
        $reservation->first_name = $request->first_name;
        $reservation->last_name = $request->last_name;
        $reservation->email = $request->email;
        $reservation->phone = $request->phone;
        $reservation->reference = $request->reference;
        $reservation->reservation_date = $request->reservation_date;
        $reservation->reservation_time = $request->reservation_time;
        $reservation->guest = $request->guest;
        $reservation->status = 'Pending';
        $reservation->image = $fileName;
        $reservation->save();

        $names = $request->guest_name;
        $nos = $request->guest_no;
        $counter = 0;
        foreach ($names as $name) {

                $guest = new Guest;
                $guest->reserve_id = $reservation->id;
                $guest->fullname = $name;
                $guest->guest_no = $nos[$counter];
                $guest->save();
                ++$counter;

        }
        try{

            return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {
            return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {

        $paymentDetails = Paystack::getPaymentData();
        $reservation = Reservations::where('reference', $paymentDetails['data']['reference'])->first();
        $reservation->amount = $paymentDetails['data']['amount']/100;
        $reservation->status = $paymentDetails['data']['status'];
        $reservation->status = $paymentDetails['data']['status'];
        $reservation->customer_code = $paymentDetails['data']['customer']['customer_code'];
        $reservation->paid_at = $paymentDetails['data']['paidAt'];
        $reservation->save();

        return redirect('/')->with('reference',$paymentDetails['data']['reference']);
        // dd($paymentDetails['data']);
        // dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }

    public function check(){
        return view('check');
    }

    public function gallery(){
        return view('gaallery');
    }
    public function checking(Request $request){
        $request->validate([
            'search' => 'required'
        ]);

        $info = Reservations::where('reference',$request->search)->latest()->first();
        $guest = Guest::where('reserve_id',$info->id)->get();

        return view('check',['info'=>$info,'guests' => $guest,'search'=> $request->search]);
    }

    public function store_feedback(Request $request){
        $request->validate([
            'email' => 'required|email',
            'full_name' => 'required',
            'message' => 'required'
        ]);


        $contact = new Contact;
        $contact->full_name = $request->full_name;
        $contact->message = $request->message;
        $contact->email = $request->email;
        $contact->save();

        return redirect('/')->with('msgg','Feedback sent Successfully');
    }


    public function menu(){
        return view('menu');
    }

}
