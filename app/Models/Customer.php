<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'age', 'gender', 'wlingtoWork', 'languge'
    ];

    public function setData($data)
    {
        $this->name = $data->name;
        $this->age = $data->age;
        $this->gender = $data->gender;
        $this->wlingtoWork = $data->wlingtoWork;
        $this->languge = serialize($data->language);
    }
}
