<li class="nav-item">
    <a class="nav-link  {{ $page === "Home" ? "active" : "" }}" aria-current="page" href="#">Home</a>
</li>
<li class="nav-item">
    <a class="nav-link {{ $page === "Carts" ? "active" : "" }}" href="#">Carts <span class="badge text-bg-secondary">{{ $jumlah_cart }}</span></a>
</li>
<li class="nav-item">
    <a class="nav-link {{ $page === "Histories" ? "active" : "" }}" href="#">Histories</a>
</li>
<li class="nav-item">
    <a class="nav-link {{ $page === "Profiles" ? "active" : "" }}" href="#">Profiles</a>
</li>