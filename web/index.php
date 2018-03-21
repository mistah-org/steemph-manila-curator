<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/blog-home.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#/">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#/">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#/">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#/">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#/">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8 blog-entries">

          <!-- Page Heading -->
          <h1 class="my-4">STEEM Philippines
            <small>Manila</small>
          </h1>

          <div class="row blog-entry" style="display: none">
            <div class="col-md-4 blog-img-div">
              <a href="#">
                <img class="img-fluid rounded mb-3 mb-md-0 blog-image" src="https://steemitimages.com/256x512/https://res.cloudinary.com/hpiynhbhq/image/upload/v1521302155/wxbmoaf63tvl1byur7jz.png" alt="">
              </a>
            </div>
            <div class="col-md-8 blog-details-div">
              <h3 class="blog-title">Project One</h3>
              <p class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
              <a class="btn btn-primary blog-link" href="#">View Post</a>
            </div>
          </div>
          <!-- /.row -->

          <hr />

          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#/">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#/">Newer &rarr;</a>
            </li>
          </ul>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Authors</h5>
            <div class="card-body">
              <div class="form-row">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">@</div>
                  </div>
                  <input type="text" class="form-control" id="user" placeholder="Username">
                  <a href="#/" class="btn btn-primary add-user">
                    <span class="fas fa-plus-circle" aria-hidden="true"></span>
                  </a>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0 user-list">
                  </ul>
                </div>
              </div>
            </div>
            <button type="button" class="btn btn-primary search">Search</button>
          </div>

          <!-- Date Widget -->
          <div class="card my-4">
            <h5 class="card-header">Duration (default: today)</h5>
            <div class="card-body">
              <div class="form-inline">
                <label class="sr-only" for="start-date">From:</label>
                <input type="date" class="form-control" id="start-date" placeholder="start date" value="<?php echo date('Y-m-d'); ?>" />
                <label class="sr-only" for="end-date">To:</label>
                <input type="date" class="form-control" id="end-date" placeholder="end date" value="<?php echo date('Y-m-d'); ?>" />
              </div>
            </div>
            <button type="button" class="btn btn-primary search">Search</button>
          </div>

          <!-- Tag Filter Widget -->
          <div class="card my-4">
            <h5 class="card-header">Tags</h5>
            <div class="card-body">
              <div class="form-row">
                <div class="input-group">
                  <input type="text" class="form-control" id="tag" placeholder="tag">
                  <a href="#/" class="btn btn-primary add-tag">
                    <span class="fas fa-plus-circle" aria-hidden="true"></span>
                  </a>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0 tag-list">
                    <li><a href="#/"><span class="fas fa-times-circle remove-tag" aria-hidden="true"></span></a>steemph</li>
                  </ul>
                  <input class="card-link" type="checkbox" id="contains-all-tags" /> contains all tags
                </div>
              </div>
            </div>
            <button type="button" class="btn btn-primary search">Search</button>
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.steemjs.com/lib/latest/steem.min.js"></script>
    <script src="js/remove-markdown.js"></script>
    <script>
        steem.api.setOptions({ url: 'https://api.steemit.com/' });
        $(document).ready(function() {
          $.getJSON('/get-users.php', 
            { user : null }, 
            function(data) {
              console.log('get user success');
              data.users.forEach((user, index) => {
                $('.user-list').append('<li><a href="#/"><span class="fas fa-times-circle remove-user" aria-hidden="true"></span></a>' + user + '</li>');
              });
            }
          ).fail(function(error) {
             console.log(error);
          });
          $('.blog-entry').not(':first').remove();

          $('.search').on('click', function() {
            const authors = [];
            $('.user-list li').each(function() {
              authors.push($(this).text());
            });
            console.log(authors);

            const tags = [];
            $('.tag-list li').each(function() {
              tags.push($(this).text());
            });
            console.log(tags);

            const contains_all_tags = $('#contains-all-tags').is(":checked");
            console.log(contains_all_tags);

            const dates = [new Date($('#start-date').val()).toISOString().split('.')[0], new Date($('#end-date').val()).toISOString().split('.')[0]];
            console.log(dates);
            const datenow = new Date();

            authors.forEach((author) => {
              steem.api.getDiscussionsByAuthorBeforeDate(author, '', dates[1], 10, function(err, result) {
                console.log(err, result);

                const filtered_for_date = [];
                result.forEach((post) => {
                  if (post.created >= dates[0] && post.created <= dates[1]) {
                    console.log(post.created);
                    filtered_for_date.push(post);
                  }
                });
                console.log('filtered_for_date: ' + filtered_for_date.length);

                const filtered_for_tags = [];
                filtered_for_date.forEach((post) => {
                  const metadata = JSON.parse(post.json_metadata);
                  console.log(metadata.tags);

                  let containsTags = false;
                  if ($('#contains-all-tags').is(':checked')) {
                    tags.forEach(inputTag => {
                      if (!metadata.tags.includes(inputTag)) {
                        return false;
                      };
                    });
                  } else {
                    tags.forEach(inputTag => {
                      if (metadata.tags.includes(inputTag)) {
                        containsTags = true;
                        return false;
                      }
                    });
                  }

                  if (containsTags) {
                    filtered_for_tags.push(post);
                  }
                });
                console.log('filtered_for_tags: ' + filtered_for_tags.length);

                filtered_for_tags.forEach((post) => {
                  const postUrl = "https://steemit.com/" + post.url;
                  const postBody = removeMarkdown(post.body).substring(0, 500);
                  const metadata = JSON.parse(post.json_metadata);
                  let imageUrl = '';
                  if(metadata.links && metadata.links.length > 0) {
                    imageUrl = metadata.links[0];
                  }
                  const div = `
<div class="row blog-entry">
  <div class="col-md-4 blog-img-div">
    <a href="#">
      <img class="img-fluid rounded mb-3 mb-md-0 blog-image" src="https://steemitimages.com/256x512/${imageUrl}" alt="">
    </a>
  </div>
  <div class="col-md-8 blog-details-div">
    <h5 class="blog-title">${post.root_title}</h3>
    <p class="blog-author">Author: ${post.author} / Created: ${post.created} / Number of Words: xxx / Est. Reading Time: yy mins.</p>
    <p class="blog-description">${postBody}</p>
    <a class="btn btn-primary blog-link" href="${postUrl}">View Post</a>
  </div>
  </hr>
</div>
`;
                  $(div).insertAfter('.blog-entry:last');
                });
              });
            });

          });
        
          $('.add-user').on('click', function() {
            const newuser = $('#user').val();

            let hasDuplicate = false; 
            $('.user-list li').each(function() {
              if ($(this).text() === newuser || newuser === '') {
                hasDuplicate = true;
                return false;
              }
            });

            if (!hasDuplicate) {
              $('.user-list').append('<li><a href="#/"><span class="fas fa-times-circle remove-user" aria-hidden="true"></span></a>' + newuser + '</li>');
              $.getJSON('/add-user.php', 
                { user : newuser }, 
                function(data) {
                  console.log('added user success');
                  console.log(data);
                }
              ).fail(function(error) {
                 console.log(error);
              });
            }

            $('#user').val('');
          });

          $('.user-list').on('click', '.remove-user', function() {
            const removeUser = $( this ).parents('li').text();
            $('.user-list li').filter(function() { return $.text([this]) === removeUser; }).remove();
            $.getJSON('/remove-user.php', 
              { user : removeUser }, 
              function(data) {
                console.log('remove user success');
                console.log(data);
              }
            ).fail(function(error) {
               console.log(error);
            });
          });

          $('.add-tag').on('click', function() {
            const newtag = $('#tag').val();

            let hasDuplicate = false; 
            $('.tag-list li').each(function() {
              if ($(this).text() === newtag) {
                hasDuplicate = true;
                return false;
              }
            });

            if (!hasDuplicate) {
              $('.tag-list').append('<li><a href="#/"><span class="fas fa-times-circle remove-tag" aria-hidden="true"></span></a>' + newtag + '</li>');
            }

            $('#tag').val('');
          });

          $('.tag-list').on('click', '.remove-tag', function() {
            const removeTag = $( this ).parents('li').text();
            $('.tag-list li').filter(function() { return $.text([this]) === removeTag; }).remove();
          });

        });
    </script>
  </body>

</html>
