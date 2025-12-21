<li class="flex items-start gap-4 not-first:pt-2.5">
    <a href="{{ route('profile.show', $post->profile) }}" class="shrink-0">
    <img
        src="{{ $post->profile->avatar_url }}"
        alt="Avatar for {{ $post->profile->display_name }}"
        class="size-10 object-cover"
    />
    </a>
    <div class="grow pt-1.5">
    <div class="border-pixl-light/10 border-b pb-5">
        <!--user meta-->
        <div class="flex items-center justify-between gap-4">
        <div class="flex items-center gap-2.5">
            <p><a class="hover:underline" href="{{ route('profile.show', $post->profile) }}">{{ $post->profile->display_name }}</a></p>
            <p class="text-pixl-light/40 text-xs"><a href="{{ route('post.show', [$post->profile, $post]) }}">{{ $post->created_at }}</a></p>
            <p class="text-pixl-light/40 text-xs">
            <a class="hover:text-pixl-light/60" href="{{ route('profile.show', $post->profile) }}"
                >{{ $post->profile->handle }}</a
            >
            </p>
        </div>
        <button
            class="group flex gap-[3px] py-2"
            aria-label="Post options"
        >
            <span
            class="bg-pixl-light/40 group-hover:bg-pixl-light/60 size-1"
            ></span>
            <span
            class="bg-pixl-light/40 group-hover:bg-pixl-light/60 size-1"
            ></span>
            <span
            class="bg-pixl-light/40 group-hover:bg-pixl-light/60 size-1"
            ></span>
        </button>
        </div>
        <!-- post content -->
        <div
        class="[&_a]:text-pixl mt-4 flex flex-col gap-3 text-sm hover:[&_a]:underline"
        >
        {!! $post->content !!}

        @if($post->isRepost() && $post->content != null)
            <ul>
                <x-post
                    :post="$post->repostOf"
                    :show-engagement="false"
                    :show-replies="false"
                />
            </ul>
        @endif
        </div>
        @if($showEngagement)
        <!-- Action buttons -->
        <div class="mt-6 flex items-center justify-between gap-4">
            <div class="flex items-center gap-8">
                
                <!-- like button -->
                <div class="flex items-center gap-1">
                    <button aria-label="Like" class="hover:text-pixl">
                        <svg viewBox="0 0 20 20" class="h-5 w-5 fill-current">
                        <path
                            d="M5.75837 1.59375H2.90332V4.48449H5.75837V1.59375Z"
                        ></path>
                        <path
                            d="M8.60701 1.59375H5.75195V4.48449H8.60701V1.59375Z"
                        ></path>
                        <path
                            d="M14.3043 1.59375H11.4492V4.48449H14.3043V1.59375Z"
                        ></path>
                        <path
                            d="M17.1519 1.59375H14.2969V4.48449H17.1519V1.59375Z"
                        ></path>
                        <path
                            d="M11.4556 4.47681H8.60059V7.36755H11.4556V4.47681Z"
                        ></path>
                        <path
                            d="M2.91075 4.47681H0.0557022V7.36755H2.91075V4.47681Z"
                        ></path>
                        <path
                            d="M20.0006 4.47656H17.1455V7.3673H20.0006V4.47656Z"
                        ></path>
                        <path
                            d="M2.91075 7.36108H0.0557022V10.2518H2.91075V7.36108Z"
                        ></path>
                        <path
                            d="M5.75837 10.2451H2.90332V13.1359H5.75837V10.2451Z"
                        ></path>
                        <path
                            d="M8.60701 13.1289H5.75195V16.0197H8.60701V13.1289Z"
                        ></path>
                        <path
                            d="M11.4556 16.0127H8.60059V18.9034H11.4556V16.0127Z"
                        ></path>
                        <path
                            d="M14.3043 13.1289H11.4492V16.0196H14.3043V13.1289Z"
                        ></path>
                        <path
                            d="M17.1519 10.2451H14.2969V13.1359H17.1519V10.2451Z"
                        ></path>
                        <path
                            d="M20.0006 7.36133H17.1455V10.2521H20.0006V7.36133Z"
                        ></path>
                        </svg>
                    </button>
                    <span class="text-sm">{{ $post->likes_count }}</span>
                </div>
                <!-- Comment -->
                <div class="flex items-center gap-1">
                    <button aria-label="Comment" class="hover:text-pixl">
                        <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20">
                        <path d="M15 2H5V4H15V2Z" class="fill-icon-btn"></path>
                        <path d="M17 4H15V6H17V4Z" class="fill-icon-btn"></path>
                        <path d="M5 4H3V6H5V4Z" class="fill-icon-btn"></path>
                        <path d="M5 13H3V15H5V13Z" class="fill-icon-btn"></path>
                        <path d="M9 15H7V17H9V15Z" class="fill-icon-btn"></path>
                        <path
                            d="M17 13H9V15H17V13Z"
                            class="fill-icon-btn"
                        ></path>
                        <path d="M7 15H5V19H7V15Z" class="fill-icon-btn"></path>
                        <path
                            d="M19 6H17V13H19V6Z"
                            class="fill-icon-btn"
                        ></path>
                        <path d="M3 6H1V13H3V6Z" class="fill-icon-btn"></path>
                        <path
                            d="M14 7H6V9H14V7Z"
                            class="fill-icon-btn-secondary"
                        ></path>
                        <path
                            d="M11 10H6V12H11V10Z"
                            class="fill-icon-btn-secondary"
                        ></path>
                        </svg>
                    </button>
                    <span class="text-sm">{{ $post->replies_count }}</span>
                </div>
                <!-- Re-post -->
                <div class="flex items-center gap-1">
                    <button aria-label="Re-post" class="hover:text-pixl">
                        <svg
                        class="h-5 w-5 fill-current"
                        viewBox="0 0 20 20"
                        fill="none"
                        >
                        <path d="M17 1H3V3H17V1Z" class="fill-icon"></path>
                        <path d="M19 3H17V17H19V3Z" class="fill-icon"></path>
                        <path d="M17 17H3V19H17V17Z" class="fill-icon"></path>
                        <path
                            d="M11 5H9V11H11V5Z"
                            class="fill-icon-secondary"
                        ></path>
                        <path
                            d="M13 11H11V13H13V11Z"
                            class="fill-icon-secondary"
                        ></path>
                        <path
                            d="M15 13H13V15H15V13Z"
                            class="fill-icon-secondary"
                        ></path>
                        <path d="M3 3H1V17H3V3Z" class="fill-icon"></path>
                        </svg>
                    </button>
                    <span class="text-sm">{{ $post->reposts_count }}</span>
                </div>
                
            </div>
            <div class="flex items-center gap-3">
                <!-- Save -->
                <div class="flex items-center gap-1">
                <button aria-label="Save" class="hover:text-pixl">
                    <svg viewBox="0 0 20 20" class="h-5 w-5 fill-current">
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
                <span class="text-pixl-light/40 text-sm">Save</span>
                </div>

                <!-- Share -->
                <div class="flex items-center gap-1">
                <button aria-label="Share" class="hover:text-pixl">
                    <svg viewBox="0 0 20 20" class="h-5 w-5 fill-current">
                    <path d="M17 5H1V7H17V5Z"></path>
                    <path d="M3 3H1V5H3V3Z"></path>
                    <path d="M13 3H11V5H13V3Z"></path>
                    <path d="M11 1H3V3H11V1Z"></path>
                    <path d="M19 7H17V17H19V7Z"></path>
                    <path d="M17 17H3V19H17V17Z"></path>
                    <path d="M3 7H1V17H3V7Z"></path>
                    </svg>
                </button>
                </div>
            </div>
        </div>
        @endif

    </div>
@if($showReplies)
  <!--Threaded replies-->
    <ol>
        <!-- reply -->
        @foreach ($post->replies as $reply)
           <x-reply :post="$reply" :show-replies="$showReplies" :show-engagement="$showEngagement"/>
        @endforeach
        <!-- more replies -->
    </ol>
@endif
    </div>
</li>