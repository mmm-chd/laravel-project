<!-- Modal body -->
<form action="{{ route('guardians.store') }}" method="POST" class="space-y-4">
    @csrf
    <div class="grid gap-4 mb-4 sm:grid-cols-2">
        <!-- Name -->
        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
            <input type="text" name="name" id="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                       focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 
                       dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                       dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="Type guardian name">
        </div>
         <!-- Job -->
        <div>
            <label for="job" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Job</label>
            <input type="text" name="job" id="job"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                       focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 
                       dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                       dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                       placeholder="Type your job">
        </div>
        {{-- Phone --}}
        <div>
            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone</label>
            <input type="text" name="phone" id="phone"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                       focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 
                       dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                       dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                       placeholder="Type your phone">
        </div>
            <!-- Email -->
            <div class="sm:col-span-2">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" name="email" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                           focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 
                           dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                           dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Enter guardian email" required>
            </div>
            <!-- Address -->
            <div class="sm:col-span-2">
                <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                <textarea id="address" name="address" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border 
                           border-gray-300 focus:ring-primary-500 focus:border-primary-500 
                           dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                           dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Write an address..."></textarea>
            </div>
    </div>
    
    <button type="submit"
        class="flex items-center justify-center text-white mt-4
               bg-green-600 hover:bg-green-700 focus:ring-4 focus:ring-green-300
               font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-500
               dark:hover:bg-green-600 focus:outline-none dark:focus:ring-green-800">
        <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 
                110-2h3V6a1 1 0 011-1z"
                clip-rule="evenodd" />
        </svg>
        Add new guardian
    </button>
    
</form>
    