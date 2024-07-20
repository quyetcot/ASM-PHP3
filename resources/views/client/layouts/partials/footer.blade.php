@php
    $list_categories_arr = DB::table('categories')->get();
@endphp
<div class="container-fluid bg-dark pt-5 px-sm-3 px-md-5 mt-5">
    <div class="row py-4">
        <div class="col-lg-4 col-md-6 mb-5">
            <h5 class="mb-4 text-white text-uppercase font-weight-bold">Liên hệ</h5>
            <p class="font-weight-medium"><i class="fa fa-map-marker-alt mr-2"></i>1 ngõ 2 Kiều Mai, Phúc Diễn, Bắc Từ Liêm, Hà Nội, Việt nam</p>
            <p class="font-weight-medium"><i class="fa fa-phone-alt mr-2"></i>+84379924489</p>
            <p class="font-weight-medium"><i class="fa fa-envelope mr-2"></i>quyetpvph38394@fpt.edu.vn</p>
            <h6 class="mt-4 mb-3 text-white text-uppercase font-weight-bold">Theo dõi chúng tôi</h6>
            <div class="d-flex justify-content-start">
                <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-lg btn-secondary btn-lg-square" href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-5">
            <h5 class="mb-4 text-white text-uppercase font-weight-bold">Tin tức phổ biến</h5>
            @foreach ($articles as $article)
            <div class="mb-3">
                <div class="mb-2">
                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">{{ $article->category->name }}</a>
                    <a class="text-body" href=""><small>{{ $article->created_at->format('d-m-Y') }}</small></a>
                </div>
                <a class="small text-body text-uppercase font-weight-medium" href="{{ route('detailnew.show', ['category' => $article->category->slug, 'slug' => $article->slug]) }}">{{ $article->title }}</a>
            </div>
            @endforeach
            {{-- <div class="mb-3">
                <div class="mb-2">
                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                    <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                </div>
                <a class="small text-body text-uppercase font-weight-medium" href="">Lorem ipsum dolor sit amet elit. Proin vitae porta diam...</a>
            </div>
            <div class="">
                <div class="mb-2">
                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                    <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                </div>
                <a class="small text-body text-uppercase font-weight-medium" href="">Lorem ipsum dolor sit amet elit. Proin vitae porta diam...</a>
            </div> --}}
        </div>
        <div class="col-lg-4 col-md-6 mb-5">
            <h5 class="mb-4 text-white text-uppercase font-weight-bold">Danh mục tin tức</h5>
            <div class="m-n1">
                @foreach ( $list_categories_arr as $category)
                <a href="{{ url('/', [$category->slug]) }}" class="btn btn-sm btn-secondary m-1 ">{{ $category->name }}</a>
                @endforeach
               
            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-4 px-sm-3 px-md-5" style="background: #111111;">
    <p class="m-0 text-center">&copy; <a href="#">Tin tức 24H</a>. Nhanh nhưng chưa chuẩn. 
    
   
</div>