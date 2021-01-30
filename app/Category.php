<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function getCountAttribute() {
        return Article::where('category_id', $this->id)->count();
    }
}
