@extends('layouts.web')

@section('content')


    <div class="panel panel-default">
        <div></div>
        <div class="row h-100">
            <div class="col-sm-6 h-100">
                <h1 class="panel-heading">Update CODE!</h1>
                <form class="form-horizontal" method="GET" action="/upload/code">




                    <div class="form-group">
                        <label for="email" class="col-md-4 control-label">Comments</label>
                        <div class="col-md-6">
                            <input id="author" type="text" class="form-control" name="comment" required autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-md-4 control-label">Code(*.py)</label>
                        <div class="">
                            <textarea id="author" rows="10" type="text" class="form-control" name="code" required
                                      autofocus></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Upload
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class=" col-sm-6 h-100">

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Version</th>
                        <th scope="col">Comment</th>
                        <th scope="col">Uploaded Date</th>
                    </tr>
                    </thead>
                    @foreach ($items as $item)
                        <tr>
                            <th scope="col">{{$item->id}}</th>
                            <th scope="col">{{$item->comment}}</th>
                            <th scope="col">{{$item->updated_at}}</th>
                            </tr>
                        </thead>
                    @endforeach
                </table>
                <div>
                    @foreach ($items as $item)

                        <textarea id="author" rows="10" type="text" class="form-control" name="precode" value=""
                                  >{{$item->code}}</textarea>

                    @endforeach
                </div>

            </div>
        </div>
    </div>



@endsection