<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cake extends Model
{
    use HasFactory;
    protected $fillable=[
        'name','tel_no','address','cake_type'
    ];
    public function setCatAttribute($value)

    {

        $this->attributes['cake_type'] = json_encode($value);

    }
    public function getCatAttribute($value)

    {

        return $this->attributes['cake_type'] = json_decode($value);

    }
  
}
