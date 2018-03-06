<?php
include '_header.php';
?>

    <div class="container">
        <h2>
            <?php echo $post->getTitle(); ?>
        </h2>
        <h3>
            <?php echo $post->getId(); ?>
        </h3>
        <p>
            <?php echo $post->getContent(); ?>
        </p>
    </div>

<?php
include '_footer.php';
?>
