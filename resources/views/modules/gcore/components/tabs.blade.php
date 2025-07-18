<div class="gcore-tabs {{ $class }}"
     style="width: {{ $width }}; height: {{ $height }}; background-color: {{ $backgroundColor }}; border: {{ $borderWidth }} solid {{ $borderColor }}; border-radius: {{ $borderRadius }}; box-shadow: {{ $boxShadow }}; color: {{ $textColor }}; {{ $style }}"
     {{ $attributes }}>
    <div class="gcore-tabs-header">
        @foreach($tabs as $tab)
            <button type="button"
                    class="gcore-tab-button @if($tab['id'] === $activeTab) active @endif"
                    data-tab-id="{{ $tab['id'] }}"
                    style="background-color: @if($tab['id'] === $activeTab) {{ $tabActiveColor }} @else {{ $tabColor }} @endif;
                           color: @if($tab['id'] === $activeTab) hsl(var(--color-fondo-principal)) @else {{ $textColor }} @endif;
                           border-bottom-color: @if($tab['id'] === $activeTab) {{ $tabActiveColor }} @else transparent @endif;">
                @if(isset($tab['icon']))
                    <i class="{{ $tab['icon'] }}"></i>
                @endif
                {{ $tab['label'] }}
            </button>
        @endforeach
    </div>
    <div class="gcore-tabs-content">
        {{ $slot }} {{-- Slot for tab panels --}}
    </div>
</div>

<style>
    /* Dynamic styles for tabs component */
    .gcore-tabs .gcore-tab-button:hover {
        background-color: {{ $tabHoverColor }} !important;
        color: hsl(var(--color-fondo-principal)) !important;
    }
</style>