<!-- Modal body -->
<form action="{{ route('classrooms.store') }}" method="POST" class="space-y-4">
    @csrf
    <div class="grid gap-4 mb-4 sm:grid-cols-2">
        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type classroom name" required="">
        </div>
    </div>
    <button type="submit" class="flex items-center justify-center text-white mt-4
               bg-green-600 hover:bg-green-700 focus:ring-4 focus:ring-green-300
               font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-500
               dark:hover:bg-green-600 focus:outline-none dark:focus:ring-green-800">
        <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
        </svg>
        Add new classroom
    </button>
</form>
