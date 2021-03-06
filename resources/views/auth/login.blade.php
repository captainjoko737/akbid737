@extends ('layout_login.app')

@section('content')
    <!-- Content Header (Page header) -->
    
    <!-- Main content -->
    <section class="content">
      <div class="login-box">
        <div class="login-logo">
          <a><img src="{{ url('assets/image_assets/logo.png') }}" style="width: 200px;"></a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
          <p class="login-box-msg">Silahkan Login Ke Akun Anda</p>

          <form action="{{route('postLogin')}}" method="post">
            {!! csrf_field() !!}
            @if (count($errors) > 0)
              <div class="alert alert-danger">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  @foreach ($errors->all() as $error)
                    {{ $error }}
                  @endforeach
              </div>
            @endif
            <div class="form-group has-feedback">
              <input type="text" name="nomor_id" class="form-control" placeholder="Nomor Identitas">
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="password" name="password" id="password" class="form-control" placeholder="Password">
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
              <div class="col-xs-8">
                
              </div>
              <!-- /.col -->
              <div class="col-xs-4">
                <button type="submit" class="btn btn-success btn-block btn-flat">Masuk</button>
              </div>
              <!-- /.col -->
            </div>
          </form>

        </div>
        <!-- /.login-box-body -->
      </div>
      <!-- /.login-box -->
      
    </section>
@endsection

@section('js')
  <!-- Chart -->
  <script src="{{ url('assets/bower_components/morris.js/morris.min.js') }}"></script>

@endsection