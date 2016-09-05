<?php

namespace Statamic\Addons\RawAsset;

use Statamic\API\Asset;
use Statamic\Extend\Tags;

class RawAssetTags extends Tags
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
