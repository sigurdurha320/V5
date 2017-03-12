<div class="box">
    <ul>
    <?php foreach ($Pic as $pic): ?>
            <li>
            <?php echo '<a href="http://46.101.24.156/v5/aPic/' . $pic->id .'">'. $pic->myndHeiti;?>
            </a></li>
    <?php endforeach ?>
    </ul>
</div>
