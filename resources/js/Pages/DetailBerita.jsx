import { useEffect, useState } from 'react';
import { MdDateRange } from 'react-icons/md';
import { FaUser } from 'react-icons/fa';
import Navbar from "@/Components/Common/navbar/Navbar";
import Footer from "@/Components/Common/footer/Footer";
import { Helmet } from "react-helmet";

const DetailBerita = ({ berita }) => {
  // MEMBATASI KATA
  function truncateString(str, num) {
    if (str.length > num) {
      return str.slice(0, num) + '..';
    } else {
      return str;
    }
  }

  // Fungsi untuk mengubah format tanggal
  function formatDate(dateString) {
    // Buat objek Date dari string tanggal
    const date = new Date(dateString);
    // Daftar bulan dalam bahasa Inggris
    const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

    // Ambil hari, tanggal, bulan, dan tahun dari objek Date
    const dateNumber = date.getDate();
    const month = months[date.getMonth()];
    const year = date.getFullYear();

    // Gabungkan menjadi format yang diinginkan
    const formattedDate = `${dateNumber} ${month} ${year}`;

    return formattedDate;
  }

  // Contoh penggunaan
  const dateString = "2024-04-16T02:28:09.000000Z";
  console.log(formatDate(dateString)); // Output: 16 April 2024



  return (
    <>
      <Navbar />
      <Helmet>
        <title>{berita ? berita.judul : 'Detail Berita'} - Desa Margasana</title>
      </Helmet>
      {berita ? (
        <div className="container-detail" style={{ marginLeft: 30, marginRight: 30, marginBottom: 50 }}>
          <div className="text-sm breadcrumbs" style={{
            marginTop: 30, marginBottom: 30,
            backgroundColor: 'rgb(240, 240, 240)', fontSize: 15, padding: 10, borderRadius: 5,
          }}>
            <ul>
              <li><a href={route('/')}>Home</a></li>
              <li><a href={route('berita')}>Berita</a></li>
              <li>{truncateString(berita.judul, 30)}</li>
            </ul>
          </div>

          <h1 className="text-2xl ofnt-bold">{berita.judul}</h1>
          <div className="flex justify-between items-center mb-6 ">
            <p className="text-sm flex items-center">
              <span className="icon"><MdDateRange /></span>
              <span className="date-text" style={{ marginRight: 20 }}>{formatDate(new Date(berita.created_at))}</span>
              <span className="icon"><FaUser /></span>
              <span className="date-text">{truncateString(berita.user_name, 13)}</span>
            </p>
          </div>

          <div style={{ display: 'flex', alignItems: 'center', justifyContent: 'center' }}>
            <img src={'/storage/' + berita.gambar} alt={berita.judul} style={{ width: 800 }} />
          </div>
          <p style={{ marginLeft: 'auto', marginTop: 30, marginRight: 'auto', maxWidth: 800, textAlign: 'justify' }}>{berita.deskripsi}</p>

        </div>
      ) : (
        <p>Berita tidak ditemukan</p>
      )}
      <Footer />
    </>
  );
};

export default DetailBerita;
