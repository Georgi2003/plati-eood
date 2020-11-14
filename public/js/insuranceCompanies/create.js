$(document).ready(function($){
    $('#spanName').hide();

    //----- Open model CREATE -----//
    $('#btn-add').click(function () {
        $('#btn-save').val("add");
        $('#myForm').trigger("reset");
        $('#formModal').modal('show');
    });

    // CREATE
    $("#btn-save").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        e.preventDefault();

        var formData = {
            name: $('#name').val(),
        };
        
        var state = $('#btn-save').val();
        var type = 'POST';
        var todo_id = $('#todo_id').val();
        var ajaxurl = 'insuranceCompanies';

        $.ajax({
            type: type,
            url: ajaxurl,
            data: formData,
            dataType: 'json',
            success: function (data) {
                var todo = '<tr id="todo' + data.id + '"><td>' + '<p  style="color: green">New!</p>' + '</td><td>' + data.name + '</td>';
                todo += '<td><button value="' + data.id + '">Изтрии</button></td>';
                todo += '<td><button value="' + data.id + '">Актуализирай</button>&nbsp;</td>';
                
                if (state == "add") {
                    $('#todos-list').append(todo);
                } else {
                    $("#todo" + todo_id).replaceWith(todo);
                }

                $('#myForm').trigger("reset");
                $('#formModal').modal('hide')
            },
            error: function (data) {
                if ($('#name').val() == '') 
                {
                    $('#spanName').show().fadeOut(5000);
                }

                if ($('#inhabitants_count').val() == '') 
                {
                    $('#spanInhabitantsCount').show().fadeOut(5000);
                }
            }
        });
    });
});