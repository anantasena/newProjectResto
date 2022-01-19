<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.admincss')


  </head>
  <body>
    <div class="container-scroller">


    @include('admin.navbar')


        <div style="position: relative; top: 60px; right:-150px">
            <form action="{{url('/uploadmakanan')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div>
                    <label>Nama Makanan</label>
                    <input style="color: black" type="text" name="nm_makanan" placeholder="Masukan Nama Makanan" required>
                </div>
                <div>
                    <label>Harga</label>
                    <input style="color: black" type="num" name="harga" placeholder="Harga" required>
                </div>
                <div>
                    <label>Foto Makanan</label>
                    <input style="color: black" type="file" name="gb_makanan" required>
                </div>
                <div>
                    <label>Deskripsi Makanan</label>
                    <input style="color: black" type="text" name="deskripsi" placeholder="Masukan Deskripsi Makanan">
                </div>

                <div>
                    <input type="submit" class="btn btn-outline-light btn-fw" value="Simpan">
                </div>





            </form>



        </div>



    </div>





   @include('admin.adminscript')





  </body>
</html>
