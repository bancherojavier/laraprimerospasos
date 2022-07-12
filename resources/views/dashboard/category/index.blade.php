@extends('dashboard.layout')

@section('content')

    <a class="btn btn-success my-2" href="{{ route('category.create')}}">Crear</a>

    <table class="table mb-3">
        <thead>
            <tr>
                <th>
                    Titulo
                </th>

                <th>
                    Acciones
                </th>
            </tr>
        </thead>

        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>
                        {{$category->title}}
                    </td>
                  
                    <td>
                        <a class="btn btn-primary mt-2" href="{{ route('category.edit',$category)}}">editar</a>
                        <a class="btn btn-primary mt-2" href="{{ route('category.show',$category)}}">Ver</a>
                        <form action="{{ route('category.destroy',$category)}}" method="POST">
                            @method("DELETE")
                            @csrf 
                            
                            <button class="btn btn-danger mt-2" type="submit">Eliminar</button>
                        </form>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$categories->links()}}
@endsection