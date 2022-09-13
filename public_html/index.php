<!DOCTYPE html>
<html lang="en">
<?php
require "../private_html/modules/head.php";
?>

<body>
    <header>
    <?php
    include "../private_html/modules/navbar.php";
    ?>
    </header>
    <div class="wrapper">
    <img class="banner" alt="studio_brox_banner_cut" src="/static/media/image/studio_brox_banner_cut.png"></img>
        <?php
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
    </div>
</body>
<?php
require "../private_html/modules/postLoad.php";
?>

</html>