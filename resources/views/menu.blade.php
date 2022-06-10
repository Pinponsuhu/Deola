<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nigerian Dinner</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('icon/restaurant.png') }}" type="image/x-icon">
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/tw-ele.min.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"><style>
    body{
        font-family: 'Inter', sans-serif;
    }
    input[type="date"]::-webkit-inner-spin-button,
input[type="date"]::-webkit-calendar-picker-indicator {
    display: none;
    -webkit-appearance: none;
}
input[type="time"]::-webkit-calendar-picker-indicator { background: none; display:none; }
</style>
    <script src="{{ asset('js/all.js') }}"></script>
    <script src="{{ asset('js/scrollreveal.js') }}"></script>
</head>
<body class="bg-rose-100 w-screen overflow-x-hidden">
    <nav class="bg-white px-8 md:px-14 def flex justify-between items-center py-4">
        <h1 class="md:text-3xl text-2xl flex items-center font-bold italic"><img src="{{ asset('icon/restaurant.png') }}" class="w-12 h-12" alt=""> Naija <span class="text-rose-500">Dinner</span></h1>
        <div class="gap-x-4 items-center hidden md:flex">
            <a href="/">Home</a>
            <a href="/#contact">Contact</a>
            <a href="/gallery">Gallery</a>
            <a href="/menu">Menu</a>
        <a href="/check" class="py-3 px-7 text-white bg-rose-400 font-bold">Check reservation</a>
        </div>
        <i onclick="navMenu()" class="fa fa-bars fa-2x text-rose-400 md:hidden"></i>
        <div id="nav-menu" class="w-72 z-50 px-7 hidden md:hidden fixed top-0 left-0 h-screen bg-rose-400  py-8">
            <h1 class="md:text-3xl py-3 rounded-md flex justify-center bg-white text-2xl mb-8 items-center font-bold italic"><img src="{{ asset('icon/restaurant.png') }}" class="w-12 h-12" alt=""> Naija <span class="text-rose-500">Dinner</span></h1>
            <div class="flex flex-col text-white font-bold items-center gap-y-4">
                <a href="/">Home</a>
                <a href="/#contact" onclick="contact()">Contact</a>
                <a href="/gallery">Gallery</a>

            <a href="/menu">Menu</a>
        <a href="/check" class="py-3 px-7 text-rose-400 bg-white font-bold">Check reservation</a>
            </div>
        </div>
    </nav>
    <main>
        <section class="relative h-96">
            <img src="{{ asset('image/slide-11.jpg') }}" class="block w-full h-full" alt="">
            <div class="-mt-44">
                <h1 class="text-xl md:text-3xl font-bold text-center drop-shadow-md text-white uppercase">Naijadinner menu</h1>
            </div>
        </section>
        <section class="mt-6">
            <h1 class="text-lg text-center">We use great fresh ingredients, traditional kitchen <br class="hidden md:block"> cooking methods and classic recipes all day every day.</h1>
            <img src="{{ asset('image/menu.png') }}" class="block mx-auto" alt="">
        </section>
        <section class="md:grid grid-cols-3 gap-x-20 px-6 md:px-12 mt-12 items-start" >
            <div class="w-full my-6 mx-auto bg-white p-8">
                <img src="{{ asset('image/menu-breakfast.jpg') }}" class="w-full h-auto" alt="">
                <h1 class="text-2xl font-medium text-yellow-600 text-center mt-4">Breakfast Menu</h1>
                <img src="{{ asset('image/home_goodfood_sep7.png') }}" alt="" class="block mx-auto my-3">
                        <hr class="no_line">
                        <h5 class="my-3 font-bold text-lg">NIGERIAN BREAKFAST (₦5,900)</h5>
                        <p>Sausage, Traditional Eggs Sauce Infuse Asian Style, Baked Beans, with your Choice of yam or Plantain</p>
                        <h5 class="my-3 font-bold text-lg">ENGLISH BREAKFAST (₦6,900)</h5>
                        <p>Sausage, Bacon, Eggs, Grilled Fresh Mushrooms &amp; Tomatoes, Baked Beans, &amp; Toasted Bread</p>
                        <h5 class="my-3 font-bold text-lg">AMERICAN BREAKFAST (₦6,900)</h5>
                        <p>Sausage, Bacon, Eggs, Hash Brown, French toast Bread with a Choice of Waffles or Pancake</p>
                        <h5 class="my-3 font-bold text-lg">EGG ON TOAST (₦3,500)</h5>
                        <p>Two eggs served with butter side toast</p>
                        <h5 class="my-3 font-bold text-lg">With Extra</h5>
                        <p>Eggs (N1,200)<br>Sausage (N1,500)<br>Plantain (N1,000)<br>Yam (N1,500)<br>Ham (N1,500)<br>Bacon (N1,000)</p>
                        <h5 class="my-3 font-bold text-lg">CHOOSE YOUR EGG STYLE</h5>
                        <p>Sunnyside up <br>Scrambled <br>Well done <br>Over easy <br>Omelet</p>
                        <hr class="no_line">
                        <p><span class="themecolor">*With Spanish omelet (₦800)</span></p>
            </div>
            <div class="w-full mx-auto my-6 bg-white p-8">
                <img src="{{ asset('image/menu-burger.jpg') }}" class="w-full h-auto" alt="">
                <h1 class="text-2xl font-medium text-yellow-600 text-center mt-4">Burger</h1>
                <img src="{{ asset('image/home_goodfood_sep7.png') }}" alt="" class="block mx-auto my-3">
                        <hr class="no_line">
                        <h5 class="my-3 font-bold text-lg">HEAVYWEIGHT BURGER (340grm) (₦7,800)</h5>
                        <p>Double patties, with cheese, tomatoes, onion, pickles &amp; lettuce</p>
                        <h5 class="my-3 font-bold text-lg">JALAPENO BEEF BURGER (170grm) (₦6,600)</h5>
                        <p>Beef patties with spicy mayo, jalapeno, tomatoes, onion, pickles, lettuce &amp; cheese</p>
                        <h5 class="my-3 font-bold text-lg">CHICKEN BURGER (200grm) (₦6,300)</h5>
                        <p>Chicken breast marinated in our secret spice chili sauce, pickles, tomatoes &amp; lettuce</p>
                        <h5 class="my-3 font-bold text-lg">CRISPY CHICKEN BURGER (200grm) (₦6,300)</h5>
                        <p>Deep-fried chicken breast on a panko crisp, tomatoes, cheese, onion, pickles &amp; Lettuce</p>
                        <h5 class="my-3 font-bold text-lg">CLASSIC BURGER (170grm) (₦6,300)</h5>
                        <p>Beef patties, tomatoes, onion, pickles &amp; Lettuce</p>
                        <h5 class="my-3 font-bold text-lg">VEGETABLE BURGER (₦5,500)</h5>
                        <hr class="no_line"><p><span class="themecolor">** SERVED WITH FRIES </span></p>
                    </div>
            <div class="w-full mx-auto my-6 bg-white p-8">
                <img src="{{ asset('image/menu-pasta.jpg') }}" class="w-full h-auto" alt="">
                <h1 class="text-2xl font-medium text-yellow-600 text-center mt-4">Pasta</h1>
                <img src="{{ asset('image/home_goodfood_sep7.png') }}" alt="" class="block mx-auto my-3">
                    <hr class="no_line">
                    <h5 class="my-3 font-bold text-lg">EGG NOODLES WITH PRAWNS (₦12,000)</h5>
                    <p>Prawns with oyster sauce, chili flakes, shiitake mushroom, carrots, green pepper &amp; beans sprout</p>
                    <h5 class="my-3 font-bold text-lg">SEAFOOD BAKED PASTA (₦9,500)</h5>
                    <p>Linguine pasta with mixed seafood &amp; chili flakes tossed with Marinara sauce &amp; melted cheese</p>
                    <h5 class="my-3 font-bold text-lg">SEAFOOD ALFREDO PASTA (₦8,800)</h5>
                    <p>Penne pasta with sautéed mixed seafood, Parmesan cheese tossed in a white creamy sauce</p>
                    <h5 class="my-3 font-bold text-lg">CHICKEN CREOLE (₦7,000)</h5>
                    <p>Sautéed shrimp or chicken with Linguine pasta, fresh basil &amp; tomato, tossed in creole sauce</p>
                    <h5 class="my-3 font-bold text-lg">PASTA CHICKEN CARBONARA (₦7,900)</h5>
                    <p>Linguine pasta chicken, bacon, mushroom, fresh basil &amp; Parmesan cheese tossed with creamy white sauce</p>
                    <h5 class="my-3 font-bold text-lg">SPAGHETTI BOLOGNESE (₦7,100)</h5>
                    <p>Sautéed mincemeat simmered in tomato sauce &amp; mushroom spaghetti pasta topped with parmesan cheese</p>
                    <h5 class="my-3 font-bold text-lg">PENNE ARRABIATA (₦5,500)</h5>
                    <p>Penne pasta tossed with tomato sauce &amp; fresh basil topped with parmesan cheese</p>
                    <h5 class="my-3 font-bold text-lg">MAC &amp; CHEESE (₦5,500)</h5>
                    <p>Macaroni tossed in trio-cheese sauce sprinkled with parmesan cheese &amp; parsley</p>
                    <h5 class="my-3 font-bold text-lg">SHRIMP CREOLE (₦8,800)</h5>
                    <p><span class="themecolor">*ONLY GRILLED PRAWNS SERVED WITH YOUR CHOICE OF RICE OR FRIES</span></p>
                </div>
                <div class="w-full mx-auto my-6 bg-white p-8">
                    <img src="{{ asset('image/menu-salad.jpg') }}" class="w-full h-auto" alt="">
                    <h1 class="text-2xl font-medium text-yellow-600 text-center mt-4">Salad</h1>
                    <img src="{{ asset('image/home_goodfood_sep7.png') }}" alt="" class="block mx-auto my-3">
                        <hr class="no_line">
                        <h5 class="my-3">SEAFOOD QUINOA SALAD (₦9,000)<br>
                            CHICKEN CAESAR SALAD (₦7,700)<br>
                            CHEF SALAD (₦7,700)<br>
                            GREEK SALAD (₦5,900)</h5>
                        </div>
            <div class="w-full mx-auto my-6 bg-white p-8">
                <img src="{{ asset('image/menu-wraps.jpg') }}" class="w-full h-auto" alt="">
                <h1 class="text-2xl font-medium text-yellow-600 text-center mt-4">Wraps</h1>
                <img src="{{ asset('image/home_goodfood_sep7.png') }}" alt="" class="block mx-auto my-3">
                    <hr class="no_line">
                    <h5 class="my-3">BEEF TENDERLOIN WRAP (₦6,600)<br>CHICKEN WRAP (₦6,500)</h5>
                    <p><span class="themecolor">**ALL SERVED WITH FRIES</span></p>
                    </div>
            <div class="w-full mx-auto my-6 bg-white p-8">
                <img src="{{ asset('image/menu-grills.jpg') }}" class="w-full h-auto" alt="">
                <h1 class="text-2xl font-medium text-yellow-600 text-center mt-4">The Grills</h1>
                <img src="{{ asset('image/home_goodfood_sep7.png') }}" alt="" class="block mx-auto my-3">
                    <hr class="">
                    <h5>GRILLED PRAWNS (₦11,000)<br>BEEF SUYA (₦4,900)<br>CHICKEN SUYA (₦4,900)<br>CALAMARI SUYA (₦6,000)</h5>
                    <p><span class="themecolor">*ONLY GRILLED PRAWNS SERVED WITH YOUR CHOICE OF RICE OR FRIES.</span></p>
                    </div>
            <div class="w-full mx-auto my-6 bg-white p-8">
                <img src="{{ asset('image/menu-sandwiches.jpg') }}" class="w-full h-auto" alt="">
                <h1 class="text-2xl font-medium text-yellow-600 text-center mt-4">Sandwiches</h1>
                <img src="{{ asset('image/home_goodfood_sep7.png') }}" alt="" class="block mx-auto my-3">

                <hr class="no_line">
                <h5 class="my-3 font-bold text-lg">C &amp; C CLUB SANDWICH (₦7,000)</h5>
                <p>Ham, Bacon, Turkey, Egg, Cheese, Chicken, Tomato &amp; Lettuce on a white slice bread</p>
                <h5 class="my-3 font-bold text-lg">PHILLY CHEESE STEAK (₦7,000)</h5>
                <p>Sliced beef, sautéed onion, green pepper mushroom topped with melted cheese</p>
                <h5 class="my-3 font-bold text-lg">CHICKEN SUB (₦6,500)</h5>
                <p>Grilled Chicken breast marinated in mustard herb sauce, tomato pickles &amp; lettuce</p>
                <h5 class="my-3 font-bold text-lg">TRADITIONAL HOTDOG (₦5,500)</h5>
                <p>Smokey chili flavored sausage topped with special chili con carne &amp; melted cheese</p>
                <p><span class="themecolor">** SERVED WITH FRIES</span></p>
                    </div>
                    <div class="w-full mx-auto my-6 bg-white p-8">
                        <img src="{{ asset('image/menu-appetizers.jpg') }}" class="w-full h-auto" alt="">
                        <h1 class="text-2xl font-medium text-yellow-600 text-center mt-4">Appetizer</h1>
                        <img src="{{ asset('image/home_goodfood_sep7.png') }}" alt="" class="block mx-auto my-3">

                            <hr class="no_line">
                            <h5 class="my-3">BUFFALO WINGS (₦4,900)<br>
                                SPICY GRILLED CHICKEN LOLLIPOP (₦5,200)<br>
                                CHICKEN TENDER (₦5,200)<br>CRISPY PRAWNS (₦7,900)<br>
                                CRISPY CALAMARI (₦6,500)<br>
                                POPCORN SHRIMP (₦6,200)<br>
                                VEGETABLE SPRING ROLL (₦4,500) <br>
                                CHICKEN SPRING ROLL (₦5000) <br>
                                SHRIMP SPRING ROLL (₦6,000) <br>
                                CALAMARI (₦6,000)<br
                                >CHICKEN QUESADILLA (₦6,000)<br>
                                CHILI FRIES (₦4,500)
                            </h5>
                        </div>
                        <div class="w-full mx-auto my-6 bg-white p-8">
                            <img src="{{ asset('image/menu-Main-Dish-Beef.jpg') }}" class="w-full h-auto" alt="">
                            <h1 class="text-2xl font-medium text-yellow-600 text-center mt-4">Beef</h1>
                            <img src="{{ asset('image/home_goodfood_sep7.png') }}" alt="" class="block mx-auto my-3">
                                <hr class="no_line">
                                <h5 class="my-3 font-bold text-lg">MONGOLIAN BEEF (₦8,500)</h5>
                                <p>Tenderloin beef fillet, Sautéed onion, garlic, red &amp; green bell pepper, tossed with hoisin sauce</p>
                                <h5 class="my-3 font-bold text-lg">OYSTER BEEF WITH BEANS SPROUT ASIAN STYLE (₦8,000)</h5>
                                <p>Oyster marinated beef fillet with sautéed onion, sesame oil, &amp; beans Sprout, spring onion, sprinkled with sesame seeds</p>
                                <h5 class="my-3 font-bold text-lg">GINGER BEEF ASIAN STYLE (₦8,000)</h5>
                                <p>Tenderloin beef fillet, Sautéed onion, garlic, tossed with ginger</p>
                                <p><span class="themecolor">**ALL SERVED WITH YOUR CHOICE OF RICE OR FRIES</span></p>
                                </div>
                                <div class="w-full mx-auto my-6 bg-white p-8">
                                    <img src="{{ asset('image/menu-Main-Dish-Seafood.jpg') }}" class="w-full h-auto" alt="">
                                    <h1 class="text-2xl font-medium text-yellow-600 text-center mt-4">Seafood</h1>
                                    <img src="{{ asset('image/home_goodfood_sep7.png') }}" alt="" class="block mx-auto my-3">
                                        <hr class="no_line">
                                        <h5 class="my-3 font-bold text-lg">SINGAPOREAN CHILI PRAWNS (₦10,700)</h5>
                                        <p>Spiced Prawns sauteed with onion, ginger, tossed in our spicy Singaporean sauce</p>
                                        <h5 class="my-3 font-bold text-lg">SAUTEED PRAWNS (₦10,700)</h5><p>Marinated prawns, sauteed in onion, chili flakes &amp; mixed vegetable</p><h5>THAI MIXED SEAFOOD CURRY (₦10,500)</h5>
                                        <p>Prawns, calamari, fish fillet, with coconut milk, yellow curry paste, fresh coriander, fresh basil, potato, red &amp; green bell pepper</p>
                                        <h5 class="my-3 font-bold text-lg">PRAWNS CURRY (₦10,500)</h5>
                                        <p>Spiced prawn with coconut milk, red curry paste, fresh basil, beans sprout, lemongrass &amp; mixed vegetables</p>
                                        <h5 class="my-3 font-bold text-lg">FISH &amp; CHIPS (₦8,200)</h5>
                                        <p>Deep-Fried battered white fish fillet &amp; French fries served with tartar sauce</p>
                                        <p><span class="themecolor">**ALL SERVED WITH YOUR CHOICE OF RICE OR FRIES</span></p>
                                        </div>
            <div class="w-full mx-auto my-6 bg-white p-8">
                <img src="{{ asset('image/menu-Main-Dish-Poultry.jpg') }}" class="w-full h-auto" alt="">
                <h1 class="text-2xl font-medium text-yellow-600 text-center mt-4">Poultry</h1>
                <img src="{{ asset('image/home_goodfood_sep7.png') }}" alt="" class="block mx-auto my-3">
                    <hr class="no_line">
                    <h5 class="my-3 font-bold text-lg">CHICKEN ESCALOPE (₦8,800)</h5>
                    <p>Panko coated chicken breast topped with sausage &amp; melted cheese served with mushroom creamy sauce</p>
                    <h5 class="my-3 font-bold text-lg">ROASTED CHICKEN (₦8,300)</h5>
                    <p>Spiced marinated half chicken, sauteed mixed vegetable</p>
                    <h5 class="my-3 font-bold text-lg">THAI ROASTED CHICKEN CURRY (₦7,500)</h5>
                    <p>Roasted marinated chicken tossed in red curry paste, coconut milk, lemongrass, fresh basil &amp; coriander</p>
                    <h5 class="my-3 font-bold text-lg">SINGAPOREAN CHILI CHICKEN (₦7,000)</h5>
                    <p>Chicken breast sauteed with onion, ginger, tossed with our spicy Singaporean chili sauce</p>
                    <h5 class="my-3 font-bold text-lg">CHICKEN &amp; MUSHROOM (₦8,000)</h5>
                    <p>Pan fry breaded chicken breast with mushroom sauce, &amp; mixed vegetables</p>
                    <p><span class="themecolor">**ALL SERVED WITH A CHOICE OF RICE OR FRIES</span></p>
                    </div>
            <div class="w-full mx-auto my-6 bg-white p-8">
                <img src="{{ asset('image/menu-house-specialty.jpg') }}" class="w-full h-auto" alt="">
                <h1 class="text-2xl font-medium text-yellow-600 text-center mt-4">House Specialy</h1>
                <img src="{{ asset('image/home_goodfood_sep7.png') }}" alt="" class="block mx-auto my-3">
                    <hr class="no_line">
                    <h5 class="my-3 font-bold text-lg">SURF &amp; TURF (₦14,800)</h5>
                    <p>A combination of grilled beef fillet &amp; prawns on a bed of mixed Vegetables</p>
                    <p><span class="themecolor">*Served with your choice of rice or fries</span></p>
                    <h5 class="my-3 font-bold text-lg">SICILY RACK (400grm) (₦10,200)</h5>
                    <p>Marinated goat chops with peppermint sauce</p>
                    <p><span class="themecolor">*SERVED WITH PASTA</span></p>
                    <h5 class="my-3 font-bold text-lg">B.B.Q RACK (400grm) (₦10,200)</h5>
                    <p>Marinated goat rack slowly grilled, brushed with spicy barbecue sauce with roasted sesame seeds</p>
                    <p><span class="themecolor">*SERVED WITH YOUR CHOICE OF RICE OR FRIES</span></p>
                    <h5 class="my-3 font-bold text-lg">SICILY LAMB (400grm) (₦23,500)</h5>
                    <p>(Imported) Marinated lamb chop with peppermint sauce</p>
                    <p><span class="themecolor">*Served with pasta</span></p>
                    <h5 class="my-3 font-bold text-lg">T-BONE STEAK (350grm) (₦21,000)</h5>
                    <p><span class="themecolor">*Served with your choice of mashed potatoes or fries</span></p>
                    </div>
            <div class="w-full mx-auto my-6 bg-white p-8">
                <img src="{{ asset('image/menu-dessert.jpg') }}" class="w-full h-auto" alt="">
                <h1 class="text-2xl font-medium text-yellow-600 text-center mt-4">Dessert</h1>
                <img src="{{ asset('image/home_goodfood_sep7.png') }}" alt="" class="block mx-auto my-3">
                    <hr class="no_line">
                    <h5 class="my-3 font-bold text-lg">WAFFLE - ₦4,500</h5>
                    <p>Banana and strawberry slices, chocolate sauce, 'maple syrup, nuts, chocolate chips, served with vanilla ice cream</p>
                    <hr class="">
                    <h5 class="my-3 font-bold text-lg">PAN CAKE - ₦4,500</h5>
                    <p>Maple syrup, butter &amp; vanilla ice cream&nbsp;</p>
                    <hr class="">
                    </div>
            <div class="w-full mx-auto my-6 bg-white p-8">
                    <h2 class="text-2xl font-medium text-yellow-600 text-center mt-4">Extra Toppings</h2>
                    <img src="{{ asset('image/home_goodfood_sep7.png') }}" alt="" class="block mx-auto my-3">
                        <hr class="no_line">
                        <h5 class="my-3">PRAWNS (₦3,900)<br>
                            MIXED SEA FOOD (₦3,100)<br>
                            SHRIMP (₦1,200)<br>
                            CHICKEN BREAST (₦2,800)<br>
                            TURKEY SLICE (₦1,500<br>
                            MOZZARELLA CHEESE (₦1,500)<br>
                            CHEDDAR CHEESE (₦1,500)<br>
                            FRESH MUSHROOM (₦1,000)<br>
                            BLACK OLIVE (₦1,000)<br>
                            BAKED BEANS (₦1,000)</h5>
                    </div>
            <div class="w-full mx-auto my-6 bg-white p-8">
                    <h2 class="text-2xl font-medium text-yellow-600 text-center mt-4">Side Dishes</h2>
                    <img src="{{ asset('image/home_goodfood_sep7.png') }}" alt="" class="block mx-auto my-3">
                        <hr class="no_line">
                                    <h5 class="my-3">FRENCH FRIES (₦2,000)<br>
                                        CHINESE FRIED RICE (₦2,000)<br>
                                        MASHED POTATO (₦1,800)<br>
                                        STEAMED RICE (₦2,000)<br>
                                        SAUTÉED VEGETABLE (₦1,800)</h5>
                                        <hr class="">
                    </div>
        </section>
    </main>
    <script>
        function navMenu(){
       document.getElementById('nav-menu').classList.toggle('hidden');
   }
   </script>
</body>
