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
                                    <h4 class="text-base text-slate-800 dark:text-slate-300 my-6">Header Setting</h4>
                                </div>
                                <form action="{{ route('headers.update', $header->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-2 gap-5">
                                        <div class="">
                                            <div class="input-area">
                                                <label for="menu_heading" class="form-label">Header*</label>
                                                <input id="name" name="name" type="text" class="form-control"
                                                    placeholder="Name" value="{{ $header->name }}">
                                            </div>
                                            <div class="input-area">
                                                <div class="filePreview">
                                                    <label>
                                                        Logo
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
                                                        <img width="width: 50px" src="{{ asset('') . $header->image }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <label for="contact_heading" class="form-label">Menu*</label>
                                            <div id="" style="">
                                                <div class="input-area">
                                                    <label for="menu_type_id" class="form-label">Select Menu*</label>
                                                    <select name="menu_type_id" class="form-control" id="menu_type_id">
                                                        <option value="">Select Menu</option>
                                                        @foreach ($menu_type as $menut)
                                                            @if ($menut->id == $header->menu_type_id)
                                                                <option value="{{ $menut->id }}" selected>
                                                                    {{ $menut->name }}
                                                                </option>
                                                            @else
                                                                <option value="{{ $menut->id }}">{{ $menut->name }}
                                                                </option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <button
                                                    class="btn mt-2 inline-flex justify-center btn-dark dark:bg-slate-700 dark:text-slate-300 m-1 ">
                                                    <span class="flex items-center">
                                                        <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2"
                                                            icon="ph:plus-bold"></iconify-icon>
                                                        <span>Update</span>
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
</x-base-layout>
