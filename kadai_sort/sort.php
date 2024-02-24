<!DOCTYPE html>
<html lang="ja">    

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <!-- PHPの埋め込み -->
    <?php
$order = [true, false];
$arrays = $num;

function sort_2way($array, $order)
{
    $nums = [15, 4, 18, 23, 10];

    if ($order) {
        echo "昇順にソートします。<br>";
        sort($nums);
        foreach ($nums as $num) {
            echo $num . '<br>';
        }
    } else {
        echo "降順にソートします。<br>";
        rsort($nums);
        foreach ($nums as $num) {
            echo $num . '<br>';
        }
    }
}

sort_2way($arrays, true);
sort_2way($arrays, false);
?>


</body>

</html>