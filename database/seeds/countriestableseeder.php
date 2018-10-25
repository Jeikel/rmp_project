<?php

use Illuminate\Database\Seeder;

class countriestableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS = 0');
    	DB::table('countries')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        
        $countries = [
        	['iso' =>  'AF', 'name' =>  'Afghanistan', 'iso3' =>  'AFG', 'phonecode' => 93],
			['iso' =>  'AX', 'name' =>  'Aland Islands', 'iso3' =>  'ALA', 'phonecode' => 358],
			['iso' =>  'AL', 'name' =>  'Albania', 'iso3' =>  'ALB', 'phonecode' => 355],
			['iso' =>  'DZ', 'name' =>  'Algeria', 'iso3' =>  'DZA', 'phonecode' => 213],
			['iso' =>  'AS', 'name' =>  'American Samoa', 'iso3' =>  'ASM', 'phonecode' => 1684],
			['iso' =>  'AD', 'name' =>  'Andorra', 'iso3' =>  'AND', 'phonecode' => 376],
			['iso' =>  'AO', 'name' =>  'Angola', 'iso3' =>  'AGO', 'phonecode' => 244],
			['iso' =>  'AI', 'name' =>  'Anguilla', 'iso3' =>  'AIA', 'phonecode' => 1264],
			['iso' =>  'AQ', 'name' =>  'Antarctica', 'iso3' =>  NULL, 'phonecode' => 0],
			['iso' =>  'AG', 'name' =>  'Antigua and Barbuda', 'iso3' =>  'ATG', 'phonecode' => 1268],
			['iso' =>  'AR', 'name' =>  'Argentina', 'iso3' =>  'ARG', 'phonecode' => 54],
			['iso' =>  'AM', 'name' =>  'Armenia', 'iso3' =>  'ARM', 'phonecode' => 374],
			['iso' =>  'AW', 'name' =>  'Aruba', 'iso3' =>  'ABW', 'phonecode' => 297],
			['iso' =>  'AU', 'name' =>  'Australia', 'iso3' =>  'AUS', 'phonecode' => 61],
			['iso' =>  'AT', 'name' =>  'Austria', 'iso3' =>  'AUT', 'phonecode' => 43],
			['iso' =>  'AZ', 'name' =>  'Azerbaijan', 'iso3' =>  'AZE', 'phonecode' => 994],
			['iso' =>  'BS', 'name' =>  'Bahamas', 'iso3' =>  'BHS', 'phonecode' => 1242],
			['iso' =>  'BH', 'name' =>  'Bahrain', 'iso3' =>  'BHR', 'phonecode' => 973],
			['iso' =>  'BD', 'name' =>  'Bangladesh', 'iso3' =>  'BGD', 'phonecode' => 880],
			['iso' =>  'BB', 'name' =>  'Barbados', 'iso3' =>  'BRB', 'phonecode' => 1246],
			['iso' =>  'BY', 'name' =>  'Belarus', 'iso3' =>  'BLR', 'phonecode' => 375],
			['iso' =>  'BE', 'name' =>  'Belgium', 'iso3' =>  'BEL', 'phonecode' => 32],
			['iso' =>  'BZ', 'name' =>  'Belize', 'iso3' =>  'BLZ', 'phonecode' => 501],
			['iso' =>  'BJ', 'name' =>  'Benin', 'iso3' =>  'BEN', 'phonecode' => 229],
			['iso' =>  'BM', 'name' =>  'Bermuda', 'iso3' =>  'BMU', 'phonecode' => 1441],
			['iso' =>  'BT', 'name' =>  'Bhutan', 'iso3' =>  'BTN', 'phonecode' => 975],
			['iso' =>  'BO', 'name' =>  'Bolivia', 'iso3' =>  'BOL', 'phonecode' => 591],
			['iso' =>  'BQ', 'name' =>  'Bonaire, Sint Eustatius and Saba', 'iso3' =>  'BES', 'phonecode' => 599],
			['iso' =>  'BA', 'name' =>  'Bosnia and Herzegovina', 'iso3' =>  'BIH', 'phonecode' => 387],
			['iso' =>  'BW', 'name' =>  'Botswana', 'iso3' =>  'BWA', 'phonecode' => 267],
			['iso' =>  'BV', 'name' =>  'Bouvet Island', 'iso3' =>  NULL, 'phonecode' => 0],
			['iso' =>  'BR', 'name' =>  'Brazil', 'iso3' =>  'BRA', 'phonecode' => 55],
			['iso' =>  'IO', 'name' =>  'British Indian Ocean Territory', 'iso3' =>  NULL, 'phonecode' => 246],
			['iso' =>  'BN', 'name' =>  'Brunei Darussalam', 'iso3' =>  'BRN', 'phonecode' => 673],
			['iso' =>  'BG', 'name' =>  'Bulgaria', 'iso3' =>  'BGR', 'phonecode' => 359],
			['iso' =>  'BF', 'name' =>  'Burkina Faso', 'iso3' =>  'BFA', 'phonecode' => 226],
			['iso' =>  'BI', 'name' =>  'Burundi', 'iso3' =>  'BDI', 'phonecode' => 257],
			['iso' =>  'KH', 'name' =>  'Cambodia', 'iso3' =>  'KHM', 'phonecode' => 855],
			['iso' =>  'CM', 'name' =>  'Cameroon', 'iso3' =>  'CMR', 'phonecode' => 237],
			['iso' =>  'CA', 'name' =>  'Canada', 'iso3' =>  'CAN', 'phonecode' => 1],
			['iso' =>  'CV', 'name' =>  'Cape Verde', 'iso3' =>  'CPV', 'phonecode' => 238],
			['iso' =>  'KY', 'name' =>  'Cayman Islands', 'iso3' =>  'CYM', 'phonecode' => 1345],
			['iso' =>  'CF', 'name' =>  'Central African Republic', 'iso3' =>  'CAF', 'phonecode' => 236],
			['iso' =>  'TD', 'name' =>  'Chad', 'iso3' =>  'TCD', 'phonecode' => 235],
			['iso' =>  'CL', 'name' =>  'Chile', 'iso3' =>  'CHL', 'phonecode' => 56],
			['iso' =>  'CN', 'name' =>  'China', 'iso3' =>  'CHN', 'phonecode' => 86],
			['iso' =>  'CX', 'name' =>  'Christmas Island', 'iso3' =>  NULL, 'phonecode' => 61],
			['iso' =>  'CC', 'name' =>  'Cocos (Keeling) Islands', 'iso3' =>  NULL, 'phonecode' => 672],
			['iso' =>  'CO', 'name' =>  'Colombia', 'iso3' =>  'COL', 'phonecode' => 57],
			['iso' =>  'KM', 'name' =>  'Comoros', 'iso3' =>  'COM', 'phonecode' => 269],
			['iso' =>  'CD', 'name' =>  'Congo, the Democratic Republic of the', 'iso3' =>  'COD', 'phonecode' => 242],
			['iso' =>  'CG', 'name' =>  'Congo', 'iso3' =>  'COG', 'phonecode' => 242],
			['iso' =>  'CK', 'name' =>  'Cook Islands', 'iso3' =>  'COK', 'phonecode' => 682],
			['iso' =>  'CR', 'name' =>  'Costa Rica', 'iso3' =>  'CRI', 'phonecode' => 506],
			['iso' =>  'CI', 'name' =>  'Cote D` Ivoire', 'iso3' =>  'CIV', 'phonecode' => 225],
			['iso' =>  'HR', 'name' =>  'Croatia', 'iso3' =>  'HRV', 'phonecode' => 385],
			['iso' =>  'CU', 'name' =>  'Cuba', 'iso3' =>  'CUB', 'phonecode' => 53],
			['iso' =>  'CW', 'name' =>  'Curacao', 'iso3' =>  'CUW', 'phonecode' => 599],
			['iso' =>  'CY', 'name' =>  'Cyprus', 'iso3' =>  'CYP', 'phonecode' => 357],
			['iso' =>  'CZ', 'name' =>  'Czech Republic', 'iso3' =>  'CZE', 'phonecode' => 420],
			['iso' =>  'DK', 'name' =>  'Denmark', 'iso3' =>  'DNK', 'phonecode' => 45],
			['iso' =>  'DJ', 'name' =>  'Djibouti', 'iso3' =>  'DJI', 'phonecode' => 253],
			['iso' =>  'DM', 'name' =>  'Dominica', 'iso3' =>  'DMA', 'phonecode' => 1767],
			['iso' =>  'DO', 'name' =>  'Dominican Republic', 'iso3' =>  'DOM', 'phonecode' => 1809],
			['iso' =>  'EC', 'name' =>  'Ecuador', 'iso3' =>  'ECU', 'phonecode' => 593],
			['iso' =>  'EG', 'name' =>  'Egypt', 'iso3' =>  'EGY', 'phonecode' => 20],
			['iso' =>  'SV', 'name' =>  'El Salvador', 'iso3' =>  'SLV', 'phonecode' => 503],
			['iso' =>  'GQ', 'name' =>  'Equatorial Guinea', 'iso3' =>  'GNQ', 'phonecode' => 240],
			['iso' =>  'ER', 'name' =>  'Eritrea', 'iso3' =>  'ERI', 'phonecode' => 291],
			['iso' =>  'EE', 'name' =>  'Estonia', 'iso3' =>  'EST', 'phonecode' => 372],
			['iso' =>  'ET', 'name' =>  'Ethiopia', 'iso3' =>  'ETH', 'phonecode' => 251],
			['iso' =>  'FK', 'name' =>  'Falkland Islands (Malvinas)', 'iso3' =>  'FLK', 'phonecode' => 500],
			['iso' =>  'FO', 'name' =>  'Faroe Islands', 'iso3' =>  'FRO', 'phonecode' => 298],
			['iso' =>  'FJ', 'name' =>  'Fiji', 'iso3' =>  'FJI', 'phonecode' => 679],
			['iso' =>  'FI', 'name' =>  'Finland', 'iso3' =>  'FIN', 'phonecode' => 358],
			['iso' =>  'FR', 'name' =>  'France', 'iso3' =>  'FRA', 'phonecode' => 33],
			['iso' =>  'GF', 'name' =>  'French Guiana', 'iso3' =>  'GUF', 'phonecode' => 594],
			['iso' =>  'PF', 'name' =>  'French Polynesia', 'iso3' =>  'PYF', 'phonecode' => 689],
			['iso' =>  'TF', 'name' =>  'French Southern Territories', 'iso3' =>  NULL, 'phonecode' => 0],
			['iso' =>  'GA', 'name' =>  'Gabon', 'iso3' =>  'GAB', 'phonecode' => 241],
			['iso' =>  'GM', 'name' =>  'Gambia', 'iso3' =>  'GMB', 'phonecode' => 220],
			['iso' =>  'GE', 'name' =>  'Georgia', 'iso3' =>  'GEO', 'phonecode' => 995],
			['iso' =>  'DE', 'name' =>  'Germany', 'iso3' =>  'DEU', 'phonecode' => 49],
			['iso' =>  'GH', 'name' =>  'Ghana', 'iso3' =>  'GHA', 'phonecode' => 233],
			['iso' =>  'GI', 'name' =>  'Gibraltar', 'iso3' =>  'GIB', 'phonecode' => 350],
			['iso' =>  'GR', 'name' =>  'Greece', 'iso3' =>  'GRC', 'phonecode' => 30],
			['iso' =>  'GL', 'name' =>  'Greenland', 'iso3' =>  'GRL', 'phonecode' => 299],
			['iso' =>  'GD', 'name' =>  'Grenada', 'iso3' =>  'GRD', 'phonecode' => 1473],
			['iso' =>  'GP', 'name' =>  'Guadeloupe', 'iso3' =>  'GLP', 'phonecode' => 590],
			['iso' =>  'GU', 'name' =>  'Guam', 'iso3' =>  'GUM', 'phonecode' => 1671],
			['iso' =>  'GT', 'name' =>  'Guatemala', 'iso3' =>  'GTM', 'phonecode' => 502],
			['iso' =>  'GG', 'name' =>  'Guernsey', 'iso3' =>  'GGY', 'phonecode' => 44],
			['iso' =>  'GW', 'name' =>  'Guinea-Bissau', 'iso3' =>  'GNB', 'phonecode' => 245],
			['iso' =>  'GN', 'name' =>  'Guinea', 'iso3' =>  'GIN', 'phonecode' => 224],
			['iso' =>  'GY', 'name' =>  'Guyana', 'iso3' =>  'GUY', 'phonecode' => 592],
			['iso' =>  'HT', 'name' =>  'Haiti', 'iso3' =>  'HTI', 'phonecode' => 509],
			['iso' =>  'HM', 'name' =>  'Heard Island and Mcdonald Islands', 'iso3' =>  NULL, 'phonecode' => 0],
			['iso' =>  'VA', 'name' =>  'Holy See (Vatican City State)', 'iso3' =>  'VAT', 'phonecode' => 39],
			['iso' =>  'HN', 'name' =>  'Honduras', 'iso3' =>  'HND', 'phonecode' => 504],
			['iso' =>  'HK', 'name' =>  'Hong Kong', 'iso3' =>  'HKG', 'phonecode' => 852],
			['iso' =>  'HU', 'name' =>  'Hungary', 'iso3' =>  'HUN', 'phonecode' => 36],
			['iso' =>  'IS', 'name' =>  'Iceland', 'iso3' =>  'ISL', 'phonecode' => 354],
			['iso' =>  'IN', 'name' =>  'India', 'iso3' =>  'IND', 'phonecode' => 91],
			['iso' =>  'ID', 'name' =>  'Indonesia', 'iso3' =>  'IDN', 'phonecode' => 62],
			['iso' =>  'IR', 'name' =>  'Iran, Islamic Republic of', 'iso3' =>  'IRN', 'phonecode' => 98],
			['iso' =>  'IQ', 'name' =>  'Iraq', 'iso3' =>  'IRQ', 'phonecode' => 964],
			['iso' =>  'IE', 'name' =>  'Ireland', 'iso3' =>  'IRL', 'phonecode' => 353],
			['iso' =>  'IM', 'name' =>  'Isle of Man', 'iso3' =>  'IMN', 'phonecode' => 44],
			['iso' =>  'IL', 'name' =>  'Israel', 'iso3' =>  'ISR', 'phonecode' => 972],
			['iso' =>  'IT', 'name' =>  'Italy', 'iso3' =>  'ITA', 'phonecode' => 39],
			['iso' =>  'JM', 'name' =>  'Jamaica', 'iso3' =>  'JAM', 'phonecode' => 1876],
			['iso' =>  'JP', 'name' =>  'Japan', 'iso3' =>  'JPN', 'phonecode' => 81],
			['iso' =>  'JE', 'name' =>  'Jersey', 'iso3' =>  'JEY', 'phonecode' => 44],
			['iso' =>  'JO', 'name' =>  'Jordan', 'iso3' =>  'JOR', 'phonecode' => 962],
			['iso' =>  'KZ', 'name' =>  'Kazakhstan', 'iso3' =>  'KAZ', 'phonecode' => 7],
			['iso' =>  'KE', 'name' =>  'Kenya', 'iso3' =>  'KEN', 'phonecode' => 254],
			['iso' =>  'KI', 'name' =>  'Kiribati', 'iso3' =>  'KIR', 'phonecode' => 686],
			['iso' =>  'KP', 'name' =>  'Korea, Democratic People`s Republic of', 'iso3' =>  'PRK', 'phonecode' => 850],
			['iso' =>  'KR', 'name' =>  'Korea, Republic of', 'iso3' =>  'KOR', 'phonecode' => 82],
			['iso' =>  'XK', 'name' =>  'Kosovo', 'iso3' =>  '---', 'phonecode' => 381],
			['iso' =>  'KW', 'name' =>  'Kuwait', 'iso3' =>  'KWT', 'phonecode' => 965],
			['iso' =>  'KG', 'name' =>  'Kyrgyzstan', 'iso3' =>  'KGZ', 'phonecode' => 996],
			['iso' =>  'LA', 'name' =>  'Lao People`s Democratic Republic', 'iso3' =>  'LAO', 'phonecode' => 856],
			['iso' =>  'LV', 'name' =>  'Latvia', 'iso3' =>  'LVA', 'phonecode' => 371],
			['iso' =>  'LB', 'name' =>  'Lebanon', 'iso3' =>  'LBN', 'phonecode' => 961],
			['iso' =>  'LS', 'name' =>  'Lesotho', 'iso3' =>  'LSO', 'phonecode' => 266],
			['iso' =>  'LR', 'name' =>  'Liberia', 'iso3' =>  'LBR', 'phonecode' => 231],
			['iso' =>  'LY', 'name' =>  'Libyan Arab Jamahiriya', 'iso3' =>  'LBY', 'phonecode' => 218],
			['iso' =>  'LI', 'name' =>  'Liechtenstein', 'iso3' =>  'LIE', 'phonecode' => 423],
			['iso' =>  'LT', 'name' =>  'Lithuania', 'iso3' =>  'LTU', 'phonecode' => 370],
			['iso' =>  'LU', 'name' =>  'Luxembourg', 'iso3' =>  'LUX', 'phonecode' => 352],
			['iso' =>  'MO', 'name' =>  'Macao', 'iso3' =>  'MAC', 'phonecode' => 853],
			['iso' =>  'MK', 'name' =>  'Macedonia,  the Former Yugoslav Republic of', 'iso3' =>  'MKD', 'phonecode' => 389],
			['iso' =>  'MG', 'name' =>  'Madagascar', 'iso3' =>  'MDG', 'phonecode' => 261],
			['iso' =>  'MW', 'name' =>  'Malawi', 'iso3' =>  'MWI', 'phonecode' => 265],
			['iso' =>  'MY', 'name' =>  'Malaysia', 'iso3' =>  'MYS', 'phonecode' => 60],
			['iso' =>  'MV', 'name' =>  'Maldives', 'iso3' =>  'MDV', 'phonecode' => 960],
			['iso' =>  'ML', 'name' =>  'Mali', 'iso3' =>  'MLI', 'phonecode' => 223],
			['iso' =>  'MT', 'name' =>  'Malta', 'iso3' =>  'MLT', 'phonecode' => 356],
			['iso' =>  'MH', 'name' =>  'Marshall Islands', 'iso3' =>  'MHL', 'phonecode' => 692],
			['iso' =>  'MQ', 'name' =>  'Martinique', 'iso3' =>  'MTQ', 'phonecode' => 596],
			['iso' =>  'MR', 'name' =>  'Mauritania', 'iso3' =>  'MRT', 'phonecode' => 222],
			['iso' =>  'MU', 'name' =>  'Mauritius', 'iso3' =>  'MUS', 'phonecode' => 230],
			['iso' =>  'YT', 'name' =>  'Mayotte', 'iso3' =>  NULL, 'phonecode' => 269],
			['iso' =>  'MX', 'name' =>  'Mexico', 'iso3' =>  'MEX', 'phonecode' => 52],
			['iso' =>  'FM', 'name' =>  'Micronesia, Federated States of', 'iso3' =>  'FSM', 'phonecode' => 691],
			['iso' =>  'MD', 'name' =>  'Moldova, Republic of', 'iso3' =>  'MDA', 'phonecode' => 373],
			['iso' =>  'MC', 'name' =>  'Monaco', 'iso3' =>  'MCO', 'phonecode' => 377],
			['iso' =>  'MN', 'name' =>  'Mongolia', 'iso3' =>  'MNG', 'phonecode' => 976],
			['iso' =>  'ME', 'name' =>  'Montenegro', 'iso3' =>  'MNE', 'phonecode' => 382],
			['iso' =>  'MS', 'name' =>  'Montserrat', 'iso3' =>  'MSR', 'phonecode' => 1664],
			['iso' =>  'MA', 'name' =>  'Morocco', 'iso3' =>  'MAR', 'phonecode' => 212],
			['iso' =>  'MZ', 'name' =>  'Mozambique', 'iso3' =>  'MOZ', 'phonecode' => 258],
			['iso' =>  'MM', 'name' =>  'Myanmar', 'iso3' =>  'MMR', 'phonecode' => 95],
			['iso' =>  'NA', 'name' =>  'Namibia', 'iso3' =>  'NAM', 'phonecode' => 264],
			['iso' =>  'NR', 'name' =>  'Nauru', 'iso3' =>  'NRU', 'phonecode' => 674],
			['iso' =>  'NP', 'name' =>  'Nepal', 'iso3' =>  'NPL', 'phonecode' => 977],
			['iso' =>  'AN', 'name' =>  'Netherlands Antilles', 'iso3' =>  'ANT', 'phonecode' => 599],
			['iso' =>  'NL', 'name' =>  'Netherlands', 'iso3' =>  'NLD', 'phonecode' => 31],
			['iso' =>  'NC', 'name' =>  'New Caledonia', 'iso3' =>  'NCL', 'phonecode' => 687],
			['iso' =>  'NZ', 'name' =>  'New Zealand', 'iso3' =>  'NZL', 'phonecode' => 64],
			['iso' =>  'NI', 'name' =>  'Nicaragua', 'iso3' =>  'NIC', 'phonecode' => 505],
			['iso' =>  'NE', 'name' =>  'Niger', 'iso3' =>  'NER', 'phonecode' => 227],
			['iso' =>  'NG', 'name' =>  'Nigeria', 'iso3' =>  'NGA', 'phonecode' => 234],
			['iso' =>  'NU', 'name' =>  'Niue', 'iso3' =>  'NIU', 'phonecode' => 683],
			['iso' =>  'NF', 'name' =>  'Norfolk Island', 'iso3' =>  'NFK', 'phonecode' => 672],
			['iso' =>  'MP', 'name' =>  'Northern Mariana Islands', 'iso3' =>  'MNP', 'phonecode' => 1670],
			['iso' =>  'NO', 'name' =>  'Norway', 'iso3' =>  'NOR', 'phonecode' => 47],
			['iso' =>  'OM', 'name' =>  'Oman', 'iso3' =>  'OMN', 'phonecode' => 968],
			['iso' =>  'PK', 'name' =>  'Pakistan', 'iso3' =>  'PAK', 'phonecode' => 92],
			['iso' =>  'PW', 'name' =>  'Palau', 'iso3' =>  'PLW', 'phonecode' => 680],
			['iso' =>  'PS', 'name' =>  'Palestinian Territory, Occupied', 'iso3' =>  NULL, 'phonecode' => 970],
			['iso' =>  'PA', 'name' =>  'Panama', 'iso3' =>  'PAN', 'phonecode' => 507],
			['iso' =>  'PG', 'name' =>  'Papua New Guinea', 'iso3' =>  'PNG', 'phonecode' => 675],
			['iso' =>  'PY', 'name' =>  'Paraguay', 'iso3' =>  'PRY', 'phonecode' => 595],
			['iso' =>  'PE', 'name' =>  'Peru', 'iso3' =>  'PER', 'phonecode' => 51],
			['iso' =>  'PH', 'name' =>  'Philippines', 'iso3' =>  'PHL', 'phonecode' => 63],
			['iso' =>  'PN', 'name' =>  'Pitcairn', 'iso3' =>  'PCN', 'phonecode' => 0],
			['iso' =>  'PL', 'name' =>  'Poland', 'iso3' =>  'POL', 'phonecode' => 48],
			['iso' =>  'PT', 'name' =>  'Portugal', 'iso3' =>  'PRT', 'phonecode' => 351],
			['iso' =>  'PR', 'name' =>  'Puerto Rico', 'iso3' =>  'PRI', 'phonecode' => 1787],
			['iso' =>  'QA', 'name' =>  'Qatar', 'iso3' =>  'QAT', 'phonecode' => 974],
			['iso' =>  'RE', 'name' =>  'Reunion', 'iso3' =>  'REU', 'phonecode' => 262],
			['iso' =>  'RO', 'name' =>  'Romania', 'iso3' =>  'ROM', 'phonecode' => 40],
			['iso' =>  'RU', 'name' =>  'Russian Federation', 'iso3' =>  'RUS', 'phonecode' => 70],
			['iso' =>  'RW', 'name' =>  'Rwanda', 'iso3' =>  'RWA', 'phonecode' => 250],
			['iso' =>  'BL', 'name' =>  'Saint Barthelemy', 'iso3' =>  'BLM', 'phonecode' => 590],
			['iso' =>  'SH', 'name' =>  'Saint Helena', 'iso3' =>  'SHN', 'phonecode' => 290],
			['iso' =>  'KN', 'name' =>  'Saint Kitts and Nevis', 'iso3' =>  'KNA', 'phonecode' => 1869],
			['iso' =>  'LC', 'name' =>  'Saint Lucia', 'iso3' =>  'LCA', 'phonecode' => 1758],
			['iso' =>  'MF', 'name' =>  'Saint Martin', 'iso3' =>  'MAF', 'phonecode' => 590],
			['iso' =>  'PM', 'name' =>  'Saint Pierre and Miquelon', 'iso3' =>  'SPM', 'phonecode' => 508],
			['iso' =>  'VC', 'name' =>  'Saint Vincent and the Grenadines', 'iso3' =>  'VCT', 'phonecode' => 1784],
			['iso' =>  'WS', 'name' =>  'Samoa', 'iso3' =>  'WSM', 'phonecode' => 684],
			['iso' =>  'SM', 'name' =>  'San Marino', 'iso3' =>  'SMR', 'phonecode' => 378],
			['iso' =>  'ST', 'name' =>  'Sao Tome and Principe', 'iso3' =>  'STP', 'phonecode' => 239],
			['iso' =>  'SA', 'name' =>  'Saudi Arabia', 'iso3' =>  'SAU', 'phonecode' => 966],
			['iso' =>  'SN', 'name' =>  'Senegal', 'iso3' =>  'SEN', 'phonecode' => 221],
			['iso' =>  'RS', 'name' =>  'Serbia', 'iso3' =>  'SRB', 'phonecode' => 381],
			['iso' =>  'SC', 'name' =>  'Seychelles', 'iso3' =>  'SYC', 'phonecode' => 248],
			['iso' =>  'SL', 'name' =>  'Sierra Leone', 'iso3' =>  'SLE', 'phonecode' => 232],
			['iso' =>  'SG', 'name' =>  'Singapore', 'iso3' =>  'SGP', 'phonecode' => 65],
			['iso' =>  'SX', 'name' =>  'Sint Maarten', 'iso3' =>  'SXM', 'phonecode' => 1],
			['iso' =>  'SK', 'name' =>  'Slovakia', 'iso3' =>  'SVK', 'phonecode' => 421],
			['iso' =>  'SI', 'name' =>  'Slovenia', 'iso3' =>  'SVN', 'phonecode' => 386],
			['iso' =>  'SB', 'name' =>  'Solomon Islands', 'iso3' =>  'SLB', 'phonecode' => 677],
			['iso' =>  'SO', 'name' =>  'Somalia', 'iso3' =>  'SOM', 'phonecode' => 252],
			['iso' =>  'ZA', 'name' =>  'South Africa', 'iso3' =>  'ZAF', 'phonecode' => 27],
			['iso' =>  'GS', 'name' =>  'South Georgia and the South Sandwich Islands', 'iso3' =>  NULL, 'phonecode' => 0],
			['iso' =>  'SS', 'name' =>  'South Sudan', 'iso3' =>  'SSD', 'phonecode' => 211],
			['iso' =>  'ES', 'name' =>  'Spain', 'iso3' =>  'ESP', 'phonecode' => 34],
			['iso' =>  'LK', 'name' =>  'Sri Lanka', 'iso3' =>  'LKA', 'phonecode' => 94],
			['iso' =>  'SD', 'name' =>  'Sudan', 'iso3' =>  'SDN', 'phonecode' => 249],
			['iso' =>  'SR', 'name' =>  'Suriname', 'iso3' =>  'SUR', 'phonecode' => 597],
			['iso' =>  'SJ', 'name' =>  'Svalbard and Jan Mayen', 'iso3' =>  'SJM', 'phonecode' => 47],
			['iso' =>  'SZ', 'name' =>  'Swaziland', 'iso3' =>  'SWZ', 'phonecode' => 268],
			['iso' =>  'SE', 'name' =>  'Sweden', 'iso3' =>  'SWE', 'phonecode' => 46],
			['iso' =>  'CH', 'name' =>  'Switzerland', 'iso3' =>  'CHE', 'phonecode' => 41],
			['iso' =>  'SY', 'name' =>  'Syrian Arab Republic', 'iso3' =>  'SYR', 'phonecode' => 963],
			['iso' =>  'TW', 'name' =>  'Taiwan, Province of China', 'iso3' =>  'TWN', 'phonecode' => 886],
			['iso' =>  'TJ', 'name' =>  'Tajikistan', 'iso3' =>  'TJK', 'phonecode' => 992],
			['iso' =>  'TZ', 'name' =>  'Tanzania, United Republic of', 'iso3' =>  'TZA', 'phonecode' => 255],
			['iso' =>  'TH', 'name' =>  'Thailand', 'iso3' =>  'THA', 'phonecode' => 66],
			['iso' =>  'TL', 'name' =>  'Timor-Leste', 'iso3' =>  NULL, 'phonecode' => 670],
			['iso' =>  'TG', 'name' =>  'Togo', 'iso3' =>  'TGO', 'phonecode' => 228],
			['iso' =>  'TK', 'name' =>  'Tokelau', 'iso3' =>  'TKL', 'phonecode' => 690],
			['iso' =>  'TO', 'name' =>  'Tonga', 'iso3' =>  'TON', 'phonecode' => 676],
			['iso' =>  'TT', 'name' =>  'Trinidad and Tobago', 'iso3' =>  'TTO', 'phonecode' => 1868],
			['iso' =>  'TN', 'name' =>  'Tunisia', 'iso3' =>  'TUN', 'phonecode' => 216],
			['iso' =>  'TR', 'name' =>  'Turkey', 'iso3' =>  'TUR', 'phonecode' => 90],
			['iso' =>  'TM', 'name' =>  'Turkmenistan', 'iso3' =>  'TKM', 'phonecode' => 7370],
			['iso' =>  'TC', 'name' =>  'Turks and Caicos Islands', 'iso3' =>  'TCA', 'phonecode' => 1649],
			['iso' =>  'TV', 'name' =>  'Tuvalu', 'iso3' =>  'TUV', 'phonecode' => 688],
			['iso' =>  'UG', 'name' =>  'Uganda', 'iso3' =>  'UGA', 'phonecode' => 256],
			['iso' =>  'UA', 'name' =>  'Ukraine', 'iso3' =>  'UKR', 'phonecode' => 380],
			['iso' =>  'AE', 'name' =>  'United Arab Emirates', 'iso3' =>  'ARE', 'phonecode' => 971],
			['iso' =>  'GB', 'name' =>  'United Kingdom', 'iso3' =>  'GBR', 'phonecode' => 44],
			['iso' =>  'UM', 'name' =>  'United States Minor Outlying Islands', 'iso3' =>  NULL, 'phonecode' => 1],
			['iso' =>  'US', 'name' =>  'United States', 'iso3' =>  'USA', 'phonecode' => 1],
			['iso' =>  'UY', 'name' =>  'Uruguay', 'iso3' =>  'URY', 'phonecode' => 598],
			['iso' =>  'UZ', 'name' =>  'Uzbekistan', 'iso3' =>  'UZB', 'phonecode' => 998],
			['iso' =>  'VU', 'name' =>  'Vanuatu', 'iso3' =>  'VUT', 'phonecode' => 678],
			['iso' =>  'VE', 'name' =>  'Venezuela', 'iso3' =>  'VEN', 'phonecode' => 58],
			['iso' =>  'VN', 'name' =>  'Viet Nam', 'iso3' =>  'VNM', 'phonecode' => 84],
			['iso' =>  'VG', 'name' =>  'Virgin Islands, British', 'iso3' =>  'VGB', 'phonecode' => 1284],
			['iso' =>  'VI', 'name' =>  'Virgin Islands, U.s.', 'iso3' =>  'VIR', 'phonecode' => 1340],
			['iso' =>  'WF', 'name' =>  'Wallis and Futuna', 'iso3' =>  'WLF', 'phonecode' => 681],
			['iso' =>  'EH', 'name' =>  'Western Sahara', 'iso3' =>  'ESH', 'phonecode' => 212],
			['iso' =>  'YE', 'name' =>  'Yemen', 'iso3' =>  'YEM', 'phonecode' => 967],
			['iso' =>  'ZM', 'name' =>  'Zambia', 'iso3' =>  'ZMB', 'phonecode' => 260],
			['iso' =>  'ZW', 'name' =>  'Zimbabwe', 'iso3' =>  'ZWE', 'phonecode' => 263],
        ];

        DB::table('countries')->insert($countries);
    }
}
