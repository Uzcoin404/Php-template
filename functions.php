<?
session_start();
include_once('./components/db.php');
$pages = [
    'main' => [
        'name' => 'Главная',
        'icon' =>'fal fa-home'
    ],
    'contact' => [
        'name' => 'Контакты',
        'icon' => 'fal fa-address-book'
    ],
    'table' => [
        'name' => 'Таблица умножения',
        'icon' => 'fas fa-times'
    ],
    'calc' => [
        'name' => 'Калькулятор',
        'icon' => 'fas fa-calculator-alt'
    ],
    'slide' => [
        'name' => 'Слайдер',
        'icon' => 'far fa-presentation'
    ],
    'guest' => [
        'name' => 'Гостевая книга',
        'icon' => 'fal fa-books'
    ],
    'test' => [
        'name' => 'Тест',
        'icon' => 'fal fa-vial'
    ]
];
    
$path = $_GET['route']  ?? '404' ? $_GET['route']: 'main';
?>