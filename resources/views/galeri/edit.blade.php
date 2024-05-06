@extends('templates/dashboard')
@section('content')
    <div class="bg-white py-6 px-9 mb-5 rounded-lg">
        <form action="/galeri/{{ $galeri['id'] }}" method="POST" enctype="multipart/form-data"
            class="
    [&>div>label]:block [&>div>label]:mb-2 [&>div>label]:text-sm [&>div>label]:font-medium [&>div>label]:text-dark 
    [&>div>textarea]:text-secondary [&>div>textarea]:rounded-lg [&>div>textarea]:text-sm [&>div>textarea]:block [&>div>textarea]:w-full [&>div>textarea]:border [&>div>textarea]:shadow-sm [&>div>input]:text-secondary [&>div>input]:rounded-lg [&>div>input]:text-sm [&>div>input]:block [&>div>input]:w-full [&>div>input]:border [&>div>input]:shadow-sm">
            @csrf
            @method('put')
            <div class="mb-6">
                <label for="judul" class="after:content-['*'] after:ml-0.5 after:text-danger">Judul</label>
                <input type="text" id="judul" name="judul" rows="4"
                    class="px-3 py-2 focus:outline-none @error('judul') border-danger @else border-gray @enderror focus:border-gray focus:ring-gray"
                    {{ old('judul') }} value="{{ $galeri['judul'] }}"</input>
                @error('judul')
                    <p class="mt-1 text-xs text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-dark" for="galeri">Gambar 1 </label>
                @if ($galeri['gambar1'])
                    <img src="http://localhost:8000/storage/{{ $galeri['gambar1'] }}"
                        class="w-[200px] mb-2 block previewImage">
                @else
                    <img src="" class="previewImage">
                @endif
                <input type="hidden" name="oldGambar1" value="{{ $galeri['gambar1'] }}">
                <input
                    class="file:mr-5 file:py-2 file:px-6 file:border-0 file:text-sm file:font-medium file:bg-dark file:text-white block w-full text-sm text-secondary bg-white rounded-lg border @error('galeri') border-danger @else border-gray @enderror shadow-sm focus:border-gray focus:ring-gray cursor-pointer focus:outline-none"
                    aria-describedby="lampiran_help" id="galeri" type="file" name="gambar1" onchange="previewImage()">
                @error('galeri')
                    <p class="mt-1 text-xs text-danger">{{ $message }}</p>
                @else
                    <p class="mb-6 mt-1 text-xs text-secondary">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                @enderror
            </div>


            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-dark" for="galeri">Gambar 2</label>
                @if ($galeri['gambar2'])
                    <img src="http://localhost:8000/storage/{{ $galeri['gambar2'] }}"
                        class="w-[200px] mb-2 block previewImage">
                @else
                    <img src="" class="previewImage">
                @endif
                <input type="hidden" name="oldGambar2" value="{{ $galeri['gambar2'] }}">
                <input
                    class="file:mr-5 file:py-2 file:px-6 file:border-0 file:text-sm file:font-medium file:bg-dark file:text-white block w-full text-sm text-secondary bg-white rounded-lg border @error('galeri') border-danger @else border-gray @enderror shadow-sm focus:border-gray focus:ring-gray cursor-pointer focus:outline-none"
                    aria-describedby="lampiran_help" id="galeri" type="file" name="gambar2" onchange="previewImage()">
                @error('galeri')
                    <p class="mt-1 text-xs text-danger">{{ $message }}</p>
                @else
                    <p class="mb-6 mt-1 text-xs text-secondary">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                @enderror
            </div>


            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-dark" for="galeri">Gambar 3</label>
                @if ($galeri['gambar3'])
                    <img src="http://localhost:8000/storage/{{ $galeri['gambar3'] }}"
                        class="w-[200px] mb-2 block previewImage">
                @else
                    <img src="" class="previewImage">
                @endif
                <input type="hidden" name="oldGambar3" value="{{ $galeri['gambar3'] }}">
                <input
                    class="file:mr-5 file:py-2 file:px-6 file:border-0 file:text-sm file:font-medium file:bg-dark file:text-white block w-full text-sm text-secondary bg-white rounded-lg border @error('galeri') border-danger @else border-gray @enderror shadow-sm focus:border-gray focus:ring-gray cursor-pointer focus:outline-none"
                    aria-describedby="lampiran_help" id="galeri" type="file" name="gambar3" onchange="previewImage()">
                @error('galeri')
                    <p class="mt-1 text-xs text-danger">{{ $message }}</p>
                @else
                    <p class="mb-6 mt-1 text-xs text-secondary">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                @enderror
            </div>


            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-dark" for="galeri">Gambar 4</label>
                @if ($galeri['gambar4'])
                    <img src="http://localhost:8000/storage/{{ $galeri['gambar4'] }}"
                        class="w-[200px] mb-2 block previewImage">
                @else
                    <img src="" class="previewImage">
                @endif
                <input type="hidden" name="oldGambar4" value="{{ $galeri['gambar4'] }}">
                <input
                    class="file:mr-5 file:py-2 file:px-6 file:border-0 file:text-sm file:font-medium file:bg-dark file:text-white block w-full text-sm text-secondary bg-white rounded-lg border @error('galeri') border-danger @else border-gray @enderror shadow-sm focus:border-gray focus:ring-gray cursor-pointer focus:outline-none"
                    aria-describedby="lampiran_help" id="galeri" type="file" name="gambar4" onchange="previewImage()">
                @error('galeri')
                    <p class="mt-1 text-xs text-danger">{{ $message }}</p>
                @else
                    <p class="mb-6 mt-1 text-xs text-secondary">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                @enderror
            </div>


            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-dark" for="galeri">Gambar 5</label>
                @if ($galeri['gambar5'])
                    <img src="http://localhost:8000/storage/{{ $galeri['gambar5'] }}"
                        class="w-[200px] mb-2 block previewImage">
                @else
                    <img src="" class="previewImage">
                @endif
                <input type="hidden" name="oldGambar5" value="{{ $galeri['gambar5'] }}">
                <input
                    class="file:mr-5 file:py-2 file:px-6 file:border-0 file:text-sm file:font-medium file:bg-dark file:text-white block w-full text-sm text-secondary bg-white rounded-lg border @error('galeri') border-danger @else border-gray @enderror shadow-sm focus:border-gray focus:ring-gray cursor-pointer focus:outline-none"
                    aria-describedby="lampiran_help" id="galeri" type="file" name="gambar5"
                    onchange="previewImage()">
                @error('galeri')
                    <p class="mt-1 text-xs text-danger">{{ $message }}</p>
                @else
                    <p class="mb-6 mt-1 text-xs text-secondary">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                @enderror
            </div>


            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-dark" for="galeri">Gambar 6</label>
                @if ($galeri['gambar6'])
                    <img src="http://localhost:8000/storage/{{ $galeri['gambar6'] }}"
                        class="w-[200px] mb-2 block previewImage">
                @else
                    <img src="" class="previewImage">
                @endif
                <input type="hidden" name="oldGambar6" value="{{ $galeri['gambar6'] }}">
                <input
                    class="file:mr-5 file:py-2 file:px-6 file:border-0 file:text-sm file:font-medium file:bg-dark file:text-white block w-full text-sm text-secondary bg-white rounded-lg border @error('galeri') border-danger @else border-gray @enderror shadow-sm focus:border-gray focus:ring-gray cursor-pointer focus:outline-none"
                    aria-describedby="lampiran_help" id="galeri" type="file" name="gambar6"
                    onchange="previewImage()">
                @error('galeri')
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
