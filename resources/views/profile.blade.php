<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>
    <div class="container" style="text-align: center; justify-content: center; align-items: center;">
        <h1><strong>Ini adalah profile Saya</strong></h1>
        <div class="row" style="display: flex; text-align: left; width: 50%;">
            <p>Nama: {{ $nama }}</p>
            <p>Kelas: {{ $kelas }}</p>
            <p>Sekolah: {{ $sekolah }}</p>
        </div>
    </div>
</x-layout>