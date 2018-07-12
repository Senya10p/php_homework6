<?php

require __DIR__ . '/TextFile.php';

class GuestBook extends TextFile
{
    //1.3 Метод append($text) добавляет новую запись к массиву записей
    public function append($text)
    {

      //  if(isset($_POST['msg'])) {
            if ( $text != '') {
                return $this->data[] = $text . PHP_EOL; //4. Метод заканчиваем конструкцией return $this
            }
    }
}