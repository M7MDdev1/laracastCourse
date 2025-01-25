<x-layout>
    <x-slot:heading>
        Edit Job: {{$job->title}}
    </x-slot:heading>

    <form method="POST" action="/jobs/{{$job->id}}">
        @csrf
        @method('PATCH')
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Edit a Job post</h2>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                        <div class="mt-2">
                            <input type="text" name="title" id="title" value="{{$job->title}}" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            @error('title')
                            <p class="text-xs text-red-500 font-semibold">{{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="salary" class="block text-sm/6 font-medium text-gray-900">Salary</label>
                        <div class="mt-2">
                            <input type="text" value="{{$job->salary}}" name="salary" id="salary" autocomplete="family-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            @error('salary')
                            <p class="text-xs text-red-500 font-semibold">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sm:col-span-3">
            <label for="company" class="block text-sm/6 font-medium text-gray-900">Company</label>
            <div class="mt-2">
                <input type="text" value="{{$job->employer->name}}" name="company" id="company" autocomplete="family-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                @error('company')
                <p class="text-xs text-red-500 font-semibold">{{$message}}</p>
                @enderror
            </div>
        </div>
        <div class="mt-6 flex items-center justify-between gap-x-6">
            <button form="delete-form"  class="text-sm/6 font-semibold text-gray-900">Delete</button>

            <div>
                <a href="/jobs/{{$job->id}}" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
            </div>
        </div>
    </form>
    <form action="/jobs/{{$job->id}}" method="post" hidden id="delete-form" >
        @csrf
        @method('DELETE')

    </form>
</x-layout>
