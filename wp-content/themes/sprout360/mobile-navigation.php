<div class="mobile-btn col-5 lg-hide ml-auto">
    <button class="fa fa-bars" data-toggle="collapse" data-target="#mobile-menu" aria-expanded="false" aria-controls="mobile-menu"></button>
</div>

<div id="mobile-menu" class="mobile-nav collapse ">
    <div class="row">
        <?php
        wp_nav_menu(array(
        'theme_location'    => 'primary',
        'container'       => 'div',
        'container_id'    => '',
        'container_class' => 'col-12 ',
        'menu_id'         => false,
        'menu_class'      => 'navbar-nav primary ',
        'depth'           => 3,
        'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
        'walker'          => new wp_bootstrap_navwalker()
        ));
        ?>
        <span class="seperator">|</span>
        <div class="col-12">
            <ul class="nav secondary">
                <li class="nav-item">
                    <a class="nav-link " href="#">Log In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Plans & Pricing</a>
                </li>
            </ul>
        </div>
    </div>
    
</div>