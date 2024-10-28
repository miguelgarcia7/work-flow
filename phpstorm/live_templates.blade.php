<!-- _form -->
<form id="$FORM_ID$" action="{{ route('$ROUTE$' ) }}" method="POST" class="needs-validation @if ($errors->any()) was-validated @endif" enctype="multipart/form-data"  autocomplete="off">
    @csrf
    $END$
</form>

<!-- _form_update -->
<form id="$FORM_ID$" action="{{ route('$ROUTE$' ) }}" method="POST" class="needs-validation @if ($errors->any()) was-validated @endif" enctype="multipart/form-data"  autocomplete="off">
    @csrf
    @method('PUT')
    $END$
</form>

<!-- _col1 -->
<div class="row">
    <div class="col-md-12">$END$</div>
</div>

<!-- _col2 -->
<div class="row">
    <div class="col-md-6">$END$</div>
    <div class="col-md-6"></div>
</div>

<!-- _col3 -->
<div class="row">
    <div class="col-md-4">$END$</div>
    <div class="col-md-4"></div>
    <div class="col-md-4"></div>
</div>

<!-- _col4 -->
<div class="row">
    <div class="col-md-3">$END$</div>
    <div class="col-md-3"></div>
    <div class="col-md-3"></div>
    <div class="col-md-3"></div>
</div>

<!-- _input -->
<div class="mb-6">
    <label class="form-label" for="$INPUT_NAME$">$INPUT_TITLE$</label>
    <input type="text" name="$INPUT_NAME$" id="$INPUT_NAME$" class="form-control @error('$INPUT_NAME$') is-invalid @enderror" value="{{ old('$INPUT_NAME$') }}" placeholder="$INPUT_TITLE$" aria-label="$INPUT_TITLE$" required/>
    <span class="invalid-feedback fw-bold" role="alert">
      The Full Name field is required.
    </span>
</div>
$END$

<!-- _input_group -->
<div class="mb-6">
    <label class="form-label" for="$INPUT_NAME$">$INPUT_TITLE$</label>
    <div class="input-group">
        <span class="input-group-text"><i class="ti ti-user"></i></span>
        <input type="text" name="$INPUT_NAME$" id="$INPUT_NAME$" class="form-control @error('$INPUT_NAME$') is-invalid @enderror" value="{{ old('$INPUT_NAME$') }}" placeholder="$INPUT_TITLE$" aria-label="$INPUT_TITLE$" required/>
        <span class="invalid-feedback" role="alert">
            <strong>The $INPUT_TITLE$ field is required.</strong>
        </span>
    </div>
</div>
$END$

<!-- _input_group_date -->
<div class="mb-6">
    <label class="form-label" for="$INPUT_NAME$">$INPUT_TITLE$</label>
    <div class="input-group">
        <span class="input-group-text"><i class="ti ti-calendar-event"></i></span>
        <input type="text" name="$INPUT_NAME$" class="form-control js-date-flatpickr @error('$INPUT_NAME$') is-invalid @enderror" id="$INPUT_NAME$" value="{{ old('$INPUT_NAME$') }}" data-alt-input="true" data-date-format="Y-m-d" data-alt-format="F j, Y" placeholder="$INPUT_TITLE$" aria-label="$INPUT_TITLE$" required>
        <span class="invalid-feedback" role="alert">
            <strong>The End Date field is required.</strong>
        </span>
    </div>
</div>
$END$

<!-- _input_check -->
<div class="form-check">
    <input type="checkbox" name="$INPUT_NAME$" class="form-check-input @error('$INPUT_NAME$') is-invalid @enderror" value="Indeterminate" id="$INPUT_NAME$" @if(old('$INPUT_NAME$')) checked @endif required>
    <label class="form-check-label" for="$INPUT_NAME$">
        $INPUT_TITLE$
    </label>
    <span class="invalid-feedback fw-bold" role="alert">
      The $INPUT_TITLE$ field is required.
    </span>
</div>
$END$

<!-- _input_radio -->
<div class="form-check mt-4">
    <input type="radio" name="$INPUT_NAME$" class="form-check-input" value="$INPUT_VALUE_1$" id="$INPUT_VALUE_1$" @if(old('$INPUT_NAME$') == '$INPUT_VALUE_1$') checked @endif required>
    <label class="form-check-label" for="male">
        Male
    </label>
</div>
<div class="form-check">
    <input type="radio" name="$INPUT_NAME$" class="form-check-input" value="$INPUT_VALUE_2$" id="$INPUT_VALUE_2$" @if(old('$INPUT_NAME$') == '$INPUT_VALUE_2$') checked @endif required>
    <label class="form-check-label" for="$INPUT_VALUE_2$">
        Female
    </label>
</div>
$END$

<!-- input_select -->
<div class="mb-6">
    <label class="form-label" for="$INPUT_NAME$">$INPUT_TITLE$</label>
    <select name="$INPUT_NAME$" class="form-select @error('$INPUT_NAME$') is-invalid @enderror" id="$INPUT_NAME$" aria-label="$INPUT_TITLE$" required>
        <option selected="">Open this select menu</option>
        @foreach($item as $key => $value)
            <option value="{{ $key }}" @if(old('pto_type') == $key) selected @endif>{{ $value }}</option>
        @endforeach
    </select>
    <div class="form-text">Select option for hours be deductive.</div>
    <span class="invalid-feedback" role="alert">
        <strong>The $INPUT_TITLE$ field is required.</strong>
      </span>
</div>
$END$

<!-- _textarea -->
<div class="col-12 mb-6">
    <label class="form-label" for="$INPUT_NAME$">$INPUT_TITLE$</label>
    <textarea name="$INPUT_NAME$" class="form-control @error('$INPUT_NAME$') is-invalid @enderror" id="$INPUT_NAME$" rows="3">{{ old('$INPUT_NAME$') }}</textarea>
    <div class="form-text">Optional for notes, unless this is unscheduled.</div>
    <span class="invalid-feedback" role="alert">
      <strong>The $INPUT_TITLE$ field is required.</strong>
    </span>
</div>
$END$