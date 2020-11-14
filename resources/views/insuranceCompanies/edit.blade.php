<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Управление на списък със застрахователни компании
        </h2>
    </x-slot>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <form method="post" action = "{{ url('insuranceCompanies') }}/{{ $insuranceCompany->id }}"> 
                {{ csrf_field() }}
                @method('PUT')

                <br>
                Актуализирай броят параметри:
                <br>        
                <input type="text" class="form-control" id="name" name="name" value="{{ $insuranceCompany->name }}">

                <br>
                <input class="form-control" type = "submit" name = "submit" value="Запази">  
        </form>
    </div>
</x-app-layout>