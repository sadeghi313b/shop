@extends('admin-panel.layouts.master')



@section('head-tag')
<title>
    create new brand
</title>
<link rel="stylesheet" href="{{ mix('resources/css/toggle1.css') }}">

<style>
</style>
@endsection


@section('content')

<!-- -------------------------------------------------------------------------- -->
<!--                                 breadcrumb                                 -->
<!-- -------------------------------------------------------------------------- -->
<x-breadcrumb :current-route="Route::currentRouteName()" />

<!-- -------------------------------------------------------------------------- -->
<!--                                 content                                    -->
<!-- -------------------------------------------------------------------------- -->
<x-white-section thetitle="ایجاد روش ارسال جدید" subtitle="یک روش ارسال جدید برای فروشگاه خود ایجاد نمایید" buttontext="بازگشت به روشهای ارسال" buttonroute="admin.market.delivery.index">
    <!-- form -->
    <article class="p-3 clearfix ">
        <form action="" method="">
            @csrf
            <fieldset class="form-floating p-1">
                <input type="text" name="name" class="form-control" placeholder="">
                <label for=""><strong> عنوان برای روش ارسال</strong></label>
            </fieldset>
            <hr>
            <fieldset class="form-floating p-1">
                <textarea type="text" name="description" class="form-control" placeholder=""></textarea>
                <label for="">توضیحات</label>
            </fieldset>
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <fieldset class="form-floating p-1 flex-grow-1">
                    <input type="text" name="price" class="form-control" placeholder="">
                    <label for="">هزینه ارسال (تومان)</label>
                </fieldset>
                <fieldset class="form-floating p-1 flex-grow-1">
                    <input type="text" name="delivery_time" class="form-control" placeholder="">
                    <label for="">مدت زمان ارسال (روز)</label>
                </fieldset>
            </div>
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <fieldset class="form-floating p-1 flex-grow-1">
                    <input type="text" name="min_order_amount" class="form-control" placeholder="">
                    <label for="">حداقل میزان سفارش (اختیاری)</label>
                </fieldset>
                <fieldset class="form-floating p-1 flex-grow-1">
                    <input type="text" name="max_order_amount" class="form-control" placeholder="">
                    <label for="">حداکثر میزان سفارش (اختیاری)</label>
                </fieldset>
            </div>
            <!-- -------------- -->
            <div class="d-flex justify-content-around align-items-center flex-wrap mt-3 gap-3">
                <label class="toggle-switch">
                    <input type="checkbox" class="toggle-input">
                    <span class="toggle-slider"></span>
                    <span class="toggle-labels" data-on="این روش ارسال فعال است" data-off="این روش ارسال غیر فعال است"></span>
                </label>
                <fieldset class="">
                    <button type="submit" class="btn btn-primary minw-200px">ثبت</button>
                </fieldset>
            </div>
        </form>

</x-white-section>
@endsection