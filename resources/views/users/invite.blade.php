<div class="row">
    <div class="col-md-12 col-12">
        <div class="alert alert-warning invite-warning" style="display: none;"></div>
    </div>
    <div class="col-md-12 col-12 add_user_div d-none">
        <div class="form-group">
            {{ Form::label('username', __('Name'),['class' => 'form-control-label']) }}
            {{ Form::text('username', null, ['class' => 'form-control', 'placeholder' => __('Please enter name')]) }}
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            {{ Form::label('add_email', __('Email'),['class' => 'form-control-label']) }}
            {{ Form::email('add_email', null, ['class' => 'form-control', 'placeholder' => __('Enter email address')]) }}
        </div>
    </div>
    <div class="col-md-12 col-12 add_user_div d-none">
        <div class="form-group">
            {{ Form::label('userpassword', __('Password'),['class' => 'form-control-label']) }}
            {{ Form::password('userpassword', ['class' => 'form-control', 'placeholder' => __('Please enter password')]) }}
        </div>
    </div>
    <div class="col-md-12 col-12">
        <label class="form-control-label">{{__('Role')}}</label> <br>
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
            @if(auth()->user()->type == 'user')
                <!-- Only display the "Team Member" radio button -->
                <label class="btn btn-primary btn-sm active">
                    <input type="radio" name="user_type" id="radio_client" autocomplete="off" value="client" checked>{{__('Team Member')}}
                </label>
            @else
                <!-- Display both options for other roles -->
                <label class="btn btn-primary btn-sm active">
                    <input type="radio" name="user_type" id="radio_user" autocomplete="off" value="user" checked>{{__('Team Lead')}}
                </label>
                <label class="btn btn-primary btn-sm">
                    <input type="radio" name="user_type" id="radio_client" autocomplete="off" value="client">{{__('Team Member')}}
                </label>
            @endif
        </div>
    </div>
</div>

<div class="text-right">
    {{ Form::button(__('Add'), ['type' => 'button','class' => 'btn btn-sm btn-primary rounded-pill check-add-user']) }}
</div>
