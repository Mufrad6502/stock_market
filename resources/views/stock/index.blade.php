@extends('stock.layout')



@section('content')

<br><br><br>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Stock Market Data</h2>
        </div>

    
    </div>
    @if($message=Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
        @endif
    <table class="table  table-striped table-hover">
        
            <tr>
                <th>id</th>
                <th>date</th>
                <th>trade_code</th>
                <th>high</th>
                <th>low</th>
                <th>open</th>
                <th>close</th>
                <th>volume</th>
                <th>Action</th>
            </tr>
        

            @foreach($stock_market_data as $market)
            <tr>
                
               
                
                <td>{{$market->id}}</td>
                <td>{{$market->date}}</td>
                <td>{{$market->trade_code}}</td>
                <td>{{$market->high}}</td>
                <td>{{$market->low}}</td>
                <td>{{$market->open}}</td>
                <td>{{$market->close}}</td>
                <td>{{$market->volume}}</td>
                <td>
                    
                    <a class=" btn btn-primary" href="{{URL::to('edit/stock/'.$market->id)}}">Edit</a>
                    
                
                </td>
                
                
                
            
            </tr>
            @endforeach
         
    </table>
</div>





@endsection