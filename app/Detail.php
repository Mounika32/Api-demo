<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    // 
    protected $fillable = [

        'name', 'email_id','mobile','dob','city','loan_amount','occupation','mon_income','sal_rec','sal_dep','dt_trans',

    ];
}
