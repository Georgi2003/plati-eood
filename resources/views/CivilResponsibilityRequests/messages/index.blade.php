<div class="modal fade" id="messagesModal" tabindex="-1" role="dialog" aria-labelledby="messagesModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="messagesModalLabel">Бележки</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <button id="addNoteButton" class="btn btn-success" style = "float: right; text-decoration: none; color: white;"><a href="#section">Добави</a></button>
                <br>
                <p>
                    <strong> Съобщения: </strong> <span class="messages"></span>
                </p>
            </div>

            <div class="main" id="section">
            <!-- create -->
                <div style="text-align: center; background-color:#f1f1f1">
                    <button id="closeNote" type="button" style = "float: right; padding: 8px; margin: 8px;" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>

                    <div id="addNote">
                        Добави бележка
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

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Затвори</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $("#user_id").hide();
        $("#addNote").hide();
        $("#closeNote").hide();

        $("#addNoteButton").click(function(){
            $("#addNote").show();
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

    $('#messagesModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal

        //Fetch modal data from html modal button
        var requestId = button.data('id')
        var messages = button.data('messages')

        //Fill out the data in modal
        var modal = $(this)

        var messagesString = '';
        for (var i = 0; i < messages.length; i++) {
            var datetime = new Date(messages[i].created_at);

            var datestring = datetime.getDate()  + "." + (datetime.getMonth()+1) + "." + datetime.getFullYear() + " " + datetime.getHours() + ":" + datetime.getMinutes();
            messagesString += messages[i].user.name + ' ' + datestring + ' ' + messages[i].message + '\n';
        }
          // modal.find('.id').text(id)
        modal.find('.messages').text(messagesString)
    });
</script>