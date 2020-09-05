<?php

//FIXME: below payment methods are commented to block from the client side frontend
return [
    'settings' => 'Settings',
    'tabs' => [
        'group' => [
            'general_settings' => 'General Settings',
            'social_logins' => 'Social Logins',
            'shipping_methods' => 'Shipping Methods',
            'payment_methods' => 'Payment Methods',
        ],
        'general' => 'General',
        'maintenance' => 'Maintenance',
        'store' => 'Store',
        'currency' => 'Currency',
        'redis' => 'Redis',
        'mail' => 'Mail',
        'newsletter' => 'Newsletter',
        'custom_css_js' => 'Custom CSS/JS',
        'facebook' => 'Facebook',
        'google' => 'Google',
        'free_shipping' => 'Free Shipping',
        'local_pickup' => 'Local Pickup',
        'flat_rate' => 'Flat Rate',
        //'paypal' => 'PayPal',
        //'stripe' => 'Stripe',
        //'razorpay' => 'Razorpay',
        //'instamojo' => 'Instamojo',
        'cod' => 'Cash On Delivery',
        //'bank_transfer' => 'Bank Transfer',
        //'check_payment' => 'Check / Money Order',
    ],
    'form' => [
        'allow_reviews' => 'Allow customers to give reviews & ratings',
        'approve_reviews_automatically' => 'Customer reviews will be approved automatically',
        'send_welcome_email_after_registration' => 'Send welcome email after registration',
        'send_order_notification_to_admin' => 'Send new order notification to the admin',
        'send_email_after_order_status_changed' => 'Send email after order status is changed',
        'send_invoice_email' => 'Send invoice email to the customer after checkout',
        'show_cookie_bar' => 'Show cookie bar in your website',
        'put_the_application_into_maintenance_mode' => 'Put the application into maintenance mode',
        'ip_addreses_seperated_in_new_line' => 'IP addreses seperated in new line',
        'select_service' => 'Select Service',
        'enable_auto_refreshing_currency_rates' => 'Enable auto-refreshing currency rates',
        'auto_refresh_currency_rate_frequencies' => [
            'daily' => 'Daily',
            'weekly' => 'Weekly',
            'monthly' => 'Monthly',
        ],
        'mail_encryption_protocols' => [
            'ssl' => 'SSL',
            'tls' => 'Tls',
        ],
        'allow_customers_to_subscribe' => 'Allow customers to subscribe to your newsletter.',
        'enable_facebook_login' => 'Enable Facebook Login',
        'enable_google_login' => 'Enable Google Login',
        'enable_free_shipping' => 'Enable Free Shipping',
        'enable_local_pickup' => 'Enable Local Pickup',
        'enable_flat_rate' => 'Enable Flat Rate',
        //'enable_paypal' => 'Enable PayPal',
        'use_sandbox_for_test_payments' => 'Use sandbox for test payments',
        //'enable_stripe' => 'Enable Stripe',
        //'enable_razorpay' => 'Enable Razorpay',
        //'enable_instamojo' => 'Enable Instamojo',
        'enable_cod' => 'Enable Cash On Delivery',
        //'enable_bank_transfer' => 'Enable Bank Transfer',
        //'enable_check_payment' => 'Enable Check / Money Order',
    ],
    'validation' => [
        'sqlite_is_not_installed' => 'SQLite is not installed.',
    ],
];
