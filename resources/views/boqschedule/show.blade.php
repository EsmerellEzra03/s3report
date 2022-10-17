@extends('layouts.template')

@section('content')
<div class="container-fluid">
        
           
                    <form method="POST" action="{{route('boqschedule:store')}}">
                        @csrf
                    
                        <div>
                            <label for="quantity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-500">Quantity</label>
                            <input class="form-control" type="text" name="quantity" placeholder="Boq Name" value="{{ $boqschedule->quantity }}">
                        </div>

                        <div>
                            <label for="completed" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-500">Completed</label>
                            <input class="form-control" type="text" name="completed" placeholder="Completed" value="{{ $boqschedule->completed }}">
                        </div>

                        <div>
                            <label for="percentage" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-500">Percentage</label>
                            <input class="form-control" type="text" name="percentage" placeholder="Percentage" value="{{ $boqschedule->percentage }}">
                        </div>

                        <div class="flex items-center justify-start mt-4">
                        <button type="submit" class="btn btn-primary">
                            Save
                        </button>
                    </div>
                    </form>
                   

</div>
@endsection