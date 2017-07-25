<form class="col-9 offset-md-2">
            <div class="form-group row">
                <label for="name" class="col-3 col-form-label">Name:</label>
                <div class="col-5">
                    <input type="text" class="form-control" id="name"  value="{{(isset($book))? $book->name : ''}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="autor" class="col-3 col-form-label">Autor:</label>
                <div class="col-5">
                    <input type="text" class="form-control" id="autor" value="{{(isset($book))? $book->autor : ''}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="category_id" class="col-3 col-form-label">Category:</label>
                <div class="col-5">
                    <div id="the-basics">
                        <input class="typeahead" type="text" name="category_id" id="category-id" value="{{(isset($book))? $book->category->name : ''}}">
                    </div>
                </div>
            </div>
             <div class="form-group row">
                <label for="published-date" class="col-3 col-form-label">Published date:</label>
                <div class="col-5">
                    <input class="form-control" type="date"  name="published_date" id="published-date" value="{{(isset($book))? $book->published_date : ''}}">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-5 offset-md-3">
                    <button type="submit" class="btn btn-primary"><i class="fa {{($context === 'Add')? 'fa-plus' : 'fa-pencil'}}" aria-hidden="true"></i>{{$context}}</button>
                </div>
            </div>
    </form>