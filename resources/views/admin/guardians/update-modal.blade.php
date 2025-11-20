<!-- Modal body -->
<form action="{{ route('guardians.update', $guardian->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="grid gap-4 mb-4 sm:grid-cols-2">
        <!-- Name -->
        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
            <input type="text" name="name" id="name"
                value="{{ old('name', $guardian->name) }}"
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
                value="{{ old('job', $guardian->job) }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                       focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 
                       dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                       dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
        </div>
        {{-- Phone --}}
        <div>
            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone</label>
            <input type="text" name="phone" id="phone"
                value="{{ old('job', $guardian->phone) }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                       focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 
                       dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                       dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
        </div>
            <!-- Email -->
            <div class="sm:col-span-2">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" name="email" id="email"
                    value="{{ old('email', $guardian->email) }}"
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
                    placeholder="Write an address...">{{ old('address', $guardian->address) }}</textarea>
            </div>
    </div>
    <div class="flex items-center space-x-4">
        <button type="submit"
            class="inline-flex items-center justify-center text-white
                   bg-orange-600 hover:bg-orange-700 focus:ring-4 focus:ring-orange-300
                   font-medium rounded-lg text-sm px-4 py-2.5 dark:bg-orange-500
                   dark:hover:bg-orange-600 focus:outline-none dark:focus:ring-orange-800">
            Update Guardians
        </button>
    
        <button type="button"
            data-modal-target="{{ $deleteModalId }}" data-modal-toggle="{{ $deleteModalId }}"
            class="text-red-600 inline-flex items-center hover:text-white border border-red-600 
                   hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 
                   font-medium rounded-lg text-sm px-5 py-2.5 text-center 
                   dark:border-red-500 dark:text-red-500 dark:hover:text-white 
                   dark:hover:bg-red-600 dark:focus:ring-red-900">
    
            <svg class="mr-1 -ml-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 
                    2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 
                    0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 
                    11-2 0V8zm5-1a1 1 0 00-1 
                    1v6a1 1 0 102 0V8a1 1 0 
                    00-1-1z" clip-rule="evenodd" />
            </svg>
            Delete
        </button>
    </div>

</form>
