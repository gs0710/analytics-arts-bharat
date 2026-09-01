<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>

    <style>
        .main-container {
            display: flex; 
            flex-direction: column;
            height: auto;
            padding: 1rem 0;
        }
        .main-container .title {
            align-self: center;
            align-items: center;
            font-size: 20px;
            font-weight: 400;
        }

        .blogs-container {
            flex: 1;
            padding: 2rem clamp(5vw, 4rem, 1rem);
            display: flex;
            justify-content: center;
            gap: 5vw;
            flex-wrap: wrap;
        }

        .blogs-container .card {
            display: flex;
            flex-direction: column;
            width: 265px;
            gap: 0.3rem;
        }

        .blogs-container .card .photo {
            width: 100%;
            height: 200px;
            background-size: cover;
        }

        .card .details {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            gap: .5rem;
            /* flex: 1; */
        }
        .card .details .title {
            font-weight: 700;
            font-size: 22px;
            text-align: justify;
        }
        .card .details .author {
            align-self: flex-end;
            color: #333;
        }
        .card .details .author::before {
            content: '-';
        }
        .card .details .top, .card .details .bottom {
            display: flex;
            flex-direction: column;
            gap: .5rem;
        }
        .card .details .description {
            font-size: 14px;
            text-align: justify;
            color: #333;
            display: -webkit-box;
            -webkit-line-clamp: 6; /* Number of lines */
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .card .details a {
            align-self: flex-end;
            color: #444;
            font-size: 14px;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div  class="main-container">
        <?php include_once "components/header.php" ?>
        
        <div class="title">Take a look at our latest blogs</div>
        <div class="blogs-container">
          
        </div>

        
        <?php include_once "common.php" ?>
    </div>
    <script>
    // Fetch JSON Data
    fetch('<?= base_url() ?>assets/blogs.json') // Replace with the actual path to your JSON file
        .then(response => response.json())
        .then(data => {
            const grid = document.querySelector('.blogs-container'); // Assuming the container has the class 'grid'

            // Clear any existing content in the grid
            grid.innerHTML = '';

            // Map JSON Data to HTML
            data.forEach(item => {
                const card = document.createElement('div');
                card.classList.add('card');
                card.innerHTML = `
                    <div class="photo image" style="--src: url('<?= base_url() ?>${item.image}')"></div>
                    <div class="details">
                        <div class="top">
                            <a class="title" href="singleBlog?id=${item.title}">${item.title}</a>
                            <div class="author"><i>${item.author}</i></div>
                        </div>
                        <div class="bottom">
                            <div class="description">${item.description}</div>
                            <a href="${item.link}">know more</a>
                        </div>
                    </div>
                `;
                grid.appendChild(card);
            });
        })
        .catch(error => console.error('Error fetching JSON:', error));
</script>

</body>
</html>