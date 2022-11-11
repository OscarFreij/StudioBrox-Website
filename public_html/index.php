<?php
    ob_start();
    if (session_status() != PHP_SESSION_ACTIVE) {
        session_start();
    }
    
    require_once "../private_html/container.php";
    if (!isset($container))
    {
        $container = new container();
    }
?>

<!DOCTYPE html>
<html lang="en">
<?php
require "../private_html/modules/head.php";
?>

<body class="d-flex flex-column min-vh-100 bg-dark text-light">
    <?php
    include "../private_html/modules/header.php";
    include "../private_html/modules/navbar.php";
    if (isset($_GET['page'])) {
        if (file_exists("../private_html/pages/" . $_GET['page'] . ".php")) {
            include "../private_html/pages/" . $_GET['page'] . ".php";
        } else {
            include "../private_html/pages/error/404.php";
        }

        if (http_response_code() != 200)
        {
            include "../private_html/pages/error/".http_response_code().".html";
        }
    } else {
        require "../private_html/pages/home.php";
    }
    require "../private_html/modules/footer.php";
    require "../private_html/modules/postLoad.php";
    ?>
</body>

</html>