<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>
    <style>
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th{
            background-color: darkblue;
            color: white;
        }
    </style>
    <div class="container" style="text-align: center; justify-content: center; align-items: center; align: center; display: flex">
        <table style="border-collapse: collapse; width: 100%; border: 1px solid black; display: flexbox">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subjects as $subject)
                <tr>
                    <td> {{ $loop->iteration }} </td>
                    <td> {{ $subject['name'] }} </td>
                    <td> {{ $subject['description'] }} </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>