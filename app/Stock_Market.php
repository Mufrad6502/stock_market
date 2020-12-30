<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock_Market extends Model
{
    protected $fillable = [
        'id','date', 'trade_code', 'high','low','open','close','volume'
    ];
}
