
<html>
    <head>
        <title>MyBlog</title>
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/style.css">
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.css">
    </head>
    <body>
        <script>

            $(document).ready(function () {
                $('#taula').DataTable();
            });
//            $(window).bind('scroll', function (e) {
//                parallaxScroll();
//            });
//
//            function parallaxScroll() {
//                var scrolled = $(window).scrollTop();
//                $('#parallax-bg1').css('top', (0 - (scrolled * .5)) + 'px');
//                $('#parallax-bg2').css('top', (400 - (scrolled * 1.5)) + 'px');
//            }
        </script>

        <div id="header">
            <div>
                <h1>Blog</h1>

                <p class="info">
                    <?php
                    if (isset($_SESSION["log"]) && $_SESSION["log"] == 'ok') {
                        echo 'Usuario: ' . $_SESSION["user"];
                    }
                    ?>
                </p>
            </div>
            <div id="menu">
                <nav>
                    <ul>
                        <li><a href="<?php echo site_url('news'); ?>">Inicio</a></li>
                        <li><a href="<?php echo site_url('news/allNews'); ?>">Todos los artículos</a></li> 
                        <?php
                        if (isset($_SESSION["log"]) && $_SESSION["log"] == 'ok') {
                            echo '
                    <li><a href="' . site_url('news/create') . '">Publicar artículo</a></li>';
                        }
                        ?>
                        <li>
                            <?php
                            if (isset($_SESSION["log"]) && $_SESSION["log"] == 'ok') {
                                echo '<a href="' . site_url('news/logout');
                                echo '">Logout</a>';
                            } else {
                                echo '<a href="' . site_url('news/login');
                                echo '">Login</a>';
                            }
                            ?>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>