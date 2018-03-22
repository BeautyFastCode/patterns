<?php
include '_header.php';
?>

    <div class="container">
        <h2>
            <?php echo $post->getTitle(); ?>
            <span>
                ID:<?php echo $post->getId(); ?>
            </span>
        </h2>
        <p>
            <?php echo $post->getContent(); ?>
        </p>
    </div>

<?php
include '_footer.php';
?>
