@extends('layouts.app', ['activePage' => 'participant', 'activeButton' => 'TourneyManagement', 'title' => 'Tourney', 'navName' => 'participants'])


@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card data-tables">

                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">{{ __('participants') }}</h3>
                                    <p class="text-sm mb-0">
                                        {{ __('Management') }}
                                    </p>
                                </div>
                                @can('creating', App\Models\Participant::class)
                                    <div class="col-4 text-right">
                                        <a href="{{ route('participant.create') }}"
                                            class="btn btn-sm btn-primary">{{ __('Add participant') }}</a>
                                    </div>
                                @endcan
                            </div>
                        </div>

                        <div class="col-12 mt-2">
                            @include('alerts.success')
                            @include('alerts.errors')
                        </div>

                        <div class="table-responsive py-4" id="participants-table">
                            <table id="datatables" class="table table-striped table-bordered table-hover" cellspacing="0"
                                width="100%" style="width:100% ">
                                <thead>
                                    <tr>
                                        <th>{{ __('ID') }}</th>
                                        <th>{{ __('FOLIO') }}</th>
                                        <th>{{ __('DETALLE') }}</th>
                                        <th>{{ __('IMAGEN') }}</th>
                                        <th>{{ __('TALLA') }}</th>
                                        <th>{{ __('PESO') }}</th>
                                        <th>{{ __('VERIFICADO') }}</th>
                                        <th>{{ __('PARTICIPA') }}</th>
                                        <th>{{ __('FECHA') }}</th>
                                        @can('manage-items', App\Models\User::class)
                                            <th class="disabled-sorting text-right">{{ __('EDITAR') }}</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($participants as $participant)
                                        <tr>
                                            <td>{{ $participant->id }}</td>
                                            <td>{{ $participant->folio }}</td>
                                            <td><b>Tel:</b> {{ $participant->tel }}<br>
                                                <b>Embarcación:</b> {{ $participant->NombreEmbarcacion }}<br>
                                                <b>Zona:</b> {{ $participant->AreaPesca }}<br>
                                                <b>Fecha:</b> {{ $participant->fechaPesca }}<br>
                                                <b>Arte:</b> {{ $participant->artePesca }}<br>
                                            </td>
                                            <td><a target="_blank" href="{{$participant->url_pepebot }}">Ver Imagen</a> </td>                                           
                                            <td>{{ $participant->talla }}</td>
                                            <td>{{ $participant->pesoEviserado }}</td>
                                            <td><span class="badge badge-default" style="background-color:{{ $participant->validated==1?'green':'red' }}">{{  $participant->validated==1?'TRUE':'FALSE' }}</span></td>
                                            <td><span class="badge badge-default" style="background-color:{{ $participant->showed==1?'green':'red' }}">{{  $participant->showed==1?'TRUE':'FALSE' }}</span></td>
                                            <td>{{ $participant->created_at }}</td>
                                            @can('manage-items', App\Models\User::class)
                                                <td class="text-right">
                                                    @if (auth()->user()->can('update', $participant) ||
                                                            auth()->user()->can('delete', $participant))
                                                        @can('update', $participant)
                                                            <a href="{{ route('participant.edit', $participant) }}"
                                                                class="btn btn-link btn-warning edit d-inline-block"><i
                                                                    class="fa fa-edit"></i></a>
                                                        @endcan
                                                        @if (auth()->user()->can('deleteit', $participant))
                                                            <form class="d-inline-block"
                                                                action="{{ route('participant.destroy', $participant->id) }}"
                                                                method="POST">
                                                                @method('delete')
                                                                @csrf
                                                                <a class="btn btn-link btn-danger "
                                                                    onclick="confirm('{{ __('Are you sure you want to delete this participant?') }}') ? this.parentElement.submit() : ''"s><i
                                                                        class="fa fa-times"></i></a>
                                                            </form>
                                                        @endif
                                                    @endif
                                                </td>
                                            @endcan
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatables').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                responsive: true,
                columnDefs: [{
                    "type": "num",
                    "targets": 0
                }],
                language: {
                    url: "https://cdn.datatables.net/plug-ins/1.12.1/i18n/es-MX.json"
                }

            });

            var table = $('#datatables').DataTable();

            // Delete a record
            table.on('click', '.remove', function(e) {
                $tr = $(this).closest('tr');
                table.row($tr).remove().draw();
                e.preventDefault();
            });

            //Like record
            table.on('click', '.like', function() {
                alert('You clicked on Like button');
            });
        });
    </script>
@endpush
