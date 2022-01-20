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
            <br><br>
                <table class="w-full" id="tableMenu">
                       <tr class="text-center font-bold" style="background-color: #009DAE;">
                           <th class="border px-5 py-2">Nama Menu</th>
                           <th class="border px-5 py-2">Harga</th>
                           <th class="border px-5 py-2">Deskripsi</th>
                           <th class="border px-5 py-2">Foto menu</th>
                           <th class="border px-5 py-2">Action</th>
                       </tr>
                       @foreach ($data as $data)
                       <tr>
                        <td class="border px-5 py-2" style="text-align: left;">{{$data->nm_makanan}}</td>
                        <td class="border px-5 py-2">{{$data->harga}}</td>
                        <td class="border px-5 py-2">{{$data->deskripsi}}</td>
                        <td class="border px-3 py-2"><img  src="/FotoMakanan/{{$data->gb_makanan}}" width="100px"></td>
                        <td class="border px-5 py-2" id="actionMenu">
                            <a href="{{url('/deletemenu',$data->id)}} " class="btn btn-sm btn-danger" id="delMenu">Delete</a><br><br>
                            <a href="{{url('/updateview',$data->id)}} " class="btn btn-sm btn-warning" id="updateMenu"> Ubah</a>
                        </td>
                       </tr>
                       @endforeach
                </table>

        </div>

        </div>




    </div>





   @include('admin.adminscript')





  </body>
</html>

