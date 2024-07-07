 @props([
    'dataon' => 'Active',  
    'dataoff' => 'inActive',
    'width' => '126px',
])

<style>
    tr>td {
        text-align: center;
    }

    .toggle-switch {
        position: relative;
        display: inline-block;
        width: calc({{ $width }} + 34px);
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
        background-color: limegreen;
    }

    .toggle-input:checked+.toggle-slider:before {
        transform: translateX({{ $width }});
    }

    .toggle-labels {
        position: absolute;
        top: 8px;
        left: 0;
        right: 0;
        text-align: center;
        font-size: 14px;
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

<label class="toggle-switch">
    <input type="checkbox" class="toggle-input">
    <span class="toggle-slider"></span>
    <span class="toggle-labels" data-on="{{ $dataon }}" data-off="{{ $dataoff }}"></span>
</label>