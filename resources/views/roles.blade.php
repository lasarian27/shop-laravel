@extends('layouts.app')

@section('title', __('shop.roles'))

@section('content')
    <div class="roles container">
        <h4>Add New Role in DB</h4>

        <form action="{{ route('role.save') }}" method="POST">
            {{ csrf_field() }}
            <label for="address">{{ __('shop.role.field') }}</label>
            <div class="form-group">
                <input type="text" class="form-control @error('role') is-invalid @enderror" id="role"
                       value="{{ old('role') }}" name="role">
                @error('role')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-success">{{ __('shop.submit') }}</button>
            </div>
        </form>
        <br>

        <h4>Manage User roles</h4>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputUser">User</label>
            </div>
            <select class="custom-select" id="inputUser">
                @foreach($users as $index => $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputRoles">Role</label>
            </div>
            <select class="custom-select" id="inputRoles">
                @foreach($roles as $index => $role)
                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group text-center">
            <button id="submit-role" class="btn btn-success">{{ __('shop.submit') }}</button>
        </div>

        <h3 class="text-center">In db now</h3>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">User</th>
                <th scope="col">Email</th>
                <th scope="col">Roles</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }} </td>
                    <td>{{ $user->email }} </td>
                    <td>
                        <div class="user-roles">
                            @foreach($user->roles as $role)
                                <p class="card-text">{{ $role->name }}</p>
                            @endforeach
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>



@endsection
