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
                $result = '�� 0 �� �������!';
            else
                $result = $a / $b;
            break;
        }
    case '%':
        $result = $a % $b;
        break;
}
{echo $result;}

