<div class="form-group {{ $errors->has('taskdone') ? 'has-error' : ''}}">
    @csrf
    <label for="taskdone" class="control-label">{{ 'Taskdone' }}</label>
    <textarea class="form-control" rows="5" name="taskdone" type="textarea" id="taskdone" >{{ isset($jobpoint->taskdone) ? $jobpoint->taskdone : ''}}</textarea>
    @isset($current_job)
        <h4>Current Jobs Set is {{$current_job->companyname}} - {{$current_job->positionname}}</h4>
    @endisset
    {{ Form::select('job_id', $options, null, ['class'=>'form-control']) }}
    {!! $errors->first('taskdone', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
