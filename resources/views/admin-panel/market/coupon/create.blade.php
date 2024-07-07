@extends('admin-panel.layouts.master')



@section('head-tag')
<title>
    create new brand
</title>
<link rel="stylesheet" href="{{ mix('resources/css/toggle1.css') }}">

<style>
    .discount-type-toggle {
        display: inline-block;
        background-color: lightgray;
        border-radius: 30px;
        overflow: hidden;
        color: white;
    }

    .discount-type-toggle input {
        display: none;
    }

    .discount-type-toggle label {
        width: 8rem;
        text-align: center;
        float: left;
        padding: 10px 20px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .discount-type-toggle input:checked+label {
        background-color: goldenrod;
        box-shadow: 0 0 10px 5px yellow;
        color: black;
    }

    .discount-input {
        margin-top: 10px;
    }

    #discount-value {
        width: 100px;
        padding: 5px;
    }

    #discount-symbol {
        margin-left: 5px;
    }
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
<x-white-section thetitle="ایجاد کد تخفیف" subtitle="یک کد تخفیف جدید تعریف نمایید" buttontext="بازگشت به لیست تخفیفات" buttonroute="admin.market.coupon.index">

    <!-- form -->
    <article class="p-3 clearfix ">
        <form action="" method="">
            @csrf
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <fieldset class="form-floating p-1 flex-grow-1">
                    <input type="text" name="name" class="form-control" placeholder="">
                    <label for=""><strong> نام برای کد تخفیف</strong></label>
                </fieldset>
                <fieldset class="form-floating p-1 flex-grow-1">
                    <textarea type="text" name="description" class="form-control" placeholder=""></textarea>
                    <label for="">توضیحات</label>
                </fieldset>
            </div>
            <hr>

            <!-- type & amount -->
            <article class="border border-1 rounded-2 p-3 my-2 d-flex justify-content-around align-items-center flex-wrap gap-1">
                <div class="discount-type-toggle">
                    <input type="radio" id="percentage" name="discount-type" value="percentage" checked>
                    <label for="percentage">درصدی</label>

                    <input type="radio" id="amount" name="discount-type" value="amount">
                    <label for="amount">مبلغی</label>
                </div>
                <div>نوع تخفیف -- مقدار تخفیف</div>
                <div class="discount-input d-flex align-items-center gap-1">
                    <span id="discount-symbol">%</span>
                    <input type="number" id="discount-value" min="0" step="5" class="form-control">
                </div>
            </article>


            <div class="d-flex align-items-center flex-wrap gap-2 align-content-stretch">
                <fieldset class="form-floating p-1 col-4">
                    <input id="textInput" type="text" name="price" class="form-control" placeholder="">
                    <label for="">کد تخفیف</label>
                </fieldset>
                <button id="copyButton" class="btn btn-secondary">Copy</button>
                <p id="message" dir="ltr"></p>
            </div>


            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <fieldset class="form-floating p-1 flex-grow-1">
                    <input type="text" name="min_order_amount" class="form-control" placeholder="">
                    <label for="">تاریخ پایان</label>
                </fieldset>
                <fieldset class="form-floating p-1 flex-grow-1">
                    <input type="text" name="delivery_time" class="form-control" placeholder="">
                    <label for="">تاریخ شروع</label>
                </fieldset>
                <fieldset class="form-floating p-1 flex-grow-1">
                    <input type="number" name="max_order_amount" class="form-control" placeholder="">
                    <label for="">حداکثر تعداد استفاده</label>
                </fieldset>
            </div>
            <!-- -------------- -->
            <div class="d-flex justify-content-around align-items-center flex-wrap mt-3 gap-3">
                <x-toggle1 dataon="این کد فعال است" dataoff="این کد غیر فعال است" width="200px"/>
                <fieldset class="">
                    <button type="submit" class="btn btn-primary minw-200px">ثبت</button>
                </fieldset>
            </div>
        </form>

</x-white-section>
@endsection


<script>
        document.addEventListener('DOMContentLoaded', function() {
            const textInput = document.getElementById('textInput');
            const copyButton = document.getElementById('copyButton');
            const message = document.getElementById('message');

            copyButton.addEventListener('click', function() {
                // Store the current input value
                const currentValue = textInput.value;

                // Copy the text to clipboard
                navigator.clipboard.writeText(currentValue)
                    .then(() => {
                        // Visual feedback
                        copyButton.textContent = 'Copied!';
                        copyButton.style.backgroundColor = '#45a049';
                        message.textContent = 'Text copied to clipboard!';

                        // Reset button after 2 seconds
                        setTimeout(() => {
                            copyButton.textContent = 'Copy';
                            copyButton.style.backgroundColor = '#4CAF50';
                            message.textContent = '';
                        }, 2000);
                    })
                    .catch(err => {
                        console.error('Failed to copy text: ', err);
                        message.textContent = 'Failed to copy text. Please try again.';
                    });
            });
        });
    </script>