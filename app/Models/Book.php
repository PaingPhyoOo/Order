<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable=[
        'name','tel_no','address','book_name'
    ];
    public function setCatAttribute($value)

    {

        $this->attributes['book_name'] = json_encode($value);

    }
    public function getCatAttribute($value)

    {

        return $this->attributes['book_name'] = json_decode($value);

    }
  
}
