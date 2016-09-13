<?php

namespace Statamic\Addons\SvgOutput;

use Statamic\API\Asset;
use Statamic\Extend\Tags;

class SvgOutputTags extends Tags
{
    public function index()
    {
        $asset = Asset::find($this->get('id'));
        $class = $this->get('class');
        $svg = $asset->disk()->get($asset->path());
        // Append class to SVG
        $output = preg_replace('/(<svg\s+.*?class=".*?)(".*)/','$1 '. $class .'$2',$svg);
        return $output;
    }

}
