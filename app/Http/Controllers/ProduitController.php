<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class ProduitController extends Controller
{
    public function produit(){
    return view('listeproduit');
    }
}
