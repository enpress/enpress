<?php

namespace App\Models;

class Post extends \Enpress\Models\Post
{

    /*
     * Column to use for route model binding
     */
    public function getRouteKeyName()
    {
        return 'post_name';
    }

}
