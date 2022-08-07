@include('includes.navbar')

<form action="{{route('users.update',['id'=>request()->get('id')]) }}" method="POST">
    @method("PUT")
    @csrf 
    <label> Name: </label>
    <input type="text" name="name">
    <label>Email:</label>
    <input type="text" name="Email">
    <labe> ID </labe>
    <input type = "text" name="id">
    <label > Actions</label>
    <button type="submit" class="btn btn-primary" >SEND</button>
</form>