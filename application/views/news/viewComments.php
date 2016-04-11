
<h3>Comentarios</h3>
<?php
$comments = $this->news_model->get_comments($id);
foreach ($comments as $comments_item):
    ?>
    <div class="comment">
        <p>Autor: <?php echo $comments_item['user']; ?></p>
        <p class="fecha"><?php echo $comments_item['fecha']; ?></p>
        <p>
            <?php echo $comments_item['text']; ?>
        </p>
        <?php if (isset($_SESSION["log"]) && $_SESSION["log"] == 'ok') { ?>
            <form action="borrarComment" method="post">
                <input type="hidden" name="id" value="<?php echo $comments_item['id'] ?>"/>
                <input type = "submit" name = "submit" value = "Borrar comentario" />
            </form>
        <?php }
        ?>
    </div>
<?php endforeach; ?>

<div class="comment">
    <?php //echo validation_errors(); ?>
    <?php //echo form_open('news/comment'); ?>
    <form action="comment" method="post">
        <fieldset>
            <legend>Nuevo comentario</legend>
            <input name="idArt" type="hidden" value="<?php echo $news_item['id']; ?>"/>
            <input name="slug" type="hidden" value="<?php echo $news_item['slug']; ?>"/>
            <input type="input" name="user" placeholder="Autor" value="<?php
            if (isset($_SESSION["log"]) && $_SESSION["log"] == 'ok') {
                echo $_SESSION["user"];
            }
            ?>"/><br />
            <textarea name="text" placeholder="Comentario"></textarea><br />
            <input type="submit" value="Añadir comentario"/>
        </fieldset>
    </form>
</div>