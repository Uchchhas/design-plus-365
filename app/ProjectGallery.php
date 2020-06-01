<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectGallery extends Model
{
    protected $table = 'project_gallery';
    protected $fillable = ['title','projectGalleryImage'];
}
