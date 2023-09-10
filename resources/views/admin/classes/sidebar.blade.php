<div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
        <ul class="navigation-left">
            <li class="nav-item"><a class="nav-item-hold" href="{{ route('admin') }}"><i class="nav-icon fas fa-home"></i><span class="nav-text">Админ панель</span></a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item"><a class="nav-item-hold" href="{{ route('settings.index') }}"><i class="nav-icon fas fa-cog"></i><span class="nav-text">Настройки</span></a>
                <div class="triangle"></div>
            </li>
           
        </ul>
    </div>
    <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
        <ul class="childNav" data-parent="settings">
            <li class="nav-item"><a href="{{ route('settings.index') }}"><i class="nav-icon fas fa-wrench"></i><span class="item-name">Настройка сайта</span></a></li>
        </ul>
    </div>
    <div class="sidebar-overlay"></div>
</div>