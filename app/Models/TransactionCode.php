<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class TransactionCode extends Model
{
    protected $table = 'transaction_codes';
    protected $primaryKey = 'id';
     protected $fillable = [
          'transaction_type',
          'code',
          'description',
          'starting',
          'increment',
          'prefix',
          'suffix',
          'active',
          'team',
          'format',
        ];
     use HasFactory;
}
