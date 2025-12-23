<x-layout>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <h2>Log In To Your Account:</h2> 
        <br><br>

        <label for="email">
            E-mail:
        </label>

        <input 
            type="text" 
            id="email" 
            name="email" 
            required 
            value="{{ old('email') }}"
        >
        <br><br>

        <label for="password">Password:</label>
        <input 
            type="password" 
            id="password" 
            name="password" 
            required
        >
        <br><br>

        <button class="btn" type="submit">
            Login
        </button>
    </form>
    <br><br>
    <p>
        Don't have an account? 
        <a class="reg_btn" href="/register">Register here.</a>
    </p>
    @if($errors->any())
        <ul class="px-4 py-2 bg-red-100">
            @foreach($errors->all() as $error)
                <li class="my-2 text-red-500">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

</x-layout>