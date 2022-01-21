<h1> Event's List</h1>
<table border="1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Slug</td>
        <td>Created at</td>
        <td>Updated at</td>
        <td>Actions</td>
    </tr>
    @foreach($lists as $list)
    <tr>
        <td>{{$list['id']}}</td>
        <td>{{$list['name']}}</td>
        <td>{{$list['slug']}}</td>
        <td>{{$list['createdAt']}}</td>
        <td>{{$list['updatedAt']}}</td>
        <td>
            <div>Update</div>
            <div>Delete</div>
        </td>
    </tr>
    @endforeach
    
</table>
{{ $lists->links() }}