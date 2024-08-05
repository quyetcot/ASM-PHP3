  <!-- Sidebar wrapper start -->
  <nav id="sidebar" class="sidebar-wrapper">

    <!-- App brand starts -->
    {{-- <div class="app-brand px-3 py-3 d-flex align-items-center">
      <a href="index.html">
        <img src="/admin/assets/images/logo.svg" class="logo" alt="Bootstrap Gallery" />
      </a>
    </div> --}}
    <!-- App brand ends -->

    <!-- Sidebar profile starts -->
    {{-- <div class="sidebar-user-profile">
      <img src="/admin/assets/images/user.png" class="profile-thumb rounded-circle p-2 d-lg-flex d-none"
        alt="Bootstrap Gallery" />
      <h5 class="profile-name lh-lg mt-2 text-truncate">Michelle Max</h5>
      <ul class="profile-actions d-flex m-0 p-0">
        <li>
          <a href="javascript:void(0)">
            <i class="bi bi-skype fs-4"></i>
            <span class="count-label"></span>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <i class="bi bi-dribbble fs-4"></i>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <i class="bi bi-twitter fs-4"></i>
          </a>
        </li>
      </ul>
    </div> --}}
    <!-- Sidebar profile ends -->

    <!-- Sidebar menu starts -->
    <div class="sidebarMenuScroll">
      <ul class="sidebar-menu">
        <li class="active current-page">
          <a href="index.html">
            <span class="menu-text">Thống kê</span>
          </a>
        </li>
        <li>
          <a href="{{ route('articles.index') }}">
            <span class="menu-text">Quản trị tin</span>
          </a>
        </li>
        <li>
            <a href="{{ '/admin/categories' }}">
              <span class="menu-text">Quản trị loại tin</span>
            </a>
          </li>
      </ul>
    </div>
    <!-- Sidebar menu ends -->

  </nav>
  <!-- Sidebar wrapper end -->