<?php if (!defined('KIRBY')) {
    exit;
} ?>

title: Publications
pages:
  sort: flip
  num:
    mode: date
    field: pubdate
    format: Ymd
  template:
    - publication
files: false
fields:
  title:
    label: Title
    type:  text
  text:
    label: Some words to your publications
    type: markdown