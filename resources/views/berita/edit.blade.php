@extends('templates/dashboard')
@section('content')
    <div class="bg-white py-6 px-9 mb-5 rounded-lg">
        <form action="/berita/{{ $berita['id'] }}" method="POST" enctype="multipart/form-data"
            class="
    [&>div>label]:block [&>div>label]:mb-2 [&>div>label]:text-sm [&>div>label]:font-medium [&>div>label]:text-dark 
    [&>div>textarea]:text-secondary [&>div>textarea]:rounded-lg [&>div>textarea]:text-sm [&>div>textarea]:block [&>div>textarea]:w-full [&>div>textarea]:border [&>div>textarea]:shadow-sm [&>div>input]:text-secondary [&>div>input]:rounded-lg [&>div>input]:text-sm [&>div>input]:block [&>div>input]:w-full [&>div>input]:border [&>div>input]:shadow-sm">
            @csrf
            @method('put')
            <div class="mb-6">
                <label for="judul" class="after:content-['*'] after:ml-0.5 after:text-danger">Judul</label>
                <input type="text" id="judul" name="judul" rows="4"
                    class="px-3 py-2 focus:outline-none @error('judul') border-danger @else border-gray @enderror focus:border-gray focus:ring-gray"
                    {{ old('judul') }} value="{{ $berita['judul'] }}"</input>
                @error('judul')
                    <p class="mt-1 text-xs text-danger">{{ $message }}</p>
                @enderror
            </div>



            <div class="mb-6">
                <label for="deskripsi" class="after:content-['*'] after:ml-0.5 after:text-danger">Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi" rows="4"
                    class="px-3 py-2 focus:outline-none @error('deskripsi') border-danger @else border-gray @enderror focus:border-gray focus:ring-gray" ">{{ $berita['deskripsi'] }} </textarea>
                @error('deskripsi')
                    <p class="mt-1 text-xs text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-dark" for="berita">Gambar Berita</label>
                @if ($berita['gambar'])
                    <img src="http://localhost:8000/storage/{{ $berita['gambar'] }}"
                        class="w-[200px] mb-2 block previewImage">
                @else
                    <img src="" class="previewImage">
                @endif
                <input type="hidden" name="oldBerita" value="{{ $berita['gambar'] }}">
                <input
                    class="file:mr-5 file:py-2 file:px-6 file:border-0 file:text-sm file:font-medium file:bg-dark file:text-white block w-full text-sm text-secondary bg-white rounded-lg border @error('berita') border-danger @else border-gray @enderror shadow-sm focus:border-gray focus:ring-gray cursor-pointer focus:outline-none"
                    aria-describedby="lampiran_help" id="berita" type="file" name="gambar" onchange="previewImage()">
                @error('berita')
                    <p class="mt-1 text-xs text-danger">{{ $message }}</p>
                @else
                    <p class="mb-6 mt-1 text-xs text-secondary">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                @enderror
            </div>

            <div class="flex justify-end">
                <button type="submit"
                    class="text-white bg-danger focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit</button>
            </div>
        </form>
    </div>
@endsection
