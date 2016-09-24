<!-- <table> -->
@extends('layout.default')
@section('content')</br></br>
<div class="container">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
             <h3>Table Paging</h3>

            <table id="zipTable" class="table">
            <tr>
            <th>id</th>
            <th>username</th>
            <th>email</th>
            <th>action</th>
            <tbody>
          @foreach($user as $users)
        <tr>
            <td>{{$users->id}}</td>
            <td>{{$users->username}}</td>
            <td>{{$users->email}}</td>
            <td><form method="POST" action="{{ route('userlist.destroy', $users->id) }}" accept-charset="UTF-8">
                    <input name="_method" type="hidden" value="DELETE">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                    <input onclick="return confirm('Are u Sure ?');" type="submit" value="delete" class="btn btn-danger"/></td> 
        </tr>
        @endforeach
        </tbody>
    </thead>
            </table>
            <br />
            <select for="zipTable">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="20" selected>20</option>
                <option value="30">30</option>
            </select>
        </div>
    </div>
</div>
<!-- <table> -->
@stop