<nav class="gb-main-menu" >
    <div class="main-navigation uni-menu-text">
        <div class="cssmenu">
            <!-- <ul>
                <li><a href="/index.php">Home</a></li>
                <li><a href="gioi-thieu">About</a></li>
                <li><a href="lien-he">Contact us</a></li>
                <li><a href="faq">FAQS</a></li>
                <li><a href="tin-tuc">Articles</a></li>
                <li><a href="visa">Visa</a></li>
                <li><a href="faq">Term & conditions</a></li>
                <li class="bookonline"><a href="bookonline">Book online or by E-mail</a></li>
            </ul> -->
            <?php 
                $list_menu = $menu->getListMainMenu_byOrderASC();
                $menu->showMenu_byMultiLevel_mainMenuTraiCam_1($list_menu,0,$lang,0);
            ?>
        </div>
    </div>
</nav>