<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminPanel extends Model
{
    use HasFactory;

            protected $table = 'admin_panels';
            protected $guarded = []; 
}
