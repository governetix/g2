<div class="gcore-modal {{ $class }}" id="{{ $id }}" tabindex="-1" role="dialog" aria-labelledby="{{ $id }}Label" aria-hidden="true" style="{{ $style }}" {{ $attributes }}>
    <div class="gcore-modal-dialog gcore-modal-{{ $size }}" role="document">
        <div class="gcore-modal-content">
            <div class="gcore-modal-header">
                <h5 class="gcore-modal-title" id="{{ $id }}Label">{{ $title }}</h5>
                <button type="button" class="gcore-modal-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="gcore-modal-body">
                {{ $slot }}
            </div>
            @if(isset($footer))
                <div class="gcore-modal-footer">
                    {{ $footer }}
                </div>
            @endif
        </div>
    </div>
</div>

@if($backdrop)
<div class="gcore-modal-backdrop" data-modal-id="{{ $id }}"></div>
@endif
