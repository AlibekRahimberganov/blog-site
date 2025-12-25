<x-layout>
    <h2>Posts.</h2>
    <ul>
        @foreach ($posts as $post)
            <li class="container my-4 p-4 border rounded-lg hover:shadow-lg transition-shadow duration-300">
                <a href="/post/{{ $post->id }}">
                    <h3> {{ $post->title }} </h3>
                    <div>
                        @php
                            $path = $post->content_media ?? null;
                        @endphp
                        @if ($path)
                            @switch(strtolower(pathinfo($path, PATHINFO_EXTENSION)))
                                
                                @case('jpg')
                                @case('jpeg')
                                @case('png')
                                @case('gif')
                                <img src="{{ asset('storage/' . $path) }}" alt="Picture" class="max-w-full rounded-lg">
                                @break

                                @case('mp4')
                                <video controls class="max-w-full rounded-lg">
                                    <source src="{{ asset('storage/' . $path) }}" alt="video_file" type="video/mp4">
                                </video>
                                @break

                                @case('mp3')
                                <audio controls class="w-full">
                                    <source src="{{ asset('storage/' . $path) }}" alt="audio_file" type="audio/mpeg">
                                </audio>
                                @break
                            @endswitch
                        @endif
                        <p>{{ $post->content }}</p> <br>
                    </div>
                    <h4>Author: <b>{{ $post->user->login }}</b></h4>
                    <h5>Category: <b>{{ $post->category->name }}</b></h5>                        
                </a>
            </li>
            @endforeach
    </ul>
    {{ $posts->links() }}

</x-layout>