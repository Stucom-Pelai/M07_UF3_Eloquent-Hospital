<br><br>
<div>
    <div class="content">
        <div class="container">
        <div class="text-info" wire:loading>Loading..</div>
        <div class="form-group">
            <br><h1 class="text-info"> Welcome {{$patient->name }}</h1><br>
        </div>
        <div>
            <h2>NEXT APPOINTMENTS</h2>
        
            <div id="appointment">
                @if(isset($message))
                <br>
                    <h3>{{ $message }}</h3>
                <br>
                @else
                    <br>
                    <h3>Date: {{ $appointment->intime }}</h3>
                    <h3>Descript: {{ $appointment->description }}</h3>
                    <br>
                @endif
            </div>
       
        </div>
    </div>
</div>
<style>
    h1{
        font-size: 35px;
    }
    #appointment{
        background-color: #157fda99;
        text-align: justify;
        padding-left: 5%;
        padding-right: 5%;
        border-radius: 10px;
        display: inline-block;
    }
    #appointment h3{
        color: white;
    }
</style>