@extends('templates/dashboard')
@section('content')
    <div class="bg-white py-6 px-9 mb-5 rounded-lg">
        <form action="/galeri" method="POST" enctype="multipart/form-data"
            class="
    [&>div>label]:block [&>div>label]:mb-2 [&>div>label]:text-sm [&>div>label]:font-medium [&>div>label]:text-dark 
    [&>div>textarea]:text-secondary [&>div>textarea]:rounded-lg [&>div>textarea]:text-sm [&>div>textarea]:block [&>div>textarea]:w-full [&>div>textarea]:border [&>div>textarea]:shadow-sm [&>div>input]:text-secondary [&>div>input]:rounded-lg [&>div>input]:text-sm [&>div>input]:block [&>div>input]:w-full [&>div>input]:border [&>div>input]:shadow-sm">
            @csrf
            <div class="mb-6">
                <label for="judul" class="after:content-['*'] after:ml-0.5 after:text-danger">Judul</label>
                <input id="judul" name="judul" rows="4"
                    class="px-3 py-2 focus:outline-none @error('judul') border-danger @else border-gray @enderror focus:border-gray focus:ring-gray"
                    placeholder="Masukan judul foto">{{ old('judul') }}</input>
                @error('judul')
                    <p class="mt-1 text-xs text-danger">{{ $message }}</p>
                @enderror
            </div>

            <!-- Input for Gambar 1 -->
            <div class="mb-6">
                <label for="gambar1">Gambar 1</label>
                <img src="" class="previewImage"></img>
                <input
                    class="file:mr-5 file:py-2 file:px-6 file:border-0 file:text-sm file:font-medium file:bg-dark file:text-white @error('gambar1') border-danger @else border-gray @enderror focus:border-gray focus:ring-gray cursor-pointer focus:outline-none"
                    id="gambar1" type="file" name="gambar1" onchange="previewImage()" />
                @error('gambar1')
                    <p class="mt-1 text-xs text-danger">{{ $message }}</p>
                @enderror
            </div>

            <!-- Input for Gambar 2 -->
            <div class="mb-6">
                <label for="gambar2">Gambar 2</label>
                <img src="" class="previewImage"></img>
                <input
                    class="file:mr-5 file:py-2 file:px-6 file:border-0 file:text-sm file:font-medium file:bg-dark file:text-white @error('gambar2') border-danger @else border-gray @enderror focus:border-gray focus:ring-gray cursor-pointer focus:outline-none"
                    id="gambar2" type="file" name="gambar2" onchange="previewImage()" />
                @error('gambar2')
                    <p class="mt-1 text-xs text-danger">{{ $message }}</p>
                @enderror
            </div>

            <!-- Input for Gambar 3 -->
            <div class="mb-6">
                <label for="gambar3">Gambar 3</label>
                <img src="" class="previewImage"></img>
                <input
                    class="file:mr-5 file:py-2 file:px-6 file:border-0 file:text-sm file:font-medium file:bg-dark file:text-white @error('gambar3') border-danger @else border-gray @enderror focus:border-gray focus:ring-gray cursor-pointer focus:outline-none"
                    id="gambar3" type="file" name="gambar3" onchange="previewImage()" />
                @error('gambar3')
                    <p class="mt-1 text-xs text-danger">{{ $message }}</p>
                @enderror
            </div>

            <!-- Input for Gambar 4 -->
            <div class="mb-6">
                <label for="gambar4">Gambar 4</label>
                <img src="" class="previewImage"></img>
                <input
                    class="file:mr-5 file:py-2 file:px-6 file:border-0 file:text-sm file:font-medium file:bg-dark file:text-white @error('gambar4') border-danger @else border-gray @enderror focus:border-gray focus:ring-gray cursor-pointer focus:outline-none"
                    id="gambar4" type="file" name="gambar4" onchange="previewImage()" />
                @error('gambar4')
                    <p class="mt-1 text-xs text-danger">{{ $message }}</p>
                @enderror
            </div>

            <!-- Input for Gambar 5 -->
            <div class="mb-6">
                <label for="gambar5">Gambar 5</label>
                <img src="" class="previewImage"></img>
                <input
                    class="file:mr-5 file:py-2 file:px-6 file:border-0 file:text-sm file:font-medium file:bg-dark file:text-white @error('gambar5') border-danger @else border-gray @enderror focus:border-gray focus:ring-gray cursor-pointer focus:outline-none"
                    id="gambar5" type="file" name="gambar5" onchange="previewImage()" />
                @error('gambar5')
                    <p class="mt-1 text-xs text-danger">{{ $message }}</p>
                @enderror
            </div>

            <!-- Input for Gambar 6 -->
            <div class="mb-6">
                <label for="gambar6">Gambar 6</label>
                <img src="" class="previewImage"></img>
                <input
                    class="file:mr-5 file:py-2 file:px-6 file:border-0 file:text-sm file:font-medium file:bg-dark file:text-white @error('gambar6') border-danger @else border-gray @enderror focus:border-gray focus:ring-gray cursor-pointer focus:outline-none"
                    id="gambar6" type="file" name="gambar6" onchange="previewImage()" />
                @error('gambar6')
                    <p class="mt-1 text-xs text-danger">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button type="submit"
                    class="text-white bg-danger focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit</button>
            </div>
        </form>
    </div>
@endsection
