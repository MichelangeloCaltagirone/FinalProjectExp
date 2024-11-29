@extends("layouts.app")

@section("content")

<div class="container">

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Project Name</th>
            <th scope="col">Category</th>
            <th scope="col">Technologies</th>
            <th scope="col">Author Name</th>
            <th scope="col">Description</th>
            <th scope="col">Operations</th>
          </tr>
        </thead>

        <tbody>
            @forelse ($projects as $project)
            <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->name }}</td>
                <td>{{ $project->category->name }}</td>
                <td>
                    @forelse ($project->technologies as $technology)
                        <span class="badge text-bg-danger">{{ $technology->name }}</span>
                    @empty
                        No technologies
                    @endforelse
                </td>
                <td>{{ $project->author }}</td>
                <td>{{ $project->description }}</td>
                <td>
                    <a href="/admin/projects/{{$project->id}}" class="btn btn-sm btn-primary mt-2">Vedi dettagli</a>
                    <a href="/admin/projects/{{$project->id}}/edit" class="btn btn-sm btn-success mt-2">Modifica</a>
                    <form action="{{ route("admin.projects.delete", $project->id) }}" method="POST" class="d-inline">
                        @method("DELETE")
                        @csrf

                        <button type="submit" class="btn btn-sm btn-warning mt-2">
                            Elimina
                        </button>

                    </form>
                </td>
            </tr>

            @empty
                <h1>No Projects available...</h1>
            @endforelse

          <tr>
        </tbody>
      </table>

      <div>
        {{  $projects->links() }}
      </div>

</div>

@endsection
