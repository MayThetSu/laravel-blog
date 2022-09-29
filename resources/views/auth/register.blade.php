<x-layout>
<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <h3 class="text-primary text-center py-3">Register Form</h3>
            <div class="card shadow-sm p-4 my-3">
           
            <form method="POST">
            @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input name="name" type="text" class="form-control" value="{{old('name')}}" required>
                    <x-error name="name"></x-errror>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input name="username" type="text" class="form-control" value="{{old('username')}}" required>
                    <x-error name="username"></x-errror>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('email')}}">
                    
                    <x-error name="email"></x-errror>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" value="{{old('password')}}" required>
                    <x-error name="password"></x-errror>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>
</x-layout>