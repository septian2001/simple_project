<?php

// menampilkan kegiatan di dalam list

function ShowTodolist()
{
    global $todolist;

    echo "Todolist" . PHP_EOL;

    foreach ($todolist as $number => $value) {
        echo "$number. $value" . PHP_EOL;
    }
}