# Simple-Flash

## Install
```php
require 'Flash/Flash.php'
```

## Usage 
Here's a basic usage example:

```php
Flash::set_message('key', 'value');

<h1>
    Flash::display_message('key');
</h1>    

Flash::delete_message('key');

```