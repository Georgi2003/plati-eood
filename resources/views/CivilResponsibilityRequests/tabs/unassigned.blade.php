<table id="newRquest" align="center" style="border:1px solid black;" class="display">
    <thead>
        <tr>
            <th>№</th>
            <th>Телефон</th>
            <th>Статус</th>
            <th>Бележка</th>

            <th>Запази</th>
            <th>Талон</th>
            <th>Дата</th>
        </tr>
    </thead>

    <tbody id="todos-list">
        @foreach($allCivilResponsibilityRequests as $CivilResponsibilityRequests)
        @if($CivilResponsibilityRequests->status == "Неназначени")
        
        <tr>
            <td>{{ $loop->iteration }}</td> 
            
            <td>{{ $CivilResponsibilityRequests->phone }}</td>

            <form method="post" action="{{ url('CivilResponsibilityRequests') }}/{{ $CivilResponsibilityRequests->id }}">
                @csrf
                @method('PUT')
                <td>
                    <select name="status">
                        <option value="{{ $CivilResponsibilityRequests->status }}">{{ $CivilResponsibilityRequests->status }}</option>
                        <option value="Направена оферта">Направена оферта</option>
                        <option value="Сключена сделка">Сключена сделка</option>
                        <option value="Архивирана">Архивирана</option>
                    </select>
                </td>            
                <td>                
                    <textarea name="message" rows="3" cols="20">{{ $CivilResponsibilityRequests->message }}</textarea>
                </td>
                <td>
                    <input type="submit" value="Запази">
                </td>
            </form>
            <td>
                <img id="myImg" style="width: 50px; height:50px" src="{{ $CivilResponsibilityRequests->coupon_file }}">
            </td>
            <td>{{ $CivilResponsibilityRequests->created_at }}</td>
        </tr>
        @endif
        @endforeach
    </tbody>
</table>