<div class="article">
    <?php echo '<h2>' . $news_item['title'] .'</h2>'; ?>
    <p class="fecha"><?php echo $news_item['fecha']; ?></p>
    <?php echo $news_item['text']; ?>

    <p><a href="<?php echo site_url('news/') ?>">Volver</a></p>
</div>
<div class="article">
    <?php $data['id'] = $news_item['id']; ?>
    <?php $this->load->view('news/viewComments', $data);?>
    
</div>
