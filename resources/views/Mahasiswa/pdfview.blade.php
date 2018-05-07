<!DOCTYPE html>
<html lang="en">
<head>
  <title>Print Data Mahasiswa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style>
      #customers {
          font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
      }

      #customers td, #customers th {
          border: 1px solid #ddd;
          padding: 8px;
          font-size: 10px;
      }

      #customers tr:nth-child(even){background-color: #f2f2f2;}

      #customers tr:hover {background-color: #ddd;}

      #customers th {
          padding-top: 5px;
          padding-bottom: 5px;
          font-size: 12px;
          text-align: left;
          background-color: #4CAF50;
          color: white;
      }
  </style>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <script src="{{ url('assets/bower_components/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
</head>
<body>



<div class="container">
  <h3><center>Data Mahasiswa</center></h3>            
  <table class="table" id="customers" width="100%">
    <thead>
      <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
        <th>Agama</th>
        <th width="(100/x)%">Jenis Kelamin</th>
        <th>Email</th>
        <th>Jurusan</th>
        <th>Kelas</th>
        <th>SMT</th>
        <th>Pembayaran</th>
        <th>Mahasiswa</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($mahasiswa as $key => $item)
      <tr>
        <td>{{ ++$key }}</td>
        <td>{{ $item->nomor_id }}</td>
        <td>{{ $item->nama_lengkap }}</td>
        <td>{{ $item->alamat }}</td>
        <td>{{ $item->tanggal_lahir }}</td>
        <td>{{ $item->agama }}</td>
        <td>{{ $item->jenis_kelamin }}</td>
        <td>{{ $item->alamat_email }}</td>
        <td>{{ $item->jurusan }}</td>
        <td>{{ $item->kelas }}</td>
        <td>{{ $item->semester }}</td>
        <td>{{ $item->status_pembayaran }}</td>
        <td>{{ $item->status_mahasiswa }}</td>
        
      </tr>
      @endforeach


      
    </tbody>
  </table>
</div>

</body>
</html>
