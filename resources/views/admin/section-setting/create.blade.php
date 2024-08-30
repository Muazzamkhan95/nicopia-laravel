<x-base-layout>
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

                            <div class="card items-center p-3">
                                <div class="input-area">
                                    <h4 class="text-base text-slate-800 dark:text-slate-300 my-6">Slider Form</h4>
                                </div>
                                <form action="{{ route('section-settings.store') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-2 gap-5">
                                        <div class="">
                                            <div class="input-area">
                                                <label for="name" class="form-label">Section Name*</label>
                                                <input id="name" name="name" type="text" class="form-control"
                                                    placeholder="Name" required>
                                            </div>
                                            <div class="input-area">
                                                <label for="button" class="form-label">Section Button Name*</label>
                                                <input id="Button" name="button" type="text" class="form-control"
                                                    placeholder="Section Button Name">
                                            </div>



                                        </div>
                                        <div>
                                            <div class="input-area">
                                                <label for="heading" class="form-label">Section Heading*</label>
                                                <input id="heading" name="heading" type="text" class="form-control"
                                                    placeholder="Section Heading" required>
                                            </div>
                                            <div class="input-area">
                                                <label for="url" class="form-label">Section Redirect Link*</label>
                                                <input id="url" name="url" type="url" class="form-control"
                                                    placeholder="link">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="input-area">
                                            <label for="paragraph" class="form-label">Section Description</label>
                                            <textarea id="long_description" name="paragraph" class="form-control" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="input-area">
                                      <div class="filePreview">
                                        <label>
                                          <input type="file" class=" w-full hidden" name="image" value="">
                                          <span class="w-full h-[40px] file-control flex items-center custom-class">
                                              <span class="flex-1 overflow-hidden text-ellipsis whitespace-nowrap">
                                              <span id="placeholder" class="text-slate-400">Choose a file or drop it here...</span>
                                          </span>
                                          <span name="image" id="selectImage" class="file-name flex-none cursor-pointer border-l px-4 border-slate-200 dark:border-slate-700 h-full inline-flex items-center bg-slate-100 dark:bg-slate-900 text-slate-600 dark:text-slate-400 text-sm rounded-tr rounded-br font-normal">Browse</span>
                                          </span>
                                        </label>
                                        <div id="file-preview"><img id="displayImage" src="{{ asset('assets/images/all-img/thumb-1.png') }}"></div>
                                      </div>
                                      <div>
                                    <div>
                                        <div class="text-end">
                                            <button
                                                class="btn mt-2 inline-flex justify-center btn-dark dark:bg-slate-700 dark:text-slate-300 m-1 ">
                                                <span class="flex items-center">
                                                    <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2"
                                                        icon="ph:plus-bold"></iconify-icon>
                                                    <span>Submit</span>
                                                </span>
                                            </button>
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
    <script>
        $('#long_description').trumbowyg({
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
        // $('#long_description1').trumbowyg();
    </script>
</x-base-layout>