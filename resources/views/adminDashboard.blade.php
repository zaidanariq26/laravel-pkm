
<x-dashboardLayout >
    <x-slot:title>{{ $title }}</x-slot:title>
    <div id="main-content" class="p-4 transition-all duration-300">
        <table class="table-hover table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No Hp</th>
                    <th>Jenis Kelamin</th>
                    <th>Hobi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($siswa as $no=>$data)
                <tr>
                <td>{{ $no+1 }}</td>
                <td>{{ $data->nis }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->alamat }}</td>
                <td>{{ $data->no_hp }}</td>
                <td>{{ $data->jenis_kelamin }}</td>
                <td>{{ $data->hobi }}</td>
                <td>
                    <a class="btn btn-warning btn-sm text-xs hover:bg-yellow-600" href="{{ route('siswa.edit',$data->id) }}">Edit</a>
                    <form action="{{ route('siswa.delete', $data->id) }}" method="post">
                        @csrf
                        <button class="btn btn-error btn-sm text-xs hover:bg-red-700" >Hapus</button>
                    </form>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-dashboardLayout>






