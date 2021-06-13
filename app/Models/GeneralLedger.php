<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class GeneralLedger extends Model
{
    protected $fillable = [
       'operator_id',
        'trxDescription',
        'debitAmount',
        'creditAmount',
        'closingBalance',
        'sheet_no',

    ];

}
