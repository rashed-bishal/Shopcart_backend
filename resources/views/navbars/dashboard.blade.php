<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{route('admin.dashboard')}}">Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownCategory" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categories & SubCategories
                </a>
                <div class="dropdown-menu"  aria-labelledby="navbarDropdownCategory">
                    <a class="dropdown-item" href="{{route('admin.dashboard.category.list')}}">All Categories</a>
                    <a class="dropdown-item" href="{{route('admin.dashboard.category.manage')}}">Category Management</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('admin.dashboard.subcategory.list')}}">All SubCategory</a>
                    <a class="dropdown-item" href="{{route('admin.dashboard.subcategory.manage')}}">SubCategory Management</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownSubCategory" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Product Management
                </a>
                <div class="dropdown-menu"  aria-labelledby="navbarDropdownSubCategory">
                    <a class="dropdown-item" href="{{route('admin.products.create')}}">Create Product</a>
                    <a class="dropdown-item" href="">Update Product</a>
                    <a class="dropdown-item" href="">Delete Product</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>