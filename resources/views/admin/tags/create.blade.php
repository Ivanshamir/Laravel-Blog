@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')


    <div class="panel panel-default">
        <div class="panel-heading">
            Create a new Tag
        </div>

        <div class="panel-body">
            <form action="{{ route('tags.store') }}" method="post" >
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Tag</label>
                    <input type="text" name="tag" class="form-control">
                </div>
                
                <div class="form-group">
                    <div class="text-center">
                        <button name="submit" class="btn btn-success">
                            Store New Tag
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </div>
        

@stop