import Footer from '@/Components/Common/footer/Footer';
import Navbar from '@/Components/Common/navbar/Navbar';
import CarouselGaleri from '@/Components/Galeri/CarouselGaleri';
import DaftarFoto from '@/Components/Galeri/DaftarFoto';
import { Link, Head } from '@inertiajs/react';
import { Helmet } from "react-helmet";



export default function Berita(props) {
  return (
    <>
      <Helmet>
        <title>Galeri Desa - Desa Margasana</title>
      </Helmet>
      <Navbar />
      <CarouselGaleri />
      <DaftarFoto />
      <Footer />


    </>
  )
}