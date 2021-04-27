@extends('layout.app')

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
                        <div class="news-con p-2">
                            <div class="flex flex-col">
                                <div class="p-2">
                                    <div class="news-img">
                                        {!! HTML::image('images/picture4.png') !!}
                                    </div>
                                </div>

                                <div class="flex flex-row justify-between">
                                    <p>{{ date( "d F Y", strtotime($news[0]->created_at)).'(63232)' }}</p>
                                    <div class="social-con">
                                        <div class="py-2 px-1 fa fa-facebook"></div>
                                        <div class="py-2 px-1 fa fa-twitter"></div>
                                        <div class="py-2 px-1 fa fa-print"></div>
                                        <div class="py-2 px-1 fa fa-envelope"></div>
                                        <div class="py-2 px-1 fa fa-comment"></div>
                                    </div>
                                </div>
        
                                <div class="p-2">
                                    <div class="p-2">
                                       <p class="my-2 text-3xl">
                                            Lorem ipsum dolor sit amet consectetur 
                                            adipisicing elit. Aut minima expliimages/cabo 
                                            earum beatae corrupti eligendi ex ea 
                                            itaque quod, repudiandae libero non,
                                            adipisci eum enim expedita.
                                            Similique quis qui illum.
                                        </p>
                                    </div>

                                    <div class="news-det">
                                        <p>
                                            {{ $news[0]->body }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="news-view-more">
                        <div class="fa fa-angle-down d-inline"></div>
                        <div class="d-inline">View More</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="lg:order-2 lg:row-span-1 2xl:row-span-1 h-full lg:col-span-1 mb-5 lg:mb-0">
            <div class="flex flex-col lg:grid lg:gap-4 2xl:gap-6 lg:grid-cols-1 2xl:row-span-5 pt-4 h-full max-w-screen-2xl lg:mx-auto">
                <div class="lg:order-1 lg:row-span-2 2xl:row-span-2 lg:col-span-1 mb-5 lg:mb-0 lg:pt-9">
                    <div class="ad-img-con rounded-lg shadow-2xl overflow-hidden h-full">
                        {!! HTML::image('images/picture.png') !!}
                    </div>
                </div>

                <div class="lg:order-2 row-span-2 2xl:row-span-2 lg:col-span-1 rounded-lg shadow-2xl overflow-hidden mb-5 lg:mb-0">
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


                <div class="lg:order-3 row-span-3 2xl:row-span-3 lg:col-span-1 rounded-lg shadow-2xl overflow-hidden mb-5 lg:mb-0">
                    <div class="add-title bg-red-600 p-3">
                        <p class="text-white text-lg">NEWS INTERESTS</p>
                    </div>
    
                    <div class="news-ad-img-con h-full">
                        <div class="md:pb-8">
                           <div class="px-8">
                                <p class="text-md p-3">Beauty, Style & Fashion</p>
                                <hr class="border-solid border-red-500 border-1">
                                <p class="text-md p-3">Builders & Real Estate</p>
                                <hr class="border-solid border-red-500 border-1">
                                <p class="text-md p-3">Business & Money</p>
                                <hr class="border-solid border-red-500 border-1">
                                <p class="text-md p-3">Culture & Entertainment</p>
                                <hr class="border-solid border-red-500 border-1">
                                <p class="text-md p-3">Dubai Expo</p>
                                <hr class="border-solid border-red-500 border-1">
                                <p class="text-md p-3">Education & Sports</p>
                                <hr class="border-solid border-red-500 border-1">
                                <p class="text-md p-3">Environment & Energy</p>
                                <hr class="border-solid border-red-500 border-1">
                                <p class="text-md p-3">Food & FMCG</p>
                                <hr class="border-solid border-red-500 border-1">
                                <p class="text-md p-3">Government</p>
                                <hr class="border-solid border-red-500 border-1">
                                <p class="text-md p-3">Healthcare</p>
                                <hr class="border-solid border-red-500 border-1">
                                <p class="text-md p-3">Technology & IT</p>
                                <hr class="border-solid border-red-500 border-1">
                                <p class="text-md p-3">Tourism & Hospitality</p>
                                <hr class="border-solid border-red-500 border-1">
                                
                                <p class="text-md p-3">Other</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('article')
    <section class="news-preview-s">
        <div class="max-w-screen-2xl lg:mx-auto lg:mt-3">
            <div class="sect-title bg-red-600 text-white px-3 py-2 ml-8 mr-auto w-5/12 lg:w-80 rounded-t-xl">
                <p>ARTICLE</p>
            </div>
        </div>

        <div class="news-preview-con max-w-screen-2xl lg:mx-auto px-4">
            <div class="news-preview-inner-con flex flex-wrap shadow-2xl rounded-lg overflow-hidden">
                @foreach ($articles as $article)
                    <div class="news-con p-2 lg:w-1/5 mx-auto md:w-1/3">
                        <div class="flex flex-col">
                            <div class="p-2">
                                <div class="news-img">
                                    <img src="{{ asset('images/Picture9.png') }}" />
                                </div>
                                <p class="text-sm">{{ date( "d F Y", strtotime($article->created_at)) }}</p>
                            </div>

                            <div class="p-2">
                                <div class="news-det">
                                    <p class="text-lg">{{ $article->headline }}</p>
                                    <p class="mt-2 text-sm">
                                        {{ Illuminate\Support\Str::limit($article->body, 200, '...') }}
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

@section('most-viewed')


<section class="news-preview-s">
    <div class="max-w-screen-2xl lg:mx-auto lg:mt-3">
        <div class="sect-title bg-red-600 text-white px-3 py-2 ml-8 mr-auto w-5/12 lg:w-80 rounded-t-xl">
            <p>MOST VIEWED</p>
        </div>
    </div>

    <div class="news-preview-con max-w-screen-2xl lg:mx-auto px-4">
        <div class="news-preview-inner-con flex flex-wrap shadow-2xl rounded-lg overflow-hidden">
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
                                <p class="text-lg">{{ $mostview->headline }}</p>
                                <p class="my-2 text-sm">
                                    {{ Illuminate\Support\Str::limit($mostview->body, 200, '...') }}
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
                    {!! HTML::image("images/picture".$i.".png") !!}
                </div>
            @endfor
            @for ($i = 11; $i < 15; $i++)
                <div class="partners-img-con mx-auto py-9 border-gray-500 border-solid rounded-2xl border-2 mb-2">
                    {!! HTML::image("images/picture".$i.".png") !!}
                </div>
            @endfor
            @for ($i = 11; $i < 15; $i++)
                <div class="partners-img-con mx-auto py-9 border-gray-500 border-solid rounded-2xl border-2 mb-2">
                    {!! HTML::image("images/picture".$i.".png") !!}
                </div>
            @endfor
            @for ($i = 11; $i < 15; $i++)
                <div class="partners-img-con mx-auto py-9 border-gray-500 border-solid rounded-2xl border-2 mb-2">
                    {!! HTML::image("images/picture".$i.".png") !!}
                </div>
            @endfor
            @for ($i = 11; $i < 13; $i++)
                <div class="partners-img-con mx-auto py-9 border-gray-500 border-solid rounded-2xl border-2 mb-2">
                    {!! HTML::image("images/picture".$i.".png") !!}
                </div>
            @endfor
        </div>
    </div>
</section>

@endsection