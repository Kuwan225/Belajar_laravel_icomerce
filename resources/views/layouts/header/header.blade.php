<div class="container d-flex justify-content-between align-items-center p-2 mt-3">
    <p class="h3">Wan Forum</p>
    <ul class="nav nav nav-pills ">
        <li class="nav-item">
            <a class="nav-link {{ ($title === "home" ? 'active':'') }}" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ ($title === "products" ? 'active':'') }}" aria-current="page" href="/products">Products</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ ($title === "about" ? 'active':'') }}" href="/about">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ ($title === "contact" ? 'active':'') }}" href="/contact">Contact</a>
        </li>
    </ul>
</div>