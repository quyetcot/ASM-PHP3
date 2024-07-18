@extends('client.layouts.master')
@section('title')
    Tin Tức 24h - Nhanh nhưng chưa chắc đã chuẩn
@endsection
@section('content')
    <!-- Main News Slider Start -->
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-7 px-0">
                <div class="owl-carousel main-carousel position-relative">
                    {{-- Hiện thị tin tức --}}
                    @foreach ($articles as $article)
                        <div class="position-relative overflow-hidden" style="height: 500px;">

                            <img class="img-fluid h-100" src="{{ asset($article->thumbnail) }}" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                        href="">{{ $article->category->name }}</a>
                                        <a class="text-white" href="">{{ $article->created_at->format('d-m-Y') }}</a>
                                </div>
                                <a class="h2 m-0 text-white text-uppercase font-weight-bold"
                                    href="">{{ $article->title }}</a>
                            </div>
                        </div>
                    @endforeach
                    {{-- Kết thúc hiện slide hiển thị tin tức --}}
                </div>
            </div>

            <div class="col-lg-5 px-0">
                <div class="row mx-0">
                    @foreach ($randomArticles as $article)
                    <div class="col-md-6 px-0">
                        <div class="position-relative overflow-hidden" style="height: 250px;">
                            <img class="img-fluid w-100 h-100" src="{{ asset($article->thumbnail) }}"
                                style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                        href="">{{ $article->category->name }}</a>
                                    <a class="text-white" href=""><small>{{ $article->created_at->format('d-m-Y') }}</small></a>
                                </div>
                                <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">{{ $article->title }}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Main News Slider End -->


    <!-- Breaking News Start -->
    <div class="container-fluid bg-dark py-3 mb-3">
        <div class="container">
            <div class="row align-items-center bg-dark">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div class="bg-primary text-dark text-center font-weight-medium py-2" style="width: 170px;">Tin tức mới nhất</div>
                        <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center ml-3"
                            style="width: calc(100% - 170px); padding-right: 90px;">
                            @foreach ($articles as $article)
                            <div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold"
                                href="">{{ $article->title }}</a></div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breaking News End -->


    <!-- Featured News Slider Start -->
    <div class="container-fluid pt-5 mb-3">
        <div class="container">
            <div class="section-title">
                <h4 class="m-0 text-uppercase font-weight-bold">Tin tức nổi bật</h4>
            </div>
            <div class="owl-carousel news-carousel carousel-item-4 position-relative">
                @foreach ($featuredNews as $article)
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid h-100" src="{{ asset($article->thumbnail) }}" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="">{{ $article->category->name }}</a>
                            <a class="text-white" href=""><small>{{ $article->created_at->format('d-m-Y') }}</small></a>
                        </div>
                        <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">{{ $article->title }}</a>
                    </div>
                </div>
                @endforeach
             
               
            </div>
        </div>
    </div>
    <!-- Featured News Slider End -->


    <!-- News With Sidebar Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                {{-- Thằng này là article --}}
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h4 class="m-0 text-uppercase font-weight-bold">Tin tức mới nhất</h4>
                                <a class="text-secondary font-weight-medium text-decoration-none" href="">Xem tất cả</a>
                            </div>
                        </div>
                        @foreach ($latestArticles as $article)
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100 " src="{{ asset($article->thumbnail) }}"
                                    style="object-fit: cover;max-height:230px">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">{{ $article->category->name }}</a>
                                        <a class="text-body" href=""><small>{{ $article->created_at->format('d-m-Y') }}</small></a>
                                    </div>
                                    <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold"
                                        href="">{{ $article->title }}</a>
                                    <p class="m-0">{{ Str::limit($article->lead, 150,'...') }}</p>
                                </div>
                                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle mr-2" src="" width="25"
                                            height="25" alt="">
                                        <small>{{ $article->author->name }}</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="ml-3"><i class="far fa-eye mr-2"></i>{{ $article->views }}</small>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <div class="col-12">
                            <div class="section-title">
                                <h4 class="m-0 text-uppercase font-weight-bold">Tin Nhanh 360</h4>
                                <a class="text-secondary font-weight-medium text-decoration-none" href="">Xem tất cả</a>
                            </div>
                        </div>
                        @foreach ($randomArticles as $article)
                        <div class="col-lg-6">
                         
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="{{ asset($article->thumbnail) }}" alt="" style="width:110px;height:110px">
                                <div
                                    class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                                            href="">{{ $article->category->name }}</a>
                                        <a class="text-body" href=""><small>{{ $article->created_at->format('d-m-Y') }}</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">{{ $article->title }}</a>
                                </div>
                            </div> 
                         
                        </div>
                        @endforeach
                            
                        <div class="col-12">
                            <div class="section-title">
                                <h4 class="m-0 text-uppercase font-weight-bold">Tin tức thị trường</h4>
                                <a class="text-secondary font-weight-medium text-decoration-none" href="">Xem tất cả</a>
                            </div>
                        </div>
                        @foreach ($economicsArticles as $article)
                        <div class="col-lg-6">
                         
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="{{ asset($article->thumbnail) }}" alt="" style="width:110px;height:110px">
                                <div
                                    class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                                            href="">{{ $article->category->name }}</a>
                                        <a class="text-body" href=""><small>{{ $article->created_at->format('d-m-Y') }}</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">{{ $article->title }}</a>
                                </div>
                            </div> 
                         
                        </div>
                        @endforeach
                    </div>
                </div>
                {{-- End article --}}
                {{-- Thằng bên này là sidebar --}}
                <div class="col-lg-4">
                    <!-- Social Follow Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Theo dõi chúng tôi</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3"
                                style="background: #39569E;">
                                <i class="fab fa-facebook-f text-center py-4 mr-3"
                                    style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Fans</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3"
                                style="background: #52AAF4;">
                                <i class="fab fa-twitter text-center py-4 mr-3"
                                    style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Followers</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3"
                                style="background: #0185AE;">
                                <i class="fab fa-linkedin-in text-center py-4 mr-3"
                                    style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Connects</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3"
                                style="background: #C8359D;">
                                <i class="fab fa-instagram text-center py-4 mr-3"
                                    style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Followers</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3"
                                style="background: #DC472E;">
                                <i class="fab fa-youtube text-center py-4 mr-3"
                                    style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Subscribers</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none"
                                style="background: #055570;">
                                <i class="fab fa-vimeo-v text-center py-4 mr-3"
                                    style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Followers</span>
                            </a>
                        </div>
                    </div>
                    <!-- Social Follow End -->

                    <!-- Ads Start -->
                    {{-- <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Quảng cáo</h4>
                        </div>
                        <div class="bg-white text-center border border-top-0 p-3">
                            <a href=""><img class="img-fluid" src="img/news-800x500-2.jpg" alt=""></a>
                        </div>
                    </div> --}}
                    <!-- Ads End -->

                    <!-- Popular News Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Tin tức xu hướng</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            @foreach ($random5Articles  as $article)
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 150px;">
                                
                                <img class="img-fluid" src="{{ asset($article->thumbnail) }}" alt="" style="width:110px;height:110px">
                                <div
                                    class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                                            href="">{{ $article->category->name }}</a>
                                        <a class="text-body" href=""><small>{{ $article->created_at->format('d-m-Y') }}</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">{{ $article->title }}</a>
                                </div>
                               
                                
                            </div>
                            @endforeach
                          
                        </div>
                    </div>
                    <!-- Popular News End -->


              
                </div>
                {{-- End sidebar --}}
            </div>
        </div>
    </div>
    <!-- News With Sidebar End -->
@endsection
