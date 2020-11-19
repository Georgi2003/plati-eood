<table id="unassignedRquest" align="center" style="border:1px;" class="display">
    <thead>
        <tr>
            <th>№</th>
            <th>Статус</th>
            @if(Auth::user()->isSuperAdmin())
                <th>Назначи</th>
            @endif
            <th>Запази</th>
            <th>Бележки</th>
            <th>Дата</th>
            
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
        @if($civilResponsibilityRequests->user_id == Auth::user()->id || Auth::user()->isSuperAdmin() || Auth::user()->isAdmin())
        @if($civilResponsibilityRequests->status == "Неназначени")
        <tr>
            <td>{{ $loop->iteration }}</td> 
            <form method="post" action="{{ url('CivilResponsibilityRequests') }}/{{ $civilResponsibilityRequests->id }}">
                @csrf
                @method('PUT')
                <td>
                    <select name="status">
                        <option value="{{ $civilResponsibilityRequests->status }}">{{ $civilResponsibilityRequests->status }}</option>
                        <option value="Обработени">Обработени</option>
                        @if(Auth::user()->isSuperAdmin())
                        <option value="Завършени">Завършени</option>                    
                        <option value="Архивирани">Архивирани</option>
                        <option value="Всички">Всички</option>
                        @endif
                    </select>
                </td> 
                @if(Auth::user()->isSuperAdmin())
                <td>
                    <select name="user_id">
                        <option value="0">{{ $civilResponsibilityRequests->user->name }}</option>
                        @foreach($allUsers as $users)
                            <option value="{{ $users->id }}">{{ $users->name }}</option>
                        @endforeach
                    </select>
                </td>
                @endif
                <td>    
                    <input type="submit" value="Запази">
                </td>
            </form>     
            <td>
                <button class="but_view" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">
                    Виж
                </button>
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
        @endif
        @endforeach
    </tbody>
</table> 
@include('CivilResponsibilityRequests.messages.index')