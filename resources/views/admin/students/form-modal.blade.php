<!-- Modal body -->
<form action="{{ route('students.store') }}" method="POST" class="space-y-4">
    @csrf
    <div class="grid gap-4 mb-4 sm:grid-cols-2">
        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
            <input type="text" name="name" id="name" placeholder="Type student name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                       focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 
                       dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                       dark:focus:ring-primary-500 dark:focus:border-primary-500"
                required>
        </div>

        <div>
            <label for="birthday" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Birthday</label>
            <input type="date" name="birthday" id="birthday"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                       focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 
                       dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                       dark:focus:ring-primary-500 dark:focus:border-primary-500"
                required>
        </div>
    </div>

    <div class="grid gap-4 mb-4 sm:grid-cols-2">
        <div>
            <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
            <select id="gender" name="gender"
                class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white"
                required>
                <option value="">-- Select Gender --</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>

        <div>
            <label for="classroom_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Classroom</label>
            <select id="classroom_id" name="classroom_id"
                class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white"
                required>
                <option value="">-- Select Classroom --</option>
                @foreach ($classrooms as $classroom)
                    <option value="{{ $classroom->id }}">{{ $classroom->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div>
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
        <input type="email" name="email" id="email"
            class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white"
            placeholder="example@email.com"
            required>
    </div>

    <div>
        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
        <input type="text" name="address" id="address"
            class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white"
            placeholder="Your address">
    </div>

    <button type="submit"
        class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 
               focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg 
               text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 
               dark:focus:ring-primary-800">
        <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 
                110-2h3V6a1 1 0 011-1z"
                clip-rule="evenodd" />
        </svg>
        Add new student
    </button>
</form>
    