<!-- Created At Field -->
<div class="form-group col-md-6">
    {!! Form::label('name', 'Name :') !!}
    <p>{{ $user->name }}</p>
</div>
<!-- Created At Field -->
<div class="form-group col-md-6">
    {!! Form::label('email', 'email :') !!}
    <p>{{ $user->email }}</p>
</div>
<!-- Created At Field -->
<div class="form-group col-md-6">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $user->created_at }}</p>
</div>


