<div>
    <div class="col-span-2">
        <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Name<span
                class="text-red-500">*</span></label>
        <input type="text" name="name" id="name" wire:model="search"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
            placeholder="Type name">
        <select name="" id="">
            @foreach ($options as $option)
                <option value="{{ $option->id }}">{{ $option->name }}</option>
            @endforeach
        </select>
        @error('name')
            <small class="text-xs font-bold text-red-500">
                {{ $message }}
            </small>
        @enderror
    </div>
</div>
