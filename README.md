# jojo

jojo, fill Vue in Yii!

This project is based on Yii2.

## How to use

- configure `config/db.php` depend on your environment.
    
    if there is no `config/db.php` exists, use code below as the template to create that file, then you may need to modify this file to fit your environment.
```php
<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=mysql;dbname=jojo',
    'username' => 'default',
    'password' => 'secret',
    'charset' => 'utf8',
];
```

- run `composer install`.
- run `yii migrate --migrationPath=@yii/rbac/migrations`.
- run `yii migrate`.

All it's done!

> The account of administrator is `admin/123456`.

> Sometimes, you may find some urls end with `.html`, this may cause server error, you should remove the suffix `.html`.