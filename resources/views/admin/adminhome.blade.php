<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
      <style>
h1 {text-align: center;}



      </style>
   @include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller">
    @include('admin.navbar')
    <h1>Hello World !</h1>
    </div>
   @include('admin.adminscript')
  </body>
</html>
