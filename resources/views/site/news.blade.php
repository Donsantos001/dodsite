@extends('layout.app')

@section('nav-minor')

<section class="nav-minor-s">
    <div class="nav-m-con p-4 max-w-screen-2xl mx-auto">
        <div class="flex flex-wrap">
            <a href="" class="px-1 m-1 hover:bg-red-500 hover:text-white border-solid border-2 border-red-500 rounded-xl">Sasjkass</a>
            <a href="" class="px-1 m-1 hover:bg-red-500 hover:text-white border-solid border-2 border-red-500 rounded-xl">shjhsa</a>
            <a href="" class="px-1 m-1 hover:bg-red-500 hover:text-white border-solid border-2 border-red-500 rounded-xl">ydjnena</a>
            <a href="" class="px-1 m-1 hover:bg-red-500 hover:text-white border-solid border-2 border-red-500 rounded-xl">Sasjkass</a>
            <a href="" class="px-1 m-1 hover:bg-red-500 hover:text-white border-solid border-2 border-red-500 rounded-xl">shjhsa</a>
            <a href="" class="px-1 m-1 hover:bg-red-500 hover:text-white border-solid border-2 border-red-500 rounded-xl">ydjnena</a>
            <a href="" class="px-1 m-1 hover:bg-red-500 hover:text-white border-solid border-2 border-red-500 rounded-xl">Sasjkass</a>
            <a href="" class="px-1 m-1 hover:bg-red-500 hover:text-white border-solid border-2 border-red-500 rounded-xl">shjhsa</a>
            <a href="" class="px-1 m-1 hover:bg-red-500 hover:text-white border-solid border-2 border-red-500 rounded-xl">ydjnena</a>
            <a href="" class="px-1 m-1 hover:bg-red-500 hover:text-white border-solid border-2 border-red-500 rounded-xl">Sasjkass</a>
            <a href="" class="px-1 m-1 hover:bg-red-500 hover:text-white border-solid border-2 border-red-500 rounded-xl">shjhsa</a>
            <a href="" class="px-1 m-1 hover:bg-red-500 hover:text-white border-solid border-2 border-red-500 rounded-xl">ydjnena</a>
            <a href="" class="px-1 m-1 hover:bg-red-500 hover:text-white border-solid border-2 border-red-500 rounded-xl">Sasjkass</a>
            <a href="" class="px-1 m-1 hover:bg-red-500 hover:text-white border-solid border-2 border-red-500 rounded-xl">shjhsa</a>
            <a href="" class="px-1 m-1 hover:bg-red-500 hover:text-white border-solid border-2 border-red-500 rounded-xl">ydjnena</a>
            <a href="" class="px-1 m-1 hover:bg-red-500 hover:text-white border-solid border-2 border-red-500 rounded-xl">Sasjkass</a>
            <a href="" class="px-1 m-1 hover:bg-red-500 hover:text-white border-solid border-2 border-red-500 rounded-xl">shjhsa</a>
            <a href="" class="px-1 m-1 hover:bg-red-500 hover:text-white border-solid border-2 border-red-500 rounded-xl">ydjnena</a>
        </div>
    </div>
</section>

@endsection


@section('news')

<section class="news-s">
    <div class="flex flex-col lg:grid lg:gap-4 2xl:gap-6 lg:grid-cols-3 2xl:row-span-1 2xl:pb-8 pt-4 px-3 h-full max-w-screen-2xl lg:mx-auto">
        <div class="lg:order-1 lg:row-span-1 2xl:row-span-1 h-full lg:col-span-2 mb-5 lg:mb-0">
            <div class="max-w-screen-2xl lg:mx-auto lg:mt-3">
                <div class="sect-title bg-red-600 text-white px-3 py-2 ml-8 mr-auto w-5/12 lg:w-80 rounded-t-xl">
                    <p>NEWS</p>
                </div>
            </div>

            <div class="flex flex-col">
                <div class="news-main-con px-2 rounded-lg shadow-2xl overflow-hidden">
                    <div class="news-main p-2">
                        @foreach ($news as $newsdata)
                            <div class="news-con hover:shadow-xl border-4 hover:border-opacity-30 border-white hover:border-red-500">
                                <a href="{{ URL::route('site.newsdetail', $newsdata->id) }}">
                                    <div class="flex flex-col md:flex-row">
                                        <div class="md:w-1/2 p-2">
                                            <div class="news-img">
                                                <img src="{{ asset('images/Picture3.png') }}" />
                                            </div>
                                        </div>
                
                                        <div class="md:w-1/2 p-2">
                                            <div class="news-det">
                                                <p class="news-det-title text-xl">
                                                    {{ $newsdata->headline }}
                                                </p>
                                                <p class="py-2 text-sm">
                                                    <span class="rounded-full p-1 bg-red-600 text-white">{{ $newsdata->category }}</span>
                                                    <span>{{ date( "d F Y", strtotime($newsdata->created_at)) }}</span>
                                                </p>
                                                <p class="text-sm">
                                                    {{ Illuminate\Support\Str::limit($newsdata->body, 200, '...') }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>


                    <div class="flex flex-row justify-center p-2">
                        {{ $news->links() }}
                    </div>
                </div>
            </div>
        </div>

        <div class="lg:order-2 lg:row-span-1 2xl:row-span-1 h-full lg:col-span-1 mb-5 lg:mb-0  lg:pt-9">
            <div class="flex flex-col lg:grid lg:gap-4 2xl:gap-6 lg:grid-cols-1 2xl:row-span-5 pt-4 h-full max-w-screen-2xl lg:mx-auto">
                <div class="lg:order-1 lg:row-span-1 2xl:row-span-1 lg:col-span-1 mb-5 lg:mb-0">
                    <div class="ad-img-con rounded-lg shadow-2xl overflow-hidden h-full">
                        <img src="{{ asset('images/Picture.png') }}" />
                    </div>
                </div>

                <div class="lg:order-2 row-span-1 2xl:row-span-1 lg:col-span-1 rounded-lg shadow-2xl overflow-hidden mb-5 lg:mb-0">
                    <div class="add-title bg-red-600 p-3">
                        <p class="text-white text-lg">ADD TO DAY OF DUBAI</p>
                    </div>
    
                    <div class="news-ad-img-con h-full flex flex-col justify-around">
                        <div class="flex flex-row md:flex-col justify-around md:pb-8">
                           <div class="flex md:flex-row flex-col justify-around">
                                @for ($i =0; $i < 3; $i++)
                                    <div class="add-item p-3">
                                        <div class="bg-red-600 w-24 h-24 rounded-full p-5 flex flex-row justify-around max-w-xs">
                                            <div class="fa fa-book text-5xl text-white"></div>
                                        </div>
                                        <p class="p-2 w-min mx-auto text-lg text-center font-bold">ADD EVENT</p>
                                    </div>
                                @endfor
                            </div>
    
                            <div class="flex md:flex-row flex-col justify-around">
                                @for ($i =0; $i < 3; $i++)
                                    <div class="add-item p-3">
                                        <div class="bg-red-600 w-24 h-24 rounded-full p-5 flex flex-row justify-around max-w-xs">
                                            <div class="fa fa-book text-5xl text-white"></div>
                                        </div>
                                        <p class="p-2 w-min mx-auto text-lg text-center font-bold">ADD EVENT</p>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>


                <div class="lg:order-3 row-span-2 2xl:row-span-2 lg:col-span-1 rounded-lg shadow-2xl pb-4 mb-5 lg:mb-0">
                    <div class="">
                        <div class="flex flex-col">
                            <div class="news-main-con rounded-t-xl overflow-hidden">
                                <div class="add-title bg-red-600 p-3">
                                    <p class="text-white text-lg">VIDEO</p>
                                </div>
    
                                <div class="news-main p-2">
                                    <div class="news-con p-2 w-full">
                                        <div class="flex flex-col">
                                            <div class="w-full">
                                                <div class="vid-det-top text-right mr-2">
                                                    <span class="font-bold">22 MARCH 2020</span>
                                                    <span class="bg-red-500 text-white rounded-t-lg p-2">Latest Video</span>
                                                </div>
                                                <div class="vid-img overflow-hidden rounded-lg">
                                                    <video width="320" height="240" controls>
                                                        <source src="{{URL::asset("videos/clip1.mp4")}}" type="video/mp4">
                                                      Your browser does not support the video tag.
                                                  </video>
                                                </div>
                                            </div>
                    
                                            <div class="w-full">
                                                <div class="news-det">
                                                    <p class="text-lg">
                                                        Lorem ipsum dolor sit, amet consectetur adipisicing.
                                                    </p>
                                                    <p class="text-sm py-2">12 May 1996(83382)</p>
                                                    <p class="text-sm">
                                                        Lorem ipsum dolor sit amet consectetur 
                                                        adipisicing elit. Aut minima expliimages/cabo 
                                                        earum beatae corrupti eligendi ex ea 
                                                        itaque quod, repudiandae libero non,
                                                        adipisci eum enim expedita.
                                                        Similique quis qui illum.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="news-main p-2 flex flex-wrap">
                                    @for ($i = 1; $i < 5; $i++)
                                        <div class="news-con p-2 md:w-1/2 w-full">
                                            <div class="flex flex-col">
                                                <div class="w-full p-2">
                                                    <div class="vid-img overflow-hidden rounded-lg">
                                                        <video width="320" height="240" controls>
                                                            <source src="{{URL::asset("videos/clip".$i.".mp4")}}" type="video/mp4">
                                                          Your browser does not support the video tag.
                                                      </video>
                                                    </div>
                                                </div>
                        
                                                <div class="w-full p-2">
                                                    <div class="news-det">
                                                        <p class="text-sm">
                                                            Lorem ipsum dolor sit amet consectetur 
                                                            adipisicing elit. Aut minima expliimages/cabo 
                                                            earum beatae corrupti eligendi 
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endfor
                                </div>
            
            
                                <div class="news-view-more p-3">
                                    <div class="text-white bg-red-500 hover:bg-red-700 px-1 rounded-lg w-fit ml-auto cursor-pointer">
                                        <p>View More</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-900 lg:order-4 row-span-1 2xl:row-span-1 lg:col-span-1 rounded-lg shadow-2xl overflow-hidden mb-5 lg:mb-0">
                    <div class="news-ad-img-con h-full">
                        <img src="{{ asset('images/Picture5.png') }}" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection



@section('most-viewed')


<section class="most-viewed-s">
    <div class="max-w-screen-2xl lg:mx-auto lg:mt-3">
        <div class="sect-title bg-red-600 text-white px-3 py-2 ml-8 mr-auto w-5/12 lg:w-80 rounded-t-xl">
            <p>MOST VIEWED</p>
        </div>
    </div>

    <div class="news-preview-con max-w-screen-2xl lg:mx-auto p-4">
        <div class="news-preview-inner-con flex flex-wrap rounded-lg shadow-xl">
            @foreach ($mostviewed as $mostview)
                <div class="news-con p-2 lg:w-1/5 mx-auto md:w-1/3">
                    <div class="flex flex-col">
                        <div class="p-2">
                            <div class="news-img">
                                <img src="{{ asset('images/Picture10.png') }}" />
                            </div>
                        </div>

                        <div class="p-2">
                            <div class="news-det">
                                <p class="my-2 text-sm">{{ date( "d F Y", strtotime($mostview->created_at)) }}</p>
                                <p class="text-lg m-0">{{ $mostview->headline }}</p>
                                <p class="my-2 text-sm">
                                    {{ Illuminate\Support\Str::limit($mostview->body, 180, '...') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


@endsection

@section('partners')

<section class="partners-s">
    <div class="partners-con max-w-screen-2xl lg:mx-auto lg:mt-3 p-4">
        <div class="max-w-screen-2xl lg:mx-auto lg:mt-3">
            <div class="sect-title bg-red-600 text-white px-3 py-2 ml-8 mr-auto w-5/12 lg:w-80 rounded-t-xl">
                <p>OUR PARTNERS</p>
            </div>
        </div>

        <div class="partners flex flex-wrap rounded-lg shadow-2xl p-4">
            @for ($i = 11; $i < 15; $i++)
                <div class="partners-img-con mx-auto py-9 border-gray-500 border-solid rounded-2xl border-2 mb-2">
                    <img src="{{ asset('images/Picture'.$i.'.png') }}" />
                </div>
            @endfor
            @for ($i = 11; $i < 15; $i++)
                <div class="partners-img-con mx-auto py-9 border-gray-500 border-solid rounded-2xl border-2 mb-2">
                    <img src="{{ asset('images/Picture'.$i.'.png') }}" />
                </div>
            @endfor
            @for ($i = 11; $i < 15; $i++)
                <div class="partners-img-con mx-auto py-9 border-gray-500 border-solid rounded-2xl border-2 mb-2">
                    <img src="{{ asset('images/Picture'.$i.'.png') }}" />
                </div>
            @endfor
            @for ($i = 11; $i < 15; $i++)
                <div class="partners-img-con mx-auto py-9 border-gray-500 border-solid rounded-2xl border-2 mb-2">
                    <img src="{{ asset('images/Picture'.$i.'.png') }}" />
                </div>
            @endfor
            @for ($i = 11; $i < 13; $i++)
                <div class="partners-img-con mx-auto py-9 border-gray-500 border-solid rounded-2xl border-2 mb-2">
                    <img src="{{ asset('images/Picture'.$i.'.png') }}" />
                </div>
            @endfor
        </div>
    </div>
</section>

@endsection