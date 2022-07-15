<x-backend.dashboard>

    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div><h3>Enter Company Details</h3></div>
            <div><a class="btn btn-danger" href="/company">Back</a></div>
        </div>
        <div class="card-body">
            <form action="/company" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <x-backend.label for="name"><span class="fw-bold">Company Name:</span></x-backend.label>
                    <x-backend.input name="name" type="text" placeholder="Enter Company Name"/>
                </div>
                <div class="form-group">
                    <x-backend.label for="email"><span class="fw-bold">Company Email:</span></x-backend.label>
                    <x-backend.input name="email" type="email" placeholder="Enter Company Email"/>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <x-backend.label for="address"><span class="fw-bold">Company Address:</span></x-backend.label>
                            <x-backend.input name="address" type="text" placeholder="Enter Company Address"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <x-backend.label for="contact"><span class="fw-bold">Company Contact No:</span></x-backend.label>
                            <x-backend.input name="contact" type="tel" placeholder="888 888 8888"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <x-backend.label for="instagram"><span class="fw-bold">Company Intagram:</span></x-backend.label>
                            <x-backend.input name="instagram" type="text" placeholder="Enter Company Instagram"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <x-backend.label for="youtube"><span class="fw-bold">Company Youtube:</span></x-backend.label>
                            <x-backend.input name="youtube" type="text" placeholder="Enter Company Youtube"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <x-backend.label for="twitter"><span class="fw-bold">Company Twitter:</span></x-backend.label>
                            <x-backend.input name="twitter" type="text" placeholder="Enter Company twitter"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <x-backend.label for="linkedin"><span class="fw-bold">Company Linkedin:</span></x-backend.label>
                            <x-backend.input name="linkedin" type="text" placeholder="Enter Company linkedin"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <x-backend.label for="logo"><span class="fw-bold">Upload Company Logo:</span></x-backend.label>
                    <x-backend.input name="logo" type="file" placeholder="Upload File" />
                </div>
                <div class="form-group"><button type="submit" class="btn btn-success">Add Company</button></div>

            </form>
        </div>
    </div>
</x-backend.dashboard>
