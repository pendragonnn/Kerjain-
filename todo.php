<?php
  $todos = [];
  if(file_exists('todo.txt')){
    $file = file_get_contents('todo.txt');
    $todos = unserialize($file);
  }

  if(isset($_POST['todo'])){
    $data = $_POST['todo'];
    $todos[] = [
      'todo' => $data,
      'status' => 0
      ];
    saveData($todos);
  }
    
  if(isset($_GET['status'])){
    $todos[$_GET['key']]['status'] = $_GET['status'];
    saveData($todos);
  }

  if(isset($_GET['hapus'])){
    unset($todos[$_GET['key']]);
    saveData($todos);
  }

  function saveData($todos){
    file_put_contents('todo.txt', serialize($todos));
    header('Location: index.php');
  }
?>