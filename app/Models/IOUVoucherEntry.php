<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class IOUVoucherEntry extends Model
{
    protected $table = 'iou_voucher_entries';
    protected $primaryKey = 'id';
     protected $fillable = [
          'voucher_number',
          'advance_to',
          'amount',
          'date',
          'paid_from_account',
          'narration',
        ];
     use HasFactory;
}
