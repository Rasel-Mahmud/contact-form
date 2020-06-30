<?php
/**
 * Template Name: Contact Form
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
$meta_option = get_post_meta(get_the_ID(), 'form_meta', true);
$option_label = !empty($meta_option['form-option-field-label']) ? $meta_option['form-option-field-label']: '';
$option_fields = !empty($meta_option['form-option-option']) ? $meta_option['form-option-option']: '';

$select_label = !empty($meta_option['form-select-field-label']) ? $meta_option['form-select-field-label']: '';
$select_fields = !empty($meta_option['form-select-option']) ? $meta_option['form-select-option']: '';

$radio_label = !empty($meta_option['form-radio-field-label']) ? $meta_option['form-radio-field-label']: '';
$radio_fields = !empty($meta_option['form-radio-option']) ? $meta_option['form-radio-option']: '';
?>
  <main id="site-content" role="main">

    <?php

    if (have_posts()) {
        while (have_posts()) {
            the_post();
            ?>
    <div class="section-inner contact-form-wrapper">
      <form action="" id="contactForm">
        <!-- Name -->
        <div class="form-group">
          <label for="fullName">Name</label>
          <input type="text" class="form-control" id="fullName" name="name">
        </div>

        <!-- Email -->
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>

        <!-- Number -->
        <div class="form-group">
          <label for="contactNumber">Contact Number</label>
          <input type="number" class="form-control" id="contactNumber" name="number">
        </div>

        <!-- Address -->
        <div class="form-group">
          <label for="address">Address</label>
          <textarea id="address" name="address"></textarea>
        </div>

        <!-- Checkbox -->
            <?= $option_label; ?>
            <?php foreach ($option_fields as $option_field) : ?>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="<?= $option_field['option-label'] ?>" id="<?= $option_field['option-label'] ?>" name="<?= $option_field['option-label'] ?>">
            <label class="form-check-label" for="<?= $option_field['option-label'] ?>">
                <?= $option_field['option-label'] ?>
            </label>
          </div>
            <?php endforeach; ?>

        <!-- Select Options -->
        <div class="form-group">
          <label for="selectOption"><?= $select_label; ?></label>
          <select class="form-control" id="selectOption" name="select-box">
            <?php foreach ($select_fields as $select_field) : ?>
            <option value="<?= $select_field['form-select'] ?>"><?= $select_field['form-select'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>


        <!-- Radio Button -->
            <?= $radio_label; ?>
            <?php foreach ($radio_fields as $radio_field) : ?>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="<?= $radio_field['form-select']; ?>" value="<?= $radio_field['form-select']; ?>">
                <label class="form-check-label" for="<?= $radio_field['form-select']; ?>"><?= $radio_field['form-select']; ?></label>
              </div>
            <?php endforeach; ?>

        <button type="submit" id="form-submit">Submit</button>

      </form>
    </div>

            <?php
        }
    }

    ?>

  </main><!-- #site-content -->


<?php get_footer();