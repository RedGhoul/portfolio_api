<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'Title' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($project->title) ? $project->title : ''}}" >
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tagline') ? 'has-error' : ''}}">
    <label for="tagline" class="control-label">{{ 'Tagline' }}</label>
    <input class="form-control" name="tagline" type="text" id="tagline" value="{{ isset($project->tagline) ? $project->tagline : ''}}" >
    {!! $errors->first('tagline', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('githuburl') ? 'has-error' : ''}}">
    <label for="githuburl" class="control-label">{{ 'Githuburl' }}</label>
    <input class="form-control" name="githuburl" type="text" id="githuburl" value="{{ isset($project->githuburl) ? $project->githuburl : ''}}" >
    {!! $errors->first('githuburl', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('liveurl') ? 'has-error' : ''}}">
    <label for="liveurl" class="control-label">{{ 'Liveurl' }}</label>
    <input class="form-control" name="liveurl" type="text" id="liveurl" value="{{ isset($project->liveurl) ? $project->liveurl : ''}}" >
    {!! $errors->first('liveurl', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('show') ? 'has-error' : ''}}">
    <label for="show" class="control-label">{{ 'Show' }}</label>
    <div class="radio">
    <label><input name="show" type="radio" value="1" {{ (isset($project) && 1 == $project->show) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="show" type="radio" value="0" @if (isset($project)) {{ (0 == $project->show) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
    {!! $errors->first('show', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
