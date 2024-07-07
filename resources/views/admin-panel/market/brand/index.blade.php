@extends('admin-panel.layouts.master')



@section('head-tag')
<title>
    brands
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
<x-white-section thetitle="برند ها" 
    subtitle="تمام برندهای موجود در فروشگاه" 
    buttontext="ایجاد برند جدید"
    buttonroute="admin.market.brand.create"
>
    <!-- table -->
    <article class="table-responsive">
        <table class="table table-light table-striped table-hover">
            <thead class="">
                <tr class="text-center">
                    <th>#</th>
                    <th>Brand Name</th>
                    <th>Logo</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @for ($i=1;$i<=5;$i++) 
                <tr class="text-center">
                    <td>12</td>
                    <td>SAMSUNG</td>
                    <td>
                        <img src="{{ asset('images/logo-placeholder.png') }}" alt="Logo">
                    </td>

                    <td>
                        <div class="d-flex flex-wrap justify-content-end align-items-sm-center gap-1">
                            <a href="#" class="btn btn-success btn-sm maxh-1o5rem minw-5rem">
                                <i class="fa fa-edit"></i>
                                edit
                            </a>
                            <button type="submit" class="btn btn-danger btn-sm maxh-1o5rem minw-5rem">
                                <i class="fa fa-trash-alt"></i>
                                delete
                            </button>
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
