<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Управление на списък със застрахователни компании
        </h2>
    </x-slot>
    
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    @include('links');

    <div class="container">
        <div style=" margin: 50px;">
            <div class="d-flex bd-highlight mb-4">
                <div class="p-2 w-100 bd-highlight"></div>
            </div>

            <table id="example" class="display nowrap" style="border:1px">
                <thead>
                    <tr>
                        <th>№</th>
                        <th>Потребител</th>
                        <th>Роля</th>
                        @if(Auth::user()->isSuperAdmin())
                        <th>Промени роля</th>
                        <th>Изтрии</th>
                        @endif
                    </tr>
                </thead>

                <tbody id="todos-list">
                    @foreach($allUsers as $users)
                    <tr>
                        <td>{{ $loop->iteration }}</td> 
                        <td>{{ $users->name }}</td>
                        <td>{{ $users->role }}</td>

                        @if(Auth::user()->isSuperAdmin())
                        <td>
                            @if($users->id > 1)
                            <form method="post" action="{{ url('users') }}/{{ $users->id }}">
                                @csrf
                                @method('PUT')
                                <select name="role">
                                    <option value="{{ $users->role }}">{{ $users->role }}</option>
                                    <option value="admin">admin</option>
                                    <option value="user">user</option>
                                </select>
                                <input type="submit" value="✓">
                            </form>
                            @endif

                            @if($users->id == 1)
                            -
                            @endif 
                        </td>
                        <td>
                            @if($users->id > 1)
                            <form method="post" action="{{ url('users') }}/{{ $users->id }}">
                                @csrf
                                @method('DELETE')
                                <button style = "text-decoration: none; color: black;">
                                    Изтрий
                                </button>
                            </form>
                            @endif

                            @if($users->id == 1)
                            -
                            @endif 
                        </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    <script>
        $(document).ready( function () {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy',
                    {
                        extend: 'excel',
                        messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.'
                    },
                    {
                        extend: 'pdf',
                        messageBottom: null
                    }],
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                responsive: true
            });
        });
    </script>
</x-app-layout>
