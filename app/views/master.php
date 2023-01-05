<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/index.css">

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <title><?php echo $data['data']['title'] ?></title>
</head>
<body>
    <?php if($view != VIEWS . 'login.php'): ?>

        <?php require 'layouts/header.php';  ?>
        <main>
            <?php 
            require 'layouts/sidebar.php';
            require $view;
            ?>
        </main>

    <?php else: ?>
        
        <?php require $view ?>

    <?php endif ?>

    <script src="/assets/js/app.js"></script>
    
</body>
</html>