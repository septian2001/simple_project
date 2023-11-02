<?php
require_once "../Model/Todolist.php";
require_once "../BusinessLogic/AddTodolist.php";
require_once "../BusinessLogic/ShowTodolist.php";
require_once "../BusinessLogic/RemoveTodolist.php";

AddTodolist("septi");
AddTodolist("putra");
AddTodolist("muhammad");
AddTodolist("belajar");
AddTodolist("buat");
AddTodolist("apl");

ShowTodolist();

RemoveTodolist(3);

ShowTodolist();

RemoveTodolist(3);

ShowTodolist();