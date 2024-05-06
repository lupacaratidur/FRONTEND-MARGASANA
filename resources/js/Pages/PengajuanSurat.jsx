import Footer from "@/Components/Common/footer/Footer";
import Navbar from "@/Components/Common/navbar/Navbar"
import CarouselPengajuanSurat from "@/Components/PengajuanSurat/CarouselPengajuanSurat"
import TutorialPengajuanSurat from "@/Components/PengajuanSurat/TutorialpengajuanSurat"
import { Helmet } from "react-helmet";



function PengajuanSurat() {
  return (
    <>
      <Helmet>
        <title>Pengajuan Surat - Desa Margasana</title>
      </Helmet>
      <Navbar />
      <CarouselPengajuanSurat />
      <TutorialPengajuanSurat />
      <Footer />

    </>

  )
}
export default PengajuanSurat