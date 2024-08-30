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
                                    <h4 class="text-base text-slate-800 dark:text-slate-300 my-6">Side Create</h4>
                                </div>
                                <form action="{{ route('pages.update', $page->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="grid lg:grid-cols-2 md:grid-cols-1 grid-cols-1 gap-5">
                                        <div>
                                            <div class="input-area">
                                                <label for="name" class="form-label">Side Title*</label>
                                                <input id="name" name="name" type="text" class="form-control"
                                                    placeholder="Name" value="{{ $page->name }}">
                                            </div>
                                            <div class="input-area">
                                                <label for="description" class="form-label">Tilldela Sektion</label>
                                                <select class="select2 form-control form-control-lg w-full mt-2 py-2" name="section[]" multiple="multiple">
                                                    <option value="">Välj Sektion</option>
                                                    @if ($page->section_setting_id)
                                                    @php
                                                        $selectedIds = explode(',', $page->section_setting_id);
                                                        $selectedSections = collect($sections)->whereIn('id', $selectedIds)->keyBy('id');
                                                    @endphp
                                                    @foreach ($selectedIds as $selectedId)
                                                        @if ($selectedSections->has($selectedId))
                                                            <option value="{{ $selectedId }}" selected>{{ $selectedSections[$selectedId]->name }}</option>
                                                        @endif
                                                    @endforeach
                                                    @foreach ($sections as $section)
                                                        @if (!$selectedSections->has($section->id))
                                                            <option value="{{ $section->id }}">{{ $section->name }}</option>
                                                        @endif
                                                    @endforeach
                                                @else
                                                    @foreach ($sections as $section)
                                                        <option value="{{ $section->id }}">{{ $section->name }}</option>
                                                    @endforeach
                                                @endif
                                                </select>
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
                                            <div id="file-preview"></div>
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
        $('#sayResult').click(function () {
        // 'data' brings the unordered list, while val does not
        var data = $('select').select2('data');

        // Push each item into an array
        var finalResult = data.map(function () {
        return this.id;
        });

        // Display the result with a comma
        alert( finalResult.join(',') );
        });
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
