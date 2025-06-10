<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Holiday extends Model
{
    protected $table = 'holidays';
    protected $primaryKey = 'id';
    protected $fillable = [
          'locale',
          'date',
          'available',
          'notes',
        ];
     use HasFactory;
}
