@extends('layouts.master')

@section('content')
<div class="page-container">
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light" id="form_wizard_1">
                        <div class="portlet-title">
                            <div class="caption">
                                <span class="caption-subject font-green-sharp bold uppercase">
                                <i class="fa fa-user"></i> Account Information - <span class="step-title">Step 1 of 2 </span>
                                </span>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <form action="javascript:;" class="form-horizontal" id="submit_form" method="POST" action="{{ route('register') }}">
                                <div class="form-wizard">
                                    <div class="form-body">
                                        <ul class="nav nav-pills nav-justified steps">
                                            <li>
                                                <a href="#tab1" data-toggle="tab" class="step">
                                                <span class="number">
                                                1 </span>
                                                <span class="desc">
                                                <i class="fa fa-check"></i> Account Setup </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab2" data-toggle="tab" class="step">
                                                <span class="number">
                                                2 </span>
                                                <span class="desc">
                                                <i class="fa fa-check"></i> Profile Setup </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab3" data-toggle="tab" class="step">
                                                <span class="number">
                                                3 </span>
                                                <span class="desc">
                                                <i class="fa fa-check"></i> Confirm </span>
                                                </a>
                                            </li>

                                        </ul>
                                        <div id="bar" class="progress progress-striped" role="progressbar">
                                            <div class="progress-bar progress-bar-success">
                                            </div>
                                        </div>
                                        <div class="tab-content">
                                            <div class="alert alert-danger display-none">
                                                <button class="close" data-dismiss="alert"></button>
                                                You have some form errors. Please check below.
                                            </div>
                                            <div class="alert alert-success display-none">
                                                <button class="close" data-dismiss="alert"></button>
                                                Your form validation is successful!
                                            </div>
                                            <div class="tab-pane active" id="tab1">
                                                <h3 class="block">Provide your account details</h3>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Email <span class="required">
                                                    * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" name="email"/>
                                                        <span class="help-block">
                                                        Provide your email address </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Password <span class="required">
                                                    * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="password" class="form-control" name="password" id="submit_form_password"/>
                                                        <span class="help-block">
                                                        Provide your password. </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Confirm Password <span class="required">
                                                    * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="password" class="form-control" name="rpassword"/>
                                                        <span class="help-block">
                                                        Confirm your password </span>
                                                    </div>
                                                </div>
                                              
                                            </div>
                                            <div class="tab-pane" id="tab2">
                                                <h3 class="block">Provide your profile details</h3>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Firstname <span class="required">
                                                    * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" name="firstname"/>
                                                        <span class="help-block">
                                                        Provide your firstname </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Middlename <span class="required">
                                                    * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" name="middlename"/>
                                                        <span class="help-block">
                                                        Provide your middlename </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Lastname <span class="required">
                                                    * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" name="lastname"/>
                                                        <span class="help-block">
                                                        Provide your lastname </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Gender <span class="required">
                                                    * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <div class="radio-list">
                                                            <label>
                                                            <input type="radio" name="gender" value="M" data-title="Male"/>
                                                            Male </label>
                                                            <label>
                                                            <input type="radio" name="gender" value="F" data-title="Female"/>
                                                            Female </label>
                                                        </div>
                                                        <div id="form_gender_error">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Phone Number <span class="required">
                                                    * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" name="phone"/>
                                                        <span class="help-block">
                                                        Provide your phone number </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Birthday <span class="required">
                                                    * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="date" class="form-control" name="birthday"/>
                                                        <span class="help-block">
                                                        Provide your birthday </span>
                                                    </div>
                                                </div>
                                                <h3 class="block">Provide your address detail</h3>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Purok <span class="required">
                                                    * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" name="purok"/>
                                                        <span class="help-block">
                                                        Provide your purok </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Barangay <span class="required">
                                                    * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" name="barangay"/>
                                                        <span class="help-block">
                                                        Provide your barangay </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">City <span class="required">
                                                    * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" name="city"/>
                                                        <span class="help-block">
                                                        Provide your city </span>
                                                    </div>
                                                </div>
                                              
                                            </div>
                                            <div class="tab-pane" id="tab3">
                                                <h3 class="block">Confirm your account</h3>
                                                <h4 class="form-section">Account</h4>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Email:</label>
                                                    <div class="col-md-4">
                                                        <p class="form-control-static" data-display="email">
                                                        </p>
                                                    </div>
                                                </div>
                                                <h4 class="form-section">Profile</h4>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Firstname:</label>
                                                    <div class="col-md-4">
                                                        <p class="form-control-static" data-display="firstname">
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Middlename:</label>
                                                    <div class="col-md-4">
                                                        <p class="form-control-static" data-display="middlename">
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Lastname:</label>
                                                    <div class="col-md-4">
                                                        <p class="form-control-static" data-display="lastname">
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Birthday:</label>
                                                    <div class="col-md-4">
                                                        <p class="form-control-static" data-display="birthday">
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Gender:</label>
                                                    <div class="col-md-4">
                                                        <p class="form-control-static" data-display="gender">
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Phone Number:</label>
                                                    <div class="col-md-4">
                                                        <p class="form-control-static" data-display="phone">
                                                        </p>
                                                    </div>
                                                </div>
                                                <h4 class="form-section">Address</h4>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Purok:</label>
                                                    <div class="col-md-4">
                                                        <p class="form-control-static" data-display="purok">
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Barangay:</label>
                                                    <div class="col-md-4">
                                                        <p class="form-control-static" data-display="barangay">
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">City:</label>
                                                    <div class="col-md-4">
                                                        <p class="form-control-static" data-display="city">
                                                        </p>
                                                    </div>
                                                </div>    
                                                <div class="form-group">
                                                    <label class="control-label col-md-3"><span class="required">
                                                     </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <div class="checkbox-list">
                                                            <label>
                                                           
                                                            <input  type="checkbox" />I agree to the <a href="javascript:;">terms and conditions</a>.</label>
                                                        </div>
                                                        <div id="form_payment_error">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <a href="javascript:;" class="btn default button-previous">
                                                <i class="m-icon-swapleft"></i> Back </a>
                                                <a href="javascript:;" class="btn blue button-next">
                                                Continue <i class="m-icon-swapright m-icon-white"></i>
                                                </a>
                                                <a href="javascript:;" class="btn green" style="display:none;">
                                                Submit <i class="m-icon-swapright m-icon-white"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="scroll-to-top">
    <i class="icon-arrow-up"></i>
</div>

@endsection
