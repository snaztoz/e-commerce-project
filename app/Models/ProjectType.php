<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectType extends Model
{
    use HasFactory;

    public function structures()
    {
        return $this->hasMany(ProjectStructure::class);
    }

    public function workspaces()
    {
        return $this->hasMany(Workspace::class);
    }
}
