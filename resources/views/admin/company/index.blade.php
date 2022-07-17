<x-backend.dashboard>

    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h3>Company Information</h3>
            @if (empty($company))
                <a href="/company/create" class="btn btn-success py-2">Add Company</a>
            @endif

        </div>
        <div class="card-body">
            <table class="table-stripped table">
                <thead>
                    <tr>
                        <th>Company Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Logo</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        @if (!empty($company))
                        <td>{{$company->name}}</td>
                        <td>{{$company->email}}</td>
                        <td>{{$company->contact}}</td>
                        <td>{{$company->address}}</td>
                        <td><img src="{{asset($company->logo)}}"  alt=""></td>
                        <td>
                            <form action="/company/{{$company->id}}" method="post">
                                @csrf
                                @method('delete')
                            <a href="/company/{{$company->id}}/edit" class="btn btn-success">edit</a>
                            <button type="submit" class="btn btn-danger">delete</button>
                            </form>
                        </td>

                        @endif
                    </tr>
                </thead>
            </table>
        </div>
    </div>

</x-backend.dashboard>
