@extends('templates/dashboard')
@section('content')
    <div class="bg-white py-4 px-9 mb-5 rounded-lg flex justify-between items-center">
        <div class="">
            <h1 class="text-lg lg:text-2xl text-danger font-semibold mb-2">{{ $title }}</h1>
            <p class="text-base font-normal text-secondary">BPD</p>
        </div>
        <div>
            <a href="/bpd/create"
                class="text-white bg-danger focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">Tambah
                Anggota</a>
        </div>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full rounded-lg bg-white divide-y divide-gray overflow-hidden mb-5">
            <thead class="bg-danger">

                <tr class="text-white text-left">
                    <th class="font-semibold text-sm uppercase px-4 py-4">#</th>
                    <th class="font-semibold text-sm uppercase px-4 py-4">Nama</th>
                    <th class="font-semibold text-sm uppercase px-4 py-4">Jabatan</th>
                    <th class="font-semibold text-sm uppercase px-4 py-4">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray">
                @forelse ($data as $row)
                    <tr>
                        <td class="px-4 py-4 text-secondary">{{ $loop->iteration }}</td>
                        <td class="px-4 py-4 text-secondary">{{ Str::limit($row['nama'], 50) }}</td>
                        <td class="px-4 py-4 text-secondary">{{ Str::limit($row['jabatan'], 50) }}</td>
                        <td class="px-4 py-4 text-secondary">
                            <a href='{{ route('bpd.edit', $row['id']) }}' class="btn btn-warning btn-sm">Edit</a>
                            <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline'
                                action="{{ route('bpd.destroy', $row['id']) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Data Masih Kosong</td>
                    </tr>
                @endforelse

            </tbody>
        </table>
    </div>
@endsection
