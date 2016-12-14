@if (isset($contactMessageSent))
    <div style="color:white; background:green" class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close " data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Success!</strong> {{ trans('app.contactMessageSent') }}
    </div>
@endif
