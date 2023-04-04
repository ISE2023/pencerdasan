<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
    @vite('resources/css/app.css')
    @livewireStyles()
</head>
<body class=" bg-[#f1e9e9] bg-cover">
    @livewire('pages.register')
    @livewireScripts()
</body>
</html>



{{--
@if ($errors->any())
    <div
     class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 --}}

{{-- 
 <form action="register" method="POST">
    @csrf
    <label for="">email</label>
    <input type="text" name="email" id="email">
    <div>
    @error('email')
        {{ $message }}
    @enderror</div>
    <br>
    <label for="">ID Number</label>
    <input type="number" name="idNum" id="idNum">
    <div>
    @error('idNum')
        {{ $message }}
    @enderror
    </div>
    <br>
    <label for="">Male</label>
    <input type="radio" name="gender" id="male">
    <label for="">Female</label>
    <input type="radio" name="gender" id="female">
    @error('gender')
        {{ $message }}
    @enderror
    <br>
    <div>Account Type</div>
    <select name="accountType" id="accountType">
        <option value="guest">Guest</option>
        <option value="student">Student</option>
        <option value="teacher">Teacher</option>
    </select>
    @error('accountType')
        {{ $message }}
    @enderror
    <br>
    <button type="submit">submit</button>
</form>
--}}