<?php /* contact.php */
$page_title = "Contact";
$page_canonical = "contact";
$extra_meta = "<meta name='robots' content='index,nofollow' />
";
$micro_data = ' itemscope itemtype="http://schema.org/Organization"';
include('header.php'); ?>

		<section class="body-text-centered">
			<div class="image-container"><img src="images/sun-contact.png" alt="Contact Radiant Window Cleaning Image" /></div>
			<address itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><span itemprop="name">Radiant Window Cleaning</span><br>
			<span itemprop="streetAddress">1161 Ridge Road</span><br>
			<span itemprop="addressLocality">Harmony Township</span>, <span itemprop="addressRegion">PA</span> <span itemprop="postalCode">15003</span></address>
			Phone <span itemprop="telephone">724-407-3004</span><br><br>
			We service Beaver County, Western Allegheny County and Southwestern Butler County.
			<h3>Contact Radiant Window Cleaning</h3>
			Please use this form to contact Radiant Window Cleaning to be contacted about your free estimate!<br>
			<em>*All fields are required*</em>
			<form class="form-box" action="/contact_process" method="post" name="contact">
				<span class="form-row">
					<label class="form-label" for="first_name">First Name:</label>
					<input class="form-input" name="first_name" type="text" id="first_name" maxlength="20" size="53" />
				</span>
				<span class="form-row">
					<label class="form-label" for="last_name">Last Name:</label>
					<input class="form-input" name="last_name" type="text" id="last_name" maxlength="20" size="53" />
				</span>
				<span class="form-row">
					<label class="form-label" for="email">Email:</label>
					<input class="form-input" name="email" type="email" id="email" maxlength="50" size="53" />
				</span>
				<span class="form-row">
					<label class="form-label" for="phone">Phone:</label>
					<input class="form-input" name="phone" type="text" id="phone" maxlength="12" size="53" />
				</span>
				<span class="form-row">
					<label class="form-label" for="address">Address:</label>
					<input class="form-input" name="address" type="text" id="address" maxlength="50" size="53" />
				</span>
				<span class="form-row">
					<label class="form-label" for="city">City:</label>
					<input class="form-input" name="city" type="text" id="city" maxlength="20" size="53" />
				</span>
				<span class="form-row">
					<label class="form-label" for="state">State:</label>
					<input class="form-input" name="state" type="text" id="state" maxlength="2" size="53" />
				</span>
				<span class="form-row">
					<label class="form-label" for="zip">Zip Code:</label>
					<input class="form-input" name="zip" type="text" id="zip" maxlength="5" size="53" />
				</span>
				<span class="form-row">
					<label class="form-label" for="moreinfo">Additional Information:</label>
					<textarea class="form-textarea" name="moreinfo" cols="40" rows="5" id="moreinfo"></textarea>
				</span>
				<span class="form-row">
					<input class="form-button" type="submit" name="submit" value="Submit" /> 
					<input class="form-button" type="reset" name="Submit2" value="Reset" />
				</span>
			</form>
		</section>

<?php
	include('footer.php');
?>