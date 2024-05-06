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
            <h1 class="text-2xl my-8">Form Pengisian Surat Keterangan Kelahiran</h1>
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

            <h2 class="text-[20px] mb-10">Informasi Keluarga</h2>
            <div class="flex flex-col lg:flex-row gap-5 justify-center">

                <input type="hidden" value="kelahiran" name="jenis_surat">
                <div
                    class="w-full 
                [&>div>input]:border [&>div>input]:p-2.5 [&>div>input]:shadow-sm [&>div>input]:placeholder-secondary [&>div>input]:text-secondary [&>div>input]:w-full [&>div>input]:block [&>div>input]:rounded-lg [&>div>input]:sm:text-sm
                
                ">

                    <div class="flex flex-col mb-6">
                        <label class="after:content-['*'] after:ml-0.5 after:text-danger">Nama Kepala Keluarga</label>
                        <input type="text" name="kepala_keluarga"
                            class="mt-1 px-3 py-2 @error('kepala_keluarga') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                            placeholder="Masukan nama kepala keluarga" value="{{ $surat->kepala_keluarga }}" />
                        @error('kepala_keluarga')
                            <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col mb-6">
                        <label class="after:content-['*'] after:ml-0.5 after:text-danger">Nomor Kartu Keluarga</label>
                        <input type="text" name="no_kk"
                            class="mt-1 px-3 py-2 @error('no_kk') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                            placeholder="Masukan nomer kartu keluarga" value="{{ $surat->no_kk }}" />
                        @error('no_kk')
                            <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                        @enderror
                    </div>


                    <h2 class="text-[20px] mb-10">Informasi Anak</h2>
                    <div class="flex flex-col lg:flex-row gap-5 justify-center">
                        <input type="hidden" value="kelahiran" name="jenis_surat">
                        <div
                            class="w-full 
                [&>div>input]:border [&>div>input]:p-2.5 [&>div>input]:shadow-sm [&>div>input]:placeholder-secondary [&>div>input]:text-secondary [&>div>input]:w-full [&>div>input]:block [&>div>input]:rounded-lg [&>div>input]:sm:text-sm
                
                ">
                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Nama Anak</label>
                                <input type="text" name="nama_bayi"
                                    class="mt-1 px-3 py-2 @error('nama_bayi') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                    placeholder="Nama Anak" value="{{ $surat->nama_bayi }}" />
                                @error('nama_bayi')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Kelamin</label>
                                <div class="relative">
                                    <select
                                        class="appearance-none px-3 py-2 @error('kelamin_bayi') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                        id="grid-state" name="kelamin_bayi">
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="1" {{ $surat->kelamin_bayi == '1' ? 'selected' : '' }}>Laki-Laki
                                        </option>
                                        <option value="2" {{ $surat->kelamin_bayi == '2' ? 'selected' : '' }}>
                                            Perempuan</option>
                                    </select>
                                    <div
                                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <i class='bx bx-chevron-down text-xl'></i>
                                    </div>
                                </div>
                                @error('kelamin_bayi')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Tempat Dilahirkan</label>
                                <div class="relative">
                                    <select
                                        class="appearance-none px-3 py-2 @error('tempat_lahir') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                        id="grid-state" name="tempat_lahir">
                                        <option value="">Pilih Tempat Bayi Dilahirkan</option>
                                        <option value="1" {{ $surat->tempat_lahir == '1' ? 'selected' : '' }}>1. RS/RB
                                        </option>
                                        <option value="2" {{ $surat->tempat_lahir == '2' ? 'selected' : '' }}>2.
                                            Puskesmas</option>
                                        <option value="3" {{ $surat->tempat_lahir == '3' ? 'selected' : '' }}>3.
                                            Polindes</option>
                                        <option value="4" {{ $surat->tempat_lahir == '4' ? 'selected' : '' }}>4. Rumah
                                        </option>
                                        <option value="5" {{ $surat->tempat_lahir == '5' ? 'selected' : '' }}>5.
                                            Lainnya</option>
                                    </select>
                                    <div
                                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <i class='bx bx-chevron-down text-xl'></i>
                                    </div>
                                </div>
                                @error('tempat_lahir')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Tempat Kelahiran</label>
                                <input type="text" name="lokasi_lahir"
                                    class="mt-1 px-3 py-2 @error('lokasi_lahir') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                    placeholder="Masukan Kab/Kota anak dilahirkan" value="{{ $surat->lokasi_lahir }}" />
                                @error('lokasi_lahir')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Hari Dilahirkan</label>
                                <div class="relative">
                                    <select
                                        class="appearance-none px-3 py-2 @error('hari_lahir') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                        id="grid-state" name="hari_lahir">
                                        <option value="">Pilih Hari Dilahirkan</option>
                                        <option value="Senin"{{ $surat->hari_lahir == 'Senin' ? 'selected' : '' }}>Senin
                                        </option>
                                        <option value="Selasa"{{ $surat->hari_lahir == 'Selasa' ? 'selected' : '' }}>
                                            Selasa</option>
                                        <option value="Rabu"{{ $surat->hari_lahir == 'Rabu' ? 'selected' : '' }}>Rabu
                                        </option>
                                        <option value="Kamis"{{ $surat->hari_lahir == 'Kamis' ? 'selected' : '' }}>Kamis
                                        </option>
                                        <option value="Jumat"{{ $surat->hari_lahir == 'Jumat' ? 'selected' : '' }}>Jumat
                                        </option>
                                        <option value="Sabtu"{{ $surat->hari_lahir == 'Sabtu' ? 'selected' : '' }}>Sabtu
                                        </option>
                                        <option value="Minggu"{{ $surat->hari_lahir == 'Minggu' ? 'selected' : '' }}>
                                            Minggu</option>
                                    </select>
                                    <div
                                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <i class='bx bx-chevron-down text-xl'></i>
                                    </div>
                                </div>
                                @error('hari_lahir')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Tanggal Lahir</label>
                                <input type="number" name="tgl_lahir_bayi"
                                    class="mt-1 px-3 py-2 @error('tgl_lahir_bayi') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                    placeholder="Masukan tanggal lahir bayi" value="{{ $surat->tgl_lahir_bayi }}" />
                                @error('tgl_lahir_bayi')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Bulan Lahir</label>
                                <input type="number" name="bln_lahir_bayi"
                                    class="mt-1 px-3 py-2 @error('bln_lahir_bayi') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                    placeholder="Masukan bulan lahir bayi" value="{{ $surat->bln_lahir_bayi }}" />
                                @error('bln_lahir_bayi')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Tahun Lahir</label>
                                <input type="number" name="thn_lahir_bayi"
                                    class="mt-1 px-3 py-2 @error('thn_lahir_bayi') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                    placeholder="Masukan tahun lahir bayi" value="{{ $surat->thn_lahir_bayi }}" />
                                @error('thn_lahir_bayi')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Panjang Bayi (cm)</label>
                                <input type="number" name="panjang_bayi"
                                    class="mt-1 px-3 py-2 @error('panjang_bayi') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                    placeholder="Panjang Bayi" value="{{ $surat->panjang_bayi }}" min="1"
                                    max="55" step="0.1" />
                                @error('panjang_bayi')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>
                        <div
                            class="w-full 
                [&>div>input]:border [&>div>input]:p-2.5 [&>div>input]:shadow-sm [&>div>input]:placeholder-secondary [&>div>input]:text-secondary [&>div>input]:w-full [&>div>input]:block [&>div>input]:rounded-lg [&>div>input]:sm:text-sm
                [&>div>div>select]:border [&>div>div>select]:p-2.5 [&>div>div>select]:shadow-sm [&>div>div>select]:placeholder-secondary [&>div>div>select]:text-secondary [&>div>div>select]:w-full [&>div>div>select]:block [&>div>div>select]:rounded-lg [&>div>div>select]:sm:text-sm
                ">
                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Lahir Pukul</label>
                                <input type="time" name="lahir_pukul"
                                    class="mt-1 px-3 py-2 @error('lahir_pukul') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                    placeholder="Lahir pukul" value="{{ $surat->lahir_pukul }}" />
                                @error('lahir_pukul')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Jenis Kelahiran</label>
                                <div class="relative">
                                    <select
                                        class="appearance-none px-3 py-2 @error('jenis_lahir') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                        id="grid-state" name="jenis_lahir">
                                        <option value="">Pilih jenis kelahiran</option>
                                        <option value="1"{{ $surat->jenis_lahir == '1' ? 'selected' : '' }}>
                                            1. Tunggal</option>
                                        <option value="2"{{ $surat->jenis_lahir == '2' ? 'selected' : '' }}>2.
                                            Kembar 2</option>
                                        <option value="3"{{ $surat->jenis_lahir == '3' ? 'selected' : '' }}>3.
                                            Kembar 3</option>
                                        <option value="4"{{ $surat->jenis_lahir == '4' ? 'selected' : '' }}>4.
                                            Kembar 4</option>
                                        <option value="5"{{ $surat->jenis_lahir == '5' ? 'selected' : '' }}>
                                            5. Lainnya</option>
                                    </select>
                                    <div
                                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <i class='bx bx-chevron-down text-xl'></i>
                                    </div>
                                </div>
                                @error('jenis_lahir')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Lahiran Ke-</label>
                                <input type="number" name="lahiran_ke"
                                    class="mt-1 px-3 py-2 @error('lahiran_ke') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                    placeholder="Lahiran Ke" value="{{ $surat->lahiran_ke }}" min="1"
                                    max="8" />
                                @error('lahiran_ke')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Penolong
                                    Kelahiran</label>
                                <div class="relative">
                                    <select
                                        class="appearance-none px-3 py-2 @error('penolong_lahir') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                        id="grid-state" name="penolong_lahir">
                                        <option value="">Pilih Penolong kelahiran</option>
                                        <option value="1"{{ $surat->penolong_lahir == '1' ? 'selected' : '' }}>1.
                                            Dokter</option>
                                        <option value="2"{{ $surat->penolong_lahir == '2' ? 'selected' : '' }}>
                                            2. Bidan/Perawat</option>
                                        <option value="3"{{ $surat->penolong_lahir == '3' ? 'selected' : '' }}>3.
                                            Dukun</option>
                                        <option value="4"{{ $surat->penolong_lahir == '4' ? 'selected' : '' }}>
                                            4. Lainnya</option>
                                    </select>
                                    <div
                                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <i class='bx bx-chevron-down text-xl'></i>
                                    </div>
                                </div>
                                @error('penolong_lahir')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Berat Bayi (kg)</label>
                                <input type="number" name="berat_bayi"
                                    class="mt-1 px-3 py-2 @error('berat_bayi') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                    placeholder="Berat Bayi" value="{{ $surat->berat_bayi }}" min="1"
                                    max="10" step="0.1" />
                                @error('berat_bayi')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <br>
                    <br>

                    <h2 class="text-[20px] mb-10">Informasi Orang Tua</h2>
                    <div class="flex flex-col lg:flex-row gap-5 justify-center">
                        <div
                            class="w-full 
                [&>div>input]:border [&>div>input]:p-2.5 [&>div>input]:shadow-sm [&>div>input]:placeholder-secondary [&>div>input]:text-secondary [&>div>input]:w-full [&>div>input]:block [&>div>input]:rounded-lg [&>div>input]:sm:text-sm
                [&>div>textarea]:text-secondary [&>div>textarea]:rounded-lg [&>div>textarea]:text-sm [&>div>textarea]:block [&>div>textarea]:w-full [&>div>textarea]:border [&>div>textarea]:shadow-sm
                ">
                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">NIK Ibu</label>
                                <input type="number" name="nik_ibu"
                                    class="mt-1 px-3 py-2 @error('nik_ibu') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                    placeholder="NIK Ibu" value="{{ $surat->nik_ibu }}" />
                                @error('nik_ibu')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Nama Ibu</label>
                                <input type="text" name="nama_ibu"
                                    class="mt-1 px-3 py-2 @error('nama_ibu') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                    placeholder="Nama Ibu" value="{{ $surat->nama_ibu }}" />
                                @error('nama_ibu')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Tanggal Lahir</label>
                                <input type="number" name="tgl_lahir_ibu"
                                    class="mt-1 px-3 py-2 @error('tgl_lahir_ibu') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                    placeholder="Tanggal" value="{{ $surat->tgl_lahir_ibu }}" />
                                @error('tgl_lahir_ibu')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Bulan Lahir</label>
                                <input type="number" name="bln_lahir_ibu"
                                    class="mt-1 px-3 py-2 @error('bln_lahir_ibu') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                    placeholder="Tanggal" value="{{ $surat->bln_lahir_ibu }}" />
                                @error('bln_lahir_ibu')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Tahun Lahir</label>
                                <input type="number" name="thn_lahir_ibu"
                                    class="mt-1 px-3 py-2 @error('thn_lahir_ibu') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                    placeholder="Tanggal" value="{{ $surat->thn_lahir_ibu }}" />
                                @error('thn_lahir_ibu')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>


                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Umur</label>
                                <input type="number" name="umur_ibu"
                                    class="mt-1 px-3 py-2 @error('umur_ibu') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                    placeholder="Masukan umur bu" value="{{ $surat->umur_ibu }}" min="1" />
                                @error('umur_ibu')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Pekerjaan Ibu</label>
                                <input type="text" name="pekerjaan_ibu"
                                    class="mt-1 px-3 py-2 @error('pekerjaan_ibu') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                    placeholder="Pekerjaan Ibu" value="{{ $surat->pekerjaan_ibu }}" />
                                @error('pekerjaan_ibu')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Alamat Ibu</label>

                                <textarea id="alamat_ibu" name="alamat_ibu" rows="1"
                                    class="px-3 py-2 focus:outline-none @error('alamat_ibu') border-danger @else border-gray @enderror focus:border-gray focus:ring-gray"
                                    placeholder="Masukan alamat ibu">{{ $surat->alamat_ibu }}</textarea>
                                @error('alamat_ibu')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Kewarganegaraan</label>
                                <div class="relative">
                                    <select
                                        class="appearance-none px-3 py-2 @error('kewarganegaraan_ibu') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                        id="grid-state" name="kewarganegaraan_ibu">
                                        <option value="">Pilih kewarganegaraan ibu</option>
                                        <option value="1"{{ $surat->kewarganegaraan_ibu == '1' ? 'selected' : '' }}>
                                            1. WNI</option>
                                        <option value="2"{{ $surat->kewarganegaraan_ibu == '2' ? 'selected' : '' }}>
                                            2. WNA</option>
                                    </select>
                                    <div
                                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <i class='bx bx-chevron-down text-xl'></i>
                                    </div>
                                </div>
                                @error('kewarganegaraan_ibu')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Kebangsaan Ibu</label>
                                <input type="text" name="kebangsaan_ibu"
                                    class="mt-1 px-3 py-2 @error('kebangsaan_ibu') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                    placeholder="Masukan kebangsaan ayah" value="{{ $surat->kebangsaan_ibu }}" />
                                @error('kebangsaan_ibu')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Tanggal Pencatatan
                                    Perkawinan</label>
                                <input type="number" name="tgl_nikah"
                                    class="mt-1 px-3 py-2 @error('tgl_nikah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                    placeholder="Tanggal" value="{{ $surat->tgl_nikah }}" />
                                @error('tgl_nikah')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Bulan Pencatatan
                                    Perkawinan</label>
                                <input type="number" name="bln_nikah"
                                    class="mt-1 px-3 py-2 @error('bln_nikah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                    placeholder="Tanggal" value="{{ $surat->bln_nikah }}" />
                                @error('bln_nikah')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Tahun Pencatatan
                                    Perkawinan</label>
                                <input type="number" name="thn_nikah"
                                    class="mt-1 px-3 py-2 @error('thn_nikah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                    placeholder="Tanggal" value="{{ $surat->thn_nikah }}" />
                                @error('thn_nikah')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>


                        <div
                            class="w-full 
                [&>div>input]:border [&>div>input]:p-2.5 [&>div>input]:shadow-sm [&>div>input]:placeholder-secondary [&>div>input]:text-secondary [&>div>input]:w-full [&>div>input]:block [&>div>input]:rounded-lg [&>div>input]:sm:text-sm
                [&>div>textarea]:text-secondary [&>div>textarea]:rounded-lg [&>div>textarea]:text-sm [&>div>textarea]:block [&>div>textarea]:w-full [&>div>textarea]:border [&>div>textarea]:shadow-sm
                ">
                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">NIK Ayah</label>
                                <input type="number" name="nik_ayah"
                                    class="mt-1 px-3 py-2 @error('nik_ayah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                    placeholder="NIK Ibu" value="{{ $surat->nik_ayah }}" />
                                @error('nik_ayah')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Nama Ayah</label>
                                <input type="text" name="nama_ayah"
                                    class="mt-1 px-3 py-2 @error('nama_ayah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                    placeholder="Nama Ibu" value="{{ $surat->nama_ayah }}" />
                                @error('nama_ayah')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Tanggal Lahir</label>
                                <input type="number" name="tgl_lahir_ayah"
                                    class="mt-1 px-3 py-2 @error('tgl_lahir_ayah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                    placeholder="Tanggal" value="{{ $surat->tgl_lahir_ayah }}" />
                                @error('tgl_lahir_ayah')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Bulan Lahir</label>
                                <input type="number" name="bln_lahir_ayah"
                                    class="mt-1 px-3 py-2 @error('bln_lahir_ayah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                    placeholder="Tanggal" value="{{ $surat->bln_lahir_ayah }}" />
                                @error('bln_lahir_ayah')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Tahun Lahir</label>
                                <input type="number" name="thn_lahir_ayah"
                                    class="mt-1 px-3 py-2 @error('thn_lahir_ayah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                    placeholder="Tanggal" value="{{ $surat->thn_lahir_ayah }}" />
                                @error('thn_lahir_ayah')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Umur</label>
                                <input type="number" name="umur_ayah"
                                    class="mt-1 px-3 py-2 @error('umur_ayah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                    placeholder="Masukan umur ayah" value="{{ $surat->umur_ayah }}" min="1" />
                                @error('umur_ayah')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Alamat Ayah</label>

                                <textarea id="alamat_ayah" name="alamat_ayah" rows="1"
                                    class="px-3 py-2 focus:outline-none @error('alamat_ayah') border-danger @else border-gray @enderror focus:border-gray focus:ring-gray"
                                    placeholder="Masukan alamat ayah">{{ $surat->alamat_ayah }}</textarea>
                                @error('alamat_ayah')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Kewarganegaraan</label>
                                <div class="relative">
                                    <select
                                        class="appearance-none px-3 py-2 @error('kewarganegaraan_ayah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                        id="grid-state" name="kewarganegaraan_ayah">
                                        <option value="">Pilih kewarganegaraan ayah</option>
                                        <option value="1"{{ $surat->kewarganegaraan_ayah == '1' ? 'selected' : '' }}>
                                            1. WNI</option>
                                        <option value="2"{{ $surat->kewarganegaraan_ayah == '2' ? 'selected' : '' }}>
                                            2. WNA</option>
                                    </select>
                                    <div
                                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <i class='bx bx-chevron-down text-xl'></i>
                                    </div>
                                </div>
                                @error('kewarganegaraan_ayah')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Kebangsaan Ayah</label>
                                <input type="text" name="kebangsaan_ayah"
                                    class="mt-1 px-3 py-2 @error('kebangsaan_ayah') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                    placeholder="Masukan kebangsaan ibu" value="{{ $surat->kebangsaan_ayah }}" />
                                @error('kebangsaan_ayah')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <br>
                    <br>
                    <h2 class="text-[20px] mb-10">Informasi Pelapor</h2>
                    <div class="flex flex-col lg:flex-row gap-5 justify-center">
                        <div
                            class="w-full 
                [&>div>input]:border [&>div>input]:p-2.5 [&>div>input]:shadow-sm [&>div>input]:placeholder-secondary [&>div>input]:text-secondary [&>div>input]:w-full [&>div>input]:block [&>div>input]:rounded-lg [&>div>input]:sm:text-sm
                [&>div>textarea]:text-secondary [&>div>textarea]:rounded-lg [&>div>textarea]:text-sm [&>div>textarea]:block [&>div>textarea]:w-full [&>div>textarea]:border [&>div>textarea]:shadow-sm
                ">
                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">NIK pelapor</label>
                                <input type="number" name="nik_pelapor"
                                    class="mt-1 px-3 py-2 @error('nik_pelapor') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                    placeholder="NIK pelapor" value="{{ $surat->nik_pelapor }}" />
                                @error('nik_pelapor')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Nama pelapor</label>
                                <input type="text" name="nama_pelapor"
                                    class="mt-1 px-3 py-2 @error('nama_pelapor') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                    placeholder="Nama pelapor" value="{{ $surat->nama_pelapor }}" />
                                @error('nama_pelapor')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Umur</label>
                                <input type="number" name="umur_pelapor"
                                    class="mt-1 px-3 py-2 @error('umur_pelapor') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                    placeholder="Masukan umur pelapor" value="{{ $surat->umur_pelapor }}"
                                    min="1" />
                                @error('umur_pelapor')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Kelamin</label>
                                <div class="relative">
                                    <select
                                        class="appearance-none px-3 py-2 @error('kelamin_pelapor') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                        id="grid-state" name="kelamin_pelapor">
                                        <option value="">Pilih Jenis Kelamin Pelapor</option>
                                        <option value="1"{{ $surat->kelamin_pelapor == '1' ? 'selected' : '' }}>
                                            Laki-Laki</option>
                                        <option value="2"{{ $surat->kelamin_pelapor == '2' ? 'selected' : '' }}>
                                            Perempuan</option>
                                    </select>
                                    <div
                                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <i class='bx bx-chevron-down text-xl'></i>
                                    </div>
                                </div>
                                @error('kelamin_pelapor')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Pekerjaan pelapor</label>
                                <input type="text" name="pekerjaan_pelapor"
                                    class="mt-1 px-3 py-2 @error('pekerjaan_pelapor') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                    placeholder="Pekerjaan pelapor" value="{{ $surat->pekerjaan_pelapor }}" />
                                @error('pekerjaan_pelapor')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Alamat pelapor</label>

                                <textarea id="alamat_pelapor" name="alamat_pelapor" rows="1"
                                    class="px-3 py-2 focus:outline-none @error('alamat_pelapor') border-danger @else border-gray @enderror focus:border-gray focus:ring-gray"
                                    placeholder="Alamat pelapor">{{ $surat->alamat_pelapor }}</textarea>
                                @error('alamat_pelapor')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>


                        <div
                            class="w-full 
                [&>div>input]:border [&>div>input]:p-2.5 [&>div>input]:shadow-sm [&>div>input]:placeholder-secondary [&>div>input]:text-secondary [&>div>input]:w-full [&>div>input]:block [&>div>input]:rounded-lg [&>div>input]:sm:text-sm
                [&>div>textarea]:text-secondary [&>div>textarea]:rounded-lg [&>div>textarea]:text-sm [&>div>textarea]:block [&>div>textarea]:w-full [&>div>textarea]:border [&>div>textarea]:shadow-sm
                ">

                        </div>
                    </div>
                    <br>
                    <br>

                    <h2 class="text-[20px] mb-10">Informasi Saksi</h2>
                    <div class="flex flex-col lg:flex-row gap-5 justify-center">
                        <div
                            class="w-full 
                [&>div>input]:border [&>div>input]:p-2.5 [&>div>input]:shadow-sm [&>div>input]:placeholder-secondary [&>div>input]:text-secondary [&>div>input]:w-full [&>div>input]:block [&>div>input]:rounded-lg [&>div>input]:sm:text-sm
                [&>div>textarea]:text-secondary [&>div>textarea]:rounded-lg [&>div>textarea]:text-sm [&>div>textarea]:block [&>div>textarea]:w-full [&>div>textarea]:border [&>div>textarea]:shadow-sm
                ">
                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">NIK Saksi 1</label>
                                <input type="number" name="nik_saksi1"
                                    class="mt-1 px-3 py-2 @error('nik_saksi1') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                    placeholder="Masukan NIK saksi 1" value="{{ $surat->nik_saksi1 }}" />
                                @error('nik_saksi1')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Nama Saksi 1</label>
                                <input type="text" name="nama_saksi1"
                                    class="mt-1 px-3 py-2 @error('nama_saksi1') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                    placeholder="Masukan nama saksi 1" value="{{ $surat->nama_saksi1 }}" />
                                @error('nama_saksi1')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Umur Saksi 1</label>
                                <input type="number" name="umur_saksi1"
                                    class="mt-1 px-3 py-2 @error('umur_saksi1') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                    placeholder="Masukan umur saksi 1" value="{{ $surat->umur_saksi1 }}"
                                    min="1" />
                                @error('umur_saksi1')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>



                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Pekerjaan Saksi 1</label>
                                <input type="text" name="pekerjaan_saksi1"
                                    class="mt-1 px-3 py-2 @error('pekerjaan_saksi1') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                    placeholder="Masukan pekerjaan saksi 1" value="{{ $surat->pekerjaan_saksi1 }}" />
                                @error('pekerjaan_saksi1')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Alamat Saksi 1</label>

                                <textarea id="alamat_saksi1" name="alamat_saksi1" rows="1"
                                    class="px-3 py-2 focus:outline-none @error('alamat_saksi1') border-danger @else border-gray @enderror focus:border-gray focus:ring-gray"
                                    placeholder="Masukan alamat saksi 1">{{ $surat->alamat_saksi1 }}</textarea>
                                @error('alamat_saksi1')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>


                        <div
                            class="w-full 
                [&>div>input]:border [&>div>input]:p-2.5 [&>div>input]:shadow-sm [&>div>input]:placeholder-secondary [&>div>input]:text-secondary [&>div>input]:w-full [&>div>input]:block [&>div>input]:rounded-lg [&>div>input]:sm:text-sm
                [&>div>textarea]:text-secondary [&>div>textarea]:rounded-lg [&>div>textarea]:text-sm [&>div>textarea]:block [&>div>textarea]:w-full [&>div>textarea]:border [&>div>textarea]:shadow-sm
                ">

                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">NIK Saksi 2</label>
                                <input type="number" name="nik_saksi2"
                                    class="mt-1 px-3 py-2 @error('nik_saksi2') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                    placeholder="Masukan NIK saksi 2" value="{{ $surat->nik_saksi2 }}" />
                                @error('nik_saksi2')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Nama Saksi 2</label>
                                <input type="text" name="nama_saksi2"
                                    class="mt-1 px-3 py-2 @error('nama_saksi2') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                    placeholder="Masukan nama saksi 2" value="{{ $surat->nama_saksi2 }}" />
                                @error('nama_saksi2')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Umur Saksi 2</label>
                                <input type="number" name="umur_saksi2"
                                    class="mt-1 px-3 py-2 @error('umur_saksi2') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                    placeholder="Masukan umur saksi 2" value="{{ $surat->umur_saksi2 }}"
                                    min="1" />
                                @error('umur_saksi2')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>



                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Pekerjaan Saksi 2</label>
                                <input type="text" name="pekerjaan_saksi2"
                                    class="mt-1 px-3 py-2 @error('pekerjaan_saksi2') border-danger @else border-gray @enderror focus:outline-none focus:border-gray focus:ring-gray focus:ring-1"
                                    placeholder="Masukan pekerjaan saksi 2" value="{{ $surat->pekerjaan_saksi2 }}" />
                                @error('pekerjaan_saksi2')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex flex-col mb-6">
                                <label class="after:content-['*'] after:ml-0.5 after:text-danger">Alamat Saksi 2</label>

                                <textarea id="alamat_saksi2" name="alamat_saksi2" rows="1"
                                    class="px-3 py-2 focus:outline-none @error('alamat_saksi2') border-danger @else border-gray @enderror focus:border-gray focus:ring-gray"
                                    placeholder="Masukan alamat saksi 2">{{ $surat->alamat_saksi2 }}</textarea>
                                @error('alamat_saksi2')
                                    <p class="mt-1 text-xs text-danger" id="file_input_help">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                    </div>


                    <div class="flex justify-end">
                        <button type="submit"
                            class="text-white bg-danger focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit</button>
                    </div>
        </form>
    </div>
@endsection
