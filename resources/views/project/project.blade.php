@extends('layouts.outline')

@section('content')
<div class="container-fluid">
        
           
                    <form method="POST" action="{{route('project:store')}}">
                        @csrf
                    
                        <div>
                            <label for="pic_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-500">Person in Charge(PIC)</label>
                            <input class="form-control" type="text" name="pic_id" placeholder="Person in Charge(PIC)" >
                        </div>

                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-500">Project name</label>
                            <input class="form-control" type="text" name="name" placeholder="Project name" >
                        </div>

                        <div>
                            <label for="startdate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-500">Start Date</label>
                            <input class="form-control" type="date" name="start_date" placeholder="Start Date" >
                        </div>

                        <div>
                            <label for="enddate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-500">End Date</label>
                            <input class="form-control" type="date" name="end_date" placeholder="End Date" >
                        </div>

                        <div class="flex items-center justify-start mt-4">
                        <button type="submit" class="btn btn-primary">
                            Save
                        </button>
                    </div>
                    </form>
                   

</div>
@endsection