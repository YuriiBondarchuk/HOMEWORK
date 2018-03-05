<?php
/**
 * Создать класс Car. Записать в этот класс свойства brand, model, year, driver.
 * Создать экземпляры машин Toyota Corolla (2000), Mazda 6 (2015), Ford Taurus (1995) . В рамках предыдущего задания создать экземпляры класса User для нескольких пользователей системы. В свойство driver объектов класса Car записать объекты класса User.
 * Вывести объекты класса Car на экран при помощи var_dump(), print_r()
 * ************************************************************************
 * Для класса User из предыдущего занятия создать методы login(), logout(),
 * которые просто выводят на экран соответствующее сообщение.
 * Создать экземпляр класса, вызвать созданные методы.
 */
require_once __DIR__ . '/User.php';
require_once __DIR__ . '/Car.php';
require_once __DIR__ . '/Manager.php';
require_once __DIR__ . '/Admin.php';
require_once __DIR__ . '/User2.php';
require_once __DIR__ . '/staticCount.php';
require_once __DIR__ . '/staticcountSelf.php';


$car1 = new Car();
$car2 = new Car();
$car3 = new Car();

$Yurii = new User();
$Artem = new User();
$Sergiy = new User();
$login = new User();
$logout = new User();

$car1->brand ='Toyota';
$car1->model ='Corolla';
$car1->year ='2000';
$car1->driver =$Yurii;

$car2->brand ='Mazda';
$car2->model ='6';
$car2->year ='2015';
$car2->driver =$Artem;

$car3->brand ='Ford';
$car3->model ='Taurus';
$car3->year ='1995';
$car3->driver =$Sergiy;

//$login->login();
//$logout->logout();
//$car1->showBrand();

$t=new Car();
//$d =new Car();
$t->setPrice(25.23659);
$t->getPrice();
//var_dump($t);

//var_dump($car1, $car2, $car3);
//print_r($car1); print_r($car2); print_r($car3);

/*
 * Изменить область видимости свойств класса User на protected.
 * Унаследовать от класса User классы Manager, Admin. Создать объекты менеджера и админа, задать значения для свойств объектов.
 */

$manager= new Manager();

$manager->login='Yurii1';
$manager->password = 'Yurii1';
$manager->email ='boollss@i.ua';

$admin= new Admin();

$admin->login='Yurii1';
$admin->password = 'Yurii1';
$admin->email ='boollss@i.ua';

/*Создать экземпляр класса User с конкретными значениями свойств и клонировать его в новую переменную.
 *Свойствам нового экземпляра присвоить новые значения. Сравнить полученные экземпляры класса.
  */

$bondarchuk = new User2();

    $bondarchuk->login='Yurii1';
    $bondarchuk->password = 'Yurii1';
    $bondarchuk->email ='boollss@i.ua';


$bondarchukYurii = clone $bondarchuk;

$bondarchukYurii->login='bondarchukYurii';
$bondarchukYurii->password = 'bondarchukYurii';
$bondarchukYurii->email ='bondarchukYurii@i.ua';
var_dump($bondarchuk,$bondarchukYurii);

/* Создать класс со статическим свойством, которое будет содержать значение количества созданных экземпляров.
*  Создан клас staticCount;
*/
$a= new staticCount();
$b= new staticCount();
$c= new staticCount();
var_dump(staticCount::$count);


/*
* Создать класс со статическим свойством,
* которое будет содержать значение количества созданных экземпляров (использовать self)
*/

$a= new staticcountSelf();

$b= new staticcountSelf();
var_dump(staticcountSelf::$count);