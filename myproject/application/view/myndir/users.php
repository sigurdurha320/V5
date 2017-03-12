<div class="box">
    <ul>
    <?php foreach ($MyUsers as $user): ?>
            <li>
            <?php echo '<a href="http://46.101.24.156/v5/aUser/' . $user->id .'">'. $user->nafn;?>
            </a></li>
    <?php endforeach ?>
    </ul>
</div>
