<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Rbo extends Model
{
    protected $table = 'rbos';
    protected $primaryKey = 'id';
    protected $fillable = [
          'rbo_name',
          'short_name',
          'customer_id',
          'address',
          'reference_id',
          'brand_id',
        ];
     use HasFactory;
     public function customers()
    {
        return $this->hasMany(Customer::class);
    }
      public function reference()
    {
        return $this->belongsTo(Referencetbl::class);
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
