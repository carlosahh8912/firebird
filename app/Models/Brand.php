<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Brand extends Model
{
    use HasFactory;

    protected $connection = "firebird";
    protected $primaryKey = "CVE_LIN";
    protected $table = "CLIN01";
    public $timestamps = false;


    public function products(){
        return $this->hasMany(Product::class, 'LIN_PROD', 'CVE_LIN');
    }
}
