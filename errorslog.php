<?php  if (count($errorslog) > 0) : ?>
  <div class="error">
  	<?php foreach ($errorslog as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>