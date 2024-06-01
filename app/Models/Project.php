<?php

namespace App\Models;
use Illuminate\Support\Facades\App;
use App\Models\Skill;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }
}
