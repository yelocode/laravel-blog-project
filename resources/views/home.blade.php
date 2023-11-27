<x-app-layout title="Home Page">
    @section('hero')
        <div class="w-full py-32 text-center">
            <h1 class="text-2xl font-bold text-center text-gray-700 md:text-3xl lg:text-5xl">
                {{ __('home.hero.title') }} <span class="text-yellow-500">&lt;YELO&gt;</span> <span class="text-gray-900">
                    News</span>
            </h1>
            <p class="mt-1 text-lg text-gray-500">{{ __('home.hero.desc') }}</p>
            <a class="inline-block px-3 py-2 mt-5 text-lg text-white bg-gray-800 rounded" href="{{ route('posts.index') }}">
                {{ __('home.hero.cta') }}</a>
        </div>
    @endsection

    <div class="w-full mb-10">
        <div class="mb-16">
            <h2 class="mt-16 mb-5 text-3xl font-bold text-yellow-500"> {{ __('home.featured_posts') }} </h2>
            <div class="w-full">
                <div class="grid w-full grid-cols-3 gap-10">
                    @foreach ($featuredPosts as $post)
                        <x-posts.post-card :post="$post" class="col-span-3 md:col-span-1" />
                    @endforeach
                </div>
            </div>
            <a class="block mt-10 text-lg font-semibold text-center text-yellow-500" href="{{ route('posts.index') }}">
                {{ __('home.more_posts') }}</a>
        </div>
        <hr>

        <h2 class="mt-16 mb-5 text-3xl font-bold text-yellow-500">{{ __('home.latest_posts') }}</h2>
        <div class="w-full mb-5">
            <div class="grid w-full grid-cols-3 gap-10">
                @foreach ($latestPosts as $post)
                    <x-posts.post-card :post="$post" class="col-span-3 md:col-span-1" />
                @endforeach
            </div>
        </div>
        <a class="block mt-10 text-lg font-semibold text-center text-yellow-500" href="{{ route('posts.index') }}">
            {{ __('home.more_posts') }}</a>
    </div>
</x-app-layout>
