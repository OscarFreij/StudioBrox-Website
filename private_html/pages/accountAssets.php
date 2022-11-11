<?php
    if (!isset($_SESSION['username']))
    {
        $host  = $_SERVER['HTTP_HOST'];
        $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        header("Location: https://$host$uri/?page=signin", true);
        return;
    }
    else
    {
        ?>
            <div class="container-fluid">
                Bought Assets Page
            </div>
        <?php
    }
?>