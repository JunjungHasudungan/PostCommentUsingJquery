<div>
    <h1 class="text-center mb-10 bg-slate-600">Ini component posts</h1>
    <ul>
        @forelse ($posts as $item)
        <li class="text-center">Judul: {{$item->title}}</li>
        <li class="text-center"> Keterangan:  {{$item->description}} </li>
        <li class="text-center">User: {{$item->user->name ?? 'Tidak ada' }} </li>
            
        @empty
            <li class="text-center bg-yellow-500 bg-auto w-auto"> Tidak ada data</li>
        @endforelse
    </ul>
</div>