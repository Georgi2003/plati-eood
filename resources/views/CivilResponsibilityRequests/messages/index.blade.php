<link rel="stylesheet" href="{{ asset('css/notes.css') }}">

<div id="id01" class="modal">
    <div class="modal-content animate" style="text-align: center;">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Затвори">&times;</span>
        <img src="{{ asset('img/avatar.jpg') }}" width="45" height="50">
        <h3>Бележки</h3>

        <div id="modalContainer" class="container">
            <button id="addNoteButton" class="btn btn-success" style = "float: right; text-decoration: none; color: white;"><a href="#section">Добави</a></button>
            <br>

            @foreach($allMessages as $message)
                <hr>
                {{ $loop->iteration }}. <b>{{ $message->user->name }}</b> {{ $message->created_at }}
                <br>
                {{$message->message }}

                @if($message->user_id == Auth::user()->id)
                    <form method="post" action="{{ url('messages') }}/{{ $message->id }}">
                        @csrf
                        @method('DELETE')
                        <button class="buttonDestroyMessage" style = "float: right;text-decoration: none; color: black;">
                            Изтрий
                        </button>
                    </form>
                @endif
                <br>
            @endforeach
        </div>

        <div class="main" id="section">
        <!-- create -->
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
</div>

<script>
    $(document).ready(function(){
        $("#user_id").hide();
        $("#addNote").hide();
        $("#closeNote").hide();

        $("#addNoteButton").click(function(){
            $("#addNote").show();
            $("#note").hide();
            $("#closeNote").show();
        });

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
