<?php
session_start();

require (__DIR__ . '/Uploader.php');

//$login = $_POST['login'];
//$password = $_POST['password'];
include_once (__DIR__ . '/functions.php');

    if ( null !== getCurrentUser() ) {
            ?>
    <html>
    <head>
        <title>PHP-1</title>
    </head>
    <body>
    <h5>Здравствуйте <?php echo getCurrentUser(); ?>. Вы вошли в фотогалерею!</h5>
    <h1>PHP</h1>
    <h2>6 урок</h2>
    <h2>Классы и объекты. Введение в ООП.</h2>
    <h4>Домашняя работа</h4>
    <h5>Модифицируем предыдущее домашнее задание в соответствии с новыми знаниями:<br><br>
        1. Создайте класс GuestBook, который будет удовлетворять следующим требованиям:<br>
        1) В конструктор передается путь до файла с данными гостевой книги, в нём же происходит чтение данных из ней (используйте защищенное свойство объекта для хранения данных)<br>
        2) Метод getData() возвращает массив записей гостевой книги<br>
        3) Метод append($text) добавляет новую запись к массиву записей<br>
        4) Метод save() сохраняет массив в файл<br>
        2. * Продумайте - какие части функционала можно вынести в базовый (родительский) класс TextFile, а какие - сделать в унаследованном от него классе GuestBook<br>
        3. Создайте класс Uploader в соответствии с требованиями:<br>
        1) В конструктор передается имя поля формы, от которого мы ожидаем загрузку файла<br>
        2) Метод isUploaded() проверяет - был ли загружен файл от данного имени поля<br>
        3) Метод upload() осуществляет перенос файла (если он был загружен!) из временного места в постоянное<br>
        4. * Попробуйте некоторые методы заканчивать конструкцией return $this; и придумайте этому применение<br>
    </h5>
    <h4>Фотогалерея</h4>

    <p>Загрузка файлов</p>
    <!-- Форма загрузки файлов-->
    <form action="/gallery/index.php" method="post" enctype="multipart/form-data">

        <input type="file" name="upl">
        <button type="submit">Добавить</button>

    </form>

    <?php
    $gal = new Uploader('upl');

    $gal->isUploaded();
    $gal->upload(__DIR__ . '/images/', ['image/jpg', 'image/png', 'image/jpeg']); //в качестве аргументов передаём путь до файла и тип загружаемого файла
    ?>

    <br><br>
    <a href="/gallery/gallery.php">Перейти в фотогалерею</a>
    <br><br>

    <a href="/gallery/logout.php">Выход</a>
    <br><br>
    <a href="/index.php">Перейти на главную страницу</a>
    </body>
    </html>
    <?php
    //  echo password_hash('891', PASSWORD_DEFAULT);//PASSWORD_DEFAULT - берёт наиболее стойкий по умолчанию алгоритм
    //  $hash = '$2y$10$ZyYlqBMmi9qEWcgnR10pqOCxRQABUoDhu6mHmm8iOzlHPv//RBosS';
}else {
    header('Location: /gallery/login.php');
}
    ?>