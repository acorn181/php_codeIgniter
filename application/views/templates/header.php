<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Honoka CSS -->
        <link rel="stylesheet" type="text/css" href="/assets/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/dist/css/style.css">
        <!-- jQuery -->
        <script type="text/javascript"
        src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
        </script>
        <!-- Honoka JS -->
        <script src="/assets/dist/js/bootstrap.min.js"></script>
        
        <title>Masahich Logs</title>
    </head>
    <body>
        <?php
            if ($device === 'sm') {
                include 'sm_menubar.html';
            } else {
                include 'pc_menubar.html';
            }
        ?>
