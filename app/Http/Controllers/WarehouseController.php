<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    public function index(){
        $invent = Warehouse::find(1);

        dd($invent->products->where('CVE_ART', 'BO09-A'));
        
        // foreach($invet->products as $product){
        //     echo $product->DESCR;
        //     echo $product->EXIST;
        //     echo '<br>';
        // }
    }
}
