/**
 * Created by Edumob on 10/26/2015.
 */
'use strict';



angular.module('myApp.Service', [])

.service('ProfileData', function () {

    var hashtable = {};

    return {
        setValue: function (key, value) {
            hashtable[key] = value;
        },
        getValue: function (key) {
            return hashtable[key];
        }
    }
});