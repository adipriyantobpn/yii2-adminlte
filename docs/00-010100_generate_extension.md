DEVELOP : Generate Extension
----------------------------

- Generate Extension (with **Yii2 Gii**)

```sh
- Vendor Name : adipriyantobpn 
- Package Name : yii2-adminlte 
- Namespace : adipriyantobpn\adminlte\ 
- Type : yii2-extension 
- Keywords : yii2,extension,adminlte 
- License : MIT 
- Title : Yii2 AdminLTE 
- Description : AdminLTE template for Yii2 
- Author Name : Adi Priyanto 
- Author Email : MIT 
- Output Path : @app/runtime/tmp-extensions
- Code Template : default
```

- Track it with **Git**

```sh
$ git init
$ git add .
$ git commit -m "Initial installation : adipriyantobpn/yii2-adminlte"
```

*initialize ` git flow ` here ! (can use **SmartGit** or **Sourcetree**)*

- Upload it into **Private VCS Server** (BitBucket)

```sh
$ git remote add origin https://github.com/adipriyantobpn/yii2-adminlte.git
$ git push -u origin --all
$ git push -u origin --tags
```

- Import it with **Composer**

```js
"repositories":[
    {
        "type": "git",
        "url": "https://github.com/adipriyantobpn/yii2-adminlte.git"
    }
],
"require": {
    ...
    "adipriyantobpn/yii2-adminlte": "dev-develop"
},
```

*execute ` composer update `*

```sh
$ composer update
```