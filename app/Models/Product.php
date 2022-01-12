<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $connection = "firebird";
    protected $primaryKey = "CVE_ART";
    protected $table ="INVE01";
    PUBLIC $timestamps = false;

    public function brand(){
        return $this->belongsTo(Brand::class, 'LIN_PROD', 'CVE_LIN');
    }

    public function warehouses(){
        return $this->belongsToMany(Warehouse::class, 'MULT01', "CVE_ART", "CVE_ALM");
    }
}
