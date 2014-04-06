<?php
// index.php
$link = mysql_connect('localhost', 'root', '');
mysql_select_db('blog_db', $link);

$result = mysql_query('SELECT id, title, content FROM post where id='.$_GET['id'], $link);
$row = mysql_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php $row['title'] ?></title>
    </head>
    <body>

        <h1><?php echo $row['title'] ?></h1>
        <p><?php  echo $row['content'] ?></p>
    </body>
</html>

<?php
mysql_close($link);
?>