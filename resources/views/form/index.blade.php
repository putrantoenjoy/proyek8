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
                <h1>Halaman User</h1>
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
                            <div class="form-group">
                                <input type="text" placeholder="Search..." class="form-control" autocomplete="off">
                            </div>
                            <div class="btn-group">
                                <button class="btn btn-icon btn-outline-light" aria-label="Download"><i class="demo-pli-download-from-cloud fs-5"></i></button>
                                <div class="btn-group dropdown">
                                    <button class="btn btn-icon btn-outline-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="visually-hidden">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>
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
                                    <th>Nama Depan</th>
                                    <th>Nama Belakang</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($allData as $row => $data)
                                <tr>
                                    <td>{{++$row}}</td>
                                    <td>{{$data->first_name}}</td>
                                    <td>{{$data->last_name}}</td>
                                    <td>{{$data->username}}</td>
                                    <td>{{$data->email}}</td>
                                    <td>
                                        <div class="d-flex">
                                            @if($data->deleted_at == null)
                                            <form action="{{route('form-delete', $data->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                
                                                <button class="btn btn-primary" type="button" id="btn-edit" data-data='{{json_encode($data)}}' data-bs-toggle="modal" data-bs-target="#ModalEdit"><i class="bi bi-pencil fs-5"></i></button>
                                                {{-- <a href="{{route('form-edit', $data->id)}}" class="btn btn-primary" type="button"><i class="bi bi-pencil fs-5"></i></a> --}}
                                                <button class="btn btn-danger" type="submit"><i class="bi bi-trash fs-5"></i></button>
                                            </form>
                                            @else
                                            <form action="" method="post">
                                                @csrf
                                                <button class="btn btn-danger disabled" type="button">Deleted</button>
                                            </form>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <nav class="text-align-center mt-5" aria-label="Table navigation">
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
                    </nav>
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
    @include('form.tambah')
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