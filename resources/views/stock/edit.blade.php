@extends('stock.layout')


@section('content')

<br><br><br>

<div class='row' style="margin-left:40px;margin-right:40px;">

    <div class='col-lg-12 margin-tb'>
        <div class="pull-left">
            <h2>Edit Stock Data</h2>
        </div>

        <div class="pull-right">
            <a class="btn btn-success" href="{{route('stock.index')}}">Back</a>
        </div>
    </div>
</div>

<form action ="{{url('update/stock/'.$stock->id)}}" method = "POST" enctype= "multipart/form-data"  >    
      @csrf
            <div class="row" style="margin:20px;">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>date</strong>
                        <input type="text" name="date" class="form-control" value="{{$stock->date}}">
                    </div>
                </div>
            
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>trade_code</strong>
                        <input type="text" name="trade_code" class="form-control" value="{{$stock->trade_code}}">
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>high</strong>
                        <input type="text" name="high" class="form-control" value="{{$stock->high}}">
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>low</strong>
                        <input type="text" name="low" class="form-control" value="{{$stock->low}}">
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>open</strong>
                        <input type="text" name="open" class="form-control" value="{{$stock->open}}">
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>close</strong>
                        <input type="text" name="close" class="form-control" value="{{$stock->close}}">
                    </div>
                </div>  
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>volume</strong>
                        <input type="text" name="volume" class="form-control" value="{{$stock->volume}}">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <button type="submit" class="btn btn-primary" >Submit</button>
                </div>

            </div>    
</form>