<?php
  $waktu="15 Januari 2017 | JawaraNews";
  $judul="Cegah Kecurangan Saat Pencoblosan, Agus & Silvy Membuat Aplikasi";
  $foto="";
  $isi="This is a W3C asdasdasdads asdasdasdasdsadasdasda asdasdasdasdasdasd asdasdadsadsasdasdasd asdasdasdasdsad asdasdasda asdasdasdsad adsadasdasdasd adsasdasdadsasd sdsdsdsdsd sdsdsdsds sdsdssdd stanacascasc asasjdajsd asdasdljlkasd asdlklaksndlasdkn lasnldansldansdlasd jasldjasldjasd laksndlkansldansldalsd lkanldsdfsdfsdfsdfsfdsdfsfdsdfs sdfsfdsdfsfdksbfdks kjksdjfskdf ksdkfsjdkfsj ksdkfsjdkfsjfd ksjdfksjdf sdfsdflsdflkslfdsldfksldf lksdlfskdflskdf sdfsdlfskfdhl sdkanlsdkasd lkansdlaksdlaksdn lansdlaksd";
    if $op=='edit';
    foreach($sql->result() as $obj){
      $op="edit";
      $waktu=$obj->waktu;
      $judul=$obj->judul_berita;
      $foto=$obj->foto_berita;
      $isi=$obj->isi_berita;
    }
?>