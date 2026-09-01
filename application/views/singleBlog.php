<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 30px auto;
            padding: 20px;
        }
        .author-info {
            display: flex;
            align-items: center;
            font-size: 0.9em;
            color: gray;
        }
        .author-info img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .blog-title {
            font-size: 2rem;
            margin: 20px 0;
        }
        .blog-content {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="author-info">
            <img src="<?= base_url() ?>assets/aa/profile.png" alt="Author">
            <span id="author"></span>
        </div>
        <h1 class="blog-title" id="title"></h1>
        <div class="blog-content" id="content"></div>
    </div>
    <script>
        // Fetch data dynamically based on the blog title or ID
        const params = new URLSearchParams(window.location.search);
        const blogId = params.get('id'); // Fetch the ID from the query string

        // Fetch blog data JSON
        fetch('<?= base_url() ?>assets/blogs.json') // Replace with actual JSON file path
            .then(response => response.json())
            .then(data => {
                const blog = data.find(item => item.id === blogId || item.title === blogId);
                if (blog) {
                    document.getElementById('author').textContent = `${blog.author} • Dec 12 • 3 min read`;
                    document.getElementById('title').textContent = blog.title;
                     // Dynamically add each text index from the description
                    const contentElement = document.getElementById('content');
                    blog.description.forEach(text => {
                        const span = document.createElement('p');
                        span.className = 'mb-2'; // Add mb-2 class
                        span.textContent = text; // Set text content
                        contentElement.appendChild(span); // Append span to the content div
                    });
                } else {
                    document.querySelector('.container').innerHTML = '<h2>Blog not found!</h2>';
                }
            })
            .catch(error => console.error('Error fetching blog data:', error));
    </script>
</body>
</html>
