<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Mail;

use function Ramsey\Uuid\v1;

class CheckOutController extends Controller
{
    public function viewCheckOut()
    {
        $carts = Cart::content();
        $total = Cart::priceTotal();
        $subtotal = Cart::subtotal();

        return view('web.checkout.index', compact('carts', 'total', 'subtotal'));
    }

    public function addOrder(Request $request)
    {
        if ($request->payment_type == 'pay_later') {
            //01. Add order
            $order = Order::create($request->all());
            //02. Add order detail
            $carts = Cart::content();

            foreach ($carts as $cart) {
                $data = [
                    'order_id' => $order->id,
                    'product_id' => $cart->id,
                    'qty' => $cart->qty,
                    'amount' => $cart->price,
                    'total' => $cart->price * $cart->qty,
                ];

                OrderDetail::create($data);
            }
            //03. Send email
            $total = Cart::priceTotal();
            $subtotal = Cart::subtotal();

            $this->sendEmail($order, $total, $subtotal);

            //04. Delete order
            Cart::destroy();

            //05. Return results
            return redirect('checkout/notification');
        } else {
            return "Online payment method is not supported";
        }
    }
    public function returnNotification()
    {
        $notification = session('notification');
        $notification = "Success! You will pay on delivery. Please check your email.";
        return view('web.checkout.notification',compact('notification'));
    }

    private function sendEmail($order, $total, $subtotal)
    {
        $email_to = $order->email;
        Mail::send('web.checkout.email', compact('order', 'total', 'subtotal'), function ($message) use ($email_to) {
            $message->from('lehongphu18i1@gmail.com', 'Molla Shop');
            $message->to($email_to, $email_to);
            $message->subject('Order Notification');
        });
    }
}
