<div class="table-responsive">
    <table class="table" id="etablissements-table">
        <thead>
            <tr>
                <th>name</th>
                <th>location</th>
                <th>description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($etablissements as $etablissement)
            <tr>
                <td>{{$etablissement->name}}</td>
                <td>{{$etablissement->location}}</td>
                <td>{{$etablissement->description}}</td>
                <td>
                    {!! Form::open(['route' => ['etablissements.destroy', $etablissement->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('etablissements.show', [$etablissement->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('etablissements.edit', [$etablissement->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
