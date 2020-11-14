<div class="modal fade" id="formModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="formModalLabel">Създай</h4>
            </div>
            <div class="modal-body">
                <form id="myForm" name="myForm" class="form-horizontal" novalidate="" action="/schools">
                    @csrf
                    <div class="form-group">
                        <label>Име на застрахователната компания</label>
                        <input type="text" class="form-control" id="name" name="name"
                        placeholder="Въведи име">
                        <span style="color: red;" id = "spanName"><br>Въведи име</span>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="btn-save" value="add">
                    Запази
                </button>
                <input type="hidden" id="todo_id" name="todo_id" value="0">
            </div>
        </div>
    </div>
</div>