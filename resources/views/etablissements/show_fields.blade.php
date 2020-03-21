<!-- Created At Field -->
<div class="form-group col-md-6">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $etablissement->name }}</p>
</div>
<div class="form-group col-md-6">
    {!! Form::label('location', 'Location:') !!}
    <p>{{ $etablissement->location }}</p>
</div>
<div class="form-group col-md-6">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $etablissement->description }}</p>
</div>
<!-- Created At Field -->
<div class="form-group col-md-6">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $etablissement->created_at }}</p>
</div>



