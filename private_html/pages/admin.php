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
    if (!isset($_SESSION['admin']))
    {
        http_response_code(403);
        return;
    }
    else if (!$_SESSION['admin'])
    {
        http_response_code(403);
        return;
    }
    else
    {
        ?>
            <div class="container-fluid bg-dark text-light">
                Admin Page
            </div>
        <?php
    }
}