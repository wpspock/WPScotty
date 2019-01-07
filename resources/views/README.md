## Views

Here you can create your views and override the standard views. You can override the standard view, just create one of followinf files:

* header.php
* footer.php

You can include your view by using:

```php
<?php spock()->view('myview.php')
```

The file `myview.php` will be loaded from your theme folder `/resources/views/myview.php`.

Of course, you can use any subfolder

```php
<?php spock()->view('myfolder/myview.php')
```

The file `myview.php` will be loaded from your theme folder `/resources/views/myfolder/myview.php`.
