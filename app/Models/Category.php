<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * Retrieve all categories
     */
    public static function getParentCategories() 
    {
        return Category::where('is_parent', 1)->get();
    }

    /**
     * Retrieve Default category
     */
    public static function getDefaultCategory() 
    {
        return Category::where('id', 1)->first();
    }
}
