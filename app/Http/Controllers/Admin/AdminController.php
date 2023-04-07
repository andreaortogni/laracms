<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Routing\Route;
use Inertia\Inertia;

class AdminController extends Controller 
{
    
    public function create()
    {
        return Inertia::render('Admin/Dashboard', [
            // 'canResetPassword' => Route::has('password.request'),
            'status' => session('status'),
        ]);
    }

    public function categoryPage()
    {
        $defaultCategory = Category::getDefaultCategory();
        
        return Inertia::render('Admin/Categories', [
            'defaultCategory' => $defaultCategory
        ]);
    }
}