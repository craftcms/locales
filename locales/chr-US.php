<?php

return [
    'dateTimeFormats' => [
        'short' => [
            'date' => 'M/d/yyyy',
            'time' => 'h:mm a',
            'datetime' => 'M/d/yyyy, h:mm a',
        ],
        'medium' => [
            'date' => 'MMM d, y',
            'time' => 'h:mm:ss a',
            'datetime' => 'MMM d, y, h:mm:ss a',
        ],
        'long' => [
            'date' => 'MMMM d, y',
            'time' => 'h:mm:ss a z',
            'datetime' => 'MMMM d, y ᎤᎾᎢ h:mm:ss a z',
        ],
        'full' => [
            'date' => 'EEEE, MMMM d, y',
            'time' => 'h:mm:ss a zzzz',
            'datetime' => 'EEEE, MMMM d, y ᎤᎾᎢ h:mm:ss a zzzz',
        ],
    ],
    'numberPatterns' => [
        'decimal' => '#,##0.###',
        'currency' => '¤#,##0.00',
        'percent' => '#,##0%',
        'scientific' => '#E0',
    ],
    'amName' => 'ᏌᎾᎴ',
    'pmName' => 'ᏒᎯᏱᎢᏗᏢ',
    'textAttributes' => [
        'positivePrefix' => '',
        'positiveSuffix' => '',
        'negativePrefix' => '-',
        'negativeSuffix' => '',
        'paddingCharacter' => ' ',
        'currencyCode' => 'USD',
        'defaultRuleset' => '',
        'publicRulesets' => '',
    ],
    'numberSymbols' => [
        'decimalSeparator' => '.',
        'groupingSeparator' => ',',
        'patternSeparator' => ';',
        'percent' => '%',
        'zeroDigit' => '0',
        'digit' => '#',
        'minusSign' => '-',
        'plusSign' => '+',
        'currency' => '$',
        'intlCurrency' => 'USD',
        'monetarySeparator' => '.',
        'exponential' => 'E',
        'permill' => '‰',
        'padEscape' => '*',
        'infinity' => '∞',
        'nan' => 'NaN',
        'significantDigit' => '@',
        'monetaryGroupingSeparator' => ',',
    ],
    'currencySymbols' => [
        'AUD' => 'A$',
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
        'THB' => 'THB ',
        'TWD' => 'NT$',
        'USD' => '$',
        'VND' => '₫',
        'XAF' => 'FCFA ',
        'XCD' => 'EC$',
        'XOF' => 'CFA ',
        'XPF' => 'CFPF ',
    ],
    'standAloneMonthNames' => [
        'abbreviated' => [
            'Ꭴ',
            'Ꭷ',
            'Ꭰ',
            'Ꭷ',
            'Ꭰ',
            'Ꮥ',
            'Ꭻ',
            'Ꭶ',
            'Ꮪ',
            'Ꮪ',
            'Ꮕ',
            'Ꭵ',
        ],
        'medium' => [
            'ᎤᏃ',
            'ᎧᎦ',
            'ᎠᏅ',
            'ᎧᏬ',
            'ᎠᏂ',
            'ᏕᎭ',
            'ᎫᏰ',
            'ᎦᎶ',
            'ᏚᎵ',
            'ᏚᏂ',
            'ᏅᏓ',
            'ᎥᏍ',
        ],
        'full' => [
            'ᎤᏃᎸᏔᏅ',
            'ᎧᎦᎵ',
            'ᎠᏅᏱ',
            'ᎧᏬᏂ',
            'ᎠᏂᏍᎬᏘ',
            'ᏕᎭᎷᏱ',
            'ᎫᏰᏉᏂ',
            'ᎦᎶᏂ',
            'ᏚᎵᏍᏗ',
            'ᏚᏂᏅᏗ',
            'ᏅᏓᏕᏆ',
            'ᎥᏍᎩᏱ',
        ],
    ],
    'monthNames' => [
        'abbreviated' => [
            'Ꭴ',
            'Ꭷ',
            'Ꭰ',
            'Ꭷ',
            'Ꭰ',
            'Ꮥ',
            'Ꭻ',
            'Ꭶ',
            'Ꮪ',
            'Ꮪ',
            'Ꮕ',
            'Ꭵ',
        ],
        'medium' => [
            'ᎤᏃ',
            'ᎧᎦ',
            'ᎠᏅ',
            'ᎧᏬ',
            'ᎠᏂ',
            'ᏕᎭ',
            'ᎫᏰ',
            'ᎦᎶ',
            'ᏚᎵ',
            'ᏚᏂ',
            'ᏅᏓ',
            'ᎥᏍ',
        ],
        'full' => [
            'ᎤᏃᎸᏔᏅ',
            'ᎧᎦᎵ',
            'ᎠᏅᏱ',
            'ᎧᏬᏂ',
            'ᎠᏂᏍᎬᏘ',
            'ᏕᎭᎷᏱ',
            'ᎫᏰᏉᏂ',
            'ᎦᎶᏂ',
            'ᏚᎵᏍᏗ',
            'ᏚᏂᏅᏗ',
            'ᏅᏓᏕᏆ',
            'ᎥᏍᎩᏱ',
        ],
    ],
    'standAloneWeekDayNames' => [
        'abbreviated' => [
            'Ꮖ',
            'Ꮙ',
            'Ꮤ',
            'Ꮶ',
            'Ꮕ',
            'Ꮷ',
            'Ꭴ',
        ],
        'short' => [
            'ᏍᎬ',
            'ᏅᎯ',
            'ᏔᎵ',
            'ᏦᎢ',
            'ᏅᎩ',
            'ᏧᎾ',
            'ᏕᎾ',
        ],
        'medium' => [
            'ᏆᏍᎬ',
            'ᏉᏅᎯ',
            'ᏔᎵᏁ',
            'ᏦᎢᏁ',
            'ᏅᎩᏁ',
            'ᏧᎾᎩ',
            'ᏈᏕᎾ',
        ],
        'full' => [
            'ᎤᎾᏙᏓᏆᏍᎬ',
            'ᎤᎾᏙᏓᏉᏅᎯ',
            'ᏔᎵᏁᎢᎦ',
            'ᏦᎢᏁᎢᎦ',
            'ᏅᎩᏁᎢᎦ',
            'ᏧᎾᎩᎶᏍᏗ',
            'ᎤᎾᏙᏓᏈᏕᎾ',
        ],
    ],
    'weekDayNames' => [
        'abbreviated' => [
            'Ꮖ',
            'Ꮙ',
            'Ꮤ',
            'Ꮶ',
            'Ꮕ',
            'Ꮷ',
            'Ꭴ',
        ],
        'short' => [
            'ᏍᎬ',
            'ᏅᎯ',
            'ᏔᎵ',
            'ᏦᎢ',
            'ᏅᎩ',
            'ᏧᎾ',
            'ᏕᎾ',
        ],
        'medium' => [
            'ᏆᏍᎬ',
            'ᏉᏅᎯ',
            'ᏔᎵᏁ',
            'ᏦᎢᏁ',
            'ᏅᎩᏁ',
            'ᏧᎾᎩ',
            'ᏈᏕᎾ',
        ],
        'full' => [
            'ᎤᎾᏙᏓᏆᏍᎬ',
            'ᎤᎾᏙᏓᏉᏅᎯ',
            'ᏔᎵᏁᎢᎦ',
            'ᏦᎢᏁᎢᎦ',
            'ᏅᎩᏁᎢᎦ',
            'ᏧᎾᎩᎶᏍᏗ',
            'ᎤᎾᏙᏓᏈᏕᎾ',
        ],
    ],
    'localeDisplayNames' => [
        'af' => 'ᎠᎬᎿᎨᏍᏛ',
        'af-NA' => 'ᎠᎬᎿᎨᏍᏛ (ᎾᎻᏈᎢᏯ)',
        'af-ZA' => 'ᎠᎬᎿᎨᏍᏛ (ᏧᎦᎾᏮ ᎬᎿᎨᏍᏛ)',
        'agq' => 'ᎠᎨᎹ',
        'agq-CM' => 'ᎠᎨᎹ (ᎧᎹᎷᏂ)',
        'ak' => 'ᎠᎧᎾ',
        'ak-GH' => 'ᎠᎧᎾ (ᎦᎠᎾ)',
        'am' => 'ᎠᎹᎭᎵᎩ',
        'am-ET' => 'ᎠᎹᎭᎵᎩ (ᎢᏗᎣᏈᎠ)',
        'ar' => 'ᎡᎳᏈ',
        'ar-001' => 'ᎡᎳᏈ (ᎡᎶᎯ)',
        'ar-AE' => 'ᎡᎳᏈ (ᏌᏊ ᎢᏳᎾᎵᏍᏔᏅ ᎡᎳᏈ ᎢᎹᎵᏘᏏ)',
        'ar-BH' => 'ᎡᎳᏈ (ᏆᎭᎴᎢᏂ)',
        'ar-DJ' => 'ᎡᎳᏈ (ᏥᏊᏗ)',
        'ar-DZ' => 'ᎡᎳᏈ (ᎠᎵᏥᎵᏯ)',
        'ar-EG' => 'ᎡᎳᏈ (ᎢᏥᏈᎢ)',
        'ar-EH' => 'ᎡᎳᏈ (ᏭᏕᎵᎬ ᏗᏜ ᏌᎮᎳ)',
        'ar-ER' => 'ᎡᎳᏈ (ᎡᎵᏟᏯ)',
        'ar-IL' => 'ᎡᎳᏈ (ᎢᏏᎵᏱ)',
        'ar-IQ' => 'ᎡᎳᏈ (ᎢᎳᎩ)',
        'ar-JO' => 'ᎡᎳᏈ (ᏦᏓᏂ)',
        'ar-KM' => 'ᎡᎳᏈ (ᎪᎼᎳᏍ)',
        'ar-KW' => 'ᎡᎳᏈ (ᎫᏪᎢᏘ)',
        'ar-LB' => 'ᎡᎳᏈ (ᎴᏆᎾᏂ)',
        'ar-LY' => 'ᎡᎳᏈ (ᎵᏈᏯ)',
        'ar-MA' => 'ᎡᎳᏈ (ᎼᎶᎪ)',
        'ar-MR' => 'ᎡᎳᏈ (ᎹᏘᎢᏯ)',
        'ar-OM' => 'ᎡᎳᏈ (ᎣᎺᏂ)',
        'ar-PS' => 'ᎡᎳᏈ (ᏆᎴᏍᏗᏂᎠᏂ ᏄᎬᏫᏳᏌᏕᎩ)',
        'ar-QA' => 'ᎡᎳᏈ (ᎧᏔᎵ)',
        'ar-SA' => 'ᎡᎳᏈ (ᏌᎤᏗ ᎡᎴᏈᎠ)',
        'ar-SD' => 'ᎡᎳᏈ (ᏑᏕᏂ)',
        'ar-SO' => 'ᎡᎳᏈ (ᏐᎹᎵ)',
        'ar-SS' => 'ᎡᎳᏈ (ᏧᎦᎾᏮ ᏑᏕᏂ)',
        'ar-SY' => 'ᎡᎳᏈ (ᏏᎵᎠ)',
        'ar-TD' => 'ᎡᎳᏈ (ᏣᏗ)',
        'ar-TN' => 'ᎡᎳᏈ (ᏚᏂᏏᏍᎠ)',
        'ar-YE' => 'ᎡᎳᏈ (ᏰᎺᏂ)',
        'as' => 'ᎠᏌᎻᏏ',
        'as-IN' => 'ᎠᏌᎻᏏ (ᎢᏅᏗᎾ)',
        'asa' => 'ᎠᏑ',
        'asa-TZ' => 'ᎠᏑ (ᏖᏂᏏᏂᏯ)',
        'ast' => 'ᎠᏍᏚᎵᎠᏂ',
        'ast-ES' => 'ᎠᏍᏚᎵᎠᏂ (ᎠᏂᏍᏆᏂᏱ)',
        'az' => 'ᎠᏎᏆᏣᏂ',
        'az-Cyrl' => 'ᎠᏎᏆᏣᏂ (ᏲᏂᎢ ᏗᎪᏪᎵ)',
        'az-Cyrl-AZ' => 'ᎠᏎᏆᏣᏂ (ᏲᏂᎢ ᏗᎪᏪᎵ, ᎠᏎᏆᏣᏂ)',
        'az-Latn' => 'ᎠᏎᏆᏣᏂ (ᎳᏘᏂ)',
        'az-Latn-AZ' => 'ᎠᏎᏆᏣᏂ (ᎳᏘᏂ, ᎠᏎᏆᏣᏂ)',
        'bas' => 'ᏆᏌᎠ',
        'bas-CM' => 'ᏆᏌᎠ (ᎧᎹᎷᏂ)',
        'be' => 'ᏇᎳᎷᏏ',
        'be-BY' => 'ᏇᎳᎷᏏ (ᏇᎳᎷᏍ)',
        'bem' => 'ᏇᎹᏆ',
        'bem-ZM' => 'ᏇᎹᏆ (ᏌᎻᏈᏯ)',
        'bez' => 'ᏇᎾ',
        'bez-TZ' => 'ᏇᎾ (ᏖᏂᏏᏂᏯ)',
        'bg' => 'ᏊᎵᎨᎵᎠᏂ',
        'bg-BG' => 'ᏊᎵᎨᎵᎠᏂ (ᏊᎵᎨᎵᎠ)',
        'bm' => 'ᏆᎻᏆᎳ',
        'bm-ML' => 'ᏆᎻᏆᎳ (ᎹᎵ)',
        'bn' => 'ᏇᏂᎦᎳ',
        'bn-BD' => 'ᏇᏂᎦᎳ (ᏆᏂᎦᎵᏕᏍ)',
        'bn-IN' => 'ᏇᏂᎦᎳ (ᎢᏅᏗᎾ)',
        'bo' => 'ᏘᏇᏔᏂ',
        'bo-CN' => 'ᏘᏇᏔᏂ (ᏓᎶᏂᎨᏍᏛ)',
        'bo-IN' => 'ᏘᏇᏔᏂ (ᎢᏅᏗᎾ)',
        'br' => 'ᏇᏙᏂ',
        'br-FR' => 'ᏇᏙᏂ (ᎦᎸᏥᏱ)',
        'brx' => 'ᏉᏙ',
        'brx-IN' => 'ᏉᏙ (ᎢᏅᏗᎾ)',
        'bs' => 'ᏆᏍᏂᎠᏂ',
        'bs-Cyrl' => 'ᏆᏍᏂᎠᏂ (ᏲᏂᎢ ᏗᎪᏪᎵ)',
        'bs-Cyrl-BA' => 'ᏆᏍᏂᎠᏂ (ᏲᏂᎢ ᏗᎪᏪᎵ, ᏉᏏᏂᎠ & ᎲᏤᎪᏫ)',
        'bs-Latn' => 'ᏆᏍᏂᎠᏂ (ᎳᏘᏂ)',
        'bs-Latn-BA' => 'ᏆᏍᏂᎠᏂ (ᎳᏘᏂ, ᏉᏏᏂᎠ & ᎲᏤᎪᏫ)',
        'ca' => 'ᎨᏔᎳᏂ',
        'ca-AD' => 'ᎨᏔᎳᏂ (ᎠᏂᏙᎳ)',
        'ca-ES' => 'ᎨᏔᎳᏂ (ᎠᏂᏍᏆᏂᏱ)',
        'ca-FR' => 'ᎨᏔᎳᏂ (ᎦᎸᏥᏱ)',
        'ca-IT' => 'ᎨᏔᎳᏂ (ᎢᏔᎵ)',
        'ccp' => 'ᏣᎧᎹ',
        'ccp-BD' => 'ᏣᎧᎹ (ᏆᏂᎦᎵᏕᏍ)',
        'ccp-IN' => 'ᏣᎧᎹ (ᎢᏅᏗᎾ)',
        'ce' => 'ᏤᏤᏂ',
        'ce-RU' => 'ᏤᏤᏂ (ᏲᏂᎢ)',
        'ceb' => 'ᏎᏆᏃ',
        'ceb-PH' => 'ᏎᏆᏃ (ᎠᏂᏈᎵᎩᏃ)',
        'cgg' => 'ᏥᎦ',
        'cgg-UG' => 'ᏥᎦ (ᏳᎦᏂᏓ)',
        'chr' => 'ᏣᎳᎩ',
        'chr-US' => 'ᏣᎳᎩ (ᏌᏊ ᎢᏳᎾᎵᏍᏔᏅ ᏍᎦᏚᎩ)',
        'ckb' => 'ᎠᏰᏟ ᎫᏗᏏ',
        'ckb-IQ' => 'ᎠᏰᏟ ᎫᏗᏏ (ᎢᎳᎩ)',
        'ckb-IR' => 'ᎠᏰᏟ ᎫᏗᏏ (ᎢᎴᏂ)',
        'cs' => 'ᏤᎩ',
        'cs-CZ' => 'ᏤᎩ (ᏤᎩᎠ)',
        'cy' => 'ᏪᎵᏏ',
        'cy-GB' => 'ᏪᎵᏏ (ᎩᎵᏏᏲ)',
        'da' => 'ᏕᏂᏍ',
        'da-DK' => 'ᏕᏂᏍ (ᏗᏂᎹᎦ)',
        'da-GL' => 'ᏕᏂᏍ (ᎢᏤᏍᏛᏱ)',
        'dav' => 'ᏔᎢᏔ',
        'dav-KE' => 'ᏔᎢᏔ (ᎨᏂᏯ)',
        'de' => 'ᏙᎢᏥ',
        'de-AT' => 'ᏙᎢᏥ (ᎠᏍᏟᏯ)',
        'de-BE' => 'ᏙᎢᏥ (ᏇᎵᏥᎥᎻ)',
        'de-CH' => 'ᏙᎢᏥ (ᏍᏫᏍ)',
        'de-DE' => 'ᏙᎢᏥ (ᎠᏂᏛᏥ)',
        'de-IT' => 'ᏙᎢᏥ (ᎢᏔᎵ)',
        'de-LI' => 'ᏙᎢᏥ (ᎵᎦᏗᏂᏍᏓᏂ)',
        'de-LU' => 'ᏙᎢᏥ (ᎸᎧᏎᏋᎩ)',
        'dje' => 'ᏌᎹ',
        'dje-NE' => 'ᏌᎹ (ᎾᎢᏨ)',
        'dsb' => 'ᎡᎳᏗ ᏐᏈᎠᏂ',
        'dsb-DE' => 'ᎡᎳᏗ ᏐᏈᎠᏂ (ᎠᏂᏛᏥ)',
        'dua' => 'ᏚᎠᎳ',
        'dua-CM' => 'ᏚᎠᎳ (ᎧᎹᎷᏂ)',
        'dyo' => 'ᏦᎳ-ᏬᏱ',
        'dyo-SN' => 'ᏦᎳ-ᏬᏱ (ᏏᏂᎦᎵ)',
        'dz' => 'ᏓᏐᏅᎧ',
        'dz-BT' => 'ᏓᏐᏅᎧ (ᏊᏔᏂ)',
        'ebu' => 'ᎡᎻᏊ',
        'ebu-KE' => 'ᎡᎻᏊ (ᎨᏂᏯ)',
        'ee' => 'ᎡᏪ',
        'ee-GH' => 'ᎡᏪ (ᎦᎠᎾ)',
        'ee-TG' => 'ᎡᏪ (ᏙᎪ)',
        'el' => 'ᎠᏂᎪᎢ',
        'el-CY' => 'ᎠᏂᎪᎢ (ᏌᎢᏆᏍ)',
        'el-GR' => 'ᎠᏂᎪᎢ (ᎪᎢᎯ)',
        'en' => 'ᎩᎵᏏ',
        'en-001' => 'ᎩᎵᏏ (ᎡᎶᎯ)',
        'en-150' => 'ᎩᎵᏏ (ᏳᎳᏛ)',
        'en-AE' => 'ᎩᎵᏏ (ᏌᏊ ᎢᏳᎾᎵᏍᏔᏅ ᎡᎳᏈ ᎢᎹᎵᏘᏏ)',
        'en-AG' => 'ᎩᎵᏏ (ᎤᏪᏘ & ᏆᏊᏓ)',
        'en-AI' => 'ᎩᎵᏏ (ᎠᏂᎩᎳ)',
        'en-AS' => 'ᎩᎵᏏ (ᎠᎺᎵᎧ ᏌᎼᎠ)',
        'en-AT' => 'ᎩᎵᏏ (ᎠᏍᏟᏯ)',
        'en-AU' => 'ᎩᎵᏏ (ᎡᎳᏗᏜ)',
        'en-BB' => 'ᎩᎵᏏ (ᏆᏇᏙᏍ)',
        'en-BE' => 'ᎩᎵᏏ (ᏇᎵᏥᎥᎻ)',
        'en-BI' => 'ᎩᎵᏏ (ᏋᎷᏂᏗ)',
        'en-BM' => 'ᎩᎵᏏ (ᏆᏊᏓ)',
        'en-BS' => 'ᎩᎵᏏ (ᎾᏍᎩ ᏆᎭᎹᏍ)',
        'en-BW' => 'ᎩᎵᏏ (ᏆᏣᏩᎾ)',
        'en-BZ' => 'ᎩᎵᏏ (ᏇᎵᏍ)',
        'en-CA' => 'ᎩᎵᏏ (ᎨᎾᏓ)',
        'en-CC' => 'ᎩᎵᏏ (ᎪᎪᏍ [ᎩᎵᏂ] ᏚᎦᏚᏛᎢ)',
        'en-CH' => 'ᎩᎵᏏ (ᏍᏫᏍ)',
        'en-CK' => 'ᎩᎵᏏ (ᎠᏓᏍᏓᏴᎲᏍᎩ ᏚᎦᏚᏛᎢ)',
        'en-CM' => 'ᎩᎵᏏ (ᎧᎹᎷᏂ)',
        'en-CX' => 'ᎩᎵᏏ (ᏓᏂᏍᏓᏲᎯᎲ ᎤᎦᏚᏛᎢ)',
        'en-CY' => 'ᎩᎵᏏ (ᏌᎢᏆᏍ)',
        'en-DE' => 'ᎩᎵᏏ (ᎠᏂᏛᏥ)',
        'en-DG' => 'ᎩᎵᏏ (ᏗᏰᎪ ᎦᏏᏯ)',
        'en-DK' => 'ᎩᎵᏏ (ᏗᏂᎹᎦ)',
        'en-DM' => 'ᎩᎵᏏ (ᏙᎻᏂᎧ)',
        'en-ER' => 'ᎩᎵᏏ (ᎡᎵᏟᏯ)',
        'en-FI' => 'ᎩᎵᏏ (ᏫᏂᎦᏙᎯ)',
        'en-FJ' => 'ᎩᎵᏏ (ᏫᏥ)',
        'en-FK' => 'ᎩᎵᏏ (ᏩᎩ ᏚᎦᏚᏛᎢ)',
        'en-FM' => 'ᎩᎵᏏ (ᎹᎢᏉᏂᏏᏯ)',
        'en-GB' => 'ᎩᎵᏏ (ᎩᎵᏏᏲ)',
        'en-GD' => 'ᎩᎵᏏ (ᏋᎾᏓ)',
        'en-GG' => 'ᎩᎵᏏ (ᎬᏂᏏ)',
        'en-GH' => 'ᎩᎵᏏ (ᎦᎠᎾ)',
        'en-GI' => 'ᎩᎵᏏ (ᏥᏆᎵᏓ)',
        'en-GM' => 'ᎩᎵᏏ (ᎦᎹᏈᎢᎠ)',
        'en-GU' => 'ᎩᎵᏏ (ᏆᎻ)',
        'en-GY' => 'ᎩᎵᏏ (ᎦᏯᎾ)',
        'en-HK' => 'ᎩᎵᏏ (ᎰᏂᎩ ᎪᏂᎩ ᎤᏓᏤᎵᏓ ᏧᏂᎸᏫᏍᏓᏁᏗ ᎢᎬᎾᏕᎾ ᏓᎶᏂᎨᏍᏛ)',
        'en-IE' => 'ᎩᎵᏏ (ᎠᏲᎳᏂ)',
        'en-IL' => 'ᎩᎵᏏ (ᎢᏏᎵᏱ)',
        'en-IM' => 'ᎩᎵᏏ (ᎤᏍᏗ ᎤᎦᏚᏛᎢ ᎾᎿ ᎠᏍᎦᏯ)',
        'en-IN' => 'ᎩᎵᏏ (ᎢᏅᏗᎾ)',
        'en-IO' => 'ᎩᎵᏏ (ᏈᏗᏏ ᏴᏫᏯ ᎠᎺᏉ ᎢᎬᎾᏕᏅ)',
        'en-JE' => 'ᎩᎵᏏ (ᏨᎵᏏ)',
        'en-JM' => 'ᎩᎵᏏ (ᏣᎺᎢᎧ)',
        'en-KE' => 'ᎩᎵᏏ (ᎨᏂᏯ)',
        'en-KI' => 'ᎩᎵᏏ (ᎧᎵᏆᏘ)',
        'en-KN' => 'ᎩᎵᏏ (ᎤᏓᏅᏘ ᎨᏘᏏ ᎠᎴ ᏁᏪᏏ)',
        'en-KY' => 'ᎩᎵᏏ (ᎨᎢᎹᏂ ᏚᎦᏚᏛᎢ)',
        'en-LC' => 'ᎩᎵᏏ (ᎤᏓᏅᏘ ᎷᏏᏯ)',
        'en-LR' => 'ᎩᎵᏏ (ᎳᏈᎵᏯ)',
        'en-LS' => 'ᎩᎵᏏ (ᎴᏐᏙ)',
        'en-MG' => 'ᎩᎵᏏ (ᎹᏓᎦᏍᎧᎵ)',
        'en-MH' => 'ᎩᎵᏏ (ᎹᏌᎵ ᏚᎦᏚᏛᎢ)',
        'en-MO' => 'ᎩᎵᏏ (ᎹᎧᎣ [ᎤᏓᏤᎵᏓ ᏧᏂᎸᏫᏍᏓᏁᏗ ᎢᎬᎾᏕᎾ] ᏣᎢ)',
        'en-MP' => 'ᎩᎵᏏ (ᏧᏴᏢ ᏗᏜ ᎹᎵᎠᎾ ᏚᎦᏚᏛᎢ)',
        'en-MS' => 'ᎩᎵᏏ (ᎹᏂᏘᏌᎳᏗ)',
        'en-MT' => 'ᎩᎵᏏ (ᎹᎵᏔ)',
        'en-MU' => 'ᎩᎵᏏ (ᎼᎵᏏᎥᏍ)',
        'en-MW' => 'ᎩᎵᏏ (ᎹᎳᏫ)',
        'en-MY' => 'ᎩᎵᏏ (ᎹᎴᏏᎢᎠ)',
        'en-NA' => 'ᎩᎵᏏ (ᎾᎻᏈᎢᏯ)',
        'en-NF' => 'ᎩᎵᏏ (ᏃᎵᏬᎵᎩ ᎤᎦᏚᏛᎢ)',
        'en-NG' => 'ᎩᎵᏏ (ᏂᏥᎵᏯ)',
        'en-NL' => 'ᎩᎵᏏ (ᏁᏛᎳᏂ)',
        'en-NR' => 'ᎩᎵᏏ (ᏃᎤᎷ)',
        'en-NU' => 'ᎩᎵᏏ (ᏂᏳ)',
        'en-NZ' => 'ᎩᎵᏏ (ᎢᏤ ᏏᎢᎴᏂᏗ)',
        'en-PG' => 'ᎩᎵᏏ (ᏆᏇ ᎢᏤ ᎩᎢᏂ)',
        'en-PH' => 'ᎩᎵᏏ (ᎠᏂᏈᎵᎩᏃ)',
        'en-PK' => 'ᎩᎵᏏ (ᏆᎩᏍᏖᏂ)',
        'en-PN' => 'ᎩᎵᏏ (ᏈᎧᎵᏂ ᏚᎦᏚᏛᎢ)',
        'en-PR' => 'ᎩᎵᏏ (ᏇᎡᏙ ᎵᎢᎪ)',
        'en-PW' => 'ᎩᎵᏏ (ᏆᎴᎠᏫ)',
        'en-RW' => 'ᎩᎵᏏ (ᎶᏩᏂᏓ)',
        'en-SB' => 'ᎩᎵᏏ (ᏐᎶᎹᏂ ᏚᎦᏚᏛᎢ)',
        'en-SC' => 'ᎩᎵᏏ (ᏏᎡᏥᎵᏍ)',
        'en-SD' => 'ᎩᎵᏏ (ᏑᏕᏂ)',
        'en-SE' => 'ᎩᎵᏏ (ᏍᏫᏕᏂ)',
        'en-SG' => 'ᎩᎵᏏ (ᏏᏂᎦᏉᎵ)',
        'en-SH' => 'ᎩᎵᏏ (ᎤᏓᏅᏘ ᎮᎵᎾ)',
        'en-SI' => 'ᎩᎵᏏ (ᏍᎶᏫᏂᎠ)',
        'en-SL' => 'ᎩᎵᏏ (ᏏᎡᎳ ᎴᎣᏂ)',
        'en-SS' => 'ᎩᎵᏏ (ᏧᎦᎾᏮ ᏑᏕᏂ)',
        'en-SX' => 'ᎩᎵᏏ (ᏏᏂᏘ ᎹᏘᏂ)',
        'en-SZ' => 'ᎩᎵᏏ (ᎡᏍᏩᏘᏂ)',
        'en-TC' => 'ᎩᎵᏏ (ᎠᏂᏛᎵᎩ ᎠᎴ ᎨᎢᎪ ᏚᎦᏚᏛᎢ)',
        'en-TK' => 'ᎩᎵᏏ (ᏙᎨᎳᏭ)',
        'en-TO' => 'ᎩᎵᏏ (ᏙᎾᎦ)',
        'en-TT' => 'ᎩᎵᏏ (ᏟᏂᏕᏗ ᎠᎴ ᏙᏆᎪ)',
        'en-TV' => 'ᎩᎵᏏ (ᏚᏩᎷ)',
        'en-TZ' => 'ᎩᎵᏏ (ᏖᏂᏏᏂᏯ)',
        'en-UG' => 'ᎩᎵᏏ (ᏳᎦᏂᏓ)',
        'en-UM' => 'ᎩᎵᏏ (U.S. ᎠᏍᏛ ᏚᎦᏚᏛᎢ)',
        'en-US' => 'ᎩᎵᏏ (ᏌᏊ ᎢᏳᎾᎵᏍᏔᏅ ᏍᎦᏚᎩ)',
        'en-US-POSIX' => 'ᎩᎵᏏ (ᏌᏊ ᎢᏳᎾᎵᏍᏔᏅ ᏍᎦᏚᎩ, POSIX)',
        'en-VC' => 'ᎩᎵᏏ (ᎤᏓᏅᏘ ᏫᏂᏏᏂᏗ ᎠᎴ ᎾᏍᎩ ᏇᎾᏗᏁᏍ)',
        'en-VG' => 'ᎩᎵᏏ (ᏈᏗᏍ ᎠᏒᏂᎸ ᏂᎨᏒᎾ ᏚᎦᏚᏛᎢ)',
        'en-VI' => 'ᎩᎵᏏ (U.S. ᎠᏒᏂᎸ ᏂᎨᏒᎾ ᏚᎦᏚᏛᎢ)',
        'en-VU' => 'ᎩᎵᏏ (ᏩᏂᎤᏩᏚ)',
        'en-WS' => 'ᎩᎵᏏ (ᏌᎼᎠ)',
        'en-ZA' => 'ᎩᎵᏏ (ᏧᎦᎾᏮ ᎬᎿᎨᏍᏛ)',
        'en-ZM' => 'ᎩᎵᏏ (ᏌᎻᏈᏯ)',
        'en-ZW' => 'ᎩᎵᏏ (ᏏᎻᏆᏇ)',
        'eo' => 'ᎡᏍᏇᎳᏂᏙ',
        'eo-001' => 'ᎡᏍᏇᎳᏂᏙ (ᎡᎶᎯ)',
        'es' => 'ᏍᏆᏂ',
        'es-419' => 'ᏍᏆᏂ (ᎳᏘᏂ ᎠᎹᏰᏟ)',
        'es-AR' => 'ᏍᏆᏂ (ᎠᏥᏂᏘᏂᎠ)',
        'es-BO' => 'ᏍᏆᏂ (ᏉᎵᏫᎠ)',
        'es-BR' => 'ᏍᏆᏂ (ᏆᏏᎵ)',
        'es-BZ' => 'ᏍᏆᏂ (ᏇᎵᏍ)',
        'es-CL' => 'ᏍᏆᏂ (ᏥᎵ)',
        'es-CO' => 'ᏍᏆᏂ (ᎪᎸᎻᏈᎢᎠ)',
        'es-CR' => 'ᏍᏆᏂ (ᎪᏍᏓ ᎵᎧ)',
        'es-CU' => 'ᏍᏆᏂ (ᎫᏆ)',
        'es-DO' => 'ᏍᏆᏂ (ᏙᎻᏂᎧᏂ ᏍᎦᏚᎩ)',
        'es-EA' => 'ᏍᏆᏂ (ᏑᏔ ᎠᎴ ᎺᎵᏯ)',
        'es-EC' => 'ᏍᏆᏂ (ᎡᏆᏙᎵ)',
        'es-ES' => 'ᏍᏆᏂ (ᎠᏂᏍᏆᏂᏱ)',
        'es-GQ' => 'ᏍᏆᏂ (ᎡᏆᏙᎵᎠᎵ ᎩᎢᏂ)',
        'es-GT' => 'ᏍᏆᏂ (ᏩᏔᎹᎳ)',
        'es-HN' => 'ᏍᏆᏂ (ᎭᏂᏚᎳᏍ)',
        'es-IC' => 'ᏍᏆᏂ (ᏥᏍᏆ ᏚᎦᏚᏛᎢ)',
        'es-MX' => 'ᏍᏆᏂ (ᎠᏂᏍᏆᏂ)',
        'es-NI' => 'ᏍᏆᏂ (ᏂᎧᎳᏆ)',
        'es-PA' => 'ᏍᏆᏂ (ᏆᎾᎹ)',
        'es-PE' => 'ᏍᏆᏂ (ᏇᎷ)',
        'es-PH' => 'ᏍᏆᏂ (ᎠᏂᏈᎵᎩᏃ)',
        'es-PR' => 'ᏍᏆᏂ (ᏇᎡᏙ ᎵᎢᎪ)',
        'es-PY' => 'ᏍᏆᏂ (ᏆᎳᏇᎢᏯ)',
        'es-SV' => 'ᏍᏆᏂ (ᎡᎵᏌᎵᏆᏙᎵ)',
        'es-US' => 'ᏍᏆᏂ (ᏌᏊ ᎢᏳᎾᎵᏍᏔᏅ ᏍᎦᏚᎩ)',
        'es-UY' => 'ᏍᏆᏂ (ᏳᎷᏇ)',
        'es-VE' => 'ᏍᏆᏂ (ᏪᏁᏑᏪᎳ)',
        'et' => 'ᎡᏍᏙᏂᎠᏂ',
        'et-EE' => 'ᎡᏍᏙᏂᎠᏂ (ᎡᏍᏙᏂᏯ)',
        'eu' => 'ᏆᏍᎨ',
        'eu-ES' => 'ᏆᏍᎨ (ᎠᏂᏍᏆᏂᏱ)',
        'ewo' => 'ᎡᏬᏂᏙ',
        'ewo-CM' => 'ᎡᏬᏂᏙ (ᎧᎹᎷᏂ)',
        'fa' => 'ᏇᏏᎠᏂ',
        'fa-AF' => 'ᏇᏏᎠᏂ (ᎠᏫᎨᏂᏍᏖᏂ)',
        'fa-IR' => 'ᏇᏏᎠᏂ (ᎢᎴᏂ)',
        'ff' => 'ᏊᎳᏂ',
        'ff-Latn' => 'ᏊᎳᏂ (ᎳᏘᏂ)',
        'ff-Latn-BF' => 'ᏊᎳᏂ (ᎳᏘᏂ, ᏋᎩᎾ ᏩᏐ)',
        'ff-Latn-CM' => 'ᏊᎳᏂ (ᎳᏘᏂ, ᎧᎹᎷᏂ)',
        'ff-Latn-GH' => 'ᏊᎳᏂ (ᎳᏘᏂ, ᎦᎠᎾ)',
        'ff-Latn-GM' => 'ᏊᎳᏂ (ᎳᏘᏂ, ᎦᎹᏈᎢᎠ)',
        'ff-Latn-GN' => 'ᏊᎳᏂ (ᎳᏘᏂ, ᎩᎢᏂ)',
        'ff-Latn-GW' => 'ᏊᎳᏂ (ᎳᏘᏂ, ᎩᎢᏂ-ᏈᏌᎤᏫ)',
        'ff-Latn-LR' => 'ᏊᎳᏂ (ᎳᏘᏂ, ᎳᏈᎵᏯ)',
        'ff-Latn-MR' => 'ᏊᎳᏂ (ᎳᏘᏂ, ᎹᏘᎢᏯ)',
        'ff-Latn-NE' => 'ᏊᎳᏂ (ᎳᏘᏂ, ᎾᎢᏨ)',
        'ff-Latn-NG' => 'ᏊᎳᏂ (ᎳᏘᏂ, ᏂᏥᎵᏯ)',
        'ff-Latn-SL' => 'ᏊᎳᏂ (ᎳᏘᏂ, ᏏᎡᎳ ᎴᎣᏂ)',
        'ff-Latn-SN' => 'ᏊᎳᏂ (ᎳᏘᏂ, ᏏᏂᎦᎵ)',
        'fi' => 'ᏈᏂᏍ',
        'fi-FI' => 'ᏈᏂᏍ (ᏫᏂᎦᏙᎯ)',
        'fil' => 'ᎠᏈᎵᎩ',
        'fil-PH' => 'ᎠᏈᎵᎩ (ᎠᏂᏈᎵᎩᏃ)',
        'fo' => 'ᏇᎶᎡᏍ',
        'fo-DK' => 'ᏇᎶᎡᏍ (ᏗᏂᎹᎦ)',
        'fo-FO' => 'ᏇᎶᎡᏍ (ᏪᎶ ᏚᎦᏚᏛᎢ)',
        'fr' => 'ᎦᎸᏥ',
        'fr-BE' => 'ᎦᎸᏥ (ᏇᎵᏥᎥᎻ)',
        'fr-BF' => 'ᎦᎸᏥ (ᏋᎩᎾ ᏩᏐ)',
        'fr-BI' => 'ᎦᎸᏥ (ᏋᎷᏂᏗ)',
        'fr-BJ' => 'ᎦᎸᏥ (ᏆᏂᎢᏂ)',
        'fr-BL' => 'ᎦᎸᏥ (ᎤᏓᏅᏘ ᏆᏕᎳᎻ)',
        'fr-CA' => 'ᎦᎸᏥ (ᎨᎾᏓ)',
        'fr-CD' => 'ᎦᎸᏥ (ᎧᏂᎪ - ᎨᏂᏝᏌ)',
        'fr-CF' => 'ᎦᎸᏥ (ᎬᎿᎨᏍᏛ ᎠᏰᏟ ᏍᎦᏚᎩ)',
        'fr-CG' => 'ᎦᎸᏥ (ᎧᏂᎪ - ᏆᏌᏩᎵ)',
        'fr-CH' => 'ᎦᎸᏥ (ᏍᏫᏍ)',
        'fr-CI' => 'ᎦᎸᏥ (ᎢᏬᎵ ᎾᎿ ᎠᎹᏳᎶᏗ)',
        'fr-CM' => 'ᎦᎸᏥ (ᎧᎹᎷᏂ)',
        'fr-DJ' => 'ᎦᎸᏥ (ᏥᏊᏗ)',
        'fr-DZ' => 'ᎦᎸᏥ (ᎠᎵᏥᎵᏯ)',
        'fr-FR' => 'ᎦᎸᏥ (ᎦᎸᏥᏱ)',
        'fr-GA' => 'ᎦᎸᏥ (ᎦᏉᏂ)',
        'fr-GF' => 'ᎦᎸᏥ (ᎠᏂᎦᎸᏥ ᎩᎠ)',
        'fr-GN' => 'ᎦᎸᏥ (ᎩᎢᏂ)',
        'fr-GP' => 'ᎦᎸᏥ (ᏩᏓᎷᏇ)',
        'fr-GQ' => 'ᎦᎸᏥ (ᎡᏆᏙᎵᎠᎵ ᎩᎢᏂ)',
        'fr-HT' => 'ᎦᎸᏥ (ᎮᎢᏘ)',
        'fr-KM' => 'ᎦᎸᏥ (ᎪᎼᎳᏍ)',
        'fr-LU' => 'ᎦᎸᏥ (ᎸᎧᏎᏋᎩ)',
        'fr-MA' => 'ᎦᎸᏥ (ᎼᎶᎪ)',
        'fr-MC' => 'ᎦᎸᏥ (ᎹᎾᎪ)',
        'fr-MF' => 'ᎦᎸᏥ (ᎤᏓᏅᏘ ᏡᏡ)',
        'fr-MG' => 'ᎦᎸᏥ (ᎹᏓᎦᏍᎧᎵ)',
        'fr-ML' => 'ᎦᎸᏥ (ᎹᎵ)',
        'fr-MQ' => 'ᎦᎸᏥ (ᎹᏘᏂᎨ)',
        'fr-MR' => 'ᎦᎸᏥ (ᎹᏘᎢᏯ)',
        'fr-MU' => 'ᎦᎸᏥ (ᎼᎵᏏᎥᏍ)',
        'fr-NC' => 'ᎦᎸᏥ (ᎢᏤ ᎧᎵᏙᏂᎠᏂ)',
        'fr-NE' => 'ᎦᎸᏥ (ᎾᎢᏨ)',
        'fr-PF' => 'ᎦᎸᏥ (ᎠᏂᎦᎸᏥ ᏆᎵᏂᏏᎠ)',
        'fr-PM' => 'ᎦᎸᏥ (ᎤᏓᏅᏘ ᏈᏰ ᎠᎴ ᎻᏇᎶᏂ)',
        'fr-RE' => 'ᎦᎸᏥ (ᎴᏳᏂᎠᏂ)',
        'fr-RW' => 'ᎦᎸᏥ (ᎶᏩᏂᏓ)',
        'fr-SC' => 'ᎦᎸᏥ (ᏏᎡᏥᎵᏍ)',
        'fr-SN' => 'ᎦᎸᏥ (ᏏᏂᎦᎵ)',
        'fr-SY' => 'ᎦᎸᏥ (ᏏᎵᎠ)',
        'fr-TD' => 'ᎦᎸᏥ (ᏣᏗ)',
        'fr-TG' => 'ᎦᎸᏥ (ᏙᎪ)',
        'fr-TN' => 'ᎦᎸᏥ (ᏚᏂᏏᏍᎠ)',
        'fr-VU' => 'ᎦᎸᏥ (ᏩᏂᎤᏩᏚ)',
        'fr-WF' => 'ᎦᎸᏥ (ᏩᎵᏍ ᎠᎴ ᏊᏚᎾ)',
        'fr-YT' => 'ᎦᎸᏥ (ᎺᏯᏖ)',
        'fur' => 'ᏞᎤᎵᎠᏂ',
        'fur-IT' => 'ᏞᎤᎵᎠᏂ (ᎢᏔᎵ)',
        'fy' => 'ᏭᏕᎵᎬ ᏗᏜ ᏟᏏᎠᏂ',
        'fy-NL' => 'ᏭᏕᎵᎬ ᏗᏜ ᏟᏏᎠᏂ (ᏁᏛᎳᏂ)',
        'ga' => 'ᎨᎵᎩ',
        'ga-IE' => 'ᎨᎵᎩ (ᎠᏲᎳᏂ)',
        'gd' => 'ᏍᎦᏗ ᎨᎵᎩ',
        'gd-GB' => 'ᏍᎦᏗ ᎨᎵᎩ (ᎩᎵᏏᏲ)',
        'gl' => 'ᎦᎵᏏᎠᏂ',
        'gl-ES' => 'ᎦᎵᏏᎠᏂ (ᎠᏂᏍᏆᏂᏱ)',
        'gsw' => 'ᏍᏫᏏ ᎠᏂᏓᏥ',
        'gsw-CH' => 'ᏍᏫᏏ ᎠᏂᏓᏥ (ᏍᏫᏍ)',
        'gsw-FR' => 'ᏍᏫᏏ ᎠᏂᏓᏥ (ᎦᎸᏥᏱ)',
        'gsw-LI' => 'ᏍᏫᏏ ᎠᏂᏓᏥ (ᎵᎦᏗᏂᏍᏓᏂ)',
        'gu' => 'ᎫᏣᎳᏘ',
        'gu-IN' => 'ᎫᏣᎳᏘ (ᎢᏅᏗᎾ)',
        'guz' => 'ᎫᏏ',
        'guz-KE' => 'ᎫᏏ (ᎨᏂᏯ)',
        'gv' => 'ᎹᎾᎧᏏ',
        'gv-IM' => 'ᎹᎾᎧᏏ (ᎤᏍᏗ ᎤᎦᏚᏛᎢ ᎾᎿ ᎠᏍᎦᏯ)',
        'ha' => 'ᎭᎤᏌ',
        'ha-GH' => 'ᎭᎤᏌ (ᎦᎠᎾ)',
        'ha-NE' => 'ᎭᎤᏌ (ᎾᎢᏨ)',
        'ha-NG' => 'ᎭᎤᏌ (ᏂᏥᎵᏯ)',
        'haw' => 'ᎭᏩᎼ',
        'haw-US' => 'ᎭᏩᎼ (ᏌᏊ ᎢᏳᎾᎵᏍᏔᏅ ᏍᎦᏚᎩ)',
        'he' => 'ᎠᏂᏈᎷ',
        'he-IL' => 'ᎠᏂᏈᎷ (ᎢᏏᎵᏱ)',
        'hi' => 'ᎯᏂᏗ',
        'hi-IN' => 'ᎯᏂᏗ (ᎢᏅᏗᎾ)',
        'hr' => 'ᎧᎶᎡᏏᏂ',
        'hr-BA' => 'ᎧᎶᎡᏏᏂ (ᏉᏏᏂᎠ & ᎲᏤᎪᏫ)',
        'hr-HR' => 'ᎧᎶᎡᏏᏂ (ᎧᎶᎡᏏᎠ)',
        'hsb' => 'ᎦᎸᎳᏗᎨ ᏐᏈᎠᏂ',
        'hsb-DE' => 'ᎦᎸᎳᏗᎨ ᏐᏈᎠᏂ (ᎠᏂᏛᏥ)',
        'hu' => 'ᎲᏂᎦᎵᎠᏂ',
        'hu-HU' => 'ᎲᏂᎦᎵᎠᏂ (ᎲᏂᎦᎵ)',
        'hy' => 'ᎠᎳᎻᎠᏂ',
        'hy-AM' => 'ᎠᎳᎻᎠᏂ (ᎠᎵᎻᏂᎠ)',
        'ia' => 'ᎠᏰᏟ ᎦᏬᏂᎯᏍᏗ',
        'ia-001' => 'ᎠᏰᏟ ᎦᏬᏂᎯᏍᏗ (ᎡᎶᎯ)',
        'id' => 'ᎢᏂᏙᏂᏏᎠ',
        'id-ID' => 'ᎢᏂᏙᏂᏏᎠ (ᎢᏂᏙᏂᏍᏯ)',
        'ig' => 'ᎢᎦᎪ',
        'ig-NG' => 'ᎢᎦᎪ (ᏂᏥᎵᏯ)',
        'ii' => 'ᏏᏧᏩᏂ Ᏹ',
        'ii-CN' => 'ᏏᏧᏩᏂ Ᏹ (ᏓᎶᏂᎨᏍᏛ)',
        'is' => 'ᏧᏁᏍᏓᎸᎯᎢᎩ',
        'is-IS' => 'ᏧᏁᏍᏓᎸᎯᎢᎩ (ᏧᏁᏍᏓᎸᎯ)',
        'it' => 'ᎬᏩᎵᏲᏥᎢ',
        'it-CH' => 'ᎬᏩᎵᏲᏥᎢ (ᏍᏫᏍ)',
        'it-IT' => 'ᎬᏩᎵᏲᏥᎢ (ᎢᏔᎵ)',
        'it-SM' => 'ᎬᏩᎵᏲᏥᎢ (ᎤᏓᏅᏘ ᎹᎵᎢᏃ)',
        'it-VA' => 'ᎬᏩᎵᏲᏥᎢ (ᎠᏥᎳᏁᏠ ᎦᏚᎲ)',
        'ja' => 'ᏣᏩᏂᏏ',
        'ja-JP' => 'ᏣᏩᏂᏏ (ᏣᏩᏂᏏ)',
        'jgo' => 'ᎾᎪᏆ',
        'jgo-CM' => 'ᎾᎪᏆ (ᎧᎹᎷᏂ)',
        'jmc' => 'ᎹᏣᎺ',
        'jmc-TZ' => 'ᎹᏣᎺ (ᏖᏂᏏᏂᏯ)',
        'jv' => 'ᏆᏌ ᏣᏩ',
        'jv-ID' => 'ᏆᏌ ᏣᏩ (ᎢᏂᏙᏂᏍᏯ)',
        'ka' => 'ᏦᏥᎠᏂ',
        'ka-GE' => 'ᏦᏥᎠᏂ (ᏣᎠᏥᎢ)',
        'kab' => 'ᎧᏈᎴ',
        'kab-DZ' => 'ᎧᏈᎴ (ᎠᎵᏥᎵᏯ)',
        'kam' => 'ᎧᎻᏆ',
        'kam-KE' => 'ᎧᎻᏆ (ᎨᏂᏯ)',
        'kde' => 'ᎹᎪᏕ',
        'kde-TZ' => 'ᎹᎪᏕ (ᏖᏂᏏᏂᏯ)',
        'kea' => 'ᎧᏊᏪᏗᎠᏄ',
        'kea-CV' => 'ᎧᏊᏪᏗᎠᏄ (ᎢᎬᎾᏕᎾ ᎢᏤᏳᏍᏗ)',
        'khq' => 'ᎪᏱᎳ ᏥᏂ',
        'khq-ML' => 'ᎪᏱᎳ ᏥᏂ (ᎹᎵ)',
        'ki' => 'ᎩᎫᏳ',
        'ki-KE' => 'ᎩᎫᏳ (ᎨᏂᏯ)',
        'kk' => 'ᎧᏌᎧ',
        'kk-KZ' => 'ᎧᏌᎧ (ᎧᏎᎧᏍᏕᏂ)',
        'kkj' => 'ᎧᎪ',
        'kkj-CM' => 'ᎧᎪ (ᎧᎹᎷᏂ)',
        'kl' => 'ᎧᎳᎵᏑᏘ',
        'kl-GL' => 'ᎧᎳᎵᏑᏘ (ᎢᏤᏍᏛᏱ)',
        'kln' => 'ᎧᎴᏂᏥᏂ',
        'kln-KE' => 'ᎧᎴᏂᏥᏂ (ᎨᏂᏯ)',
        'km' => 'ᎩᎻᎷ',
        'km-KH' => 'ᎩᎻᎷ (ᎧᎹᏉᏗᎠᏂ)',
        'kn' => 'ᎧᎾᏓ',
        'kn-IN' => 'ᎧᎾᏓ (ᎢᏅᏗᎾ)',
        'ko' => 'ᎪᎵᎠᏂ',
        'ko-KP' => 'ᎪᎵᎠᏂ (ᏧᏴᏢ ᎪᎵᎠ)',
        'ko-KR' => 'ᎪᎵᎠᏂ (ᏧᎦᏃᏮ ᎪᎵᎠ)',
        'kok' => 'ᎧᏂᎧᏂ',
        'kok-IN' => 'ᎧᏂᎧᏂ (ᎢᏅᏗᎾ)',
        'ks' => 'ᎧᏏᎻᎵ',
        'ks-IN' => 'ᎧᏏᎻᎵ (ᎢᏅᏗᎾ)',
        'ksb' => 'ᏝᎻᏆᎸ',
        'ksb-TZ' => 'ᏝᎻᏆᎸ (ᏖᏂᏏᏂᏯ)',
        'ksf' => 'ᏆᏫᎠ',
        'ksf-CM' => 'ᏆᏫᎠ (ᎧᎹᎷᏂ)',
        'ksh' => 'ᎪᎶᏂᎠᏂ',
        'ksh-DE' => 'ᎪᎶᏂᎠᏂ (ᎠᏂᏛᏥ)',
        'ku' => 'ᎫᏗᏏ',
        'ku-TR' => 'ᎫᏗᏏ (ᎬᏃ)',
        'kw' => 'ᏎᎷᎭ',
        'kw-GB' => 'ᏎᎷᎭ (ᎩᎵᏏᏲ)',
        'ky' => 'ᎩᎵᏣᎢᏍ',
        'ky-KG' => 'ᎩᎵᏣᎢᏍ (ᎩᎵᏣᎢᏍ)',
        'lag' => 'ᎳᏂᎩ',
        'lag-TZ' => 'ᎳᏂᎩ (ᏖᏂᏏᏂᏯ)',
        'lb' => 'ᎸᎦᏏᎻᏋᎢᏍ',
        'lb-LU' => 'ᎸᎦᏏᎻᏋᎢᏍ (ᎸᎧᏎᏋᎩ)',
        'lg' => 'ᎦᏂᏓ',
        'lg-UG' => 'ᎦᏂᏓ (ᏳᎦᏂᏓ)',
        'lkt' => 'ᎳᎪᏓ',
        'lkt-US' => 'ᎳᎪᏓ (ᏌᏊ ᎢᏳᎾᎵᏍᏔᏅ ᏍᎦᏚᎩ)',
        'ln' => 'ᎵᏂᎦᎳ',
        'ln-AO' => 'ᎵᏂᎦᎳ (ᎠᏂᎪᎳ)',
        'ln-CD' => 'ᎵᏂᎦᎳ (ᎧᏂᎪ - ᎨᏂᏝᏌ)',
        'ln-CF' => 'ᎵᏂᎦᎳ (ᎬᎿᎨᏍᏛ ᎠᏰᏟ ᏍᎦᏚᎩ)',
        'ln-CG' => 'ᎵᏂᎦᎳ (ᎧᏂᎪ - ᏆᏌᏩᎵ)',
        'lo' => 'ᎳᎣ',
        'lo-LA' => 'ᎳᎣ (ᎴᎣᏍ)',
        'lrc' => 'ᏧᏴᏢ ᏗᏜ ᎷᎵ',
        'lrc-IQ' => 'ᏧᏴᏢ ᏗᏜ ᎷᎵ (ᎢᎳᎩ)',
        'lrc-IR' => 'ᏧᏴᏢ ᏗᏜ ᎷᎵ (ᎢᎴᏂ)',
        'lt' => 'ᎵᏚᏩᏂᎠᏂ',
        'lt-LT' => 'ᎵᏚᏩᏂᎠᏂ (ᎵᏗᏪᏂᎠ)',
        'lu' => 'ᎷᏆ-ᎧᏔᎦ',
        'lu-CD' => 'ᎷᏆ-ᎧᏔᎦ (ᎧᏂᎪ - ᎨᏂᏝᏌ)',
        'luo' => 'ᎷᎣ',
        'luo-KE' => 'ᎷᎣ (ᎨᏂᏯ)',
        'luy' => 'ᎷᏱᎠ',
        'luy-KE' => 'ᎷᏱᎠ (ᎨᏂᏯ)',
        'lv' => 'ᎳᏘᏫᎠᏂ',
        'lv-LV' => 'ᎳᏘᏫᎠᏂ (ᎳᏘᏫᎠ)',
        'mas' => 'ᎹᏌᏱ',
        'mas-KE' => 'ᎹᏌᏱ (ᎨᏂᏯ)',
        'mas-TZ' => 'ᎹᏌᏱ (ᏖᏂᏏᏂᏯ)',
        'mer' => 'ᎺᎷ',
        'mer-KE' => 'ᎺᎷ (ᎨᏂᏯ)',
        'mfe' => 'ᎼᎵᏏᎡᏂ',
        'mfe-MU' => 'ᎼᎵᏏᎡᏂ (ᎼᎵᏏᎥᏍ)',
        'mg' => 'ᎹᎳᎦᏏ',
        'mg-MG' => 'ᎹᎳᎦᏏ (ᎹᏓᎦᏍᎧᎵ)',
        'mgh' => 'ᎹᎫᏩ-ᎻᏙ',
        'mgh-MZ' => 'ᎹᎫᏩ-ᎻᏙ (ᎼᏎᎻᏇᎩ)',
        'mgo' => 'ᎺᎳ’',
        'mgo-CM' => 'ᎺᎳ’ (ᎧᎹᎷᏂ)',
        'mi' => 'ᎹᏫ',
        'mi-NZ' => 'ᎹᏫ (ᎢᏤ ᏏᎢᎴᏂᏗ)',
        'mk' => 'ᎹᏎᏙᏂᎠᏂ',
        'mk-MK' => 'ᎹᏎᏙᏂᎠᏂ (ᎹᏎᏙᏂᏯ)',
        'ml' => 'ᎹᎳᏯᎳᎻ',
        'ml-IN' => 'ᎹᎳᏯᎳᎻ (ᎢᏅᏗᎾ)',
        'mn' => 'ᎹᏂᎪᎵᎠᏂ',
        'mn-MN' => 'ᎹᏂᎪᎵᎠᏂ (ᎹᏂᎪᎵᎠ)',
        'mr' => 'ᎹᎳᏘ',
        'mr-IN' => 'ᎹᎳᏘ (ᎢᏅᏗᎾ)',
        'ms' => 'ᎹᎴ',
        'ms-BN' => 'ᎹᎴ (ᏊᎾᎢ)',
        'ms-MY' => 'ᎹᎴ (ᎹᎴᏏᎢᎠ)',
        'ms-SG' => 'ᎹᎴ (ᏏᏂᎦᏉᎵ)',
        'mt' => 'ᎹᎵᏘᏍ',
        'mt-MT' => 'ᎹᎵᏘᏍ (ᎹᎵᏔ)',
        'mua' => 'ᎽᏂᏓᎩ',
        'mua-CM' => 'ᎽᏂᏓᎩ (ᎧᎹᎷᏂ)',
        'my' => 'ᏋᎻᏍ',
        'my-MM' => 'ᏋᎻᏍ (ᎹᏯᎹᎵ [ᏇᎵᎹ])',
        'mzn' => 'ᎹᏌᏕᎳᏂ',
        'mzn-IR' => 'ᎹᏌᏕᎳᏂ (ᎢᎴᏂ)',
        'naq' => 'ᎾᎹ',
        'naq-NA' => 'ᎾᎹ (ᎾᎻᏈᎢᏯ)',
        'nb' => 'ᏃᎵᏪᏥᏂ ᏉᎧᎹᎵ',
        'nb-NO' => 'ᏃᎵᏪᏥᏂ ᏉᎧᎹᎵ (ᏃᏪ)',
        'nb-SJ' => 'ᏃᎵᏪᏥᏂ ᏉᎧᎹᎵ (ᏍᏩᎵᏆᎵᏗ ᎠᎴ ᏤᏂ ᎹᏰᏂ)',
        'nd' => 'ᏧᏴᏢ ᏂᏕᏇᎴ',
        'nd-ZW' => 'ᏧᏴᏢ ᏂᏕᏇᎴ (ᏏᎻᏆᏇ)',
        'nds' => 'ᎡᎳᏗ ᎠᏂᏓᏥ',
        'nds-DE' => 'ᎡᎳᏗ ᎠᏂᏓᏥ (ᎠᏂᏛᏥ)',
        'nds-NL' => 'ᎡᎳᏗ ᎠᏂᏓᏥ (ᏁᏛᎳᏂ)',
        'ne' => 'ᏁᏆᎵ',
        'ne-IN' => 'ᏁᏆᎵ (ᎢᏅᏗᎾ)',
        'ne-NP' => 'ᏁᏆᎵ (ᏁᏆᎵ)',
        'nl' => 'ᏛᏥ',
        'nl-AW' => 'ᏛᏥ (ᎠᎷᏆ)',
        'nl-BE' => 'ᏛᏥ (ᏇᎵᏥᎥᎻ)',
        'nl-BQ' => 'ᏛᏥ (ᎧᎵᏈᎢᏂᎯ ᎾᏍᎩᏁᏛᎳᏂ)',
        'nl-CW' => 'ᏛᏥ (ᎫᎳᎨᎣ)',
        'nl-NL' => 'ᏛᏥ (ᏁᏛᎳᏂ)',
        'nl-SR' => 'ᏛᏥ (ᏒᎵᎾᎻ)',
        'nl-SX' => 'ᏛᏥ (ᏏᏂᏘ ᎹᏘᏂ)',
        'nmg' => 'ᏆᏏᏲ',
        'nmg-CM' => 'ᏆᏏᏲ (ᎧᎹᎷᏂ)',
        'nn' => 'ᏃᎵᏪᏥᏂ ᎾᎵᏍᎩ',
        'nn-NO' => 'ᏃᎵᏪᏥᏂ ᎾᎵᏍᎩ (ᏃᏪ)',
        'nnh' => 'ᎾᏥᏰᎹᏊᏂ',
        'nnh-CM' => 'ᎾᏥᏰᎹᏊᏂ (ᎧᎹᎷᏂ)',
        'nus' => 'ᏄᏪᎵ',
        'nus-SS' => 'ᏄᏪᎵ (ᏧᎦᎾᏮ ᏑᏕᏂ)',
        'nyn' => 'ᏂᏯᎾᎪᎴ',
        'nyn-UG' => 'ᏂᏯᎾᎪᎴ (ᏳᎦᏂᏓ)',
        'om' => 'ᎣᎶᎼ',
        'om-ET' => 'ᎣᎶᎼ (ᎢᏗᎣᏈᎠ)',
        'om-KE' => 'ᎣᎶᎼ (ᎨᏂᏯ)',
        'or' => 'ᎣᏗᎠ',
        'or-IN' => 'ᎣᏗᎠ (ᎢᏅᏗᎾ)',
        'os' => 'ᎣᏎᏘᎧ',
        'os-GE' => 'ᎣᏎᏘᎧ (ᏣᎠᏥᎢ)',
        'os-RU' => 'ᎣᏎᏘᎧ (ᏲᏂᎢ)',
        'pa' => 'ᏡᏂᏣᏈ',
        'pa-Arab' => 'ᏡᏂᏣᏈ (ᎡᎳᏈᎩ)',
        'pa-Arab-PK' => 'ᏡᏂᏣᏈ (ᎡᎳᏈᎩ, ᏆᎩᏍᏖᏂ)',
        'pa-Guru' => 'ᏡᏂᏣᏈ (ᎬᎹᎩ)',
        'pa-Guru-IN' => 'ᏡᏂᏣᏈ (ᎬᎹᎩ, ᎢᏅᏗᎾ)',
        'pl' => 'ᏉᎵᏍ',
        'pl-PL' => 'ᏉᎵᏍ (ᏉᎳᏂ)',
        'ps' => 'ᏆᏍᏙ',
        'ps-AF' => 'ᏆᏍᏙ (ᎠᏫᎨᏂᏍᏖᏂ)',
        'ps-PK' => 'ᏆᏍᏙ (ᏆᎩᏍᏖᏂ)',
        'pt' => 'ᏉᏧᎩᏍ',
        'pt-AO' => 'ᏉᏧᎩᏍ (ᎠᏂᎪᎳ)',
        'pt-BR' => 'ᏉᏧᎩᏍ (ᏆᏏᎵ)',
        'pt-CH' => 'ᏉᏧᎩᏍ (ᏍᏫᏍ)',
        'pt-CV' => 'ᏉᏧᎩᏍ (ᎢᎬᎾᏕᎾ ᎢᏤᏳᏍᏗ)',
        'pt-GQ' => 'ᏉᏧᎩᏍ (ᎡᏆᏙᎵᎠᎵ ᎩᎢᏂ)',
        'pt-GW' => 'ᏉᏧᎩᏍ (ᎩᎢᏂ-ᏈᏌᎤᏫ)',
        'pt-LU' => 'ᏉᏧᎩᏍ (ᎸᎧᏎᏋᎩ)',
        'pt-MO' => 'ᏉᏧᎩᏍ (ᎹᎧᎣ [ᎤᏓᏤᎵᏓ ᏧᏂᎸᏫᏍᏓᏁᏗ ᎢᎬᎾᏕᎾ] ᏣᎢ)',
        'pt-MZ' => 'ᏉᏧᎩᏍ (ᎼᏎᎻᏇᎩ)',
        'pt-PT' => 'ᏉᏧᎩᏍ (ᏉᏥᎦᎳ)',
        'pt-ST' => 'ᏉᏧᎩᏍ (ᏌᎣ ᏙᎺ ᎠᎴ ᏈᏂᏏᏇ)',
        'pt-TL' => 'ᏉᏧᎩᏍ (ᏘᎼᎵ-ᎴᏍᏖ)',
        'qu' => 'ᎨᏧᏩ',
        'qu-BO' => 'ᎨᏧᏩ (ᏉᎵᏫᎠ)',
        'qu-EC' => 'ᎨᏧᏩ (ᎡᏆᏙᎵ)',
        'qu-PE' => 'ᎨᏧᏩ (ᏇᎷ)',
        'rm' => 'ᎠᏂᎶᎺᏂ',
        'rm-CH' => 'ᎠᏂᎶᎺᏂ (ᏍᏫᏍ)',
        'rn' => 'ᎷᏂᏗ',
        'rn-BI' => 'ᎷᏂᏗ (ᏋᎷᏂᏗ)',
        'ro' => 'ᎶᎹᏂᎠᏂ',
        'ro-MD' => 'ᎶᎹᏂᎠᏂ (ᎹᎵᏙᏫᎠ)',
        'ro-RO' => 'ᎶᎹᏂᎠᏂ (ᎶᎹᏂᏯ)',
        'rof' => 'ᎶᎹᏉ',
        'rof-TZ' => 'ᎶᎹᏉ (ᏖᏂᏏᏂᏯ)',
        'ru' => 'ᏲᏅᎯ',
        'ru-BY' => 'ᏲᏅᎯ (ᏇᎳᎷᏍ)',
        'ru-KG' => 'ᏲᏅᎯ (ᎩᎵᏣᎢᏍ)',
        'ru-KZ' => 'ᏲᏅᎯ (ᎧᏎᎧᏍᏕᏂ)',
        'ru-MD' => 'ᏲᏅᎯ (ᎹᎵᏙᏫᎠ)',
        'ru-RU' => 'ᏲᏅᎯ (ᏲᏂᎢ)',
        'ru-UA' => 'ᏲᏅᎯ (ᏳᎧᎴᏂ)',
        'rw' => 'ᎩᏂᏯᏩᏂᏓ',
        'rw-RW' => 'ᎩᏂᏯᏩᏂᏓ (ᎶᏩᏂᏓ)',
        'rwk' => 'Ꮖ',
        'rwk-TZ' => 'Ꮖ (ᏖᏂᏏᏂᏯ)',
        'sah' => 'ᏌᎧᎾ',
        'sah-RU' => 'ᏌᎧᎾ (ᏲᏂᎢ)',
        'saq' => 'ᏌᎹᏊᎷ',
        'saq-KE' => 'ᏌᎹᏊᎷ (ᎨᏂᏯ)',
        'sbp' => 'ᏌᏁᎫ',
        'sbp-TZ' => 'ᏌᏁᎫ (ᏖᏂᏏᏂᏯ)',
        'sd' => 'ᏏᏂᏗ',
        'sd-PK' => 'ᏏᏂᏗ (ᏆᎩᏍᏖᏂ)',
        'se' => 'ᏧᏴᏢ ᏗᏜ ᏌᎻ',
        'se-FI' => 'ᏧᏴᏢ ᏗᏜ ᏌᎻ (ᏫᏂᎦᏙᎯ)',
        'se-NO' => 'ᏧᏴᏢ ᏗᏜ ᏌᎻ (ᏃᏪ)',
        'se-SE' => 'ᏧᏴᏢ ᏗᏜ ᏌᎻ (ᏍᏫᏕᏂ)',
        'seh' => 'ᏎᎾ',
        'seh-MZ' => 'ᏎᎾ (ᎼᏎᎻᏇᎩ)',
        'ses' => 'ᎪᏱᎳᏈᎶ ᏎᏂ',
        'ses-ML' => 'ᎪᏱᎳᏈᎶ ᏎᏂ (ᎹᎵ)',
        'sg' => 'ᏌᏂᎪ',
        'sg-CF' => 'ᏌᏂᎪ (ᎬᎿᎨᏍᏛ ᎠᏰᏟ ᏍᎦᏚᎩ)',
        'shi' => 'ᏔᏤᎵᎯᏘ',
        'shi-Latn' => 'ᏔᏤᎵᎯᏘ (ᎳᏘᏂ)',
        'shi-Latn-MA' => 'ᏔᏤᎵᎯᏘ (ᎳᏘᏂ, ᎼᎶᎪ)',
        'shi-Tfng' => 'ᏔᏤᎵᎯᏘ (Tfng)',
        'shi-Tfng-MA' => 'ᏔᏤᎵᎯᏘ (Tfng, ᎼᎶᎪ)',
        'si' => 'ᏏᎾᎭᎳ',
        'si-LK' => 'ᏏᎾᎭᎳ (ᏍᎵ ᎳᏂᎧ)',
        'sk' => 'ᏍᎶᏩᎩ',
        'sk-SK' => 'ᏍᎶᏩᎩ (ᏍᎶᏩᎩᎠ)',
        'sl' => 'ᏍᎶᏫᏂᎠᏂ',
        'sl-SI' => 'ᏍᎶᏫᏂᎠᏂ (ᏍᎶᏫᏂᎠ)',
        'smn' => 'ᎢᎾᎵ ᏌᎻ',
        'smn-FI' => 'ᎢᎾᎵ ᏌᎻ (ᏫᏂᎦᏙᎯ)',
        'sn' => 'ᏠᎾ',
        'sn-ZW' => 'ᏠᎾ (ᏏᎻᏆᏇ)',
        'so' => 'ᏐᎹᎵ',
        'so-DJ' => 'ᏐᎹᎵ (ᏥᏊᏗ)',
        'so-ET' => 'ᏐᎹᎵ (ᎢᏗᎣᏈᎠ)',
        'so-KE' => 'ᏐᎹᎵ (ᎨᏂᏯ)',
        'so-SO' => 'ᏐᎹᎵ (ᏐᎹᎵ)',
        'sq' => 'ᎠᎵᏇᏂ',
        'sq-AL' => 'ᎠᎵᏇᏂ (ᎠᎵᏇᏂᏯ)',
        'sq-MK' => 'ᎠᎵᏇᏂ (ᎹᏎᏙᏂᏯ)',
        'sq-XK' => 'ᎠᎵᏇᏂ (ᎪᏐᏉ)',
        'sr' => 'ᏒᏈᎠᏂ',
        'sr-Cyrl' => 'ᏒᏈᎠᏂ (ᏲᏂᎢ ᏗᎪᏪᎵ)',
        'sr-Cyrl-BA' => 'ᏒᏈᎠᏂ (ᏲᏂᎢ ᏗᎪᏪᎵ, ᏉᏏᏂᎠ & ᎲᏤᎪᏫ)',
        'sr-Cyrl-ME' => 'ᏒᏈᎠᏂ (ᏲᏂᎢ ᏗᎪᏪᎵ, ᎼᏂᏔᏁᎦᎶ)',
        'sr-Cyrl-RS' => 'ᏒᏈᎠᏂ (ᏲᏂᎢ ᏗᎪᏪᎵ, ᏒᏈᏯ)',
        'sr-Cyrl-XK' => 'ᏒᏈᎠᏂ (ᏲᏂᎢ ᏗᎪᏪᎵ, ᎪᏐᏉ)',
        'sr-Latn' => 'ᏒᏈᎠᏂ (ᎳᏘᏂ)',
        'sr-Latn-BA' => 'ᏒᏈᎠᏂ (ᎳᏘᏂ, ᏉᏏᏂᎠ & ᎲᏤᎪᏫ)',
        'sr-Latn-ME' => 'ᏒᏈᎠᏂ (ᎳᏘᏂ, ᎼᏂᏔᏁᎦᎶ)',
        'sr-Latn-RS' => 'ᏒᏈᎠᏂ (ᎳᏘᏂ, ᏒᏈᏯ)',
        'sr-Latn-XK' => 'ᏒᏈᎠᏂ (ᎳᏘᏂ, ᎪᏐᏉ)',
        'sv' => 'ᏍᏫᏗᏏ',
        'sv-AX' => 'ᏍᏫᏗᏏ (ᎣᎴᏅᏓ ᏚᎦᏚᏛᎢ)',
        'sv-FI' => 'ᏍᏫᏗᏏ (ᏫᏂᎦᏙᎯ)',
        'sv-SE' => 'ᏍᏫᏗᏏ (ᏍᏫᏕᏂ)',
        'sw' => 'ᏍᏩᎯᎵ',
        'sw-CD' => 'ᏍᏩᎯᎵ (ᎧᏂᎪ - ᎨᏂᏝᏌ)',
        'sw-KE' => 'ᏍᏩᎯᎵ (ᎨᏂᏯ)',
        'sw-TZ' => 'ᏍᏩᎯᎵ (ᏖᏂᏏᏂᏯ)',
        'sw-UG' => 'ᏍᏩᎯᎵ (ᏳᎦᏂᏓ)',
        'ta' => 'ᏔᎻᎵ',
        'ta-IN' => 'ᏔᎻᎵ (ᎢᏅᏗᎾ)',
        'ta-LK' => 'ᏔᎻᎵ (ᏍᎵ ᎳᏂᎧ)',
        'ta-MY' => 'ᏔᎻᎵ (ᎹᎴᏏᎢᎠ)',
        'ta-SG' => 'ᏔᎻᎵ (ᏏᏂᎦᏉᎵ)',
        'te' => 'ᏖᎷᎦ',
        'te-IN' => 'ᏖᎷᎦ (ᎢᏅᏗᎾ)',
        'teo' => 'ᏖᏐ',
        'teo-KE' => 'ᏖᏐ (ᎨᏂᏯ)',
        'teo-UG' => 'ᏖᏐ (ᏳᎦᏂᏓ)',
        'tg' => 'ᏔᏥᎩ',
        'tg-TJ' => 'ᏔᏥᎩ (ᏔᏥᎩᏍᏕᏂ)',
        'th' => 'ᏔᏱ',
        'th-TH' => 'ᏔᏱ (ᏔᏯᎴᏂ)',
        'ti' => 'ᏘᎩᎵᏂᎠ',
        'ti-ER' => 'ᏘᎩᎵᏂᎠ (ᎡᎵᏟᏯ)',
        'ti-ET' => 'ᏘᎩᎵᏂᎠ (ᎢᏗᎣᏈᎠ)',
        'tk' => 'ᎠᏂᎬᎾ',
        'tk-TM' => 'ᎠᏂᎬᎾ (ᏛᎵᎩᎺᏂᏍᏔᏂ)',
        'to' => 'ᏙᎾᎦᏂ',
        'to-TO' => 'ᏙᎾᎦᏂ (ᏙᎾᎦ)',
        'tr' => 'ᎠᎬᎾ',
        'tr-CY' => 'ᎠᎬᎾ (ᏌᎢᏆᏍ)',
        'tr-TR' => 'ᎠᎬᎾ (ᎬᏃ)',
        'tt' => 'ᏔᏔ',
        'tt-RU' => 'ᏔᏔ (ᏲᏂᎢ)',
        'twq' => 'ᏔᏌᏩᎩ',
        'twq-NE' => 'ᏔᏌᏩᎩ (ᎾᎢᏨ)',
        'tzm' => 'ᎠᏰᏟ ᎡᎶᎯ ᏓᏟᎶᏍᏗᏓᏅᎢ ᏔᎹᏏᏘ',
        'tzm-MA' => 'ᎠᏰᏟ ᎡᎶᎯ ᏓᏟᎶᏍᏗᏓᏅᎢ ᏔᎹᏏᏘ (ᎼᎶᎪ)',
        'ug' => 'ᏫᎦ',
        'ug-CN' => 'ᏫᎦ (ᏓᎶᏂᎨᏍᏛ)',
        'uk' => 'ᏳᎧᎴᏂᎠᏂ',
        'uk-UA' => 'ᏳᎧᎴᏂᎠᏂ (ᏳᎧᎴᏂ)',
        'ur' => 'ᎤᎵᏚ',
        'ur-IN' => 'ᎤᎵᏚ (ᎢᏅᏗᎾ)',
        'ur-PK' => 'ᎤᎵᏚ (ᏆᎩᏍᏖᏂ)',
        'uz' => 'ᎤᏍᏇᎩ',
        'uz-Arab' => 'ᎤᏍᏇᎩ (ᎡᎳᏈᎩ)',
        'uz-Arab-AF' => 'ᎤᏍᏇᎩ (ᎡᎳᏈᎩ, ᎠᏫᎨᏂᏍᏖᏂ)',
        'uz-Cyrl' => 'ᎤᏍᏇᎩ (ᏲᏂᎢ ᏗᎪᏪᎵ)',
        'uz-Cyrl-UZ' => 'ᎤᏍᏇᎩ (ᏲᏂᎢ ᏗᎪᏪᎵ, ᎤᏍᏇᎩᏍᏖᏂ)',
        'uz-Latn' => 'ᎤᏍᏇᎩ (ᎳᏘᏂ)',
        'uz-Latn-UZ' => 'ᎤᏍᏇᎩ (ᎳᏘᏂ, ᎤᏍᏇᎩᏍᏖᏂ)',
        'vai' => 'ᏩᏱ',
        'vai-Latn' => 'ᏩᏱ (ᎳᏘᏂ)',
        'vai-Latn-LR' => 'ᏩᏱ (ᎳᏘᏂ, ᎳᏈᎵᏯ)',
        'vai-Vaii' => 'ᏩᏱ (Vaii)',
        'vai-Vaii-LR' => 'ᏩᏱ (Vaii, ᎳᏈᎵᏯ)',
        'vi' => 'ᏫᎡᏘᎾᎻᏍ',
        'vi-VN' => 'ᏫᎡᏘᎾᎻᏍ (ᏫᎡᏘᎾᎻ)',
        'vun' => 'ᏭᎾᏦ',
        'vun-TZ' => 'ᏭᎾᏦ (ᏖᏂᏏᏂᏯ)',
        'wae' => 'ᏩᎵᏎᎵ',
        'wae-CH' => 'ᏩᎵᏎᎵ (ᏍᏫᏍ)',
        'wo' => 'ᏬᎶᏫ',
        'wo-SN' => 'ᏬᎶᏫ (ᏏᏂᎦᎵ)',
        'xh' => 'ᏠᏌ',
        'xh-ZA' => 'ᏠᏌ (ᏧᎦᎾᏮ ᎬᎿᎨᏍᏛ)',
        'xog' => 'ᏐᎦ',
        'xog-UG' => 'ᏐᎦ (ᏳᎦᏂᏓ)',
        'yav' => 'ᏰᎾᎦᏇᏂ',
        'yav-CM' => 'ᏰᎾᎦᏇᏂ (ᎧᎹᎷᏂ)',
        'yi' => 'ᏱᏗᏍ',
        'yi-001' => 'ᏱᏗᏍ (ᎡᎶᎯ)',
        'yo' => 'ᏲᏄᏆ',
        'yo-BJ' => 'ᏲᏄᏆ (ᏆᏂᎢᏂ)',
        'yo-NG' => 'ᏲᏄᏆ (ᏂᏥᎵᏯ)',
        'yue' => 'ᎨᎾᏙᏂᏏ',
        'yue-Hans' => 'ᎨᎾᏙᏂᏏ (ᎠᎯᏗᎨ)',
        'yue-Hans-CN' => 'ᎨᎾᏙᏂᏏ (ᎠᎯᏗᎨ, ᏓᎶᏂᎨᏍᏛ)',
        'yue-Hant' => 'ᎨᎾᏙᏂᏏ (ᎤᏦᏍᏗ)',
        'yue-Hant-HK' => 'ᎨᎾᏙᏂᏏ (ᎤᏦᏍᏗ, ᎰᏂᎩ ᎪᏂᎩ ᎤᏓᏤᎵᏓ ᏧᏂᎸᏫᏍᏓᏁᏗ ᎢᎬᎾᏕᎾ ᏓᎶᏂᎨᏍᏛ)',
        'zgh' => 'ᎠᏟᎶᏍᏗ ᎼᎶᎪ ᏔᎹᏏᏘ',
        'zgh-MA' => 'ᎠᏟᎶᏍᏗ ᎼᎶᎪ ᏔᎹᏏᏘ (ᎼᎶᎪ)',
        'zh' => 'ᏓᎶᏂᎨ',
        'zh-Hans' => 'ᏓᎶᏂᎨ (ᎠᎯᏗᎨ)',
        'zh-Hans-CN' => 'ᏓᎶᏂᎨ (ᎠᎯᏗᎨ, ᏓᎶᏂᎨᏍᏛ)',
        'zh-Hans-HK' => 'ᏓᎶᏂᎨ (ᎠᎯᏗᎨ, ᎰᏂᎩ ᎪᏂᎩ ᎤᏓᏤᎵᏓ ᏧᏂᎸᏫᏍᏓᏁᏗ ᎢᎬᎾᏕᎾ ᏓᎶᏂᎨᏍᏛ)',
        'zh-Hans-MO' => 'ᏓᎶᏂᎨ (ᎠᎯᏗᎨ, ᎹᎧᎣ [ᎤᏓᏤᎵᏓ ᏧᏂᎸᏫᏍᏓᏁᏗ ᎢᎬᎾᏕᎾ] ᏣᎢ)',
        'zh-Hans-SG' => 'ᏓᎶᏂᎨ (ᎠᎯᏗᎨ, ᏏᏂᎦᏉᎵ)',
        'zh-Hant' => 'ᏓᎶᏂᎨ (ᎤᏦᏍᏗ)',
        'zh-Hant-HK' => 'ᏓᎶᏂᎨ (ᎤᏦᏍᏗ, ᎰᏂᎩ ᎪᏂᎩ ᎤᏓᏤᎵᏓ ᏧᏂᎸᏫᏍᏓᏁᏗ ᎢᎬᎾᏕᎾ ᏓᎶᏂᎨᏍᏛ)',
        'zh-Hant-MO' => 'ᏓᎶᏂᎨ (ᎤᏦᏍᏗ, ᎹᎧᎣ [ᎤᏓᏤᎵᏓ ᏧᏂᎸᏫᏍᏓᏁᏗ ᎢᎬᎾᏕᎾ] ᏣᎢ)',
        'zh-Hant-TW' => 'ᏓᎶᏂᎨ (ᎤᏦᏍᏗ, ᏔᎢᏩᏂ)',
        'zu' => 'ᏑᎷ',
        'zu-ZA' => 'ᏑᎷ (ᏧᎦᎾᏮ ᎬᎿᎨᏍᏛ)',
    ],
];
