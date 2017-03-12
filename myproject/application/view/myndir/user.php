<h3><?php echo $User[0]->nafn; ?></h3>
<ul>
<?php foreach ($User as $user): ?>
            <li>
            <?php echo '<a href="http://46.101.24.156/v5/aPic/' . $user->id .'">'. $user->heiti;?>
            </a></li>
    <?php endforeach ?>
    </ul>