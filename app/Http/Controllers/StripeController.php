<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Session;
use Stripe;
use Illuminate\Support\Facades\DB;

class StripeController extends Controller
{
    public function stripe($id)
    {
        $product = DB::table('products')->where('active',1)->where('id', $id)->first();
        $data['product'] = $product;
        $data['size'] = DB::table('sizes')->where('id', $product->size_id)->first();

        return view('pages.stripe', $data);
    }

    public function stripePost(Request $request)
    {
        $price = $request->price;
        $user = $request->user;
        $product = $request->product;
        $email = $request->email;
        $product_id = $request->product_id;

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => $price * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => $product,
        ]);

        $order = new Order;
        $order->product_id = $product_id;
        $order->user = $user;
        $order->email = $email;
        $order->status = 1;
        $order->save();

        Session::flash('success', 'Payment successful!');

        return back();
    }
}
