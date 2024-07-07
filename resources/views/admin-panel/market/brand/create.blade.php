@extends('admin-panel.layouts.master')



@section('head-tag')
<title>
    create new brand
</title>
@endsection


@section('content')

<!-- -------------------------------------------------------------------------- -->
<!--                                 breadcrumb                                 -->
<!-- -------------------------------------------------------------------------- -->
<x-breadcrumb :current-route="Route::currentRouteName()"/>

<!-- -------------------------------------------------------------------------- -->
<!--                                 content                                    -->
<!-- -------------------------------------------------------------------------- -->
<x-white-section 
    thetitle="ایجاد برند جدید" 
    subtitle="یک برند جدید برای فروشگاه خود ایجاد نمایید" 
    buttontext="بازگشت به صفحه برندها"
    buttonroute="admin.market.brand.index"
>
    <!-- form -->
    <article class="p-3 clearfix ">
        <form action="" method="">
        @csrf
            <fieldset class="form-floating p-1">
                <input type="text" name="cat-name" class="form-control" placeholder="نام دسته را وارد کنید ...">
                <label for="">نام برند</label>
            </fieldset>
            <fieldset class="d-flex align-items-center gap-2 my-2">
                <label for="">توضیحات:</label>
                <textarea name="description" id="" class=" form-control"></textarea>
            </fieldset>
            <fieldset class="d-flex justify-content-between align-items-center gap-5 my-2">
                <input type="file" name="cat-image" class="form-control w-auto">
                <button type="submit" class="btn btn-primary w-25">ثبت</button>
            </fieldset>
        </form>
</x-white-section>
@endsection
