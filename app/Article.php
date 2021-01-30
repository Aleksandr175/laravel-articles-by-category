<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    public function setTitleAttribute($value) {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function getDescriptionAttribute() {
        return Str::words($this->text, 30);
    }

    public function getDateAttribute() {
        return Carbon::parse($this->created_at)->format('d.m.Y');
    }
}
