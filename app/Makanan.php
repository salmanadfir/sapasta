<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    //
    protected $table ="makanan";

    protected $guarded =['id', 'created_at', 'updated_at'];
}
