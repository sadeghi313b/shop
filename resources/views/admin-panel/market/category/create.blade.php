@extends('admin-panel.layouts.master')

@section('head-tag')
<title>
    ایجاد دسته جدید
</title>
@endsection
<!--  -->
@section('content')

<!-- -------------------------------------------------------------------------- -->
<!--                                 breadcrumb                                 -->
<!-- -------------------------------------------------------------------------- -->
<x-breadcrumb :current-route="Route::currentRouteName()" />


<!-- -------------------------------------------------------------------------- -->
<!--                                 content                                    -->
<!-- -------------------------------------------------------------------------- -->
<section class="mt-4 m-3 p-2 bg-white rounded-3">

    <!-- header -->
    <article class="d-flex justify-content-between align-items-center m-3">
        <!-- Title & subTitle -->
        <div class="">
            <h5 class="fw-bold">
                ایجاد دستۀ جدید
            </h5>
            <p class="text-secondary small me-5">
                دسته ای جدید به مشخصات زیر ایجاد کنید
            </p>
        </div>
        <!-- redirect to index -->
        <div class="">
            <a href="{{ route('admin.market.category.index') }}" class="btn btn-warning btn-sm">
                بازگشت به صفحۀ&nbsp;دسته&nbsp;بندی&nbsp;ها
            </a>
        </div>
    </article>

    <!-- form -->
    <article class="p-3 clearfix ">
        <form action="" method="">
        @csrf
            <fieldset class="row align-items-center">
                <div class="col-12 col-lg-6 form-floating p-1">
                    <input type="text" name="cat-name" class="form-control" placeholder="نام دسته را وارد کنید ...">
                    <label for="">نام دسته</label>
                </div>
                <div class="col form-floating p-1">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option selected>دسته مورد نظر را انتخاب نمایید </option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <label for="floatingSelect">دستۀ والد</label>
                </div>
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
    </article>
</section>
@endsection