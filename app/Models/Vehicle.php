<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Vehicle extends Model
{
    protected $table = 'vehicles';
    protected $primaryKey = 'id';
     protected $fillable = [
          'vehicle',
          'description',
          'vehicletype',
          'length',
          'width',
          'height',
          'ctsize',
          'notes',
          'lulabelno',
          'owner',
          'mlwkg',
          'uwkg',
          'tonnage',
          'budcapacity',
          'cttype',
          'dg',
          'deliveryzone',
          'remarks',
          'effectivitydate',
          'team',
          'documenttypedocumentnumber',
          'expirationdate',
        ];
     use HasFactory;
}
