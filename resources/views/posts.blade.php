<x-layout>
    @include('_post-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <x-post-featured-card />

        <div class="lg:grid lg:grid-cols-2">
            <x-post-card />
            <x-post-card />
        </div>

        <div class="lg:grid lg:grid-cols-3">
            <x-post-card />
            <x-post-card />
            <x-post-card />
        </div>
    </main>
    {{-- <slot>
        @foreach($posts as $post)
            <div>
                By <a href="/authors/{{$post->author->username}}">{{ $post->author->name }}</a><a href="/posts/{{ $post->id }}"><h2>{{ $post->title }}</h2></a>

                <p><a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

                {{ $post->excerpt }}
            </div>
            <hr>
        @endforeach
    </slot> --}}
</x-layout>
