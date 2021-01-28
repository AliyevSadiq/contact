<?php

namespace App\Modules\contact\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Contact
 * @package App\Modules\contact\Models
 * @mixin Builder
 */
class Contact extends Model
{
    use HasFactory;
    protected $fillable=['email','username','message'];

    protected $table='contact';

    public static $createRules=[
        'username'=>['required'],
        'email'=>['required','email'],
        'message'=>['required']
        ];

    public static $errorMessage=[
      'email.email'=>'THIS EMAIL IS INVALID',
      'email.required'=>'THIS EMAIL MUST NOT BE EMPTY!!!',
      'username.required'=>'THIS USERNAME MUST NOT BE EMPTY!!!',
      'message.required'=>'THIS MESSAGE MUST NOT BE EMPTY!!!',
    ];
}
