@include('templates.header')
<x-navbar/>
    <form action="/login" method="post">
        @csrf
        <div>
            <input type="text" name="name" id="name" placeholder="Email">
        </div>
        <div>
            <input type="text" name="password" id="password" placeholder="Password">
        </div>
        <div>
            <input type="submit" value="Submit">
        </div>
    </form>
@include('templates.footer')