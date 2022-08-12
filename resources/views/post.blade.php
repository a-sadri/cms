<x-layout>
    <slot>
        <div>
            {{ $post->title }}
            <br>
            {{ $post->excerpt }}
            <br>
            {{ $post->body }}
        </div>
    </slot>
</x-layout>