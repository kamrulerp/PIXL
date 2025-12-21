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

      <x-profile.header :profile="$profile" />

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
