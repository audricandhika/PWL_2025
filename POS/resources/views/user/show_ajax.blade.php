@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            <div id="userDetails"></div>
            <a href="{{ url('user') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
        </div>
    </div>
@endsection

@push('css')
    <style>
        .loading {
            text-align: center;
            padding: 20px;
        }
    </style>
@endpush

@push('js')
    <script>
        $(document).ready(function() {
            loadUserDetails();

            function loadUserDetails() {
                $('#userDetails').html('<div class="loading">Loading...</div>');

                let user_id = "{{ $user->user_id ?? '' }}"; 

                $.ajax({
                    url: '{{ url("/user/") }}/' + user_id + '/show_ajax', 
                    method: 'GET',
                    success: function(response) {
                        if (response.success) {
                            let html = `
                                <table class="table table-bordered table-striped table-hover table-sm">
                                    <tr>
                                        <th>ID</th>
                                        <td>${response.data.user_id}</td>
                                    </tr>
                                    <tr>
                                        <th>Level</th>
                                        <td>${response.data.level_nama}</td>
                                    </tr>
                                    <tr>
                                        <th>Username</th>
                                        <td>${response.data.username}</td>
                                    </tr>
                                    <tr>
                                        <th>Nama</th>
                                        <td>${response.data.nama}</td>
                                    </tr>
                                    <tr>
                                        <th>Password</th>
                                        <td>********</td>
                                    </tr>
                                </table>
                            `;
                            $('#userDetails').html(html);
                        } else {
                            $('#userDetails').html(`
                                <div class="alert alert-danger alert-dismissible">
                                    <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5>
                                    Data yang Anda cari tidak ditemukan.
                                </div>
                            `);
                        }
                    },
                    error: function(xhr) {
                        $('#userDetails').html(`
                            <div class="alert alert-danger alert-dismissible">
                                <h5><i class="icon fas fa-ban"></i> Error!</h5>
                                Terjadi kesalahan saat memuat data.
                            </div>
                        `);
                    }
                });
            }
        });
    </script>
@endpush