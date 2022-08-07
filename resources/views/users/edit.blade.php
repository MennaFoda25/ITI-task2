@include('includes.navbar')
<form method="POST" action="{{route('users.update',$users['id])}}">
    @method('PUT')
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