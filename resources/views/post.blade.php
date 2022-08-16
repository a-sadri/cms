<x-layout>
    <slot>
        <div>
            <h1>{{ $post->title }}</h1>
            <p>{{ $post->excerpt }}</p>
            <p><a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a></p>
            <p><a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            <p>{{ $post->body }}</p>
        </div>
    </slot>
</x-layout>