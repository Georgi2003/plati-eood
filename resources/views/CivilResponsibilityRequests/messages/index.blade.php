<link rel="stylesheet" href="{{ asset('css/notes.css') }}">

<div id="id01" class="modal">
	<div class="modal-content animate" style="text-align: center;">
		<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
		<img src="{{ asset('img/avatar.jpg') }}" width="45" height="50">

		<h1>Бележки</h1>
		<div class="container">
			@foreach($allMessages as $messages)
				@if($civilResponsibilityRequests->id == $messages->civil_responsibility_request_id)
					{{ $loop->iteration }}. {{$messages->message}} Автор: {{$messages->user_id}}
					<br>
				@endif
			@endforeach
		</div>
	</form>
</div>

<script>
	var modal = document.getElementById('id01');
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
	}
</script>
