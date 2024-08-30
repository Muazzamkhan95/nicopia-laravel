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

                            <div class=" md:flex justify-between items-center">
                                <div>



                                    <!-- BEGIN: Breadcrumb -->
                                    <div class="mb-5">
                                        <ul class="m-0 p-0 list-none">
                                            <li
                                                class="inline-block relative top-[3px] text-base text-primary-500 font-Inter ">
                                                <a href="index.html">
                                                    <iconify-icon icon="heroicons-outline:home"></iconify-icon>
                                                    <iconify-icon icon="heroicons-outline:chevron-right"
                                                        class="relative text-slate-500 text-sm rtl:rotate-180"></iconify-icon>
                                                </a>
                                            </li>
                                            <li class="inline-block relative text-sm text-primary-500 font-Inter ">
                                                Pages
                                                <iconify-icon icon="heroicons-outline:chevron-right"
                                                    class="relative top-[3px] text-slate-500 rtl:rotate-180"></iconify-icon>
                                            </li>
                                            <li
                                                class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white">
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- END: BreadCrumb -->
                                </div>
                                <div class="flex flex-wrap ">

                                    <a href="pages/create"
                                        class="btn inline-flex justify-center btn-dark dark:bg-slate-700 dark:text-slate-300 m-1 ">
                                        <span class="flex items-center">
                                            <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2"
                                                icon="ph:plus-bold"></iconify-icon>
                                            <span>Lägg till Tjänster</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="grid xl:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-5">
                                @foreach ($pages as $page)
                                    <div style=""
                                        class="card rounded-md shadow-base custom-class card-body p-6">
                                        <header class="flex justify-between items-end">
                                            <div class="flex space-x-4 items-center rtl:space-x-reverse">
                                                <div class="font-medium text-base leading-6">
                                                    <div
                                                        class="dark:text-slate-200 text-slate-900 max-w-[260px] truncate">
                                                        {{ $page->name }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="dropstart relative">
                                                    <button class="inline-flex justify-center items-center"
                                                        type="button" id="tableDropdownMenuButton3"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <iconify-icon class="text-xl ltr:ml-2 rtl:mr-2"
                                                            icon="heroicons-outline:dots-vertical"></iconify-icon>
                                                    </button>
                                                    <ul
                                                        class="dropdown-menu min-w-max absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700 shadow z-[2] float-left overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                                        <li>
                                                            <a href="{{ route('pages.edit', $page->id) }}"
                                                                class="hover:bg-slate-900 dark:hover:bg-slate-600 dark:hover:bg-opacity-70 hover:text-white w-full border-b border-b-gray-500 border-opacity-10 px-4 py-2 text-sm dark:text-slate-300 last:mb-0 cursor-pointer first:rounded-t last:rounded-b flex space-x-2 items-center capitalize rtl:space-x-reverse">
                                                                <iconify-icon
                                                                    icon="clarity:note-edit-line"></iconify-icon>
                                                                <span>Edit</span></a>

                                                        </li>
                                                        <li>
                                                            <form action="{{ route('pages.destroy', $page->id) }}"
                                                                method="POST" style="display: inline-block">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger"
                                                                    onclick="return confirm('Are you sure?')">Delete</button>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </header>
                                        <div class="text-slate-600 dark:text-slate-400 text-sm pt-4 pb-8"></div>
                                       
                                        <p>Section Assign</p>
                                        <div class="text-xs mt-3 mb-1 font-medium">
                                            @foreach($section as $name)
                                            {{ $name }},
                                            @endforeach
                                        </div>

                                    </div>
                                @endforeach

                            </div>


                            <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                                id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                <div class="modal-dialog relative w-75 pointer-events-none">
                                    <div
                                        class="modal-content border-none shadow-lg relative flex flex-col lg:w-[776px] w-full pointer-events-auto bg-white bg-clip-padding
                                              rounded-md outline-none text-current">
                                        <div class="relative bg-white rounded-lg shadow dark:bg-slate-700">
                                            <!-- Modal header -->
                                            <div
                                                class="flex items-center justify-between p-5 border-b rounded-t dark:border-slate-600 bg-black-500">
                                                <h3 class="text-base font-medium text-white dark:text-white capitalize">
                                                    Edit Services
                                                </h3>
                                                <button type="button"
                                                    class="text-slate-400 bg-transparent hover:text-slate-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center
                                                          dark:hover:bg-slate-600 dark:hover:text-white"
                                                    data-bs-dismiss="modal">
                                                    <svg aria-hidden="true" class="w-5 h-5" fill="#ffffff"
                                                        viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="p-6 space-y-4" id="editModalBody">
                                                <form action="${editUrl}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="grid lg:grid-cols-1 md:grid-cols-1 grid-cols-1 gap-5">
                                                        <div>
                                                            <div class="input-area">
                                                                <label for="name" class="form-label">Slider
                                                                    Title*</label>
                                                                <input id="name" name="name" type="text"
                                                                    class="form-control" placeholder="Name"
                                                                    value="">
                                                            </div>
                                                            <div class="input-area">
                                                                <label for="description"
                                                                    class="form-label">Description</label>
                                                                <textarea name="description" class="form-control" id="description" cols="30" rows="10"></textarea>
                                                            </div>
                                                            <br>
                                                            <div class="input-area">
                                                                <div class="filePreview">
                                                                    <label>
                                                                        <input type="file" class=" w-full hidden"
                                                                            id="ddisplayImage" name="image"
                                                                            value="">
                                                                        <span
                                                                            class="w-full h-[40px] file-control flex items-center custom-class">
                                                                            <span
                                                                                class="flex-1 overflow-hidden text-ellipsis whitespace-nowrap">
                                                                                <span id="placeholder"
                                                                                    class="text-slate-400">Choose a
                                                                                    file or drop it here...</span>
                                                                            </span>
                                                                            <span name="image"
                                                                                class="file-name flex-none cursor-pointer border-l px-4 border-slate-200 dark:border-slate-700 h-full inline-flex items-center bg-slate-100 dark:bg-slate-900 text-slate-600 dark:text-slate-400 text-sm rounded-tr rounded-br font-normal">Browse</span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                                <div>
                                                                    <div id="file-preview">
                                                                        <div id="imageDisplay">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="text-end">
                                                                <button type="submit"
                                                                    class="btn mt-2 inline-flex justify-center btn-dark dark:bg-slate-700 dark:text-slate-300 m-1 ">
                                                                    <span class="flex items-center">
                                                                        <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2"
                                                                            icon="ph:plus-bold"></iconify-icon>
                                                                        <span>Submit</span>
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
                    </div>
                </div>
            </div>
        </div>

        <!-- BEGIN: Footer For Desktop and tab -->
        <x-dashboard.footer></x-dashboard.footer>
        <!-- END: Footer For Desktop and tab -->


    </div>
    <script>
        $('a[data-bs-toggle="modal"]').on('click', function(event) {
            event.preventDefault();
            var idval = $(this).data('val');

            $.ajax({
                url: '{{ route('services.edit', ['service' => ':id']) }}'.replace(':id', idval),
                method: 'GET',
                success: function(response) {
                    var editUrl = "{{ route('services.update', 'service_id') }}";
                    editUrl = editUrl.replace('service_id', response.id);

                    var html =
                        `
                    <form action="${editUrl}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="grid lg:grid-cols-1 md:grid-cols-1 grid-cols-1 gap-5">
                                <div>
                                  <div class="input-area">
                                    <label for="name" class="form-label">Slider Title*</label>
                                    <input id="name" name="name" type="text" class="form-control" placeholder="Name" value="` +
                        response.name +
                        `">
                                  </div>
                                  <div class="input-area">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea name="description" class="form-control" id="description" cols="30" rows="10">` +
                        response
                        .description +
                        `</textarea>
                                  </div>
                                  <div class="input-area">
                                    <label for="long_description" class="form-label">Description</label>
                                    <textarea name="long_description" class="form-control" id="long_description" cols="30" rows="10">` +
                        response
                        .long_description +
                        `</textarea>
                                  </div>
                                  <br>
                                  <div class="input-area">
                                      <div class="filePreview">
                                        <label>
                                          <input type="file" class=" w-full hidden" name="image" value="` +
                        response.image + `">
                                          <span class="w-full h-[40px] file-control flex items-center custom-class">
                                              <span class="flex-1 overflow-hidden text-ellipsis whitespace-nowrap">
                                              <span id="placeholder" class="text-slate-400">Choose a file or drop it here...</span>
                                          </span>
                                          <span name="image" id="selectImage" class="file-name flex-none cursor-pointer border-l px-4 border-slate-200 dark:border-slate-700 h-full inline-flex items-center bg-slate-100 dark:bg-slate-900 text-slate-600 dark:text-slate-400 text-sm rounded-tr rounded-br font-normal">Browse</span>
                                          </span>
                                        </label>
                                      </div>
                                      <div>
                                  <div id="file-preview"><img id="displayImage" src="{{ asset('`+ response.image +`') }}"></div>
                                </div>
                                <div class="input-area">
                                    <div class="filePreview">
                                        <label>
                                            <input type="file" class=" w-full hidden" name="image1">
                                            <span
                                                class="w-full h-[40px] file-control flex items-center custom-class">
                                                <span
                                                    class="flex-1 overflow-hidden text-ellipsis whitespace-nowrap">
                                                    <span id="placeholder" class="text-slate-400">Choose a
                                                        second image...</span>
                                                </span>
                                                <span name="image1"
                                                    class="file-name flex-none cursor-pointer border-l px-4 border-slate-200 dark:border-slate-700 h-full inline-flex items-center bg-slate-100 dark:bg-slate-900 text-slate-600 dark:text-slate-400 text-sm rounded-tr rounded-br font-normal">Browse</span>
                                            </span>
                                        </label>
                                    </div>
                                    <div id="file-preview"><img id="displayImage" src="{{ asset('`+ response.image1 +`') }}"></div>

                                </div>
                                    </div>
                                    <div class="text-end">
                                      <button type="submit" class="btn mt-2 inline-flex justify-center btn-dark dark:bg-slate-700 dark:text-slate-300 m-1 ">
                                        <span class="flex items-center">
                                        <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2" icon="ph:plus-bold"></iconify-icon>
                                        <span>Update</span>
                                        </span>
                                      </button>
                                    </div>
                                </div>
                                
                              </div>
                    </form>
                `;
                    $('#editModalBody').empty();

                    $('#editModalBody').append(html); // Use .html() instead of .append()
                    $('#editModal').modal('show');
                }
            });
        });
        $(document).ready(function() {
            $('#selectImage').on('change', function(event) {
                alert();
            });
        });










        // Handle form submission via AJAX
        $(document).on('submit', '#editForm', function(event) {
            event.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                url: $(this).attr('action'),
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    // Handle success response, maybe close modal, update UI, etc.
                    $('#editModal').modal('hide');
                    // Update your UI as needed
                },
                error: function(xhr) {
                    // Handle error response, show validation errors, etc.
                }
            });
        });
    </script>
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
