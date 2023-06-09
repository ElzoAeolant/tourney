@extends('layouts.app', ['activePage' => 'participant', 'activeButton' => 'TourneyManagement', 'title' => 'Tourney', 'navName' => 'participants'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div class="card card-stats">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center icon-warning">
                                       <img src="{{ asset('images/medals/gold-medal.png') }}" width="80">
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="numbers">
                                        <p class="card-category">{{ $first }}</p>
                                        <h4 class="card-title">Primer Lugar</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <hr>
                            <div class="stats">
                                <i class="fa fa-gift"></i> {{ __('GPS Strike 4') }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="card card-stats">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center icon-warning">
                                        <img src="{{ asset('images/medals/silver-medal.png') }}" width="80">
                                     </div>
                                </div>
                                <div class="col-7">
                                    <div class="numbers">
                                        <p class="card-category">{{ $second }}</p>
                                        <h4 class="card-title">{{ __('Segundo Lugar') }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <hr>
                            <div class="stats">
                                <i class="fa fa-gift"></i> {{ __('Smartphone Redmi Note 12') }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="card card-stats">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center icon-warning">
                                        <img src="{{ asset('images/medals/bronze-medal.png') }}" width="80">
                                     </div>
                                </div>
                                <div class="col-7">
                                    <div class="numbers">
                                        <p class="card-category">{{ $third }}</p>
                                        <h4 class="card-title">{{ __('Tercer Lugar') }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <hr>
                            <div class="stats">
                                <i class="fa fa-gift"></i> {{ __('Lentes de Sol Polarizados ZAIL') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card data-tables">

                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">{{ __('Participantes') }}</h3>
                                    <p class="text-sm mb-0">
                                        {{ __('Listado') }}
                                    </p>
                                </div>
                                @can('create', App\Models\Participant::class)
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
                                        <th>{{ __('VALIDADO') }}</th>
                                        <th>{{ __('FECHA') }}</th>
                                        @can('manage-items', App\Models\User::class)
                                            <th class="disabled-sorting text-right">{{ __('Actions') }}</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>{{ __('ID') }}</th>
                                        <th>{{ __('FOLIO') }}</th>
                                        <th>{{ __('VALIDADO') }}</th>
                                        <th>{{ __('FECHA') }}</th>
                                        @can('manage-items', App\Models\User::class)
                                            <th class="disabled-sorting text-right">{{ __('Actions') }}</th>
                                        @endcan
                                    </tr>
                                </tfoot>
                                <tbody>

                                    @foreach ($participants as $participant)
                                        <tr>
                                            <td>{{ $participant->id }}</td>
                                            <td>{{ $participant->folio }}</td>
                                            
                                            <td><span class="badge badge-default" style="background-color:{{ $participant->validated==1?'green':'red' }}">{{  $participant->validated==1?'SI':'NO' }}</span></td>
                                            
                                            <td>{{ $participant->created_at }}</td>
                                            @can('manage-items', App\Models\User::class)
                                                <td class="text-right">
                                                    @if (auth()->user()->can('update', $participant) ||
                                                            auth()->user()->can('delete', $participant))
                                                        @can('update', $participant)
                                                            <a href="{{ route('participant.edit', $participant->id) }}"
                                                                class="btn btn-link btn-warning edit d-inline-block"><i
                                                                    class="fa fa-edit"></i></a>
                                                        @endcan
                                                        @if (auth()->user()->can('delete', $participant))
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
