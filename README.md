## STEEM Philippines Curation Tool

This a curation tool specifically created for STEEM Philippines Manila curator team.


## Background

@steemph.manila is a group of Manila-based curators whose aim is to curate undervalued posts of authors from Manila. They have a list of authors who are based in Manila.

In one of the messages from one of its curators (@monkeypattycake) on how she curates, this developer assessed that curating manually can partially be automated, specifically extracting posts to select which one to curate. Currently, @steemph.manila creates a daily and weekly featured posts such as [this one](https://steemit.com/steemph/@steemph.manila/steemph-manila-daily-featured-posts-19-mar-2018).

Prior to this tool, the curators had to manually check each author's feed and check their posts.
OR check the community account's feed and curate from there.
OR go to a certain tag (i.e., #steemph) and check if an author is from Manila and curate that post.

**This project aims to simplify the curation efforts for STEEM Philippines (not just for Manila) by developing a tool that will extract all posts from a list of authors within a certain date range that contains certain tags.**

## Roadmap

Project roadmap is in [Github's project page](
https://github.com/mistah-org/steemph-manila-curator/projects/1).

## Deploying

Install the [Heroku Toolbelt](https://toolbelt.heroku.com/).

```sh
$ git clone git@github.com:mistah-org/steemph-manila-curator.git # or clone your own fork
$ cd steemph-manila-curator
$ heroku create
$ git push heroku master
$ heroku open
```

or

[![Deploy to Heroku](https://www.herokucdn.com/deploy/button.png)](https://heroku.com/deploy)


## Testing

https://steemph-manila-curator.herokuapp.com/

## Technology Stack

- PHP
- Heroku fully cloud deployable
- Bootstrap 4, jQuery


## Contributing

Currently in pre-alpha. Issues and suggestions for now are closed to @steemph.manila curation team.