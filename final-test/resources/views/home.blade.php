@extends('templates.read')


<?php
use App\Http\Controllers\TaskController;
?>
@section('title', 'Proyecto final')
@section('headerTitle', 'Lista de Tareas')
@section('header')
    @parent
    <div class="container mx-auto max-w-fit">
        <div class="card rounded-lg">
            <table class="table-auto mb-3">
                <thead class="bg-slate-200">
                    <tr>
                        <th class="border px-4 py-2 rounded-l">Título</th>
                        <th class="border px-4 py-2">Descripción</th>
                        <th class="border px-4 py-2">Estatus</th>
                        <th class="border px-4 py-2">Fecha de entrega</th>
                        <th class="border px-4 py-2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tareas as $tarea)
                        <tr>
                            <td class="border px-4 py-2">{{$tarea->title}}</td>
                            <td class="border px-4 py-2">{{$tarea->description}}</td>
                            <td class="border px-4 py-2">{{$tarea->status}}</td>
                            <td class="border px-4 py-2">{{$tarea->dueDate}}</td>
                            <td class="border px-4 py-2">
                                <div class="inline-flex">
                                    <form action="{{url($tarea->id.'/edit')}}" method="get">
                                        @csrf
                                        <input 
                                        class="bg-blue-300 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded-l" 
                                        type="submit" 
                                        value="Editar"
                                        >
                                    </form>
                                    <form action="{{url('destroy/'.$tarea->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input 
                                        class="bg-red-300 hover:bg-red-400 text-white font-bold py-2 px-4 rounded-r" 
                                        type="submit" 
                                        value="Borrar"
                                        onclick="return confirm('¿Deseas eliminar la tarea con la siguiente Información?')"
                                        >
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <a href="{{url('create/')}}" class="bg-emerald-300 hover:bg-emerald-400 text-white font-bold my-2 py-2 px-4 rounded" >Agregar tarea</a>
        </div>
    </div>
@stop




@section('footer')
    @parent
@stop

