<x-dashboardLayout>
	<x-slot:title>{{ $title }}</x-slot:title>
	<div id="main-content" class="p-4 transition-all duration-300">
		<form action="{{ route('siswa.update', $siswa->id) }}" method="post" class="space-y-4" enctype="multipart/form-data">
			@csrf
			<div>
				<label class="block ms-2 mb-2" for="nis">NIS</label>
				<input name="nis" type="number" value="{{ $siswa->nis }}" id="nis" class="input" placeholder="NIS" />
			</div>
			<div>
				<label class="block ms-2 mb-2" for="nama">Nama</label>
				<input name="nama" type="text" value="{{ $siswa->nama }}" id="nama" class="input" placeholder="Nama" />
			</div>
			<div>
				<label class="block ms-2 mb-2" for="alamat">Alamat</label>
				<input name="alamat" id="alamat" value="{{ $siswa->alamat }}" class="input" placeholder="Alamat" />
			</div>
			<div>
				<label class="block ms-2 mb-2" for="no_hp">No Hp</label>
				<input name="no_hp" id="no_hp" value="{{ $siswa->no_hp }}" class="input" placeholder="No Hp" />
			</div>
			<div>
				<label class="block ms-2 mb-2" for="jenis_kelamin">Jenis Kelamin</label>
				<input name="jenis_kelamin" value="{{ $siswa->jenis_kelamin }}" id="jenis_kelamin" class="input"
					placeholder="Jenis Kelamin" />
			</div>
			<div>
				<label class="block ms-2 mb-2" for="hobi">Hobi</label>
				<input name="hobi" id="hobi" value="{{ $siswa->hobi }}" class="input" placeholder="Hobi" />
			</div>
			<button class="btn btn-primary">Update</button>
		</form>
	</div>
</x-dashboardLayout>
