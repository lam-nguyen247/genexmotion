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
            th, td {
            text-align: center !important;
            font-size: 11px !important;
            }
        }

        .chanel-form th{
            background-color: #E1CE69;
            font-weight: 700;
        }

    </style>
@endsection
@section('content')
    <div class="page-wrapper page-contact">
        {{-- Block contact --}}
        <div class="grid-contact" id="grid-hero">
            <div class="container">
                <div class="grid-head" style="text-align: center">
                    <h2 class="title" style="text-align: center">Bảng Giá Kênh Tiktok!</h2>
                    <div class="sapo">
                        <p>Vui lòng liên hệ với chúng tôi qua email hoặc hotline.</p>
                    </div>
                </div>
                <div class="row" style="background-color:white; padding: 15px">
                    @include('home.includes.chanel-form', ['title' => $values[0][1]])
                    <div style="order: 2 !important; overflow-x: auto; padding: 10px !important"
                         class="large-12 small-12 col-lg-12">
                        <table id="customers" class="display-desktop" style="margin-top: 10px;">
                            <thead>
                            <tr>
                                <th>{{$values[0][0]??''}}</th>
                                <th>{{$values[0][1]??''}}</th>
                                <th>{{$values[0][2]??''}}</th>
                                <th>{{$values[0][3]??''}}</th>
                                <th>{{$values[0][4]??''}}</th>
                                <th>{{$values[0][5]??''}}</th>
                                <th>{{$values[0][6]??''}}</th>
                            </tr>
                            </thead>

                            <tbody>
                            @for ($i = 1; $i < count($values)-1; $i++)
                                <tr>
                                    <td>{{$values[$i][0]??''}}</td>
                                    <td>
                                        {{number_format($values[$i][1], 0, ',', '.')}}
                                    </td>
                                    <td>
                                        {{$values[$i][2]??''}}
                                    </td>
                                    <td>
                                        <input value="{{$values[$i][3]??''}}" type="text" style="display: none;"
                                               id="link_{{$i}}"/>
                                        <button onclick="xemKenh('{{$values[$i][3]??''}}')"
                                                title="{{$values[$i][3]??''}}" alt="{{$values[$i][3]??''}}"
                                                target="_blank" style="color:black !important; background-color: #2196F3; border: 1px solid #2196F3;  box-shadow: 0 3px 5px -1px rgb(0 0 0 / 20%), 0 6px 10px 0 rgb(0 0 0 / 14%),
                                        0 1px 18px 0 rgb(0 0 0 / 12%); padding: 5px 10px; margin: 5px; "">Xem Kênh
                                        </button>
                                        <button id="btn_link_{{$i}}" style="color:black !important; background-color: #8CE78C; border: 1px solid #8CE78C; margin: 5px;  box-shadow: 0 3px 5px -1px rgb(0 0 0 / 20%), 0 6px 10px 0 rgb(0 0 0 / 14%),
                                        0 1px 18px 0 rgb(0 0 0 / 12%); padding: 5px 10px; "
                                                onclick="copy('link_{{$i}}')">Copy Link
                                        </button>
                                    </td>

                                    <td>{{number_format($values[$i][4], 0, ',', '.')}} <br/>
                                        <button onclick="go()" style="color:black !important; background-color: #E1CE69; border: 1px solid #E1CE69;  box-shadow: 0 3px 5px -1px rgb(0 0 0 / 20%), 0 6px 10px 0 rgb(0 0 0 / 14%),
                                        0 1px 18px 0 rgb(0 0 0 / 12%); padding: 5px 10px;">Đặt mua
                                        </button>
                                    </td>
                                    <td>
                                        {{$values[$i][5]??''}}
                                    </td>
                                    <td>
                                        {{$values[$i][6]??''}}
                                    </td>
                                </tr>
                            @endfor
                            </tbody>
                        </table>
                        <table id="customers-mb" class="display-mobile" style="margin-top: 10px;">
                            <thead>
                            <tr>
                                <th>S <br/> T <br/> T</th>
                                <th>{{$values[0][2]??''}}</th>
                                <th>{{$values[0][1]??''}}</th>
                                <th>{{$values[0][4]??''}}</th>
                            </tr>
                            </thead>

                            <tbody>
                            @for ($i = 1; $i < count($values)-1; $i++)
                                <tr>
                                    <td>{{$values[$i][0]??''}}</td>
                                    <td>
                                        {{$values[$i][2]??''}}
                                    </td>
                                    <td>
                                        <p>{{number_format($values[$i][1], 0, ',', '.')}}</p>
                                        <input value="{{$values[$i][3]??''}}" type="text" style="display: none;"
                                        id="link_{{$i}}"/>
                                        <button onclick="xemKenh('{{$values[$i][3]??''}}')"
                                                title="{{$values[$i][3]??''}}" alt="{{$values[$i][3]??''}}"
                                                target="_blank" style="color:black !important; background-color: #2196F3; border: 1px solid #2196F3;  box-shadow: 0 3px 5px -1px rgb(0 0 0 / 20%), 0 6px 10px 0 rgb(0 0 0 / 14%),
                                        0 1px 18px 0 rgb(0 0 0 / 12%); padding: 5px 10px;"">Xem kênh
                                        </button>
                                    </td>
                                    <td>
                                        <p>{{number_format($values[$i][4], 0, ',', '.')}} </p>
                                        <button onclick="go()" style="color:black !important; background-color: #E1CE69; border: 1px solid #E1CE69;  box-shadow: 0 3px 5px -1px rgb(0 0 0 / 20%), 0 6px 10px 0 rgb(0 0 0 / 14%),
                                        0 1px 18px 0 rgb(0 0 0 / 12%); padding: 5px 10px;">Đặt mua
                                        </button>
                                    </td>
                                </tr>
                            @endfor
                            </tbody>
                        </table>
                        <h3 style="text-align: center; font-weight: bold;">Còn nhiều Kênh Tiktok khác.. Vui lòng liên hệ
                            Hotline/Zalo: 096.55.90009 để được tư vấn thêm</h3>
                    </div>
                    <div class="large-12" style="order: 3 !important;">
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
            window.open('/quy-trinh-giao-dich-kenh-tiktok', '_blank');
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
            let ele = $('#btn_'+ id);
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

        function initTable(){
            if(window.innerWidth < 769){
                $('#customers-mb').DataTable({
                'pageLength': 10,
                'responsive': true,
                "order": [[0, "asc"]],
                "language": {
                    "sProcessing": "Đang tìm kiếm...",
                    "sLengthMenu": "Hiển thị _MENU_ kênh",
                    "sZeroRecords": "No se encontraron resultados",
                    "sEmptyTable": "Ningún dato disponible en esta tabla",
                    "sInfo": "Bắt đầu từ kênh _START_ đến _END_ trong tổng _TOTAL_ kênh",
                    "sInfoEmpty": "Không có kênh nào",
                    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sSearch": "Tìm kiếm:",
                    "sUrl": "",
                    "sInfoThousands": ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst": "Về đầu",
                        "sLast": "Về cuối",
                        "sNext": "Tiếp",
                        "sPrevious": "Lùi"
                    },
                    "oAria": {
                        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
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
                    "sLengthMenu": "Hiển thị _MENU_ kênh",
                    "sZeroRecords": "No se encontraron resultados",
                    "sEmptyTable": "Ningún dato disponible en esta tabla",
                    "sInfo": "Bắt đầu từ kênh _START_ đến _END_ trong tổng _TOTAL_ kênh",
                    "sInfoEmpty": "Không có kênh nào",
                    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sSearch": "Tìm kiếm:",
                    "sUrl": "",
                    "sInfoThousands": ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst": "Về đầu",
                        "sLast": "Về cuối",
                        "sNext": "Tiếp",
                        "sPrevious": "Lùi"
                    },
                    "oAria": {
                        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                }
            }).columns.adjust();
            }
        }

        $(document).ready(function () {
            initTable();
        });

    </script>
@endsection
