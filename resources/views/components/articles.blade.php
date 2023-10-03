<div class="mx-auto lg:grid lg:grid-cols-12 lg:gap-4">
  <div class="hidden lg:block lg:col-span-3">

      <!-- Previews -->
      <div class="text-lg font-bold text-gray-600 mb-1">Matchups</div>

      @foreach ($previews as $preview)

          <div class="flex flex-col rounded-lg shadow-xl overflow-hidden mb-4">
              <div class="flex-shrink-0">
                  <img class="w-full h-16 object-cover object-center" src="{{ $preview->image }}" alt="">
              </div>
              <div class="flex-1 bg-white p-2 text-sm text-gray-700 flex flex-col justify-between">

                  <a href="{{ $preview->link }}" target="_blank" class="hover:font-bold hover:text-blue-700">
                      {{ $preview->headline }}
                  </a>
              </div>
          </div>

      @endforeach

  </div>

  <!-- Headlines -->
  <div class="lg:col-span-6">


      <div class="text-lg font-bold text-gray-600 mb-1">Headlines</div>

      @foreach ($headlines as $headline)

          <div class="flex flex-col rounded-lg shadow-xl overflow-hidden mb-4">
              <div class="flex-shrink-0">
                  <img class="w-full object-cover object-top h-60" src="{{ $headline->image }}" alt="">
              </div>
              <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                  <div class="flex-1">
                      <a href="#" class="block mt-2">
                          <p class="text-xl font-semibold text-gray-900">
                              {{ $headline->headline }}
                          </p>
                          <p class="mt-3 text-base text-gray-500">
                              {{ $headline->description }}
                          </p>
                      </a>
                  </div>
                  <div class="mt-6 flex items-center">

                      <div class="ml-3">
                          <div class="flex space-x-1 text-sm text-gray-500">
                              <time datetime="{{ $headline->published }}">
                                  {{ $headline->published }}
                              </time>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

      @endforeach

  </div>

  <div class="hidden lg:block lg:col-span-3">
          <!-- Articles -->
          <div class="text-lg font-bold text-gray-600 mb-1">Articles</div>
          <div
              class="rounded-lg bg-white border border-gray-200 divide-y divide-gray-200 shadow-xl overflow-hidden mb-4">


              @foreach ($stories as $story)

                  <div class="p-2 text-sm text-gray-700">
                      <a href="{{ $story->link }}" target="_blank" class="hover:font-bold hover:text-blue-700">
                          {{ $story->headline }}
                      </a>
                  </div>

              @endforeach
          </div>
  </div>

</div>