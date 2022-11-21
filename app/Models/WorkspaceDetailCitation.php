<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkspaceDetailCitation extends Model
{
    use HasFactory;

    public function workspaceDetail()
    {
        return $this->belongsTo(WorkspaceDetail::class);
    }

    public function phrase()
    {
        return $this->belongsTo(Phrase::class);
    }
}
