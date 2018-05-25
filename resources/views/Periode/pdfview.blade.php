<!DOCTYPE html>
<html lang="en">
<head>
  <title>Print Data Polling</title>
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
  <h3><center>Data Polling</center></h3>            
  <table class="table" id="customers" width="100%">
    <thead>
      <tr>
        <th width="10px">No</th>
        <th>Nama Polling</th>
        <th>Jumlah Polling</th>
        <th>Persentase Polling</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($polling as $key => $item)
      <tr>
        <td>{{ ++$key }}</td>
        <td> {{ $item->nama_polling }}</td>
        <td> {{ $item->jumlah_polling }}</td>
        <td> {{ $item->persentase_polling }}</td>
        
      </tr>
      @endforeach


      
    </tbody>
  </table>
</div>

</body>
</html>
