<?php
/**
 * Template: Single Event, Upcoming events view.
 *
 * @category Templates
 * @package  My Calendar
 * @author   Joe Dolson
 * @license  GPLv2 or later
 * @link     https://www.joedolson.com/my-calendar/
 */

?>
<li class="<?php mc_event_classes( $data->event, 'next' ); ?>"><?php mc_template( $data->tags, $data->template, 'list' ); ?></li>
