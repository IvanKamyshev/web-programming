<?php

function printStringReturnNumber(): int {
    echo "Строка \n";
    return 35;
}

$my_num = printStringReturnNumber();
echo $my_num;