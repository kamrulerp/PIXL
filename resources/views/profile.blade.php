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
        <img src="/images/cover.png" alt="cover photo" />

        <div
          class="-mt-10 flex flex-wrap items-end justify-between gap-4 md:-mt-16"
        >
          <div class="flex items-end gap-4">
            <img
              src="/images/adrian.png"
              alt="Avatar for adrian"
              class="size-20 object-cover md:size-32"
            />
            <div class="flex flex-col text-sm md:gap-1">
              <p class="text-lg md:text-xl">_adrian</p>
              <p class="text-pixl-light/60 text-sm">@tudssss</p>
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
          <p>I design <a href="#">@laracasts</a> so hit me up whenever :]</p>
        </div>

        <dl class="mt-6 flex gap-6">
          <div class="flex gap-1.5">
            <dd>100</dd>
            <dt class="text-pixl-light/60">Following</dt>
          </div>
          <div class="flex gap-1.5">
            <dd>2190</dd>
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
        <!-- feed item -->

        <li class="flex items-start gap-4 not-first:pt-2.5">
          <a href="/profile" class="shrink-0">
            <img
              src="/images/michael.png"
              alt="Avatar for michael"
              class="size-10 object-cover"
            />
          </a>
          <div class="grow pt-1.5">
            <div class="border-pixl-light/10 border-b pb-5">
              <!--user meta-->
              <div class="flex items-center justify-between gap-4">
                <div class="flex items-center gap-2.5">
                  <p><a class="hover:underline" href="/profile">Michael</a></p>
                  <p class="text-pixl-light/40 text-xs">3h</p>
                  <p class="text-pixl-light/40 text-xs">
                    <a class="hover:text-pixl-light/60" href="/profile"
                      >@mmic-jl</a
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
                <p>
                  I made this! <a href="#">#myartwork</a> <a href="#">#pixl</a>
                </p>
                <img src="/images/simon-chilling.png" alt="simon-chilling" />
              </div>
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
                    <span class="text-sm">23</span>
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
                    <span class="text-sm">23</span>
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
                    <span class="text-sm">23</span>
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

              <!-- reply form -->

              <div
                class="border-pixl-light/10 bg-pixl-light/[3%] mt-8 flex items-start gap-4 border-t p-4"
              >
                <a href="/profile">
                  <img
                    src="/images/adrian.png"
                    alt="Avatar for adrian"
                    class="size-10 object-cover"
                  />
                </a>

                <form class="grow" action="">
                  <label class="sr-only" for="reply">Reply body</label>
                  <textarea
                    class="w-full resize-none text-sm"
                    name="reply"
                    id="reply"
                    rows="5"
                    placeholder="Reply to Michael's post"
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
                      class="bg-pixl/10 hover:bg-pixl/15 active:bg-pixl/20 text-pixl border border-transparent px-2 py-1"
                      type="submit"
                    >
                      Post
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <!--Threaded replies-->

            <ol>
              <!-- reply -->

              <li class="group/li relative flex items-start gap-4 pt-4">
                <div
                  class="bg-pixl-light/10 absolute top-0 left-5 h-full w-px group-last/li:h-4"
                ></div>
                <a href="/profile">
                  <img
                    src="/images/simon-chilling.png"
                    alt="Avatar for simon"
                    class="isolate size-10 object-cover"
                  />
                </a>
                <div class="border-pixl-light/10 grow border-b pt-1.5 pb-6">
                  <div class="flex items-center justify-between gap-4">
                    <div class="flex items-center gap-2.5">
                      <p>
                        <a class="hover:underline" href="/profile">Simon</a>
                      </p>
                      <p class="text-pixl-light/40 text-xs">1h</p>
                      <p class="text-pixl-light/40 text-xs">
                        <a class="hover:text-pixl-light/60" href="/profile"
                          >@simon-swiss</a
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
                  <div class="mt-4 flex flex-col gap-3 text-sm">
                    <p>Heh -this looks just like me!</p>
                  </div>
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
                        <span class="text-sm">23</span>
                      </div>
                      <!-- Comment -->
                      <div class="flex items-center gap-1">
                        <button aria-label="Comment" class="hover:text-pixl">
                          <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20">
                            <path
                              d="M15 2H5V4H15V2Z"
                              class="fill-icon-btn"
                            ></path>
                            <path
                              d="M17 4H15V6H17V4Z"
                              class="fill-icon-btn"
                            ></path>
                            <path
                              d="M5 4H3V6H5V4Z"
                              class="fill-icon-btn"
                            ></path>
                            <path
                              d="M5 13H3V15H5V13Z"
                              class="fill-icon-btn"
                            ></path>
                            <path
                              d="M9 15H7V17H9V15Z"
                              class="fill-icon-btn"
                            ></path>
                            <path
                              d="M17 13H9V15H17V13Z"
                              class="fill-icon-btn"
                            ></path>
                            <path
                              d="M7 15H5V19H7V15Z"
                              class="fill-icon-btn"
                            ></path>
                            <path
                              d="M19 6H17V13H19V6Z"
                              class="fill-icon-btn"
                            ></path>
                            <path
                              d="M3 6H1V13H3V6Z"
                              class="fill-icon-btn"
                            ></path>
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
                        <span class="text-sm">23</span>
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
                            <path
                              d="M19 3H17V17H19V3Z"
                              class="fill-icon"
                            ></path>
                            <path
                              d="M17 17H3V19H17V17Z"
                              class="fill-icon"
                            ></path>
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
                        <span class="text-sm">23</span>
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
                </div>
              </li>

              <!-- more replies -->
            </ol>
          </div>
        </li>
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
