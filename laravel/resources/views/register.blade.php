@include('templates.header')
<x-navbar/>
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    <form action="/register" method="POST">
        @csrf
        <div><input type="text" name="name" id="name" placeholder="Name"><br></div>
        <div><input type="text" name="email" id="email" placeholder="Email"><br></div>
        <div><input type="text" name="password" id="password" placeholder="Password"><br></div>
        <div><input type="submit" value="Submit"></div>
    </form>
@include('templates.footer')