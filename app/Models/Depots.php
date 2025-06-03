<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Depots extends Model
{
    protected $table = 'depots';
    protected $primaryKey = 'id';
     protected $fillable = [
          'depotrow',
          'address1',
          'stateprovince',
          'salutation',
          'lastname',
          'phone',
          'taxscope',
          'portofdischarge',
          'remarks',
          'i_d',
          'depotname',
          'address2',
          'zippostalcode',
          'firstname',
          'title',
          'fax',
          'taxnumber',
          'alternatecode',
          'name',
          'city',
          'country',
          'middlename',
          'email',
          'url',
          'warehouse',
          'shortname',
          'depottype',
        ];
     use HasFactory;
}
