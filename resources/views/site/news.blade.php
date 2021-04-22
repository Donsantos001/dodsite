@extends('layout.app')

@section('nav-minor')

<section class="nav-minor-s">
    <div class="nav-m-con p-4 max-w-screen-2xl mx-auto">
        <div class="flex flex-wrap">
            <a href="" class="p-1 m-1 hover:bg-red-900 hover:text-white border-solid border-2 border-red-500 rounded-xl">Sasjkass</a>
            <a href="" class="p-1 m-1 hover:bg-red-900 hover:text-white border-solid border-2 border-red-500 rounded-xl">shjhsa</a>
            <a href="" class="p-1 m-1 hover:bg-red-900 hover:text-white border-solid border-2 border-red-500 rounded-xl">ydjnena</a>
            <a href="" class="p-1 m-1 hover:bg-red-900 hover:text-white border-solid border-2 border-red-500 rounded-xl">Sasjkass</a>
            <a href="" class="p-1 m-1 hover:bg-red-900 hover:text-white border-solid border-2 border-red-500 rounded-xl">shjhsa</a>
            <a href="" class="p-1 m-1 hover:bg-red-900 hover:text-white border-solid border-2 border-red-500 rounded-xl">ydjnena</a>
            <a href="" class="p-1 m-1 hover:bg-red-900 hover:text-white border-solid border-2 border-red-500 rounded-xl">Sasjkass</a>
            <a href="" class="p-1 m-1 hover:bg-red-900 hover:text-white border-solid border-2 border-red-500 rounded-xl">shjhsa</a>
            <a href="" class="p-1 m-1 hover:bg-red-900 hover:text-white border-solid border-2 border-red-500 rounded-xl">ydjnena</a>
            <a href="" class="p-1 m-1 hover:bg-red-900 hover:text-white border-solid border-2 border-red-500 rounded-xl">Sasjkass</a>
            <a href="" class="p-1 m-1 hover:bg-red-900 hover:text-white border-solid border-2 border-red-500 rounded-xl">shjhsa</a>
            <a href="" class="p-1 m-1 hover:bg-red-900 hover:text-white border-solid border-2 border-red-500 rounded-xl">ydjnena</a>
            <a href="" class="p-1 m-1 hover:bg-red-900 hover:text-white border-solid border-2 border-red-500 rounded-xl">Sasjkass</a>
            <a href="" class="p-1 m-1 hover:bg-red-900 hover:text-white border-solid border-2 border-red-500 rounded-xl">shjhsa</a>
            <a href="" class="p-1 m-1 hover:bg-red-900 hover:text-white border-solid border-2 border-red-500 rounded-xl">ydjnena</a>
            <a href="" class="p-1 m-1 hover:bg-red-900 hover:text-white border-solid border-2 border-red-500 rounded-xl">Sasjkass</a>
            <a href="" class="p-1 m-1 hover:bg-red-900 hover:text-white border-solid border-2 border-red-500 rounded-xl">shjhsa</a>
            <a href="" class="p-1 m-1 hover:bg-red-900 hover:text-white border-solid border-2 border-red-500 rounded-xl">ydjnena</a>
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
                        @for ($i = 0; $i < 9; $i++)
                            <div class="news-con p-2">
                                <div class="flex flex-col md:flex-row">
                                    <div class="md:w-1/2 p-2">
                                        <div class="news-img">
                                            {!! HTML::image('images/picture3.png') !!}
                                        </div>
                                    </div>
            
                                    <div class="md:w-1/2 p-2">
                                        <div class="news-det p-2">
                                            <p class="news-det-title">
                                                Lorem ipsum dolor sit, amet consectetur adipisicing.
                                            </p>
                                            <p class="py-2"><span class="rounded-full p-1 bg-red-600">BUSINESS MONEY</span> <span>12 May 1996(83382)</span></p>
                                            <p class="my-2">
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
                        @endfor
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
                <div class="lg:order-1 lg:row-span-1 2xl:row-span-1 lg:col-span-1 mb-5 lg:mb-0">
                    <div class="ad-img-con rounded-lg shadow-2xl overflow-hidden h-full">
                        {!! HTML::image('images/picture.png') !!}
                    </div>
                </div>

                <div class="lg:order-2 row-span-1 2xl:row-span-1 lg:col-span-1 rounded-lg shadow-2xl overflow-hidden mb-5 lg:mb-0">
                    <div class="add-title bg-red-600 p-3">
                        <p class="text-white text-lg">ADD TO DAY OF DUBAI</p>
                    </div>

                    <div class="news-ad-img-con">
                        <div class="add-f-line grid gap-4 2xl:gap-6 grid-cols-3 row-span-2">
                            <div class="add-item p-5">
                                <div>
                                    <div class="fa fa-book text-7xl text-white bg-red-600 rounded-full p-5"></div>
                                </div>
                                <p class="p-2 w-min mx-auto text-lg font-bold">ADD EVENT</p>
                            </div>

                            <div class="add-item p-5">
                                <div>
                                    <div class="fa fa-book text-7xl text-white bg-red-600 rounded-full p-5"></div>
                                </div>
                                <p class="p-2 w-min mx-auto text-lg font-bold">ADD EVENT</p>
                            </div>

                            <div class="add-item p-5">
                                <div>
                                    <div class="fa fa-book text-7xl text-white bg-red-600 rounded-full p-5"></div>
                                </div>
                                <p class="p-2 w-min mx-auto text-lg font-bold">ADD EVENT</p>
                            </div>

                            <div class="add-item p-5">
                                <div>
                                    <div class="fa fa-book text-7xl text-white bg-red-600 rounded-full p-5"></div>
                                </div>
                                <p class="p-2 w-min mx-auto text-lg font-bold">ADD EVENT</p>
                            </div>

                            <div class="add-item p-5">
                                <div>
                                    <div class="fa fa-book text-7xl text-white bg-red-600 rounded-full p-5"></div>
                                </div>
                                <p class="p-2 w-min mx-auto text-lg font-bold">ADD EVENT</p>
                            </div>

                            <div class="add-item p-5">
                                <div>
                                    <div class="fa fa-book text-7xl text-white bg-red-600 rounded-full p-5"></div>
                                </div>
                                <p class="p-2 w-min mx-auto text-lg font-bold">ADD EVENT</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="bg-gray-900 lg:order-3 row-span-2 2xl:row-span-2 lg:col-span-1 rounded-lg shadow-2xl pb-4 mb-5 lg:mb-0">
                    <div class="mx-8 2xl:mx-10 my-10">
                        <img class="w-8 md:w-9 2xl:w-20 h-8 md:h-9 2xl:h-20 rounded-full border-2 -ml-1 -mt-2 lg:-mt-4" src="images/update2.jpg" />
                        <h1 class="text-white text-xs md:text-base 2xl:text-2xl pl-11 md:pl-12 2xl:pl-24 -mt-8 md:-mt-10 2xl:-mt-16">Jonathan Walters</h1>
                        <h2 class="text-white text-xs md:text-base 2xl:text-2xl text-opacity-50 pl-11 md:pl-12 2xl:pl-24">Verified Graduate</h2>
                    </div>
                    <div class="-mt-8 mx-1 lg:mx-2">
                        <p class="text-white text-lg lg:text-xl 2xl:text-4xl font-semibold pt-1 px-6 2xl:px-8 lg:pl-5 lg:pr-8">The team was very supportive and kept me motivated</p>
                        <br />
                        <p class="text-white text-opacity-50 font-medium md:text-sm 2xl:text-3xl pl-6 lg:pl-5 pr-4 -mt-1 lg:mt-6 2xl:mt-2 2xl:px-8">“ I started as a total newbie with virtually no coding skills. I now work as a mobile engineer for a big company. This was one of the best investments I’ve made in myself. ”</p>
                        <br />
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium labore, porro nostrum blanditiis fuga quia, consequatur veniam fugit alias, ab at minima aliquid corporis maxime sint. Tempora est obcaecati nihil?</p>  
                    </div>
                </div>

                <div class="bg-gray-900 lg:order-4 row-span-1 2xl:row-span-1 lg:col-span-1 rounded-lg shadow-2xl overflow-hidden mb-5 lg:mb-0">
                    <div class="news-ad-img-con h-full">
                        {!! HTML::image('images/picture5.png') !!}
                    </div>
                </div>
            </div>
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

    <div class="news-preview-con max-w-screen-2xl lg:mx-auto px-4 pb-4">
        <div class="news-preview-inner-con flex flex-wrap rounded-lg shadow-2xl pt-4">
            <div class="news-con p-2 lg:w-1/5 mx-auto md:w-1/3">
                <div class="flex flex-col">
                    <div class="p-2">
                        <div class="news-img">
                        {!! HTML::image('images/update3.jpg') !!}
                        </div>
                    </div>

                    <div class="p-2">
                        <div class="news-det p-2">
                            <h6>TODAY <span class="p-1 bg-yellow-500">POLITICS</span></h6>
                            <p class="my-2">
                                Lorem ipsum dolor sit amet consectetur 
                                adipisicing elit. Aut minima explicabo 
                                earum beatae corrupti eligendi ex ea 
                            </p>
                            <a href="" class="text-yellow-500 text-sm font-bold"><div class="fa fa-leanpub"></div> READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="news-con p-2 lg:w-1/5 mx-auto md:w-1/3">
                <div class="flex flex-col">
                    <div class="p-2">
                        <div class="news-img">
                        {!! HTML::image('images/update3.jpg') !!}
                        </div>
                    </div>

                    <div class="p-2">
                        <div class="news-det p-2">
                            <h6>TODAY <span class="p-1 bg-yellow-500">POLITICS</span></h6>
                            <p class="my-2">
                                Lorem ipsum dolor sit amet consectetur 
                                adipisicing elit. Aut minima explicabo 
                                earum beatae corrupti eligendi ex ea 
                            </p>
                            <a href="" class="text-yellow-500 text-sm font-bold"><div class="fa fa-leanpub"></div> READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="news-con p-2 lg:w-1/5 mx-auto md:w-1/3">
                <div class="flex flex-col">
                    <div class="p-2">
                        <div class="news-img">
                        {!! HTML::image('images/update3.jpg') !!}
                        </div>
                    </div>

                    <div class="p-2">
                        <div class="news-det p-2">
                            <h6>TODAY <span class="p-1 bg-yellow-500">POLITICS</span></h6>
                            <p class="my-2">
                                Lorem ipsum dolor sit amet consectetur 
                                adipisicing elit. Aut minima explicabo 
                                earum beatae corrupti eligendi ex ea 
                            </p>
                            <a href="" class="text-yellow-500 text-sm font-bold"><div class="fa fa-leanpub"></div> READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="news-con p-2 lg:w-1/5 mx-auto md:w-1/3">
                <div class="flex flex-col">
                    <div class="p-2">
                        <div class="news-img">
                        {!! HTML::image('images/update3.jpg') !!}
                        </div>
                    </div>

                    <div class="p-2">
                        <div class="news-det p-2">
                            <h6>TODAY <span class="p-1 bg-yellow-500">POLITICS</span></h6>
                            <p class="my-2">
                                Lorem ipsum dolor sit amet consectetur 
                                adipisicing elit. Aut minima explicabo 
                                earum beatae corrupti eligendi ex ea 
                            </p>
                            <a href="" class="text-yellow-500 text-sm font-bold"><div class="fa fa-leanpub"></div> READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="news-con p-2 lg:w-1/5 mx-auto md:w-1/3">
                <div class="flex flex-col">
                    <div class="p-2">
                        <div class="news-img">
                        {!! HTML::image('images/update3.jpg') !!}
                        </div>
                    </div>

                    <div class="p-2">
                        <div class="news-det p-2">
                            <h6>TODAY <span class="p-1 bg-yellow-500">POLITICS</span></h6>
                            <p class="my-2">
                                Lorem ipsum dolor sit amet consectetur 
                                adipisicing elit. Aut minima explicabo 
                                earum beatae corrupti eligendi ex ea 
                            </p>
                            <a href="" class="text-yellow-500 text-sm font-bold"><div class="fa fa-leanpub"></div> READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>
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