<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description', 'image'];

    public function getImagesFromDescription() {
        preg_match_all('/<img[^>]+>/i', $this->description, $result);
        return $result[0];
    }

    public function getDescriptionWithoutImages() {
        return preg_replace('/<img[^>]+>/i', '', $this->description);
    }
}
