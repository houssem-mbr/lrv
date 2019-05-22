			


<form action="{{route('handleAddClassroom')}}" method="POST">
	
{{ csrf_field() }}
 <input class="form-control" type="text" name="title">
 <input type="text" name="photo">
	<button type="submit">OK</button>
</form>