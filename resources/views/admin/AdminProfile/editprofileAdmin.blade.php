
@extends('layouts/adminLayout')
@section('title', 'Social Media')

@section('content')

<script type="text/javascript">
  document.getElementById('mininavbar').classList.add('active');
</script>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Profile</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>-->
          </div>

          <!-- Content Row -->
          <div class="row">
            <form id="file-upload-form" accept-charset="utf-8" enctype="multipart/form-data" method="post" action="">
                @csrf

                     <div class="form-group">
                        <label >Nama</label>
                        <input type="text" class="form-control" id="" name="">
                    </div>
                
                    <div class="form-group">
                        <label>Emaill</label>
                        <input type="number" class="form-control" id="" name="">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">View</label>
                        <input input id="file-upload" type="file" name="image" accept="image/*" onchange="readURL(this);" aria-describedby="inputGroupFileAddon01">
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

            </div>
          </div>
      <!-- End of Main Content -->


      <!-- Add Sosmed Modal-->
      <div class="modal fade" id="sosmedModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Sosmed</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">


            <form accept-charset="utf-8" enctype="multipart/form-data" method="post" action="">
            @csrf

                    <label for="namaweb">Nama Web</label>
                    <input type="text" class="form-control" id="" name="">

                    <label for="linkweb">Link Web</label>
                    <input type="text" class="form-control" id="" name="">

            </form>

            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <a class="btn btn-primary" href="#">Submit</a>
            </div>
          </div>
        </div>
      </div>


      <!-- Edit Sosmed Modal-->
      <div class="modal fade" id="editSosmedModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Sosmed</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">


            <form accept-charset="utf-8" enctype="multipart/form-data" method="post" action="">
            @csrf

                    <label for="namaweb">Nama Web</label>
                    <input type="text" class="form-control" id="" name="">

                    <label for="linkweb">Link Web</label>
                    <input type="text" class="form-control" id="" name="">

            </form>

            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <a class="btn btn-primary" href="#">Submit</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Delete Sosmed Modal-->
      <div class="modal fade" id="deleteSosmedModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Apakah anda yakin ingin menghapus data?</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <a class="btn btn-danger" href="#">Delete</a>
            </div>
          </div>
        </div>
      </div>

      @endsection



<script>
   function readURL(input, id) {
     id = id || '#file-image';
     if (input.files &amp;&amp; input.files[0]) {
         var reader = new FileReader();
 
         reader.onload = function (e) {
             $(id).attr('src', e.target.result);
         };
 
         reader.readAsDataURL(input.files[0]);
         $('#file-image').removeClass('hidden');
         $('#start').hide();
     }
  }
 </script> 