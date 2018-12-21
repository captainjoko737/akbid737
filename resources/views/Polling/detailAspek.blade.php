@extends ('layout.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ $title }}
        <!-- <small>Control panel</small> -->
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-book"></i> Polling</a></li>
      </ol>
    </section>

    <!-- Modal -->
    <div class="modal fade modal-warning" id="myModal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Perhatian</h4>
          </div>
          <div class="modal-body">
            <p>Anda yakin akan menghapus data ini ?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" onclick="deleteConfirm()">Hapus</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <div class="box box-primary">
                    <!-- Box header -->
                    <div class="box-header">
                        
                        <h3 class="box-title">Aspek : {{ $aspek['nama_aspek']}}</h3> 
                        <!-- Button add -->
                        <div class="pull-right">
                            <a type="button" class="add-modal btn btn-warning" href="/akbid/polling/detail/{{ $aspek['id_polling']}}"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
                            <button type="button" class="add-modal btn btn-success" onclick="add({{ $aspek['id_aspek_polling']}})"><span class="glyphicon glyphicon-plus"></span> Tambah Item</button>
                        </div>    
                         <!--Include Modal  -->
                        
                    </div>

                    <!-- Box body -->
                    <div class="box-body">
                        <!-- Message -->
                        @if(Session::has('message'))
                            <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4><i class="icon fa fa-check"></i> Berhasil!</h4>
                            {{ session('message') }}
                            </div>
                        @endif

                        @if(Session::has('error'))
                            <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4><i class="icon fa fa-times"></i> Gagal!</h4>
                            {{ session('error') }}
                            </div>
                        @endif
                        
                        <table id="example" class="table table-bordered table-striped display nowrap" style="width:100%">
                          <thead>
                              <tr> 
                                  <th style="width:2%">No</th>
                                  <th style="width:50%">Nama Item</th>
                                  <th>Total Responden</th>
                                  <th>Score 1</th>
                                  <th>Score 2</th>
                                  <th>Score 3</th>
                                  <th>Score 4</th>
                                  <th>Score 5</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>

                            @foreach ($result as $key => $value)

                              
                                <tr>
                                  <td class="text-center">{{ $key + 1 }}</td>
                                  <td>{{ $value->nama_item }}</td>
                                  <td class="text-center">{{ $value->total_responden }}</td>
                                  <td class="text-center">{{ $value->jawaban_1 }}</td>
                                  <td class="text-center">{{ $value->jawaban_2 }}</td>
                                  <td class="text-center">{{ $value->jawaban_3 }}</td>
                                  <td class="text-center">{{ $value->jawaban_4 }}</td>
                                  <td class="text-center">{{ $value->jawaban_5 }}</td>
                                  <td>
                                    <!-- <a onclick="detail({{ $value->id_polling }})" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-search"></span></a> -->
                                    <a onclick="edit({{ $value->id_item_polling }})" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil"></span></a>
                                    <a onclick="ButtonDelete({{ $value->id_item_polling }})" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></a>
                                  </td>
                                </tr>
                             

                            @endforeach
                             
                          </tbody>
                          
                      </table>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('css')
<!-- Fixed Column DataTables -->
    
    

<link href="{{ url('https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css') }}" rel="stylesheet">
<link href="{{ url('https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css') }}" rel="stylesheet">

<style>
td{
    white-space: nowrap;
    max-width: 150px;
    overflow: hidden;
    text-overflow: ellipsis;
}
textarea{
  resize:none
}
table.dataTable {
    margin-top: 0px !important;
    margin-bottom: 0px !important;
}
div.DTFC_LeftWrapper table.dataTable,div.DTFC_RightWrapper table.dataTable{
    background-color: white;
}
</style>
@endsection

@section('js')

<script type="text/javascript">

    $(document).ready(function() {
        $('#example').DataTable( {
            processing: true,
            scrollX : true,
            dom: 'Bfrtip',
            buttons: [
            ]
        } );
    } );

    
    
    function add(id) {
        location.href='/akbid/polling/add/item/'+id;
    }

    function edit(id) {
        location.href='/akbid/polling/edit/item/'+id;
    }
    function detail(id) {
        location.href='/akbid/polling/detail/aspek/'+id;
    }

    var _token = $('input[name="_token"]').val();

    var selectedID = 0;

    function ButtonDelete(id) {
        console.log(id);

        selectedID = id;
        $("#myModal").on("show", function() {    
            $("#myModal a.btn").on("click", function(e) {
                console.log("button pressed");
                $("#myModal").modal('hide');     
            });
        });
        $("#myModal").on("hide", function() {   
            $("#myModal a.btn").off("click");
        });

        $("#myModal").on("hidden", function() {  
            $("#myModal").remove();
        });

        $("#myModal").modal({                    
          "backdrop"  : "static",
          "keyboard"  : true,
          "show"      : true                     
        });
    }

    function deleteConfirm() {
        console.log('INI AKAN DI HAPUS : ', selectedID);

        var data = {
                "id_item_polling" : selectedID,
                "_token" : _token};

          $.ajax({
             type: 'delete',
             url: '{{url("/polling/delete/item")}}',
             data: data,
             success: function(data) {

              // console.log('SUCCESS');
              location.reload();
                // console.log(data);            
             },
             error: function(data) {
                console.log(data);
                 console.log("error");
             }
          });

    }

</script>


@endsection