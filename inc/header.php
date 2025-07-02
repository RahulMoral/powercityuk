<header class="site-header">
    <section class="main-menu">
        <div class="container">
            <nav class="navbar">
                <a class="main-menu-logo" href="/">
                    <span class="before-scroll-logo">
                        <img alt="POWER CITY UK" class="img-fluid d-block" src="/images/logo.png" />
                    </span>
                    <span class="after-scroll-logo">
                        <img alt="POWER CITY UK" class="img-fluid d-block" src="/images/logo-after.png" />
                    </span>
                </a>

                <?php
                $page = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
                    if ($page == '/give') {
                        echo '<a href="/" class="main-menu-give-button">Home</a>';
                    } else {
                        echo '<a href="/give" class="main-menu-give-button">Give</a>';
                    }
                ?>
            </nav>
        </div>
    </section>
</header>