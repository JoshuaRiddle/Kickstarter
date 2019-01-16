import jquery from 'jquery';
import foundation from 'foundation-sites';

// Attach packages to global scope
const $ = jquery;
const Foundation = foundation;

Foundation.addToJquery($);

window.$ = $;
window.jQuery = $;
window.Foundation = Foundation;

// Initialize Foundation JavaScript
$(document).foundation();