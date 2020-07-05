@include('layouts.partials.header')
@include('layouts.partials.sidebar')
@include('layouts.partials.topbar')

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          @yield('content')

        </div>
        <!-- /.container-fluid -->
@include('layouts.partials.footer')