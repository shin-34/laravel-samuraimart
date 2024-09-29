<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way ($array,$order){
            if ($order){
                echo '昇順で表示します<br>';
                sort($array);
            } else {
                echo '降順で表示します<br>';
                rsort($array);
            }

            foreach ($array as $value) {
                echo $value .'<br>';
            }
        }

        $nums = [15, 4, 18, 23, 10 ];

        sort_2way($nums, true);

        sort_2way($nums, false);

        ?>
    </p>
</body>

</html>