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
                    <th>Grade</th>
                    <th>Email</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr>
                    <td> {{ $loop->iteration }} </td>
                    <td> {{ $student->name }} </td>
                    <td> {{ $student->classroom->name }} </td>
                    <td> {{ $student->email }} </td>
                    <td> {{ $student->address }} </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>