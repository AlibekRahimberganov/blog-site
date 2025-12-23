<x-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <h2>Create an Account:</h2>
        <br><br>

        <label for="login">Login:</label>
        <input 
            type="text" 
            id="login" 
            name="login" 
            required
            value="{{ old('login') }}"
        >
        <br><br>

        <label for="email">Email:</label>
        <input 
            type="email" 
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
            required>
        <br><br>
        
        <label for="password_confirmation">Confirm Password:</label>
        <input 
            type="password" 
            id="password_confirmation" 
            name="password_confirmation" 
            required>
        <br><br>
        
        <button class="btn" type="submit">
            Register
        </button>
    </form>
    <br><br>
    <p>
        Already have an account? 
        <a class="reg_btn" href="/login">Login here.</a>
    </p>

    @if($errors->any())
        <ul class="px-4 py-2 bg-red-100">
            @foreach($errors->all() as $error)
                <li class="my-2 text-red-500">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</x-layout>
