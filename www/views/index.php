<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Название</td>
        </tr>
        <?php foreach ($items as $item): ?>
        <tr>
             <td><?php echo $item['title']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
