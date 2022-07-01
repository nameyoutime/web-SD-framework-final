<?php

namespace App\Http\Controllers;

//use App\Models\Order;
use App\Models\Order;
use App\Models\User;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use function Symfony\Component\Mime\from;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $orders = Order::all();
        foreach ($orders as $order) {
            $totalPrice = 0;
            foreach ($order->products as $product) {
                $total = $product->pivot->quantity * $product->price;
                $totalPrice += $total;
            }
            if ($order->total == 0) {
                $temp = Order::find($order->id);
                if ($totalPrice == 0) {
                    $temp->total = -1;
                    $order->total = -1;
                }else{
                    $temp->total = $totalPrice;
                    $order->total = $totalPrice;
                }
                $temp->save();

            }
        }
//        Debugbar::info($orders);

        return View('pages.order.index', ['orders' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Order $order
     * @return void
     */
    public function show(Order $order)
    {
        $res = Order::find($order->id);
        DebugBar::info($res->total);
        return View('pages.order.show', ['order' => $res]);

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function changeStatus($id, $status)
    {
        $order= Order::findorfail($id);
        $order->status = $status;
        $order->save();
        return redirect()->route('orders.index');
    }
    public function dateTo(Request $request)
    {
        $to = $request->input('to');
        $from = $request->input('from');
        if($to==null || $from==null){
            return redirect()->route('orders.index');

        }

        $querry = Order::where('delivery_date','>=',$from)->where('delivery_date','<=',$to)->get();
        return View('pages.order.index', ['orders' => $querry]);

    }


}
