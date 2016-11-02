Themer’s Guide


Customizing Template Files

The Events Calendar comes with a number of template files that determine how the plugin looks and behaves; we call these views. In addition to creating a new Page Template, you can override these files with custom files that you place in your theme.

It’s important that you don’t edit the view files directly in the plugin—you should copy them into your theme first, and edit them there. This will ensure that any modifications you do make will not be overwritten by updating the plugin. The Events Calendar will ensure that your modified files, in the correct folder, will override the plugin files.

Here’s how it’s done:

1. Make a copy of the templates you want to customize

The template view files are located inside the plugin folder’s /src/views/ directory. For example:

The Events Calendar template files:
/wp-content/plugins/the-events-calendar/src/views/
Events Calendar Pro template files:
/wp-content/plugins/events-calendar-pro/src/views/
Community Events add-on template files:
/wp-content/plugins/the-events-calendar-community-events/src/views/
Community Tickets add-on template files:
/wp-content/plugins/the-events-calendar-community-events-tickets/src/views/
Event Ticket add-on template files:
/wp-content/plugins/event-tickets/src/views/
Event Ticket Plus add-on template files:
/wp-content/plugins/event-tickets-plus/src/views/
Eventbrite Tickets add-on template files:
/wp-content/plugins/the-events-calendar-eventbrite-tickets/src/views/
Filter Bar add-on template files:
/wp-content/plugins/the-events-calendar-filterbar/src/views/
iCal Importer add-on template files:
/wp-content/plugins/the-events-calendar-importer-ical/src/views/
You can also modify the selected Events Template’s markup. To do that, first find out what Events Template you are using by heading to Events → Settings → Display in your site’s wp-admin, and looking for the Events Template option. If you have selected the Default Events Template, the plugin will use the /wp-content/plugins/the-events-calendar/src/views/default-template.php template file for the display. You can override and edit this by making a copy and placing in a /tribe-events folder in your theme.

All of the other Events Template options will use one of your available theme page templates (page.php, full-width.php, etc.), which you can also edit.

Based upon what Events Template you’ve chosen, you will need to use these conditional wrappers to help you conditionally display or not display certain markup on each corresponding events page.

2. Create a new folder in your theme

Open your theme folder, located at wp-content/themes/your-theme/
Create a new folder here called /tribe-events. This will be the parent folder that contains all template overrides.
Create a new folder inside /tribe-events for specific premium addons:
Community Events: /tribe-events/community/
Events Calendar Pro: /tribe-events/pro/
Event Tickets: /tribe-events/tickets/
Filter Bar: /tribe-events/filter-bar
3. Drop the copied template file you want to customize in its corresponding folder in your theme directory

For example, if you have made a copy of this this file:

/wp-content/plugins/the-events-calendar/single-event.php
…then you will drop that copied file directly into the /tribe-events folder you created in your theme in Step 2.

Similarly, if you create a duplicate of the Photo View template in Events Calendar PRO:

/wp-content/plugins/events-calendar-pro/photo.php
…then you would drop that copied file into the corresponding folder in your theme:

/wp-content/themes/[your-theme]/tribe-events/pro/
Now that the templates are in your theme, you can modify the code to suit your needs and that will override the plugin’s template files.


Example Customization

Let’s take a look at an example of a very simple template view customization. This should give you an idea of the workflow.

By default, The Events Calendar displays just the venue name underneath each event date. Here’s what it looks like:

KB themers guide 1

But what if you also want to show the event organizer? So, for example, you would instead have something that looks like this:

KB themers guide 2

Here’s how that’s done:

Copy /wp-content/plugins/the-events-calendar/src/views/list/single-event.php to /your-theme/tribe-events/list/single-event.php (replace /your-theme with the actual folder name of your theme, of course)

Edit /your-theme/tribe-events/list/single-event.php and add the following code underneath the venue details:

1
<p>Organized by: <?php echo tribe_get_organizer(); ?></p>
Save, and you’re done!

Every template view customization follows that basic pattern: copy the file you wish to edit to your theme folder, then customize the copied file. This protects your edits whenever you update The Events Calendar and its add-ons.

⚠️ Please Remember! If you change your WordPress theme, you’ll need to copy all of your customizations to the new theme’s folder. And if you auto-update your theme with the /tribe-events folder within it, you will likely lose that folder and all of its files since it is not a default folder of the theme. Be sure to back up all custom files frequently!

You’re now set up to start customizing The Events Calendar.


Views & Templates

The Events Calendar

Parent folder located at:
/wp-content/plugins/the-events-calendar/src/views/

Single Event View

single-event.php — Used to display individual events
modules/address.php — Displays the event’s venue address
widgets/calendar-widget.php
modules/meta.php — Used within single-event.php to display meta information for an event
modules/meta/details.php — Adds information such as the start and end time within the meta section
modules/meta/map.php – Renders a map within the meta section
modules/meta/organizer.php – Adds organizer information to the meta section
modules/meta/venue.php – Adds venue information to the meta section
Day View

day.php – Wrapper for the day view template, includes the tribe bar and then the day content template
day/content.php – Main content template, contains the title, includes the nav template, the events loop, and the footer. This is the template that’s used to return ajax requests navigating and filtering results on list view
day/nav.php – Contains the next and previous links
day/loop.php – Contains the structure for the loop of events. Includes the single event template
day/single-event.php – Template for a single event in day view
List View

list.php – Wrapper for the list view template, includes the tribe bar and then the list content template
list/content.php – Main content template for list view, contains the title, includes the nav template, the events loop, and the footer. This is the template that’s used to return ajax requests navigating and filtering results on list view
list/nav.php – Contains the next and previous links
list/loop.php – Contains the structure for the loop of events. Includes the single event template
list/single-event.php – Template for a single event in list view
Month View

month.php – Wrapper for the month view template, includes the tribe bar and then the month content template
month/content.php – Main content template for month view, contains the title, includes the nav template, the grid loop, and the footer. This is the template that’s used to return ajax requests navigating and filtering results on month view
month/mobile.php – The template used to display the Month View’s mobile version
month/nav.php – Contains the next and previous links
month/loop-grid.php – Contains the loop structure that loops through all the days in the month, includes the single day template
month/single-day.php – Contains the day number and a loop for the events in each day, includes the single event template
month/single-event.php – Contains a single event in month view
month/tooltip.php – Constructs the pop-over effect when hovering over a day in Month View. Note that this template uses Javascript templating and markup.
Modules

modules/bar.php – The main navigation for the calendar
modules/map.php – Displays the embedded Google Map on a single event or Venue archive
Embedded Events

embed.php – Contains the post embed base template
embed/content.php – The content template for the embed view
embed/cost.php – The cost template for the embed view
embed/footer.php – The footer template for the embed view
embed/image.php – The featured image template for the embed view
embed/meta.php – The template for displaying meta details in the embed view.
embed/schedule.php – The schedule details template for the embed view
embed/venue.php – The venue information for the embed view.
Widgets

widgets/list-widget.php – Template for the list widget included with the free Events plugin

Events Calendar PRO

Parent folder located at:
/wp-content/plugins/events-calendar-pro/src/views/

Single Event View

modules/meta/additional-fields.php – adds additional fields to the single event meta section (see modules/meta.php, above)
related-events.php – Template for displaying related events in the single event view
Map View

map.php – Contains the overall wrapper markup for map view, includes the template for the Google Map container
map/gmap-container.php – Contains the empty HTML element that gets populated with the Google Map via javascript
map/content.php – Main content template for map view, contains the title, includes the nav template, the events loop, and the footer. This is the template that’s used to return ajax requests navigating and filtering results on map view
map/nav.php – Contains the next and previous links
map/loop.php – Contains the structure for the loop of events. Includes the single event template
map/single-event.php – Template for a single event in map view
Photo View

photo.php – Wrapper for the photo view template, includes the tribe bar and then the photo content template
photo/content.php – Main content template, contains the title, includes the nav template, the events loop, and the footer. This is the template that’s used to return ajax requests navigating and filtering results on photo view
photo/nav.php – Contains the next and previous links
photo/loop.php – Contains the structure for the loop of events. Includes the single event template
photo/single-event.php – Template for a single event in photo view
Week View

week.php – Wrapper for the week view template, includes the tribe bar and week content template
week/content.php – Main content template, contains the title, includes the nav template, the events loop, and the footer. This is the template that’s used to return ajax requests navigating and filtering results on the week grid loop views
week/loop-grid.php – Wrapper for the grid loop, contains the week grid day headers
week/loop-grid-allday.php – Contains the column structure for the loop of all day events. Includes the single event all day template
week/loop-grid-hourly.php – Contains the column structure for the loop of hourly events. Includes the single event hourly template
week/nav.php – Contains the next and previous links for navigating between weeks
week/tooltip.php – Template for the hover tooltip for expanded event information
Venues and Organizers

single-organizer.php – Used to list upcoming events related to an individual organizer. This utilizes the list templates for the display of any related upcoming events
single-venue.php — Equivalent to the single-organizer.php template but targeting venues, again this utilizes list templates to display any related events
Widgets

widgets/countdown-widget.php – Contains the countdown widget
widgets/list-widget.php – Contains the list widget included with the premium Events PRO plugin: this overrides any existing template at widgets/list-widget.php (outside of the pro subdirectory). Note that the template will still be respected up until it is removed or a new one is created within the pro subdirectory
widgets/mini-calendar-widget.php – Wrapper for the mini calendar widget. Includes the mini calendar grid template and the mini calendar list template
widgets/mini-calendar/grid.php – Contains the grid (calendar month) portion of the mini calendar widget. Includes the single day template.
widgets/mini-calendar/list.php – This file sets up the structure for the list loop
widgets/mini-calendar/single-day.php – Contains a single day in the mini calendar widget. Includes the single event template
widgets/this-week-widget.php – Contains the This Week widget
widgets/venue-widget.php – Contains the venue widget
Events Tickets

Parent folder located at: /wp-content/plugins/event-tickets/src/views/

shortcodes/my-attendance-list-logged-out.php – Renders the logged out message for the My Attendance list
shortcodes/my-attendance-list.php – Renders the My Attendance list
tickets/attendees-email.php – The template for the email with the attendee list when integrating with ecommerce plugins (like WooCommerce)
tickets/email.php – Template for the email the customers get when they purchase tickets for an event. This email is the actual ticket people will use at the door of your event.
tickets/orders.php – The template for displaying a customer’s purchased orders
tickets/orders-link.php – The link generated for a user to see all purchased orders
tickets/orders-rsvp – This template renders the RSVP ticket form
tickets/rsvp.php – The RSVP form for users on the front-end to RSVP for an event. It shows on the event single if an event has enabled RSVP options.
Events Tickets Plus

Parent folder located at: /wp-content/plugins/event-tickets-plus/src/views/

attendees-list.php – The template for the public list of attendees. Note that there is no subdirectory needed for this template and it can go straight into the tribe-events folder when theming.
login-to-purchase.php – Renders a link displayed to customers when they must first login before being able to purchase tickets
meta.php – The template that displays custom fields that have been created for a ticket to fill in during registration. Note that there is no subdirectory needed for this template and it can go straight into the tribe-events folder when theming.
meta/checkbox.php – The template used for displaying checkbox options for custom ticket fields that get imported by meta.php
meta/number.php – The template used for displaying numeric custom ticket fields that get imported by meta.php
meta/radio – The template used for displaying radio button options for custom ticket fields that get imported by meta.php
meta/select – The template used for displaying selectable options for custom ticket fields that get imported by meta.php
meta/text – The template used for displaying custom ticket text fields that get imported by meta.php
tickets-plus/orders-edit-meta.php– Renders the meta fields for order editing
tickets-plus/orders-tickets.php – The list of ticket orders
eddtickets/tickets.php – Easy Digital Downloads table of tickets with the button to purchase in the front end. It shows in the event single, if the event has EDD tickets to sell
shopptickets/tickets.php – Shopp table of tickets with the button to purchase in the front end. It shows in the event single, if the event has Shopp tickets to sell
wootickets/tickets.php – WooCommerce table of tickets with the button to purchase in the front end. It shows in the event single, if the event has WooCommerce tickets to sell
wpectickets/tickets.php – WP E-Commerce table of tickets with the button to purchase in the front end. It shows in the event single, if the event has WP E-Commerce tickets to sell
Community Events

Parent folder located at: /wp-content/plugins/the-events-calendar-community-events/src/views/

community/blank-comments-template.php –
community/default-placeholder.php –
community/edit-event.php – The template for event submission for community events
community/edit-organizer.php – The template for editing Organizers for community events
community/edit-venue.php – The template for editing Venues for community events
community/email-template.php — The template used for Community Email alerts
community/event-list.php – The template to list logged in user’s events on the front end
community/modules/captcha.php – Renders the captcha field in the submission form
community/modules/cost.php – Renders the pricing fields in the submission form
community/modules/custom.php – This is used to add a metabox to the event submission form to allow for custom field input for user submitted events
community/modules/datepickers.php – This is used to add a metabox to the event submission form to allow for choosing the event time and day.
community/modules/delete.php – This is used to delete a user submitted event
community/modules/header-links.php – The links in the header of the edit form
community/modules/image.php – Renders the image upload field in the submission form
community/modules/organizer-fields.php – This is used to edit the details of individual organizers (phone, email, etc)
community/modules/organizer-multiple.php – The template for constructing multiple organizers in a single event. To avoid code duplication this template lies on The Events Calendar located at the-events-calendar/src/admin-views/linked-post-section.php.
community/modules/organizer.php – This is used to add a metabox to the event submission form to allow for choosing or creating an organizer for user submitted events
community/modules/recurrence.php – This is used to add a metabox to the event submission form to allow for choosing or creating recurrences of user submitted events.
community/modules/taxonomy.php – Renders the taxonomy field in the submission form
community/modules/venue.php – This is used to add a metabox to the event submission form to allow for choosing or creating a venue for user submitted events. This is also used in the Venue edit view, so be careful to test changes in both places.
community/modules/website.php – Renders the website fields in the submission form
Community Tickets

Parent folder located at: /wp-content/plugins/the-events-calendar-community-events-tickets/src/views/

community-tickets/modules/email-item-event-details.php – The link to the event from the order details page
community-tickets/modules/orders-report-after-organizer.php – Renders the PayPal organizer and a link to the email on record in reports
community-tickets/modules/payment-options.php – The template that displays the plugin’s payment options
community-tickets/modules/tickets.php – Renders the ticket settings in the submission form
Eventbrite Tickets

Parent folder located at: /wp-content/plugins/the-events-calendar-eventbrite-tickets/src/views/

eventbrite/add-existing-event.php – Displays the existing Eventbrite event (admin fields)
eventbrite/eb-admin-notices.php – Renders Eventbrite notices on the WordPress Post Edit screen
eventbrite/eventbrite-events-table.php – Displays the existing Eventbrite event in the event meta box
eventbrite/eventbrite-meta-box-extension.php – Displays the existing Eventbrite event meta box in the editor
eventbrite/import-eventbrite-events.php – Import events from Eventbrite events in the admin form
eventbrite/hooks/ticket-form.php – This file contains the hook logic required to create an effective address module view
eventbrite/modules/ticket-form.php – This view contains the filters required to create an effective ticket form module view
Filter Bar

Parent folder located at: /wp-content/plugins/the-events-calendar-filterbar/src/views/

filter-bar/filter-view-horizontal.php – This contains the hooks to generate a filter sidebar in a horizontal layout
filter-bar/filter-view-vertical.php – This contains the hooks to generate a filter sidebar in a vertical layout
iCal Importer

Parent folder located at: /wp-content/plugins/the-events-calendar-importer-ical/src/views/

edit-saved-recurring.php – The saved recurring import settings
hidden-messages.php – The returned notices of an import’s status
ical-tab-content.php – The tabbed sections for imports
import-form.php – The import settings form
one-time-buttons.php – The buttons for one-time imports
recurring-buttons.php – The buttons for recurring imports
saved-imports-table.php – The table for saved imports
status-category-selector.php – The controls for selecting an imported event’s category

Customizing Styles

There are two distinct ways to customize the look of your events pages:

Adding custom styles alongside our default stylesheets – this method is best used when you have just a few changes you’d like to make to the events pages styles.
Replacing the default stylesheets with your own – this method is best used when you’d like customize a majority of the events pages styles.
Adding Custom Styles

The Events Calendar offers 3 default style options to choose from:

Skeleton Styles – Includes only enough CSS to achieve complex layouts like calendar and week view
Full Styles – More detailed layouts, relying heavily on your theme’s typography and colors
Tribe Events Styles – A fully design and styled theme for your events pages, from yours truly
Similar to how template files are overwritten, you can place appropriate files in your theme inside a folder called tribe-events/ to load your own stylesheets. This allows you to load a stylesheet in your theme that only contains the custom styles you need without having to duplicate one of our own as a starting point, or using an @import rule. Keep in mind that when you put a custom stylesheet in the tribe-events folder, it will be loaded in addition to our stylesheets. This differs from placing custom templates in that folder, which replace our templates.

Loading Custom Styles for The Events Calendar

To load custom styles for core views and elements, create a stylesheet called tribe-events.css in the tribe-events/ directory of your theme.
Loading Custom Styles for Events Calendar PRO (premium)

To load custom styles for Events Calendar PRO views and elements, create a stylesheet called tribe-events-pro.css in the tribe-events/pro/ directory of your theme.
To load custom styles for the Events Calendar widget, create a stylesheet called widget-calendar.css in the tribe-events/pro/ directory of your theme.
Loading custom Styles for Community Events (premium)

To load custom styles for Community Events views and elements, create a stylesheet called tribe-events-community.css in the tribe-events/community/ directory of your theme.
For Example:

Let’s say you’d like to add a small style tweak that changes the background color of the event meta box on an single event from gray to white. In tribe-events.css in the tribe-events/ directory of your theme, you can simply add:

1
2
3
.single-tribe_events .tribe-events-event-meta {
    background: #fff;
}
Replacing Default Stylesheets

If you’d like to replace the default stylesheets offered by The Events Calendar, you can use any of the filters we have provided to do so:

tribe_events_stylesheet_url (The Events Calendar core styles)
tribe_events_pro_stylesheet_url (Events Calendar PRO styles)
tribe_events_pro_widget_calendar_stylesheet_url (The Events Calendar calendar widget styles)
For example:

Let’s say you want to replace the custom core and PRO stylesheets offered by the plugin and load your theme’s own stylesheets called custom-events-stylesheet.css and custom-events-pro-stylesheet.css respectively. You can use the aforementioned filters like this:

1
2
3
4
5
function replace_tribe_events_calendar_stylesheet() {
   $styleUrl = get_bloginfo('template_url') . '/custom-events-stylesheet.css';
   return $styleUrl;
}
add_filter('tribe_events_stylesheet_url', 'replace_tribe_events_calendar_stylesheet');
1
2
3
4
5
function replace_tribe_events_calendar_pro_stylesheet() {
   $styleUrl = get_bloginfo('template_url') . '/custom-events-pro-stylesheet.css';
   return $styleUrl;
}
add_filter('tribe_events_pro_stylesheet_url', 'replace_tribe_events_calendar_pro_stylesheet');
Note: The default Tribe stylesheet will continue to load in addition to the custom one you defined above, unless you set the Default stylesheet to something other than Tribe Events Styles. In the Admin control Panel, under Events -> Settings -> Display (tab), change ‘Default stylesheet used for events templates’ to Skeleton Styles if you would like to fully replace the default styles.

Responsive Templates

There are several key areas to be aware of regarding the responsiveness of the events templates, especially if you plan to customize how this component works.

Breakpoints

The default breakpoint at which the responsiveness kicks in for smaller devices is 768px. This breakpoint can be customized or completely killed by utilizing the following filters:

tribe_events_mobile_breakpoint – Will allow you to edit the breakpoint
tribe_events_kill_responsive – Will remove all responsiveness
For example: Let’s say you want to customize the responsive breakpoint to be 600px. You can use the tribe_events_mobile_breakpoint filter like this:

1
2
3
4
function customize_tribe_events_breakpoint() {
    return 600;
}
add_filter( 'tribe_events_mobile_breakpoint', 'customize_tribe_events_breakpoint' );
Now let’s say you want to remove the responsiveness altogether. You can use the tribe_events_kill_responsive filter like this:

1
add_filter( 'tribe_events_kill_responsive', '__return_true');
Lastly, we have provided a couple of body classes for you to utilize as needed:

.tribe-is-responsive – This is added if the breakpoint hasn’t been killed
.tribe-mobile – This is added once you reach the responsive breakpoint breakpoint
CSS

Aside from the retina / hdpi media queries (used for icons only), the responsive CSS has been broken into it’s own stylesheets (*-mobile.css). You will find that each stylesheet option, except for skeleton, includes a mobile stylesheet for both Core and PRO plugins, which contains the CSS necessary to style the responsive templates.

You can see the above section, Customizing Styles, regarding how to work with the newly added responsive stylesheets as this information applies to these stylesheets as well.

Lastly, an additional media query has been included at a max-width of 600px to deal specifically with some of the tickets add-ons and photo view in some of the responsive stylesheets.

JS

Javascript is used as a helper for some of the mobile functionality, and is heavily used for both month and week views. We have also taken an important and significant step in utilizing javascript templates to power the mobile areas for the month and week views as well as to power the overall plugin tooltips.

If you have overridden:

views/month/content.php
views/pro/week/content.php
You will need to update your templates with the latest template code from at least version 3.5 for Core and PRO plugins to make sure you have the various new includes necessary for this functionality.

If you would like to better understand how the javascript templating works or need to customize these templates please refer to our guide on the Javascript Templating.

Lastly, if you have overridden the markup of your tooltips, you’ll need to port these over to the JS template, which includes in-depth instructions.

Templates

(Applies to users upgrading to version 3.5 and above of the Core and PRO plugins)

You’ll want to check over any modifications made, whether that is template or style overrides, or if you’ve also done your own mobile version. Be sure to test your modifications against all the new updates.

You’ll definitely need to update your overridden templates, and potentially the default breakpoint and/or mobile CSS and/or overridden CSS to add the default responsive CSS, but as always you can turn to support if you have any other questions during this process.

Javascript Templating

As of version 3.5 we have begun using some very simple javascript templating to power both the mobile events templates and the tooltips for the month and week views. They are fairly straightforward to follow and understand, and we have also provided detailed inline documentation to help you if you need to customize either part.

You will find these templates, along with their inline documentation and additional helpers, for the following:

Core Documentation: core/src/views/month/single-event.php
PRO Documentation: pro/src/views/week/single-event-allday.php

Mobile Templates:

core/src/views/month/mobile.php
pro/src/views/week/mobile.php
Tooltip Templates:

core/src/views/month/tooltip.php
pro/src/views/week/tooltip.php
You can see the above section, Customizing Template Files, regarding how to work with these newly added templates as this information applies to these templates files as well.