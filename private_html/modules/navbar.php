<div class="navbar-wrapper" <?= $admin ?>>
    <span class="openNavButton" onclick="openNav()">&#9776;&nbsp;Meny</span>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <div id="navbar-list" class="navbar-list">
            <a class="navbar-item" href="?page=home">
                <div class="navbar-item-inner">Hem</div>
                <!--<i class="fa fa-home"></i>-->
            </a>
            <a class="navbar-item" href="?page=assets">
                <div class="navbar-item-inner">Assets</div>
                <!--<i class="fa fa-home"></i>-->
            </a>
            <a class="navbar-item" href="?page=about">
                <div class="navbar-item-inner">Om oss</div>
                <!--<i class="fa fa-home"></i>-->
            </a>
            <a class="navbar-item" href="?page=contact">
                <div class="navbar-item-inner">Kontakt</div>
                <!--<i class="fa fa-home"></i>-->
            </a>
            
            <?= $adminField ?>
        </div>
    </div>

</div>