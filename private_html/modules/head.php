<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudioBrox</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Cormorant+Upright&family=Grape+Nuts&family=Righteous&family=Roboto&family=VT323&family=Acme&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="static/css/bs-color-override.css">
    <link rel="stylesheet" href="static/css/bs-width-custom.css">

    <link rel="stylesheet" href="static/css/master.css">
    <!--<link rel="stylesheet" href="static/css/media-master.css">-->
    <link rel="stylesheet" href="static/css/navbar.css">
    <!--<link rel="stylesheet" href="static/css/navbar-media.css">-->


    <?php
    if (isset($_GET['page']))
    {
        if (file_exists("static/css/".$_GET['page'].".css"))
        {
            ?>
                <link rel="stylesheet" href="static/css/<?=$_GET['page']?>.css">
            <?php
        }
    }
    ?>
</head>