DEVELOP : Generate Module
-------------------------

- Generate Module (with **Yii2 Gii**)

*NOTE : module generation only can be done if the library already imported using Composer & exist in vendor dir*

```sh
- Module Class : adipriyantobpn\adminlte\Module
- Module ID : MODULE_ID
- Code Template : default
```

results :

```sh
Generating code using template "D:\sourceCode\web\htdocs\w\00_labs\yii2-my-playground/vendor\yiisoft\yii2-gii\generators\module/default"...

 generated D:\sourceCode\web\htdocs\w\00_labs\yii2-my-playground/vendor\adipriyantobpn\yii2-adminlte\Module.php

 generated D:\sourceCode\web\htdocs\w\00_labs\yii2-my-playground/vendor\adipriyantobpn\yii2-adminlte\controllers\DefaultController.php

 generated D:\sourceCode\web\htdocs\w\00_labs\yii2-my-playground/vendor\adipriyantobpn\yii2-adminlte\views\default\index.php

done!
```

register to main webapp :

```php
<?php 
    ......
    'modules' => [
        'MODULE_ID' => [
            'class' => 'adipriyantobpn\adminlte\Module',
        ],
    ],
    ......

```

- Cleaning up

*NOTE : delete ` AutoloadExample.php `*