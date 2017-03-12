<h4>There are <?php echo $fjoldi_mynda;?> pictures</h4>
<div class="box">
    <ul>
        <?php foreach ($pics as $user) {?>
            <li>
            <?php echo '<a href="http://46.101.24.156/v5/aPic/' . $user->id .'">'. $user->myndHeiti;?>
            </a></li>
        <?php } ?>
    </ul>
</div>