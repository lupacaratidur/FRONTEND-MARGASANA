@extends('templates/dashboard')
@section('content')
    @php
        $surat = json_decode($pengajuan_surat->surat);
    @endphp
    <div class="bg-white py-6 px-9 mb-5 rounded-lg">
        <form action="{{ route('pengajuan-surat.update', $pengajuan_surat->id) }}" target="blank" method="POST"
            class="
    [&>div>label]:block [&>div>label]:mb-2 [&>div>label]:text-sm [&>div>label]:font-medium [&>div>label]:text-dark 
    [&>div>input]:border [&>div>input]:p-2.5 [&>div>input]:shadow-sm [&>div>input]:placeholder-secondary [&>div>input]:text-secondary [&>div>input]:w-full [&>div>input]:block [&>div>input]:rounded-lg [&>div>input]:sm:text-sm
    [&>div>div>select]:border [&>div>div>select]:p-2.5 [&>div>div>select]:shadow-sm [&>div>div>select]:placeholder-secondary [&>div>div>select]:text-secondary [&>div>div>select]:w-full [&>div>div>select]:block [&>div>div>select]:rounded-lg [&>div>div>select]:sm:text-sm
    [&>div>textarea]:text-secondary [&>div>textarea]:rounded-lg [&>div>textarea]:text-sm [&>div>textarea]:block [&>div>textarea]:w-full [&>div>textarea]:border [&>div>textarea]:shadow-sm ">
            @csrf
            @method('PUT')
            <h1 class="text-2xl my-8">Proses Surat Keterangan Izin Penelitian</h1>

            <div class="flex flex-col lg:flex-row gap-5 justify-center">
                <div
                    class="w-full 
                [&>div>input]:border [&>div>input]:p-2.5 [&>div>input]:shadow-sm [&>div>input]:placeholder-secondary [&>div>input]:text-secondary [&>div>input]:w-full [&>div>input]:block [&>div>input]:rounded-lg [&>div>input]:sm:text-sm
                ">
                    <div class="flex flex-col mb-6">
                        <label class="after:content-['*'] after:ml-0.5 after:text-danger">Nomor Surat</label>
                        <small class="text-secondary">Contoh penulisan : 474.3 / 016 / I / 2022</small>
                        <input type="text" name="nomor_surat"
                            class="mt-1 px-3 py-2 @error('nomor_surat') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                            placeholder="Masukkan Nomor Surat" value="{{ old('nomor_surat') }}" required />
                        @error('nomor_surat')
                            <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div
                    class="w-full
                [&>div>input]:border [&>div>input]:p-2.5 [&>div>input]:shadow-sm [&>div>input]:placeholder-secondary [&>div>input]:text-secondary [&>div>input]:w-full [&>div>input]:block [&>div>input]:rounded-lg [&>div>input]:sm:text-sm">

                </div>
            </div>
            <h2 class="text-[20px] mb-10">Informasi Surat</h2>
            <div class="flex flex-col lg:flex-row gap-5 justify-center">
                <div
                    class="w-full 
                [&>div>input]:border [&>div>input]:p-2.5 [&>div>input]:shadow-sm [&>div>input]:placeholder-secondary [&>div>input]:text-secondary [&>div>input]:w-full [&>div>input]:block [&>div>input]:rounded-lg [&>div>input]:sm:text-sm
                ">
                    <div class="flex flex-col mb-6">
                        <label class="after:content-['*'] after:ml-0.5 after:text-danger">Nama</label>
                        <input type="text" name="nama"
                            class="mt-1 px-3 py-2 @error('nama') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                            placeholder="Nama" value="{{ old('nama', $surat->nama) }}" />
                        @error('nama')
                            <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col mb-6">
                        <label class="after:content-['*'] after:ml-0.5 after:text-danger">NIM</label>
                        <input type="text" name="nim"
                            class="mt-1 px-3 py-2 @error('nim') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                            placeholder="" value="{{ old('nim', $surat->nim) }}" />
                        @error('nim')
                            <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col mb-6">
                        <label class="after:content-['*'] after:ml-0.5 after:text-danger">Perguruan Tinggi</label>
                        <input type="text" name="univ"
                            class="mt-1 px-3 py-2 @error('univ') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                            placeholder="" value="{{ old('univ', $surat->univ) }}" />
                        @error('univ')
                            <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col mb-6">
                        <label class="after:content-['*'] after:ml-0.5 after:text-danger">Program Studi</label>
                        <input type="text" name="prodi"
                            class="mt-1 px-3 py-2 @error('prodi') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                            placeholder="" value="{{ old('prodi', $surat->prodi) }}" />
                        @error('prodi')
                            <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                        @enderror
                    </div>



                    <div
                        class="w-full[&>div>input]:border [&>div>input]:p-2.5 [&>div>input]:shadow-sm [&>div>input]:placeholder-secondary [&>div>input]:text-secondary [&>div>input]:w-full [&>div>input]:block [&>div>input]:rounded-lg [&>div>input]:sm:text-sm">
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Awal Penelitian</label>
                            <input type="text" name="awal_penelitian"
                                class="mt-1 px-3 py-2 @error('awal_penelitian') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="" value="{{ old('awal_penelitian', $surat->awal_penelitian) }}" />
                            @error('awal_penelitian')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Akhir Penelitian</label>
                            <input type="text" name="akhir_penelitian"
                                class="mt-1 px-3 py-2 @error('akhir_penelitian') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="" value="{{ old('akhir_penelitian', $surat->akhir_penelitian) }}" />
                            @error('akhir_penelitian')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex flex-col mb-6">
                            <label class="after:content-['*'] after:ml-0.5 after:text-danger">Judul Penelitian</label>
                            <input type="text" name="judul_penelitian"
                                class="mt-1 px-3 py-2 @error('judul_penelitian') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                placeholder="" value="{{ old('judul_penelitian', $surat->judul_penelitian) }}" />
                            @error('judul_penelitian')
                                <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mb-6">
                            <label class="after:ml-0.5 after:text-danger">Foto KTP</label>
                            <img src="{{ asset('storage/' . $pengajuan_surat->foto_ktp) }}" width="250">
                        </div>

                    </div>
                    <div class="w-full ">
                    </div>


                    <div class="bottom flex justify-end ">
                        <button type="submit"
                            class="text-white bg-danger focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center h-2">Submit</button>
                    </div>
        </form>
    </div>
@endsection
