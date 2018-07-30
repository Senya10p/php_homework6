<?php

require __DIR__ . '/TextFile.php';

class GuestBook extends TextFile
{

    public function append($text) //1.3 Метод append($text) добавляет новую запись к массиву записей
    {
        if ( '' !== $text ) {
            $this->data[] = $text;
        }
        return $this; //4. Метод заканчиваем конструкцией return $this - возвращает сам объект
    }
}