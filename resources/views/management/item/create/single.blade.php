<div class="row item">
    <div class="col-xs-1 item-icon">
        {!! $icon or '' !!}
    </div>
    <div class="col-xs-11">
        <div class="row">
            <div class="col-xs-4 item-key">
                <label for="{{ $id }}">
                    {{ $label or '' }}
                </label>
            </div>
            <div class="col-xs-6 item-value">
                <input type="text" class="form-control" id="{{ $id }}" name="{{ $id }}"
                       value="" {{ isset($disabled) ? 'disabled' : '' }}>
            </div>
        </div>
    </div>
</div>
