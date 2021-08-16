@extends('layouts.main')
@section('content')
<section class="content">
    <div class="card" style="border-top: 3px solid #ff5a0b">
        <body>
        <div class="container mt-2">
        <div class="row">
        <div class="col-lg-12 margin-tb">
        <div class="pull-left">
<center>
    <h1 style="color: #fa6900">{{ __('Resep Membuat Pasta') }}</h1>
    <img src="{{asset('image/resep.png')}}" alt="logo" height="250" width="310">
</center>
    <div class="card-body">
        <table class="table table-bordered" id="datatable-crud" cellspacing="3">
    <table id="example2" class="table table-bordered table-hover">
      <thead>
      <tr>
        <th>Nama Resep Makanan</th>
        <th>Bahan-bahan</th>
        <th>Cara Membuatnya</th>
      </tr>
      </thead>
      <tbody>
        <tr>
          <td><h6>Resep Spaghetti Bolognese</h6></td>
          <td><ol>
            <li>2 sdm minyak zaitun</li>
            <li>1 buah bawang bombay, cincang</li>
            <li>1/2 kg daging sapi cincang</li>
            <li>1 sdm bubuk oregano</li>
            <li>1 kaleng tomat puree</li>
            <li>3 siung bawang putih, cincang</li>
            <li>2 sdm saus tomat</li>
            <li>Daun peterseli cincang, secukupnya</li>
            <li>Garam dan lada hitam untuk rasa</li>
            <li>8 ons spaghetti</li>
            <li>Keju Parmesan parut sesuai selera</li>
        </ol></td>
          <td><ol>
            <li>Panaskan minyak, kemudian tumis bawang bombay bersama bawang putih.</li>
            <li>Masukkan daging cincang, dan tumis selama 8 menit.</li>
            <li>Tambahkan bubuk oregano dan saus tomat, aduk hingga merata.</li>
            <li>Masukkan tomat puree dan daun peterseli, kecilkan api dan masak selama 15 menit.</li>
            <li>Rebus spaghetti dengan air garam hingga al dente.</li>
            <li>Sajikan pasta dengan saus bolognese, dan keju Parmesan sesuai selera.</li>
        </ol></td>
        </tr>
        <tr>
            <td><h6>Resep Pasta Fettucini Carbonara</h6></td>
            <td><ol>
              <li>Fettucini 500 gram</li>
              <li>Air untuk merebus pasta, secukupnya</li>
              <li>Minyak sayur, secukupnya</li>
              <li>Susu UHT full cream 1 liter</li>
              <li>Keju cheddar parut</li>
              <li>Smoked beef 6 lembar</li>
              <li>Jamur kalengan 1 buah</li>
              <li>Margarin 3 sendok makan</li>
              <li>Bawang bombay iris</li>
              <li>Bawang putih 2 siung</li>
              <li>Garam, gula dan lada bubuk secukupnya</li>
              <li>Keju parmesan bubuk</li>
              <li>Oregano kering</li>
              <li>Bubuk cabai</li>
          </ol></td>
            <td><ol>
              <li>Rebus air, berikan sedikit minyak sayur dan garam. Rebus fettucini selama kurang lebih 15-20 menit, sampai matang. Angkat dan tiriskan</li>
              <li>Untuk membuat saus keju, panaskan margarin. Tumis bawang bombay dan bawang putih sampai harum dan layu</li>
              <li>Masukkan smoked beef dan jamur, aduk-aduk sampai matang. Tambahkan susu UHT dan keju cheddar. Aduk lagi sampai mengental</li>
              <li>Setelah saus keju sudah matang, masukkan fettucini yang sudah ditiriskan. Tambahkan garam, gula dan lada secukupnya</li>
              <li>Hidangkan fettucini selagi hangat, taburi dengan oregano dan keju parmesan bubuk. Jika suka pedas, bisa juga ditambahkan bubuk cabai atau saus cabai botolan</li>
          </ol></td>
          </tr>
          <tr>
            <td><h6>Resep Lasagna</h6></td>
            <td><ol>
              <li>7 lembar Kulit Lasagna</li>
              <li>250 gram Daging Cincang</li>
              <li>350 gram Keju Cheddar</li>
              <li>Untuk White Sauce, 1 sendok makan Mentega/ Butter</li>
              <li>500 ml Susu Cair</li>
              <li>2 sendok makan Tepung</li>
              <li>secukupnya Garam, Lada</li>
              <li>50 gram Keju Parut</li>
              <li>Untuk Red Sauce, 1 buah Bawang Bombay, 4 siung Bawang Putih</li>
              <li>3 buah Tomat Merah (Rebus, Buang Kulit)</li>
              <li>1/4 sendok teh Oregano (optional)</li>
              <li>3 sendok makan Saus Tomat, 4 sendok makan Saus Spaghetti</li>
              <li>2 helai Daun Salam Kering</li>
              <li>secukupnya Kaldu bubuk (optional), secukupnya garam, gula, lada</li>
          </ol></td>
            <td><ol>
              <li>Potong tomat rebus menjadi dadu</li>
              <li>RED SAUCE:
                Tumis bawang bombay dan bawang putih sampai warna berubah menjadi transparan, lalu masukkan daging cincang dan tumis hingga berubah warna. Lalu masukkan semua bahan Red Sauce</li>
              <li>WHITE SAUCE:
                Gunakan panci anti lengket. Dengan api kecil
                Masukkan Mentenga, saat mentega lumer masukkan tepung dan tepung menyerap semua mentega, hati-hati tepung mudah gosong.</li>
              <li>Masukkan susu cair sedikit demi sedikit sambil terus diaduk agar tidak menggumpal. masukkan susu sampai habis dan adonan mengental. lalu tambahkan Keju, merica dan garam.</li>
              <li>Panaskan oven 175c
                Atur kulit lasagna, lalu tuang Red sauce pada satu bagian, lalu timba dengan White sauce, dan keju lalu tutup dengan lembar lasagna lagi. ulangi sampai pasta sheet habis.
                Lapisan paling atas setelah menuang Sauce, jangan ditabur keju.</li>
              <li>Panggang selama 20 menit, dan permukaan menjadi kuning keemasan. dengan sisa 5 menit terakhir taburi keju diatasnya. untuk dihidangkan lasagna dikeluarkan dari oven dan didiamkan dahulu 20 menit.</li>
          </ol></td>
          </tr>
          <tr>
            <td><h6>Resep Makaroni Pasta</h6></td>
            <td><ol>
              <li>200 gram pasta makaroni</li>
              <li>1/4 buah bawang bombay, cincang kasar</li>
              <li>2 Siung bawang putih, cincang halus</li>
              <li>4 buah sosis, potong-potong</li>
              <li>200 ml susu cair</li>
              <li>100 gram keju, boleh yang cheddar, boleh quick melt. Parut. Atau boleh disesuaikan sesuai selera</li>
              <li>50 gram mentega</li>
              <li>secukupnya Garam, Lada, Kaldu sapi, parsley kering</li>
              <li>1 sdm tepung terigu</li>
          </ol></td>
            <td><ol>
              <li>Rebus makaroni ke dalam air mendidih yang telah diberi sedikit minyak dan garam. Masak hingga al-dente. Tiriskan. Sisihkan.</li>
              <li>Tumis Bawang putih hingga harum. Masukkan bawang bombay, tumis hingga bawang berubah warna. Tambahkan sosis. Bumbui garam, merica, dan kaldu sapi. Masak hingga sosis matang. Angkat, sisihkan.</li>
              <li>Lelehkan mentega, tambahkan terigu. Aduk cepat hingga adonan licin. Tambahkan susu sedikit demi sedikit sambil diaduk-aduk. Tambahkan keju. Aduk terus hingga adonan mengental.</li>
              <li>Masukkan makaroni dan tumisan sosis ke dalam adonan saus. Aduk rata.</li>
              <li>Tata dalam piring saji. Taburi parsley kering. Sajikan.</li>
          </ol></td>
          </tr>
      </tbody>
    </table>
  </div>
</div>
</div>
</div>
</div>
</body>
</div>
@endsection
