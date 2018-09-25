<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'enrol_payment', language 'en'.
 *
 * @package    enrol_payment
 * @copyright  1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['assignrole'] = 'Assign role';
$string['businessemail'] = 'PayPal business email';
$string['businessemail_desc'] = 'The email address of your business PayPal account';
$string['cost'] = 'Enrol cost';
$string['costerror'] = 'The enrolment cost is not numeric';
$string['costorkey'] = 'Please choose one of the following methods of enrolment.';
$string['currency'] = 'Currency';
$string['defaultrole'] = 'Default role assignment';
$string['defaultrole_desc'] = 'Select role which should be assigned to users during enrolments';
$string['enrolenddate'] = 'End date';
$string['enrolenddate_help'] = 'If enabled, users can be enrolled until this date only.';
$string['enrolenddaterror'] = 'Enrolment end date cannot be earlier than start date';
$string['enrolperiod'] = 'Enrolment duration';
$string['enrolperiod_desc'] = 'Default length of time that the enrolment is valid. If set to zero, the enrolment duration will be unlimited by default.';
$string['enrolperiod_help'] = 'Length of time that the enrolment is valid, starting with the moment the user is enrolled. If disabled, the enrolment duration will be unlimited.';
$string['enrolstartdate'] = 'Start date';
$string['enrolstartdate_help'] = 'If enabled, users can be enrolled from this date onward only.';
$string['enrolgroup'] = 'Group to enroll users into';
$string['enrolnogroup'] = '(No group selected)';
$string['errcommunicating'] = 'There was an error communicating with the server. Please refresh the page and try again. If the problem persists, please contact the site administrator.';
$string['errdisabled'] = 'The Payment enrolment plugin is disabled and does not handle payment notifications.';
$string['erripninvalid'] = 'Instant payment notification has not been verified by PayPal.';
$string['errpaypalconnect'] = 'Could not connect to {$a->url} to verify the instant payment notification: {$a->result}';
$string['expiredaction'] = 'Enrolment expiry action';
$string['expiredaction_help'] = 'Select action to carry out when user enrolment expires. Please note that some user data and settings are purged from course during course unenrolment.';
$string['mailadmins'] = 'Notify admin';
$string['mailstudents'] = 'Notify students';
$string['mailteachers'] = 'Notify teachers';
$string['messageprovider:paypal_enrolment'] = 'Payment enrolment messages';
$string['nocost'] = 'There is no cost associated with enrolling in this course!';
$string['paypal:config'] = 'Configure Payment enrol instances';
$string['paypal:manage'] = 'Manage enrolled users';
$string['paypal:unenrol'] = 'Unenrol users from course';
$string['paypal:unenrolself'] = 'Unenrol self from the course';
$string['paypalaccepted'] = 'PayPal payments accepted';
$string['pluginname'] = 'Payment';
$string['pluginname_desc'] = 'The Payment module allows you to set up paid courses.  If the cost for any course is zero, then students are not asked to pay for entry.  There is a site-wide cost that you set here as a default for the whole site and then a course setting that you can set for each course individually. The course cost overrides the site cost.';
$string['privacy:metadata:enrol_payment:enrol_payment'] = 'Information about the Payment transactions for Payment enrolments.';
$string['privacy:metadata:enrol_payment:enrol_payment:business'] = 'Email address or PayPal account ID of the payment recipient (that is, the merchant).';
$string['privacy:metadata:enrol_payment:enrol_payment:courseid'] = 'The ID of the course that is sold.';
$string['privacy:metadata:enrol_payment:enrol_payment:instanceid'] = 'The ID of the enrolment instance in the course.';
$string['privacy:metadata:enrol_payment:enrol_payment:item_name'] = 'The full name of the course that its enrolment has been sold.';
$string['privacy:metadata:enrol_payment:enrol_payment:memo'] = 'A note that was entered by the buyer in PayPal website payments note field.';
$string['privacy:metadata:enrol_payment:enrol_payment:option_selection1_x'] = 'Full name of the buyer.';
$string['privacy:metadata:enrol_payment:enrol_payment:parent_txn_id'] = 'In the case of a refund, reversal, or canceled reversal, this would be the transaction ID of the original transaction.';
$string['privacy:metadata:enrol_payment:enrol_payment:payment_status'] = 'The status of the payment.';
$string['privacy:metadata:enrol_payment:enrol_payment:payment_type'] = 'Holds whether the payment was funded with an eCheck (echeck), or was funded with PayPal balance, credit card, or instant transfer (instant).';
$string['privacy:metadata:enrol_payment:enrol_payment:pending_reason'] = 'The reason why payment status is pending (if that is).';
$string['privacy:metadata:enrol_payment:enrol_payment:reason_code'] = 'The reason why payment status is Reversed, Refunded, Canceled_Reversal, or Denied (if the status is one of them).';
$string['privacy:metadata:enrol_payment:enrol_payment:receiver_email'] = 'Primary email address of the payment recipient (that is, the merchant).';
$string['privacy:metadata:enrol_payment:enrol_payment:receiver_id'] = 'Unique PayPal account ID of the payment recipient (i.e., the merchant).';
$string['privacy:metadata:enrol_payment:enrol_payment:tax'] = 'Amount of tax charged on payment.';
$string['privacy:metadata:enrol_payment:enrol_payment:timeupdated'] = 'The time of Moodle being notified by PayPal about the payment.';
$string['privacy:metadata:enrol_payment:enrol_payment:txn_id'] = 'The merchant\'s original transaction identification number for the payment from the buyer, against which the case was registered';
$string['privacy:metadata:enrol_payment:enrol_payment:userid'] = 'The ID of the user who bought the course enrolment.';
$string['privacy:metadata:enrol_payment:paypal_com'] = 'The Payment enrolment plugin transmits user data from Moodle to the PayPal website.';
$string['privacy:metadata:enrol_payment:paypal_com:address'] = 'Address of the user who is buying the course.';
$string['privacy:metadata:enrol_payment:paypal_com:city'] = 'City of the user who is buying the course.';
$string['privacy:metadata:enrol_payment:paypal_com:country'] = 'Country of the user who is buying the course.';
$string['privacy:metadata:enrol_payment:paypal_com:custom'] = 'A hyphen-separated string that contains ID of the user (the buyer), ID of the course, ID of the enrolment instance.';
$string['privacy:metadata:enrol_payment:paypal_com:email'] = 'Email address of the user who is buying the course.';
$string['privacy:metadata:enrol_payment:paypal_com:first_name'] = 'First name of the user who is buying the course.';
$string['privacy:metadata:enrol_payment:paypal_com:last_name'] = 'Last name of the user who is buying the course.';
$string['privacy:metadata:enrol_payment:paypal_com:os0'] = 'Full name of the buyer.';
$string['processexpirationstask'] = 'Payment enrolment send expiry notifications task';
$string['sendpaymentbutton_paypal'] = 'Send payment via PayPal';
$string['sendpaymentbutton_stripe'] = 'Send payment via Stripe';
$string['status'] = 'Allow Payment enrolments';
$string['status_desc'] = 'Allow users to use PayPal/Stripe to enrol into a course by default.';
$string['transactions'] = 'PayPal transactions';
$string['unenrolselfconfirm'] = 'Do you really want to unenrol yourself from course "{$a}"?';
$string['sendcoursewelcomemessage'] = 'Send course welcome message';
$string['sendcoursewelcomemessage_help'] = 'When a user self enrols in the course, they may be sent a welcome message email. If sent from the course contact (by default the teacher), and more than one user has this role, the email is sent from the first user to be assigned the role.';
$string['customwelcomemessage'] = 'Custom welcome message';
$string['customwelcomemessage_help'] = 'A custom welcome message may be added as plain text or Moodle-auto format, including HTML tags and multi-lang tags.

The following placeholders may be included in the message:

* Course name {$a->coursename}
* Link to user\'s profile page {$a->profileurl}
* User email {$a->email}
* User fullname {$a->fullname}';

$string['discounttype'] = 'Discount type';
$string['nodiscount'] = 'No discount &nbsp;&nbsp;';
$string['percentdiscount'] = 'Percentage discount &nbsp;&nbsp;';
$string['valuediscount'] = 'Value discount &nbsp;&nbsp;';
$string['discountcode'] = 'Discount code';
$string['discountamount'] = 'Discount amount';
$string['discounttypeerror'] = 'Invalid discount type.';
$string['discountamounterror'] = 'The discount amount is not numeric.';
$string['discountdigitserror'] = 'The discount amount must have fewer than 12 digits.';
$string['negativediscounterror'] = 'The discount amount cannot be negative.';
$string['percentdiscountover100error'] = 'A percentage discount cannot be set above 100.';
$string['allowdiscounts'] = 'Allow discounts';
$string['allowdiscounts_help'] = 'Allow enrollment instances to include a discount code.';
$string['nogatewayenabled'] = 'PayPal and Stripe are not configured for this site. Please contact the site administrator.';
$string['invalidgateway'] = 'Unrecognized payment gateway. Please contact the site administrator.';
$string['notenoughunits'] = 'Attempting to make a purchase for fewer than 1 users.';

$string['requireshippinginfo'] = 'Require shipping info at checkout';
$string['multipleregistration'] = 'Multiple Registration';

//TODO add description - ensure registrants have an account on (long name)
//(Registrant 1 email, instead of Email 1)
$string['multipleregistration_help'] = 'Purchase a registration for multiple users.<br>';
$string['allowmultipleenrol'] = 'Allow Multiple Registration';
$string['allowmultipleenrol_help'] = 'Allow users to enrol other users by entering their email addresses';
$string['sameemailaccountsallowed'] = "Error: Accounts sharing the same email address are allowed on this Moodle site. Because of this, the Multiple Registration cannot be used. Please contact your site administrator.";
$string['duplicateemail'] = "Error: Duplicate emails were entered in the multiple registration form.";

//TODO use site long name
$string['usersnotfoundwithemail'] = "The following emails were not found in the Moodle database: <br><ul><li>";
$string['totalcost'] = "Total cost: ";
$string['multipleregistrationconfirmuserlist'] = "You are purchasing a registration for the following users: <br><ul><li>";
$string['enabletaxcalculation'] = "Enable tax calculation";
$string['enabletaxcalculation_help'] = "If the \"msn\" user profile field is overloaded to store a canadian province abbreviation, calculate the tax and factor into the cost.";
$string['defaultcoursewelcomemessage'] = "Default course welcome message";

$string['stripesecretkey'] = "Stripe Secret Key";
$string['stripesecretkey_desc'] = "The API secret key of your Stripe account";
$string['stripepublishablekey'] = "Stripe Publishable Key";
$string['stripepublishablekey_desc'] = "The API Publishable Key of your Stripe account";
$string['stripelogo'] = "Stripe logo";
$string['stripelogo_desc'] = "128x128 store logo used for Stripe checkout";
$string['charge_description1'] = "create customer for email receipt";
$string['charge_description2'] = 'Charge for Course Enrolment';