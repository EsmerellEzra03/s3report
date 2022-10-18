@extends('layouts.outline')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
           
                    <form method="POST" action="{{ route('project:edit',$project) }}">
                        @csrf
                    
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-500">Person in Charge (PIC)</label>
                            <input
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            type="text" name="pic_id" placeholder="Person in Charge (PIC)" value="{{ $project->pic_id }}" >
                        </div>

                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-500">Project Name</label>
                            <input
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            type="text" name="name" placeholder="Project Name" value="{{ $project->name }}" >
                        </div>

                        <div>
                            <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-500">Start Date</label>
                            <input
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            type="date" name="start_date" placeholder="Start Date" value="{{ $project->start_date }}" >
                        </div>

                        <div>
                            <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-500">End Date</label>
                            <input
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            type="date" name="end_date" placeholder="End Date" value="{{ $project->end_date }}" >
                        </div>

                        <div class="flex items-center justify-start mt-4">
                        <button type="submit"
                            class="btn btn-primary">
                            Save
                        </button>
                        </div>
                    </form>
                   
            </div>
        </div>
    </div>
</div>
@endsection