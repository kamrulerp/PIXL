<x-layout title="PIXL - Feed">
    <!-- Navigation-->
    @include('partials.navigation')

    <!-- Feed content -->
    <main class="-mx-4 flex grow flex-col gap-4 overflow-y-auto px-4 py-4">
      <nav>
        <ul class="flex justify-end gap-8 text-sm">
          <li><a href="#">For you</a></li>
          <li>
            <a class="text-pixl-light/60 hover:text-pixl-light/80" href="#"
              >Idea streams</a
            >
          </li>
          <li>
            <a class="text-pixl-light/60 hover:text-pixl-light/80" href="#"
              >Following</a
            >
          </li>
        </ul>
      </nav>

      <!-- post prompt -->
      <div
        class="border-pixl-light/10 mt-8 flex items-start gap-4 border-b pb-4"
      >
        <a href="/profile">
          <img
            src="/images/adrian.png"
            alt="Avatar for adrian"
            class="size-10 object-cover"
          />
        </a>
      <!-- post form -->
      @include('partials.post-form', [
          'fieldName' => 'post',
          'labelText' => 'Post body',
          'placeholder' => "What's up _adrian",
          'buttonClasses' =>'bg-pixl hover:bg-pixl/90 active:bg-pixl/95 text-pixl-dark border border-transparent px-2 py-1',
      ])
      </div>

      <!--feed-->
      <ol class="mt-4">
        @foreach($posts as $item)
          <!-- feed item -->
          <x-post :post="$item" /> 
          @include('partials.feed-item', compact('item'))
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
