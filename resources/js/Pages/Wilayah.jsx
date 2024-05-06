import CarouselWilayah from "@/Components/Wilayah/CarouselWilayah"
import WilayahDesa from "@/Components/Wilayah/WilayahDesa"
import Navbar from "@/Components/Common/navbar/Navbar"
import { Helmet } from "react-helmet";

function Wilayah() {
  return (
    <>
      <Helmet>
        <title>Wilayah Desa - Desa Margasana</title>
      </Helmet>
      <Navbar />
      <CarouselWilayah />
      <WilayahDesa />
    </>
  )
}
export default Wilayah