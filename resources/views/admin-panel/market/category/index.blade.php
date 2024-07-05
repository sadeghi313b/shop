@extends('admin-panel.layouts.master')



@section('head-tag')
<title>
    دسته بندی ها
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
<section class="m-3 p-2 bg-white rounded-3 p-3">
    <!-- header -->
    <article class="d-flex justify-content-between align-items-center gap-2">
        <div>
            <h5 class="fw-bold">
                دسته بندی
            </h5>
            <p class="text-secondary small">
                دسته بندی محصولات فروشگاه
            </p>
        </div>
        <div>
            <a href="{{ route('admin.market.category.create') }}" class="btn btn-warning btn-sm">
                ایجاد دستۀ&nbsp;جدید
            </a>
        </div>
    </article>

    <!-- search -->
    <article class="m-3">
        <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو در نام دسته بندی">
    </article>

    <!-- table -->
    <article class="table-responsive">
        <table class="table table-light table-striped table-hover">
            <thead class="">
                <tr>
                    <th>#</th>
                    <th>نام دسته بندی</th>
                    <th>دستۀ والد</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @for ($i=1;$i<5;$i++) <tr>
                    <td>12</td>
                    <td>نمایشگر</td>
                    <td>کالای الکترونیک</td>

                    <td class="d-flex flex-wrap justify-content-end align-items-sm-center gap-1">
                        <a href="#" class="btn btn-success btn-sm maxh-1o5rem minw-5rem">
                            <i class="fa fa-edit"></i>
                            edit
                        </a>
                        <button type="submit" class="btn btn-danger btn-sm maxh-1o5rem minw-5rem">
                            <i class="fa fa-trash-alt"></i>
                            delete
                        </button>
                    </td>
                    </tr>
                    @endfor
            </tbody>
        </table>
    </article>
</section>

@endsection