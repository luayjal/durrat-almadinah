<x-navbar-layout>
  @push('css')
  <link rel="stylesheet" type="text/css" href="{{asset('DataTables/datatables.min.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('DataTables/DataTables-1.11.0/css/jquery.dataTables.min.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('DataTables/Buttons-2.0.0/css/buttons.dataTables.min.css')}}"/> 
  @endpush
       <div class="table mt-4">
          <table  id="subscribe"   class="table table-bordered">
              <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">الاسم</th>
                    <th scope="col">رقم الجوال</th>
                    <th scope="col">المشروع</th>
                    <th scope="col">مستفيد مسبق</th>
                    <th scope="col">ملاحظات</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ( $subscribers as $item)
                  <tr>
                    <th scope="row">1</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->mobile}}</td>
                    <td>{{$item->project}}</td>
                    <td>{{$item->beneficiary}}</td>
                    <td>{{$item->note}}</td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
    </div>
    @push('script')
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="{{asset('DataTables/datatables.min.js')}}"></script> 
    <script type="text/javascript" src="{{asset('DataTables/JSZip-2.5.0/jszip.min.js')}}"></script> 
    <script type="text/javascript" src= {{asset('DataTables/pdfmake-0.1.36/pdfmake.min.js')}}></script> 
    <script type="text/javascript" src= {{asset('DataTables/pdfmake-0.1.36/vfs_fonts.js')}}></script> 
    <script type="text/javascript" src="{{asset('DataTables/Buttons-2.0.0/js/buttons.html5.min.js')}}"></script> 
    <script type="text/javascript" src="{{asset('DataTables//Buttons-2.0.0/js/buttons.print.min.js')}}"></script> 


    <script>
          $(document).ready(function() {
        $('#subscribe').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                {
                    extend:    'copyHtml5',
                    text:      '<i class="fa fa-files-o"></i>',
                    titleAttr: 'Copy'
                },
                {
                    extend:    'excelHtml5',
                    text:      '<i class="fa fa-file-excel-o"></i>',
                    titleAttr: 'Excel'
                },
                {
                    extend:    'csvHtml5',
                    text:      '<i class="fa fa-file-text-o"></i>',
                    titleAttr: 'CSV'
                }
            ]
        } );
    } );
    </script>
    @endpush
</x-navbar-layout>