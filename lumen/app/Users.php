<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Users extends Model {
    protected $fillable = [
        'id',
        'name',
        'lastname',
        'email',
        'telephone',
    ];

    public static $rules = [
        "name" => "required|max:120",
        "lastname" => "required|max:120",
        "email" => "required|max:60",
        "telephone" => "required|max:32",
    ];
}
