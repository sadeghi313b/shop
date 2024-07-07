@extends('admin-panel.layouts.master')



@section('head-tag')
<title>
    Comments
</title>
<style>
    .bg-lightgray {
    background-color: gainsboro;
}
</style>
@endsection


@section('content')
<x-breadcrumb :current-route="Route::currentRouteName()" />

<x-white-section thetitle="نظرات" subtitle="نظرات کاربران در مورد کالاها" buttontext="بازگتش به نظرات" buttonroute="admin.market.comment.index">

    <div class="p-3 rounded-3 rounded-top-5 bg-lightgray">
        <h5 class="ps-5">علیرضا</h5>
        <hr>
        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و 
    </div>
    <form action="" class="" method="">
    @csrf
        <fieldset class="mb-2 mt-4">
            <label for="">پاسخ به نظر:</label>
            <textarea name="description" id="" class=" form-control"></textarea>
        </fieldset>
        <fieldset class="d-flex justify-content-end my-2">
            <button type="submit" class="btn btn-primary w-25">ثبت</button>
        </fieldset>
    </form>
</x-white-section>
@endsection