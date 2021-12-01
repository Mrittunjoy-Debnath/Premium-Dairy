@extends('admin.app')

@section('body')
    <div class="container">
        <div class="row">
            {{--  <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="editor" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Comments</label>
              </div>  --}}
              <div class="col-md-6" style="margin: auto;">
                <textarea class="form-control" rows="4" id="summary-ckeditor" name="summary-ckeditor"></textarea>
              </div>
        </div>
    </div>
@endsection
