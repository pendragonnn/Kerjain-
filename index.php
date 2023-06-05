<?php include "todo.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dist/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
    <div class="mx-10 flex justify-center items-center flex-col bg-slate-500 mt-20 p-5 rounded">
        <div class="text-center text-cyan-500 text-2xl p-5 bg-slate-800 w-fit rounded mb-3">
            Ayoo di<b>Kerjain!</b>
        </div>
        <div class="w-1/2 mx-auto bg-slate-400 p-3 mb-3 rounded">
            <form  method="POST">
                <label class="text-base text-slate-800">Pokoknya harus ngerjain <input class="w-full border-solid border-2 border-b-blue-500 border-t-slate-400 border-r-slate-400 border-l-slate-400 bg-transparent sm:w-10 lg:w-fit text-gray-700 py-1 px-2 focus:outline-none" placeholder="Ngopi" type="text" name="todo"> hari ini!</label>
                <button class="text-base bg-blue-400 p-3 rounded-full ml-3 hover:drop-shadow-lg" type="submit">Tambahin</button>
            </form>
        </div>

        <div class="w-1/2">
            <ul class="p-3">
                <?php foreach($todos as $key => $values): ?>
                    <li class="animate__animated animate__fadeInLeft flex text-left justify-between items-center my-2 bg-blue-300 rounded p-2">
                        <input  type="checkbox" name="todo" onclick="window.location.href='index.php?status=<?php echo ($values['status']==1) ? '0' : '1'; ?>&key=<?=$key?>'" <?php if($values['status']==1) echo 'checked';?>>
                        <label>
                            <?php 
                                if($values['status'] == 1){
                                    echo '<del class="text-red-500">'.$values['todo'].'</del>';
                                } else {
                                    echo '<p>'.$values["todo"].'</p>';
                                }
                            ?>
                        </label>
                        <a class="text-white bg-red-900 p-2 rounded" href="index.php?hapus=1&key=<?php echo $key;?>" onclick="return confirm('Apa kamu yakin akan menghapus todo ini?');">Hapus</a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</body>
</html>

