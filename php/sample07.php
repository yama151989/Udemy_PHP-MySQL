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
# timeは1970年1月1日が0として1秒ずつ加算されている
// print(time());

for ($i = 1; $i <=365; $i++){
    $date = strtotime('+' . $i . 'day');
    print(date('n/j(D)', $date));
    print "\n";

}


?>

</pre>
</main>
</body>    
</html>