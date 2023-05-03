@extends('layouts.app', ['activePage' => 'participant', 'activeButton' => 'TourneyManagement', 'title' => 'Tourney', 'navName' => 'participants' ])

@section('content')
    <div class="content">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header ">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{ __('Edit Participant') }}</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('participant.index') }}" class="btn btn-sm btn-warning">{{ __('Back to list') }}</a>
                        </div>
                    </div>
                </div>
                
                <div class="card-body ">
                    <form method="post" action="{{ route('participant.update', $participant->id) }}" >
                        @csrf 
                        @method('patch')
                        <h6 class="heading-small text-muted mb-4">{{ __('Participant data') }}</h6> 
                        <fieldset>
                            <div class="form-group">
                                <label for="example-color-input" class="form-control-label{{ $errors->has('folio') ? ' has-danger' : '' }}">{{__('FOLIO')}}</label>
                                <input disabled class="form-control{{ $errors->has('folio') ? ' is-invalid' : '' }}" name="folio" maxlength="30" value="{{ old('folio', $participant->folio) }}" placeholder="{{__('folio')}}">
                                <a href="{{$participant->url_pepebot }}" target="_blank" ><img src="{{$participant->url_pepebot }}" width="240" height="320">Ver Original</a>
                                @include('alerts.feedback', ['field' => 'folio'])
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group">
                                <label for="example-color-input" class="form-control-label{{ $errors->has('url_pepebot') ? ' has-danger' : '' }}">{{__('IMAGEN')}}</label>
                                
                                @include('alerts.feedback', ['field' => 'url_pepebot'])
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-warning">{{ __('Update participant') }}</button>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/19.1.1/classic/ckeditor.js"></script>
    <script>
    $(document).ready(function () {
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
            } )
            .catch( error => {
        } );
        
    });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            // Init Sliders
            $('.datepicker').datetimepicker({
                format: 'DD-MM-YYYY',
                icons: {
                    time: "fa fa-clock-o",
                    date: "fa fa-calendar",
                    up: "fa fa-chevron-up",
                    down: "fa fa-chevron-down",
                    previous: 'fa fa-chevron-left',
                    next: 'fa fa-chevron-right',
                    today: 'fa fa-screenshot',
                    clear: 'fa fa-trash',
                    close: 'fa fa-remove'
                }
            });
        });
    </script>
@endpush