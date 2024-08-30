<x-base-layout>
    <style>
        #file-preview img {
            height: 6rem;
            width: 6rem;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('texteditor/trumbowyg.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('texteditor/ui/trumbowyg.min.css') }}">

    <div class="flex flex-col justify-between min-h-screen">
        <div>
            <!-- BEGIN: Header -->
            <!-- BEGIN: Header -->
            <x-dashboard.header></x-dashboard.header>
            <!-- END: Search Modal -->
            <!-- END: Header -->
            <!-- END: Header -->
            <div class="content-wrapper transition-all duration-150 ltr:ml-[248px] rtl:mr-[248px]" id="content_wrapper">
                <div class="page-content">
                    <div class="transition-all duration-150 container-fluid" id="page_layout">
                        <div id="content_layout">
                            <div class=" card">
                                <div class="card-header">
                                    <h4 class="card-title">Redigera projekt</h4>
                                </div>

                                <div class="card-body p-6">
                                    <div class="conten-box lg:col-span-9 col-span-12 h-full">
                                        <form id="add-category-form">
                                            <div>
                                                <input type="hidden" id="id" name="id" value="{{ $project->id }}">
                                                <div class="grid lg:grid-cols-3 md:grid-cols-3 grid-cols-1 gap-5">
                                                    <div class="col-span-2 grid lg:grid-cols-2 md:grid-cols-2 grid-cols-2 gap-5">
                                                        <div class="input-area">
                                                            <label for="name" class="form-label">Namn*</label>
                                                            <input id="name" type="text" class="form-control" placeholder="Prject Namn" value="{{ $project->name }}" required>
                                                        </div>
                                                        <div class="input-area">
                                                            <label for="name" class="form-label">Entreprenadform</label>
                                                            <input id="types_of_project" name="types_of_project" type="text" class="form-control" placeholder="Prject Type" value="{{ $project->types_of_project }}" required>
                                                        </div>
                                                        <div class="input-area">
                                                            <label for="name" class="form-label">Projekt Start</label>
                                                            <input id="start" name="start"
                                                                type="date" class="form-control"
                                                                placeholder="Project Start date"  value="{{ $project->start }}" required>
                                                        </div>
                                                        <div class="input-area">
                                                            <label for="name" class="form-label">Projekt Slut</label>
                                                            <input id="slut" name="slut"
                                                                type="date" class="form-control"
                                                                placeholder="Project Complete date" value="{{ $project->slut }}" required>
                                                        </div>
                                                        <div class="input-area">
                                                            <label for="storlek" class="form-label">Storlek:</label>
                                                            <input id="storlek" name="storlek" type="text"
                                                                class="form-control" placeholder="Project Storlek" value="{{ $project->storlek }}">
                                                        </div>
                                                        <div class="input-area">
                                                            <label for="beställare" class="form-label">Beställare:</label>
                                                            <input id="beställare" name="beställare" type="text"
                                                                class="form-control" placeholder="Project beställare" value="{{ $project->beställare }}">
                                                        </div>
                                                        <div class="input-area">
                                                            <label for="projektledare" class="form-label">Projektledare:</label>
                                                            <input id="projektledare" name="projektledare" type="text"
                                                                class="form-control" placeholder="Project Projektledare" value="{{ $project->projektledare }}">
                                                        </div>
                                                        <div class="input-area">
                                                            <label for="region" class="form-label">Plats:</label>
                                                            <input id="region" name="region" type="text" class="form-control" placeholder="Prject Plats" value="{{ $project->region }}" required>
                                                        </div>
                                                        <div class="input-area col-span-2">
                                                            <label for="trumbowyg-demo" class="form-label">Beskrivning*</label>
                                                            <textarea required name="description" id="trumbowyg-demo" cols="30" rows="10" class="form-control">{{ $project->description }}</textarea>
                                                        </div>
                                                        <div class="input-area col-span-2">
                                                            <label for="meta_tage" class="form-label">Metatagg(Separate With Comma)</label>
                                                            <textarea required name="meta_tage" id="meta_tage" cols="30" rows="5" class="form-control">{{ $project->meta_tage }}</textarea>
                                                        </div>

                                                    </div>
                                                    <div>
                                                        <div class="input-area filePreview">
                                                            <label required>
                                                                <label for="prjectimage" class="form-label">Bild ladda upp*</label>
                                                                <input type="file" id="prjectimage" class=" w-full hidden" name="image" value="{{ asset('' . $project->image) }}">
                                                                <span class="w-full h-[40px] file-control flex items-center custom-class">
                                                                    <span class="flex-1 overflow-hidden text-ellipsis whitespace-nowrap">
                                                                        <span id="placeholder" class="text-slate-400"><span></span></span>
                                                                    </span>
                                                                    <span class="file-name flex-none cursor-pointer border-l px-4 border-slate-200 dark:border-slate-700 h-full inline-flex items-center bg-slate-100 dark:bg-slate-900 text-slate-600 dark:text-slate-400 text-sm rounded-tr rounded-br font-normal">Browse</span>
                                                                </span>
                                                            </label>
                                                            <div id="file-preview">
                                                                <img width="width: 50px" src="{{ asset('' . $project->image) }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-span-3 card rounded-md bg-white dark:bg-slate-800 shadow-base">
                                                            <div class="card-body flex flex-col p-6">
                                                              <header class="flex mb-5 items-center border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
                                                                <div class="flex-1">
                                                                  <div class="card-title text-slate-900 dark:text-white">Projekt Galleri</div>
                                                                </div>
                                                              </header>
                                                              <div class="card-text h-full space-y-6">
                                                                <div class="input-area">
                                                                    
                                                                  <div class="multiFilePreview1">
                                                                    <label>
                                                                      <input type="file" class=" w-full hidden" name="multipicture[]" id="multipicture" multiple="multiple"
                                                                        accept=".jpg, .jpeg, .png">
                                                                      <span class="w-full h-[40px] file-control flex items-center custom-class">
                                                                        <span class="flex-1 overflow-hidden text-ellipsis whitespace-nowrap">
                                                                          <span id="placeholder" class="text-slate-400">Choose a file or drop it here...</span>
                                                                        </span>
                                                                        <span
                                                                          class="file-name flex-none cursor-pointer border-l px-4 border-slate-200 dark:border-slate-700 h-full inline-flex items-center bg-slate-100 dark:bg-slate-900 text-slate-600 dark:text-slate-400 text-sm rounded-tr rounded-br font-normal">Browse</span>
                                                                      </span>
                                                                    </label>
                                                                    <div id="file-preview1" class="grid lg:grid-cols-3 md:grid-cols-3" style="gap: 5px">
                                                                        @if($project->project_gallery != null)
                                                                            @php
                                                                                $paths = explode(', ', $project->project_gallery);
                                                                            @endphp
                                                                            @foreach($paths as $img)
                                                                                <div style="border-color: gray; padding: 5px;">
                                                                                    <img width="120px" src="{{ asset('' . $img) }}">
                                                                                    <a href="javascript:;" onclick="deleteImage(i = '{{$img}}')">Delete</a>
                                                                                </div>
                                                                            @endforeach
                                                                        @endif
                                                                    </div>
                                                                    <div id="file-preview" class="grid lg:grid-cols-3 md:grid-cols-3" style="display: grid;grid-template-columns: repeat(3, minmax(0, 1fr));"></div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>


                                                </div>
                                                
                                                <div class="grid lg:grid-cols-1 md:grid-cols-1 grid-cols-1 gap-5">
                                                    
                                                </div>
                                                <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 mt-4 gap-5">
                                                    <div>
                                                        <div class="input-area">
                                                            <div class="lg:col-span-3 md:col-span-2 col-span-1">
                                                                <h4 class="text-base text-slate-800 dark:text-slate-300 my-6">
                                                                    video galleri</h4>
                                                            </div>
                                                            {{-- <label class="form-label"></label> --}}
                                                            <div class="checkbox-area">
                                                                <label class="inline-flex items-center cursor-pointer">
                                                                    <input type="checkbox" name="enabledVideo" value="@if($project->enabledVideo == 1) {{ $project->enabledVideo }} @else 0 @endif" onchange="toggleVideoUrlsDiv()" id="enabledVideo" class="hidden" @if($project->enabledTimleline == 1) checked @else unchecked @endif>
                                                                    <span class="h-4 w-4 border flex-none border-slate-100 dark:border-slate-800 rounded inline-flex ltr:mr-3 rtl:ml-3 relative transition-all duration-150 bg-slate-100 dark:bg-slate-900">
                                                                        <img src="{{ asset('assets/images/icon/ck-white.svg') }}" alt="" class="h-[10px] w-[10px] block m-auto opacity-0"></span>
                                                                    <span class="text-slate-500 dark:text-slate-400 text-sm leading-6">Aktiverad video</span>
                                                                </label>
                                                            </div>
                                                            <div id="videoUrls">
                                                                @php $urlCounter = 0 @endphp
                                                                @if ($project->enabledVideo == 1)
                                                                @foreach ($project->videoGalleries as $video)
                                                                <div id="urlInput{{ $urlCounter }}" data-val="{{$video->id}}">
                                                                    <div class="grid lg:grid-cols-2 md:grid-cols-1 grid-cols-1 gap-5 mt-3">
                                                                        <input type="text" id="video_title{{ $video->id }}" name="video_title" class="form-control" placeholder="Ange videons titel" value="{{ $video->name }}">
                                                                        <input name="video_url" id="video_url{{ $video->id }}" type="text" class="form-control" placeholder="Ange videons URL" value="{{ $video->url }}">
                                                                    </div>
                                                                    <div class="grid lg:grid-cols-1 md:grid-cols-1 grid-cols-1 gap-5 mt-3">
                                                                        <div class="input-area">
                                                                            <div class="filePreview">
                                                                                <input type="file" id="banner{{ $video->id }}" class=" w-full" name="banner">
                                                                                <input type="hidden" id="existingbanner{{ $video->id }}" class=" w-full" name="banner" value="{{ $video->banner }}">
                                                                            </div>
                                                                            <div id="file-preview">
                                                                                <img id="bannerimg{{ $video->id }}" src="{{ asset('') . $video->banner }}" alt="">
                                                                            </div>
                                                                        </div>
    
                                                                        <textarea name="video_description" id="video_description{{ $video->id }}" cols="30" rows="4" class="form-control">{{ $video->description }}</textarea>
                                                                        <p>
                                                                            <a href="javascript:;" class="btn btn-md btn-dark mt-1" onclick="updateVideoUrl('{{ $video->id }}')">Uppdatering</a>
                                                                            <a href="javascript:;" class="btn btn-md btn-danger mt-1" onclick="deleteVideoUrl('{{ $video->id }}')">Radera</a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                @endforeach
                                                                <div class="mt-3" style="text-align: end">
                                                                    <a href="javascript:;" id="videoUrlsbtn" style="" class="btn btn-md btn-dark mt-1 w-25" onclick="addNewVideoUrl()">Lägg till video</a>
                                                                </div>
                                                                @else
                                                                <div class="mt-3" style="text-align: end">
                                                                    <a href="javascript:;" id="videoUrlsbtn" style="display: none;" class="btn btn-md btn-dark mt-1 w-25" onclick="addNewVideoUrl()">Lägg till video</a>
                                                                </div>
                                                                @endif
                                                            </div>

                                                        </div>

                                                    </div>
                                                    <div>
                                                        <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-5">
                                                            <div class="lg:col-span-3 md:col-span-2 col-span-1">
                                                                <h4 class="text-base text-slate-800 dark:text-slate-300 my-6">
                                                                    Tidslinje</h4>
                                                            </div>
                                                        </div>
                                                        <div class="input-area">
                                                            {{-- <label class="form-label">Enabled Timeline</label> --}}
                                                            <div class="checkbox-area">
                                                                <label class="inline-flex items-center cursor-pointer">
                                                                    <input type="checkbox" onchange="toggletimelineDiv()" id="enabledTimleline" name="enabledTimleline" class="hidden" value="@if($project->enabledTimleline == 1) {{ $project->enabledTimleline }} @else 0 @endif" name="enabledTimleline" @if($project->enabledTimleline == 1) checked @else unchecked @endif>
                                                                    <span class="h-4 w-4 border flex-none border-slate-100 dark:border-slate-800 rounded inline-flex ltr:mr-3 rtl:ml-3 relative transition-all duration-150 bg-slate-100 dark:bg-slate-900">
                                                                    <img src="{{ asset('assets/images/icon/ck-white.svg') }}" alt="" class="h-[10px] w-[10px] block m-auto opacity-0"></span>
                                                                    <span class="text-slate-500 dark:text-slate-400 text-sm leading-6">Aktiverad tidslinje</span>
                                                                </label>
                                                            </div>
                                                            <span style="font-size: 10px; color: red;">Inaktiverad tar bort tidslinjerna</span>
                                                            @if ($project->enabledTimleline == 1)
                                                            <div id="timeline" style="">
                                                                <label for="title" class="form-label">Title</label>
                                                                <input type="text" id="timeline_name" name="timeline_name" value="{{ $project->timeline_name }}" class="form-control" placeholder="Ange tidslinjens titel">
                                                                <label for="timeline_desciption" class="form-label">Description</label>
                                                                <textarea name="timeline_desciption" id="timeline_desciption" cols="30" rows="4" class="form-control">{{ $project->timeline_desciption }}</textarea>
                                                                @php
                                                                $counter = 0;
                                                                @endphp
                                                                @foreach ($project->timelines as $item)
                                                                @php
                                                                $counter = $item->id;
                                                                @endphp
                                                                <p class="mt-3">Lägg till nytt objekt</p>
                                                                <div id="timeUrl{{ $counter }}">
                                                                    <div class="grid lg:grid-cols-1 md:grid-cols-1 grid-cols-1 gap-5 mt-3">
                                                                        <input type="text" id="year{{ $item->id }}" name="year" value="{{ $item->year }}" class="form-control" placeholder="Ange år 2017, 2018, 2019, 2020">
                                                                    </div>
                                                                    <div>
                                                                        <label for="blogs{{ $counter }}" class="form-label">Blog</label>
                                                                        <select id="blogs{{$item->id}}" name="blogs{{ $counter }}[]" class="select2 form-control w-full mt-2 py-2" multiple="multiple">
                                                                        <option value="option1" class="inline-block font-Inter font-normal text-sm text-slate-600">Select Blog</option>
                                                                        @foreach ($blogs as $blog)
                                                                            @php
                                                                                $isSelected = in_array($blog->id, $project->blogTimeline->pluck('blog_id')->toArray());
                                                                            @endphp
                                                                            <option {{ $isSelected ? 'selected' : '' }} value="{{ $blog->id }}" class="inline-block font-Inter font-normal text-sm text-slate-600">
                                                                                {{ $blog->name }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                        <br>
                                                                        <p class="mt-4">
                                                                            <a href="javascript:;" class="btn btn-md btn-dark mt-1" onclick="updateTimeline({{ $item->id }})">Upate</a>
                                                                            <a href="javascript:;" class="btn btn-md btn-danger mt-1" onclick="deleteTimeLine({{ $item->id }})">Radera</a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- @php $counter++ @endphp --}}
                                                            @endforeach
                                                        </div>
                                                        <div class="mt-3" style="text-align: end">
                                                            <a href="javascript:;" id="addNewTimelinebtn" class="btn btn-md btn-dark mt-1" onclick="addNewTimeline()">Lägg till ny tidslinje</a>
                                                        </div>
                                                        @else
                                                        <div id="timeline" style="display: none;">
                                                            <label for="title" class="form-label">Title</label>
                                                            <input type="text" id="timeline_name" name="timeline_name" class="form-control" placeholder="Ange tidslinjens titel">
                                                            <label for="timeline_desciption" class="form-label">Description</label>
                                                            <textarea name="timeline_desciption" id="timeline_desciption" cols="30" rows="4" class="form-control"></textarea>

                                                        </div>
                                                        @endif

                                                    </div>
                                                    <div class="mt-3 text-end" style="text-align: end;">
                                                        <a href="javascript:;" id="addNewTimelinebtn" class="btn btn-md btn-dark mt-1" style="display: none;" onclick="addNewTimeline()">Lägg till ny tidslinje</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-6 space-x-3 text-right">
                                                <button type="submit" href="javascript:;" class="btn btn-dark" type="button">+ Uppdatering</button>
                                            </div>

                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BEGIN: Footer For Desktop and tab -->
    <x-dashboard.footer></x-dashboard.footer>
    <!-- END: Footer For Desktop and tab -->


    </div>
    

    <script>
        function deleteImage(i){
            $.ajax({
                url: '/project/galllery/image/'+ '{{ $project->id }}', // Replace with your actual backend URL
                method: 'post',
                data: {
                    name: i
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {

                    // Clear the existing file previews
                    $('#file-preview1').html('');

                    // Split the updated image names and recreate the file previews
                    console.log(response);
                    var paths = response.split(', ');
                    if (response == '') {
                        // If there are no image names, append an empty div
                        $('#file-preview1').append('<div id="file-preview"></div>');
                    } else {
                        // Append image previews
                        for (var i = 0; i < paths.length; i++) {
                            var imgDiv = $('<div>').attr('style', 'border-color: gray; padding: 5px;');
                            var img = $('<img>').attr('width', '120px').attr('src', '{{ asset('') }}' + paths[i]);
                            var deleteLink = $('<a>').attr('href', 'javascript:;').text('Radera').click(function() {
                                deleteImage(paths[i]);
                            });

                            imgDiv.append(img);
                            imgDiv.append(deleteLink);
                            $('#file-preview1').append(imgDiv);
                        }
                    }
                    
                },
                error: function(error) {
                    console.error('Error submitting form:', error);
                    // Handle error here
                }
            });
        }
        function updateVideoUrl(val){
            var title = $('#video_title'+val).val();
            var url = $('#video_url'+val).val();
            var banner = $('#banner'+val)[0];
            var banner1 = banner.files[0];
            if(banner1 == undefined){
                banner1 = $('#existingbanner'+val).val();
            }
            // alert(banner1);
            var description = $('#video_description'+val).val();
            var formData = new FormData();
            formData.append('video_title', title);
            formData.append('video_url', url);
            formData.append('image', banner1);
            formData.append('description', description);
            
            console.log(formData);
            // $banner = value.files[0];

            $.ajax({
                url: '/video/update/' +val, // Replace with your actual backend URL
                method: 'POST',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                processData: false,
                contentType: false,
                success: function(response) {
                    var url = '/';
                    var newBannerUrl = url + response.banner;

                    // Update the 'src' attribute of the 'banner1' image element
                    $('#bannerimg'+val).attr('src', newBannerUrl);
                },
                error: function(error) {
                    console.error('Error submitting form:', error);
                    // Handle error here
                }
            });
            

        }
        function updateTimeline(val){
            var year = $('#year'+val).val();
            var blogs = $('#blogs'+val).val();
            // alert(blogs);
            var dataToSend = {
                year: year,
                blogs: blogs
            };

            
            console.log(dataToSend);
            // $banner = value.files[0];

            $.ajax({
                url: '/timeline/update/' +val, // Replace with your actual backend URL
                method: 'POST',
                data: dataToSend, // Send the data as JSON
                dataType: 'json', // Expect JSON response
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    
                },
                error: function(error) {
                    console.error('Error submitting form:', error);
                    // Handle error here
                }
            });
            

        }
        function deleteTimeLine(val){
            var id=val;
            $.ajax({
                url: '/timeline/destroy/' + id, // Replace with your actual backend URL
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                   
                },
                error: function(error) {
                    console.error('Error submitting form:', error);
                    // Handle error here
                }
            });
            

        }
        function deleteVideoUrl(val){
            var id=val;
            $.ajax({
                url: '/video/destroy/' + id, // Replace with your actual backend URL
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    var dataValToRemove = val;
                    var elementsToRemove = $('[data-val="' + dataValToRemove + '"]');
                    elementsToRemove.remove();
                },
                error: function(error) {
                    console.error('Error submitting form:', error);
                    // Handle error here
                }
            });
            

        }
        let timelineItem = [];
        
        function toggletimelineDiv() {
            var checkbox = document.getElementById("enabledTimleline");
            var addNewTimelinebtn = document.getElementById("addNewTimelinebtn");
            var divElement = $('#timeline');

            if (checkbox.checked) {
                $('#enabledTimleline').val(1);

                divElement.css('display', 'block');
                addNewTimelinebtn.style.display = "inline";

            } else {
                $('#enabledTimleline').val(0);

                divElement.css('display', 'none');
                addNewTimelinebtn.style.display = "none";
                divElement.empty();
                divElement.append(`<label for="title" class="form-label">Title</label>
                                                                <input type="text" id="timeline_name"
                                                                    name="timeline_name" class="form-control"
                                                                    placeholder="Ange tidslinjens titel">
                                                                <label for="timeline_desciption"
                                                                    class="form-label">Description</label>
                                                                <textarea name="timeline_desciption" id="timeline_desciption" cols="30" rows="4" class="form-control"></textarea>
`); // Clear the content when hiding
            }
        }
        @if($project->enabledTimleline == 1)
        @if(empty($project->timelines))
        let counter = {{ $counter }} + 1;
        @else
        let counter = {{ $counter }};
        @endif
        @else
        let counter = 0;
        @endif

        function addNewTimeline() {
            var divElement = document.getElementById("timeline");
            var timeUrl = "timeUrl" + counter;
            timelineItem.push();
            // Create a new <div> element for each URL input
            var newDiv = document.createElement("div");
            newDiv.setAttribute("id", timeUrl);

            // HTML content to be appended
            var htmlContent = '<p class="mt-3">Lägg till nytt objekt</p>';
            htmlContent += '<div class="grid lg:grid-cols-1 md:grid-cols-1 grid-cols-1 gap-5 mt-3">';
            htmlContent +=
                '<input type="text" oninput="updateTimlineDataArray(' + counter +
                ', \'year\', this.value)" name="year" class="form-control" placeholder="Enter Year 2017, 2018, 2019, 2020">';
            htmlContent += '</div>';
            htmlContent += '<div>';
            htmlContent += '<label for="blogs' + counter + '" class="form-label">Blog</label>';
            htmlContent += '<select oninput="updateTimlineDataArray(' + counter +
                ', \'blogs\', getSelectedValues(this))" name="blogs' + counter + '[]" id="blogs' + counter +
                '" class="select2 form-control w-full mt-2 py-2" multiple="multiple">';
            htmlContent +=
                '      <option value="option1" class=" inline-block font-Inter font-normal text-sm text-slate-600">Select Blog</option>';
            htmlContent += '@foreach ($blogs as $blog)';
            htmlContent +=
                '<option value="{{ $blog->id }}" class=" inline-block font-Inter font-normal text-sm text-slate-600">{{ $blog->name }}</option>';
            htmlContent += '@endforeach';
            htmlContent += '</select>';
            htmlContent +=
                '<p class="mt-4"><a href="javascript:;" class="btn btn-md btn-danger mt-1" onclick="removeTimeLine(\'' +
                timeUrl + '\')">Avlägsna</a></p>';
            htmlContent += '</div>';
            htmlContent += '</div>';

            newDiv.innerHTML = htmlContent;

            // Append the new <div> element to the main div
            counter++;
            divElement.appendChild(newDiv);

            // Initialize Select2 on the dynamically added select element
            $(newDiv).find('.select2').select2();
            timelineItem.push({
                year: "",
                blogs: ""
            });
        }

        function updateTimlineDataArray(index, field, value) {
            if (timelineItem[index]) {
                timelineItem[index][field] = value;
            }
            console.log(timelineItem);
        }

        function toggleVideoUrlsDiv() {
            var checkbox = document.getElementById("enabledVideo");
            var videoUrlsbtn = document.getElementById("videoUrlsbtn");
            var divElement = $('#videoUrls');
            if (checkbox.checked) {
                $('#enabledVideo').val(1);
                divElement.css('display', 'block');
                videoUrlsbtn.style.display = "inline";

            } else {
                $('#enabledVideo').val(0);
                divElement.css('display', 'none');
                videoUrlsbtn.style.display = "none";
                divElement.empty();
                divElement.append(``); // Clear the content when hiding
            }
        }
        @if($project->enabledVideo == 1)
        let urlCounter = {{ $urlCounter}};
        @else
        let urlCounter = 0;
        @endif
        var videoDataArray = [];

        function addNewVideoUrl() {
            // alert({{ $urlCounter}});
            var divElement = document.getElementById("videoUrls");
            var inputId = "urlInput" + urlCounter;
            // Create a new <div> element for each URL input
            var newDiv = document.createElement("div");
            newDiv.setAttribute("id", inputId);
            // HTML content to be appended
            var htmlContent = '<div class="grid lg:grid-cols-2 md:grid-cols-1 grid-cols-1 gap-5 mt-3">';
            htmlContent +=
                '<input type="text" oninput="updateVideoDataArray(' + urlCounter +
                ', \'title\', this.value)" name="video_title" class="form-control" placeholder="Ange videons titel"><input name="video_url" oninput="updateVideoDataArray(' +
                urlCounter + ', \'url\', this.value)" type="text" class="form-control" placeholder="Ange videons URL">';
            htmlContent += '</div>';
            htmlContent += '<div class="grid lg:grid-cols-1 md:grid-cols-1 grid-cols-1 gap-5 mt-3">';
            htmlContent += '<div class="input-area">';
            htmlContent += '<div class="filePreview">';
            htmlContent += '<input type="file" onchange="updateVideoDataArray(' +
                urlCounter +
                ', \'banner\', this)" class=" w-full" name="banner">';
            
            htmlContent += '</div>';
            htmlContent += '<div id="file-preview"></div>';
            htmlContent += '</div>';
            htmlContent +=
                '<textarea oninput="updateVideoDataArray(' + urlCounter +
                ', \'description\', this.value)" name="video_description" id="" cols="30" rows="4" class="form-control"></textarea>';
            htmlContent += '<p><a href="javascript:;" class="btn btn-md btn-danger mt-1" onclick="removeVideoUrl(\'' +
                inputId + '\')">Avlägsna</a></p>';
            htmlContent += '</div>';


            newDiv.innerHTML = htmlContent;
            urlCounter++;
            // Append the new <div> element to the main div
            divElement.appendChild(newDiv);


            // Send data to the server using AJAX
            videoDataArray.push({
                title: "",
                url: "",
                description: "",
                banner: ""
            });

        }

        function getSelectedValues(selectElement) {
            var selectedValues = [];
            for (var i = 0; i < selectElement.options.length; i++) {
                if (selectElement.options[i].selected) {
                    selectedValues.push(selectElement.options[i].value);
                }
            }
            return selectedValues;
        }

        function updateVideoDataArray(index, field, value) {
            if (field === 'banner') {
                // For the 'banner' field, directly push the selected file
                var formData = new FormData();
                formData.append('image', value.files[0]);

                // $banner = value.files[0];

                $.ajax({
                    url: '/save/image', // Replace with your actual backend URL
                    method: 'POST',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        videoDataArray[index][field] = response.image;
                        console.log('Form submitted successfully!', response);
                        // You can perform actions based on the response here
                    },
                    error: function(error) {
                        console.error('Error submitting form:', error);
                        // Handle error here
                    }
                });
                // alert(value.files[0]);
            } else if (videoDataArray[index]) {
                videoDataArray[index][field] = value;
            }
            console.log(videoDataArray);
        }

        function removeVideoUrl(inputId) {
            var divToRemove = document.getElementById(inputId);
            if (divToRemove) {
                divToRemove.parentNode.removeChild(divToRemove);
            }
            var indexToRemove = parseInt(inputId.replace("urlInput", ""));
            videoDataArray.splice(indexToRemove, 1);
            console.log(videoDataArray);

        }

        function removeTimeLine(timeUrl) {
            var divToRemove = document.getElementById(timeUrl);
            if (divToRemove) {
                divToRemove.parentNode.removeChild(divToRemove);
            }
            var indexToRemove = parseInt(timeUrl.replace("timeUrl", ""));
            videoDataArray.splice(indexToRemove, 1);
            console.log(videoDataArray);
        }
        
        var mfiles = '';
        var selectedFiles = []; // Separate array to store selected files
        $(".multiFilePreview1 input").on("change", function () {
        // $(".multiFilePreview1 #file-preview").empty(); // clear any existing previews
            mfiles = $(this)[0].files;        
            var count = this.files.length;
            $(".multiFilePreview1 #placeholder").text(count + " file(s) selected");

                for (var i = 0; i < count; i++) {
                    var file = this.files[i];
                    selectedFiles.push(file); // Add the file to the selected files array
                    var reader = new FileReader();

                    reader.onload = (function (file) {
                        return function (event) {
                            var img = $("<img>").attr("src", event.target.result);
                            var removeLink = $("<a href='#'>Radera</a>").click(function () {
                                // Remove the corresponding file from the selected files array
                                selectedFiles = selectedFiles.filter(function (item) {
                                    return item !== file;
                                });
                                // Re-render the previews after removing the image
                                renderPreviews();
                                return false; // Prevent anchor link navigation
                            });

                            var imageContainer = $("<div>").append(img, removeLink);

                            $(".multiFilePreview1 #file-preview").append(imageContainer);
                            
                        };
                    })(file);
                    
                    reader.readAsDataURL(file);
                    console.log(selectedFiles);
                }

                    function renderPreviews() {
                        $(".multiFilePreview1 #file-preview").empty();
                        if(selectedFiles.length == 0){
                            var placeholderText = " Choose a file or drop it here...";
                            $(".multiFilePreview1 #placeholder").text(placeholderText);
                        }
                        for (var i = 0; i < selectedFiles.length; i++) {
                            var file = selectedFiles[i];
                            var reader = new FileReader();

                            reader.onload = (function (file) {
                                return function (event) {
                                    var img = $("<img>").attr("src", event.target.result);
                                    var removeLink = $("<a href='#'>Radera</a>").click(function () {
                                        // Remove the corresponding file from the selected files array
                                        selectedFiles = selectedFiles.filter(function (item) {
                                            return item !== file;
                                        });
                                        // Re-render the previews after removing the image
                                        renderPreviews();
                                        return false; // Prevent anchor link navigation
                                    });

                                    var imageContainer = $("<div>").append(img, removeLink);

                                    $(".multiFilePreview1 #file-preview").append(imageContainer);
                                };
                            })(file);

                            reader.readAsDataURL(file);
                        }
                    }
            });
        $('#add-category-form').submit(function(e) {
            e.preventDefault();
            // if ($('#prjectimage')[0].files[0] == null) {
            //     alert("Please Choose Project Image");
            // } else {
            var formData = new FormData();
            var id = $('#id').val();
            var formData = new FormData();
            formData.append('id', $('#id').val());
            formData.append('image', $('#prjectimage')[0].files[0]);
            formData.append('name', $('#name').val());
            // formData.append('line_of_business', $('#line_of_business').val());
            formData.append('types_of_project', $('#types_of_project').val());
            formData.append('region', $('#region').val());
            formData.append('start', $('#start').val());
            formData.append('slut', $('#slut').val());
            formData.append('beställare', $('#beställare').val());
            formData.append('storlek', $('#storlek').val());
            formData.append('meta_tage', $('#meta_tage').val());
            formData.append('projektledare', $('#projektledare').val());
            formData.append('description', $('#trumbowyg-demo').val());
            formData.append('videoDataArray', JSON.stringify(videoDataArray));
            formData.append('enabledVideo', $('#enabledVideo').val());
            formData.append('enabledTimleline', $('#enabledTimleline').val());
            formData.append('timeline_name', $('#timeline_name').val());
            formData.append('timeline_desciption', $('#timeline_desciption').val());
            formData.append('timelineItem', JSON.stringify(timelineItem));
            for (var i = 0; i < mfiles.length; i++) {
                formData.append('project_gallery[]', mfiles[i]); // Use '[]' to allow multiple files with the same field name
            }
            $.ajax({
                url: '{{ route('projects.upda', $project->id) }}', // Replace with your actual backend URL
                method: 'post',
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    location.reload();
                    console.log('Form submitted successfully!', response);
                    // You can perform actions based on the response here
                },
                error: function(error) {
                    console.error('Error submitting form:', error);
                    // Handle error here
                }
            });

            // }

        });
    </script>
    <script>
        $('#trumbowyg-demo').trumbowyg({
            btns: [
                ['viewHTML'],
                ['undo', 'redo'], // Only supported in Blink browsers
                ['formatting'],
                ['strong', 'em', 'del'],
                ['superscript', 'subscript'],
                ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
                ['unorderedList', 'orderedList'],
                ['horizontalRule'],
                ['removeformat'],
                ['fullscreen']
            ]
        });
        $('#trumbowyg-demo').trumbowyg();
    </script>
</x-base-layout>