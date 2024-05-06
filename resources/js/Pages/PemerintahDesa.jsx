import React, { useState, useEffect } from 'react';
import Navbar from "@/Components/Common/navbar/Navbar";
import DaftarPemerintahDesa from "@/Components/PemerintahDesa/DaftarPemerintahdesa";
import CarouselPemerintahDesa from "@/Components/PemerintahDesa/CarouselPemerintahDesa";
import { Helmet } from "react-helmet";
import Footer from "@/Components/Common/footer/Footer";

function PemerintahDesa() {
  return (
    <>
      <Helmet>
        <title>Pemerintah Desa - Desa Margasana</title>
      </Helmet>
      <Navbar />
      <CarouselPemerintahDesa />
      <DaftarPemerintahDesa />
      <Footer />
    </>
  )
}

export default PemerintahDesa;
