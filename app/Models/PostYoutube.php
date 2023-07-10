<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostYoutube extends Model {
    protected $table = 'post_youtube';

    protected $fillable = ['title', 'url', 'image', 'category_id'];

    protected $appends = ['idyoutube'];

    public function getIdYoutubeAttribute() {
        if (!is_null($this->url)) {
            $id = explode('v=', $this->url);

            return $id[1] ?? '';
        }

        return "";
    }
}
