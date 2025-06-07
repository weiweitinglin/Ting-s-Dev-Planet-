<?php require_once APP_ROOT . '/views/layouts/header.php'; ?>

<div class="container mt-4">
    <h1><?php echo $title; ?></h1>
    
    <div class="row">
        <?php foreach ($posts as $post): ?>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <?php if ($post['cover_image']): ?>
                        <img src="<?php echo $post['cover_image']; ?>" class="card-img-top" alt="<?php echo $post['title']; ?>">
                    <?php endif; ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $post['title']; ?></h5>
                        <p class="card-text"><?php echo mb_substr(strip_tags($post['content']), 0, 100); ?>...</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">作者：<?php echo $post['username']; ?></small>
                            <a href="/blog/view/<?php echo $post['slug']; ?>" class="btn btn-primary">閱讀更多</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php require_once APP_ROOT . '/views/layouts/footer.php'; ?>