@extends('layouts.components.main')

@section('css_page')
    <style>
        #chart{
            height:800px;
        }
        /* FULL SCREEN */

.chart:-webkit-full-screen {
    width: 100%;
    height: 100%;
}

.chart:-moz-full-screen {
    width: 100%;
    height: 100%;
}

.chart:-ms-fullscreen {
    width: 100%;
    height: 100%;
}

.chart:fullscreen {
    width: 100%;
    height: 100%;
}

/* GENERAL */

.chart {
    float: left;
    max-height: 800px;
    height: 75vh;
    position: relative;
    width: 100%;
}

.highcharts-draw-mode {
    cursor: crosshair;
}

.left {
    float: left;
}

.right,
.highcharts-stocktools-toolbar li.right {
    float: right;
}

/* GUI */

.highcharts-stocktools-toolbar {
    margin: 0px 0px 0px 10px;
    padding: 0px;
    width: calc(100% - 63px);
}

.highcharts-stocktools-toolbar li {
    background-color: #f7f7f7;
    background-repeat: no-repeat;
    cursor: pointer;
    float: left;
    height: 40px;
    list-style: none;
    margin-right: 2px;
    margin-bottom: 3px;
    padding: 0px;
    position: relative;
    width: auto;
}

.highcharts-stocktools-toolbar li ul {
    display: none;
    left: 0px;
    padding-left: 0px;
    position: absolute;
    z-index: 125;
}

.highcharts-stocktools-toolbar li:hover {
    background-color: #e6ebf5;
}

.highcharts-stocktools-toolbar li:hover ul {
    display: block;
}

.highcharts-stocktools-toolbar li ul li {
    margin-bottom: 0px;
    width: 160px;
}

.highcharts-stocktools-toolbar li>span.highcharts-menu-item-btn {
    background-repeat: no-repeat;
    background-position: 50% 50%;
    display: block;
    float: left;
    height: 100%;
    width: 40px;
}

.highcharts-stocktools-toolbar li>.highcharts-menu-item-title {
    color: #666;
    line-height: 40px;
    font-size: 0.876em;
    padding: 0px 10px 0px 5px;
}

.highcharts-indicators>.highcharts-menu-item-btn {
    background-image: url('https://code.highcharts.com/gfx/stock-icons/indicators.svg');
}

.highcharts-label-annotation>.highcharts-menu-item-btn {
    background-image: url('https://code.highcharts.com/gfx/stock-icons/label.svg');
}

.highcharts-circle-annotation>.highcharts-menu-item-btn {
    background-image: url('https://code.highcharts.com/gfx/stock-icons/circle.svg');
}

.highcharts-rectangle-annotation>.highcharts-menu-item-btn {
    background-image: url('https://code.highcharts.com/gfx/stock-icons/rectangle.svg');
}

.highcharts-segment>.highcharts-menu-item-btn {
    background-image: url('https://code.highcharts.com/gfx/stock-icons/segment.svg');
}

.highcharts-arrow-segment>.highcharts-menu-item-btn {
    background-image: url('https://code.highcharts.com/gfx/stock-icons/arrow-segment.svg');
}

.highcharts-ray>.highcharts-menu-item-btn {
    background-image: url('https://code.highcharts.com/gfx/stock-icons/ray.svg');
}

.highcharts-arrow-ray>.highcharts-menu-item-btn {
    background-image: url('https://code.highcharts.com/gfx/stock-icons/arrow-ray.svg');
}

.highcharts-infinity-line>.highcharts-menu-item-btn {
    background-image: url('https://code.highcharts.com/gfx/stock-icons/line.svg');
}

.highcharts-arrow-infinity-line>.highcharts-menu-item-btn {
    background-image: url('https://code.highcharts.com/gfx/stock-icons/arrow-line.svg');
}

.highcharts-horizontal-line>.highcharts-menu-item-btn {
    background-image: url('https://code.highcharts.com/gfx/stock-icons/horizontal-line.svg');
}

.highcharts-vertical-line>.highcharts-menu-item-btn {
    background-image: url('https://code.highcharts.com/gfx/stock-icons/vertical-line.svg');
}

.highcharts-elliott3>.highcharts-menu-item-btn {
    background-image: url('https://code.highcharts.com/gfx/stock-icons/elliott-3.svg');
}

.highcharts-elliott5>.highcharts-menu-item-btn {
    background-image: url('https://code.highcharts.com/gfx/stock-icons/elliott-5.svg');
}

.highcharts-crooked3>.highcharts-menu-item-btn {
    background-image: url('https://code.highcharts.com/gfx/stock-icons/crooked-3.svg');
}

.highcharts-crooked5>.highcharts-menu-item-btn {
    background-image: url('https://code.highcharts.com/gfx/stock-icons/crooked-5.svg');
}

.highcharts-measure-xy>.highcharts-menu-item-btn {
    background-image: url('https://code.highcharts.com/gfx/stock-icons/measure-xy.svg');
}

.highcharts-measure-x>.highcharts-menu-item-btn {
    background-image: url('https://code.highcharts.com/gfx/stock-icons/measure-x.svg');
}

.highcharts-measure-y>.highcharts-menu-item-btn {
    background-image: url('https://code.highcharts.com/gfx/stock-icons/measure-y.svg');
}

.highcharts-fibonacci>.highcharts-menu-item-btn {
    background-image: url('https://code.highcharts.com/gfx/stock-icons/fibonacci.svg');
}

.highcharts-pitchfork>.highcharts-menu-item-btn {
    background-image: url('https://code.highcharts.com/gfx/stock-icons/pitchfork.svg');
}

.highcharts-parallel-channel>.highcharts-menu-item-btn {
    background-image: url('https://code.highcharts.com/gfx/stock-icons/parallel-channel.svg');
}

.highcharts-toggle-annotations>.highcharts-menu-item-btn {
    background-image: url('https://code.highcharts.com/gfx/stock-icons/annotations-visible.svg');
}

.highcharts-vertical-counter>.highcharts-menu-item-btn {
    background-image: url('https://code.highcharts.com/gfx/stock-icons/vertical-counter.svg');
}

.highcharts-vertical-label>.highcharts-menu-item-btn {
    background-image: url('https://code.highcharts.com/gfx/stock-icons/vertical-label.svg');
}

.highcharts-vertical-arrow>.highcharts-menu-item-btn {
    background-image: url('https://code.highcharts.com/gfx/stock-icons/vertical-arrow.svg');
}

.highcharts-vertical-double-arrow>.highcharts-menu-item-btn {
    background-image: url('https://code.highcharts.com/gfx/stock-icons/vertical-double-arrow.svg');
}

.highcharts-flag-circlepin>.highcharts-menu-item-btn {
    background-image: url('https://code.highcharts.com/gfx/stock-icons/flag-elipse.svg');
}

.highcharts-flag-diamondpin>.highcharts-menu-item-btn {
    background-image: url('https://code.highcharts.com/gfx/stock-icons/flag-diamond.svg');
}

.highcharts-flag-squarepin>.highcharts-menu-item-btn {
    background-image: url('https://code.highcharts.com/gfx/stock-icons/flag-trapeze.svg');
}

.highcharts-flag-simplepin>.highcharts-menu-item-btn {
    background-image: url('https://code.highcharts.com/gfx/stock-icons/flag-basic.svg');
}

.highcharts-zoom-xy>.highcharts-menu-item-btn {
    background-image: url('https://code.highcharts.com/gfx/stock-icons/zoom-xy.svg');
}

.highcharts-zoom-x>.highcharts-menu-item-btn {
    background-image: url('https://code.highcharts.com/gfx/stock-icons/zoom-x.svg');
}

.highcharts-zoom-y>.highcharts-menu-item-btn {
    background-image: url('https://code.highcharts.com/gfx/stock-icons/zoom-y.svg');
}

.highcharts-full-screen>.highcharts-menu-item-btn {
    background-image: url('https://code.highcharts.com/gfx/stock-icons/fullscreen.svg');
}

.highcharts-series-type-ohlc>.highcharts-menu-item-btn {
    background-image: url('https://code.highcharts.com/gfx/stock-icons/series-ohlc.svg');
}

.highcharts-series-type-line>.highcharts-menu-item-btn {
    background-image: url('https://code.highcharts.com/gfx/stock-icons/series-line.svg');
}

.highcharts-series-type-candlestick>.highcharts-menu-item-btn {
    background-image: url('https://code.highcharts.com/gfx/stock-icons/series-candlestick.svg');
}

.highcharts-current-price-indicator>.highcharts-menu-item-btn {
    background-image: url('https://code.highcharts.com/gfx/stock-icons/current-price-show.svg');
}

.highcharts-save-chart>.highcharts-menu-item-btn {
    background-image: url('https://code.highcharts.com/gfx/stock-icons/save-chart.svg');
}

li.highcharts-active {
    background-color: #e6ebf5;
}

/* Popup */

.chart-wrapper {
    float: left;
    position: relative;
    width: 100%;
    background: white;
    padding-top: 10px;
}

/* Responsive design */

@media screen and (max-width: 1024px) {
    .highcharts-stocktools-toolbar li>.highcharts-menu-item-title {
        display: none;
    }
    .highcharts-stocktools-toolbar li ul li {
        width: auto;
    }
}

    </style>
@endsection

@section('content')
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <span id="card_company_name">
                        <h4>
                            {{ str_replace('.XIDX', '', $singleCompany->symbol) }}
                        </h4>
                    </span>
                </div>
                <div class="card-body">
                    <p class="company_name">
                        {{ $singleCompany->name }}
                    </p>
                    <hr>
                    <p class="last_date">
                        {{ date('d M Y, H:i', strtotime($closeDay['date'])) }}
                    </p>
                    <hr>
                    <table width="100%">
                        <tbody>
                            <tr>
                                <td>
                                    Open
                                </td>
                                <td class="last_open">
                                    {{ $closeDay['open'] }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    High
                                </td>
                                <td class="last_high">
                                    {{ $closeDay['high'] }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Low
                                </td>
                                <td class="last_low">
                                    {{ $closeDay['low'] }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Close
                                </td>
                                <td class="last_close">
                                    {{ $closeDay['close'] }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Volume
                                </td>
                                <td class="last_volume">
                                    {{ $closeDay['volume'] }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="form-group">
                <label for="company_code">Kode Perusahaan</label>
                <input type="text" class="form-control" id="company_code" value="{{ str_replace('.XIDX', '', $singleCompany->symbol) }}" name="company_code">
                <small class="text-muted d-none" id="loading_company_code">
                    Loading...
                </small>
            </div>
            <link rel="stylesheet" type="text/css" href="https://code.highcharts.com/css/annotations/popup.css">
            <div class="chart-wrapper">
                <div class="highcharts-popup highcharts-popup-indicators">
                    <span class="highcharts-close-popup">&times;</span>
                    <div class="highcharts-popup-wrapper">
                    <label for="indicator-list">Indicator</label>
                    <select name="indicator-list">
                        <option value="sma">SMA</option>
                        <option value="ema">EMA</option>
                        <option value="bb">Bollinger bands</option>
                    </select>
                    <label for="stroke">Period</label>
                    <input type="text" name="period" value="14"/>
                    </div>
                    <button>Add</button>
                </div>
                <div class="highcharts-popup highcharts-popup-annotations">
                    <span class="highcharts-close-popup">&times;</span>
                    <div class="highcharts-popup-wrapper">
                    <label for="stroke">Color</label>
                    <input type="text" name="stroke" />
                    <label for="stroke-width">Width</label>
                    <input type="text" name="stroke-width" />
                    </div>
                    <button>Save</button>
                </div>
                <div class="highcharts-stocktools-wrapper highcharts-bindings-container highcharts-bindings-wrapper">
                    <div class="highcharts-menu-wrapper">
                    <ul class="highcharts-stocktools-toolbar stocktools-toolbar">
                        <li class="highcharts-indicators" title="Indicators">
                            <span class="highcharts-menu-item-btn"></span>
                        <span class="highcharts-menu-item-title">Indicators</span>
                        </li>
                        <li class="highcharts-label-annotation" title="Simple shapes">
                            <span class="highcharts-menu-item-btn"></span>
                        <span class="highcharts-menu-item-title">Shapes</span>
                            <span class="highcharts-submenu-item-arrow highcharts-arrow-right"></span>
                        <ul class="highcharts-submenu-wrapper">
                            <li class="highcharts-label-annotation" title="Label">
                                <span class="highcharts-menu-item-btn"></span>
                            <span class="highcharts-menu-item-title">Label</span>
                            </li>
                            <li class="highcharts-circle-annotation" title="Circle">
                                <span class="highcharts-menu-item-btn"></span>
                            <span class="highcharts-menu-item-title">Circle</span>
                            </li>
                            <li class="highcharts-rectangle-annotation " title="Rectangle">
                                <span class="highcharts-menu-item-btn"></span>
                            <span class="highcharts-menu-item-title">Rectangle</span>
                            </li>
                        </ul>
                        </li>
                        <li class="highcharts-segment" title="Lines">
                            <span class="highcharts-menu-item-btn"></span>
                        <span class="highcharts-menu-item-title">Lines</span>
                            <span class="highcharts-submenu-item-arrow highcharts-arrow-right"></span>
                        <ul class="highcharts-submenu-wrapper">
                            <li class="highcharts-segment" title="Segment">
                                <span class="highcharts-menu-item-btn"></span>
                            <span class="highcharts-menu-item-title">Segment</span>
                            </li>
                            <li class="highcharts-arrow-segment" title="Arrow segment">
                                <span class="highcharts-menu-item-btn"></span>
                            <span class="highcharts-menu-item-title">Arrow segment</span>
                            </li>
                            <li class="highcharts-ray" title="Ray">
                                <span class="highcharts-menu-item-btn"></span>
                            <span class="highcharts-menu-item-title">Ray</span>
                            </li>
                            <li class="highcharts-arrow-ray" title="Arrow ray">
                                <span class="highcharts-menu-item-btn"></span>
                            <span class="highcharts-menu-item-title">Arrow ray</span>
                            </li>
                            <li class="highcharts-infinity-line" title="Line">
                                <span class="highcharts-menu-item-btn" ></span>
                            <span class="highcharts-menu-item-title">Line</span>
                            </li>
                            <li class="highcharts-arrow-infinity-line" title="Arrow line">
                                <span class="highcharts-menu-item-btn"></span>
                            <span class="highcharts-menu-item-title">Arrow</span>
                            </li>
                            <li class="highcharts-horizontal-line" title="Horizontal line">
                                <span class="highcharts-menu-item-btn"></span>
                            <span class="highcharts-menu-item-title">Horizontal</span>
                            </li>
                            <li class="highcharts-vertical-line" title="Vertical line">
                                <span class="highcharts-menu-item-btn"></span>
                            <span class="highcharts-menu-item-title">Vertical</span>
                            </li>
                        </ul>
                        </li>
                        <li class="highcharts-elliott3" title="Crooked lines">
                            <span class="highcharts-menu-item-btn"></span>
                        <span class="highcharts-menu-item-title">Crooked lines</span>
                            <span class="highcharts-submenu-item-arrow highcharts-arrow-right"></span>
                        <ul class="highcharts-submenu-wrapper">
                            <li class="highcharts-elliott3" title="Elliott 3 line">
                                <span class="highcharts-menu-item-btn"></span>
                            <span class="highcharts-menu-item-title">Elliot 3</span>
                            </li>
                            <li class="highcharts-elliott5" title="Elliott 5 line">
                                <span class="highcharts-menu-item-btn"></span>
                            <span class="highcharts-menu-item-title">Elliot 5</span>
                            </li>
                            <li class="highcharts-crooked3" title="Crooked 3 line">
                                <span class="highcharts-menu-item-btn"></span>
                            <span class="highcharts-menu-item-title">Crooked 3</span>
                            </li>
                            <li class="highcharts-crooked5" title="Crooked 5 line">
                                <span class="highcharts-menu-item-btn" ></span>
                            <span class="highcharts-menu-item-title">Crooked 5</span>
                            </li>
                        </ul>
                        </li>
                        <li class="highcharts-measure-xy" title="Measure">
                            <span class="highcharts-menu-item-btn"></span>
                        <span class="highcharts-menu-item-title">Measure</span>
                            <span class="highcharts-submenu-item-arrow highcharts-arrow-right"></span>
                        <ul class="highcharts-submenu-wrapper">
                            <li class="highcharts-measure-xy" title="Measure XY">
                                <span class="highcharts-menu-item-btn"></span>
                            <span class="highcharts-menu-item-title">Measure XY</span>
                            </li>
                            <li class="highcharts-measure-x" title="Measure X">
                                <span class="highcharts-menu-item-btn"></span>
                            <span class="highcharts-menu-item-title">Measure X</span>
                            </li>
                            <li class="highcharts-measure-y" title="Measure Y">
                                <span class="highcharts-menu-item-btn"></span>
                            <span class="highcharts-menu-item-title">Measure Y</span>
                            </li>
                        </ul>
                        </li>
                        <li class="highcharts-fibonacci" title="Advanced">
                            <span class="highcharts-menu-item-btn"></span>
                        <span class="highcharts-menu-item-title">Advanced</span>
                            <span class="highcharts-submenu-item-arrow highcharts-arrow-right"></span>
                        <ul class="highcharts-submenu-wrapper">
                            <li class="highcharts-fibonacci" title="Fibonacci">
                                <span class="highcharts-menu-item-btn"></span>
                            <span class="highcharts-menu-item-title">Fibonacci</span>
                            </li>
                            <li class="highcharts-pitchfork" title="Pitchfork">
                                <span class="highcharts-menu-item-btn"></span>
                            <span class="highcharts-menu-item-title">Pitchfork</span>
                            </li>
                            <li class="highcharts-parallel-channel" title="Parallel channel">
                                <span class="highcharts-menu-item-btn"></span>
                            <span class="highcharts-menu-item-title">Parallel channel</span>
                            </li>
                        </ul>
                        </li>
                        <li class="highcharts-vertical-counter" title="Vertical labels">
                            <span class="highcharts-menu-item-btn"></span>
                        <span class="highcharts-menu-item-title">Counters</span>
                            <span class="highcharts-submenu-item-arrow highcharts-arrow-right"></span>
                        <ul class="highcharts-submenu-wrapper">
                            <li class="highcharts-vertical-counter" title="Vertical counter">
                                <span class="highcharts-menu-item-btn"></span>
                            <span class="highcharts-menu-item-title">Counter</span>
                            </li>
                            <li class="highcharts-vertical-label" title="Vertical label">
                                <span class="highcharts-menu-item-btn"></span>
                            <span class="highcharts-menu-item-title">Label</span>
                            </li>
                            <li class="highcharts-vertical-arrow" title="Vertical arrow">
                                <span class="highcharts-menu-item-btn"></span>
                            <span class="highcharts-menu-item-title">Arrow</span>
                            </li>
                        </ul>
                        </li>
                        <li class="highcharts-flag-circlepin" title="Flags">
                        <span class="highcharts-menu-item-btn"></span>
                        <span class="highcharts-menu-item-title">Flags</span>
                        <span class="highcharts-submenu-item-arrow highcharts-arrow-right"></span>
                        <ul class="highcharts-submenu-wrapper">
                            <li class="highcharts-flag-circlepin" title="Flag circle">
                                <span class="highcharts-menu-item-btn"></span>
                            <span class="highcharts-menu-item-title">Circle</span>
                            </li>
                            <li class="highcharts-flag-diamondpin" title="Flag diamond">
                                <span class="highcharts-menu-item-btn"></span>
                            <span class="highcharts-menu-item-title">Diamond</span>
                            </li>
                            <li class="highcharts-flag-squarepin" title="Flag square">
                                <span class="highcharts-menu-item-btn"></span>
                            <span class="highcharts-menu-item-title">Square</span>
                            </li>
                            <li class="highcharts-flag-simplepin" title="Flag simple">
                                <span class="highcharts-menu-item-btn"></span>
                            <span class="highcharts-menu-item-title">Simple</span>
                            </li>
                        </ul>
                        </li>
                        <li class="highcharts-series-type-ohlc" title="Type change">
                        <span class="highcharts-menu-item-btn"></span>
                        <span class="highcharts-menu-item-title">Series type</span>
                        <span class="highcharts-submenu-item-arrow highcharts-arrow-right"></span>
                        <ul class="highcharts-submenu-wrapper">
                            <li class="highcharts-series-type-ohlc" title="OHLC">
                            <span class="highcharts-menu-item-btn"></span>
                            <span class="highcharts-menu-item-title">OHLC</span>
                            </li>
                            <li class="highcharts-series-type-line" title="Line">
                            <span class="highcharts-menu-item-btn"></span>
                            <span class="highcharts-menu-item-title">Line</span>
                            </li>
                            <li class="highcharts-series-type-candlestick" title="Candlestick">
                            <span class="highcharts-menu-item-btn"></span>
                            <span class="highcharts-menu-item-title">Candlestick</span>
                            </li>
                        </ul>
                        </li>
                        <li class="highcharts-save-chart right" title="Save chart">
                        <span class="highcharts-menu-item-btn"></span>
                        </li>
                        <li class="highcharts-full-screen right" title="Fullscreen">
                        <span class="highcharts-menu-item-btn"></span>
                        </li>
                        <li class="highcharts-zoom-x right" title="Zoom change">
                            <span class="highcharts-menu-item-btn"></span>
                            <span class="highcharts-submenu-item-arrow highcharts-arrow-right"></span>
                        <ul class="highcharts-submenu-wrapper">
                            <li class="highcharts-zoom-x" title="Zoom X">
                                <span class="highcharts-menu-item-btn"></span>
                            <span class="highcharts-menu-item-title">Zoom X</span>
                            </li>
                            <li class="highcharts-zoom-y" title="Zoom Y">
                                <span class="highcharts-menu-item-btn"></span>
                            <span class="highcharts-menu-item-title">Zoom Y</span>
                            </li>
                            <li class="highcharts-zoom-xy" title="Zooom XY">
                                <span class="highcharts-menu-item-btn"></span>
                            <span class="highcharts-menu-item-title">Zoom XY</span>
                            </li>
                        </ul>
                        </li>
                        <li class="highcharts-current-price-indicator right" title="Current Price Indicators">
                        <span class="highcharts-menu-item-btn"></span>
                        </li>
                        <li class="highcharts-toggle-annotations right" title="Toggle annotations">
                        <span class="highcharts-menu-item-btn"></span>
                        </li>
                    </ul>
                    </div>
                </div>
                <div id="container" class="chart"></div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js_page')
<script src="https://code.highcharts.com/stock/highstock.js"></script>
<script src="https://code.highcharts.com/stock/modules/data.js"></script>

<script src="https://code.highcharts.com/stock/modules/drag-panes.js"></script>

<script src="https://code.highcharts.com/stock/indicators/indicators.js"></script>
<script src="https://code.highcharts.com/stock/indicators/bollinger-bands.js"></script>
<script src="https://code.highcharts.com/stock/indicators/ema.js"></script>

<script src="https://code.highcharts.com/stock/modules/annotations-advanced.js"></script>

<script src="https://code.highcharts.com/stock/modules/full-screen.js"></script>
<script src="https://code.highcharts.com/stock/modules/price-indicator.js"></script>
<script src="https://code.highcharts.com/stock/modules/stock-tools.js"></script>
<script>
    let baseUrl = "{{ url('/') }}";
    let companyCode = $('#company_code').val();
    function addPopupEvents(chart) {
        var closePopupButtons = document.getElementsByClassName('highcharts-close-popup');
        // Close popup button:
        Highcharts.addEvent(
            closePopupButtons[0],
            'click',
            function () {
                this.parentNode.style.display = 'none';
            }
        );

        Highcharts.addEvent(
            closePopupButtons[1],
            'click',
            function () {
                this.parentNode.style.display = 'none';
            }
        );

        // Add an indicator from popup
        Highcharts.addEvent(
            document.querySelectorAll('.highcharts-popup-indicators button')[0],
            'click',
            function () {
                var typeSelect = document.querySelectorAll(
                        '.highcharts-popup-indicators select'
                    )[0],
                    type = typeSelect.options[typeSelect.selectedIndex].value,
                    period = document.querySelectorAll(
                        '.highcharts-popup-indicators input'
                    )[0].value || 14;

                chart.addSeries({
                    linkedTo: 'aapl-ohlc',
                    type: type,
                    params: {
                        period: parseInt(period, 10)
                    }
                });

                chart.stockToolbar.indicatorsPopupContainer.style.display = 'none';
            }
        );

        // Update an annotaiton from popup
        Highcharts.addEvent(
            document.querySelectorAll('.highcharts-popup-annotations button')[0],
            'click',
            function () {
                var strokeWidth = parseInt(
                        document.querySelectorAll(
                            '.highcharts-popup-annotations input[name="stroke-width"]'
                        )[0].value,
                        10
                    ),
                    strokeColor = document.querySelectorAll(
                        '.highcharts-popup-annotations input[name="stroke"]'
                    )[0].value;

                // Stock/advanced annotations have common options under typeOptions
                if (chart.currentAnnotation.options.typeOptions) {
                    chart.currentAnnotation.update({
                        typeOptions: {
                            lineColor: strokeColor,
                            lineWidth: strokeWidth,
                            line: {
                                strokeWidth: strokeWidth,
                                stroke: strokeColor
                            },
                            background: {
                                strokeWidth: strokeWidth,
                                stroke: strokeColor
                            },
                            innerBackground: {
                                strokeWidth: strokeWidth,
                                stroke: strokeColor
                            },
                            outerBackground: {
                                strokeWidth: strokeWidth,
                                stroke: strokeColor
                            },
                            connector: {
                                strokeWidth: strokeWidth,
                                stroke: strokeColor
                            }
                        }
                    });
                } else {
                    // Basic annotations:
                    chart.currentAnnotation.update({
                        shapes: [{
                            'stroke-width': strokeWidth,
                            stroke: strokeColor
                        }],
                        labels: [{
                            borderWidth: strokeWidth,
                            borderColor: strokeColor
                        }]
                    });
                }
                chart.stockToolbar.annotationsPopupContainer.style.display = 'none';
            }
        );
    }
    $('#company_code').keyup(function (e) { 
        $('#loading_company_code').removeClass('d-none').addClass('d-block');
        companyCode = $(this).val();
    });

    if (typeof(EventSource) !== "undefined") {
        function runCompanyStock(){
            let source = '';
            let mainUrl = baseUrl + '/wse/get_company_stock_first?symbols='+$('#company_code').val()+'.XIDX&wse=true';
            source = new EventSource(mainUrl);
            source.onmessage = function(event){
                if(mainUrl == baseUrl + '/wse/get_company_stock_first?symbols='+$('#company_code').val()+'.XIDX&wse=true'){
                    let data = JSON.parse(event.data);
                    var ohlc = [],
                    volume = [],
                    dataLength = data.length,
                    i = 0;
                    data.data.forEach(element => {
                        let dateStock = new Date(element.date);
                        var newDate = new Date(dateStock.getUTCFullYear(), dateStock.getUTCMonth(), dateStock.getUTCDate(), dateStock.getUTCHours(), dateStock.getUTCMinutes(), dateStock.getUTCSeconds());
                        ohlc.push([
                            newDate.getTime(),
                            element.open,
                            element.high,
                            element.low,
                            element.close
                        ]);

                        volume.push([
                            newDate.getTime(),
                            element.volume
                        ]);
                    });
                    $.ajax({
                        type: "get",
                        url: "{{ route('wse.get_single_company') }}",
                        data: {
                            symbol:companyCode
                        },
                        success: function (response) {
                            $('.company_name').html(response.singleCompany.name);
                            $('.last_open').html(response.closeDay.open);
                            $('.last_high').html(response.closeDay.high);
                            $('.last_low').html(response.closeDay.low);
                            $('.last_close').html(response.closeDay.close);
                            $('.last_volume').html(response.closeDay.volume);
                        }
                    });
                    $('#card_company_name').html('<h2>' + companyCode + '</h2>');
                    $('#loading_company_code').addClass('d-none').removeClass('d-block');
                    Highcharts.stockChart('container', {
                        chart: {
                            events: {
                                load: function () {
                                    addPopupEvents(this);
                                }
                            }
                        },
                        yAxis: [{
                            labels: {
                                align: 'left'
                            },
                            height: '80%',
                            resize: {
                                enabled: true
                            }
                        }, {
                            labels: {
                                align: 'left'
                            },
                            top: '80%',
                            height: '20%',
                            offset: 0
                        }],
                        navigationBindings: {
                            events: {
                                selectButton: function (event) {
                                    var newClassName = event.button.className + ' highcharts-active',
                                        topButton = event.button.parentNode.parentNode;

                                    if (topButton.classList.contains('right')) {
                                        newClassName += ' right';
                                    }

                                    // If this is a button with sub buttons,
                                    // change main icon to the current one:
                                    if (!topButton.classList.contains('highcharts-menu-wrapper')) {
                                        topButton.className = newClassName;
                                    }

                                    // Store info about active button:
                                    this.chart.activeButton = event.button;
                                },
                                deselectButton: function (event) {
                                    event.button.parentNode.parentNode.classList.remove('highcharts-active');

                                    // Remove info about active button:
                                    this.chart.activeButton = null;
                                },
                                showPopup: function (event) {

                                    if (!this.indicatorsPopupContainer) {
                                        this.indicatorsPopupContainer = document
                                            .getElementsByClassName('highcharts-popup-indicators')[0];
                                    }

                                    if (!this.annotationsPopupContainer) {
                                        this.annotationsPopupContainer = document
                                            .getElementsByClassName('highcharts-popup-annotations')[0];
                                    }

                                    if (event.formType === 'indicators') {
                                        this.indicatorsPopupContainer.style.display = 'block';
                                    } else if (event.formType === 'annotation-toolbar') {
                                        // If user is still adding an annotation, don't show popup:
                                        if (!this.chart.activeButton) {
                                            this.chart.currentAnnotation = event.annotation;
                                            this.annotationsPopupContainer.style.display = 'block';
                                        }
                                    }

                                },
                                closePopup: function () {
                                    this.indicatorsPopupContainer.style.display = 'none';
                                    this.annotationsPopupContainer.style.display = 'none';
                                }
                            }
                        },
                        stockTools: {
                            gui: {
                                enabled: false
                            }
                        },
                        series: [{
                            type: 'ohlc',
                            id: 'aapl-ohlc',
                            name: $('#company_code').val() +' Stock Price',
                            data: ohlc
                        }, {
                            type: 'column',
                            id: 'aapl-volume',
                            name: $('#company_code').val() +' Volume',
                            data: volume,
                            yAxis: 1
                        }],
                        responsive: {
                            rules: [{
                                condition: {
                                    maxWidth: 800
                                },
                                chartOptions: {
                                    rangeSelector: {
                                        inputEnabled: false
                                    }
                                }
                            }]
                        }
                    });
                }else{
                    let newSource = new EventSource(baseUrl + '/wse/get_company_stock_first?symbols='+$('#company_code').val()+'.XIDX&wse=true');
                    newSource.onmessage = function(newevent){
                        let data = JSON.parse(newevent.data);
                        var ohlc = [],
                        volume = [],
                        dataLength = data.length,
                        i = 0;
                        data.data.forEach(element => {
                            let dateStock = new Date(element.date);
                            var newDate = new Date(dateStock.getUTCFullYear(), dateStock.getUTCMonth(), dateStock.getUTCDate(), dateStock.getUTCHours(), dateStock.getUTCMinutes(), dateStock.getUTCSeconds());
                            ohlc.push([
                                newDate.getTime(),
                                element.open,
                                element.high,
                                element.low,
                                element.close
                            ]);

                            volume.push([
                                newDate.getTime(),
                                element.volume
                            ]);
                        });
                        $.ajax({
                            type: "get",
                            url: "{{ route('wse.get_single_company') }}",
                            data: {
                                symbol:companyCode
                            },
                            success: function (response) {
                                $('.company_name').html(response.singleCompany.name);
                                $('.last_open').html(response.closeDay.open);
                                $('.last_high').html(response.closeDay.high);
                                $('.last_low').html(response.closeDay.low);
                                $('.last_close').html(response.closeDay.close);
                                $('.last_volume').html(response.closeDay.volume);
                            }
                        });
                        $('#card_company_name').html('<h2>' + companyCode + '</h2>');
                        $('#loading_company_code').addClass('d-none').removeClass('d-block');
                        Highcharts.stockChart('container', {
                            chart: {
                                events: {
                                    load: function () {
                                        addPopupEvents(this);
                                    }
                                }
                            },
                            yAxis: [{
                                labels: {
                                    align: 'left'
                                },
                                height: '80%',
                                resize: {
                                    enabled: true
                                }
                            }, {
                                labels: {
                                    align: 'left'
                                },
                                top: '80%',
                                height: '20%',
                                offset: 0
                            }],
                            navigationBindings: {
                                events: {
                                    selectButton: function (event) {
                                        var newClassName = event.button.className + ' highcharts-active',
                                            topButton = event.button.parentNode.parentNode;

                                        if (topButton.classList.contains('right')) {
                                            newClassName += ' right';
                                        }

                                        // If this is a button with sub buttons,
                                        // change main icon to the current one:
                                        if (!topButton.classList.contains('highcharts-menu-wrapper')) {
                                            topButton.className = newClassName;
                                        }

                                        // Store info about active button:
                                        this.chart.activeButton = event.button;
                                    },
                                    deselectButton: function (event) {
                                        event.button.parentNode.parentNode.classList.remove('highcharts-active');

                                        // Remove info about active button:
                                        this.chart.activeButton = null;
                                    },
                                    showPopup: function (event) {

                                        if (!this.indicatorsPopupContainer) {
                                            this.indicatorsPopupContainer = document
                                                .getElementsByClassName('highcharts-popup-indicators')[0];
                                        }

                                        if (!this.annotationsPopupContainer) {
                                            this.annotationsPopupContainer = document
                                                .getElementsByClassName('highcharts-popup-annotations')[0];
                                        }

                                        if (event.formType === 'indicators') {
                                            this.indicatorsPopupContainer.style.display = 'block';
                                        } else if (event.formType === 'annotation-toolbar') {
                                            // If user is still adding an annotation, don't show popup:
                                            if (!this.chart.activeButton) {
                                                this.chart.currentAnnotation = event.annotation;
                                                this.annotationsPopupContainer.style.display = 'block';
                                            }
                                        }

                                    },
                                    closePopup: function () {
                                        this.indicatorsPopupContainer.style.display = 'none';
                                        this.annotationsPopupContainer.style.display = 'none';
                                    }
                                }
                            },
                            stockTools: {
                                gui: {
                                    enabled: false
                                }
                            },
                            series: [{
                                type: 'ohlc',
                                id: 'aapl-ohlc',
                                name: $('#company_code').val() +' Stock Price',
                                data: ohlc
                            }, {
                                type: 'column',
                                id: 'aapl-volume',
                                name: $('#company_code').val() +' Volume',
                                data: volume,
                                yAxis: 1
                            }],
                            responsive: {
                                rules: [{
                                    condition: {
                                        maxWidth: 800
                                    },
                                    chartOptions: {
                                        rangeSelector: {
                                            inputEnabled: false
                                        }
                                    }
                                }]
                            }
                        });
                    }
                }
            }
        }
        runCompanyStock();
    } else {
        alert('Browser kamu tidak support!');
    }
</script>
@endsection