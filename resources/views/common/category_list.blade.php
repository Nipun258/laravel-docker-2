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
            Categories From Laravel App1
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                   <table class="table table-striped table-bordered table-hover" style="width:100%">
                    <tr>
                            <th>ID</th>
                            <th>Type ID</th>
                            <th>Name</th>
                            <th>Category Code</th>
                            <th>Sorting Order</th>
                    </tr>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{$category['id']}}</td>
                        <td>{{$category['category_type_id']}}</td>
                        <td>{{$category['category_name']}}</td>
                        <td>{{$category['category_code']}}</td>
                        <td>{{$category['sorting_order']}}</td>
                    </tr>
                    @endforeach
                   </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
