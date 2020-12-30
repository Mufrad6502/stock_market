<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stock_Market;
use DB;


class StockMarketController extends Controller
{
    public function index(){

        $stock = DB::table('stock_market_data')->get();

        return view('stock.index',['stock_market_data'=>$stock]);
    }


    public function Edit($id){

        $stock = DB::table('stock_market_data')->where('id',$id)->first();
        return view('stock.edit',compact('stock'));


    }

    public function Update(Request $request, $id){
        
        $data = array();
            $data['date'] = $request->date;
            $data['trade_code'] = $request->trade_code;
            $data['high'] = $request->high;
            $data['low'] = $request->low;
            $data['open'] = $request->open;
            $data['close'] = $request->close;
            $data['volume'] = $request->volume;
          
        $stock = DB::table('stock_market_data')->where('id',$id)->update($data);
        
        return redirect()->route('stock.index')
                            ->with('success','Data Updated Successfully');
    }

}




