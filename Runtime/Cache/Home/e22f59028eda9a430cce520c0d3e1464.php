<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="/index.php?s=/Index/exportExcel.html" enctype="multipart/form-data" method="post">
    <input type="file" name="export_excel">
    <input type="hidden" name="export" value="1">
    <input type="submit" value="导出转换后的表格">
</form>
</body>
</html>