<?php require_once APP_ROOT . '/views/admin/layouts/header.php'; ?>

<div class="container-fluid">
    <div class="row">
        <?php require_once APP_ROOT . '/views/admin/layouts/sidebar.php'; ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">新增作品</h1>
            </div>

            <form action="/admin/portfolio/create" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="title" class="form-label">標題</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">描述</label>
                    <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">作品圖片</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>

                <div class="mb-3">
                    <label for="link" class="form-label">作品連結</label>
                    <input type="url" class="form-control" id="link" name="link" placeholder="https://">
                </div>

                <button type="submit" class="btn btn-primary">儲存</button>
                <a href="/admin/portfolio" class="btn btn-secondary">取消</a>
            </form>
        </main>
    </div>
</div>

<?php require_once APP_ROOT . '/views/admin/layouts/footer.php'; ?>