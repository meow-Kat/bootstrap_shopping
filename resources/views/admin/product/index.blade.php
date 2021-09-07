@extends('layout.app')

@section('title', '產品管理')

@section('h1_title', '產品管理')

{{-- 找datatable CSS --}}
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
@endsection

@section('content')
    <div class="py-3">
        <a href="{{ asset('/admin/product/add') }}" type="button" class="btn btn-info">新增產品</a>
    </div>
    <table id="my-datatable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>分類</th>
                <th>照片</th>
                <th>名稱</th>
                <th>價格</th>
                <th>至頂</th>
                <th>尺寸</th>
                <th>顏色</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($record as $item)
                <tr>
                    <td>{{ $item->type->type_name }}</td>
                    <td><img src="{{ $item->product_photo }}" alt="" style="width: 300px; height: 200px;"></td>
                    <td>{{ $item->product_name }}</td>
                    <td>{{ $item->product_price }}</td>
                    <td>@if ($item->top === 1) 是 @else 否 @endif</td>
                    <td>
                        @php
                            $sizes = json_decode($item->product_size);
                            // dd($item->product_size);
                        @endphp
                        @foreach ($sizes as $size)
                            {{ $size }},
                        @endforeach
                    </td>
                    <td>
                        @php
                            $colors = json_decode($item->product_color);
                        @endphp
                        @foreach ($colors as $color)
                            <div class="showColor"
                                style="background-color: {{ $color }}; width:5px; height:5px;"></div>
                        @endforeach
                    </td>
                    </td>
                    <td>
                        <a href="{{ asset('/admin/product/edit') }}/{{ $item->id }}" type="button"
                            class="btn btn-primary btn-sm d-flex justify-content-center">Edit</a>
                        <form action="{{ asset('/admin/product/delete') }}/{{ $item->id }} " method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm mt-2 =">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
        <tfoot>
            <tr>
                <th>分類</th>
                <th>照片</th>
                <th>名稱</th>
                <th>價格</th>
                <th>至頂</th>
                <th>尺寸</th>
                <th>顏色</th>
                <th>操作</th>
            </tr>
        </tfoot>
    </table>
@endsection

{{-- 找datatable JS --}}
@section('js')
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#my-datatable').DataTable()
        })
    </script>
@endsection
