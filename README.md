Laboratory Activity 6 - Two Filters, One Route

1. I did not add a new route for the second filter because the filters use query strings. The router only looks at the URL path, so both the genre and year filters can use the same /books route. This also lets me use one filter or both filters at the same time.

2. If I used route parameters instead, the filter value would be part of the URL path. For example, a year-only filter could look like /books/year/1861. If I also wanted to filter by genre, I would need another route pattern for it. This is why query strings are used for the filters in this activity.

3. The navigation link on the detail page still works because it uses the existing book route. The filter links also use the same /books route and only add the filter values to the URL. Because of this, I did not need to add another route for the filters.

4. I deleted the old filter method because the filtering is now handled inside the index method. The store and update methods were kept even though they do not have routes. They are still empty methods in the controller, while the old filter method was no longer needed.

Lab Activity 7

1. If I use GET, the data will show in the URL. When I refresh the page, the browser may send the same request again and add the book again.

2. Laravel automatically stops the process when the validation fails. It sends me back to the form with the errors, so the book is not saved.

3. The success message only appears once because it is stored in the session temporarily. After refreshing or going to another page, the message disappears.

Lab Activity 9

F1. Which column did you make nullable, and why that one and not another?

I made the `genre` column nullable because some books might not have a genre assigned yet. I chose that column because the book can still be saved even if its genre is unknown, while the title and author are important information about the book.

F2. Which step failed first for you, and what did the error say?

The first error I encountered happened when I tried to create a book using Tinker without providing all the required fields. It showed a `NOT NULL constraint failed: books.author` error because I did not provide an author value. Later, I also encountered a mass-assignment error before adding the fields to the `$fillable` property.

F3. You changed no Blade file in Part D, yet your pages still work. Why not?

My Blade files still work because I kept the same view names and variables that the pages already use. I only changed the controller to retrieve the books from the database using the `Book` model instead of reading from the old JSON file.
