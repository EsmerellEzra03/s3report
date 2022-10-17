@extends('layouts.template')

@section('content')
<div class="container-fluid">
        
           
                    <form method="POST" action="{{route('scope:store')}}">
                        @csrf
                    
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-500">Scope name</label>
                            <input class="form-control" type="text" name="name" placeholder="Scope name" >
                        </div>

                        <div>
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-500">Description</label>
                            <input class="form-control" type="text" name="description" placeholder="Description" >
                        </div>


                        <div class="flex items-center justify-start mt-4">
                        <button type="submit" class="btn btn-primary">
                            Save
                        </button>
                    </div>
                    </form>
                   

</div>
@endsection