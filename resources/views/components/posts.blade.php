<div>
    <h1 class="text-center mb-10 bg-slate-600">Ini component posts</h1>
    <ul>
        @forelse ($posts as $item)
        <li class="text-center">
           Judu: {{$item->title}}
        </li>
        <li class="text-center">
           Keterangan:  {{$item->description}}
        </li>
        <li class="text-center">User:  {{$item->name}} </li>
            
        @empty
            
        @endforelse
    </ul>
</div>