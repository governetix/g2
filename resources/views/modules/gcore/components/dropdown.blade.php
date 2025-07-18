<div class="gcore-dropdown {{ $class }}" style="{{ $style }}" {{ $attributes }}>
    <button type="button" class="gcore-dropdown-toggle">
        {{ $label }} <i class="fas fa-caret-down"></i>
    </button>
    <div class="gcore-dropdown-menu gcore-dropdown-menu-{{ $align }}">
        {{ $slot }}
    </div>
</div>