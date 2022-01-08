<x-layout>
    @if ($posts->count())
        <x-post-featured-card :post="$posts[0]"/>
    @else
        <p>No post Found</p>
    @endif
    <x-posts-grid :posts="$posts"/>
</x-layout>
