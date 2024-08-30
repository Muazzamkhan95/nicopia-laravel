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
                                            <li class="inline-block relative top-[3px] text-base text-primary-500 font-Inter ">
                                                <a href="index.html">
                                                    <iconify-icon icon="heroicons-outline:home"></iconify-icon>
                                                    <iconify-icon icon="heroicons-outline:chevron-right" class="relative text-slate-500 text-sm rtl:rotate-180"></iconify-icon>
                                                </a>
                                            </li>
                                            <li class="inline-block relative text-sm text-primary-500 font-Inter ">
                                                Projekts
                                                <iconify-icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180"></iconify-icon>
                                            </li>
                                            <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white">
                                                Projekt</li>
                                        </ul>
                                    </div>
                                    <!-- END: BreadCrumb -->
                                </div>
                                <div class="flex flex-wrap ">

                                    <a href="{{ route('projects.create') }}" class="btn inline-flex justify-center btn-dark dark:bg-slate-700 dark:text-slate-300 m-1 ">
                                        <span class="flex items-center">
                                            <iconify-icon class="text-xl ltr:mr-2 rtl:ml-2" icon="ph:plus-bold"></iconify-icon>
                                            <span>Add Projekt</span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="grid xl:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-5 ">
                                @foreach ($projects as $project)
                                <div class="card rounded-md bg-white dark:bg-slate-800 shadow-base custom-class card-body p-5">
                                    <header class="flex justify-between items-end">
                                        <div class="flex space-x-4 items-center rtl:space-x-reverse">
                                            <div class="flex-none">
                                                {{-- <div
                                                        class="h-10 w-10 rounded-md text-lg bg-slate-100 text-slate-900 dark:bg-slate-600 dark:text-slate-200 flex flex-col items-center justify-center font-normal capitalize">

                                                    </div> --}}
                                            </div>
                                            <div class="font-medium text-base leading-6">
                                                <div class="dark:text-slate-200 text-slate-900 max-w-[160px] truncate">
                                                    {{ $project->name }}
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="dropstart relative">
                                                <button class="inline-flex justify-center items-center" type="button" id="tableDropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <iconify-icon class="text-xl ltr:ml-2 rtl:mr-2" icon="heroicons-outline:dots-vertical"></iconify-icon>
                                                </button>
                                                <ul class="dropdown-menu min-w-max absolute text-sm text-slate-700 dark:text-white hidden bg-white dark:bg-slate-700 shadow z-[2] float-left overflow-hidden list-none text-left rounded-lg mt-1 m-0 bg-clip-padding border-none">
                                                    <li>
                                                        <a href="{{ route('projects.edit', $project->id) }}" class="hover:bg-slate-900 dark:hover:bg-slate-600 dark:hover:bg-opacity-70 hover:text-white w-full border-b border-b-gray-500 border-opacity-10 px-4 py-2 text-sm dark:text-slate-300 last:mb-0 cursor-pointer first:rounded-t last:rounded-b flex space-x-2 items-center capitalize rtl:space-x-reverse">
                                                            <iconify-icon icon="clarity:note-edit-line"></iconify-icon>
                                                            <span>Edit</span></a>
                                                        <input type="hidden" name="" id="idvalue" value="{{ $project->id }}">
                                                    </li>
                                                    <li>
                                                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display: inline-block">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </header>
                                    <div class="text-slate-600 dark:text-slate-400 text-sm pt-1 pb-8"></div>
                                    <div class="flex space-x-4 rtl:space-x-reverse">
                                        <div>
                                            <img style="" src="{{ asset('' . $project->image) }}" alt="">
                                            <p class="max-w-[300px] truncate">{!! strip_tags($project->description) !!}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>


                            


                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- BEGIN: Footer For Desktop and tab -->
       
        <!-- END: Footer For Desktop and tab -->

    </div>
</x-base-layout>