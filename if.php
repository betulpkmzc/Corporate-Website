<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $isLoggedIn=true;
    $role='admin';
    ?>
    <ul>
        <li>anasayfa</li>
        <li>ürünler</li>
        <?php if(!isLoggedIn) : ?>
        <li>giriş yap</li>
        <li>kayıt ol</li>
        <?php endif; ?>
        <li>hesabım</li>
        <li>yönetim paneli</li>

</ul>


</body>
</html>