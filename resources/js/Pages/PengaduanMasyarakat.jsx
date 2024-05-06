import Footer from "@/Components/Common/footer/Footer";
import Navbar from "@/Components/Common/navbar/Navbar"
import CarouselPengaduanMasyarakat from "@/Components/PengaduanMasyarakat/CarouselPengaduanMasyarakat"
import TutorialPengaduanMasyarakat from "@/Components/PengaduanMasyarakat/TutorialPengaduanMasyarakat"
import { Helmet } from "react-helmet";




function PengaduanMasyarakat() {
  return (
    <>
      <Helmet>
        <title>Pengaduan Masyarakat - Desa Margasana</title>
      </Helmet>
      <Navbar />
      <CarouselPengaduanMasyarakat />
      <TutorialPengaduanMasyarakat />
      <Footer />

    </>

  )
}
export default PengaduanMasyarakat