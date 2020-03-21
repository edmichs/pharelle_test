<!-- Created At Field -->
<div class="form-group col-md-6">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $role->name }}</p>
</div>
<div class="form-group col-md-6">
    {!! Form::label('guard_name', 'Description:') !!}
    <p>{{ $role->guard_name }}</p>
</div>
<div class="form-group col-md-6">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $role->created_at }}</p>
</div>

