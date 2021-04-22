@extends('layout.app')

<?php 
    use \Illuminate\Support\Str;
?>

@section('header')

<!-- header section -->
<section class="header-s">
      <div class="flex flex-col lg:grid lg:gap-4 2xl:gap-6 lg:grid-cols-3 2xl:row-span-1 2xl:pb-8 pt-4 px-3 h-full max-w-screen-2xl lg:mx-auto">
        <!-- Beginning of the component about Daniel Clifford -->
        <div class="lg:order-1 lg:row-span-1 2xl:row-span-1 h-full lg:col-span-2 rounded-lg overflow-hidden shadow-2xl mb-5 lg:mb-0">
          <div class="flex items-center w-100 h-full">
              <div class="swiper-container w-100 h-full">
                  <!-- Additional required wrapper -->
                  <div class="swiper-wrapper">
                      <!-- Slides -->
                      <?php $hPicId = 1 ?>
                      @foreach ($headlines as $headline)
                        <div class="swiper-slide rounded-lg shadow-xl overflow-hidden">
                            <div class="ad-con">
                                <div class="ad-text-con p-2 max-w-4xl md:absolute bottom-0 left-0 right-0 w-100 z-10 md:text-white">
                                    <h3 class="text-2xl">{{ $headline->headline }}</h3>
                                    <p class="text-sm">{{ Str::limit($headline->body, 300, '...') }}</p>
                                </div>
                                <div class="ad-img-con">
                                    {!! HTML::image('images/picture'.$hPicId.'.png') !!}
                                </div>
                            </div>
                        </div>
                        <?php $hPicId++ ?>
                      @endforeach
                  </div>

                  <!-- If we need navigation buttons -->
                  <div class="swiper-button-prev"></div>
                  <div class="swiper-button-next"></div>

                  <!-- If we need pagination -->
                  <div class="swiper-pagination"></div>
              </div>
          </div>
        </div>


        <div class="lg:order-2 lg:row-span-1 2xl:row-span-1 lg:col-span-1 rounded-lg shadow-2xl mb-5 lg:mb-0">
          <div class="ad-img-con rounded-lg shadow-xl overflow-hidden h-full">
            {!! HTML::image('images/picture2.png') !!}
          </div>
        </div>
      </div>
    </section>
    <!-- end of header section -->

@endsection





@section('news')
    <section class="news-s">
        <div class="max-w-screen-2xl lg:mx-auto lg:mt-3">
            <div class="sect-title bg-red-600 text-white px-3 py-2 ml-8 mr-auto w-5/12 lg:w-80 rounded-t-xl">
                <p>NEWS</p>
            </div>
        </div>

        <div class="flex flex-col lg:grid lg:gap-4 2xl:gap-6 lg:grid-cols-3 grid-rows-7 2xl:pb-8 pt-4 lg:pt-0 px-3 max-w-screen-2xl lg:mx-auto">
            <!-- Beginning of the component about Daniel Clifford -->
            <div class="lg:order-1 row-span-4 2xl:row-span-4 lg:col-span-2 mb-5 lg:mb-0 rounded-lg shadow-2xl overflow-hidden">
                <div class="news-main-con">
                    <div class="news-main px-2">
                        
                        @for ($i = 0; $i < 4; $i++)
                            <div class="news-con p-2">
                                <div class="flex flex-col md:flex-row">
                                    <div class="md:w-1/2 p-2">
                                        <div class="news-img">
                                            {!! HTML::image('images/picture3.png') !!}
                                        </div>
                                    </div>
            
                                    <div class="md:w-1/2 p-2">
                                        <div class="news-det">
                                            <p class="news-det-title text-xl">
                                                Lorem ipsum dolor sit, amet consectetur adipisicing.
                                            </p>
                                            <p class="py-2 text-sm"><span class="rounded-full p-1 bg-red-600 text-white">BUSINESS MONEY</span> <span>12 May 1996(83382)</span></p>
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
                        @endfor
                        
                    </div>
        
                    <div class="news-view-more">
                        <div class="fa fa-angle-down d-inline"></div>
                        <div class="d-inline">View More</div>
                    </div>
                </div>
            </div>
            <!-- Ending of the component about Daniel Clifford -->
            



             <!-- Beginning of the component about Jonathan Walters -->
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
            <!-- Ending of the component about Jonathan Walters -->



            <!-- Beginning of the component about Jonathan Walters -->
            <div class="lg:order-3 row-span-3 2xl:row-span-3 lg:col-span-1 rounded-lg shadow-2xl mb-5 lg:mb-0">
                <div class="">
                    <div class="flex flex-col">
                        <div class="news-main-con rounded-lg shadow-2xl overflow-hidden">
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
        
        
                            <div class="news-view-more">
                                <div class="fa fa-angle-down d-inline"></div>
                                <div class="d-inline">View More</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Ending of the component about Jonathan Walters -->




            <!-- Beginning of the component about Daniel Clifford 22222222222222-->
            <div class="lg:order-4 row-span-3 2xl:row-span-3 lg:col-span-2 rounded-lg shadow-2xl overflow-hidden mb-5 lg:mb-0">
                <div class="max-w-screen-2xl lg:mx-auto lg:mt-3">
                    <div class="sect-title bg-red-600 text-white px-3 py-2 ml-8 mr-auto w-5/12 lg:w-80 rounded-t-xl">
                        <p>EVENTS IN UAE</p>
                    </div>
                </div>

                <div class="news-main-con">
                    <div class="news-main px-2">
                        @for ($i = 0; $i < 3; $i++)
                            <div class="news-con p-2">
                                <div class="flex flex-col md:flex-row">
                                    <div class="md:w-1/2 p-2">
                                        <div class="news-img">
                                        {!! HTML::image('images/picture3.png') !!}
                                        </div>
                                        <p class="text-right text-sm">12 May 1996(83382)</p>
                                    </div>
            
                                    <div class="md:w-1/2 p-2">
                                        <div class="news-det p-2">
                                            <p class="news-det-title text-xl">
                                                Lorem ipsum dolor sit, amet consectetur adipisicing.
                                            </p>
                                            <p class="py-1"><span class="rounded-full p-1 bg-red-600 text-white">THEATRE</span></p>
                                            <p class="text-red-600 text-xs">Event : <span>{{ '22-02-20' }}</span></p>
                                            <p class="text-red-600 text-xs">Venue : <span>{{ '6, Autumn Conference Zone' }}</span></p>
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
                        @endfor
                    </div>
        
                    <div class="news-view-more">
                        <div class="fa fa-angle-down d-inline"></div>
                        <div class="d-inline">View More</div>
                    </div>
                </div>
            </div>
            <!-- Ending of the component about Daniel Clifford 2222222222222 -->



            <!-- Beginning of the component about Jonathan Walters -->
            <div class="bg-gray-900 lg:order-5 row-span-2 2xl:row-span-2 lg:col-span-1 rounded-lg shadow-2xl overflow-hidden mb-5 lg:mb-0">
                <div class="news-ad-img-con h-full">
                    {!! HTML::image('images/picture5.png') !!}
                </div>
            </div>
            <!-- Ending of the component about Jonathan Walters -->

            </div>
        </div>
    </section>

@endsection

@section('directory')

<section class="directory-s" id="directory">
      <div class="flex flex-col lg:grid lg:gap-4 2xl:gap-6 lg:grid-cols-8 2xl:row-span-2 2xl:pb-8 pt-4 px-3">
        <!-- Beginning of the component about Jonathan Walters -->
        <div class="lg:order-1 lg:row-span-1 2xl:row-span-1 lg:col-span-2 rounded-lg shadow-xl mb-5 lg:mb-0 overflow-hidden">
          <div class="decoration my-auto h-full">
              {!! HTML::image('images/dc.jpg') !!}
          </div>
        </div>
        <!-- Ending of the component about Jonathan Walters -->



        <!-- Beginning of the component about Daniel Clifford -->
        <div class="lg:order-2 lg:row-span-1 2xl:row-span-1 lg:col-span-6 rounded-lg shadow-xl mb-5 lg:mb-0 overflow-hidden">
            <div class="dir-main-con">
            <nav class="flex items-center bg-red-500 p-3 px-2 lg:py-0 flex-wrap">

                <button
                    class="text-white inline-flex p-3 hover:bg-gray-900 rounded lg:hidden ml-auto hover:text-white outline-none nav-toggler"
                    data-target="#navigation"
                >
                    <i class="material-icons">menu</i>
                </button>



                <div
                    class="hidden top-navbar w-full lg:inline-flex lg:flex-grow lg:w-auto"
                    id="navigation"
                >
                    <div
                    class="lg:inline-flex lg:flex-row lg:mr-auto lg:w-auto w-full lg:items-center items-start  flex flex-col lg:h-auto"
                    >
                        <a
                            href="#"
                            class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded font-bold items-center justify-center hover:bg-gray-900 hover:text-white"
                        >
                            <span>HOME</span>
                        </a>
                        <a
                            href="#"
                            class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded font-bold items-center justify-center hover:bg-gray-900 hover:text-white"
                        >
                            <span>ABOUT</span>
                        </a>
                        <a
                            href="#"
                            class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded font-bold items-center justify-center hover:bg-gray-900 hover:text-white"
                        >
                            <span>SERVICES</span>
                        </a>
                        <a
                            href="#"
                            class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded font-bold items-center justify-center hover:bg-gray-900 hover:text-white"
                        >
                            <span>NEWS</span>
                        </a>
                        <a
                            href="#"
                            class="lg:inline-flex lg:w-auto w-full px-3 py-2 rounded font-bold items-center justify-center hover:bg-gray-900 hover:text-white"
                        >
                            <span>EVENTS</span>
                        </a>
                    </div>
                </div>
            </nav>


            <div class="dir-con p-4">
                <div class="dir-cards-con-top flex md:flex-row flex-col">
                    <div class="dir-card-con md:w-1/3 p-3">
                        <div class="dir-card shadow-xl bg-blue-100 p-2">
                            <p class="dc-title text-md font-bold">
                                Fiverr
                            </p>

                            <div class="dir-card-middle flex flex-row">
                                <div class="dc-img-con w-1/4 my-auto">
                                    {!! HTML::image('images/update3.jpg') !!}
                                </div>

                                <div class="dc-details w-3/4 p-2">
                                    <p>Lorem ipsum dolor sit.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, quisquam!</p>
                                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                                </div>
                            </div>

                            <div class="dir-card-bottom flex flex-row">
                                <div class="dc-samp-con w-1/3 p-3">
                                    {!! HTML::image('images/update3.jpg') !!}
                                </div>

                                <div class="dc-samp-con w-1/3 p-3">
                                    {!! HTML::image('images/update3.jpg') !!}
                                </div>

                                <div class="dc-samp-con w-1/3 p-3">
                                    {!! HTML::image('images/update3.jpg') !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dir-card-con md:w-1/3 p-3">
                        <div class="dir-card shadow-xl bg-blue-100 p-2">
                            <p class="dc-title text-md font-bold">
                                Fiverr
                            </p>

                            <div class="dir-card-middle flex flex-row">
                                <div class="dc-img-con w-1/4 my-auto">
                                    {!! HTML::image('images/update3.jpg') !!}
                                </div>

                                <div class="dc-details w-3/4 p-2">
                                    <p>Lorem ipsum dolor sit.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, quisquam!</p>
                                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                                </div>
                            </div>

                            <div class="dir-card-bottom flex flex-row">
                                <div class="dc-samp-con w-1/3 p-3">
                                    {!! HTML::image('images/update3.jpg') !!}
                                </div>

                                <div class="dc-samp-con w-1/3 p-3">
                                    {!! HTML::image('images/update3.jpg') !!}
                                </div>

                                <div class="dc-samp-con w-1/3 p-3">
                                    {!! HTML::image('images/update3.jpg') !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dir-card-con md:w-1/3 p-3">
                        <div class="dir-card shadow-xl bg-blue-100 p-2">
                            <p class="dc-title text-md font-bold">
                                Fiverr
                            </p>

                            <div class="dir-card-middle flex flex-row">
                                <div class="dc-img-con w-1/4 my-auto">
                                    {!! HTML::image('images/update3.jpg') !!}
                                </div>

                                <div class="dc-details w-3/4 p-2">
                                    <p>Lorem ipsum dolor sit.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, quisquam!</p>
                                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                                </div>
                            </div>

                            <div class="dir-card-bottom flex flex-row">
                                <div class="dc-samp-con w-1/3 p-3">
                                    {!! HTML::image('images/update3.jpg') !!}
                                </div>

                                <div class="dc-samp-con w-1/3 p-3">
                                    {!! HTML::image('images/update3.jpg') !!}
                                </div>

                                <div class="dc-samp-con w-1/3 p-3">
                                    {!! HTML::image('images/update3.jpg') !!}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="dir-cards-con-bottom">
                    <div class="dir-bottom flex md:flex-row flex-col">
                        <div class="dc-samp-con md:w-1/4 p-3 shadow-xl">
                            {!! HTML::image('images/update3.jpg') !!}
                        </div>

                        <div class="dc-samp-con md:w-1/4 p-3 shadow-xl">
                            {!! HTML::image('images/update3.jpg') !!}
                        </div>

                        <div class="dc-samp-con md:w-1/4 p-3 shadow-xl">
                            {!! HTML::image('images/update3.jpg') !!}
                        </div>

                        <div class="dc-samp-con md:w-1/4 p-3 shadow-xl">
                            {!! HTML::image('images/update3.jpg') !!}
                        </div>
                    </div>
                </div>

                <div class="pagination">1 2 3 MORE</div>
            </div>

          </div>
        </div>
        <!-- Ending of the component about Daniel Clifford -->
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

        <div class="news-preview-con max-w-screen-2xl lg:mx-auto p-4">
            <div class="news-preview-inner-con flex flex-wrap rounded-lg shadow-xl">
                @for ($i = 0; $i < 5; $i++)
                    <div class="news-con p-2 lg:w-1/5 mx-auto md:w-1/3">
                        <div class="flex flex-col">
                            <div class="p-2">
                                <div class="news-img">
                                {!! HTML::image('images/picture9.png') !!}
                                </div>
                                <p class="text-sm">12 May 1996(83382)</p>
                            </div>

                            <div class="p-2">
                                <div class="news-det">
                                    <p class="text-lg">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    <p class="mt-2 text-sm">
                                        Lorem ipsum dolor sit amet consectetur 
                                        adipisicing elit. Aut minima explicabo 
                                        earum beatae corrupti eligendi ex ea 
                                        Lorem ipsum dolor sit amet consectetur 
                                        adipisicing.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>
@endsection



@section('business')


<section class="business-s" id="directory">
    <div class="flex flex-col lg:grid lg:gap-4 2xl:gap-6 lg:grid-cols-3 2xl:row-span-1 2xl:pb-8 pt-4 px-3 h-full max-w-screen-2xl lg:mx-auto">
        <div class="lg:order-1 lg:row-span-1 2xl:row-span-1 h-full lg:col-span-1 rounded-lg overflow-hidden shadow-2xl mb-5 lg:mb-0">
            <div class="max-w-screen-2xl lg:mx-auto lg:mt-3">
                <div class="sect-title bg-red-600 text-white px-3 py-2 ml-8 mr-auto w-5/12 lg:w-80 rounded-t-xl">
                    <p>OUR PARTNERS</p>
                </div>
            </div>

            <div class="partners-con flex flex-wrap rounded-lg shadow-xl p-3">
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
                @for ($i = 11; $i < 14; $i++)
                    <div class="partners-img-con mx-auto py-9 border-gray-500 border-solid rounded-2xl border-2 mb-2">
                        {!! HTML::image("images/picture".$i.".png") !!}
                    </div>
                @endfor
            </div>
        </div>

        <div class="lg:order-2 lg:row-span-1 2xl:row-span-1 h-full lg:col-span-2 rounded-lg overflow-hidden shadow-2xl mb-5 lg:mb-0">
             <div class="max-w-screen-2xl lg:mx-auto lg:mt-3">
                <div class="sect-title bg-red-600 text-white px-3 py-2 ml-8 mr-auto w-5/12 lg:w-80 rounded-t-xl">
                    <p>BUSINESS DIRECTORY</p>
                </div>
            </div>

            <div class="dir-search-con">
                <div class="mx-auto w-min pt-5">
                    <input class="border-2 border-gray-300 bg-white h-8 px-5 pr-2 rounded-lg text-sm focus:outline-none"
                    type="search" name="search" placeholder="Search">
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

    <div class="news-preview-con max-w-screen-2xl lg:mx-auto p-4">
        <div class="news-preview-inner-con flex flex-wrap rounded-lg shadow-xl">
            @for ($i = 0; $i < 5; $i++)
                <div class="news-con p-2 lg:w-1/5 mx-auto md:w-1/3">
                    <div class="flex flex-col">
                        <div class="p-2">
                            <div class="news-img">
                            {!! HTML::image('images/picture10.png') !!}
                            </div>
                        </div>

                        <div class="p-2">
                            <div class="news-det">
                                <p class="my-2 text-sm">MAY 18 2027(93232)</p>
                                <p class="text-lg">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                                <p class="my-2 text-sm">
                                    Lorem ipsum dolor sit amet consectetur 
                                    adipisicing elit. Aut minima explicabo 
                                    earum beatae corrupti eligendi ex ea Lorem, 
                                    ipsum dolor.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>

@endsection
