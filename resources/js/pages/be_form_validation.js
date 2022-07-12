// Form Validation, for more examples you can check out https://github.com/jzaefferer/jquery-validation
class pageFormsValidation {
   /*
    * Init Validation functionality
    *
    */
   static initValidation() {
      // Load default options for jQuery Validation plugin
      Dashmix.helpers('jq-validation');

      // Init Form Validation
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
      });

      // Init Validation on Select2 change
      jQuery('.js-select2').on('change', e => {
         jQuery(e.currentTarget).valid();
      });
   }

   /*
    * Init functionality
    *
    */
   static init() {
      this.initValidation();
   }
}

// Initialize when page loads
Dashmix.onLoad(pageFormsValidation.init());
