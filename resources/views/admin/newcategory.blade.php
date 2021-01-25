@extends('_layouts.admin')
@section('content')
    <form action="{{ route('addcategory') }}" method="get">
        <div>
            <label>Input Text</label>
            <input name="category" type="text" class="input w-full border mt-2" placeholder="Input text">
        </div>
        <input type="submit" class="button bg-theme-1 text-white mt-5" value="Add Category">
    </form>
        <div>
            <ul>
                @foreach($categorys as $category)
                    <li>{{$category->name}}</li>
                    @endforeach
            </ul>
        </div>
@endsection
