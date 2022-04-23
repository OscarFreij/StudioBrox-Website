<!DOCTYPE html>
<html lang="en">
<?php
require "../private_html/modules/head.php";
?>

<body class="d-flex flex-column min-vh-100">
    <img class="banner" src="/static/media/image/studio_brox_banner_cut.png"></img>
    <?php
    include "../private_html/modules/navbar.php";

    if (isset($_GET['page'])) {
        if (file_exists("../private_html/pages/" . $_GET['page'] . ".php")) {
            include "../private_html/pages/" . $_GET['page'] . ".php";
        } else {
            include "../private_html/pages/error/404.php";
        }
    } else {
        require "../private_html/pages/home.php";
    }
    require "../private_html/modules/footer.php";
    ?>
</body>
<?php
require "../private_html/modules/postLoad.php";
?>

</html>