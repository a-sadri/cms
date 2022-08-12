<x-layout>
    <slot>
        @foreach($posts as $post)
            <div>
                <a href="posts/{{ $post->id }}">{{ $post->title }}</a>
                <br>
                {{ $post->excerpt }}
            </div>
            <hr>
        @endforeach
    </slot>
</x-layout>