<?php
        $destinations = [
            [
                "nama" => "Pulau Padar",
                "img"  => "https://asset.kompas.com/crops/vU5byo_tLt0zKnHydmi40O-L8DA=/5x65:730x548/1200x800/data/photo/2020/05/18/5ec27908adb29.jpg",
                "link" => "https://explorepadarisland.wordpress.com"
            ],
            [
                "nama" => "Danau Kelimutu",
                "img"  => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRaw4s7QiLnRx7s3LpdvxuKmW16cy4yAY4fZQ&s",
                "link" => "https://florestourkomodo.com/wisata-danau-kelimutu-flores-6-hari/"
            ],
            [
                "nama" => "Taman Nasional Komodo",
                "img"  => "https://indonesiajuara.asia/wp-content/uploads/2024/12/Pulau-Padar-di-Taman-Nasional-Komodo-_-IndonesiaJuara-Trip_11zon.webp",
                "link" => "https://tnkomodo.ksdae.kehutanan.go.id/"
            ],
            [
                "nama" => "Gunung Inerie",
                "img"  =>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR1LxYBfarIv8iNzhc6LUdkD3Kxf6O-gJJvpg&s",
                "link" => "https://portal.ngadakab.go.id/gunung-inerie/"
            ],
            [
                "nama" => "Pink Beach",
                "img"  => "https://awsimages.detik.net.id/community/media/visual/2021/07/05/wisata-super-prioritas-labuan-bajo_169.jpeg?w=1200",
                "link" => "https://www.indonesia.travel/id/id/destination/bali-nusa-tenggara/east-nusa-tenggara/pink-beach/"
            ],
            [
                "nama" => "Manta Point",
                "img"  => "https://indonesiajuara.asia/wp-content/uploads/2022/06/slide-2-open-trip-labuan-bajo.jpg",
                "link" => "https://dragondivekomodo.com/en/manta-point-komodo/"
            ],
            [
                "nama" => "Wae Rebo",
                "img"  => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyihaUQCpvzdqmfvAdhN76D6zL8WTNkU7AlQ&s",
                "link" => "https://www.waereboofficial.com/"
            ]
        ];
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="projekakhir.css">
</head>
<body>
    <nav >
        <div class="logo"> Explore NTT</div>
       <div class="menu">
         <a href="#home">Home</a>
        <a href="#Destination">Destination</a>
        <a href="#Activities">Activities</a>
        <a href="#About NTT">About NTT</a>
        <a href="#Contact Us">Contact Us</a>
       </div>
    </nav>

    <section class="teks" >
        <div class="teks_con">
            <h1>Jelajahi Keindahan</h1>
            <h2>NTT</h2>
            <a href="#Destination" class="btn">EXPLORE NOW</a>
        </div>
    </section>

    <section id="Destination" class="Destination">
      <div class="gambargng">
        <?php foreach ($destinations as $index => $data): ?>
          <div class="gambar<?= $index + 1 ?>">
             <img src="<?= $data['img']; ?>" alt="<?= $data['nama']; ?>">
             <div class="gambar-text">
              <h3><?= $data['nama']; ?></h3>
              <a href="<?= $data['link']; ?>" class="detail-btn">Lihat Detail</a>
             </div>
          </div>
          <?php endforeach; ?>
      </div>
    </section>

    <section id="Activities" class="Activities">
  <h2>Aktivitas Petualangan NTT</h2>
  <div class="activities">
    <div class="activitas1">
      <img src="https://www.birdmi.com/wp-content/uploads/2019/04/a-4.jpg" alt="Snorkeling">
      <h3>Aktivitas Air</h3>
      <p><a href="#" class="activity-link">Snorkeling di Manta Point</a></p>
    </div>
    <div class="activitas2">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIJBGmE-AHrQcx9OKcLFTppajnVl_sBbsYuA&s" alt="Berkemah">
      <h3>Petualangan Alam</h3>
      <p>Berkemah</p>
    </div>
    <div class="activitas3">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVCiBqz8_7D-GAjmLHA6jr_zIXOOvXcB8ngo48ptTY28rW6nZMHggoGbaaUdNXluBHU7c&usqp=CAU" alt="Tenun Ikat">
      <h3>Budaya dan Komunitas</h3>
      <p>Tenun Ikat</p>
    </div>
  </div>
</section>
<section id="About NTT" class="AboutNTT">
  <div class="about">
    <div class="image">
      <img src="https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/p2/178/2024/06/29/Gambar-1-Peta-Propinsi-Nusa-Tenggara-Timur_Q320-907213069.jpg" alt="Tentang NTT">
    </div>

    <div class="about-text">
      <h2>Tentang Nusa Tenggara Timur</h2>
      <p>
        Nusa Tenggara Timur (NTT) adalah salah satu provinsi terindah di Indonesia yang terdiri dari gugusan pulau-pulau eksotis seperti Flores, Sumba, dan Timor. 
        Dikenal dengan keanekaragaman budaya, kain tenun ikat yang khas, serta destinasi alam menakjubkan seperti Danau Kelimutu dan Taman Nasional Komodo.
      </p>
      <p>
        Penduduk NTT hidup harmonis dengan alam, menjaga kearifan lokal dan tradisi yang telah diwariskan turun-temurun. 
        Keindahan dan keramahan masyarakatnya menjadikan NTT destinasi wisata budaya dan alam yang unik.
      </p>
      <a href="https://id.wikipedia.org/wiki/Nusa_Tenggara_Timur"class="about-btn" >Pelajari Lebih Lanjut</a>
    </div>
  </div>
</section>

<section id="Contact Us" class="contact">
  <div class="contact-box">
    <div class="form-section">
      <h2>Hubungi Kami</h2>
      <form>
        <label>Nama Lengkap</label>
        <input type="text" placeholder="Masukkan nama Anda" required>

        <label>Alamat Email</label>
        <input type="email" placeholder="Masukkan email Anda" required>

        <label>Pesan Anda</label>
        <textarea rows="4" placeholder="Tulis pesan di sini..." required></textarea>

        <button type="submit">Kirim Pesan</button>
      </form>
    </div>

    <div class="social-section">
      <h2>Ayo! Berkolaborasi bersama kami :)</h2>
      <div class="social">
        <p><strong>YouTube:</strong> Alam Kita Bersama</p>
        <p><strong>Instagram:</strong> @lamkita79</p>
      </div>
    </div>
  </div>
</section>

</body>
</html>