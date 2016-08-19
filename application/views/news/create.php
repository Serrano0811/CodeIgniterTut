<div class="ancho960">
<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>

    <label for="title">Titulo:</label>
    <input type="input" name="title" /><br />

    <label for="text">Desc:</label>
    <textarea name="text"></textarea><br />

    <input type="submit" name="submit" value="Create news item" class="btn" />
	<br>
	<br>
	<br>

</form>
</div>