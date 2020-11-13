<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Управление на списък със застрахователни компании
        </h2>
    </x-slot>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
  
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>

    <h1></h1>
    <br>
    <table id = "myTable" align="center" style="border:1px solid black;" class="display">
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

    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
</x-app-layout>