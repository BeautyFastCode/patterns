<?php
include '_header.php';
?>

<div class="container">
    <div class="row">

        <?php foreach ($posts as $post) {
    ?>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $post->getTitle(); ?>
                        </h5>
                        <p class="card-text">
                            <?php echo $post->getContent(); ?>
                        </p>
                        <a href="/post/<?php echo $post->getId(); ?>" class="btn btn-primary">More ...</a>
                    </div>
                    <div class="card-footer text-muted">
                        ID: <?php echo $post->getId(); ?>
                    </div>
                </div>
            </div>
        <?php
} ?> <!-- end for -->

    </div>
</div>

<?php
include '_footer.php';
?>
