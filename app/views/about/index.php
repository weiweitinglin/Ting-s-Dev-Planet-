<?php require_once APP_ROOT . '/views/layouts/header.php'; ?>

<div class="about-page">
    <!-- 個人簡介區 -->
    <section class="hero about-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <img src="/images/profile.jpg" alt="個人照片" class="img-fluid rounded-circle profile-image">
                </div>
                <div class="col-md-8">
                    <h1 class="display-4 mb-4">你好，我是廷廷</h1>
                    <p class="lead">一位充滿熱情的全端工程師，專注於 Web 開發與系統架構設計。</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 技能區塊 -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title text-center">專業技能</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="skill-card">
                        <h3 class="h5"><i class="fas fa-laptop-code me-2"></i>前端開發</h3>
                        <ul class="list-unstyled">
                            <?php foreach ($skills['frontend'] as $skill): ?>
                                <li><i class="fas fa-check me-2"></i><?php echo $skill; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="skill-card">
                        <h3 class="h5"><i class="fas fa-server me-2"></i>後端開發</h3>
                        <ul class="list-unstyled">
                            <?php foreach ($skills['backend'] as $skill): ?>
                                <li><i class="fas fa-check me-2"></i><?php echo $skill; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="skill-card">
                        <h3 class="h5"><i class="fas fa-database me-2"></i>資料庫</h3>
                        <ul class="list-unstyled">
                            <?php foreach ($skills['database'] as $skill): ?>
                                <li><i class="fas fa-check me-2"></i><?php echo $skill; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="skill-card">
                        <h3 class="h5"><i class="fas fa-tools me-2"></i>開發工具</h3>
                        <ul class="list-unstyled">
                            <?php foreach ($skills['tools'] as $skill): ?>
                                <li><i class="fas fa-check me-2"></i><?php echo $skill; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php require_once APP_ROOT . '/views/layouts/footer.php'; ?>