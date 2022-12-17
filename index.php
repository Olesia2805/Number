 <form action="index.php" method="get">
    <p>Enter min number: <input type ="number" name="min"></p>
    <p>Enter max number: <input type ="number" name="max"></p>
    <p><input type="submit"</p>
    </form> 
<?php
 //перед початком роботи програми вводимо змінні 
 //на сторінці, які будуть записані в URL-посиланні

// якщо є змінні, то передаємо цей параметр нашій змінній
// мінімальне значення - min та максимальне - max 
if (isset($_GET["min"]) && isset($_GET["max"])) {
    $minNum = $_GET["min"]; 
    $maxNum = $_GET["max"];
        // виводимо мінімальне та максимальне числа
        echo "Мінімальне число: $minNum" . '<br/>';
        echo "Максимальне число: $maxNum". '<br/>';
        $numbers = [];
        // запускаємо цикл for та рахуємо в ньому квадрати чисел
        for ($i = $minNum; $i <= $maxNum; $i++) {
            array_push($numbers, $i * $i);
        }
        echo "Масив у форматі JSON: " . json_encode($numbers);
    }
?>
