<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class TaxTable extends Model
{
    protected $table = 'tax_tables';
    protected $primaryKey = 'id';
     protected $fillable = [
          'account',
        ];
     use HasFactory;
}
