<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
   @include('admin.admincss')


  </head>
  <body>
    <div class="container-scroller">

    @include('admin.navbar')


    <div style="position: relative; top: 60px; right:-150px">
        <form action="{{url('/updatemenu',$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf

            <div>
                <label>Nama Menu</label>
                <input style="color: black" type="text" name="nm_makanan" value="{{$data->nm_makanan}}" required>
            </div>
            <div>
                <label>Harga</label>
                <input style="color: black" type="num" name="harga" value="{{$data->harga}}" required>
            </div>

            <div>
                <label>Deskripsi Menu</label>
                <input style="color: black" type="text" name="deskripsi" value="{{$data->deskripsi}}"required>
            </div>
            <div>
                <label>Foto Menu Sebelum Update</label>
                <img width="100" src="/FotoMakanan/{{$data->gb_makanan}}" >
            </div>
              <div>
                <label>Foto Menu Baru</label>
                <input style="color: black" type="file" name="gb_makanan" required>
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
