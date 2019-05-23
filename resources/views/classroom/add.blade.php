			


<form action="{{route('handleAddClassroom')}}" method="POST" enctype="multipart/form-data">
	
{{ csrf_field() }}
<label for="title">Nom de classe</label>
 <input class="form-control" type="text" name="title">
 <label for="title">Image de classe</label>
 <input class="form-control" type="file" name="photo">
<hr>
	<button type="submit">Ajouter</button>
</form>