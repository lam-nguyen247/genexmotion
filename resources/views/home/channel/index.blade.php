@extends('home.layouts.app')

@section('title', __('Channels'))
@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <style>
        .dataTables_length {
            margin-bottom: 15px;
        }

        th, td {
            text-align: center !important;
            font-size: 16px;
        }

        table, td, th {
            border: 1px solid #DEDEDE !important;
        }

        #customers_wrapper {
            margin-bottom: 20px !important;
        }

        @media only screen and (max-width: 768px) {
            #box-filter {
                text-align: center !important;
            }
        }

        .chanel-form th{
            background-color: #E1CE69;
        }

    </style>
@endsection
@section('content')
    <div class="page-wrapper page-contact">
        {{-- Block contact --}}
        <div class="grid-contact" id="grid-hero">
            <div class="container">
                <div class="grid-head" style="text-align: center">
                    <h2 class="title" style="text-align: center">Danh sách Group Facebook!</h2>
                    <div class="sapo">
                        <p>Vui lòng liên hệ với chúng tôi qua email hoặc hotline.</p>
                    </div>
                </div>
                <div class="row " style="background-color:white; padding: 15px">
                    @include('home.includes.chanel-form')
                    <div class="large-12 chanel-form">
                        <table id="customers" class="display-desktop" style="margin-top: 10px;">
                            <thead>
                            <tr>
                                <th>{{$values[0][0]}}</th>
                                <th>{{$values[0][1]}}</th>
                                <th>{{$values[0][2]}}</th>
                                <th>{{$values[0][3]}}</th>
                                <th>{{$values[0][6]}}</th>
                                <th>{{$values[0][7]}}</th>
                            </tr>
                            </thead>

                            <tbody>
                            @for ($i = 1; $i < count($values); $i++)
                                <tr>
                                    <td>
                                        {{$values[$i][0]}}
                                    </td>
                                    <td>{{number_format($values[$i][1], 0, ',', '.')}}</td>
                                    <td>
                                        {{$values[$i][2]}}
                                    </td>
                                    <td>
                                        <input value="{{$values[$i][3]}}" type="text" style="display: none;"
                                               id="link_{{$i}}"/>
                                        <button onclick="xemKenh('{{$values[$i][3]}}')" title="{{$values[$i][3]}}"
                                                alt="{{$values[$i][3]}}" target="_blank" style="background-color: #2196F3; border: 1px solid #2196F3;  box-shadow: 0 3px 5px -1px rgb(0 0 0 / 20%), 0 6px 10px 0 rgb(0 0 0 / 14%),
                                        0 1px 18px 0 rgb(0 0 0 / 12%); padding: 5px 10px; margin: 5px; min-width: 61px;"">Xem
                                        </button>
                                        <button id="btn_link_{{$i}}" style="background-color: #8CE78C; border: 1px solid #8CE78C; margin: 5px;  box-shadow: 0 3px 5px -1px rgb(0 0 0 / 20%), 0 6px 10px 0 rgb(0 0 0 / 14%),
                                        0 1px 18px 0 rgb(0 0 0 / 12%); padding: 5px 10px; min-width: 61px;"
                                                onclick="copy('link_{{$i}}')">Copy
                                        </button>
                                    </td>
                                    <td>{{number_format($values[$i][6], 0, ',', '.')}} <br/>
                                        <button onclick="go()" style="background-color: #E1CE69; border: 1px solid #E1CE69;  box-shadow: 0 3px 5px -1px rgb(0 0 0 / 20%), 0 6px 10px 0 rgb(0 0 0 / 14%),
                                        0 1px 18px 0 rgb(0 0 0 / 12%); padding: 5px 10px;">Đặt mua
                                        </button>
                                    </td>
                                    <td>
                                        {{isset($values[$i][7])?$values[$i][7]:''}}
                                    </td>
                                </tr>
                            @endfor
                            </tbody>
                        </table>
                        <table id="customers-mb" class="display-mobile" style="margin-top: 10px;">
                            <thead>
                            <tr>
                                <th>{{$values[0][0]}}</th>
                                <th>{{$values[0][2]}}</th>
                                <th>Chi tiết</th>
                                <th>{{$values[0][7]}}</th>
                            </tr>
                            </thead>

                            <tbody>
                            @for ($i = 1; $i < count($values); $i++)
                                <tr>
                                    <td>
                                        {{$values[$i][0]}}
                                    </td>
                                    <td>
                                        {{$values[$i][2]}}
                                    </td>
                                    <td>
                                        {{number_format($values[$i][1], 0, ',', '.')}} fls<br/>
                                        {{number_format($values[$i][6], 0, ',', '.')}}đ<br/>
                                        <button onclick="go()" style="background-color: #E1CE69; border: 1px solid #E1CE69;  box-shadow: 0 3px 5px -1px rgb(0 0 0 / 20%), 0 6px 10px 0 rgb(0 0 0 / 14%),
                                        0 1px 18px 0 rgb(0 0 0 / 12%); padding: 5px 10px;">Đặt mua
                                        </button>
                                        <input value="{{$values[$i][3]}}" type="text" style="display: none;"
                                               id="link_{{$i}}"/>
                                        <button onclick="xemKenh('{{$values[$i][3]}}')" title="{{$values[$i][3]}}"
                                                alt="{{$values[$i][3]}}" target="_blank" style="background-color: #2196F3; border: 1px solid #2196F3;  box-shadow: 0 3px 5px -1px rgb(0 0 0 / 20%), 0 6px 10px 0 rgb(0 0 0 / 14%),
                                        0 1px 18px 0 rgb(0 0 0 / 12%); padding: 5px 10px; margin: 5px; min-width: 61px;"">Xem
                                        </button>
                                        <button id="btn_link_{{$i}}" style="background-color: #8CE78C; border: 1px solid #8CE78C; margin: 5px;  box-shadow: 0 3px 5px -1px rgb(0 0 0 / 20%), 0 6px 10px 0 rgb(0 0 0 / 14%),
                                        0 1px 18px 0 rgb(0 0 0 / 12%); padding: 5px 10px; min-width: 61px;"
                                                onclick="copy('link_{{$i}}')">Copy
                                        </button>
                                    </td>
                                    
                                    <td>
                                        {{isset($values[$i][7])?$values[$i][7]:''}}
                                    </td>
                                </tr>
                            @endfor
                            </tbody>
                        </table>
                        <h3 style="text-align: center; font-weight: bold;">Còn nhiều Kênh Tiktok khác.. Vui lòng liên hệ
                            Hotline/Zalo: 0988 508 769 để được tư vấn thêm</h3>
                    </div>
                    <div class="large-12">
                        <div class="container">
                            {!!$page->content!!}
                        </div>
                    </div>
                </div>
                @include('home.includes.consultation')
            </div>
        </div>
        {{-- Block action --}}
    </div>
@endsection
@section("js")
    <script
        src="/js/home/datatables.min.js"
    ></script>
    <script>

        function go() {
            window.open('/quy-trinh-giao-dich-group-facebook', '_blank');
        }

        $("#reset").click(function (e) {
            $("#price_f").val("");
            $("#price_t").val("");
            $("#sub_f").val("");
            $("#sub_t").val("");
            $("#ds").submit();
        })

        $("#submit").click(function (e) {
            var min = document.getElementById("price_f").value;
            var max = document.getElementById("price_t").value;
            if (parseInt(max) < parseInt(min)) {
                alert("Giá kết thúc phải lớn hơn giá bắt đầu.");
                e.preventDefault();
            } else {
                min = document.getElementById("sub_f").value;
                max = document.getElementById("sub_t").value;
                if (parseInt(min) > parseInt(max)) {
                    alert("Lượng subscribers bắt đầu phải nhỏ hơn kết thúc.");
                    e.preventDefault();
                } else {
                    $("#ds").submit();
                }
            }
        })

        function xemKenh(url) {
            window.open(url, '_blank');
        }

        function copy(id) {
            let ele = $('#btn_' + id);
            ele.text('Copied');
            setTimeout(() => {
                ele.text('Copy');
            }, 3000);
            /* Get the text field */
            var copyText = document.getElementById(id);
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val(copyText.value).select();
            document.execCommand("copy");
            $temp.remove();
        }

        $(document).ready(function () {
            if(window.innerWidth < 769){
                $('#customers-mb').DataTable({
                'pageLength': 10,
                'responsive': true,
                "order": [[0, "asc"]],
                "language": {
                    "sProcessing": "Đang tìm kiếm...",
                    "sLengthMenu": "Hiển thị _MENU_ Group",
                    "sZeroRecords": "Xin lỗi, hiện tại đã hết Group",
                    "sEmptyTable": "Xin lỗi, hiện tại đã hết Group",
                    "sInfo": "Bắt đầu từ kênh _START_ đến _END_ trong tổng _TOTAL_ Group",
                    "sInfoEmpty": "Không có kênh nào",
                    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sSearch": "Tìm kiếm:",
                    "sUrl": "",
                    "sInfoThousands": ",",
                    "sLoadingRecords": "Đang tải...",
                    "oPaginate": {
                        "sFirst": "Về đầu",
                        "sLast": "Về cuối",
                        "sNext": "Tiếp",
                        "sPrevious": "Lùi"
                    },
                    "oAria": {
                        "sSortAscending": ": Sắp xếp tăng dần",
                        "sSortDescending": ": Sắp xếp giảm dần"
                    }
                }
                }).columns.adjust();
            }else{
                $('#customers').DataTable({
                'pageLength': 10,
                'responsive': true,
                "order": [[0, "asc"]],
                "language": {
                    "sProcessing": "Đang tìm kiếm...",
                    "sLengthMenu": "Hiển thị _MENU_ Group",
                    "sZeroRecords": "Xin lỗi, hiện tại đã hết Group",
                    "sEmptyTable": "Xin lỗi, hiện tại đã hết Group",
                    "sInfo": "Bắt đầu từ kênh _START_ đến _END_ trong tổng _TOTAL_ Group",
                    "sInfoEmpty": "Không có kênh nào",
                    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sSearch": "Tìm kiếm:",
                    "sUrl": "",
                    "sInfoThousands": ",",
                    "sLoadingRecords": "Đang tải...",
                    "oPaginate": {
                        "sFirst": "Về đầu",
                        "sLast": "Về cuối",
                        "sNext": "Tiếp",
                        "sPrevious": "Lùi"
                    },
                    "oAria": {
                        "sSortAscending": ": Sắp xếp tăng dần",
                        "sSortDescending": ": Sắp xếp giảm dần"
                    }
                }
                }).columns.adjust();
            }
        });

    </script>
@endsection
