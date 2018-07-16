<html>
	<head>
		<title>PHP-1</title>
    </head>
	<body>
		<h1>PHP</h1>
		<h2>6 урок</h2>
        <h2>Классы и объекты. Введение в ООП.</h2>
        <h4>Домашняя работа</h4>

        <h4>Фотогалерея</h4>

        <?php
        $list = scandir(__DIR__ . '/images');
        $list = array_diff( $list, ['.', '..'] );
     //   var_dump($list);
        
       // Выводим в браузер изображения из папки images
        foreach ($list as $img) {
            ?>
            <img src="/gallery/images/<?php echo $img; ?>" height="30%">
            <?php
        }
        ?>
        <br><br>
        <a href="/gallery/index.php">Перейти в форму для загрузки изображений</a>
	</body>
</html>