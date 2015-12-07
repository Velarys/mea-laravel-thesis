@extends('layouts/admin')





@section('content')

    <div class="row" id="patient-info">
        
        <div class="col-sm-2">
            
            <div class="row">
                <div class="col-sm-12"><strong>Patient Name:</strong></div>
                <div class="col-sm-12"><strong>Date of Birth:</strong></div>
                <div class="col-sm-12"><strong>Age:</strong></div>
                <div class="col-sm-12"><strong>Sex:</strong></div>
                <div class="col-sm-12"><strong>Level of Education:</strong></div>
                <div class="col-sm-12"><strong>Address:</strong></div>
                <div class="col-sm-12"><strong>Status:</strong></div>
            </div>
            
        </div>
        
        <div class="col-sm-4">
            
            <div class="row">
                <div class="col-sm-12"><i>{{ $patient->firstname}} {{ $patient->lastname}}</i></div>
                <div class="col-sm-12"><i>{{ $patient->birthdate}}</i></div>
                <div class="col-sm-12"><i>Compute Later</i></div>
                <div class="col-sm-12"><i>
                    @if ($patient->sex == 'M')
                        Male
                    @else  
                        Female
                    @endif
                </i></div>                
                <div class="col-sm-12"><i>
                    @if ($patient->levelofeducation == 2)
                        Tertiary
                    @elseif ($patient->levelofeducation == 1)
                        Secondary
                    @else
                        Elementary
                    @endif
                </i></div>
                <div class="col-sm-12"><i>{{ $patient->address}}</i></div>
                <div class="col-sm-12"><i>
                    @if ($patient->status == true)
                        Active
                    @else  
                        Inactive
                    @endif
                </i></div>
            </div>
        
        </div>
    </div>

    <hr>

    <div class="row" >
        <div class="col-sm-12" id="symptoms-data"></div>
    </div>

    <div class="row">
        <div class="col-sm-12" id="completed-by"></div>
    </div>

    <div class="overflow:hidden">
        <span style="float:left">
            <a href="{{ URL::previous() }}" class="btn btn-primary" role="button">Return to Patient List</button></a>
        </span>
        <span style="float:right">
            <a href="#" class="btn btn-primary" role="button">Generate PDF</button></a>
        </span>
        <br>
    </div>

    <!--<div id="chartdiv" style="width	: 100%; height : 500px;"></div>-->

@stop

@section('scripts')
    
    <script src="{{URL::asset('../node_modules/amcharts3/amcharts/amcharts.js')}}"></script>
    <script src="{{URL::asset('../node_modules/amcharts3/amcharts/serial.js')}}"></script>
    <script src="{{URL::asset('../node_modules/amcharts3/amcharts/themes/light.js')}}"></script>
    <script>
        
       
        
        var slug = '{{ $patient->firstname}}_{{ $patient->lastname}}';

    </script>

<script src="{{URL::asset('js/custom/symptom-chart.js')}}"></script>

@stop