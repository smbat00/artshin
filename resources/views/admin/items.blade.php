@extends('_layouts.admin')
@section('content')
    <form action="{{ route('additems') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Input Text</label>
            <input name="name" type="text" class="input w-full border mt-2" placeholder="name">
            <input name="price" type="text" class="input w-full border mt-2" placeholder="price">
            <input name="firma" type="text" class="input w-full border mt-2" placeholder="firma">
            <select name="category_id" class="input w-full border mt-2">
                @foreach($categorys as $category)

                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            <div>
                <textarea name="description" class="input w-full border mt-2" rows="10"></textarea>
            </div>
            <input name="img" type="file" class="input w-full border mt-2" placeholder="">
        </div>
        <input type="submit" class="button bg-theme-1 text-white mt-5" value="Add Items">
    </form>




    <table class="table table-report table-report--bordered display datatable w-full dataTable no-footer dtr-inline" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 792px;">
        <thead>
        <tr role="row"><th class="border-b-2 whitespace-no-wrap sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 152px;" aria-sort="ascending" aria-label="PRODUCT NAME: activate to sort column descending">PRODUCT NAME</th><th class="border-b-2 text-center whitespace-no-wrap sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 80px;" aria-label="IMAGES: activate to sort column ascending">IMAGES</th><th class="border-b-2 text-center whitespace-no-wrap sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 124px;" aria-label="REMAINING STOCK: activate to sort column ascending">REMAINING STOCK</th><th class="border-b-2 text-center whitespace-no-wrap sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 120px;" aria-label="STATUS: activate to sort column ascending">STATUS</th><th class="border-b-2 text-center whitespace-no-wrap sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 116px;" aria-label="ACTIONS: activate to sort column ascending">ACTIONS</th></tr>
        </thead>
        <tbody>
@foreach($items as $item)
        <tr role="row" class="odd">
            <td class="border-b sorting_1" tabindex="0">
                <div class="font-medium whitespace-no-wrap">{{$item->name}}</div>
                <div class="text-gray-600 text-xs whitespace-no-wrap">{{$item->created_at}}</div>
            </td>
            <td>
                <div class="intro-x w-10 h-10 image-fit">
                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="/storage/images/items/{{$item->image}}">
                </div>
            </td>
            <td class="text-center border-b">{{$item->price}}</td>
            <td class="w-40 border-b">
                <div class="flex items-center sm:justify-center text-theme-6"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square w-4 h-4 mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg> Active </div>
            </td>
            <td class="border-b w-5">
                <div class="flex sm:justify-center items-center">
{{--                    <a class="flex items-center mr-3" href=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square w-4 h-4 mr-1"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg> Edit </a>--}}


                    <a class="flex items-center text-theme-6" href="{{ route('delitems',$item->id) }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 w-4 h-4 mr-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                        Delete </a>
                </div>
            </td>
        </tr>
@endforeach

        </tbody>
    </table>
@endsection
