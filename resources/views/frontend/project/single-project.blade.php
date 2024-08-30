<x-app-layout>
    <style>
        .video-popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            align-items: center;
            justify-content: center;
        }

        .video-container {
            position: relative;
            width: 90%;
            max-width: 800px;
            /* Adjust the maximum width as needed */
            max-height: 100%;
            height: 90%;
            /* Adjust the maximum height as needed */
        }

        #video {
            width: 100%;
            height: 100%;
        }

        .close-btn {
            width: 30px;
        }




        ul.timleine {
            --col-gap: 2rem;
            --row-gap: 2rem;
            --line-w: 0.25rem;
            display: grid;
            grid-template-columns: var(--line-w) 1fr;
            grid-auto-columns: max-content;
            column-gap: var(--col-gap);
            list-style: none;
            width: min(60rem, 90%);
            margin-inline: auto;
        }

        /* line */
        ul.timleine::before {
            content: "";
            grid-column: 1;
            grid-row: 1 / span 20;
            background: rgb(225, 225, 225);
            border-radius: calc(var(--line-w) / 2);
        }

        /* columns*/

        /* row gaps */
        ul.timleine li:not(:last-child) {
            margin-bottom: var(--row-gap);
        }

        /* card */
        ul.timleine li {
            grid-column: 2;
            --inlineP: 1.5rem;
            margin-inline: var(--inlineP);
            grid-row: span 2;
            display: grid;
            grid-template-rows: min-content min-content min-content;
        }

        /* date */
        ul.timleine li .date {
            --dateH: 3rem;
            height: var(--dateH);
            margin-inline: calc(var(--inlineP) * -1);

            text-align: center;
            background-color: var(--accent-color);

            color: white;
            font-size: 1.25rem;
            font-weight: 700;

            display: grid;
            place-content: center;
            position: relative;

            border-radius: calc(var(--dateH) / 2) 0 0 calc(var(--dateH) / 2);
        }

        /* date flap */
        ul.timleine li .date::before {
            content: "";
            width: var(--inlineP);
            aspect-ratio: 1;
            background: var(--accent-color);
            background-image: linear-gradient(rgba(0, 0, 0, 0.2) 100%, transparent);
            position: absolute;
            top: 100%;

            clip-path: polygon(0 0, 100% 0, 0 100%);
            right: 0;
        }

        /* circle */
        ul.timleine li .date::after {
            content: "";
            position: absolute;
            width: 2rem;
            aspect-ratio: 1;
            background: var(--bgColor);
            border: 0.3rem solid var(--accent-color);
            border-radius: 50%;
            top: 50%;

            transform: translate(50%, -50%);
            right: calc(100% + var(--col-gap) + var(--line-w) / 2);
        }

        /* title descr */
        ul.timleine li .title,
        ul.timleine li .descr {
            background: var(--bgColor);
            position: relative;
            padding-inline: 1.5rem;
        }

        ul.timleine li .title {
            overflow: hidden;
            padding-block-start: 1.5rem;
            padding-block-end: 1rem;
            font-weight: 500;
        }

        ul.timleine li .descr {
            padding-block-end: 1.5rem;
            font-weight: 300;
        }

        /* shadows */
        ul.timleine li .title::before,
        ul.timleine li .descr::before {
            content: "";
            position: absolute;
            width: 90%;
            height: 0.5rem;
            background: rgba(0, 0, 0, 0.5);
            left: 50%;
            border-radius: 50%;
            filter: blur(4px);
            transform: translate(-50%, 50%);
        }

        ul.timleine li .title::before {
            bottom: calc(100% + 0.125rem);
        }

        ul.timleine li .descr::before {
            z-index: -1;
            bottom: 0.25rem;
        }

        @media (min-width: 40rem) {
            ul.timleine {
                grid-template-columns: 1fr var(--line-w) 1fr;
            }

            ul.timleine::before {
                grid-column: 2;
            }

            ul.timleine li:nth-child(odd) {
                grid-column: 1;
            }

            ul.timleine li:nth-child(even) {
                grid-column: 3;
            }

            /* start second card */
            ul.timleine li:nth-child(2) {
                grid-row: 2/4;
            }

            ul.timleine li:nth-child(odd) .date::before {
                clip-path: polygon(0 0, 100% 0, 100% 100%);
                left: 0;
            }

            ul li:nth-child(odd) .date::after {
                transform: translate(-50%, -50%);
                left: calc(100% + var(--col-gap) + var(--line-w) / 2);
            }

            ul li:nth-child(odd) .date {
                border-radius: 0 calc(var(--dateH) / 2) calc(var(--dateH) / 2) 0;
            }
        }

        .credits {
            margin-top: 1rem;
            text-align: right;
        }

        .credits a {
            color: var(--color);
        }

        li:not(.active) .descr {
            display: none;
        }

        /* Add styles for the expanded state */
        li.active .descr {
            display: block;
        }
    </style>
    <!-- --------os-mainbanner--------- -->
    <div id="os-shortbanner">
        <div class="os-bg">
            <div class="container">
                <div class="row">
                    <div class="text-center">
                        <h3 class="text-white">{{ $project->name }}</h3>
                    </div>
                    </h3>
                </div>
            </div>
        </div>
    </div>



    <!-- -----os-our-latest-news3----- -->
    <div id="os-our-latest-news3">
        <div class="os-bg pb-5 pt-5">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <img src="{{ asset('' . $project->image) }}" class="img-fluid rounded-3" alt="">

                        {{-- <a href="" class=""><b class="pad">Läs mer</b><i
                                class=" fa-solid orange fa-arrow-right"></i></a> --}}
                    </div>

                    <div class="col-lg-8 col-md-8">
                        <div class="">
                            <h5 class="">{{ $project->name }}</h5>
                        </div>
                        {{-- <p class="orange"><b> {{ $project->created_at->format('d/m/Y') }}</b></p> --}}
                        <h5 class="mt-3">Fakta</h5>

                        @if(!empty($project->region))
                        <p style="margin-bottom: 5px;"><b>Plats: </b> {{ $project->region }}</p>
                        @endif
                        @if(!empty($project->types_of_project))
                        <p style="margin-bottom: 5px;"><b>Entreprenadform: </b> {{ $project->types_of_project }}</p>
                        @endif
                        @if(!empty($project->start))
                        <p style="margin-bottom: 5px;"><b>Projekt Start : </b> {{ \Carbon\Carbon::createFromFormat('Y-m-d', $project->start)->format('d-m-Y') }}</p>
                        @endif
                        @if(!empty($project->slut))
                        <p style="margin-bottom: 5px;"><b>Projekt Slut : </b> {{ \Carbon\Carbon::createFromFormat('Y-m-d', $project->slut)->format('d-m-Y') }}</p>
                        @endif
                        @if(!empty($project->beställare))
                        <p style="margin-bottom: 5px;"><b>Beställare : </b> {{ $project->beställare }}</p>
                        @endif
                        @if(!empty($project->storlek))
                        <p style="margin-bottom: 5px;"><b>Storlek: </b> {{ $project->storlek }}</p>
                        @endif
                        @if(!empty($project->projektledare))
                        <p style="margin-bottom: 5px;"><b>Projektledare: </b> {{ $project->projektledare }}</p>
                        @endif
                    </div>
                
                    <p class="" style="margin-top: 30px">{!! $project->description !!}</p>
                    @if ($project->enabledVideo == 1)
                        <div class="col-12 mt-5">
                            <div class="text-center">
                                <h3 class="orange">Project Video</h3>
                            </div>
                            <div class="row">
                                @foreach ($project->videoGalleries as $videoGallery)
                                    <div class="col-lg-4 col-md-4 mt-3">

                                        <div class="video-popup" id="popup" style="z-index: 9;">
                                            <div class="video-container">
                                                <button class="close-btn" id="closeBtn">&times;</button>
                                                <iframe id="video" width="560" height="315"
                                                    src="{{ $videoGallery->url }}" frameborder="0"
                                                    allowfullscreen></iframe>
                                            </div>
                                        </div>

                                        <div class="open-video-btn card"
                                            style="background: url('{{ asset('' . $videoGallery->banner) }}') no-repeat;    height: 250px;
                                            background-size: cover;
                                            text-align: center;    padding-top: 20px;">
                                            <img class="m-auto" height="100px" width="100px"
                                                src="{{ asset('frontend/img/Video Play Btn.png') }}" alt="">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    @if ($project->enabledTimleline == 1)
                        <div class="mt-5 text-center">
                            <h1 class="orange">{{ $project->timeline_name }}</h1>
                            <p>{{ $project->timeline_desciption }}</p>
                        </div>
                        <ul class="mt-5 timleine">
                            {{-- {{ $project->timelines }} --}}
                            @foreach ($project->timelines as $vs)
                                {{-- {{ $vs->blogs }} --}}
                                <li style="--accent-color:var(--primary-color)">
                                    <div class="date">{{ $vs->year }}</div>
                                    @foreach ($vs->blogs as $blog)
                                        <div class="title">{{ $blog->name }}</div>
                                        <div class="max-w-[200px] truncate">{!! $blog->description !!}
                                        </div>
                                        <a href="{{ route('blog.show', ['slug' => $blog->slug]) }}" class=""><b
                                                class="pad">Läs mer</b><i
                                                class=" fa-solid orange fa-arrow-right"></i></a>
                                    @endforeach
                                </li>
                            @endforeach
                        </ul>
                    @endif

                    {{-- <div class="col-lg-4 col-md-4"> --}}
                    {{-- @foreach ($blogs as $bg)
                            @if ($bg->id != $project->id)
                                <img src="{{ asset('' . $bg->image) }}" class="img-fluid pb-3"
                                    alt="">
                                <h5 class="">{{ $bg->name }}</h5> --}}
                    {{-- <p class="">Lorem ipsum dolor sit amet, Ipsum consectetur adipiscing elit, sed do
                                eiusmod.
                            </p> --}}
                    {{-- <p class="orange mb-0"><b>{{ $bg->created_at->format('d/m/Y') }}</b></p>
                                <a href="{{ route('blog.show', ['slug' => $bg->slug]) }}" class=""><b
                                        class="pad">Read More</b><i class=" fa-solid orange fa-arrow-right"></i></a>
                            @endif --}}
                    {{-- @endforeach --}}
                    @if($project->project_gallery != null)
                        <div>
                            <h2 class="">Projekt Galleri</h2>
                            @php
                                $paths = explode(', ', $project->project_gallery);
                            @endphp
                            <div class="row">
                                @foreach($paths as $img)
                                <div class="col-md-3 mt-3">
                                    <img class="img-fluid" style=" border-radius: 10px;" src="{{ asset('' . $img) }}">
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    </div>




    <!-- -------os-subscribe------ -->
    
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.js"></script> --}}

    <script>
        var elements = document.getElementsByClassName('truncate');

        // Loop through each element
        for (var i = 0; i < elements.length; i++) {
            var paragraph = elements[i];
            var words = paragraph.textContent.split(' ');

            // Check if the paragraph exceeds the word limit
            if (words.length > 150) {
                // Join the first 150 words back together
                var limitedText = words.slice(0, 70).join(' ');

                // Set the paragraph content to the limited text
                paragraph.textContent = limitedText +
                    '...'; // You can add an ellipsis (...) to indicate that the text is truncated.
            }
        }
        // script.js
        const popup = document.getElementById('popup');
        const closeBtn = document.getElementById('closeBtn');
        const openVideoBtn = document.querySelector('.open-video-btn');
        const videoIframe = document.getElementById('video');

        openVideoBtn.addEventListener('click', () => {

            const videoUrl = videoIframe.src;
            videoIframe.setAttribute('src', videoUrl);
            popup.style.display = 'flex';
        });

        closeBtn.addEventListener('click', () => {
            videoIframe.setAttribute('src', '');
            popup.style.display = 'none';
        });
        const timelineItems = document.querySelectorAll('ul li');

        // Add a click event listener to each timeline item
        timelineItems.forEach(item => {
            const title = item.querySelector('.title');
            const description = item.querySelector('.descr');

            // Add click event listener to the title element
            title.addEventListener('click', () => {
                // Toggle the "active" class to expand or collapse the card
                item.classList.toggle('active');

                // Hide or show the description based on the card's state
                if (item.classList.contains('active')) {
                    description.style.display = 'block';
                } else {
                    description.style.display = 'none';
                }
            });
        });
    </script>
</x-app-layout>
