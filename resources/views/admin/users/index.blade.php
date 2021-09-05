<x-navbar-layout>
    @push('css')
    <link rel="stylesheet" href="{{asset('front/css/all.min.css')}}">
    @endpush
    @if(session()->has('status'))
    <div class="alert alert-success">{{session()->get('status')}}</div>
    @endif
    <a href="{{route('admin.users.create')}}" class="btn btn-success mt-3 mb-3">إضافة <i class="fas fa-user-plus"></i></a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">الاسم</th>
                <th>الايميل</th>
               
                <th scope="col">العمليات</th>
             
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
               
                <td>
                    <a class="btn btn-primary" href="{{route('admin.users.edit',$user->id)}}"><i class="fas fa-user-edit"></i></a>
                    <form class="d-inline" action="{{route('admin.users.destroy',$user->id)}}" method="post">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" type="submit"><i class="fas fa-user-times"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$users->links()}}
    @push('script')
    <script src="{{asset('front/js/all.min.js')}}"></script>

    @endpush
</x-navbar-layout>