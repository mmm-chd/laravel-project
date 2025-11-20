<!-- Modal header -->
<div class="flex justify-between mb-4 rounded-t sm:mb-5">
    <div class="text-lg text-gray-900 md:text-xl dark:text-white">
        <h3 class="font-semibold ">{{ $classroom->name}} </h3>
    </div>
    <div>
        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="{{ $viewModalId }}">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
            <span class="sr-only">Close modal</span>
        </button>
    </div>
</div>
<dl>
    <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Name</dt><dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">{{ $classroom->name }}</dd>
</dl>
<div class="flex justify-between items-center">
    <div class="flex items-center space-x-3 sm:space-x-4">
        <button data-modal-target="{{ $updateModalId }}" data-modal-toggle="{{ $updateModalId }}" data-modal-hide="{{ $viewModalId }}" type="button" class="inline-flex items-center justify-center text-white
                   bg-orange-600 hover:bg-orange-700 focus:ring-4 focus:ring-orange-300
                   font-medium rounded-lg text-sm px-4 py-2.5 dark:bg-orange-500
                   dark:hover:bg-orange-600 focus:outline-none dark:focus:ring-orange-800">
            <svg aria-hidden="true" class="mr-1 -ml-1 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
            </svg>
            Edit
        </button>
    </div>
</div>