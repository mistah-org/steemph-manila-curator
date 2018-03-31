function createBlogEntry(post) {
  const postUrl = "https://steemit.com" + post.url;
  const postBody = removeMarkdown(post.body);
  const wordCount = countWords(postBody);
  const estReadTime = parseFloat(Math.round(wordCount / 200)).toFixed(0);
  const metadata = JSON.parse(post.json_metadata);
  const imgCnt = metadata.image ? metadata.image.length : 0;
  const postCreated = post.created.split('T')[0];
  let alreadyCurated = false;
  post.active_votes.forEach(vote => {
    if(vote.voter === 'steemph.manila') {
      alreadyCurated = true;
      return false;
    }
  });
  let imageUrl = 'https://steemitimages.com/DQmSZhv3WuL4H6TfyBRtTVbK3mYpGqPFALyaPnFLitbaSiX/logos.png';
  if(metadata.image && metadata.image.length > 0) {
    imageUrl = metadata.image[0];
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
    <p class="blog-author">
      <span class="badge badge-primary"><span class="fas fa-pencil-alt" aria-hidden="true"></span> ${post.author}</span>
      <span class="badge badge-primary"><span class="fas fa-calendar-alt" aria-hidden="true"></span> ${postCreated}</span>
      <span class="badge badge-primary"><span class="fas fa-book" aria-hidden="true"></span> ${wordCount} words</span>
      <span class="badge badge-primary"><span class="fas fa-images" aria-hidden="true"></span> ${imgCnt}</span>
      <span class="badge badge-primary"><span class="fas fa-clock" aria-hidden="true"></span> ${estReadTime <= 0 ? 1 : estReadTime} ${ estReadTime > 1 ? 'minutes' : 'minute'}</span>
      <span class="badge badge-primary"><span class="fas fa-comments" aria-hidden="true"></span> ${post.children}</span>
      <span class="badge badge-success" style='display : ${alreadyCurated ? "" : "none"}'><span class="fas fa-check-circle" aria-hidden="true"></span></span>
    </p>
    <p class="blog-description">${postBody.substring(0, 500)} ...</p>
    <a class="btn btn-primary blog-link" href="${postUrl}" target="_blank">View Post</a>
  </div>
  </hr>
</div>
`;

  return div;
}