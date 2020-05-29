<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>サンプル一覧画面</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
</head>
<body>
    <p>「varを表示」：<?php echo $var; ?> </p>
    <p>→ブレード使用： {{ $var }} </p>
</body>
</html>
