<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class codes extends Model
{
    protected $table = 'codes';
    protected $primaryKey = 'id';
     protected $fillable = [
          'code_type',
          'code',
          'detailed_description',
          'alternate_code',
          'active',
          'team',
          'property_list',
      ];
      use HasFactory;
    
}
