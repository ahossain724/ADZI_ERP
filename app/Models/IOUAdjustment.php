<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class IOUAdjustment extends Model
{
    protected $table = 'iou_adjustments';
    protected $primaryKey = 'id';
     protected $fillable = [
          'voucher_number',
          'adjustment_from',
          'amount',
          'date',
          'narration',
        ];
     use HasFactory;
}
