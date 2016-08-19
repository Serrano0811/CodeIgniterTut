<div class="ancho960">
<h2><?php echo $title; ?></h2>
<br>
<?php foreach ($news as $news_item): ?>
<br>
        <h3><?php echo $news_item['title']; ?></h3>
        <div class="main">
                <?php echo $news_item['text']; ?>
        </div>
        <p><a href="<?php echo site_url('news/'.$news_item['slug']); ?>" class="btn">View article</a></p>
		<br>
		<br>

<?php endforeach; ?>
<br>
<br>
</div>