<?php 

// penambahan kegiatan di dalam list

function AddTodolist(string $todo)
{
    global $todolist;

    $number=sizeof($todolist) + 1;

    $todolist[$number] = $todo;
}