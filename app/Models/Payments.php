<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    protected $table = 'payments';
    protected $fillable=[
       'company_id','payment_id','payer_id','payer_email','money','date','currency','payment_startus',
    ];
}
