<?php foreach ($Pic as $A): ?>
	<h3><?php echo $A->name ?></h3>
	<?php echo '<img src="/img/'.$A->PicUrl.'">';?>
	<p><?php echo $A->discription; ?></p>
<?php endforeach ?>