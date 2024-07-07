@extends('admin-panel.layouts.master')



@section('head-tag')
<title>
    Comments
</title>
<style>
    tr>td {
        text-align: center;
    }

    .toggle-switch {
        position: relative;
        display: inline-block;
        width: 160px;
        height: 34px;
    }

    .toggle-input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .toggle-slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        transition: .4s;
        border-radius: 34px;
    }

    .toggle-slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        transition: .4s;
        border-radius: 50%;
    }

    .toggle-input:checked+.toggle-slider {
        background-color: #2196F3;
    }

    .toggle-input:checked+.toggle-slider:before {
        transform: translateX(126px);
    }

    .toggle-labels {
        position: absolute;
        top: 8px;
        left: 0;
        right: 0;
        text-align: center;
        font-size: 14px;
        font-family: Arial, sans-serif;
        font-weight: bold;
        color: white;
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3);
    }

    .toggle-labels:after {
        content: attr(data-off);
    }

    .toggle-input:checked~.toggle-labels:after {
        content: attr(data-on);
    }
</style>
@endsection


@section('content')
<x-breadcrumb :current-route="Route::currentRouteName()" />

<x-white-section thetitle="نظرات" subtitle="نظرات کاربران در مورد کالاها">

    <!-- table -->
    <article class="table-responsive">
        <table class="table table-light table-striped table-hover">
            <thead>
                <tr class="text-center">
                    <th>Date</th>
                    <th>User</th>
                    <th>product</th>
                    <th>status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @for ($i=1;$i<=5;$i++) 
                <tr class="text-center">
                    <td>1403/04/16</td>
                    <td>علیرضا</td>
                    <td>چرخگوشت</td>
                    <td>
                        <label class="toggle-switch">
                            <input type="checkbox" class="toggle-input">
                            <span class="toggle-slider"></span>
                            <span class="toggle-labels" data-on="Approved" data-off="Disapproved"></span>
                        </label>
                    </td>

                    <td>
                        <div class="d-flex flex-wrap justify-content-end align-items-sm-center gap-1">
                            <a href="#" class="btn btn-primary btn-sm maxh-1o5rem minw-5rem">
                                <i class="fa fa-eye"></i>
                                view
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

<script>
    const toggleInput = document.querySelector('.toggle-input');
    toggleInput.addEventListener('change', function() {
        if (this.checked) {
            console.log('Approved');
        } else {
            console.log('Disapproved');
        }
    });
</script>