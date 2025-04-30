<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactEntry extends Model
{
    protected $fillable = [
        'email',
        'message',
<<<<<<< HEAD
        'first_name',
=======
        'name',
>>>>>>> aurmich/dev
    ];
}
