<form method="post" action="{{route('book.destroy', ['book' => $book->id])}}" class="col-5 offset-md-3"> 
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <div class="form-group">
                <label for="dlt">Do you want delete the book {{$book->name}} by author {{$book->autor}} ? </label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-danger">Delete</button>
                <a class="btn btn-warning" href="{{route('book.index')}}">Cancel</a>
            </div>
        </form>
    </div>