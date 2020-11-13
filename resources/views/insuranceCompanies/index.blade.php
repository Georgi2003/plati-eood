<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Управление на списък със застрахователни компании
        </h2>
    </x-slot>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

    <h1></h1>
    <br>
    <table id="insuranceCompany" align="center" style="border:1px solid black;" class="display">
        <thead>
            <tr>
                <th>№</th>
                <th>Застрахователна компания</th>
                <th>Изтрии</th>
                <th>Актуализирай</th>
            </tr>
        </thead>

        <tbody>
        @foreach($allInsuranceCompanies as $insuranceCompany)
            <tr>
                <td>{{ $loop->iteration }}</td> 
                <td>{{ $insuranceCompany->name }}</td>
                    <td>
                        <form method="post" action="{{ url('insuranceCompanies') }}/{{ $insuranceCompany->id }}">
                            @csrf
                            @method('DELETE')
                            <button style = "text-decoration: none; color: black;" href = "">Изтрий
                            </button>
                        </form>
                    </td>
                    <td>
                        <button>
                            <a style = "text-decoration: none; color: black;" href = "{{ url('insuranceCompanies') }}/{{ $insuranceCompany->id }}/edit">Актуализирай</a>
                        </button>
                    </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready( function () {
            $('#insuranceCompany').DataTable();
        } );
    </script>
</x-app-layout>