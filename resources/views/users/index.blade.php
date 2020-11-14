<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Управление на списък със застрахователни компании
        </h2>
    </x-slot>
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

    <div class="container">
        <div style=" margin: 50px;">
            <div class="d-flex bd-highlight mb-4">
                <div class="p-2 w-100 bd-highlight"></div>
            </div>
        <table id="users" align="center" style="border:1px solid black;" class="display">
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
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready( function () {
            $('#users').DataTable();
        });
    </script>
    <br>
</x-app-layout>
