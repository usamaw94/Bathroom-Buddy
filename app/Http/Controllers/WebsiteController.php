<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Stripe\Charge;
use Stripe\Stripe;

class WebsiteController extends Controller
{

    public function welcome(){

//        $session_id = session()->getId();
//        dd($session_id);

        $latestProducts = DB::select('SELECT * FROM products ORDER BY created_at DESC LIMIT 8');

        $results = array(
            'latestProducts' => $latestProducts,
        );
        return view('welcome')->with($results);
    }

    public function bathroomProducts(){

        $bathroomProducts = DB::table('products')
            ->join('product_types', function ($join) {
                $join->on('products.product_type', '=', 'product_types.product_type_name')
                    ->where('product_types.product_type_category', '=', "Bathroom")
                    ->orderBy('products.created_at', 'desc');
            })
            ->paginate(6);

        $bathroomProductTypes = DB::select('SELECT * FROM product_types WHERE product_type_category = "Bathroom" ORDER BY created_at DESC');

        $results = array(
            'bathroomProducts' => $bathroomProducts,
            'bathroomProductTypes' => $bathroomProductTypes,
        );
        return view('bathroomProducts')->with($results);
    }


    public function bathroomProductsByType($type){
        $bathroomProducts = DB::table('products')
            ->join('product_types', function ($join) use ($type) {
                $join->on('products.product_type', '=', 'product_types.product_type_name')
                    ->where([
                        ['product_types.product_type_category', '=', "Bathroom"],
                        ['products.product_type', '=', $type]
                    ])
                    ->orderBy('products.created_at', 'desc');
            })
            ->paginate(6);


        $bathroomProductTypes = DB::select('SELECT * FROM product_types WHERE product_type_category = "Bathroom" ORDER BY created_at DESC');

        $results = array(
            'bathroomProductType' => $type,
            'bathroomProducts' => $bathroomProducts,
            'bathroomProductTypes' => $bathroomProductTypes,
        );
        return view('bathroomProducts')->with($results);
    }

    public function kitchenProducts(){

        $kitchenProducts = DB::table('products')
            ->join('product_types', function ($join) {
                $join->on('products.product_type', '=', 'product_types.product_type_name')
                    ->where('product_types.product_type_category', '=', "Kitchen")
                    ->orderBy('products.created_at', 'desc');
            })
            ->paginate(6);

        $kitchenProductTypes = DB::select('SELECT * FROM product_types WHERE product_type_category = "Kitchen" ORDER BY created_at DESC');

        $results = array(
            'kitchenProducts' => $kitchenProducts,
            'kitchenProductTypes' => $kitchenProductTypes,
        );
        return view('kitchenProducts')->with($results);
    }

    public function kitchenProductsByType($type){
        $kitchenProducts = DB::table('products')
            ->join('product_types', function ($join) use ($type) {
                $join->on('products.product_type', '=', 'product_types.product_type_name')
                    ->where([
                        ['product_types.product_type_category', '=', "Kitchen"],
                        ['products.product_type', '=', $type]
                    ])
                    ->orderBy('products.created_at', 'desc');
            })
            ->paginate(6);


        $kitchenProductTypes = DB::select('SELECT * FROM product_types WHERE product_type_category = "Kitchen" ORDER BY created_at DESC');

        $results = array(
            'kitchenProductType' => $type,
            'kitchenProducts' => $kitchenProducts,
            'kitchenProductTypes' => $kitchenProductTypes,
        );
        return view('kitchenProducts')->with($results);
    }

    public function laundryProducts(){

        $laundryProducts = DB::table('products')
            ->join('product_types', function ($join) {
                $join->on('products.product_type', '=', 'product_types.product_type_name')
                    ->where('product_types.product_type_category', '=', "Laundry")
                    ->orderBy('products.created_at', 'desc');
            })
            ->paginate(6);

        $laundryProductTypes = DB::select('SELECT * FROM product_types WHERE product_type_category = "Laundry" ORDER BY created_at DESC');

        $results = array(
            'laundryProducts' => $laundryProducts,
            'laundryProductTypes' => $laundryProductTypes,
        );
        return view('laundryProducts')->with($results);
    }

    public function laundryProductsByType($type){
        $laundryProducts = DB::table('products')
            ->join('product_types', function ($join) use ($type) {
                $join->on('products.product_type', '=', 'product_types.product_type_name')
                    ->where([
                        ['product_types.product_type_category', '=', "Laundry"],
                        ['products.product_type', '=', $type]
                    ])
                    ->orderBy('products.created_at', 'desc');
            })
            ->paginate(6);


        $laundryProductTypes = DB::select('SELECT * FROM product_types WHERE product_type_category = "Laundry" ORDER BY created_at DESC');

        $results = array(
            'laundryProductType' => $type,
            'laundryProducts' => $laundryProducts,
            'laundryProductTypes' => $laundryProductTypes,
        );
        return view('laundryProducts')->with($results);
    }

    public function productDetails($id){

        $product = DB::select('SELECT * FROM products WHERE id = ?',[$id]);

        $productType = $product[0]->product_type;

        $mainCat = DB::select('SELECT * FROM product_types WHERE product_type_name = ? ORDER BY created_at DESC LIMIT 1',[$productType]);

        $mainCategory = $mainCat[0]->product_type_category;

        $relatedProducts = DB::select('SELECT * FROM products WHERE product_type = ? AND id != ? ORDER BY created_at DESC LIMIT 4',[$productType,$id]);

        $results = array(
            'mainCategory' => $mainCategory,
            'product' => $product,
            'relatedProducts' => $relatedProducts,
        );
        return view('productDetails')->with($results);
    }

    public function contactUs(){
        return view('contactUs');
    }

    public function gallery(){
        $galleryImages = DB::select('SELECT * FROM gallery_images ORDER BY created_at DESC');
        $results = array(
            'galleryImages' => $galleryImages,
        );
        return view('gallery')->with($results);
    }

    public function cart(){
        if(!Session::has('cart')) {
            return view('cart', ['products' => null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        $results = array(
            'products' => $cart->items,
            'totalPrice' => $cart->totalPrice
        );

        return view('cart')->with($results);
    }

    public function checkout(){
        if(!Session::has('cart')) {
            return view('cart', ['products' => null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        $results = array(
            'products' => $cart->items,
            'totalPrice' => $cart->totalPrice
        );

        return view('checkout')->with($results);
    }

    public function sendMessage(Request $request){

        $name = $request->name;
        $email = $request->email;
        $bodyMessage = $request->message;

        $data = array(
            'name' => $name,
            'email' => $email,
            'bodyMessage' => $bodyMessage,
        );

        Mail::send('emails.contact',$data,function($message) use ($data){
            $message->from($data['email']);
            $message->to('support@innovativedevbugs.com');
            $message->subject('BathroomBuddy: Customer message');
        });

        Session::flash('success','Message sent');

        return back();
    }

    public function addToCart(Request $request){
        $product = DB::select('SELECT * FROM products WHERE id = ?',[$request->id]);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $request->id);

        $request->session()->put('cart', $cart);
//        dd($request->session()->get('cart'));
//        return back();

        return response()->json('success');

//        return Response::json('success');

    }

    public function getReduceByOne($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);

        Session::put('cart', $cart);

        return response()->json('success');
    }

    public function getRemoveItem($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        Session::put('cart', $cart);

        return response()->json('success');
    }

    public function checkoutProcessing(Request $request){

//        dd($request->all());

        $token = $request->stripeToken;
        $firstName = $request->firstName;
        $lastName = $request->lastName;
        $email = $request->email;
        $phone = $request->phone;
        $country = $request->country;
        $address = $request->address;
        $postalCode = $request->postalCode;
        $state = $request->state;
        $cardHolderName = $request->cardHolderName;
        $orderDate = date("d/m/Y");
        $orderTime = date("h:i a");

        if(!Session::has('cart')) {
            return redirect('cart');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        Stripe::setApiKey('sk_test_56pKh53rJA8zsXfy6wRfh2lA');
        try{
            $charge = Charge::create([
                'amount' => $cart->totalPrice * 100,
                'currency' => 'aud',
                'description' => $cardHolderName,
                'source' => $token,
            ]);
            $order = new Order();
            $order->cus_name = $firstName." ".$lastName;
            $order->cus_email = $email;
            $order->cus_phone = $phone;
            $order->cus_country = $country;
            $order->cus_address = $address;
            $order->cus_postcode = $postalCode;
            $order->cus_state = $state;
            $order->order_date = $orderDate;
            $order->order_time = $orderTime;
            $order->order_total_amount = $cart->totalPrice;
            $order->order_details = serialize($cart);
            $order->payment_id = $charge->id;
            $order->save();
        } catch(\Exception $e){
            return redirect('checkout')->with('error', $e->getMessage());
        }


        $data = array(
            'name' => $firstName." ".$lastName,
            'email' => $email,
            'address' => $address.",".$state." ".$postalCode."-".$country,
            'date' => $orderDate."-".$orderTime,
            'cartItems' => $cart->items,
            'totalAmount' => $cart->totalPrice,
        );

        Mail::send('emails.order',$data,function($message) use ($data){
            $message->from('support@innovativedevbugs.com', 'BathroomBuddy');
            $message->to($data['email']);
            $message->subject('BathroomBuddy: Order Details');
        });

        Session::forget('cart');
        return redirect('/')->with('success', 'Order placed successfully!!!');
    }
}
