<div class="container mt-3">

    <nav aria-label="breadcrumb text-dark">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#" class="text-dark"><i class="fas fa-people-carry mr-2 mt-1"></i>Supplier</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Supplier</li>
        </ol>
    </nav>



    <form>
        <div class="form-group">
            <label for="company">Company Name</label>
            <input type="text" id="company" class="form-control">
            <small id="companyHelpBlock" class="form-text text-muted">
                Must be 8-50 characters long.
            </small>
        </div>
        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" class="form-control">
            <small id="passwordHelpBlock" class="form-text text-muted">
                Must be 8-50 characters long.
            </small>
        </div>

        <div class="form-group">
            <label for="contactno">Contact No.</label>
            <input type="text" id="contactno" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="street">Street</label>
            <input type="text" id="street" class="form-control">
        </div>

        <div class="form-row">
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" id="city" class="form-control">
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="form-group">
                    <label for="state">State</label>
                    <input type="text" id="state" class="form-control">
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" id="country" class="form-control">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="bank">Bank account</label>
            <input type="text" id="bank" class="form-control">
        </div>

        <div class="d-flex flex-row-reverse bd-highlight mb-5">
            <a href="" class="btn btn-primary btn-md mt-3"><i class="fas fa-save mr-2"></i>Add</a>
        </div>

    </form>

</div>
