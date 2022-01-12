<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;

    protected $connection = "firebird";
    protected $primaryKey = "CVE_ALM";
    protected $table ="ALMACENES01";
    PUBLIC $timestamps = false;

    public function products(){
        //return $this->belongsToMany(RelatedModel, pivot_table_name, foreign_key_of_current_model_in_pivot_table, foreign_key_of_other_model_in_pivot_table);
        return $this->belongsToMany(Product::class, 'MULT01', "CVE_ALM", "CVE_ART")->wherePivot("EXIST", "!=", 0);
    }
}
