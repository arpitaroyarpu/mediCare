<!DOCTYPE html>
<html>
<head>
    <title>Customer Reviews</title>
    <style>
        /* CSS styles for the customer review section */
        .review-form {
            margin-bottom: 50px;
            margin-top:50px;
            margin-left:470px;
            margin-bottom:50px;
        
        }
        .review-form label {
            display: block;
            margin-bottom: 10px;
        }
        .review-form input[type="text"],
        .review-form textarea {
            width: 40%;
            padding: 10px;
            border: 2px solid #ccc;
            border-radius: 10px;
        }
        .review-form input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .review-list {
            list-style-type: none;
            padding: 0;
        }
        .review-item {
            margin-bottom: 20px;
        }
        .review-item .review-author {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .review-item .review-rating {
            margin-bottom: 5px;
        }
        .review-item .review-comment {
            margin-bottom: 10px;
        }
        body{
            background:pink;
        }
        #button{
            margin-left:120px;
        
        }
        #h2{
            margin-left:50px;
            
        }
        .center{
            margin-left:110px;
        }
    </style>
</head>
<body>
    <div class="review-form">
        <h2 class="center">Add a Review</h2>
        <form id="reviewForm">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="rating">Rating:</label>
            <select id="rating" name="rating" required>
                <option value="5">5 stars</option>
                <option value="4">4 stars</option>
                <option value="3">3 stars</option>
                <option value="2">2 stars</option>
                <option value="1">1 star</option>
            </select><br>
            <label for="comment">Comment:</label>
            <textarea id="comment" name="comment" rows="4" required></textarea>
            <br><br>
            <input type="submit" id="button" value="Submit Review">
        </form>
    </div>
    <div class="review-list">
        <h2 id="h2">Customer Reviews</h2>
        <ul id="reviews"></ul>
    </div>

    <script>
        // JavaScript code to handle form submission and display reviews
        document.getElementById("reviewForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent form from submitting

            // Get form values
            var name = document.getElementById("name").value;
            var rating = document.getElementById("rating").value;
            var comment = document.getElementById("comment").value;

            // Create review item
            var reviewItem = document.createElement("li");
            reviewItem.classList.add("review-item");

            var reviewAuthor = document.createElement("div");
            reviewAuthor.classList.add("review-author");
            reviewAuthor.textContent = name;

            var reviewRating = document.createElement("div");
            reviewRating.classList.add("review-rating");
            reviewRating.textContent = "Rating: " + rating + " stars";

            var reviewComment = document.createElement("div");
            reviewComment.classList.add("review-comment");
            reviewComment.textContent = comment;

            reviewItem.appendChild(reviewAuthor);
            reviewItem.appendChild(reviewRating);
            reviewItem.appendChild(reviewComment);

            // Add review item to the list
            var reviewList = document.getElementById("reviews");
            reviewList.appendChild(reviewItem);

            // Clear the form
            document.getElementById("name").value = "";
            document.getElementById("rating").value = "5";
            document.getElementById("comment").value = "";
        });
    </script>
</body>
</html>
