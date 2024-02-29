<div class="modal fade" id="ModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <section id="tambah_akun">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="h-100">
                                <div class="card-body">
                
                                    {{-- <h5 class="card-title">Block styled form</h5> --}}
                
                                    <!-- Block styled form -->
                                    <form class="row g-3 justify-content-center"id="kategori-form" method="post">
                                        @csrf
                                        @method('put')
                                        <div class="col-md-12">
                                            <label for="_dm-inputFname" class="form-label">Kode Kategori</label>
                                            <input id="kode_kategori" type="text" disabled required name="first_name" class="form-control">
                                        </div>
                
                                        <div class="col-md-12">
                                            <label for="_dm-inputLname" class="form-label">Nama</label>
                                            <input id="nama" type="text" name="nama" required placeholder="Nama" class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="_dm-inputLname" class="form-label">Status</label>
                                            <input id="status" type="text" name="status" required placeholder="Status" class="form-control">
                                        </div>
                                    </form>
                                    <!-- END : Block styled form -->
                
                                </div>
                                <div class="d-flex justify-content-end p-3">
                                    <div>
                                        <button type="button" onclick="resetForm()" class="btn btn-danger">Reset</button>
                                        <button type="submit" onclick="submitForm()" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<script>
    // function resetForm() {
    //     document.getElementById("kategori-form").reset();
    // }
    function submitForm() {
        
        document.getElementById("kategori-form").submit();
    }
    $("#table").on("click", "td #btn-edit", function (){
        
        let data = $(this).data("data")
        let tes = $("#kategori-form").attr("action", "{{route('kategori-update',  ':data' )}}".replace(':data', data.id))

        // console.log(tes)
        // $('#kategori-form').on('submit', function(event) {
        //     console.log(event)
        //     event.preventDefault(); // Mencegah form untuk melakukan submit biasa
        //     var formData = $(this).serialize();
        //     var id = $(this).data('id'); // Ambil ID data dari atribut data-id
        //     $.ajax({
        //         url: "{{ route('kategori-update', ':id') }}".replace(':id', id),
        //         method: 'PUT',
        //         data: formData,
        //         success: function(data) {
        //             console.log('Data berhasil diupdate:', data);
        //             // Handle response di sini jika diperlukan
        //         },
        //         error: function(error) {
        //             console.error('Ada kesalahan:', error);
        //             // Handle error di sini jika diperlukan
        //         }
        //     });
        // });
        $("#kode_kategori").val(data.kode_kategori)
        $("#nama").val(data.nama)
        $("#status").val(data.status)
    })
    // $(document).ready(function() {
    //     $('#kategori-form').on('submit', function(event) {
    //         console.log(event)
    //         event.preventDefault(); // Mencegah form untuk melakukan submit biasa
    //         var formData = $(this).serialize();
    //         var id = $(this).data('id'); // Ambil ID data dari atribut data-id
    //         $.ajax({
    //             url: "{{ route('kategori-update', ':id') }}".replace(':id', id),
    //             method: 'PUT',
    //             data: formData,
    //             success: function(data) {
    //                 console.log('Data berhasil diupdate:', data);
    //                 // Handle response di sini jika diperlukan
    //             },
    //             error: function(error) {
    //                 console.error('Ada kesalahan:', error);
    //                 // Handle error di sini jika diperlukan
    //             }
    //         });
    //     });
    // });
</script>
