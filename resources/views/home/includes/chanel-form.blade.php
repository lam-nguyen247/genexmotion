<div style="order: 1 !important;" class="large-12 small-12 col-lg-12">
    <form id="ds" action="{{url()->current()}}" method="GET">
        @csrf
        <div class="container">
            <div class="row" style="margin: 0px  0px 20px 0px  !important; padding: 0px 15px;">
                <div class="large-6 small-12" style="order: 1 !important; padding-left: 10px;">
                    <div class="large-12 small-12">
                        <label style="margin-right:10px;">Giá: </label>
                    </div>
                    <div class="large-6 small-12">
                        <input
                            class="chanel-filter"
                            style=" margin-bottom: 10px; margin-left: 5px;"
                            placeholder="từ"
                            value="{{isset($_GET['price_f'])?$_GET['price_f']: ''}}" type="number"
                            id="price_f" name="price_f">
                    </div>
                    <div class="large-6 small-12">
                        <input
                            class="chanel-filter"
                            style=" margin-bottom: 10px; margin-left: 5px;"
                            placeholder="đến"
                            value="{{isset($_GET['price_t'])?$_GET['price_t']:''}}" type="number"
                            id="price_t" name="price_t">
                    </div>

                </div>
                <div class="large-6 small-12" style="order: 2 !important; padding-left: 10px;">
                    <div class="large-12 small-12">
                        <label style="margin-right:10px;">Lượng Follow: </label>
                    </div>
                    <div class="large-6 small-12">
                        <input
                            class="chanel-filter"
                            placeholder="từ"
                            style=" margin-bottom: 10px; margin-left: 5px;"
                            value="{{isset($_GET['sub_f'])?$_GET['sub_f']: ''}}" type="number"
                            id="sub_f" name="sub_f">
                    </div>
                    <div class="large-6 small-12">
                        <input
                            class="chanel-filter"
                            placeholder="đến"
                            style=" margin-bottom: 10px; margin-left: 5px;"
                            value="{{isset($_GET['sub_t'])?$_GET['sub_t']: ''}}" type="number"
                            id="sub_t" name="sub_t">
                    </div>
                </div>
                <div class="large-12" id="box-filter"
                     style="margin-bottom:0px; margin-top:10px; text-align: right; order: 3 !important">
                    <button id="reset" type="submit" style="margin-bottom:0px; background-color: #E1CE69; border: 1px solid #E1CE69; margin-right: 10px;  box-shadow: 0 3px 5px -1px rgb(0 0 0 / 20%), 0 6px 10px 0 rgb(0 0 0 / 14%),
                                    0 1px 18px 0 rgb(0 0 0 / 12%); padding: 5px 10px;">Hủy bỏ
                    </button>
                    <button id="submit" type="submit" style="margin-bottom:0px; background-color: #8CE78C; border: 1px solid #8CE78C;  box-shadow: 0 3px 5px -1px rgb(0 0 0 / 20%), 0 6px 10px 0 rgb(0 0 0 / 14%),
                                     0 1px 18px 0 rgb(0 0 0 / 12%); padding: 5px 10px;">Lọc
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>

