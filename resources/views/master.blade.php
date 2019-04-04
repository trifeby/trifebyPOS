<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<meta name="twitter:site" content="@metroui">
	<meta name="twitter:creator" content="@pimenov_sergey">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="Metro 4 Components Library">
	<meta name="twitter:description" content="Metro 4 is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with responsive grid system, extensive prebuilt components, and powerful plugins built on jQuery.">
	<meta name="twitter:image" content="https://metroui.org.ua/images/m4-logo-social.png">

	<meta property="og:url" content="https://metroui.org.ua/v4/index.html">
	<meta property="og:title" content="Metro 4 Components Library">
	<meta property="og:description" content="Metro 4 is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with responsive grid system, extensive prebuilt components, and powerful plugins built on jQuery.">
	<meta property="og:type" content="website">
	<meta property="og:image" content="https://metroui.org.ua/images/m4-logo-social.png">
	<meta property="og:image:secure_url" content="https://metroui.org.ua/images/m4-logo-social.png">
	<meta property="og:image:type" content="image/png">
	<meta property="og:image:width" content="968">
	<meta property="og:image:height" content="504">

	<meta name="author" content="Sergey Pimenov">
	<meta name="description" content="The most popular HTML, CSS, and JS library in Metro style.">
	<meta name="keywords" content="HTML, CSS, JS, Metro, CSS3, Javascript, HTML5, UI, Library, Web, Development, Framework">

	<link rel="shortcut icon" href="{{asset('metromini/docs/favicon.ico')}}" type="image/x-icon">
	<link rel="icon" href="{{asset('metromini/docs/favicon.ico')}}" type="image/x-icon">

	<link href="{{asset('metromini/docs/metro/css/metro-all.css?ver=@@b-version')}}" rel="stylesheet">
	<link id="color-scheme" href="{{asset('metromini/docs/metro/css/schemes/red-alert.css')}}" rel="stylesheet">
	<link href="{{asset('metromini/docs/metro/css/third-party/datatables.css?ver=@@b-version')}}" rel="stylesheet">

	<title>POS SMK 10</title>

	<style>
	
/*
 * Metro 4 Components Library v4.2.39  (https://metroui.org.ua)
 * Copyright 2019 Sergey Pimenov
 * Licensed under MIT
 */

.bg-scheme {
  background-color: #ffffff !important;
}
.fg-scheme {
  color: #000000 !important;
}
.bg-scheme-secondary {
  background-color: #F8F8F8 !important;
}
.fg-scheme-secondary {
  color: #3a3a3a !important;
}

.bg-control {
  background-color: #00838f !important;
}
.fg-control {
  color: #ffffff !important;
}
.bd-default {
  border-color: #00838f !important;
}

.disabled {
  cursor: default;
}
body {
  font-size: 16px;
  font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", "Roboto", "Ubuntu", "Helvetica Neue", sans-serif;
  color: #000000;
  background-color: #ffffff;
}
hr {
  background-color: #00838f;
}
input[type=text],
input[type=password],
input[type=tel],
input[type=datetime-local],
input[type=email],
input[type=file],
input[type=month],
input[type=number],
input[type=search],
input[type=time],
input[type=url],
input[type=week],
input[type=file],
select,
textarea,
.file,
.input,
.textarea,
.select {
  background-color: #ffffff;
  color: #000000;
  border-color: #00838f !important;
}
input[type=text]:focus,
input[type=password]:focus,
input[type=tel]:focus,
input[type=datetime-local]:focus,
input[type=email]:focus,
input[type=file]:focus,
input[type=month]:focus,
input[type=number]:focus,
input[type=search]:focus,
input[type=time]:focus,
input[type=url]:focus,
input[type=week]:focus,
input[type=file]:focus,
select:focus,
textarea:focus,
.file:focus,
.input:focus,
.textarea:focus,
.select:focus,
input[type=text].focused,
input[type=password].focused,
input[type=tel].focused,
input[type=datetime-local].focused,
input[type=email].focused,
input[type=file].focused,
input[type=month].focused,
input[type=number].focused,
input[type=search].focused,
input[type=time].focused,
input[type=url].focused,
input[type=week].focused,
input[type=file].focused,
select.focused,
textarea.focused,
.file.focused,
.input.focused,
.textarea.focused,
.select.focused {
  -webkit-box-shadow: 0 0 0 3px rgba(175, 0, 21, 0.45);
          box-shadow: 0 0 0 3px rgba(175, 0, 21, 0.45);
}
.input,
.select,
.textarea,
.file {
  border-style: solid!important;
}

.input .prepend,
.select .prepend,
.textarea .prepend,
.file .prepend {
  background-color: #00838f;
  color: #ffffff;
}
.input input,
.select input,
.textarea input,
.file input,
.input select,
.select select,
.textarea select,
.file select,
.input textarea,
.select textarea,
.textarea textarea,
.file textarea {
  -webkit-box-shadow: none!important;
          box-shadow: none!important;
  border-color: transparent;
}
.file .button {
  background-color: #00838f;
  color: #ffffff;
}
.select .active a {
  background-color: #00838f !important;
  color: #ffffff !important;
}
.checkbox .check {
  border-color: #00838f;
}
.checkbox .check::before {
  border-color: #000000;
}
.checkbox input[type=checkbox]:checked ~ .check {
  border-color: #00838f;
  background-color: #00838f;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.checkbox input[type=checkbox]:checked ~ .check::before {
  border-color: #ffffff;
}
.checkbox input[type=checkbox]:disabled ~ .check {
  border-color: rgba(175, 0, 21, 0.25);
  background-color: rgba(175, 0, 21, 0.25);
}
.checkbox input[type=checkbox]:disabled ~ .check::before {
  border-color: rgba(175, 0, 21, 0.25);
}
.checkbox input[data-indeterminate=true] ~ .check {
  border-color: #00838f;
  background-color: #00838f;
}
.radio .check {
  border-color: #00838f;
}
.radio input[type=radio]:checked ~ .check {
  border-color: #00838f;
  background-color: #00838f;
}
.radio input[type=radio]:checked ~ .check::before {
  border-color: #ffffff;
  background-color: #ffffff;
}
.radio input[type=radio]:disabled ~ .check {
  border-color: rgba(175, 0, 21, 0.25);
  background-color: rgba(175, 0, 21, 0.25);
}
.radio input[type=radio]:disabled ~ .check::before {
  border-color: rgba(175, 0, 21, 0.25);
  background-color: rgba(175, 0, 21, 0.25);
}
.checkbox .check,
.radio .check {
  color: #ffffff;
}
.switch .check {
  border-color: #00838f;
}
.switch .check::after {
  border-color: #00838f;
  background-color: #00838f;
}
.switch input[type="checkbox"]:checked ~ .check {
  border-color: #00838f;
  background-color: #00838f;
}
.switch input[type="checkbox"]:disabled ~ .check {
  border-color: rgba(175, 0, 21, 0.25);
  background-color: rgba(175, 0, 21, 0.25);
}
.switch input[type="checkbox"]:disabled ~ .check::after {
  border-color: rgba(175, 0, 21, 0.25);
  background-color: rgba(175, 0, 21, 0.25);
}
.switch input[type="checkbox"]:disabled:not(:checked) ~ .check::after {
  opacity: 0.5;
}
.button,
.command-button,
.shortcut,
.tool-button {
  background-color: #AF0015;
  color: #ffffff;
}
.button:active,
.command-button:active,
.shortcut:active,
.tool-button:active,
.button.focus,
.command-button.focus,
.shortcut.focus,
.tool-button.focus,
.button:focus,
.command-button:focus,
.shortcut:focus,
.tool-button:focus {
  -webkit-box-shadow: 0 0 0 3px rgba(175, 0, 21, 0.45);
          box-shadow: 0 0 0 3px rgba(175, 0, 21, 0.45);
}
.button:hover,
.command-button:hover,
.shortcut:hover,
.tool-button:hover {
  background-color: #960012;
}
.info-button {
  border-color: #AF0015;
}
.info-button .button {
  background-color: #AF0015;
  color: #ffffff;
}
.info-button .button:hover {
  background-color: #960012;
}
.image-button {
  border-color: #AF0015;
}
.image-button .icon {
  background-color: #AF0015;
  color: #ffffff;
}
.image-button .icon:hover {
  background-color: #960012;
}
.breadcrumbs {
  background-color: #ffffff;
  color: #AF0015;
}
.breadcrumbs .page-item::before,
.breadcrumbs .page-item::after {
  background-color: #AF0015 !important;
}
.breadcrumbs .page-link:hover {
  color: #960012;
}
.pagination .page-item:not(.no-link) {
  background-color: #AF0015;
  color: #ffffff;
  border: 1px #AF0015 solid;
}
.pagination .page-item.active,
.pagination .page-item:hover {
  background-color: #960012;
}
.pagination .no-link {
  background-color: transparent;
  color: #AF0015;
}
.accordion .frame .heading {
  background-color: #AF0015;
  color: #ffffff;
}
.accordion .frame {
  margin: 0;
}
.accordion .frame + .frame {
  border-top: 1px rgba(175, 0, 21, 0.25) solid;
}
.h-menu {
  background-color: #AF0015;
  color: #ffffff;
}
.h-menu > li > a.dropdown-toggle::before {
  border-color: #ffffff;
}
.d-menu,
.v-menu {
  background-color: #ffffff !important;
  color: #AF0015;
  border: 1px solid #AF0015;
  -webkit-box-shadow: none;
          box-shadow: none;
}
.d-menu .dropdown-toggle::before,
.v-menu .dropdown-toggle::before {
  border-color: #AF0015 !important;
}
.d-menu li:hover,
.v-menu li:hover {
  background-color: #AF0015 !important;
  color: #ffffff !important;
}
.d-menu li:hover .dropdown-toggle::before,
.v-menu li:hover .dropdown-toggle::before {
  border-color: #ffffff !important;
}
.d-menu .divider,
.v-menu .divider {
  background-color: #AF0015 !important;
}
.d-menu .menu-title,
.v-menu .menu-title {
  background-color: #7c000f;
  color: #ffffff;
}
.d-menu .disabled,
.v-menu .disabled {
  color: rgba(175, 0, 21, 0.5) !important;
}
.v-menu .v-menu {
  border: none!important;
}
.t-menu {
  background-color: #AF0015;
  color: #ffffff;
  -webkit-box-shadow: none;
          box-shadow: none;
}
.t-menu li a {
  border-color: rgba(255, 255, 255, 0.25) !important;
}
.t-menu .dropdown-toggle::after {
  border-color: transparent transparent #ffffff transparent;
}
.app-bar {
  background-color: #AF0015;
  color: #ffffff;
}
.app-bar .dropdown-toggle::before {
  border-color: #ffffff;
}
.app-bar .app-bar-menu li .d-menu,
.app-bar .app-bar-container .d-menu {
  background-color: #AF0015 !important;
  color: #ffffff !important;
}
.app-bar .app-bar-menu li .d-menu li:hover,
.app-bar .app-bar-container .d-menu li:hover {
  background-color: rgba(29, 29, 29, 0.1) !important;
}
.app-bar .app-bar-menu li .divider,
.app-bar .app-bar-container .divider {
  background-color: rgba(255, 255, 255, 0.25);
}
[class*=app-bar-expand] .app-bar-menu li .d-menu,
[class*=app-bar-expand] .app-bar-container .d-menu {
  -webkit-box-shadow: none!important;
          box-shadow: none!important;
  border: 1px solid #AF0015 !important;
  background-color: #ffffff !important;
  color: #AF0015 !important;
}
[class*=app-bar-expand] .app-bar-menu li .d-menu li:hover,
[class*=app-bar-expand] .app-bar-container .d-menu li:hover {
  background-color: #AF0015 !important;
  color: #ffffff !important;
}
.calendar {
  border-color: #AF0015;
}
.calendar .calendar-header {
  background-color: #AF0015;
  color: #ffffff;
}
.calendar .day.today {
  background-color: #AF0015;
}
.calendar .day.selected {
  -webkit-box-shadow: 0 0 0 1px #af0015 !important;
          box-shadow: 0 0 0 1px #af0015 !important;
}
.calendar .day.selected::after {
  border-top-color: #AF0015;
}
.calendar .calendar-years > .years-list li.active,
.calendar .calendar-months > .months-list li.active {
  background-color: #AF0015;
  color: #ffffff;
}
.calendar .calendar-footer {
  border-top-color: rgba(175, 0, 21, 0.25);
}
.calendar .week-days {
  border-top-color: rgba(175, 0, 21, 0.25);
  border-bottom-color: rgba(175, 0, 21, 0.25);
}
[class*=calendar-wide] .calendar-footer {
  border-left-color: rgba(175, 0, 21, 0.25);
}
.countdown {
  line-height: 1.5;
}
.countdown .part {
  color: #000000;
}
.wheel-picker {
  background-color: #ffffff;
  color: #000000;
}
.wheel-picker .date-wrapper,
.wheel-picker .time-wrapper {
  border-color: #AF0015;
}
.wheel-picker .select-block {
  background-color: #AF0015;
  color: #ffffff;
}
.wheel-picker .select-block ul {
  border-color: rgba(175, 0, 21, 0.25);
}
.wheel-picker .action-block {
  border-top: 1px rgba(175, 0, 21, 0.25) solid;
}
.wheel-picker .action-block .button {
  color: #ffffff;
}
.dialog {
  background-color: #ffffff;
  color: #000000;
  border: 1px solid #AF0015;
}
.dialog .dialog-actions {
  border-top-color: #AF0015;
}
.keypad .keys {
  background-color: #ffffff;
  border-color: #AF0015;
  color: #000000;
}
.keypad .key.service-key {
  background-color: #7c000f;
}
.hint {
  background-color: #F8F8F8;
  color: #000000;
}
.listview {
  background-color: #ffffff;
  color: #000000;
}
.listview .node:hover {
  background-color: rgba(175, 0, 21, 0.25);
  color: #ffffff;
}
.listview .node.current-select {
  background-color: #AF0015;
  color: #ffffff;
  border-color: #AF0015 !important;
}
.listview .node-group .node-toggle::before {
  border-color: #000000;
}
.listview.view-content .node + .node {
  border-top-color: #AF0015;
}
.master {
  background-color: #F8F8F8;
  color: #000000;
}
.master .controls .next,
.master .controls .prev {
  color: #AF0015;
}
.master .controls .next.disabled,
.master .controls .prev.disabled {
  color: rgba(175, 0, 21, 0.25);
}
.master .pages {
  border-color: #AF0015;
}
.navview .navview-pane {
  background-color: #F8F8F8;
  color: #3a3a3a;
}
.navview .navview-pane .pull-button:hover,
.navview .navview-pane .holder:hover,
.navview .navview-pane .navview-menu li a:hover {
  background-color: rgba(29, 29, 29, 0.1);
}
.navview .navview-pane .pull-button:active,
.navview .navview-pane .holder:active,
.navview .navview-pane .navview-menu li a:active,
.navview .navview-pane .pull-button:focus,
.navview .navview-pane .holder:focus,
.navview .navview-pane .navview-menu li a:focus {
  background-color: #7c000f;
}
.navview .navview-pane .pull-button:focus,
.navview .navview-pane .holder:focus,
.navview .navview-pane .navview-menu li a:focus {
  border: 2px solid #7c000f;
}
.navview .navview-pane .dropdown-toggle::after {
  border-color: transparent transparent #ffffff transparent;
}
.navview .navview-content {
  background-color: #ffffff;
  color: #000000;
}
.notify {
  background-color: #F8F8F8;
  color: #3a3a3a;
  border: 1px solid #AF0015;
}
.panel {
  background-color: #F8F8F8;
  color: #3a3a3a;
  border-color: rgba(175, 0, 21, 0.25) !important;
}
.panel .panel-title {
  background-color: #AF0015;
  color: #ffffff;
  border-bottom-color: rgba(255, 255, 255, 0.25);
}
.panel .panel-title .dropdown-toggle {
  border-left-color: rgba(255, 255, 255, 0.25);
}
.panel .panel-title .dropdown-toggle::before {
  border-color: #ffffff;
}
.panel .panel-title .icon {
  border-right-color: rgba(255, 255, 255, 0.25);
}
.window {
  border-color: rgba(175, 0, 21, 0.25);
  background-color: #ffffff;
  color: #000000;
}
.window .window-caption {
  background-color: #AF0015;
  color: #ffffff;
}
.window .window-content {
  background-color: #F8F8F8;
  color: #3a3a3a;
}
.resize-element::after {
  border-bottom-color: #AF0015;
}
.popover {
  background-color: #F8F8F8;
  color: #3a3a3a;
  border-color: #AF0015;
}
.rating .stars li {
  color: rgba(175, 0, 21, 0.25);
}
.rating .stars li.on {
  color: #AF0015;
}
.rating:not(.static) .stars:hover li {
  color: #AF0015;
}
.rating:not(.static) .stars li:hover ~ li {
  color: rgba(175, 0, 21, 0.25) !important;
}
.sidenav-simple,
.sidenav-counter {
  background-color: #ffffff;
  color: #AF0015;
}
.sidenav-simple .active,
.sidenav-counter .active,
.sidenav-simple li.active:hover,
.sidenav-counter li.active:hover {
  background-color: #AF0015;
  color: #ffffff;
}
.sidenav-simple li.disabled,
.sidenav-counter li.disabled {
  color: rgba(255, 255, 255, 0.25) !important;
}
.sidenav-m3 {
  background-color: #AF0015;
  color: #ffffff;
}
.sidenav-m3 a {
  background-color: #AF0015;
}
.sidenav-m3 a:hover {
  background-color: rgba(29, 29, 29, 0.1);
}
.sidenav-m3 li.disabled {
  color: rgba(255, 255, 255, 0.25) !important;
}
.sidenav-m3 li + li {
  border-top-color: #AF0015;
}
.sidenav-m3 .d-menu {
  background-color: #7c000f !important;
  border-color: #AF0015;
  margin-bottom: 4px;
}
.sidenav-m3 .d-menu li {
  border-color: #AF0015 !important;
  color: #ffffff !important;
}
.sidenav-m3 .d-menu li.disabled {
  color: rgba(255, 255, 255, 0.25) !important;
}
.sidenav-m3 .dropdown-toggle::before {
  border-color: #ffffff;
}
.slider .backside {
  background-color: rgba(175, 0, 21, 0.25);
}
.slider .buffer {
  background-color: #ffffff;
}
.slider .complete {
  background-color: #AF0015;
}
.slider .marker {
  background-color: #000000;
}
.stepper::before {
  background-color: #F8F8F8;
}
.stepper .step {
  background-color: #F8F8F8;
  color: #000000;
}
.stepper .step.complete {
  background-color: #AF0015;
  color: #ffffff;
}
.stepper .step.current {
  background-color: #000000;
  color: #ffffff;
}
.streamer .streams {
  background-color: #ffffff;
  color: #000000;
}
.streamer .streamer-action {
  background-color: #AF0015;
  color: #ffffff;
}
.streamer .stream {
  border-color: #AF0015;
}
.streamer .event-group {
  background-color: #ffffff;
  color: #000000;
}
.streamer .stream-event {
  background-color: #F8F8F8;
  color: #3a3a3a;
  border-color: #AF0015;
}
.streamer .stream-event:hover {
  border-color: #ff1632;
}
.streamer .stream-event.selected {
  -webkit-box-shadow: 0 0 0 1px #af0015 !important;
          box-shadow: 0 0 0 1px #af0015 !important;
}
.streamer .stream-event.selected::before {
  border-color: #000000 !important;
}
.streamer .stream-event.selected::after {
  border-top-color: #AF0015;
}
.streamer .stream-event-slide .slide-data .title {
  color: #000000;
}
.streamer .stream-event-slide .slide-data .subtitle,
.streamer .stream-event-slide .slide-data .desc {
  color: #3a3a3a;
}


.table thead {
  border-bottom-color: #00838f;
}


.table tfoot {
  border-top-color: #00838f;
}

.table .sortable-column.sort-asc,
.table .sortable-column.sort-desc {

  background-color: #00838f;
  color: #ffffff;
}
.table .sortable-column.sort-asc:after,
.table .sortable-column.sort-desc:after {
  color: #ffffff;
}
.table.striped tbody tr:nth-child(odd) {
  background: #F8F8F8;
}
.table.table-border {
  border-color: #00838f;
}
.table.cell-border th,
.table.cell-border td {
  border-color: #00838f;
}

.tabs {
  background-color: #ffffff;
  color: #ffffff;
  border-color: #AF0015;
}
.tabs > ul > li {
  background-color: #F8F8F8;
  color: #3a3a3a;
}
.tabs > ul > li:hover {
  background-color: rgba(175, 0, 21, 0.25);
}
.tabs > ul > li.active {
  background-color: #AF0015;
  color: #ffffff;
}
.tabs .disabled {
  color: rgba(255, 255, 255, 0.25) !important;
}
.tabs.vertical > ul {
  border-right-color: #AF0015;
}
.tabs.vertical > ul > li {
  border-right-color: #AF0015;
}
.tabs.vertical > ul > li.active {
  border-color: #AF0015;
}
.tabs.vertical.right > ul {
  border-left-color: #AF0015;
}
.tabs.vertical.right > ul > li {
  border-left-color: #AF0015;
}
.tabs.vertical.right > ul > li.active {
  border-color: #AF0015;
}
[class*=tabs-expand] > ul {
  border-bottom-color: #AF0015;
}
[class*=tabs-expand] > ul > li {
  border-bottom-color: #AF0015;
}
[class*=tabs-expand] > ul > li.active {
  border-color: #AF0015;
}
.topbar {
  background-color: #AF0015;
  color: #ffffff;
}
.topbar .topbar-brand,
.topbar .topbar-element,
.topbar .topbar-menu {
  color: #ffffff;
}
.treeview {
  background-color: #ffffff;
  color: #3a3a3a;
}
.treeview .node-toggle::before {
  border-color: #3a3a3a !important;
}
.treeview li.current > .caption {
  color: #000000;
}
.wizard {
  background-color: #ffffff;
  color: #000000;
  border-color: #AF0015;
}
.wizard > section,
.wizard.section {
  border-color: #000000;
}
.wizard > section:nth-child(1),
.wizard.section:nth-child(1) {
  border-color: #AF0015;
}
.wizard > section:nth-child(2),
.wizard.section:nth-child(2) {
  border-color: #960012;
}
.wizard > section:nth-child(3),
.wizard.section:nth-child(3) {
  border-color: #7c000f;
}
.wizard > section:nth-child(4),
.wizard.section:nth-child(4) {
  border-color: #63000c;
}
.wizard > section:nth-child(5),
.wizard.section:nth-child(5) {
  border-color: #490009;
}
.wizard > section:nth-child(6),
.wizard.section:nth-child(6) {
  border-color: #300006;
}
.wizard > section:nth-child(7),
.wizard.section:nth-child(7) {
  border-color: #160003;
}
.wizard > section:nth-child(8),
.wizard.section:nth-child(8) {
  border-color: #000000;
}
.wizard > section:nth-child(9),
.wizard.section:nth-child(9) {
  border-color: #000000;
}
.wizard > section:nth-child(10),
.wizard.section:nth-child(10) {
  border-color: #000000;
}
.wizard > section::before,
.wizard.section::before {
  color: #ffffff;
}
.wizard > section.complete,
.wizard.section.complete {
  border-color: #797979;
}
.wizard > section.complete:nth-child(1),
.wizard.section.complete:nth-child(1) {
  border-color: #F8F8F8;
}
.wizard > section.complete:nth-child(2),
.wizard.section.complete:nth-child(2) {
  border-color: #ebebeb;
}
.wizard > section.complete:nth-child(3),
.wizard.section.complete:nth-child(3) {
  border-color: #dfdfdf;
}
.wizard > section.complete:nth-child(4),
.wizard.section.complete:nth-child(4) {
  border-color: #d2d2d2;
}
.wizard > section.complete:nth-child(5),
.wizard.section.complete:nth-child(5) {
  border-color: #c5c5c5;
}
.wizard > section.complete:nth-child(6),
.wizard.section.complete:nth-child(6) {
  border-color: #b8b8b8;
}
.wizard > section.complete:nth-child(7),
.wizard.section.complete:nth-child(7) {
  border-color: #acacac;
}
.wizard > section.complete:nth-child(8),
.wizard.section.complete:nth-child(8) {
  border-color: #9f9f9f;
}
.wizard > section.complete:nth-child(9),
.wizard.section.complete:nth-child(9) {
  border-color: #929292;
}
.wizard > section.complete:nth-child(10),
.wizard.section.complete:nth-child(10) {
  border-color: #797979;
}
.wizard > section.complete::before,
.wizard.section.complete::before {
  color: #3a3a3a;
}
.wizard > section.current::before,
.wizard.section.current::before {
  color: #000000;
  background-color: #AF0015;
}
.wizard .action-bar button {
  border-color: #AF0015;
  color: #ffffff;
}
.ribbon-menu .tabs-holder .static {
  background-color: #AF0015;
  color: #ffffff;
}
.ribbon-menu .tabs-holder .static:hover {
  border-color: transparent !important;
}
.ribbon-menu .ribbon-button,
.ribbon-menu .ribbon-tool-button,
.ribbon-menu .ribbon-split,
.ribbon-menu .ribbon-main,
.ribbon-menu .ribbon-icon-button {
  color: #000000;
}
.ribbon-menu .ribbon-button:hover,
.ribbon-menu .ribbon-tool-button:hover,
.ribbon-menu .ribbon-split:hover,
.ribbon-menu .ribbon-main:hover,
.ribbon-menu .ribbon-icon-button:hover {
  border-color: rgba(175, 0, 21, 0.25);
  background-color: rgba(248, 248, 248, 0.25);
}
.ribbon-menu .ribbon-button:active,
.ribbon-menu .ribbon-tool-button:active,
.ribbon-menu .ribbon-split:active,
.ribbon-menu .ribbon-main:active,
.ribbon-menu .ribbon-icon-button:active,
.ribbon-menu .ribbon-button.active,
.ribbon-menu .ribbon-tool-button.active,
.ribbon-menu .ribbon-split.active,
.ribbon-menu .ribbon-main.active,
.ribbon-menu .ribbon-icon-button.active {
  border-color: rgba(175, 0, 21, 0.25);
  background-color: rgba(255, 255, 255, 0.25);
}
.ribbon-menu .ribbon-split-button:hover {
  border-color: rgba(175, 0, 21, 0.25);
}
.ribbon-menu .ribbon-split-button:hover .ribbon-split {
  border-color: rgba(175, 0, 21, 0.25);
}
.ribbon-menu .ribbon-dropdown {
  -webkit-box-shadow: none;
          box-shadow: none;
}
.ribbon-menu .ribbon-dropdown li:hover {
  border-color: rgba(175, 0, 21, 0.25);
  background-color: rgba(248, 248, 248, 0.25);
}
.ribbon-menu .ribbon-dropdown .checked::after {
  border-color: rgba(175, 0, 21, 0.25);
  background-color: rgba(248, 248, 248, 0.25);
}
.navview .navview-pane .navview-menu li.active::before {
  background-color: #ffffff;
}


	h2 {
		margin-top: 20px;
	}
	.app-bar-menu li {
		list-style: none!important;
	}
	.abc {
		margin-top: 7px;
	}
</style>
</head>
<body>
	<div class="example" style="height: 800px" >
		<div data-role="navview" data-compact="md" data-expanded="lg" data-toggle="#pane-toggle" >
			<nav class="navview-pane">
				
				<?php
				$url = basename($_SERVER['REQUEST_URI']);
				$links = str_replace("/".$url, '', $_SERVER['REQUEST_URI']);
				$link = str_replace("/", '', $links);
				?>

				<ul class="navview-menu"  >

					<li>
						@if($link == "master")
						<a href="{{url('mainmenu')}}">
							<span class="icon">
								<span class="mif-arrow-left">
								</span>
							</span>
							<span class="caption"><b>Master</b></span>
						</a>
						@elseif($link == "inventoryproduk" || $link == "inventoryconfig")
						<a href="{{url('mainmenu')}}">
							<span class="icon">
								<span class="mif-arrow-left">
								</span>
							</span>
							<span class="caption"><b>Produk</b></span>
						</a>
						@elseif($link == "pos")
						<a href="{{url('mainmenu')}}">
							<span class="icon">
								<span class="mif-arrow-left">
								</span>
							</span>
							<span class="caption"><b>Point Of Sale</b></span>
						</a>
						@elseif($link == "laporan")
						<a href="{{url('mainmenu')}}">
							<span class="icon">
								<span class="mif-arrow-left">
								</span>
							</span>
							<span class="caption"><b>Laporan</b></span>
						</a>
						@endif
					</li>
					<li class="item-separator"></li>

					<li class="item-header"></li>
					@if($link == "master")
					<li>
						<a href="{{route('toko.all')}}">
							<span class="icon"><span class="mif-shop"></span></span>
							<span class="caption">Informasi Toko</span>
						</a>
					</li>
					<li class="active">
						<a href="{{route('user.all')}}">
							<span class="icon"><span class="mif-users"></span></span>
							<span class="caption">Daftar User</span>
						</a>
					</li>
					@elseif($link == "inventoryproduk")
					<li>
						<a href="{{route('produk.all')}}">
							<span class="icon"><span class="mif-folder-plus"></span></span>
							<span class="caption">Produk Tersedia</span>
						</a>
					</li>
					<li>
						<a href="{{route('produk.habis')}}">
							<span class="icon"><span class="mif-folder-minus"></span></span>
							<span class="caption">Produk Habis</span>
						</a>
					</li>
					@elseif($link == "inventoryconfig")
					<li>
						<a href="{{route('kategori.all')}}">
							<span class="icon"><span class="mif-folder-special2"></span></span>
							<span class="caption">Kateogori</span>
						</a>
					</li>
						<li>
						<a href="{{route('curr.all')}}">
							<span class="icon"><span class="mif-dollar2"></span></span>
							<span class="caption">Curr</span>
						</a>
					</li>
						<li>
						<a href="{{route('persen.all')}}">
							<span class="icon"><span class="mif-balance-scale"></span></span>
							<span class="caption">Persen Keuntungan</span>
						</a>
					</li>
						<li>
						<a href="{{route('stokppn.all')}}">
							<span class="icon"><span class="mif-server"></span></span>
							<span class="caption">Stok PPN</span>
						</a>
					</li>
					<li>
						<a href="{{route('unit.all')}}">
							<span class="icon"><span class="mif-dropbox"></span></span>
							<span class="caption">Unit</span>
						</a>
					</li>
					<li>
						<a href="{{route('bahan.all')}}">
							<span class="icon"><span class="mif-files-empty"></span></span>
							<span class="caption">Bahan</span>
						</a>
					</li>
					@elseif($link == "pos")
					<li>
						<a href="{{route('pos.paymentsementara-index')}}">
							<span class="icon"><span class="mif-download"></span></span>
							<span class="caption">Pos Sementara</span>
						</a>
					</li>
					<li>
						<a href="{{route('pos.index')}}">
							<span class="icon"><span class="mif-dollars"></span></span>
							<span class="caption">POS</span>
						</a>
					</li>
					@elseif($link == "laporan")
					<li>
						<a href="{{route('barangmasuk.all')}}">
							<span class="icon"><span class="mif-backward"></span></span>
							<span class="caption">Barang Masuk</span>
						</a>
					</li>
					<li>
						<a href="{{route('barangkeluar.all')}}">
							<span class="icon"><span class="mif-forward"></span></span>
							<span class="caption">Barang Keluar</span>
						</a>
					</li>
					@endif
				</ul>
			</nav>

			<div class="navview-content pl-10-md pr-10-md">
				@yield('content')
			</div>
		</div>
	</div>

	<script src="{{asset('metromini/docs/js/jquery-3.3.1.min.js')}}"></script>
	<script src="{{asset('metromini/docs/metro/js/metro.js')}}"></script>
	<script>
		$("input[name=r3]").on("click", function(){
			var checked = $(this).is(":checked");
			if (checked) {
				$("#listview-1").data("listview").view(this.value);
			}
		});
	</script>
	<!-- ads-script -->
</body>
</html>