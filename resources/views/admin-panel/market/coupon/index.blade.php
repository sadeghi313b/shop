@extends('admin-panel.layouts.master')



@section('head-tag')
<title>
    Comments
</title>
@endsection


@section('content')
<x-breadcrumb :current-route="Route::currentRouteName()" />

<x-white-section thetitle="کدهای تخفیف" subtitle="لیست تمامی کدهای تخفیف" buttontext="تعریف کد تخفیف جدید" buttonroute="admin.market.coupon.create">

    <x-table1>

        <x-slot name="thead">
            <!-- type, value, min_purchase, max_discount, start_date, end_date is_active usage_limit usage_count -->
            <th>نام</th>
            <th>کد تخفیف</th>
            <th>نوع تخفیف</th>
            <th>مقدار تخفیف</th>
            <th>تاریخ شروع</th>
            <th>تاریخ پایان</th>
            <th>وضعیت</th>
            <th>حد استفاده</th>
            <th></th>
        </x-slot>

        <x-slot name="tbody">
            <th>دانشجویی</th>
            <th>LKJHLU98</th>
            <th>{{ array_rand(['percatage', 'amount']) }}</th>
            <th>{{ array_rand(['25%', '20$']) }}</th>
            <th>1403/02/28</th>
            <th>1403/03/12</th>
            <th>12 مرتبه</th>
            <th>
                <x-toggle1 dataon="فعال است" dataoff="غیر فعال است" width="115px" />
            </th>
            <th>
                <x-buttons1 edithref="#" deletehref="#" />
            </th>
        </x-slot>

    </x-table1>
</x-white-section>
@endsection