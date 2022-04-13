<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'picture',
        'progress',
        'active',
        'language_id'
    ];

    public function languages() {
        return $this->belongsToMany(Language::class, 'project_language');
    }

    public function language() {
        return $this->belongsTo(language::class);
    }


}
