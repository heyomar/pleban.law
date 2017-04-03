'use strict'

import $ from 'jquery';
window.jQuery = window.$ = $

import slick from 'slick-carousel';
import slickOptions from './slickOptions';

import navigation from './navigation';
import consultationForm from './consultationForm';

slickOptions();
navigation();
consultationForm();
