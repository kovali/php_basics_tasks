<?php
$a = $_POST['a'];
$b = $_POST['b'];

switch ($operator = $_POST['calcu']) {
    case '+':
        $result = $a + $b;
        break;
    case '-':
        $result = $a - $b;
        break;
    case '*':
        $result = $a * $b;
        break;
    case '/':
        {
            if ($b == 0)
                $result = 'На 0 не делиться!';
            else
                $result = $a / $b;
            break;
        }
    case '%':
        $result = $a % $b;
        break;
}
{
    echo $result;
}

