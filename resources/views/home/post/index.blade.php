@extends('home.layouts.app')

@section('title', 'GeneX Animation - LadiPage - GeneX Motion')
@section('description', 'GeneX Animation ĐĂNG KÝ Đăng ký Làm Video Motion Graphic Chuyên Nghiệp 00 00 00 00 Ngày Giờ Phút Giây Đăng ký ngay để nhận ưu đãi 300.000VNĐ THU HÚT VÀ ĐÁNH TRÚNG TÂM LÝKHÁCH HÀNG NHỜ VIDEO ANIMATION BỪNG SÁNG THƯƠNG HIỆU – BÙNG NỔ DOANH SỐ Nhờ chuyển động đẹp mắt')
@section('css')
@endsection

@section('content')
    <div class="row align-center page-wrapper">
        <div class="large-20 col">
            <div class="row large-columns-3 medium-columns- small-columns-1 has-shadow row-box-shadow-1">
                @forelse($postList as $post)
                <div class="col post-item">
                    <div class="col-inner">
                        <a href="{{$post->href}}" class="plain">
                            <div class="box box-text-bottom box-blog-post has-hover">
                                <div class="box-image">
                                    <div class="image-cover" style="padding-top:56%;">
                                        <img width="300" height="135" @src="{{$post->image}}" alt="{{$post->name}}" class="attachment-medium size-medium wp-post-image" loading="lazy" sizes="(max-width: 300px) 100vw, 300px">
                                    </div>
                                </div>
                                <div class="box-text text-left">
                                    <div class="box-text-inner blog-post-inner">
                                        <h5 class="post-title is-large ">{{Str::limit($post->name, 50, $end='...')}}</h5>
                                        <div class="is-divider"></div>
                                        <p class="from_the_blog_excerpt ">{{Str::limit($post->content, 71, $end='...(xem thêm)')}}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @empty
                @endforelse
            </div>
            {{ $postList->links('home.includes.pagination') }}
        </div>
    </div>
@endsection

@section('js')
@endsection