@extends('layout')
@section('main-content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Danh sách lĩnh vực</h4>
                <a href="{{ route('linh-vuc.them-moi') }}" class="btn btn-primary btn-rounded waves-effect waves-light">Thêm Mới</a>
                <br>
                <br>
                <table id="linh-vuc-table" class="table dt-responsive nowrap">
                    <thead>
                        <tr>
                        <th id="tech-companies-1-col-0-clone">ID</th>
                        <th data-priority="1" id="tech-companies-1-col-1-clone">Tên lĩnh vực</th>
                        <th data-priority="3" id="tech-companies-1-col-2-clone"></th>
                        </tr>
                    </thead>
            <tbody>
                @foreach($listLinhVuc as $linhVuc)
                <tr>
                    <td data-org-colspan="1" data-priority="1" data-columns="tech-companies-1-col-1" colspan="1">{{ $linhVuc->id }}</td>
                    <td>{{ $linhVuc->ten_linh_vuc }}</td>
                    <td>
                        <a href="{{ route('linh-vuc.cap-nhat', ['id' => $linhVuc->id ]) }}" class= "btn btn-outline-success btn-rounded waves-effect waves-light">
                            <i class="mdi mdi-grease-pencil"></i>
                        </a>

                        <a onclick="del()" href="#" class="btn btn-danger btn-rounded waves-effect waves-light">
                            <i class="fe-trash-2"></i>
                        </a>
                        <script >
                            function del() {
                                Swal.fire({
                                    title:'Bạn có chắc chắn xóa !',
                                    type:'warning',
                                    showCancelButton: true,
                                    confirmButtonColor:'#3085d6',
                                    cancelButtonColor:'#d33',
                                    confirmButtonText:'Có',
                                    cacelButtonText:'Không'
                                }).then((result)=>{
                                    if(result.value) {
                                        open("{{route('linh-vuc.xoa',['id'=>$linhVuc->id])}}", "_self")
                                    }
                                })
                            };
                        </script>
                    </td>
                </tr>
                @endforeach
            </tbody>
               </table>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<!-- end row-->
@endsection

@section('css')
<!-- third party css -->
<link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<!-- third party css end --> 
@endsection

@section('js')
<!-- third party js -->
<script src="{{ asset('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.flash.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.select.min.js') }}"></script>
<script src="{{ asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/libs/pdfmake/vfs_fonts.js') }}"></script>
<!-- third party js ends -->
<script type="text/javascript">
    $(document).ready(function(){
        $("#linh-vuc-table").DataTable( {
            language:{
                paginate:{
                    previous:"<i class='mdi mdi-chevron-left'>",
                    next:"<i class='mdi mdi-chevron-right'>"
                }
        },
            drawCallback:function(){
                $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
            }
        });
    });
</script>
@endsection