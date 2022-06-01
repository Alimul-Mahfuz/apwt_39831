@extends('layout.navbar')
@section('content')
<h1>Product List</h1>
<table style="border: 2px solid black">
    <tr style="border:  2px solid red">
        <th>Product Id</th>
        <th>Product Name</th>
        <th>Color</th>
    </tr>
    @foreach ($PList as $it)
    <tr>
        {{-- <td>{{$item->MemberId}} </td> --}}
        <td>{{$it->ProductId}} </td>
        <td>{{$it->Name}} </td>
        <td>{{$it->Color}} </td>
    </tr>
        
    @endforeach


</table> 
@endsection
