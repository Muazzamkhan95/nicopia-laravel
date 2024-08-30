<x-base-layout>
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

                            <div class="items-center">
                                <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-2 gap-5">
                                    <div class="card p-3">
                                        <h4 class="text-base text-slate-800 dark:text-slate-300 ">Menu Type</h4>

                                        <label for="menu_heading" class="form-label">Menu Name*</label>
                                        @foreach ($menutypes as $menuttype)
                                            <div class="grid lg:grid-cols-3 md:grid-cols-3 grid-cols-3 gap-5">
                                                <form class="col-span-2"
                                                    action="{{ route('menutypes.update', $menuttype->id) }}"
                                                    method="post">
                                                    @csrf
                                                    <div class="input-area mb-1">
                                                        <input id="name" name="name" type="text"
                                                            class="form-control" placeholder="Name"
                                                            value="{{ $menuttype->name }}">
                                                    </div>
                                                </form>
                                                <form action="{{ route('menutypes.destroy', $menuttype->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('menutypes.edit', $menuttype->id) }}">
                                                        <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2"
                                                            icon="dashicons:update"></iconify-icon>
                                                    </a>
                                                    <button type="submit"><iconify-icon
                                                            class="text-xl ltr:mr-2 rtl:ml-2"
                                                            icon="mdi:trash"></iconify-icon></button>
                                                </form>
                                            </div>
                                        @endforeach
                                        <form action="{{ route('menutypes.store') }}" method="post">
                                            <div class="grid lg:grid-cols-3 md:grid-cols-3 grid-cols-3 gap-5">
                                                @csrf
                                                <div class="col-span-2 input-area mb-1">
                                                    <input id="name" name="name" type="text"
                                                        class="form-control" placeholder="Name" value="">
                                                </div>
                                                <div>

                                                    <button type="submit"
                                                        class="btn btn-sm inline-flex justify-center btn-dark dark:bg-slate-700 dark:text-slate-300"><iconify-icon
                                                            class="text-xl ltr:mr-2 rtl:ml-2"
                                                            icon="ph:plus-bold"></iconify-icon> Add</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card p-3">
                                        <h4 class="text-base text-slate-800 dark:text-slate-300 ">Menu Setting</h4>
                                        <label for="menu_heading" class="form-label">Select Menu*</label>
                                        <select name="menu_type_id" class="form-control" id="menu_type_id">
                                            <option value="">Select Menu</option>
                                            @foreach ($menutypes as $menutype)
                                                <option value="{{ $menutype->id }}">{{ $menutype->name }}
                                                </option>
                                            @endforeach
                                        </select>

                                        <label class="form-label">Select List</label>
                                        <ul id="menu-list">

                                        </ul>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script>
        $('#menu_type_id').on('change', function(e) {
            e.preventDefault();
            var id = $('#menu_type_id').val();
            $.ajax({
                url: '/menus/get/' + id, // Replace with your actual backend URL
                method: 'GET',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    var menulist = $('#menu-list');
                    menulist.empty();
                    menulist.append(`<li class="grid lg:grid-cols-5 md:grid-cols-5 grid-cols-5 gap-5">
                                                <label class="form-label col-span-2">Menu Name</label>
                                                <label class="form-label col-span-2">Menu Url</label>
                                                <label class="form-label col-span-1">Action</label>

                                            </li>`);
                    response.forEach(function(item) {
                        var li = $(
                            '<li class="grid lg:grid-cols-5 md:grid-cols-5 grid-cols-5 gap-5"></li>'
                        ); // Create a new <li> element
                        var inputName = $('<input></input>', {
                            name: 'name',
                            type: 'text',
                            class: 'form-control col-span-2',
                            placeholder: 'Name',
                            value: item.name // Use item.name from the response
                        });

                        var inputUrl = $('<input></input>', {

                            name: 'url',
                            type: 'text',
                            class: 'form-control col-span-2',
                            placeholder: 'URL',
                            value: item.url // Use item.url from the response
                        });

                        var a = $(
                            '<a href="" data-val="'+item.id+'" class="update-menu"><iconify-icon class="text-xl ltr:mr-2 rtl:ml-2"  icon="dashicons:update"></iconify-icon></a >'
                        );

                        li.append(
                            inputName); // Append the 'Name' input element to the <li>
                        li.append(
                            inputUrl); // Append the 'URL' input element to the <li>
                        li.append(a); // Append the 'Update' form to the <li>
                        menulist.append(
                            li); // Append the <li> to the #menu-list
                    });
                    // You can perform actions based on the response here
                },
                error: function(error) {
                    console.error('Error submitting form:', error);
                    // Handle error here
                }
            });
        });
        $('.update-menu').on('change', function(e) {
            e.preventDefault();
            var id = $('this').datat('val');
            $.ajax({
                url: '/menus/update/' + id, // Replace with your actual backend URL
                method: 'PUT',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    window.reload();
                    // You can perform actions based on the response here
                },
                error: function(error) {
                    console.error('Error submitting form:', error);
                    // Handle error here
                }
            });
        });
    </script>
</x-base-layout>
