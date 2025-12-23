<x-layout>
    <h2>Posts.</h2>
    @foreach ($posts as $post)
        <ul>
            <li>
                <a href="/post/{{ $post->id }}">
                    <div>
                        <h3> {{ $post->title }} </h3>
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
                        <pre>{{ $post->content }}</pre> <br>
                        <h4>Author: {{ $post->user->login }} </h4>                        
                    </div>
                </a>
            </li>
        </ul>
    @endforeach
    {{ $posts->links() }}

</x-layout>