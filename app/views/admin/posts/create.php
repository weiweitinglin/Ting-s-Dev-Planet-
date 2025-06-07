<?php require_once APP_ROOT . '/views/admin/layouts/header.php'; ?>

<div class="container-fluid">
    <div class="row">
        <?php require_once APP_ROOT . '/views/admin/layouts/sidebar.php'; ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">新增文章</h1>
            </div>

            <form action="/admin/posts/create" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="title" class="form-label">標題</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">內容</label>
                    <textarea class="form-control" id="content" name="content" rows="10" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="cover_image" class="form-label">封面圖片</label>
                    <input type="file" class="form-control" id="cover_image" name="cover_image">
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">狀態</label>
                    <select class="form-select" id="status" name="status">
                        <option value="draft">草稿</option>
                        <option value="published">發布</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">儲存</button>
                <a href="/admin/posts" class="btn btn-secondary">取消</a>
            </form>
        </main>
    </div>
</div>

<?php require_once APP_ROOT . '/views/admin/layouts/footer.php'; ?>