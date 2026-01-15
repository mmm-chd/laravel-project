<x-admin.layout>
    <!-- Start block -->
<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 antialiased">
    <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
        <!-- Start coding here -->
        @foreach ($classrooms as $classroom)
        @php
            $createModalId = 'createClassroomModal';
        @endphp
        @endforeach
        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
            {{-- Header + tombol --}}
            <x-admin.menu-table
                button-label="Add Classroom"
                button-modal-id="{{ $createModalId }}"
            />
            
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-4">ID</th>
                            <th scope="col" class="px-4 py-3">Name</th>
                            <th scope="col" class="px-4 py-3">
                                <span class="sr-only">Actions</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($classrooms as $classroom)
                        <tr class="border-b dark:border-gray-700">
                            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $loop->iteration }}</th>
                            <td class="px-4 py-3">{{ $classroom['name'] }}</td>
                            <td class="px-4 py-3 flex items-center justify-end">
                                @php
                                    $dropdownId = 'classroom-dropdown-' . $classroom->id;
                                    $buttonId = $dropdownId . '-button';
                                    $updateModalId = 'updateClassroomModal-' . $classroom->id;
                                    $viewModalId = 'viewClassroomModal-' . $classroom->id;
                                    $deleteModalId = 'deleteClassroomModal-' . $classroom->id;
                                @endphp


                                <button id="{{ $buttonId }}" data-dropdown-toggle="{{ $dropdownId }}" class="inline-flex items-center text-sm font-medium hover:bg-gray-100 dark:hover:bg-gray-700 p-1.5 dark:hover-bg-gray-800 text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                    </svg>
                                </button>
                                <div id="{{ $dropdownId }}" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="py-1 text-sm" aria-labelledby="{{ $buttonId }}">
                                        <li>
                                            <button type="button" data-modal-target="{{ $updateModalId }}" data-modal-toggle="{{ $updateModalId }}"
                                                class="flex w-full items-center py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 text-gray-700 dark:text-gray-200">
                                                Edit
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" data-modal-target="{{ $viewModalId }}" data-modal-toggle="{{ $viewModalId }}"
                                                class="flex w-full items-center py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 text-gray-700 dark:text-gray-200">
                                                Preview
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        {{-- Create Modal --}}
                        <div id="{{ $createModalId }}" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center 
                            items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                          <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                              <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Add Classroom</h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg 
                                           text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-toggle="{{ $createModalId }}">
                                  <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                      viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 
                                        1 0 111.414 1.414L11.414 10l4.293 
                                        4.293a1 1 0 01-1.414 1.414L10 
                                        11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 
                                        10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                  </svg>
                                  <span class="sr-only">Close modal</span>
                                </button>
                              </div>
                          
                              {{-- Isi form --}}
                              @include('admin.classrooms.form-modal')
                            </div>
                          </div>
                        </div>

                        <!-- Update modal -->
                        <div id="{{ $updateModalId }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-2xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                    <!-- Modal header -->
                                    <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Update {{ $classroom->name}}</h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="{{ $updateModalId }}">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 
                                                    1 0 111.414 1.414L11.414 10l4.293 
                                                    4.293a1 1 0 01-1.414 1.414L10 
                                                    11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 
                                                    10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    {{-- Update Modal Body --}}
                                    @include('admin.classrooms.update-modal')
                                </div>
                            </div>
                        </div>

                        <!-- Read modal -->
                        <div id="{{ $viewModalId }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                    {{-- Review Modal --}}
                                    @include('admin.classrooms.read-modal')
                                </div>
                            </div>
                        </div>
                        
                        @endforeach
                    </tbody>
                </table>
            </div>

            

            {{-- Pagination --}}
            <div class="p-4">
            {{ $classrooms->links() }}
            </div>
        </div>
    </div>
</section>
<!-- End block -->
</x-admin.layout>