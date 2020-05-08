<form method="post" action="{{URL::to('/process')}}">
    Name: <input type="text" name="name">
    @csrf
    <input type="submit" name="submit" value="send">
</form>
