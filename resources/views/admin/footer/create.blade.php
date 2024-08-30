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
                                    <h4 class="text-base text-slate-800 dark:text-slate-300 my-6">Footer Setting</h4>
                                </div>
                                <form action="{{ route('footers.update', $footers->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-2 gap-5">
                                        <div class="">
                                            <div class="input-area">
                                                <div class="filePreview">
                                                    <label>
                                                        Logo
                                                        <input type="file" class=" w-full hidden" name="image">
                                                        <span class="w-full h-[40px] file-control flex items-center custom-class">
                                                            <span class="flex-1 overflow-hidden text-ellipsis whitespace-nowrap">
                                                                <span id="placeholder" class="text-slate-400">Choose a
                                                                    file or drop it here...</span>
                                                            </span>
                                                            <span name="image" class="file-name flex-none cursor-pointer border-l px-4 border-slate-200 dark:border-slate-700 h-full inline-flex items-center bg-slate-100 dark:bg-slate-900 text-slate-600 dark:text-slate-400 text-sm rounded-tr rounded-br font-normal">Browse</span>
                                                        </span>
                                                    </label>
                                                    <div id="file-preview">
                                                        <img width="width: 50px" src="{{ asset('') . $footers->image }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-area">
                                                <label for="address" class="form-label">Address*</label>
                                                <input id="address" name="address" type="text" class="form-control" placeholder="Address" value="{{ $footers->address }}" required>
                                            </div>
                                            <div class="input-area">
                                                <label for="email" class="form-label">Email*</label>
                                                <input id="email" name="email" type="text" class="form-control" placeholder="Email" value="{{ $footers->email }}" required>
                                            </div>
                                            <div class="input-area">
                                                <label for="phone" class="form-label">Phone*</label>
                                                <input id="phone" name="phone" type="text" class="form-control" placeholder="Phone" value="{{ $footers->phone }}" required>
                                            </div>
                                            <div class="input-area">
                                                <label for="copyright" class="form-label">Copyright*</label>
                                                <input id="copyright" name="copyright" type="text" class="form-control" placeholder="Copyright" value="{{ $footers->phone }}" required>
                                            </div>
                                            <div class="input-area">
                                                <label for="menu_heading" class="form-label">Menu heading*</label>
                                                <input id="menu_heading" name="menu_heading" type="text" class="form-control" placeholder="Name" value="{{ $footers->menu_heading }}" required>
                                            </div>
                                            <div class="input-area">
                                                <label for="about" class="form-label">About*</label>
                                                <textarea name="about" class="form-control" cols="30" rows="10">{{ $footers->about }}</textarea>

                                            </div>





                                        </div>
                                        <div>
                                            <div class="input-area">
                                                <label for="contact_heading" class="form-label">Contact Heading*</label>
                                                <input id="contact_heading" name="contact_heading" type="text" class="form-control" placeholder="Section Heading" value="{{ $footers->contact_heading }}" required>
                                            </div>
                                            <div class="input-area">
                                                <label for="facebook" class="form-label">Social Url*</label>
                                                <input id="facebook" name="facebook" type="url" class="form-control" placeholder="Facebook Url" value="{{ $footers->facebook }}"><br>
                                                <input id="google" name="google" type="url" class="form-control" placeholder="Google Url" value="{{ $footers->google }}"><br>
                                                <input id="instagram" name="instagram" type="url" class="form-control" placeholder="Instagram Url" value="{{ $footers->instagram }}"><br>
                                                <input id="Twitter" name="twitter" type="url" class="form-control" placeholder="Twitter Url" value="{{ $footers->twitter }}"><br>
                                            </div>
                                            <div class="input-area">
                                                <label for="contact_description" class="form-label">Contact
                                                    Description</label>
                                                <textarea name="contact_description" class="form-control" cols="30" rows="10">{{ $footers->contact_description }}</textarea>
                                            </div>

                                        </div>
                                    </div>
                                    <div>
                                    </div>
                                    <div>
                                        <div class="text-end">
                                            <button class="btn mt-2 inline-flex justify-center btn-dark dark:bg-slate-700 dark:text-slate-300 m-1 ">
                                                <span class="flex items-center">
                                                    <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2" icon="ph:plus-bold"></iconify-icon>
                                                    <span>Update</span>
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
</x-base-layout>