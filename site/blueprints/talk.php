<?php if (!defined('KIRBY')) {
    exit;
} ?>

title: Talk
pages: false
files:
  fields:
    caption:
      label: Caption
      type: text
    sourcename:
      label: Source informations
      type: text
      placeholder: Photograph, Event (optional), Month/Year
    sourceurl:
      label: URL to source
      type: url

fields:
  talkMeta:
    label: Talk Meta
    type: headline
  title:
    label: Title
    type:  text
    width: 1/2
  pubdate:
    label:  Date
    type:   date
    width:  1/2
    format: DD.MM.YYYY
  description:
    label: Description
    type:  text
    icon:  info-circle
  tags:
    label: Tags
    type:  tags
  event:
    label: The event
    type: tags

  coverimage:
    label: Cover image
    type: selector
    mode: single
    options: images
    types:
      - image

  talkContent:
    label: Talk Content
    type: headline
  text:
    label: Some words to your talk
    type: markdown
  slides:
    label: URL to slides
    type: url
  video:
    label: URL to the video
    type: url
  audio:
    label: URL to the audio
    type: url
