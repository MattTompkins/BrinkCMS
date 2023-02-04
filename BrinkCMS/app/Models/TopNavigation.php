<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopNavigation extends Model
{
    use HasFactory;

    public $table = "top_navigation";

    // needs to return posts associated with this category and 4 related tags
}
