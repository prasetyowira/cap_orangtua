<form action="{{route('orangtua.store')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="link" placeholder="Link">
    <input type="file" name="image" placeholder="Image">
    <input type="submit" value="submit">
</form>