<?php require_once APP_ROOT . '/views/layouts/header.php'; ?>

<div class="container mt-4">
    <h1 class="mb-4"><?php echo $title; ?></h1>
    
    <div class="row g-4">
        <?php foreach ($projects as $project): ?>
            <div class="col-md-4">
                <div class="card h-100">
                    <?php if ($project['image']): ?>
                        <img src="<?php echo $project['image']; ?>" class="card-img-top" alt="<?php echo $project['title']; ?>">
                    <?php endif; ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $project['title']; ?></h5>
                        <p class="card-text"><?php echo mb_substr($project['description'], 0, 100); ?>...</p>
                    </div>
                    <div class="card-footer bg-white border-top-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="/portfolio/view/<?php echo $project['id']; ?>" class="btn btn-outline-primary">查看詳情</a>
                            <?php if ($project['link']): ?>
                                <a href="<?php echo $project['link']; ?>" class="btn btn-primary" target="_blank">前往作品</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php require_once APP_ROOT . '/views/layouts/footer.php'; ?>