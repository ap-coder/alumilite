<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'productManagement' => [
        'title'          => 'Product Management',
        'title_singular' => 'Product Management',
    ],
    'productCategory' => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'photo'              => 'Photo',
            'photo_helper'       => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated At',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted At',
            'deleted_at_helper'  => ' ',
            'published'          => 'Published',
            'published_helper'   => ' ',
            'slug'               => 'Slug',
            'slug_helper'        => ' ',
        ],
    ],
    'productTag' => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'product' => [
        'title'          => 'Products',
        'title_singular' => 'Product',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'description'              => 'Description',
            'description_helper'       => ' ',
            'excerpt'              => 'Excerpt',
            'excerpt_helper'       => ' ',
            'price'                    => 'Price',
            'price_helper'             => ' ',
            'category'                 => 'Categories',
            'category_helper'          => ' ',
            'tag'                      => 'Tags',
            'tag_helper'               => ' ',
            'feature'                      => 'Features',
            'feature_helper'               => ' ',
            'photo'                    => 'Photo',
            'photo_helper'             => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated At',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted At',
            'deleted_at_helper'        => ' ',
            'additional_photos'        => 'Additional Photos',
            'additional_photos_helper' => ' ',
            'documents'                => 'Documents',
            'documents_helper'         => ' ',
            'technical_specs'          => 'Technical Specs',
            'technical_specs_helper'   => ' ',
            'msrp'                     => 'MSRP',
            'msrp_helper'              => ' ',
            'product_type'             => 'Product Type',
            'product_type_helper'      => ' ',
            'published'                => 'Published',
            'published_helper'         => ' ',
            'slug'                     => 'Slug',
            'slug_helper'              => ' ',
            'brand'                    => 'Brand',
            'brand_helper'             => ' ',
            'brand_model'              => 'Brand Model',
            'brand_model_helper'       => ' ',
        ],
    ],
    'staticSeo' => [
        'title'          => 'Static Seo',
        'title_singular' => 'Static Seo',
        'fields'         => [
            'id'                          => 'ID',
            'id_helper'                   => ' ',
            'page_name'                   => 'Page Name',
            'page_name_helper'            => ' ',
            'page_path'                   => 'Page Path',
            'page_path_helper'            => ' ',
            'meta_title'                  => 'Meta Title',
            'meta_title_helper'           => ' ',
            'facebook_title'              => 'Facebook Title',
            'facebook_title_helper'       => ' ',
            'twitter_title'               => 'Twitter Title',
            'twitter_title_helper'        => ' ',
            'content_type'                => 'Content Type',
            'content_type_helper'         => 'Please select the type of content to add seo to.',
            'json_ld_tag'                 => 'Json Ld Tag',
            'json_ld_tag_helper'          => 'Wrap you tag in script tags',
            'canonical'                   => 'Canonical',
            'canonical_helper'            => 'url()->current() is used.',
            'html_schema_1'               => 'Html Schema 1',
            'html_schema_1_helper'        => ' ',
            'html_schema_2'               => 'Html Schema 2',
            'html_schema_2_helper'        => ' ',
            'html_schema_3'               => 'Html Schema 3',
            'html_schema_3_helper'        => ' ',
            'body_schema'                 => 'Body Schema',
            'body_schema_helper'          => ' ',
            'facebook_description'        => 'Facebook Description',
            'facebook_description_helper' => ' ',
            'twitter_description'         => 'Twitter Description',
            'twitter_description_helper'  => ' ',
            'meta_description'            => 'Meta Description',
            'meta_description_helper'     => 'no Html only text',
            'open_graph_type'             => 'Open Graph Type',
            'open_graph_type_helper'      => ' ',
            'seo_image'                   => 'Seo Image',
            'seo_image_helper'            => ' ',
            'menu_name'                   => 'Menu Name',
            'menu_name_helper'            => ' ',
            'seo_image_url'               => 'Seo Image Url',
            'seo_image_url_helper'        => ' ',
            'noindex'                     => 'No Index',
            'noindex_helper'              => 'Disallow search engines from adding this page to their index, and therefore disallow them from showing it in their results.',
            'nofollow'                    => 'No Follow',
            'nofollow_helper'             => 'Tells the search engines robots not to ‘endorse’ (pass equity through) any links on the page. Note that this includes all links on the page, including, e.g., those in navigation elements, links to images or other resources, and so on.',
            'noimageindex'                => 'No Image  Index',
            'noimageindex_helper'         => 'Disallow search engines from indexing images on the page.',
            'noarchive'                   => 'No Archive',
            'noarchive_helper'            => 'Prevents the search engines from showing a cached copy of this page in their search results listings.',
            'nosnippet'                   => 'No Snippet',
            'nosnippet_helper'            => 'Prevents the search engines from showing a text or video snippet (i.e., a meta description) of this page in the search results, and prevents them from showing a cached copy of this page in their search results listings.',
            'created_at'                  => 'Created at',
            'created_at_helper'           => ' ',
            'updated_at'                  => 'Updated at',
            'updated_at_helper'           => ' ',
            'deleted_at'                  => 'Deleted at',
            'deleted_at_helper'           => ' ',
            'footer_classes'              => 'Footer Classes',
            'footer_classes_helper'       => ' ',
            'main_classes'              => 'Main Classes',
            'main_classes_helper'       => ' ',
            'body_classes'              => 'Body Classes',
            'body_classes_helper'       => ' ',
            'html_classes'              => 'Html Classes',
            'html_classes_helper'       => ' ',
            'post'              => 'Posts',
            'post_helper'       => ' ',
            'product'              => 'Products',
            'product_helper'       => ' ',
            'build'              => 'Builds',
            'build_helper'       => ' ',
            'brand'              => 'Brands',
            'brand_helper'       => ' ',
        ],
    ],
    'technicalSpec' => [
        'title'          => 'Technical Specifications',
        'title_singular' => 'Technical Specification',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'value'             => 'Value',
            'value_helper'      => ' ',
            'icon_class'        => 'Icon Class',
            'icon_class_helper' => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'published'         => 'Published',
            'published_helper'  => ' ',
        ],
    ],
    'brand' => [
        'title'          => 'Brands',
        'title_singular' => 'Brand',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'slug'               => 'Slug',
            'slug_helper'        => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'logo'               => 'Logo',
            'logo_helper'        => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'published'          => 'Published',
            'published_helper'   => ' ',
        ],
    ],
    'feature' => [
        'title'          => 'Features & Options',
        'title_singular' => 'Features & Option',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'published'         => 'Published',
            'published_helper'  => ' ',
        ],
    ],
    'productType' => [
        'title'          => 'Product Types',
        'title_singular' => 'Product Type',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'slug'              => 'Slug',
            'slug_helper'       => ' ',
            'photos'            => 'Photos',
            'photos_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'published'         => 'Published',
            'published_helper'  => ' ',
        ],
    ],
    'contentManagement' => [
        'title'          => 'Content management',
        'title_singular' => 'Content management',
    ],
    'contentCategory' => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'slug'              => 'Slug',
            'slug_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'contentTag' => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'slug'              => 'Slug',
            'slug_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'contentPage' => [
        'title'          => 'Pages',
        'title_singular' => 'Page',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'sub_title'         => 'Sub Title',
            'sub_title_helper'  => ' ',
            'excerpt'           => 'Excerpt',
            'excerpt_helper'    => ' ',
            'path'              => 'Path',
            'path_helper'       => ' ',
            'slug'              => 'Slug',
            'slug_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'meta_title'                      => 'Meta Title',
            'meta_title_helper'               => ' ',
            'meta_description'                => 'Meta Description',
            'meta_description_helper'         => ' ',
            'facebook_title'                  => 'Facebook Title',
            'facebook_title_helper'           => ' ',
            'facebook_desc'                   => 'Facebook Description',
            'facebook_desc_helper'            => ' ',
            'twitter_post_title'              => 'Twitter Post Title',
            'twitter_post_title_helper'       => ' ',
            'twitter_post_description'        => 'Twitter Post Description',
            'twitter_post_description_helper' => ' ',
            'published'                       => 'Published',
            'published_helper'                => ' ',
            'title_style'                   => 'Title Style',
            'title_style_helper'            => 'Turn on and select the style',
            'show_title_box'                => 'Show Title Box',
            'show_title_box_helper'         => ' ',
            'show_title'                    => 'Show Title',
            'show_title_helper'             => ' ',
            'show_tagline'                  => 'Show Tagline',
            'show_tagline_helper'           => ' ',
            'show_featured_content'         => 'Show Featured Content',
            'show_featured_content_helper'  => ' ',
            'featured_image_content'        => 'Featured Image Content',
            'featured_image_content_helper' => ' ',
            'tagline_style'                 => 'Tagline Style',
            'tagline_style_helper'          => ' ',
            'fi_content_style'              => 'Featured Image Content Style',
            'fi_content_style_helper'       => ' ',
            'svg_masthead'              => 'SVG Masthead',
            'svg_masthead_helper'       => ' ',
            'use_svg_header'              => 'Use SVG Header',
            'use_svg_header_helper'       => ' ',
            'use_featured_image_header'              => 'Use Featured Image Header',
            'use_featured_image_header_helper'       => ' ',
            'use_textonly_header'                  => 'Use textonly header',
            'use_textonly_header_helper'           => '',
            'attachments'            => 'Attachments',
            'attachments_helper'     => '',
            'photos'                  => 'Photos',
            'photos_helper'           => '',
            'featured_image'        => 'Featured Image',
            'featured_image_helper' => ' ',
            'page_section'              => 'Page Section',
            'page_section_helper'       => ' ',
            'add_to_sitemap'              => 'Add to sitemap',
            'add_to_sitemap_helper'       => ' ',
            'use_rev_slider'              => 'Use Revolution Slider',
            'use_rev_slider_helper'       => ' ',
            'custom_css'              => 'Custom Css',
            'custom_css_helper'       => ' ',
            'sub_heading'              => 'Sub Title',
            'sub_heading_helper'       => ' ',
            'is_homepage'              => 'Is Homepage',
            'is_homepage_helper'       => ' ',
            'nickname'              => 'Nickname',
            'nickname_helper'       => ' ',
        ],
    ],
    'pagesection' => [
        'title'          => 'Page section',
        'title_singular' => 'Page section',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => ' ',
            'published'                      => 'Published',
            'published_helper'               => ' ',
            'section'                 => 'Section',
            'section_helper'          => ' ',
            'section_nickname'        => 'Nickname',
            'section_nickname_helper' => ' ',
            'order'                   => 'Order',
            'order_helper'            => ' ',
            'pages'                   => 'Pages',
            'pages_helper'            => ' ',
            'created_at'              => 'Created at',
            'created_at_helper'       => ' ',
            'updated_at'              => 'Updated at',
            'updated_at_helper'       => ' ',
            'deleted_at'              => 'Deleted at',
            'deleted_at_helper'       => ' ',
            'page'              => 'Page',
            'page_helper'       => ' ',
            'attachments'            => 'Attachments',
            'attachments_helper'     => 'Attach files they might need for the event here.',
            'photo'                  => 'Photos',
            'photo_helper'           => 'Image for event header section. 1200 x 1200',
            'select_crud_section'                  => 'Select Crud Section',
            'select_crud_section_helper'           => '',
            'section_preview'                  => 'Section Preview',
            'section_preview_helper'           => '',
            'use_crud_section'                  => 'Use Crud Section',
            'use_crud_section_helper'           => '',
            'ps_cdn_css'                  => 'PageSection CSS Links (cdn)',
            'ps_cdn_css_helper'           => '',
            'ps_cdn_js'                  => 'PageSection JS Links (cdn)',
            'ps_cdn_js_helper'           => '',
            'ps_js'                  => 'PageSection On Page JS',
            'ps_js_helper'           => '',
            'ps_css'                  => 'PageSection On Page CSS',
            'ps_css_helper'           => '',
        ],
    ],
    'contentSection' => [
        'title'          => 'Notices',
        'title_singular' => 'Notices',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => ' ',
            'section_title'        => 'Notice Title',
            'section_title_helper' => ' ',
            'order'                => 'Order',
            'order_helper'         => ' ',
            'section'              => 'Notice',
            'section_helper'       => ' ',
            'published'            => 'Published',
            'published_helper'     => ' ',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => ' ',
            'location'             => 'Location',
            'location_helper'      => ' ',
            'pages'                => 'Pages',
            'pages_helper'         => ' ',
            'posts'                => 'Posts',
            'posts_helper'         => ' ',
            'threads'              => 'Threads',
            'threads_helper'       => ' ',
            'section_type'         => 'Notice Type',
            'section_type_helper'  => ' ',
        ],
    ],
    'media_library' => [
        'title'          => 'Media Library',
        'title_singular' => 'Media Library',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'file'              => 'File',
            'file_helper'       => ' ',
        ],
    ],
    'post' => [
        'title'          => 'Post',
        'title_singular' => 'Post',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'published'             => 'Published',
            'published_helper'      => ' ',
            'title'                 => 'Title',
            'title_helper'          => ' ',
            'category'              => 'Categories',
            'category_helper'       => ' ',
            'tag'                   => 'Tags',
            'tag_helper'            => ' ',
            'page_text'             => 'Full Text',
            'page_text_helper'      => ' ',
            'excerpt'               => 'Excerpt',
            'excerpt_helper'        => ' ',
            'featured_image'        => 'Featured Image',
            'featured_image_helper' => ' ',
            'slug'                  => 'Slug',
            'slug_helper'           => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated At',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted At',
            'deleted_at_helper'     => ' ',
        ],
    ],
    'slider' => [
        'title'          => 'Sliders',
        'title_singular' => 'Slider',
        'fields'         => [
            'id'                             => 'ID',
            'id_helper'                      => ' ',
            'image'                          => 'Image',
            'image_helper'                   => ' ',
            'sub_title'                      => 'Sub Title',
            'sub_title_helper'               => ' ',
            'main_title'                     => 'Main Title',
            'main_title_helper'              => ' ',
            'sub_title_2'                    => 'Sub Title 2',
            'sub_title_2_helper'             => ' ',
            'slider_description'             => 'Slider Description',
            'slider_description_helper'      => ' ',
            'text_heading'                   => 'Text Heading',
            'text_heading_helper'            => ' ',
            'heading_1'                      => 'Heading 1',
            'heading_1_helper'               => ' ',
            'heading_2'                      => 'Heading 2',
            'heading_2_helper'               => ' ',
            'heading_3'                      => 'Heading 3',
            'heading_3_helper'               => ' ',
            'text'                           => 'Text',
            'text_helper'                    => ' ',
            'main_button_text'               => 'Main Button Text',
            'main_button_text_helper'        => ' ',
            'main_button_link'               => 'Main Button Link',
            'main_button_link_helper'        => ' ',
            'main_button_tab_index'          => 'Main Button Tab Index',
            'main_button_tab_index_helper'   => ' ',
            'second_button_text'             => 'Second Button Text',
            'second_button_text_helper'      => ' ',
            'second_button_link'             => 'Second Button Link',
            'second_button_link_helper'      => ' ',
            'second_button_tab_index'        => 'Second Button Tab Index',
            'second_button_tab_index_helper' => ' ',
            'created_at'                     => 'Created at',
            'created_at_helper'              => ' ',
            'updated_at'                     => 'Updated at',
            'updated_at_helper'              => ' ',
            'deleted_at'                     => 'Deleted at',
            'deleted_at_helper'              => ' ',
            'location'                       => 'Location',
            'location_helper'                => 'select what slider location to add image',
        ],
    ],
    'setting' => [
        'title'          => 'Owners Settings',
        'title_singular' => 'Owners Setting',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => ' ',
            'facebook_link'        => 'FaceBook Link',
            'facebook_link_helper' => ' ',
            'twitter_link'         => 'Twitter Link',
            'twitter_link_helper'  => ' ',
            'youtube_link'         => 'YouTube Link',
            'youtube_link_helper'  => ' ',
            'instagram_link'         => 'Instagram Link',
            'instagram_link_helper'  => ' ',
            'rss_link'         => 'RSS Link',
            'rss_link_helper'  => ' ',
            'short_bio'            => 'Short Bio',
            'short_bio_helper'     => ' ',
            'phone'                => 'Phone',
            'phone_helper'         => ' ',
            'email'                => 'Email',
            'email_helper'         => ' ',
            'address'              => 'Address',
            'address_helper'       => ' ',
            'working_hours'              => 'Working Hours',
            'working_hours_helper'       => ' ',
            'header_logo'               => 'Header Logo',
            'header_logo_helper'        => ' ',
            'footer_logo'               => 'Footer Logo',
            'footer_logo_helper'        => ' ',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => ' ',
        ],
    ],
    'review' => [
        'title'          => 'Reviews',
        'title_singular' => 'Review',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'published'                => 'Published',
            'published_helper'         => ' ',
            'title'                    => 'Title',
            'title_helper'             => ' ',
            'body'                     => 'Content',
            'body_helper'              => ' ',
            'website'                  => 'Website',
            'website_helper'           => ' ',
            'rating'                   => 'Rating',
            'rating_helper'            => 'between 1 and 5',
            'signiture'                => 'Signiture',
            'signiture_helper'         => ' ',
            'signiture_company'        => 'Signiture Company',
            'signiture_company_helper' => ' ',
            'avatar'                   => 'Avatar',
            'avatar_helper'            => ' ',
            'photo'                    => 'Photo',
            'photo_helper'             => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
            'build'                    => 'Build',
            'build_helper'             => 'Review belongs to selected build.',
        ],
    ],
    'build' => [
        'title'          => 'Builds',
        'title_singular' => 'Build',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'published'                => 'Published',
            'published_helper'         => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'description'              => 'Description',
            'description_helper'       => ' ',
            'excerpt'              => 'Excerpt',
            'excerpt_helper'       => ' ',
            'photo'                    => 'Photo',
            'photo_helper'             => 'use 1170 x 650 image size',
            'additional_photos'        => 'Additional Photos',
            'additional_photos_helper' => 'use 1170 x 650 image size',
            'documents'                => 'Documents',
            'documents_helper'         => ' ',
            'product_type'                 => 'Product Type',
            'product_type_helper'          => ' ',
            'category'                 => 'Categories',
            'category_helper'          => ' ',
            'timeframe'                => 'Timeframe',
            'timeframe_helper'         => ' ',
            'slug'                     => 'Slug',
            'slug_helper'              => ' ',
            'customer_company'         => 'Customer Company',
            'customer_company_helper'  => ' ',
            'customer_name'            => 'Customer Name',
            'customer_name_helper'     => ' ',
            'customer_link'            => 'Customer Link',
            'customer_link_helper'     => ' ',
            'customer_website'         => 'Customer Website',
            'customer_website_helper'  => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated At',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted At',
            'deleted_at_helper'        => ' ',
            'brand'                    => 'Brand',
            'brand_helper'             => ' ',
            'brand_model'              => 'Brand Model',
            'brand_model_helper'       => ' ',
            'subtitle'                 => 'Subtitle',
            'subtitle_helper'          => ' ',
        ],
    ],
    'brandModel' => [
        'title'          => 'Brand Models',
        'title_singular' => 'Brand Model',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'model'              => 'Model',
            'model_helper'       => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'buildManagement' => [
        'title'          => 'Build Management',
        'title_singular' => 'Build Management',
    ],
    'snippet' => [
        'title'          => 'Snippets',
        'title_singular' => 'Snippet',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'name'                => 'Name',
            'name_helper'         => ' ',
            'snippet'             => 'Snippet',
            'snippet_helper'      => ' ',
            'code_snippet'        => 'Code Snippet',
            'code_snippet_helper' => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => ' ',
        ],
    ],

];
