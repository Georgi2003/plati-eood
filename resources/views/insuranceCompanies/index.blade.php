<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Управление на списък със застрахователни компании
        </h2>
    </x-slot>
    
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>

    <div class="container">
        <div style=" margin: 50px;">
            <div class="d-flex bd-highlight mb-4">
                <div class="p-2 w-100 bd-highlight"></div>
            </div>

            <table id="example" class="display nowrap" style="border:1px">
                <thead>
                    <tr>
                        <th>№</th>
                        <th>Застрахователна компания</th>
                        <th>Изтрии</th>
                        <th>Актуализирай</th>
                    </tr>
                </thead>

                <tbody id="todos-list">
                    @foreach($allInsuranceCompanies as $insuranceCompany)
                    <tr>
                        <td>{{ $loop->iteration }}</td> 
                        <td>{{ $insuranceCompany->name }}</td>
                        <td>
                            <form method="post" action="{{ url('insuranceCompanies') }}/{{ $insuranceCompany->id }}">
                                @csrf
                                @method('DELETE')
                                <button style = "text-decoration: none; color: black;">
                                    Изтрий
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
    </div>

    <script>
        $(document).ready( function () {
            $('#example').DataTable({
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                responsive: true
            });
        });
    </script>
    <br>
</x-app-layout>
