@extends ('layout.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ $title }}
        <!-- <small>Control panel</small> -->
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-chain"></i> Pengabdian</a></li>
      </ol>
    </section>

    <!-- PROFILE -->

    <section class="content">
      
      <div class="row">
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>

            {!! csrf_field() !!}
            

            {!! Form::open(array('route' => 'putJabatanStruktural','files'=>true, 'method' => 'PUT')) !!}
            <div class="box-body">  

                <div class="form-group hide">
                  <label>id</label>
                  <input type="text" class="form-control" required id="nomor_id" name="nomor_id" value="{{ $nomor_id }}">
                </div>

                <div class="form-group hide">
                  <label>id jabatan Struktural</label>
                  <input type="text" class="form-control" required id="id_jabatan_struktural" name="id_jabatan_struktural" value="{{ $jabatanStruktural['id_jabatan_struktural'] }}">
                </div>

                <div class="form-group">
                  <label>Jabatan / Tugas</label>
                  <input type="text" class="form-control" required id="jabatan_tugas" name="jabatan_tugas" placeholder="Masukkan Jabatan / Tugas" value="{{ $jabatanStruktural['jabatan_tugas'] }}">
                </div>

                <div class="form-group">
                  <label>Kategori Kegiatan</label>
                  <input type="text" class="form-control" required id="kategori_kegiatan" name="kategori_kegiatan" placeholder="Masukkan Kategori Kegiatan" value="{{ $jabatanStruktural['kategori_kegiatan'] }}">
                </div>

                <div class="form-group">
                  <label>Nomor SK Jabatan Struktural</label>
                  <input type="text" class="form-control" required id="nomor_sk_jabatan_struktural" name="nomor_sk_jabatan_struktural" placeholder="Masukkan Nomor SK Jabatan Struktural" value="{{ $jabatanStruktural['nomor_sk_jabatan_struktural'] }}">
                </div>

                <div class="form-group">
                  <label>Terhitung Tanggal Mulai (TTTT-BB-HH)</label>
                  <input type="text" class="form-control" required id="terhitung_mulai_tanggal" name="terhitung_mulai_tanggal" placeholder="Masukkan Terhitung Tanggal Mulai" value="{{ $jabatanStruktural['terhitung_mulai_tanggal'] }}">
                </div>

                <div class="form-group">
                  <label>Lokasi Penugasan</label>
                  <input type="text" class="form-control" required id="lokasi_penugasan" name="lokasi_penugasan" placeholder="Masukkan Lokasi Penugasan" value="{{ $jabatanStruktural['lokasi_penugasan'] }}">
                </div>
                
                <div class="row">
                  <div class="col-xs-4">
                    <button type="button" onclick="window.history.go(-1); return false;" class="btn btn-warning btn-block btn-flat">Kembali</button>
                  </div>
                  <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Simpan Data</button>
                  </div>
              </div>
            </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
      
    </section>
    
@endsection

@section('js')

<script type="text/javascript">


</script>

@endsection








