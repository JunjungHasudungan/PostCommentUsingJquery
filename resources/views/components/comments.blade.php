<div>
    <h1 class="text-center">Ini component posts</h1>
    <ul>
        @forelse ($comments as $item)
        <li class="text-center">
            {{$item->title}}
        </li>
        {{-- <li class="text-center">
            {{$item->description}}
        </li> --}}
        <li class="text-center"> {{$item->posts->title}} : {{$item->description}} </li>
        {{-- <li class="text-center"> {{$item->posts->title}} </li> --}}
            
        @empty
            
        @endforelse
    </ul>
</div>