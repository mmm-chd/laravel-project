<!-- Modal body -->
<form action="{{ route('students.update', $student->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="grid gap-4 mb-4 sm:grid-cols-2">
        <!-- Name -->
        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
            <input type="text" name="name" id="name"
                value="{{ old('name', $student->name) }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                       focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 
                       dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                       dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="Type student name">
        </div>
         <!-- Birthday -->
        <div>
            <label for="birthday" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Birthday</label>
            <input type="date" name="birthday" id="birthday"
                value="{{ old('birthday', $student->birthday) }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                       focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 
                       dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                       dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
        </div>
            <div>
                <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
                <select id="gender" name="gender"
                    class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white"
                    required>
                    <option value="">-- Select Gender --</option>
                    <option value="Male" {{ strtolower(old('gender', $student->gender)) == 'male' ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ strtolower(old('gender', $student->gender)) == 'female' && 'Female' ? 'selected' : '' }}>Female</option>
                </select>
            </div>
            <div>
                <label for="classroom_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Classroom</label>
                <select id="classroom_id" name="classroom_id"
                    class="w-full border rounded-lg p-2 dark:bg-gray-700 dark:text-white"
                    required>
                    <option value="">-- Select Classroom --</option>
                    @foreach ($classrooms as $classroom)
                        <option value="{{ $classroom->id }}" {{ old('classroom_id', $student->classroom_id) == $classroom->id ? 'selected' : '' }}>
                            {{ $classroom->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Email -->
            <div class="sm:col-span-2">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" name="email" id="email"
                    value="{{ old('email', $student->email) }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                           focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 
                           dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                           dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Enter student email" required>
            </div>

            <!-- Address -->
            <div class="sm:col-span-2">
                <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                <textarea id="address" name="address" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border 
                           border-gray-300 focus:ring-primary-500 focus:border-primary-500 
                           dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                           dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Write an address...">{{ old('address', $student->address) }}</textarea>
            </div>
    </div>
    <div class="flex items-center space-x-4">
        <button type="submit"
            class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none 
                   focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center 
                   dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
            Update Student
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
