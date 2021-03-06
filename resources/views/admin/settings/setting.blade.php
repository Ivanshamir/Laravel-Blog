@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')


    <div class="panel panel-default">
        <div class="panel-heading">
            Create a new post
        </div>

        <div class="panel-body">
            <form action="{{ route('setting.update') }}" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="site_name">Site Name</label>
                    <input type="text" name="site_name" class="form-control" value="{{ $settings->site_name }}">
                </div>

                <div class="form-group">
                    <label for="contact_number">Contact Phone</label>
                    <input type="text" name="contact_number" class="form-control" value="{{ $settings->contact_number }}">
                </div>

                <div class="form-group">
                    <label for="contact_email">Contact Email</label>
                    <input type="text" name="contact_email" class="form-control" value="{{ $settings->contact_email }}">
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control" value="{{ $settings->address }}">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button name="submit" class="btn btn-success">
                            Update Settings
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </div>
        

@stop
