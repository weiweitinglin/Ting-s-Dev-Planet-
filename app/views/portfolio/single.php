<?php require_once APP_ROOT . '/views/layouts/header.php'; ?>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">
            <?php if ($project['image']): ?>
                <img src="<?php echo $project['image']; ?>" class="img-fluid rounded mb-4" alt="<?php echo $project['title']; ?>">
            <?php endif; ?>
        </div>
        <div class="col-md-4">
            <h1 class="mb-4"><?php echo $project['title']; ?></h1>
            <div class="project-description mb-4">
                <?php echo nl2br($project['description']); ?>
            </div>
            <?php if ($project['link']): ?>
                <a href="<?php echo $project['link']; ?>" class="btn btn-primary" target="_blank">
                    <i class="fas fa-external-link-alt me-2"></i>前往作品
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php require_once APP_ROOT . '/views/layouts/footer.php'; ?>