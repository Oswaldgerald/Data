<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class BCX extends Model
{
    protected $fillable = [
        'stan',
        'Card_no',
        'Terminal_id',
        'Amount',
        'Charge',
        'Account_no',
        'rrn',
        'status',
        'sheet_no',
    ];

}
