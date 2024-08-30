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
                                    <h4 class="text-base text-slate-800 dark:text-slate-300 my-6">Användarvillkor</h4>
                                </div>
                                <form action="{{ route('policies.update', $policy->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="grid lg:grid-cols-1 md:grid-cols-1 grid-cols-1 gap-5">
                                        <div class="col-span-2">
                                            <div class="input-area">
                                                <label for="name" class="form-label">Policy Page Title*</label>
                                                <input id="name" name="name" type="text" class="form-control"
                                                    placeholder="Name" value="{{ $policy->name }}" required>
                                            </div>
                                            <div class="input-area">
                                                <label for="description" class="form-label">Description</label>
                                                <textarea name="description" id="trumbowyg-demo" class="form-control" cols="30" rows="10">{{ $policy->description }}</textarea>
                                            </div>
                                            <br>

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
                                        <div>
                                           
                                            
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
