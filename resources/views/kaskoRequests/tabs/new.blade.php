<table id="newRquest" align="center" style="border:1px solid black;" class="display">
    <thead>
        <tr>
            <th>№</th>
            <th>Талон</th>
            <th>Име</th>
            <th>Телефон</th>
            <th>Email</th>
            <th>Статус</th>
            <th>Промени статуса</th>
            <th>Бележка</th>
            <th>Запази</th>
            <th>Дата</th>
        </tr>
    </thead>

    <tbody id="todos-list">
        @foreach($allKaskoRequests as $kaskoRequests)
        @if($kaskoRequests->status == "Нова заявка")
        
        <tr>
            <td>{{ $loop->iteration }}</td> 
            <td>
                <img id="myImg" style="width: 50px; height:50px" src="{{ $kaskoRequests->coupon_file }}">               
            </td>
            <td>{{ $kaskoRequests->name }}</td>
            <td>{{ $kaskoRequests->phone }}</td>
            <td>{{ $kaskoRequests->email }}</td>
            <td>{{ $kaskoRequests->status }}</td>

            <form method="post" action="{{ url('kaskoRequests') }}/{{ $kaskoRequests->id }}">
                @csrf
                @method('PUT')
                <td>
                    <select name="status">
                        <option value="{{ $kaskoRequests->status }}">{{ $kaskoRequests->status }}</option>
                        <option value="Направена оферта">Направена оферта</option>
                        <option value="Сключена сделка">Сключена сделка</option>
                        <option value="Архивирана">Архивирана</option>
                    </select>
                </td>            
                <td>                
                    <textarea name="message" rows="3" cols="20">{{ $kaskoRequests->message }}</textarea>
                </td>
                <td>
                    <input type="submit" value="Запази">
                </td>
            </form>
            <td>{{ $kaskoRequests->created_at }}</td>
        </tr>
        @endif
        @endforeach
    </tbody>
</table>