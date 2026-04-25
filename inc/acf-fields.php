<?php
if ( ! function_exists('acf_add_local_field_group') ) return;

acf_add_local_field_group([
    'key'    => 'group_property_details',
    'title'  => 'Property Details',
    'fields' => [
        ['key'=>'field_price',     'label'=>'Price',       'name'=>'price',       'type'=>'text'],
        ['key'=>'field_bedrooms',  'label'=>'Bedrooms',    'name'=>'bedrooms',    'type'=>'number'],
        ['key'=>'field_bathrooms', 'label'=>'Bathrooms',   'name'=>'bathrooms',   'type'=>'number'],
        ['key'=>'field_sqft',      'label'=>'Square Feet', 'name'=>'sqft',        'type'=>'number'],
        ['key'=>'field_location',  'label'=>'Location',    'name'=>'location',    'type'=>'text'],
        ['key'=>'field_type',      'label'=>'Type',        'name'=>'type',        'type'=>'select',
            'choices'=>['Villa'=>'Villa','Apartment'=>'Apartment','Townhouse'=>'Townhouse','Commercial'=>'Commercial']],
        ['key'=>'field_gallery',   'label'=>'Gallery',     'name'=>'gallery',     'type'=>'gallery'],
        ['key'=>'field_featured',  'label'=>'Featured',    'name'=>'is_featured', 'type'=>'true_false'],
    ],
    'location' => [[['param'=>'post_type','operator'=>'==','value'=>'property']]],
]);