@extends('layouts.app')

@section('meta')
    <meta name="description"
          content="Demo online magazine, Subscriber admin page edit/update , front-end, Php Laravel 6, CSS">
    <meta name="author" content="Desislava Georgieva, email : officedesislava@gmail.com, phone: 0897 722 275 ">
@endsection

@section('title-page','Subscriber-edit-update')

@section('content')
    <div class="container" style="margin-top: 6em">
        <div class="card">
            <h3>Subscriber edit-update: {{ $subscriber->email }}</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('subscriber-update',$subscriber->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="inputEmail1">Email address</label>
                    <input type="email" name="email" value="{{ $subscriber->email }}" class="form-control" id="inputEmail1"
                           aria-describedby="emailHelp"
                           placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.
                    </small>
                </div>
                <button type="submit" class="btn" style="background-color: #8E2A36;color: #fff">Update
                </button>

            </form>
        </div>
    </div>
@endsection