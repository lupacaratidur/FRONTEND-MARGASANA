import React, { useState } from "react";
import './Navbar.css';
import Logo from '../../../../../public/img/logo-banyumas.png'





const Navbar = () => {


  return (
    <>

      <div className="navbar bg-base-100 sticky-navbar">
        <div className="navbar-start" >
          <img src={Logo} alt="Logo" className="logo" />
          <div className="dropdown z-2 z-index-2">
            <div tabIndex={0} role="button" className="btn btn-ghost lg:hidden">
              <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
            </div>
            <ul tabIndex={0} className="menu menu-sm dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
              <li><a href={route('/')}>Beranda</a></li>
              <li>
                <a>Profil</a>
                <ul className="p-2">
                  <li><a href={route('visimisi')}>Visi dan Misi</a ></li>
                  <li><a href={route('sejarah')}>Sejarah Desa</a></li>
                  <li><a href={route('wilayah')}>Wilayah Desa</a></li>
                </ul>
              </li>
              <li>
                <a>Lembaga Desa</a>
                <ul className="p-2">
                  <li><a href={route('pemerintahdesa')}>Pemerintah Desa</a></li>
                  <li><a href={route('bpd')}>BPD</a></li>
                </ul>
              </li>
              <li>
                <a>Layanan</a>
                <ul className="p-2">
                  <li><a href={route('pengajuansurat')}>Pengajuan Surat</a></li>
                  <li><a href={route('pengaduanmasyarakat')} style={{ whiteSpace: 'nowrap' }}>Pengaduan Masyarakat</a></li>
                </ul>
              </li>

              <li><a href={route('berita')}>Berita</a></li>
              <li><a href={route('galeri')}>Galeri</a></li>

            </ul>
          </div>
          <a className="btn btn-ghost text-xl">Desa Margasana</a>
        </div>
        <div className="navbar-center hidden lg:flex">
          <ul className="menu menu-horizontal px-1" >
            <li><a href={route('/')}>Beranda</a></li>
            <li>
              <details>
                <summary>Profil</summary>
                <ul className="p-2" style={{ zIndex: '2', borderTopLeftRadius: 0, borderTopRightRadius: 0 }}>
                  <li><a href={route('visimisi')} style={{ whiteSpace: 'nowrap' }} >Visi dan Misi</a></li>
                  <li><a href={route('sejarah')} style={{ whiteSpace: 'nowrap' }} >Sejarah Desa</a></li>
                  <li><a href={route('wilayah')} style={{ whiteSpace: 'nowrap' }} >Wilayah Desa</a></li>
                </ul>
              </details>
            </li>
            <li>
              <details>
                <summary>Lembaga Desa</summary>
                <ul className="p-2" style={{ zIndex: '2', borderTopLeftRadius: 0, borderTopRightRadius: 0 }}>
                  <li><a href={route('pemerintahdesa')} style={{ whiteSpace: 'nowrap' }}>Pemerintah Desa</a></li>
                  <li><a href={route('bpd')}>BPD</a></li>
                </ul>
              </details>
            </li>
            <li>
              <details>
                <summary>Layanan</summary>
                <ul className="p-2" style={{ zIndex: '2', borderTopLeftRadius: 0, borderTopRightRadius: 0 }}>
                  <li><a href={route('pengajuansurat')} style={{ whiteSpace: 'nowrap' }}>Pengajuan Surat</a></li>
                  <li><a href={route('pengaduanmasyarakat')} style={{ whiteSpace: 'nowrap' }}>Pengaduan Masyarakat</a></li>
                </ul>
              </details>
            </li>
            <li><a href={route('berita')}>Berita</a></li>
            <li><a href={route('galeri')}>Galeri</a></li>
          </ul>
        </div>

        <div className="navbar-end">
          <a href={route('login')} className="btn">Login</a>
        </div>
      </div>
    </>
  )
}

export default Navbar