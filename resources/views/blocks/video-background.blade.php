{{--
  Title: Video Background
  Description: Video Background with optional overlays
  Category: formatting
  Icon: video-alt3
  Keywords: video
  Mode: preview
  Align: center
  SupportsAnchor: true
  SupportsAlign: wide center full
  SupportsInnerBlocks: true
  SupportsFullHeight: true
--}}

<div data-{{ $block['id'] }} class="{{ $block['classes'] }} custom-block">
    <div class="container">
      <InnerBlocks />
    </div>
</div>

<style>
  .video-background {
    max-width: 100vw;
    padding: 5rem 0;
    margin-top: 0;
    margin-bottom: 0;
  }
</style>
