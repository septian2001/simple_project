<?php
require_once"../model/Todolist.php";
require_once"../BusinessLogic/ShowTodolist.php";
require_once"../BusinessLogic/AddTodolist.php";
require_once"../BusinessLogic/RemoveTodolist.php";
require_once"../helper/input.php";

function ViewShowTodolist()
{
    while (true){
        ShowTodolist();

        echo "menu" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo". PHP_EOL;
        echo "x. Keluar" . PHP_EOL;
        $pilihan = input("pilih");

        if($pilihan == "1"){
            ViewAddTodolist();
        }else if($pilihan == "2"){
            ViewRemoveTodolist();
        }else if($pilihan == "x"){
            break;
        }else{
            echo "Pilihan Tidak Ada" . PHP_EOL;
        }
    }
    echo "Semoga Berhasil" . PHP_EOL;
}