<div class="form-group {{ $errors->has('companyname') ? 'has-error' : ''}}">
    <label for="companyname" class="control-label">{{ 'Companyname' }}</label>
    <input class="form-control" name="companyname" type="text" id="companyname" value="{{ isset($job->companyname) ? $job->companyname : ''}}" >
    {!! $errors->first('companyname', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('positionname') ? 'has-error' : ''}}">
    <label for="positionname" class="control-label">{{ 'Positionname' }}</label>
    <input class="form-control" name="positionname" type="text" id="positionname" value="{{ isset($job->positionname) ? $job->positionname : ''}}" >
    {!! $errors->first('positionname', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('startdate') ? 'has-error' : ''}}">
    <label for="startdate" class="control-label">{{ 'Startdate' }}</label>
    <input class="form-control" name="startdate" type="date" id="startdate" value="{{ isset($job->startdate) ? $job->startdate : ''}}" >
    {!! $errors->first('startdate', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('enddate') ? 'has-error' : ''}}">
    <label for="enddate" class="control-label">{{ 'Enddate' }}</label>
    <input class="form-control" name="enddate" type="date" id="enddate" value="{{ isset($job->enddate) ? $job->enddate : ''}}" >
    {!! $errors->first('enddate', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('show') ? 'has-error' : ''}}">
    <label for="show" class="control-label">{{ 'Show' }}</label>
    <div class="radio">
    <label><input name="show" type="radio" value="1" {{ (isset($job) && 1 == $job->show) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="show" type="radio" value="0" @if (isset($job)) {{ (0 == $job->show) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
    {!! $errors->first('show', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('presentjob') ? 'has-error' : ''}}">
    <label for="presentjob" class="control-label">{{ 'Presentjob' }}</label>
    <div class="radio">
    <label><input name="presentjob" type="radio" value="1" {{ (isset($job) && 1 == $job->presentjob) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="presentjob" type="radio" value="0" @if (isset($job)) {{ (0 == $job->presentjob) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
    {!! $errors->first('presentjob', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
