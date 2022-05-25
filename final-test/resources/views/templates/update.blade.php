<?php
use App\Http\Controllers\TaskController;
?>

@section('update')
    <form action="{{url('update/'.$task->id)}}" method="post" class="my-6">
        @csrf
        @method('PUT')
        <div class="container mx-auto max-w-fit">
            <div class="card rounded-lg">
                <div class="grid grid-cols-2 justify-items-center my-3">
                    <div>
                        <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Título:</label>
                        <input type="text" name="title" id="title" value="{{$task->title}}" placeholder="Título de la tarea" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    </div>
                    <div>
                        <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Descripción:</label>
                        <input type="text" name="description" id="description" value="{{$task->description}}" placeholder="¿Qué hay que hacer?" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    </div>
                </div>
        
                <div class="grid grid-cols-2 gap-4 justify-items-center my-3">
                    <div>
                        <label for="dueDate" class="block text-gray-700 text-sm font-bold mb-2">Fecha de entrega:</label>
                        <input type="text" name="dueDate" id="dueDate" value="{{$task->dueDate}}" placeholder="AAAA-MM-DD" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    </div>
                    <div>
                        <label for="status" class="block text-gray-700 text-sm font-bold mb-2">Estatus de la tarea:</label>
                        <select name="status" id="status" required class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            @if ($task->status == "sin empezar")
                                <option value="sin empezar" selected>Sin empezar</option>
                            @else
                                <option value="sin empezar">Sin empezar</option>
                            @endif

                            @if ($task->status == "en proceso")
                                <option value="en proceso" selected>En proceso</option>
                                
                            @else
                                <option value="en proceso">En proceso</option>
                            @endif

                            @if ($task->status == "terminado")
                                <option value="terminado" selected>Terminado</option>
                            @else
                                <option value="terminado">Terminado</option>
                            @endif
                        </select>
                    </div>
                </div>
        
                <div class="grid grid-cols-1 justify-items-center my-3">
                    <div>
                        <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit" value="Guardar cambios">
                    </div>
                </div>
            </div>
        </div>
    </form>
@show