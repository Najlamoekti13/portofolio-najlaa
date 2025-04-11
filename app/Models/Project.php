<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // Kolom yang boleh diisi langsung via form (mass assignment)
    protected $fillable = ['title', 'description'];
}
