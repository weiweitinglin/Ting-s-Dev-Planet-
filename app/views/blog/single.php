<?php require_once APP_ROOT . '/views/layouts/header.php'; ?>

<div class="container mt-4">
    <article class="blog-post">
        <h1 class="mb-4"><?php echo $post['title']; ?></h1>
        
        <div class="blog-post-meta mb-4">
            <small class="text-muted">
                作者：<?php echo $post['username']; ?> | 
                發表於：<?php echo date('Y-m-d', strtotime($post['created_at'])); ?>
            </small>
        </div>

        <?php if ($post['cover_image']): ?>
            <img src="<?php echo $post['cover_image']; ?>" class="img-fluid mb-4" alt="<?php echo $post['title']; ?>">
        <?php endif; ?>

        <div class="blog-post-content">
            <?php echo $post['content']; ?>
        </div>
    </article>
</div>

<?php require_once APP_ROOT . '/views/layouts/footer.php'; ?>