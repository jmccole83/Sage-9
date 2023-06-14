{{--
  Title: Masonry Block
  Description: Block for outputting posts using a masonry grid style.
  Category: formatting
  Icon: schedule
  Keywords: masonry grid
  Mode: preview
  Align: center
  SupportsAnchor: true
  SupportsAlign: wide center full
  SupportsInnerBlocks: true
--}}

@php

@endphp

<div id="{{ $block['id'] }}" class="{{ $block['classes'] }} position-relative custom-block my-0">
    <div class="content position-absolute d-flex align-items-center">
      <div class="container">
        <InnerBlocks />
      </div>
    </div>
</div>
