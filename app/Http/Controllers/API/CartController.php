<?php
namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Traits\ResponseJsonTrait;

class CartController extends Controller
{
    use ResponseJsonTrait;
    protected $user;
    public function __construct()
    {
        $this->user = auth('api')->user();
    }
    public function store()
    {
        $cart = Cart::firstOrCreate(['user_id' => $this->user->id]);
        $cart->updateTotalPrice();
        return $this->sendSuccess('Cart Created Successfully!', $cart, 201);
    }
     public function index()
    {
<<<<<<< HEAD
        $cart = Cart::where('user_id', $this->user->id)->with(['cartItems.product' , 'cartItems.product.colors'])->first();
=======
        $cart = Cart::where('user_id', $this->user->id)
            ->with(['cartItems.product', 'cartItems.color'])
            ->first();
>>>>>>> fb06b1230c2414e805e4d0e9816085914eba2a68
        if (!$cart || optional($cart->cartItems)->isEmpty()) {
            return $this->sendSuccess("Cart is empty!");
        }
        return $this->sendSuccess('Cart Retrieved Successfully!', $cart);
    }
    public function deleteItems()
    {
        $cart = Cart::where('user_id', $this->user->id)->firstOrFail();
        $cart->cartItems()->delete();
        $cart->updateTotalPrice();
        return $this->sendSuccess('Cart items deleted successfully!');
    }
}