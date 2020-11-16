<table id="newRquest" align="center" style="border:1px solid black;" class="display">
    <thead>
        <tr>
            <th>№</th>
            <th>Статус</th>
            <th>Бележка</th>
            <th>Дата</th>
            <th>Назначи</th>

            <th>Телефон</th>
            <th>Адрес</th>
            <th>Талон</th>
            <th>Снимка на талона</th>
            <th>Регистрационен номер</th>
            <th>Вид МПС</th>
            <th>Мощност</th>

            <th>Обем на двигателя</th>
            <th>Година на производство</th>
            <th>Брой вноски</th>
            <th>Последна компания</th>
        </tr>
    </thead>

    <tbody id="todos-list">
        @foreach($allCivilResponsibilityRequests as $civilResponsibilityRequests)
        @if($civilResponsibilityRequests->status == "Неназначени")
        <tr>
            <td>{{ $loop->iteration }}</td> 
            <td>{{ $civilResponsibilityRequests->phone }}</td>
            <td>{{ $civilResponsibilityRequests->status }}</td>
            <td>
                <form method="post" action="{{ url('civilResponsibilityRequests') }}/{{ $civilResponsibilityRequests->id }}">
                    @csrf
                    @method('PUT')
                    
                    <select name="role">
                        @foreach($allUsers as $users)
                        <option value="{{ $users->name }}">{{ $users->name }}</option>
                        @endforeach
                    </select>
                    
                    <input type="submit" value="Запази">
                </form>              
            </td>
            <td>{{ $civilResponsibilityRequests->created_at }}</td>

            <td>{{ $civilResponsibilityRequests->phone }}</td>
            <td>{{ $civilResponsibilityRequests->adress }}</td>
            <td>{{ $civilResponsibilityRequests->coupon_number }}</td>
            <td>{{ $civilResponsibilityRequests->coupon_file }}</td>
            <td>{{ $civilResponsibilityRequests->registration_number }}</td>
            
            <td>{{ $civilResponsibilityRequests->vehicle_type }}</td>
            <td>До {{ $civilResponsibilityRequests->kW }}kW ({{ $civilResponsibilityRequests->horse_power }}к. с.)</td>
            
            <td>До {{ $civilResponsibilityRequests->volume }}cm³ вкл.</td>
            <td>{{ $civilResponsibilityRequests->year_production }}</td>
            <td>{{ $civilResponsibilityRequests->payments_count }}</td>
            <td>{{ $civilResponsibilityRequests->insuranceCompany->name }}</td>
        </tr>
        @endif
        @endforeach
    </tbody>
</table>