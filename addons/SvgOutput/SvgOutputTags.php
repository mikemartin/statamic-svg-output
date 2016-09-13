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
        $pattern = '/(<svg\s+.*?class=".*?)(".*)/';
        $hasClass = preg_match($pattern, $svg);
        // Append class to SVG
        if ($hasClass) {
          $output = preg_replace($pattern,'$1 '. $class .'$2',$svg);
        } else {
          $output = str_replace('<svg ', '<svg class="' . $class . '" ', $svg);
        }
        return $output;
    }
}
