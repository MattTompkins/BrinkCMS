<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

use App\Models\Categoroies;
use App\Models\Tags;
use App\Models\SEOandMeta;

class Articles extends Model
{
    use HasFactory;

    public $table = "articles";



    /**
     * Data to associate with Articles
     *  - Categories
     *  - Tags
     *  - Author
     *  - SEO and Meta data
     *  - Likes & Comments (Future)
     */
}
