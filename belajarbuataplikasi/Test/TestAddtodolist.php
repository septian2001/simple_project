<?php
require_once "../Model/Todolist.php";
require_once "../BusinessLogic/AddTodolist.php";

AddTodolist("septi");
AddTodolist("putra");
AddTodolist("muhammad");

var_dump($todolist);