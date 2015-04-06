DEVELOP MASTER TABLE ADMINISTRATION : Generate CRUDs
----------------------------------------------------

- Generate CRUDs (with **Yii2 Gii**)

```sh
- Model Class : adipriyantobpn\adminlte\models\tables\MASTER_TABLE_NAME
- Search Model Class : adipriyantobpn\adminlte\models\MASTER_TABLE_NAMESearch
- Controller Class : adipriyantobpn\adminlte\controllers\admin\MASTER_TABLE_NAMEController
- View Path : @vendor/adipriyantobpn/yii2-adminlte/views/admin/master-table-name
- Base Controller Class : yii\web\Controller
- Widget Used in Index Page : GridView
- Message Category : adipriyantobpn/yii2-adminlte 
- Code Template : default
```

results :

```sh
Generating code using template "D:\sourceCode\web\htdocs\w\00_labs\yii2-my-playground/vendor\yiisoft\yii2-gii\generators\crud/default"...

 generated D:\sourceCode\web\htdocs\w\00_labs\yii2-my-playground/vendor\adipriyantobpn\yii2-adminlte\controllers\admin\MASTER_TABLE_NAMEController.php

 generated D:\sourceCode\web\htdocs\w\00_labs\yii2-my-playground/vendor\adipriyantobpn\yii2-adminlte\models\MASTER_TABLE_NAMESearch.php

 generated D:\sourceCode\web\htdocs\w\00_labs\yii2-my-playground/vendor\adipriyantobpn\yii2-adminlte\views\admin\master-table-name\_form.php

 generated D:\sourceCode\web\htdocs\w\00_labs\yii2-my-playground/vendor\adipriyantobpn\yii2-adminlte\views\admin\master-table-name\_search.php

 generated D:\sourceCode\web\htdocs\w\00_labs\yii2-my-playground/vendor\adipriyantobpn\yii2-adminlte\views\admin\master-table-name\create.php

 generated D:\sourceCode\web\htdocs\w\00_labs\yii2-my-playground/vendor\adipriyantobpn\yii2-adminlte\views\admin\master-table-name\index.php

 generated D:\sourceCode\web\htdocs\w\00_labs\yii2-my-playground/vendor\adipriyantobpn\yii2-adminlte\views\admin\master-table-name\update.php

 generated D:\sourceCode\web\htdocs\w\00_labs\yii2-my-playground/vendor\adipriyantobpn\yii2-adminlte\views\admin\master-table-name\view.php

done!
```

- Then repeat the process for all tables