function filterPostsUsingTags(posts, tags) {
  const filtered_for_tags = [];
  posts.forEach((post) => {
    const metadata = JSON.parse(post.json_metadata);

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

  return filtered_for_tags;
}