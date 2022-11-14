<?php
if (!isset($_SESSION['email'])) {
?>
    <div class="container-fluid bg-dark text-light wrapper justify-content-center align-items-center">
        <div class="container text-center text">
            <div class="row">
                <h1 class="fs-1">Sign in</h1>
                <div class="container mt-4">
                    <form class="row g-3 needs-validation justify-content-center" novalidate>
                        <div class="col-md-4">
                            <label for="emailInput" class="form-label">Email</label>
                            <input type="email" class="form-control text-center" id="emailInput" name="email" value="" required>
                            <div class="invalid-feedback">
                                Missing email!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="passwordInput" class="form-label">Password</label>
                            <input type="password" class="form-control text-center" id="passwordInput" name="password" value="" required>
                            <div class="invalid-feedback">
                                Missing password!
                            </div>
                        </div>
                        <div class="col-md-8">
                            <button type="submitt" class="col-12 btn btn-success">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="container mt-2">
                <span class="text text-muted">
                    If you do not have an account, you can create it <a href="/?page=signup">here</a>!
                </span>
            </div>
        </div>
    </div>
<?php
} else {
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    header("Location: http://$host$uri/?page=account", true);
    exit();
}
?>