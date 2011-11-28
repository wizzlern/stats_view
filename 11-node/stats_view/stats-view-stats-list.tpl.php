<?php
/**
 * @file
 * Default theme implementation to display the statistics data on a node page.
 *
 * Variables available:
 * - $statistics: 
 * - $raw_stats: Access log object.
 *   Note: this raw data! It is not safe to display without escaping or sanatizing.
 *     'title'     = Title of visited page.
 *     'path'      = Path of visited page.
 *     'hostname'  = IP address of visiting host.
 *     'uid'       = User ID of visiting user. 0 = Anonymous.
 *     'timestamp' = Time stamp (Unix time) of visit.
 *
 * @see template_preprocess_stats_view_page()
 */
?>

<div class="stats-view clearfix">
  <?php if ($statistics): ?>
    <?php print $statistics ?>
  <?php else: ?>
    <?php print $empty_text ?>
  <?php endif; ?>
</div>
