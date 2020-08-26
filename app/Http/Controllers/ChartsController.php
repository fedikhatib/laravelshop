<?php


namespace App\Http\Controllers;
use App\Order;
use App\User;
use App\Charts\OrderCharts;
use Illuminate\Http\Request;
use DB;

class ChartsController extends Controller

{
     public function index(Request $request)
    {
        //$users = User::groupBy('created_at')->get();
        $users = User::pluck('id','created_at');
        $orders = Order::pluck('id','created_at');

        $chart=new OrderCharts;
        $chart->labels($users->keys());
        $chart->dataset('Users', 'bar', $users->values());

        //$chart2=new OrderCharts;
        $chart->labels($orders->keys());
        $chart->dataset('Orders', 'bar', $orders->values())->backgroundColor('blue');
        


        return view('stat',compact('chart'));
    }
    
    
}