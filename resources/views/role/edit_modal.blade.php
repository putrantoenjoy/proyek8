<div class="modal fade" id="ModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Role Permission</h5>
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
                                    <form class="row g-3 justify-content-center"id="role-form" method="post">
                                        @csrf
                                        @method('put')
                                        <div class="col-md-12 p-0">
                                            <label for="_dm-inputFname" class="form-label">Role</label>
                                            <input type="text" class="form-control" id="role" name="role" disabled onclick="roleCheck()">
                                            {{-- <select name="role" id="role" class="form-control" onclick="roleCheck()">
                                                @foreach ($roles as $role)
                                                <option disabled hidden selected>{{ 'Pilih Role' }}</option>
                                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                @endforeach
                                            </select> --}}
                                            {{-- <input id="nama" type="text" disabled required value="" class="form-control"> --}}
                                        </div>
                
                                        <div class="col-md-12 p-0">
                                            <label for="_dm-inputLname" class="form-label">Permission</label>
                                            <div class="col-12 row p-2">
                                                @foreach ($permissions as $permission)
                                                <div class="form-check col-6">
                                                    <input class="form-check-input" type="checkbox" name="permission[]" {{ $permission->name ? 'checked' : '' }}  id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        {{ $permission->name }}
                                                    </label>
                                                </div>
                                                @endforeach
                                            </div>
                                            {{-- <input id="permission" type="text" name="permission" required placeholder="Permission" class="form-control"> --}}
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
    function resetForm() {
        document.getElementById("role-form").reset();
    }
    function submitForm() {
        
        document.getElementById("role-form").submit();
    }
    // var checkedValue = null; 
    // var inputElements = document.getElementsByClassName('form-check-input');
    // for(var i=0; inputElements[i]; ++i){
    //     if(inputElements[i].checked){
    //         checkedValue = inputElements[i].value;
    //         break;
    //     }
    // }
    var checkedValue = $('.messageCheckbox:checked').val();
    $("#table").on("click", "td #btn-edit", function (){
        let data = $(this).data("data")
        $("#role-form").attr("action", "{{route('role-update',  ':data' )}}".replace(':data', data.id))
        $("#role").val(data.name)
        // $("#")
        // data.forEach(element => {
        //     console.log(element)
        // });
        // $("#nama").val(data.name)
        // var check = document.querySelectorAll(".form-check-input");
        // for (let i = 0; i < check.length; i++) {
        //     check[i].disabled = true;
        // }
        // var checkedValue = $('.messageCheckbox:checked').val();
    })
    // $("#role").on("click", "select #role", function (){
    //     // let data = $(this).data("data")
    //     // $("#role-form").attr("action", "{{route('role-update',  ':data' )}}".replace(':data', data.id))
    //     // $("#nama").val(data.name)
    //     console.log("berhasil");
    // })
    // function roleCheck(){
    //     document.getElementById("role").value = 
        // var x = document.getElementById("role").value;
        // console.log(x);
        // if(x != "Pilih Role"){
        //     var check = document.querySelectorAll(".form-check-input");
        //     for (let i = 0; i < check.length; i++) {
        //         check[i].disabled = false;
        //     }
        //     // array.forEach(element => {
                
        //     // });
        //     console.log("ini angka");
        // }
    // }
</script>
