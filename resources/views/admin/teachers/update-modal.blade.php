<!-- Modal body -->
<form action="{{ route('teachers.update', $teacher->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="grid gap-4 mb-4 sm:grid-cols-2">
        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
            <input type="text" name="name" id="name" placeholder="Type teacher name"
                value="{{ old('name', $teacher->name) }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                       focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 
                       dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                       dark:focus:ring-primary-500 dark:focus:border-primary-500"
                required>
        </div>
        <div>
            <label for="subject_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subject</label>
            <select id="subject_id" name="subject_id"
                class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white"
                required>
                <option value="">-- Select Subject --</option>
                @foreach ($subjects as $subject)
                    <option value="{{ $subject->id }}" {{ old('subject_id', $teacher->subject_id) == $subject->id ? 'selected' : '' }}>{{ $subject->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div>
        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone</label>
        <input type="text" name="phone" id="phone" placeholder="Type your phone"
            value="{{ old('phone', $teacher->phone) }}"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                   focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 
                   dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                   dark:focus:ring-primary-500 dark:focus:border-primary-500"
            required>
    </div>

    <div>
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
        <input type="email" name="email" id="email"
            value="{{ old('email', $teacher->email) }}"
            class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white"
            placeholder="example@email.com"
            required>
    </div>

    <div>
        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
        <input type="text" name="address" id="address"
            value="{{ old('address', $teacher->address) }}"
            class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white"
            placeholder="Your address">
    </div>
    <div class="flex items-center space-x-4 mt-4">
        <button type="submit"
            class="inline-flex items-center justify-center text-white
                   bg-orange-600 hover:bg-orange-700 focus:ring-4 focus:ring-orange-300
                   font-medium rounded-lg text-sm px-4 py-2.5 dark:bg-orange-500
                   dark:hover:bg-orange-600 focus:outline-none dark:focus:ring-orange-800">
            Update Teacher
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
