import header from './modules/header.js';
import { toggableItemGrid } from './modules/helpers.js'; 
// import facetwp from './modules/facetwp.js'; 

/**
 * Header Mods
 */
if( document.querySelector('.header') ) header();

/**
 * Helpers functions, uncomment if used
 */
toggableItemGrid();

/**
 * FacetWP, uncomment if used
 */
// if( document.querySelector('.facetwp-template') ) facetwp();
