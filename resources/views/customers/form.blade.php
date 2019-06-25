<!--
        $company && $customer
            are accessible here!

        this has been used by 
            create && edit views

        this part gets an customer and fills the form fields with it
        
        customer => may be an empty object or an existing customer 

        we just have a couple of filds, that should be filled, 
            no form attributes && noting else
            that should filled by $company && $customer objects!  
-->



<!-- name -->
<div class="bg-danger rounded text-light">{{ $errors->first('name') }}</div>
<div class="form-group">
    <label for="example1">Name:</label>
    <input type="text" value="{{ old('name') ?? $customer->name }}" name="name" class="form-control" id="example1" placeholder="Enter Name">
</div>



<!-- family -->
<div class="bg-danger rounded text-light">{{ $errors->first('family') }}</div>
<div class="form-group">
    <label for="example2">Family:</label>
    <input type="text" value="{{ old('family') ?? $customer->family }}" name="family" class="form-control" id="example2" placeholder="Enter Family">
</div>



<!-- register status -->
<div class="bg-danger text-light">{{ $errors->first('registered') }}</div>
<div class="form-group">
    <label for="registered">Status:</label>
    <select name="registered" id="registered" class="form-control">
        <option value="0" {{ $customer->registered == 'Unregistered' ? "selected":"" }} >UnRegisterd</option>
        <option value="1" {{ $customer->registered == 'Registered'   ? "selected":"" }} >Registerd</option>
    </select>
</div>



<!-- company -->
<div class="bg-danger text-light">{{ $errors->first('company_id') }}</div>
<div class="form-group">
    <label for="company">Company:</label>
    <select name="company_id" id="company" class="form-control">
        @foreach ($companies as $company)
            <option value="{{ $company->id }}" {{ ($customer->company_id==$company->id) ? "selected":"" }} >{{ $company->name }}</option>
        @endforeach
    </select>
</div>


@csrf