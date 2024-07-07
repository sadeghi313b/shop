@extends('admin-panel.layouts.master')



@section('head-tag')
<title>
    Comments
</title>
<style>

</style>
@endsection


@section('content')
<x-breadcrumb :current-route="Route::currentRouteName()" />

<x-white-section thetitle="روشهای ارسال" subtitle="مشاهده انواع روشهای ارسال" buttontext="ایجاد روش جدید" buttonroute="admin.market.delivery.create">

    <!-- table -->
    <article class="table-responsive">
        <table class="table table-light table-striped table-hover">
            <thead>
                <tr class="text-center">
                    <th>روش ارسال</th>
                    <th>هزینه ارسال</th>
                    <th>زمان تحویل</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @for ($i=1;$i<=5;$i++) 
                <tr class="text-center">
                    <td>پست پیشتاز</td>
                    <td>20 هزار تومان</td>
                    <td>3 روز</td>

                    <td>
                        <div class="d-flex flex-wrap justify-content-end align-items-sm-center gap-1">
                            <a href="#" class="btn btn-primary btn-sm maxh-1o5rem minw-5rem">
                                <i class="fa fa-edit"></i>
                                edit
                            </a>
                            <a href="#" class="btn btn-danger btn-sm maxh-1o5rem minw-5rem">
                                <i class="fa fa-trash-alt"></i>
                                delete
                            </a>
                        </div>
                    </td>
                </tr>
                @endfor
            </tbody>
        </table>
    </article>
    <!-- table end -->
</x-white-section>
@endsection
