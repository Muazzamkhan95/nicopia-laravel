<x-base-layout>
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

                            <div class="card items-center p-3">
                                <div class="input-area">
                                    <h4 class="text-base text-slate-800 dark:text-slate-300 my-6">Slider Form</h4>
                                </div>
                                <form action="{{ route('sliders.store') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <label class="form-label">Select Slider Type</label>
                                    <select name="slider_type" id="slider_type" class="form-control form-control-lg">
                                        <option value="">Select Slider Type</option>
                                        <option value="0">Banner Type</option>
                                        <option value="1">Video Type</option>
                                    </select>
                                    <br>
                                    
                                    <div class="grid lg:grid-cols-2 md:grid-cols-1 grid-cols-1 gap-5">
                                        <div>
                                            <label for="heading1" class="form-label">Left Section</label>

                                            <div class="input-area">
                                                <label for="name" class="form-label">Slider Heading*</label>
                                                <input id="name" name="name" type="text" class="form-control"
                                                    placeholder="Heading One">
                                            </div>
                                            <div class="input-area">
                                                <label for="description" class="form-label">Description</label>
                                                <textarea name="description" class="form-control" id="description" cols="30" rows="10"></textarea>
                                            </div>
                                            <div class="input-area">
                                                <label for="url_name" class="form-label">Button Text</label>
                                                <input id="url_name" name="url_name" type="text"
                                                    class="form-control" placeholder="Button One">
                                            </div>
                                            <div class="input-area">
                                                <label for="url" class="form-label">Button Url</label>
                                                <input id="url" name="url" type="text" class="form-control"
                                                    placeholder="Button One">
                                            </div>
                                            <br>

                                        </div>
                                        <div>
                                            <label for="heading1">Right Section</label>
                                            <div class="input-area right-sec">
                                                <label for="heading1" class="form-label right-sec">Heading 2</label>
                                                <input id="heading1" name="heading1" type="text"
                                                    class="form-control" placeholder="Heading Two">
                                            </div>
                                            <div class="input-area">
                                                <label for="url_name1" class="form-label right-sec">Button Text</label>
                                                <input id="url_name1" name="url_name1" type="text"
                                                    class="form-control right-sec" placeholder="Button Text Two">
                                            </div>
                                            <div class="input-area">
                                                <label for="url1" class="form-label right-sec">Url Button</label>
                                                <input id="url1" name="url1" type="text" class="form-control right-sec"
                                                    placeholder="Button url Two">
                                            </div>
                                            <div class="filePreview">
                                                <label>
                                                    <input type="file" class=" w-full hidden" name="image">
                                                    <span
                                                        class="w-full h-[40px] file-control flex items-center custom-class">
                                                        <span
                                                            class="flex-1 overflow-hidden text-ellipsis whitespace-nowrap">
                                                            <span id="placeholder" class="text-slate-400">Choose a
                                                                file or drop it here...</span>
                                                        </span>
                                                        <span name="image"
                                                            class="file-name flex-none cursor-pointer border-l px-4 border-slate-200 dark:border-slate-700 h-full inline-flex items-center bg-slate-100 dark:bg-slate-900 text-slate-600 dark:text-slate-400 text-sm rounded-tr rounded-br font-normal">Browse</span>
                                                    </span>
                                                </label>
                                                <div id="file-preview">
                                                    <img src="{{ asset('assets/images/all-img/thumb-1.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="videourl" style="display: none">
                                                <label class="form-label">Video Background Url</label>
                                                <input type="file" name="videourl" value="" class="form-control form-control-lg">
                                                <span class="text-danger" style="font-size: 12px; color: red;">Video height size Max 720px</span>
                                            </div>
                                            <div class="text-end">
                                                <button
                                                    class="btn mt-2 inline-flex justify-center btn-dark dark:bg-slate-700 dark:text-slate-300 m-1 ">
                                                    <span class="flex items-center">
                                                        <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2"
                                                            icon="ph:plus-bold"></iconify-icon>
                                                        <span>Skicka in</span>
                                                    </span>
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </form>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $('#slider_type').on('change', function(){
            var val = $(this).val();
            if(val == 0){
                $('.filePreview').show();
                $('.right-sec').show();
                $('#heading1').val('');
                $('.videourl').hide();
            } else {
                $('.filePreview').hide();
                $('.right-sec').hide();
                $('#heading1').val('null');
                $('.videourl').show();

            }
        });
    </script>
</x-base-layout>
