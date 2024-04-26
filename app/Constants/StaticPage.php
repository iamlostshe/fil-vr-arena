<?php

namespace App\Constants;

abstract class StaticPage {
    const PREFIX_ROUTE = 'static_page.';
    const PAGE_KEY_LIST = [
        self::PRIVACY_POLICY => [
            'prefix_path' => '/',
            'route' => self::PREFIX_ROUTE . self::PRIVACY_POLICY
        ],
        self::USER_AGREEMENT => [
            'prefix_path' => '/',
            'route' => self::PREFIX_ROUTE . self::USER_AGREEMENT
        ],
        self::COMPANY_INFO => [
            'prefix_path' => '/',
            'route' => self::PREFIX_ROUTE . self::COMPANY_INFO
        ],
        self::CONTACTS => [
            'prefix_path' => '/',
            'route' => self::PREFIX_ROUTE . self::CONTACTS
        ],
        self::ABOUT => [
            'prefix_path' => '/',
            'route' => self::PREFIX_ROUTE . self::ABOUT
        ],
        self::TERMS_AND_CONDITIONS => [
            'prefix_path' => '/',
            'route' => self::PREFIX_ROUTE . self::TERMS_AND_CONDITIONS
        ],

    ];
    const COMPANY_INFO = 'company-info';
    const PRIVACY_POLICY = 'privacy-policy';
    const USER_AGREEMENT = 'user-agreement';
    const TERMS_AND_CONDITIONS = 'terms-and-conditions';
    const CONTACTS = 'contacts';
    const ABOUT = 'about';

}
