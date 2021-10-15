<form method="POST" action="{{route('bookitem.store')}}">
    Title: <input type="text" name="bookitem_title">
    Book_code: <input type="text" name="bookitem_book_code">
    Pages: <input type="number" name="bookitem_pages">
    Description: <input type="text" name="bookitem_description">
    Author_ID: <input type="number" name="bookitem_author_id">
    @csrf
    <button type="submit"> Add </button>
</form>
