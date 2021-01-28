<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
<!-- ここにプログラムを記述します -->
<?php

$week_name = ['日', '月', '火', '水', '木', '金', '土'];
for ($i = 1; $i <=365; $i++){
    $date = strtotime('+' . $i . 'day');
    print(date('n/j', $date) . '(' . $week_name[date('w', $date)]) . ')';
    print "\n";
}
// print(date('w'));

?>

</pre>
</main>
</body>    
</html>