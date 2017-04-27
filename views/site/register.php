<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\Pjax;
//use yii\bootstrap\ActiveForm;
use yii\widgets\ActiveForm;
use app\models\Utility;

$this->title = 'My Yii Application';
?>
<div class="container1">

    <div class="body-content">
        <div class="page-content-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="portlet light " id="form_wizard_1">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class=" icon-layers font-red"></i>
                                                <span class="caption-subject font-red bold uppercase"> Registration Form -
                                                    <span class="step-title"> Step 1 of 4 </span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="portlet-body form">
                                            <?php $form = ActiveForm::begin(['id' => 'submit_form']); ?>
                                                <div class="form-wizard">
                                                    <div class="form-body col-md-12">
                                                        <ul class="nav nav-pills nav-justified steps">
                                                            <li>
                                                                <a href="#tab1" data-toggle="tab" class="step">
                                                                    <span class="number"> 1 </span>
                                                                    <span class="desc">
                                                                        <i class="fa fa-check"></i> Personal Details </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#tab2" data-toggle="tab" class="step">
                                                                    <span class="number"> 2 </span>
                                                                    <span class="desc">
                                                                        <i class="fa fa-check"></i> Contact Information </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#tab3" data-toggle="tab" class="step active">
                                                                    <span class="number"> 3 </span>
                                                                    <span class="desc">
                                                                        <i class="fa fa-check"></i> Banking Services </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#tab4" data-toggle="tab" class="step">
                                                                    <span class="number"> 4 </span>
                                                                    <span class="desc">
                                                                        <i class="fa fa-check"></i> Confirm </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div id="bar" class="progress progress-striped" role="progressbar">
                                                            <div class="progress-bar progress-bar-success"> </div>
                                                        </div>
                                                        <div class="tab-content">
                                                            <div class="alert alert-danger display-none">
                                                                <button class="close" data-dismiss="alert"></button> You have some form errors. Please check below. </div>
                                                            <div class="alert alert-success display-none">
                                                                <button class="close" data-dismiss="alert"></button> Your form validation is successful! </div>
                                                            <div class="tab-pane active" id="tab1">
                                                                <h3 class="block">Provide your account details</h3>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">First name
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" class="form-control" name="Profile[FirstName]" id="FirstName" />
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Last name
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" class="form-control" name="Profile[LastName]" id="LastName" />
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Gender
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <div class="radio-list">
                                                                            <label>
                                                                                <input type="radio" name="Profile[Gender]" value="M" data-title="Male" /> Male </label>
                                                                            <label>
                                                                                <input type="radio" name="Profile[Gender]" value="F" data-title="Female" /> Female </label>
                                                                        </div>
                                                                        <div id="form_gender_error"> </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Date of birth
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" class="form-control" name="Profile[DateOfBirth]" />
                                                                        <span class="help-block"> (DD/MM/YYYY) </span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Occupation
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" class="form-control" name="Profile[Occupation]" id="Occupation" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="tab2">
                                                                <h3 class="block">Provide your contact details</h3>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Phone number
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" class="form-control" name="Profile[Phone]" id="Phone" />
                                                                    </div>
                                                                </div>
																<div class="form-group">
                                                                    <label class="control-label col-md-3">Address</label>
                                                                    <div class="col-md-4">
                                                                        <textarea class="form-control" rows="3" name="Profile[Address]"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">City/Town
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" class="form-control" name="Profile[City]" />
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">State</label>
                                                                    <div class="col-md-4">
                                                                        <select name="Profile[State]" id="State" class="form-control">
                                                                            <option value=""></option>
                                                                            <option value="Lagos">Lagos</option>
																			<option value="Abuja">Abuja</option>
																			<option value="Port Harcourt">Port Harcourt</option>
																		</select>
                                                                    </div>
                                                                </div>                                                               
                                                                
                                                            </div>
                                                            <div class="tab-pane" id="tab3">
                                                                <h3 class="block">Specify your preferred services</h3>
																<div class="form-group">
                                                                    <label class="control-label col-md-3">Account type
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <div class="radio-list">
                                                                            <label>
                                                                                <input type="radio" name="Profile[AccountType]" value="Savings" data-title="Savings" /> Savings </label>
                                                                            <label>
                                                                                <input type="radio" name="Profile[AccountType]" value="Current" data-title="Current" /> Current </label>
																			<label>
                                                                                <input type="radio" name="Profile[AccountType]" value="Fixed Deposit" data-title="Fixed Deposit" /> Fixed Deposit </label>
                                                                        </div>
                                                                        <div id="form_vas_error"> </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Means of identification</label>
                                                                    <div class="col-md-4">
                                                                        <select name="Profile[MeansOfIdentification]" id="MeansOfIdentification" class="form-control">
                                                                            <option value=""></option>
                                                                            <option value="National ID">National ID</option>
																			<option value="Drivers License">Drivers License</option>
																			<option value="International Passport">International Passport</option>
																		</select>
                                                                    </div>
                                                                </div>
																<div class="form-group">
                                                                    <label class="control-label col-md-3">Identification number
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" class="form-control" name="Profile[IdentificationNumber]" id="IdentificationNumber" />
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Value added services
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <div class="checkbox-list">
                                                                            <label>
                                                                                <input type="checkbox" name="Profile[ValueAddedService][]" value="Debit Card" data-title="Debit Card" /> Debit Card </label>
                                                                            <label>
                                                                                <input type="checkbox" name="Profile[ValueAddedService][]" value="Check book" data-title="Check book" /> Check book </label>
																			<label>
                                                                                <input type="checkbox" name="Profile[ValueAddedService][]" value="Email alert" data-title="Email alert" /> Email alert </label>
                                                                        </div>
                                                                        <div id="form_vas_error"> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="tab4">
                                                                <h3 class="block">Confirm your details</h3>
                                                                <h4 class="form-section">Personal details</h4>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">First name:</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static" data-display="Profile[FirstName]"> </p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Middle name:</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static" data-display="Profile[MiddleName]"> </p>
                                                                    </div>
                                                                </div>
																<div class="form-group">
                                                                    <label class="control-label col-md-3">Last name:</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static" data-display="Profile[LastName]"> </p>
                                                                    </div>
                                                                </div>
																<div class="form-group">
                                                                    <label class="control-label col-md-3">Gender:</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static" data-display="Profile[Gender]"> </p>
                                                                    </div>
                                                                </div>
																<div class="form-group">
                                                                    <label class="control-label col-md-3">Occupation:</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static" data-display="Profile[Occupation]"> </p>
                                                                    </div>
                                                                </div>
																<div class="form-group">
                                                                    <label class="control-label col-md-3">Date of birth:</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static" data-display="Profile[DateOfBirth]"> </p>
                                                                    </div>
                                                                </div>
                                                                <h4 class="form-section">Contact details</h4>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Phone number:</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static" data-display="Profile[Phone]"> </p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Address:</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static" data-display="Profile[Address]"> </p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">City:</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static" data-display="Profile[City]"> </p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">State:</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static" data-display="Profile[State]"> </p>
                                                                    </div>
                                                                </div>                                                                
                                                                <h4 class="form-section">Billing</h4>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Means of identification:</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static" data-display="Profile[MeansOfIdentification]"> </p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Identification number:</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static" data-display="Profile[IdentificationNumber]"> </p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Account Type:</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static" data-display="Profile[AccountType]"> </p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Value Added Service:</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static" data-display="Profile[ValueAddedService][]"> </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions">
                                                        <div class="row">
                                                            <div class="col-md-offset-3 col-md-9">
                                                                <a href="javascript:;" class="btn default button-previous">
                                                                    <i class="fa fa-angle-left"></i> Back </a>
                                                                <a href="javascript:;" class="btn btn-outline green button-next"> Continue
                                                                    <i class="fa fa-angle-right"></i>
                                                                </a>
                                                                <a href="javascript:;" class="btn green button-submit"> Submit
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php ActiveForm::end(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
        
    </div>
</div>
