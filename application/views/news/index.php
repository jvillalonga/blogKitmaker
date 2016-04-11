
<h3>Artículos recientes</h3>
<?php foreach ($news as $news_item): ?>
    <div class="article">
        <h3><?php echo $news_item['title']; ?></h3>
        <p class="fecha"><?php echo $news_item['fecha']; ?></p>
        <div class="main">
            <p>
                <?php echo substr($news_item['text'], 0, 255) . '...'; ?>
            </p>
        </div>
        <p><a href="<?php echo site_url('news/' . $news_item['slug']); ?>">Leer más</a></p>
        <!--boton borrar articulo-->
        <?php
//        if (isset($_SESSION["log"]) && $_SESSION["log"] == 'ok') {
//            echo '<form action="news/borrar" method="post">' .
//            '<input type="hidden" name="id" value="' . $news_item['id'] . '"/>' .
//            '<input type = "submit" name = "submit" value = "Borrar artículo" />';
//            echo '</form>';
//        }
        ?>
    </div>
<?php endforeach; ?>
<div class="centered">
    <a href="<?php echo site_url('news/allNews'); ?>">Todos los artículos</a>
</div>

