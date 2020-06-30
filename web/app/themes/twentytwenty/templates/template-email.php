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
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="c-one" id="checkBoxOne" name="c-one">
          <label class="form-check-label" for="checkBoxOne">
            Check Box One
          </label>
        </div>

        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="c-two" id="checkBoxTwo" name="c-two">
          <label class="form-check-label" for="checkBoxTwo">
            Check Box Two
          </label>
        </div>

        <div class="form-check" name="c-three">
          <input class="form-check-input" type="checkbox" value="c-three" id="checkBoxThree" name="c-three">
          <label class="form-check-label" for="checkBoxThree">
            Check Box Three
          </label>
        </div>

        <div class="form-check" name="c-four">
          <input class="form-check-input" type="checkbox" value="c-four" id="checkBoxFour" name="c-four">
          <label class="form-check-label" for="checkBoxFour">
            Check Box Four
          </label>
        </div>

        <!-- Select Options -->
        <div class="form-group">
          <label for="selectOption">Select Options</label>
          <select class="form-control" id="selectOption" name="select-box">
            <option value="one">One</option>
            <option value="two">Two</option>
            <option value="three">Three</option>
            <option value="four">Four</option>
            <option value="five">Five</option>
          </select>
        </div>


        <!-- Radio Button -->
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" id="radioOne" value="male">
          <label class="form-check-label" for="radioOne">Male</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" id="radioTwo" value="female">
          <label class="form-check-label" for="radioTwo">Female</label>
        </div>

        <button type="submit" id="form-submit">Submit</button>

      </form>
    </div>

            <?php
        }
    }

    ?>

  </main><!-- #site-content -->


<?php get_footer();