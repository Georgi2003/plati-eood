<table id="{{$tableName}}" align="center" style="border:1px;" class="display">
    <thead>
        <tr>
            <th>№</th>
            <th>Талон</th>
            <th>Име</th>
            <th>Телефон</th>
            <th>Email</th>
            <th>Статус</th>
            <th>Бележка</th>
            <th>Запази</th>
            <th>Дата</th>
        </tr>
    </thead>
    
    <tbody id="todos-list">
        @foreach($kaskoRequests as $kaskoRequest)       
        <tr>
            <td>{{ $loop->iteration }}</td> 
            <td>
                <div class="w3-container w3-third">
                    <img src="{{ $kaskoRequest->coupon_file }}" style="" 
                    onclick="onClick(this)" class="w3-hover-opacity">
                </div>
            </td>
            <td>{{ $kaskoRequest->name }}</td>
            <td>{{ $kaskoRequest->phone }}</td>
            <td>{{ $kaskoRequest->email }}</td>

            <form method="post" action="{{ url('kaskoRequests') }}/{{ $kaskoRequest->id }}">
                @csrf
                @method('PUT')
                <td>
                    <select name="status">
                        <option value="{{ $kaskoRequest->status }}">{{ $kaskoRequest->status }}</option>
                        <option value="Нова заявка">Нова заявка</option>
                        <option value="Направена оферта">Направена оферта</option>
                        <option value="Сключена сделка">Сключена сделка</option>
                        <option value="Архивирана">Архивирана</option>
                    </select>
                </td>            
                <td>                
                    <textarea name="message" rows="3" cols="20">{{ $kaskoRequest->message }}</textarea>
                </td>
                <td>
                    <input type="submit" value="Запази">
                </td>
            </form>
            <td>{{ $kaskoRequest->created_at }}</td>
        </tr>
        @endforeach
    </tbody>
</table>