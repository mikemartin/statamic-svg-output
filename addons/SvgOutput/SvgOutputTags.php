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
        $output = $asset->disk()->get($asset->path());
        $output = str_replace('<svg ', '<svg class="' . $class . '" ', $output);

        return $output;
    }

}
