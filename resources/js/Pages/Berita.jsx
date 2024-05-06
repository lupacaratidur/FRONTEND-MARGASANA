import CarouselBerita from '@/Components/Berita/CarouselBerita';
import DaftarBerita from '@/Components/Berita/DaftarBerita';
import Paginator from '@/Components/Berita/Paginator';
import Footer from '@/Components/Common/footer/Footer';
import Navbar from '@/Components/Common/navbar/Navbar';
import { Link, Head } from '@inertiajs/react';
import { Helmet } from "react-helmet";




export default function Berita() {
  return (
    <>
      <Helmet>
        <title>Berita Desa - Desa Margasana</title>
      </Helmet>
      <Navbar />
      <CarouselBerita />
      <div className='flex justify-center flex-col lg:flex-row lg:flex-wrap lg:flex-stretch item-center gap-4 pd-4'>
        <DaftarBerita />
      </div>
      <div className='flex justify-center item-center'>

      </div>
      <Footer />

    </>
  )
}