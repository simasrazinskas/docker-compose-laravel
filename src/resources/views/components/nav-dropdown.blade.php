<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false">
        <span class="nav-link-icon d-md-none d-lg-inline-block">
            {{ $icon ?? '' }}
        </span>
        <span class="nav-link-title">
            {{ $title }}
        </span>
    </a>
    {{ $slot }}
</li>