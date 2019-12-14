@extends('layouts.app')

@section('meta')
    <meta name="description" content="Demo online magazine, Subscriber admin page, front-end, Php Laravel 6, CSS">
    <meta name="author" content="Desislava Georgieva, email : officedesislava@gmail.com, phone: 0897 722 275 ">
@endsection

@section('title-page','Subscriber')

@section('content')
    <div class="container">
        <table class="table table-striped" style="margin-top: 6em">
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Created</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
            @foreach($subscribers as $key => $subscriber)
                <tr>
                    <td>{{ $subscriber->id }}</td>
                    <td>{{ $subscriber->email }}</td>
                    <td>{{ $subscriber->created_at }}</td>
                    <td>
                        <a href="{{ route('subscriber.delete',$subscriber->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                    <td>
                        <a href="{{ route('subscriber-edit',$subscriber->id) }}" class="btn btn-info">Edit</a>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $subscribers -> links() }}
    </div>

@endsection
