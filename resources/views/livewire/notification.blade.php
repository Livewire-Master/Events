<div>
    @if($is_visible)
        <div
            style="
        position: absolute;
        top: 2rem;
        right: 2rem;
        background-color: #656565;
        border-radius: 0.2rem;
        padding: 0.6rem 0.4rem;
        max-width: 24rem;
        width: 100%;
        text-align: right;
    "
        >
            {{ $message }}
        </div>
    @endif
</div>
