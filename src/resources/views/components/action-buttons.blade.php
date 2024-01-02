<div class="col-auto ms-auto d-print-none">
    <div class="btn-list">
        @if ($showButton1)
            <span class="d-none d-sm-inline">
                <a href="{{ $button1Url }}" class="btn">{{ $button1Label }}</a>
            </span>
        @endif
        @if ($showButton2)
            <a href="{{ $button2Url }}" class="btn btn-primary d-none d-sm-inline-block">
                {{ $button2Label }}
            </a>
        @endif
    </div>
</div>
