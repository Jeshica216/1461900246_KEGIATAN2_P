<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>
    1461900230
  </title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}" />
</head>
<body>

  <div class="bg-white rounded-lg shadow-lg py-6">
    <div class="block overflow-x-auto mx-6">
      <h1>Select</h1>
      <table class="w-full text-left rounded-lg">
        <thead>
          <tr class="text-gray-800 border border-b-0">
            <th class="px-4 py-3">#</th>
            <th class="px-4 py-3">Kode Buku</th>
            <th class="px-4 py-3">Kode Kategori</th>
            <th class="px-4 py-3">Kode Penerbit</th>
            <th class="px-4 py-3">Judul Buku</th>
            <th class="px-4 py-3">Jumlah Buku</th>
            <th class="px-4 py-3">Pengarang Buku</th>
            <th class="px-4 py-3">Tahun Terbit buku</th>
            <th class="px-4 py-3">Aksi</th>
          </tr>
        </thead>
      <h1>Select Where "ia"</h1>
      <table class="w-full text-left rounded-lg">
        <thead>
          <tr class="text-gray-800 border border-b-0">
          <th class="px-4 py-3">#</th>
            <th class="px-4 py-3">Kode Buku</th>
            <th class="px-4 py-3">Kode Kategori</th>
            <th class="px-4 py-3">Kode Penerbit</th>
            <th class="px-4 py-3">Judul Buku</th>
            <th class="px-4 py-3">Jumlah Buku</th>
            <th class="px-4 py-3">Pengarang Buku</th>
            <th class="px-4 py-3">Tahun Terbit buku</th>
            <th class="px-4 py-3">Aksi</th>
          </tr>
        </thead>
        <tbody>
        @foreach($where as $where)
          <tr class="w-full font-light text-gray-700 whitespace-no-wrap border">
          <td class="px-4 py-4">{{ $buku->kode_buku}}</td>
            <td class="px-4 py-4">{{ $buku->kode_kategori}}</td>
            <td class="px-4 py-4">{{ $buku->kode_penerbit }}</td>
            <td class="px-4 py-4">{{ $buku->judul_buku}}</td>
            <td class="px-4 py-4">{{ $buku->jumlah_buku}}</td>
            <td class="px-4 py-4">{{ $buku->pengarang_buku}}</td>
            <td class="px-4 py-4">{{ $buku->tahun_terbit_buku}}</td>
            <td class="text-center py-4">
              <a href="#"><span class="fill-current text-green-500 material-icons">Edit</span></a> !
              <a href="#"><span class="fill-current text-red-500 material-icons">Hapus</span></a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
      <br>
      <h1>Select Join detail_pinjam dengan peminjaman</h1>
      <table class="w-full text-left rounded-lg">
        <thead>
          <tr class="text-gray-800 border border-b-0">
           <th class="px-4 py-3">#</th>
            <th class="px-4 py-3">Tgl Kembali</th>
            <th class="px-4 py-3">Aksi</th>
          </tr>
        </thead>
        <tbody>
        @foreach($peminjam as $peminjaman)
          <tr class="w-full font-light text-gray-700 whitespace-no-wrap border">
            <td class="px-4 py-4">{{ $peminjaman->kode_peminjaman }}</td>
            <td class="text-center py-4">
              <a href="#"><span class="fill-current text-green-500 material-icons">Edit</span></a> !
              <a href="#"><span class="fill-current text-red-500 material-icons">Hapus</span></a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
      <br>
      <h1>Select Join detail_pinjam dengan Where tgl kembali HTML&CSS</h1>
      <table class="w-full text-left rounded-lg">
        <thead>
          <tr class="text-gray-800 border border-b-0">
           <th class="px-4 py-3">#</th>
           <th class="px-4 py-3">Tgl Kembali</th>
            <th class="px-4 py-3">Aksi</th>
          </tr>
        </thead>
        <tbody>
        @foreach($joinWhere as $pinjam)
          <tr class="w-full font-light text-gray-700 whitespace-no-wrap border">
          <td class="px-4 py-4">{{ $peminjaman->kode_peminjaman }}</td>
            <td class="text-center py-4">
              <a href="#"><span class="fill-current text-green-500 material-icons">Edit</span></a> !
              <a href="#"><span class="fill-current text-red-500 material-icons">Hapus</span></a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>

    </div>
  </div>
</body>
</html>