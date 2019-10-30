<?php

return [
    'dateTimeFormats' => [
        'short' => [
            'date' => 'dd/MM/y',
            'time' => 'HH:mm',
            'datetime' => 'dd/MM/y HH:mm',
        ],
        'medium' => [
            'date' => 'dd MMM y',
            'time' => 'HH:mm:ss',
            'datetime' => 'dd MMM y HH:mm:ss',
        ],
        'long' => [
            'date' => 'd \'ta\'’ MMMM y',
            'time' => 'HH:mm:ss z',
            'datetime' => 'd \'ta\'’ MMMM y HH:mm:ss z',
        ],
        'full' => [
            'date' => 'EEEE, d \'ta\'’ MMMM y',
            'time' => 'HH:mm:ss zzzz',
            'datetime' => 'EEEE, d \'ta\'’ MMMM y HH:mm:ss zzzz',
        ],
    ],
    'numberPatterns' => [
        'decimal' => '#,##0.###',
        'currency' => '¤#,##0.00',
        'percent' => '#,##0%',
        'scientific' => '#E0',
    ],
    'amName' => 'AM',
    'pmName' => 'PM',
    'textAttributes' => [
        'positivePrefix' => '',
        'positiveSuffix' => '',
        'negativePrefix' => '-',
        'negativeSuffix' => '',
        'paddingCharacter' => ' ',
        'currencyCode' => 'XXX',
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
        'currency' => '¤',
        'intlCurrency' => '¤¤',
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
        'USD' => 'US$',
        'VND' => '₫',
        'XAF' => 'FCFA ',
        'XCD' => 'EC$',
        'XOF' => 'CFA ',
        'XPF' => 'CFPF ',
    ],
    'standAloneMonthNames' => [
        'abbreviated' => [
            'Jn',
            'Fr',
            'Mz',
            'Ap',
            'Mj',
            'Ġn',
            'Lj',
            'Aw',
            'St',
            'Ob',
            'Nv',
            'Dċ',
        ],
        'medium' => [
            'Jan',
            'Fra',
            'Mar',
            'Apr',
            'Mej',
            'Ġun',
            'Lul',
            'Aww',
            'Set',
            'Ott',
            'Nov',
            'Diċ',
        ],
        'full' => [
            'Jannar',
            'Frar',
            'Marzu',
            'April',
            'Mejju',
            'Ġunju',
            'Lulju',
            'Awwissu',
            'Settembru',
            'Ottubru',
            'Novembru',
            'Diċembru',
        ],
    ],
    'monthNames' => [
        'abbreviated' => [
            'J',
            'F',
            'M',
            'A',
            'M',
            'Ġ',
            'L',
            'A',
            'S',
            'O',
            'N',
            'D',
        ],
        'medium' => [
            'Jan',
            'Fra',
            'Mar',
            'Apr',
            'Mej',
            'Ġun',
            'Lul',
            'Aww',
            'Set',
            'Ott',
            'Nov',
            'Diċ',
        ],
        'full' => [
            'Jannar',
            'Frar',
            'Marzu',
            'April',
            'Mejju',
            'Ġunju',
            'Lulju',
            'Awwissu',
            'Settembru',
            'Ottubru',
            'Novembru',
            'Diċembru',
        ],
    ],
    'standAloneWeekDayNames' => [
        'abbreviated' => [
            'Ħd',
            'Tn',
            'Tl',
            'Er',
            'Ħm',
            'Ġm',
            'Sb',
        ],
        'short' => [
            'Ħad',
            'Tne',
            'Tli',
            'Erb',
            'Ħam',
            'Ġim',
            'Sib',
        ],
        'medium' => [
            'Ħad',
            'Tne',
            'Tli',
            'Erb',
            'Ħam',
            'Ġim',
            'Sib',
        ],
        'full' => [
            'Il-Ħadd',
            'It-Tnejn',
            'It-Tlieta',
            'L-Erbgħa',
            'Il-Ħamis',
            'Il-Ġimgħa',
            'Is-Sibt',
        ],
    ],
    'weekDayNames' => [
        'abbreviated' => [
            'Ħd',
            'T',
            'Tl',
            'Er',
            'Ħm',
            'Ġm',
            'Sb',
        ],
        'short' => [
            'Ħad',
            'Tne',
            'Tli',
            'Erb',
            'Ħam',
            'Ġim',
            'Sib',
        ],
        'medium' => [
            'Ħad',
            'Tne',
            'Tli',
            'Erb',
            'Ħam',
            'Ġim',
            'Sib',
        ],
        'full' => [
            'Il-Ħadd',
            'It-Tnejn',
            'It-Tlieta',
            'L-Erbgħa',
            'Il-Ħamis',
            'Il-Ġimgħa',
            'Is-Sibt',
        ],
    ],
    'localeDisplayNames' => [
        'af' => 'Afrikans',
        'af-NA' => 'Afrikans (in-Namibja)',
        'af-ZA' => 'Afrikans (l-Afrika t’Isfel)',
        'agq' => 'Aghem',
        'agq-CM' => 'Aghem (il-Kamerun)',
        'ak' => 'Akan',
        'ak-GH' => 'Akan (il-Ghana)',
        'am' => 'Amhariku',
        'am-ET' => 'Amhariku (l-Etjopja)',
        'ar' => 'Għarbi',
        'ar-001' => 'Għarbi (Dinja)',
        'ar-AE' => 'Għarbi (l-Emirati Għarab Magħquda)',
        'ar-BH' => 'Għarbi (il-Bahrain)',
        'ar-DJ' => 'Għarbi (il-Djibouti)',
        'ar-DZ' => 'Għarbi (l-Alġerija)',
        'ar-EG' => 'Għarbi (l-Eġittu)',
        'ar-EH' => 'Għarbi (is-Saħara tal-Punent)',
        'ar-ER' => 'Għarbi (l-Eritrea)',
        'ar-IL' => 'Għarbi (Iżrael)',
        'ar-IQ' => 'Għarbi (l-Iraq)',
        'ar-JO' => 'Għarbi (il-Ġordan)',
        'ar-KM' => 'Għarbi (Comoros)',
        'ar-KW' => 'Għarbi (il-Kuwajt)',
        'ar-LB' => 'Għarbi (il-Libanu)',
        'ar-LY' => 'Għarbi (il-Libja)',
        'ar-MA' => 'Għarbi (il-Marokk)',
        'ar-MR' => 'Għarbi (il-Mauritania)',
        'ar-OM' => 'Għarbi (l-Oman)',
        'ar-PS' => 'Għarbi (it-Territorji Palestinjani)',
        'ar-QA' => 'Għarbi (il-Qatar)',
        'ar-SA' => 'Għarbi (l-Arabia Sawdija)',
        'ar-SD' => 'Għarbi (is-Sudan)',
        'ar-SO' => 'Għarbi (is-Somalja)',
        'ar-SS' => 'Għarbi (is-Sudan t’Isfel)',
        'ar-SY' => 'Għarbi (is-Sirja)',
        'ar-TD' => 'Għarbi (iċ-Chad)',
        'ar-TN' => 'Għarbi (it-Tuneżija)',
        'ar-YE' => 'Għarbi (il-Jemen)',
        'as' => 'Assamiż',
        'as-IN' => 'Assamiż (l-Indja)',
        'asa' => 'Asu',
        'asa-TZ' => 'Asu (it-Tanzanija)',
        'ast' => 'Asturian',
        'ast-ES' => 'Asturian (Spanja)',
        'az' => 'Ażerbajġani',
        'az-Cyrl' => 'Ażerbajġani (Ċirilliku)',
        'az-Cyrl-AZ' => 'Ażerbajġani (Ċirilliku, l-Ażerbajġan)',
        'az-Latn' => 'Ażerbajġani (Latin)',
        'az-Latn-AZ' => 'Ażerbajġani (Latin, l-Ażerbajġan)',
        'bas' => 'Basa',
        'bas-CM' => 'Basa (il-Kamerun)',
        'be' => 'Belarussu',
        'be-BY' => 'Belarussu (il-Belarussja)',
        'bem' => 'Bemba',
        'bem-ZM' => 'Bemba (iż-Żambja)',
        'bez' => 'Bena',
        'bez-TZ' => 'Bena (it-Tanzanija)',
        'bg' => 'Bulgaru',
        'bg-BG' => 'Bulgaru (il-Bulgarija)',
        'bm' => 'Bambara',
        'bm-ML' => 'Bambara (il-Mali)',
        'bn' => 'Bengali',
        'bn-BD' => 'Bengali (il-Bangladesh)',
        'bn-IN' => 'Bengali (l-Indja)',
        'bo' => 'Tibetjan',
        'bo-CN' => 'Tibetjan (iċ-Ċina)',
        'bo-IN' => 'Tibetjan (l-Indja)',
        'br' => 'Breton',
        'br-FR' => 'Breton (Franza)',
        'brx' => 'Bodo',
        'brx-IN' => 'Bodo (l-Indja)',
        'bs' => 'Bożnijaku',
        'bs-Cyrl' => 'Bożnijaku (Ċirilliku)',
        'bs-Cyrl-BA' => 'Bożnijaku (Ċirilliku, il-Bożnija-Ħerzegovina)',
        'bs-Latn' => 'Bożnijaku (Latin)',
        'bs-Latn-BA' => 'Bożnijaku (Latin, il-Bożnija-Ħerzegovina)',
        'ca' => 'Katalan',
        'ca-AD' => 'Katalan (Andorra)',
        'ca-ES' => 'Katalan (Spanja)',
        'ca-FR' => 'Katalan (Franza)',
        'ca-IT' => 'Katalan (l-Italja)',
        'ccp' => 'ccp',
        'ccp-BD' => 'ccp (il-Bangladesh)',
        'ccp-IN' => 'ccp (l-Indja)',
        'ce' => 'Chechen',
        'ce-RU' => 'Chechen (ir-Russja)',
        'ceb' => 'Cebuano',
        'ceb-PH' => 'Cebuano (il-Filippini)',
        'cgg' => 'Chiga',
        'cgg-UG' => 'Chiga (l-Uganda)',
        'chr' => 'Cherokee',
        'chr-US' => 'Cherokee (l-Istati Uniti)',
        'ckb' => 'Kurd Ċentrali',
        'ckb-IQ' => 'Kurd Ċentrali (l-Iraq)',
        'ckb-IR' => 'Kurd Ċentrali (l-Iran)',
        'cs' => 'Ċek',
        'cs-CZ' => 'Ċek (ir-Repubblika Ċeka)',
        'cy' => 'Welsh',
        'cy-GB' => 'Welsh (ir-Renju Unit)',
        'da' => 'Daniż',
        'da-DK' => 'Daniż (id-Danimarka)',
        'da-GL' => 'Daniż (Greenland)',
        'dav' => 'Taita',
        'dav-KE' => 'Taita (il-Kenja)',
        'de' => 'Ġermaniż',
        'de-AT' => 'Ġermaniż (l-Awstrija)',
        'de-BE' => 'Ġermaniż (il-Belġju)',
        'de-CH' => 'Ġermaniż (l-Iżvizzera)',
        'de-DE' => 'Ġermaniż (il-Ġermanja)',
        'de-IT' => 'Ġermaniż (l-Italja)',
        'de-LI' => 'Ġermaniż (il-Liechtenstein)',
        'de-LU' => 'Ġermaniż (il-Lussemburgu)',
        'dje' => 'Zarma',
        'dje-NE' => 'Zarma (in-Niġer)',
        'dsb' => 'Sorbjan Komuni',
        'dsb-DE' => 'Sorbjan Komuni (il-Ġermanja)',
        'dua' => 'Dwala',
        'dua-CM' => 'Dwala (il-Kamerun)',
        'dyo' => 'Jola-Fonyi',
        'dyo-SN' => 'Jola-Fonyi (is-Senegal)',
        'dz' => 'Dzongkha',
        'dz-BT' => 'Dzongkha (il-Bhutan)',
        'ebu' => 'Embu',
        'ebu-KE' => 'Embu (il-Kenja)',
        'ee' => 'Ewe',
        'ee-GH' => 'Ewe (il-Ghana)',
        'ee-TG' => 'Ewe (it-Togo)',
        'el' => 'Grieg',
        'el-CY' => 'Grieg (Ċipru)',
        'el-GR' => 'Grieg (il-Greċja)',
        'en' => 'Ingliż',
        'en-001' => 'Ingliż (Dinja)',
        'en-150' => 'Ingliż (Ewropa)',
        'en-AE' => 'Ingliż (l-Emirati Għarab Magħquda)',
        'en-AG' => 'Ingliż (Antigua u Barbuda)',
        'en-AI' => 'Ingliż (Anguilla)',
        'en-AS' => 'Ingliż (is-Samoa Amerikana)',
        'en-AT' => 'Ingliż (l-Awstrija)',
        'en-AU' => 'Ingliż (l-Awstralja)',
        'en-BB' => 'Ingliż (Barbados)',
        'en-BE' => 'Ingliż (il-Belġju)',
        'en-BI' => 'Ingliż (il-Burundi)',
        'en-BM' => 'Ingliż (Bermuda)',
        'en-BS' => 'Ingliż (il-Bahamas)',
        'en-BW' => 'Ingliż (il-Botswana)',
        'en-BZ' => 'Ingliż (il-Belize)',
        'en-CA' => 'Ingliż (il-Kanada)',
        'en-CC' => 'Ingliż (Gżejjer Cocos [Keeling])',
        'en-CH' => 'Ingliż (l-Iżvizzera)',
        'en-CK' => 'Ingliż (Gżejjer Cook)',
        'en-CM' => 'Ingliż (il-Kamerun)',
        'en-CX' => 'Ingliż (il-Gżira Christmas)',
        'en-CY' => 'Ingliż (Ċipru)',
        'en-DE' => 'Ingliż (il-Ġermanja)',
        'en-DG' => 'Ingliż (Diego Garcia)',
        'en-DK' => 'Ingliż (id-Danimarka)',
        'en-DM' => 'Ingliż (Dominica)',
        'en-ER' => 'Ingliż (l-Eritrea)',
        'en-FI' => 'Ingliż (il-Finlandja)',
        'en-FJ' => 'Ingliż (Fiġi)',
        'en-FK' => 'Ingliż (il-Gżejjer Falkland)',
        'en-FM' => 'Ingliż (Mikroneżja)',
        'en-GB' => 'Ingliż (ir-Renju Unit)',
        'en-GD' => 'Ingliż (Grenada)',
        'en-GG' => 'Ingliż (Guernsey)',
        'en-GH' => 'Ingliż (il-Ghana)',
        'en-GI' => 'Ingliż (Ġibiltà)',
        'en-GM' => 'Ingliż (il-Gambja)',
        'en-GU' => 'Ingliż (Guam)',
        'en-GY' => 'Ingliż (il-Guyana)',
        'en-HK' => 'Ingliż (ir-Reġjun Amministrattiv Speċjali ta’ Hong Kong tar-Repubblika tal-Poplu taċ-Ċina)',
        'en-IE' => 'Ingliż (l-Irlanda)',
        'en-IL' => 'Ingliż (Iżrael)',
        'en-IM' => 'Ingliż (Isle of Man)',
        'en-IN' => 'Ingliż (l-Indja)',
        'en-IO' => 'Ingliż (Territorju Brittaniku tal-Oċean Indjan)',
        'en-JE' => 'Ingliż (Jersey)',
        'en-JM' => 'Ingliż (il-Ġamajka)',
        'en-KE' => 'Ingliż (il-Kenja)',
        'en-KI' => 'Ingliż (Kiribati)',
        'en-KN' => 'Ingliż (Saint Kitts u Nevis)',
        'en-KY' => 'Ingliż (il-Gżejjer Cayman)',
        'en-LC' => 'Ingliż (Saint Lucia)',
        'en-LR' => 'Ingliż (il-Liberja)',
        'en-LS' => 'Ingliż (il-Lesoto)',
        'en-MG' => 'Ingliż (Madagascar)',
        'en-MH' => 'Ingliż (Gżejjer Marshall)',
        'en-MO' => 'Ingliż (ir-Reġjun Amministrattiv Speċjali tal-Macao tar-Repubblika tal-Poplu taċ-Ċina)',
        'en-MP' => 'Ingliż (Ġżejjer Mariana tat-Tramuntana)',
        'en-MS' => 'Ingliż (Montserrat)',
        'en-MT' => 'Ingliż (Malta)',
        'en-MU' => 'Ingliż (Mauritius)',
        'en-MW' => 'Ingliż (il-Malawi)',
        'en-MY' => 'Ingliż (il-Malasja)',
        'en-NA' => 'Ingliż (in-Namibja)',
        'en-NF' => 'Ingliż (Gżira Norfolk)',
        'en-NG' => 'Ingliż (in-Niġerja)',
        'en-NL' => 'Ingliż (in-Netherlands)',
        'en-NR' => 'Ingliż (Nauru)',
        'en-NU' => 'Ingliż (Niue)',
        'en-NZ' => 'Ingliż (New Zealand)',
        'en-PG' => 'Ingliż (Papua New Guinea)',
        'en-PH' => 'Ingliż (il-Filippini)',
        'en-PK' => 'Ingliż (il-Pakistan)',
        'en-PN' => 'Ingliż (Gżejjer Pitcairn)',
        'en-PR' => 'Ingliż (Puerto Rico)',
        'en-PW' => 'Ingliż (Palau)',
        'en-RW' => 'Ingliż (ir-Rwanda)',
        'en-SB' => 'Ingliż (il-Gżejjer Solomon)',
        'en-SC' => 'Ingliż (is-Seychelles)',
        'en-SD' => 'Ingliż (is-Sudan)',
        'en-SE' => 'Ingliż (l-Iżvezja)',
        'en-SG' => 'Ingliż (Singapore)',
        'en-SH' => 'Ingliż (Saint Helena)',
        'en-SI' => 'Ingliż (is-Slovenja)',
        'en-SL' => 'Ingliż (Sierra Leone)',
        'en-SS' => 'Ingliż (is-Sudan t’Isfel)',
        'en-SX' => 'Ingliż (Sint Maarten)',
        'en-SZ' => 'Ingliż (is-Swaziland)',
        'en-TC' => 'Ingliż (il-Gżejjer Turks u Caicos)',
        'en-TK' => 'Ingliż (it-Tokelau)',
        'en-TO' => 'Ingliż (Tonga)',
        'en-TT' => 'Ingliż (Trinidad u Tobago)',
        'en-TV' => 'Ingliż (Tuvalu)',
        'en-TZ' => 'Ingliż (it-Tanzanija)',
        'en-UG' => 'Ingliż (l-Uganda)',
        'en-UM' => 'Ingliż (Il-Gżejjer Minuri Mbiegħda tal-Istati Uniti)',
        'en-US' => 'Ingliż (l-Istati Uniti)',
        'en-US-POSIX' => 'Ingliż (l-Istati Uniti, POSIX)',
        'en-VC' => 'Ingliż (Saint Vincent u l-Grenadini)',
        'en-VG' => 'Ingliż (il-Gżejjer Verġni Brittaniċi)',
        'en-VI' => 'Ingliż (il-Gżejjer Verġni tal-Istati Uniti)',
        'en-VU' => 'Ingliż (Vanuatu)',
        'en-WS' => 'Ingliż (Samoa)',
        'en-ZA' => 'Ingliż (l-Afrika t’Isfel)',
        'en-ZM' => 'Ingliż (iż-Żambja)',
        'en-ZW' => 'Ingliż (iż-Żimbabwe)',
        'eo' => 'Esperanto',
        'eo-001' => 'Esperanto (Dinja)',
        'es' => 'Spanjol',
        'es-419' => 'Spanjol (Amerika Latina)',
        'es-AR' => 'Spanjol (l-Arġentina)',
        'es-BO' => 'Spanjol (il-Bolivja)',
        'es-BR' => 'Spanjol (Il-Brażil)',
        'es-BZ' => 'Spanjol (il-Belize)',
        'es-CL' => 'Spanjol (iċ-Ċili)',
        'es-CO' => 'Spanjol (il-Kolombja)',
        'es-CR' => 'Spanjol (il-Costa Rica)',
        'es-CU' => 'Spanjol (Kuba)',
        'es-DO' => 'Spanjol (ir-Repubblika Dominicana)',
        'es-EA' => 'Spanjol (Ceuta u Melilla)',
        'es-EC' => 'Spanjol (l-Ekwador)',
        'es-ES' => 'Spanjol (Spanja)',
        'es-GQ' => 'Spanjol (il-Guinea Ekwatorjali)',
        'es-GT' => 'Spanjol (il-Gwatemala)',
        'es-HN' => 'Spanjol (il-Honduras)',
        'es-IC' => 'Spanjol (il-Gżejjer Canary)',
        'es-MX' => 'Spanjol (il-Messiku)',
        'es-NI' => 'Spanjol (in-Nikaragwa)',
        'es-PA' => 'Spanjol (il-Panama)',
        'es-PE' => 'Spanjol (il-Perù)',
        'es-PH' => 'Spanjol (il-Filippini)',
        'es-PR' => 'Spanjol (Puerto Rico)',
        'es-PY' => 'Spanjol (il-Paragwaj)',
        'es-SV' => 'Spanjol (El Salvador)',
        'es-US' => 'Spanjol (l-Istati Uniti)',
        'es-UY' => 'Spanjol (l-Urugwaj)',
        'es-VE' => 'Spanjol (il-Venezwela)',
        'et' => 'Estonjan',
        'et-EE' => 'Estonjan (l-Estonja)',
        'eu' => 'Bask',
        'eu-ES' => 'Bask (Spanja)',
        'ewo' => 'Ewondo',
        'ewo-CM' => 'Ewondo (il-Kamerun)',
        'fa' => 'Persjan',
        'fa-AF' => 'Persjan (l-Afganistan)',
        'fa-IR' => 'Persjan (l-Iran)',
        'ff' => 'Fulah',
        'ff-Latn' => 'Fulah (Latin)',
        'ff-Latn-BF' => 'Fulah (Latin, il-Burkina Faso)',
        'ff-Latn-CM' => 'Fulah (Latin, il-Kamerun)',
        'ff-Latn-GH' => 'Fulah (Latin, il-Ghana)',
        'ff-Latn-GM' => 'Fulah (Latin, il-Gambja)',
        'ff-Latn-GN' => 'Fulah (Latin, il-Guinea)',
        'ff-Latn-GW' => 'Fulah (Latin, il-Guinea-Bissau)',
        'ff-Latn-LR' => 'Fulah (Latin, il-Liberja)',
        'ff-Latn-MR' => 'Fulah (Latin, il-Mauritania)',
        'ff-Latn-NE' => 'Fulah (Latin, in-Niġer)',
        'ff-Latn-NG' => 'Fulah (Latin, in-Niġerja)',
        'ff-Latn-SL' => 'Fulah (Latin, Sierra Leone)',
        'ff-Latn-SN' => 'Fulah (Latin, is-Senegal)',
        'fi' => 'Finlandiż',
        'fi-FI' => 'Finlandiż (il-Finlandja)',
        'fil' => 'Filippin',
        'fil-PH' => 'Filippin (il-Filippini)',
        'fo' => 'Faroese',
        'fo-DK' => 'Faroese (id-Danimarka)',
        'fo-FO' => 'Faroese (il-Gżejjer Faeroe)',
        'fr' => 'Franċiż',
        'fr-BE' => 'Franċiż (il-Belġju)',
        'fr-BF' => 'Franċiż (il-Burkina Faso)',
        'fr-BI' => 'Franċiż (il-Burundi)',
        'fr-BJ' => 'Franċiż (il-Benin)',
        'fr-BL' => 'Franċiż (Saint Barthélemy)',
        'fr-CA' => 'Franċiż (il-Kanada)',
        'fr-CD' => 'Franċiż (ir-Repubblika Demokratika tal-Kongo)',
        'fr-CF' => 'Franċiż (ir-Repubblika Ċentru-Afrikana)',
        'fr-CG' => 'Franċiż (il-Kongo - Brazzaville)',
        'fr-CH' => 'Franċiż (l-Iżvizzera)',
        'fr-CI' => 'Franċiż (il-Kosta tal-Avorju)',
        'fr-CM' => 'Franċiż (il-Kamerun)',
        'fr-DJ' => 'Franċiż (il-Djibouti)',
        'fr-DZ' => 'Franċiż (l-Alġerija)',
        'fr-FR' => 'Franċiż (Franza)',
        'fr-GA' => 'Franċiż (il-Gabon)',
        'fr-GF' => 'Franċiż (il-Guyana Franċiża)',
        'fr-GN' => 'Franċiż (il-Guinea)',
        'fr-GP' => 'Franċiż (Guadeloupe)',
        'fr-GQ' => 'Franċiż (il-Guinea Ekwatorjali)',
        'fr-HT' => 'Franċiż (il-Haiti)',
        'fr-KM' => 'Franċiż (Comoros)',
        'fr-LU' => 'Franċiż (il-Lussemburgu)',
        'fr-MA' => 'Franċiż (il-Marokk)',
        'fr-MC' => 'Franċiż (Monaco)',
        'fr-MF' => 'Franċiż (Saint Martin)',
        'fr-MG' => 'Franċiż (Madagascar)',
        'fr-ML' => 'Franċiż (il-Mali)',
        'fr-MQ' => 'Franċiż (Martinique)',
        'fr-MR' => 'Franċiż (il-Mauritania)',
        'fr-MU' => 'Franċiż (Mauritius)',
        'fr-NC' => 'Franċiż (New Caledonia)',
        'fr-NE' => 'Franċiż (in-Niġer)',
        'fr-PF' => 'Franċiż (Polineżja Franċiża)',
        'fr-PM' => 'Franċiż (Saint Pierre u Miquelon)',
        'fr-RE' => 'Franċiż (Réunion)',
        'fr-RW' => 'Franċiż (ir-Rwanda)',
        'fr-SC' => 'Franċiż (is-Seychelles)',
        'fr-SN' => 'Franċiż (is-Senegal)',
        'fr-SY' => 'Franċiż (is-Sirja)',
        'fr-TD' => 'Franċiż (iċ-Chad)',
        'fr-TG' => 'Franċiż (it-Togo)',
        'fr-TN' => 'Franċiż (it-Tuneżija)',
        'fr-VU' => 'Franċiż (Vanuatu)',
        'fr-WF' => 'Franċiż (Wallis u Futuna)',
        'fr-YT' => 'Franċiż (Mayotte)',
        'fur' => 'Frijuljan',
        'fur-IT' => 'Frijuljan (l-Italja)',
        'fy' => 'Frisian tal-Punent',
        'fy-NL' => 'Frisian tal-Punent (in-Netherlands)',
        'ga' => 'Irlandiż',
        'ga-IE' => 'Irlandiż (l-Irlanda)',
        'gd' => 'Galliku Skoċċiż',
        'gd-GB' => 'Galliku Skoċċiż (ir-Renju Unit)',
        'gl' => 'Galiċjan',
        'gl-ES' => 'Galiċjan (Spanja)',
        'gsw' => 'Ġermaniż tal-Iżvizzera',
        'gsw-CH' => 'Ġermaniż tal-Iżvizzera (l-Iżvizzera)',
        'gsw-FR' => 'Ġermaniż tal-Iżvizzera (Franza)',
        'gsw-LI' => 'Ġermaniż tal-Iżvizzera (il-Liechtenstein)',
        'gu' => 'Gujarati',
        'gu-IN' => 'Gujarati (l-Indja)',
        'guz' => 'Gusii',
        'guz-KE' => 'Gusii (il-Kenja)',
        'gv' => 'Manx',
        'gv-IM' => 'Manx (Isle of Man)',
        'ha' => 'Hausa',
        'ha-GH' => 'Hausa (il-Ghana)',
        'ha-NE' => 'Hausa (in-Niġer)',
        'ha-NG' => 'Hausa (in-Niġerja)',
        'haw' => 'Ħawajjan',
        'haw-US' => 'Ħawajjan (l-Istati Uniti)',
        'he' => 'Ebrajk',
        'he-IL' => 'Ebrajk (Iżrael)',
        'hi' => 'Hindi',
        'hi-IN' => 'Hindi (l-Indja)',
        'hr' => 'Kroat',
        'hr-BA' => 'Kroat (il-Bożnija-Ħerzegovina)',
        'hr-HR' => 'Kroat (il-Kroazja)',
        'hsb' => 'Sorbjan ta’ Fuq',
        'hsb-DE' => 'Sorbjan ta’ Fuq (il-Ġermanja)',
        'hu' => 'Ungeriż',
        'hu-HU' => 'Ungeriż (l-Ungerija)',
        'hy' => 'Armen',
        'hy-AM' => 'Armen (l-Armenja)',
        'ia' => 'Interlingua',
        'ia-001' => 'Interlingua (Dinja)',
        'id' => 'Indoneżjan',
        'id-ID' => 'Indoneżjan (l-Indoneżja)',
        'ig' => 'Igbo',
        'ig-NG' => 'Igbo (in-Niġerja)',
        'ii' => 'Sichuan Yi',
        'ii-CN' => 'Sichuan Yi (iċ-Ċina)',
        'is' => 'Iżlandiż',
        'is-IS' => 'Iżlandiż (l-iżlanda)',
        'it' => 'Taljan',
        'it-CH' => 'Taljan (l-Iżvizzera)',
        'it-IT' => 'Taljan (l-Italja)',
        'it-SM' => 'Taljan (San Marino)',
        'it-VA' => 'Taljan (l-Istat tal-Belt tal-Vatikan)',
        'ja' => 'Ġappuniż',
        'ja-JP' => 'Ġappuniż (il-Ġappun)',
        'jgo' => 'Ngomba',
        'jgo-CM' => 'Ngomba (il-Kamerun)',
        'jmc' => 'Machame',
        'jmc-TZ' => 'Machame (it-Tanzanija)',
        'jv' => 'Ġavaniż',
        'jv-ID' => 'Ġavaniż (l-Indoneżja)',
        'ka' => 'Ġorġjan',
        'ka-GE' => 'Ġorġjan (il-Georgia)',
        'kab' => 'Kabuljan',
        'kab-DZ' => 'Kabuljan (l-Alġerija)',
        'kam' => 'Kamba',
        'kam-KE' => 'Kamba (il-Kenja)',
        'kde' => 'Makonde',
        'kde-TZ' => 'Makonde (it-Tanzanija)',
        'kea' => 'Cape Verdjan',
        'kea-CV' => 'Cape Verdjan (Cape Verde)',
        'khq' => 'Koyra Chiini',
        'khq-ML' => 'Koyra Chiini (il-Mali)',
        'ki' => 'Kikuju',
        'ki-KE' => 'Kikuju (il-Kenja)',
        'kk' => 'Każak',
        'kk-KZ' => 'Każak (il-Każakistan)',
        'kkj' => 'Kako',
        'kkj-CM' => 'Kako (il-Kamerun)',
        'kl' => 'Kalallisut',
        'kl-GL' => 'Kalallisut (Greenland)',
        'kln' => 'Kalenjin',
        'kln-KE' => 'Kalenjin (il-Kenja)',
        'km' => 'Khmer',
        'km-KH' => 'Khmer (il-Kambodja)',
        'kn' => 'Kannada',
        'kn-IN' => 'Kannada (l-Indja)',
        'ko' => 'Korean',
        'ko-KP' => 'Korean (il-Korea ta’ Fuq)',
        'ko-KR' => 'Korean (il-Korea t’Isfel)',
        'kok' => 'Konkani',
        'kok-IN' => 'Konkani (l-Indja)',
        'ks' => 'Kashmiri',
        'ks-IN' => 'Kashmiri (l-Indja)',
        'ksb' => 'Shambala',
        'ksb-TZ' => 'Shambala (it-Tanzanija)',
        'ksf' => 'Bafia',
        'ksf-CM' => 'Bafia (il-Kamerun)',
        'ksh' => 'Kolonjan',
        'ksh-DE' => 'Kolonjan (il-Ġermanja)',
        'ku' => 'Kurd',
        'ku-TR' => 'Kurd (it-Turkija)',
        'kw' => 'Korniku',
        'kw-GB' => 'Korniku (ir-Renju Unit)',
        'ky' => 'Kirgiż',
        'ky-KG' => 'Kirgiż (il-Kirgiżistan)',
        'lag' => 'Langi',
        'lag-TZ' => 'Langi (it-Tanzanija)',
        'lb' => 'Lussemburgiż',
        'lb-LU' => 'Lussemburgiż (il-Lussemburgu)',
        'lg' => 'Ganda',
        'lg-UG' => 'Ganda (l-Uganda)',
        'lkt' => 'Lakota',
        'lkt-US' => 'Lakota (l-Istati Uniti)',
        'ln' => 'Lingaljan',
        'ln-AO' => 'Lingaljan (l-Angola)',
        'ln-CD' => 'Lingaljan (ir-Repubblika Demokratika tal-Kongo)',
        'ln-CF' => 'Lingaljan (ir-Repubblika Ċentru-Afrikana)',
        'ln-CG' => 'Lingaljan (il-Kongo - Brazzaville)',
        'lo' => 'Laosjan',
        'lo-LA' => 'Laosjan (il-Laos)',
        'lrc' => 'Luri tat-Tramuntana',
        'lrc-IQ' => 'Luri tat-Tramuntana (l-Iraq)',
        'lrc-IR' => 'Luri tat-Tramuntana (l-Iran)',
        'lt' => 'Litwan',
        'lt-LT' => 'Litwan (il-Litwanja)',
        'lu' => 'Luba-Katanga',
        'lu-CD' => 'Luba-Katanga (ir-Repubblika Demokratika tal-Kongo)',
        'luo' => 'Luo',
        'luo-KE' => 'Luo (il-Kenja)',
        'luy' => 'Luyia',
        'luy-KE' => 'Luyia (il-Kenja)',
        'lv' => 'Latvjan',
        'lv-LV' => 'Latvjan (il-Latvja)',
        'mas' => 'Masai',
        'mas-KE' => 'Masai (il-Kenja)',
        'mas-TZ' => 'Masai (it-Tanzanija)',
        'mer' => 'Meru',
        'mer-KE' => 'Meru (il-Kenja)',
        'mfe' => 'Morisyen',
        'mfe-MU' => 'Morisyen (Mauritius)',
        'mg' => 'Malagasy',
        'mg-MG' => 'Malagasy (Madagascar)',
        'mgh' => 'Makhuwa-Meetto',
        'mgh-MZ' => 'Makhuwa-Meetto (il-Mozambique)',
        'mgo' => 'Metà',
        'mgo-CM' => 'Metà (il-Kamerun)',
        'mi' => 'Maori',
        'mi-NZ' => 'Maori (New Zealand)',
        'mk' => 'Maċedonjan',
        'mk-MK' => 'Maċedonjan (l-Eks-Repubblika Jugoslava tal-Maċedonia)',
        'ml' => 'Malayalam',
        'ml-IN' => 'Malayalam (l-Indja)',
        'mn' => 'Mongoljan',
        'mn-MN' => 'Mongoljan (il-Mongolja)',
        'mr' => 'Marathi',
        'mr-IN' => 'Marathi (l-Indja)',
        'ms' => 'Malay',
        'ms-BN' => 'Malay (il-Brunei)',
        'ms-MY' => 'Malay (il-Malasja)',
        'ms-SG' => 'Malay (Singapore)',
        'mt' => 'Malti',
        'mt-MT' => 'Malti (Malta)',
        'mua' => 'Mundang',
        'mua-CM' => 'Mundang (il-Kamerun)',
        'my' => 'Burmiż',
        'my-MM' => 'Burmiż (il-Myanmar/Burma)',
        'mzn' => 'Mazanderani',
        'mzn-IR' => 'Mazanderani (l-Iran)',
        'naq' => 'Nama',
        'naq-NA' => 'Nama (in-Namibja)',
        'nb' => 'Bokmal Norveġiż',
        'nb-NO' => 'Bokmal Norveġiż (in-Norveġja)',
        'nb-SJ' => 'Bokmal Norveġiż (Svalbard u Jan Mayen)',
        'nd' => 'Ndebeli tat-Tramuntana',
        'nd-ZW' => 'Ndebeli tat-Tramuntana (iż-Żimbabwe)',
        'nds' => 'Ġermaniż Komuni',
        'nds-DE' => 'Ġermaniż Komuni (il-Ġermanja)',
        'nds-NL' => 'Ġermaniż Komuni (in-Netherlands)',
        'ne' => 'Nepaliż',
        'ne-IN' => 'Nepaliż (l-Indja)',
        'ne-NP' => 'Nepaliż (in-Nepal)',
        'nl' => 'Olandiż',
        'nl-AW' => 'Olandiż (Aruba)',
        'nl-BE' => 'Olandiż (il-Belġju)',
        'nl-BQ' => 'Olandiż (in-Netherlands tal-Karibew)',
        'nl-CW' => 'Olandiż (Curaçao)',
        'nl-NL' => 'Olandiż (in-Netherlands)',
        'nl-SR' => 'Olandiż (is-Suriname)',
        'nl-SX' => 'Olandiż (Sint Maarten)',
        'nmg' => 'Kwasio',
        'nmg-CM' => 'Kwasio (il-Kamerun)',
        'nn' => 'Ninorsk Norveġiż',
        'nn-NO' => 'Ninorsk Norveġiż (in-Norveġja)',
        'nnh' => 'Ngiemboon',
        'nnh-CM' => 'Ngiemboon (il-Kamerun)',
        'nus' => 'Nuer',
        'nus-SS' => 'Nuer (is-Sudan t’Isfel)',
        'nyn' => 'Nyankole',
        'nyn-UG' => 'Nyankole (l-Uganda)',
        'om' => 'Oromo',
        'om-ET' => 'Oromo (l-Etjopja)',
        'om-KE' => 'Oromo (il-Kenja)',
        'or' => 'Odia',
        'or-IN' => 'Odia (l-Indja)',
        'os' => 'Ossettiku',
        'os-GE' => 'Ossettiku (il-Georgia)',
        'os-RU' => 'Ossettiku (ir-Russja)',
        'pa' => 'Punjabi',
        'pa-Arab' => 'Punjabi (Għarbi)',
        'pa-Arab-PK' => 'Punjabi (Għarbi, il-Pakistan)',
        'pa-Guru' => 'Punjabi (Guru)',
        'pa-Guru-IN' => 'Punjabi (Guru, l-Indja)',
        'pl' => 'Pollakk',
        'pl-PL' => 'Pollakk (il-Polonja)',
        'ps' => 'Pashto',
        'ps-AF' => 'Pashto (l-Afganistan)',
        'ps-PK' => 'Pashto (il-Pakistan)',
        'pt' => 'Portugiż',
        'pt-AO' => 'Portugiż (l-Angola)',
        'pt-BR' => 'Portugiż (Il-Brażil)',
        'pt-CH' => 'Portugiż (l-Iżvizzera)',
        'pt-CV' => 'Portugiż (Cape Verde)',
        'pt-GQ' => 'Portugiż (il-Guinea Ekwatorjali)',
        'pt-GW' => 'Portugiż (il-Guinea-Bissau)',
        'pt-LU' => 'Portugiż (il-Lussemburgu)',
        'pt-MO' => 'Portugiż (ir-Reġjun Amministrattiv Speċjali tal-Macao tar-Repubblika tal-Poplu taċ-Ċina)',
        'pt-MZ' => 'Portugiż (il-Mozambique)',
        'pt-PT' => 'Portugiż (il-Portugall)',
        'pt-ST' => 'Portugiż (São Tomé u Príncipe)',
        'pt-TL' => 'Portugiż (Timor Leste)',
        'qu' => 'Quechua',
        'qu-BO' => 'Quechua (il-Bolivja)',
        'qu-EC' => 'Quechua (l-Ekwador)',
        'qu-PE' => 'Quechua (il-Perù)',
        'rm' => 'Romanz',
        'rm-CH' => 'Romanz (l-Iżvizzera)',
        'rn' => 'Rundi',
        'rn-BI' => 'Rundi (il-Burundi)',
        'ro' => 'Rumen',
        'ro-MD' => 'Rumen (il-Moldova)',
        'ro-RO' => 'Rumen (ir-Rumanija)',
        'rof' => 'Rombo',
        'rof-TZ' => 'Rombo (it-Tanzanija)',
        'ru' => 'Russu',
        'ru-BY' => 'Russu (il-Belarussja)',
        'ru-KG' => 'Russu (il-Kirgiżistan)',
        'ru-KZ' => 'Russu (il-Każakistan)',
        'ru-MD' => 'Russu (il-Moldova)',
        'ru-RU' => 'Russu (ir-Russja)',
        'ru-UA' => 'Russu (l-Ukrajna)',
        'rw' => 'Kinjarwanda',
        'rw-RW' => 'Kinjarwanda (ir-Rwanda)',
        'rwk' => 'Rwa',
        'rwk-TZ' => 'Rwa (it-Tanzanija)',
        'sah' => 'Sakha',
        'sah-RU' => 'Sakha (ir-Russja)',
        'saq' => 'Samburu',
        'saq-KE' => 'Samburu (il-Kenja)',
        'sbp' => 'Sangu',
        'sbp-TZ' => 'Sangu (it-Tanzanija)',
        'sd' => 'Sindhi',
        'sd-PK' => 'Sindhi (il-Pakistan)',
        'se' => 'Sami tat-Tramuntana',
        'se-FI' => 'Sami tat-Tramuntana (il-Finlandja)',
        'se-NO' => 'Sami tat-Tramuntana (in-Norveġja)',
        'se-SE' => 'Sami tat-Tramuntana (l-Iżvezja)',
        'seh' => 'Sena',
        'seh-MZ' => 'Sena (il-Mozambique)',
        'ses' => 'Koyraboro Senni',
        'ses-ML' => 'Koyraboro Senni (il-Mali)',
        'sg' => 'Sango',
        'sg-CF' => 'Sango (ir-Repubblika Ċentru-Afrikana)',
        'shi' => 'Tachelhit',
        'shi-Latn' => 'Tachelhit (Latin)',
        'shi-Latn-MA' => 'Tachelhit (Latin, il-Marokk)',
        'shi-Tfng' => 'Tachelhit (Tfng)',
        'shi-Tfng-MA' => 'Tachelhit (Tfng, il-Marokk)',
        'si' => 'Sinhala',
        'si-LK' => 'Sinhala (is-Sri Lanka)',
        'sk' => 'Slovakk',
        'sk-SK' => 'Slovakk (is-Slovakkja)',
        'sl' => 'Sloven',
        'sl-SI' => 'Sloven (is-Slovenja)',
        'smn' => 'Inari Sami',
        'smn-FI' => 'Inari Sami (il-Finlandja)',
        'sn' => 'Shona',
        'sn-ZW' => 'Shona (iż-Żimbabwe)',
        'so' => 'Somali',
        'so-DJ' => 'Somali (il-Djibouti)',
        'so-ET' => 'Somali (l-Etjopja)',
        'so-KE' => 'Somali (il-Kenja)',
        'so-SO' => 'Somali (is-Somalja)',
        'sq' => 'Albaniż',
        'sq-AL' => 'Albaniż (l-Albanija)',
        'sq-MK' => 'Albaniż (l-Eks-Repubblika Jugoslava tal-Maċedonia)',
        'sq-XK' => 'Albaniż (il-Kosovo)',
        'sr' => 'Serb',
        'sr-Cyrl' => 'Serb (Ċirilliku)',
        'sr-Cyrl-BA' => 'Serb (Ċirilliku, il-Bożnija-Ħerzegovina)',
        'sr-Cyrl-ME' => 'Serb (Ċirilliku, il-Montenegro)',
        'sr-Cyrl-RS' => 'Serb (Ċirilliku, is-Serbja)',
        'sr-Cyrl-XK' => 'Serb (Ċirilliku, il-Kosovo)',
        'sr-Latn' => 'Serb (Latin)',
        'sr-Latn-BA' => 'Serb (Latin, il-Bożnija-Ħerzegovina)',
        'sr-Latn-ME' => 'Serb (Latin, il-Montenegro)',
        'sr-Latn-RS' => 'Serb (Latin, is-Serbja)',
        'sr-Latn-XK' => 'Serb (Latin, il-Kosovo)',
        'sv' => 'Żvediż',
        'sv-AX' => 'Żvediż (il-Gżejjer Aland)',
        'sv-FI' => 'Żvediż (il-Finlandja)',
        'sv-SE' => 'Żvediż (l-Iżvezja)',
        'sw' => 'Swahili',
        'sw-CD' => 'Swahili (ir-Repubblika Demokratika tal-Kongo)',
        'sw-KE' => 'Swahili (il-Kenja)',
        'sw-TZ' => 'Swahili (it-Tanzanija)',
        'sw-UG' => 'Swahili (l-Uganda)',
        'ta' => 'Tamil',
        'ta-IN' => 'Tamil (l-Indja)',
        'ta-LK' => 'Tamil (is-Sri Lanka)',
        'ta-MY' => 'Tamil (il-Malasja)',
        'ta-SG' => 'Tamil (Singapore)',
        'te' => 'Telugu',
        'te-IN' => 'Telugu (l-Indja)',
        'teo' => 'Teso',
        'teo-KE' => 'Teso (il-Kenja)',
        'teo-UG' => 'Teso (l-Uganda)',
        'tg' => 'Tajik',
        'tg-TJ' => 'Tajik (it-Taġikistan)',
        'th' => 'Tajlandiż',
        'th-TH' => 'Tajlandiż (it-Tajlandja)',
        'ti' => 'Tigrinya',
        'ti-ER' => 'Tigrinya (l-Eritrea)',
        'ti-ET' => 'Tigrinya (l-Etjopja)',
        'tk' => 'Turkmeni',
        'tk-TM' => 'Turkmeni (it-Turkmenistan)',
        'to' => 'Tongan',
        'to-TO' => 'Tongan (Tonga)',
        'tr' => 'Tork',
        'tr-CY' => 'Tork (Ċipru)',
        'tr-TR' => 'Tork (it-Turkija)',
        'tt' => 'Tatar',
        'tt-RU' => 'Tatar (ir-Russja)',
        'twq' => 'Tasawaq',
        'twq-NE' => 'Tasawaq (in-Niġer)',
        'tzm' => 'Tamazight tal-Atlas Ċentrali',
        'tzm-MA' => 'Tamazight tal-Atlas Ċentrali (il-Marokk)',
        'ug' => 'Uyghur',
        'ug-CN' => 'Uyghur (iċ-Ċina)',
        'uk' => 'Ukren',
        'uk-UA' => 'Ukren (l-Ukrajna)',
        'ur' => 'Urdu',
        'ur-IN' => 'Urdu (l-Indja)',
        'ur-PK' => 'Urdu (il-Pakistan)',
        'uz' => 'Uzbek',
        'uz-Arab' => 'Uzbek (Għarbi)',
        'uz-Arab-AF' => 'Uzbek (Għarbi, l-Afganistan)',
        'uz-Cyrl' => 'Uzbek (Ċirilliku)',
        'uz-Cyrl-UZ' => 'Uzbek (Ċirilliku, l-Użbekistan)',
        'uz-Latn' => 'Uzbek (Latin)',
        'uz-Latn-UZ' => 'Uzbek (Latin, l-Użbekistan)',
        'vai' => 'Vai',
        'vai-Latn' => 'Vai (Latin)',
        'vai-Latn-LR' => 'Vai (Latin, il-Liberja)',
        'vai-Vaii' => 'Vai (Vaii)',
        'vai-Vaii-LR' => 'Vai (Vaii, il-Liberja)',
        'vi' => 'Vjetnamiż',
        'vi-VN' => 'Vjetnamiż (il-Vjetnam)',
        'vun' => 'Vunjo',
        'vun-TZ' => 'Vunjo (it-Tanzanija)',
        'wae' => 'Walser',
        'wae-CH' => 'Walser (l-Iżvizzera)',
        'wo' => 'Wolof',
        'wo-SN' => 'Wolof (is-Senegal)',
        'xh' => 'Xhosa',
        'xh-ZA' => 'Xhosa (l-Afrika t’Isfel)',
        'xog' => 'Soga',
        'xog-UG' => 'Soga (l-Uganda)',
        'yav' => 'Yangben',
        'yav-CM' => 'Yangben (il-Kamerun)',
        'yi' => 'Yiddish',
        'yi-001' => 'Yiddish (Dinja)',
        'yo' => 'Yoruba',
        'yo-BJ' => 'Yoruba (il-Benin)',
        'yo-NG' => 'Yoruba (in-Niġerja)',
        'yue' => 'Kantoniż',
        'yue-Hans' => 'Kantoniż (Simplifikat)',
        'yue-Hans-CN' => 'Kantoniż (Simplifikat, iċ-Ċina)',
        'yue-Hant' => 'Kantoniż (Tradizzjonali)',
        'yue-Hant-HK' => 'Kantoniż (Tradizzjonali, ir-Reġjun Amministrattiv Speċjali ta’ Hong Kong tar-Repubblika tal-Poplu taċ-Ċina)',
        'zgh' => 'Tamazight Standard tal-Marokk',
        'zgh-MA' => 'Tamazight Standard tal-Marokk (il-Marokk)',
        'zh' => 'Ċiniż',
        'zh-Hans' => 'Ċiniż (Simplifikat)',
        'zh-Hans-CN' => 'Ċiniż (Simplifikat, iċ-Ċina)',
        'zh-Hans-HK' => 'Ċiniż (Simplifikat, ir-Reġjun Amministrattiv Speċjali ta’ Hong Kong tar-Repubblika tal-Poplu taċ-Ċina)',
        'zh-Hans-MO' => 'Ċiniż (Simplifikat, ir-Reġjun Amministrattiv Speċjali tal-Macao tar-Repubblika tal-Poplu taċ-Ċina)',
        'zh-Hans-SG' => 'Ċiniż (Simplifikat, Singapore)',
        'zh-Hant' => 'Ċiniż (Tradizzjonali)',
        'zh-Hant-HK' => 'Ċiniż (Tradizzjonali, ir-Reġjun Amministrattiv Speċjali ta’ Hong Kong tar-Repubblika tal-Poplu taċ-Ċina)',
        'zh-Hant-MO' => 'Ċiniż (Tradizzjonali, ir-Reġjun Amministrattiv Speċjali tal-Macao tar-Repubblika tal-Poplu taċ-Ċina)',
        'zh-Hant-TW' => 'Ċiniż (Tradizzjonali, it-Tajwan)',
        'zu' => 'Zulu',
        'zu-ZA' => 'Zulu (l-Afrika t’Isfel)',
    ],
];
