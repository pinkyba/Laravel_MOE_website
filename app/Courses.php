<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Courses extends Model
{
    protected $fillable = [
            'name','price', 'discount', 'description', 'access', 'duration', 'certificate', 'note', 'category_id'
        ];


    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
