<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    {!! Form::label('description', 'Description', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-8">
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('short_desc') ? 'has-error' : ''}}">
    {!! Form::label('short_desc', 'Short Desc', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-8">
        {!! Form::textarea('short_desc', null, ['class' => 'form-control']) !!}
        {!! $errors->first('short_desc', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('duration') ? 'has-error' : ''}}">
    {!! Form::label('duration', 'Duration', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('duration', null, ['class' => 'form-control']) !!}
        {!! $errors->first('duration', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
    {!! Form::label('price', 'Price', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('price', null, ['class' => 'form-control']) !!}
        {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('start_date') ? 'has-error' : ''}}">
    {!! Form::label('start_date', 'Start Date', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::date('start_date', null, ['class' => 'form-control']) !!}
        {!! $errors->first('start_date', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('discount_percentage') ? 'has-error' : ''}}">
    {!! Form::label('discount_percentage', 'Discount in percentage', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('discount_percentage', null, ['class' => 'form-control']) !!}
        {!! $errors->first('discount_percentage', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('image_reference') ? 'has-error' : ''}}">
    {!! Form::label('image_reference', 'Image Reference', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('image_reference', null, ['class' => 'form-control']) !!}
        {!! $errors->first('image_reference', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
