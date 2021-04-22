<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Headlines extends Model
{
    protected $table = 'headlines';

    protected $primaryKey = 'id';

    protected $timestamp = true;
}
