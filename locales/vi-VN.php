<?php

return [
    'dateTimeFormats' => [
        'short' => [
            'date' => 'd/M/y',
            'time' => 'HH:mm',
            'datetime' => 'HH:mm, d/M/y',
        ],
        'medium' => [
            'date' => 'd MMM, y',
            'time' => 'HH:mm:ss',
            'datetime' => 'HH:mm:ss, d MMM, y',
        ],
        'long' => [
            'date' => '\'Ngày\' d \'tháng\' M \'năm\' y',
            'time' => 'HH:mm:ss z',
            'datetime' => 'HH:mm:ss z \'Ngày\' d \'tháng\' M \'năm\' y',
        ],
        'full' => [
            'date' => 'EEEE, \'ngày\' d MMMM \'năm\' y',
            'time' => 'HH:mm:ss zzzz',
            'datetime' => 'HH:mm:ss zzzz EEEE, \'ngày\' d MMMM \'năm\' y',
        ],
    ],
    'numberPatterns' => [
        'decimal' => '#,##0.###',
        'currency' => '¤ #,##0',
        'percent' => '#,##0%',
        'scientific' => '#E0',
    ],
    'amName' => 'SA',
    'pmName' => 'CH',
    'textAttributes' => [
        'positivePrefix' => '',
        'positiveSuffix' => '',
        'negativePrefix' => '-',
        'negativeSuffix' => '',
        'paddingCharacter' => ' ',
        'currencyCode' => '',
        'defaultRuleset' => '',
        'publicRulesets' => '',
    ],
    'numberSymbols' => [
        'decimalSeparator' => ',',
        'groupingSeparator' => '.',
        'patternSeparator' => ';',
        'percent' => '%',
        'zeroDigit' => '0',
        'digit' => '#',
        'minusSign' => '-',
        'plusSign' => '+',
        'currency' => '₫',
        'intlCurrency' => 'VND',
        'monetarySeparator' => ',',
        'exponential' => 'E',
        'permill' => '‰',
        'padEscape' => '*',
        'infinity' => '∞',
        'nan' => 'NaN',
        'significantDigit' => '@',
        'monetaryGroupingSeparator' => '.',
    ],
    'currencySymbols' => [
        'AUD' => 'AU$',
        'BRL' => 'R$',
        'CAD' => 'CA$',
        'CNY' => 'CN¥',
        'EUR' => '€',
        'GBP' => '£',
        'HKD' => 'HK$',
        'ILS' => '₪',
        'INR' => '₹',
        'JPY' => 'JP¥',
        'KRW' => '₩',
        'MXN' => 'MX$',
        'NZD' => 'NZ$',
        'THB' => '฿',
        'TWD' => 'NT$',
        'USD' => 'US$',
        'VND' => '₫',
        'XAF' => 'FCFA',
        'XCD' => 'EC$',
        'XOF' => 'CFA',
        'XPF' => 'CFPF',
    ],
    'standAloneMonthNames' => [
        'abbreviated' => [
            '1',
            '2',
            '3',
            '4',
            '5',
            '6',
            '7',
            '8',
            '9',
            '10',
            '11',
            '12',
        ],
        'medium' => [
            'Thg 1',
            'Thg 2',
            'Thg 3',
            'Thg 4',
            'Thg 5',
            'Thg 6',
            'Thg 7',
            'Thg 8',
            'Thg 9',
            'Thg 10',
            'Thg 11',
            'Thg 12',
        ],
        'full' => [
            'Tháng 1',
            'Tháng 2',
            'Tháng 3',
            'Tháng 4',
            'Tháng 5',
            'Tháng 6',
            'Tháng 7',
            'Tháng 8',
            'Tháng 9',
            'Tháng 10',
            'Tháng 11',
            'Tháng 12',
        ],
    ],
    'monthNames' => [
        'abbreviated' => [
            '1',
            '2',
            '3',
            '4',
            '5',
            '6',
            '7',
            '8',
            '9',
            '10',
            '11',
            '12',
        ],
        'medium' => [
            'thg 1',
            'thg 2',
            'thg 3',
            'thg 4',
            'thg 5',
            'thg 6',
            'thg 7',
            'thg 8',
            'thg 9',
            'thg 10',
            'thg 11',
            'thg 12',
        ],
        'full' => [
            'tháng 1',
            'tháng 2',
            'tháng 3',
            'tháng 4',
            'tháng 5',
            'tháng 6',
            'tháng 7',
            'tháng 8',
            'tháng 9',
            'tháng 10',
            'tháng 11',
            'tháng 12',
        ],
    ],
    'standAloneWeekDayNames' => [
        'abbreviated' => [
            'CN',
            'T2',
            'T3',
            'T4',
            'T5',
            'T6',
            'T7',
        ],
        'short' => [
            'CN',
            'T2',
            'T3',
            'T4',
            'T5',
            'T6',
            'T7',
        ],
        'medium' => [
            'CN',
            'Th 2',
            'Th 3',
            'Th 4',
            'Th 5',
            'Th 6',
            'Th 7',
        ],
        'full' => [
            'Chủ Nhật',
            'Thứ Hai',
            'Thứ Ba',
            'Thứ Tư',
            'Thứ Năm',
            'Thứ Sáu',
            'Thứ Bảy',
        ],
    ],
    'weekDayNames' => [
        'abbreviated' => [
            'CN',
            'T2',
            'T3',
            'T4',
            'T5',
            'T6',
            'T7',
        ],
        'short' => [
            'CN',
            'T2',
            'T3',
            'T4',
            'T5',
            'T6',
            'T7',
        ],
        'medium' => [
            'CN',
            'Th 2',
            'Th 3',
            'Th 4',
            'Th 5',
            'Th 6',
            'Th 7',
        ],
        'full' => [
            'Chủ Nhật',
            'Thứ Hai',
            'Thứ Ba',
            'Thứ Tư',
            'Thứ Năm',
            'Thứ Sáu',
            'Thứ Bảy',
        ],
    ],
    'localeDisplayNames' => [
        'af' => 'Tiếng Nam Phi',
        'af-NA' => 'Tiếng Nam Phi (Namibia)',
        'af-ZA' => 'Tiếng Nam Phi (Nam Phi)',
        'agq' => 'Tiếng Aghem',
        'agq-CM' => 'Tiếng Aghem (Cameroon)',
        'ak' => 'Tiếng Akan',
        'ak-GH' => 'Tiếng Akan (Ghana)',
        'am' => 'Tiếng Amharic',
        'am-ET' => 'Tiếng Amharic (Ethiopia)',
        'ar' => 'Tiếng Ả Rập',
        'ar-001' => 'Tiếng Ả Rập (Thế giới)',
        'ar-AE' => 'Tiếng Ả Rập (Các Tiểu V.quốc Ả Rập T.nhất)',
        'ar-BH' => 'Tiếng Ả Rập (Bahrain)',
        'ar-DJ' => 'Tiếng Ả Rập (Djibouti)',
        'ar-DZ' => 'Tiếng Ả Rập (Algeria)',
        'ar-EG' => 'Tiếng Ả Rập (Ai Cập)',
        'ar-EH' => 'Tiếng Ả Rập (Tây Sahara)',
        'ar-ER' => 'Tiếng Ả Rập (Eritrea)',
        'ar-IL' => 'Tiếng Ả Rập (Israel)',
        'ar-IQ' => 'Tiếng Ả Rập (I-rắc)',
        'ar-JO' => 'Tiếng Ả Rập (Jordan)',
        'ar-KM' => 'Tiếng Ả Rập (Comoros)',
        'ar-KW' => 'Tiếng Ả Rập (Cô-oét)',
        'ar-LB' => 'Tiếng Ả Rập (Li-băng)',
        'ar-LY' => 'Tiếng Ả Rập (Li-bi)',
        'ar-MA' => 'Tiếng Ả Rập (Ma-rốc)',
        'ar-MR' => 'Tiếng Ả Rập (Mauritania)',
        'ar-OM' => 'Tiếng Ả Rập (Oman)',
        'ar-PS' => 'Tiếng Ả Rập (Lãnh thổ Palestine)',
        'ar-QA' => 'Tiếng Ả Rập (Qatar)',
        'ar-SA' => 'Tiếng Ả Rập (Ả Rập Xê-út)',
        'ar-SD' => 'Tiếng Ả Rập (Sudan)',
        'ar-SO' => 'Tiếng Ả Rập (Somali)',
        'ar-SS' => 'Tiếng Ả Rập (Nam Sudan)',
        'ar-SY' => 'Tiếng Ả Rập (Syria)',
        'ar-TD' => 'Tiếng Ả Rập (Chad)',
        'ar-TN' => 'Tiếng Ả Rập (Tunisia)',
        'ar-YE' => 'Tiếng Ả Rập (Yemen)',
        'as' => 'Tiếng Assam',
        'as-IN' => 'Tiếng Assam (Ấn Độ)',
        'asa' => 'Tiếng Asu',
        'asa-TZ' => 'Tiếng Asu (Tanzania)',
        'az' => 'Tiếng Azerbaijan',
        'az-Cyrl' => 'Tiếng Azerbaijan (Chữ Kirin)',
        'az-Cyrl-AZ' => 'Tiếng Azerbaijan (Chữ Kirin, Azerbaijan)',
        'az-Latn' => 'Tiếng Azerbaijan (Chữ La tinh)',
        'az-Latn-AZ' => 'Tiếng Azerbaijan (Chữ La tinh, Azerbaijan)',
        'bas' => 'Tiếng Basaa',
        'bas-CM' => 'Tiếng Basaa (Cameroon)',
        'be' => 'Tiếng Belarus',
        'be-BY' => 'Tiếng Belarus (Belarus)',
        'bem' => 'Tiếng Bemba',
        'bem-ZM' => 'Tiếng Bemba (Zambia)',
        'bez' => 'Tiếng Bena',
        'bez-TZ' => 'Tiếng Bena (Tanzania)',
        'bg' => 'Tiếng Bulgaria',
        'bg-BG' => 'Tiếng Bulgaria (Bungari)',
        'bm' => 'Tiếng Bambara',
        'bm-ML' => 'Tiếng Bambara (Mali)',
        'bn' => 'Tiếng Bengali',
        'bn-BD' => 'Tiếng Bengali (Bangladesh)',
        'bn-IN' => 'Tiếng Bengali (Ấn Độ)',
        'bo' => 'Tiếng Tây Tạng',
        'bo-CN' => 'Tiếng Tây Tạng (Trung Quốc)',
        'bo-IN' => 'Tiếng Tây Tạng (Ấn Độ)',
        'br' => 'Tiếng Breton',
        'br-FR' => 'Tiếng Breton (Pháp)',
        'brx' => 'Tiếng Bodo',
        'brx-IN' => 'Tiếng Bodo (Ấn Độ)',
        'bs' => 'Tiếng Nam Tư',
        'bs-Cyrl' => 'Tiếng Nam Tư (Chữ Kirin)',
        'bs-Cyrl-BA' => 'Tiếng Nam Tư (Chữ Kirin, Bosnia và Herzegovina)',
        'bs-Latn' => 'Tiếng Nam Tư (Chữ La tinh)',
        'bs-Latn-BA' => 'Tiếng Nam Tư (Chữ La tinh, Bosnia và Herzegovina)',
        'ca' => 'Tiếng Catalan',
        'ca-AD' => 'Tiếng Catalan (Andorra)',
        'ca-ES' => 'Tiếng Catalan (Tây Ban Nha)',
        'ca-FR' => 'Tiếng Catalan (Pháp)',
        'ca-IT' => 'Tiếng Catalan (Ý)',
        'ce' => 'Tiếng Chechen',
        'ce-RU' => 'Tiếng Chechen (Nga)',
        'cgg' => 'Tiếng Chiga',
        'cgg-UG' => 'Tiếng Chiga (Uganda)',
        'chr' => 'Tiếng Cherokee',
        'chr-US' => 'Tiếng Cherokee (Hoa Kỳ)',
        'cs' => 'Tiếng Séc',
        'cs-CZ' => 'Tiếng Séc (Cộng hòa Séc)',
        'cy' => 'Tiếng Wales',
        'cy-GB' => 'Tiếng Wales (Vương quốc Anh)',
        'da' => 'Tiếng Đan Mạch',
        'da-DK' => 'Tiếng Đan Mạch (Đan Mạch)',
        'da-GL' => 'Tiếng Đan Mạch (Greenland)',
        'dav' => 'Tiếng Taita',
        'dav-KE' => 'Tiếng Taita (Kenya)',
        'de' => 'Tiếng Đức',
        'de-AT' => 'Tiếng Đức (Áo)',
        'de-BE' => 'Tiếng Đức (Bỉ)',
        'de-CH' => 'Tiếng Đức (Thụy Sĩ)',
        'de-DE' => 'Tiếng Đức (Đức)',
        'de-LI' => 'Tiếng Đức (Liechtenstein)',
        'de-LU' => 'Tiếng Đức (Luxembourg)',
        'dje' => 'Tiếng Zarma',
        'dje-NE' => 'Tiếng Zarma (Niger)',
        'dsb' => 'Tiếng Hạ Sorbia',
        'dsb-DE' => 'Tiếng Hạ Sorbia (Đức)',
        'dua' => 'Tiếng Duala',
        'dua-CM' => 'Tiếng Duala (Cameroon)',
        'dyo' => 'Tiếng Jola-Fonyi',
        'dyo-SN' => 'Tiếng Jola-Fonyi (Senegal)',
        'dz' => 'Tiếng Dzongkha',
        'dz-BT' => 'Tiếng Dzongkha (Bhutan)',
        'ebu' => 'Tiếng Embu',
        'ebu-KE' => 'Tiếng Embu (Kenya)',
        'ee' => 'Tiếng Ewe',
        'ee-GH' => 'Tiếng Ewe (Ghana)',
        'ee-TG' => 'Tiếng Ewe (Togo)',
        'el' => 'Tiếng Hy Lạp',
        'el-CY' => 'Tiếng Hy Lạp (Síp)',
        'el-GR' => 'Tiếng Hy Lạp (Hy Lạp)',
        'en' => 'Tiếng Anh',
        'en-001' => 'Tiếng Anh (Thế giới)',
        'en-150' => 'Tiếng Anh (Châu Âu)',
        'en-AG' => 'Tiếng Anh (Antigua và Barbuda)',
        'en-AI' => 'Tiếng Anh (Anguilla)',
        'en-AS' => 'Tiếng Anh (Đảo Somoa thuộc Mỹ)',
        'en-AT' => 'Tiếng Anh (Áo)',
        'en-AU' => 'Tiếng Anh (Úc)',
        'en-BB' => 'Tiếng Anh (Barbados)',
        'en-BE' => 'Tiếng Anh (Bỉ)',
        'en-BI' => 'Tiếng Anh (Burundi)',
        'en-BM' => 'Tiếng Anh (Bermuda)',
        'en-BS' => 'Tiếng Anh (Bahamas)',
        'en-BW' => 'Tiếng Anh (Botswana)',
        'en-BZ' => 'Tiếng Anh (Belize)',
        'en-CA' => 'Tiếng Anh (Canada)',
        'en-CC' => 'Tiếng Anh (Quần đảo Cocos [Keeling])',
        'en-CH' => 'Tiếng Anh (Thụy Sĩ)',
        'en-CK' => 'Tiếng Anh (Quần đảo Cook)',
        'en-CM' => 'Tiếng Anh (Cameroon)',
        'en-CX' => 'Tiếng Anh (Đảo Giáng Sinh)',
        'en-CY' => 'Tiếng Anh (Síp)',
        'en-DE' => 'Tiếng Anh (Đức)',
        'en-DG' => 'Tiếng Anh (Diego Garcia)',
        'en-DK' => 'Tiếng Anh (Đan Mạch)',
        'en-DM' => 'Tiếng Anh (Dominica)',
        'en-ER' => 'Tiếng Anh (Eritrea)',
        'en-FI' => 'Tiếng Anh (Phần Lan)',
        'en-FJ' => 'Tiếng Anh (Fiji)',
        'en-FK' => 'Tiếng Anh (Quần đảo Falkland)',
        'en-FM' => 'Tiếng Anh (Micronesia)',
        'en-GB' => 'Tiếng Anh (Vương quốc Anh)',
        'en-GD' => 'Tiếng Anh (Grenada)',
        'en-GG' => 'Tiếng Anh (Guernsey)',
        'en-GH' => 'Tiếng Anh (Ghana)',
        'en-GI' => 'Tiếng Anh (Gibraltar)',
        'en-GM' => 'Tiếng Anh (Gambia)',
        'en-GU' => 'Tiếng Anh (Guam)',
        'en-GY' => 'Tiếng Anh (Guyana)',
        'en-HK' => 'Tiếng Anh (Hồng Kông, Trung Quốc)',
        'en-IE' => 'Tiếng Anh (Ai-len)',
        'en-IL' => 'Tiếng Anh (Israel)',
        'en-IM' => 'Tiếng Anh (Đảo Man)',
        'en-IN' => 'Tiếng Anh (Ấn Độ)',
        'en-IO' => 'Tiếng Anh (Thuộc địa Anh tại Ấn Độ Dương)',
        'en-JE' => 'Tiếng Anh (Jersey)',
        'en-JM' => 'Tiếng Anh (Jamaica)',
        'en-KE' => 'Tiếng Anh (Kenya)',
        'en-KI' => 'Tiếng Anh (Kiribati)',
        'en-KN' => 'Tiếng Anh (St. Kitts và Nevis)',
        'en-KY' => 'Tiếng Anh (Quần đảo Cayman)',
        'en-LC' => 'Tiếng Anh (St. Lucia)',
        'en-LR' => 'Tiếng Anh (Liberia)',
        'en-LS' => 'Tiếng Anh (Lesotho)',
        'en-MG' => 'Tiếng Anh (Madagascar)',
        'en-MH' => 'Tiếng Anh (Quần đảo Marshall)',
        'en-MO' => 'Tiếng Anh (Macao, Trung Quốc)',
        'en-MP' => 'Tiếng Anh (Quần đảo Bắc Mariana)',
        'en-MS' => 'Tiếng Anh (Montserrat)',
        'en-MT' => 'Tiếng Anh (Malta)',
        'en-MU' => 'Tiếng Anh (Mauritius)',
        'en-MW' => 'Tiếng Anh (Malawi)',
        'en-MY' => 'Tiếng Anh (Malaysia)',
        'en-NA' => 'Tiếng Anh (Namibia)',
        'en-NF' => 'Tiếng Anh (Đảo Norfolk)',
        'en-NG' => 'Tiếng Anh (Nigeria)',
        'en-NL' => 'Tiếng Anh (Hà Lan)',
        'en-NR' => 'Tiếng Anh (Nauru)',
        'en-NU' => 'Tiếng Anh (Niue)',
        'en-NZ' => 'Tiếng Anh (New Zealand)',
        'en-PG' => 'Tiếng Anh (Papua New Guinea)',
        'en-PH' => 'Tiếng Anh (Philippin)',
        'en-PK' => 'Tiếng Anh (Pakistan)',
        'en-PN' => 'Tiếng Anh (Quần đảo Pitcairn)',
        'en-PR' => 'Tiếng Anh (Puerto Rico)',
        'en-PW' => 'Tiếng Anh (Palau)',
        'en-RW' => 'Tiếng Anh (Rwanda)',
        'en-SB' => 'Tiếng Anh (Quần đảo Solomon)',
        'en-SC' => 'Tiếng Anh (Seychelles)',
        'en-SD' => 'Tiếng Anh (Sudan)',
        'en-SE' => 'Tiếng Anh (Thụy Điển)',
        'en-SG' => 'Tiếng Anh (Singapore)',
        'en-SH' => 'Tiếng Anh (St. Helena)',
        'en-SI' => 'Tiếng Anh (Slovenia)',
        'en-SL' => 'Tiếng Anh (Sierra Leone)',
        'en-SS' => 'Tiếng Anh (Nam Sudan)',
        'en-SX' => 'Tiếng Anh (Sint Maarten)',
        'en-SZ' => 'Tiếng Anh (Swaziland)',
        'en-TC' => 'Tiếng Anh (Quần đảo Turk và Caicos)',
        'en-TK' => 'Tiếng Anh (Tokelau)',
        'en-TO' => 'Tiếng Anh (Tonga)',
        'en-TT' => 'Tiếng Anh (Trinidad và Tobago)',
        'en-TV' => 'Tiếng Anh (Tuvalu)',
        'en-TZ' => 'Tiếng Anh (Tanzania)',
        'en-UG' => 'Tiếng Anh (Uganda)',
        'en-UM' => 'Tiếng Anh (Các đảo nhỏ xa t.tâm thuộc Mỹ)',
        'en-US' => 'Tiếng Anh (Hoa Kỳ)',
        'en-US-POSIX' => 'Tiếng Anh (Hoa Kỳ, Máy tính)',
        'en-VC' => 'Tiếng Anh (St. Vincent và Grenadines)',
        'en-VG' => 'Tiếng Anh (Quần đảo Virgin thuộc Anh)',
        'en-VI' => 'Tiếng Anh (Quần đảo Virgin thuộc Mỹ)',
        'en-VU' => 'Tiếng Anh (Vanuatu)',
        'en-WS' => 'Tiếng Anh (Samoa)',
        'en-ZA' => 'Tiếng Anh (Nam Phi)',
        'en-ZM' => 'Tiếng Anh (Zambia)',
        'en-ZW' => 'Tiếng Anh (Zimbabwe)',
        'eo' => 'Tiếng Quốc Tế Ngữ',
        'es' => 'Tiếng Tây Ban Nha',
        'es-419' => 'Tiếng Tây Ban Nha (Châu Mỹ La-tinh)',
        'es-AR' => 'Tiếng Tây Ban Nha (Argentina)',
        'es-BO' => 'Tiếng Tây Ban Nha (Bolivia)',
        'es-CL' => 'Tiếng Tây Ban Nha (Chile)',
        'es-CO' => 'Tiếng Tây Ban Nha (Colombia)',
        'es-CR' => 'Tiếng Tây Ban Nha (Costa Rica)',
        'es-CU' => 'Tiếng Tây Ban Nha (Cuba)',
        'es-DO' => 'Tiếng Tây Ban Nha (Cộng hòa Dominica)',
        'es-EA' => 'Tiếng Tây Ban Nha (Ceuta và Melilla)',
        'es-EC' => 'Tiếng Tây Ban Nha (Ecuador)',
        'es-ES' => 'Tiếng Tây Ban Nha (Tây Ban Nha)',
        'es-GQ' => 'Tiếng Tây Ban Nha (Guinea Xích Đạo)',
        'es-GT' => 'Tiếng Tây Ban Nha (Guatemala)',
        'es-HN' => 'Tiếng Tây Ban Nha (Honduras)',
        'es-IC' => 'Tiếng Tây Ban Nha (Quần đảo Canary)',
        'es-MX' => 'Tiếng Tây Ban Nha (Mexico)',
        'es-NI' => 'Tiếng Tây Ban Nha (Nicaragua)',
        'es-PA' => 'Tiếng Tây Ban Nha (Panama)',
        'es-PE' => 'Tiếng Tây Ban Nha (Peru)',
        'es-PH' => 'Tiếng Tây Ban Nha (Philippin)',
        'es-PR' => 'Tiếng Tây Ban Nha (Puerto Rico)',
        'es-PY' => 'Tiếng Tây Ban Nha (Paraguay)',
        'es-SV' => 'Tiếng Tây Ban Nha (El Salvador)',
        'es-US' => 'Tiếng Tây Ban Nha (Hoa Kỳ)',
        'es-UY' => 'Tiếng Tây Ban Nha (Uruguay)',
        'es-VE' => 'Tiếng Tây Ban Nha (Venezuela)',
        'et' => 'Tiếng Estonia',
        'et-EE' => 'Tiếng Estonia (Estonia)',
        'eu' => 'Tiếng Basque',
        'eu-ES' => 'Tiếng Basque (Tây Ban Nha)',
        'ewo' => 'Tiếng Ewondo',
        'ewo-CM' => 'Tiếng Ewondo (Cameroon)',
        'fa' => 'Tiếng Ba Tư',
        'fa-AF' => 'Tiếng Ba Tư (Afghanistan)',
        'fa-IR' => 'Tiếng Ba Tư (Iran)',
        'ff' => 'Tiếng Fulah',
        'ff-CM' => 'Tiếng Fulah (Cameroon)',
        'ff-GN' => 'Tiếng Fulah (Guinea)',
        'ff-MR' => 'Tiếng Fulah (Mauritania)',
        'ff-SN' => 'Tiếng Fulah (Senegal)',
        'fi' => 'Tiếng Phần Lan',
        'fi-FI' => 'Tiếng Phần Lan (Phần Lan)',
        'fil' => 'Tiếng Philipin',
        'fil-PH' => 'Tiếng Philipin (Philippin)',
        'fo' => 'Tiếng Faore',
        'fo-DK' => 'Tiếng Faore (Đan Mạch)',
        'fo-FO' => 'Tiếng Faore (Quần đảo Faroe)',
        'fr' => 'Tiếng Pháp',
        'fr-BE' => 'Tiếng Pháp (Bỉ)',
        'fr-BF' => 'Tiếng Pháp (Burkina Faso)',
        'fr-BI' => 'Tiếng Pháp (Burundi)',
        'fr-BJ' => 'Tiếng Pháp (Benin)',
        'fr-BL' => 'Tiếng Pháp (St. Barthélemy)',
        'fr-CA' => 'Tiếng Pháp (Canada)',
        'fr-CD' => 'Tiếng Pháp (Congo - Kinshasa)',
        'fr-CF' => 'Tiếng Pháp (Cộng hòa Trung Phi)',
        'fr-CG' => 'Tiếng Pháp (Congo - Brazzaville)',
        'fr-CH' => 'Tiếng Pháp (Thụy Sĩ)',
        'fr-CI' => 'Tiếng Pháp (Bờ Biển Ngà)',
        'fr-CM' => 'Tiếng Pháp (Cameroon)',
        'fr-DJ' => 'Tiếng Pháp (Djibouti)',
        'fr-DZ' => 'Tiếng Pháp (Algeria)',
        'fr-FR' => 'Tiếng Pháp (Pháp)',
        'fr-GA' => 'Tiếng Pháp (Gabon)',
        'fr-GF' => 'Tiếng Pháp (Guiana thuộc Pháp)',
        'fr-GN' => 'Tiếng Pháp (Guinea)',
        'fr-GP' => 'Tiếng Pháp (Guadeloupe)',
        'fr-GQ' => 'Tiếng Pháp (Guinea Xích Đạo)',
        'fr-HT' => 'Tiếng Pháp (Haiti)',
        'fr-KM' => 'Tiếng Pháp (Comoros)',
        'fr-LU' => 'Tiếng Pháp (Luxembourg)',
        'fr-MA' => 'Tiếng Pháp (Ma-rốc)',
        'fr-MC' => 'Tiếng Pháp (Monaco)',
        'fr-MF' => 'Tiếng Pháp (St. Martin)',
        'fr-MG' => 'Tiếng Pháp (Madagascar)',
        'fr-ML' => 'Tiếng Pháp (Mali)',
        'fr-MQ' => 'Tiếng Pháp (Martinique)',
        'fr-MR' => 'Tiếng Pháp (Mauritania)',
        'fr-MU' => 'Tiếng Pháp (Mauritius)',
        'fr-NC' => 'Tiếng Pháp (New Caledonia)',
        'fr-NE' => 'Tiếng Pháp (Niger)',
        'fr-PF' => 'Tiếng Pháp (Polynesia thuộc Pháp)',
        'fr-PM' => 'Tiếng Pháp (Saint Pierre và Miquelon)',
        'fr-RE' => 'Tiếng Pháp (Réunion)',
        'fr-RW' => 'Tiếng Pháp (Rwanda)',
        'fr-SC' => 'Tiếng Pháp (Seychelles)',
        'fr-SN' => 'Tiếng Pháp (Senegal)',
        'fr-SY' => 'Tiếng Pháp (Syria)',
        'fr-TD' => 'Tiếng Pháp (Chad)',
        'fr-TG' => 'Tiếng Pháp (Togo)',
        'fr-TN' => 'Tiếng Pháp (Tunisia)',
        'fr-VU' => 'Tiếng Pháp (Vanuatu)',
        'fr-WF' => 'Tiếng Pháp (Wallis và Futuna)',
        'fr-YT' => 'Tiếng Pháp (Mayotte)',
        'fur' => 'Tiếng Friulian',
        'fur-IT' => 'Tiếng Friulian (Ý)',
        'fy' => 'Tiếng Frisia',
        'fy-NL' => 'Tiếng Frisia (Hà Lan)',
        'ga' => 'Tiếng Ai-len',
        'ga-IE' => 'Tiếng Ai-len (Ai-len)',
        'gd' => 'Tiếng Xentơ (Xcốt len)',
        'gd-GB' => 'Tiếng Xentơ (Xcốt len) (Vương quốc Anh)',
        'gl' => 'Tiếng Galician',
        'gl-ES' => 'Tiếng Galician (Tây Ban Nha)',
        'gsw' => 'Tiếng Đức (Thụy Sĩ)',
        'gsw-CH' => 'Tiếng Đức (Thụy Sĩ) (Thụy Sĩ)',
        'gsw-FR' => 'Tiếng Đức (Thụy Sĩ) (Pháp)',
        'gsw-LI' => 'Tiếng Đức (Thụy Sĩ) (Liechtenstein)',
        'gu' => 'Tiếng Gujarati',
        'gu-IN' => 'Tiếng Gujarati (Ấn Độ)',
        'guz' => 'Tiếng Gusii',
        'guz-KE' => 'Tiếng Gusii (Kenya)',
        'gv' => 'Tiếng Manx',
        'gv-IM' => 'Tiếng Manx (Đảo Man)',
        'ha' => 'Tiếng Hausa',
        'ha-GH' => 'Tiếng Hausa (Ghana)',
        'ha-NE' => 'Tiếng Hausa (Niger)',
        'ha-NG' => 'Tiếng Hausa (Nigeria)',
        'haw' => 'Tiếng Hawaii',
        'haw-US' => 'Tiếng Hawaii (Hoa Kỳ)',
        'he' => 'Tiếng Do Thái',
        'he-IL' => 'Tiếng Do Thái (Israel)',
        'hi' => 'Tiếng Hindi',
        'hi-IN' => 'Tiếng Hindi (Ấn Độ)',
        'hr' => 'Tiếng Croatia',
        'hr-BA' => 'Tiếng Croatia (Bosnia và Herzegovina)',
        'hr-HR' => 'Tiếng Croatia (Croatia)',
        'hsb' => 'Tiếng Thượng Sorbia',
        'hsb-DE' => 'Tiếng Thượng Sorbia (Đức)',
        'hu' => 'Tiếng Hungary',
        'hu-HU' => 'Tiếng Hungary (Hungari)',
        'hy' => 'Tiếng Armenia',
        'hy-AM' => 'Tiếng Armenia (Armenia)',
        'id' => 'Tiếng Indonesia',
        'id-ID' => 'Tiếng Indonesia (Indonesia)',
        'ig' => 'Tiếng Igbo',
        'ig-NG' => 'Tiếng Igbo (Nigeria)',
        'ii' => 'Tiếng Di Tứ Xuyên',
        'ii-CN' => 'Tiếng Di Tứ Xuyên (Trung Quốc)',
        'is' => 'Tiếng Iceland',
        'is-IS' => 'Tiếng Iceland (Iceland)',
        'it' => 'Tiếng Ý',
        'it-CH' => 'Tiếng Ý (Thụy Sĩ)',
        'it-IT' => 'Tiếng Ý (Ý)',
        'it-SM' => 'Tiếng Ý (San Marino)',
        'ja' => 'Tiếng Nhật',
        'ja-JP' => 'Tiếng Nhật (Nhật Bản)',
        'jgo' => 'Tiếng Ngomba',
        'jgo-CM' => 'Tiếng Ngomba (Cameroon)',
        'jmc' => 'Tiếng Machame',
        'jmc-TZ' => 'Tiếng Machame (Tanzania)',
        'ka' => 'Tiếng Gruzia',
        'ka-GE' => 'Tiếng Gruzia (Georgia)',
        'kab' => 'Tiếng Kabyle',
        'kab-DZ' => 'Tiếng Kabyle (Algeria)',
        'kam' => 'Tiếng Kamba',
        'kam-KE' => 'Tiếng Kamba (Kenya)',
        'kde' => 'Tiếng Makonde',
        'kde-TZ' => 'Tiếng Makonde (Tanzania)',
        'kea' => 'Tiếng Kabuverdianu',
        'kea-CV' => 'Tiếng Kabuverdianu (Cape Verde)',
        'khq' => 'Tiếng Koyra Chiini',
        'khq-ML' => 'Tiếng Koyra Chiini (Mali)',
        'ki' => 'Tiếng Kikuyu',
        'ki-KE' => 'Tiếng Kikuyu (Kenya)',
        'kk' => 'Tiếng Kazakh',
        'kk-KZ' => 'Tiếng Kazakh (Kazakhstan)',
        'kkj' => 'Tiếng Kako',
        'kkj-CM' => 'Tiếng Kako (Cameroon)',
        'kl' => 'Tiếng Kalaallisut',
        'kl-GL' => 'Tiếng Kalaallisut (Greenland)',
        'kln' => 'Tiếng Kalenjin',
        'kln-KE' => 'Tiếng Kalenjin (Kenya)',
        'km' => 'Tiếng Khơ-me',
        'km-KH' => 'Tiếng Khơ-me (Campuchia)',
        'kn' => 'Tiếng Kannada',
        'kn-IN' => 'Tiếng Kannada (Ấn Độ)',
        'ko' => 'Tiếng Hàn',
        'ko-KP' => 'Tiếng Hàn (Triều Tiên)',
        'ko-KR' => 'Tiếng Hàn (Hàn Quốc)',
        'kok' => 'Tiếng Konkani',
        'kok-IN' => 'Tiếng Konkani (Ấn Độ)',
        'ks' => 'Tiếng Kashmiri',
        'ks-IN' => 'Tiếng Kashmiri (Ấn Độ)',
        'ksb' => 'Tiếng Shambala',
        'ksb-TZ' => 'Tiếng Shambala (Tanzania)',
        'ksf' => 'Tiếng Bafia',
        'ksf-CM' => 'Tiếng Bafia (Cameroon)',
        'ksh' => 'Tiếng Cologne',
        'ksh-DE' => 'Tiếng Cologne (Đức)',
        'kw' => 'Tiếng Cornwall',
        'kw-GB' => 'Tiếng Cornwall (Vương quốc Anh)',
        'ky' => 'Tiếng Kyrgyz',
        'ky-KG' => 'Tiếng Kyrgyz (Kyrgyzstan)',
        'lag' => 'Tiếng Langi',
        'lag-TZ' => 'Tiếng Langi (Tanzania)',
        'lb' => 'Tiếng Luxembourg',
        'lb-LU' => 'Tiếng Luxembourg (Luxembourg)',
        'lg' => 'Tiếng Ganda',
        'lg-UG' => 'Tiếng Ganda (Uganda)',
        'lkt' => 'Tiếng Lakota',
        'lkt-US' => 'Tiếng Lakota (Hoa Kỳ)',
        'ln' => 'Tiếng Lingala',
        'ln-AO' => 'Tiếng Lingala (Angola)',
        'ln-CD' => 'Tiếng Lingala (Congo - Kinshasa)',
        'ln-CF' => 'Tiếng Lingala (Cộng hòa Trung Phi)',
        'ln-CG' => 'Tiếng Lingala (Congo - Brazzaville)',
        'lo' => 'Tiếng Lào',
        'lo-LA' => 'Tiếng Lào (Lào)',
        'lrc' => 'Tiếng Bắc Luri',
        'lrc-IQ' => 'Tiếng Bắc Luri (I-rắc)',
        'lrc-IR' => 'Tiếng Bắc Luri (Iran)',
        'lt' => 'Tiếng Lít-va',
        'lt-LT' => 'Tiếng Lít-va (Lít-va)',
        'lu' => 'Tiếng Luba-Katanga',
        'lu-CD' => 'Tiếng Luba-Katanga (Congo - Kinshasa)',
        'luo' => 'Tiếng Luo',
        'luo-KE' => 'Tiếng Luo (Kenya)',
        'luy' => 'Tiếng Luyia',
        'luy-KE' => 'Tiếng Luyia (Kenya)',
        'lv' => 'Tiếng Latvia',
        'lv-LV' => 'Tiếng Latvia (Latvia)',
        'mas' => 'Tiếng Masai',
        'mas-KE' => 'Tiếng Masai (Kenya)',
        'mas-TZ' => 'Tiếng Masai (Tanzania)',
        'mer' => 'Tiếng Meru',
        'mer-KE' => 'Tiếng Meru (Kenya)',
        'mfe' => 'Tiếng Morisyen',
        'mfe-MU' => 'Tiếng Morisyen (Mauritius)',
        'mg' => 'Tiếng Malagasy',
        'mg-MG' => 'Tiếng Malagasy (Madagascar)',
        'mgh' => 'Tiếng Makhuwa-Meetto',
        'mgh-MZ' => 'Tiếng Makhuwa-Meetto (Mozambique)',
        'mgo' => 'Tiếng Meta’',
        'mgo-CM' => 'Tiếng Meta’ (Cameroon)',
        'mk' => 'Tiếng Macedonia',
        'mk-MK' => 'Tiếng Macedonia (Macedonia)',
        'ml' => 'Tiếng Malayalam',
        'ml-IN' => 'Tiếng Malayalam (Ấn Độ)',
        'mn' => 'Tiếng Mông Cổ',
        'mn-MN' => 'Tiếng Mông Cổ (Mông Cổ)',
        'mr' => 'Tiếng Marathi',
        'mr-IN' => 'Tiếng Marathi (Ấn Độ)',
        'ms' => 'Tiếng Malaysia',
        'ms-BN' => 'Tiếng Malaysia (Brunei)',
        'ms-MY' => 'Tiếng Malaysia (Malaysia)',
        'ms-SG' => 'Tiếng Malaysia (Singapore)',
        'mt' => 'Tiếng Malt',
        'mt-MT' => 'Tiếng Malt (Malta)',
        'mua' => 'Tiếng Mundang',
        'mua-CM' => 'Tiếng Mundang (Cameroon)',
        'my' => 'Tiếng Miến Điện',
        'my-MM' => 'Tiếng Miến Điện (Myanmar [Miến Điện])',
        'mzn' => 'Tiếng Mazanderani',
        'mzn-IR' => 'Tiếng Mazanderani (Iran)',
        'naq' => 'Tiếng Nama',
        'naq-NA' => 'Tiếng Nama (Namibia)',
        'nb' => 'Tiếng Na Uy (Bokmål)',
        'nb-NO' => 'Tiếng Na Uy (Bokmål) (Na Uy)',
        'nb-SJ' => 'Tiếng Na Uy (Bokmål) (Svalbard và Jan Mayen)',
        'nd' => 'Tiếng Ndebele Miền Bắc',
        'nd-ZW' => 'Tiếng Ndebele Miền Bắc (Zimbabwe)',
        'ne' => 'Tiếng Nepal',
        'ne-IN' => 'Tiếng Nepal (Ấn Độ)',
        'ne-NP' => 'Tiếng Nepal (Nepal)',
        'nl' => 'Tiếng Hà Lan',
        'nl-AW' => 'Tiếng Hà Lan (Aruba)',
        'nl-BE' => 'Tiếng Hà Lan (Bỉ)',
        'nl-BQ' => 'Tiếng Hà Lan (Ca-ri-bê Hà Lan)',
        'nl-CW' => 'Tiếng Hà Lan (Curaçao)',
        'nl-NL' => 'Tiếng Hà Lan (Hà Lan)',
        'nl-SR' => 'Tiếng Hà Lan (Suriname)',
        'nl-SX' => 'Tiếng Hà Lan (Sint Maarten)',
        'nmg' => 'Tiếng Kwasio',
        'nmg-CM' => 'Tiếng Kwasio (Cameroon)',
        'nn' => 'Tiếng Na Uy (Nynorsk)',
        'nn-NO' => 'Tiếng Na Uy (Nynorsk) (Na Uy)',
        'nnh' => 'Tiếng Ngiemboon',
        'nnh-CM' => 'Tiếng Ngiemboon (Cameroon)',
        'nus' => 'Tiếng Nuer',
        'nus-SS' => 'Tiếng Nuer (Nam Sudan)',
        'nyn' => 'Tiếng Nyankole',
        'nyn-UG' => 'Tiếng Nyankole (Uganda)',
        'om' => 'Tiếng Oromo',
        'om-ET' => 'Tiếng Oromo (Ethiopia)',
        'om-KE' => 'Tiếng Oromo (Kenya)',
        'or' => 'Tiếng Oriya',
        'or-IN' => 'Tiếng Oriya (Ấn Độ)',
        'os' => 'Tiếng Ossetic',
        'os-GE' => 'Tiếng Ossetic (Georgia)',
        'os-RU' => 'Tiếng Ossetic (Nga)',
        'pa' => 'Tiếng Punjab',
        'pa-Arab' => 'Tiếng Punjab (Chữ Ả Rập)',
        'pa-Arab-PK' => 'Tiếng Punjab (Chữ Ả Rập, Pakistan)',
        'pa-Guru' => 'Tiếng Punjab (Chữ Gurmukhi)',
        'pa-Guru-IN' => 'Tiếng Punjab (Chữ Gurmukhi, Ấn Độ)',
        'pl' => 'Tiếng Ba Lan',
        'pl-PL' => 'Tiếng Ba Lan (Ba Lan)',
        'ps' => 'Tiếng Pashto',
        'ps-AF' => 'Tiếng Pashto (Afghanistan)',
        'pt' => 'Tiếng Bồ Đào Nha',
        'pt-AO' => 'Tiếng Bồ Đào Nha (Angola)',
        'pt-BR' => 'Tiếng Bồ Đào Nha (Brazil)',
        'pt-CV' => 'Tiếng Bồ Đào Nha (Cape Verde)',
        'pt-GW' => 'Tiếng Bồ Đào Nha (Guinea-Bissau)',
        'pt-MO' => 'Tiếng Bồ Đào Nha (Macao, Trung Quốc)',
        'pt-MZ' => 'Tiếng Bồ Đào Nha (Mozambique)',
        'pt-PT' => 'Tiếng Bồ Đào Nha (Bồ Đào Nha)',
        'pt-ST' => 'Tiếng Bồ Đào Nha (São Tomé và Príncipe)',
        'pt-TL' => 'Tiếng Bồ Đào Nha (Đông Timor)',
        'qu' => 'Tiếng Quechua',
        'qu-BO' => 'Tiếng Quechua (Bolivia)',
        'qu-EC' => 'Tiếng Quechua (Ecuador)',
        'qu-PE' => 'Tiếng Quechua (Peru)',
        'rm' => 'Tiếng Romansh',
        'rm-CH' => 'Tiếng Romansh (Thụy Sĩ)',
        'rn' => 'Tiếng Rundi',
        'rn-BI' => 'Tiếng Rundi (Burundi)',
        'ro' => 'Tiếng Rumani',
        'ro-MD' => 'Tiếng Rumani (Moldova)',
        'ro-RO' => 'Tiếng Rumani (Romania)',
        'rof' => 'Tiếng Rombo',
        'rof-TZ' => 'Tiếng Rombo (Tanzania)',
        'ru' => 'Tiếng Nga',
        'ru-BY' => 'Tiếng Nga (Belarus)',
        'ru-KG' => 'Tiếng Nga (Kyrgyzstan)',
        'ru-KZ' => 'Tiếng Nga (Kazakhstan)',
        'ru-MD' => 'Tiếng Nga (Moldova)',
        'ru-RU' => 'Tiếng Nga (Nga)',
        'ru-UA' => 'Tiếng Nga (Ukraina)',
        'rw' => 'Tiếng Kinyarwanda',
        'rw-RW' => 'Tiếng Kinyarwanda (Rwanda)',
        'rwk' => 'Tiếng Rwa',
        'rwk-TZ' => 'Tiếng Rwa (Tanzania)',
        'sah' => 'Tiếng Sakha',
        'sah-RU' => 'Tiếng Sakha (Nga)',
        'saq' => 'Tiếng Samburu',
        'saq-KE' => 'Tiếng Samburu (Kenya)',
        'sbp' => 'Tiếng Sangu',
        'sbp-TZ' => 'Tiếng Sangu (Tanzania)',
        'se' => 'Tiếng Sami Miền Bắc',
        'se-FI' => 'Tiếng Sami Miền Bắc (Phần Lan)',
        'se-NO' => 'Tiếng Sami Miền Bắc (Na Uy)',
        'se-SE' => 'Tiếng Sami Miền Bắc (Thụy Điển)',
        'seh' => 'Tiếng Sena',
        'seh-MZ' => 'Tiếng Sena (Mozambique)',
        'ses' => 'Tiếng Koyraboro Senni',
        'ses-ML' => 'Tiếng Koyraboro Senni (Mali)',
        'sg' => 'Tiếng Sango',
        'sg-CF' => 'Tiếng Sango (Cộng hòa Trung Phi)',
        'shi' => 'Tiếng Tachelhit',
        'shi-Latn' => 'Tiếng Tachelhit (Chữ La tinh)',
        'shi-Latn-MA' => 'Tiếng Tachelhit (Chữ La tinh, Ma-rốc)',
        'shi-Tfng' => 'Tiếng Tachelhit (Chữ Tifinagh)',
        'shi-Tfng-MA' => 'Tiếng Tachelhit (Chữ Tifinagh, Ma-rốc)',
        'si' => 'Tiếng Sinhala',
        'si-LK' => 'Tiếng Sinhala (Sri Lanka)',
        'sk' => 'Tiếng Slovak',
        'sk-SK' => 'Tiếng Slovak (Slovakia)',
        'sl' => 'Tiếng Slovenia',
        'sl-SI' => 'Tiếng Slovenia (Slovenia)',
        'smn' => 'Tiếng Inari Sami',
        'smn-FI' => 'Tiếng Inari Sami (Phần Lan)',
        'sn' => 'Tiếng Shona',
        'sn-ZW' => 'Tiếng Shona (Zimbabwe)',
        'so' => 'Tiếng Somali',
        'so-DJ' => 'Tiếng Somali (Djibouti)',
        'so-ET' => 'Tiếng Somali (Ethiopia)',
        'so-KE' => 'Tiếng Somali (Kenya)',
        'so-SO' => 'Tiếng Somali (Somali)',
        'sq' => 'Tiếng An-ba-ni',
        'sq-AL' => 'Tiếng An-ba-ni (Albani)',
        'sq-MK' => 'Tiếng An-ba-ni (Macedonia)',
        'sq-XK' => 'Tiếng An-ba-ni (Kosovo)',
        'sr' => 'Tiếng Serbia',
        'sr-Cyrl' => 'Tiếng Serbia (Chữ Kirin)',
        'sr-Cyrl-BA' => 'Tiếng Serbia (Chữ Kirin, Bosnia và Herzegovina)',
        'sr-Cyrl-ME' => 'Tiếng Serbia (Chữ Kirin, Montenegro)',
        'sr-Cyrl-RS' => 'Tiếng Serbia (Chữ Kirin, Serbia)',
        'sr-Cyrl-XK' => 'Tiếng Serbia (Chữ Kirin, Kosovo)',
        'sr-Latn' => 'Tiếng Serbia (Chữ La tinh)',
        'sr-Latn-BA' => 'Tiếng Serbia (Chữ La tinh, Bosnia và Herzegovina)',
        'sr-Latn-ME' => 'Tiếng Serbia (Chữ La tinh, Montenegro)',
        'sr-Latn-RS' => 'Tiếng Serbia (Chữ La tinh, Serbia)',
        'sr-Latn-XK' => 'Tiếng Serbia (Chữ La tinh, Kosovo)',
        'sv' => 'Tiếng Thụy Điển',
        'sv-AX' => 'Tiếng Thụy Điển (Quần đảo Åland)',
        'sv-FI' => 'Tiếng Thụy Điển (Phần Lan)',
        'sv-SE' => 'Tiếng Thụy Điển (Thụy Điển)',
        'sw' => 'Tiếng Swahili',
        'sw-CD' => 'Tiếng Swahili (Congo - Kinshasa)',
        'sw-KE' => 'Tiếng Swahili (Kenya)',
        'sw-TZ' => 'Tiếng Swahili (Tanzania)',
        'sw-UG' => 'Tiếng Swahili (Uganda)',
        'ta' => 'Tiếng Tamil',
        'ta-IN' => 'Tiếng Tamil (Ấn Độ)',
        'ta-LK' => 'Tiếng Tamil (Sri Lanka)',
        'ta-MY' => 'Tiếng Tamil (Malaysia)',
        'ta-SG' => 'Tiếng Tamil (Singapore)',
        'te' => 'Tiếng Telugu',
        'te-IN' => 'Tiếng Telugu (Ấn Độ)',
        'teo' => 'Tiếng Teso',
        'teo-KE' => 'Tiếng Teso (Kenya)',
        'teo-UG' => 'Tiếng Teso (Uganda)',
        'th' => 'Tiếng Thái',
        'th-TH' => 'Tiếng Thái (Thái Lan)',
        'ti' => 'Tiếng Tigrigya',
        'ti-ER' => 'Tiếng Tigrigya (Eritrea)',
        'ti-ET' => 'Tiếng Tigrigya (Ethiopia)',
        'to' => 'Tiếng Tonga',
        'to-TO' => 'Tiếng Tonga (Tonga)',
        'tr' => 'Tiếng Thổ Nhĩ Kỳ',
        'tr-CY' => 'Tiếng Thổ Nhĩ Kỳ (Síp)',
        'tr-TR' => 'Tiếng Thổ Nhĩ Kỳ (Thổ Nhĩ Kỳ)',
        'twq' => 'Tiếng Tasawaq',
        'twq-NE' => 'Tiếng Tasawaq (Niger)',
        'tzm' => 'Tiếng Tamazight Miền Trung Ma-rốc',
        'tzm-MA' => 'Tiếng Tamazight Miền Trung Ma-rốc (Ma-rốc)',
        'ug' => 'Tiếng Uyghur',
        'ug-CN' => 'Tiếng Uyghur (Trung Quốc)',
        'uk' => 'Tiếng Ucraina',
        'uk-UA' => 'Tiếng Ucraina (Ukraina)',
        'ur' => 'Tiếng Uđu',
        'ur-IN' => 'Tiếng Uđu (Ấn Độ)',
        'ur-PK' => 'Tiếng Uđu (Pakistan)',
        'uz' => 'Tiếng Uzbek',
        'uz-Arab' => 'Tiếng Uzbek (Chữ Ả Rập)',
        'uz-Arab-AF' => 'Tiếng Uzbek (Chữ Ả Rập, Afghanistan)',
        'uz-Cyrl' => 'Tiếng Uzbek (Chữ Kirin)',
        'uz-Cyrl-UZ' => 'Tiếng Uzbek (Chữ Kirin, Uzbekistan)',
        'uz-Latn' => 'Tiếng Uzbek (Chữ La tinh)',
        'uz-Latn-UZ' => 'Tiếng Uzbek (Chữ La tinh, Uzbekistan)',
        'vai' => 'Tiếng Vai',
        'vai-Latn' => 'Tiếng Vai (Chữ La tinh)',
        'vai-Latn-LR' => 'Tiếng Vai (Chữ La tinh, Liberia)',
        'vai-Vaii' => 'Tiếng Vai (Chữ Vai)',
        'vai-Vaii-LR' => 'Tiếng Vai (Chữ Vai, Liberia)',
        'vi' => 'Tiếng Việt',
        'vi-VN' => 'Tiếng Việt (Việt Nam)',
        'vun' => 'Tiếng Vunjo',
        'vun-TZ' => 'Tiếng Vunjo (Tanzania)',
        'wae' => 'Tiếng Walser',
        'wae-CH' => 'Tiếng Walser (Thụy Sĩ)',
        'xog' => 'Tiếng Soga',
        'xog-UG' => 'Tiếng Soga (Uganda)',
        'yav' => 'Tiếng Yangben',
        'yav-CM' => 'Tiếng Yangben (Cameroon)',
        'yi' => 'Tiếng Y-đit',
        'yi-001' => 'Tiếng Y-đit (Thế giới)',
        'yo' => 'Tiếng Yoruba',
        'yo-BJ' => 'Tiếng Yoruba (Benin)',
        'yo-NG' => 'Tiếng Yoruba (Nigeria)',
        'zgh' => 'Tiếng Tamazight Chuẩn của Ma-rốc',
        'zgh-MA' => 'Tiếng Tamazight Chuẩn của Ma-rốc (Ma-rốc)',
        'zh' => 'Tiếng Trung',
        'zh-Hans' => 'Tiếng Trung (Giản thể)',
        'zh-Hans-CN' => 'Tiếng Trung (Giản thể, Trung Quốc)',
        'zh-Hans-HK' => 'Tiếng Trung (Giản thể, Hồng Kông, Trung Quốc)',
        'zh-Hans-MO' => 'Tiếng Trung (Giản thể, Macao, Trung Quốc)',
        'zh-Hans-SG' => 'Tiếng Trung (Giản thể, Singapore)',
        'zh-Hant' => 'Tiếng Trung (Phồn thể)',
        'zh-Hant-HK' => 'Tiếng Trung (Phồn thể, Hồng Kông, Trung Quốc)',
        'zh-Hant-MO' => 'Tiếng Trung (Phồn thể, Macao, Trung Quốc)',
        'zh-Hant-TW' => 'Tiếng Trung (Phồn thể, Đài Loan)',
        'zu' => 'Tiếng Zulu',
        'zu-ZA' => 'Tiếng Zulu (Nam Phi)',
    ],
];
