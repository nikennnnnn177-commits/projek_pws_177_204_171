<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Helpers\ApiFormatter;
use App\Helpers\ActivityLogger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    // READ ALL
    public function getOrder()
    {
        return ApiFormatter::createJson(
            200,
            'Orders retrieved',
            Order::all()
        );
    }

    // READ BY ID
    public function getOrderById($id)
    {
        return ApiFormatter::createJson(
            200,
            'Order retrieved',
            Order::findOrFail($id)
        );
    }

    // CREATE
    public function createOrder(Request $request)
    {
        $request->validate([
            'product_id'  => 'required|exists:products,id',
            'quantity'    => 'required|integer|min:1',
            'total_price' => 'required|numeric|min:0'
        ]);

        $order = Order::create([
            'user_id'     => Auth::id(),
            'product_id'  => $request->product_id,
            'quantity'    => $request->quantity,
            'total_price' => $request->total_price,
            'status'      => 'pending'
        ]);

        ActivityLogger::log(
            'orders',
            'CREATE',
            "Order #{$order->id} created"
        );

        return ApiFormatter::createJson(
            201,
            'Order created',
            $order
        );
    }

    // UPDATE
public function updateOrder(Request $request, $id)
{
    $request->validate([
        'status' => 'in:pending,paid,cancelled',
        'total_price' => 'required|numeric'
    ]);

    $order = Order::findOrFail($id);
    $order->update([
        'status' => $request->status,
        'total_price' => $request->total_price
    ]);

    return ApiFormatter::createJson(
        200,
        'Order updated',
        $order
    );
}

    // DELETE
    public function deleteOrder($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        ActivityLogger::log(
            'orders',
            'DELETE',
            "Order #{$id} deleted"
        );

        return ApiFormatter::createJson(
            200,
            'Order deleted',
            null
        );
    }
}
