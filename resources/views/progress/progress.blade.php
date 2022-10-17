@extends('layouts.template')

@section('content')
<div class="container-fluid">
        
           
                    <form method="POST" action="{{route('progress:store')}}">
                        @csrf
                    
                        <div>
                            <label for="pic_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-500">Progress Name</label>
                            <input class="form-control" type="text" name="name" placeholder="Progress Name" >
                        </div>

                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-500">Remark</label>
                            <input class="form-control" type="text" name="remark" placeholder="Remark" >
                        </div>

                        <div>
                            <label for="startdate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-500">Date</label>
                            <input class="form-control" type="date" name="date" placeholder="Date" >
                        </div>

                        <div class="flex items-center justify-start mt-4">
                        <button type="submit" class="btn btn-primary">
                            Save
                        </button>
                    </div>
                    </form>
                   

</div>
@endsection