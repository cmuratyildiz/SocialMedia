<html>

@if($errors)
    @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
    @endforeach
@endif
<form action="{{route('forgot.pass')}}" method="post">
    @csrf

    <input type="text" name="email">
    <input type="submit" value="gonder">
</form>
</html>