<?php require_once APP_ROOT . '/views/layouts/header.php'; ?>

<div class="contact-page">
    <section class="hero contact-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="display-4 mb-4">聯絡我</h1>
                    <p class="lead">有任何問題或合作提案，歡迎與我聯繫！</p>
                </div>
                <div class="col-md-6">
                    <div class="contact-info">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-envelope fa-2x me-3"></i>
                            <div>
                                <h3 class="h5 mb-1">Email</h3>
                                <p class="mb-0">contact@tingplanet.com</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-map-marker-alt fa-2x me-3"></i>
                            <div>
                                <h3 class="h5 mb-1">位置</h3>
                                <p class="mb-0">台灣，台北</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <?php if (isset($error)): ?>
                        <div class="alert alert-danger"><?php echo $error; ?></div>
                    <?php endif; ?>
                    
                    <?php if (isset($success)): ?>
                        <div class="alert alert-success"><?php echo $success; ?></div>
                    <?php endif; ?>

                    <div class="card shadow-sm">
                        <div class="card-body">
                            <form action="/contact" method="POST" class="contact-form">
                                <div class="mb-3">
                                    <label for="name" class="form-label">姓名</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="subject" class="form-label">主旨</label>
                                    <input type="text" class="form-control" id="subject" name="subject" required>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="message" class="form-label">訊息內容</label>
                                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                                </div>
                                
                                <button type="submit" class="btn btn-primary">送出訊息</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php require_once APP_ROOT . '/views/layouts/footer.php'; ?>