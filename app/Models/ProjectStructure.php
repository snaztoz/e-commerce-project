<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectStructure extends Model
{
    use HasFactory;

    public function projectType()
    {
        return $this->belongsTo(ProjectType::class);
    }
}
