<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('code') }} [A-Z, a-z, 0-9]
            {{ Form::text('code', $customer->code, ['class' => 'form-control' . ($errors->has('code') ? ' is-invalid' : ''), 'placeholder' => 'Code']) }}
            {!! $errors->first('code', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('business_name') }} [Max: 20 characters]
            {{ Form::text('business_name', $customer->business_name, ['class' => 'form-control' . ($errors->has('business_name') ? ' is-invalid' : ''), 'placeholder' => 'Business Name']) }}
            {!! $errors->first('business_name', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('customer_name') }} [Max: 20 characters]
            {{ Form::text('customer_name', $customer->customer_name, ['class' => 'form-control' . ($errors->has('customer_name') ? ' is-invalid' : ''), 'placeholder' => 'Customer Name']) }}
            {!! $errors->first('customer_name', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('type_currency') }} [MXN, COL, US]
            {{ Form::text('type_currency', $customer->type_currency, ['class' => 'form-control' . ($errors->has('type_currency') ? ' is-invalid' : ''), 'placeholder' => 'Type Currency']) }}
            {!! $errors->first('type_currency', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('country') }}  [Ex. Ciudad de Mexico]
            {{ Form::text('country', $customer->country, ['class' => 'form-control' . ($errors->has('country') ? ' is-invalid' : ''), 'placeholder' => 'Country']) }}
            {!! $errors->first('country', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('state') }} [Ex. Estado de Mexico]
            {{ Form::text('state', $customer->state, ['class' => 'form-control' . ($errors->has('state') ? ' is-invalid' : ''), 'placeholder' => 'State']) }}
            {!! $errors->first('state', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('city') }} [Ex. Ciudad de Mexico]
            {{ Form::text('city', $customer->city, ['class' => 'form-control' . ($errors->has('city') ? ' is-invalid' : ''), 'placeholder' => 'City']) }}
            {!! $errors->first('city', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('phone_number') }} [10 digits]
            {{ Form::text('phone_number', $customer->phone_number, ['class' => 'form-control' . ($errors->has('phone_number') ? ' is-invalid' : ''), 'placeholder' => 'Phone Number']) }}
            {!! $errors->first('phone_number', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}  [example@examplevalid.com]
            {{ Form::text('email', $customer->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('is_active') }}  [1 or 0]
            {{ Form::text('is_active', $customer->is_active, ['class' => 'form-control' . ($errors->has('is_active') ? ' is-invalid' : ''), 'placeholder' => 'Is Active']) }}
            {!! $errors->first('is_active', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>