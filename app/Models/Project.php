<?php

namespace App\Models;

use App\Notifications\NewProject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Project extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

//    public function registerMediaCollections(): void
//    {
//        $this->addMediaCollection('project_gallery');
//    }

    protected static function booted()
    {
        static::created(function ($project) {
            User::find(1)->notify(new NewProject($project));
        });
    }
}
