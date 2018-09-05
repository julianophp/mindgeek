# MindGeek
Testing for Backend PHP Developer
```
Author: Juliano Mesquita dos Santos
Created at: 2018-09-03
PHP Version: 7.1.13
```

## Download
```
Composer: https://getcomposer.org/download/
```

## Install
```
# composer install
```

## Start Server
```
# php -S localhost:8001 -t public/
```

## Get
```
http://localhost:8001/school-system/transfer/1
http://localhost:8001/school-system/transfer/2
http://localhost:8001/school-system/transfer/3
```

## Post
```
http://localhost:8001/student/add
{
    "name": "Maria Silva",
    "gradeList": "7;9;8",
    "schoolBoard": "CSM"
}
```

## Tests
```
# php ./vendor/bin/phpunit
```
