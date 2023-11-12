/**
 * __________________________________________________________________
 *
 * Phillipine Address Selector
 * __________________________________________________________________
 *
 * MIT License
 * 
 * Copyright (c) 2020 Wilfred V. Pine
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package Phillipine Address Selector
 * @author Wilfred V. Pine <only.master.red@gmail.com>
 * @copyright Copyright 2020 (https://dev.confired.com)
 * @link https://github.com/redmalmon/philippine-address-selector
 * @license https://opensource.org/licenses/MIT MIT License
 */

var my_handlers1 = {
    // fill province
    fill_provinces1: function() {
        //selected region
        var region_code1 = $(this).val();

        // set selected text to input
        var region_text1 = $(this).find("option:selected").text();
        let region_input1 = $('#region-text1');
        region_input1.val(region_text1);
        //clear province & city & barangay input
        $('#province-text1').val('');
        $('#city-text1').val('');
        $('#barangay-text1').val('');

        //province
        let dropdown1 = $('#province1');
        dropdown1.empty();
        dropdown1.append('<option selected="true" disabled>Choose State/Province</option>');
        dropdown1.prop('selectedIndex', 0);

        //city
        let city1 = $('#city1');
        city1.empty();
        city1.append('<option selected="true" disabled></option>');
        city1.prop('selectedIndex', 0);

        //barangay
        let barangay1 = $('#barangay1');
        barangay1.empty();
        barangay1.append('<option selected="true" disabled></option>');
        barangay1.prop('selectedIndex', 0);

        // filter & fill
        var url = 'js/ph-json/province.json';
        $.getJSON(url, function(data) {
            var result = data.filter(function(value) {
                return value.region_code == region_code1;
            });

            result.sort(function(a, b) {
                return a.province_name.localeCompare(b.province_name);
            });

            $.each(result, function(key, entry) {
                dropdown1.append($('<option></option>').attr('value', entry.province_code).text(entry.province_name));
            })

        });
    },
    // fill city
    fill_cities1: function() {
        //selected province
        var province_code1 = $(this).val();

        // set selected text to input
        var province_text1 = $(this).find("option:selected").text();
        let province_input1 = $('#province-text1');
        province_input1.val(province_text1);
        //clear city & barangay input
        $('#city-text1').val('');
        $('#barangay-text1').val('');

        //city
        let dropdown1 = $('#city1');
        dropdown1.empty();
        dropdown1.append('<option selected="true" disabled>Choose city/municipality</option>');
        dropdown1.prop('selectedIndex', 0);

        //barangay
        let barangay1 = $('#barangay1');
        barangay1.empty();
        barangay1.append('<option selected="true" disabled></option>');
        barangay1.prop('selectedIndex', 0);

        // filter & fill
        var url = 'js/ph-json/city.json';
        $.getJSON(url, function(data) {
            var result = data.filter(function(value) {
                return value.province_code == province_code1;
            });

            result.sort(function(a, b) {
                return a.city_name.localeCompare(b.city_name);
            });

            $.each(result, function(key, entry) {
                dropdown1.append($('<option></option>').attr('value', entry.city_code).text(entry.city_name));
            })

        });
    },
    // fill barangay
    fill_barangays1: function() {
        // selected barangay
        var city_code = $(this).val();

        // set selected text to input
        var city_text1 = $(this).find("option:selected").text();
        let city_input1 = $('#city-text1');
        city_input1.val(city_text1);
        //clear barangay input
        $('#barangay-text1').val('');

        // barangay
        let dropdown1 = $('#barangay1');
        dropdown1.empty();
        dropdown1.append('<option selected="true" disabled>Choose barangay</option>');
        dropdown1.prop('selectedIndex', 0);

        // filter & Fill
        var url = 'js/ph-json/barangay.json';
        $.getJSON(url, function(data) {
            var result = data.filter(function(value) {
                return value.city_code == city_code;
            });

            result.sort(function(a, b) {
                return a.brgy_name.localeCompare(b.brgy_name);
            });

            $.each(result, function(key, entry) {
                dropdown1.append($('<option></option>').attr('value', entry.brgy_code).text(entry.brgy_name));
            })

        });
    },

    onchange_barangay1: function() {
        // set selected text to input
        var barangay_text1 = $(this).find("option:selected").text();
        let barangay_input1 = $('#barangay-text1');
        barangay_input1.val(barangay_text1);
    },

};


$(function() {
    // events
    $('#region1').on('change', my_handlers1.fill_provinces1);
    $('#province1').on('change', my_handlers1.fill_cities1);
    $('#city1').on('change', my_handlers1.fill_barangays1);
    $('#barangay1').on('change', my_handlers1.onchange_barangay1);

    // load region
    let dropdown1 = $('#region1');
    dropdown1.empty();
    dropdown1.append('<option selected="true" disabled>Choose Region</option>');
    dropdown1.prop('selectedIndex', 0);
    const url = 'js/ph-json/region.json';
    // Populate dropdown with list of regions
    $.getJSON(url, function(data) {
        $.each(data, function(key, entry) {
            dropdown1.append($('<option></option>').attr('value', entry.region_code).text(entry.region_name));
        })
    });

});