<x-layout>
    <h1>{{ $user->login }}</h1>
    <p>Email: {{ $user->email }}</p>
    <p>Joined: {{ $user->created_at->format('d M Y') }}</p>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-link">Logout</button>
    </form>
    <p>Posts:</p>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="/post/{{ $post->id }}">
                    <b> <p> {{ $post->author }} </p> <br>
                    <p> {{ $post->title }} </p> <br> </b>
                    <img src="{{ "storage/" . $post->content_media }}" alt="Post Media">
                    <pre> {{ $post->content }} </pre> <br>
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>