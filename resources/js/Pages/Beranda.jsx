import Navbar from "@/Components/Common/navbar/Navbar"
import "../Components/Beranda/Beranda.css"
import Footer from "@/Components/Common/footer/Footer"
import CarouselBeranda from "@/Components/Beranda/CarouselBeranda"
import { Helmet } from "react-helmet";
import Sambutan from "@/Components/Beranda/Sambutan"
import FiturDesa from "@/Components/Beranda/FiturDesa";
import BeritaBeranda from "@/Components/Beranda/BeritaBeranda";






function Beranda() {
  return (
    <>
      <Helmet>
        <title> Beranda - Desa Margasana</title>
      </Helmet>
      <Navbar />
      <CarouselBeranda />
      <Sambutan />
      <FiturDesa />
      <BeritaBeranda />
      <Footer />

    </>
  )
}

export default Beranda