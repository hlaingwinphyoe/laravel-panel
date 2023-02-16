<li class="sidebar-item {{ $link === request()->url() ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ $link }}">
        <i class="align-middle fa-solid {{ $class }}"></i> <span class="align-middle">{{ $title }}</span>
    </a>
</li>
