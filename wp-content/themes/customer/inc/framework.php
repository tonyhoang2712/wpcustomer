<?php

// Control core classes for avoid errors
if (class_exists('CSF')) {

    //
    // Set a unique slug-like ID
    $prefix = 'my_framework';

    //
    // Create options
    CSF::createOptions($prefix, array(
        'menu_title' => 'General Settings',
        'menu_slug' => 'my-framework',
    ));

    //
    // Create a section
    CSF::createSection($prefix, array(
        'title' => 'Header',
        'fields' => array(
            // A text field
            array(
                'id' => 'opt-upload-logo-white',
                'type' => 'upload',
                'title' => 'Logo White',
                'preview' => true,
                'default' => '/wp-content/uploads/2023/05/logo-en.png'
            ),
            array(
                'id' => 'opt-upload-logo-black',
                'type' => 'upload',
                'title' => 'Logo Black',
                'preview' => true,
                'default' => '/wp-content/uploads/2023/05/logo-b-en.png'
            ),
        )
    ));

    CSF::createSection($prefix, array(
        'title' => 'Contact Us',
        'fields' => array(
            // A text field
            array(
                'id'      => 'opt-text-call-us-1',
                'type'    => 'text',
                'title'   => 'Phone 1',
                'default' => '+886-2-2567-7757'
            ),
            array(
                'id'      => 'opt-text-call-us-2',
                'type'    => 'text',
                'title'   => 'Phone 2',
                'default' => '+886-4-2251-7855'
            ),
            array(
                'id'      => 'opt-text-address-1',
                'type'    => 'text',
                'title'   => 'Address 1',
                'default' => '3F., No.10, Sec. 2, Zhongshan N. Rd., Zhongshan Dist., Taipei City 10445, Taiwan (R.O.C.)'
            ),
            array(
                'id'      => 'opt-text-address-2',
                'type'    => 'text',
                'title'   => 'Address 2',
                'default' => '9F.-10, No.77, Shizheng N. 1st Rd, Xitun Dist., Taichung City, Taiwan'
            ),
            array(
                'id'      => 'opt-text-email-1',
                'type'    => 'text',
                'title'   => 'Email 1',
                'default' => 'shang.tpe@gmail.com'
            ),
            array(
                'id'      => 'opt-text-email-2',
                'type'    => 'text',
                'title'   => 'Email 2',
                'default' => 'shangyih.tc@gmail.com'
            ),
        )
    ));

    //
    // Create a section
    CSF::createSection($prefix, array(
        'title' => 'Footer',
        'fields' => array(
                array(
                    'id' => 'opt-upload-footer-logo',
                    'type' => 'upload',
                    'title' => 'Logo footer',
                    'preview' => true,
                    'default' => '/wp-content/uploads/2023/05/logo-footer.png'
                ),
                // A textarea field
                array(
                    'id' => 'opt-code-editor-share',
                    'type' => 'code_editor',
                    'title' => 'Copy Right',
                    'default' => '<a target="_blank" href="https://www.facebook.com/尚藝室內設計-125471944152535/" title="Facebook"><i class="fa fa-facebook"></i></a> 
<a target="_blank" href="https://www.instagram.com/shangyih.design/" title="instagram"><i class="fa fa-instagram"></i></a> 
<a target="_blank" href="https://www.pinterest.com/shangyihalan/" title="pinterest+"><i class="fa fa-pinterest"></i></a>
<a target="_blank" href="https://www.youtube.com/channel/UCfWCaXfdHB7neY8HMiRZzUw" title="Youtube"><i class="fa fa-youtube"></i></a> 
<a target="_blank" href="../blog/en/index.html" title="Blog"><i class="fa fa-bold"></i></a>'
                ),
                // A textarea field
                array(
                    'id' => 'opt-code-editor-copy-right',
                    'type' => 'code_editor',
                    'title' => 'Copy Right',
                    'default' => '© Shang Yih Interior Design 2015.<br>
                    <a href="https://www.creer-design.com/" target="_blank">Web Design By créer</a>'
                ),
            // A textarea field


        )
    ));

}
