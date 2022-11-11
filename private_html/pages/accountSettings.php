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
                Account Settings Page
            </div>
        <?php
    }
?>