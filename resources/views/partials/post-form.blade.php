<form class="grow" action="">
    <label class="sr-only" for="{{ $fieldName }}">{{ $labelText }}</label>
    <textarea
    class="w-full resize-none text-lg"
    name="{{ $fieldName }}"
    id="{{ $fieldName }}"
    placeholder="{{ $placeholder }}"
    @if(!empty($rows)) rows="{{ $rows }}" @endif
    ></textarea>

    <div class="flex items-center justify-between gap-4">
    <div class="flex gap-4">
        <button type="button">
        <svg
            width="20"
            viewBox="0 0 20 20"
            class="text-icon-btn fill-current"
        >
            <path d="M15 1H5V3H15V1Z"></path>
            <path d="M17 3H15V17H17V3Z"></path>
            <path d="M5 3H3V17H5V3Z"></path>
            <path d="M9 15H7V17H9V15Z"></path>
            <path d="M7 17H5V19H7V17Z"></path>
            <path d="M11 12H9V15H11V12Z"></path>
            <path d="M13 15H11V17H13V15Z"></path>
            <path d="M15 17H13V19H15V17Z"></path>
        </svg>
        </button>
        <button type="button">
        <svg
            width="20"
            viewBox="0 0 20 20"
            class="text-icon-btn fill-current"
            shape-rendering="crispEdges"
            style="image-rendering: pixelated"
        >
            <path d="M16 9V11L18 11V9L16 9Z"></path>
            <path d="M13 7V9L16 9V7L13 7Z"></path>
            <path d="M13 13V11L16 11V13L13 13Z"></path>
            <path d="M10 5V7L13 7V5L10 5Z"></path>
            <path d="M10 15V13L13 13V15L10 15Z"></path>
            <path d="M7 3V5L10 5V3L7 3Z"></path>
            <path d="M7 17V15L10 15V17L7 17Z"></path>
            <path d="M4 1V3L7 3V1L4 1Z"></path>
            <path d="M4 19V17L7 17V19L4 19Z"></path>
            <path d="M2 3L2 17L4 17L4 3L2 3Z"></path>
        </svg>
        </button>
    </div>
    <button
        class="{{ $buttonClasses }}"
        type="submit"
    >
        Post
    </button>
    </div>
</form>