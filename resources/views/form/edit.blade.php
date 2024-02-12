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
                <h1>Edit</h1>
            </p>

        </div>

    </div>
    <div class="content__boxed">
        <div class="content__wrap">

            <!-- Table with toolbar -->
            <section id="tambah_akun">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
            
                                {{-- <h5 class="card-title">Block styled form</h5> --}}
            
                                <!-- Block styled form -->
                                <form class="row g-3" method="post" action="{{route('form-update', $allData->id)}}">
                                    @csrf
                                    @method('put')
                                    <div class="col-md-6">
                                        <label for="_dm-inputFname" class="form-label">Nama Depan</label>
                                        <input id="_dm-inputFname" type="text" value="{{$allData->first_name}}" name="first_name" class="form-control">
                                    </div>
            
                                    <div class="col-md-6">
                                        <label for="_dm-inputLname" class="form-label">Nama Belakang</label>
                                        <input id="_dm-inputLname" type="text" name="last_name" class="form-control" value="{{$allData->last_name}}">
                                    </div>
            
                                    <div class="col-12">
                                        <label for="_dm-inputUname" class="form-label">Username</label>
                                        <input id="_dm-inputUname" type="username" name="username" class="form-control" placeholder="Username" value="{{$allData->username}}">
                                    </div>
            
                                    <div class="col-12">
                                        <label for="_dm-inputEmail" class="form-label">Email</label>
                                        <input id="_dm-inputEmail" type="email" name="email" class="form-control" placeholder="Email" value="{{$allData->email}}">
                                    </div>
                                    <div class="col-12">
                                        <label for="_dm-inputPass" class="form-label">Password</label>
                                        <input id="_dm-inputPass" type="password" name="password" required min="8" class="form-control" placeholder="*****">
                                    </div>
                                    <div class="col-12">
                                        <label for="_dm-inputConfirmPass" class="form-label">Konfirmasi Password</label>
                                        <input id="_dm-inputConfirmPass" type="password" name="password_confirmation" min="8" required class="form-control" placeholder="">
                                    </div>
            
                                    <div class="col-12 p-1">
                                        <div class="justify-content-center row mx-1">
                                            <button type="submit" class="btn btn-primary">Ubah Akun</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- END : Block styled form -->
            
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END : Table with toolbar -->

        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Akun</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                @include('form.tambah')
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER -->
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