<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function listP(){
        return 'List of Products';
    }

    function addP(){
        return 'add a product';
    }

    function deleteP(){
        return 'delete a product';
    }

    function updateP(){
        return 'update a product details';
    }
}