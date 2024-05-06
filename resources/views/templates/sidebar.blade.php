<div class="sidebar hidden z-30 fixed inset-y-0 overflow-y-auto">
    <div class="flex flex-col w-72 bg-dark overflow-hidden shadow-md h-full">
        <div class="flex items-center py-3 px-5 shadow-sm shadow-secondary">
            <span class="text-2xl text-gray top-5 left-4 cursor-pointer flex items-center" onclick="openSidebar()">
                <i class="bx bx-x mr-3"></i> <img src="{{ asset('img/logo-merah.png') }}" width="150" alt="Logo!">
            </span>
        </div>
        <ul class="flex flex-col px-2 py-4 [&>li>a]:text-gray [&>li>a]:flex [&>li>a]:flex-row [&>li>a]:items-center [&>li>a]:h-12"
            style="height: calc(100vh - 4rem); overflow-y: auto;">
            <li>
                <a href="/dashboard" class="transform hover:translate-x-2 transition-transform ease-in duration-200">
                    <span class="inline-flex items-center justify-center h-12 w-12 text-lg"><i
                            class="bx bx-home {{ Request::is('/dashboard') ? 'text-danger' : '' }}"></i></span>
                    <span class="text-sm font-medium">Dashboard</span>
                </a>
            </li>
            @php
                $userLevel = session('level');
            @endphp
            @if ($userLevel === 'masyarakat')
                <li>
                    <a href="/pengaduan/create"
                        class="transform hover:translate-x-2 transition-transform ease-in duration-200">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg"><i
                                class="bx bxs-edit {{ Request::is('pengaduan/create') ? 'text-danger' : '' }}"></i></span>
                        <span class="text-sm font-medium">Buat Pengaduan </span>
                    </a>
                </li>
            @endif
            <li>
                <a href="" class="transform hover:translate-x-2 transition-transform ease-in duration-200">
                    <span class="inline-flex items-center justify-center h-12 w-12 text-lg"><i
                            class="bx bx-envelope {{ Request::is('pengajuan-surat') ? 'text-danger' : '' }}"></i></span>
                    <span class="text-sm font-medium">Pengajuan Surat Online</span>
                </a>
            </li>

            <li>
                <a href="/pengaduan" class="transform hover:translate-x-2 transition-transform ease-in duration-200">
                    <span class="inline-flex items-center justify-center h-12 w-12 text-lg"><i
                            class="bx bx-notepad {{ Request::is('pengaduan*') && !Request::is('pengaduan/create') && !Request::is('pengaduan/selesai') && !Request::is('pengaduan/proses') && !Request::is('pengaduan/belum') ? 'text-danger' : '' }}"></i></span>
                    <span class="text-sm font-medium">Semua Pengaduan</span>
                </a>
            </li>

            @if ($userLevel === 'masyarakat' || $userLevel === 'petugas')
                <li>
                    <a href="/pengaduan/belum"
                        class="transform hover:translate-x-2 transition-transform ease-in duration-200">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg"><i
                                class="bx bx-time-five {{ Request::is('pengaduan/belum') ? 'text-danger' : '' }}"></i></span>
                        <span class="text-sm font-medium">Pengaduan Belum Ditanggapi</span>
                    </a>
                </li>
                <li>
                    <a href="/pengaduan/proses"
                        class="transform hover:translate-x-2 transition-transform ease-in duration-200">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg"><i
                                class="bx bx-loader-circle {{ Request::is('pengaduan/proses') ? 'text-danger' : '' }}"></i></span>
                        <span class="text-sm font-medium">Pengaduan Diproses</span>
                    </a>
                </li>
                <li>
                    <a href="/pengaduan/selesai"
                        class="transform hover:translate-x-2 transition-transform ease-in duration-200">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg"><i
                                class="bx bx-check-circle {{ Request::is('pengaduan/selesai') ? 'text-danger' : '' }}"></i></span>
                        <span class="text-sm font-medium">Pengaduan Selesai</span>
                    </a>
                </li>
            @endif

            @if ($userLevel === 'petugas' || $userLevel === 'admin')
                <li>
                    <a href="/tanggapan"
                        class="transform hover:translate-x-2 transition-transform ease-in duration-200">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg"><i
                                class="bx bx-comment-dots {{ Request::is('tanggapan*') && !Request::is('tanggapan/proses') && !Request::is('tanggapan/selesai') ? 'text-danger' : '' }}"></i></span>
                        <span class="text-sm font-medium">Semua Tanggapan</span>
                    </a>
                </li>
                <li>
                    <a href="/berita" class="transform hover:translate-x-2 transition-transform ease-in duration-200">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg"><i
                                class="bx bx-news {{ Request::is('berita*') ? 'text-danger' : '' }}"></i></span>
                        <span class="text-sm font-medium">Berita</span>
                    </a>
                </li>
                <li>
                    <a href="/galeri" class="transform hover:translate-x-2 transition-transform ease-in duration-200">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg"><i
                                class="bx bx-photo-album {{ Request::is('galeri*') ? 'text-danger' : '' }}"></i></span>
                        <span class="text-sm font-medium">Galeri</span>
                    </a>
                </li>

                <li>
                    <a href="/pemerintah_desa"
                        class="transform hover:translate-x-2 transition-transform ease-in duration-200">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg"><i
                                class="bx bx-buildings {{ Request::is('pemerintah_desa*') ? 'text-danger' : '' }}"></i></span>
                        <span class="text-sm font-medium">Pemerintah Desa</span>
                    </a>
                </li>
                <li>
                    <a href="/bpd" class="transform hover:translate-x-2 transition-transform ease-in duration-200">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg"><i
                                class="bx bx-detail {{ Request::is('bpd*') ? 'text-danger' : '' }}"></i></span>
                        <span class="text-sm font-medium">BPD</span>
                    </a>
                </li>
            @endif

            @if ($userLevel === 'admin')
                <li>
                    <a href="/pengguna/masyarakat"
                        class="transform hover:translate-x-2 transition-transform ease-in duration-200">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg"><i
                                class="bx bx-group {{ Request::is('pengguna/masyarakat*') ? 'text-danger' : '' }}"></i></span>
                        <span class="text-sm font-medium">Data Masyarakat</span>
                    </a>
                </li>
                <li>
                    <a href="/pengguna/petugas"
                        class="transform hover:translate-x-2 transition-transform ease-in duration-200">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg"><i
                                class="bx bx-user-check {{ Request::is('pengguna/petugas*') ? 'text-danger' : '' }}"></i></span>
                        <span class="text-sm font-medium">Data Petugas</span>
                    </a>
                </li>
                <li>
                    <a href="/pengguna" class="transform hover:translate-x-2 transition-transform ease-in duration-200">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg"><i
                                class="bx bx-user-check {{ Request::is('pengguna') ? 'text-danger' : '' }}"></i></span>
                        <span class="text-sm font-medium">Semua Pengguna</span>
                    </a>
                </li>
            @endif
            <li
                class="transform hover:translate-x-2 hover:cursor-pointer transition-transform ease-in duration-200 text-white">
                <form action="/keluar" method="post">
                    @csrf
                    <button type="submit">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg"><i
                                class="bx bx-log-out"></i></span>
                        <span class="text-sm font-medium -ml-1">Logout</span>
                    </button>
                </form>
            </li>
        </ul>
    </div>
</div>
