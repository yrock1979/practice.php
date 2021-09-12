<?php
    // 1
    echo 'hello' . ' world' . '<br>';
    
    // 2
    echo 5 * 3 . '<br>';
    echo 8 / 2 . '<br>';
    echo 7 + 3 . '<br>';
    echo 8 - 5 . '<br>';
    echo 9 % 5 . '<br>';

    // 3
    $var = '変数の値を出力します';
    echo $var . '<br>';

    $var = 'hello,';
    $var .= ' world!';
    echo $var . '<br>';

    $var = 'hello,';
    $var = $var . ' world!';
    echo $var . '<br>';

    // 4
    $var = 'この文字列と';
    $var .= 'この文字列を';
    $var .= '繋げます';
    echo $var . '<br>';

    $var = 'この文字列と';
    $var = $var . 'この文字列を';
    $var = $var . '繋げます';
    echo $var . '<br>';

    // 5
    $var = 5;
    echo $var . '<br>';
    $var = '文字に上書き';
    echo $var . '<br>';

    // 6
    $colorName = 'red';
    echo "frame is ${colorName} color" . '<br>';

    $name = 'Yuichiro';
    $name .= ' Iwata.';
    echo "My name is ${name} " . '<br>';

    // 8
    $var = 11;
    if ($var > 10) {
        echo '10より大きい数値です。' . '<br>';
    }

    // 9.10.11
    $var = 40;
    if ($var >= 20 && $var < 30) {
        echo '20代です' . '<br>';
    } elseif ($var >= 30 && $var <40) {
        echo '30代です' . '<br>';
    } else {
        echo '20代または30代ではありません' . '<br>';
    }

    // 12
    $var = 'male';
    switch ($var) {
        case 'male':
            echo '男性です' . '<br>';
            break;
        case 'female':
            echo '女性です' . '<br>';
            break;
        default:
            echo '?' . '<br>';
            break;
    }

    // 13
    $var = 0;
    while ($var < 10) {
        echo $var . '<br>';
        $var++;
    }

    // 14
    for ($i = 0; $i < 10; $i++) {
        echo $i . '<br>';
    }

    // 15
    $fruits = array('りんご' , 'みかん' , 'ばなな');
    foreach ($fruits as $fruit) {
    echo $fruit . '<br>';
    }

    // 16
    $fruits = array('apple' => 'りんご' , 'orange' => 'みかん' , 'banana' => 'ばなな');
    foreach ($fruits as $key => $value) {
        echo $key . '=' . $value . '<br>';
    }

    // .1
    $i = 100;
    // while ($i >= 1) {
    //     echo $i . '<BR>';
    //     $i--;
    // }

    for ($i = 100; $i >= 1; $i--) {
        echo $i . '<BR>';
    }

    // .2
    for ($i = 1; $i <= 9; $i++) {
        echo $i * 3 .' ' ;
        echo '<br>';
    }

    // $i = 1;
    // while ($i <= 9) {
    //     echo $i * 3 . ' ';
    //     $i++;
    // }

    // .3
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 15 === 0) {
            echo 'FizzBuzz' . '<br>';    
        } elseif ($i % 5 === 0) {
            echo 'Buzz' . '<br>';
        } elseif ($i % 3 === 0) {
            echo 'Fizz' . '<br>';
        } else {
            echo $i . '<br>';
        }
    }

    // .4
    for ($i =1; $i <= 100; $i++) {
        if ($i % 10 == 0) {
            echo $i . '<br>';
        } else {
            echo $i . ' ';
        }
    }

    // .5
    $alpha = array ('E' , 'A' , 'D' , 'B' , 'A' , 'C' , 'A' , 'B' , 'E' , 'E' , 'A' , 'A' , 'C');
    $counts = array_count_values ($alpha);
        echo $counts['A'] . '<br>';


