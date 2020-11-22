<table id="{{ $tableName }}" align="center" style="border:1px;" class="display">
    <thead>
        <tr>
            <th>№</th>
            <th>Статус</th>
            @if(Auth::user()->isSuperAdmin() || Auth::user()->isAdmin())
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
            <th>Поръчка №</th>
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
                        <option value="Неназначени">Неназначени</option>
                        <option value="Обработени">Обработени</option>
                        @if(Auth::user()->isSuperAdmin() || Auth::user()->isAdmin())
                            <option value="Завършени">Завършени</option>         
                            <option value="Архивирани">Архивирани</option>
                            <option value="Всички">Всички</option>
                        @endif
                    </select>
                </td> 
                @if(Auth::user()->isSuperAdmin() || Auth::user()->isAdmin())
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
                <button class="but_view" type="button" style="width:auto;">
                    Виж
                </button>
            </td>
            <td>{{ $civilResponsibilityRequest->created_at }}</td>
            <td>{{ $civilResponsibilityRequest->phone }}</td>
            <td>{{ $civilResponsibilityRequest->adress }}</td>
            <td>{{ $civilResponsibilityRequest->coupon_number }}</td>
            <td>
                {{ $civilResponsibilityRequest->coupon_file }}
            </td>
            <td>{{ $civilResponsibilityRequest->registration_number }}</td>
            <td>{{ $civilResponsibilityRequest->vehicle_type }}</td>
            <td>До {{ $civilResponsibilityRequest->kW }}kW ({{ $civilResponsibilityRequest->horse_power }}к. с.)</td>
            <td>До {{ $civilResponsibilityRequest->volume }}cm³ вкл.</td>
            <td>{{ $civilResponsibilityRequest->year_production }}</td>
            <td>{{ $civilResponsibilityRequest->payments_count }}</td>
            <td>{{ $civilResponsibilityRequest->insuranceCompany->name }}</td>
            <td class="id">{{ $civilResponsibilityRequest->id }}</td>
        </tr>
        @endforeach
    </tbody>
</table> 
<script type="text/javascript">
    $(function () {
        $(".but_view").click(function () { 
            var a = $(this).parents("tr").find(".id").text(); 
            var p = "";  
            p +=  "<input type = 'hidden' name = 'civil_responsibility_request_id' value='" + a + "'>"; 
            //CLEARING THE PREFILLED DATA 
            $("#divGFG").empty(); 
            //WRITING THE DATA ON MODEL 
            $("#divGFG").append(p); 
        }); 
    }); 
</script> 

@include('CivilResponsibilityRequests.messages.index')
