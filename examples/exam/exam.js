/**
 * Load Event Listener
 * This will run once the page has loaded, and will setup our behaviors
 */
window.addEventListener('load', function() {
  // Get a reference to our button
  var button = document.getElementById('book-button');
  button.addEventListener('click', addBook);
});

var books = [
  {"title": "There and Back Again", "author": "Bilbo Baggins"},
  {"title": "The Downfall of the Lord of the Rings", "author": "Frodo Baggins"},
  {"title": "Herblore of the Shire", "author": "Meriadoc Brandybuck"}
]

function addBook() {
  // get a random book
  var randomNum = Math.floor( Math.random() * books.length );
  var book = books[randomNum];

  // Create a new TR
  var tr = document.createElement('tr');
  tr.classList.add('newrow');

  // Create a TD for the title
  var titleTD = document.createElement('td');
  titleTD.textContent = book.title;
  
  // Create a TD for the title
  var authorTD = document.createElement('td');
  authorTD.textContent = book.author;
  
  // Append the TDs to the TR
  tr.appendChild(titleTD);
  tr.appendChild(authorTD);
  
  // Get a reference to the main table
  var bookTable = document.getElementById('books-table');
  
  // Append the new row to the book table
  bookTable.appendChild(tr);
  
  void window.getComputedStyle(tr, null).getPropertyValue("opacity");
  tr.style.opacity = 1;
  tr.style.height = "auto";
}