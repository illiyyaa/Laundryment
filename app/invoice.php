<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    protected $table = "invoice";

    protected $fillable = ['no_order','nama','alamat','items','total'];
}