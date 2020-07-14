<?php


namespace App\Http\Controllers;
use App\Order;
use App\Charts\OrderCharts;
use Illuminate\Http\Request;

class ChartsController extends Controller

{
     public function index(Request $request)
    {

        $chart=new OrderCharts;
        $chart->labels(['One', 'Two', 'Three', 'Four']);
        $chart->dataset('My dataset', 'line', [1, 2, 3, 4]);
        


        return view('stat',compact('chart'));
    }
    
    
}
