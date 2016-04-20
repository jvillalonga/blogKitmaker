<div class="comment">
  <form action="creaComment" method="post">
    <legend>Nuevo comentario</legend>
    <input name="idArt" type="hidden" value="<?php echo $news_item['id']; ?>"/>
    <input name="slug" type="hidden" value="<?php echo $news_item['slug']; ?>"/>
    <input type="input" name="user" placeholder="Autor" value="<?php
    if (isset($_SESSION["log"]) && $_SESSION["log"] == 'ok') {
      echo $_SESSION["user"] . '" readonly=""';
    }
    ?>"/>
    <img src="<?php echo base_url(); ?>assets/smileys/lol.gif" alt="emotes" id="emoteBt"/><br />
    <textarea name="comments" id="comments" placeholder="Comentario" cols="28" rows="6" required></textarea><br />
    <div class="emotes">
      <?php echo $smiley_table; ?>
    </div>
    <input type="submit" value="Enviar comentario"/>
  </form>
</div>
