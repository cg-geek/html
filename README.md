# Html
A package for processing and building html markup, attributes and styles.

## Installation
You can install the package:

```bash
composer require bu0nq/html
```

Or you could directly reference it into your `composer.json` file as a dependency

```json
{
    "require": {
        "bu0nq/html": "^1.0"
    }
}
```
or from the repository
```json
{
    "type": "vcs",
    "url": "https://github.com/bu0nq/html"
}
```

## Examples of HtmlKernel

```php
use Atom\Html\HtmlKernel;
```

### Attribute
```php
HtmlKernel::attribute('id', 'one | two')->attribute('class', ['one', 'two'])->get();
```
Output
```html
id="one two" class="one two"
```
Scheme
```php
HtmlKernel::attribute(
    string $name, array|string $content
) : object ->get(
    bool $filled = true, bool $indent = false
) : string;
```

### Style
```php
HtmlKernel::style('background', 'black')->style('font-size', ['12px'])->get();
```
Output
```html
style="background: black; font-size: 12px;"
```
Scheme
```php
HtmlKernel::style(
    string $name, array|string $content
) : object ->get(
    bool $filled = true, bool $indent = false, bool $layout = false
) : string;
```

### Tag
Opening tag
```php
HtmlKernel::tag('div', 0)->attribute('class', ['one', 'two'])->style('background', ['black'])->get();
```
Closing tag
```php
HtmlKernel::tag('div', 1)->get();
```
Output
```html
<div class="one two" style="background: black;">

</div>
```
Scheme
```php
HtmlKernel::tag(
    string $name, int $type
) : object ->get(
    bool $filled = true
) : string;
```

## Examples of HtmlPlugin

```php
use Atom\Html\HtmlPlugin;
```
