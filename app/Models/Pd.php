<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Pd extends Model
{
    protected $table = 'pds';
    protected $primaryKey = 'id';
     protected $fillable = [
          'pd_row',
          'unit_rate',
          'rate_qty',
          'type',
          'item',
          'bom_key',
          'entry_date',
          'specifications',
          'additional_requirements',
          'material_warehouse',
        ];
    use HasFactory;
}
