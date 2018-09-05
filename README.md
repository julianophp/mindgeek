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

## Get (SchoolSystem->transfer => Success)
```
http://localhost:8001/school-system/transfer/1
http://localhost:8001/school-system/transfer/2
http://localhost:8001/school-system/transfer/3
```

## Get (SchoolSystem->transfer => Fail)
```
http://localhost:8001/school-system/transfer/4
http://localhost:8001/school-system/transfer/5
```

## Post (Student->add => Success)
```
http://localhost:8001/student/add
{
    "name": "Maria Silva",
    "gradeList": "7;9;8",
    "schoolBoard": "CSM"
}
```

## Post (Student->add => Fail)
```
http://localhost:8001/student/add
{
    "name": "Maria Silva",
    "gradeList": "7;9;8;4;7;8;2",
    "schoolBoard": "CSM"
}
```

## Tests
```
# php ./vendor/bin/phpunit
```
