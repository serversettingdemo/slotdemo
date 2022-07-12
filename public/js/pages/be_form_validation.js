/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**************************************************!*\
  !*** ./resources/js/pages/be_form_validation.js ***!
  \**************************************************/
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

// Form Validation, for more examples you can check out https://github.com/jzaefferer/jquery-validation
var pageFormsValidation = /*#__PURE__*/function () {
  function pageFormsValidation() {
    _classCallCheck(this, pageFormsValidation);
  }

  _createClass(pageFormsValidation, null, [{
    key: "initValidation",
    value:
    /*
     * Init Validation functionality
     *
     */
    function initValidation() {
      // Load default options for jQuery Validation plugin
      Dashmix.helpers('jq-validation'); // Init Form Validation

      jQuery('.js-validation').validate({
        ignore: [],
        rules: {
          'title': {
            required: true
          },
          'slug': {
            required: true
          }
        },
        messages: {
          'title': {
            required: 'Masukkan judul'
          },
          'slug': {
            required: 'Masukkan slug'
          }
        }
      }); // Init Validation on Select2 change

      jQuery('.js-select2').on('change', function (e) {
        jQuery(e.currentTarget).valid();
      });
    }
    /*
     * Init functionality
     *
     */

  }, {
    key: "init",
    value: function init() {
      this.initValidation();
    }
  }]);

  return pageFormsValidation;
}(); // Initialize when page loads


Dashmix.onLoad(pageFormsValidation.init());
/******/ })()
;