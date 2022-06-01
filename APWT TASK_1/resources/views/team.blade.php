@extends('layout.navbar')
@section('content')
<h2>Team List</h2>
<table style="border: 2px solid black">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Department</th>
        <th>Address</th>
    </tr>
    @foreach ($teamList as $item)
    <tr>
        {{-- <td>{{$item->MemberId}} </td> --}}
        <td>{{$item->Name}} </td>
        <td>{{$item->Department}} </td>
        <td>{{$item->Address}} </td>
    </tr>
        
    @endforeach


</table>
@endsection
