<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Halaman Admin</title>
   @include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller" style="width: 120%;">
        @include('admin.navbar')
        <div class="container" id="container-user">
            <span><h2>Data</h2></span>
            <table class="w-full" id="tableUser">
                <tr class="text-center font-bold" style="background-color: #009DAE;">
                    <th class="border px-5 py-2">Nama</th>
                    <th class="border px-5 py-2">Email</th>
                    <th class="border px-5 py-2">Action</th>
                </tr>
                @foreach ($data as $data)
                <tr>
                    <td class="border px-5 py-2">{{$data->name}}</td>
                    <td class="border px-5 py-2">{{$data->email}}</td>
                    @if($data->usertype=="0")
                    <td class="border px-5 py-2 text-center"><a id="deleteUser" href="{{url('/deleteuser',$data->id)}}">Delete</a></td>
                    @else
                    <td class="border px-5 py-2 text-center"><span>Tidak Diijinkan</span></td>
                    @endif
                </tr>
                @endforeach
            </table>
        </div>
    </div>

   @include('admin.adminscript')
  </body>
</html>
