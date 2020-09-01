<div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('zipper_name') ? 'has-error' : ''}}">
    {!! Form::label('zipper_name', 'Zipper Name', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
        {!! Form::text('zipper_name', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('zipper_name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('phone_number') ? 'has-error' : ''}}">
    {!! Form::label('phone_number', 'Phone Number', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
        {!! Form::tel('phone_number', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('phone_number', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row justify-content-center">
    <div class="col-lg-4 col-12 align-content-center">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Add', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
