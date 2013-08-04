<?php
    $data['active_link'] = "active";
    $data['active'] = "7";
    
    $url_1 = $this->uri->segment(1);
    $url_2 = $this->uri->segment(2);
    $url_3 = $this->uri->segment(3); 
?>

<?php $this->load->view('common/header', $data);?>

<div class="outside">
<!--	PAGE content -->
            <div class="contents pg_width">
                <div class="overlay_bg rel">
                    <div class="fore_ca">
                        <div class="fore_content">
                            <div class="content_wrap fl">
                                <h1 class="h_1">Registration</h1>
							
                                <?php $this->load->view('common/notifications'); ?>
                                
                                <div class="pg_data">
                                    <ul class="bread_crum" id="breadcrumbs-one">
                                        <li><a href="<?php echo site_url('/'); ?>">Forexray </a></li>
                                        <li><a class="current">Registration</a></li>
                                    </ul>
                                    <div class="pg_data_view">
                                        
                                            <div class="post  pad10 newsbox" style="">
                                                <div class="story bootstrap-scope">
                                                    <div style="">
                                                        <?php 
                                                            $form_data=array(); 
                                                            if ($this->session->flashdata('reg_form_data')){
                                                                $form_data=$this->session->flashdata('reg_form_data');
                                                            }
?>
                                                        <form id="registration_form" class="form-horizontal" method="post" action="<?php echo site_url('registration'); ?>">
                                                            <input type='hidden' name='id' id='id' value=''/> 
                                                            <div class="control-group panel">
                                                                <h5>Account Details</h5>
                                                            </div>
                                                            <blockquote>
                                                            <div class="control-group">
                                                                <label class="control-label" for="firstname">Name<strong class="req">*</strong></label>
                                                                <div class="controls">
                                                                    <input type="text" id="firstname" name="firstname" placeholder="Name" class="required" value="<?php if(!empty($form_data['firstname'])){ echo $form_data['firstname']; } ?>"/>
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label class="control-label" for="email">Email<strong class="req">*</strong></label>
                                                                <div class="controls">
                                                                    <input type="text" id="email" name="email" placeholder="Email ID" class="required email" value="<?php if(!empty($form_data['email'])){ echo $form_data['email']; } ?>"/>
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label class="control-label" for="group_id">Group<strong class="req">*</strong></label>
                                                                <div class="controls">
                                                                    <select id="group_id" name="group_id" placeholder="Group" class="required" >
                                                                        <?php if(!empty($form_data['group_id'])){ $group_id= $form_data['group_id']; }else{ $group_id=0; } ?>
                                                                        <?php echo selectBox('Select', 'groups', 'id,name', ' status=1 ', $group_id, ''); ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="control-group">
                                                                <label class="control-label" for="deposit_id">Deposit(for demo only)</label>
                                                                <div class="controls">
                                                                    <select id="deposit_id" name="deposit_id" placeholder="Deposit" class="">
                                                                        <?php if(!empty($form_data['deposit_id'])){ $deposit_id= $form_data['deposit_id']; }else{ $deposit_id=0;  } ?>
                                                                        <?php echo selectBox('Select', 'deposits', 'id,name', ' status=1 ', $deposit_id, ''); ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label class="control-label" for="password">Password<strong class="req">*</strong></label>
                                                                <div class="controls">
                                                                    <input type="password" id="password" placeholder="Password" class="required" name="password"/>
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label class="control-label" for="confirm_password">Confirm Password<strong class="req">*</strong></label>
                                                                <div class="controls">
                                                                    <input type="password" id="confirm_password" placeholder="Password" class="required" name="confirm_password"/>
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label class="control-label" for="dob">Date of Birth</label>
                                                                <div class="controls">
                                                                    <input type="text" id="dob" name="dob" placeholder="Date of Birth" class="" value="<?php if(!empty($form_data['dob'])){ echo $form_data['dob']; } ?>"/>
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label class="control-label" for="passport">Passport ID /Number</label>
                                                                <div class="controls">
                                                                    <input type="text" id="passport" name="passport" placeholder="Passport ID /Number" class="" value="<?php if(!empty($form_data['passport'])){ echo $form_data['passport']; } ?>"/>
                                                                </div>
                                                            </div>
                                                            </blockquote>
                                                            <div class="control-group panel">
                                                                <h5>Contact Details</h5>
                                                            </div>
                                                            
                                                            <blockquote>
                                                            <div class="control-group">
                                                                <label class="control-label" for="address">Address</label>
                                                                <div class="controls">
                                                                    <input type="text" id="address" name="address" placeholder="Address" class="" value="<?php if(!empty($form_data['address'])){ echo $form_data['address']; } ?>"/>
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label class="control-label" for="city">City<strong class="req">*</strong></label>
                                                                <div class="controls">
                                                                    <input type="text" id="city" name="city" placeholder="City" class="required" value="<?php if(!empty($form_data['city'])){ echo $form_data['city']; } ?>"/>
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label class="control-label" for="zip">Zip<strong class="req">*</strong></label>
                                                                <div class="controls">
                                                                    <input type="text" id="zip" name="zip" placeholder="Zip" class="required" value="<?php if(!empty($form_data['zip'])){ echo $form_data['zip']; } ?>"/>
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label class="control-label" for="state">State<strong class="req">*</strong></label>
                                                                <div class="controls">
                                                                    <input type="text" id="state" name="state" placeholder="State" class="required" value="<?php if(!empty($form_data['state'])){ echo $form_data['state']; } ?>"/>
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label class="control-label" for="country_id">Country<strong class="req">*</strong></label>
                                                                <div class="controls">
                                                                    <select id="country_id" name="country_id" placeholder="Country" class="required">
                                                                        <?php if(!empty($form_data['country_id'])){ $country_id= $form_data['country_id']; }else{ $country_id=0;  } ?>
                                                                        <?php echo selectBox('Select', 'countries', 'id,name', ' status=1 ', $country_id, ''); ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label class="control-label" for="phone">Phone</label>
                                                                <div class="controls">
                                                                    <input type="text" id="address" name="phone" placeholder="Phone" class="" value="<?php if(!empty($form_data['phone'])){ echo $form_data['phone']; } ?>"/>
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label class="control-label" for="phone_password">Phone Password</label>
                                                                <div class="controls">
                                                                    <input type="text" id="phone_password" name="phone_password" placeholder="Phone Password" class=""/>
                                                                </div>
                                                            </div>
                                                            </blockquote>
                                                            <div class="control-group panel">
                                                                <h5>Trading Details</h5>
                                                            </div>
                                                            <blockquote>
                                                            <div class="control-group">
                                                                <label class="control-label" for="account_type_id">Account Type</label>
                                                                <div class="controls">
                                                                    <select id="account_type_id" name="account_type_id" class="">
                                                                        <?php if(!empty($form_data['account_type_id'])){ $account_type_id= $form_data['account_type_id']; }else{ $account_type_id=0;  } ?>
                                                                        <?php echo selectBox('Select', 'sb_account_types', 'id,name', ' status=1 ', $account_type_id, ''); ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label class="control-label" for="investment_amount_id">Investment Amount (USD)</label>
                                                                <div class="controls">
                                                                    <select id="investment_amount_id" name="investment_amount_id" class="">
                                                                        <?php if(!empty($form_data['investment_amount_id'])){ $investment_amount_id= $form_data['investment_amount_id']; }else{ $investment_amount_id=0;  } ?>
                                                                        <?php echo selectBox('Select', 'sb_investment_amounts', 'id,name', ' status=1 ', $investment_amount_id, ''); ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label class="control-label" for="account_base_id">Account Base Currency</label>
                                                                <div class="controls">
                                                                    <select id="account_base_id" name="account_base_id" class="">
                                                                        <?php if(!empty($form_data['account_base_id'])){ $account_base_id= $form_data['account_base_id']; }else{ $account_base_id=0;  } ?>
                                                                        <?php echo selectBox('Select', 'sb_account_base', 'id,name', ' status=1 ', $account_base_id, ''); ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label class="control-label" for="leverage_id">Leverage<strong class="req">*</strong></label>
                                                                <div class="controls">
                                                                    <select id="leverage_id" name="leverage_id" placeholder="Leverage" class="required" >
                                                                        <?php if(!empty($form_data['leverage_id'])){ $leverage_id= $form_data['leverage_id']; }else{ $leverage_id=0;  } ?>
                                                                        <?php echo selectBox('Select', 'leverage', 'id,name', ' status=1 ', $leverage_id, ''); ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            </blockquote>
                                                            
                                                            <div class="control-group panel">
                                                                <h5>Investment Information</h5>
                                                            </div>
                                                            <blockquote>
                                                            <div class="control-group">
                                                                <label class="control-label" for="estimate_income_id">Your total Estimated Income (USD)</label>
                                                                <div class="controls">
                                                                    <select id="estimate_income_id" name="estimate_income_id" class="">
                                                                        <?php if(!empty($form_data['estimate_income_id'])){ $estimate_income_id= $form_data['estimate_income_id']; }else{ $estimate_income_id=0;  } ?>
                                                                        <?php echo selectBox('Select', 'sb_estimate_income', 'id,name', ' status=1 ', $estimate_income_id, ''); ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label class="control-label" for="estimate_net_worth_id">Your total Estimated Net Worth (USD)</label>
                                                                <div class="controls">
                                                                    <select id="estimate_net_worth_id" name="estimate_net_worth_id" class="">
                                                                        <?php if(!empty($form_data['estimate_net_worth_id'])){ $estimate_net_worth_id= $form_data['estimate_net_worth_id']; }else{ $estimate_net_worth_id=0;  } ?>
                                                                        <?php echo selectBox('Select', 'sb_estimate_net_worth', 'id,name', ' status=1 ', $estimate_net_worth_id, ''); ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label class="control-label" for="level_of_education_id">Level of Education</label>
                                                                <div class="controls">
                                                                    <select id="level_of_education_id" name="level_of_education_id" class="">
                                                                        <?php if(!empty($form_data['level_of_education_id'])){ $level_of_education_id= $form_data['level_of_education_id']; }else{ $level_of_education_id=0;  } ?>
                                                                        <?php echo selectBox('Select', 'sb_level_of_education', 'id,name', ' status=1 ', $level_of_education_id, ''); ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label class="control-label" for="employment_status_id">Employment Status</label>
                                                                <div class="controls">
                                                                    <select id="employment_status_id" name="employment_status_id" class="">
                                                                        <?php if(!empty($form_data['employment_status_id'])){ $employment_status_id= $form_data['employment_status_id']; }else{ $employment_status_id=0;  } ?>
                                                                        <?php echo selectBox('Select', 'sb_employment_status', 'id,name', ' status=1 ', $employment_status_id, ''); ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label class="control-label" for="nature_of_business_id">Nature of Business/Employment</label>
                                                                <div class="controls">
                                                                    <select id="nature_of_business_id" name="nature_of_business_id" class="">
                                                                        <?php if(!empty($form_data['nature_of_business_id'])){ $nature_of_business_id= $form_data['nature_of_business_id']; }else{ $nature_of_business_id=0;  } ?>
                                                                        <?php echo selectBox('Select', 'sb_nature_of_business', 'id,name', ' status=1 ', $nature_of_business_id, ''); ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            </blockquote>
                                                            
                                                            <div class="control-group panel">
                                                                <h5>Trading Knowledge</h5>
                                                            </div>
                                                            <blockquote>
                                                            <div class="control-group">
                                                                <label class="control-label" for="send_reports"><input type="checkbox" name="forex_cfds" value="1"  <?php if(!empty($form_data['forex_cfds']) && $form_data['forex_cfds']=='1'){ echo 'checked'; } ?>/></label>
                                                                <div class="controls">
                                                                    Forex and CFDs (Contracts for Difference)
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label class="control-label" for="send_reports"><input type="checkbox" name="equities_bonus" value="1"  <?php if(!empty($form_data['equities_bonus']) && $form_data['equities_bonus']=='1'){ echo 'checked'; } ?>/></label>
                                                                <div class="controls">
                                                                    Equities and Bonds
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label class="control-label" for="send_reports"><input type="checkbox" name="other_derivatives" value="1"  <?php if(!empty($form_data['other_derivatives']) && $form_data['other_derivatives']=='1'){ echo 'checked'; } ?>/></label>
                                                                <div class="controls">
                                                                    Other Derivatives
                                                                </div>
                                                            </div>
                                                            </blockquote>
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            <div class="control-group panel">
                                                                <h5>Accept Conditions / Confirmations</h5>
                                                            </div>
                                                            <blockquote>
                                                            
                                                            <div class="control-group">
                                                                <label class="control-label" for="send_reports"><input type="checkbox" name="send_reports" value="1"  <?php if(!empty($form_data['send_reports']) && $form_data['send_reports']=='1'){ echo 'checked'; } ?>/></label>
                                                                <div class="controls">
                                                                    I agree to receive account reports, newsletters, special offers and also agree to be contacted by ForexRay representatives via phone or e-mail.
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label class="control-label" for="t_and_c"><input type="checkbox" name="t_and_c" value="1" class="required" title="Please accept the conditions" /></label>
                                                                <div class="controls">
                                                                    I declare that I have carefully read and fully understood the entire text of the Terms and Conditions, Privacy Policy, which I fully understand, accept and agree with.
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label class="control-label" for="risk_ack"><input type="checkbox" name="risk_ack" value="1" class="required"  title="Please accept the conditions" /></label>
                                                                <div class="controls">
                                                                    I declare & acknowledge the risk warning of ForexRay that forex trading and trading in other products, and I accept and agree with significant level of risk and wish to proceed with my registering a Trading Account with ForexRay.
                                                                </div>
                                                            </div>
                                                            
                                                            </blockquote>
                                                            
                                                            <div class="control-group well">
                                                                <label class="control-label" for="verification_code">Verification Code<strong class="req">*</strong></label>
                                                                <div class="controls">
                                                                    <?php if(!empty($captcha['image'])){ echo $captcha['image']; } ?> Confirm: <input type='text' name='captcha' class="required" id='captcha' value='' autocomplete="off" title="Please enter the text from the image." placeholder="Verification Code" />
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                            <div class="control-group">
                                                                <div class="controls">
                                                                    <label class="checkbox">
                                                                        
                                                                    </label>
                                                                    <button type="submit" class="btn">Register</button>
                                                                </div>
                                                            </div>
                                                            
                                                            <div><?php echo formtoken::getField(); ?></div>
                                                        </form>
                                                        
                                                    </div>
                                                    <div style="clear: both"></div>
                                                </div>
                                            </div>
										
                                    </div>
                                    <div>&nbsp;</div>
                                </div>
                            </div>
							
                            <div class="right_ca fl">
                                
                                <?php $this->load->view('common/sidebar_1'); ?>
                                
                                <div class="mt40 ml10 stocks_list">
                                    <div class="tabs">
                                        <ul class="navlist">
                                            <li class="bdr_none first"><a href="#first"><span>Forex</span></a></li>
                                            <li><a href="#second" class="second"><span>Commodities</span></a></li>
                                            <li><a href="#third"><span>Stocks</span></a></li>
                                            <li class="li_last"><a href="#four"><span>Indices</span></a></li>					
                                        </ul>

                                        <div class="tabs_content">
                                            <div id="first" class="first">
                                                <div class="mi_row">
                                                    <div class="mi_clo1 fwb">Instrument</div>
                                                    <div class="mi_clo2 fwb">Bid/Ask</div>
                                                    <div class="mi_clo3 fwb c_black">Spread</div>
                                                    <?php for ($i = 0; $i <= 5; $i++) { ?>
                                                        <div class="mt10">
                                                            <div class="mi_clo1"><img src="<?= base_url(); ?>misc/css/images/euro.png" alt="symbol" /><img src="<?= base_url(); ?>misc/css/images/usd.png" alt="symbol" />EURUSD</div>
                                                            <div class="mi_clo2">CLOSED</div>
                                                            <div class="mi_clo3 tac">0.2</div>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div id="second" class="second">
                                                Commodities updated soon
                                            </div>
                                            <div id="third" class="third">
                                                Stocks updated soon
                                            </div>
                                            <div id="four" class="four">
                                                Indicies updated soon
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="updates ml10 mt12 mb20">
                                    <div class="tabs_latest">
                                        <ul class="navlist">
                                            <li class="bdr_none first"><a href="#first"><span class="news">News</span></a></li>
                                            <li class="last"><a href="#second"><span class="events">Events</span></a></li>
                                        </ul>
                                        <div class="news_list">
                                            <div id="first" class="first">
                                                <?php for ($i = 0; $i <= 1; $i++) { ?>
                                                    <div class="c_555 mt10 tdu news_content">Stock Market flat on the day on fiscal conc...</div>
                                                    <span class="pl10"><b>14/12/2012 21:30:23</b></span>
                                                <?php } ?>
                                            </div>
                                            <div id="second" class="second">
                                                Events 
                                            </div>
                                        </div>	
                                    </div>
                                </div>
                            </div>
                            <div class="cl"></div>
                        </div>
                    </div>
                </div>
            </div>
<!--	PAGE content -->
</div>
<style type="text/css">
    .req{
        color:#D83B39;
    }
</style>

<link rel="stylesheet" href="<?php echo base_url(); ?>public/js/jquery-ui-1.8.21/css/smoothness/jquery-ui-1.8.21.custom.css" />
<script src="<?php echo base_url();?>public/js/jquery-ui-1.8.21/js/jquery-ui-1.8.21.custom.min.js"></script>

<script type="text/javascript">
    $(function(){
        
        jQuery.validator.addMethod("password_format", function(value, element) {
            return this.optional(element) || /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,15}$/.test(value);
        }, "Password must be at least 4 characters, not more than 15 characters, and must include at least one upper case letter, one lower case letter, and one numeric digit.");
        
       $('#registration_form').validate({
           rules:{
               password:{
                   password_format:true
               },
               confirm_password:{
                    equalTo: "#password"
               },
               email:{
                   remote:'<?php echo site_url('registration/check_email'); ?>'
               }
           },
           messages:{
               firstname:{
                   required:'Please enter your name'
               },
               email:{
                   required:'Please enter your email ID',
                   email:'Please enter a valid email ID',
                   remote:'This email is already registered. Please enter other email.'
               },
               group_id:{
                   required:'Please select your group'
               },
               leverage_id:{
                   required:'Please select Leverage'
               },
               password:{
                   required:'Please enter your password'
               },
               confirm_password:{
                   required:'Please enter your password',
                   equalTo:'Please enter the same password as above'
               },
               city:{
                   required:'Please enter your city'
               },
               zip:{
                   required:'Please enter your zip code'
               },
               state:{
                   required:'Please enter your state'
               },
               country_id:{
                   required:'Please select your country'
               },
               verification_code:{
                   required:'Please enter the verification code'
               }
           }
       });
       
       $('#dob').datepicker({ yearRange: "1940:2010", changeYear: true, changeMonth:true, dateFormat: "yy-mm-dd" });
       
    });
</script>

<?php $this->load->view('common/footer');?>




