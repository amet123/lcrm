<div class="panel panel-primary">
    <div class="panel-body">
        @if (isset($client))
            {!! Form::model($client, ['url' => 'client/' . $client->id, 'method' => 'put', 'files'=> true,'id'=>'client']) !!}
        @else
            {!! Form::open(['url' => 'client/store', 'method' => 'post', 'files'=> true,'id'=>'client']) !!}
        @endif
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
                        {!! Form::label('first_name', 'First Name', ['class' => 'control-label']) !!}
                        <div class="controls">
                            {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
                            <span class="help-block">{{ $errors->first('first_name', ':message') }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                        {!! Form::label('last_name', 'Last Name', ['class' => 'control-label required']) !!}
                        <div class="controls">
                            {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
                            <span class="help-block">{{ $errors->first('last_name', ':message') }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        {!! Form::label('email', 'Email', ['class' => 'control-label required']) !!}
                        <div class="controls">
                            {!! Form::email('email', null, ['class' => 'form-control']) !!}
                            <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('cc_emails') ? 'has-error' : '' }}">
                        {!! Form::label('cc_emails', 'CC emails', ['class' => 'control-label required']) !!}
                        <div class="controls">
                            {!! Form::text('cc_emails', null, ['class' => 'form-control']) !!}
                            <span class="help-block">{{ $errors->first('cc_emails', ':message') }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('job_position') ? 'has-error' : '' }}">
                        {!! Form::label('job_position', trans('customer.job_position'), ['class' => 'control-label']) !!}
                        <div class="controls">
                            {!! Form::text('job_position', (isset($user))?$user->customer->job_position:null, ['class' => 'form-control']) !!}
                            <span class="help-block">{{ $errors->first('job_position', ':message') }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('company') ? 'has-error' : '' }}">
                        {!! Form::label('company', trans('customer.company'), ['class' => 'control-label required']) !!}
                        <div class="controls">
                            {!! Form::text('company', null, ['class' => 'form-control']) !!}
                            <span class="help-block">{{ $errors->first('company', ':message') }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('phone_number') ? 'has-error' : '' }}">
                        {!! Form::label('primary_phone_number', 'Primary Phone Number', ['class' => 'control-label required']) !!}
                        <div class="controls">
                            {!! Form::text('primary_phone_number',null, ['class' => 'form-control ','data-fv-integer' => 'true']) !!}
                            <span class="help-block">{{ $errors->first('primary_phone_number', ':message') }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('secondary_phone_number') ? 'has-error' : '' }}">
                        {!! Form::label('secondary_phone_number', 'Secondary Phone Number', ['class' => 'control-label']) !!}
                        <div class="controls">
                            {!! Form::text('secondary_phone_number', null, ['class' => 'form-control','data-fv-integer' => 'true']) !!}
                            <span class="help-block">{{ $errors->first('secondary_phone_number', ':message') }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('administrative_information') ? 'has-error' : '' }}">
                        {!! Form::label('administrative_information', 'Administrative Information', ['class' => 'control-label required']) !!}
                        <div class="controls">
                            {!! Form::text('administrative_information',null, ['class' => 'form-control ','data-fv-integer' => 'true']) !!}
                            <span class="help-block">{{ $errors->first('administrative_information', ':message') }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('customer_source') ? 'has-error' : '' }}">
                        {!! Form::label('customer_source', 'Customer Ssource', ['class' => 'control-label']) !!}
                        <div class="controls">
                            {!! Form::text('customer_source', null, ['class' => 'form-control','data-fv-integer' => 'true']) !!}
                            <span class="help-block">{{ $errors->first('customer_source', ':message') }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('sales_discount') ? 'has-error' : '' }}">
                        {!! Form::label('sales_discount', 'Sales Discount', ['class' => 'control-label required']) !!}
                        <div class="controls">
                            {!! Form::number('sales_discount',null, ['class' => 'form-control ','data-fv-integer' => 'true']) !!}
                            <span class="help-block">{{ $errors->first('sales_discount', ':message') }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('rental_discount') ? 'has-error' : '' }}">
                        {!! Form::label('rental_discount', 'Rental Discount', ['class' => 'control-label required']) !!}
                        <div class="controls">
                            {!! Form::number('rental_discount',null, ['class' => 'form-control ','data-fv-integer' => 'true']) !!}
                            <span class="help-block">{{ $errors->first('rental_discount', ':message') }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('account_information') ? 'has-error' : '' }}">
                        {!! Form::label('account_information', 'Account Information', ['class' => 'control-label required']) !!}
                        <div class="controls">
                            {!! Form::number('account_information',null, ['class' => 'form-control ','data-fv-integer' => 'true']) !!}
                            <span class="help-block">{{ $errors->first('account_information', ':message') }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('credit_limit') ? 'has-error' : '' }}">
                        {!! Form::label('credit_limit', 'Credit Limit', ['class' => 'control-label required']) !!}
                        <div class="controls">
                            {!! Form::number('credit_limit',null, ['class' => 'form-control ','data-fv-integer' => 'true']) !!}
                            <span class="help-block">{{ $errors->first('credit_limit', ':message') }}</span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('reservation_payment_percentage') ? 'has-error' : '' }}">
                        {!! Form::label('reservation_payment_percentage', 'Percentage of Payment Required for Reservation', ['class' => 'control-label required']) !!}
                        <div class="controls">
                            {!! Form::number('reservation_payment_percentage',null, ['class' => 'form-control ','data-fv-integer' => 'true']) !!}
                            <span class="help-block">{{ $errors->first('reservation_payment_percentage', ':message') }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('send_out_payment_percentage') ? 'has-error' : '' }}">
                        {!! Form::label('send_out_payment_percentage', 'Percentage of Payment Required for Send Out', ['class' => 'control-label required']) !!}
                        <div class="controls">
                            {!! Form::number('send_out_payment_percentage',null, ['class' => 'form-control ','data-fv-integer' => 'true']) !!}
                            <span class="help-block">{{ $errors->first('send_out_payment_percentage', ':message') }}</span>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('reservation_payment_percentage') ? 'has-error' : '' }}">
                        {!! Form::label('reservation_payment_percentage', 'Percentage of Payment Required for Reservation', ['class' => 'control-label required']) !!}
                        <div class="controls">
                            {!! Form::number('reservation_payment_percentage',null, ['class' => 'form-control ','data-fv-integer' => 'true']) !!}
                            <span class="help-block">{{ $errors->first('reservation_payment_percentage', ':message') }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('send_out_payment_percentage') ? 'has-error' : '' }}">
                        {!! Form::label('send_out_payment_percentage', 'Percentage of Payment Required for Send Out', ['class' => 'control-label required']) !!}
                        <div class="controls">
                            {!! Form::number('send_out_payment_percentage',null, ['class' => 'form-control ','data-fv-integer' => 'true']) !!}
                            <span class="help-block">{{ $errors->first('send_out_payment_percentage', ':message') }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('location') ? 'has-error' : '' }}">
                        {!! Form::label('location', 'Location', ['class' => 'control-label required']) !!}
                        <div class="controls">
                            {!! Form::text('location',null, ['class' => 'form-control ','data-fv-integer' => 'true']) !!}
                            <span class="help-block">{{ $errors->first('location', ':message') }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <!-- Form Actions -->
                    <div class="form-group">
                        <div class="controls">

                            <button type="submit" class="btn btn-success"><i
                                        class="fa fa-check-square-o"></i> {{trans('table.ok')}}</button>
                            <a href="javascript:void(0)" class="btn btn-warning"><i
                                        class="fa fa-arrow-left"></i> {{trans('table.back')}}</a>
                        </div>
                    </div>
                    <!-- ./ form actions -->
                </div>
            </div>
        {!! Form::close() !!}
    </div>
</div>
@section('scripts')
    <script>
        $(document).ready(function(){
            $("#message").hide();
            $("#password, #password_confirmation").on("keyup", function () {
                if ($("#password").val() == $("#password_confirmation").val()) {
                    $("#message").hide();
                } else{
                    $("#message").show();
                    $('#customer').data('bootstrapValidator').validate();
                }
            });
            $(".change_password").on("click",function(){
                $(".password_fields").show();
                $(this).hide();
                $('#customer').data('bootstrapValidator').validate();
            });
            $(".password_fields").hide();
            $("#customer").bootstrapValidator({
                fields: {
                    user_avatar_file: {
                        validators: {
                            file: {
                                extension: 'jpeg,jpg,png',
                                type: 'image/jpeg,image/png',
                                maxSize: 1000000,
                                message: 'The logo format must be in jpeg, jpg or png and size less than 1MB'
                            }
                        }
                    },
                    title: {
                        validators: {
                            notEmpty: {
                                message: 'The title field is required.'
                            }
                        }
                    },
                    first_name: {
                        validators: {
                            notEmpty: {
                                message: 'The first name field is required.'
                            },
                            stringLength: {
                                min: 3,
                                message: 'The first name must be minimum 3 characters.'
                            }
                        }
                    },
                    last_name: {
                        validators: {
                            notEmpty: {
                                message: 'The last name field is required.'
                            },
                            stringLength: {
                                min: 3,
                                message: 'The last name must be minimum 3 characters.'
                            }
                        }
                    },
                    company_id: {
                        validators: {
                            notEmpty: {
                                message: 'The company name field is required.'
                            }
                        }
                    },
                    sales_team_id: {
                        validators: {
                            notEmpty: {
                                message: 'The Sales team field is required.'
                            }
                        }
                    },
                    email: {
                        validators: {
                            notEmpty: {
                                message: 'The email field is required.'
                            }
                        }
                    },
                    password: {
                        validators: {
                            notEmpty: {
                                message: 'The password field is required.'
                            },
                            stringLength: {
                                min: 3,
                                message: 'The password must be minimum 3 characters.'
                            }
                        }
                    },
                    password_confirmation: {
                        validators: {
                            notEmpty: {
                                message: 'The password confirmation field is required.'
                            }
                        }
                    },
                    phone_number: {
                        validators: {
                            notEmpty: {
                                message: 'The phone number is required.'
                            },
                            regexp: {
                                regexp: /^\d{5,15}?$/,
                                message: 'The phone number can only consist of numbers.'
                            }
                        }
                    }
                }
            });
            $("#title").select2({
                theme:"bootstrap",
                placeholder:"{{ trans('customer.title') }}"
            });
            $("#company_id").select2({
                theme:"bootstrap",
                placeholder:"{{ trans('customer.company') }}"
            });
            $("#sales_team_id").select2({
                theme:"bootstrap",
                placeholder:"{{ trans('customer.sales_team_id') }}"
            });
        })
    </script>
    @endsection
