'use strict';

define([
        'pim/field',
        'underscore',
        'text!julienanquetil/template/product/field/youtube'
    ], function (
    Field,
    _,
    fieldTemplate
    ) {
        return Field.extend({
            fieldTemplate: _.template(fieldTemplate),
            events: {
                'change .field-input:first input[type="text"]': 'updateModel'
            },
            renderInput: function (context) {
                return this.fieldTemplate(context);
            },
            updateModel: function () {
                var data = this.$('.field-input:first input[type="text"]').val();

                this.setCurrentValue(data);
            }
        });
    }
);