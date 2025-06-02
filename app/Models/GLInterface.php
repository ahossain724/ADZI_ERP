<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class GLInterface extends Model
{
    protected $table = 'g_l_interfaces';
    protected $primaryKey = 'id';
     protected $fillable = [
          'glinterfacetype',
          'itemgroup',
          'customersupplieragent',
          'warehouse',
          'account',
        ];
     use HasFactory;
}