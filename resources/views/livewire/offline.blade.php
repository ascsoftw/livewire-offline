<div wire:offline
    @if($useTailwind)
        class="fixed top-4 left-1/2"
    @else 
        style="position:fixed; margin-top: 1rem; left: 50%;"
    @endif
>
    <div
        @if($useTailwind)
            class="relative -left-1/2 px-4 py-2 font-bold {{$tailwindClasses}} "
        @else 
            style="position:relative; left: -50%;
                font-weight:700; padding-left: 1rem; padding-right: 1rem; padding-top: .5rem; padding-bottom:.5rem;
                color: {{$inlineStyles['text_color']}};
                background-color: {{$inlineStyles['background_color']}};
            "
        @endif
    >
        {{$offlineText}}
    </div>
</div>