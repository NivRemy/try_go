<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Goban</title>
    <link rel="stylesheet" type="text/css" href="css/goban.css">
    <?php
    include 'GobanToolsV2.php'; 
    ?>
</head>
<body>
    <?php
    /*
    $game = [
        [NULL,true,true,false,NULL],
        [NULL,true,false,false,NULL],
        [NULL,true,true,false,NULL],
        [NULL,true,false,NULL,false],
        [NULL,true,false,NULL,NULL]
    ];
    /*
    

    /*
    if (isset($_POST['game'])) {
        if ($_POST['game'] == 'game1') {
            $game = [
                [NULL,true,true,false,NULL],
                [NULL,true,false,false,NULL],
                [NULL,true,true,false,NULL],
                [NULL,true,false,NULL,false],
                [NULL,true,false,NULL,NULL]
            ];
        }
        elseif ($_POST['game'] == 'game2') {
            $game = [
                [NULL,true,false,false,true,NULL,NULL],
                [NULL,true,false,false,true,true,NULL],
                [NULL,true,false,NULL,false,true,NULL],
                [true,false,false,NULL,false,true,NULL],
                [true,true,false,NULL,false,false,true],
                [NULL,true,false,NULL,false,true,NULL],
                [NULL,true,false,NULL,false,true,NULL] 
            ];
        }
        displayGoban($game);
    }
    */
    if (isset($_FILES['game'])) {
        $game = json_decode(file_get_contents($_FILES['game']['tmp_name']),true);
        echo 'in isset';
    }
    else {
        $game = [
            [NULL,true,true,false,NULL],
            [NULL,true,false,false,NULL],
            [NULL,true,true,false,NULL],
            [NULL,true,false,NULL,false],
            [NULL,true,false,NULL,NULL]
        ];
    }

    /* test des valeurs dans le tableau
    if (!isset($game[0][0])) {
        echo 'not set';
    };
    if (isset($game[0][2])) {
        echo "is set";
    };
    */

    displayGoban($game);
    ?>
</body>