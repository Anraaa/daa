# Analisa Studi Kasus

## Studi Kasus

Berdasarkan peraturan pemerintah yang terbaru terdapat suatu kebijakakn terkait atlit dimana fokusnya ada untuk mencari bibit muda potensi untuk regenerasi atlit. Saat ini perusahaan anda bergerak dalam bidang pelatihan olahraga yang mana fokusnya untuk mendapatkan bibit atlit dan mendapatkan juara dalam liga atau turnamen baik dalam kancah nasional ataupun internasional

## Latar Belakang Perusahaan
PT. Meowrigin adalah perusahaan yang bergerak di bidang pelatihan olahraga biliar, dengan fokus utama pada pengembangan atlet muda potensial agar mampu berprestasi di tingkat nasional dan internasional. Sejalan dengan kebijakan pemerintah dalam regenerasi atlet, PT. Meowrigin berkomitmen untuk menjadi wadah pembinaan yang berorientasi pada pencarian, pengembangan, dan peningkatan kualitas atlet muda dalam olahraga biliar.

Fokus utama perusahaan adalah pada dua jenis permainan biliar paling populer, yaitu Eight-ball (8 Ball) dan Nine-ball (9 Ball). Kedua format ini sering dipertandingkan dalam turnamen nasional maupun internasional, termasuk dalam kejuaraan yang diselenggarakan oleh World Pool-Billiard Association (WPA) dan federasi olahraga biliar lainnya.

Sebagai bagian dari upaya mendukung Desain Besar Olahraga Nasional (DBON) dan Pola Pembinaan Olahragawan Jangka Panjang (LTAD) yang dicanangkan pemerintah, PT. Meowrigin menerapkan sistem pelatihan profesional dan terstruktur yang berorientasi pada regenerasi atlet, dengan fokus pada pengembangan teknik, strategi permainan, serta mental juara.

Melalui pendekatan modern dan berbasis teknologi, PT. Meowrigin menargetkan lahirnya atlet-atlet muda berbakat yang mampu bersaing di berbagai turnamen bergengsi, serta memperkuat ekosistem biliar Indonesia agar lebih kompetitif di tingkat dunia.

(https://id.wikipedia.org/wiki/Biliar)

## Stakeholder

### Stakeholder yang Berperan Langsung Laravel
Stakeholder yang terlibat langsung dalam penggunaan atau interaksi dengan sistem Laravel, baik sebagai pengguna aktif atau pengelola data.
1. **Admin (Tim Manajemen)**
   - **Peran**: : Admin bertanggung jawab untuk mengelola data atlet, pelatih, penjadwalan latihan, serta hasil penilaian dan evaluasi performa atlet. Admin juga mengelola kategori atlet berdasarkan hasil penilaian mereka (Kategori A, B, C).
   - **Interaksi Dengan Laravel**: Admin menggunakan dashboard admin untuk mengakses, memperbarui, dan mengelola data atlet, serta memantau kemajuan atlet dalam berbagai aspek (teknik, taktik, mental, fisik).
   - **Fitur Utama**: 
     - Pengelolaan pengguna (admin, pelatih, atlet)
     - Pengelolaan dan pembaruan data atlet (termasuk penilaian performa)
     - Menentukan kategori atlet berdasarkan hasil penilaian (Kategori A, B, C)
     - Melihat dan menghasilkan laporan terkait performa atlet, perkembangan dalam latihan, serta kesiapan bertanding
     - Monitoring kesehatan dan cedera atlet melalui data medis
     - Manajemen jadwal latihan dan turnamen
2. **Pelatih**
   - **Peran**: : Pelatih bertugas untuk memberikan penilaian langsung terhadap atlet berdasarkan klasifikasi penilaian yang telah ditentukan. Pelatih akan mengamati dan menilai aspek-aspek seperti keterampilan teknis, taktik, mentalitas, dan kondisi fisik atlet selama latihan.
   - **Interaksi Dengan Laravel**: elatih menggunakan sistem untuk memberikan penilaian atlet dan memberikan umpan balik secara langsung melalui portal pelatih. Mereka juga bertanggung jawab untuk mengelola jadwal latihan dan memberi rekomendasi berdasarkan evaluasi performa atlet.
   - **Fitur Utama**: 
     - Pemberian penilaian kepada atlet berdasarkan skala 1-5 di setiap kategori (teknik, taktik, mental, fisik)
     - Melihat perkembangan atlet dan memberikan umpan balik terkait kategori performa (A, B, C)
     - Mengelola jadwal latihan berdasarkan evaluasi performa atlet
     - Monitoring kondisi fisik dan mental atlet serta memberikan rekomendasi untuk pembinaan lebih lanjut jika diperlukan  
3. **Atlet**
   - **Peran**: : Atlet bertanggung jawab untuk mengikuti pelatihan sesuai jadwal dan memperbaiki performa mereka berdasarkan umpan balik pelatih. Atlet akan menerima penilaian berdasarkan keterampilan teknis, taktik, mentalitas, dan kondisi fisik mereka yang akan menentukan kategori kesiapan mereka bertanding.
   - **Interaksi Dengan Laravel**: Atlet dapat mengakses sistem untuk melihat hasil penilaian mereka, memahami area yang perlu diperbaiki, serta melaporkan kondisi fisik dan kesehatan mereka. Atlet juga dapat memonitor perkembangan mereka menuju kategori siap bertanding (Kategori A).
   - **Fitur Utama**: 
     - Akses ke hasil penilaian performa (teknik, taktik, mental, fisik)
     - Melihat kategori evaluasi (A, B, C) dan rekomendasi pelatih
     - Mengupdate status kesehatan dan cedera
     - Mengakses jadwal latihan dan turnamen yang relevan dengan kesiapan mereka

### Stakeholder yang Berperan di Luar Laravel
1. **Pemerintah (Regulator)**
   - **Peran**: : Pemerintah mengatur kebijakan terkait pembinaan atlet dan regenerasi atlet muda melalui kebijakan yang tercakup dalam Peraturan Presiden dan Peraturan Menteri terkait olahraga.
   - **Interaksi Dengan Laravel**: Pemerintah tidak berinteraksi langsung dengan aplikasi Laravel. Namun, mereka membutuhkan laporan atau data dari sistem untuk memonitor dan mengevaluasi pelaksanaan kebijakan.
   - **Dukungan dari Laravel**: Menyediakan laporan statistik dan analisis kinerja atlet, serta data terkait program pelatihan yang dilakukan.
2. **Sponsor dan Mitra**
   - **Peran**: : Memberikan dukungan finansial dan fasilitas, serta membantu PT. Meowrigin dalam pengembangan dan operasional.
   - **Interaksi Dengan Laravel**: Tidak berinteraksi langsung dengan aplikasi, namun mereka membutuhkan laporan mengenai penggunaan dana dan hasil pelatihan.
   - **Dukungan dari Laravel**: Laporan perkembangan atlet yang disponsori, serta statistik hasil turnamen dan pelatihan.
3. **Penyedia Fasilitas (Tempat Latihan, Pusat Kesehatan)**
   - **Peran**: : Menyediakan fasilitas tempat latihan dan pemulihan bagi atlet. Mereka juga dapat menyediakan peralatan yang diperlukan untuk pelatihan.
   - **Interaksi Dengan Laravel**: Tidak berinteraksi langsung dengan sistem, namun mereka bisa menggunakan informasi terkait jadwal dan jumlah atlet yang menggunakan fasilitas mereka.
   - **Dukungan dari Laravel**: Akses ke jadwal penggunaan fasilitas latihan dan informasi jumlah atlet yang berlatih di sana.
4. **Peminat dan Calon Atlet**
   - **Peran**: : Individu yang tertarik untuk mendaftar dan mengikuti pelatihan biliar di PT. Meowrigin.
   - **Interaksi Dengan Laravel**: Mereka mengakses website untuk mendaftar dan mendapatkan informasi mengenai pelatihan serta kompetisi.
   - **Dukungan dari Laravel**: Formulir pendaftaran, informasi tentang program pelatihan dan jadwal.
5. **Pengelola Turnamen (Federasi Olahraga Biliar)**
   - **Peran**: : Mengatur dan mengelola turnamen yang diikuti oleh atlet PT. Meowrigin, serta memastikan atlet yang berpartisipasi mematuhi regulasi yang ditentukan.
   - **Interaksi Dengan Laravel**: Tidak berinteraksi langsung dengan aplikasi, namun mereka membutuhkan data terkait atlet yang berpartisipasi dalam turnamen dan hasilnya.
   - **Dukungan dari Laravel**: Laporan hasil turnamen, data pendaftaran atlet untuk turnamen, serta statistik kinerja atlet.
6. **Tim Medis/Fisioterapis**
   - **Peran**: : Menangani cedera atlet, merancang program pemulihan, dan memberikan edukasi tentang kesehatan serta pencegahan cedera.
   - **Interaksi Dengan Laravel**: PTidak berinteraksi langsung dengan aplikasi, namun mereka mengupdate data cedera, status pemulihan, dan rekomendasi kesehatan atlet ke pelatih.
   - **Dukungan dari Laravel**: Menyediakan data historis cedera dan pemulihan atlet, serta status kesehatan untuk membantu keputusan pelatih dan manajemen.

## Kebijakan Pemerintah Terkait Pembinaan dan Regenerasi Atlet
Pemerintah Indonesia telah mengeluarkan beberapa peraturan untuk mendukung pembinaan dan regenerasi atlet muda, antara lain:
- **Peraturan Presiden Nomor 86 Tahun 2021 tentang Desain Besar Olahraga Nasional (DBON)**: Dokumen rencana yang berisikan kebijakan pembinaan dan pengembangan keolahragaan nasional secara efektif, efisien, unggul, terukur, sistematis, akuntabel, dan berkelanjutan (https://indonesia.go.id/kategori/editorial/3233/membenahi-ekosistem-olahraga-nasional)
- **Peraturan Menteri Pemuda dan Olahraga Nomor 2 Tahun 2023 tentang Pola Pembinaan Olahragawan Jangka Panjang (LTAD - Long Term Athlete Development)**: Pedoman bagi pemerintah pusat, daerah, dan pemangku kepentingan keolahragaan dalam melaksanakan pembinaan atlet jangka panjang yang terencana dan sistematis (https://www.inforegulasi.com/2023/03/permenpora-nomor-2-tahun-2023-tentang.html)
- **Peraturan Menteri Pemuda dan Olahraga Nomor 14 Tahun 2024 tentang Standar Pengelolaan Organisasi Olahraga Lingkup Olahraga Prestasi**: Mengatur tata kelola organisasi olahraga prestasi untuk memastikan transparansi, akuntabilitas, dan inovasi dalam pembinaan atlet (https://www.kemenpora.go.id/detail/5714)

## Analisis Biliar (Eight-ball dan nine-ball)
- **Eight-ball (8 ball pool)**
  - **Tujuan**: Memasukkan semua bola dari kategori yang dipilih (bola kecil atau bola gede) dan terakhir memasukkan bola hitam nomor 8 ke dalam lubang yang ditentukan. 
  - **Aturan Dasar**: 
    - Pemain pertama melakukan break shot
    - Setelah break, pemain harus menentukan apakah akan bermain dengan bola kecil (1-7) atau bola gede (9-15)
    - Pemain harus memasukkan semua bola dari kategori mereka sebelum dapat membidik bola 8 untuk memenangkan permainan
    - Jika bola 8 masuk lebih awal atau dalam lubang yang salah, pemain otomatis kalah. 
    - Jika pemain melakukan foul, lawan dapat menempatkan bola putih di posisi mana saja di atas meja
- **Nine-ball (9 ball pool)**
  - **Tujuan**: Memasukkan bola bernomor 9 dengan terlebih dahulu mengenai bola bernomor paling kecil di atas meja
  - **Aturan Dasar**: 
    - Pemain melakukan break shot
    - Pemain harus selalu memukul bola bernomor terendah yang tersedia di atas meja
    - Jika bola 9 masuk kapan saja secara sah, pemain langsung menang
    - Jika pemain melakukan foul, lawan dapat menempatkan bola putih di posisi mana saja di atas meja


## Analisis SWOT PT.Meowrigin
- **Strengths (Kekuatan)**
  - **Keselarasan dengan Kebijakan Pemerintah**:  Program pelatihan PT. Meowrigin sejalan dengan DBON dan LTAD, memastikan pendekatan yang terstruktur dan berkelanjutan.
  - **Fokus pada Regenerasi Atlet Muda**: Menargetkan atlet muda potensial sesuai dengan prioritas pemerintah dalam regenerasi atlet.
  - **Metode Pelatihan Modern**: Menggunakan teknologi dan pendekatan ilmiah dalam pelatihan, sesuai dengan arahan LTAD.
- **Weakness (Kelemahan)**
  - **Keterbatasan Sumber Daya**: Keterbatasan dalam hal pendanaan dan fasilitas dapat menghambat implementasi program pelatihan yang optimal.
  - **Popularitas Biliar yang Terbatas**: Biliar belum sepopuler cabang olahraga lain, sehingga menarik minat atlet muda mungkin menjadi tantangan.
- **Opportunities (Peluang)**
  - **Dukungan Pemerintah**: Adanya kebijakan yang mendukung pembinaan atlet muda membuka peluang untuk mendapatkan bantuan dan kerjasama dengan pemerintah.
  - **Kemitraan dengan Sekolah dan Komunitas**: Bekerjasama dengan institusi pendidikan dan komunitas lokal untuk menjaring dan membina atlet muda potensial.
- **Threats (Ancaman)**:
  - **Perubahan Kebijakan**: Perubahan dalam kebijakan pemerintah terkait pembinaan olahraga dapat mempengaruhi program yang telah direncanakan.
  - **Persaingan dengan Akademi Lain**: Akademi olahraga lain yang memiliki sumber daya lebih besar dapat menjadi pesaing dalam menarik atlet muda berbakat.

## Manajemen Waktu dan Porsi Latihan untuk Atlet Biliar
Manajemen waktu dan porsi latihan yang tepat sangat penting untuk memaksimalkan perkembangan atlet biliar PT. Meowrigin, yang berfokus pada regenerasi atlet muda dan persiapan menuju turnamen bergengsi. Sistem pelatihan yang terstruktur tidak hanya melibatkan aspek teknik dan strategi, tetapi juga memperhatikan kesejahteraan fisik dan mental para atlet. Berikut adalah pembagian manajemen waktu dan porsi latihan yang dapat diterapkan.

### Struktur Program Pelatihan
A. **Jadwal Harian**
  - **Senin - Jumat**
    - **Pagi**
      - 07.00 - 08.00: Pemanasan dan latihan fisik (kekuatan dan fleksibilitas).
      - 08.00 - 10.00: Latihan teknik dasar (8 ball dan 9 ball).
      - 10.00 - 11.00: Evaluasi dan analisis permainan melalui video.
      - 11.00 - 12.00: Mental coaching (strategi, fokus, dan motivasi).  
    - **Sore**
      - 14.00 - 16.00: Latihan simulasi turnamen (praktik permainan sesungguhnya).
      - 16.00 - 17.00: Evaluasi sesi latihan dan diskusi perkembangan individu.  
  - **Sabtu**
    - **Pagi** 
      - 08.00 - 10.00: Latihan taktik dan permainan situasional.
      - 10.00 - 12.00: Evaluasi performa dan latihan kecepatan reaksi.
    - **Sore**
      - 14.00 - 16.00: Analisis turnamen sebelumnya dan sesi sparring.
  - **Minggu**
    - **Pagi**: Istirahat atau pemulihan aktif seperti peregangan ringan dan meditasi.
    - **Sore**: Pemulihan fisik dan perawatan cedera jika diperlukan (terapi fisik, pijat).
B. **Duras Latihan**
  - Latihan berlangsung antara 4 hingga 6 jam per hari dengan jeda istirahat yang cukup untuk menghindari kelelahan yang dapat meningkatkan risiko cedera.
  - Pemulihan aktif termasuk stretching dan relaksasi setelah latihan intensitas tinggi adalah bagian integral dari sistem pelatihan.

### Porsi Latihan Berdasarkan Aspek
- **Teknik Dasar**: 25% dari total waktu latihan (termasuk latihan teknik untuk 8 ball dan 9 ball).  
- **Taktik dan Strategi**:

## Protokol Penanganan Cedera Atlet di PT.Meowrigin

### Pencegahan Atlet dalam Latihan
- **Pemanasan & Pendinginan**: Atlet diwajibkan melakukan pemanasan sebelum latihan dan pendinginan setelah latihan untuk mengurangi risiko cedera otot.
- **Teknik yang Benar**: Pelatih memastikan setiap atlet menggunakan teknik yang benar dalam membidik, mengayun cue stick, serta menjaga postur tubuh yang baik agar tidak terjadi ketegangan otot.
- **Latihan Fisik Pendukung**: Atlet diberikan program latihan kekuatan dan fleksibilitas untuk meningkatkan daya tahan tubuh serta menghindari cedera akibat gerakan yang berulang.
- **Pola Istirahat dan Nutrisi**: Program pelatihan diimbangi dengan istirahat yang cukup dan asupan gizi seimbang agar tubuh atlet tetap bugar.

### Cedera Umum dalam Olahraga Biliar
Meskipun biliar tidak melibatkan kontak fisik langsung, beberapa cedera dapat terjadi akibat gerakan berulang dan postur tubuh yang tidak ergonomis. Cedera yang umum meliputi:
- **Cedera Pergelangan Tangan dan Siku**: Akibat gerakan berulang saat melakukan shot.
- **Nyeri Punggung dan Bahu**: Disebabkan oleh postur tubuh yang tidak tepat atau posisi tubuh yang terlalu lama saat bermain.
- **Cedera Leher**: Terjadi akibat posisi kepala yang tidak ergonomis dalam waktu lama.
- **Kram Otot**: Disebabkan oleh kelelahan atau kurangnya hidrasi.

### Prosedur Penanganan Cedera Atlet
Penanganan cedera pada atlet memerlukan pendekatan yang komprehensif untuk memastikan pemulihan yang cepat dan mengurangi risiko cedera berulang. Berikut adalah langkah-langkah yang dapat diambil:
- **Cedera Ringan (Kram, Nyeri Otot, Ketegangan Sendi)**
  - **Menghentikan latihan sementara** agar cedera tidak semakin parah.
  - **Menggunakan Metode RICE (Rest, Ice, Compression, Elevation)**:
    - **Rest (Istirahat)**: Menghentikan aktivitas yang menyebabkan rasa sakit.
    - **Ice (Es)**: Mengompres area yang nyeri selama 15-20 menit untuk mengurangi peradangan.
    - **Compression (Tekanan)**: Menggunakan perban elastis untuk mengurangi pembengkakan.
    - **Elevation (Elevasi)**: Mengangkat area cedera untuk mengurangi aliran darah berlebihan ke area tersebut.
    - (https://apki.or.id/penanganan-cedera-pada-olahraga/)
  - **Memberikan terapi peregangan atau pemijatan ringan** jika dibutuhkan.
  - **Melanjutkan latihan secara bertahap** jika kondisi sudah membaik
- **Cedera Sedang (Tendinitis, Cedera Otot yang Lebih Serius, Nyeri Kronis)**
  - **Pemeriksaan oleh Tim Medis** jika nyeri atau cedera tidak membaik dalam 48 jam, atlet dirujuk ke fisioterapis atau dokter olahraga.
  - **Terapi Fisik** jika diperlukan, atlet menjalani sesi terapi untuk pemulihan bertahap. 
  - **Modifikasi Program Latihan** mengurangi intensitas latihan dan menyesuaikan gerakan agar tidak memperparah cedera.
- **Cedera Berat (Fraktur, Dislokasi, Cedera Saraf)**
  - **Menghentikan Latihan Secara Total** atlet dilarang berlatih hingga mendapat izin medis.
  - **Penanganan Darurat** jika terjadi cedera serius seperti patah tulang atau dislokasi, atlet langsung dibawa ke fasilitas medis terdekat.
  - **Program Rehibilitasi** atlet menjalani program pemulihan khusus sebelum kembali berlatih.

### Pemulihan dan Kembali ke Latihan
Setelah cedera, atlet harus menjalani tahapan pemulihan secara bertahap agar tidak mengalami cedera ulang. Prosedur pemulihan meliputi:
- **Evaluasi Medis** dokter atau fisioterapis menentukan apakah atlet sudah siap kembali ke latihan.
- **Latihan Pemulihan** atlet menjalani latihan dengan intensitas ringan sebelum kembali ke latihan penuh.
- **Monitoring oleh Pelatih & Tim Medis** atlet tetap dipantau untuk memastikan tidak ada gejala lanjutan dari cedera.

## 
