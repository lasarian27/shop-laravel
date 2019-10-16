@extends('layouts.app')

@section('title', __('shop.roles'))

@section('script')
    <script>
        $(document).on('click', '#submit-role', function () {
            $.ajax({
                type: "POST",
                url: '/role/' + $("#inputUser").find('option:selected').attr('value') + '/update',
                dataType: 'json',
                data: {
                    '_token': '{{ csrf_token() }}',
                    'role': $("#inputRoles").find('option:selected').attr('value'),
                }
            })
            .done(function () {
                getUsers('role');
            });
        });

        function getUsers(param) {
            $.ajax({
                url: '/role?param=' + param,
                dataType: 'json'
            })
            .done(function (req) {
                if (req.roles) {
                    renderDropdown(req);
                }

                renderTable(req.users);
            })
        }

        function renderTable(data) {

            let html = '';
            html += '<table class="table">';
            html += '   <thead>';
            html += '       <tr>';
            html += '           <th scope="col">{{ __('user') }}</th>';
            html += '           <th scope="col">{{ __('email') }}</th>';
            html += '           <th scope="col">{{ __('role') }}</th>';
            html += '       </tr>';
            html += '   </thead>';
            html += '   <tbody>';
            data.forEach(function (user) {
                html += '   <tr>';
                html += '       <td>' + user.name + '</td>';
                html += '       <td>' + user.email + '</td>';
                html += '       <td>'
                html += '           <div class="user-roles">';
                user.roles.forEach(function (role) {
                    html += '           <p class="card-text">' + role.name + '</p>';
                });
                html += '           </div>';
                html += '       </td>';
                html += '   </tr>';
            });

            html += '   </tbody>';
            html += '</table>';

            $('.roles-table').html(html);
        }

        function renderDropdown(data) {

            let html = '<br>';

            html += '<h4>{{ __('shop.users.roles') }}</h4>';
            html += '<div class="input-group mb-3">';
            html += '   <div class="input-group-prepend">';
            html += '       <label class="input-group-text" for="inputUser">{{ __('user') }}</label>';
            html += '   </div>';
            html += '   <select class="custom-select" id="inputUser">';
                data.users.forEach(function (user) {
                    html += '<option value="' + user.id + '">' + user.name + '</option>';
                });
            html += '   </select>';
            html += '</div>';

            html += '<h4>{{ __('shop.users.roles') }}</h4>';
            html += '<div class="input-group mb-3">';
            html += '   <div class="input-group-prepend">';
            html += '       <label class="input-group-text" for="inputRoles">{{ __('role') }}</label>';
            html += '   </div>';
            html += '   <select class="custom-select" id="inputRoles">';
                data.roles.forEach(function (role) {
                    html += '<option value="' + role.id + '">' + role.name + '</option>';
                });
            html += '   </select>';
            html += '</div>';
            html += '<div class="form-group text-center">';
            html += '   <button id="submit-role" class="btn btn-success">{{ __('shop.submit') }}</button>';
            html += '</div>';

            $(".roles-users").html(html);
        }

        $(document).ready(function () {
            getUsers('all');
        })
    </script>
@endsection

@section('content')
    <div class="container">
        <div class="roles-users"></div>
        <div class="roles-table"></div>
    </div>
@endsection
