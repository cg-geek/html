# Html
A package for processing and building html markup, attributes and styles.

## Installation
You can install the package:

```bash
composer require bu0nq/html
```

or include the dependency in the composer.json file:

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

### Attribute
```php
HtmlPlugin::attribute('id', 'one | two');
```
Output
```html
id="one two" class="one two"
```
Scheme
```php
HtmlPlugin::attribute(
    string $name, array|string $content, array $setting = [
        bool $filled = true, bool $indent = false
    ]
) : string;
```

### Attributes
```php
HtmlPlugin::attributes(['id' => 'one | two', 'class' => ['one', 'two']]);
```
Output
```html
id="one two" class="one two"
```
Scheme
```php
HtmlPlugin::attributes(
    array $items, array $setting = [
        bool $filled = true, bool $indent = false
    ]
) : string;
```

### Style
```php
HtmlPlugin::style('background', 'black');
```
Output
```html
background: black;
```
Scheme
```php
HtmlPlugin::style(
    string $name, array|string $content, array $setting = [
        bool $filled = true, bool $indent = false, bool $layout = false
    ]
) : string;
```

### Styles
```php
HtmlPlugin::styles(['background' => 'black', 'font-size' => ['12px']]);
```
Output
```html
style="background: black; font-size: 12px;"
```
Scheme
```php
HtmlPlugin::styles(
    array $items, array $setting = [
        bool $filled = true, bool $indent = false, bool $layout = true
    ]
) : string;
```

### Tag
Opening tag
```php
HtmlPlugin::tag('div', 0, ['class' => 'one | two'], ['background' => 'black']);
```
Closing tag
```php
HtmlPlugin::tag('div', 1);
```
Output
```html
<div class="one two" style="background: black;">

</div>
```
Scheme
```php
HtmlPlugin::tag(
    string $name, int $type, array $attributes, array $style, array $setting = [
        bool $filled = true
    ]
) : string;
```

## Integration
* Laravel
Please see [bu0nq/html-laravel](https://github.com/bu0nq/html-laravel)

## Requirements
* PHP: ^7.2.5
* bu0nq/util: ^1.0

## License
The MIT License (MIT). Please see [License](https://github.com/bu0nq/html/blob/master/LICENSE) File for more information.
