<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link <?php echo $page === 'dashboard' ? 'active' : ''; ?>" href="/admin/dashboard">
                    <i class="fas fa-tachometer-alt me-2"></i>
                    控制台
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $page === 'posts' ? 'active' : ''; ?>" href="/admin/posts">
                    <i class="fas fa-file-alt me-2"></i>
                    文章管理
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $page === 'portfolio' ? 'active' : ''; ?>" href="/admin/portfolio">
                    <i class="fas fa-briefcase me-2"></i>
                    作品管理
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/auth/logout">
                    <i class="fas fa-sign-out-alt me-2"></i>
                    登出
                </a>
            </li>
        </ul>
    </div>
</nav>