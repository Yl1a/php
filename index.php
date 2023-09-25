<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <title>PHP01</title>
</head>

<body>
    <div class="container php1">
        <div class="content">
            <h1 class="title">Practice</h1>
            <?
            $arr = ['Петров', 'Иванов', 'Николаев', 'Павлов', 'Сидоров']; ?>
            <!-- TASK01 -->
            <h2 class="title">Task1</h2>
            <?
            print_r($arr); ?>
            <!-- task1.2 -->
            <br>
            <p class="text">Количество элементов в массиве:
                <? echo count($arr); ?>
            </p>

            <!-- task1.3 -->
            <?
            if (in_array('Сидоров', $arr)) { ?>
                <p class="text">В массиве есть Сидоров</p>
            <? } else { ?>
                <p class="text">В массиве нет Сидорова</p>
            <? }
            ?>

            <!-- task1.4 -->
            <?
            $expelled = array_pop($arr); ?>
            <p class="text">Из массива был удален
                <? echo $expelled; ?>
            </p>


            <!-- TASK02 -->
            <!-- Спортивный" => "Сидоров", "Художественный" => "Емелина", "Музыкальный"
=> "Иванова", "Литературный" => "Петров", "Биологический" => "Антонова -->
            <h3 class="title">Task2</h3>
            <?
            $arr2 = [
                'Спортивный' => 'Сидоров',
                'Художественный' => 'Емелина',
                'Музыкальный' => 'Иванова',
                'Литературный' => 'Петров',
                'Биологический' => 'Антонова',
            ];
            asort($arr2);
            foreach ($arr2 as $key => $value) {
                echo '<span class = "color">' . $key . '</span>' . ' - ' . $value;
                echo '<br><br>';
            }
            ?>
            <h3 class="title">Task3</h3>

            <?
            $arr2 = [
                'Имя' => 'Юля',
                'Фамилия' => 'Волкова',
                'Группа' => '424',
                'Хобби' => '3D',
                'Соц.сети' => 'telegram:@wolfik',
            ];

            ?>
            <h4 class="text">Информация обо мне</h4>
            <ul class="info">
                <li class="info_content"> <span class="color">Имя:</span>
                    <?= $arr2['Имя'] ?>
                </li>
                <li class="info_content"><span class="color">Фамилия:</span>
                    <?= $arr2['Фамилия']; ?>
                </li>
                <li class="info_content"><span class="color">Группа:</span>
                    <?= $arr2['Группа']; ?>
                </li>
                <li class="info_content"><span class="color">Хобби:</span>
                    <?= $arr2['Хобби']; ?>
                </li>
                <li class="info_content"><span class="color">Соц.сети:</span>
                    <?= $arr2['Соц.сети']; ?>
                </li>
            </ul>
        </div>
        <img src="./img/Madalina Cojocari_ Mysterious Disappearance.jpg" alt="" class="img">
    </div>

</body>

</html>