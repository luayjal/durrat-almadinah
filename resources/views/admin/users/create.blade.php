<x-navbar-layout>
  
    <form action="{{route('admin.users.store')}}" method="post" enctype="multipart/form-data">
     @include('admin.users.form')

     
    </form>
  
</x-navbar-layout>