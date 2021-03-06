<?php

namespace Grav\Plugin\Flickr;
require_once(__DIR__.'/Photo.php');
use Grav\Plugin\Flickr\Photo;

use Grav\Common\Grav;

class Photoset
{
    private $photos;
    private $info;
    private $api;
    
    public function __construct($info, $photos, $api)
    {
        $this->info = $info;
        $this->photos = $photos;
        $this->api = $api;
    }

    
    public function title() {
        return $this->info["title"]["_content"];
    }
    public function description() {
        return $this->info["description"]["_content"];
    }
    
    public function photos() {
        $photos = [];
        foreach($this->photos['photo'] as $photo)
            $photos[] = new Photo($photo);
        return $photos;
    }
}
