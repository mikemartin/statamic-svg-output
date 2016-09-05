# SVG Output Tag ![Statamic 2.0](https://img.shields.io/badge/statamic-2.0-blue.svg?style=flat-square)

Render the output of any SVG file in your asset folder using the ID.

## Installation
1. Copy over the files into the `site` folder.
2. Output the raw SVG asset using the new `svg_output` tag!

## Parameters

- **ID** - The ID of the file in your asset folder

- **Class** - Allows you to add a class to the tag

## Example

```
{{ svg_output id="{id}" class="class-name" }}
```

```
<svg class="class-name">...</svg>
```
