@extends('layouts.header')
@section('content')
<div class="container mt-5">
    <h4 class="mb-4">Liste des actualités</h4>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('ajout_actualite') }}" class="btn btn-primary mb-3">+ Ajouter une actualité</a>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Titre</th>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Description complète</th>

                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($table as $tableau)
                    <tr>
                        <td>{{$tableau->id}}</td>
                        <td>
                            <img src="{{ asset($tableau->image) }}" alt="Image" width="80">
                        </td>
                        <td>{{ $tableau->titre }}</td>
                        <td>{{ \Carbon\Carbon::parse($tableau->date)->format('d/m/Y') }}</td>
                        <td>{{ Str::limit($tableau->description, 100) }}</td>
                        <td>{{ Str::limit($tableau->description_complete, ) }}</td>
                        <td class="d-flex">
                            <a href="{{route('edit',$tableau->id)}}" class="btn btn-warning btn-sm"><i class="bi bi-arrow-bar-up"></i></a>

                            <form action="{{route('delete',$tableau->id)}}" method="POST" style="display:inline-block;" onsubmit="return confirm('Confirmer la suppression ?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-archive"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach

               
            </tbody>
        </table>
    </div>
</div>
@endsection
