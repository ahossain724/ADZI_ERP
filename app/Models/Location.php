<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Location extends Model
{
    protected $table = 'locations';
    protected $primaryKey = 'id';
     protected $fillable = [
          'location',
          'locationtype',
          'region',
          'country',
          'effectivitydate',
          'expirationdate',
          'depotname',
          'defaultpaymentcode',
          'timeslots',
          'ipaddress',
          'titleimageurl',
          'backgroundimageurl',
        ];
     use HasFactory;
}
