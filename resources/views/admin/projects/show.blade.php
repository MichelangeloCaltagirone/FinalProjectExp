@extends("layouts.app")

@section("content")

    <div class="container">
        <div class="card p-1">
            <span>{{ $project->id }} </span>
            <h2>Nome progetto: {{ $project->name }} </h2>
            <img width="250" src="{{ asset("/storage/" . $project->image) }}" alt="{{ $project->title }}'s image">
            <h3>Categoria: {{ $project->category->name }}</h3>
            <div class="p-1 my-2">
                <strong>Technologies:</strong>
                @forelse ($project->technologies as $technology)
                        <span class="badge text-bg-danger">{{ $technology->name }}</span>
                    @empty
                        No technologies
                    @endforelse
            </div>
            <h3>Autore: {{ $project->author }} </h3>
            <p>
                <strong>Descrizione:</strong>
                {{ $project->description }}
            </p>
            <div>
                <a href="/admin/projects/{{$project->id}}/edit" class="btn btn-sm btn-success mt-2">Modifica</a>
                <form action="{{ route("admin.projects.delete", $project->id) }}" method="POST" class="d-inline">
                    @method("DELETE")
                    @csrf

                    <button type="submit" class="btn btn-sm btn-warning mt-2">
                        Elimina
                    </button>

                </form>
            </div>
        </div>
    </div>

@endsection
