<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Guest;
use App\Models\Reservations;
use App\Models\Testimonial;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminNavigate extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function dashboard(){
        $reservations = Reservations::where('reservation_date',Carbon::now()->toDateString())->paginate(15);
        return view('dashboard',['reservations'=>$reservations]);
    }
    public function testimonial(){
        $testimonies = Testimonial::latest()->paginate(15);
        return view('testimonial',['testimonies'=> $testimonies]);
    }

    public function store_test(Request $request){
        $request->validate([
            'full_name' => 'required',
            'testimony' => 'required'
        ]);

        $reservation = new Testimonial;
        $reservation->full_name = $request->full_name;
        $reservation->testimony = $request->testimony;
        $reservation->save();

        return redirect('/admin/testimonial');
    }

    public function delete_reservation($id){
        $testimonial = Testimonial::find($id);
        $testimonial->delete();

        return redirect('/admin/testimonial');
    }

    public function all_reservation(Request $request){
        if(isset($request->search)){
            $reservations = Reservations::latest()->where('reservation_date',$request->search)->get();
        }else{
            $reservations = Reservations::latest()->get();
        }
        return view('all-reservation',['reservations'=>$reservations] );
    }


    public function feedbacks(){
        $feedbacks = Contact::latest()->paginate(15);

        return view('feedback',['feedbacks'=>$feedbacks]);
    }

    public function change_password(){

        return view('change-password');
    }

    public function store_password(Request $request){
        $request->validate([
            'password' => 'required|confirmed'
        ]);

        $user = User::find(auth()->user()->id);
        $user->password = Hash::make($request->password);
        $user->save();

        auth()->logout();
        return redirect('/admin/signin');
    }

    public function view_reference($ref){
        $info = Reservations::where('reference',$ref)->latest()->first();
        $guest = Guest::where('reserve_id',$info->id)->get();

        return view('check-admin',['info' => $info,'guests'=> $guest]);
    }
    public function logout(){
        auth()->logout();
        return redirect('/admin/signin');
    }
}
