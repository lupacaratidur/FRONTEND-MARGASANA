@extends('templates/dashboard')
@section('content')
    <div class="bg-white py-6 px-9 mb-5 rounded-lg">
        <form action="/pemerintah_desa" method="POST" enctype="multipart/form-data"
            class="
    [&>div>label]:block [&>div>label]:mb-2 [&>div>label]:text-sm [&>div>label]:font-medium [&>div>label]:text-dark 
    [&>div>textarea]:text-secondary [&>div>textarea]:rounded-lg [&>div>textarea]:text-sm [&>div>textarea]:block [&>div>textarea]:w-full [&>div>textarea]:border [&>div>textarea]:shadow-sm [&>div>input]:text-secondary [&>div>input]:rounded-lg [&>div>input]:text-sm [&>div>input]:block [&>div>input]:w-full [&>div>input]:border [&>div>input]:shadow-sm">
            @csrf
            <div class="mb-6">
                <label for="nama" class="after:content-['*'] after:ml-0.5 after:text-danger">Nama</label>
                <input id="nama" name="nama" rows="4"
                    class="px-3 py-2 focus:outline-none @error('nama') border-danger @else border-gray @enderror focus:border-gray focus:ring-gray"
                    placeholder="Masukan nama pegawai">{{ old('nama') }}</input>
                @error('nama')
                    <p class="mt-1 text-xs text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="jabatan" class="after:content-['*'] after:ml-0.5 after:text-danger">Jabatan</label>
                <input id="jabatan" name="jabatan" rows="4"
                    class="px-3 py-2 focus:outline-none @error('jabatan') border-danger @else border-gray @enderror focus:border-gray focus:ring-gray"
                    placeholder="Masukan jabatan pegawai">{{ old('jabatan') }}</input>
                @error('jabatan')
                    <p class="mt-1 text-xs text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="foto">Foto Pegawai</label>
                <img src="" class="previewImage">
                <input
                    class="file:mr-5 file:py-2 file:px-6 file:border-0 file:text-sm file:font-medium file:bg-dark file:text-white @error('foto') border-danger @else border-gray @enderror focus:border-gray focus:ring-gray cursor-pointer focus:outline-none"
                    id="foto" type="file" name="foto" onchange="previewImage()">
                @error('foto')
                    <p class="mt-1 text-xs text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end">
                <button type="submit"
                    class="text-white bg-danger focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit</button>
            </div>
        </form>
    </div>
@endsection
