<link rel="stylesheet" href="{{ asset('css/notes.css') }}">

<div id="id01" class="modal">
	<div class="modal-content animate" style="text-align: center;">
		<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Затвори">&times;</span>
		<img src="{{ asset('img/avatar.jpg') }}" width="45" height="50">
		<h3>Бележки</h3>
		 
		<div id="modalContainer" class="container">
			@foreach($allMessages as $messages)
			@if(1 == $messages->civil_responsibility_request_id)
				{{ $loop->iteration }}. {{$messages->message}} Автор: {{$messages->user->name}}
				<br>
			@endif
			@endforeach
		</div>

		<div style="background-color:#f1f1f1">
			<button class="container" id="note" type="button" title="Отвори" class="psw">Въведи бележка</button>
			<button id="closeNote" type="button" title="Затвори">Затвори</button>
			<div id="addNote">
	      		<form method="post" action = "/messages"> 
				    {{ csrf_field() }}
					<textarea name="message" rows="3" cols="20" placeholder = "Въведи бележка"></textarea>
					<br>
					<div class="GFGclass" id="divGFG"></div>

					<input type = "submit" name = "submit" value="Запази">
				</form>
			</div>
    	</div>
	</div>
</div>

<script>
	$(document).ready(function(){
		$("#user_id").hide();
		$("#addNote").hide();
		$("#closeNote").hide();

		$("#note").click(function(){
		    $("#addNote").show();
		    $("#note").hide();
		    $("#closeNote").show();
		});

		$("#closeNote").click(function(){
		    $("#addNote").hide();
		    $("#note").show();
		    $("#closeNote").hide();
		});

		$(".but_view").click(function(){
			$('#id01').show();
		});
	});
</script>
