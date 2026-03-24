@extends('layouts.header')
@section('css')
<link href="{{ asset('/inside/login_css/css/plugins/chosen/bootstrap-chosen.css') }}" rel="stylesheet">
<link href="{{ asset('/inside/login_css/css/style.css') }}" rel="stylesheet">
@endsection
@section('content')
<style>
    .table-modal-responsive {
    position: relative;
    height: 400px; 
    overflow: auto;
    display: inline-block;
    width: 100%;
    }

    .table-modal-responsive .invoiceTable thead th {
    position: sticky;
    top: 0;
    background-color: #fff; 
    z-index: 2;
    }

    /* table td{
        min-width: 280px;
    } */

    .swal2-container {
        z-index: 20000 !important;
    }

</style>
<div class="wrapper wrapper-content">
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox ">
                                <div class="ibox-content">
                                    <div class="row">
                                        <div class="col-lg-12 d-flex justify-content-start">
                                            <button onclick="" type="button" class="btn btn-primary" title="Edit Invoice" data-toggle="modal" data-target="#saveUserModal" >
                                                Create User
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TABLE SECTION (unchanged) -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>GP Report</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="table-responsive">
                                <table id="gptable" class="table table-striped table-bordered table-hover fullSummaryTable" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Date Created</th>
                                            <th>Action</th>
                                        </tr>                     
                                    </thead>
                                    <tbody>
                                        @foreach ($userList as $item)
                                            <tr>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->email}}</td>
                                                <td>{{$item->created_at}}</td>
                                                <td>
                                                    <button onclick="" data-id="{{ $item->id }}" type="button" class="btn btn-primary btn-outline edit"><i class="fa fa fa-pencil"></i></button>
                                                    <button onclick="" data-id="{{ $item->id }}" type="button" class="btn btn-primary btn-danger delete"><i class="fa fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot></tfoot>                         
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="saveUserModal" tabindex="-1" aria-labelledby="saveUserModalLabel" aria-hidden="true">
    <form method="POST" id="saveUserForm" action="" autocomplete="off" enctype="multipart/form-data">
    @csrf
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="saveUserModalLabel">Save User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="id" id="id" value="">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter name" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                </div>
                <div class="form-group toHide">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="" required>
                </div>
                <div class="form-group toHide">
                    <label>Confirm Password</label>
                    <input type="password" name="confPassword" class="form-control" placeholder="" required>
                </div>
                <div class="form-group">
                    <label>Access</label>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="gpReport" value="1">
                            GP Report
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="print" value="1">
                            Print
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Upload Signature</label>
                    <input type="file" name="signature" class="form-control">
                </div>
                <div class="form-group text-right">
                    <button type="reset" class="btn btn-default">Reset</button>
                    <button type="submit" class="btn btn-success">Save User</button>
                </div>
            </div>
            </div>
        </div>
    </form>
</div>
@endsection
@section('footer')
<script src="{{ asset('/inside/login_css/js/plugins/dataTables/datatables.min.js')}}"></script>
<script src="{{ asset('/inside/login_css/js/plugins/chosen/chosen.jquery.js') }}"></script>
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
$(document).ready(function() {

    var table = $('#gptable').DataTable({
        fixedHeader: true,
        paging: true,
        responsive: false,
        dom: '<"html5buttons"B>lTfgitp',
        ordering: false,
        buttons: [
            
        ]
    });

    $('#saveUserForm').submit(function (e) { 
        e.preventDefault();
        var form_data = $(this).serializeArray();
        $.ajax({
            type: "POST",
            url: "{{ route('user.save') }}",
            data: form_data,
            // dataType: "JSON",
            success: function (response) {
                $('#saveUserModal').modal('hide');
                Swal.fire('Success', response.message, 'success').then(() => {
                    location.reload();
                });
            },
            error: function (xhr) {
                Swal.fire({
                    title: 'Falied',
                    text: xhr.responseJSON?.message,
                    icon: 'error'
                    });
            },
        });
    });

    $('#gptable').on('click', '.edit', function () {
        let id = $(this).attr('data-id');
        $.ajax({
            type: "GET",
            url: "{{ route('user.details') }}",
            data: {id:id},
            dataType: "JSON",
            success: function (response) {
                // console.log(response.data.id);
                $('.toHide').addClass('hidden');
                $('[name=id]').val(response.data.id);
                $('[name=name]').val(response.data.name);
                $('[name=email]').val(response.data.email);
                $('[name=gpReport]').prop('checked',response.data.gp_report == "1"?true:false)
                $('[name=print]').prop('checked',response.data.print == "1"?true:false)
                $('[name=password]').prop('required',false);
                $('[name=confPassword]').prop('required',false);
                $('#saveUserModal').modal('show');
            }
        });
    });

    $('#gptable').on('click', '.delete', function () {
        let id = $(this).attr('data-id');

        Swal.fire({
            title: 'Are you sure?',
            text: 'This action cannot be undone.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {

                $.ajax({
                    type: "POST",
                    url: "{{ route('user.delete') }}",
                    contentType: "application/json",
                    data: JSON.stringify({
                        _token: "{{ csrf_token() }}",
                        id:id
                    }),
                    success: function (response) {
                        Swal.fire('Success', response.message, 'success').then(() => {
                            location.reload();
                        });
                    }
                });
            }
        });
    });

    $('#saveUserModal').on('hide.bs.modal', function () {
        $('[name=id]').val("");
        $('.toHide').removeClass('hidden');
        $('#saveUserForm').trigger('reset');
        $('[name=password]').prop('required',true);
        $('[name=confPassword]').prop('required',true);
    });
});
    
</script>
@endsection

