<div>
               <?php  if (count($errorsimg) > 0) : ?>
          <div class="error">
            <?php foreach ($errorsimg as $error) : ?>
              <p><?php echo $error ?></p>
            <?php endforeach ?>
          </div>
        <?php  endif ?>
           </div>