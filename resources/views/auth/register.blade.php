@extends('auth.layout')
@section('content')
    <main>
        <section class="section-padding section-bg" id="section_2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="custom-text-box">
                        <form class='contacty' action="#" method="post" role="form">
                            <h3>Alumni Registration</h3>
                            <div class="row mb-3">
                                <div class="col-lg-4 col-md-4 col-12">
                                <label for="title" class="form-label">Title</label>
                                    <select name='title' class='form-select'>
                                        <option value=''>-Select-</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                <label for="surname" class="form-label">Surname</label>
                                    <input type="text" name="surname" id="surname" class="form-control"
                                        placeholder="Surname" required>
                                </div>

                                <div class="col-lg-4 col-md-4 col-12">
                                <label for="othernames" class="form-label">Other Names</label>
                                    <input type="text" name="othernames" id="othernames" class="form-control"
                                        placeholder="Other Names" required>
                                </div>
                            </div>
                            <div class="row mb-3">                                
                                <div class="col-lg-4 col-md-4 col-12">
                                <label for="matric_no" class="form-label">Matric. No</label>
                                    <input type="text" name="matric_no" id="matric_no" class="form-control"
                                        placeholder="Matric No." required>
                                </div>

                                <div class="col-lg-4 col-md-4 col-12">
                                <label for="dob" class="form-label">Date of birth</label>
                                    <input type="date" name="dob" id="dob" class="form-control"
                                        placeholder="Date of birth" required>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                <label for="gender" class="form-label">Gender</label>
                                    <select name='gender' class='form-select' required>
                                        <option value=''>-Select-</option>
                                        <option value='Male'>Male</option>
                                        <option value='Female'>Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class='row mb-3'>
                                <div class="col-lg-12 col-md-12 col-12 ">
                                <label class="label" for="nationality">Nationality</label>                                                                        
                                    <div class='form-check form-check-inline'>                                        
                                        <input name='nationality' type="radio" class="form-check-input" id="nationality" value='Nigerian'>
                                        <label class="form-check-label nationality" for="nationality">Nigerian</label>                                                                        
                                    </div>
                                    <div class='form-check form-check-inline'>
                                        <input name='nationality' type="radio" class="form-check-input" id="nationality2" value='Non Nigerian'>
                                        <label class="form-check-label nationality" for="nationality2">Non Nigerian</label>                                                                        
                                    </div>
                                </div>
                            </div>
                           <div class="row mb-3">
                           <div class="col-lg-4 col-md-4 col-12 d-none" id='d-state'>
                                <label for="state" class="form-label">State of Origin</label>
                                    <select name='state' class='form-select'>
                                        <option value=''>-Select-</option>                                        
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 d-none" id="d-lga">
                                <label for="lga" class="form-label">LGA of Origin</label>
                                    <select name='lga' class='form-select'>
                                        <option value=''>-Select-</option>                                        
                                    </select>
                                </div>
                           
                           <div class="col-lg-4 col-md-4 col-12 d-none" id='d-country'>
                                <label for="country" class="form-label">Country</label>
                                    <select name='country' class='form-select'>
                                        <option value=''>-Select-</option>                                        
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 d-none" id='d-region'>
                                <label for="region" class="form-label">State/Region/County</label>
                                    <input type="text" name="region" id="region" class="form-control"
                                        placeholder="State/Region/County" >
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 d-none" id='d-district'>
                                <label for="district" class="form-label">District/LGA</label>
                                    <input type="text" name="district" id="district" class="form-control"
                                        placeholder="District">
                                </div>                               

                           </div>
                           <div class="row mb-3">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <label for="marital_status" class="form-label">Marital Status</label>
                                    <select name='marital_status' class='form-select' required>
                                        <option value=''>-Select-</option>                                        
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                <label for="parent" class="form-label">Name of Parents/Guardians</label>
                                    <input type="text" name="parent" id="parent" class="form-control"
                                        placeholder="Name of Parents/Guardians" >
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Email" required>
                                </div>  
                           </div>
                           <div class="row mb-3">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="text" name="phone" id="phone" class="form-control"
                                     >
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                <label for="faculty" class="form-label">Faculty/Institute</label>
                                    <input type="text" name="faculty" id="faculty" class="form-control"
                                         >
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                <label for="email" class="form-label">Department</label>
                                <input type="text" name="department" id="department" class="form-control"
                                >
                                </div>  
                           </div>
                           <div class="row mb-3">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <label for="year_of_entry" class="form-label">Year of Entry</label>
                                    <input type="text" name="year_of_entry" id="year_of_entry" class="form-control"
                                     >
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                <label for="year_of_grad" class="form-label">Year of Graduation</label>
                                    <input type="text" name="year_of_grad" id="year_of_grad" class="form-control"
                                         >
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                <label for="email" class="form-label">Date of Graduation</label>
                                <input type="date" name="date_of_grad" id="date_of_grad" class="form-control"
                                >
                                </div>  
                           </div>
                           <div class='row mb-3'>
                                <div class="col-lg-12 col-md-12 col-12 ">
                                <label class="label" for="certificate_obtained">Certificate/Diploma/Degree Obtained</label>                                                                        
                                    <div class='form-check form-check-inline'>                                        
                                        <input name='certificate_obtained' type="radio" class="form-check-input" id="certificate_obtained" value='First Degree'>
                                        <label class="form-check-label" for="certificate_obtained">First Degree</label>                                                                        
                                    </div>
                                    <div class='form-check form-check-inline'>
                                        <input name='certificate_obtained' type="radio" class="form-check-input" id="certificate_obtained2" value='Higher Degree'>
                                        <label class="form-check-label" for="certificate_obtained2">Higher Degree</label>                                                                        
                                    </div>
                                    <div class='form-check form-check-inline'>
                                        <input name='certificate_obtained' type="radio" class="form-check-input" id="certificate_obtained3" value='University Diploma'>
                                        <label class="form-check-label" for="certificate_obtained3">University Diploma</label>                                                                        
                                    </div>
                                    <div class='form-check form-check-inline'>
                                        <input name='certificate_obtained' type="radio" class="form-check-input" id="certificate_obtained4" value='Others'>
                                        <label class="form-check-label" for="certificate_obtained4">Others</label>                                                                        
                                    </div>
                                </div>
                            </div>
                           <div class="row mb-3">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <label for="first_degree" class="form-label">First Degree</label>
                                    <select name="first_degree" class="form-select" id="first_degree">
                                    <option value="">-Select-</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                <label for="higher_degree" class="form-label">Higher Degree</label>
                                <select name="higher_degree" class="form-select" id="higher_degree">
                                <option value="">-Select-</option>
                                </select>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                <label for="diploma" class="form-label">University Diploma</label>
                                <select name="diploma" class="form-select" id="diploma">
                                    <option value="">-Select-</option>
                                </select>
                                </div>  
                                <div class="col-lg-4 col-md-4 col-12">
                                <label for="others" class="form-label">Others Specify</label>
                                <input type="text" name="others" id="others" class="form-control"
                                >
                                </div>  
                           </div>
                           <div class="row mb-3">
                            <div class="col-lg-6 col-md-6 col-12">
                            <label for="address" class="form-label">Residential Address</label>
                                <textarea class="form-control" rows="3" name="address"></textarea>
                            </div>
                           </div>
                           <div class="row mb-3">
                            <div class="col-lg-6 col-md-6 col-12">
                            <button type='submit' class='btn btn-success'>Submit</button>
                            </div>
                           </div>
                        </form>
                    
                        </div>

                    </div>

                </div>
            </div>
        </section>
    </main>
    @endsection