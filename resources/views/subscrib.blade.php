@extends('layouts.add')

@section('title')
    Admin || Suscription
@endsection

@section('pagetitle')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Liste des abonnés</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Tableau de bord</a></li> --}}
                    {{-- <li class="breadcrumb-item active">Liste</li> --}}
                </ol>
            </div>

        </div>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="mdi mdi-check-all me-2"></i>
                    {{session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="mdi mdi-check-all me-2"></i>
                    {{session('error')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-primary waves-effect waves-light">Tout notifier <i class="bx bx-share-alt"></i></a>
                {{-- <form id="form" action="{{route('notifyAll')}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Tout notifier <i class="bx bx-share-alt"></i></button>
                </form> --}}
                
                {{-- <a href="" class="btn btn-warning"><i class="bx bx-plus">Ajouter Grade</i></a> --}}
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatableSub" class="table align-middle table-nowrap table-hover">
                        <thead class="table-light">
                            <tr>
                                <th scope="col" style="width: 70px;">#</th>
                                <th scope="col">Abonnés</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($newsletters as $new)
                                <tr>
                                    <td>{{$loop->index + 1}}</td>
                                    <td>{{$new->email}}</td>
                                    <td>
                                        <ul class="list-inline font-size-20 contact-links mb-0">
                                            <li class="list-inline-item px-2">
                                                <a href="javascript: void(0);"  title="Patarger" class="text-success"><i class="bx bx-share-alt"></i></a>
                                            </li>
                                            <li class="list-inline-item px-2">
                                                <a href="javascript: void(0);" data-bs-toggle="modal" data-bs-target="#myModalDelete{{$new->id}}" title="Supprimer" class="text-danger"><i class="bx bx-trash"></i></a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                 <!---- Delete modal--->
                                 <div id="myModalDelete{{$new->id}}" class="modal static" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myModalLabel">Retirer l'abonné :<span class="text-danger">{{$new->email}}</span></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="{{route('new.destroy',$new->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <div class="modal-body text-center">
                                                    <svg width="200" height="200" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" 
                                                        image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" 
                                                        viewBox="0 0 512 512">
                                                        <path d="M322.62 254.95h-20.71v195.41h20.71V254.95zM111.53 2.02l105.89 36.64 3.26-9.41c.11-.32.23-.64.38-.94 3.69-9.25 13.28-14.76 23.08-13.35 2.56.37 4.75 1.19 7.16 2.03l60.97 21.1c.82.28 1.62.53 2.4.91 5.11 2.08 9.07 5.94 11.32 10.59 2.21 4.56 2.8 9.93 1.36 15.13-.17.61-.35 1.25-.55 1.83l-3.07 8.89 106.95 37.01c1.43.49 2.47.88 3.84 1.61 6.86 3.69 10.35 11.45 8.43 19.03-.21.82-.44 1.59-.72 2.38l-12.01 34.71c-1.67 4.85-6.97 7.41-11.81 5.74l-19.61-6.79a81.15 81.15 0 0 1 6.56 28.24c1.22.78 2.35 1.68 3.36 2.68 3.52 3.47 5.81 8.14 5.93 13.34.02 1.1-.11 2.21-.21 3.3L388.9 490.72c-.33 3.6-.93 6.8-2.75 10.18-3.52 6.55-10.03 11.1-18.14 11.1H117.06c-5.32 0-9.19-.47-13.67-3.53-5.28-3.61-8.74-9.7-9.35-16.46L68.66 215.9c-.08-.87-.16-1.82-.13-2.68.18-5.15 2.44-9.76 5.94-13.19 2.78-2.73 6.45-4.74 10.43-5.61-.19-.97-.3-1.96-.3-2.99v-66.36c0-8.26 6.76-15.02 15.02-15.02h78.92c8.25 0 15.01 6.76 15.01 15.02v22.45c12.39-10.17 28.24-16.28 45.52-16.28a71.52 71.52 0 0 1 32.54 7.79c4.18-3.5 8.71-6.6 13.54-9.22L79.45 58.63c-4.85-1.68-7.42-6.97-5.75-11.82l.07-.2 11.29-32.63C89.79.32 98.32-2.56 111.53 2.02zm143.75 252.93h-20.72v195.41h20.72V254.95zm-67.34 0h-20.71v195.41h20.71V254.95zm205.55-42.48H89.89c-1.99 0-2.94.34-2.75 2.45l25.11 273.2c.16 1.69.13 5.33 2.53 5.29h253.25c2.08 0 2.32-2.93 2.46-4.44l25.57-274.23c.16-1.77-.89-2.27-2.57-2.27zm-224.75-23.88h9.8v-52.32c0-5.98-4.9-10.87-10.88-10.87h-57.17c-5.98 0-10.87 4.89-10.87 10.87v52.32h69.12zm100.12 2.44H379.1c-2.52-15.25-11.22-28.4-23.44-36.82l-.15-.11-.23-.15-.38-.26-.38-.25-.02-.01-.37-.25-.39-.24-.26-.17-.13-.08-.4-.24-.39-.24-.11-.06-.29-.17-.4-.23-.36-.21-.04-.02-.4-.23-.41-.22-.41-.22-.41-.21-.41-.22-.06-.03-.35-.17-.42-.21-.32-.16-.09-.04-.42-.2-.43-.2-.16-.07-.26-.12-.43-.19-.42-.18-.01-.01-.42-.17-.71-.29-.16-.06-.84-.33-.02-.01-.12-.05-.32-.12-.44-.16-.4-.14-.04-.01-.45-.16-.44-.15-.24-.07-.21-.07-.45-.15-.45-.13-.06-.02-.39-.12-.45-.13-.35-.1-.11-.03-.45-.12-.46-.12-.18-.05-.28-.07-.46-.11-.46-.11h-.01l-.46-.1-.76-.17-.17-.03-.46-.09-.48-.09-.12-.03-.34-.06-.48-.08-.42-.07-.05-.01-.48-.07-.47-.07-.24-.04-.24-.03-.48-.06-.48-.05-.06-.01-.42-.05-.48-.05-.37-.03-.11-.01-.49-.04-.48-.04-.19-.01-.3-.02c-1.18-.08-2.37-.12-3.57-.12-27.51 0-50.44 19.73-55.12 46.67z"/>
                                                    </svg>
                                                    <h4 class="mt-1">Etes-vous sûr de vouloir faire cet action ?</h4>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Annuler</button>
                                                    <button type="submit" class="btn btn-danger waves-effect waves-danger">Oui Rétirer</button>
                                                </div>
                                            </form> 
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>   
        </div>
        <div id="myModal" class="modal static" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel"></span></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{route('notifyAll')}}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <h4 class="mt-1">Voulez-vous laisser :</h4>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    💭 <label for="">Un avis ?</label>
                                    <input type="text" class="form-control" name="avis">
                                </div>
                                <div class="col-md-12 mt-3">
                                    🕔 <label for="">Un délais d'inscription ?</label>
                                    <input type="date" class="form-control" name="dateline">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-success waves-effect waves-success">Partager</button>
                        </div>
                    </form> 
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
    </div>
</div>
</div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
@endsection
@section('js')
<script src="{{asset('/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $("#datatableSub").DataTable({
                "language": {
                    "search": "Recherche",
                    "paginate": {
                        "previous": "Prec",
                        "next": "Suiv"
                    },
                },
                "info": false,
                "lengthChange": false
                
            });
        });
        
    </script>
@endsection