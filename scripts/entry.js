'use strict'

import $ from 'jquery';
window.jQuery = window.$ = $

import slick from 'slick-carousel';
import slickOptions from './slickOptions';

import navigation from './navigation';
import consultationForm from './consultationForm';

import smallHelp from './smallHelp';

slickOptions();
navigation();
consultationForm();
smallHelp();
