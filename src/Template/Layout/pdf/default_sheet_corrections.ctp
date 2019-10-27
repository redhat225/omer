<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Fiche de suivi des corrections</title>
	<style>
@charset "UTF-8";
/*! bulma.io v0.6.2 | MIT License | github.com/jgthms/bulma */
@keyframes spinAround {
  from {
    transform: rotate(0deg); }
  to {
    transform: rotate(359deg); } }
/*! minireset.css v0.0.2 | MIT License | github.com/jgthms/minireset.css */
html,
body,
p,
ol,
ul,
li,
dl,
dt,
dd,
blockquote,
figure,
fieldset,
legend,
textarea,
pre,
iframe,
hr,
h1,
h2,
h3,
h4,
h5,
h6 {
  margin: 0;
  padding: 0; }

h1,
h2,
h3,
h4,
h5,
h6 {
  font-size: 100%;
  font-weight: normal; }

ul {
  list-style: none; }

button,
input,
select,
textarea {
  margin: 0; }

html {
  box-sizing: border-box; }

* {
  box-sizing: inherit; }
  *:before, *:after {
    box-sizing: inherit; }

img,
embed,
object,
audio,
video {
  max-width: 100%; }

iframe {
  border: 0; }

table {
  border-collapse: collapse;
  border-spacing: 0; }

td,
th {
  padding: 0;
  text-align: left; }

html {
  background-color: white;
  font-size: 16px;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  min-width: 300px;
  overflow-x: hidden;
  overflow-y: scroll;
  text-rendering: optimizeLegibility;
  text-size-adjust: 100%; }

article,
aside,
figure,
footer,
header,
hgroup,
section {
  display: block; }

body,
button,
input,
select,
textarea {
  font-family: "Helvetica Neue", Arial, "Georgia", "Helvetica", serif; }

code,
pre {
  -moz-osx-font-smoothing: auto;
  -webkit-font-smoothing: auto;
  font-family: monospace; }

body {
  color: #4a4a4a;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5; }

a {
  color: #3273dc;
  cursor: pointer;
  text-decoration: none; }
  a strong {
    color: currentColor; }
  a:hover {
    color: #363636; }

code {
  background-color: whitesmoke;
  color: #ff3860;
  font-size: 0.875em;
  font-weight: normal;
  padding: 0.25em 0.5em 0.25em; }

hr {
  background-color: #dbdbdb;
  border: none;
  display: block;
  height: 1px;
  margin: 1.5rem 0; }

img {
  height: auto;
  max-width: 100%; }

input[type="checkbox"],
input[type="radio"] {
  vertical-align: baseline; }

small {
  font-size: 0.875em; }

span {
  font-style: inherit;
  font-weight: inherit; }

strong {
  color: #363636;
  font-weight: 700; }

pre {
  -webkit-overflow-scrolling: touch;
  background-color: whitesmoke;
  color: #4a4a4a;
  font-size: 0.875em;
  overflow-x: auto;
  padding: 1.25rem 1.5rem;
  white-space: pre;
  word-wrap: normal; }
  pre code {
    background-color: transparent;
    color: currentColor;
    font-size: 1em;
    padding: 0; }

table td,
table th {
  text-align: left;
  vertical-align: top; }
table th {
  color: #363636; }

.is-clearfix:after {
  clear: both;
  content: " ";
  display: table; }

.is-pulled-left {
  float: left !important; }

.is-pulled-right {
  float: right !important; }

.is-clipped {
  overflow: hidden !important; }

.is-overlay {
  bottom: 0;
  left: 0;
  position: absolute;
  right: 0;
  top: 0; }

.is-size-1 {
  font-size: 3rem !important; }

.is-size-2 {
  font-size: 2.5rem !important; }

.is-size-3 {
  font-size: 2rem !important; }

.is-size-4 {
  font-size: 1.5rem !important; }

.is-size-5 {
  font-size: 1.25rem !important; }

.is-size-6 {
  font-size: 1rem !important; }

.is-size-7 {
  font-size: 0.75rem !important; }

@media screen and (max-width: 768px) {
  .is-size-1-mobile {
    font-size: 3rem !important; }

  .is-size-2-mobile {
    font-size: 2.5rem !important; }

  .is-size-3-mobile {
    font-size: 2rem !important; }

  .is-size-4-mobile {
    font-size: 1.5rem !important; }

  .is-size-5-mobile {
    font-size: 1.25rem !important; }

  .is-size-6-mobile {
    font-size: 1rem !important; }

  .is-size-7-mobile {
    font-size: 0.75rem !important; } }
@media screen and (min-width: 769px), print {
  .is-size-1-tablet {
    font-size: 3rem !important; }

  .is-size-2-tablet {
    font-size: 2.5rem !important; }

  .is-size-3-tablet {
    font-size: 2rem !important; }

  .is-size-4-tablet {
    font-size: 1.5rem !important; }

  .is-size-5-tablet {
    font-size: 1.25rem !important; }

  .is-size-6-tablet {
    font-size: 1rem !important; }

  .is-size-7-tablet {
    font-size: 0.75rem !important; } }
@media screen and (max-width: 1023px) {
  .is-size-1-touch {
    font-size: 3rem !important; }

  .is-size-2-touch {
    font-size: 2.5rem !important; }

  .is-size-3-touch {
    font-size: 2rem !important; }

  .is-size-4-touch {
    font-size: 1.5rem !important; }

  .is-size-5-touch {
    font-size: 1.25rem !important; }

  .is-size-6-touch {
    font-size: 1rem !important; }

  .is-size-7-touch {
    font-size: 0.75rem !important; } }
@media screen and (min-width: 1024px) {
  .is-size-1-desktop {
    font-size: 3rem !important; }

  .is-size-2-desktop {
    font-size: 2.5rem !important; }

  .is-size-3-desktop {
    font-size: 2rem !important; }

  .is-size-4-desktop {
    font-size: 1.5rem !important; }

  .is-size-5-desktop {
    font-size: 1.25rem !important; }

  .is-size-6-desktop {
    font-size: 1rem !important; }

  .is-size-7-desktop {
    font-size: 0.75rem !important; } }
@media screen and (min-width: 1216px) {
  .is-size-1-widescreen {
    font-size: 3rem !important; }

  .is-size-2-widescreen {
    font-size: 2.5rem !important; }

  .is-size-3-widescreen {
    font-size: 2rem !important; }

  .is-size-4-widescreen {
    font-size: 1.5rem !important; }

  .is-size-5-widescreen {
    font-size: 1.25rem !important; }

  .is-size-6-widescreen {
    font-size: 1rem !important; }

  .is-size-7-widescreen {
    font-size: 0.75rem !important; } }
@media screen and (min-width: 1408px) {
  .is-size-1-fullhd {
    font-size: 3rem !important; }

  .is-size-2-fullhd {
    font-size: 2.5rem !important; }

  .is-size-3-fullhd {
    font-size: 2rem !important; }

  .is-size-4-fullhd {
    font-size: 1.5rem !important; }

  .is-size-5-fullhd {
    font-size: 1.25rem !important; }

  .is-size-6-fullhd {
    font-size: 1rem !important; }

  .is-size-7-fullhd {
    font-size: 0.75rem !important; } }
.has-text-centered {
  text-align: center !important; }

@media screen and (max-width: 768px) {
  .has-text-centered-mobile {
    text-align: center !important; } }
@media screen and (min-width: 769px), print {
  .has-text-centered-tablet {
    text-align: center !important; } }
@media screen and (min-width: 769px) and (max-width: 1023px) {
  .has-text-centered-tablet-only {
    text-align: center !important; } }
@media screen and (max-width: 1023px) {
  .has-text-centered-touch {
    text-align: center !important; } }
@media screen and (min-width: 1024px) {
  .has-text-centered-desktop {
    text-align: center !important; } }
@media screen and (min-width: 1024px) and (max-width: 1215px) {
  .has-text-centered-desktop-only {
    text-align: center !important; } }
@media screen and (min-width: 1216px) {
  .has-text-centered-widescreen {
    text-align: center !important; } }
@media screen and (min-width: 1216px) and (max-width: 1407px) {
  .has-text-centered-widescreen-only {
    text-align: center !important; } }
@media screen and (min-width: 1408px) {
  .has-text-centered-fullhd {
    text-align: center !important; } }
.has-text-justified {
  text-align: justify !important; }

@media screen and (max-width: 768px) {
  .has-text-justified-mobile {
    text-align: justify !important; } }
@media screen and (min-width: 769px), print {
  .has-text-justified-tablet {
    text-align: justify !important; } }
@media screen and (min-width: 769px) and (max-width: 1023px) {
  .has-text-justified-tablet-only {
    text-align: justify !important; } }
@media screen and (max-width: 1023px) {
  .has-text-justified-touch {
    text-align: justify !important; } }
@media screen and (min-width: 1024px) {
  .has-text-justified-desktop {
    text-align: justify !important; } }
@media screen and (min-width: 1024px) and (max-width: 1215px) {
  .has-text-justified-desktop-only {
    text-align: justify !important; } }
@media screen and (min-width: 1216px) {
  .has-text-justified-widescreen {
    text-align: justify !important; } }
@media screen and (min-width: 1216px) and (max-width: 1407px) {
  .has-text-justified-widescreen-only {
    text-align: justify !important; } }
@media screen and (min-width: 1408px) {
  .has-text-justified-fullhd {
    text-align: justify !important; } }
.has-text-left {
  text-align: left !important; }

@media screen and (max-width: 768px) {
  .has-text-left-mobile {
    text-align: left !important; } }
@media screen and (min-width: 769px), print {
  .has-text-left-tablet {
    text-align: left !important; } }
@media screen and (min-width: 769px) and (max-width: 1023px) {
  .has-text-left-tablet-only {
    text-align: left !important; } }
@media screen and (max-width: 1023px) {
  .has-text-left-touch {
    text-align: left !important; } }
@media screen and (min-width: 1024px) {
  .has-text-left-desktop {
    text-align: left !important; } }
@media screen and (min-width: 1024px) and (max-width: 1215px) {
  .has-text-left-desktop-only {
    text-align: left !important; } }
@media screen and (min-width: 1216px) {
  .has-text-left-widescreen {
    text-align: left !important; } }
@media screen and (min-width: 1216px) and (max-width: 1407px) {
  .has-text-left-widescreen-only {
    text-align: left !important; } }
@media screen and (min-width: 1408px) {
  .has-text-left-fullhd {
    text-align: left !important; } }
.has-text-right {
  text-align: right !important; }

@media screen and (max-width: 768px) {
  .has-text-right-mobile {
    text-align: right !important; } }
@media screen and (min-width: 769px), print {
  .has-text-right-tablet {
    text-align: right !important; } }
@media screen and (min-width: 769px) and (max-width: 1023px) {
  .has-text-right-tablet-only {
    text-align: right !important; } }
@media screen and (max-width: 1023px) {
  .has-text-right-touch {
    text-align: right !important; } }
@media screen and (min-width: 1024px) {
  .has-text-right-desktop {
    text-align: right !important; } }
@media screen and (min-width: 1024px) and (max-width: 1215px) {
  .has-text-right-desktop-only {
    text-align: right !important; } }
@media screen and (min-width: 1216px) {
  .has-text-right-widescreen {
    text-align: right !important; } }
@media screen and (min-width: 1216px) and (max-width: 1407px) {
  .has-text-right-widescreen-only {
    text-align: right !important; } }
@media screen and (min-width: 1408px) {
  .has-text-right-fullhd {
    text-align: right !important; } }
.is-capitalized {
  text-transform: capitalize !important; }

.is-lowercase {
  text-transform: lowercase !important; }

.is-uppercase {
  text-transform: uppercase !important; }

.is-italic {
  font-style: italic !important; }

.has-text-white {
  color: white !important; }

a.has-text-white:hover, a.has-text-white:focus {
  color: #e6e6e6 !important; }

.has-text-black {
  color: #0a0a0a !important; }

a.has-text-black:hover, a.has-text-black:focus {
  color: black !important; }

.has-text-light {
  color: whitesmoke !important; }

a.has-text-light:hover, a.has-text-light:focus {
  color: #dbdbdb !important; }

.has-text-dark {
  color: #363636 !important; }

a.has-text-dark:hover, a.has-text-dark:focus {
  color: #1c1c1c !important; }

.has-text-primary {
  color: #00d1b2 !important; }

a.has-text-primary:hover, a.has-text-primary:focus {
  color: #009e86 !important; }

.has-text-link {
  color: #3273dc !important; }

a.has-text-link:hover, a.has-text-link:focus {
  color: #205bbc !important; }

.has-text-info {
  color: #209cee !important; }

a.has-text-info:hover, a.has-text-info:focus {
  color: #0f81cc !important; }

.has-text-success {
  color: #23d160 !important; }

a.has-text-success:hover, a.has-text-success:focus {
  color: #1ca64c !important; }

.has-text-warning {
  color: #ffdd57 !important; }

a.has-text-warning:hover, a.has-text-warning:focus {
  color: #ffd324 !important; }

.has-text-danger {
  color: #ff3860 !important; }

a.has-text-danger:hover, a.has-text-danger:focus {
  color: #ff0537 !important; }

.has-text-eben {
  color: #f85800 !important; }

a.has-text-eben:hover, a.has-text-eben:focus {
  color: #c54600 !important; }

.has-text-eben-blue {
  color: #4bb3e6 !important; }

a.has-text-eben-blue:hover, a.has-text-eben-blue:focus {
  color: #1fa0df !important; }

.has-text-eben-bottledgreen {
  color: #c8e2d5 !important; }

a.has-text-eben-bottledgreen:hover, a.has-text-eben-bottledgreen:focus {
  color: #a7d0bc !important; }

.has-text-black-bis {
  color: #121212 !important; }

.has-text-black-ter {
  color: #242424 !important; }

.has-text-grey-darker {
  color: #363636 !important; }

.has-text-grey-dark {
  color: #4a4a4a !important; }

.has-text-grey {
  color: #7a7a7a !important; }

.has-text-grey-light {
  color: #b5b5b5 !important; }

.has-text-grey-lighter {
  color: #dbdbdb !important; }

.has-text-white-ter {
  color: whitesmoke !important; }

.has-text-white-bis {
  color: #fafafa !important; }

.has-text-weight-light {
  font-weight: 300 !important; }

.has-text-weight-normal {
  font-weight: 400 !important; }

.has-text-weight-semibold {
  font-weight: 600 !important; }

.has-text-weight-bold {
  font-weight: 700 !important; }

.is-block {
  display: block !important; }

@media screen and (max-width: 768px) {
  .is-block-mobile {
    display: block !important; } }
@media screen and (min-width: 769px), print {
  .is-block-tablet {
    display: block !important; } }
@media screen and (min-width: 769px) and (max-width: 1023px) {
  .is-block-tablet-only {
    display: block !important; } }
@media screen and (max-width: 1023px) {
  .is-block-touch {
    display: block !important; } }
@media screen and (min-width: 1024px) {
  .is-block-desktop {
    display: block !important; } }
@media screen and (min-width: 1024px) and (max-width: 1215px) {
  .is-block-desktop-only {
    display: block !important; } }
@media screen and (min-width: 1216px) {
  .is-block-widescreen {
    display: block !important; } }
@media screen and (min-width: 1216px) and (max-width: 1407px) {
  .is-block-widescreen-only {
    display: block !important; } }
@media screen and (min-width: 1408px) {
  .is-block-fullhd {
    display: block !important; } }
.is-flex {
  display: flex !important; }

@media screen and (max-width: 768px) {
  .is-flex-mobile {
    display: flex !important; } }
@media screen and (min-width: 769px), print {
  .is-flex-tablet {
    display: flex !important; } }
@media screen and (min-width: 769px) and (max-width: 1023px) {
  .is-flex-tablet-only {
    display: flex !important; } }
@media screen and (max-width: 1023px) {
  .is-flex-touch {
    display: flex !important; } }
@media screen and (min-width: 1024px) {
  .is-flex-desktop {
    display: flex !important; } }
@media screen and (min-width: 1024px) and (max-width: 1215px) {
  .is-flex-desktop-only {
    display: flex !important; } }
@media screen and (min-width: 1216px) {
  .is-flex-widescreen {
    display: flex !important; } }
@media screen and (min-width: 1216px) and (max-width: 1407px) {
  .is-flex-widescreen-only {
    display: flex !important; } }
@media screen and (min-width: 1408px) {
  .is-flex-fullhd {
    display: flex !important; } }
.is-inline {
  display: inline !important; }

@media screen and (max-width: 768px) {
  .is-inline-mobile {
    display: inline !important; } }
@media screen and (min-width: 769px), print {
  .is-inline-tablet {
    display: inline !important; } }
@media screen and (min-width: 769px) and (max-width: 1023px) {
  .is-inline-tablet-only {
    display: inline !important; } }
@media screen and (max-width: 1023px) {
  .is-inline-touch {
    display: inline !important; } }
@media screen and (min-width: 1024px) {
  .is-inline-desktop {
    display: inline !important; } }
@media screen and (min-width: 1024px) and (max-width: 1215px) {
  .is-inline-desktop-only {
    display: inline !important; } }
@media screen and (min-width: 1216px) {
  .is-inline-widescreen {
    display: inline !important; } }
@media screen and (min-width: 1216px) and (max-width: 1407px) {
  .is-inline-widescreen-only {
    display: inline !important; } }
@media screen and (min-width: 1408px) {
  .is-inline-fullhd {
    display: inline !important; } }
.is-inline-block {
  display: inline-block !important; }

@media screen and (max-width: 768px) {
  .is-inline-block-mobile {
    display: inline-block !important; } }
@media screen and (min-width: 769px), print {
  .is-inline-block-tablet {
    display: inline-block !important; } }
@media screen and (min-width: 769px) and (max-width: 1023px) {
  .is-inline-block-tablet-only {
    display: inline-block !important; } }
@media screen and (max-width: 1023px) {
  .is-inline-block-touch {
    display: inline-block !important; } }
@media screen and (min-width: 1024px) {
  .is-inline-block-desktop {
    display: inline-block !important; } }
@media screen and (min-width: 1024px) and (max-width: 1215px) {
  .is-inline-block-desktop-only {
    display: inline-block !important; } }
@media screen and (min-width: 1216px) {
  .is-inline-block-widescreen {
    display: inline-block !important; } }
@media screen and (min-width: 1216px) and (max-width: 1407px) {
  .is-inline-block-widescreen-only {
    display: inline-block !important; } }
@media screen and (min-width: 1408px) {
  .is-inline-block-fullhd {
    display: inline-block !important; } }
.is-inline-flex {
  display: inline-flex !important; }

@media screen and (max-width: 768px) {
  .is-inline-flex-mobile {
    display: inline-flex !important; } }
@media screen and (min-width: 769px), print {
  .is-inline-flex-tablet {
    display: inline-flex !important; } }
@media screen and (min-width: 769px) and (max-width: 1023px) {
  .is-inline-flex-tablet-only {
    display: inline-flex !important; } }
@media screen and (max-width: 1023px) {
  .is-inline-flex-touch {
    display: inline-flex !important; } }
@media screen and (min-width: 1024px) {
  .is-inline-flex-desktop {
    display: inline-flex !important; } }
@media screen and (min-width: 1024px) and (max-width: 1215px) {
  .is-inline-flex-desktop-only {
    display: inline-flex !important; } }
@media screen and (min-width: 1216px) {
  .is-inline-flex-widescreen {
    display: inline-flex !important; } }
@media screen and (min-width: 1216px) and (max-width: 1407px) {
  .is-inline-flex-widescreen-only {
    display: inline-flex !important; } }
@media screen and (min-width: 1408px) {
  .is-inline-flex-fullhd {
    display: inline-flex !important; } }
.is-hidden {
  display: none !important; }

@media screen and (max-width: 768px) {
  .is-hidden-mobile {
    display: none !important; } }
@media screen and (min-width: 769px), print {
  .is-hidden-tablet {
    display: none !important; } }
@media screen and (min-width: 769px) and (max-width: 1023px) {
  .is-hidden-tablet-only {
    display: none !important; } }
@media screen and (max-width: 1023px) {
  .is-hidden-touch {
    display: none !important; } }
@media screen and (min-width: 1024px) {
  .is-hidden-desktop {
    display: none !important; } }
@media screen and (min-width: 1024px) and (max-width: 1215px) {
  .is-hidden-desktop-only {
    display: none !important; } }
@media screen and (min-width: 1216px) {
  .is-hidden-widescreen {
    display: none !important; } }
@media screen and (min-width: 1216px) and (max-width: 1407px) {
  .is-hidden-widescreen-only {
    display: none !important; } }
@media screen and (min-width: 1408px) {
  .is-hidden-fullhd {
    display: none !important; } }
.is-invisible {
  visibility: hidden !important; }

@media screen and (max-width: 768px) {
  .is-invisible-mobile {
    visibility: hidden !important; } }
@media screen and (min-width: 769px), print {
  .is-invisible-tablet {
    visibility: hidden !important; } }
@media screen and (min-width: 769px) and (max-width: 1023px) {
  .is-invisible-tablet-only {
    visibility: hidden !important; } }
@media screen and (max-width: 1023px) {
  .is-invisible-touch {
    visibility: hidden !important; } }
@media screen and (min-width: 1024px) {
  .is-invisible-desktop {
    visibility: hidden !important; } }
@media screen and (min-width: 1024px) and (max-width: 1215px) {
  .is-invisible-desktop-only {
    visibility: hidden !important; } }
@media screen and (min-width: 1216px) {
  .is-invisible-widescreen {
    visibility: hidden !important; } }
@media screen and (min-width: 1216px) and (max-width: 1407px) {
  .is-invisible-widescreen-only {
    visibility: hidden !important; } }
@media screen and (min-width: 1408px) {
  .is-invisible-fullhd {
    visibility: hidden !important; } }
.is-marginless {
  margin: 0 !important; }

.is-paddingless {
  padding: 0 !important; }

.is-radiusless {
  border-radius: 0 !important; }

.is-shadowless {
  box-shadow: none !important; }

.is-unselectable {
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none; }

.box {
  background-color: white;
  border-radius: 5px;
  box-shadow: 0 2px 3px rgba(10, 10, 10, 0.1), 0 0 0 1px rgba(10, 10, 10, 0.1);
  color: #4a4a4a;
  display: block;
  padding: 1.25rem; }
  .box:not(:last-child) {
    margin-bottom: 1.5rem; }

a.box:hover, a.box:focus {
  box-shadow: 0 2px 3px rgba(10, 10, 10, 0.1), 0 0 0 1px #3273dc; }
a.box:active {
  box-shadow: inset 0 1px 2px rgba(10, 10, 10, 0.2), 0 0 0 1px #3273dc; }

.button {
  -moz-appearance: none;
  -webkit-appearance: none;
  align-items: center;
  border: 1px solid transparent;
  border-radius: 3px;
  box-shadow: none;
  display: inline-flex;
  font-size: 1rem;
  height: 2.25em;
  justify-content: flex-start;
  line-height: 1.5;
  padding-bottom: calc(0.375em - 1px);
  padding-left: calc(0.625em - 1px);
  padding-right: calc(0.625em - 1px);
  padding-top: calc(0.375em - 1px);
  position: relative;
  vertical-align: top;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  background-color: white;
  border-color: #dbdbdb;
  color: #363636;
  cursor: pointer;
  justify-content: center;
  padding-left: 0.75em;
  padding-right: 0.75em;
  text-align: center;
  white-space: nowrap; }
  .button:focus, .button.is-focused, .button:active, .button.is-active {
    outline: none; }
  .button[disabled] {
    cursor: not-allowed; }
  .button strong {
    color: inherit; }
  .button .icon, .button .icon.is-small, .button .icon.is-medium, .button .icon.is-large {
    height: 1.5em;
    width: 1.5em; }
  .button .icon:first-child:not(:last-child) {
    margin-left: calc(-0.375em - 1px);
    margin-right: 0.1875em; }
  .button .icon:last-child:not(:first-child) {
    margin-left: 0.1875em;
    margin-right: calc(-0.375em - 1px); }
  .button .icon:first-child:last-child {
    margin-left: calc(-0.375em - 1px);
    margin-right: calc(-0.375em - 1px); }
  .button:hover, .button.is-hovered {
    border-color: #b5b5b5;
    color: #363636; }
  .button:focus, .button.is-focused {
    border-color: #3273dc;
    color: #363636; }
    .button:focus:not(:active), .button.is-focused:not(:active) {
      box-shadow: 0 0 0 0.125em rgba(50, 115, 220, 0.25); }
  .button:active, .button.is-active {
    border-color: #4a4a4a;
    color: #363636; }
  .button.is-text {
    background-color: transparent;
    border-color: transparent;
    color: #4a4a4a;
    text-decoration: underline; }
    .button.is-text:hover, .button.is-text.is-hovered, .button.is-text:focus, .button.is-text.is-focused {
      background-color: whitesmoke;
      color: #363636; }
    .button.is-text:active, .button.is-text.is-active {
      background-color: #e8e8e8;
      color: #363636; }
    .button.is-text[disabled] {
      background-color: transparent;
      border-color: transparent;
      box-shadow: none; }
  .button.is-white {
    background-color: white;
    border-color: transparent;
    color: #0a0a0a; }
    .button.is-white:hover, .button.is-white.is-hovered {
      background-color: #f9f9f9;
      border-color: transparent;
      color: #0a0a0a; }
    .button.is-white:focus, .button.is-white.is-focused {
      border-color: transparent;
      color: #0a0a0a; }
      .button.is-white:focus:not(:active), .button.is-white.is-focused:not(:active) {
        box-shadow: 0 0 0 0.125em rgba(255, 255, 255, 0.25); }
    .button.is-white:active, .button.is-white.is-active {
      background-color: #f2f2f2;
      border-color: transparent;
      color: #0a0a0a; }
    .button.is-white[disabled] {
      background-color: white;
      border-color: transparent;
      box-shadow: none; }
    .button.is-white.is-inverted {
      background-color: #0a0a0a;
      color: white; }
      .button.is-white.is-inverted:hover {
        background-color: black; }
      .button.is-white.is-inverted[disabled] {
        background-color: #0a0a0a;
        border-color: transparent;
        box-shadow: none;
        color: white; }
    .button.is-white.is-loading:after {
      border-color: transparent transparent #0a0a0a #0a0a0a !important; }
    .button.is-white.is-outlined {
      background-color: transparent;
      border-color: white;
      color: white; }
      .button.is-white.is-outlined:hover, .button.is-white.is-outlined:focus {
        background-color: white;
        border-color: white;
        color: #0a0a0a; }
      .button.is-white.is-outlined.is-loading:after {
        border-color: transparent transparent white white !important; }
      .button.is-white.is-outlined[disabled] {
        background-color: transparent;
        border-color: white;
        box-shadow: none;
        color: white; }
    .button.is-white.is-inverted.is-outlined {
      background-color: transparent;
      border-color: #0a0a0a;
      color: #0a0a0a; }
      .button.is-white.is-inverted.is-outlined:hover, .button.is-white.is-inverted.is-outlined:focus {
        background-color: #0a0a0a;
        color: white; }
      .button.is-white.is-inverted.is-outlined[disabled] {
        background-color: transparent;
        border-color: #0a0a0a;
        box-shadow: none;
        color: #0a0a0a; }
  .button.is-black {
    background-color: #0a0a0a;
    border-color: transparent;
    color: white; }
    .button.is-black:hover, .button.is-black.is-hovered {
      background-color: #040404;
      border-color: transparent;
      color: white; }
    .button.is-black:focus, .button.is-black.is-focused {
      border-color: transparent;
      color: white; }
      .button.is-black:focus:not(:active), .button.is-black.is-focused:not(:active) {
        box-shadow: 0 0 0 0.125em rgba(10, 10, 10, 0.25); }
    .button.is-black:active, .button.is-black.is-active {
      background-color: black;
      border-color: transparent;
      color: white; }
    .button.is-black[disabled] {
      background-color: #0a0a0a;
      border-color: transparent;
      box-shadow: none; }
    .button.is-black.is-inverted {
      background-color: white;
      color: #0a0a0a; }
      .button.is-black.is-inverted:hover {
        background-color: #f2f2f2; }
      .button.is-black.is-inverted[disabled] {
        background-color: white;
        border-color: transparent;
        box-shadow: none;
        color: #0a0a0a; }
    .button.is-black.is-loading:after {
      border-color: transparent transparent white white !important; }
    .button.is-black.is-outlined {
      background-color: transparent;
      border-color: #0a0a0a;
      color: #0a0a0a; }
      .button.is-black.is-outlined:hover, .button.is-black.is-outlined:focus {
        background-color: #0a0a0a;
        border-color: #0a0a0a;
        color: white; }
      .button.is-black.is-outlined.is-loading:after {
        border-color: transparent transparent #0a0a0a #0a0a0a !important; }
      .button.is-black.is-outlined[disabled] {
        background-color: transparent;
        border-color: #0a0a0a;
        box-shadow: none;
        color: #0a0a0a; }
    .button.is-black.is-inverted.is-outlined {
      background-color: transparent;
      border-color: white;
      color: white; }
      .button.is-black.is-inverted.is-outlined:hover, .button.is-black.is-inverted.is-outlined:focus {
        background-color: white;
        color: #0a0a0a; }
      .button.is-black.is-inverted.is-outlined[disabled] {
        background-color: transparent;
        border-color: white;
        box-shadow: none;
        color: white; }
  .button.is-light {
    background-color: whitesmoke;
    border-color: transparent;
    color: #363636; }
    .button.is-light:hover, .button.is-light.is-hovered {
      background-color: #eeeeee;
      border-color: transparent;
      color: #363636; }
    .button.is-light:focus, .button.is-light.is-focused {
      border-color: transparent;
      color: #363636; }
      .button.is-light:focus:not(:active), .button.is-light.is-focused:not(:active) {
        box-shadow: 0 0 0 0.125em rgba(245, 245, 245, 0.25); }
    .button.is-light:active, .button.is-light.is-active {
      background-color: #e8e8e8;
      border-color: transparent;
      color: #363636; }
    .button.is-light[disabled] {
      background-color: whitesmoke;
      border-color: transparent;
      box-shadow: none; }
    .button.is-light.is-inverted {
      background-color: #363636;
      color: whitesmoke; }
      .button.is-light.is-inverted:hover {
        background-color: #292929; }
      .button.is-light.is-inverted[disabled] {
        background-color: #363636;
        border-color: transparent;
        box-shadow: none;
        color: whitesmoke; }
    .button.is-light.is-loading:after {
      border-color: transparent transparent #363636 #363636 !important; }
    .button.is-light.is-outlined {
      background-color: transparent;
      border-color: whitesmoke;
      color: whitesmoke; }
      .button.is-light.is-outlined:hover, .button.is-light.is-outlined:focus {
        background-color: whitesmoke;
        border-color: whitesmoke;
        color: #363636; }
      .button.is-light.is-outlined.is-loading:after {
        border-color: transparent transparent whitesmoke whitesmoke !important; }
      .button.is-light.is-outlined[disabled] {
        background-color: transparent;
        border-color: whitesmoke;
        box-shadow: none;
        color: whitesmoke; }
    .button.is-light.is-inverted.is-outlined {
      background-color: transparent;
      border-color: #363636;
      color: #363636; }
      .button.is-light.is-inverted.is-outlined:hover, .button.is-light.is-inverted.is-outlined:focus {
        background-color: #363636;
        color: whitesmoke; }
      .button.is-light.is-inverted.is-outlined[disabled] {
        background-color: transparent;
        border-color: #363636;
        box-shadow: none;
        color: #363636; }
  .button.is-dark {
    background-color: #363636;
    border-color: transparent;
    color: whitesmoke; }
    .button.is-dark:hover, .button.is-dark.is-hovered {
      background-color: #2f2f2f;
      border-color: transparent;
      color: whitesmoke; }
    .button.is-dark:focus, .button.is-dark.is-focused {
      border-color: transparent;
      color: whitesmoke; }
      .button.is-dark:focus:not(:active), .button.is-dark.is-focused:not(:active) {
        box-shadow: 0 0 0 0.125em rgba(54, 54, 54, 0.25); }
    .button.is-dark:active, .button.is-dark.is-active {
      background-color: #292929;
      border-color: transparent;
      color: whitesmoke; }
    .button.is-dark[disabled] {
      background-color: #363636;
      border-color: transparent;
      box-shadow: none; }
    .button.is-dark.is-inverted {
      background-color: whitesmoke;
      color: #363636; }
      .button.is-dark.is-inverted:hover {
        background-color: #e8e8e8; }
      .button.is-dark.is-inverted[disabled] {
        background-color: whitesmoke;
        border-color: transparent;
        box-shadow: none;
        color: #363636; }
    .button.is-dark.is-loading:after {
      border-color: transparent transparent whitesmoke whitesmoke !important; }
    .button.is-dark.is-outlined {
      background-color: transparent;
      border-color: #363636;
      color: #363636; }
      .button.is-dark.is-outlined:hover, .button.is-dark.is-outlined:focus {
        background-color: #363636;
        border-color: #363636;
        color: whitesmoke; }
      .button.is-dark.is-outlined.is-loading:after {
        border-color: transparent transparent #363636 #363636 !important; }
      .button.is-dark.is-outlined[disabled] {
        background-color: transparent;
        border-color: #363636;
        box-shadow: none;
        color: #363636; }
    .button.is-dark.is-inverted.is-outlined {
      background-color: transparent;
      border-color: whitesmoke;
      color: whitesmoke; }
      .button.is-dark.is-inverted.is-outlined:hover, .button.is-dark.is-inverted.is-outlined:focus {
        background-color: whitesmoke;
        color: #363636; }
      .button.is-dark.is-inverted.is-outlined[disabled] {
        background-color: transparent;
        border-color: whitesmoke;
        box-shadow: none;
        color: whitesmoke; }
  .button.is-primary {
    background-color: #00d1b2;
    border-color: transparent;
    color: #fff; }
    .button.is-primary:hover, .button.is-primary.is-hovered {
      background-color: #00c4a7;
      border-color: transparent;
      color: #fff; }
    .button.is-primary:focus, .button.is-primary.is-focused {
      border-color: transparent;
      color: #fff; }
      .button.is-primary:focus:not(:active), .button.is-primary.is-focused:not(:active) {
        box-shadow: 0 0 0 0.125em rgba(0, 209, 178, 0.25); }
    .button.is-primary:active, .button.is-primary.is-active {
      background-color: #00b89c;
      border-color: transparent;
      color: #fff; }
    .button.is-primary[disabled] {
      background-color: #00d1b2;
      border-color: transparent;
      box-shadow: none; }
    .button.is-primary.is-inverted {
      background-color: #fff;
      color: #00d1b2; }
      .button.is-primary.is-inverted:hover {
        background-color: #f2f2f2; }
      .button.is-primary.is-inverted[disabled] {
        background-color: #fff;
        border-color: transparent;
        box-shadow: none;
        color: #00d1b2; }
    .button.is-primary.is-loading:after {
      border-color: transparent transparent #fff #fff !important; }
    .button.is-primary.is-outlined {
      background-color: transparent;
      border-color: #00d1b2;
      color: #00d1b2; }
      .button.is-primary.is-outlined:hover, .button.is-primary.is-outlined:focus {
        background-color: #00d1b2;
        border-color: #00d1b2;
        color: #fff; }
      .button.is-primary.is-outlined.is-loading:after {
        border-color: transparent transparent #00d1b2 #00d1b2 !important; }
      .button.is-primary.is-outlined[disabled] {
        background-color: transparent;
        border-color: #00d1b2;
        box-shadow: none;
        color: #00d1b2; }
    .button.is-primary.is-inverted.is-outlined {
      background-color: transparent;
      border-color: #fff;
      color: #fff; }
      .button.is-primary.is-inverted.is-outlined:hover, .button.is-primary.is-inverted.is-outlined:focus {
        background-color: #fff;
        color: #00d1b2; }
      .button.is-primary.is-inverted.is-outlined[disabled] {
        background-color: transparent;
        border-color: #fff;
        box-shadow: none;
        color: #fff; }
  .button.is-link {
    background-color: #3273dc;
    border-color: transparent;
    color: #fff; }
    .button.is-link:hover, .button.is-link.is-hovered {
      background-color: #276cda;
      border-color: transparent;
      color: #fff; }
    .button.is-link:focus, .button.is-link.is-focused {
      border-color: transparent;
      color: #fff; }
      .button.is-link:focus:not(:active), .button.is-link.is-focused:not(:active) {
        box-shadow: 0 0 0 0.125em rgba(50, 115, 220, 0.25); }
    .button.is-link:active, .button.is-link.is-active {
      background-color: #2366d1;
      border-color: transparent;
      color: #fff; }
    .button.is-link[disabled] {
      background-color: #3273dc;
      border-color: transparent;
      box-shadow: none; }
    .button.is-link.is-inverted {
      background-color: #fff;
      color: #3273dc; }
      .button.is-link.is-inverted:hover {
        background-color: #f2f2f2; }
      .button.is-link.is-inverted[disabled] {
        background-color: #fff;
        border-color: transparent;
        box-shadow: none;
        color: #3273dc; }
    .button.is-link.is-loading:after {
      border-color: transparent transparent #fff #fff !important; }
    .button.is-link.is-outlined {
      background-color: transparent;
      border-color: #3273dc;
      color: #3273dc; }
      .button.is-link.is-outlined:hover, .button.is-link.is-outlined:focus {
        background-color: #3273dc;
        border-color: #3273dc;
        color: #fff; }
      .button.is-link.is-outlined.is-loading:after {
        border-color: transparent transparent #3273dc #3273dc !important; }
      .button.is-link.is-outlined[disabled] {
        background-color: transparent;
        border-color: #3273dc;
        box-shadow: none;
        color: #3273dc; }
    .button.is-link.is-inverted.is-outlined {
      background-color: transparent;
      border-color: #fff;
      color: #fff; }
      .button.is-link.is-inverted.is-outlined:hover, .button.is-link.is-inverted.is-outlined:focus {
        background-color: #fff;
        color: #3273dc; }
      .button.is-link.is-inverted.is-outlined[disabled] {
        background-color: transparent;
        border-color: #fff;
        box-shadow: none;
        color: #fff; }
  .button.is-info {
    background-color: #209cee;
    border-color: transparent;
    color: #fff; }
    .button.is-info:hover, .button.is-info.is-hovered {
      background-color: #1496ed;
      border-color: transparent;
      color: #fff; }
    .button.is-info:focus, .button.is-info.is-focused {
      border-color: transparent;
      color: #fff; }
      .button.is-info:focus:not(:active), .button.is-info.is-focused:not(:active) {
        box-shadow: 0 0 0 0.125em rgba(32, 156, 238, 0.25); }
    .button.is-info:active, .button.is-info.is-active {
      background-color: #118fe4;
      border-color: transparent;
      color: #fff; }
    .button.is-info[disabled] {
      background-color: #209cee;
      border-color: transparent;
      box-shadow: none; }
    .button.is-info.is-inverted {
      background-color: #fff;
      color: #209cee; }
      .button.is-info.is-inverted:hover {
        background-color: #f2f2f2; }
      .button.is-info.is-inverted[disabled] {
        background-color: #fff;
        border-color: transparent;
        box-shadow: none;
        color: #209cee; }
    .button.is-info.is-loading:after {
      border-color: transparent transparent #fff #fff !important; }
    .button.is-info.is-outlined {
      background-color: transparent;
      border-color: #209cee;
      color: #209cee; }
      .button.is-info.is-outlined:hover, .button.is-info.is-outlined:focus {
        background-color: #209cee;
        border-color: #209cee;
        color: #fff; }
      .button.is-info.is-outlined.is-loading:after {
        border-color: transparent transparent #209cee #209cee !important; }
      .button.is-info.is-outlined[disabled] {
        background-color: transparent;
        border-color: #209cee;
        box-shadow: none;
        color: #209cee; }
    .button.is-info.is-inverted.is-outlined {
      background-color: transparent;
      border-color: #fff;
      color: #fff; }
      .button.is-info.is-inverted.is-outlined:hover, .button.is-info.is-inverted.is-outlined:focus {
        background-color: #fff;
        color: #209cee; }
      .button.is-info.is-inverted.is-outlined[disabled] {
        background-color: transparent;
        border-color: #fff;
        box-shadow: none;
        color: #fff; }
  .button.is-success {
    background-color: #23d160;
    border-color: transparent;
    color: #fff; }
    .button.is-success:hover, .button.is-success.is-hovered {
      background-color: #22c65b;
      border-color: transparent;
      color: #fff; }
    .button.is-success:focus, .button.is-success.is-focused {
      border-color: transparent;
      color: #fff; }
      .button.is-success:focus:not(:active), .button.is-success.is-focused:not(:active) {
        box-shadow: 0 0 0 0.125em rgba(35, 209, 96, 0.25); }
    .button.is-success:active, .button.is-success.is-active {
      background-color: #20bc56;
      border-color: transparent;
      color: #fff; }
    .button.is-success[disabled] {
      background-color: #23d160;
      border-color: transparent;
      box-shadow: none; }
    .button.is-success.is-inverted {
      background-color: #fff;
      color: #23d160; }
      .button.is-success.is-inverted:hover {
        background-color: #f2f2f2; }
      .button.is-success.is-inverted[disabled] {
        background-color: #fff;
        border-color: transparent;
        box-shadow: none;
        color: #23d160; }
    .button.is-success.is-loading:after {
      border-color: transparent transparent #fff #fff !important; }
    .button.is-success.is-outlined {
      background-color: transparent;
      border-color: #23d160;
      color: #23d160; }
      .button.is-success.is-outlined:hover, .button.is-success.is-outlined:focus {
        background-color: #23d160;
        border-color: #23d160;
        color: #fff; }
      .button.is-success.is-outlined.is-loading:after {
        border-color: transparent transparent #23d160 #23d160 !important; }
      .button.is-success.is-outlined[disabled] {
        background-color: transparent;
        border-color: #23d160;
        box-shadow: none;
        color: #23d160; }
    .button.is-success.is-inverted.is-outlined {
      background-color: transparent;
      border-color: #fff;
      color: #fff; }
      .button.is-success.is-inverted.is-outlined:hover, .button.is-success.is-inverted.is-outlined:focus {
        background-color: #fff;
        color: #23d160; }
      .button.is-success.is-inverted.is-outlined[disabled] {
        background-color: transparent;
        border-color: #fff;
        box-shadow: none;
        color: #fff; }
  .button.is-warning {
    background-color: #ffdd57;
    border-color: transparent;
    color: rgba(0, 0, 0, 0.7); }
    .button.is-warning:hover, .button.is-warning.is-hovered {
      background-color: #ffdb4a;
      border-color: transparent;
      color: rgba(0, 0, 0, 0.7); }
    .button.is-warning:focus, .button.is-warning.is-focused {
      border-color: transparent;
      color: rgba(0, 0, 0, 0.7); }
      .button.is-warning:focus:not(:active), .button.is-warning.is-focused:not(:active) {
        box-shadow: 0 0 0 0.125em rgba(255, 221, 87, 0.25); }
    .button.is-warning:active, .button.is-warning.is-active {
      background-color: #ffd83d;
      border-color: transparent;
      color: rgba(0, 0, 0, 0.7); }
    .button.is-warning[disabled] {
      background-color: #ffdd57;
      border-color: transparent;
      box-shadow: none; }
    .button.is-warning.is-inverted {
      background-color: rgba(0, 0, 0, 0.7);
      color: #ffdd57; }
      .button.is-warning.is-inverted:hover {
        background-color: rgba(0, 0, 0, 0.7); }
      .button.is-warning.is-inverted[disabled] {
        background-color: rgba(0, 0, 0, 0.7);
        border-color: transparent;
        box-shadow: none;
        color: #ffdd57; }
    .button.is-warning.is-loading:after {
      border-color: transparent transparent rgba(0, 0, 0, 0.7) rgba(0, 0, 0, 0.7) !important; }
    .button.is-warning.is-outlined {
      background-color: transparent;
      border-color: #ffdd57;
      color: #ffdd57; }
      .button.is-warning.is-outlined:hover, .button.is-warning.is-outlined:focus {
        background-color: #ffdd57;
        border-color: #ffdd57;
        color: rgba(0, 0, 0, 0.7); }
      .button.is-warning.is-outlined.is-loading:after {
        border-color: transparent transparent #ffdd57 #ffdd57 !important; }
      .button.is-warning.is-outlined[disabled] {
        background-color: transparent;
        border-color: #ffdd57;
        box-shadow: none;
        color: #ffdd57; }
    .button.is-warning.is-inverted.is-outlined {
      background-color: transparent;
      border-color: rgba(0, 0, 0, 0.7);
      color: rgba(0, 0, 0, 0.7); }
      .button.is-warning.is-inverted.is-outlined:hover, .button.is-warning.is-inverted.is-outlined:focus {
        background-color: rgba(0, 0, 0, 0.7);
        color: #ffdd57; }
      .button.is-warning.is-inverted.is-outlined[disabled] {
        background-color: transparent;
        border-color: rgba(0, 0, 0, 0.7);
        box-shadow: none;
        color: rgba(0, 0, 0, 0.7); }
  .button.is-danger {
    background-color: #ff3860;
    border-color: transparent;
    color: #fff; }
    .button.is-danger:hover, .button.is-danger.is-hovered {
      background-color: #ff2b56;
      border-color: transparent;
      color: #fff; }
    .button.is-danger:focus, .button.is-danger.is-focused {
      border-color: transparent;
      color: #fff; }
      .button.is-danger:focus:not(:active), .button.is-danger.is-focused:not(:active) {
        box-shadow: 0 0 0 0.125em rgba(255, 56, 96, 0.25); }
    .button.is-danger:active, .button.is-danger.is-active {
      background-color: #ff1f4b;
      border-color: transparent;
      color: #fff; }
    .button.is-danger[disabled] {
      background-color: #ff3860;
      border-color: transparent;
      box-shadow: none; }
    .button.is-danger.is-inverted {
      background-color: #fff;
      color: #ff3860; }
      .button.is-danger.is-inverted:hover {
        background-color: #f2f2f2; }
      .button.is-danger.is-inverted[disabled] {
        background-color: #fff;
        border-color: transparent;
        box-shadow: none;
        color: #ff3860; }
    .button.is-danger.is-loading:after {
      border-color: transparent transparent #fff #fff !important; }
    .button.is-danger.is-outlined {
      background-color: transparent;
      border-color: #ff3860;
      color: #ff3860; }
      .button.is-danger.is-outlined:hover, .button.is-danger.is-outlined:focus {
        background-color: #ff3860;
        border-color: #ff3860;
        color: #fff; }
      .button.is-danger.is-outlined.is-loading:after {
        border-color: transparent transparent #ff3860 #ff3860 !important; }
      .button.is-danger.is-outlined[disabled] {
        background-color: transparent;
        border-color: #ff3860;
        box-shadow: none;
        color: #ff3860; }
    .button.is-danger.is-inverted.is-outlined {
      background-color: transparent;
      border-color: #fff;
      color: #fff; }
      .button.is-danger.is-inverted.is-outlined:hover, .button.is-danger.is-inverted.is-outlined:focus {
        background-color: #fff;
        color: #ff3860; }
      .button.is-danger.is-inverted.is-outlined[disabled] {
        background-color: transparent;
        border-color: #fff;
        box-shadow: none;
        color: #fff; }
  .button.is-eben {
    background-color: #f85800;
    border-color: transparent;
    color: #fff; }
    .button.is-eben:hover, .button.is-eben.is-hovered {
      background-color: #eb5300;
      border-color: transparent;
      color: #fff; }
    .button.is-eben:focus, .button.is-eben.is-focused {
      border-color: transparent;
      color: #fff; }
      .button.is-eben:focus:not(:active), .button.is-eben.is-focused:not(:active) {
        box-shadow: 0 0 0 0.125em rgba(248, 88, 0, 0.25); }
    .button.is-eben:active, .button.is-eben.is-active {
      background-color: #df4f00;
      border-color: transparent;
      color: #fff; }
    .button.is-eben[disabled] {
      background-color: #f85800;
      border-color: transparent;
      box-shadow: none; }
    .button.is-eben.is-inverted {
      background-color: #fff;
      color: #f85800; }
      .button.is-eben.is-inverted:hover {
        background-color: #f2f2f2; }
      .button.is-eben.is-inverted[disabled] {
        background-color: #fff;
        border-color: transparent;
        box-shadow: none;
        color: #f85800; }
    .button.is-eben.is-loading:after {
      border-color: transparent transparent #fff #fff !important; }
    .button.is-eben.is-outlined {
      background-color: transparent;
      border-color: #f85800;
      color: #f85800; }
      .button.is-eben.is-outlined:hover, .button.is-eben.is-outlined:focus {
        background-color: #f85800;
        border-color: #f85800;
        color: #fff; }
      .button.is-eben.is-outlined.is-loading:after {
        border-color: transparent transparent #f85800 #f85800 !important; }
      .button.is-eben.is-outlined[disabled] {
        background-color: transparent;
        border-color: #f85800;
        box-shadow: none;
        color: #f85800; }
    .button.is-eben.is-inverted.is-outlined {
      background-color: transparent;
      border-color: #fff;
      color: #fff; }
      .button.is-eben.is-inverted.is-outlined:hover, .button.is-eben.is-inverted.is-outlined:focus {
        background-color: #fff;
        color: #f85800; }
      .button.is-eben.is-inverted.is-outlined[disabled] {
        background-color: transparent;
        border-color: #fff;
        box-shadow: none;
        color: #fff; }
  .button.is-eben-blue {
    background-color: #4bb3e6;
    border-color: transparent;
    color: #fff; }
    .button.is-eben-blue:hover, .button.is-eben-blue.is-hovered {
      background-color: #40aee4;
      border-color: transparent;
      color: #fff; }
    .button.is-eben-blue:focus, .button.is-eben-blue.is-focused {
      border-color: transparent;
      color: #fff; }
      .button.is-eben-blue:focus:not(:active), .button.is-eben-blue.is-focused:not(:active) {
        box-shadow: 0 0 0 0.125em rgba(75, 179, 230, 0.25); }
    .button.is-eben-blue:active, .button.is-eben-blue.is-active {
      background-color: #35aae3;
      border-color: transparent;
      color: #fff; }
    .button.is-eben-blue[disabled] {
      background-color: #4bb3e6;
      border-color: transparent;
      box-shadow: none; }
    .button.is-eben-blue.is-inverted {
      background-color: #fff;
      color: #4bb3e6; }
      .button.is-eben-blue.is-inverted:hover {
        background-color: #f2f2f2; }
      .button.is-eben-blue.is-inverted[disabled] {
        background-color: #fff;
        border-color: transparent;
        box-shadow: none;
        color: #4bb3e6; }
    .button.is-eben-blue.is-loading:after {
      border-color: transparent transparent #fff #fff !important; }
    .button.is-eben-blue.is-outlined {
      background-color: transparent;
      border-color: #4bb3e6;
      color: #4bb3e6; }
      .button.is-eben-blue.is-outlined:hover, .button.is-eben-blue.is-outlined:focus {
        background-color: #4bb3e6;
        border-color: #4bb3e6;
        color: #fff; }
      .button.is-eben-blue.is-outlined.is-loading:after {
        border-color: transparent transparent #4bb3e6 #4bb3e6 !important; }
      .button.is-eben-blue.is-outlined[disabled] {
        background-color: transparent;
        border-color: #4bb3e6;
        box-shadow: none;
        color: #4bb3e6; }
    .button.is-eben-blue.is-inverted.is-outlined {
      background-color: transparent;
      border-color: #fff;
      color: #fff; }
      .button.is-eben-blue.is-inverted.is-outlined:hover, .button.is-eben-blue.is-inverted.is-outlined:focus {
        background-color: #fff;
        color: #4bb3e6; }
      .button.is-eben-blue.is-inverted.is-outlined[disabled] {
        background-color: transparent;
        border-color: #fff;
        box-shadow: none;
        color: #fff; }
  .button.is-eben-bottledgreen {
    background-color: #c8e2d5;
    border-color: transparent;
    color: rgba(0, 0, 0, 0.7); }
    .button.is-eben-bottledgreen:hover, .button.is-eben-bottledgreen.is-hovered {
      background-color: #c0decf;
      border-color: transparent;
      color: rgba(0, 0, 0, 0.7); }
    .button.is-eben-bottledgreen:focus, .button.is-eben-bottledgreen.is-focused {
      border-color: transparent;
      color: rgba(0, 0, 0, 0.7); }
      .button.is-eben-bottledgreen:focus:not(:active), .button.is-eben-bottledgreen.is-focused:not(:active) {
        box-shadow: 0 0 0 0.125em rgba(200, 226, 213, 0.25); }
    .button.is-eben-bottledgreen:active, .button.is-eben-bottledgreen.is-active {
      background-color: #b7d9c8;
      border-color: transparent;
      color: rgba(0, 0, 0, 0.7); }
    .button.is-eben-bottledgreen[disabled] {
      background-color: #c8e2d5;
      border-color: transparent;
      box-shadow: none; }
    .button.is-eben-bottledgreen.is-inverted {
      background-color: rgba(0, 0, 0, 0.7);
      color: #c8e2d5; }
      .button.is-eben-bottledgreen.is-inverted:hover {
        background-color: rgba(0, 0, 0, 0.7); }
      .button.is-eben-bottledgreen.is-inverted[disabled] {
        background-color: rgba(0, 0, 0, 0.7);
        border-color: transparent;
        box-shadow: none;
        color: #c8e2d5; }
    .button.is-eben-bottledgreen.is-loading:after {
      border-color: transparent transparent rgba(0, 0, 0, 0.7) rgba(0, 0, 0, 0.7) !important; }
    .button.is-eben-bottledgreen.is-outlined {
      background-color: transparent;
      border-color: #c8e2d5;
      color: #c8e2d5; }
      .button.is-eben-bottledgreen.is-outlined:hover, .button.is-eben-bottledgreen.is-outlined:focus {
        background-color: #c8e2d5;
        border-color: #c8e2d5;
        color: rgba(0, 0, 0, 0.7); }
      .button.is-eben-bottledgreen.is-outlined.is-loading:after {
        border-color: transparent transparent #c8e2d5 #c8e2d5 !important; }
      .button.is-eben-bottledgreen.is-outlined[disabled] {
        background-color: transparent;
        border-color: #c8e2d5;
        box-shadow: none;
        color: #c8e2d5; }
    .button.is-eben-bottledgreen.is-inverted.is-outlined {
      background-color: transparent;
      border-color: rgba(0, 0, 0, 0.7);
      color: rgba(0, 0, 0, 0.7); }
      .button.is-eben-bottledgreen.is-inverted.is-outlined:hover, .button.is-eben-bottledgreen.is-inverted.is-outlined:focus {
        background-color: rgba(0, 0, 0, 0.7);
        color: #c8e2d5; }
      .button.is-eben-bottledgreen.is-inverted.is-outlined[disabled] {
        background-color: transparent;
        border-color: rgba(0, 0, 0, 0.7);
        box-shadow: none;
        color: rgba(0, 0, 0, 0.7); }
  .button.is-small {
    border-radius: 2px;
    font-size: 0.75rem; }
  .button.is-medium {
    font-size: 1.25rem; }
  .button.is-large {
    font-size: 1.5rem; }
  .button[disabled] {
    background-color: white;
    border-color: #dbdbdb;
    box-shadow: none;
    opacity: 0.5; }
  .button.is-fullwidth {
    display: flex;
    width: 100%; }
  .button.is-loading {
    color: transparent !important;
    pointer-events: none; }
    .button.is-loading:after {
      animation: spinAround 500ms infinite linear;
      border: 2px solid #dbdbdb;
      border-radius: 290486px;
      border-right-color: transparent;
      border-top-color: transparent;
      content: "";
      display: block;
      height: 1em;
      position: relative;
      width: 1em;
      position: absolute;
      left: calc(50% - (1em / 2));
      top: calc(50% - (1em / 2));
      position: absolute !important; }
  .button.is-static {
    background-color: whitesmoke;
    border-color: #dbdbdb;
    color: #7a7a7a;
    box-shadow: none;
    pointer-events: none; }
  .button.is-rounded {
    border-radius: 290486px;
    padding-left: 1em;
    padding-right: 1em; }

.buttons {
  align-items: center;
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start; }
  .buttons .button {
    margin-bottom: 0.5rem; }
    .buttons .button:not(:last-child) {
      margin-right: 0.5rem; }
  .buttons:last-child {
    margin-bottom: -0.5rem; }
  .buttons:not(:last-child) {
    margin-bottom: 1rem; }
  .buttons.has-addons .button:not(:first-child) {
    border-bottom-left-radius: 0;
    border-top-left-radius: 0; }
  .buttons.has-addons .button:not(:last-child) {
    border-bottom-right-radius: 0;
    border-top-right-radius: 0;
    margin-right: -1px; }
  .buttons.has-addons .button:last-child {
    margin-right: 0; }
  .buttons.has-addons .button:hover, .buttons.has-addons .button.is-hovered {
    z-index: 2; }
  .buttons.has-addons .button:focus, .buttons.has-addons .button.is-focused, .buttons.has-addons .button:active, .buttons.has-addons .button.is-active, .buttons.has-addons .button.is-selected {
    z-index: 3; }
    .buttons.has-addons .button:focus:hover, .buttons.has-addons .button.is-focused:hover, .buttons.has-addons .button:active:hover, .buttons.has-addons .button.is-active:hover, .buttons.has-addons .button.is-selected:hover {
      z-index: 4; }
  .buttons.is-centered {
    justify-content: center; }
  .buttons.is-right {
    justify-content: flex-end; }

.container {
  margin: 0 auto;
  position: relative; }
  @media screen and (min-width: 1024px) {
    .container {
      max-width: 960px;
      width: 960px; }
      .container.is-fluid {
        margin-left: 32px;
        margin-right: 32px;
        max-width: none;
        width: auto; } }
  @media screen and (max-width: 1215px) {
    .container.is-widescreen {
      max-width: 1152px;
      width: auto; } }
  @media screen and (max-width: 1407px) {
    .container.is-fullhd {
      max-width: 1344px;
      width: auto; } }
  @media screen and (min-width: 1216px) {
    .container {
      max-width: 1152px;
      width: 1152px; } }
  @media screen and (min-width: 1408px) {
    .container {
      max-width: 1344px;
      width: 1344px; } }

.content:not(:last-child) {
  margin-bottom: 1.5rem; }
.content li + li {
  margin-top: 0.25em; }
.content p:not(:last-child),
.content dl:not(:last-child),
.content ol:not(:last-child),
.content ul:not(:last-child),
.content blockquote:not(:last-child),
.content pre:not(:last-child),
.content table:not(:last-child) {
  margin-bottom: 1em; }
.content h1,
.content h2,
.content h3,
.content h4,
.content h5,
.content h6 {
  color: #363636;
  font-weight: 400;
  line-height: 1.125; }
.content h1 {
  font-size: 2em;
  margin-bottom: 0.5em; }
  .content h1:not(:first-child) {
    margin-top: 1em; }
.content h2 {
  font-size: 1.75em;
  margin-bottom: 0.5714em; }
  .content h2:not(:first-child) {
    margin-top: 1.1428em; }
.content h3 {
  font-size: 1.5em;
  margin-bottom: 0.6666em; }
  .content h3:not(:first-child) {
    margin-top: 1.3333em; }
.content h4 {
  font-size: 1.25em;
  margin-bottom: 0.8em; }
.content h5 {
  font-size: 1.125em;
  margin-bottom: 0.8888em; }
.content h6 {
  font-size: 1em;
  margin-bottom: 1em; }
.content blockquote {
  background-color: whitesmoke;
  border-left: 5px solid #dbdbdb;
  padding: 1.25em 1.5em; }
.content ol {
  list-style: decimal outside;
  margin-left: 2em;
  margin-top: 1em; }
.content ul {
  list-style: disc outside;
  margin-left: 2em;
  margin-top: 1em; }
  .content ul ul {
    list-style-type: circle;
    margin-top: 0.5em; }
    .content ul ul ul {
      list-style-type: square; }
.content dd {
  margin-left: 2em; }
.content figure {
  margin-left: 2em;
  margin-right: 2em;
  text-align: center; }
  .content figure:not(:first-child) {
    margin-top: 2em; }
  .content figure:not(:last-child) {
    margin-bottom: 2em; }
  .content figure img {
    display: inline-block; }
  .content figure figcaption {
    font-style: italic; }
.content pre {
  -webkit-overflow-scrolling: touch;
  overflow-x: auto;
  padding: 1.25em 1.5em;
  white-space: pre;
  word-wrap: normal; }
.content sup,
.content sub {
  font-size: 75%; }
.content table {
  width: 100%; }
  .content table td,
  .content table th {
    border: 1px solid #dbdbdb;
    border-width: 0 0 1px;
    padding: 0.5em 0.75em;
    vertical-align: top; }
  .content table th {
    color: #363636;
    text-align: left; }
  .content table tr:hover {
    background-color: whitesmoke; }
  .content table thead td,
  .content table thead th {
    border-width: 0 0 2px;
    color: #363636; }
  .content table tfoot td,
  .content table tfoot th {
    border-width: 2px 0 0;
    color: #363636; }
  .content table tbody tr:last-child td,
  .content table tbody tr:last-child th {
    border-bottom-width: 0; }
.content.is-small {
  font-size: 0.75rem; }
.content.is-medium {
  font-size: 1.25rem; }
.content.is-large {
  font-size: 1.5rem; }

.input,
.textarea {
  -moz-appearance: none;
  -webkit-appearance: none;
  align-items: center;
  border: 1px solid transparent;
  border-radius: 3px;
  box-shadow: none;
  display: inline-flex;
  font-size: 1rem;
  height: 2.25em;
  justify-content: flex-start;
  line-height: 1.5;
  padding-bottom: calc(0.375em - 1px);
  padding-left: calc(0.625em - 1px);
  padding-right: calc(0.625em - 1px);
  padding-top: calc(0.375em - 1px);
  position: relative;
  vertical-align: top;
  background-color: white;
  border-color: #dbdbdb;
  color: #363636;
  box-shadow: inset 0 1px 2px rgba(10, 10, 10, 0.1);
  max-width: 100%;
  width: 100%; }
  .input:focus, .input.is-focused, .input:active, .input.is-active,
  .textarea:focus,
  .textarea.is-focused,
  .textarea:active,
  .textarea.is-active {
    outline: none; }
  .input[disabled],
  .textarea[disabled] {
    cursor: not-allowed; }
  .input::-moz-placeholder,
  .textarea::-moz-placeholder {
    color: rgba(54, 54, 54, 0.3); }
  .input::-webkit-input-placeholder,
  .textarea::-webkit-input-placeholder {
    color: rgba(54, 54, 54, 0.3); }
  .input:-moz-placeholder,
  .textarea:-moz-placeholder {
    color: rgba(54, 54, 54, 0.3); }
  .input:-ms-input-placeholder,
  .textarea:-ms-input-placeholder {
    color: rgba(54, 54, 54, 0.3); }
  .input:hover, .input.is-hovered,
  .textarea:hover,
  .textarea.is-hovered {
    border-color: #b5b5b5; }
  .input:focus, .input.is-focused, .input:active, .input.is-active,
  .textarea:focus,
  .textarea.is-focused,
  .textarea:active,
  .textarea.is-active {
    border-color: #3273dc;
    box-shadow: 0 0 0 0.125em rgba(50, 115, 220, 0.25); }
  .input[disabled],
  .textarea[disabled] {
    background-color: whitesmoke;
    border-color: whitesmoke;
    box-shadow: none;
    color: #7a7a7a; }
    .input[disabled]::-moz-placeholder,
    .textarea[disabled]::-moz-placeholder {
      color: rgba(122, 122, 122, 0.3); }
    .input[disabled]::-webkit-input-placeholder,
    .textarea[disabled]::-webkit-input-placeholder {
      color: rgba(122, 122, 122, 0.3); }
    .input[disabled]:-moz-placeholder,
    .textarea[disabled]:-moz-placeholder {
      color: rgba(122, 122, 122, 0.3); }
    .input[disabled]:-ms-input-placeholder,
    .textarea[disabled]:-ms-input-placeholder {
      color: rgba(122, 122, 122, 0.3); }
  .input[readonly],
  .textarea[readonly] {
    box-shadow: none; }
  .input.is-white,
  .textarea.is-white {
    border-color: white; }
    .input.is-white:focus, .input.is-white.is-focused, .input.is-white:active, .input.is-white.is-active,
    .textarea.is-white:focus,
    .textarea.is-white.is-focused,
    .textarea.is-white:active,
    .textarea.is-white.is-active {
      box-shadow: 0 0 0 0.125em rgba(255, 255, 255, 0.25); }
  .input.is-black,
  .textarea.is-black {
    border-color: #0a0a0a; }
    .input.is-black:focus, .input.is-black.is-focused, .input.is-black:active, .input.is-black.is-active,
    .textarea.is-black:focus,
    .textarea.is-black.is-focused,
    .textarea.is-black:active,
    .textarea.is-black.is-active {
      box-shadow: 0 0 0 0.125em rgba(10, 10, 10, 0.25); }
  .input.is-light,
  .textarea.is-light {
    border-color: whitesmoke; }
    .input.is-light:focus, .input.is-light.is-focused, .input.is-light:active, .input.is-light.is-active,
    .textarea.is-light:focus,
    .textarea.is-light.is-focused,
    .textarea.is-light:active,
    .textarea.is-light.is-active {
      box-shadow: 0 0 0 0.125em rgba(245, 245, 245, 0.25); }
  .input.is-dark,
  .textarea.is-dark {
    border-color: #363636; }
    .input.is-dark:focus, .input.is-dark.is-focused, .input.is-dark:active, .input.is-dark.is-active,
    .textarea.is-dark:focus,
    .textarea.is-dark.is-focused,
    .textarea.is-dark:active,
    .textarea.is-dark.is-active {
      box-shadow: 0 0 0 0.125em rgba(54, 54, 54, 0.25); }
  .input.is-primary,
  .textarea.is-primary {
    border-color: #00d1b2; }
    .input.is-primary:focus, .input.is-primary.is-focused, .input.is-primary:active, .input.is-primary.is-active,
    .textarea.is-primary:focus,
    .textarea.is-primary.is-focused,
    .textarea.is-primary:active,
    .textarea.is-primary.is-active {
      box-shadow: 0 0 0 0.125em rgba(0, 209, 178, 0.25); }
  .input.is-link,
  .textarea.is-link {
    border-color: #3273dc; }
    .input.is-link:focus, .input.is-link.is-focused, .input.is-link:active, .input.is-link.is-active,
    .textarea.is-link:focus,
    .textarea.is-link.is-focused,
    .textarea.is-link:active,
    .textarea.is-link.is-active {
      box-shadow: 0 0 0 0.125em rgba(50, 115, 220, 0.25); }
  .input.is-info,
  .textarea.is-info {
    border-color: #209cee; }
    .input.is-info:focus, .input.is-info.is-focused, .input.is-info:active, .input.is-info.is-active,
    .textarea.is-info:focus,
    .textarea.is-info.is-focused,
    .textarea.is-info:active,
    .textarea.is-info.is-active {
      box-shadow: 0 0 0 0.125em rgba(32, 156, 238, 0.25); }
  .input.is-success,
  .textarea.is-success {
    border-color: #23d160; }
    .input.is-success:focus, .input.is-success.is-focused, .input.is-success:active, .input.is-success.is-active,
    .textarea.is-success:focus,
    .textarea.is-success.is-focused,
    .textarea.is-success:active,
    .textarea.is-success.is-active {
      box-shadow: 0 0 0 0.125em rgba(35, 209, 96, 0.25); }
  .input.is-warning,
  .textarea.is-warning {
    border-color: #ffdd57; }
    .input.is-warning:focus, .input.is-warning.is-focused, .input.is-warning:active, .input.is-warning.is-active,
    .textarea.is-warning:focus,
    .textarea.is-warning.is-focused,
    .textarea.is-warning:active,
    .textarea.is-warning.is-active {
      box-shadow: 0 0 0 0.125em rgba(255, 221, 87, 0.25); }
  .input.is-danger,
  .textarea.is-danger {
    border-color: #ff3860; }
    .input.is-danger:focus, .input.is-danger.is-focused, .input.is-danger:active, .input.is-danger.is-active,
    .textarea.is-danger:focus,
    .textarea.is-danger.is-focused,
    .textarea.is-danger:active,
    .textarea.is-danger.is-active {
      box-shadow: 0 0 0 0.125em rgba(255, 56, 96, 0.25); }
  .input.is-eben,
  .textarea.is-eben {
    border-color: #f85800; }
    .input.is-eben:focus, .input.is-eben.is-focused, .input.is-eben:active, .input.is-eben.is-active,
    .textarea.is-eben:focus,
    .textarea.is-eben.is-focused,
    .textarea.is-eben:active,
    .textarea.is-eben.is-active {
      box-shadow: 0 0 0 0.125em rgba(248, 88, 0, 0.25); }
  .input.is-eben-blue,
  .textarea.is-eben-blue {
    border-color: #4bb3e6; }
    .input.is-eben-blue:focus, .input.is-eben-blue.is-focused, .input.is-eben-blue:active, .input.is-eben-blue.is-active,
    .textarea.is-eben-blue:focus,
    .textarea.is-eben-blue.is-focused,
    .textarea.is-eben-blue:active,
    .textarea.is-eben-blue.is-active {
      box-shadow: 0 0 0 0.125em rgba(75, 179, 230, 0.25); }
  .input.is-eben-bottledgreen,
  .textarea.is-eben-bottledgreen {
    border-color: #c8e2d5; }
    .input.is-eben-bottledgreen:focus, .input.is-eben-bottledgreen.is-focused, .input.is-eben-bottledgreen:active, .input.is-eben-bottledgreen.is-active,
    .textarea.is-eben-bottledgreen:focus,
    .textarea.is-eben-bottledgreen.is-focused,
    .textarea.is-eben-bottledgreen:active,
    .textarea.is-eben-bottledgreen.is-active {
      box-shadow: 0 0 0 0.125em rgba(200, 226, 213, 0.25); }
  .input.is-small,
  .textarea.is-small {
    border-radius: 2px;
    font-size: 0.75rem; }
  .input.is-medium,
  .textarea.is-medium {
    font-size: 1.25rem; }
  .input.is-large,
  .textarea.is-large {
    font-size: 1.5rem; }
  .input.is-fullwidth,
  .textarea.is-fullwidth {
    display: block;
    width: 100%; }
  .input.is-inline,
  .textarea.is-inline {
    display: inline;
    width: auto; }

.input.is-rounded {
  border-radius: 290486px;
  padding-left: 1em;
  padding-right: 1em; }
.input.is-static {
  background-color: transparent;
  border-color: transparent;
  box-shadow: none;
  padding-left: 0;
  padding-right: 0; }

.textarea {
  display: block;
  max-width: 100%;
  min-width: 100%;
  padding: 0.625em;
  resize: vertical; }
  .textarea:not([rows]) {
    max-height: 600px;
    min-height: 120px; }
  .textarea[rows] {
    height: unset; }
  .textarea.has-fixed-size {
    resize: none; }

.checkbox,
.radio {
  cursor: pointer;
  display: inline-block;
  line-height: 1.25;
  position: relative; }
  .checkbox input,
  .radio input {
    cursor: pointer; }
  .checkbox:hover,
  .radio:hover {
    color: #363636; }
  .checkbox[disabled],
  .radio[disabled] {
    color: #7a7a7a;
    cursor: not-allowed; }

.radio + .radio {
  margin-left: 0.5em; }

.select {
  display: inline-block;
  max-width: 100%;
  position: relative;
  vertical-align: top; }
  .select:not(.is-multiple) {
    height: 2.25em; }
    .select:not(.is-multiple)::after {
      border: 1px solid #3273dc;
      border-right: 0;
      border-top: 0;
      content: " ";
      display: block;
      height: 0.5em;
      pointer-events: none;
      position: absolute;
      transform: rotate(-45deg);
      transform-origin: center;
      width: 0.5em;
      margin-top: -0.375em;
      right: 1.125em;
      top: 50%;
      z-index: 4; }
  .select.is-rounded select {
    border-radius: 290486px;
    padding-left: 1em; }
  .select select {
    -moz-appearance: none;
    -webkit-appearance: none;
    align-items: center;
    border: 1px solid transparent;
    border-radius: 3px;
    box-shadow: none;
    display: inline-flex;
    font-size: 1rem;
    height: 2.25em;
    justify-content: flex-start;
    line-height: 1.5;
    padding-bottom: calc(0.375em - 1px);
    padding-left: calc(0.625em - 1px);
    padding-right: calc(0.625em - 1px);
    padding-top: calc(0.375em - 1px);
    position: relative;
    vertical-align: top;
    background-color: white;
    border-color: #dbdbdb;
    color: #363636;
    cursor: pointer;
    display: block;
    font-size: 1em;
    max-width: 100%;
    outline: none; }
    .select select:focus, .select select.is-focused, .select select:active, .select select.is-active {
      outline: none; }
    .select select[disabled] {
      cursor: not-allowed; }
    .select select::-moz-placeholder {
      color: rgba(54, 54, 54, 0.3); }
    .select select::-webkit-input-placeholder {
      color: rgba(54, 54, 54, 0.3); }
    .select select:-moz-placeholder {
      color: rgba(54, 54, 54, 0.3); }
    .select select:-ms-input-placeholder {
      color: rgba(54, 54, 54, 0.3); }
    .select select:hover, .select select.is-hovered {
      border-color: #b5b5b5; }
    .select select:focus, .select select.is-focused, .select select:active, .select select.is-active {
      border-color: #3273dc;
      box-shadow: 0 0 0 0.125em rgba(50, 115, 220, 0.25); }
    .select select[disabled] {
      background-color: whitesmoke;
      border-color: whitesmoke;
      box-shadow: none;
      color: #7a7a7a; }
      .select select[disabled]::-moz-placeholder {
        color: rgba(122, 122, 122, 0.3); }
      .select select[disabled]::-webkit-input-placeholder {
        color: rgba(122, 122, 122, 0.3); }
      .select select[disabled]:-moz-placeholder {
        color: rgba(122, 122, 122, 0.3); }
      .select select[disabled]:-ms-input-placeholder {
        color: rgba(122, 122, 122, 0.3); }
    .select select::-ms-expand {
      display: none; }
    .select select[disabled]:hover {
      border-color: whitesmoke; }
    .select select:not([multiple]) {
      padding-right: 2.5em; }
    .select select[multiple] {
      height: unset;
      padding: 0; }
      .select select[multiple] option {
        padding: 0.5em 1em; }
  .select:hover::after {
    border-color: #363636; }
  .select.is-white select {
    border-color: white; }
    .select.is-white select:focus, .select.is-white select.is-focused, .select.is-white select:active, .select.is-white select.is-active {
      box-shadow: 0 0 0 0.125em rgba(255, 255, 255, 0.25); }
  .select.is-black select {
    border-color: #0a0a0a; }
    .select.is-black select:focus, .select.is-black select.is-focused, .select.is-black select:active, .select.is-black select.is-active {
      box-shadow: 0 0 0 0.125em rgba(10, 10, 10, 0.25); }
  .select.is-light select {
    border-color: whitesmoke; }
    .select.is-light select:focus, .select.is-light select.is-focused, .select.is-light select:active, .select.is-light select.is-active {
      box-shadow: 0 0 0 0.125em rgba(245, 245, 245, 0.25); }
  .select.is-dark select {
    border-color: #363636; }
    .select.is-dark select:focus, .select.is-dark select.is-focused, .select.is-dark select:active, .select.is-dark select.is-active {
      box-shadow: 0 0 0 0.125em rgba(54, 54, 54, 0.25); }
  .select.is-primary select {
    border-color: #00d1b2; }
    .select.is-primary select:focus, .select.is-primary select.is-focused, .select.is-primary select:active, .select.is-primary select.is-active {
      box-shadow: 0 0 0 0.125em rgba(0, 209, 178, 0.25); }
  .select.is-link select {
    border-color: #3273dc; }
    .select.is-link select:focus, .select.is-link select.is-focused, .select.is-link select:active, .select.is-link select.is-active {
      box-shadow: 0 0 0 0.125em rgba(50, 115, 220, 0.25); }
  .select.is-info select {
    border-color: #209cee; }
    .select.is-info select:focus, .select.is-info select.is-focused, .select.is-info select:active, .select.is-info select.is-active {
      box-shadow: 0 0 0 0.125em rgba(32, 156, 238, 0.25); }
  .select.is-success select {
    border-color: #23d160; }
    .select.is-success select:focus, .select.is-success select.is-focused, .select.is-success select:active, .select.is-success select.is-active {
      box-shadow: 0 0 0 0.125em rgba(35, 209, 96, 0.25); }
  .select.is-warning select {
    border-color: #ffdd57; }
    .select.is-warning select:focus, .select.is-warning select.is-focused, .select.is-warning select:active, .select.is-warning select.is-active {
      box-shadow: 0 0 0 0.125em rgba(255, 221, 87, 0.25); }
  .select.is-danger select {
    border-color: #ff3860; }
    .select.is-danger select:focus, .select.is-danger select.is-focused, .select.is-danger select:active, .select.is-danger select.is-active {
      box-shadow: 0 0 0 0.125em rgba(255, 56, 96, 0.25); }
  .select.is-eben select {
    border-color: #f85800; }
    .select.is-eben select:focus, .select.is-eben select.is-focused, .select.is-eben select:active, .select.is-eben select.is-active {
      box-shadow: 0 0 0 0.125em rgba(248, 88, 0, 0.25); }
  .select.is-eben-blue select {
    border-color: #4bb3e6; }
    .select.is-eben-blue select:focus, .select.is-eben-blue select.is-focused, .select.is-eben-blue select:active, .select.is-eben-blue select.is-active {
      box-shadow: 0 0 0 0.125em rgba(75, 179, 230, 0.25); }
  .select.is-eben-bottledgreen select {
    border-color: #c8e2d5; }
    .select.is-eben-bottledgreen select:focus, .select.is-eben-bottledgreen select.is-focused, .select.is-eben-bottledgreen select:active, .select.is-eben-bottledgreen select.is-active {
      box-shadow: 0 0 0 0.125em rgba(200, 226, 213, 0.25); }
  .select.is-small {
    border-radius: 2px;
    font-size: 0.75rem; }
  .select.is-medium {
    font-size: 1.25rem; }
  .select.is-large {
    font-size: 1.5rem; }
  .select.is-disabled::after {
    border-color: #7a7a7a; }
  .select.is-fullwidth {
    width: 100%; }
    .select.is-fullwidth select {
      width: 100%; }
  .select.is-loading::after {
    animation: spinAround 500ms infinite linear;
    border: 2px solid #dbdbdb;
    border-radius: 290486px;
    border-right-color: transparent;
    border-top-color: transparent;
    content: "";
    display: block;
    height: 1em;
    position: relative;
    width: 1em;
    margin-top: 0;
    position: absolute;
    right: 0.625em;
    top: 0.625em;
    transform: none; }
  .select.is-loading.is-small:after {
    font-size: 0.75rem; }
  .select.is-loading.is-medium:after {
    font-size: 1.25rem; }
  .select.is-loading.is-large:after {
    font-size: 1.5rem; }

.file {
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  align-items: stretch;
  display: flex;
  justify-content: flex-start;
  position: relative; }
  .file.is-white .file-cta {
    background-color: white;
    border-color: transparent;
    color: #0a0a0a; }
  .file.is-white:hover .file-cta, .file.is-white.is-hovered .file-cta {
    background-color: #f9f9f9;
    border-color: transparent;
    color: #0a0a0a; }
  .file.is-white:focus .file-cta, .file.is-white.is-focused .file-cta {
    border-color: transparent;
    box-shadow: 0 0 0.5em rgba(255, 255, 255, 0.25);
    color: #0a0a0a; }
  .file.is-white:active .file-cta, .file.is-white.is-active .file-cta {
    background-color: #f2f2f2;
    border-color: transparent;
    color: #0a0a0a; }
  .file.is-black .file-cta {
    background-color: #0a0a0a;
    border-color: transparent;
    color: white; }
  .file.is-black:hover .file-cta, .file.is-black.is-hovered .file-cta {
    background-color: #040404;
    border-color: transparent;
    color: white; }
  .file.is-black:focus .file-cta, .file.is-black.is-focused .file-cta {
    border-color: transparent;
    box-shadow: 0 0 0.5em rgba(10, 10, 10, 0.25);
    color: white; }
  .file.is-black:active .file-cta, .file.is-black.is-active .file-cta {
    background-color: black;
    border-color: transparent;
    color: white; }
  .file.is-light .file-cta {
    background-color: whitesmoke;
    border-color: transparent;
    color: #363636; }
  .file.is-light:hover .file-cta, .file.is-light.is-hovered .file-cta {
    background-color: #eeeeee;
    border-color: transparent;
    color: #363636; }
  .file.is-light:focus .file-cta, .file.is-light.is-focused .file-cta {
    border-color: transparent;
    box-shadow: 0 0 0.5em rgba(245, 245, 245, 0.25);
    color: #363636; }
  .file.is-light:active .file-cta, .file.is-light.is-active .file-cta {
    background-color: #e8e8e8;
    border-color: transparent;
    color: #363636; }
  .file.is-dark .file-cta {
    background-color: #363636;
    border-color: transparent;
    color: whitesmoke; }
  .file.is-dark:hover .file-cta, .file.is-dark.is-hovered .file-cta {
    background-color: #2f2f2f;
    border-color: transparent;
    color: whitesmoke; }
  .file.is-dark:focus .file-cta, .file.is-dark.is-focused .file-cta {
    border-color: transparent;
    box-shadow: 0 0 0.5em rgba(54, 54, 54, 0.25);
    color: whitesmoke; }
  .file.is-dark:active .file-cta, .file.is-dark.is-active .file-cta {
    background-color: #292929;
    border-color: transparent;
    color: whitesmoke; }
  .file.is-primary .file-cta {
    background-color: #00d1b2;
    border-color: transparent;
    color: #fff; }
  .file.is-primary:hover .file-cta, .file.is-primary.is-hovered .file-cta {
    background-color: #00c4a7;
    border-color: transparent;
    color: #fff; }
  .file.is-primary:focus .file-cta, .file.is-primary.is-focused .file-cta {
    border-color: transparent;
    box-shadow: 0 0 0.5em rgba(0, 209, 178, 0.25);
    color: #fff; }
  .file.is-primary:active .file-cta, .file.is-primary.is-active .file-cta {
    background-color: #00b89c;
    border-color: transparent;
    color: #fff; }
  .file.is-link .file-cta {
    background-color: #3273dc;
    border-color: transparent;
    color: #fff; }
  .file.is-link:hover .file-cta, .file.is-link.is-hovered .file-cta {
    background-color: #276cda;
    border-color: transparent;
    color: #fff; }
  .file.is-link:focus .file-cta, .file.is-link.is-focused .file-cta {
    border-color: transparent;
    box-shadow: 0 0 0.5em rgba(50, 115, 220, 0.25);
    color: #fff; }
  .file.is-link:active .file-cta, .file.is-link.is-active .file-cta {
    background-color: #2366d1;
    border-color: transparent;
    color: #fff; }
  .file.is-info .file-cta {
    background-color: #209cee;
    border-color: transparent;
    color: #fff; }
  .file.is-info:hover .file-cta, .file.is-info.is-hovered .file-cta {
    background-color: #1496ed;
    border-color: transparent;
    color: #fff; }
  .file.is-info:focus .file-cta, .file.is-info.is-focused .file-cta {
    border-color: transparent;
    box-shadow: 0 0 0.5em rgba(32, 156, 238, 0.25);
    color: #fff; }
  .file.is-info:active .file-cta, .file.is-info.is-active .file-cta {
    background-color: #118fe4;
    border-color: transparent;
    color: #fff; }
  .file.is-success .file-cta {
    background-color: #23d160;
    border-color: transparent;
    color: #fff; }
  .file.is-success:hover .file-cta, .file.is-success.is-hovered .file-cta {
    background-color: #22c65b;
    border-color: transparent;
    color: #fff; }
  .file.is-success:focus .file-cta, .file.is-success.is-focused .file-cta {
    border-color: transparent;
    box-shadow: 0 0 0.5em rgba(35, 209, 96, 0.25);
    color: #fff; }
  .file.is-success:active .file-cta, .file.is-success.is-active .file-cta {
    background-color: #20bc56;
    border-color: transparent;
    color: #fff; }
  .file.is-warning .file-cta {
    background-color: #ffdd57;
    border-color: transparent;
    color: rgba(0, 0, 0, 0.7); }
  .file.is-warning:hover .file-cta, .file.is-warning.is-hovered .file-cta {
    background-color: #ffdb4a;
    border-color: transparent;
    color: rgba(0, 0, 0, 0.7); }
  .file.is-warning:focus .file-cta, .file.is-warning.is-focused .file-cta {
    border-color: transparent;
    box-shadow: 0 0 0.5em rgba(255, 221, 87, 0.25);
    color: rgba(0, 0, 0, 0.7); }
  .file.is-warning:active .file-cta, .file.is-warning.is-active .file-cta {
    background-color: #ffd83d;
    border-color: transparent;
    color: rgba(0, 0, 0, 0.7); }
  .file.is-danger .file-cta {
    background-color: #ff3860;
    border-color: transparent;
    color: #fff; }
  .file.is-danger:hover .file-cta, .file.is-danger.is-hovered .file-cta {
    background-color: #ff2b56;
    border-color: transparent;
    color: #fff; }
  .file.is-danger:focus .file-cta, .file.is-danger.is-focused .file-cta {
    border-color: transparent;
    box-shadow: 0 0 0.5em rgba(255, 56, 96, 0.25);
    color: #fff; }
  .file.is-danger:active .file-cta, .file.is-danger.is-active .file-cta {
    background-color: #ff1f4b;
    border-color: transparent;
    color: #fff; }
  .file.is-eben .file-cta {
    background-color: #f85800;
    border-color: transparent;
    color: #fff; }
  .file.is-eben:hover .file-cta, .file.is-eben.is-hovered .file-cta {
    background-color: #eb5300;
    border-color: transparent;
    color: #fff; }
  .file.is-eben:focus .file-cta, .file.is-eben.is-focused .file-cta {
    border-color: transparent;
    box-shadow: 0 0 0.5em rgba(248, 88, 0, 0.25);
    color: #fff; }
  .file.is-eben:active .file-cta, .file.is-eben.is-active .file-cta {
    background-color: #df4f00;
    border-color: transparent;
    color: #fff; }
  .file.is-eben-blue .file-cta {
    background-color: #4bb3e6;
    border-color: transparent;
    color: #fff; }
  .file.is-eben-blue:hover .file-cta, .file.is-eben-blue.is-hovered .file-cta {
    background-color: #40aee4;
    border-color: transparent;
    color: #fff; }
  .file.is-eben-blue:focus .file-cta, .file.is-eben-blue.is-focused .file-cta {
    border-color: transparent;
    box-shadow: 0 0 0.5em rgba(75, 179, 230, 0.25);
    color: #fff; }
  .file.is-eben-blue:active .file-cta, .file.is-eben-blue.is-active .file-cta {
    background-color: #35aae3;
    border-color: transparent;
    color: #fff; }
  .file.is-eben-bottledgreen .file-cta {
    background-color: #c8e2d5;
    border-color: transparent;
    color: rgba(0, 0, 0, 0.7); }
  .file.is-eben-bottledgreen:hover .file-cta, .file.is-eben-bottledgreen.is-hovered .file-cta {
    background-color: #c0decf;
    border-color: transparent;
    color: rgba(0, 0, 0, 0.7); }
  .file.is-eben-bottledgreen:focus .file-cta, .file.is-eben-bottledgreen.is-focused .file-cta {
    border-color: transparent;
    box-shadow: 0 0 0.5em rgba(200, 226, 213, 0.25);
    color: rgba(0, 0, 0, 0.7); }
  .file.is-eben-bottledgreen:active .file-cta, .file.is-eben-bottledgreen.is-active .file-cta {
    background-color: #b7d9c8;
    border-color: transparent;
    color: rgba(0, 0, 0, 0.7); }
  .file.is-small {
    font-size: 0.75rem; }
  .file.is-medium {
    font-size: 1.25rem; }
    .file.is-medium .file-icon .fa {
      font-size: 21px; }
  .file.is-large {
    font-size: 1.5rem; }
    .file.is-large .file-icon .fa {
      font-size: 28px; }
  .file.has-name .file-cta {
    border-bottom-right-radius: 0;
    border-top-right-radius: 0; }
  .file.has-name .file-name {
    border-bottom-left-radius: 0;
    border-top-left-radius: 0; }
  .file.has-name.is-empty .file-cta {
    border-radius: 3px; }
  .file.has-name.is-empty .file-name {
    display: none; }
  .file.is-boxed .file-label {
    flex-direction: column; }
  .file.is-boxed .file-cta {
    flex-direction: column;
    height: auto;
    padding: 1em 3em; }
  .file.is-boxed .file-name {
    border-width: 0 1px 1px; }
  .file.is-boxed .file-icon {
    height: 1.5em;
    width: 1.5em; }
    .file.is-boxed .file-icon .fa {
      font-size: 21px; }
  .file.is-boxed.is-small .file-icon .fa {
    font-size: 14px; }
  .file.is-boxed.is-medium .file-icon .fa {
    font-size: 28px; }
  .file.is-boxed.is-large .file-icon .fa {
    font-size: 35px; }
  .file.is-boxed.has-name .file-cta {
    border-radius: 3px 3px 0 0; }
  .file.is-boxed.has-name .file-name {
    border-radius: 0 0 3px 3px;
    border-width: 0 1px 1px; }
  .file.is-centered {
    justify-content: center; }
  .file.is-fullwidth .file-label {
    width: 100%; }
  .file.is-fullwidth .file-name {
    flex-grow: 1;
    max-width: none; }
  .file.is-right {
    justify-content: flex-end; }
    .file.is-right .file-cta {
      border-radius: 0 3px 3px 0; }
    .file.is-right .file-name {
      border-radius: 3px 0 0 3px;
      border-width: 1px 0 1px 1px;
      order: -1; }

.file-label {
  align-items: stretch;
  display: flex;
  cursor: pointer;
  justify-content: flex-start;
  overflow: hidden;
  position: relative; }
  .file-label:hover .file-cta {
    background-color: #eeeeee;
    color: #363636; }
  .file-label:hover .file-name {
    border-color: #d5d5d5; }
  .file-label:active .file-cta {
    background-color: #e8e8e8;
    color: #363636; }
  .file-label:active .file-name {
    border-color: #cfcfcf; }

.file-input {
  height: 0.01em;
  left: 0;
  outline: none;
  position: absolute;
  top: 0;
  width: 0.01em; }

.file-cta,
.file-name {
  -moz-appearance: none;
  -webkit-appearance: none;
  align-items: center;
  border: 1px solid transparent;
  border-radius: 3px;
  box-shadow: none;
  display: inline-flex;
  font-size: 1rem;
  height: 2.25em;
  justify-content: flex-start;
  line-height: 1.5;
  padding-bottom: calc(0.375em - 1px);
  padding-left: calc(0.625em - 1px);
  padding-right: calc(0.625em - 1px);
  padding-top: calc(0.375em - 1px);
  position: relative;
  vertical-align: top;
  border-color: #dbdbdb;
  border-radius: 3px;
  font-size: 1em;
  padding-left: 1em;
  padding-right: 1em;
  white-space: nowrap; }
  .file-cta:focus, .file-cta.is-focused, .file-cta:active, .file-cta.is-active,
  .file-name:focus,
  .file-name.is-focused,
  .file-name:active,
  .file-name.is-active {
    outline: none; }
  .file-cta[disabled],
  .file-name[disabled] {
    cursor: not-allowed; }

.file-cta {
  background-color: whitesmoke;
  color: #4a4a4a; }

.file-name {
  border-color: #dbdbdb;
  border-style: solid;
  border-width: 1px 1px 1px 0;
  display: block;
  max-width: 16em;
  overflow: hidden;
  text-align: left;
  text-overflow: ellipsis; }

.file-icon {
  align-items: center;
  display: flex;
  height: 1em;
  justify-content: center;
  margin-right: 0.5em;
  width: 1em; }
  .file-icon .fa {
    font-size: 14px; }

.label {
  color: #363636;
  display: block;
  font-size: 1rem;
  font-weight: 700; }
  .label:not(:last-child) {
    margin-bottom: 0.5em; }
  .label.is-small {
    font-size: 0.75rem; }
  .label.is-medium {
    font-size: 1.25rem; }
  .label.is-large {
    font-size: 1.5rem; }

.help {
  display: block;
  font-size: 0.75rem;
  margin-top: 0.25rem; }
  .help.is-white {
    color: white; }
  .help.is-black {
    color: #0a0a0a; }
  .help.is-light {
    color: whitesmoke; }
  .help.is-dark {
    color: #363636; }
  .help.is-primary {
    color: #00d1b2; }
  .help.is-link {
    color: #3273dc; }
  .help.is-info {
    color: #209cee; }
  .help.is-success {
    color: #23d160; }
  .help.is-warning {
    color: #ffdd57; }
  .help.is-danger {
    color: #ff3860; }
  .help.is-eben {
    color: #f85800; }
  .help.is-eben-blue {
    color: #4bb3e6; }
  .help.is-eben-bottledgreen {
    color: #c8e2d5; }

.field:not(:last-child) {
  margin-bottom: 0.75rem; }
.field.has-addons {
  display: flex;
  justify-content: flex-start; }
  .field.has-addons .control:not(:last-child) {
    margin-right: -1px; }
  .field.has-addons .control:not(:first-child):not(:last-child) .button,
  .field.has-addons .control:not(:first-child):not(:last-child) .input,
  .field.has-addons .control:not(:first-child):not(:last-child) .select select {
    border-radius: 0; }
  .field.has-addons .control:first-child .button,
  .field.has-addons .control:first-child .input,
  .field.has-addons .control:first-child .select select {
    border-bottom-right-radius: 0;
    border-top-right-radius: 0; }
  .field.has-addons .control:last-child .button,
  .field.has-addons .control:last-child .input,
  .field.has-addons .control:last-child .select select {
    border-bottom-left-radius: 0;
    border-top-left-radius: 0; }
  .field.has-addons .control .button:hover, .field.has-addons .control .button.is-hovered,
  .field.has-addons .control .input:hover,
  .field.has-addons .control .input.is-hovered,
  .field.has-addons .control .select select:hover,
  .field.has-addons .control .select select.is-hovered {
    z-index: 2; }
  .field.has-addons .control .button:focus, .field.has-addons .control .button.is-focused, .field.has-addons .control .button:active, .field.has-addons .control .button.is-active,
  .field.has-addons .control .input:focus,
  .field.has-addons .control .input.is-focused,
  .field.has-addons .control .input:active,
  .field.has-addons .control .input.is-active,
  .field.has-addons .control .select select:focus,
  .field.has-addons .control .select select.is-focused,
  .field.has-addons .control .select select:active,
  .field.has-addons .control .select select.is-active {
    z-index: 3; }
    .field.has-addons .control .button:focus:hover, .field.has-addons .control .button.is-focused:hover, .field.has-addons .control .button:active:hover, .field.has-addons .control .button.is-active:hover,
    .field.has-addons .control .input:focus:hover,
    .field.has-addons .control .input.is-focused:hover,
    .field.has-addons .control .input:active:hover,
    .field.has-addons .control .input.is-active:hover,
    .field.has-addons .control .select select:focus:hover,
    .field.has-addons .control .select select.is-focused:hover,
    .field.has-addons .control .select select:active:hover,
    .field.has-addons .control .select select.is-active:hover {
      z-index: 4; }
  .field.has-addons .control.is-expanded {
    flex-grow: 1; }
  .field.has-addons.has-addons-centered {
    justify-content: center; }
  .field.has-addons.has-addons-right {
    justify-content: flex-end; }
  .field.has-addons.has-addons-fullwidth .control {
    flex-grow: 1;
    flex-shrink: 0; }
.field.is-grouped {
  display: flex;
  justify-content: flex-start; }
  .field.is-grouped > .control {
    flex-shrink: 0; }
    .field.is-grouped > .control:not(:last-child) {
      margin-bottom: 0;
      margin-right: 0.75rem; }
    .field.is-grouped > .control.is-expanded {
      flex-grow: 1;
      flex-shrink: 1; }
  .field.is-grouped.is-grouped-centered {
    justify-content: center; }
  .field.is-grouped.is-grouped-right {
    justify-content: flex-end; }
  .field.is-grouped.is-grouped-multiline {
    flex-wrap: wrap; }
    .field.is-grouped.is-grouped-multiline > .control:last-child, .field.is-grouped.is-grouped-multiline > .control:not(:last-child) {
      margin-bottom: 0.75rem; }
    .field.is-grouped.is-grouped-multiline:last-child {
      margin-bottom: -0.75rem; }
    .field.is-grouped.is-grouped-multiline:not(:last-child) {
      margin-bottom: 0; }
@media screen and (min-width: 769px), print {
  .field.is-horizontal {
    display: flex; } }

.field-label .label {
  font-size: inherit; }
@media screen and (max-width: 768px) {
  .field-label {
    margin-bottom: 0.5rem; } }
@media screen and (min-width: 769px), print {
  .field-label {
    flex-basis: 0;
    flex-grow: 1;
    flex-shrink: 0;
    margin-right: 1.5rem;
    text-align: right; }
    .field-label.is-small {
      font-size: 0.75rem;
      padding-top: 0.375em; }
    .field-label.is-normal {
      padding-top: 0.375em; }
    .field-label.is-medium {
      font-size: 1.25rem;
      padding-top: 0.375em; }
    .field-label.is-large {
      font-size: 1.5rem;
      padding-top: 0.375em; } }

.field-body .field .field {
  margin-bottom: 0; }
@media screen and (min-width: 769px), print {
  .field-body {
    display: flex;
    flex-basis: 0;
    flex-grow: 5;
    flex-shrink: 1; }
    .field-body .field {
      margin-bottom: 0; }
    .field-body > .field {
      flex-shrink: 1; }
      .field-body > .field:not(.is-narrow) {
        flex-grow: 1; }
      .field-body > .field:not(:last-child) {
        margin-right: 0.75rem; } }

.control {
  font-size: 1rem;
  position: relative;
  text-align: left; }
  .control.has-icon .icon {
    color: #dbdbdb;
    height: 2.25em;
    pointer-events: none;
    position: absolute;
    top: 0;
    width: 2.25em;
    z-index: 4; }
  .control.has-icon .input:focus + .icon {
    color: #7a7a7a; }
  .control.has-icon .input.is-small + .icon {
    font-size: 0.75rem; }
  .control.has-icon .input.is-medium + .icon {
    font-size: 1.25rem; }
  .control.has-icon .input.is-large + .icon {
    font-size: 1.5rem; }
  .control.has-icon:not(.has-icon-right) .icon {
    left: 0; }
  .control.has-icon:not(.has-icon-right) .input {
    padding-left: 2.25em; }
  .control.has-icon.has-icon-right .icon {
    right: 0; }
  .control.has-icon.has-icon-right .input {
    padding-right: 2.25em; }
  .control.has-icons-left .input:focus ~ .icon,
  .control.has-icons-left .select:focus ~ .icon, .control.has-icons-right .input:focus ~ .icon,
  .control.has-icons-right .select:focus ~ .icon {
    color: #7a7a7a; }
  .control.has-icons-left .input.is-small ~ .icon,
  .control.has-icons-left .select.is-small ~ .icon, .control.has-icons-right .input.is-small ~ .icon,
  .control.has-icons-right .select.is-small ~ .icon {
    font-size: 0.75rem; }
  .control.has-icons-left .input.is-medium ~ .icon,
  .control.has-icons-left .select.is-medium ~ .icon, .control.has-icons-right .input.is-medium ~ .icon,
  .control.has-icons-right .select.is-medium ~ .icon {
    font-size: 1.25rem; }
  .control.has-icons-left .input.is-large ~ .icon,
  .control.has-icons-left .select.is-large ~ .icon, .control.has-icons-right .input.is-large ~ .icon,
  .control.has-icons-right .select.is-large ~ .icon {
    font-size: 1.5rem; }
  .control.has-icons-left .icon, .control.has-icons-right .icon {
    color: #dbdbdb;
    height: 2.25em;
    pointer-events: none;
    position: absolute;
    top: 0;
    width: 2.25em;
    z-index: 4; }
  .control.has-icons-left .input,
  .control.has-icons-left .select select {
    padding-left: 2.25em; }
  .control.has-icons-left .icon.is-left {
    left: 0; }
  .control.has-icons-right .input,
  .control.has-icons-right .select select {
    padding-right: 2.25em; }
  .control.has-icons-right .icon.is-right {
    right: 0; }
  .control.is-loading::after {
    animation: spinAround 500ms infinite linear;
    border: 2px solid #dbdbdb;
    border-radius: 290486px;
    border-right-color: transparent;
    border-top-color: transparent;
    content: "";
    display: block;
    height: 1em;
    position: relative;
    width: 1em;
    position: absolute !important;
    right: 0.625em;
    top: 0.625em;
    z-index: 4; }
  .control.is-loading.is-small:after {
    font-size: 0.75rem; }
  .control.is-loading.is-medium:after {
    font-size: 1.25rem; }
  .control.is-loading.is-large:after {
    font-size: 1.5rem; }

.icon {
  align-items: center;
  display: inline-flex;
  justify-content: center;
  height: 1.5rem;
  width: 1.5rem; }
  .icon.is-small {
    height: 1rem;
    width: 1rem; }
  .icon.is-medium {
    height: 2rem;
    width: 2rem; }
  .icon.is-large {
    height: 3rem;
    width: 3rem; }

.image {
  display: block;
  position: relative; }
  .image img {
    display: block;
    height: auto;
    width: 100%; }
    .image img.is-rounded {
      border-radius: 290486px; }
  .image.is-square img, .image.is-1by1 img, .image.is-4by3 img, .image.is-3by2 img, .image.is-16by9 img, .image.is-2by1 img {
    bottom: 0;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    height: 100%;
    width: 100%; }
  .image.is-square, .image.is-1by1 {
    padding-top: 100%; }
  .image.is-4by3 {
    padding-top: 75%; }
  .image.is-3by2 {
    padding-top: 66.6666%; }
  .image.is-16by9 {
    padding-top: 56.25%; }
  .image.is-2by1 {
    padding-top: 50%; }
  .image.is-16x16 {
    height: 16px;
    width: 16px; }
  .image.is-24x24 {
    height: 24px;
    width: 24px; }
  .image.is-32x32 {
    height: 32px;
    width: 32px; }
  .image.is-48x48 {
    height: 48px;
    width: 48px; }
  .image.is-64x64 {
    height: 64px;
    width: 64px; }
  .image.is-96x96 {
    height: 96px;
    width: 96px; }
  .image.is-128x128 {
    height: 128px;
    width: 128px; }

.notification {
  background-color: whitesmoke;
  border-radius: 3px;
  padding: 1.25rem 2.5rem 1.25rem 1.5rem;
  position: relative; }
  .notification:not(:last-child) {
    margin-bottom: 1.5rem; }
  .notification a:not(.button) {
    color: currentColor;
    text-decoration: underline; }
  .notification strong {
    color: currentColor; }
  .notification code,
  .notification pre {
    background: white; }
  .notification pre code {
    background: transparent; }
  .notification > .delete {
    position: absolute;
    right: 0.5rem;
    top: 0.5rem; }
  .notification .title,
  .notification .subtitle,
  .notification .content {
    color: currentColor; }
  .notification.is-white {
    background-color: white;
    color: #0a0a0a; }
  .notification.is-black {
    background-color: #0a0a0a;
    color: white; }
  .notification.is-light {
    background-color: whitesmoke;
    color: #363636; }
  .notification.is-dark {
    background-color: #363636;
    color: whitesmoke; }
  .notification.is-primary {
    background-color: #00d1b2;
    color: #fff; }
  .notification.is-link {
    background-color: #3273dc;
    color: #fff; }
  .notification.is-info {
    background-color: #209cee;
    color: #fff; }
  .notification.is-success {
    background-color: #23d160;
    color: #fff; }
  .notification.is-warning {
    background-color: #ffdd57;
    color: rgba(0, 0, 0, 0.7); }
  .notification.is-danger {
    background-color: #ff3860;
    color: #fff; }
  .notification.is-eben {
    background-color: #f85800;
    color: #fff; }
  .notification.is-eben-blue {
    background-color: #4bb3e6;
    color: #fff; }
  .notification.is-eben-bottledgreen {
    background-color: #c8e2d5;
    color: rgba(0, 0, 0, 0.7); }

.progress {
  -moz-appearance: none;
  -webkit-appearance: none;
  border: none;
  border-radius: 290486px;
  display: block;
  height: 1rem;
  overflow: hidden;
  padding: 0;
  width: 100%; }
  .progress:not(:last-child) {
    margin-bottom: 1.5rem; }
  .progress::-webkit-progress-bar {
    background-color: #dbdbdb; }
  .progress::-webkit-progress-value {
    background-color: #4a4a4a; }
  .progress::-moz-progress-bar {
    background-color: #4a4a4a; }
  .progress::-ms-fill {
    background-color: #4a4a4a;
    border: none; }
  .progress.is-white::-webkit-progress-value {
    background-color: white; }
  .progress.is-white::-moz-progress-bar {
    background-color: white; }
  .progress.is-white::-ms-fill {
    background-color: white; }
  .progress.is-black::-webkit-progress-value {
    background-color: #0a0a0a; }
  .progress.is-black::-moz-progress-bar {
    background-color: #0a0a0a; }
  .progress.is-black::-ms-fill {
    background-color: #0a0a0a; }
  .progress.is-light::-webkit-progress-value {
    background-color: whitesmoke; }
  .progress.is-light::-moz-progress-bar {
    background-color: whitesmoke; }
  .progress.is-light::-ms-fill {
    background-color: whitesmoke; }
  .progress.is-dark::-webkit-progress-value {
    background-color: #363636; }
  .progress.is-dark::-moz-progress-bar {
    background-color: #363636; }
  .progress.is-dark::-ms-fill {
    background-color: #363636; }
  .progress.is-primary::-webkit-progress-value {
    background-color: #00d1b2; }
  .progress.is-primary::-moz-progress-bar {
    background-color: #00d1b2; }
  .progress.is-primary::-ms-fill {
    background-color: #00d1b2; }
  .progress.is-link::-webkit-progress-value {
    background-color: #3273dc; }
  .progress.is-link::-moz-progress-bar {
    background-color: #3273dc; }
  .progress.is-link::-ms-fill {
    background-color: #3273dc; }
  .progress.is-info::-webkit-progress-value {
    background-color: #209cee; }
  .progress.is-info::-moz-progress-bar {
    background-color: #209cee; }
  .progress.is-info::-ms-fill {
    background-color: #209cee; }
  .progress.is-success::-webkit-progress-value {
    background-color: #23d160; }
  .progress.is-success::-moz-progress-bar {
    background-color: #23d160; }
  .progress.is-success::-ms-fill {
    background-color: #23d160; }
  .progress.is-warning::-webkit-progress-value {
    background-color: #ffdd57; }
  .progress.is-warning::-moz-progress-bar {
    background-color: #ffdd57; }
  .progress.is-warning::-ms-fill {
    background-color: #ffdd57; }
  .progress.is-danger::-webkit-progress-value {
    background-color: #ff3860; }
  .progress.is-danger::-moz-progress-bar {
    background-color: #ff3860; }
  .progress.is-danger::-ms-fill {
    background-color: #ff3860; }
  .progress.is-eben::-webkit-progress-value {
    background-color: #f85800; }
  .progress.is-eben::-moz-progress-bar {
    background-color: #f85800; }
  .progress.is-eben::-ms-fill {
    background-color: #f85800; }
  .progress.is-eben-blue::-webkit-progress-value {
    background-color: #4bb3e6; }
  .progress.is-eben-blue::-moz-progress-bar {
    background-color: #4bb3e6; }
  .progress.is-eben-blue::-ms-fill {
    background-color: #4bb3e6; }
  .progress.is-eben-bottledgreen::-webkit-progress-value {
    background-color: #c8e2d5; }
  .progress.is-eben-bottledgreen::-moz-progress-bar {
    background-color: #c8e2d5; }
  .progress.is-eben-bottledgreen::-ms-fill {
    background-color: #c8e2d5; }
  .progress.is-small {
    height: 0.75rem; }
  .progress.is-medium {
    height: 1.25rem; }
  .progress.is-large {
    height: 1.5rem; }

.table {
  background-color: white;
  color: #363636;
  margin-bottom: 1.5rem; }
  .table td,
  .table th {
    border: 1px solid #dbdbdb;
    border-width: 0 0 1px;
    padding: 0.5em 0.75em;
    vertical-align: top; }
    .table td.is-white,
    .table th.is-white {
      background-color: white;
      border-color: white;
      color: #0a0a0a; }
    .table td.is-black,
    .table th.is-black {
      background-color: #0a0a0a;
      border-color: #0a0a0a;
      color: white; }
    .table td.is-light,
    .table th.is-light {
      background-color: whitesmoke;
      border-color: whitesmoke;
      color: #363636; }
    .table td.is-dark,
    .table th.is-dark {
      background-color: #363636;
      border-color: #363636;
      color: whitesmoke; }
    .table td.is-primary,
    .table th.is-primary {
      background-color: #00d1b2;
      border-color: #00d1b2;
      color: #fff; }
    .table td.is-link,
    .table th.is-link {
      background-color: #3273dc;
      border-color: #3273dc;
      color: #fff; }
    .table td.is-info,
    .table th.is-info {
      background-color: #209cee;
      border-color: #209cee;
      color: #fff; }
    .table td.is-success,
    .table th.is-success {
      background-color: #23d160;
      border-color: #23d160;
      color: #fff; }
    .table td.is-warning,
    .table th.is-warning {
      background-color: #ffdd57;
      border-color: #ffdd57;
      color: rgba(0, 0, 0, 0.7); }
    .table td.is-danger,
    .table th.is-danger {
      background-color: #ff3860;
      border-color: #ff3860;
      color: #fff; }
    .table td.is-eben,
    .table th.is-eben {
      background-color: #f85800;
      border-color: #f85800;
      color: #fff; }
    .table td.is-eben-blue,
    .table th.is-eben-blue {
      background-color: #4bb3e6;
      border-color: #4bb3e6;
      color: #fff; }
    .table td.is-eben-bottledgreen,
    .table th.is-eben-bottledgreen {
      background-color: #c8e2d5;
      border-color: #c8e2d5;
      color: rgba(0, 0, 0, 0.7); }
    .table td.is-narrow,
    .table th.is-narrow {
      white-space: nowrap;
      width: 1%; }
    .table td.is-selected,
    .table th.is-selected {
      background-color: #00d1b2;
      color: #fff; }
      .table td.is-selected a,
      .table td.is-selected strong,
      .table th.is-selected a,
      .table th.is-selected strong {
        color: currentColor; }
  .table th {
    color: #363636;
    text-align: left; }
  .table tr.is-selected {
    background-color: #00d1b2;
    color: #fff; }
    .table tr.is-selected a,
    .table tr.is-selected strong {
      color: currentColor; }
    .table tr.is-selected td,
    .table tr.is-selected th {
      border-color: #fff;
      color: currentColor; }
  .table thead td,
  .table thead th {
    border-width: 0 0 2px;
    color: #363636; }
  .table tfoot td,
  .table tfoot th {
    border-width: 2px 0 0;
    color: #363636; }
  .table tbody tr:last-child td,
  .table tbody tr:last-child th {
    border-bottom-width: 0; }
  .table.is-bordered td,
  .table.is-bordered th {
    border-width: 1px; }
  .table.is-bordered tr:last-child td,
  .table.is-bordered tr:last-child th {
    border-bottom-width: 1px; }
  .table.is-fullwidth {
    width: 100%; }
  .table.is-hoverable tbody tr:not(.is-selected):hover {
    background-color: #fafafa; }
  .table.is-hoverable.is-striped tbody tr:not(.is-selected):hover {
    background-color: whitesmoke; }
  .table.is-narrow td,
  .table.is-narrow th {
    padding: 0.25em 0.5em; }
  .table.is-striped tbody tr:not(.is-selected):nth-child(even) {
    background-color: #fafafa; }

.tags {
  align-items: center;
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start; }
  .tags .tag {
    margin-bottom: 0.5rem; }
    .tags .tag:not(:last-child) {
      margin-right: 0.5rem; }
  .tags:last-child {
    margin-bottom: -0.5rem; }
  .tags:not(:last-child) {
    margin-bottom: 1rem; }
  .tags.has-addons .tag {
    margin-right: 0; }
    .tags.has-addons .tag:not(:first-child) {
      border-bottom-left-radius: 0;
      border-top-left-radius: 0; }
    .tags.has-addons .tag:not(:last-child) {
      border-bottom-right-radius: 0;
      border-top-right-radius: 0; }
  .tags.is-centered {
    justify-content: center; }
    .tags.is-centered .tag {
      margin-right: 0.25rem;
      margin-left: 0.25rem; }
  .tags.is-right {
    justify-content: flex-end; }
    .tags.is-right .tag:not(:first-child) {
      margin-left: 0.5rem; }
    .tags.is-right .tag:not(:last-child) {
      margin-right: 0; }

.tag:not(body) {
  align-items: center;
  background-color: whitesmoke;
  border-radius: 3px;
  color: #4a4a4a;
  display: inline-flex;
  font-size: 0.75rem;
  height: 2em;
  justify-content: center;
  line-height: 1.5;
  padding-left: 0.75em;
  padding-right: 0.75em;
  white-space: nowrap; }
  .tag:not(body) .delete {
    margin-left: 0.25em;
    margin-right: -0.375em; }
  .tag:not(body).is-white {
    background-color: white;
    color: #0a0a0a; }
  .tag:not(body).is-black {
    background-color: #0a0a0a;
    color: white; }
  .tag:not(body).is-light {
    background-color: whitesmoke;
    color: #363636; }
  .tag:not(body).is-dark {
    background-color: #363636;
    color: whitesmoke; }
  .tag:not(body).is-primary {
    background-color: #00d1b2;
    color: #fff; }
  .tag:not(body).is-link {
    background-color: #3273dc;
    color: #fff; }
  .tag:not(body).is-info {
    background-color: #209cee;
    color: #fff; }
  .tag:not(body).is-success {
    background-color: #23d160;
    color: #fff; }
  .tag:not(body).is-warning {
    background-color: #ffdd57;
    color: rgba(0, 0, 0, 0.7); }
  .tag:not(body).is-danger {
    background-color: #ff3860;
    color: #fff; }
  .tag:not(body).is-eben {
    background-color: #f85800;
    color: #fff; }
  .tag:not(body).is-eben-blue {
    background-color: #4bb3e6;
    color: #fff; }
  .tag:not(body).is-eben-bottledgreen {
    background-color: #c8e2d5;
    color: rgba(0, 0, 0, 0.7); }
  .tag:not(body).is-medium {
    font-size: 1rem; }
  .tag:not(body).is-large {
    font-size: 1.25rem; }
  .tag:not(body) .icon:first-child:not(:last-child) {
    margin-left: -0.375em;
    margin-right: 0.1875em; }
  .tag:not(body) .icon:last-child:not(:first-child) {
    margin-left: 0.1875em;
    margin-right: -0.375em; }
  .tag:not(body) .icon:first-child:last-child {
    margin-left: -0.375em;
    margin-right: -0.375em; }
  .tag:not(body).is-delete {
    margin-left: 1px;
    padding: 0;
    position: relative;
    width: 2em; }
    .tag:not(body).is-delete:before, .tag:not(body).is-delete:after {
      background-color: currentColor;
      content: "";
      display: block;
      left: 50%;
      position: absolute;
      top: 50%;
      transform: translateX(-50%) translateY(-50%) rotate(45deg);
      transform-origin: center center; }
    .tag:not(body).is-delete:before {
      height: 1px;
      width: 50%; }
    .tag:not(body).is-delete:after {
      height: 50%;
      width: 1px; }
    .tag:not(body).is-delete:hover, .tag:not(body).is-delete:focus {
      background-color: #e8e8e8; }
    .tag:not(body).is-delete:active {
      background-color: #dbdbdb; }
  .tag:not(body).is-rounded {
    border-radius: 290486px; }

a.tag:hover {
  text-decoration: underline; }

.title,
.subtitle {
  word-break: break-word; }
  .title:not(:last-child),
  .subtitle:not(:last-child) {
    margin-bottom: 1.5rem; }
  .title em,
  .title span,
  .subtitle em,
  .subtitle span {
    font-weight: inherit; }
  .title sub,
  .subtitle sub {
    font-size: 0.75em; }
  .title sup,
  .subtitle sup {
    font-size: 0.75em; }
  .title .tag,
  .subtitle .tag {
    vertical-align: middle; }

.title {
  color: #363636;
  font-size: 2rem;
  font-weight: 600;
  line-height: 1.125; }
  .title strong {
    color: inherit;
    font-weight: inherit; }
  .title + .highlight {
    margin-top: -0.75rem; }
  .title:not(.is-spaced) + .subtitle {
    margin-top: -1.5rem; }
  .title.is-1 {
    font-size: 3rem; }
  .title.is-2 {
    font-size: 2.5rem; }
  .title.is-3 {
    font-size: 2rem; }
  .title.is-4 {
    font-size: 1.5rem; }
  .title.is-5 {
    font-size: 1.25rem; }
  .title.is-6 {
    font-size: 1rem; }
  .title.is-7 {
    font-size: 0.75rem; }

.subtitle {
  color: #4a4a4a;
  font-size: 1.25rem;
  font-weight: 400;
  line-height: 1.25; }
  .subtitle strong {
    color: #363636;
    font-weight: 600; }
  .subtitle:not(.is-spaced) + .title {
    margin-top: -1.5rem; }
  .subtitle.is-1 {
    font-size: 3rem; }
  .subtitle.is-2 {
    font-size: 2.5rem; }
  .subtitle.is-3 {
    font-size: 2rem; }
  .subtitle.is-4 {
    font-size: 1.5rem; }
  .subtitle.is-5 {
    font-size: 1.25rem; }
  .subtitle.is-6 {
    font-size: 1rem; }
  .subtitle.is-7 {
    font-size: 0.75rem; }

.block:not(:last-child) {
  margin-bottom: 1.5rem; }

.delete {
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -moz-appearance: none;
  -webkit-appearance: none;
  background-color: rgba(10, 10, 10, 0.2);
  border: none;
  border-radius: 290486px;
  cursor: pointer;
  display: inline-block;
  flex-grow: 0;
  flex-shrink: 0;
  font-size: 0;
  height: 20px;
  max-height: 20px;
  max-width: 20px;
  min-height: 20px;
  min-width: 20px;
  outline: none;
  position: relative;
  vertical-align: top;
  width: 20px; }
  .delete:before, .delete:after {
    background-color: white;
    content: "";
    display: block;
    left: 50%;
    position: absolute;
    top: 50%;
    transform: translateX(-50%) translateY(-50%) rotate(45deg);
    transform-origin: center center; }
  .delete:before {
    height: 2px;
    width: 50%; }
  .delete:after {
    height: 50%;
    width: 2px; }
  .delete:hover, .delete:focus {
    background-color: rgba(10, 10, 10, 0.3); }
  .delete:active {
    background-color: rgba(10, 10, 10, 0.4); }
  .delete.is-small {
    height: 16px;
    max-height: 16px;
    max-width: 16px;
    min-height: 16px;
    min-width: 16px;
    width: 16px; }
  .delete.is-medium {
    height: 24px;
    max-height: 24px;
    max-width: 24px;
    min-height: 24px;
    min-width: 24px;
    width: 24px; }
  .delete.is-large {
    height: 32px;
    max-height: 32px;
    max-width: 32px;
    min-height: 32px;
    min-width: 32px;
    width: 32px; }

.heading {
  display: block;
  font-size: 11px;
  letter-spacing: 1px;
  margin-bottom: 5px;
  text-transform: uppercase; }

.highlight {
  font-weight: 400;
  max-width: 100%;
  overflow: hidden;
  padding: 0; }
  .highlight:not(:last-child) {
    margin-bottom: 1.5rem; }
  .highlight pre {
    overflow: auto;
    max-width: 100%; }

.loader {
  animation: spinAround 500ms infinite linear;
  border: 2px solid #dbdbdb;
  border-radius: 290486px;
  border-right-color: transparent;
  border-top-color: transparent;
  content: "";
  display: block;
  height: 1em;
  position: relative;
  width: 1em; }

.number {
  align-items: center;
  background-color: whitesmoke;
  border-radius: 290486px;
  display: inline-flex;
  font-size: 1.25rem;
  height: 2em;
  justify-content: center;
  margin-right: 1.5rem;
  min-width: 2.5em;
  padding: 0.25rem 0.5rem;
  text-align: center;
  vertical-align: top; }

.breadcrumb {
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  align-items: stretch;
  display: flex;
  font-size: 1rem;
  overflow: hidden;
  overflow-x: auto;
  white-space: nowrap; }
  .breadcrumb:not(:last-child) {
    margin-bottom: 1.5rem; }
  .breadcrumb a {
    align-items: center;
    color: #3273dc;
    display: flex;
    justify-content: center;
    padding: 0.5em 0.75em; }
    .breadcrumb a:hover {
      color: #363636; }
  .breadcrumb li {
    align-items: center;
    display: flex; }
    .breadcrumb li:first-child a {
      padding-left: 0; }
    .breadcrumb li.is-active a {
      color: #363636;
      cursor: default;
      pointer-events: none; }
    .breadcrumb li + li::before {
      color: #4a4a4a;
      content: "/"; }
  .breadcrumb ul, .breadcrumb ol {
    align-items: center;
    display: flex;
    flex-grow: 1;
    flex-shrink: 0;
    justify-content: flex-start; }
  .breadcrumb .icon:first-child {
    margin-right: 0.5em; }
  .breadcrumb .icon:last-child {
    margin-left: 0.5em; }
  .breadcrumb.is-centered ol, .breadcrumb.is-centered ul {
    justify-content: center; }
  .breadcrumb.is-right ol, .breadcrumb.is-right ul {
    justify-content: flex-end; }
  .breadcrumb.is-small {
    font-size: 0.75rem; }
  .breadcrumb.is-medium {
    font-size: 1.25rem; }
  .breadcrumb.is-large {
    font-size: 1.5rem; }
  .breadcrumb.has-arrow-separator li + li::before {
    content: "→"; }
  .breadcrumb.has-bullet-separator li + li::before {
    content: "•"; }
  .breadcrumb.has-dot-separator li + li::before {
    content: "·"; }
  .breadcrumb.has-succeeds-separator li + li::before {
    content: "≻"; }

.card {
  background-color: white;
  box-shadow: 0 2px 3px rgba(10, 10, 10, 0.1), 0 0 0 1px rgba(10, 10, 10, 0.1);
  color: #4a4a4a;
  max-width: 100%;
  position: relative; }

.card-header {
  align-items: stretch;
  box-shadow: 0 1px 2px rgba(10, 10, 10, 0.1);
  display: flex; }

.card-header-title {
  align-items: center;
  color: #363636;
  display: flex;
  flex-grow: 1;
  font-weight: 700;
  padding: 0.75rem; }
  .card-header-title.is-centered {
    justify-content: center; }

.card-header-icon {
  align-items: center;
  cursor: pointer;
  display: flex;
  justify-content: center;
  padding: 0.75rem; }

.card-image {
  display: block;
  position: relative; }

.card-content {
  padding: 1.5rem; }

.card-footer {
  border-top: 1px solid #dbdbdb;
  align-items: stretch;
  display: flex; }

.card-footer-item {
  align-items: center;
  display: flex;
  flex-basis: 0;
  flex-grow: 1;
  flex-shrink: 0;
  justify-content: center;
  padding: 0.75rem; }
  .card-footer-item:not(:last-child) {
    border-right: 1px solid #dbdbdb; }

.card .media:not(:last-child) {
  margin-bottom: 0.75rem; }

.dropdown {
  display: inline-flex;
  position: relative;
  vertical-align: top; }
  .dropdown.is-active .dropdown-menu, .dropdown.is-hoverable:hover .dropdown-menu {
    display: block; }
  .dropdown.is-right .dropdown-menu {
    left: auto;
    right: 0; }
  .dropdown.is-up .dropdown-menu {
    bottom: 100%;
    padding-bottom: 4px;
    padding-top: unset;
    top: auto; }

.dropdown-menu {
  display: none;
  left: 0;
  min-width: 12rem;
  padding-top: 4px;
  position: absolute;
  top: 100%;
  z-index: 20; }

.dropdown-content {
  background-color: white;
  border-radius: 3px;
  box-shadow: 0 2px 3px rgba(10, 10, 10, 0.1), 0 0 0 1px rgba(10, 10, 10, 0.1);
  padding-bottom: 0.5rem;
  padding-top: 0.5rem; }

.dropdown-item {
  color: #4a4a4a;
  display: block;
  font-size: 0.875rem;
  line-height: 1.5;
  padding: 0.375rem 1rem;
  position: relative; }

a.dropdown-item {
  padding-right: 3rem;
  white-space: nowrap; }
  a.dropdown-item:hover {
    background-color: whitesmoke;
    color: #0a0a0a; }
  a.dropdown-item.is-active {
    background-color: #3273dc;
    color: #fff; }

.dropdown-divider {
  background-color: #dbdbdb;
  border: none;
  display: block;
  height: 1px;
  margin: 0.5rem 0; }

.level {
  align-items: center;
  justify-content: space-between; }
  .level:not(:last-child) {
    margin-bottom: 1.5rem; }
  .level code {
    border-radius: 3px; }
  .level img {
    display: inline-block;
    vertical-align: top; }
  .level.is-mobile {
    display: flex; }
    .level.is-mobile .level-left,
    .level.is-mobile .level-right {
      display: flex; }
    .level.is-mobile .level-left + .level-right {
      margin-top: 0; }
    .level.is-mobile .level-item {
      margin-right: 0.75rem; }
      .level.is-mobile .level-item:not(:last-child) {
        margin-bottom: 0; }
      .level.is-mobile .level-item:not(.is-narrow) {
        flex-grow: 1; }
  @media screen and (min-width: 769px), print {
    .level {
      display: flex; }
      .level > .level-item:not(.is-narrow) {
        flex-grow: 1; } }

.level-item {
  align-items: center;
  display: flex;
  flex-basis: auto;
  flex-grow: 0;
  flex-shrink: 0;
  justify-content: center; }
  .level-item .title,
  .level-item .subtitle {
    margin-bottom: 0; }
  @media screen and (max-width: 768px) {
    .level-item:not(:last-child) {
      margin-bottom: 0.75rem; } }

.level-left,
.level-right {
  flex-basis: auto;
  flex-grow: 0;
  flex-shrink: 0; }
  .level-left .level-item.is-flexible,
  .level-right .level-item.is-flexible {
    flex-grow: 1; }
  @media screen and (min-width: 769px), print {
    .level-left .level-item:not(:last-child),
    .level-right .level-item:not(:last-child) {
      margin-right: 0.75rem; } }

.level-left {
  align-items: center;
  justify-content: flex-start; }
  @media screen and (max-width: 768px) {
    .level-left + .level-right {
      margin-top: 1.5rem; } }
  @media screen and (min-width: 769px), print {
    .level-left {
      display: flex; } }

.level-right {
  align-items: center;
  justify-content: flex-end; }
  @media screen and (min-width: 769px), print {
    .level-right {
      display: flex; } }

.media {
  align-items: flex-start;
  display: flex;
  text-align: left; }
  .media .content:not(:last-child) {
    margin-bottom: 0.75rem; }
  .media .media {
    border-top: 1px solid rgba(219, 219, 219, 0.5);
    display: flex;
    padding-top: 0.75rem; }
    .media .media .content:not(:last-child),
    .media .media .control:not(:last-child) {
      margin-bottom: 0.5rem; }
    .media .media .media {
      padding-top: 0.5rem; }
      .media .media .media + .media {
        margin-top: 0.5rem; }
  .media + .media {
    border-top: 1px solid rgba(219, 219, 219, 0.5);
    margin-top: 1rem;
    padding-top: 1rem; }
  .media.is-large + .media {
    margin-top: 1.5rem;
    padding-top: 1.5rem; }

.media-left,
.media-right {
  flex-basis: auto;
  flex-grow: 0;
  flex-shrink: 0; }

.media-left {
  margin-right: 1rem; }

.media-right {
  margin-left: 1rem; }

.media-content {
  flex-basis: auto;
  flex-grow: 1;
  flex-shrink: 1;
  overflow: auto;
  text-align: left; }

.menu {
  font-size: 1rem; }
  .menu.is-small {
    font-size: 0.75rem; }
  .menu.is-medium {
    font-size: 1.25rem; }
  .menu.is-large {
    font-size: 1.5rem; }

.menu-list {
  line-height: 1.25; }
  .menu-list a {
    border-radius: 2px;
    color: #4a4a4a;
    display: block;
    padding: 0.5em 0.75em; }
    .menu-list a:hover {
      background-color: whitesmoke;
      color: #363636; }
    .menu-list a.is-active {
      background-color: #3273dc;
      color: #fff; }
  .menu-list li ul {
    border-left: 1px solid #dbdbdb;
    margin: 0.75em;
    padding-left: 0.75em; }

.menu-label {
  color: #7a7a7a;
  font-size: 0.75em;
  letter-spacing: 0.1em;
  text-transform: uppercase; }
  .menu-label:not(:first-child) {
    margin-top: 1em; }
  .menu-label:not(:last-child) {
    margin-bottom: 1em; }

.message {
  background-color: whitesmoke;
  border-radius: 3px;
  font-size: 1rem; }
  .message:not(:last-child) {
    margin-bottom: 1.5rem; }
  .message strong {
    color: currentColor; }
  .message a:not(.button):not(.tag) {
    color: currentColor;
    text-decoration: underline; }
  .message.is-small {
    font-size: 0.75rem; }
  .message.is-medium {
    font-size: 1.25rem; }
  .message.is-large {
    font-size: 1.5rem; }
  .message.is-white {
    background-color: white; }
    .message.is-white .message-header {
      background-color: white;
      color: #0a0a0a; }
    .message.is-white .message-body {
      border-color: white;
      color: #4d4d4d; }
  .message.is-black {
    background-color: #fafafa; }
    .message.is-black .message-header {
      background-color: #0a0a0a;
      color: white; }
    .message.is-black .message-body {
      border-color: #0a0a0a;
      color: #0a0a0a; }
  .message.is-light {
    background-color: #fafafa; }
    .message.is-light .message-header {
      background-color: whitesmoke;
      color: #363636; }
    .message.is-light .message-body {
      border-color: whitesmoke;
      color: #4f4f4f; }
  .message.is-dark {
    background-color: #fafafa; }
    .message.is-dark .message-header {
      background-color: #363636;
      color: whitesmoke; }
    .message.is-dark .message-body {
      border-color: #363636;
      color: #2a2a2a; }
  .message.is-primary {
    background-color: #f5fffd; }
    .message.is-primary .message-header {
      background-color: #00d1b2;
      color: #fff; }
    .message.is-primary .message-body {
      border-color: #00d1b2;
      color: #021310; }
  .message.is-link {
    background-color: #f6f9fe; }
    .message.is-link .message-header {
      background-color: #3273dc;
      color: #fff; }
    .message.is-link .message-body {
      border-color: #3273dc;
      color: #22509a; }
  .message.is-info {
    background-color: #f6fbfe; }
    .message.is-info .message-header {
      background-color: #209cee;
      color: #fff; }
    .message.is-info .message-body {
      border-color: #209cee;
      color: #12537e; }
  .message.is-success {
    background-color: #f6fef9; }
    .message.is-success .message-header {
      background-color: #23d160;
      color: #fff; }
    .message.is-success .message-body {
      border-color: #23d160;
      color: #0e311a; }
  .message.is-warning {
    background-color: #fffdf5; }
    .message.is-warning .message-header {
      background-color: #ffdd57;
      color: rgba(0, 0, 0, 0.7); }
    .message.is-warning .message-body {
      border-color: #ffdd57;
      color: #3c3108; }
  .message.is-danger {
    background-color: #fff5f7; }
    .message.is-danger .message-header {
      background-color: #ff3860;
      color: #fff; }
    .message.is-danger .message-body {
      border-color: #ff3860;
      color: #cd0930; }
  .message.is-eben {
    background-color: #fff8f5; }
    .message.is-eben .message-header {
      background-color: #f85800;
      color: #fff; }
    .message.is-eben .message-body {
      border-color: #f85800;
      color: #853306; }
  .message.is-eben-blue {
    background-color: #f6fbfe; }
    .message.is-eben-blue .message-header {
      background-color: #4bb3e6;
      color: #fff; }
    .message.is-eben-blue .message-body {
      border-color: #4bb3e6;
      color: #1b5775; }
  .message.is-eben-bottledgreen {
    background-color: #f8fbfa; }
    .message.is-eben-bottledgreen .message-header {
      background-color: #c8e2d5;
      color: rgba(0, 0, 0, 0.7); }
    .message.is-eben-bottledgreen .message-body {
      border-color: #c8e2d5;
      color: #48554e; }

.message-header {
  align-items: center;
  background-color: #4a4a4a;
  border-radius: 3px 3px 0 0;
  color: #fff;
  display: flex;
  justify-content: space-between;
  line-height: 1.25;
  padding: 0.5em 0.75em;
  position: relative; }
  .message-header .delete {
    flex-grow: 0;
    flex-shrink: 0;
    margin-left: 0.75em; }
  .message-header + .message-body {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-top: none; }

.message-body {
  border: 1px solid #dbdbdb;
  border-radius: 3px;
  color: #4a4a4a;
  padding: 1em 1.25em; }
  .message-body code,
  .message-body pre {
    background-color: white; }
  .message-body pre code {
    background-color: transparent; }

.modal {
  bottom: 0;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  align-items: center;
  display: none;
  justify-content: center;
  overflow: hidden;
  position: fixed;
  z-index: 40; }
  .modal.is-active {
    display: flex; }

.modal-background {
  bottom: 0;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  background-color: rgba(10, 10, 10, 0.86); }

.modal-content,
.modal-card {
  margin: 0 20px;
  max-height: calc(100vh - 160px);
  overflow: auto;
  position: relative;
  width: 100%; }
  @media screen and (min-width: 769px), print {
    .modal-content,
    .modal-card {
      margin: 0 auto;
      max-height: calc(100vh - 40px);
      width: 640px; } }

.modal-close {
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -moz-appearance: none;
  -webkit-appearance: none;
  background-color: rgba(10, 10, 10, 0.2);
  border: none;
  border-radius: 290486px;
  cursor: pointer;
  display: inline-block;
  flex-grow: 0;
  flex-shrink: 0;
  font-size: 0;
  height: 20px;
  max-height: 20px;
  max-width: 20px;
  min-height: 20px;
  min-width: 20px;
  outline: none;
  position: relative;
  vertical-align: top;
  width: 20px;
  background: none;
  height: 40px;
  position: fixed;
  right: 20px;
  top: 20px;
  width: 40px; }
  .modal-close:before, .modal-close:after {
    background-color: white;
    content: "";
    display: block;
    left: 50%;
    position: absolute;
    top: 50%;
    transform: translateX(-50%) translateY(-50%) rotate(45deg);
    transform-origin: center center; }
  .modal-close:before {
    height: 2px;
    width: 50%; }
  .modal-close:after {
    height: 50%;
    width: 2px; }
  .modal-close:hover, .modal-close:focus {
    background-color: rgba(10, 10, 10, 0.3); }
  .modal-close:active {
    background-color: rgba(10, 10, 10, 0.4); }
  .modal-close.is-small {
    height: 16px;
    max-height: 16px;
    max-width: 16px;
    min-height: 16px;
    min-width: 16px;
    width: 16px; }
  .modal-close.is-medium {
    height: 24px;
    max-height: 24px;
    max-width: 24px;
    min-height: 24px;
    min-width: 24px;
    width: 24px; }
  .modal-close.is-large {
    height: 32px;
    max-height: 32px;
    max-width: 32px;
    min-height: 32px;
    min-width: 32px;
    width: 32px; }

.modal-card {
  display: flex;
  flex-direction: column;
  max-height: calc(100vh - 40px);
  overflow: hidden; }

.modal-card-head,
.modal-card-foot {
  align-items: center;
  background-color: whitesmoke;
  display: flex;
  flex-shrink: 0;
  justify-content: flex-start;
  padding: 20px;
  position: relative; }

.modal-card-head {
  border-bottom: 1px solid #dbdbdb;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px; }

.modal-card-title {
  color: #363636;
  flex-grow: 1;
  flex-shrink: 0;
  font-size: 1.5rem;
  line-height: 1; }

.modal-card-foot {
  border-bottom-left-radius: 5px;
  border-bottom-right-radius: 5px;
  border-top: 1px solid #dbdbdb; }
  .modal-card-foot .button:not(:last-child) {
    margin-right: 10px; }

.modal-card-body {
  -webkit-overflow-scrolling: touch;
  background-color: white;
  flex-grow: 1;
  flex-shrink: 1;
  overflow: auto;
  padding: 20px; }

.navbar {
  background-color: white;
  min-height: 3.25rem;
  position: relative; }
  .navbar.is-white {
    background-color: white;
    color: #0a0a0a; }
    .navbar.is-white .navbar-brand > .navbar-item,
    .navbar.is-white .navbar-brand .navbar-link {
      color: #0a0a0a; }
    .navbar.is-white .navbar-brand > a.navbar-item:hover, .navbar.is-white .navbar-brand > a.navbar-item.is-active,
    .navbar.is-white .navbar-brand .navbar-link:hover,
    .navbar.is-white .navbar-brand .navbar-link.is-active {
      background-color: #f2f2f2;
      color: #0a0a0a; }
    .navbar.is-white .navbar-brand .navbar-link::after {
      border-color: #0a0a0a; }
    @media screen and (min-width: 1024px) {
      .navbar.is-white .navbar-start > .navbar-item,
      .navbar.is-white .navbar-start .navbar-link,
      .navbar.is-white .navbar-end > .navbar-item,
      .navbar.is-white .navbar-end .navbar-link {
        color: #0a0a0a; }
      .navbar.is-white .navbar-start > a.navbar-item:hover, .navbar.is-white .navbar-start > a.navbar-item.is-active,
      .navbar.is-white .navbar-start .navbar-link:hover,
      .navbar.is-white .navbar-start .navbar-link.is-active,
      .navbar.is-white .navbar-end > a.navbar-item:hover,
      .navbar.is-white .navbar-end > a.navbar-item.is-active,
      .navbar.is-white .navbar-end .navbar-link:hover,
      .navbar.is-white .navbar-end .navbar-link.is-active {
        background-color: #f2f2f2;
        color: #0a0a0a; }
      .navbar.is-white .navbar-start .navbar-link::after,
      .navbar.is-white .navbar-end .navbar-link::after {
        border-color: #0a0a0a; }
      .navbar.is-white .navbar-item.has-dropdown:hover .navbar-link,
      .navbar.is-white .navbar-item.has-dropdown.is-active .navbar-link {
        background-color: #f2f2f2;
        color: #0a0a0a; }
      .navbar.is-white .navbar-dropdown a.navbar-item.is-active {
        background-color: white;
        color: #0a0a0a; } }
  .navbar.is-black {
    background-color: #0a0a0a;
    color: white; }
    .navbar.is-black .navbar-brand > .navbar-item,
    .navbar.is-black .navbar-brand .navbar-link {
      color: white; }
    .navbar.is-black .navbar-brand > a.navbar-item:hover, .navbar.is-black .navbar-brand > a.navbar-item.is-active,
    .navbar.is-black .navbar-brand .navbar-link:hover,
    .navbar.is-black .navbar-brand .navbar-link.is-active {
      background-color: black;
      color: white; }
    .navbar.is-black .navbar-brand .navbar-link::after {
      border-color: white; }
    @media screen and (min-width: 1024px) {
      .navbar.is-black .navbar-start > .navbar-item,
      .navbar.is-black .navbar-start .navbar-link,
      .navbar.is-black .navbar-end > .navbar-item,
      .navbar.is-black .navbar-end .navbar-link {
        color: white; }
      .navbar.is-black .navbar-start > a.navbar-item:hover, .navbar.is-black .navbar-start > a.navbar-item.is-active,
      .navbar.is-black .navbar-start .navbar-link:hover,
      .navbar.is-black .navbar-start .navbar-link.is-active,
      .navbar.is-black .navbar-end > a.navbar-item:hover,
      .navbar.is-black .navbar-end > a.navbar-item.is-active,
      .navbar.is-black .navbar-end .navbar-link:hover,
      .navbar.is-black .navbar-end .navbar-link.is-active {
        background-color: black;
        color: white; }
      .navbar.is-black .navbar-start .navbar-link::after,
      .navbar.is-black .navbar-end .navbar-link::after {
        border-color: white; }
      .navbar.is-black .navbar-item.has-dropdown:hover .navbar-link,
      .navbar.is-black .navbar-item.has-dropdown.is-active .navbar-link {
        background-color: black;
        color: white; }
      .navbar.is-black .navbar-dropdown a.navbar-item.is-active {
        background-color: #0a0a0a;
        color: white; } }
  .navbar.is-light {
    background-color: whitesmoke;
    color: #363636; }
    .navbar.is-light .navbar-brand > .navbar-item,
    .navbar.is-light .navbar-brand .navbar-link {
      color: #363636; }
    .navbar.is-light .navbar-brand > a.navbar-item:hover, .navbar.is-light .navbar-brand > a.navbar-item.is-active,
    .navbar.is-light .navbar-brand .navbar-link:hover,
    .navbar.is-light .navbar-brand .navbar-link.is-active {
      background-color: #e8e8e8;
      color: #363636; }
    .navbar.is-light .navbar-brand .navbar-link::after {
      border-color: #363636; }
    @media screen and (min-width: 1024px) {
      .navbar.is-light .navbar-start > .navbar-item,
      .navbar.is-light .navbar-start .navbar-link,
      .navbar.is-light .navbar-end > .navbar-item,
      .navbar.is-light .navbar-end .navbar-link {
        color: #363636; }
      .navbar.is-light .navbar-start > a.navbar-item:hover, .navbar.is-light .navbar-start > a.navbar-item.is-active,
      .navbar.is-light .navbar-start .navbar-link:hover,
      .navbar.is-light .navbar-start .navbar-link.is-active,
      .navbar.is-light .navbar-end > a.navbar-item:hover,
      .navbar.is-light .navbar-end > a.navbar-item.is-active,
      .navbar.is-light .navbar-end .navbar-link:hover,
      .navbar.is-light .navbar-end .navbar-link.is-active {
        background-color: #e8e8e8;
        color: #363636; }
      .navbar.is-light .navbar-start .navbar-link::after,
      .navbar.is-light .navbar-end .navbar-link::after {
        border-color: #363636; }
      .navbar.is-light .navbar-item.has-dropdown:hover .navbar-link,
      .navbar.is-light .navbar-item.has-dropdown.is-active .navbar-link {
        background-color: #e8e8e8;
        color: #363636; }
      .navbar.is-light .navbar-dropdown a.navbar-item.is-active {
        background-color: whitesmoke;
        color: #363636; } }
  .navbar.is-dark {
    background-color: #363636;
    color: whitesmoke; }
    .navbar.is-dark .navbar-brand > .navbar-item,
    .navbar.is-dark .navbar-brand .navbar-link {
      color: whitesmoke; }
    .navbar.is-dark .navbar-brand > a.navbar-item:hover, .navbar.is-dark .navbar-brand > a.navbar-item.is-active,
    .navbar.is-dark .navbar-brand .navbar-link:hover,
    .navbar.is-dark .navbar-brand .navbar-link.is-active {
      background-color: #292929;
      color: whitesmoke; }
    .navbar.is-dark .navbar-brand .navbar-link::after {
      border-color: whitesmoke; }
    @media screen and (min-width: 1024px) {
      .navbar.is-dark .navbar-start > .navbar-item,
      .navbar.is-dark .navbar-start .navbar-link,
      .navbar.is-dark .navbar-end > .navbar-item,
      .navbar.is-dark .navbar-end .navbar-link {
        color: whitesmoke; }
      .navbar.is-dark .navbar-start > a.navbar-item:hover, .navbar.is-dark .navbar-start > a.navbar-item.is-active,
      .navbar.is-dark .navbar-start .navbar-link:hover,
      .navbar.is-dark .navbar-start .navbar-link.is-active,
      .navbar.is-dark .navbar-end > a.navbar-item:hover,
      .navbar.is-dark .navbar-end > a.navbar-item.is-active,
      .navbar.is-dark .navbar-end .navbar-link:hover,
      .navbar.is-dark .navbar-end .navbar-link.is-active {
        background-color: #292929;
        color: whitesmoke; }
      .navbar.is-dark .navbar-start .navbar-link::after,
      .navbar.is-dark .navbar-end .navbar-link::after {
        border-color: whitesmoke; }
      .navbar.is-dark .navbar-item.has-dropdown:hover .navbar-link,
      .navbar.is-dark .navbar-item.has-dropdown.is-active .navbar-link {
        background-color: #292929;
        color: whitesmoke; }
      .navbar.is-dark .navbar-dropdown a.navbar-item.is-active {
        background-color: #363636;
        color: whitesmoke; } }
  .navbar.is-primary {
    background-color: #00d1b2;
    color: #fff; }
    .navbar.is-primary .navbar-brand > .navbar-item,
    .navbar.is-primary .navbar-brand .navbar-link {
      color: #fff; }
    .navbar.is-primary .navbar-brand > a.navbar-item:hover, .navbar.is-primary .navbar-brand > a.navbar-item.is-active,
    .navbar.is-primary .navbar-brand .navbar-link:hover,
    .navbar.is-primary .navbar-brand .navbar-link.is-active {
      background-color: #00b89c;
      color: #fff; }
    .navbar.is-primary .navbar-brand .navbar-link::after {
      border-color: #fff; }
    @media screen and (min-width: 1024px) {
      .navbar.is-primary .navbar-start > .navbar-item,
      .navbar.is-primary .navbar-start .navbar-link,
      .navbar.is-primary .navbar-end > .navbar-item,
      .navbar.is-primary .navbar-end .navbar-link {
        color: #fff; }
      .navbar.is-primary .navbar-start > a.navbar-item:hover, .navbar.is-primary .navbar-start > a.navbar-item.is-active,
      .navbar.is-primary .navbar-start .navbar-link:hover,
      .navbar.is-primary .navbar-start .navbar-link.is-active,
      .navbar.is-primary .navbar-end > a.navbar-item:hover,
      .navbar.is-primary .navbar-end > a.navbar-item.is-active,
      .navbar.is-primary .navbar-end .navbar-link:hover,
      .navbar.is-primary .navbar-end .navbar-link.is-active {
        background-color: #00b89c;
        color: #fff; }
      .navbar.is-primary .navbar-start .navbar-link::after,
      .navbar.is-primary .navbar-end .navbar-link::after {
        border-color: #fff; }
      .navbar.is-primary .navbar-item.has-dropdown:hover .navbar-link,
      .navbar.is-primary .navbar-item.has-dropdown.is-active .navbar-link {
        background-color: #00b89c;
        color: #fff; }
      .navbar.is-primary .navbar-dropdown a.navbar-item.is-active {
        background-color: #00d1b2;
        color: #fff; } }
  .navbar.is-link {
    background-color: #3273dc;
    color: #fff; }
    .navbar.is-link .navbar-brand > .navbar-item,
    .navbar.is-link .navbar-brand .navbar-link {
      color: #fff; }
    .navbar.is-link .navbar-brand > a.navbar-item:hover, .navbar.is-link .navbar-brand > a.navbar-item.is-active,
    .navbar.is-link .navbar-brand .navbar-link:hover,
    .navbar.is-link .navbar-brand .navbar-link.is-active {
      background-color: #2366d1;
      color: #fff; }
    .navbar.is-link .navbar-brand .navbar-link::after {
      border-color: #fff; }
    @media screen and (min-width: 1024px) {
      .navbar.is-link .navbar-start > .navbar-item,
      .navbar.is-link .navbar-start .navbar-link,
      .navbar.is-link .navbar-end > .navbar-item,
      .navbar.is-link .navbar-end .navbar-link {
        color: #fff; }
      .navbar.is-link .navbar-start > a.navbar-item:hover, .navbar.is-link .navbar-start > a.navbar-item.is-active,
      .navbar.is-link .navbar-start .navbar-link:hover,
      .navbar.is-link .navbar-start .navbar-link.is-active,
      .navbar.is-link .navbar-end > a.navbar-item:hover,
      .navbar.is-link .navbar-end > a.navbar-item.is-active,
      .navbar.is-link .navbar-end .navbar-link:hover,
      .navbar.is-link .navbar-end .navbar-link.is-active {
        background-color: #2366d1;
        color: #fff; }
      .navbar.is-link .navbar-start .navbar-link::after,
      .navbar.is-link .navbar-end .navbar-link::after {
        border-color: #fff; }
      .navbar.is-link .navbar-item.has-dropdown:hover .navbar-link,
      .navbar.is-link .navbar-item.has-dropdown.is-active .navbar-link {
        background-color: #2366d1;
        color: #fff; }
      .navbar.is-link .navbar-dropdown a.navbar-item.is-active {
        background-color: #3273dc;
        color: #fff; } }
  .navbar.is-info {
    background-color: #209cee;
    color: #fff; }
    .navbar.is-info .navbar-brand > .navbar-item,
    .navbar.is-info .navbar-brand .navbar-link {
      color: #fff; }
    .navbar.is-info .navbar-brand > a.navbar-item:hover, .navbar.is-info .navbar-brand > a.navbar-item.is-active,
    .navbar.is-info .navbar-brand .navbar-link:hover,
    .navbar.is-info .navbar-brand .navbar-link.is-active {
      background-color: #118fe4;
      color: #fff; }
    .navbar.is-info .navbar-brand .navbar-link::after {
      border-color: #fff; }
    @media screen and (min-width: 1024px) {
      .navbar.is-info .navbar-start > .navbar-item,
      .navbar.is-info .navbar-start .navbar-link,
      .navbar.is-info .navbar-end > .navbar-item,
      .navbar.is-info .navbar-end .navbar-link {
        color: #fff; }
      .navbar.is-info .navbar-start > a.navbar-item:hover, .navbar.is-info .navbar-start > a.navbar-item.is-active,
      .navbar.is-info .navbar-start .navbar-link:hover,
      .navbar.is-info .navbar-start .navbar-link.is-active,
      .navbar.is-info .navbar-end > a.navbar-item:hover,
      .navbar.is-info .navbar-end > a.navbar-item.is-active,
      .navbar.is-info .navbar-end .navbar-link:hover,
      .navbar.is-info .navbar-end .navbar-link.is-active {
        background-color: #118fe4;
        color: #fff; }
      .navbar.is-info .navbar-start .navbar-link::after,
      .navbar.is-info .navbar-end .navbar-link::after {
        border-color: #fff; }
      .navbar.is-info .navbar-item.has-dropdown:hover .navbar-link,
      .navbar.is-info .navbar-item.has-dropdown.is-active .navbar-link {
        background-color: #118fe4;
        color: #fff; }
      .navbar.is-info .navbar-dropdown a.navbar-item.is-active {
        background-color: #209cee;
        color: #fff; } }
  .navbar.is-success {
    background-color: #23d160;
    color: #fff; }
    .navbar.is-success .navbar-brand > .navbar-item,
    .navbar.is-success .navbar-brand .navbar-link {
      color: #fff; }
    .navbar.is-success .navbar-brand > a.navbar-item:hover, .navbar.is-success .navbar-brand > a.navbar-item.is-active,
    .navbar.is-success .navbar-brand .navbar-link:hover,
    .navbar.is-success .navbar-brand .navbar-link.is-active {
      background-color: #20bc56;
      color: #fff; }
    .navbar.is-success .navbar-brand .navbar-link::after {
      border-color: #fff; }
    @media screen and (min-width: 1024px) {
      .navbar.is-success .navbar-start > .navbar-item,
      .navbar.is-success .navbar-start .navbar-link,
      .navbar.is-success .navbar-end > .navbar-item,
      .navbar.is-success .navbar-end .navbar-link {
        color: #fff; }
      .navbar.is-success .navbar-start > a.navbar-item:hover, .navbar.is-success .navbar-start > a.navbar-item.is-active,
      .navbar.is-success .navbar-start .navbar-link:hover,
      .navbar.is-success .navbar-start .navbar-link.is-active,
      .navbar.is-success .navbar-end > a.navbar-item:hover,
      .navbar.is-success .navbar-end > a.navbar-item.is-active,
      .navbar.is-success .navbar-end .navbar-link:hover,
      .navbar.is-success .navbar-end .navbar-link.is-active {
        background-color: #20bc56;
        color: #fff; }
      .navbar.is-success .navbar-start .navbar-link::after,
      .navbar.is-success .navbar-end .navbar-link::after {
        border-color: #fff; }
      .navbar.is-success .navbar-item.has-dropdown:hover .navbar-link,
      .navbar.is-success .navbar-item.has-dropdown.is-active .navbar-link {
        background-color: #20bc56;
        color: #fff; }
      .navbar.is-success .navbar-dropdown a.navbar-item.is-active {
        background-color: #23d160;
        color: #fff; } }
  .navbar.is-warning {
    background-color: #ffdd57;
    color: rgba(0, 0, 0, 0.7); }
    .navbar.is-warning .navbar-brand > .navbar-item,
    .navbar.is-warning .navbar-brand .navbar-link {
      color: rgba(0, 0, 0, 0.7); }
    .navbar.is-warning .navbar-brand > a.navbar-item:hover, .navbar.is-warning .navbar-brand > a.navbar-item.is-active,
    .navbar.is-warning .navbar-brand .navbar-link:hover,
    .navbar.is-warning .navbar-brand .navbar-link.is-active {
      background-color: #ffd83d;
      color: rgba(0, 0, 0, 0.7); }
    .navbar.is-warning .navbar-brand .navbar-link::after {
      border-color: rgba(0, 0, 0, 0.7); }
    @media screen and (min-width: 1024px) {
      .navbar.is-warning .navbar-start > .navbar-item,
      .navbar.is-warning .navbar-start .navbar-link,
      .navbar.is-warning .navbar-end > .navbar-item,
      .navbar.is-warning .navbar-end .navbar-link {
        color: rgba(0, 0, 0, 0.7); }
      .navbar.is-warning .navbar-start > a.navbar-item:hover, .navbar.is-warning .navbar-start > a.navbar-item.is-active,
      .navbar.is-warning .navbar-start .navbar-link:hover,
      .navbar.is-warning .navbar-start .navbar-link.is-active,
      .navbar.is-warning .navbar-end > a.navbar-item:hover,
      .navbar.is-warning .navbar-end > a.navbar-item.is-active,
      .navbar.is-warning .navbar-end .navbar-link:hover,
      .navbar.is-warning .navbar-end .navbar-link.is-active {
        background-color: #ffd83d;
        color: rgba(0, 0, 0, 0.7); }
      .navbar.is-warning .navbar-start .navbar-link::after,
      .navbar.is-warning .navbar-end .navbar-link::after {
        border-color: rgba(0, 0, 0, 0.7); }
      .navbar.is-warning .navbar-item.has-dropdown:hover .navbar-link,
      .navbar.is-warning .navbar-item.has-dropdown.is-active .navbar-link {
        background-color: #ffd83d;
        color: rgba(0, 0, 0, 0.7); }
      .navbar.is-warning .navbar-dropdown a.navbar-item.is-active {
        background-color: #ffdd57;
        color: rgba(0, 0, 0, 0.7); } }
  .navbar.is-danger {
    background-color: #ff3860;
    color: #fff; }
    .navbar.is-danger .navbar-brand > .navbar-item,
    .navbar.is-danger .navbar-brand .navbar-link {
      color: #fff; }
    .navbar.is-danger .navbar-brand > a.navbar-item:hover, .navbar.is-danger .navbar-brand > a.navbar-item.is-active,
    .navbar.is-danger .navbar-brand .navbar-link:hover,
    .navbar.is-danger .navbar-brand .navbar-link.is-active {
      background-color: #ff1f4b;
      color: #fff; }
    .navbar.is-danger .navbar-brand .navbar-link::after {
      border-color: #fff; }
    @media screen and (min-width: 1024px) {
      .navbar.is-danger .navbar-start > .navbar-item,
      .navbar.is-danger .navbar-start .navbar-link,
      .navbar.is-danger .navbar-end > .navbar-item,
      .navbar.is-danger .navbar-end .navbar-link {
        color: #fff; }
      .navbar.is-danger .navbar-start > a.navbar-item:hover, .navbar.is-danger .navbar-start > a.navbar-item.is-active,
      .navbar.is-danger .navbar-start .navbar-link:hover,
      .navbar.is-danger .navbar-start .navbar-link.is-active,
      .navbar.is-danger .navbar-end > a.navbar-item:hover,
      .navbar.is-danger .navbar-end > a.navbar-item.is-active,
      .navbar.is-danger .navbar-end .navbar-link:hover,
      .navbar.is-danger .navbar-end .navbar-link.is-active {
        background-color: #ff1f4b;
        color: #fff; }
      .navbar.is-danger .navbar-start .navbar-link::after,
      .navbar.is-danger .navbar-end .navbar-link::after {
        border-color: #fff; }
      .navbar.is-danger .navbar-item.has-dropdown:hover .navbar-link,
      .navbar.is-danger .navbar-item.has-dropdown.is-active .navbar-link {
        background-color: #ff1f4b;
        color: #fff; }
      .navbar.is-danger .navbar-dropdown a.navbar-item.is-active {
        background-color: #ff3860;
        color: #fff; } }
  .navbar.is-eben {
    background-color: #f85800;
    color: #fff; }
    .navbar.is-eben .navbar-brand > .navbar-item,
    .navbar.is-eben .navbar-brand .navbar-link {
      color: #fff; }
    .navbar.is-eben .navbar-brand > a.navbar-item:hover, .navbar.is-eben .navbar-brand > a.navbar-item.is-active,
    .navbar.is-eben .navbar-brand .navbar-link:hover,
    .navbar.is-eben .navbar-brand .navbar-link.is-active {
      background-color: #df4f00;
      color: #fff; }
    .navbar.is-eben .navbar-brand .navbar-link::after {
      border-color: #fff; }
    @media screen and (min-width: 1024px) {
      .navbar.is-eben .navbar-start > .navbar-item,
      .navbar.is-eben .navbar-start .navbar-link,
      .navbar.is-eben .navbar-end > .navbar-item,
      .navbar.is-eben .navbar-end .navbar-link {
        color: #fff; }
      .navbar.is-eben .navbar-start > a.navbar-item:hover, .navbar.is-eben .navbar-start > a.navbar-item.is-active,
      .navbar.is-eben .navbar-start .navbar-link:hover,
      .navbar.is-eben .navbar-start .navbar-link.is-active,
      .navbar.is-eben .navbar-end > a.navbar-item:hover,
      .navbar.is-eben .navbar-end > a.navbar-item.is-active,
      .navbar.is-eben .navbar-end .navbar-link:hover,
      .navbar.is-eben .navbar-end .navbar-link.is-active {
        background-color: #df4f00;
        color: #fff; }
      .navbar.is-eben .navbar-start .navbar-link::after,
      .navbar.is-eben .navbar-end .navbar-link::after {
        border-color: #fff; }
      .navbar.is-eben .navbar-item.has-dropdown:hover .navbar-link,
      .navbar.is-eben .navbar-item.has-dropdown.is-active .navbar-link {
        background-color: #df4f00;
        color: #fff; }
      .navbar.is-eben .navbar-dropdown a.navbar-item.is-active {
        background-color: #f85800;
        color: #fff; } }
  .navbar.is-eben-blue {
    background-color: #4bb3e6;
    color: #fff; }
    .navbar.is-eben-blue .navbar-brand > .navbar-item,
    .navbar.is-eben-blue .navbar-brand .navbar-link {
      color: #fff; }
    .navbar.is-eben-blue .navbar-brand > a.navbar-item:hover, .navbar.is-eben-blue .navbar-brand > a.navbar-item.is-active,
    .navbar.is-eben-blue .navbar-brand .navbar-link:hover,
    .navbar.is-eben-blue .navbar-brand .navbar-link.is-active {
      background-color: #35aae3;
      color: #fff; }
    .navbar.is-eben-blue .navbar-brand .navbar-link::after {
      border-color: #fff; }
    @media screen and (min-width: 1024px) {
      .navbar.is-eben-blue .navbar-start > .navbar-item,
      .navbar.is-eben-blue .navbar-start .navbar-link,
      .navbar.is-eben-blue .navbar-end > .navbar-item,
      .navbar.is-eben-blue .navbar-end .navbar-link {
        color: #fff; }
      .navbar.is-eben-blue .navbar-start > a.navbar-item:hover, .navbar.is-eben-blue .navbar-start > a.navbar-item.is-active,
      .navbar.is-eben-blue .navbar-start .navbar-link:hover,
      .navbar.is-eben-blue .navbar-start .navbar-link.is-active,
      .navbar.is-eben-blue .navbar-end > a.navbar-item:hover,
      .navbar.is-eben-blue .navbar-end > a.navbar-item.is-active,
      .navbar.is-eben-blue .navbar-end .navbar-link:hover,
      .navbar.is-eben-blue .navbar-end .navbar-link.is-active {
        background-color: #35aae3;
        color: #fff; }
      .navbar.is-eben-blue .navbar-start .navbar-link::after,
      .navbar.is-eben-blue .navbar-end .navbar-link::after {
        border-color: #fff; }
      .navbar.is-eben-blue .navbar-item.has-dropdown:hover .navbar-link,
      .navbar.is-eben-blue .navbar-item.has-dropdown.is-active .navbar-link {
        background-color: #35aae3;
        color: #fff; }
      .navbar.is-eben-blue .navbar-dropdown a.navbar-item.is-active {
        background-color: #4bb3e6;
        color: #fff; } }
  .navbar.is-eben-bottledgreen {
    background-color: #c8e2d5;
    color: rgba(0, 0, 0, 0.7); }
    .navbar.is-eben-bottledgreen .navbar-brand > .navbar-item,
    .navbar.is-eben-bottledgreen .navbar-brand .navbar-link {
      color: rgba(0, 0, 0, 0.7); }
    .navbar.is-eben-bottledgreen .navbar-brand > a.navbar-item:hover, .navbar.is-eben-bottledgreen .navbar-brand > a.navbar-item.is-active,
    .navbar.is-eben-bottledgreen .navbar-brand .navbar-link:hover,
    .navbar.is-eben-bottledgreen .navbar-brand .navbar-link.is-active {
      background-color: #b7d9c8;
      color: rgba(0, 0, 0, 0.7); }
    .navbar.is-eben-bottledgreen .navbar-brand .navbar-link::after {
      border-color: rgba(0, 0, 0, 0.7); }
    @media screen and (min-width: 1024px) {
      .navbar.is-eben-bottledgreen .navbar-start > .navbar-item,
      .navbar.is-eben-bottledgreen .navbar-start .navbar-link,
      .navbar.is-eben-bottledgreen .navbar-end > .navbar-item,
      .navbar.is-eben-bottledgreen .navbar-end .navbar-link {
        color: rgba(0, 0, 0, 0.7); }
      .navbar.is-eben-bottledgreen .navbar-start > a.navbar-item:hover, .navbar.is-eben-bottledgreen .navbar-start > a.navbar-item.is-active,
      .navbar.is-eben-bottledgreen .navbar-start .navbar-link:hover,
      .navbar.is-eben-bottledgreen .navbar-start .navbar-link.is-active,
      .navbar.is-eben-bottledgreen .navbar-end > a.navbar-item:hover,
      .navbar.is-eben-bottledgreen .navbar-end > a.navbar-item.is-active,
      .navbar.is-eben-bottledgreen .navbar-end .navbar-link:hover,
      .navbar.is-eben-bottledgreen .navbar-end .navbar-link.is-active {
        background-color: #b7d9c8;
        color: rgba(0, 0, 0, 0.7); }
      .navbar.is-eben-bottledgreen .navbar-start .navbar-link::after,
      .navbar.is-eben-bottledgreen .navbar-end .navbar-link::after {
        border-color: rgba(0, 0, 0, 0.7); }
      .navbar.is-eben-bottledgreen .navbar-item.has-dropdown:hover .navbar-link,
      .navbar.is-eben-bottledgreen .navbar-item.has-dropdown.is-active .navbar-link {
        background-color: #b7d9c8;
        color: rgba(0, 0, 0, 0.7); }
      .navbar.is-eben-bottledgreen .navbar-dropdown a.navbar-item.is-active {
        background-color: #c8e2d5;
        color: rgba(0, 0, 0, 0.7); } }
  .navbar > .container {
    align-items: stretch;
    display: flex;
    min-height: 3.25rem;
    width: 100%; }
  .navbar.has-shadow {
    box-shadow: 0 2px 3px rgba(10, 10, 10, 0.1); }
  .navbar.is-fixed-bottom, .navbar.is-fixed-top {
    left: 0;
    position: fixed;
    right: 0;
    z-index: 30; }
  .navbar.is-fixed-bottom {
    bottom: 0; }
    .navbar.is-fixed-bottom.has-shadow {
      box-shadow: 0 -2px 3px rgba(10, 10, 10, 0.1); }
  .navbar.is-fixed-top {
    top: 0; }

html.has-navbar-fixed-top {
  padding-top: 3.25rem; }

html.has-navbar-fixed-bottom {
  padding-bottom: 3.25rem; }

.navbar-brand,
.navbar-tabs {
  align-items: stretch;
  display: flex;
  flex-shrink: 0;
  min-height: 3.25rem; }

.navbar-tabs {
  -webkit-overflow-scrolling: touch;
  max-width: 100vw;
  overflow-x: auto;
  overflow-y: hidden; }

.navbar-burger {
  cursor: pointer;
  display: block;
  height: 3.25rem;
  position: relative;
  width: 3.25rem;
  margin-left: auto; }
  .navbar-burger span {
    background-color: currentColor;
    display: block;
    height: 1px;
    left: calc(50% - 8px);
    position: absolute;
    transform-origin: center;
    transition-duration: 86ms;
    transition-property: background-color, opacity, transform;
    transition-timing-function: ease-out;
    width: 16px; }
    .navbar-burger span:nth-child(1) {
      top: calc(50% - 6px); }
    .navbar-burger span:nth-child(2) {
      top: calc(50% - 1px); }
    .navbar-burger span:nth-child(3) {
      top: calc(50% + 4px); }
  .navbar-burger:hover {
    background-color: rgba(0, 0, 0, 0.05); }
  .navbar-burger.is-active span:nth-child(1) {
    transform: translateY(5px) rotate(45deg); }
  .navbar-burger.is-active span:nth-child(2) {
    opacity: 0; }
  .navbar-burger.is-active span:nth-child(3) {
    transform: translateY(-5px) rotate(-45deg); }

.navbar-menu {
  display: none; }

.navbar-item,
.navbar-link {
  color: #4a4a4a;
  display: block;
  line-height: 1.5;
  padding: 0.5rem 1rem;
  position: relative; }

a.navbar-item:hover, a.navbar-item.is-active,
a.navbar-link:hover,
a.navbar-link.is-active {
  background-color: whitesmoke;
  color: #3273dc; }

.navbar-item {
  flex-grow: 0;
  flex-shrink: 0; }
  .navbar-item img {
    max-height: 1.75rem; }
  .navbar-item.has-dropdown {
    padding: 0; }
  .navbar-item.is-expanded {
    flex-grow: 1;
    flex-shrink: 1; }
  .navbar-item.is-tab {
    border-bottom: 1px solid transparent;
    min-height: 3.25rem;
    padding-bottom: calc(0.5rem - 1px); }
    .navbar-item.is-tab:hover {
      background-color: transparent;
      border-bottom-color: #3273dc; }
    .navbar-item.is-tab.is-active {
      background-color: transparent;
      border-bottom-color: #3273dc;
      border-bottom-style: solid;
      border-bottom-width: 3px;
      color: #3273dc;
      padding-bottom: calc(0.5rem - 3px); }

.navbar-content {
  flex-grow: 1;
  flex-shrink: 1; }

.navbar-link {
  padding-right: 2.5em; }

.navbar-dropdown {
  font-size: 0.875rem;
  padding-bottom: 0.5rem;
  padding-top: 0.5rem; }
  .navbar-dropdown .navbar-item {
    padding-left: 1.5rem;
    padding-right: 1.5rem; }

.navbar-divider {
  background-color: #dbdbdb;
  border: none;
  display: none;
  height: 1px;
  margin: 0.5rem 0; }

@media screen and (max-width: 1023px) {
  .navbar > .container {
    display: block; }

  .navbar-brand .navbar-item,
  .navbar-tabs .navbar-item {
    align-items: center;
    display: flex; }

  .navbar-menu {
    background-color: white;
    box-shadow: 0 8px 16px rgba(10, 10, 10, 0.1);
    padding: 0.5rem 0; }
    .navbar-menu.is-active {
      display: block; }

  .navbar.is-fixed-bottom-touch, .navbar.is-fixed-top-touch {
    left: 0;
    position: fixed;
    right: 0;
    z-index: 30; }
  .navbar.is-fixed-bottom-touch {
    bottom: 0; }
    .navbar.is-fixed-bottom-touch.has-shadow {
      box-shadow: 0 -2px 3px rgba(10, 10, 10, 0.1); }
  .navbar.is-fixed-top-touch {
    top: 0; }
  .navbar.is-fixed-top .navbar-menu, .navbar.is-fixed-top-touch .navbar-menu {
    -webkit-overflow-scrolling: touch;
    max-height: calc(100vh - 3.25rem);
    overflow: auto; }

  html.has-navbar-fixed-top-touch {
    padding-top: 3.25rem; }

  html.has-navbar-fixed-bottom-touch {
    padding-bottom: 3.25rem; } }
@media screen and (min-width: 1024px) {
  .navbar,
  .navbar-menu,
  .navbar-start,
  .navbar-end {
    align-items: stretch;
    display: flex; }

  .navbar {
    min-height: 3.25rem; }
    .navbar.is-transparent a.navbar-item:hover, .navbar.is-transparent a.navbar-item.is-active,
    .navbar.is-transparent a.navbar-link:hover,
    .navbar.is-transparent a.navbar-link.is-active {
      background-color: transparent !important; }
    .navbar.is-transparent .navbar-item.has-dropdown.is-active .navbar-link, .navbar.is-transparent .navbar-item.has-dropdown.is-hoverable:hover .navbar-link {
      background-color: transparent !important; }
    .navbar.is-transparent .navbar-dropdown a.navbar-item:hover {
      background-color: whitesmoke;
      color: #0a0a0a; }
    .navbar.is-transparent .navbar-dropdown a.navbar-item.is-active {
      background-color: whitesmoke;
      color: #3273dc; }

  .navbar-burger {
    display: none; }

  .navbar-item,
  .navbar-link {
    align-items: center;
    display: flex; }

  .navbar-item.has-dropdown {
    align-items: stretch; }
  .navbar-item.has-dropdown-up .navbar-link::after {
    transform: rotate(135deg) translate(0.25em, -0.25em); }
  .navbar-item.has-dropdown-up .navbar-dropdown {
    border-bottom: 1px solid #dbdbdb;
    border-radius: 5px 5px 0 0;
    border-top: none;
    bottom: 100%;
    box-shadow: 0 -8px 8px rgba(10, 10, 10, 0.1);
    top: auto; }
  .navbar-item.is-active .navbar-dropdown, .navbar-item.is-hoverable:hover .navbar-dropdown {
    display: block; }
    .navbar-item.is-active .navbar-dropdown.is-boxed, .navbar-item.is-hoverable:hover .navbar-dropdown.is-boxed {
      opacity: 1;
      pointer-events: auto;
      transform: translateY(0); }

  .navbar-link::after {
    border: 1px solid #3273dc;
    border-right: 0;
    border-top: 0;
    content: " ";
    display: block;
    height: 0.5em;
    pointer-events: none;
    position: absolute;
    transform: rotate(-45deg);
    transform-origin: center;
    width: 0.5em;
    margin-top: -0.375em;
    right: 1.125em;
    top: 50%; }

  .navbar-menu {
    flex-grow: 1;
    flex-shrink: 0; }

  .navbar-start {
    justify-content: flex-start;
    margin-right: auto; }

  .navbar-end {
    justify-content: flex-end;
    margin-left: auto; }

  .navbar-dropdown {
    background-color: white;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    border-top: 1px solid #dbdbdb;
    box-shadow: 0 8px 8px rgba(10, 10, 10, 0.1);
    display: none;
    font-size: 0.875rem;
    left: 0;
    min-width: 100%;
    position: absolute;
    top: 100%;
    z-index: 20; }
    .navbar-dropdown .navbar-item {
      padding: 0.375rem 1rem;
      white-space: nowrap; }
    .navbar-dropdown a.navbar-item {
      padding-right: 3rem; }
      .navbar-dropdown a.navbar-item:hover {
        background-color: whitesmoke;
        color: #0a0a0a; }
      .navbar-dropdown a.navbar-item.is-active {
        background-color: whitesmoke;
        color: #3273dc; }
    .navbar-dropdown.is-boxed {
      border-radius: 5px;
      border-top: none;
      box-shadow: 0 8px 8px rgba(10, 10, 10, 0.1), 0 0 0 1px rgba(10, 10, 10, 0.1);
      display: block;
      opacity: 0;
      pointer-events: none;
      top: calc(100% + (-4px));
      transform: translateY(-5px);
      transition-duration: 86ms;
      transition-property: opacity, transform; }
    .navbar-dropdown.is-right {
      left: auto;
      right: 0; }

  .navbar-divider {
    display: block; }

  .navbar > .container .navbar-brand,
  .container > .navbar .navbar-brand {
    margin-left: -1rem; }
  .navbar > .container .navbar-menu,
  .container > .navbar .navbar-menu {
    margin-right: -1rem; }

  .navbar.is-fixed-bottom-desktop, .navbar.is-fixed-top-desktop {
    left: 0;
    position: fixed;
    right: 0;
    z-index: 30; }
  .navbar.is-fixed-bottom-desktop {
    bottom: 0; }
    .navbar.is-fixed-bottom-desktop.has-shadow {
      box-shadow: 0 -2px 3px rgba(10, 10, 10, 0.1); }
  .navbar.is-fixed-top-desktop {
    top: 0; }

  html.has-navbar-fixed-top-desktop {
    padding-top: 3.25rem; }

  html.has-navbar-fixed-bottom-desktop {
    padding-bottom: 3.25rem; }

  a.navbar-item.is-active,
  a.navbar-link.is-active {
    color: #0a0a0a; }
  a.navbar-item.is-active:not(:hover),
  a.navbar-link.is-active:not(:hover) {
    background-color: transparent; }

  .navbar-item.has-dropdown:hover .navbar-link, .navbar-item.has-dropdown.is-active .navbar-link {
    background-color: whitesmoke; } }
.pagination {
  font-size: 1rem;
  margin: -0.25rem; }
  .pagination.is-small {
    font-size: 0.75rem; }
  .pagination.is-medium {
    font-size: 1.25rem; }
  .pagination.is-large {
    font-size: 1.5rem; }
  .pagination.is-rounded .pagination-previous,
  .pagination.is-rounded .pagination-next {
    padding-left: 1em;
    padding-right: 1em;
    border-radius: 290486px; }
  .pagination.is-rounded .pagination-link {
    border-radius: 290486px; }

.pagination,
.pagination-list {
  align-items: center;
  display: flex;
  justify-content: center;
  text-align: center; }

.pagination-previous,
.pagination-next,
.pagination-link,
.pagination-ellipsis {
  -moz-appearance: none;
  -webkit-appearance: none;
  align-items: center;
  border: 1px solid transparent;
  border-radius: 3px;
  box-shadow: none;
  display: inline-flex;
  font-size: 1rem;
  height: 2.25em;
  justify-content: flex-start;
  line-height: 1.5;
  padding-bottom: calc(0.375em - 1px);
  padding-left: calc(0.625em - 1px);
  padding-right: calc(0.625em - 1px);
  padding-top: calc(0.375em - 1px);
  position: relative;
  vertical-align: top;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  font-size: 1em;
  padding-left: 0.5em;
  padding-right: 0.5em;
  justify-content: center;
  margin: 0.25rem;
  text-align: center; }
  .pagination-previous:focus, .pagination-previous.is-focused, .pagination-previous:active, .pagination-previous.is-active,
  .pagination-next:focus,
  .pagination-next.is-focused,
  .pagination-next:active,
  .pagination-next.is-active,
  .pagination-link:focus,
  .pagination-link.is-focused,
  .pagination-link:active,
  .pagination-link.is-active,
  .pagination-ellipsis:focus,
  .pagination-ellipsis.is-focused,
  .pagination-ellipsis:active,
  .pagination-ellipsis.is-active {
    outline: none; }
  .pagination-previous[disabled],
  .pagination-next[disabled],
  .pagination-link[disabled],
  .pagination-ellipsis[disabled] {
    cursor: not-allowed; }

.pagination-previous,
.pagination-next,
.pagination-link {
  border-color: #dbdbdb;
  color: #363636;
  min-width: 2.25em; }
  .pagination-previous:hover,
  .pagination-next:hover,
  .pagination-link:hover {
    border-color: #b5b5b5;
    color: #363636; }
  .pagination-previous:focus,
  .pagination-next:focus,
  .pagination-link:focus {
    border-color: #3273dc; }
  .pagination-previous:active,
  .pagination-next:active,
  .pagination-link:active {
    box-shadow: inset 0 1px 2px rgba(10, 10, 10, 0.2); }
  .pagination-previous[disabled],
  .pagination-next[disabled],
  .pagination-link[disabled] {
    background-color: #dbdbdb;
    border-color: #dbdbdb;
    box-shadow: none;
    color: #7a7a7a;
    opacity: 0.5; }

.pagination-previous,
.pagination-next {
  padding-left: 0.75em;
  padding-right: 0.75em;
  white-space: nowrap; }

.pagination-link.is-current {
  background-color: #3273dc;
  border-color: #3273dc;
  color: #fff; }

.pagination-ellipsis {
  color: #b5b5b5;
  pointer-events: none; }

.pagination-list {
  flex-wrap: wrap; }

@media screen and (max-width: 768px) {
  .pagination {
    flex-wrap: wrap; }

  .pagination-previous,
  .pagination-next {
    flex-grow: 1;
    flex-shrink: 1; }

  .pagination-list li {
    flex-grow: 1;
    flex-shrink: 1; } }
@media screen and (min-width: 769px), print {
  .pagination-list {
    flex-grow: 1;
    flex-shrink: 1;
    justify-content: flex-start;
    order: 1; }

  .pagination-previous {
    order: 2; }

  .pagination-next {
    order: 3; }

  .pagination {
    justify-content: space-between; }
    .pagination.is-centered .pagination-previous {
      order: 1; }
    .pagination.is-centered .pagination-list {
      justify-content: center;
      order: 2; }
    .pagination.is-centered .pagination-next {
      order: 3; }
    .pagination.is-right .pagination-previous {
      order: 1; }
    .pagination.is-right .pagination-next {
      order: 2; }
    .pagination.is-right .pagination-list {
      justify-content: flex-end;
      order: 3; } }
.panel {
  font-size: 1rem; }
  .panel:not(:last-child) {
    margin-bottom: 1.5rem; }

.panel-heading,
.panel-tabs,
.panel-block {
  border-bottom: 1px solid #dbdbdb;
  border-left: 1px solid #dbdbdb;
  border-right: 1px solid #dbdbdb; }
  .panel-heading:first-child,
  .panel-tabs:first-child,
  .panel-block:first-child {
    border-top: 1px solid #dbdbdb; }

.panel-heading {
  background-color: whitesmoke;
  border-radius: 3px 3px 0 0;
  color: #363636;
  font-size: 1.25em;
  font-weight: 300;
  line-height: 1.25;
  padding: 0.5em 0.75em; }

.panel-tabs {
  align-items: flex-end;
  display: flex;
  font-size: 0.875em;
  justify-content: center; }
  .panel-tabs a {
    border-bottom: 1px solid #dbdbdb;
    margin-bottom: -1px;
    padding: 0.5em; }
    .panel-tabs a.is-active {
      border-bottom-color: #4a4a4a;
      color: #363636; }

.panel-list a {
  color: #4a4a4a; }
  .panel-list a:hover {
    color: #3273dc; }

.panel-block {
  align-items: center;
  color: #363636;
  display: flex;
  justify-content: flex-start;
  padding: 0.5em 0.75em; }
  .panel-block input[type="checkbox"] {
    margin-right: 0.75em; }
  .panel-block > .control {
    flex-grow: 1;
    flex-shrink: 1;
    width: 100%; }
  .panel-block.is-wrapped {
    flex-wrap: wrap; }
  .panel-block.is-active {
    border-left-color: #3273dc;
    color: #363636; }
    .panel-block.is-active .panel-icon {
      color: #3273dc; }

a.panel-block,
label.panel-block {
  cursor: pointer; }
  a.panel-block:hover,
  label.panel-block:hover {
    background-color: whitesmoke; }

.panel-icon {
  display: inline-block;
  font-size: 14px;
  height: 1em;
  line-height: 1em;
  text-align: center;
  vertical-align: top;
  width: 1em;
  color: #7a7a7a;
  margin-right: 0.75em; }
  .panel-icon .fa {
    font-size: inherit;
    line-height: inherit; }

.tabs {
  -webkit-overflow-scrolling: touch;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  align-items: stretch;
  display: flex;
  font-size: 1rem;
  justify-content: space-between;
  overflow: hidden;
  overflow-x: auto;
  white-space: nowrap; }
  .tabs:not(:last-child) {
    margin-bottom: 1.5rem; }
  .tabs a {
    align-items: center;
    border-bottom-color: #dbdbdb;
    border-bottom-style: solid;
    border-bottom-width: 1px;
    color: #4a4a4a;
    display: flex;
    justify-content: center;
    margin-bottom: -1px;
    padding: 0.5em 1em;
    vertical-align: top; }
    .tabs a:hover {
      border-bottom-color: #363636;
      color: #363636; }
  .tabs li {
    display: block; }
    .tabs li.is-active a {
      border-bottom-color: #3273dc;
      color: #3273dc; }
  .tabs ul {
    align-items: center;
    border-bottom-color: #dbdbdb;
    border-bottom-style: solid;
    border-bottom-width: 1px;
    display: flex;
    flex-grow: 1;
    flex-shrink: 0;
    justify-content: flex-start; }
    .tabs ul.is-left {
      padding-right: 0.75em; }
    .tabs ul.is-center {
      flex: none;
      justify-content: center;
      padding-left: 0.75em;
      padding-right: 0.75em; }
    .tabs ul.is-right {
      justify-content: flex-end;
      padding-left: 0.75em; }
  .tabs .icon:first-child {
    margin-right: 0.5em; }
  .tabs .icon:last-child {
    margin-left: 0.5em; }
  .tabs.is-centered ul {
    justify-content: center; }
  .tabs.is-right ul {
    justify-content: flex-end; }
  .tabs.is-boxed a {
    border: 1px solid transparent;
    border-radius: 3px 3px 0 0; }
    .tabs.is-boxed a:hover {
      background-color: whitesmoke;
      border-bottom-color: #dbdbdb; }
  .tabs.is-boxed li.is-active a {
    background-color: white;
    border-color: #dbdbdb;
    border-bottom-color: transparent !important; }
  .tabs.is-fullwidth li {
    flex-grow: 1;
    flex-shrink: 0; }
  .tabs.is-toggle a {
    border-color: #dbdbdb;
    border-style: solid;
    border-width: 1px;
    margin-bottom: 0;
    position: relative; }
    .tabs.is-toggle a:hover {
      background-color: whitesmoke;
      border-color: #b5b5b5;
      z-index: 2; }
  .tabs.is-toggle li + li {
    margin-left: -1px; }
  .tabs.is-toggle li:first-child a {
    border-radius: 3px 0 0 3px; }
  .tabs.is-toggle li:last-child a {
    border-radius: 0 3px 3px 0; }
  .tabs.is-toggle li.is-active a {
    background-color: #3273dc;
    border-color: #3273dc;
    color: #fff;
    z-index: 1; }
  .tabs.is-toggle ul {
    border-bottom: none; }
  .tabs.is-toggle.is-toggle-rounded li:first-child a {
    border-bottom-left-radius: 290486px;
    border-top-left-radius: 290486px;
    padding-left: 1.25em; }
  .tabs.is-toggle.is-toggle-rounded li:last-child a {
    border-bottom-right-radius: 290486px;
    border-top-right-radius: 290486px;
    padding-right: 1.25em; }
  .tabs.is-small {
    font-size: 0.75rem; }
  .tabs.is-medium {
    font-size: 1.25rem; }
  .tabs.is-large {
    font-size: 1.5rem; }

.column {
  display: block;
  flex-basis: 0;
  flex-grow: 1;
  flex-shrink: 1;
  padding: 0.75rem; }
  .columns.is-mobile > .column.is-narrow {
    flex: none; }
  .columns.is-mobile > .column.is-full {
    flex: none;
    width: 100%; }
  .columns.is-mobile > .column.is-three-quarters {
    flex: none;
    width: 75%; }
  .columns.is-mobile > .column.is-two-thirds {
    flex: none;
    width: 66.6666%; }
  .columns.is-mobile > .column.is-half {
    flex: none;
    width: 50%; }
  .columns.is-mobile > .column.is-one-third {
    flex: none;
    width: 33.3333%; }
  .columns.is-mobile > .column.is-one-quarter {
    flex: none;
    width: 25%; }
  .columns.is-mobile > .column.is-one-fifth {
    flex: none;
    width: 20%; }
  .columns.is-mobile > .column.is-two-fifths {
    flex: none;
    width: 40%; }
  .columns.is-mobile > .column.is-three-fifths {
    flex: none;
    width: 60%; }
  .columns.is-mobile > .column.is-four-fifths {
    flex: none;
    width: 80%; }
  .columns.is-mobile > .column.is-offset-three-quarters {
    margin-left: 75%; }
  .columns.is-mobile > .column.is-offset-two-thirds {
    margin-left: 66.6666%; }
  .columns.is-mobile > .column.is-offset-half {
    margin-left: 50%; }
  .columns.is-mobile > .column.is-offset-one-third {
    margin-left: 33.3333%; }
  .columns.is-mobile > .column.is-offset-one-quarter {
    margin-left: 25%; }
  .columns.is-mobile > .column.is-offset-one-fifth {
    margin-left: 20%; }
  .columns.is-mobile > .column.is-offset-two-fifths {
    margin-left: 40%; }
  .columns.is-mobile > .column.is-offset-three-fifths {
    margin-left: 60%; }
  .columns.is-mobile > .column.is-offset-four-fifths {
    margin-left: 80%; }
  .columns.is-mobile > .column.is-1 {
    flex: none;
    width: 8.3333333333%; }
  .columns.is-mobile > .column.is-offset-1 {
    margin-left: 8.3333333333%; }
  .columns.is-mobile > .column.is-2 {
    flex: none;
    width: 16.6666666667%; }
  .columns.is-mobile > .column.is-offset-2 {
    margin-left: 16.6666666667%; }
  .columns.is-mobile > .column.is-3 {
    flex: none;
    width: 25%; }
  .columns.is-mobile > .column.is-offset-3 {
    margin-left: 25%; }
  .columns.is-mobile > .column.is-4 {
    flex: none;
    width: 33.3333333333%; }
  .columns.is-mobile > .column.is-offset-4 {
    margin-left: 33.3333333333%; }
  .columns.is-mobile > .column.is-5 {
    flex: none;
    width: 41.6666666667%; }
  .columns.is-mobile > .column.is-offset-5 {
    margin-left: 41.6666666667%; }
  .columns.is-mobile > .column.is-6 {
    flex: none;
    width: 50%; }
  .columns.is-mobile > .column.is-offset-6 {
    margin-left: 50%; }
  .columns.is-mobile > .column.is-7 {
    flex: none;
    width: 58.3333333333%; }
  .columns.is-mobile > .column.is-offset-7 {
    margin-left: 58.3333333333%; }
  .columns.is-mobile > .column.is-8 {
    flex: none;
    width: 66.6666666667%; }
  .columns.is-mobile > .column.is-offset-8 {
    margin-left: 66.6666666667%; }
  .columns.is-mobile > .column.is-9 {
    flex: none;
    width: 75%; }
  .columns.is-mobile > .column.is-offset-9 {
    margin-left: 75%; }
  .columns.is-mobile > .column.is-10 {
    flex: none;
    width: 83.3333333333%; }
  .columns.is-mobile > .column.is-offset-10 {
    margin-left: 83.3333333333%; }
  .columns.is-mobile > .column.is-11 {
    flex: none;
    width: 91.6666666667%; }
  .columns.is-mobile > .column.is-offset-11 {
    margin-left: 91.6666666667%; }
  .columns.is-mobile > .column.is-12 {
    flex: none;
    width: 100%; }
  .columns.is-mobile > .column.is-offset-12 {
    margin-left: 100%; }
  @media screen and (max-width: 768px) {
    .column.is-narrow-mobile {
      flex: none; }
    .column.is-full-mobile {
      flex: none;
      width: 100%; }
    .column.is-three-quarters-mobile {
      flex: none;
      width: 75%; }
    .column.is-two-thirds-mobile {
      flex: none;
      width: 66.6666%; }
    .column.is-half-mobile {
      flex: none;
      width: 50%; }
    .column.is-one-third-mobile {
      flex: none;
      width: 33.3333%; }
    .column.is-one-quarter-mobile {
      flex: none;
      width: 25%; }
    .column.is-one-fifth-mobile {
      flex: none;
      width: 20%; }
    .column.is-two-fifths-mobile {
      flex: none;
      width: 40%; }
    .column.is-three-fifths-mobile {
      flex: none;
      width: 60%; }
    .column.is-four-fifths-mobile {
      flex: none;
      width: 80%; }
    .column.is-offset-three-quarters-mobile {
      margin-left: 75%; }
    .column.is-offset-two-thirds-mobile {
      margin-left: 66.6666%; }
    .column.is-offset-half-mobile {
      margin-left: 50%; }
    .column.is-offset-one-third-mobile {
      margin-left: 33.3333%; }
    .column.is-offset-one-quarter-mobile {
      margin-left: 25%; }
    .column.is-offset-one-fifth-mobile {
      margin-left: 20%; }
    .column.is-offset-two-fifths-mobile {
      margin-left: 40%; }
    .column.is-offset-three-fifths-mobile {
      margin-left: 60%; }
    .column.is-offset-four-fifths-mobile {
      margin-left: 80%; }
    .column.is-1-mobile {
      flex: none;
      width: 8.3333333333%; }
    .column.is-offset-1-mobile {
      margin-left: 8.3333333333%; }
    .column.is-2-mobile {
      flex: none;
      width: 16.6666666667%; }
    .column.is-offset-2-mobile {
      margin-left: 16.6666666667%; }
    .column.is-3-mobile {
      flex: none;
      width: 25%; }
    .column.is-offset-3-mobile {
      margin-left: 25%; }
    .column.is-4-mobile {
      flex: none;
      width: 33.3333333333%; }
    .column.is-offset-4-mobile {
      margin-left: 33.3333333333%; }
    .column.is-5-mobile {
      flex: none;
      width: 41.6666666667%; }
    .column.is-offset-5-mobile {
      margin-left: 41.6666666667%; }
    .column.is-6-mobile {
      flex: none;
      width: 50%; }
    .column.is-offset-6-mobile {
      margin-left: 50%; }
    .column.is-7-mobile {
      flex: none;
      width: 58.3333333333%; }
    .column.is-offset-7-mobile {
      margin-left: 58.3333333333%; }
    .column.is-8-mobile {
      flex: none;
      width: 66.6666666667%; }
    .column.is-offset-8-mobile {
      margin-left: 66.6666666667%; }
    .column.is-9-mobile {
      flex: none;
      width: 75%; }
    .column.is-offset-9-mobile {
      margin-left: 75%; }
    .column.is-10-mobile {
      flex: none;
      width: 83.3333333333%; }
    .column.is-offset-10-mobile {
      margin-left: 83.3333333333%; }
    .column.is-11-mobile {
      flex: none;
      width: 91.6666666667%; }
    .column.is-offset-11-mobile {
      margin-left: 91.6666666667%; }
    .column.is-12-mobile {
      flex: none;
      width: 100%; }
    .column.is-offset-12-mobile {
      margin-left: 100%; } }
  @media screen and (min-width: 769px), print {
    .column.is-narrow, .column.is-narrow-tablet {
      flex: none; }
    .column.is-full, .column.is-full-tablet {
      flex: none;
      width: 100%; }
    .column.is-three-quarters, .column.is-three-quarters-tablet {
      flex: none;
      width: 75%; }
    .column.is-two-thirds, .column.is-two-thirds-tablet {
      flex: none;
      width: 66.6666%; }
    .column.is-half, .column.is-half-tablet {
      flex: none;
      width: 50%; }
    .column.is-one-third, .column.is-one-third-tablet {
      flex: none;
      width: 33.3333%; }
    .column.is-one-quarter, .column.is-one-quarter-tablet {
      flex: none;
      width: 25%; }
    .column.is-one-fifth, .column.is-one-fifth-tablet {
      flex: none;
      width: 20%; }
    .column.is-two-fifths, .column.is-two-fifths-tablet {
      flex: none;
      width: 40%; }
    .column.is-three-fifths, .column.is-three-fifths-tablet {
      flex: none;
      width: 60%; }
    .column.is-four-fifths, .column.is-four-fifths-tablet {
      flex: none;
      width: 80%; }
    .column.is-offset-three-quarters, .column.is-offset-three-quarters-tablet {
      margin-left: 75%; }
    .column.is-offset-two-thirds, .column.is-offset-two-thirds-tablet {
      margin-left: 66.6666%; }
    .column.is-offset-half, .column.is-offset-half-tablet {
      margin-left: 50%; }
    .column.is-offset-one-third, .column.is-offset-one-third-tablet {
      margin-left: 33.3333%; }
    .column.is-offset-one-quarter, .column.is-offset-one-quarter-tablet {
      margin-left: 25%; }
    .column.is-offset-one-fifth, .column.is-offset-one-fifth-tablet {
      margin-left: 20%; }
    .column.is-offset-two-fifths, .column.is-offset-two-fifths-tablet {
      margin-left: 40%; }
    .column.is-offset-three-fifths, .column.is-offset-three-fifths-tablet {
      margin-left: 60%; }
    .column.is-offset-four-fifths, .column.is-offset-four-fifths-tablet {
      margin-left: 80%; }
    .column.is-1, .column.is-1-tablet {
      flex: none;
      width: 8.3333333333%; }
    .column.is-offset-1, .column.is-offset-1-tablet {
      margin-left: 8.3333333333%; }
    .column.is-2, .column.is-2-tablet {
      flex: none;
      width: 16.6666666667%; }
    .column.is-offset-2, .column.is-offset-2-tablet {
      margin-left: 16.6666666667%; }
    .column.is-3, .column.is-3-tablet {
      flex: none;
      width: 25%; }
    .column.is-offset-3, .column.is-offset-3-tablet {
      margin-left: 25%; }
    .column.is-4, .column.is-4-tablet {
      flex: none;
      width: 33.3333333333%; }
    .column.is-offset-4, .column.is-offset-4-tablet {
      margin-left: 33.3333333333%; }
    .column.is-5, .column.is-5-tablet {
      flex: none;
      width: 41.6666666667%; }
    .column.is-offset-5, .column.is-offset-5-tablet {
      margin-left: 41.6666666667%; }
    .column.is-6, .column.is-6-tablet {
      flex: none;
      width: 50%; }
    .column.is-offset-6, .column.is-offset-6-tablet {
      margin-left: 50%; }
    .column.is-7, .column.is-7-tablet {
      flex: none;
      width: 58.3333333333%; }
    .column.is-offset-7, .column.is-offset-7-tablet {
      margin-left: 58.3333333333%; }
    .column.is-8, .column.is-8-tablet {
      flex: none;
      width: 66.6666666667%; }
    .column.is-offset-8, .column.is-offset-8-tablet {
      margin-left: 66.6666666667%; }
    .column.is-9, .column.is-9-tablet {
      flex: none;
      width: 75%; }
    .column.is-offset-9, .column.is-offset-9-tablet {
      margin-left: 75%; }
    .column.is-10, .column.is-10-tablet {
      flex: none;
      width: 83.3333333333%; }
    .column.is-offset-10, .column.is-offset-10-tablet {
      margin-left: 83.3333333333%; }
    .column.is-11, .column.is-11-tablet {
      flex: none;
      width: 91.6666666667%; }
    .column.is-offset-11, .column.is-offset-11-tablet {
      margin-left: 91.6666666667%; }
    .column.is-12, .column.is-12-tablet {
      flex: none;
      width: 100%; }
    .column.is-offset-12, .column.is-offset-12-tablet {
      margin-left: 100%; } }
  @media screen and (max-width: 1023px) {
    .column.is-narrow-touch {
      flex: none; }
    .column.is-full-touch {
      flex: none;
      width: 100%; }
    .column.is-three-quarters-touch {
      flex: none;
      width: 75%; }
    .column.is-two-thirds-touch {
      flex: none;
      width: 66.6666%; }
    .column.is-half-touch {
      flex: none;
      width: 50%; }
    .column.is-one-third-touch {
      flex: none;
      width: 33.3333%; }
    .column.is-one-quarter-touch {
      flex: none;
      width: 25%; }
    .column.is-one-fifth-touch {
      flex: none;
      width: 20%; }
    .column.is-two-fifths-touch {
      flex: none;
      width: 40%; }
    .column.is-three-fifths-touch {
      flex: none;
      width: 60%; }
    .column.is-four-fifths-touch {
      flex: none;
      width: 80%; }
    .column.is-offset-three-quarters-touch {
      margin-left: 75%; }
    .column.is-offset-two-thirds-touch {
      margin-left: 66.6666%; }
    .column.is-offset-half-touch {
      margin-left: 50%; }
    .column.is-offset-one-third-touch {
      margin-left: 33.3333%; }
    .column.is-offset-one-quarter-touch {
      margin-left: 25%; }
    .column.is-offset-one-fifth-touch {
      margin-left: 20%; }
    .column.is-offset-two-fifths-touch {
      margin-left: 40%; }
    .column.is-offset-three-fifths-touch {
      margin-left: 60%; }
    .column.is-offset-four-fifths-touch {
      margin-left: 80%; }
    .column.is-1-touch {
      flex: none;
      width: 8.3333333333%; }
    .column.is-offset-1-touch {
      margin-left: 8.3333333333%; }
    .column.is-2-touch {
      flex: none;
      width: 16.6666666667%; }
    .column.is-offset-2-touch {
      margin-left: 16.6666666667%; }
    .column.is-3-touch {
      flex: none;
      width: 25%; }
    .column.is-offset-3-touch {
      margin-left: 25%; }
    .column.is-4-touch {
      flex: none;
      width: 33.3333333333%; }
    .column.is-offset-4-touch {
      margin-left: 33.3333333333%; }
    .column.is-5-touch {
      flex: none;
      width: 41.6666666667%; }
    .column.is-offset-5-touch {
      margin-left: 41.6666666667%; }
    .column.is-6-touch {
      flex: none;
      width: 50%; }
    .column.is-offset-6-touch {
      margin-left: 50%; }
    .column.is-7-touch {
      flex: none;
      width: 58.3333333333%; }
    .column.is-offset-7-touch {
      margin-left: 58.3333333333%; }
    .column.is-8-touch {
      flex: none;
      width: 66.6666666667%; }
    .column.is-offset-8-touch {
      margin-left: 66.6666666667%; }
    .column.is-9-touch {
      flex: none;
      width: 75%; }
    .column.is-offset-9-touch {
      margin-left: 75%; }
    .column.is-10-touch {
      flex: none;
      width: 83.3333333333%; }
    .column.is-offset-10-touch {
      margin-left: 83.3333333333%; }
    .column.is-11-touch {
      flex: none;
      width: 91.6666666667%; }
    .column.is-offset-11-touch {
      margin-left: 91.6666666667%; }
    .column.is-12-touch {
      flex: none;
      width: 100%; }
    .column.is-offset-12-touch {
      margin-left: 100%; } }
  @media screen and (min-width: 1024px) {
    .column.is-narrow-desktop {
      flex: none; }
    .column.is-full-desktop {
      flex: none;
      width: 100%; }
    .column.is-three-quarters-desktop {
      flex: none;
      width: 75%; }
    .column.is-two-thirds-desktop {
      flex: none;
      width: 66.6666%; }
    .column.is-half-desktop {
      flex: none;
      width: 50%; }
    .column.is-one-third-desktop {
      flex: none;
      width: 33.3333%; }
    .column.is-one-quarter-desktop {
      flex: none;
      width: 25%; }
    .column.is-one-fifth-desktop {
      flex: none;
      width: 20%; }
    .column.is-two-fifths-desktop {
      flex: none;
      width: 40%; }
    .column.is-three-fifths-desktop {
      flex: none;
      width: 60%; }
    .column.is-four-fifths-desktop {
      flex: none;
      width: 80%; }
    .column.is-offset-three-quarters-desktop {
      margin-left: 75%; }
    .column.is-offset-two-thirds-desktop {
      margin-left: 66.6666%; }
    .column.is-offset-half-desktop {
      margin-left: 50%; }
    .column.is-offset-one-third-desktop {
      margin-left: 33.3333%; }
    .column.is-offset-one-quarter-desktop {
      margin-left: 25%; }
    .column.is-offset-one-fifth-desktop {
      margin-left: 20%; }
    .column.is-offset-two-fifths-desktop {
      margin-left: 40%; }
    .column.is-offset-three-fifths-desktop {
      margin-left: 60%; }
    .column.is-offset-four-fifths-desktop {
      margin-left: 80%; }
    .column.is-1-desktop {
      flex: none;
      width: 8.3333333333%; }
    .column.is-offset-1-desktop {
      margin-left: 8.3333333333%; }
    .column.is-2-desktop {
      flex: none;
      width: 16.6666666667%; }
    .column.is-offset-2-desktop {
      margin-left: 16.6666666667%; }
    .column.is-3-desktop {
      flex: none;
      width: 25%; }
    .column.is-offset-3-desktop {
      margin-left: 25%; }
    .column.is-4-desktop {
      flex: none;
      width: 33.3333333333%; }
    .column.is-offset-4-desktop {
      margin-left: 33.3333333333%; }
    .column.is-5-desktop {
      flex: none;
      width: 41.6666666667%; }
    .column.is-offset-5-desktop {
      margin-left: 41.6666666667%; }
    .column.is-6-desktop {
      flex: none;
      width: 50%; }
    .column.is-offset-6-desktop {
      margin-left: 50%; }
    .column.is-7-desktop {
      flex: none;
      width: 58.3333333333%; }
    .column.is-offset-7-desktop {
      margin-left: 58.3333333333%; }
    .column.is-8-desktop {
      flex: none;
      width: 66.6666666667%; }
    .column.is-offset-8-desktop {
      margin-left: 66.6666666667%; }
    .column.is-9-desktop {
      flex: none;
      width: 75%; }
    .column.is-offset-9-desktop {
      margin-left: 75%; }
    .column.is-10-desktop {
      flex: none;
      width: 83.3333333333%; }
    .column.is-offset-10-desktop {
      margin-left: 83.3333333333%; }
    .column.is-11-desktop {
      flex: none;
      width: 91.6666666667%; }
    .column.is-offset-11-desktop {
      margin-left: 91.6666666667%; }
    .column.is-12-desktop {
      flex: none;
      width: 100%; }
    .column.is-offset-12-desktop {
      margin-left: 100%; } }
  @media screen and (min-width: 1216px) {
    .column.is-narrow-widescreen {
      flex: none; }
    .column.is-full-widescreen {
      flex: none;
      width: 100%; }
    .column.is-three-quarters-widescreen {
      flex: none;
      width: 75%; }
    .column.is-two-thirds-widescreen {
      flex: none;
      width: 66.6666%; }
    .column.is-half-widescreen {
      flex: none;
      width: 50%; }
    .column.is-one-third-widescreen {
      flex: none;
      width: 33.3333%; }
    .column.is-one-quarter-widescreen {
      flex: none;
      width: 25%; }
    .column.is-one-fifth-widescreen {
      flex: none;
      width: 20%; }
    .column.is-two-fifths-widescreen {
      flex: none;
      width: 40%; }
    .column.is-three-fifths-widescreen {
      flex: none;
      width: 60%; }
    .column.is-four-fifths-widescreen {
      flex: none;
      width: 80%; }
    .column.is-offset-three-quarters-widescreen {
      margin-left: 75%; }
    .column.is-offset-two-thirds-widescreen {
      margin-left: 66.6666%; }
    .column.is-offset-half-widescreen {
      margin-left: 50%; }
    .column.is-offset-one-third-widescreen {
      margin-left: 33.3333%; }
    .column.is-offset-one-quarter-widescreen {
      margin-left: 25%; }
    .column.is-offset-one-fifth-widescreen {
      margin-left: 20%; }
    .column.is-offset-two-fifths-widescreen {
      margin-left: 40%; }
    .column.is-offset-three-fifths-widescreen {
      margin-left: 60%; }
    .column.is-offset-four-fifths-widescreen {
      margin-left: 80%; }
    .column.is-1-widescreen {
      flex: none;
      width: 8.3333333333%; }
    .column.is-offset-1-widescreen {
      margin-left: 8.3333333333%; }
    .column.is-2-widescreen {
      flex: none;
      width: 16.6666666667%; }
    .column.is-offset-2-widescreen {
      margin-left: 16.6666666667%; }
    .column.is-3-widescreen {
      flex: none;
      width: 25%; }
    .column.is-offset-3-widescreen {
      margin-left: 25%; }
    .column.is-4-widescreen {
      flex: none;
      width: 33.3333333333%; }
    .column.is-offset-4-widescreen {
      margin-left: 33.3333333333%; }
    .column.is-5-widescreen {
      flex: none;
      width: 41.6666666667%; }
    .column.is-offset-5-widescreen {
      margin-left: 41.6666666667%; }
    .column.is-6-widescreen {
      flex: none;
      width: 50%; }
    .column.is-offset-6-widescreen {
      margin-left: 50%; }
    .column.is-7-widescreen {
      flex: none;
      width: 58.3333333333%; }
    .column.is-offset-7-widescreen {
      margin-left: 58.3333333333%; }
    .column.is-8-widescreen {
      flex: none;
      width: 66.6666666667%; }
    .column.is-offset-8-widescreen {
      margin-left: 66.6666666667%; }
    .column.is-9-widescreen {
      flex: none;
      width: 75%; }
    .column.is-offset-9-widescreen {
      margin-left: 75%; }
    .column.is-10-widescreen {
      flex: none;
      width: 83.3333333333%; }
    .column.is-offset-10-widescreen {
      margin-left: 83.3333333333%; }
    .column.is-11-widescreen {
      flex: none;
      width: 91.6666666667%; }
    .column.is-offset-11-widescreen {
      margin-left: 91.6666666667%; }
    .column.is-12-widescreen {
      flex: none;
      width: 100%; }
    .column.is-offset-12-widescreen {
      margin-left: 100%; } }
  @media screen and (min-width: 1408px) {
    .column.is-narrow-fullhd {
      flex: none; }
    .column.is-full-fullhd {
      flex: none;
      width: 100%; }
    .column.is-three-quarters-fullhd {
      flex: none;
      width: 75%; }
    .column.is-two-thirds-fullhd {
      flex: none;
      width: 66.6666%; }
    .column.is-half-fullhd {
      flex: none;
      width: 50%; }
    .column.is-one-third-fullhd {
      flex: none;
      width: 33.3333%; }
    .column.is-one-quarter-fullhd {
      flex: none;
      width: 25%; }
    .column.is-one-fifth-fullhd {
      flex: none;
      width: 20%; }
    .column.is-two-fifths-fullhd {
      flex: none;
      width: 40%; }
    .column.is-three-fifths-fullhd {
      flex: none;
      width: 60%; }
    .column.is-four-fifths-fullhd {
      flex: none;
      width: 80%; }
    .column.is-offset-three-quarters-fullhd {
      margin-left: 75%; }
    .column.is-offset-two-thirds-fullhd {
      margin-left: 66.6666%; }
    .column.is-offset-half-fullhd {
      margin-left: 50%; }
    .column.is-offset-one-third-fullhd {
      margin-left: 33.3333%; }
    .column.is-offset-one-quarter-fullhd {
      margin-left: 25%; }
    .column.is-offset-one-fifth-fullhd {
      margin-left: 20%; }
    .column.is-offset-two-fifths-fullhd {
      margin-left: 40%; }
    .column.is-offset-three-fifths-fullhd {
      margin-left: 60%; }
    .column.is-offset-four-fifths-fullhd {
      margin-left: 80%; }
    .column.is-1-fullhd {
      flex: none;
      width: 8.3333333333%; }
    .column.is-offset-1-fullhd {
      margin-left: 8.3333333333%; }
    .column.is-2-fullhd {
      flex: none;
      width: 16.6666666667%; }
    .column.is-offset-2-fullhd {
      margin-left: 16.6666666667%; }
    .column.is-3-fullhd {
      flex: none;
      width: 25%; }
    .column.is-offset-3-fullhd {
      margin-left: 25%; }
    .column.is-4-fullhd {
      flex: none;
      width: 33.3333333333%; }
    .column.is-offset-4-fullhd {
      margin-left: 33.3333333333%; }
    .column.is-5-fullhd {
      flex: none;
      width: 41.6666666667%; }
    .column.is-offset-5-fullhd {
      margin-left: 41.6666666667%; }
    .column.is-6-fullhd {
      flex: none;
      width: 50%; }
    .column.is-offset-6-fullhd {
      margin-left: 50%; }
    .column.is-7-fullhd {
      flex: none;
      width: 58.3333333333%; }
    .column.is-offset-7-fullhd {
      margin-left: 58.3333333333%; }
    .column.is-8-fullhd {
      flex: none;
      width: 66.6666666667%; }
    .column.is-offset-8-fullhd {
      margin-left: 66.6666666667%; }
    .column.is-9-fullhd {
      flex: none;
      width: 75%; }
    .column.is-offset-9-fullhd {
      margin-left: 75%; }
    .column.is-10-fullhd {
      flex: none;
      width: 83.3333333333%; }
    .column.is-offset-10-fullhd {
      margin-left: 83.3333333333%; }
    .column.is-11-fullhd {
      flex: none;
      width: 91.6666666667%; }
    .column.is-offset-11-fullhd {
      margin-left: 91.6666666667%; }
    .column.is-12-fullhd {
      flex: none;
      width: 100%; }
    .column.is-offset-12-fullhd {
      margin-left: 100%; } }

.columns {
  margin-left: -0.75rem;
  margin-right: -0.75rem;
  margin-top: -0.75rem; }
  .columns:last-child {
    margin-bottom: -0.75rem; }
  .columns:not(:last-child) {
    margin-bottom: calc(1.5rem - 0.75rem); }
  .columns.is-centered {
    justify-content: center; }
  .columns.is-gapless {
    margin-left: 0;
    margin-right: 0;
    margin-top: 0; }
    .columns.is-gapless > .column {
      margin: 0;
      padding: 0 !important; }
    .columns.is-gapless:not(:last-child) {
      margin-bottom: 1.5rem; }
    .columns.is-gapless:last-child {
      margin-bottom: 0; }
  .columns.is-mobile {
    display: flex; }
  .columns.is-multiline {
    flex-wrap: wrap; }
  .columns.is-vcentered {
    align-items: center; }
  @media screen and (min-width: 769px), print {
    .columns:not(.is-desktop) {
      display: flex; } }
  @media screen and (min-width: 1024px) {
    .columns.is-desktop {
      display: flex; } }

.columns.is-variable {
  --columnGap: 0.75rem;
  margin-left: calc(-1 * var(--columnGap));
  margin-right: calc(-1 * var(--columnGap)); }
  .columns.is-variable .column {
    padding-left: var(--columnGap);
    padding-right: var(--columnGap); }
  .columns.is-variable.is-0 {
    --columnGap: 0rem; }
  .columns.is-variable.is-1 {
    --columnGap: 0.25rem; }
  .columns.is-variable.is-2 {
    --columnGap: 0.5rem; }
  .columns.is-variable.is-3 {
    --columnGap: 0.75rem; }
  .columns.is-variable.is-4 {
    --columnGap: 1rem; }
  .columns.is-variable.is-5 {
    --columnGap: 1.25rem; }
  .columns.is-variable.is-6 {
    --columnGap: 1.5rem; }
  .columns.is-variable.is-7 {
    --columnGap: 1.75rem; }
  .columns.is-variable.is-8 {
    --columnGap: 2rem; }

.tile {
  align-items: stretch;
  display: block;
  flex-basis: 0;
  flex-grow: 1;
  flex-shrink: 1;
  min-height: min-content; }
  .tile.is-ancestor {
    margin-left: -0.75rem;
    margin-right: -0.75rem;
    margin-top: -0.75rem; }
    .tile.is-ancestor:last-child {
      margin-bottom: -0.75rem; }
    .tile.is-ancestor:not(:last-child) {
      margin-bottom: 0.75rem; }
  .tile.is-child {
    margin: 0 !important; }
  .tile.is-parent {
    padding: 0.75rem; }
  .tile.is-vertical {
    flex-direction: column; }
    .tile.is-vertical > .tile.is-child:not(:last-child) {
      margin-bottom: 1.5rem !important; }
  @media screen and (min-width: 769px), print {
    .tile:not(.is-child) {
      display: flex; }
    .tile.is-1 {
      flex: none;
      width: 8.3333333333%; }
    .tile.is-2 {
      flex: none;
      width: 16.6666666667%; }
    .tile.is-3 {
      flex: none;
      width: 25%; }
    .tile.is-4 {
      flex: none;
      width: 33.3333333333%; }
    .tile.is-5 {
      flex: none;
      width: 41.6666666667%; }
    .tile.is-6 {
      flex: none;
      width: 50%; }
    .tile.is-7 {
      flex: none;
      width: 58.3333333333%; }
    .tile.is-8 {
      flex: none;
      width: 66.6666666667%; }
    .tile.is-9 {
      flex: none;
      width: 75%; }
    .tile.is-10 {
      flex: none;
      width: 83.3333333333%; }
    .tile.is-11 {
      flex: none;
      width: 91.6666666667%; }
    .tile.is-12 {
      flex: none;
      width: 100%; } }

.hero {
  align-items: stretch;
  display: flex;
  flex-direction: column;
  justify-content: space-between; }
  .hero .navbar {
    background: none; }
  .hero .tabs ul {
    border-bottom: none; }
  .hero.is-white {
    background-color: white;
    color: #0a0a0a; }
    .hero.is-white a:not(.button):not(.dropdown-item):not(.tag),
    .hero.is-white strong {
      color: inherit; }
    .hero.is-white .title {
      color: #0a0a0a; }
    .hero.is-white .subtitle {
      color: rgba(10, 10, 10, 0.9); }
      .hero.is-white .subtitle a:not(.button),
      .hero.is-white .subtitle strong {
        color: #0a0a0a; }
    @media screen and (max-width: 1023px) {
      .hero.is-white .navbar-menu {
        background-color: white; } }
    .hero.is-white .navbar-item,
    .hero.is-white .navbar-link {
      color: rgba(10, 10, 10, 0.7); }
    .hero.is-white a.navbar-item:hover, .hero.is-white a.navbar-item.is-active,
    .hero.is-white .navbar-link:hover,
    .hero.is-white .navbar-link.is-active {
      background-color: #f2f2f2;
      color: #0a0a0a; }
    .hero.is-white .tabs a {
      color: #0a0a0a;
      opacity: 0.9; }
      .hero.is-white .tabs a:hover {
        opacity: 1; }
    .hero.is-white .tabs li.is-active a {
      opacity: 1; }
    .hero.is-white .tabs.is-boxed a, .hero.is-white .tabs.is-toggle a {
      color: #0a0a0a; }
      .hero.is-white .tabs.is-boxed a:hover, .hero.is-white .tabs.is-toggle a:hover {
        background-color: rgba(10, 10, 10, 0.1); }
    .hero.is-white .tabs.is-boxed li.is-active a, .hero.is-white .tabs.is-boxed li.is-active a:hover, .hero.is-white .tabs.is-toggle li.is-active a, .hero.is-white .tabs.is-toggle li.is-active a:hover {
      background-color: #0a0a0a;
      border-color: #0a0a0a;
      color: white; }
    .hero.is-white.is-bold {
      background-image: linear-gradient(141deg, #e8e3e4 0%, white 71%, white 100%); }
      @media screen and (max-width: 768px) {
        .hero.is-white.is-bold .navbar-menu {
          background-image: linear-gradient(141deg, #e8e3e4 0%, white 71%, white 100%); } }
  .hero.is-black {
    background-color: #0a0a0a;
    color: white; }
    .hero.is-black a:not(.button):not(.dropdown-item):not(.tag),
    .hero.is-black strong {
      color: inherit; }
    .hero.is-black .title {
      color: white; }
    .hero.is-black .subtitle {
      color: rgba(255, 255, 255, 0.9); }
      .hero.is-black .subtitle a:not(.button),
      .hero.is-black .subtitle strong {
        color: white; }
    @media screen and (max-width: 1023px) {
      .hero.is-black .navbar-menu {
        background-color: #0a0a0a; } }
    .hero.is-black .navbar-item,
    .hero.is-black .navbar-link {
      color: rgba(255, 255, 255, 0.7); }
    .hero.is-black a.navbar-item:hover, .hero.is-black a.navbar-item.is-active,
    .hero.is-black .navbar-link:hover,
    .hero.is-black .navbar-link.is-active {
      background-color: black;
      color: white; }
    .hero.is-black .tabs a {
      color: white;
      opacity: 0.9; }
      .hero.is-black .tabs a:hover {
        opacity: 1; }
    .hero.is-black .tabs li.is-active a {
      opacity: 1; }
    .hero.is-black .tabs.is-boxed a, .hero.is-black .tabs.is-toggle a {
      color: white; }
      .hero.is-black .tabs.is-boxed a:hover, .hero.is-black .tabs.is-toggle a:hover {
        background-color: rgba(10, 10, 10, 0.1); }
    .hero.is-black .tabs.is-boxed li.is-active a, .hero.is-black .tabs.is-boxed li.is-active a:hover, .hero.is-black .tabs.is-toggle li.is-active a, .hero.is-black .tabs.is-toggle li.is-active a:hover {
      background-color: white;
      border-color: white;
      color: #0a0a0a; }
    .hero.is-black.is-bold {
      background-image: linear-gradient(141deg, black 0%, #0a0a0a 71%, #181616 100%); }
      @media screen and (max-width: 768px) {
        .hero.is-black.is-bold .navbar-menu {
          background-image: linear-gradient(141deg, black 0%, #0a0a0a 71%, #181616 100%); } }
  .hero.is-light {
    background-color: whitesmoke;
    color: #363636; }
    .hero.is-light a:not(.button):not(.dropdown-item):not(.tag),
    .hero.is-light strong {
      color: inherit; }
    .hero.is-light .title {
      color: #363636; }
    .hero.is-light .subtitle {
      color: rgba(54, 54, 54, 0.9); }
      .hero.is-light .subtitle a:not(.button),
      .hero.is-light .subtitle strong {
        color: #363636; }
    @media screen and (max-width: 1023px) {
      .hero.is-light .navbar-menu {
        background-color: whitesmoke; } }
    .hero.is-light .navbar-item,
    .hero.is-light .navbar-link {
      color: rgba(54, 54, 54, 0.7); }
    .hero.is-light a.navbar-item:hover, .hero.is-light a.navbar-item.is-active,
    .hero.is-light .navbar-link:hover,
    .hero.is-light .navbar-link.is-active {
      background-color: #e8e8e8;
      color: #363636; }
    .hero.is-light .tabs a {
      color: #363636;
      opacity: 0.9; }
      .hero.is-light .tabs a:hover {
        opacity: 1; }
    .hero.is-light .tabs li.is-active a {
      opacity: 1; }
    .hero.is-light .tabs.is-boxed a, .hero.is-light .tabs.is-toggle a {
      color: #363636; }
      .hero.is-light .tabs.is-boxed a:hover, .hero.is-light .tabs.is-toggle a:hover {
        background-color: rgba(10, 10, 10, 0.1); }
    .hero.is-light .tabs.is-boxed li.is-active a, .hero.is-light .tabs.is-boxed li.is-active a:hover, .hero.is-light .tabs.is-toggle li.is-active a, .hero.is-light .tabs.is-toggle li.is-active a:hover {
      background-color: #363636;
      border-color: #363636;
      color: whitesmoke; }
    .hero.is-light.is-bold {
      background-image: linear-gradient(141deg, #dfd8d9 0%, whitesmoke 71%, white 100%); }
      @media screen and (max-width: 768px) {
        .hero.is-light.is-bold .navbar-menu {
          background-image: linear-gradient(141deg, #dfd8d9 0%, whitesmoke 71%, white 100%); } }
  .hero.is-dark {
    background-color: #363636;
    color: whitesmoke; }
    .hero.is-dark a:not(.button):not(.dropdown-item):not(.tag),
    .hero.is-dark strong {
      color: inherit; }
    .hero.is-dark .title {
      color: whitesmoke; }
    .hero.is-dark .subtitle {
      color: rgba(245, 245, 245, 0.9); }
      .hero.is-dark .subtitle a:not(.button),
      .hero.is-dark .subtitle strong {
        color: whitesmoke; }
    @media screen and (max-width: 1023px) {
      .hero.is-dark .navbar-menu {
        background-color: #363636; } }
    .hero.is-dark .navbar-item,
    .hero.is-dark .navbar-link {
      color: rgba(245, 245, 245, 0.7); }
    .hero.is-dark a.navbar-item:hover, .hero.is-dark a.navbar-item.is-active,
    .hero.is-dark .navbar-link:hover,
    .hero.is-dark .navbar-link.is-active {
      background-color: #292929;
      color: whitesmoke; }
    .hero.is-dark .tabs a {
      color: whitesmoke;
      opacity: 0.9; }
      .hero.is-dark .tabs a:hover {
        opacity: 1; }
    .hero.is-dark .tabs li.is-active a {
      opacity: 1; }
    .hero.is-dark .tabs.is-boxed a, .hero.is-dark .tabs.is-toggle a {
      color: whitesmoke; }
      .hero.is-dark .tabs.is-boxed a:hover, .hero.is-dark .tabs.is-toggle a:hover {
        background-color: rgba(10, 10, 10, 0.1); }
    .hero.is-dark .tabs.is-boxed li.is-active a, .hero.is-dark .tabs.is-boxed li.is-active a:hover, .hero.is-dark .tabs.is-toggle li.is-active a, .hero.is-dark .tabs.is-toggle li.is-active a:hover {
      background-color: whitesmoke;
      border-color: whitesmoke;
      color: #363636; }
    .hero.is-dark.is-bold {
      background-image: linear-gradient(141deg, #1f191a 0%, #363636 71%, #46403f 100%); }
      @media screen and (max-width: 768px) {
        .hero.is-dark.is-bold .navbar-menu {
          background-image: linear-gradient(141deg, #1f191a 0%, #363636 71%, #46403f 100%); } }
  .hero.is-primary {
    background-color: #00d1b2;
    color: #fff; }
    .hero.is-primary a:not(.button):not(.dropdown-item):not(.tag),
    .hero.is-primary strong {
      color: inherit; }
    .hero.is-primary .title {
      color: #fff; }
    .hero.is-primary .subtitle {
      color: rgba(255, 255, 255, 0.9); }
      .hero.is-primary .subtitle a:not(.button),
      .hero.is-primary .subtitle strong {
        color: #fff; }
    @media screen and (max-width: 1023px) {
      .hero.is-primary .navbar-menu {
        background-color: #00d1b2; } }
    .hero.is-primary .navbar-item,
    .hero.is-primary .navbar-link {
      color: rgba(255, 255, 255, 0.7); }
    .hero.is-primary a.navbar-item:hover, .hero.is-primary a.navbar-item.is-active,
    .hero.is-primary .navbar-link:hover,
    .hero.is-primary .navbar-link.is-active {
      background-color: #00b89c;
      color: #fff; }
    .hero.is-primary .tabs a {
      color: #fff;
      opacity: 0.9; }
      .hero.is-primary .tabs a:hover {
        opacity: 1; }
    .hero.is-primary .tabs li.is-active a {
      opacity: 1; }
    .hero.is-primary .tabs.is-boxed a, .hero.is-primary .tabs.is-toggle a {
      color: #fff; }
      .hero.is-primary .tabs.is-boxed a:hover, .hero.is-primary .tabs.is-toggle a:hover {
        background-color: rgba(10, 10, 10, 0.1); }
    .hero.is-primary .tabs.is-boxed li.is-active a, .hero.is-primary .tabs.is-boxed li.is-active a:hover, .hero.is-primary .tabs.is-toggle li.is-active a, .hero.is-primary .tabs.is-toggle li.is-active a:hover {
      background-color: #fff;
      border-color: #fff;
      color: #00d1b2; }
    .hero.is-primary.is-bold {
      background-image: linear-gradient(141deg, #009e6c 0%, #00d1b2 71%, #00e7eb 100%); }
      @media screen and (max-width: 768px) {
        .hero.is-primary.is-bold .navbar-menu {
          background-image: linear-gradient(141deg, #009e6c 0%, #00d1b2 71%, #00e7eb 100%); } }
  .hero.is-link {
    background-color: #3273dc;
    color: #fff; }
    .hero.is-link a:not(.button):not(.dropdown-item):not(.tag),
    .hero.is-link strong {
      color: inherit; }
    .hero.is-link .title {
      color: #fff; }
    .hero.is-link .subtitle {
      color: rgba(255, 255, 255, 0.9); }
      .hero.is-link .subtitle a:not(.button),
      .hero.is-link .subtitle strong {
        color: #fff; }
    @media screen and (max-width: 1023px) {
      .hero.is-link .navbar-menu {
        background-color: #3273dc; } }
    .hero.is-link .navbar-item,
    .hero.is-link .navbar-link {
      color: rgba(255, 255, 255, 0.7); }
    .hero.is-link a.navbar-item:hover, .hero.is-link a.navbar-item.is-active,
    .hero.is-link .navbar-link:hover,
    .hero.is-link .navbar-link.is-active {
      background-color: #2366d1;
      color: #fff; }
    .hero.is-link .tabs a {
      color: #fff;
      opacity: 0.9; }
      .hero.is-link .tabs a:hover {
        opacity: 1; }
    .hero.is-link .tabs li.is-active a {
      opacity: 1; }
    .hero.is-link .tabs.is-boxed a, .hero.is-link .tabs.is-toggle a {
      color: #fff; }
      .hero.is-link .tabs.is-boxed a:hover, .hero.is-link .tabs.is-toggle a:hover {
        background-color: rgba(10, 10, 10, 0.1); }
    .hero.is-link .tabs.is-boxed li.is-active a, .hero.is-link .tabs.is-boxed li.is-active a:hover, .hero.is-link .tabs.is-toggle li.is-active a, .hero.is-link .tabs.is-toggle li.is-active a:hover {
      background-color: #fff;
      border-color: #fff;
      color: #3273dc; }
    .hero.is-link.is-bold {
      background-image: linear-gradient(141deg, #1577c6 0%, #3273dc 71%, #4366e5 100%); }
      @media screen and (max-width: 768px) {
        .hero.is-link.is-bold .navbar-menu {
          background-image: linear-gradient(141deg, #1577c6 0%, #3273dc 71%, #4366e5 100%); } }
  .hero.is-info {
    background-color: #209cee;
    color: #fff; }
    .hero.is-info a:not(.button):not(.dropdown-item):not(.tag),
    .hero.is-info strong {
      color: inherit; }
    .hero.is-info .title {
      color: #fff; }
    .hero.is-info .subtitle {
      color: rgba(255, 255, 255, 0.9); }
      .hero.is-info .subtitle a:not(.button),
      .hero.is-info .subtitle strong {
        color: #fff; }
    @media screen and (max-width: 1023px) {
      .hero.is-info .navbar-menu {
        background-color: #209cee; } }
    .hero.is-info .navbar-item,
    .hero.is-info .navbar-link {
      color: rgba(255, 255, 255, 0.7); }
    .hero.is-info a.navbar-item:hover, .hero.is-info a.navbar-item.is-active,
    .hero.is-info .navbar-link:hover,
    .hero.is-info .navbar-link.is-active {
      background-color: #118fe4;
      color: #fff; }
    .hero.is-info .tabs a {
      color: #fff;
      opacity: 0.9; }
      .hero.is-info .tabs a:hover {
        opacity: 1; }
    .hero.is-info .tabs li.is-active a {
      opacity: 1; }
    .hero.is-info .tabs.is-boxed a, .hero.is-info .tabs.is-toggle a {
      color: #fff; }
      .hero.is-info .tabs.is-boxed a:hover, .hero.is-info .tabs.is-toggle a:hover {
        background-color: rgba(10, 10, 10, 0.1); }
    .hero.is-info .tabs.is-boxed li.is-active a, .hero.is-info .tabs.is-boxed li.is-active a:hover, .hero.is-info .tabs.is-toggle li.is-active a, .hero.is-info .tabs.is-toggle li.is-active a:hover {
      background-color: #fff;
      border-color: #fff;
      color: #209cee; }
    .hero.is-info.is-bold {
      background-image: linear-gradient(141deg, #04a6d7 0%, #209cee 71%, #3287f5 100%); }
      @media screen and (max-width: 768px) {
        .hero.is-info.is-bold .navbar-menu {
          background-image: linear-gradient(141deg, #04a6d7 0%, #209cee 71%, #3287f5 100%); } }
  .hero.is-success {
    background-color: #23d160;
    color: #fff; }
    .hero.is-success a:not(.button):not(.dropdown-item):not(.tag),
    .hero.is-success strong {
      color: inherit; }
    .hero.is-success .title {
      color: #fff; }
    .hero.is-success .subtitle {
      color: rgba(255, 255, 255, 0.9); }
      .hero.is-success .subtitle a:not(.button),
      .hero.is-success .subtitle strong {
        color: #fff; }
    @media screen and (max-width: 1023px) {
      .hero.is-success .navbar-menu {
        background-color: #23d160; } }
    .hero.is-success .navbar-item,
    .hero.is-success .navbar-link {
      color: rgba(255, 255, 255, 0.7); }
    .hero.is-success a.navbar-item:hover, .hero.is-success a.navbar-item.is-active,
    .hero.is-success .navbar-link:hover,
    .hero.is-success .navbar-link.is-active {
      background-color: #20bc56;
      color: #fff; }
    .hero.is-success .tabs a {
      color: #fff;
      opacity: 0.9; }
      .hero.is-success .tabs a:hover {
        opacity: 1; }
    .hero.is-success .tabs li.is-active a {
      opacity: 1; }
    .hero.is-success .tabs.is-boxed a, .hero.is-success .tabs.is-toggle a {
      color: #fff; }
      .hero.is-success .tabs.is-boxed a:hover, .hero.is-success .tabs.is-toggle a:hover {
        background-color: rgba(10, 10, 10, 0.1); }
    .hero.is-success .tabs.is-boxed li.is-active a, .hero.is-success .tabs.is-boxed li.is-active a:hover, .hero.is-success .tabs.is-toggle li.is-active a, .hero.is-success .tabs.is-toggle li.is-active a:hover {
      background-color: #fff;
      border-color: #fff;
      color: #23d160; }
    .hero.is-success.is-bold {
      background-image: linear-gradient(141deg, #12af2f 0%, #23d160 71%, #2ce28a 100%); }
      @media screen and (max-width: 768px) {
        .hero.is-success.is-bold .navbar-menu {
          background-image: linear-gradient(141deg, #12af2f 0%, #23d160 71%, #2ce28a 100%); } }
  .hero.is-warning {
    background-color: #ffdd57;
    color: rgba(0, 0, 0, 0.7); }
    .hero.is-warning a:not(.button):not(.dropdown-item):not(.tag),
    .hero.is-warning strong {
      color: inherit; }
    .hero.is-warning .title {
      color: rgba(0, 0, 0, 0.7); }
    .hero.is-warning .subtitle {
      color: rgba(0, 0, 0, 0.9); }
      .hero.is-warning .subtitle a:not(.button),
      .hero.is-warning .subtitle strong {
        color: rgba(0, 0, 0, 0.7); }
    @media screen and (max-width: 1023px) {
      .hero.is-warning .navbar-menu {
        background-color: #ffdd57; } }
    .hero.is-warning .navbar-item,
    .hero.is-warning .navbar-link {
      color: rgba(0, 0, 0, 0.7); }
    .hero.is-warning a.navbar-item:hover, .hero.is-warning a.navbar-item.is-active,
    .hero.is-warning .navbar-link:hover,
    .hero.is-warning .navbar-link.is-active {
      background-color: #ffd83d;
      color: rgba(0, 0, 0, 0.7); }
    .hero.is-warning .tabs a {
      color: rgba(0, 0, 0, 0.7);
      opacity: 0.9; }
      .hero.is-warning .tabs a:hover {
        opacity: 1; }
    .hero.is-warning .tabs li.is-active a {
      opacity: 1; }
    .hero.is-warning .tabs.is-boxed a, .hero.is-warning .tabs.is-toggle a {
      color: rgba(0, 0, 0, 0.7); }
      .hero.is-warning .tabs.is-boxed a:hover, .hero.is-warning .tabs.is-toggle a:hover {
        background-color: rgba(10, 10, 10, 0.1); }
    .hero.is-warning .tabs.is-boxed li.is-active a, .hero.is-warning .tabs.is-boxed li.is-active a:hover, .hero.is-warning .tabs.is-toggle li.is-active a, .hero.is-warning .tabs.is-toggle li.is-active a:hover {
      background-color: rgba(0, 0, 0, 0.7);
      border-color: rgba(0, 0, 0, 0.7);
      color: #ffdd57; }
    .hero.is-warning.is-bold {
      background-image: linear-gradient(141deg, #ffaf24 0%, #ffdd57 71%, #fffa70 100%); }
      @media screen and (max-width: 768px) {
        .hero.is-warning.is-bold .navbar-menu {
          background-image: linear-gradient(141deg, #ffaf24 0%, #ffdd57 71%, #fffa70 100%); } }
  .hero.is-danger {
    background-color: #ff3860;
    color: #fff; }
    .hero.is-danger a:not(.button):not(.dropdown-item):not(.tag),
    .hero.is-danger strong {
      color: inherit; }
    .hero.is-danger .title {
      color: #fff; }
    .hero.is-danger .subtitle {
      color: rgba(255, 255, 255, 0.9); }
      .hero.is-danger .subtitle a:not(.button),
      .hero.is-danger .subtitle strong {
        color: #fff; }
    @media screen and (max-width: 1023px) {
      .hero.is-danger .navbar-menu {
        background-color: #ff3860; } }
    .hero.is-danger .navbar-item,
    .hero.is-danger .navbar-link {
      color: rgba(255, 255, 255, 0.7); }
    .hero.is-danger a.navbar-item:hover, .hero.is-danger a.navbar-item.is-active,
    .hero.is-danger .navbar-link:hover,
    .hero.is-danger .navbar-link.is-active {
      background-color: #ff1f4b;
      color: #fff; }
    .hero.is-danger .tabs a {
      color: #fff;
      opacity: 0.9; }
      .hero.is-danger .tabs a:hover {
        opacity: 1; }
    .hero.is-danger .tabs li.is-active a {
      opacity: 1; }
    .hero.is-danger .tabs.is-boxed a, .hero.is-danger .tabs.is-toggle a {
      color: #fff; }
      .hero.is-danger .tabs.is-boxed a:hover, .hero.is-danger .tabs.is-toggle a:hover {
        background-color: rgba(10, 10, 10, 0.1); }
    .hero.is-danger .tabs.is-boxed li.is-active a, .hero.is-danger .tabs.is-boxed li.is-active a:hover, .hero.is-danger .tabs.is-toggle li.is-active a, .hero.is-danger .tabs.is-toggle li.is-active a:hover {
      background-color: #fff;
      border-color: #fff;
      color: #ff3860; }
    .hero.is-danger.is-bold {
      background-image: linear-gradient(141deg, #ff0561 0%, #ff3860 71%, #ff5257 100%); }
      @media screen and (max-width: 768px) {
        .hero.is-danger.is-bold .navbar-menu {
          background-image: linear-gradient(141deg, #ff0561 0%, #ff3860 71%, #ff5257 100%); } }
  .hero.is-eben {
    background-color: #f85800;
    color: #fff; }
    .hero.is-eben a:not(.button):not(.dropdown-item):not(.tag),
    .hero.is-eben strong {
      color: inherit; }
    .hero.is-eben .title {
      color: #fff; }
    .hero.is-eben .subtitle {
      color: rgba(255, 255, 255, 0.9); }
      .hero.is-eben .subtitle a:not(.button),
      .hero.is-eben .subtitle strong {
        color: #fff; }
    @media screen and (max-width: 1023px) {
      .hero.is-eben .navbar-menu {
        background-color: #f85800; } }
    .hero.is-eben .navbar-item,
    .hero.is-eben .navbar-link {
      color: rgba(255, 255, 255, 0.7); }
    .hero.is-eben a.navbar-item:hover, .hero.is-eben a.navbar-item.is-active,
    .hero.is-eben .navbar-link:hover,
    .hero.is-eben .navbar-link.is-active {
      background-color: #df4f00;
      color: #fff; }
    .hero.is-eben .tabs a {
      color: #fff;
      opacity: 0.9; }
      .hero.is-eben .tabs a:hover {
        opacity: 1; }
    .hero.is-eben .tabs li.is-active a {
      opacity: 1; }
    .hero.is-eben .tabs.is-boxed a, .hero.is-eben .tabs.is-toggle a {
      color: #fff; }
      .hero.is-eben .tabs.is-boxed a:hover, .hero.is-eben .tabs.is-toggle a:hover {
        background-color: rgba(10, 10, 10, 0.1); }
    .hero.is-eben .tabs.is-boxed li.is-active a, .hero.is-eben .tabs.is-boxed li.is-active a:hover, .hero.is-eben .tabs.is-toggle li.is-active a, .hero.is-eben .tabs.is-toggle li.is-active a:hover {
      background-color: #fff;
      border-color: #fff;
      color: #f85800; }
    .hero.is-eben.is-bold {
      background-image: linear-gradient(141deg, #c52500 0%, #f85800 71%, #ff8e13 100%); }
      @media screen and (max-width: 768px) {
        .hero.is-eben.is-bold .navbar-menu {
          background-image: linear-gradient(141deg, #c52500 0%, #f85800 71%, #ff8e13 100%); } }
  .hero.is-eben-blue {
    background-color: #4bb3e6;
    color: #fff; }
    .hero.is-eben-blue a:not(.button):not(.dropdown-item):not(.tag),
    .hero.is-eben-blue strong {
      color: inherit; }
    .hero.is-eben-blue .title {
      color: #fff; }
    .hero.is-eben-blue .subtitle {
      color: rgba(255, 255, 255, 0.9); }
      .hero.is-eben-blue .subtitle a:not(.button),
      .hero.is-eben-blue .subtitle strong {
        color: #fff; }
    @media screen and (max-width: 1023px) {
      .hero.is-eben-blue .navbar-menu {
        background-color: #4bb3e6; } }
    .hero.is-eben-blue .navbar-item,
    .hero.is-eben-blue .navbar-link {
      color: rgba(255, 255, 255, 0.7); }
    .hero.is-eben-blue a.navbar-item:hover, .hero.is-eben-blue a.navbar-item.is-active,
    .hero.is-eben-blue .navbar-link:hover,
    .hero.is-eben-blue .navbar-link.is-active {
      background-color: #35aae3;
      color: #fff; }
    .hero.is-eben-blue .tabs a {
      color: #fff;
      opacity: 0.9; }
      .hero.is-eben-blue .tabs a:hover {
        opacity: 1; }
    .hero.is-eben-blue .tabs li.is-active a {
      opacity: 1; }
    .hero.is-eben-blue .tabs.is-boxed a, .hero.is-eben-blue .tabs.is-toggle a {
      color: #fff; }
      .hero.is-eben-blue .tabs.is-boxed a:hover, .hero.is-eben-blue .tabs.is-toggle a:hover {
        background-color: rgba(10, 10, 10, 0.1); }
    .hero.is-eben-blue .tabs.is-boxed li.is-active a, .hero.is-eben-blue .tabs.is-boxed li.is-active a:hover, .hero.is-eben-blue .tabs.is-toggle li.is-active a, .hero.is-eben-blue .tabs.is-toggle li.is-active a:hover {
      background-color: #fff;
      border-color: #fff;
      color: #4bb3e6; }
    .hero.is-eben-blue.is-bold {
      background-image: linear-gradient(141deg, #12c8ec 0%, #4bb3e6 71%, #5da6ee 100%); }
      @media screen and (max-width: 768px) {
        .hero.is-eben-blue.is-bold .navbar-menu {
          background-image: linear-gradient(141deg, #12c8ec 0%, #4bb3e6 71%, #5da6ee 100%); } }
  .hero.is-eben-bottledgreen {
    background-color: #c8e2d5;
    color: rgba(0, 0, 0, 0.7); }
    .hero.is-eben-bottledgreen a:not(.button):not(.dropdown-item):not(.tag),
    .hero.is-eben-bottledgreen strong {
      color: inherit; }
    .hero.is-eben-bottledgreen .title {
      color: rgba(0, 0, 0, 0.7); }
    .hero.is-eben-bottledgreen .subtitle {
      color: rgba(0, 0, 0, 0.9); }
      .hero.is-eben-bottledgreen .subtitle a:not(.button),
      .hero.is-eben-bottledgreen .subtitle strong {
        color: rgba(0, 0, 0, 0.7); }
    @media screen and (max-width: 1023px) {
      .hero.is-eben-bottledgreen .navbar-menu {
        background-color: #c8e2d5; } }
    .hero.is-eben-bottledgreen .navbar-item,
    .hero.is-eben-bottledgreen .navbar-link {
      color: rgba(0, 0, 0, 0.7); }
    .hero.is-eben-bottledgreen a.navbar-item:hover, .hero.is-eben-bottledgreen a.navbar-item.is-active,
    .hero.is-eben-bottledgreen .navbar-link:hover,
    .hero.is-eben-bottledgreen .navbar-link.is-active {
      background-color: #b7d9c8;
      color: rgba(0, 0, 0, 0.7); }
    .hero.is-eben-bottledgreen .tabs a {
      color: rgba(0, 0, 0, 0.7);
      opacity: 0.9; }
      .hero.is-eben-bottledgreen .tabs a:hover {
        opacity: 1; }
    .hero.is-eben-bottledgreen .tabs li.is-active a {
      opacity: 1; }
    .hero.is-eben-bottledgreen .tabs.is-boxed a, .hero.is-eben-bottledgreen .tabs.is-toggle a {
      color: rgba(0, 0, 0, 0.7); }
      .hero.is-eben-bottledgreen .tabs.is-boxed a:hover, .hero.is-eben-bottledgreen .tabs.is-toggle a:hover {
        background-color: rgba(10, 10, 10, 0.1); }
    .hero.is-eben-bottledgreen .tabs.is-boxed li.is-active a, .hero.is-eben-bottledgreen .tabs.is-boxed li.is-active a:hover, .hero.is-eben-bottledgreen .tabs.is-toggle li.is-active a, .hero.is-eben-bottledgreen .tabs.is-toggle li.is-active a:hover {
      background-color: rgba(0, 0, 0, 0.7);
      border-color: rgba(0, 0, 0, 0.7);
      color: #c8e2d5; }
    .hero.is-eben-bottledgreen.is-bold {
      background-image: linear-gradient(141deg, #a0d7b2 0%, #c8e2d5 71%, #d7ece5 100%); }
      @media screen and (max-width: 768px) {
        .hero.is-eben-bottledgreen.is-bold .navbar-menu {
          background-image: linear-gradient(141deg, #a0d7b2 0%, #c8e2d5 71%, #d7ece5 100%); } }
  .hero.is-small .hero-body {
    padding-bottom: 1.5rem;
    padding-top: 1.5rem; }
  @media screen and (min-width: 769px), print {
    .hero.is-medium .hero-body {
      padding-bottom: 9rem;
      padding-top: 9rem; } }
  @media screen and (min-width: 769px), print {
    .hero.is-large .hero-body {
      padding-bottom: 18rem;
      padding-top: 18rem; } }
  .hero.is-halfheight .hero-body, .hero.is-fullheight .hero-body {
    align-items: center;
    display: flex; }
    .hero.is-halfheight .hero-body > .container, .hero.is-fullheight .hero-body > .container {
      flex-grow: 1;
      flex-shrink: 1; }
  .hero.is-halfheight {
    min-height: 50vh; }
  .hero.is-fullheight {
    min-height: 100vh; }

.hero-video {
  bottom: 0;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  overflow: hidden; }
  .hero-video video {
    left: 50%;
    min-height: 100%;
    min-width: 100%;
    position: absolute;
    top: 50%;
    transform: translate3d(-50%, -50%, 0); }
  .hero-video.is-transparent {
    opacity: 0.3; }
  @media screen and (max-width: 768px) {
    .hero-video {
      display: none; } }

.hero-buttons {
  margin-top: 1.5rem; }
  @media screen and (max-width: 768px) {
    .hero-buttons .button {
      display: flex; }
      .hero-buttons .button:not(:last-child) {
        margin-bottom: 0.75rem; } }
  @media screen and (min-width: 769px), print {
    .hero-buttons {
      display: flex;
      justify-content: center; }
      .hero-buttons .button:not(:last-child) {
        margin-right: 1.5rem; } }

.hero-head,
.hero-foot {
  flex-grow: 0;
  flex-shrink: 0; }

.hero-body {
  flex-grow: 1;
  flex-shrink: 0;
  padding: 3rem 1.5rem; }

.section {
  padding: 3rem 1.5rem; }
  @media screen and (min-width: 1024px) {
    .section.is-medium {
      padding: 9rem 1.5rem; }
    .section.is-large {
      padding: 18rem 1.5rem; } }

.footer {
  background-color: whitesmoke;
  padding: 3rem 1.5rem 6rem; }

.tooltip {
  position: relative; }
  .tooltip:hover:not(.is-loading)::after, .tooltip.is-tooltip-active:not(.is-loading)::after {
    z-index: 99999;
    position: absolute;
    display: inline-block;
    pointer-events: none; }
  .tooltip:hover::before, .tooltip.is-tooltip-active::before {
    z-index: 99999;
    position: absolute;
    display: inline-block;
    pointer-events: none; }
  .tooltip:hover:not(.is-loading)::after, .tooltip.is-tooltip-active:not(.is-loading)::after {
    content: "";
    border-style: solid;
    border-width: 0.5rem; }
  .tooltip:hover::before, .tooltip.is-tooltip-active::before {
    opacity: 0;
    content: attr(data-tooltip);
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    font-size: 0.75rem;
    padding: 0.4rem 0.8rem;
    transform: translate(-50%, 1rem);
    background: rgba(74, 74, 74, 0.9);
    border-radius: 3px;
    color: white;
    max-width: 24rem; }
  .tooltip:focus:not(.is-loading)::after, .tooltip:hover:not(.is-loading)::after, .tooltip.is-tooltip-active:not(.is-loading)::after {
    top: 0;
    bottom: auto;
    left: 50%;
    opacity: 1;
    margin-left: -0.5rem;
    margin-top: -0.5rem;
    border-color: rgba(74, 74, 74, 0.9) transparent transparent transparent; }
  .tooltip:focus::before, .tooltip:hover::before, .tooltip.is-tooltip-active::before {
    top: auto;
    bottom: 100%;
    left: 50%;
    opacity: 1;
    transform: translate(-50%, -0.5rem); }
  .tooltip.is-tooltip-right::before {
    top: auto;
    bottom: 50%;
    left: 100%;
    right: auto;
    transform: translate(-1rem, 50%); }
  .tooltip.is-tooltip-right:focus:not(.is-loading)::after, .tooltip.is-tooltip-right:hover:not(.is-loading)::after, .tooltip.is-tooltip-right.is-tooltip-active:not(.is-loading)::after {
    top: 50%;
    left: 100%;
    right: auto;
    border-color: transparent rgba(74, 74, 74, 0.9) transparent transparent; }
  .tooltip.is-tooltip-right:focus::before, .tooltip.is-tooltip-right:hover::before, .tooltip.is-tooltip-right.is-tooltip-active::before {
    transform: translate(0.5rem, 50%); }
  .tooltip.is-tooltip-bottom::before {
    top: 100%;
    bottom: auto;
    left: 50%;
    right: auto;
    transform: translate(-50%, -1rem); }
  .tooltip.is-tooltip-bottom:focus:not(.is-loading)::after, .tooltip.is-tooltip-bottom:hover:not(.is-loading)::after, .tooltip.is-tooltip-bottom.is-tooltip-active:not(.is-loading)::after {
    top: 100%;
    bottom: auto;
    left: 50%;
    right: auto;
    border-color: transparent transparent rgba(74, 74, 74, 0.9) transparent; }
  .tooltip.is-tooltip-bottom:focus::before, .tooltip.is-tooltip-bottom:hover::before, .tooltip.is-tooltip-bottom.is-tooltip-active::before {
    transform: translate(-50%, 0.5rem); }
  .tooltip.is-tooltip-left::before {
    top: auto;
    bottom: 50%;
    left: auto;
    right: 100%;
    transform: translate(1rem, 50%); }
  .tooltip.is-tooltip-left:focus:not(.is-loading)::after, .tooltip.is-tooltip-left:hover:not(.is-loading)::after, .tooltip.is-tooltip-left.is-tooltip-active:not(.is-loading)::after {
    top: 50%;
    left: auto;
    right: calc(100% - .5rem);
    border-color: transparent transparent transparent rgba(74, 74, 74, 0.9); }
  .tooltip.is-tooltip-left:focus::before, .tooltip.is-tooltip-left:hover::before, .tooltip.is-tooltip-left.is-tooltip-active::before {
    transform: translate(-0.5rem, 50%); }
  .tooltip.is-tooltip-multiline::before {
    text-overflow: clip;
    white-space: normal;
    word-break: keep-all; }
  .tooltip.is-tooltip-white:not(.is-loading)::after {
    border-color: rgba(255, 255, 255, 0.9) transparent transparent transparent; }
  .tooltip.is-tooltip-white.is-tooltip-right:not(.is-loading)::after {
    border-color: transparent rgba(255, 255, 255, 0.9) transparent transparent; }
  .tooltip.is-tooltip-white.is-tooltip-bottom:not(.is-loading)::after {
    border-color: transparent transparent rgba(255, 255, 255, 0.9) transparent; }
  .tooltip.is-tooltip-white.is-tooltip-left:not(.is-loading)::after {
    border-color: transparent transparent transparent rgba(255, 255, 255, 0.9); }
  .tooltip.is-tooltip-white::before {
    background: rgba(255, 255, 255, 0.9);
    color: #0a0a0a; }
  .tooltip.is-tooltip-black:not(.is-loading)::after {
    border-color: rgba(10, 10, 10, 0.9) transparent transparent transparent; }
  .tooltip.is-tooltip-black.is-tooltip-right:not(.is-loading)::after {
    border-color: transparent rgba(10, 10, 10, 0.9) transparent transparent; }
  .tooltip.is-tooltip-black.is-tooltip-bottom:not(.is-loading)::after {
    border-color: transparent transparent rgba(10, 10, 10, 0.9) transparent; }
  .tooltip.is-tooltip-black.is-tooltip-left:not(.is-loading)::after {
    border-color: transparent transparent transparent rgba(10, 10, 10, 0.9); }
  .tooltip.is-tooltip-black::before {
    background: rgba(10, 10, 10, 0.9);
    color: white; }
  .tooltip.is-tooltip-light:not(.is-loading)::after {
    border-color: rgba(245, 245, 245, 0.9) transparent transparent transparent; }
  .tooltip.is-tooltip-light.is-tooltip-right:not(.is-loading)::after {
    border-color: transparent rgba(245, 245, 245, 0.9) transparent transparent; }
  .tooltip.is-tooltip-light.is-tooltip-bottom:not(.is-loading)::after {
    border-color: transparent transparent rgba(245, 245, 245, 0.9) transparent; }
  .tooltip.is-tooltip-light.is-tooltip-left:not(.is-loading)::after {
    border-color: transparent transparent transparent rgba(245, 245, 245, 0.9); }
  .tooltip.is-tooltip-light::before {
    background: rgba(245, 245, 245, 0.9);
    color: #363636; }
  .tooltip.is-tooltip-dark:not(.is-loading)::after {
    border-color: rgba(54, 54, 54, 0.9) transparent transparent transparent; }
  .tooltip.is-tooltip-dark.is-tooltip-right:not(.is-loading)::after {
    border-color: transparent rgba(54, 54, 54, 0.9) transparent transparent; }
  .tooltip.is-tooltip-dark.is-tooltip-bottom:not(.is-loading)::after {
    border-color: transparent transparent rgba(54, 54, 54, 0.9) transparent; }
  .tooltip.is-tooltip-dark.is-tooltip-left:not(.is-loading)::after {
    border-color: transparent transparent transparent rgba(54, 54, 54, 0.9); }
  .tooltip.is-tooltip-dark::before {
    background: rgba(54, 54, 54, 0.9);
    color: whitesmoke; }
  .tooltip.is-tooltip-primary:not(.is-loading)::after {
    border-color: rgba(0, 209, 178, 0.9) transparent transparent transparent; }
  .tooltip.is-tooltip-primary.is-tooltip-right:not(.is-loading)::after {
    border-color: transparent rgba(0, 209, 178, 0.9) transparent transparent; }
  .tooltip.is-tooltip-primary.is-tooltip-bottom:not(.is-loading)::after {
    border-color: transparent transparent rgba(0, 209, 178, 0.9) transparent; }
  .tooltip.is-tooltip-primary.is-tooltip-left:not(.is-loading)::after {
    border-color: transparent transparent transparent rgba(0, 209, 178, 0.9); }
  .tooltip.is-tooltip-primary::before {
    background: rgba(0, 209, 178, 0.9);
    color: #fff; }
  .tooltip.is-tooltip-link:not(.is-loading)::after {
    border-color: rgba(50, 115, 220, 0.9) transparent transparent transparent; }
  .tooltip.is-tooltip-link.is-tooltip-right:not(.is-loading)::after {
    border-color: transparent rgba(50, 115, 220, 0.9) transparent transparent; }
  .tooltip.is-tooltip-link.is-tooltip-bottom:not(.is-loading)::after {
    border-color: transparent transparent rgba(50, 115, 220, 0.9) transparent; }
  .tooltip.is-tooltip-link.is-tooltip-left:not(.is-loading)::after {
    border-color: transparent transparent transparent rgba(50, 115, 220, 0.9); }
  .tooltip.is-tooltip-link::before {
    background: rgba(50, 115, 220, 0.9);
    color: #fff; }
  .tooltip.is-tooltip-info:not(.is-loading)::after {
    border-color: rgba(32, 156, 238, 0.9) transparent transparent transparent; }
  .tooltip.is-tooltip-info.is-tooltip-right:not(.is-loading)::after {
    border-color: transparent rgba(32, 156, 238, 0.9) transparent transparent; }
  .tooltip.is-tooltip-info.is-tooltip-bottom:not(.is-loading)::after {
    border-color: transparent transparent rgba(32, 156, 238, 0.9) transparent; }
  .tooltip.is-tooltip-info.is-tooltip-left:not(.is-loading)::after {
    border-color: transparent transparent transparent rgba(32, 156, 238, 0.9); }
  .tooltip.is-tooltip-info::before {
    background: rgba(32, 156, 238, 0.9);
    color: #fff; }
  .tooltip.is-tooltip-success:not(.is-loading)::after {
    border-color: rgba(35, 209, 96, 0.9) transparent transparent transparent; }
  .tooltip.is-tooltip-success.is-tooltip-right:not(.is-loading)::after {
    border-color: transparent rgba(35, 209, 96, 0.9) transparent transparent; }
  .tooltip.is-tooltip-success.is-tooltip-bottom:not(.is-loading)::after {
    border-color: transparent transparent rgba(35, 209, 96, 0.9) transparent; }
  .tooltip.is-tooltip-success.is-tooltip-left:not(.is-loading)::after {
    border-color: transparent transparent transparent rgba(35, 209, 96, 0.9); }
  .tooltip.is-tooltip-success::before {
    background: rgba(35, 209, 96, 0.9);
    color: #fff; }
  .tooltip.is-tooltip-warning:not(.is-loading)::after {
    border-color: rgba(255, 221, 87, 0.9) transparent transparent transparent; }
  .tooltip.is-tooltip-warning.is-tooltip-right:not(.is-loading)::after {
    border-color: transparent rgba(255, 221, 87, 0.9) transparent transparent; }
  .tooltip.is-tooltip-warning.is-tooltip-bottom:not(.is-loading)::after {
    border-color: transparent transparent rgba(255, 221, 87, 0.9) transparent; }
  .tooltip.is-tooltip-warning.is-tooltip-left:not(.is-loading)::after {
    border-color: transparent transparent transparent rgba(255, 221, 87, 0.9); }
  .tooltip.is-tooltip-warning::before {
    background: rgba(255, 221, 87, 0.9);
    color: rgba(0, 0, 0, 0.7); }
  .tooltip.is-tooltip-danger:not(.is-loading)::after {
    border-color: rgba(255, 56, 96, 0.9) transparent transparent transparent; }
  .tooltip.is-tooltip-danger.is-tooltip-right:not(.is-loading)::after {
    border-color: transparent rgba(255, 56, 96, 0.9) transparent transparent; }
  .tooltip.is-tooltip-danger.is-tooltip-bottom:not(.is-loading)::after {
    border-color: transparent transparent rgba(255, 56, 96, 0.9) transparent; }
  .tooltip.is-tooltip-danger.is-tooltip-left:not(.is-loading)::after {
    border-color: transparent transparent transparent rgba(255, 56, 96, 0.9); }
  .tooltip.is-tooltip-danger::before {
    background: rgba(255, 56, 96, 0.9);
    color: #fff; }
  .tooltip.is-tooltip-eben:not(.is-loading)::after {
    border-color: rgba(248, 88, 0, 0.9) transparent transparent transparent; }
  .tooltip.is-tooltip-eben.is-tooltip-right:not(.is-loading)::after {
    border-color: transparent rgba(248, 88, 0, 0.9) transparent transparent; }
  .tooltip.is-tooltip-eben.is-tooltip-bottom:not(.is-loading)::after {
    border-color: transparent transparent rgba(248, 88, 0, 0.9) transparent; }
  .tooltip.is-tooltip-eben.is-tooltip-left:not(.is-loading)::after {
    border-color: transparent transparent transparent rgba(248, 88, 0, 0.9); }
  .tooltip.is-tooltip-eben::before {
    background: rgba(248, 88, 0, 0.9);
    color: #fff; }
  .tooltip.is-tooltip-eben-blue:not(.is-loading)::after {
    border-color: rgba(75, 179, 230, 0.9) transparent transparent transparent; }
  .tooltip.is-tooltip-eben-blue.is-tooltip-right:not(.is-loading)::after {
    border-color: transparent rgba(75, 179, 230, 0.9) transparent transparent; }
  .tooltip.is-tooltip-eben-blue.is-tooltip-bottom:not(.is-loading)::after {
    border-color: transparent transparent rgba(75, 179, 230, 0.9) transparent; }
  .tooltip.is-tooltip-eben-blue.is-tooltip-left:not(.is-loading)::after {
    border-color: transparent transparent transparent rgba(75, 179, 230, 0.9); }
  .tooltip.is-tooltip-eben-blue::before {
    background: rgba(75, 179, 230, 0.9);
    color: #fff; }
  .tooltip.is-tooltip-eben-bottledgreen:not(.is-loading)::after {
    border-color: rgba(200, 226, 213, 0.9) transparent transparent transparent; }
  .tooltip.is-tooltip-eben-bottledgreen.is-tooltip-right:not(.is-loading)::after {
    border-color: transparent rgba(200, 226, 213, 0.9) transparent transparent; }
  .tooltip.is-tooltip-eben-bottledgreen.is-tooltip-bottom:not(.is-loading)::after {
    border-color: transparent transparent rgba(200, 226, 213, 0.9) transparent; }
  .tooltip.is-tooltip-eben-bottledgreen.is-tooltip-left:not(.is-loading)::after {
    border-color: transparent transparent transparent rgba(200, 226, 213, 0.9); }
  .tooltip.is-tooltip-eben-bottledgreen::before {
    background: rgba(200, 226, 213, 0.9);
    color: rgba(0, 0, 0, 0.7); }

.pageloader {
  bottom: 0;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  position: fixed;
  padding-top: 2em;
  background: #00d1b2;
  background: #00d1b2;
  z-index: 999998;
  transition: transform 0.35s ease-out, -webkit-transform 0.35s ease-out;
  will-change: transform; }
  .pageloader.is-white {
    background-color: white;
    background: white; }
    .pageloader.is-white::after {
      border-color: #0a0a0a;
      -webkit-animation: loader-figure-white 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
      -moz-animation: loader-figure-white 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
      animation: loader-figure-white 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1); }
    .pageloader.is-white .title {
      color: #0a0a0a; }
  .pageloader.is-black {
    background-color: #0a0a0a;
    background: #0a0a0a; }
    .pageloader.is-black::after {
      border-color: white;
      -webkit-animation: loader-figure-black 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
      -moz-animation: loader-figure-black 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
      animation: loader-figure-black 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1); }
    .pageloader.is-black .title {
      color: white; }
  .pageloader.is-light {
    background-color: whitesmoke;
    background: whitesmoke; }
    .pageloader.is-light::after {
      border-color: #363636;
      -webkit-animation: loader-figure-light 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
      -moz-animation: loader-figure-light 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
      animation: loader-figure-light 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1); }
    .pageloader.is-light .title {
      color: #363636; }
  .pageloader.is-dark {
    background-color: #363636;
    background: #363636; }
    .pageloader.is-dark::after {
      border-color: whitesmoke;
      -webkit-animation: loader-figure-dark 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
      -moz-animation: loader-figure-dark 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
      animation: loader-figure-dark 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1); }
    .pageloader.is-dark .title {
      color: whitesmoke; }
  .pageloader.is-primary {
    background-color: #00d1b2;
    background: #00d1b2; }
    .pageloader.is-primary::after {
      border-color: #fff;
      -webkit-animation: loader-figure-primary 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
      -moz-animation: loader-figure-primary 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
      animation: loader-figure-primary 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1); }
    .pageloader.is-primary .title {
      color: #fff; }
  .pageloader.is-link {
    background-color: #3273dc;
    background: #3273dc; }
    .pageloader.is-link::after {
      border-color: #fff;
      -webkit-animation: loader-figure-link 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
      -moz-animation: loader-figure-link 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
      animation: loader-figure-link 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1); }
    .pageloader.is-link .title {
      color: #fff; }
  .pageloader.is-info {
    background-color: #209cee;
    background: #209cee; }
    .pageloader.is-info::after {
      border-color: #fff;
      -webkit-animation: loader-figure-info 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
      -moz-animation: loader-figure-info 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
      animation: loader-figure-info 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1); }
    .pageloader.is-info .title {
      color: #fff; }
  .pageloader.is-success {
    background-color: #23d160;
    background: #23d160; }
    .pageloader.is-success::after {
      border-color: #fff;
      -webkit-animation: loader-figure-success 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
      -moz-animation: loader-figure-success 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
      animation: loader-figure-success 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1); }
    .pageloader.is-success .title {
      color: #fff; }
  .pageloader.is-warning {
    background-color: #ffdd57;
    background: #ffdd57; }
    .pageloader.is-warning::after {
      border-color: rgba(0, 0, 0, 0.7);
      -webkit-animation: loader-figure-warning 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
      -moz-animation: loader-figure-warning 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
      animation: loader-figure-warning 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1); }
    .pageloader.is-warning .title {
      color: rgba(0, 0, 0, 0.7); }
  .pageloader.is-danger {
    background-color: #ff3860;
    background: #ff3860; }
    .pageloader.is-danger::after {
      border-color: #fff;
      -webkit-animation: loader-figure-danger 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
      -moz-animation: loader-figure-danger 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
      animation: loader-figure-danger 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1); }
    .pageloader.is-danger .title {
      color: #fff; }
  .pageloader.is-eben {
    background-color: #f85800;
    background: #f85800; }
    .pageloader.is-eben::after {
      border-color: #fff;
      -webkit-animation: loader-figure-eben 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
      -moz-animation: loader-figure-eben 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
      animation: loader-figure-eben 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1); }
    .pageloader.is-eben .title {
      color: #fff; }
  .pageloader.is-eben-blue {
    background-color: #4bb3e6;
    background: #4bb3e6; }
    .pageloader.is-eben-blue::after {
      border-color: #fff;
      -webkit-animation: loader-figure-eben-blue 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
      -moz-animation: loader-figure-eben-blue 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
      animation: loader-figure-eben-blue 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1); }
    .pageloader.is-eben-blue .title {
      color: #fff; }
  .pageloader.is-eben-bottledgreen {
    background-color: #c8e2d5;
    background: #c8e2d5; }
    .pageloader.is-eben-bottledgreen::after {
      border-color: rgba(0, 0, 0, 0.7);
      -webkit-animation: loader-figure-eben-bottledgreen 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
      -moz-animation: loader-figure-eben-bottledgreen 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
      animation: loader-figure-eben-bottledgreen 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1); }
    .pageloader.is-eben-bottledgreen .title {
      color: rgba(0, 0, 0, 0.7); }
  .pageloader:not(.is-left-to-right), .pageloader:not(.is-right-to-left) {
    -webkit-transform: translateY(-100%);
    transform: translateY(-100%); }
  .pageloader.is-left-to-right {
    -webkit-transform: translateX(-100%);
    transform: translateX(-100%); }
  .pageloader.is-right-to-left {
    -webkit-transform: translateX(100%);
    transform: translateX(100%); }
  .pageloader.is-active:not(.is-left-to-right), .pageloader.is-active:not(.is-right-to-left) {
    -webkit-transform: translateY(0);
    transform: translateY(0); }
  .pageloader.is-active.is-left-to-right, .pageloader.is-active.is-right-to-left {
    -webkit-transform: translateX(0);
    transform: translateX(0); }
  .pageloader::after {
    position: absolute;
    top: 50%;
    left: 50%;
    display: block;
    border-radius: 100%;
    content: "";
    z-index: 9999;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    width: 0;
    height: 0;
    box-sizing: border-box;
    border: 0 solid white;
    -webkit-animation: loader-figure 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
    animation: loader-figure 1.15s infinite cubic-bezier(0.215, 0.61, 0.355, 1); }
  .pageloader .title {
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    margin: 2em 0 0 0;
    font-size: 0.875em;
    letter-spacing: 0.1em;
    line-height: 1.5em;
    color: white;
    white-space: nowrap; }
@-webkit-keyframes loader-figure {
  0% {
    height: 0;
    width: 0;
    background-color: white; }
  29% {
    background-color: white; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@-moz-keyframes loader-figure {
  0% {
    height: 0;
    width: 0;
    background-color: white; }
  29% {
    background-color: white; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@-o-keyframes loader-figure {
  0% {
    height: 0;
    width: 0;
    background-color: white; }
  29% {
    background-color: white; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@keyframes loader-figure {
  0% {
    height: 0;
    width: 0;
    background-color: white; }
  29% {
    background-color: white; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@-webkit-keyframes loader-figure-white {
  0% {
    height: 0;
    width: 0;
    background-color: #0a0a0a; }
  29% {
    background-color: #0a0a0a; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@-moz-keyframes loader-figure-white {
  0% {
    height: 0;
    width: 0;
    background-color: #0a0a0a; }
  29% {
    background-color: #0a0a0a; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@-o-keyframes loader-figure-white {
  0% {
    height: 0;
    width: 0;
    background-color: #0a0a0a; }
  29% {
    background-color: #0a0a0a; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@keyframes loader-figure-white {
  0% {
    height: 0;
    width: 0;
    background-color: #0a0a0a; }
  29% {
    background-color: #0a0a0a; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@-webkit-keyframes loader-figure-black {
  0% {
    height: 0;
    width: 0;
    background-color: white; }
  29% {
    background-color: white; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@-moz-keyframes loader-figure-black {
  0% {
    height: 0;
    width: 0;
    background-color: white; }
  29% {
    background-color: white; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@-o-keyframes loader-figure-black {
  0% {
    height: 0;
    width: 0;
    background-color: white; }
  29% {
    background-color: white; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@keyframes loader-figure-black {
  0% {
    height: 0;
    width: 0;
    background-color: white; }
  29% {
    background-color: white; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@-webkit-keyframes loader-figure-light {
  0% {
    height: 0;
    width: 0;
    background-color: #363636; }
  29% {
    background-color: #363636; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@-moz-keyframes loader-figure-light {
  0% {
    height: 0;
    width: 0;
    background-color: #363636; }
  29% {
    background-color: #363636; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@-o-keyframes loader-figure-light {
  0% {
    height: 0;
    width: 0;
    background-color: #363636; }
  29% {
    background-color: #363636; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@keyframes loader-figure-light {
  0% {
    height: 0;
    width: 0;
    background-color: #363636; }
  29% {
    background-color: #363636; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@-webkit-keyframes loader-figure-dark {
  0% {
    height: 0;
    width: 0;
    background-color: whitesmoke; }
  29% {
    background-color: whitesmoke; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@-moz-keyframes loader-figure-dark {
  0% {
    height: 0;
    width: 0;
    background-color: whitesmoke; }
  29% {
    background-color: whitesmoke; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@-o-keyframes loader-figure-dark {
  0% {
    height: 0;
    width: 0;
    background-color: whitesmoke; }
  29% {
    background-color: whitesmoke; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@keyframes loader-figure-dark {
  0% {
    height: 0;
    width: 0;
    background-color: whitesmoke; }
  29% {
    background-color: whitesmoke; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@-webkit-keyframes loader-figure-primary {
  0% {
    height: 0;
    width: 0;
    background-color: #fff; }
  29% {
    background-color: #fff; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@-moz-keyframes loader-figure-primary {
  0% {
    height: 0;
    width: 0;
    background-color: #fff; }
  29% {
    background-color: #fff; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@-o-keyframes loader-figure-primary {
  0% {
    height: 0;
    width: 0;
    background-color: #fff; }
  29% {
    background-color: #fff; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@keyframes loader-figure-primary {
  0% {
    height: 0;
    width: 0;
    background-color: #fff; }
  29% {
    background-color: #fff; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@-webkit-keyframes loader-figure-link {
  0% {
    height: 0;
    width: 0;
    background-color: #fff; }
  29% {
    background-color: #fff; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@-moz-keyframes loader-figure-link {
  0% {
    height: 0;
    width: 0;
    background-color: #fff; }
  29% {
    background-color: #fff; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@-o-keyframes loader-figure-link {
  0% {
    height: 0;
    width: 0;
    background-color: #fff; }
  29% {
    background-color: #fff; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@keyframes loader-figure-link {
  0% {
    height: 0;
    width: 0;
    background-color: #fff; }
  29% {
    background-color: #fff; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@-webkit-keyframes loader-figure-info {
  0% {
    height: 0;
    width: 0;
    background-color: #fff; }
  29% {
    background-color: #fff; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@-moz-keyframes loader-figure-info {
  0% {
    height: 0;
    width: 0;
    background-color: #fff; }
  29% {
    background-color: #fff; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@-o-keyframes loader-figure-info {
  0% {
    height: 0;
    width: 0;
    background-color: #fff; }
  29% {
    background-color: #fff; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@keyframes loader-figure-info {
  0% {
    height: 0;
    width: 0;
    background-color: #fff; }
  29% {
    background-color: #fff; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@-webkit-keyframes loader-figure-success {
  0% {
    height: 0;
    width: 0;
    background-color: #fff; }
  29% {
    background-color: #fff; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@-moz-keyframes loader-figure-success {
  0% {
    height: 0;
    width: 0;
    background-color: #fff; }
  29% {
    background-color: #fff; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@-o-keyframes loader-figure-success {
  0% {
    height: 0;
    width: 0;
    background-color: #fff; }
  29% {
    background-color: #fff; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@keyframes loader-figure-success {
  0% {
    height: 0;
    width: 0;
    background-color: #fff; }
  29% {
    background-color: #fff; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@-webkit-keyframes loader-figure-warning {
  0% {
    height: 0;
    width: 0;
    background-color: rgba(0, 0, 0, 0.7); }
  29% {
    background-color: rgba(0, 0, 0, 0.7); }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@-moz-keyframes loader-figure-warning {
  0% {
    height: 0;
    width: 0;
    background-color: rgba(0, 0, 0, 0.7); }
  29% {
    background-color: rgba(0, 0, 0, 0.7); }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@-o-keyframes loader-figure-warning {
  0% {
    height: 0;
    width: 0;
    background-color: rgba(0, 0, 0, 0.7); }
  29% {
    background-color: rgba(0, 0, 0, 0.7); }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@keyframes loader-figure-warning {
  0% {
    height: 0;
    width: 0;
    background-color: rgba(0, 0, 0, 0.7); }
  29% {
    background-color: rgba(0, 0, 0, 0.7); }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@-webkit-keyframes loader-figure-danger {
  0% {
    height: 0;
    width: 0;
    background-color: #fff; }
  29% {
    background-color: #fff; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@-moz-keyframes loader-figure-danger {
  0% {
    height: 0;
    width: 0;
    background-color: #fff; }
  29% {
    background-color: #fff; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@-o-keyframes loader-figure-danger {
  0% {
    height: 0;
    width: 0;
    background-color: #fff; }
  29% {
    background-color: #fff; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@keyframes loader-figure-danger {
  0% {
    height: 0;
    width: 0;
    background-color: #fff; }
  29% {
    background-color: #fff; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@-webkit-keyframes loader-figure-eben {
  0% {
    height: 0;
    width: 0;
    background-color: #fff; }
  29% {
    background-color: #fff; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@-moz-keyframes loader-figure-eben {
  0% {
    height: 0;
    width: 0;
    background-color: #fff; }
  29% {
    background-color: #fff; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@-o-keyframes loader-figure-eben {
  0% {
    height: 0;
    width: 0;
    background-color: #fff; }
  29% {
    background-color: #fff; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@keyframes loader-figure-eben {
  0% {
    height: 0;
    width: 0;
    background-color: #fff; }
  29% {
    background-color: #fff; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@-webkit-keyframes loader-figure-eben-blue {
  0% {
    height: 0;
    width: 0;
    background-color: #fff; }
  29% {
    background-color: #fff; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@-moz-keyframes loader-figure-eben-blue {
  0% {
    height: 0;
    width: 0;
    background-color: #fff; }
  29% {
    background-color: #fff; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@-o-keyframes loader-figure-eben-blue {
  0% {
    height: 0;
    width: 0;
    background-color: #fff; }
  29% {
    background-color: #fff; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@keyframes loader-figure-eben-blue {
  0% {
    height: 0;
    width: 0;
    background-color: #fff; }
  29% {
    background-color: #fff; }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@-webkit-keyframes loader-figure-eben-bottledgreen {
  0% {
    height: 0;
    width: 0;
    background-color: rgba(0, 0, 0, 0.7); }
  29% {
    background-color: rgba(0, 0, 0, 0.7); }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@-moz-keyframes loader-figure-eben-bottledgreen {
  0% {
    height: 0;
    width: 0;
    background-color: rgba(0, 0, 0, 0.7); }
  29% {
    background-color: rgba(0, 0, 0, 0.7); }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@-o-keyframes loader-figure-eben-bottledgreen {
  0% {
    height: 0;
    width: 0;
    background-color: rgba(0, 0, 0, 0.7); }
  29% {
    background-color: rgba(0, 0, 0, 0.7); }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
@keyframes loader-figure-eben-bottledgreen {
  0% {
    height: 0;
    width: 0;
    background-color: rgba(0, 0, 0, 0.7); }
  29% {
    background-color: rgba(0, 0, 0, 0.7); }
  30% {
    height: 2em;
    width: 2em;
    background-color: transparent;
    border-width: 1em;
    opacity: 1; }
  100% {
    height: 2em;
    width: 2em;
    border-width: 0;
    opacity: 0;
    background-color: transparent; } }
.steps {
  display: flex;
  flex-wrap: wrap;
  font-size: 1rem;
  min-height: 2rem; }
  .steps:not(:last-child) {
    margin-bottom: 1.5rem; }
  .steps .step-item {
    margin-top: 0;
    position: relative;
    flex-grow: 1;
    flex-basis: 0; }
    .steps .step-item:not(:first-child) {
      flex-basis: 1em;
      flex-grow: 1;
      flex-shrink: 1; }
      .steps .step-item:not(:first-child)::before {
        content: " ";
        display: block;
        position: absolute; }
    .steps .step-item::before {
      background: linear-gradient(to left, #dbdbdb 50%, #00d1b2 50%);
      background-size: 200% 100%;
      background-position: right bottom; }
      .steps .step-item::before .step-marker {
        color: white; }
    .steps .step-item.is-active::before {
      background-position: left bottom; }
    .steps .step-item.is-active .step-marker {
      background-color: white;
      border-color: #00d1b2;
      color: #00d1b2; }
    .steps .step-item.is-completed::before {
      background-position: left bottom; }
    .steps .step-item.is-completed .step-marker {
      color: white;
      background-color: #00d1b2; }
    .steps .step-item .step-marker {
      align-items: center;
      display: flex;
      border-radius: 50%;
      font-weight: 700;
      justify-content: center;
      background: #b5b5b5;
      color: white;
      border: 0.2em solid #fff;
      z-index: 1; }
    .steps .step-item .step-details {
      text-align: center; }
    .steps .step-item.is-white::before {
      background: linear-gradient(to left, #dbdbdb 50%, white 50%);
      background-size: 200% 100%;
      background-position: right bottom; }
    .steps .step-item.is-white.is-active::before {
      background-position: left bottom; }
    .steps .step-item.is-white.is-active .step-marker {
      background-color: white;
      border-color: white;
      color: white; }
    .steps .step-item.is-white.is-completed::before {
      background-position: left bottom; }
    .steps .step-item.is-white.is-completed .step-marker {
      color: #0a0a0a;
      background-color: white; }
    .steps .step-item.is-black::before {
      background: linear-gradient(to left, #dbdbdb 50%, #0a0a0a 50%);
      background-size: 200% 100%;
      background-position: right bottom; }
    .steps .step-item.is-black.is-active::before {
      background-position: left bottom; }
    .steps .step-item.is-black.is-active .step-marker {
      background-color: white;
      border-color: #0a0a0a;
      color: #0a0a0a; }
    .steps .step-item.is-black.is-completed::before {
      background-position: left bottom; }
    .steps .step-item.is-black.is-completed .step-marker {
      color: white;
      background-color: #0a0a0a; }
    .steps .step-item.is-light::before {
      background: linear-gradient(to left, #dbdbdb 50%, whitesmoke 50%);
      background-size: 200% 100%;
      background-position: right bottom; }
    .steps .step-item.is-light.is-active::before {
      background-position: left bottom; }
    .steps .step-item.is-light.is-active .step-marker {
      background-color: white;
      border-color: whitesmoke;
      color: whitesmoke; }
    .steps .step-item.is-light.is-completed::before {
      background-position: left bottom; }
    .steps .step-item.is-light.is-completed .step-marker {
      color: #363636;
      background-color: whitesmoke; }
    .steps .step-item.is-dark::before {
      background: linear-gradient(to left, #dbdbdb 50%, #363636 50%);
      background-size: 200% 100%;
      background-position: right bottom; }
    .steps .step-item.is-dark.is-active::before {
      background-position: left bottom; }
    .steps .step-item.is-dark.is-active .step-marker {
      background-color: white;
      border-color: #363636;
      color: #363636; }
    .steps .step-item.is-dark.is-completed::before {
      background-position: left bottom; }
    .steps .step-item.is-dark.is-completed .step-marker {
      color: whitesmoke;
      background-color: #363636; }
    .steps .step-item.is-primary::before {
      background: linear-gradient(to left, #dbdbdb 50%, #00d1b2 50%);
      background-size: 200% 100%;
      background-position: right bottom; }
    .steps .step-item.is-primary.is-active::before {
      background-position: left bottom; }
    .steps .step-item.is-primary.is-active .step-marker {
      background-color: white;
      border-color: #00d1b2;
      color: #00d1b2; }
    .steps .step-item.is-primary.is-completed::before {
      background-position: left bottom; }
    .steps .step-item.is-primary.is-completed .step-marker {
      color: #fff;
      background-color: #00d1b2; }
    .steps .step-item.is-link::before {
      background: linear-gradient(to left, #dbdbdb 50%, #3273dc 50%);
      background-size: 200% 100%;
      background-position: right bottom; }
    .steps .step-item.is-link.is-active::before {
      background-position: left bottom; }
    .steps .step-item.is-link.is-active .step-marker {
      background-color: white;
      border-color: #3273dc;
      color: #3273dc; }
    .steps .step-item.is-link.is-completed::before {
      background-position: left bottom; }
    .steps .step-item.is-link.is-completed .step-marker {
      color: #fff;
      background-color: #3273dc; }
    .steps .step-item.is-info::before {
      background: linear-gradient(to left, #dbdbdb 50%, #209cee 50%);
      background-size: 200% 100%;
      background-position: right bottom; }
    .steps .step-item.is-info.is-active::before {
      background-position: left bottom; }
    .steps .step-item.is-info.is-active .step-marker {
      background-color: white;
      border-color: #209cee;
      color: #209cee; }
    .steps .step-item.is-info.is-completed::before {
      background-position: left bottom; }
    .steps .step-item.is-info.is-completed .step-marker {
      color: #fff;
      background-color: #209cee; }
    .steps .step-item.is-success::before {
      background: linear-gradient(to left, #dbdbdb 50%, #23d160 50%);
      background-size: 200% 100%;
      background-position: right bottom; }
    .steps .step-item.is-success.is-active::before {
      background-position: left bottom; }
    .steps .step-item.is-success.is-active .step-marker {
      background-color: white;
      border-color: #23d160;
      color: #23d160; }
    .steps .step-item.is-success.is-completed::before {
      background-position: left bottom; }
    .steps .step-item.is-success.is-completed .step-marker {
      color: #fff;
      background-color: #23d160; }
    .steps .step-item.is-warning::before {
      background: linear-gradient(to left, #dbdbdb 50%, #ffdd57 50%);
      background-size: 200% 100%;
      background-position: right bottom; }
    .steps .step-item.is-warning.is-active::before {
      background-position: left bottom; }
    .steps .step-item.is-warning.is-active .step-marker {
      background-color: white;
      border-color: #ffdd57;
      color: #ffdd57; }
    .steps .step-item.is-warning.is-completed::before {
      background-position: left bottom; }
    .steps .step-item.is-warning.is-completed .step-marker {
      color: rgba(0, 0, 0, 0.7);
      background-color: #ffdd57; }
    .steps .step-item.is-danger::before {
      background: linear-gradient(to left, #dbdbdb 50%, #ff3860 50%);
      background-size: 200% 100%;
      background-position: right bottom; }
    .steps .step-item.is-danger.is-active::before {
      background-position: left bottom; }
    .steps .step-item.is-danger.is-active .step-marker {
      background-color: white;
      border-color: #ff3860;
      color: #ff3860; }
    .steps .step-item.is-danger.is-completed::before {
      background-position: left bottom; }
    .steps .step-item.is-danger.is-completed .step-marker {
      color: #fff;
      background-color: #ff3860; }
    .steps .step-item.is-eben::before {
      background: linear-gradient(to left, #dbdbdb 50%, #f85800 50%);
      background-size: 200% 100%;
      background-position: right bottom; }
    .steps .step-item.is-eben.is-active::before {
      background-position: left bottom; }
    .steps .step-item.is-eben.is-active .step-marker {
      background-color: white;
      border-color: #f85800;
      color: #f85800; }
    .steps .step-item.is-eben.is-completed::before {
      background-position: left bottom; }
    .steps .step-item.is-eben.is-completed .step-marker {
      color: #fff;
      background-color: #f85800; }
    .steps .step-item.is-eben-blue::before {
      background: linear-gradient(to left, #dbdbdb 50%, #4bb3e6 50%);
      background-size: 200% 100%;
      background-position: right bottom; }
    .steps .step-item.is-eben-blue.is-active::before {
      background-position: left bottom; }
    .steps .step-item.is-eben-blue.is-active .step-marker {
      background-color: white;
      border-color: #4bb3e6;
      color: #4bb3e6; }
    .steps .step-item.is-eben-blue.is-completed::before {
      background-position: left bottom; }
    .steps .step-item.is-eben-blue.is-completed .step-marker {
      color: #fff;
      background-color: #4bb3e6; }
    .steps .step-item.is-eben-bottledgreen::before {
      background: linear-gradient(to left, #dbdbdb 50%, #c8e2d5 50%);
      background-size: 200% 100%;
      background-position: right bottom; }
    .steps .step-item.is-eben-bottledgreen.is-active::before {
      background-position: left bottom; }
    .steps .step-item.is-eben-bottledgreen.is-active .step-marker {
      background-color: white;
      border-color: #c8e2d5;
      color: #c8e2d5; }
    .steps .step-item.is-eben-bottledgreen.is-completed::before {
      background-position: left bottom; }
    .steps .step-item.is-eben-bottledgreen.is-completed .step-marker {
      color: rgba(0, 0, 0, 0.7);
      background-color: #c8e2d5; }
  .steps .steps-content {
    align-items: stretch;
    flex-basis: 100%;
    margin: 2rem 0; }
    .steps .steps-content .step-content {
      display: none; }
      .steps .steps-content .step-content.is-active {
        display: block; }
  .steps .steps-actions {
    display: flex;
    align-items: stretch;
    flex-basis: 100%; }
    .steps .steps-actions .steps-action {
      display: flex;
      flex-basis: 0;
      flex-grow: 1;
      margin: 0.5rem;
      justify-content: center;
      align-items: center; }
  .steps.is-animated .step-item::before {
    transition: all 2s ease; }
  .steps.is-animated .step-item .step-marker {
    transition: all 0s ease;
    transition-delay: 1.5s; }
  .steps .step-item:not(:first-child)::before {
    height: 0.2em;
    width: 100%;
    bottom: 0;
    left: -50%;
    top: 1rem; }
  .steps .step-item .step-marker {
    height: 2rem;
    width: 2rem;
    position: absolute;
    left: calc(50% - 1rem); }
    .steps .step-item .step-marker .icon * {
      font-size: 1rem; }
  .steps .step-item .step-details {
    margin-top: 2rem;
    margin-left: 0.5em;
    margin-right: 0.5em;
    padding-top: 0.2em; }
    .steps .step-item .step-details .step-title {
      font-size: 1.2rem;
      font-weight: 600; }
  .steps.is-small {
    font-size: 0.75rem;
    min-height: 1.5rem; }
    .steps.is-small .step-item:not(:first-child)::before {
      height: 0.2em;
      width: 100%;
      bottom: 0;
      left: -50%;
      top: 0.75rem; }
    .steps.is-small .step-item .step-marker {
      height: 1.5rem;
      width: 1.5rem;
      position: absolute;
      left: calc(50% - 0.75rem); }
      .steps.is-small .step-item .step-marker .icon * {
        font-size: 0.75rem; }
    .steps.is-small .step-item .step-details {
      margin-top: 1.5rem;
      margin-left: 0.5em;
      margin-right: 0.5em;
      padding-top: 0.2em; }
      .steps.is-small .step-item .step-details .step-title {
        font-size: 0.9rem;
        font-weight: 600; }
  .steps.is-medium {
    font-size: 1.25rem;
    min-height: 2.5rem; }
    .steps.is-medium .step-item:not(:first-child)::before {
      height: 0.2em;
      width: 100%;
      bottom: 0;
      left: -50%;
      top: 1.25rem; }
    .steps.is-medium .step-item .step-marker {
      height: 2.5rem;
      width: 2.5rem;
      position: absolute;
      left: calc(50% - 1.25rem); }
      .steps.is-medium .step-item .step-marker .icon * {
        font-size: 1.25rem; }
    .steps.is-medium .step-item .step-details {
      margin-top: 2.5rem;
      margin-left: 0.5em;
      margin-right: 0.5em;
      padding-top: 0.2em; }
      .steps.is-medium .step-item .step-details .step-title {
        font-size: 1.5rem;
        font-weight: 600; }
  .steps.is-large {
    font-size: 1.5rem;
    min-height: 3rem; }
    .steps.is-large .step-item:not(:first-child)::before {
      height: 0.2em;
      width: 100%;
      bottom: 0;
      left: -50%;
      top: 1.5rem; }
    .steps.is-large .step-item .step-marker {
      height: 3rem;
      width: 3rem;
      position: absolute;
      left: calc(50% - 1.5rem); }
      .steps.is-large .step-item .step-marker .icon * {
        font-size: 1.5rem; }
    .steps.is-large .step-item .step-details {
      margin-top: 3rem;
      margin-left: 0.5em;
      margin-right: 0.5em;
      padding-top: 0.2em; }
      .steps.is-large .step-item .step-details .step-title {
        font-size: 1.8rem;
        font-weight: 600; }

.timeline {
  display: flex;
  flex-direction: column; }
  .timeline .timeline-header {
    width: 4em;
    min-width: 4em;
    max-width: 8em;
    word-wrap: normal;
    text-align: center;
    display: flex;
    justify-content: center; }
  .timeline .timeline-item {
    display: flex;
    display: -ms-flexbox;
    display: -webkit-flex;
    position: relative;
    margin-left: 2em;
    padding-bottom: 2em; }
    .timeline .timeline-item::before {
      content: "";
      background-color: #dbdbdb;
      display: block;
      width: 0.1em;
      height: 100%;
      position: absolute;
      left: 0;
      top: 0; }
    .timeline .timeline-item .timeline-marker {
      position: absolute;
      background: #dbdbdb;
      border: 0.1em solid #dbdbdb;
      border-radius: 100%;
      content: "";
      display: block;
      height: 0.8em;
      left: -0.35em;
      top: 1.2rem;
      width: 0.8em; }
      .timeline .timeline-item .timeline-marker.is-image {
        background: #dbdbdb;
        border: 0.1em solid #dbdbdb;
        border-radius: 100%;
        display: block;
        overflow: hidden; }
        .timeline .timeline-item .timeline-marker.is-image.is-16x16 {
          height: 16px;
          width: 16px;
          left: -8px; }
        .timeline .timeline-item .timeline-marker.is-image.is-24x24 {
          height: 24px;
          width: 24px;
          left: -12px; }
        .timeline .timeline-item .timeline-marker.is-image.is-32x32 {
          height: 32px;
          width: 32px;
          left: -16px; }
        .timeline .timeline-item .timeline-marker.is-image.is-48x48 {
          height: 48px;
          width: 48px;
          left: -24px; }
        .timeline .timeline-item .timeline-marker.is-image.is-64x64 {
          height: 64px;
          width: 64px;
          left: -32px; }
        .timeline .timeline-item .timeline-marker.is-image.is-96x96 {
          height: 96px;
          width: 96px;
          left: -48px; }
        .timeline .timeline-item .timeline-marker.is-image.is-128x128 {
          height: 128px;
          width: 128px;
          left: -64px; }
      .timeline .timeline-item .timeline-marker.is-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 1.5em;
        width: 1.5em;
        left: -0.7em;
        line-height: 0.75rem;
        padding: 0.25rem;
        background: #dbdbdb;
        border: 0.1em solid #dbdbdb;
        border-radius: 100%; }
        .timeline .timeline-item .timeline-marker.is-icon > i {
          color: white;
          font-size: 0.75rem !important; }
      .timeline .timeline-item .timeline-marker.is-outlined .image {
        background: white; }
      .timeline .timeline-item .timeline-marker.is-outlined.is-icon {
        background: white; }
        .timeline .timeline-item .timeline-marker.is-outlined.is-icon > i {
          color: #dbdbdb; }
      .timeline .timeline-item .timeline-marker.is-white {
        background-color: white !important;
        border-color: white !important; }
        .timeline .timeline-item .timeline-marker.is-white .image {
          border-color: white !important; }
        .timeline .timeline-item .timeline-marker.is-white.is-icon {
          background-color: white !important;
          border-color: white !important; }
          .timeline .timeline-item .timeline-marker.is-white.is-icon > i {
            color: #0a0a0a !important; }
        .timeline .timeline-item .timeline-marker.is-white.is-outlined {
          background-color: white !important;
          border-color: white !important; }
          .timeline .timeline-item .timeline-marker.is-white.is-outlined .image {
            background-color: white !important; }
          .timeline .timeline-item .timeline-marker.is-white.is-outlined.is-icon {
            background-color: white !important; }
            .timeline .timeline-item .timeline-marker.is-white.is-outlined.is-icon > i {
              color: white !important; }
      .timeline .timeline-item .timeline-marker.is-black {
        background-color: #0a0a0a !important;
        border-color: #0a0a0a !important; }
        .timeline .timeline-item .timeline-marker.is-black .image {
          border-color: #0a0a0a !important; }
        .timeline .timeline-item .timeline-marker.is-black.is-icon {
          background-color: #0a0a0a !important;
          border-color: #0a0a0a !important; }
          .timeline .timeline-item .timeline-marker.is-black.is-icon > i {
            color: white !important; }
        .timeline .timeline-item .timeline-marker.is-black.is-outlined {
          background-color: white !important;
          border-color: #0a0a0a !important; }
          .timeline .timeline-item .timeline-marker.is-black.is-outlined .image {
            background-color: white !important; }
          .timeline .timeline-item .timeline-marker.is-black.is-outlined.is-icon {
            background-color: white !important; }
            .timeline .timeline-item .timeline-marker.is-black.is-outlined.is-icon > i {
              color: #0a0a0a !important; }
      .timeline .timeline-item .timeline-marker.is-light {
        background-color: whitesmoke !important;
        border-color: whitesmoke !important; }
        .timeline .timeline-item .timeline-marker.is-light .image {
          border-color: whitesmoke !important; }
        .timeline .timeline-item .timeline-marker.is-light.is-icon {
          background-color: whitesmoke !important;
          border-color: whitesmoke !important; }
          .timeline .timeline-item .timeline-marker.is-light.is-icon > i {
            color: #363636 !important; }
        .timeline .timeline-item .timeline-marker.is-light.is-outlined {
          background-color: white !important;
          border-color: whitesmoke !important; }
          .timeline .timeline-item .timeline-marker.is-light.is-outlined .image {
            background-color: white !important; }
          .timeline .timeline-item .timeline-marker.is-light.is-outlined.is-icon {
            background-color: white !important; }
            .timeline .timeline-item .timeline-marker.is-light.is-outlined.is-icon > i {
              color: whitesmoke !important; }
      .timeline .timeline-item .timeline-marker.is-dark {
        background-color: #363636 !important;
        border-color: #363636 !important; }
        .timeline .timeline-item .timeline-marker.is-dark .image {
          border-color: #363636 !important; }
        .timeline .timeline-item .timeline-marker.is-dark.is-icon {
          background-color: #363636 !important;
          border-color: #363636 !important; }
          .timeline .timeline-item .timeline-marker.is-dark.is-icon > i {
            color: whitesmoke !important; }
        .timeline .timeline-item .timeline-marker.is-dark.is-outlined {
          background-color: white !important;
          border-color: #363636 !important; }
          .timeline .timeline-item .timeline-marker.is-dark.is-outlined .image {
            background-color: white !important; }
          .timeline .timeline-item .timeline-marker.is-dark.is-outlined.is-icon {
            background-color: white !important; }
            .timeline .timeline-item .timeline-marker.is-dark.is-outlined.is-icon > i {
              color: #363636 !important; }
      .timeline .timeline-item .timeline-marker.is-primary {
        background-color: #00d1b2 !important;
        border-color: #00d1b2 !important; }
        .timeline .timeline-item .timeline-marker.is-primary .image {
          border-color: #00d1b2 !important; }
        .timeline .timeline-item .timeline-marker.is-primary.is-icon {
          background-color: #00d1b2 !important;
          border-color: #00d1b2 !important; }
          .timeline .timeline-item .timeline-marker.is-primary.is-icon > i {
            color: #fff !important; }
        .timeline .timeline-item .timeline-marker.is-primary.is-outlined {
          background-color: white !important;
          border-color: #00d1b2 !important; }
          .timeline .timeline-item .timeline-marker.is-primary.is-outlined .image {
            background-color: white !important; }
          .timeline .timeline-item .timeline-marker.is-primary.is-outlined.is-icon {
            background-color: white !important; }
            .timeline .timeline-item .timeline-marker.is-primary.is-outlined.is-icon > i {
              color: #00d1b2 !important; }
      .timeline .timeline-item .timeline-marker.is-link {
        background-color: #3273dc !important;
        border-color: #3273dc !important; }
        .timeline .timeline-item .timeline-marker.is-link .image {
          border-color: #3273dc !important; }
        .timeline .timeline-item .timeline-marker.is-link.is-icon {
          background-color: #3273dc !important;
          border-color: #3273dc !important; }
          .timeline .timeline-item .timeline-marker.is-link.is-icon > i {
            color: #fff !important; }
        .timeline .timeline-item .timeline-marker.is-link.is-outlined {
          background-color: white !important;
          border-color: #3273dc !important; }
          .timeline .timeline-item .timeline-marker.is-link.is-outlined .image {
            background-color: white !important; }
          .timeline .timeline-item .timeline-marker.is-link.is-outlined.is-icon {
            background-color: white !important; }
            .timeline .timeline-item .timeline-marker.is-link.is-outlined.is-icon > i {
              color: #3273dc !important; }
      .timeline .timeline-item .timeline-marker.is-info {
        background-color: #209cee !important;
        border-color: #209cee !important; }
        .timeline .timeline-item .timeline-marker.is-info .image {
          border-color: #209cee !important; }
        .timeline .timeline-item .timeline-marker.is-info.is-icon {
          background-color: #209cee !important;
          border-color: #209cee !important; }
          .timeline .timeline-item .timeline-marker.is-info.is-icon > i {
            color: #fff !important; }
        .timeline .timeline-item .timeline-marker.is-info.is-outlined {
          background-color: white !important;
          border-color: #209cee !important; }
          .timeline .timeline-item .timeline-marker.is-info.is-outlined .image {
            background-color: white !important; }
          .timeline .timeline-item .timeline-marker.is-info.is-outlined.is-icon {
            background-color: white !important; }
            .timeline .timeline-item .timeline-marker.is-info.is-outlined.is-icon > i {
              color: #209cee !important; }
      .timeline .timeline-item .timeline-marker.is-success {
        background-color: #23d160 !important;
        border-color: #23d160 !important; }
        .timeline .timeline-item .timeline-marker.is-success .image {
          border-color: #23d160 !important; }
        .timeline .timeline-item .timeline-marker.is-success.is-icon {
          background-color: #23d160 !important;
          border-color: #23d160 !important; }
          .timeline .timeline-item .timeline-marker.is-success.is-icon > i {
            color: #fff !important; }
        .timeline .timeline-item .timeline-marker.is-success.is-outlined {
          background-color: white !important;
          border-color: #23d160 !important; }
          .timeline .timeline-item .timeline-marker.is-success.is-outlined .image {
            background-color: white !important; }
          .timeline .timeline-item .timeline-marker.is-success.is-outlined.is-icon {
            background-color: white !important; }
            .timeline .timeline-item .timeline-marker.is-success.is-outlined.is-icon > i {
              color: #23d160 !important; }
      .timeline .timeline-item .timeline-marker.is-warning {
        background-color: #ffdd57 !important;
        border-color: #ffdd57 !important; }
        .timeline .timeline-item .timeline-marker.is-warning .image {
          border-color: #ffdd57 !important; }
        .timeline .timeline-item .timeline-marker.is-warning.is-icon {
          background-color: #ffdd57 !important;
          border-color: #ffdd57 !important; }
          .timeline .timeline-item .timeline-marker.is-warning.is-icon > i {
            color: rgba(0, 0, 0, 0.7) !important; }
        .timeline .timeline-item .timeline-marker.is-warning.is-outlined {
          background-color: white !important;
          border-color: #ffdd57 !important; }
          .timeline .timeline-item .timeline-marker.is-warning.is-outlined .image {
            background-color: white !important; }
          .timeline .timeline-item .timeline-marker.is-warning.is-outlined.is-icon {
            background-color: white !important; }
            .timeline .timeline-item .timeline-marker.is-warning.is-outlined.is-icon > i {
              color: #ffdd57 !important; }
      .timeline .timeline-item .timeline-marker.is-danger {
        background-color: #ff3860 !important;
        border-color: #ff3860 !important; }
        .timeline .timeline-item .timeline-marker.is-danger .image {
          border-color: #ff3860 !important; }
        .timeline .timeline-item .timeline-marker.is-danger.is-icon {
          background-color: #ff3860 !important;
          border-color: #ff3860 !important; }
          .timeline .timeline-item .timeline-marker.is-danger.is-icon > i {
            color: #fff !important; }
        .timeline .timeline-item .timeline-marker.is-danger.is-outlined {
          background-color: white !important;
          border-color: #ff3860 !important; }
          .timeline .timeline-item .timeline-marker.is-danger.is-outlined .image {
            background-color: white !important; }
          .timeline .timeline-item .timeline-marker.is-danger.is-outlined.is-icon {
            background-color: white !important; }
            .timeline .timeline-item .timeline-marker.is-danger.is-outlined.is-icon > i {
              color: #ff3860 !important; }
      .timeline .timeline-item .timeline-marker.is-eben {
        background-color: #f85800 !important;
        border-color: #f85800 !important; }
        .timeline .timeline-item .timeline-marker.is-eben .image {
          border-color: #f85800 !important; }
        .timeline .timeline-item .timeline-marker.is-eben.is-icon {
          background-color: #f85800 !important;
          border-color: #f85800 !important; }
          .timeline .timeline-item .timeline-marker.is-eben.is-icon > i {
            color: #fff !important; }
        .timeline .timeline-item .timeline-marker.is-eben.is-outlined {
          background-color: white !important;
          border-color: #f85800 !important; }
          .timeline .timeline-item .timeline-marker.is-eben.is-outlined .image {
            background-color: white !important; }
          .timeline .timeline-item .timeline-marker.is-eben.is-outlined.is-icon {
            background-color: white !important; }
            .timeline .timeline-item .timeline-marker.is-eben.is-outlined.is-icon > i {
              color: #f85800 !important; }
      .timeline .timeline-item .timeline-marker.is-eben-blue {
        background-color: #4bb3e6 !important;
        border-color: #4bb3e6 !important; }
        .timeline .timeline-item .timeline-marker.is-eben-blue .image {
          border-color: #4bb3e6 !important; }
        .timeline .timeline-item .timeline-marker.is-eben-blue.is-icon {
          background-color: #4bb3e6 !important;
          border-color: #4bb3e6 !important; }
          .timeline .timeline-item .timeline-marker.is-eben-blue.is-icon > i {
            color: #fff !important; }
        .timeline .timeline-item .timeline-marker.is-eben-blue.is-outlined {
          background-color: white !important;
          border-color: #4bb3e6 !important; }
          .timeline .timeline-item .timeline-marker.is-eben-blue.is-outlined .image {
            background-color: white !important; }
          .timeline .timeline-item .timeline-marker.is-eben-blue.is-outlined.is-icon {
            background-color: white !important; }
            .timeline .timeline-item .timeline-marker.is-eben-blue.is-outlined.is-icon > i {
              color: #4bb3e6 !important; }
      .timeline .timeline-item .timeline-marker.is-eben-bottledgreen {
        background-color: #c8e2d5 !important;
        border-color: #c8e2d5 !important; }
        .timeline .timeline-item .timeline-marker.is-eben-bottledgreen .image {
          border-color: #c8e2d5 !important; }
        .timeline .timeline-item .timeline-marker.is-eben-bottledgreen.is-icon {
          background-color: #c8e2d5 !important;
          border-color: #c8e2d5 !important; }
          .timeline .timeline-item .timeline-marker.is-eben-bottledgreen.is-icon > i {
            color: rgba(0, 0, 0, 0.7) !important; }
        .timeline .timeline-item .timeline-marker.is-eben-bottledgreen.is-outlined {
          background-color: white !important;
          border-color: #c8e2d5 !important; }
          .timeline .timeline-item .timeline-marker.is-eben-bottledgreen.is-outlined .image {
            background-color: white !important; }
          .timeline .timeline-item .timeline-marker.is-eben-bottledgreen.is-outlined.is-icon {
            background-color: white !important; }
            .timeline .timeline-item .timeline-marker.is-eben-bottledgreen.is-outlined.is-icon > i {
              color: #c8e2d5 !important; }
    .timeline .timeline-item .timeline-content {
      padding: 1em 0 0 0.5em;
      padding: 1em 0 0 2em; }
      .timeline .timeline-item .timeline-content .heading {
        font-weight: 600; }
    .timeline .timeline-item.is-white::before {
      background-color: white; }
    .timeline .timeline-item.is-black::before {
      background-color: #0a0a0a; }
    .timeline .timeline-item.is-light::before {
      background-color: whitesmoke; }
    .timeline .timeline-item.is-dark::before {
      background-color: #363636; }
    .timeline .timeline-item.is-primary::before {
      background-color: #00d1b2; }
    .timeline .timeline-item.is-link::before {
      background-color: #3273dc; }
    .timeline .timeline-item.is-info::before {
      background-color: #209cee; }
    .timeline .timeline-item.is-success::before {
      background-color: #23d160; }
    .timeline .timeline-item.is-warning::before {
      background-color: #ffdd57; }
    .timeline .timeline-item.is-danger::before {
      background-color: #ff3860; }
    .timeline .timeline-item.is-eben::before {
      background-color: #f85800; }
    .timeline .timeline-item.is-eben-blue::before {
      background-color: #4bb3e6; }
    .timeline .timeline-item.is-eben-bottledgreen::before {
      background-color: #c8e2d5; }
  .timeline.is-centered .timeline-header {
    display: flex;
    width: 100%;
    align-self: center; }
  .timeline.is-centered .timeline-item {
    width: 50%;
    align-self: flex-end; }
    .timeline.is-centered .timeline-item:nth-of-type(2n) {
      align-self: flex-start;
      margin-left: 0;
      margin-right: 2em; }
      .timeline.is-centered .timeline-item:nth-of-type(2n)::before {
        right: -0.1em;
        left: auto; }
      .timeline.is-centered .timeline-item:nth-of-type(2n) .timeline-marker {
        left: auto;
        right: -0.45em; }
        .timeline.is-centered .timeline-item:nth-of-type(2n) .timeline-marker.is-image.is-16x16 {
          left: auto;
          right: -8px; }
        .timeline.is-centered .timeline-item:nth-of-type(2n) .timeline-marker.is-image.is-24x24 {
          left: auto;
          right: -12px; }
        .timeline.is-centered .timeline-item:nth-of-type(2n) .timeline-marker.is-image.is-32x32 {
          left: auto;
          right: -16px; }
        .timeline.is-centered .timeline-item:nth-of-type(2n) .timeline-marker.is-image.is-48x48 {
          left: auto;
          right: -24px; }
        .timeline.is-centered .timeline-item:nth-of-type(2n) .timeline-marker.is-image.is-64x64 {
          left: auto;
          right: -32px; }
        .timeline.is-centered .timeline-item:nth-of-type(2n) .timeline-marker.is-image.is-96x96 {
          left: auto;
          right: -48px; }
        .timeline.is-centered .timeline-item:nth-of-type(2n) .timeline-marker.is-image.is-128x128 {
          left: auto;
          right: -64px; }
        .timeline.is-centered .timeline-item:nth-of-type(2n) .timeline-marker.is-icon {
          left: auto;
          right: -0.8em; }
      .timeline.is-centered .timeline-item:nth-of-type(2n) .timeline-content {
        padding: 1em 2em 0 0;
        text-align: right;
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        flex-basis: 100%; }
    .timeline.is-centered .timeline-item:nth-of-type(2n+1)::before {
      content: "";
      background-color: #dbdbdb;
      display: block;
      width: 0.1em;
      height: 100%;
      position: absolute;
      top: 0; }
    .timeline.is-centered .timeline-item.is-white::before {
      background-color: white; }
    .timeline.is-centered .timeline-item.is-black::before {
      background-color: #0a0a0a; }
    .timeline.is-centered .timeline-item.is-light::before {
      background-color: whitesmoke; }
    .timeline.is-centered .timeline-item.is-dark::before {
      background-color: #363636; }
    .timeline.is-centered .timeline-item.is-primary::before {
      background-color: #00d1b2; }
    .timeline.is-centered .timeline-item.is-link::before {
      background-color: #3273dc; }
    .timeline.is-centered .timeline-item.is-info::before {
      background-color: #209cee; }
    .timeline.is-centered .timeline-item.is-success::before {
      background-color: #23d160; }
    .timeline.is-centered .timeline-item.is-warning::before {
      background-color: #ffdd57; }
    .timeline.is-centered .timeline-item.is-danger::before {
      background-color: #ff3860; }
    .timeline.is-centered .timeline-item.is-eben::before {
      background-color: #f85800; }
    .timeline.is-centered .timeline-item.is-eben-blue::before {
      background-color: #4bb3e6; }
    .timeline.is-centered .timeline-item.is-eben-bottledgreen::before {
      background-color: #c8e2d5; }
  .timeline.is-rtl {
    justify-content: flex-end;
    align-items: flex-end; }
    .timeline.is-rtl .timeline-item {
      justify-content: flex-end;
      border-left: none;
      margin-left: 0;
      margin-right: 2em; }
      .timeline.is-rtl .timeline-item::before {
        right: 0;
        left: auto; }
      .timeline.is-rtl .timeline-item .timeline-marker {
        left: auto;
        right: -0.35em; }
        .timeline.is-rtl .timeline-item .timeline-marker.is-image.is-16x16 {
          left: auto;
          right: -8px; }
        .timeline.is-rtl .timeline-item .timeline-marker.is-image.is-24x24 {
          left: auto;
          right: -12px; }
        .timeline.is-rtl .timeline-item .timeline-marker.is-image.is-32x32 {
          left: auto;
          right: -16px; }
        .timeline.is-rtl .timeline-item .timeline-marker.is-image.is-48x48 {
          left: auto;
          right: -24px; }
        .timeline.is-rtl .timeline-item .timeline-marker.is-image.is-64x64 {
          left: auto;
          right: -32px; }
        .timeline.is-rtl .timeline-item .timeline-marker.is-image.is-96x96 {
          left: auto;
          right: -48px; }
        .timeline.is-rtl .timeline-item .timeline-marker.is-image.is-128x128 {
          left: auto;
          right: -64px; }
        .timeline.is-rtl .timeline-item .timeline-marker.is-icon {
          left: auto;
          right: -0.7em; }
      .timeline.is-rtl .timeline-item .timeline-content {
        padding: 1em 2em 0 0;
        text-align: right; }

.tooltip {
  position: relative; }
  .tooltip:hover:not(.is-loading)::after, .tooltip.is-tooltip-active:not(.is-loading)::after {
    z-index: 99999;
    position: absolute;
    display: inline-block;
    pointer-events: none; }
  .tooltip:hover::before, .tooltip.is-tooltip-active::before {
    z-index: 99999;
    position: absolute;
    display: inline-block;
    pointer-events: none; }
  .tooltip:hover:not(.is-loading)::after, .tooltip.is-tooltip-active:not(.is-loading)::after {
    content: "";
    border-style: solid;
    border-width: 0.5rem; }
  .tooltip:hover::before, .tooltip.is-tooltip-active::before {
    opacity: 0;
    content: attr(data-tooltip);
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    font-size: 0.75rem;
    padding: 0.4rem 0.8rem;
    transform: translate(-50%, 1rem);
    background: rgba(74, 74, 74, 0.9);
    border-radius: 3px;
    color: white;
    max-width: 24rem; }
  .tooltip:focus:not(.is-loading)::after, .tooltip:hover:not(.is-loading)::after, .tooltip.is-tooltip-active:not(.is-loading)::after {
    top: 0;
    bottom: auto;
    left: 50%;
    opacity: 1;
    margin-left: -0.5rem;
    margin-top: -0.5rem;
    border-color: rgba(74, 74, 74, 0.9) transparent transparent transparent; }
  .tooltip:focus::before, .tooltip:hover::before, .tooltip.is-tooltip-active::before {
    top: auto;
    bottom: 100%;
    left: 50%;
    opacity: 1;
    transform: translate(-50%, -0.5rem); }
  .tooltip.is-tooltip-right::before {
    top: auto;
    bottom: 50%;
    left: 100%;
    right: auto;
    transform: translate(-1rem, 50%); }
  .tooltip.is-tooltip-right:focus:not(.is-loading)::after, .tooltip.is-tooltip-right:hover:not(.is-loading)::after, .tooltip.is-tooltip-right.is-tooltip-active:not(.is-loading)::after {
    top: 50%;
    left: 100%;
    right: auto;
    border-color: transparent rgba(74, 74, 74, 0.9) transparent transparent; }
  .tooltip.is-tooltip-right:focus::before, .tooltip.is-tooltip-right:hover::before, .tooltip.is-tooltip-right.is-tooltip-active::before {
    transform: translate(0.5rem, 50%); }
  .tooltip.is-tooltip-bottom::before {
    top: 100%;
    bottom: auto;
    left: 50%;
    right: auto;
    transform: translate(-50%, -1rem); }
  .tooltip.is-tooltip-bottom:focus:not(.is-loading)::after, .tooltip.is-tooltip-bottom:hover:not(.is-loading)::after, .tooltip.is-tooltip-bottom.is-tooltip-active:not(.is-loading)::after {
    top: 100%;
    bottom: auto;
    left: 50%;
    right: auto;
    border-color: transparent transparent rgba(74, 74, 74, 0.9) transparent; }
  .tooltip.is-tooltip-bottom:focus::before, .tooltip.is-tooltip-bottom:hover::before, .tooltip.is-tooltip-bottom.is-tooltip-active::before {
    transform: translate(-50%, 0.5rem); }
  .tooltip.is-tooltip-left::before {
    top: auto;
    bottom: 50%;
    left: auto;
    right: 100%;
    transform: translate(1rem, 50%); }
  .tooltip.is-tooltip-left:focus:not(.is-loading)::after, .tooltip.is-tooltip-left:hover:not(.is-loading)::after, .tooltip.is-tooltip-left.is-tooltip-active:not(.is-loading)::after {
    top: 50%;
    left: auto;
    right: calc(100% - .5rem);
    border-color: transparent transparent transparent rgba(74, 74, 74, 0.9); }
  .tooltip.is-tooltip-left:focus::before, .tooltip.is-tooltip-left:hover::before, .tooltip.is-tooltip-left.is-tooltip-active::before {
    transform: translate(-0.5rem, 50%); }
  .tooltip.is-tooltip-multiline::before {
    text-overflow: clip;
    white-space: normal;
    word-break: keep-all; }
  .tooltip.is-tooltip-white:not(.is-loading)::after {
    border-color: rgba(255, 255, 255, 0.9) transparent transparent transparent; }
  .tooltip.is-tooltip-white.is-tooltip-right:not(.is-loading)::after {
    border-color: transparent rgba(255, 255, 255, 0.9) transparent transparent; }
  .tooltip.is-tooltip-white.is-tooltip-bottom:not(.is-loading)::after {
    border-color: transparent transparent rgba(255, 255, 255, 0.9) transparent; }
  .tooltip.is-tooltip-white.is-tooltip-left:not(.is-loading)::after {
    border-color: transparent transparent transparent rgba(255, 255, 255, 0.9); }
  .tooltip.is-tooltip-white::before {
    background: rgba(255, 255, 255, 0.9);
    color: #0a0a0a; }
  .tooltip.is-tooltip-black:not(.is-loading)::after {
    border-color: rgba(10, 10, 10, 0.9) transparent transparent transparent; }
  .tooltip.is-tooltip-black.is-tooltip-right:not(.is-loading)::after {
    border-color: transparent rgba(10, 10, 10, 0.9) transparent transparent; }
  .tooltip.is-tooltip-black.is-tooltip-bottom:not(.is-loading)::after {
    border-color: transparent transparent rgba(10, 10, 10, 0.9) transparent; }
  .tooltip.is-tooltip-black.is-tooltip-left:not(.is-loading)::after {
    border-color: transparent transparent transparent rgba(10, 10, 10, 0.9); }
  .tooltip.is-tooltip-black::before {
    background: rgba(10, 10, 10, 0.9);
    color: white; }
  .tooltip.is-tooltip-light:not(.is-loading)::after {
    border-color: rgba(245, 245, 245, 0.9) transparent transparent transparent; }
  .tooltip.is-tooltip-light.is-tooltip-right:not(.is-loading)::after {
    border-color: transparent rgba(245, 245, 245, 0.9) transparent transparent; }
  .tooltip.is-tooltip-light.is-tooltip-bottom:not(.is-loading)::after {
    border-color: transparent transparent rgba(245, 245, 245, 0.9) transparent; }
  .tooltip.is-tooltip-light.is-tooltip-left:not(.is-loading)::after {
    border-color: transparent transparent transparent rgba(245, 245, 245, 0.9); }
  .tooltip.is-tooltip-light::before {
    background: rgba(245, 245, 245, 0.9);
    color: #363636; }
  .tooltip.is-tooltip-dark:not(.is-loading)::after {
    border-color: rgba(54, 54, 54, 0.9) transparent transparent transparent; }
  .tooltip.is-tooltip-dark.is-tooltip-right:not(.is-loading)::after {
    border-color: transparent rgba(54, 54, 54, 0.9) transparent transparent; }
  .tooltip.is-tooltip-dark.is-tooltip-bottom:not(.is-loading)::after {
    border-color: transparent transparent rgba(54, 54, 54, 0.9) transparent; }
  .tooltip.is-tooltip-dark.is-tooltip-left:not(.is-loading)::after {
    border-color: transparent transparent transparent rgba(54, 54, 54, 0.9); }
  .tooltip.is-tooltip-dark::before {
    background: rgba(54, 54, 54, 0.9);
    color: whitesmoke; }
  .tooltip.is-tooltip-primary:not(.is-loading)::after {
    border-color: rgba(0, 209, 178, 0.9) transparent transparent transparent; }
  .tooltip.is-tooltip-primary.is-tooltip-right:not(.is-loading)::after {
    border-color: transparent rgba(0, 209, 178, 0.9) transparent transparent; }
  .tooltip.is-tooltip-primary.is-tooltip-bottom:not(.is-loading)::after {
    border-color: transparent transparent rgba(0, 209, 178, 0.9) transparent; }
  .tooltip.is-tooltip-primary.is-tooltip-left:not(.is-loading)::after {
    border-color: transparent transparent transparent rgba(0, 209, 178, 0.9); }
  .tooltip.is-tooltip-primary::before {
    background: rgba(0, 209, 178, 0.9);
    color: #fff; }
  .tooltip.is-tooltip-link:not(.is-loading)::after {
    border-color: rgba(50, 115, 220, 0.9) transparent transparent transparent; }
  .tooltip.is-tooltip-link.is-tooltip-right:not(.is-loading)::after {
    border-color: transparent rgba(50, 115, 220, 0.9) transparent transparent; }
  .tooltip.is-tooltip-link.is-tooltip-bottom:not(.is-loading)::after {
    border-color: transparent transparent rgba(50, 115, 220, 0.9) transparent; }
  .tooltip.is-tooltip-link.is-tooltip-left:not(.is-loading)::after {
    border-color: transparent transparent transparent rgba(50, 115, 220, 0.9); }
  .tooltip.is-tooltip-link::before {
    background: rgba(50, 115, 220, 0.9);
    color: #fff; }
  .tooltip.is-tooltip-info:not(.is-loading)::after {
    border-color: rgba(32, 156, 238, 0.9) transparent transparent transparent; }
  .tooltip.is-tooltip-info.is-tooltip-right:not(.is-loading)::after {
    border-color: transparent rgba(32, 156, 238, 0.9) transparent transparent; }
  .tooltip.is-tooltip-info.is-tooltip-bottom:not(.is-loading)::after {
    border-color: transparent transparent rgba(32, 156, 238, 0.9) transparent; }
  .tooltip.is-tooltip-info.is-tooltip-left:not(.is-loading)::after {
    border-color: transparent transparent transparent rgba(32, 156, 238, 0.9); }
  .tooltip.is-tooltip-info::before {
    background: rgba(32, 156, 238, 0.9);
    color: #fff; }
  .tooltip.is-tooltip-success:not(.is-loading)::after {
    border-color: rgba(35, 209, 96, 0.9) transparent transparent transparent; }
  .tooltip.is-tooltip-success.is-tooltip-right:not(.is-loading)::after {
    border-color: transparent rgba(35, 209, 96, 0.9) transparent transparent; }
  .tooltip.is-tooltip-success.is-tooltip-bottom:not(.is-loading)::after {
    border-color: transparent transparent rgba(35, 209, 96, 0.9) transparent; }
  .tooltip.is-tooltip-success.is-tooltip-left:not(.is-loading)::after {
    border-color: transparent transparent transparent rgba(35, 209, 96, 0.9); }
  .tooltip.is-tooltip-success::before {
    background: rgba(35, 209, 96, 0.9);
    color: #fff; }
  .tooltip.is-tooltip-warning:not(.is-loading)::after {
    border-color: rgba(255, 221, 87, 0.9) transparent transparent transparent; }
  .tooltip.is-tooltip-warning.is-tooltip-right:not(.is-loading)::after {
    border-color: transparent rgba(255, 221, 87, 0.9) transparent transparent; }
  .tooltip.is-tooltip-warning.is-tooltip-bottom:not(.is-loading)::after {
    border-color: transparent transparent rgba(255, 221, 87, 0.9) transparent; }
  .tooltip.is-tooltip-warning.is-tooltip-left:not(.is-loading)::after {
    border-color: transparent transparent transparent rgba(255, 221, 87, 0.9); }
  .tooltip.is-tooltip-warning::before {
    background: rgba(255, 221, 87, 0.9);
    color: rgba(0, 0, 0, 0.7); }
  .tooltip.is-tooltip-danger:not(.is-loading)::after {
    border-color: rgba(255, 56, 96, 0.9) transparent transparent transparent; }
  .tooltip.is-tooltip-danger.is-tooltip-right:not(.is-loading)::after {
    border-color: transparent rgba(255, 56, 96, 0.9) transparent transparent; }
  .tooltip.is-tooltip-danger.is-tooltip-bottom:not(.is-loading)::after {
    border-color: transparent transparent rgba(255, 56, 96, 0.9) transparent; }
  .tooltip.is-tooltip-danger.is-tooltip-left:not(.is-loading)::after {
    border-color: transparent transparent transparent rgba(255, 56, 96, 0.9); }
  .tooltip.is-tooltip-danger::before {
    background: rgba(255, 56, 96, 0.9);
    color: #fff; }
  .tooltip.is-tooltip-eben:not(.is-loading)::after {
    border-color: rgba(248, 88, 0, 0.9) transparent transparent transparent; }
  .tooltip.is-tooltip-eben.is-tooltip-right:not(.is-loading)::after {
    border-color: transparent rgba(248, 88, 0, 0.9) transparent transparent; }
  .tooltip.is-tooltip-eben.is-tooltip-bottom:not(.is-loading)::after {
    border-color: transparent transparent rgba(248, 88, 0, 0.9) transparent; }
  .tooltip.is-tooltip-eben.is-tooltip-left:not(.is-loading)::after {
    border-color: transparent transparent transparent rgba(248, 88, 0, 0.9); }
  .tooltip.is-tooltip-eben::before {
    background: rgba(248, 88, 0, 0.9);
    color: #fff; }
  .tooltip.is-tooltip-eben-blue:not(.is-loading)::after {
    border-color: rgba(75, 179, 230, 0.9) transparent transparent transparent; }
  .tooltip.is-tooltip-eben-blue.is-tooltip-right:not(.is-loading)::after {
    border-color: transparent rgba(75, 179, 230, 0.9) transparent transparent; }
  .tooltip.is-tooltip-eben-blue.is-tooltip-bottom:not(.is-loading)::after {
    border-color: transparent transparent rgba(75, 179, 230, 0.9) transparent; }
  .tooltip.is-tooltip-eben-blue.is-tooltip-left:not(.is-loading)::after {
    border-color: transparent transparent transparent rgba(75, 179, 230, 0.9); }
  .tooltip.is-tooltip-eben-blue::before {
    background: rgba(75, 179, 230, 0.9);
    color: #fff; }
  .tooltip.is-tooltip-eben-bottledgreen:not(.is-loading)::after {
    border-color: rgba(200, 226, 213, 0.9) transparent transparent transparent; }
  .tooltip.is-tooltip-eben-bottledgreen.is-tooltip-right:not(.is-loading)::after {
    border-color: transparent rgba(200, 226, 213, 0.9) transparent transparent; }
  .tooltip.is-tooltip-eben-bottledgreen.is-tooltip-bottom:not(.is-loading)::after {
    border-color: transparent transparent rgba(200, 226, 213, 0.9) transparent; }
  .tooltip.is-tooltip-eben-bottledgreen.is-tooltip-left:not(.is-loading)::after {
    border-color: transparent transparent transparent rgba(200, 226, 213, 0.9); }
  .tooltip.is-tooltip-eben-bottledgreen::before {
    background: rgba(200, 226, 213, 0.9);
    color: rgba(0, 0, 0, 0.7); }

.switch[type="checkbox"] {
  outline: 0;
  user-select: none;
  display: inline-block;
  position: absolute;
  opacity: 0; }
  .switch[type="checkbox"]:focus + label::before, .switch[type="checkbox"]:focus + label:before, .switch[type="checkbox"]:focus + label::after, .switch[type="checkbox"]:focus + label:after {
    outline: 1px dotted #b5b5b5; }
  .switch[type="checkbox"][disabled] {
    cursor: not-allowed; }
    .switch[type="checkbox"][disabled] + label {
      opacity: 0.5; }
      .switch[type="checkbox"][disabled] + label::before, .switch[type="checkbox"][disabled] + label:before {
        opacity: 0.5; }
      .switch[type="checkbox"][disabled] + label::after, .switch[type="checkbox"][disabled] + label:after {
        opacity: 0.5; }
      .switch[type="checkbox"][disabled] + label:hover {
        cursor: not-allowed; }
  .switch[type="checkbox"] + label {
    position: relative;
    display: initial;
    font-size: 1rem;
    line-height: initial;
    padding-left: 3.5rem;
    padding-top: 0.2rem;
    cursor: pointer; }
    .switch[type="checkbox"] + label::before, .switch[type="checkbox"] + label:before {
      position: absolute;
      display: block;
      top: 0;
      left: 0;
      width: 3rem;
      height: 1.5rem;
      border: 0.1rem solid transparent;
      border-radius: 3px;
      background: #b5b5b5;
      content: ""; }
    .switch[type="checkbox"] + label::after, .switch[type="checkbox"] + label:after {
      display: block;
      position: absolute;
      top: 0.25rem;
      left: 0.25rem;
      width: 1rem;
      height: 1rem;
      transform: translate3d(0, 0, 0);
      border-radius: 3px;
      background: white;
      transition: all 0.25s ease-out;
      content: ""; }
  .switch[type="checkbox"].is-rtl + label {
    padding-left: 0;
    padding-right: 3.5rem; }
    .switch[type="checkbox"].is-rtl + label::before, .switch[type="checkbox"].is-rtl + label:before {
      left: auto;
      right: 0; }
    .switch[type="checkbox"].is-rtl + label::after, .switch[type="checkbox"].is-rtl + label:after {
      left: auto;
      right: 0.25rem; }
  .switch[type="checkbox"]:checked + label::before, .switch[type="checkbox"]:checked + label:before {
    background: #00d1b2; }
  .switch[type="checkbox"]:checked + label::after {
    left: 1.625rem; }
  .switch[type="checkbox"]:checked.is-rtl + label::after, .switch[type="checkbox"]:checked.is-rtl + label:after {
    left: auto;
    right: 1.625rem; }
  .switch[type="checkbox"].is-outlined + label::before, .switch[type="checkbox"].is-outlined + label:before {
    background-color: transparent;
    border-color: #b5b5b5; }
  .switch[type="checkbox"].is-outlined + label::after, .switch[type="checkbox"].is-outlined + label:after {
    background: #b5b5b5; }
  .switch[type="checkbox"].is-outlined:checked + label::before, .switch[type="checkbox"].is-outlined:checked + label:before {
    background-color: transparent;
    border-color: #00d1b2; }
  .switch[type="checkbox"].is-outlined:checked + label::after, .switch[type="checkbox"].is-outlined:checked + label:after {
    background: #00d1b2; }
  .switch[type="checkbox"].is-thin + label::before, .switch[type="checkbox"].is-thin + label:before {
    top: 0.5454545455rem;
    height: 0.375rem; }
  .switch[type="checkbox"].is-thin + label::after, .switch[type="checkbox"].is-thin + label:after {
    box-shadow: 0px 0px 3px #7a7a7a; }
  .switch[type="checkbox"].is-rounded + label::before, .switch[type="checkbox"].is-rounded + label:before {
    border-radius: 20px; }
  .switch[type="checkbox"].is-rounded + label::after, .switch[type="checkbox"].is-rounded + label:after {
    border-radius: 50%; }
  .switch[type="checkbox"].is-small + label {
    position: relative;
    display: initial;
    font-size: 0.75rem;
    line-height: initial;
    padding-left: 2.75rem;
    padding-top: 0.2rem;
    cursor: pointer; }
    .switch[type="checkbox"].is-small + label::before, .switch[type="checkbox"].is-small + label:before {
      position: absolute;
      display: block;
      top: 0;
      left: 0;
      width: 2.25rem;
      height: 1.125rem;
      border: 0.1rem solid transparent;
      border-radius: 3px;
      background: #b5b5b5;
      content: ""; }
    .switch[type="checkbox"].is-small + label::after, .switch[type="checkbox"].is-small + label:after {
      display: block;
      position: absolute;
      top: 0.25rem;
      left: 0.25rem;
      width: 0.625rem;
      height: 0.625rem;
      transform: translate3d(0, 0, 0);
      border-radius: 3px;
      background: white;
      transition: all 0.25s ease-out;
      content: ""; }
  .switch[type="checkbox"].is-small.is-rtl + label {
    padding-left: 0;
    padding-right: 2.75rem; }
    .switch[type="checkbox"].is-small.is-rtl + label::before, .switch[type="checkbox"].is-small.is-rtl + label:before {
      left: auto;
      right: 0; }
    .switch[type="checkbox"].is-small.is-rtl + label::after, .switch[type="checkbox"].is-small.is-rtl + label:after {
      left: auto;
      right: 0.25rem; }
  .switch[type="checkbox"].is-small:checked + label::before, .switch[type="checkbox"].is-small:checked + label:before {
    background: #00d1b2; }
  .switch[type="checkbox"].is-small:checked + label::after {
    left: 1.25rem; }
  .switch[type="checkbox"].is-small:checked.is-rtl + label::after, .switch[type="checkbox"].is-small:checked.is-rtl + label:after {
    left: auto;
    right: 1.25rem; }
  .switch[type="checkbox"].is-small.is-outlined + label::before, .switch[type="checkbox"].is-small.is-outlined + label:before {
    background-color: transparent;
    border-color: #b5b5b5; }
  .switch[type="checkbox"].is-small.is-outlined + label::after, .switch[type="checkbox"].is-small.is-outlined + label:after {
    background: #b5b5b5; }
  .switch[type="checkbox"].is-small.is-outlined:checked + label::before, .switch[type="checkbox"].is-small.is-outlined:checked + label:before {
    background-color: transparent;
    border-color: #00d1b2; }
  .switch[type="checkbox"].is-small.is-outlined:checked + label::after, .switch[type="checkbox"].is-small.is-outlined:checked + label:after {
    background: #00d1b2; }
  .switch[type="checkbox"].is-small.is-thin + label::before, .switch[type="checkbox"].is-small.is-thin + label:before {
    top: 0.4090909091rem;
    height: 0.28125rem; }
  .switch[type="checkbox"].is-small.is-thin + label::after, .switch[type="checkbox"].is-small.is-thin + label:after {
    box-shadow: 0px 0px 3px #7a7a7a; }
  .switch[type="checkbox"].is-small.is-rounded + label::before, .switch[type="checkbox"].is-small.is-rounded + label:before {
    border-radius: 20px; }
  .switch[type="checkbox"].is-small.is-rounded + label::after, .switch[type="checkbox"].is-small.is-rounded + label:after {
    border-radius: 50%; }
  .switch[type="checkbox"].is-medium + label {
    position: relative;
    display: initial;
    font-size: 1.25rem;
    line-height: initial;
    padding-left: 4.25rem;
    padding-top: 0.2rem;
    cursor: pointer; }
    .switch[type="checkbox"].is-medium + label::before, .switch[type="checkbox"].is-medium + label:before {
      position: absolute;
      display: block;
      top: 0;
      left: 0;
      width: 3.75rem;
      height: 1.875rem;
      border: 0.1rem solid transparent;
      border-radius: 3px;
      background: #b5b5b5;
      content: ""; }
    .switch[type="checkbox"].is-medium + label::after, .switch[type="checkbox"].is-medium + label:after {
      display: block;
      position: absolute;
      top: 0.25rem;
      left: 0.25rem;
      width: 1.375rem;
      height: 1.375rem;
      transform: translate3d(0, 0, 0);
      border-radius: 3px;
      background: white;
      transition: all 0.25s ease-out;
      content: ""; }
  .switch[type="checkbox"].is-medium.is-rtl + label {
    padding-left: 0;
    padding-right: 4.25rem; }
    .switch[type="checkbox"].is-medium.is-rtl + label::before, .switch[type="checkbox"].is-medium.is-rtl + label:before {
      left: auto;
      right: 0; }
    .switch[type="checkbox"].is-medium.is-rtl + label::after, .switch[type="checkbox"].is-medium.is-rtl + label:after {
      left: auto;
      right: 0.25rem; }
  .switch[type="checkbox"].is-medium:checked + label::before, .switch[type="checkbox"].is-medium:checked + label:before {
    background: #00d1b2; }
  .switch[type="checkbox"].is-medium:checked + label::after {
    left: 2rem; }
  .switch[type="checkbox"].is-medium:checked.is-rtl + label::after, .switch[type="checkbox"].is-medium:checked.is-rtl + label:after {
    left: auto;
    right: 2rem; }
  .switch[type="checkbox"].is-medium.is-outlined + label::before, .switch[type="checkbox"].is-medium.is-outlined + label:before {
    background-color: transparent;
    border-color: #b5b5b5; }
  .switch[type="checkbox"].is-medium.is-outlined + label::after, .switch[type="checkbox"].is-medium.is-outlined + label:after {
    background: #b5b5b5; }
  .switch[type="checkbox"].is-medium.is-outlined:checked + label::before, .switch[type="checkbox"].is-medium.is-outlined:checked + label:before {
    background-color: transparent;
    border-color: #00d1b2; }
  .switch[type="checkbox"].is-medium.is-outlined:checked + label::after, .switch[type="checkbox"].is-medium.is-outlined:checked + label:after {
    background: #00d1b2; }
  .switch[type="checkbox"].is-medium.is-thin + label::before, .switch[type="checkbox"].is-medium.is-thin + label:before {
    top: 0.6818181818rem;
    height: 0.46875rem; }
  .switch[type="checkbox"].is-medium.is-thin + label::after, .switch[type="checkbox"].is-medium.is-thin + label:after {
    box-shadow: 0px 0px 3px #7a7a7a; }
  .switch[type="checkbox"].is-medium.is-rounded + label::before, .switch[type="checkbox"].is-medium.is-rounded + label:before {
    border-radius: 20px; }
  .switch[type="checkbox"].is-medium.is-rounded + label::after, .switch[type="checkbox"].is-medium.is-rounded + label:after {
    border-radius: 50%; }
  .switch[type="checkbox"].is-large + label {
    position: relative;
    display: initial;
    font-size: 1.5rem;
    line-height: initial;
    padding-left: 5rem;
    padding-top: 0.2rem;
    cursor: pointer; }
    .switch[type="checkbox"].is-large + label::before, .switch[type="checkbox"].is-large + label:before {
      position: absolute;
      display: block;
      top: 0;
      left: 0;
      width: 4.5rem;
      height: 2.25rem;
      border: 0.1rem solid transparent;
      border-radius: 3px;
      background: #b5b5b5;
      content: ""; }
    .switch[type="checkbox"].is-large + label::after, .switch[type="checkbox"].is-large + label:after {
      display: block;
      position: absolute;
      top: 0.25rem;
      left: 0.25rem;
      width: 1.75rem;
      height: 1.75rem;
      transform: translate3d(0, 0, 0);
      border-radius: 3px;
      background: white;
      transition: all 0.25s ease-out;
      content: ""; }
  .switch[type="checkbox"].is-large.is-rtl + label {
    padding-left: 0;
    padding-right: 5rem; }
    .switch[type="checkbox"].is-large.is-rtl + label::before, .switch[type="checkbox"].is-large.is-rtl + label:before {
      left: auto;
      right: 0; }
    .switch[type="checkbox"].is-large.is-rtl + label::after, .switch[type="checkbox"].is-large.is-rtl + label:after {
      left: auto;
      right: 0.25rem; }
  .switch[type="checkbox"].is-large:checked + label::before, .switch[type="checkbox"].is-large:checked + label:before {
    background: #00d1b2; }
  .switch[type="checkbox"].is-large:checked + label::after {
    left: 2.375rem; }
  .switch[type="checkbox"].is-large:checked.is-rtl + label::after, .switch[type="checkbox"].is-large:checked.is-rtl + label:after {
    left: auto;
    right: 2.375rem; }
  .switch[type="checkbox"].is-large.is-outlined + label::before, .switch[type="checkbox"].is-large.is-outlined + label:before {
    background-color: transparent;
    border-color: #b5b5b5; }
  .switch[type="checkbox"].is-large.is-outlined + label::after, .switch[type="checkbox"].is-large.is-outlined + label:after {
    background: #b5b5b5; }
  .switch[type="checkbox"].is-large.is-outlined:checked + label::before, .switch[type="checkbox"].is-large.is-outlined:checked + label:before {
    background-color: transparent;
    border-color: #00d1b2; }
  .switch[type="checkbox"].is-large.is-outlined:checked + label::after, .switch[type="checkbox"].is-large.is-outlined:checked + label:after {
    background: #00d1b2; }
  .switch[type="checkbox"].is-large.is-thin + label::before, .switch[type="checkbox"].is-large.is-thin + label:before {
    top: 0.8181818182rem;
    height: 0.5625rem; }
  .switch[type="checkbox"].is-large.is-thin + label::after, .switch[type="checkbox"].is-large.is-thin + label:after {
    box-shadow: 0px 0px 3px #7a7a7a; }
  .switch[type="checkbox"].is-large.is-rounded + label::before, .switch[type="checkbox"].is-large.is-rounded + label:before {
    border-radius: 20px; }
  .switch[type="checkbox"].is-large.is-rounded + label::after, .switch[type="checkbox"].is-large.is-rounded + label:after {
    border-radius: 50%; }
  .switch[type="checkbox"].is-white:checked + label::before, .switch[type="checkbox"].is-white:checked + label:before {
    background: white; }
  .switch[type="checkbox"].is-white.is-outlined:checked + label::before, .switch[type="checkbox"].is-white.is-outlined:checked + label:before {
    background-color: transparent;
    border-color: white !important; }
  .switch[type="checkbox"].is-white.is-outlined:checked + label::after, .switch[type="checkbox"].is-white.is-outlined:checked + label:after {
    background: white; }
  .switch[type="checkbox"].is-white.is-thin.is-outlined + label::after, .switch[type="checkbox"].is-white.is-thin.is-outlined + label:after {
    box-shadow: none; }
  .switch[type="checkbox"].is-unchecked-white + label::before, .switch[type="checkbox"].is-unchecked-white + label:before {
    background: white; }
  .switch[type="checkbox"].is-unchecked-white.is-outlined + label::before, .switch[type="checkbox"].is-unchecked-white.is-outlined + label:before {
    background-color: transparent;
    border-color: white !important; }
  .switch[type="checkbox"].is-unchecked-white.is-outlined + label::after, .switch[type="checkbox"].is-unchecked-white.is-outlined + label:after {
    background: white; }
  .switch[type="checkbox"].is-black:checked + label::before, .switch[type="checkbox"].is-black:checked + label:before {
    background: #0a0a0a; }
  .switch[type="checkbox"].is-black.is-outlined:checked + label::before, .switch[type="checkbox"].is-black.is-outlined:checked + label:before {
    background-color: transparent;
    border-color: #0a0a0a !important; }
  .switch[type="checkbox"].is-black.is-outlined:checked + label::after, .switch[type="checkbox"].is-black.is-outlined:checked + label:after {
    background: #0a0a0a; }
  .switch[type="checkbox"].is-black.is-thin.is-outlined + label::after, .switch[type="checkbox"].is-black.is-thin.is-outlined + label:after {
    box-shadow: none; }
  .switch[type="checkbox"].is-unchecked-black + label::before, .switch[type="checkbox"].is-unchecked-black + label:before {
    background: #0a0a0a; }
  .switch[type="checkbox"].is-unchecked-black.is-outlined + label::before, .switch[type="checkbox"].is-unchecked-black.is-outlined + label:before {
    background-color: transparent;
    border-color: #0a0a0a !important; }
  .switch[type="checkbox"].is-unchecked-black.is-outlined + label::after, .switch[type="checkbox"].is-unchecked-black.is-outlined + label:after {
    background: #0a0a0a; }
  .switch[type="checkbox"].is-light:checked + label::before, .switch[type="checkbox"].is-light:checked + label:before {
    background: whitesmoke; }
  .switch[type="checkbox"].is-light.is-outlined:checked + label::before, .switch[type="checkbox"].is-light.is-outlined:checked + label:before {
    background-color: transparent;
    border-color: whitesmoke !important; }
  .switch[type="checkbox"].is-light.is-outlined:checked + label::after, .switch[type="checkbox"].is-light.is-outlined:checked + label:after {
    background: whitesmoke; }
  .switch[type="checkbox"].is-light.is-thin.is-outlined + label::after, .switch[type="checkbox"].is-light.is-thin.is-outlined + label:after {
    box-shadow: none; }
  .switch[type="checkbox"].is-unchecked-light + label::before, .switch[type="checkbox"].is-unchecked-light + label:before {
    background: whitesmoke; }
  .switch[type="checkbox"].is-unchecked-light.is-outlined + label::before, .switch[type="checkbox"].is-unchecked-light.is-outlined + label:before {
    background-color: transparent;
    border-color: whitesmoke !important; }
  .switch[type="checkbox"].is-unchecked-light.is-outlined + label::after, .switch[type="checkbox"].is-unchecked-light.is-outlined + label:after {
    background: whitesmoke; }
  .switch[type="checkbox"].is-dark:checked + label::before, .switch[type="checkbox"].is-dark:checked + label:before {
    background: #363636; }
  .switch[type="checkbox"].is-dark.is-outlined:checked + label::before, .switch[type="checkbox"].is-dark.is-outlined:checked + label:before {
    background-color: transparent;
    border-color: #363636 !important; }
  .switch[type="checkbox"].is-dark.is-outlined:checked + label::after, .switch[type="checkbox"].is-dark.is-outlined:checked + label:after {
    background: #363636; }
  .switch[type="checkbox"].is-dark.is-thin.is-outlined + label::after, .switch[type="checkbox"].is-dark.is-thin.is-outlined + label:after {
    box-shadow: none; }
  .switch[type="checkbox"].is-unchecked-dark + label::before, .switch[type="checkbox"].is-unchecked-dark + label:before {
    background: #363636; }
  .switch[type="checkbox"].is-unchecked-dark.is-outlined + label::before, .switch[type="checkbox"].is-unchecked-dark.is-outlined + label:before {
    background-color: transparent;
    border-color: #363636 !important; }
  .switch[type="checkbox"].is-unchecked-dark.is-outlined + label::after, .switch[type="checkbox"].is-unchecked-dark.is-outlined + label:after {
    background: #363636; }
  .switch[type="checkbox"].is-primary:checked + label::before, .switch[type="checkbox"].is-primary:checked + label:before {
    background: #00d1b2; }
  .switch[type="checkbox"].is-primary.is-outlined:checked + label::before, .switch[type="checkbox"].is-primary.is-outlined:checked + label:before {
    background-color: transparent;
    border-color: #00d1b2 !important; }
  .switch[type="checkbox"].is-primary.is-outlined:checked + label::after, .switch[type="checkbox"].is-primary.is-outlined:checked + label:after {
    background: #00d1b2; }
  .switch[type="checkbox"].is-primary.is-thin.is-outlined + label::after, .switch[type="checkbox"].is-primary.is-thin.is-outlined + label:after {
    box-shadow: none; }
  .switch[type="checkbox"].is-unchecked-primary + label::before, .switch[type="checkbox"].is-unchecked-primary + label:before {
    background: #00d1b2; }
  .switch[type="checkbox"].is-unchecked-primary.is-outlined + label::before, .switch[type="checkbox"].is-unchecked-primary.is-outlined + label:before {
    background-color: transparent;
    border-color: #00d1b2 !important; }
  .switch[type="checkbox"].is-unchecked-primary.is-outlined + label::after, .switch[type="checkbox"].is-unchecked-primary.is-outlined + label:after {
    background: #00d1b2; }
  .switch[type="checkbox"].is-link:checked + label::before, .switch[type="checkbox"].is-link:checked + label:before {
    background: #3273dc; }
  .switch[type="checkbox"].is-link.is-outlined:checked + label::before, .switch[type="checkbox"].is-link.is-outlined:checked + label:before {
    background-color: transparent;
    border-color: #3273dc !important; }
  .switch[type="checkbox"].is-link.is-outlined:checked + label::after, .switch[type="checkbox"].is-link.is-outlined:checked + label:after {
    background: #3273dc; }
  .switch[type="checkbox"].is-link.is-thin.is-outlined + label::after, .switch[type="checkbox"].is-link.is-thin.is-outlined + label:after {
    box-shadow: none; }
  .switch[type="checkbox"].is-unchecked-link + label::before, .switch[type="checkbox"].is-unchecked-link + label:before {
    background: #3273dc; }
  .switch[type="checkbox"].is-unchecked-link.is-outlined + label::before, .switch[type="checkbox"].is-unchecked-link.is-outlined + label:before {
    background-color: transparent;
    border-color: #3273dc !important; }
  .switch[type="checkbox"].is-unchecked-link.is-outlined + label::after, .switch[type="checkbox"].is-unchecked-link.is-outlined + label:after {
    background: #3273dc; }
  .switch[type="checkbox"].is-info:checked + label::before, .switch[type="checkbox"].is-info:checked + label:before {
    background: #209cee; }
  .switch[type="checkbox"].is-info.is-outlined:checked + label::before, .switch[type="checkbox"].is-info.is-outlined:checked + label:before {
    background-color: transparent;
    border-color: #209cee !important; }
  .switch[type="checkbox"].is-info.is-outlined:checked + label::after, .switch[type="checkbox"].is-info.is-outlined:checked + label:after {
    background: #209cee; }
  .switch[type="checkbox"].is-info.is-thin.is-outlined + label::after, .switch[type="checkbox"].is-info.is-thin.is-outlined + label:after {
    box-shadow: none; }
  .switch[type="checkbox"].is-unchecked-info + label::before, .switch[type="checkbox"].is-unchecked-info + label:before {
    background: #209cee; }
  .switch[type="checkbox"].is-unchecked-info.is-outlined + label::before, .switch[type="checkbox"].is-unchecked-info.is-outlined + label:before {
    background-color: transparent;
    border-color: #209cee !important; }
  .switch[type="checkbox"].is-unchecked-info.is-outlined + label::after, .switch[type="checkbox"].is-unchecked-info.is-outlined + label:after {
    background: #209cee; }
  .switch[type="checkbox"].is-success:checked + label::before, .switch[type="checkbox"].is-success:checked + label:before {
    background: #23d160; }
  .switch[type="checkbox"].is-success.is-outlined:checked + label::before, .switch[type="checkbox"].is-success.is-outlined:checked + label:before {
    background-color: transparent;
    border-color: #23d160 !important; }
  .switch[type="checkbox"].is-success.is-outlined:checked + label::after, .switch[type="checkbox"].is-success.is-outlined:checked + label:after {
    background: #23d160; }
  .switch[type="checkbox"].is-success.is-thin.is-outlined + label::after, .switch[type="checkbox"].is-success.is-thin.is-outlined + label:after {
    box-shadow: none; }
  .switch[type="checkbox"].is-unchecked-success + label::before, .switch[type="checkbox"].is-unchecked-success + label:before {
    background: #23d160; }
  .switch[type="checkbox"].is-unchecked-success.is-outlined + label::before, .switch[type="checkbox"].is-unchecked-success.is-outlined + label:before {
    background-color: transparent;
    border-color: #23d160 !important; }
  .switch[type="checkbox"].is-unchecked-success.is-outlined + label::after, .switch[type="checkbox"].is-unchecked-success.is-outlined + label:after {
    background: #23d160; }
  .switch[type="checkbox"].is-warning:checked + label::before, .switch[type="checkbox"].is-warning:checked + label:before {
    background: #ffdd57; }
  .switch[type="checkbox"].is-warning.is-outlined:checked + label::before, .switch[type="checkbox"].is-warning.is-outlined:checked + label:before {
    background-color: transparent;
    border-color: #ffdd57 !important; }
  .switch[type="checkbox"].is-warning.is-outlined:checked + label::after, .switch[type="checkbox"].is-warning.is-outlined:checked + label:after {
    background: #ffdd57; }
  .switch[type="checkbox"].is-warning.is-thin.is-outlined + label::after, .switch[type="checkbox"].is-warning.is-thin.is-outlined + label:after {
    box-shadow: none; }
  .switch[type="checkbox"].is-unchecked-warning + label::before, .switch[type="checkbox"].is-unchecked-warning + label:before {
    background: #ffdd57; }
  .switch[type="checkbox"].is-unchecked-warning.is-outlined + label::before, .switch[type="checkbox"].is-unchecked-warning.is-outlined + label:before {
    background-color: transparent;
    border-color: #ffdd57 !important; }
  .switch[type="checkbox"].is-unchecked-warning.is-outlined + label::after, .switch[type="checkbox"].is-unchecked-warning.is-outlined + label:after {
    background: #ffdd57; }
  .switch[type="checkbox"].is-danger:checked + label::before, .switch[type="checkbox"].is-danger:checked + label:before {
    background: #ff3860; }
  .switch[type="checkbox"].is-danger.is-outlined:checked + label::before, .switch[type="checkbox"].is-danger.is-outlined:checked + label:before {
    background-color: transparent;
    border-color: #ff3860 !important; }
  .switch[type="checkbox"].is-danger.is-outlined:checked + label::after, .switch[type="checkbox"].is-danger.is-outlined:checked + label:after {
    background: #ff3860; }
  .switch[type="checkbox"].is-danger.is-thin.is-outlined + label::after, .switch[type="checkbox"].is-danger.is-thin.is-outlined + label:after {
    box-shadow: none; }
  .switch[type="checkbox"].is-unchecked-danger + label::before, .switch[type="checkbox"].is-unchecked-danger + label:before {
    background: #ff3860; }
  .switch[type="checkbox"].is-unchecked-danger.is-outlined + label::before, .switch[type="checkbox"].is-unchecked-danger.is-outlined + label:before {
    background-color: transparent;
    border-color: #ff3860 !important; }
  .switch[type="checkbox"].is-unchecked-danger.is-outlined + label::after, .switch[type="checkbox"].is-unchecked-danger.is-outlined + label:after {
    background: #ff3860; }
  .switch[type="checkbox"].is-eben:checked + label::before, .switch[type="checkbox"].is-eben:checked + label:before {
    background: #f85800; }
  .switch[type="checkbox"].is-eben.is-outlined:checked + label::before, .switch[type="checkbox"].is-eben.is-outlined:checked + label:before {
    background-color: transparent;
    border-color: #f85800 !important; }
  .switch[type="checkbox"].is-eben.is-outlined:checked + label::after, .switch[type="checkbox"].is-eben.is-outlined:checked + label:after {
    background: #f85800; }
  .switch[type="checkbox"].is-eben.is-thin.is-outlined + label::after, .switch[type="checkbox"].is-eben.is-thin.is-outlined + label:after {
    box-shadow: none; }
  .switch[type="checkbox"].is-unchecked-eben + label::before, .switch[type="checkbox"].is-unchecked-eben + label:before {
    background: #f85800; }
  .switch[type="checkbox"].is-unchecked-eben.is-outlined + label::before, .switch[type="checkbox"].is-unchecked-eben.is-outlined + label:before {
    background-color: transparent;
    border-color: #f85800 !important; }
  .switch[type="checkbox"].is-unchecked-eben.is-outlined + label::after, .switch[type="checkbox"].is-unchecked-eben.is-outlined + label:after {
    background: #f85800; }
  .switch[type="checkbox"].is-eben-blue:checked + label::before, .switch[type="checkbox"].is-eben-blue:checked + label:before {
    background: #4bb3e6; }
  .switch[type="checkbox"].is-eben-blue.is-outlined:checked + label::before, .switch[type="checkbox"].is-eben-blue.is-outlined:checked + label:before {
    background-color: transparent;
    border-color: #4bb3e6 !important; }
  .switch[type="checkbox"].is-eben-blue.is-outlined:checked + label::after, .switch[type="checkbox"].is-eben-blue.is-outlined:checked + label:after {
    background: #4bb3e6; }
  .switch[type="checkbox"].is-eben-blue.is-thin.is-outlined + label::after, .switch[type="checkbox"].is-eben-blue.is-thin.is-outlined + label:after {
    box-shadow: none; }
  .switch[type="checkbox"].is-unchecked-eben-blue + label::before, .switch[type="checkbox"].is-unchecked-eben-blue + label:before {
    background: #4bb3e6; }
  .switch[type="checkbox"].is-unchecked-eben-blue.is-outlined + label::before, .switch[type="checkbox"].is-unchecked-eben-blue.is-outlined + label:before {
    background-color: transparent;
    border-color: #4bb3e6 !important; }
  .switch[type="checkbox"].is-unchecked-eben-blue.is-outlined + label::after, .switch[type="checkbox"].is-unchecked-eben-blue.is-outlined + label:after {
    background: #4bb3e6; }
  .switch[type="checkbox"].is-eben-bottledgreen:checked + label::before, .switch[type="checkbox"].is-eben-bottledgreen:checked + label:before {
    background: #c8e2d5; }
  .switch[type="checkbox"].is-eben-bottledgreen.is-outlined:checked + label::before, .switch[type="checkbox"].is-eben-bottledgreen.is-outlined:checked + label:before {
    background-color: transparent;
    border-color: #c8e2d5 !important; }
  .switch[type="checkbox"].is-eben-bottledgreen.is-outlined:checked + label::after, .switch[type="checkbox"].is-eben-bottledgreen.is-outlined:checked + label:after {
    background: #c8e2d5; }
  .switch[type="checkbox"].is-eben-bottledgreen.is-thin.is-outlined + label::after, .switch[type="checkbox"].is-eben-bottledgreen.is-thin.is-outlined + label:after {
    box-shadow: none; }
  .switch[type="checkbox"].is-unchecked-eben-bottledgreen + label::before, .switch[type="checkbox"].is-unchecked-eben-bottledgreen + label:before {
    background: #c8e2d5; }
  .switch[type="checkbox"].is-unchecked-eben-bottledgreen.is-outlined + label::before, .switch[type="checkbox"].is-unchecked-eben-bottledgreen.is-outlined + label:before {
    background-color: transparent;
    border-color: #c8e2d5 !important; }
  .switch[type="checkbox"].is-unchecked-eben-bottledgreen.is-outlined + label::after, .switch[type="checkbox"].is-unchecked-eben-bottledgreen.is-outlined + label:after {
    background: #c8e2d5; }
/*# sourceMappingURL=custom_bulma.css.map */
	</style>
</head>

<body>
<?= $this->fetch('content') ?>

</body>

</html>


