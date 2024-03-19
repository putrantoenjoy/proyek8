@extends('layouts.master')
@section('content')
<section id="content" class="content">
    <div class="content__header content__boxed overlapping">
        <div class="content__wrap">

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Permission</li>
                </ol>
            </nav>

            <p class="lead">
                <h1>Halaman Permission</h1>
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
            @elseif (session('delete'))
            <div class="alert alert-danger" id="danger">
                {{ session('delete') }}
            </div>
            @endif
            @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show">
                <strong>Error!</strong> {!! implode('', $errors->all('<div>:message</div>')) !!}
            </div>
                
            @endif

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-3">Tabel Permission</h5>
                    <div class="row">

                        <!-- Left toolbar -->
                        <div class="col-md-6 d-flex gap-1 align-items-center mb-3">
                            
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary hstack gap-2 align-self-center" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="demo-psi-add fs-5"></i>
                                <span class="vr"></span>
                                Tambah Permission
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
                                    <th>Nama</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($permissions as $permission)
                                <tr>
                                    <td>{{ $permission->id }}</td>
                                    <td>{{ $permission->view }}</td>
                                    <td>
                                        <form action="{{ route('permission-delete', $permission->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash fs-5"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- {{ $allData->links() }} --}}
                    </div>
                    
                </div>
            </div>
            
            <!-- END : Table with toolbar -->

        </div>
    </div>
    @include('permission.tambah')
    {{-- @include('satuan_barang.edit_modal') --}}
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

@endsection