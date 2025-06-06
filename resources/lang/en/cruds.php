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
    'slider' => [
        'title'          => 'Sliders',
        'title_singular' => 'Slider',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'image'             => 'Image',
            'image_helper'      => ' ',
            'link'              => 'Link',
            'link_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'aboutAssociation' => [
        'title'          => 'About Association',
        'title_singular' => 'About Association',
    ],
    'service' => [
        'title'          => 'Services',
        'title_singular' => 'Service',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
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
    'beneficiary' => [
        'title'          => 'Beneficiaries',
        'title_singular' => 'Beneficiary',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'image'              => 'Image',
            'image_helper'       => ' ',
            'precentatge'        => 'Precentatge',
            'precentatge_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'project' => [
        'title'          => 'Projects',
        'title_singular' => 'Project',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'title'                    => 'Title',
            'title_helper'             => ' ',
            'short_description'        => 'Short Description',
            'short_description_helper' => ' ',
            'description'              => 'Description',
            'description_helper'       => ' ',
            'image'                    => 'Image',
            'image_helper'             => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
            'start_date'               => 'Start Date',
            'start_date_helper'        => ' ',
            'end_date'                 => 'End Date',
            'end_date_helper'          => ' ',
            'address'                  => 'Address',
            'address_helper'           => ' ',
            'inner_image'              => 'Inner Image',
            'inner_image_helper'       => ' ',
            'beneficiar'               => 'Beneficiar',
            'beneficiar_helper'        => ' ',
        ],
    ],
    'mediaCenter' => [
        'title'          => 'Media Center',
        'title_singular' => 'Media Center',
    ],
    'news' => [
        'title'          => 'News',
        'title_singular' => 'News',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'image'                    => 'Image',
            'image_helper'             => ' ',
            'date'                     => 'Date',
            'date_helper'              => ' ',
            'short_description'        => 'Short Description',
            'short_description_helper' => ' ',
            'description'              => 'Description',
            'description_helper'       => ' ',
            'inner_image'              => 'Inner Image',
            'inner_image_helper'       => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
            'address'                  => 'Address',
            'address_helper'           => ' ',
            'images'                   => 'Images',
            'images_helper'            => ' ',
        ],
    ],
    'saidAboutUs' => [
        'title'          => 'Said About Us',
        'title_singular' => 'Said About Us',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'position'          => 'Position',
            'position_helper'   => ' ',
            'review'            => 'Review',
            'review_helper'     => ' ',
            'image'             => 'Image',
            'image_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'partner' => [
        'title'          => 'Partners',
        'title_singular' => 'Partner',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'image'             => 'Image',
            'image_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'hawkmaMangment' => [
        'title'          => 'Hawkma Mangment',
        'title_singular' => 'Hawkma Mangment',
    ],
    'hawkamCategory' => [
        'title'          => 'Hawkam Categories',
        'title_singular' => 'Hawkam Category',
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
        ],
    ],
    'hawkma' => [
        'title'          => 'Hawkma',
        'title_singular' => 'Hawkma',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'file'              => 'File',
            'file_helper'       => ' ',
            'icon'              => 'Icon',
            'icon_helper'       => ' ',
            'published'         => 'Published',
            'published_helper'  => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'category'          => 'Category',
            'category_helper'   => ' ',
        ],
    ],
    'reportMangment' => [
        'title'          => 'Report Mangment',
        'title_singular' => 'Report Mangment',
    ],
    'reportCategory' => [
        'title'          => 'Report Categories',
        'title_singular' => 'Report Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'type'              => 'Type',
            'type_helper'       => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'published'         => 'Published',
            'published_helper'  => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'report' => [
        'title'          => 'Reports',
        'title_singular' => 'Report',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'type'              => 'Type',
            'type_helper'       => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'file'              => 'File',
            'file_helper'       => ' ',
            'image'             => 'Image',
            'image_helper'      => ' ',
            'link'              => 'Link',
            'link_helper'       => ' ',
            'published'         => 'Published',
            'published_helper'  => ' ',
            'category'          => 'Category',
            'category_helper'   => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'reportMoney' => [
        'title'          => 'Report Money',
        'title_singular' => 'Report Money',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'part'              => 'Part',
            'part_helper'       => ' ',
            'year'              => 'Year',
            'year_helper'       => ' ',
            'link'              => 'Link',
            'link_helper'       => ' ',
            'published'         => 'Published',
            'published_helper'  => ' ',
            'file'              => 'File',
            'file_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'gallery' => [
        'title'          => 'Gallery',
        'title_singular' => 'Gallery',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'image'             => 'Image',
            'image_helper'      => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'status'            => 'Status',
            'status_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'volunteeringManagment' => [
        'title'          => 'Volunteering Managment',
        'title_singular' => 'Volunteering Managment',
    ],
    'volunteer' => [
        'title'          => 'Volunteer',
        'title_singular' => 'Volunteer',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'email'                  => 'Email',
            'email_helper'           => ' ',
            'name'                   => 'Name',
            'name_helper'            => ' ',
            'phone'                  => 'Phone',
            'phone_helper'           => ' ',
            'identity'               => 'Identity',
            'identity_helper'        => ' ',
            'skills'                 => 'Skills',
            'skills_helper'          => ' ',
            'experience'             => 'Experience',
            'experience_helper'      => ' ',
            'volunteer_befor'        => 'Volunteer Befor',
            'volunteer_befor_helper' => ' ',
            'initiative_name'        => 'Initiative Name',
            'initiative_name_helper' => ' ',
            'cv'                     => 'Cv',
            'cv_helper'              => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
        ],
    ],
    'volunteerGuide' => [
        'title'          => 'Volunteer Guides',
        'title_singular' => 'Volunteer Guide',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'published'         => 'Published',
            'published_helper'  => ' ',
            'file'              => 'File',
            'file_helper'       => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'icon'              => 'Icon',
            'icon_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'membership' => [
        'title'          => 'Membership',
        'title_singular' => 'Membership',
    ],
    'membershipType' => [
        'title'          => 'Membership Type',
        'title_singular' => 'Membership Type',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'file'               => 'File',
            'file_helper'        => ' ',
        ],
    ],
    'member' => [
        'title'          => 'Members',
        'title_singular' => 'Member',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'name'                   => 'Name',
            'name_helper'            => ' ',
            'job'                    => 'Job',
            'job_helper'             => ' ',
            'phone_number'           => 'Phone Number',
            'phone_number_helper'    => ' ',
            'email'                  => 'Email',
            'email_helper'           => ' ',
            'date_of_birth'          => 'Date Of Birth',
            'date_of_birth_helper'   => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
            'employer'               => 'Employer',
            'employer_helper'        => ' ',
            'identity_number'        => 'Identity Number',
            'identity_number_helper' => ' ',
            'identity_date'          => 'Identity Date',
            'identity_date_helper'   => ' ',
            'type'                   => 'Type',
            'type_helper'            => ' ',
            'residence'              => 'Residence',
            'residence_helper'       => ' ',
            'neighborhood'           => 'Neighborhood',
            'neighborhood_helper'    => ' ',
            'address'                => 'Address',
            'address_helper'         => ' ',
            'agreement'              => 'Agreement',
            'agreement_helper'       => ' ',
        ],
    ],
    'contactMangment' => [
        'title'          => 'Contact Mangment',
        'title_singular' => 'Contact Mangment',
    ],
    'contact' => [
        'title'          => 'Contacts',
        'title_singular' => 'Contact',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'type'                => 'Type',
            'type_helper'         => ' ',
            'name'                => 'Name',
            'name_helper'         => ' ',
            'email'               => 'Email',
            'email_helper'        => ' ',
            'phone_number'        => 'Phone Number',
            'phone_number_helper' => ' ',
            'message'             => 'Message',
            'message_helper'      => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => ' ',
            'subject'             => 'Subject',
            'subject_helper'      => ' ',
        ],
    ],
    'subscribe' => [
        'title'          => 'Subscribe',
        'title_singular' => 'Subscribe',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'email'             => 'Email',
            'email_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'setting' => [
        'title'          => 'Settings',
        'title_singular' => 'Setting',
        'fields'         => [
            'id'                            => 'ID',
            'id_helper'                     => ' ',
            'description'                   => 'Description',
            'description_helper'            => ' ',
            'phone'                         => 'Phone',
            'phone_helper'                  => ' ',
            'address'                       => 'Address',
            'address_helper'                => ' ',
            'email'                         => 'Email',
            'email_helper'                  => ' ',
            'facebook'                      => 'Facebook',
            'facebook_helper'               => ' ',
            'twitter'                       => 'Twitter',
            'twitter_helper'                => ' ',
            'linkedin'                      => 'Linkedin',
            'linkedin_helper'               => ' ',
            'youtubte'                      => 'Youtube',
            'youtubte_helper'               => ' ',
            'about_description'             => 'About Description',
            'about_description_helper'      => ' ',
            'about_photo'                   => 'About Photo',
            'about_photo_helper'            => ' ',
            'created_at'                    => 'Created at',
            'created_at_helper'             => ' ',
            'updated_at'                    => 'Updated at',
            'updated_at_helper'             => ' ',
            'deleted_at'                    => 'Deleted at',
            'deleted_at_helper'             => ' ',
            'site_name'                     => 'Site Name',
            'site_name_helper'              => ' ',
            'instagram'                     => 'Instagram',
            'instagram_helper'              => ' ',
            'logo'                          => 'Logo',
            'logo_helper'                   => ' ',
            'chairman_description'          => 'Chairman Description',
            'chairman_description_helper'   => ' ',
            'chairman_image'                => 'Chairman Image',
            'chairman_image_helper'         => ' ',
            'donation_url'                  => 'Donation Url',
            'donation_url_helper'           => ' ',
            'counter_1_text'                => 'Counter 1 Text',
            'counter_1_text_helper'         => ' ',
            'counter_1_value'               => 'Counter 1 Value',
            'counter_1_value_helper'        => ' ',
            'counter_2_text'                => 'Counter 2 Text',
            'counter_2_text_helper'         => ' ',
            'counter_2_value'               => 'Counter 2 Value',
            'counter_2_value_helper'        => ' ',
            'counter_3_text'                => 'Counter 3 Text',
            'counter_3_text_helper'         => ' ',
            'counter_3_value'               => 'Counter 3 Value',
            'counter_3_value_helper'        => ' ',
            'short_descrption'              => 'Short Descrption',
            'short_descrption_helper'       => ' ',
            'inner_image'                   => 'Inner Image',
            'inner_image_helper'            => ' ',
            'pinterest'                     => 'Pinterest',
            'pinterest_helper'              => ' ',
            'logo_white'                    => 'Logo White',
            'logo_white_helper'             => ' ',
            'vision'                        => 'Vision',
            'vision_helper'                 => ' ',
            'mission'                       => 'Mission',
            'mission_helper'                => ' ',
            'values'                        => 'Values',
            'values_helper'                 => ' ',
            'snap_chat'                     => 'Snap Chat',
            'snap_chat_helper'              => ' ',
            'membership_conditions'         => 'Membership Conditions',
            'membership_conditions_helper'  => ' ',
            'loss_membership'               => 'Loss Membership',
            'loss_membership_helper'        => ' ',
            'commitments_membership'        => 'Commitments Membership',
            'commitments_membership_helper' => ' ',
            'scope'                         => 'Scope',
            'scope_helper'                  => ' ',
            'signature_image'               => 'Signature Image',
            'signature_image_helper'        => ' ',
            'initiative'                    => 'Initiative',
            'initiative_helper'             => ' ',
            'support_text'                  => 'Support Text',
            'support_text_helper'           => ' ',
        ],
    ],
    'director' => [
        'title'          => 'Directors',
        'title_singular' => 'Director',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'position'          => 'Position',
            'position_helper'   => ' ',
            'image'             => 'Image',
            'image_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'support' => [
        'title'          => 'Support',
        'title_singular' => 'Support',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'reason'            => 'Reason',
            'reason_helper'     => ' ',
            'icon'              => 'Icon',
            'icon_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'certificate' => [
        'title'          => 'Certificate',
        'title_singular' => 'Certificate',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'image'              => 'Image',
            'image_helper'       => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'article' => [
        'title'          => 'Article',
        'title_singular' => 'Article',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'title'                    => 'Title',
            'title_helper'             => ' ',
            'short_description'        => 'Short Description',
            'short_description_helper' => ' ',
            'description'              => 'Description',
            'description_helper'       => ' ',
            'description_2'            => 'Description 2',
            'description_2_helper'     => ' ',
            'image'                    => 'Image',
            'image_helper'             => ' ',
            'inner_image'              => 'Inner Image',
            'inner_image_helper'       => ' ',
            'images'                   => 'Images',
            'images_helper'            => ' ',
            'writer_name'              => 'Writer Name',
            'writer_name_helper'       => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],

];
