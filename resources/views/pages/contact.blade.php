@extends('main')
 @section('title','| contact')
  @section('content')
     <div class="row">
      <div class="col-md-12">
        <form action="/contact" method="post">
         @csrf
           <div class="form-group">
            <label name="subject">Subject:</label>
            <input type="text" name="subject" class="form-control">
          </div>
           <div class="form-group">
            <label name="body">Message:</label>
            <textarea name="message" id="message" class="form-control" rows="10" cols="40">Write your message . . . </textarea>
          </div>
           <input type="submit" name="submit" value="Send Email" class="btn btn-success">

        </form>
      </div>
     </div>
  @endsection
   