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
                                <form action="{{ route('blogs.update', $blog->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="grid lg:grid-cols-3 md:grid-cols-3 grid-cols-3 gap-5">
                                        <div class="col-span-2">
                                            <div class="input-area">
                                                <label for="name" class="form-label">Blog Title*</label>
                                                <input id="name" name="name" type="text" class="form-control"
                                                    placeholder="Name" value="{{ $blog->name }}" required>
                                            </div>
                                            <div class="input-area">
                                                <label for="description" class="form-label">Description</label>
                                                <textarea name="description" id="trumbowyg-demo" class="form-control" cols="30" rows="10">{{ $blog->description }}</textarea>
                                            </div>
                                            <br>


                                        </div>
                                        <div>
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
                                            <div id="file-preview"></div>
                                            <div class="input-area">
                                                <div class="filePreview">
                                                    <div id="file-preview">
                                                        @if ($blog->image == null)
                                                            <img width="width: 50px"
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAAAAABWESUoAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmDBoHCBlfYDyIAAAAO0lEQVQ4y2PYQwAwjCoYigrKUxdV5U1C0BgKtsTM2VK6uDpzPZjGoiA/b4pf9tzK9GwwPUi9OaqAxgoA5Bjm6M8vUTgAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjItMTItMjZUMDc6MDg6MjErMDA6MDA+RCGDAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIyLTEyLTI2VDA3OjA4OjIxKzAwOjAwTxmZPwAAAABJRU5ErkJggg==">
                                                        @else
                                                            <img width="width: 50px"
                                                                src="{{ asset('' . $blog->image) }}">
                                                        @endif
                                                    </div>
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

                                                </div>
                                            </div>
                                            <div class="input-area">
                                                <label for="" class="form-label">Category</label>
                                                <ul class="nav flex-column">
                                                    @foreach ($categories as $category)
                                                        <li class="nav-item">
                                                            @if ($category->parent != null)
                                                                <ul>
                                                                    <li class="nav-item mx-4">
                                                                        <input type="checkbox" name="categories[]"
                                                                            value="{{ $category->id }}"
                                                                            {{ $blog->categories->contains($category->id) ? 'checked' : '' }}>
                                                                        <label>
                                                                            {{ $category->name }}
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            @else
                                                                <input type="checkbox" name="categories[]"
                                                                    value="{{ $category->id }}"
                                                                    {{ $blog->categories->contains($category->id) ? 'checked' : '' }}>
                                                                <label>
                                                                    {{ $category->name }}
                                                                </label>
                                                            @endif
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="input-area">
                                                <label for="keywords" class="form-label">Enter Keyword
                                                    (separated by comma):</label>
                                                <input type="text" id="keywords" class="form-control" name="keyword"
                                                    value="{{ $blog->keyword }}">
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
        $('#trumbowyg-demo1').trumbowyg();
    </script>
</x-base-layout>
