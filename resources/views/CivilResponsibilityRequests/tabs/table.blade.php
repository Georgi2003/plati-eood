<table id="{{ $tableName }}" align="center" style="border:1px;" class="display">
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
        @foreach($civilResponsibilityRequest as $civilResponsibilityRequest)
        <tr>
            <td>{{ $loop->iteration }}</td> 
            <form method="post" action="{{ url('CivilResponsibilityRequests') }}/{{ $civilResponsibilityRequest->id }}">
                @csrf
                @method('PUT')
                <td>
                    <select name="status">
                        <option value="{{ $civilResponsibilityRequest->status }}">{{ $civilResponsibilityRequest->status }}</option>
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
                        <option value="0">{{ $civilResponsibilityRequest->user->name }}</option>
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
            <td>{{ $civilResponsibilityRequest->created_at }}</td>

            <td>{{ $civilResponsibilityRequest->phone }}</td>

            <td>{{ $civilResponsibilityRequest->adress }}</td>
            <td>{{ $civilResponsibilityRequest->coupon_number }}</td>
            <td>{{ $civilResponsibilityRequest->coupon_file }}</td>
            <td>{{ $civilResponsibilityRequest->registration_number }}</td>

            <td>{{ $civilResponsibilityRequest->vehicle_type }}</td>
            <td>До {{ $civilResponsibilityRequest->kW }}kW ({{ $civilResponsibilityRequest->horse_power }}к. с.)</td>

            <td>До {{ $civilResponsibilityRequest->volume }}cm³ вкл.</td>
            <td>{{ $civilResponsibilityRequest->year_production }}</td>
            <td>{{ $civilResponsibilityRequest->payments_count }}</td>
            <td>{{ $civilResponsibilityRequest->insuranceCompany->name }}</td>
        </tr>
        @endforeach
    </tbody>
</table> 
@include('CivilResponsibilityRequests.messages.index')
