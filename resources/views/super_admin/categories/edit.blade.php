<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg"> 
                
                <form method="POST" action="{{ route('admin.categories.update',  $category)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                         value="{{ $category->name }}" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="icon" :value="__('icon')" />
                       <img src="{{ Storage::url($category->icon) }}" alt=""
                                class="rounded-2xl object-cover w-[90px] h-[90px]">
                            <div class="flex flex-col">
                        <x-text-input id="icon" class="block mt-1 w-full" type="file" name="icon" autofocus autocomplete="icon" />
                        <x-input-error :messages="$errors->get('icon')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
            
                        <button type="submit" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                            Update Category
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
