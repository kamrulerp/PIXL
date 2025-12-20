<x-layout title="PIXL - Feed">
    <!-- Navigation-->

    @include('partials.navigation', ['showPostButton' => true])

    <!-- Feed content -->
    <main class="-mx-4 flex grow flex-col gap-4 overflow-y-auto px-4 py-4">
      <a href="/feed" class="flex items-center gap-1">
        <svg
          width="15"
          height="20"
          viewBox="0 0 20 20"
          class="-ml-5 hidden fill-current text-current md:inline"
        >
          <path d="M8.2 8.40039H5V11.6004H8.2V8.40039Z"></path>
          <path d="M11.4002 5.2002H8.2002V8.4002H11.4002V5.2002Z"></path>
          <path d="M14.5999 2H11.3999V5.2H14.5999V2Z"></path>
          <path d="M14.5999 14.7998H11.3999V17.9998H14.5999V14.7998Z"></path>
          <path d="M11.4002 11.5996H8.2002V14.7996H11.4002V11.5996Z"></path>
        </svg>
        <span>back</span>
      </a>
      <!-- Profile header -->
      <header>
        <img src="{{$profile->cover_url}}" alt="cover photo" />

        <div
          class="-mt-10 flex flex-wrap items-end justify-between gap-4 md:-mt-16"
        >
          <div class="flex items-end gap-4">
            <img
              src="{{$profile->avatar_url}}"
              alt="Avatar for {{$profile->display_name}}"
              class="size-20 object-cover md:size-32"
            />
            <div class="flex flex-col text-sm md:gap-1">
              <p class="text-lg md:text-xl">_{{$profile->display_name}}</p>
              <p class="text-pixl-light/60 text-sm">@{{$profile->handle}}</p>
            </div>
          </div>

          <a
            href="#"
            class="bg-pixl-dark/50 hover:bg-pixl-dark/60 active:bg-pixl-dark/75 border-pixl/50 hover:border-pixl/60 active:border-pixl/75 text-pixl border px-2 py-1 text-sm"
          >
            Edit Profile
          </a>
        </div>
        <div class="[&_a]:text-pixl mt-8 [&_a]:hover:underline">
          <p>{{$profile->bio}}</p>
        </div>

        <dl class="mt-6 flex gap-6">
          <div class="flex gap-1.5">
            <dd>{{$profile->followings_count}}</dd>
            <dt class="text-pixl-light/60">Following</dt>
          </div>
          <div class="flex gap-1.5">
            <dd>{{$profile->followers_count}}</dd>
            <dt class="text-pixl-light/60">Followers</dt>
          </div>
        </dl>
      </header>
      <!-- Navigation/tabs-->
      <div class="mt-6 h-full">
        <nav class="overflow-x-auto [scrollbar-width:none]">
          <ul class="flex justify-end gap-8 text-sm">
            <li><a href="#">Posts</a></li>
            <li>
              <a class="text-pixl-light/60 hover:text-pixl-light/80" href="#"
                >Replies</a
              >
            </li>
            <li>
              <a class="text-pixl-light/60 hover:text-pixl-light/80" href="#"
                >Highlights</a
              >
            </li>
            <li>
              <a class="text-pixl-light/60 hover:text-pixl-light/80" href="#"
                >Inspiration Streams</a
              >
            </li>
          </ul>
        </nav>
      </div>
      <!--feed-->
      <ol class="border-pixl-light/10 border-t pt-4">
         @foreach($posts as $item)
          <!-- feed item -->

          <x-post
            :post="$item->isRepost() && $item->content == null ? $item->repostOf : $item"
            :show-engagement="true"
            :show-replies="true"
          />
           
        @endforeach
      </ol>

      <footer class="mt-30 ml-14">
        <p class="text-center">That's all, folks!</p>
        <hr class="border-pixl-light/10 my-4" />
        <!-- white noise -->

        <div class="h-20 bg-[url(/images/white-noise.gif)]"></div>
      </footer>
    </main>

    <!-- Sidebar-->
    @include('partials.aside')
</x-layout>
