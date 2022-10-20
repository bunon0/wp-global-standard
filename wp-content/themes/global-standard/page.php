<?php get_header(); ?>

<?php if (is_page("components")) {
  get_template_part("pages/page", "components");
} ?>
<?php if (is_page("about")) {
  get_template_part("pages/page", "about");
} ?>
<?php if (is_page("service")) {
  get_template_part("pages/page", "service");
} ?>
<?php if (is_page("case")) {
  get_template_part("pages/page", "case");
} ?>
<?php if (is_page("download")) {
  get_template_part("pages/page", "download");
} ?>
<?php if (is_page("download-thanks")) {
  get_template_part("pages/page", "download-thanks");
} ?>
<?php if (is_page("contact")) {
  get_template_part("pages/page", "contact");
} ?>
<?php if (is_page("contact-thanks")) {
  get_template_part("pages/page", "contact-thanks");
} ?>

<?php get_footer(); ?>