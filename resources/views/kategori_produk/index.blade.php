@extends('layouts.master')
@section('content')
<section id="content" class="content">
    <div class="content__header content__boxed overlapping">
        <div class="content__wrap">

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User</li>
                </ol>
            </nav>

            <p class="lead">
                <h1>Halaman Kategori</h1>
            </p>

        </div>

    </div>
    <div class="content__boxed">
        <div class="content__wrap">

            <!-- Table with toolbar -->
            @if (session('status'))
                <div class="alert alert-success" id="success">
                    {{ session('status') }}
                </div>
            @endif
            @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show">
                <strong>Error!</strong> {!! implode('', $errors->all('<div>:message</div>')) !!}
            </div>
                
            @endif

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-3">Tabel User</h5>
                    <div class="row">

                        <!-- Left toolbar -->
                        <div class="col-md-6 d-flex gap-1 align-items-center mb-3">
                            
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary hstack gap-2 align-self-center" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="demo-psi-add fs-5"></i>
                                <span class="vr"></span>
                                Tambah User
                            </button>
                            
                            
                        </div>
                        <!-- END : Left toolbar -->
                        

                        <!-- Right Toolbar -->
                        <div class="col-md-6 d-flex gap-1 align-items-center justify-content-md-end mb-3">
                            <form action="" method="get" class="d-flex gap-2">
                                <div class="form-group">
                                    <input type="text" placeholder="Search..." name="cari" class="form-control" autocomplete="off" value="">
                                </div>
                                <div class="btn-group">
                                    <button class="btn btn-icon btn-outline-light"><i class="bi bi-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <!-- END : Right Toolbar -->

                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="table" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Kategori</th>
                                    <th>Nama</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($allData as $row => $data)
                                <tr>
                                    <td>{{ ++$row }}</td>
                                    <td>{{ $data->kode_kategori }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->status }}</td>
                                    <td>
                                        <div class="d-flex">
                                            
                                            <form action="" method="post">
                                                @csrf
                                                <button class="btn btn-danger disabled" type="button">Deleted</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{-- <nav class="text-align-center mt-5" aria-label="Table navigation">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#">Previous</a>
                            </li>
                            <li class="page-item active" aria-current="page">
                                <span class="page-link">1</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav> --}}
                    {{-- {{$allData->onEachSide(2)->links()}} --}}
                </div>
            </div>
            <!-- END : Table with toolbar -->

        </div>
    </div>
    <!-- Modal -->
    
    {{-- <button class="btn btn-icon btn-outline-light" aria-label="Print table">
        <i class="demo-pli-printer fs-5"></i>
    </button>
    <div class="btn-group">
        <button class="btn btn-icon btn-outline-light" aria-label="Information"><i class="demo-pli-exclamation fs-5"></i></button>
        <button class="btn btn-icon btn-outline-light" aria-label="Remove"><i class="demo-pli-recycling fs-5"></i></button>
    </div> --}}
    <!-- FOOTER -->
    @include('kategori_produk.tambah')
    @include('form.edit_modal')
    <footer class="content__boxed mt-auto">
        <div class="content__wrap py-3 py-md-1 d-flex flex-column flex-md-row align-items-md-center">
            <div class="text-nowrap mb-4 mb-md-0">Copyright &copy; 2022 <a href="#" class="ms-1 btn-link fw-bold">My Company</a></div>
            <nav class="nav flex-column gap-1 flex-md-row gap-md-3 ms-md-auto" style="row-gap: 0 !important;">
                <a class="nav-link px-0" href="#">Policy Privacy</a>
                <a class="nav-link px-0" href="#">Terms and conditions</a>
                <a class="nav-link px-0" href="#">Contact Us</a>
            </nav>
        </div>
    </footer>
    <!-- END - FOOTER -->

</section>

{{-- <script>
    var delayInMilliseconds = 5000; //1 second
    var x = document.getElementById("success");
    setTimeout(function() {
        // const element = document.getElementById("demo");
        x.remove();
    console.log("success");
    }, delayInMilliseconds);
</script> --}}

@endsection