<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller" style="width: 120%;">
    @include('admin.navbar')


        <div class="container" id="container-menu">
            <form action="{{url('/uploadmakanan')}}" method="post" enctype="multipart/form-data" id="formMenu">
                @csrf
                <div class="mb-4">
                    <span>Nama</span>
                    <input type="text" name="nm_makanan" placeholder="Masukan Nama Makanan" required>
                </div>
                <div class="mb-4">
                    <span>Harga</span>
                    <input type="text" name="harga" placeholder="Harga" style="width: 150px;" required>
                </div>
                <div class="mb-4">
                    <span>Foto</span>
                    <input type="file" name="gb_makanan" required style="color: #fff; font-weight: bold;">
                </div>
                <div class="mb-4">
                    <span>Deskripsi</span>
                    <input type="text" name="deskripsi" placeholder="Masukan Deskripsi Makanan" required>
                </div>

                <div class="mb-4">
                    <button class="border" type="submit" id="simpanMenu" value="Simpan">Simpan</button>
                </div>
            </form>
        </div>

        </div>




    </div>





   @include('admin.adminscript')





  </body>
</html>

