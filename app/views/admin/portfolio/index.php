<?php require_once APP_ROOT . '/views/admin/layouts/header.php'; ?>

<div class="container-fluid">
    <div class="row">
        <?php require_once APP_ROOT . '/views/admin/layouts/sidebar.php'; ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">作品管理</h1>
                <a href="/admin/portfolio/create" class="btn btn-primary">
                    <i class="fas fa-plus me-2"></i>新增作品
                </a>
            </div>

            <?php if (isset($_SESSION['success'])): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <div class="row g-4">
                <?php foreach ($projects as $project): ?>
                    <div class="col-md-4">
                        <div class="card">
                            <?php if ($project['image']): ?>
                                <img src="<?php echo $project['image']; ?>" class="card-img-top" alt="<?php echo $project['title']; ?>">
                            <?php endif; ?>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $project['title']; ?></h5>
                                <p class="card-text"><?php echo mb_substr($project['description'], 0, 100); ?>...</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="/admin/portfolio/edit/<?php echo $project['id']; ?>" class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-edit me-1"></i>編輯
                                    </a>
                                    <button class="btn btn-sm btn-outline-danger" onclick="deleteProject(<?php echo $project['id']; ?>)">
                                        <i class="fas fa-trash me-1"></i>刪除
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </main>
    </div>
</div>

<script>
function deleteProject(id) {
    if (confirm('確定要刪除這個作品嗎？')) {
        fetch(`/admin/portfolio/delete/${id}`, {
            method: 'POST'
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            }
        });
    }
}
</script>

<?php require_once APP_ROOT . '/views/admin/layouts/footer.php'; ?>