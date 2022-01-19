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
                    <label>Nama Menu</label>
                    <input style="color: black" type="text" name="nm_makanan" placeholder="Masukan Nama Makanan" required>
                </div>
                <div>
                    <label>Harga</label>
                    <input style="color: black" type="num" name="harga" placeholder="Harga" required>
                </div>
                <div>
                    <label>Foto Menu</label>
                    <input style="color: black" type="file" name="gb_makanan" required>
                </div>
                <div>
                    <label>Deskripsi Menu</label>
                    <input style="color: black" type="text" name="deskripsi" placeholder="Masukan Deskripsi Makanan" required>
                </div>

                <div>
                    <input type="submit" class="btn btn-outline-light btn-fw" value="Simpan">
                </div>






            </form>

            <div class="card">
                <div class="card-body">
                <table >
                       <tr align="center">
                           <th style="padding: 30px">Nama Menu</th>
                           <th style="padding: 30px">Harga</th>
                           <th style="padding: 30px">Deskripsi</th>
                           <th style="padding: 30px">Foto menu</th>
                           <th style="padding: 30px">Action</th>
                       </tr>
                       @foreach ($data as $data)


                       <tr align="center">

                        <td>{{$data->nm_makanan}}</td>
                        <td>{{$data->harga}}</td>
                        <td>{{$data->deskripsi}}</td>
                        <td><img  src="/FotoMakanan/{{$data->gb_makanan}}" width="100px"></td>

                        <td>

                            <a href="{{url('/deletemenu',$data->id)}} " class="btn btn-sm btn-danger">Delete</a>
                        </td>
                        <td>
                            <a href="{{url('/updateview',$data->id)}} "class="btn btn-sm btn-warning mr-2"> Ubah</a>
                        </td>
                       </tr>
                       @endforeach
                </table>



                </div>
            </div>
        </div>

        </div>




    </div>





   @include('admin.adminscript')





  </body>
</html>
