<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkspaceDetail extends Model
{
    use HasFactory;

    public function workspace()
    {
        return $this->belongsTo(Workspace::class);
    }

    public function citations()
    {
        return $this->hasMany(WorkspaceDetailCitation::class);
    }
}
