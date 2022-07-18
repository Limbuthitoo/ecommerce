<x-backend.dashboard>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h3>Units</h3>

                <a href="/unit/create" class="btn btn-success py-2">Add Unit</a>


        </div>
        <div class="card-body">
            <table class="table-stripped table">
                <thead>
                    <tr>
                        <th>Unit</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($units as $unit)
                        @if (!empty($unit))
                            <tr>

                                <td>{{$unit->unit}}</td>
                                <td>
                                    <form action="/unit/{{$unit->id}}" method="post">
                                        @csrf
                                        @method('delete')
                                    <a href="/unit/{{$unit->id}}/edit" class="btn btn-success">edit</a>
                                    <button type="submit" class="btn btn-danger">delete</button>
                                    </form>
                                </td>

                            </tr>
                        @endif
                    @endforeach
                </thead>
            </table>
        </div>
    </div>
</x-backend.dashboard>
