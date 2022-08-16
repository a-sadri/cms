<x-layout>
    <slot>
        @foreach($posts as $post)
            <div>
                By <a href="#">Ali Sadri</a><a href="/posts/{{ $post->id }}"><h2>{{ $post->title }}</h2></a>

                <p><a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

                {{ $post->excerpt }}
            </div>
            <hr>
        @endforeach
    </slot>
</x-layout>