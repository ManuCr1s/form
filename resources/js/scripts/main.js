import bsCustomFileInput from 'bs-custom-file-input';
import {dependency} from '../scripts/functions';
import route from '../scripts/route'
$(document).ready(function(){
    bsCustomFileInput.init();
    dependency($('#region'),route.provincia,$('#province'));
    dependency($('#province'),route.distrito,$('#district'));
})