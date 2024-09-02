<style>
    .table {
        margin-top: 20px;
        border-collapse: collapse;
    }
    .table th, .table td {
        padding: 12px;
        text-align: left;
        border: 1px solid #ddd;
    }
    .table th {
        background-color: #f2f2f2;
        color: #333;
    }
    .table tr:hover {
        background-color: #f5f5f5;
    }
</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            User From Laravel App1
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                   <table class="table table-striped table-bordered table-hover" style="width:100%">
                    <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                    </tr>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user['name']}}</td>
                        <td>{{$user['email']}}</td>
                        <td>{{$user['status'] == 1 ? 'Active' : 'Inactive'}}</td>
                    </tr>
                    @endforeach
                   </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
