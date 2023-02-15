<aside id="sidebar">
    <div class="sidebar-title">
        <div class="sidebar-brand">
            <i class="fa fa-cutlery" aria-hidden="true"></i>
            Restaurant
        </div>
        <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
    </div>
    <ul class="sidebar-list">
        <li class="sidebar-list-item">
            <a href="{{ route('dashboard') }}">
                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                Dashboard
            </a>
        </li>
        <li class="sidebar-list-item">
            <a href="{{ route('product-index') }}">
                <i class="fa fa-product-hunt" aria-hidden="true"></i>
                Products
            </a>
        </li>
        <li class="sidebar-list-item">
            <a href="{{ route('category-index') }}">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                Categories </a>
        </li>
        <li class="sidebar-list-item">
            <a href="{{ route('category-index') }}">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                Orders </a>
        </li>
        <li class="sidebar-list-item">
            <a href="{{ route('customer-index') }}">
                <i class="fa fa-users" aria-hidden="true"></i>
                Customers </a>
        </li>
    </ul>
</aside>
