<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>

<pre>
    <!-- $_REQUESTで指定したフォーム(id=my_name)の値を受け取る -->
    <!-- htmlspecialcharsで入力されたSQL文を文字列として認識するようにする。引数は、どの入力について適用するのかと(基本)ENT_QUOTES。 -->
    <!-- $_REQUESTはget,postともに受け取れる。 -->
    <!-- お名前: <?php print(htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES)); ?> -->
    お名前: <?php print(htmlspecialchars($_GET['my_name'], ENT_QUOTES)); ?>
    <!-- お名前: <?php print(htmlspecialchars($_POST['my_name'], ENT_QUOTES)); ?> -->

</pre>

</main>
</body>    
</html>