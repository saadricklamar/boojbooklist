# Booj's Book List API

## About the API

This is a Restful API for the Booj's Book List project. It was built in [Laravel](https://laravel.com/), a PHP framework. It 
provides data about Books, their author, and publication date. Users can receive data through a GET request, add a book to the
API through a POST request, and delete a book with a DELETE request. 

## /api/book

### **`GET`**

Making a GET request to this endpoint returns all books

Data returned for each book includes:

* id
* title
* author
* publication (year)
* creation timestamp
* update timestamp

#### Example of returned JSON:

```
[
   {
     "id": 40,
     "title": "Price Prairie",
     "author": "Marques",
     "publication": "1994",
     "created_at": "2019-10-23 19:57:47",
     "updated_at": "2019-10-23 19:57:47"
    },
    {
      "id": 41,
      "title": "Truth & Method",
      "author": "Gadamer",
      "publication": "1923",
      "created_at": "2019-10-23 20:49:06",
      "updated_at": "2019-10-23 20:49:06"
     },
     {
      "id": 42
      "title": "String Cheese Is Bad",
      "author": "The String Cheese Incident",
      "publication": "2001",
      "created_at": "2019-10-23 20:58:22",
      "updated_at": "2019-10-23 20:58:22"
     }    
 ]
  ```

### **`POST`**

Making a POST request to this endpoint with adds a book to the database. 

#### Required:
A correctly formatted book object must be provided in the request body in order to post to the database.

#### Example of correctly formatted book object:
```
{ title: <STRING>, author: <STRINGr>, publication: <STRING>  }
```

```
{
	"title": "Truth & Method",
	"author": "Gadamer",
	"publication": "1923"
	
}
```

## /api/book/:id

### **`DELETE`**

Making a DELETE request to this endpoint deletes a book with the specified id. 

#### Required:
An id that corresponds to a book present in the database must be provided in the URL.

URL with specified id:

`http://127.0.0.1:8000/api/book/23`
