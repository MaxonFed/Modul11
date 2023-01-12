<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Таблицы PHP</title>
    <link type="text/css" rel="stylesheet" href="./css/style.css" media="all" />
</head>
<body>
    <h1>Задание 1. Таблица истинности PHP</h1>
    <table>
        <tr id="head">
            <th>A</th>
            <th>B</th>
            <th>!A</th>
            <th>A || B</th>
            <th>A && B</th>
            <th>A xor B</th>
        </tr>
        <tr>
            <th>0</th>
            <th>0</th>
            <th><?php $a = 0; echo (!$a)? (!$a):var_dump(!$a) ?></th>
            <th><?php $a = 0; $b = 0 ; echo ($a || $b)?($a || $b):var_dump($a || $b) ?></th>
            <th><?php $a = 0; $b = 0 ; echo ($a && $b)?($a && $b):var_dump($a && $b) ?></th>
            <th><?php $a = 0; $b = 0 ; echo ($a xor $b)?($a xor $b):var_dump($a xor $b) ?></th>
        </tr>

        <tr>
           <th>0</th>
           <th>1</th>
          <th><?php $a = 0; echo (!$a)? (!$a):var_dump(!$a) ?></th>
          <th><?php $a = 0; $b = 1; echo ($a || $b)?($a || $b):var_dump($a || $b) ?></th>
          <th><?php $a = 0; $b = 1; echo ($a && $b)?($a && $b):var_dump($a && $b) ?></th>
          <th><?php $a = 0; $b = 1; echo ($a xor $b)?($a xor $b):var_dump($a xor $b) ?></th>
        </tr>

        <tr>
           <th>1</th>
           <th>0</th>
           <th><?php $a = 1; echo (!$a)? (!$a):var_dump(!$a) ?></th>
           <th><?php $a = 1; $b = 0; echo ($a || $b)?($a || $b):var_dump($a || $b) ?></th>
           <th><?php $a = 1; $b = 0; echo ($a && $b)?($a && $b):var_dump($a && $b) ?></th>
           <th><?php $a = 1; $b = 0; echo ($a xor $b)?($a xor $b):var_dump($a xor $b) ?></th>
        </tr>

        <tr>
           <th>1</th>
           <th>1</th>
           <th><?php $a = 1; echo (!$a)? (!$a):var_dump(!$a) ?></th>
           <th><?php $a = 1; $b = 1; echo ($a || $b)?($a || $b):var_dump($a || $b) ?></th>
           <th><?php $a = 1; $b = 1; echo ($a && $b)?($a && $b):var_dump($a && $b) ?></th>
           <th><?php $a = 1; $b = 1; echo ($a xor $b)?($a xor $b):var_dump($a xor $b) ?></th>
        </tr>
 </table>
<br><br><br>
 <h1>Задание 2. Таблица сравнения</h1><br>
 <h1 class="point">Гибкое сравнение в PHP</h1>

 <table>
    <tr id="head">
        <th></th>
        <th>true</th>
        <th>fals</th>
        <th>1</th>
        <th>0</th>
        <th>-1</th>
        <th>"1"</th>
        <th>null</th>
        <th>"php"</th>
    </tr>
    <tr>
        <th class="first_window">true</th>
        <th><?php $a = true; $b = true; echo ($a == $b)?($a == $b):($a == $b) ?></th>
        <th><?php $a = true; $b = false; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = true; $b = 1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = true; $b = 0; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = true; $b = -1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = true; $b = "1"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = true; $b = null; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = true; $b = "php"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
    </tr>
    <tr>
        <th class="first_window">false</th>
        <th><?php $a = false; $b = true; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = false; $b = false; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = true; $b = 1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = true; $b = 0; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = true; $b = -1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = true; $b = "1"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = true; $b = null; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = true; $b = "php"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
    </tr>
    <tr>
        <th class="first_window">1</th>
        <th><?php $a = 1; $b = false; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = 1; $b = false; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = 1; $b = 1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = 1; $b = 0; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = 1; $b = -1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = 1; $b = "1"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = 1; $b = null; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = 1; $b = "php"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
    </tr>
    <tr>
        <th class="first_window">0</th>
        <th><?php $a = 0; $b = false; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = 0; $b = false; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = 0; $b = 1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = 0; $b = 0; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = 0; $b = -1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = 0; $b = "1"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = 0; $b = null; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = 0; $b = "php"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        
    </tr>
    <tr>
        <th class="first_window">-1</th>
        <th><?php $a = -1; $b = false; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = -1; $b = false; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = -1; $b = 1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = -1; $b = 0; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = -1; $b = -1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = -1; $b = "1"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = -1; $b = null; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = -1; $b = "php"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
    </tr>
    <tr>
        <th class="first_window">"1"</th>
        <th><?php $a = "1"; $b = false; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = "1"; $b = false; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = "1"; $b = 1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = "1"; $b = 0; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = "1"; $b = -1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = "1"; $b = "1"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = "1"; $b = null; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = "1"; $b = "php"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
    </tr>
      <tr>
        <th class="first_window">null</th>
        <th><?php $a = null; $b = false; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = null; $b = false; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = null; $b = 1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = null; $b = 0; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = null; $b = -1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = null; $b = "1"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = null; $b = null; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = null; $b = "php"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
    </tr>
    <tr>
        <th class="first_window">"php"</th>
        <th><?php $a = "php"; $b = false; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = "php"; $b = false; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = "php"; $b = 1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = "php"; $b = 0; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = "php"; $b = -1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = "php"; $b = "1"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = "php"; $b = null; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
        <th><?php $a = "php"; $b = "php"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></th>
    </tr>    
    </table>
    <br>

    <h1 class="point">Жёсткое сравнение в PHP</h1>

    <table>
        <tr id="head">
            <th></th>
            <th>true</th>
            <th>fals</th>
            <th>1</th>
            <th>0</th>
            <th>-1</th>
            <th>"1"</th>
            <th>null</th>
            <th>"php"</th>
        </tr>
        <tr>
            <th class="first_window">true</th>
            <th><?php $a = true; $b = true; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = true; $b = false; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = true; $b = 1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = true; $b = 0; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = true; $b = -1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = true; $b = "1"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = true; $b = null; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = true; $b = "php"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
        </tr>
        <tr>
            <th class="first_window">false</th>
            <th><?php $a = false; $b = true; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = false; $b = false; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = true; $b = 1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = true; $b = 0; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = true; $b = -1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = true; $b = "1"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = true; $b = null; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = true; $b = "php"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
        </tr>
        <tr>
            <th class="first_window">1</th>
            <th><?php $a = 1; $b = false; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = 1; $b = false; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = 1; $b = 1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = 1; $b = 0; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = 1; $b = -1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = 1; $b = "1"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = 1; $b = null; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = 1; $b = "php"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
        </tr>
        <tr>
            <th class="first_window">0</th>
            <th><?php $a = 0; $b = false; echo ($a === $b)?($a == $b):var_dump($a == $b) ?></th>
            <th><?php $a = 0; $b = false; echo ($a === $b)?($a == $b):var_dump($a == $b) ?></th>
            <th><?php $a = 0; $b = 1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = 0; $b = 0; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = 0; $b = -1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = 0; $b = "1"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = 0; $b = null; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = 0; $b = "php"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            
        </tr>
        <tr>
            <th class="first_window">-1</th>
            <th><?php $a = -1; $b = false; echo ($a === $b)?($a == $b):var_dump($a == $b) ?></th>
            <th><?php $a = -1; $b = false; echo ($a === $b)?($a == $b):var_dump($a == $b) ?></th>
            <th><?php $a = -1; $b = 1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = -1; $b = 0; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = -1; $b = -1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = -1; $b = "1"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = -1; $b = null; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = -1; $b = "php"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
        </tr>
        <tr>
            <th class="first_window">"1"</th>
            <th><?php $a = "1"; $b = false; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = "1"; $b = false; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = "1"; $b = 1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = "1"; $b = 0; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = "1"; $b = -1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = "1"; $b = "1"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = "1"; $b = null; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = "1"; $b = "php"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
        </tr>
        <t>
            <th class="first_window">null</th>
            <th><?php $a = null; $b = false; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = null; $b = false; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = null; $b = 1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = null; $b = 0; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = null; $b = -1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = null; $b = "1"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = null; $b = null; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = null; $b = "php"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
        </t>
        <tr>
            <th class="first_window">"php"</th>
            <th><?php $a = "php"; $b = false; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = "php"; $b = false; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = "php"; $b = 1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = "php"; $b = 0; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = "php"; $b = -1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = "php"; $b = "1"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = "php"; $b = null; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
            <th><?php $a = "php"; $b = "php"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></th>
        </tr>
    
</body>
</html>