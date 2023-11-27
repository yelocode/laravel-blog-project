  <div class="relative flex ml-3 space-x-4">
      @can('view-admin', App\Models\User::class)
          <x-nav-link :navigate='false' href="{{ route('filament.admin.auth.login') }}" :active="request()->routeIs('filament.admin.auth.login')">
              {{ __('menu.admin') }}
          </x-nav-link>
      @endcan
      <x-dropdown align="right" width="48">
          <x-slot name="trigger">
              @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                  <button
                      class="flex text-sm transition border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300">
                      <img class="object-cover w-8 h-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}"
                          alt="{{ Auth::user()->name }}" />
                  </button>
              @else
                  <span class="inline-flex rounded-md">
                      <button type="button"
                          class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50">
                          {{ Auth::user()->name }}

                          <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                              viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                          </svg>
                      </button>
                  </span>
              @endif
          </x-slot>

          <x-slot name="content">
              <!-- Account Management -->
              <div class="block px-4 py-2 text-xs text-gray-400">
                  {{ __('menu.manage_account') }}
              </div>

              <x-dropdown-link wire:navigate href="{{ route('profile.show') }}">
                  {{ __('menu.profile') }}
              </x-dropdown-link>

              <div class="border-t border-gray-200"></div>
              <!-- Authentication -->
              <form method="POST" action="{{ route('logout') }}" x-data>
                  @csrf

                  <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                      {{ __('menu.logout') }}
                  </x-dropdown-link>
              </form>
          </x-slot>
      </x-dropdown>
  </div>
