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
                                                Blog Categories
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

                                    {{-- <a href="{{ route('categories.create') }}"
                                        class="btn inline-flex justify-center btn-dark dark:bg-slate-700 dark:text-slate-300 m-1 ">
                                        <span class="flex items-center">
                                            <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2"
                                                icon="ph:plus-bold"></iconify-icon>
                                            <span>Add create</span>
                                        </span>
                                    </a> --}}
                                </div>
                            </div>
                            <div class="grid xl:grid-cols-1 md:grid-cols-2 grid-cols-1 gap-5">
                                <!-- Category List -->


                                <!-- Add Category Form -->
                                <form id="add-category-form" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="grid lg:grid-cols-2 md:grid-cols-1 grid-cols-1 gap-5">
                                        <div class="card p-3">
                                            <ul id="category-list">
                                                <!-- Categories will be loaded here using AJAX -->
                                            </ul>
                                        </div>
                                        <div class="card p-3">
                                            <div class="input-area">
                                                <label for="name" class="form-label">Blog Title*</label>
                                                <input id="name" name="name" type="text" class="form-control"
                                                    placeholder="Name">
                                            </div>
                                            <div class="input-area">
                                                <label for="name" class="form-label">Select Parent Category</label>
                                                <select name="category_id" class="form-control w-full mt-2 py-2">
                                                    <option value="" selected
                                                        class="inline-block font-Inter font-normal text-sm text-slate-600">
                                                        Select Parent Category</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}"
                                                            class=" inline-block font-Inter font-normal text-sm text-slate-600">
                                                            {{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="text-end">
                                                <button
                                                    class="btn mt-2 inline-flex justify-center btn-dark dark:bg-slate-700 dark:text-slate-300 m-1 ">
                                                    <span class="flex items-center">
                                                        <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2"
                                                            icon="ph:plus-bold"></iconify-icon>
                                                        <span>Add Category</span>
                                                    </span>
                                                </button>
                                                <button id="reset-form-btn" class="btn btn-md btn-danger">
                                                    <span class="flex items-center">
                                                        <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2"
                                                            icon="ph:plus-bold"></iconify-icon>
                                                        <span>Reset</span>
                                                    </span>
                                                </button>
                                            </div>

                                        </div>

                                        <div>
                                            <div id="file-preview"></div>
                                        </div>
                                    </div>
                                </form>

                            </div>


                            {{-- <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                                id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                <div class="modal-dialog relative w-auto pointer-events-none">
                                    <div
                                        class="modal-content border-none shadow-lg relative flex flex-col lg:w-[576px] w-full pointer-events-auto bg-white bg-clip-padding
                                              rounded-md outline-none text-current">
                                        <div class="relative bg-white rounded-lg shadow dark:bg-slate-700">
                                            <!-- Modal header -->
                                            <div
                                                class="flex items-center justify-between p-5 border-b rounded-t dark:border-slate-600 bg-black-500">
                                                <h3 class="text-base font-medium text-white dark:text-white capitalize">
                                                    Edit Slider
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
                            </div> --}}


                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- BEGIN: Footer For Desktop and tab -->
        <x-dashboard.footer></x-dashboard.footer>

        <!-- END: Footer For Desktop and tab -->


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $('#reset-form-btn').click(function() {
                $('#add-category-form')[0].reset();
            });
            // AJAX to load categories on page load
            $(document).ready(function() {
                loadCategories();
            });
            // Function to load categories using AJAX
            function loadCategories() {
                $.ajax({
                    url: '{{ route('categories.create') }}',
                    method: 'GET',
                    success: function(data) {
                        $('#category-list').empty();
                        data.forEach(function(category) {
                            var parentName = category.parent ? category.parent.name : 'N/A';
                            var parentid = category.parent ? category.parent.id : 'N/A';
                            $('#category-list').append(
                                '<li><div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-5 mt-3"><div><input class="form-control" type="text" value="' +
                                category.name +
                                '"></div><div><select name="category_id" class ="form-control w-full py-2"><option selected value ="' +
                                parentid +
                                '">' + parentName +
                                '</option>@foreach ($categories as $category)<option value ="{{ $category->id }}"> {{ $category->name }} </option>@endforeach </select></div><div class="py-2"><button><iconify-icon icon="radix-icons:update"></iconify-icon></button><a href="javascript:;" class="text-danger delete-btn" data-val="' +
                                category.id +
                                '"><iconify-icon icon="fluent:delete-28-regular"></iconify-icon></a></div></div></li > '
                            );
                        });
                    }
                });
            }

            // AJAX for adding a category
            $('#add-category-form').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    url: '{{ route('categories.store') }}',
                    method: 'POST',
                    data: $(this).serialize(),
                    success: function(data) {
                        $('#add-category-form')[0].reset();
                        loadCategories();
                        location.reload();
                    }
                });
            });

            // Edit button click event
            $(document).on('click', '.edit-btn', function() {
                var categoryId = $(this).data('id');
                // Fetch category data using AJAX and populate an edit form
            });

            // Delete button click event
            $(document).on('click', '.delete-btn', function() {
                // event.preventDefault();
                var categoryId = $(this).data('val');

                // Send an AJAX request to delete the category
                // var categoryId = $(this).data('id');
                // // Send an AJAX request to delete the category
                $.ajax({
                    url: '/categories/' + categoryId,
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        loadCategories(); // Reload the category list after deletion
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText); // Log the error response
                    }
                });
            });
        </script>
        {{-- <script>
        $('a[data-bs-toggle="modal"]').on('click', function(event) {
            event.preventDefault();
            var idval = $('#idvalue').val();

            $.ajax({
                url: '{{ route('blogs.edit ', ['blog ' => ': id ']) }}'
                    .replace(':id', idval),
                method: 'GET',
                success: function(response) {
                    var editUrl = "{{ route('sliders.update', 'slider_id') }}";
                    editUrl = editUrl.replace('slider_id', response.id);

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
                                  <div id="file-preview"><img id="displayImage" src="{{ asset('` + response.image + `') }}"></div>
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
    </script> --}}
</x-base-layout>
