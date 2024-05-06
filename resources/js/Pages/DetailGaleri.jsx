import { useEffect, useState } from 'react';
import { MdDateRange } from 'react-icons/md';
import { FaUser } from 'react-icons/fa';
import Navbar from "@/Components/Common/navbar/Navbar";
import Footer from "@/Components/Common/footer/Footer";
import { Helmet } from "react-helmet";
import '../Components/Galeri/Galeri.css'

const DetailGaleri = ({ galeri }) => {
  // MEMBATASI KATA
  function truncateString(str, num) {
    if (str.length > num) {
      return str.slice(0, num) + '..';
    } else {
      return str;
    }
  }


  return (
    <>
      <Helmet>
        <title>{galeri ? galeri.judul : 'Detail Galeri'} - Desa Margasana</title>
      </Helmet>
      <Navbar />
      <div className="text-sm breadcrumbs" style={{ marginLeft: 80, marginRight: 80, marginTop: 30, marginBottom: 30, backgroundColor: 'rgb(240, 240, 240)', fontSize: 15, padding: 10, borderRadius: 5 }}>
        <ul>
          <li><a href={route('/')}>Home</a></li>
          <li><a href={route('galeri')}>Galeri</a></li>
          <li>{truncateString(galeri.judul, 30)}</li>
        </ul>
      </div>

      <div className="text-4xl font-bold" style={{ textAlign: 'center' }}>
        <h1>
          {galeri.judul}
        </h1>
      </div>

      {galeri ? (

        <div className="container-detail" style={{ marginTop: 30, marginBottom: 50, display: 'flex', flexWrap: 'wrap', justifyContent: 'center' }}>
          <img src={'/storage/' + galeri.gambar1} alt={galeri.judul} style={{ width: '100%', maxWidth: 330, marginTop: 30, marginRight: 30 }} />
          <img src={'/storage/' + galeri.gambar2} alt={galeri.judul} style={{ width: '100%', maxWidth: 330, marginTop: 30, marginRight: 30 }} />
          <img src={'/storage/' + galeri.gambar3} alt={galeri.judul} style={{ width: '100%', maxWidth: 330, marginTop: 30, marginRight: 30 }} />
          <img src={'/storage/' + galeri.gambar4} alt={galeri.judul} style={{ width: '100%', maxWidth: 330, marginTop: 30, marginRight: 30 }} />
          <img src={'/storage/' + galeri.gambar5} alt={galeri.judul} style={{ width: '100%', maxWidth: 330, marginTop: 30, marginRight: 30 }} />
          <img src={'/storage/' + galeri.gambar6} alt={galeri.judul} style={{ width: '100%', maxWidth: 330, marginTop: 30, marginRight: 30 }} />
        </div>
      ) : (
        <p>Berita tidak ditemukan</p>
      )}

      <Footer />
    </>
  )
}
export default DetailGaleri