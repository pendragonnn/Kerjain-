<?php include "todo.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Todo App</h1>

    <form method="POST">
        <label>Apa kegiatanmu hari ini</label>
        <input type="text" name="todo">
        <button type="submit">Simpan</button>
    </form>

    <ul>
        <?php foreach($todos as $key => $values): ?>
            <li>
                <input type="checkbox" name="todo" onclick="window.location.href='index.php?status=<?php echo ($values['status']==1) ? '0' : '1'; ?>&key=<?=$key?>'" <?php if($values['status']==1) echo 'checked';?>>
                <label>
                    <?php 
                        if($values['status'] == 1){
                            echo '<del>'.$values['todo'].'</del>';
                        } else {
                            echo $values['todo'];
                        }
                    ?>
                </label>
                <a href="index.php?hapus=1&key=<?php echo $key;?>" onclick="return confirm('Apa kamu yakin akan menghapus todo ini?');">Hapus</a>
            </li>
        <?php endforeach ?>
    </ul>
</body>
</html>

