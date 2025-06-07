<?php require_once APP_ROOT . '/views/layouts/header.php'; ?>

<!-- 主視覺區域 -->
<section class="hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="display-4 fw-bold mb-4">歡迎來到廷造星球</h1>
                <p class="lead mb-4">在這裡，我分享程式開發心得、技術文章，以及我的作品集。</p>
                <div class="d-flex gap-3">
                    <a href="/blog" class="btn btn-light btn-lg">閱讀文章</a>
                    <a href="/portfolio" class="btn btn-outline-light btn-lg">查看作品</a>
                </div>
            </div>
            <div class="col-md-6">
                <img src="/images/hero-image.svg" alt="程式開發插圖" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- 最新文章區域 -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">最新文章</h2>
        <div class="row">
            <?php foreach ($latest_posts as $post): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <?php if ($post['cover_image']): ?>
                            <img src="<?php echo $post['cover_image']; ?>" class="card-img-top" alt="<?php echo $post['title']; ?>">
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $post['title']; ?></h5>
                            <p class="card-text"><?php echo mb_substr(strip_tags($post['content']), 0, 100); ?>...</p>
                        </div>
                        <div class="card-footer bg-transparent border-top-0">
                            <a href="/blog/view/<?php echo $post['slug']; ?>" class="btn btn-primary">繼續閱讀</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="text-center mt-4">
            <a href="/blog" class="btn btn-outline-primary">查看更多文章</a>
        </div>
    </div>
</section>

<!-- 精選作品區域 -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">精選作品</h2>
        <div class="row">
            <?php foreach ($featured_projects as $project): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <?php if ($project['image']): ?>
                            <img src="<?php echo $project['image']; ?>" class="card-img-top" alt="<?php echo $project['title']; ?>">
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $project['title']; ?></h5>
                            <p class="card-text"><?php echo mb_substr($project['description'], 0, 100); ?>...</p>
                        </div>
                        <div class="card-footer bg-transparent border-top-0">
                            <a href="/portfolio/view/<?php echo $project['id']; ?>" class="btn btn-primary">了解更多</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="text-center mt-4">
            <a href="/portfolio" class="btn btn-outline-primary">查看更多作品</a>
        </div>
    </div>
</section>

<?php require_once APP_ROOT . '/views/layouts/footer.php'; ?>