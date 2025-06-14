<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class UserDoc extends Model
{
     protected $table = 'user_docs';
     protected $primaryKey = 'id';
     protected $fillable = [
          'documentname',
          'title',
          'sourcedocuments',
          'ordertype',
          'referencefield',
          'infogroups',
          'printorgname',
          'printorgaddress',
          'printlogo',
          'printcustomerdetails',
          'printdeliverydetails',
          'printstandardfooter',
          'active',
          'header',
          'footer',
        ];
     use HasFactory;
}
