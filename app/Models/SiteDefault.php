<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class SiteDefault extends Model
{
    protected $table = 'site_defaults';
    protected $primaryKey = 'id';
     protected $fillable = [
          'sitename',
          'object',
          'country',
          'siccode',
          'discount',
          'warehouse',
          'salesperson',
          'shippingproduct',
          'section',
          'dropship',
          'printtax',
          'emailsuccess',
          'bankcode',
          'paypaluserid',
          'itemgroup',
          'customerprefix',
          'unitofdistance',
          'controlaccountar',
          'agent',
          'market',
          'projectmanager',
          'residence',
          'project',
          'active',
          'timecutoff',
          'emailfailure',
          'accountnumber',
          'taxcode',
          'fulfilmentcategory',
          'orderprefix',
          'unitofweight',
          'customergroup',
          'creditlimit',
          'comission',
          'region',
          'paymentcode',
          'saturdaydelivery',
          'codebasis',
          'priceincludetax',
          'daystodeliver',
          'bank',
          'accountname',
          'taxscope',
          'showsupplier',
          'qoutationprefix',
          'city',
          'pricegroup',
          'creditterms',
          'currency',
          'territory',
          'shippingcode',
          'division',
          'backordertype',
          'invoicingrule',
          'email',
          'branch',
          'paymentcodes',
          'taxcategory',
      ];
      use HasFactory;
}