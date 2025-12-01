@extends('template.main')
@section('aktif', 'active')
@section('judul', 'Halaman Mahasiswa Prestasi')
@section('konten')

    <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-0">Daftar Mahasiswa berprestasi</h4>
        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a>
                </li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active">Data</li>
            </ol>
        </div>

        <div class="card">
            <div class="card-body">

                <div class="table-responsive mb-4">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Fakultas</th>
                                <th>Universitas</th>
                                <th>Jenis Lomba</th>
                                <th>Tingkat Lomba</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($mapres as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->fakultas }}</td>
                                    <td>{{ $data->universitas }}</td>
                                    <td>{{ $data->jenis_lomba }}</td>
                                    <td>{{ $data->tingkat_lomba }}</td>
                                    <td>
                                        <!-- Tombol Edit -->
                                        <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#editModal{{ $data->id }}">
                                            Edit
                                        </button>

                                        <!-- Tombol Hapus -->
                                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#hapusModal{{ $data->id }}">
                                            Hapus
                                        </button>
                                    </td>

                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">Tidak ada data</td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>

                @foreach ($mapres as $data)
                    {{-- edit --}}
                    <div class="modal fade" id="editModal{{ $data->id }}" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <form action="{{ route('MapresUpdate', $data->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Data</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <div class="modal-body">

                                        <div class="mb-3">
                                            <label class="form-label">Nama</label>
                                            <input type="text" name="nama" class="form-control"
                                                value="{{ $data->nama }}">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Universitas</label>
                                            <input type="text" name="universitas" class="form-control"
                                                value="{{ $data->universitas }}">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Fakultas</label>
                                            <input type="text" name="fakultas" class="form-control"
                                                value="{{ $data->fakultas }}">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Jenis Lomba</label>
                                            <input type="text" name="jenis_lomba" class="form-control"
                                                value="{{ $data->jenis_lomba }}">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Tingkat Lomba</label>
                                            <input type="text" name="tingkat_lomba" class="form-control"
                                                value="{{ $data->tingkat_lomba }}">
                                        </div>

                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>


                    {{-- hapus --}}
                    <div class="modal fade" id="hapusModal{{ $data->id }}" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <form action="{{ route('MapresDelete', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <div class="modal-header">
                                        <h5 class="modal-title">Konfirmasi Hapus</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <div class="modal-body">
                                        Apakah kamu yakin ingin menghapus data
                                        <strong>{{ $data->nama }}</strong>?
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

    </div>


@endsection
