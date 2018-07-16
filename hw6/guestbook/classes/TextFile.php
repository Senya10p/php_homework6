<?php

class TextFile      //2. Выносим часть функционала в родительский класс TextFile
{
    protected $data;    //защищённое свойство для хранения данных
    public $way;
    public $text;

    /*1.1 В конструктор передается путь до файла с данными гостевой книги,
    в нём же происходит чтение данных из ней (используйте защищенное свойство объекта для хранения данных)*/
    public function __construct($way)
    {
        $this->way = $way;
        if ( is_readable($this->way) ){
            $lines = file( $this->way, FILE_IGNORE_NEW_LINES );
            $this->data = $lines;
        } else {
            $this->data =[];
        }
    }

    //1.2 Метод getData() возвращает массив записей гостевой книги
    public function getData()
    {
        return $this->data;     //4. Метод заканчиваем конструкцией return $this
    }

/*
    //1.3 Метод append($text) добавляет новую запись к массиву записей
    public function append($text)
    {
        $text = $_POST['msg'];
        if ($text != '') {
           return $this->data[] = $text . PHP_EOL;
        }
    }
*/

    //1.4 Метод save() сохраняет массив в файл
    public function save()
    {
        //$this->data = $text . PHP_EOL;
        file_put_contents( $this->way, implode(PHP_EOL, $this->data) );
    }
}


