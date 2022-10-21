<?php
// echo xdebug_info();
function showMessage(string $text): void
{
    echo $text;
}

$text = 'Hello World!';

showMessage($text);
