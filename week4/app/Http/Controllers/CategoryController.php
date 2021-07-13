<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    const CATEGORIES = [
        'CT001' => ['code' => 'CT001', 'name' => 'PHP'],
    'CT002' => ['code' => 'CT002', 'name' => 'JavaScript'],
    'CT003' => ['code' => 'CT003', 'name' => 'Python'],
];
function list() {
    return view('category-list', [
    'categories' => self::CATEGORIES, 
    
    ]);
    }
    function view($code) {
        return view('category-view', [
        'category' =>  self::CATEGORIES[$code], 
        'products' => ProductController::PRODUCTS,   
        ]);
        }
}
