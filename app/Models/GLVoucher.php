<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class GLVoucher extends Model
{
    protected $table = 'g_l_vouchers';
    protected $primaryKey = 'id';
     protected $fillable = [
          'voucher_number',
          'reference',
          'date',
          'year',
          'period',
          'header_message',
          'team',
          'team_member',
        ];
     use HasFactory;
}
