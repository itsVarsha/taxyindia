<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('country')->delete();
      
        DB::table('country')->insert([

        ['short_name' => 'AF','long_name' => 'Afghanistan','iso3' => 'AFG','num_code' => '4','phone_code' => '93','stripe_country'=>'No'],
      ['short_name' => 'AL','long_name' => 'Albania','iso3' => 'ALB','num_code' => '8','phone_code' => '355','stripe_country'=>'No'],
      ['short_name' => 'DZ','long_name' => 'Algeria','iso3' => 'DZA','num_code' => '12','phone_code' => '213','stripe_country'=>'No'],
      ['short_name' => 'AS','long_name' => 'American Samoa','iso3' => 'ASM','num_code' => '16','phone_code' => '1','stripe_country'=>'No'],
      ['short_name' => 'AD','long_name' => 'Andorra','iso3' => 'AND','num_code' => '20','phone_code' => '376','stripe_country'=>'No'],
      ['short_name' => 'AO','long_name' => 'Angola','iso3' => 'AGO','num_code' => '24','phone_code' => '244','stripe_country'=>'No'],
      ['short_name' => 'AI','long_name' => 'Anguilla','iso3' => 'AIA','num_code' => '660','phone_code' => '1','stripe_country'=>'No'],
      ['short_name' => 'AQ','long_name' => 'Antarctica','iso3' => NULL,'num_code' => NULL,'phone_code' => '0','stripe_country'=>'No'],
      ['short_name' => 'AG','long_name' => 'Antigua and Barbuda','iso3' => 'ATG','num_code' => '28','phone_code' => '1','stripe_country'=>'No'],
      ['short_name' => 'AR','long_name' => 'Argentina','iso3' => 'ARG','num_code' => '32','phone_code' => '54','stripe_country'=>'No'],
      ['short_name' => 'AM','long_name' => 'Armenia','iso3' => 'ARM','num_code' => '51','phone_code' => '374','stripe_country'=>'No'],
      ['short_name' => 'AW','long_name' => 'Aruba','iso3' => 'ABW','num_code' => '533','phone_code' => '297','stripe_country'=>'No'],
      ['short_name' => 'AU','long_name' => 'Australia','iso3' => 'AUS','num_code' => '36','phone_code' => '61','stripe_country'=>'Yes'],
      ['short_name' => 'AT','long_name' => 'Austria','iso3' => 'AUT','num_code' => '40','phone_code' => '43','stripe_country'=>'Yes'],
      ['short_name' => 'AZ','long_name' => 'Azerbaijan','iso3' => 'AZE','num_code' => '31','phone_code' => '994','stripe_country'=>'No'],
      ['short_name' => 'BS','long_name' => 'Bahamas','iso3' => 'BHS','num_code' => '44','phone_code' => '1','stripe_country'=>'No'],
      ['short_name' => 'BH','long_name' => 'Bahrain','iso3' => 'BHR','num_code' => '48','phone_code' => '973','stripe_country'=>'No'],
      ['short_name' => 'BD','long_name' => 'Bangladesh','iso3' => 'BGD','num_code' => '50','phone_code' => '880','stripe_country'=>'No'],
      ['short_name' => 'BB','long_name' => 'Barbados','iso3' => 'BRB','num_code' => '52','phone_code' => '1','stripe_country'=>'No'],
      ['short_name' => 'BY','long_name' => 'Belarus','iso3' => 'BLR','num_code' => '112','phone_code' => '375','stripe_country'=>'No'],
      ['short_name' => 'BE','long_name' => 'Belgium','iso3' => 'BEL','num_code' => '56','phone_code' => '32','stripe_country'=>'Yes'],
      ['short_name' => 'BZ','long_name' => 'Belize','iso3' => 'BLZ','num_code' => '84','phone_code' => '501','stripe_country'=>'No'],
      ['short_name' => 'BJ','long_name' => 'Benin','iso3' => 'BEN','num_code' => '204','phone_code' => '229','stripe_country'=>'No'],
      ['short_name' => 'BM','long_name' => 'Bermuda','iso3' => 'BMU','num_code' => '60','phone_code' => '1','stripe_country'=>'No'],
      ['short_name' => 'BT','long_name' => 'Bhutan','iso3' => 'BTN','num_code' => '64','phone_code' => '975','stripe_country'=>'No'],
      ['short_name' => 'BO','long_name' => 'Bolivia','iso3' => 'BOL','num_code' => '68','phone_code' => '591','stripe_country'=>'No'],
      ['short_name' => 'BA','long_name' => 'Bosnia and Herzegovina','iso3' => 'BIH','num_code' => '70','phone_code' => '387','stripe_country'=>'No'],
      ['short_name' => 'BW','long_name' => 'Botswana','iso3' => 'BWA','num_code' => '72','phone_code' => '267','stripe_country'=>'No'],
      ['short_name' => 'BV','long_name' => 'Bouvet Island','iso3' => NULL,'num_code' => NULL,'phone_code' => '0','stripe_country'=>'No'],
      ['short_name' => 'BR','long_name' => 'Brazil','iso3' => 'BRA','num_code' => '76','phone_code' => '55','stripe_country'=>'No'],
      ['short_name' => 'IO','long_name' => 'British Indian Ocean Territory','iso3' => NULL,'num_code' => NULL,'phone_code' => '246','stripe_country'=>'No'],
      ['short_name' => 'BN','long_name' => 'Brunei Darussalam','iso3' => 'BRN','num_code' => '96','phone_code' => '673','stripe_country'=>'No'],
      ['short_name' => 'BG','long_name' => 'Bulgaria','iso3' => 'BGR','num_code' => '100','phone_code' => '359','stripe_country'=>'No'],
      ['short_name' => 'BF','long_name' => 'Burkina Faso','iso3' => 'BFA','num_code' => '854','phone_code' => '226','stripe_country'=>'No'],
      ['short_name' => 'BI','long_name' => 'Burundi','iso3' => 'BDI','num_code' => '108','phone_code' => '257','stripe_country'=>'No'],
      ['short_name' => 'KH','long_name' => 'Cambodia','iso3' => 'KHM','num_code' => '116','phone_code' => '855','stripe_country'=>'No'],
      ['short_name' => 'CM','long_name' => 'Cameroon','iso3' => 'CMR','num_code' => '120','phone_code' => '237','stripe_country'=>'No'],
      ['short_name' => 'CA','long_name' => 'Canada','iso3' => 'CAN','num_code' => '124','phone_code' => '1','stripe_country'=>'Yes'],
      ['short_name' => 'CV','long_name' => 'Cape Verde','iso3' => 'CPV','num_code' => '132','phone_code' => '238','stripe_country'=>'No'],
      ['short_name' => 'KY','long_name' => 'Cayman Islands','iso3' => 'CYM','num_code' => '136','phone_code' => '1','stripe_country'=>'No'],
      ['short_name' => 'CF','long_name' => 'Central African Republic','iso3' => 'CAF','num_code' => '140','phone_code' => '236','stripe_country'=>'No'],
      ['short_name' => 'TD','long_name' => 'Chad','iso3' => 'TCD','num_code' => '148','phone_code' => '235','stripe_country'=>'No'],
      ['short_name' => 'CL','long_name' => 'Chile','iso3' => 'CHL','num_code' => '152','phone_code' => '56','stripe_country'=>'No'],
      ['short_name' => 'CN','long_name' => 'China','iso3' => 'CHN','num_code' => '156','phone_code' => '86','stripe_country'=>'No'],
      ['short_name' => 'CX','long_name' => 'Christmas Island','iso3' => NULL,'num_code' => NULL,'phone_code' => '61','stripe_country'=>'No'],
      ['short_name' => 'CC','long_name' => 'Cocos (Keeling) Islands','iso3' => NULL,'num_code' => NULL,'phone_code' => '672','stripe_country'=>'No'],
      ['short_name' => 'CO','long_name' => 'Colombia','iso3' => 'COL','num_code' => '170','phone_code' => '57','stripe_country'=>'No'],
      ['short_name' => 'KM','long_name' => 'Comoros','iso3' => 'COM','num_code' => '174','phone_code' => '269','stripe_country'=>'No'],
      ['short_name' => 'CG','long_name' => 'Congo','iso3' => 'COG','num_code' => '178','phone_code' => '242','stripe_country'=>'No'],
      ['short_name' => 'CD','long_name' => 'Democratic Republic of the Congo','iso3' => 'COD','num_code' => '180','phone_code' => '242','stripe_country'=>'No'],
      ['short_name' => 'CK','long_name' => 'Cook Islands','iso3' => 'COK','num_code' => '184','phone_code' => '682','stripe_country'=>'No'],
      ['short_name' => 'CR','long_name' => 'Costa Rica','iso3' => 'CRI','num_code' => '188','phone_code' => '506','stripe_country'=>'No'],
      ['short_name' => 'CI','long_name' => 'Cote D\'Ivoire','iso3' => 'CIV','num_code' => '384','phone_code' => '225','stripe_country'=>'No'],
      ['short_name' => 'HR','long_name' => 'Croatia','iso3' => 'HRV','num_code' => '191','phone_code' => '385','stripe_country'=>'No'],
      ['short_name' => 'CU','long_name' => 'Cuba','iso3' => 'CUB','num_code' => '192','phone_code' => '53','stripe_country'=>'No'],
      ['short_name' => 'CY','long_name' => 'Cyprus','iso3' => 'CYP','num_code' => '196','phone_code' => '357','stripe_country'=>'No'],
      ['short_name' => 'CZ','long_name' => 'Czech Republic','iso3' => 'CZE','num_code' => '203','phone_code' => '420','stripe_country'=>'No'],
      ['short_name' => 'DK','long_name' => 'Denmark','iso3' => 'DNK','num_code' => '208','phone_code' => '45','stripe_country'=>'Yes'],
      ['short_name' => 'DJ','long_name' => 'Djibouti','iso3' => 'DJI','num_code' => '262','phone_code' => '253','stripe_country'=>'No'],
      ['short_name' => 'DM','long_name' => 'Dominica','iso3' => 'DMA','num_code' => '212','phone_code' => '1','stripe_country'=>'No'],
      ['short_name' => 'DO','long_name' => 'Dominican Republic','iso3' => 'DOM','num_code' => '214','phone_code' => '1','stripe_country'=>'No'],
      ['short_name' => 'EC','long_name' => 'Ecuador','iso3' => 'ECU','num_code' => '218','phone_code' => '593','stripe_country'=>'No'],
      ['short_name' => 'EG','long_name' => 'Egypt','iso3' => 'EGY','num_code' => '818','phone_code' => '20','stripe_country'=>'No'],
      ['short_name' => 'SV','long_name' => 'El Salvador','iso3' => 'SLV','num_code' => '222','phone_code' => '503','stripe_country'=>'No'],
      ['short_name' => 'GQ','long_name' => 'Equatorial Guinea','iso3' => 'GNQ','num_code' => '226','phone_code' => '240','stripe_country'=>'No'],
      ['short_name' => 'ER','long_name' => 'Eritrea','iso3' => 'ERI','num_code' => '232','phone_code' => '291','stripe_country'=>'No'],
      ['short_name' => 'EE','long_name' => 'Estonia','iso3' => 'EST','num_code' => '233','phone_code' => '372','stripe_country'=>'No'],
      ['short_name' => 'ET','long_name' => 'Ethiopia','iso3' => 'ETH','num_code' => '231','phone_code' => '251','stripe_country'=>'No'],
      ['short_name' => 'FK','long_name' => 'Falkland Islands (Malvinas)','iso3' => 'FLK','num_code' => '238','phone_code' => '500','stripe_country'=>'No'],
      ['short_name' => 'FO','long_name' => 'Faroe Islands','iso3' => 'FRO','num_code' => '234','phone_code' => '298','stripe_country'=>'No'],
      ['short_name' => 'FJ','long_name' => 'Fiji','iso3' => 'FJI','num_code' => '242','phone_code' => '679','stripe_country'=>'No'],
      ['short_name' => 'FI','long_name' => 'Finland','iso3' => 'FIN','num_code' => '246','phone_code' => '358','stripe_country'=>'Yes'],
      ['short_name' => 'FR','long_name' => 'France','iso3' => 'FRA','num_code' => '250','phone_code' => '33','stripe_country'=>'Yes'],
      ['short_name' => 'GF','long_name' => 'French Guiana','iso3' => 'GUF','num_code' => '254','phone_code' => '594','stripe_country'=>'No'],
      ['short_name' => 'PF','long_name' => 'French Polynesia','iso3' => 'PYF','num_code' => '258','phone_code' => '689','stripe_country'=>'No'],
      ['short_name' => 'TF','long_name' => 'French Southern Territories','iso3' => NULL,'num_code' => NULL,'phone_code' => '0','stripe_country'=>'No'],
      ['short_name' => 'GA','long_name' => 'Gabon','iso3' => 'GAB','num_code' => '266','phone_code' => '241','stripe_country'=>'No'],
      ['short_name' => 'GM','long_name' => 'Gambia','iso3' => 'GMB','num_code' => '270','phone_code' => '220','stripe_country'=>'No'],
      ['short_name' => 'GE','long_name' => 'Georgia','iso3' => 'GEO','num_code' => '268','phone_code' => '995','stripe_country'=>'No'],
      ['short_name' => 'DE','long_name' => 'Germany','iso3' => 'DEU','num_code' => '276','phone_code' => '49','stripe_country'=>'Yes'],
      ['short_name' => 'GH','long_name' => 'Ghana','iso3' => 'GHA','num_code' => '288','phone_code' => '233','stripe_country'=>'No'],
      ['short_name' => 'GI','long_name' => 'Gibraltar','iso3' => 'GIB','num_code' => '292','phone_code' => '350','stripe_country'=>'No'],
      ['short_name' => 'GR','long_name' => 'Greece','iso3' => 'GRC','num_code' => '300','phone_code' => '30','stripe_country'=>'No'],
      ['short_name' => 'GL','long_name' => 'Greenland','iso3' => 'GRL','num_code' => '304','phone_code' => '299','stripe_country'=>'No'],
      ['short_name' => 'GD','long_name' => 'Grenada','iso3' => 'GRD','num_code' => '308','phone_code' => '1','stripe_country'=>'No'],
      ['short_name' => 'GP','long_name' => 'Guadeloupe','iso3' => 'GLP','num_code' => '312','phone_code' => '590','stripe_country'=>'No'],
      ['short_name' => 'GU','long_name' => 'Guam','iso3' => 'GUM','num_code' => '316','phone_code' => '1','stripe_country'=>'No'],
      ['short_name' => 'GT','long_name' => 'Guatemala','iso3' => 'GTM','num_code' => '320','phone_code' => '502','stripe_country'=>'No'],
      ['short_name' => 'GN','long_name' => 'Guinea','iso3' => 'GIN','num_code' => '324','phone_code' => '224','stripe_country'=>'No'],
      ['short_name' => 'GW','long_name' => 'Guinea-Bissau','iso3' => 'GNB','num_code' => '624','phone_code' => '245','stripe_country'=>'No'],
      ['short_name' => 'GY','long_name' => 'Guyana','iso3' => 'GUY','num_code' => '328','phone_code' => '592','stripe_country'=>'No'],
      ['short_name' => 'HT','long_name' => 'Haiti','iso3' => 'HTI','num_code' => '332','phone_code' => '509','stripe_country'=>'No'],
      ['short_name' => 'HM','long_name' => 'Heard Island and Mcdonald Islands','iso3' => NULL,'num_code' => NULL,'phone_code' => '0','stripe_country'=>'No'],
      ['short_name' => 'VA','long_name' => 'Holy See (Vatican City State)','iso3' => 'VAT','num_code' => '336','phone_code' => '39','stripe_country'=>'No'],
      ['short_name' => 'HN','long_name' => 'Honduras','iso3' => 'HND','num_code' => '340','phone_code' => '504','stripe_country'=>'No'],
      ['short_name' => 'HK','long_name' => 'Hong Kong','iso3' => 'HKG','num_code' => '344','phone_code' => '852','stripe_country'=>'Yes'],
      ['short_name' => 'HU','long_name' => 'Hungary','iso3' => 'HUN','num_code' => '348','phone_code' => '36','stripe_country'=>'No'],
      ['short_name' => 'IS','long_name' => 'Iceland','iso3' => 'ISL','num_code' => '352','phone_code' => '354','stripe_country'=>'No'],
      ['short_name' => 'IN','long_name' => 'India','iso3' => 'IND','num_code' => '356','phone_code' => '91','stripe_country'=>'No'],
      ['short_name' => 'ID','long_name' => 'Indonesia','iso3' => 'IDN','num_code' => '360','phone_code' => '62','stripe_country'=>'No'],
      ['short_name' => 'IR','long_name' => 'Iran, Islamic Republic of','iso3' => 'IRN','num_code' => '364','phone_code' => '98','stripe_country'=>'No'],
      ['short_name' => 'IQ','long_name' => 'Iraq','iso3' => 'IRQ','num_code' => '368','phone_code' => '964','stripe_country'=>'No'],
      ['short_name' => 'IE','long_name' => 'Ireland','iso3' => 'IRL','num_code' => '372','phone_code' => '353','stripe_country'=>'Yes'],
      ['short_name' => 'IL','long_name' => 'Israel','iso3' => 'ISR','num_code' => '376','phone_code' => '972','stripe_country'=>'No'],
      ['short_name' => 'IT','long_name' => 'Italy','iso3' => 'ITA','num_code' => '380','phone_code' => '39','stripe_country'=>'Yes'],
      ['short_name' => 'JM','long_name' => 'Jamaica','iso3' => 'JAM','num_code' => '388','phone_code' => '1','stripe_country'=>'No'],
      ['short_name' => 'JP','long_name' => 'Japan','iso3' => 'JPN','num_code' => '392','phone_code' => '81','stripe_country'=>'Yes'],
      ['short_name' => 'JO','long_name' => 'Jordan','iso3' => 'JOR','num_code' => '400','phone_code' => '962','stripe_country'=>'No'],
      ['short_name' => 'KZ','long_name' => 'Kazakhstan','iso3' => 'KAZ','num_code' => '398','phone_code' => '7','stripe_country'=>'No'],
      ['short_name' => 'KE','long_name' => 'Kenya','iso3' => 'KEN','num_code' => '404','phone_code' => '254','stripe_country'=>'No'],
      ['short_name' => 'KI','long_name' => 'Kiribati','iso3' => 'KIR','num_code' => '296','phone_code' => '686','stripe_country'=>'No'],
      ['short_name' => 'KP','long_name' => 'Korea, Democratic People\'s Republic of','iso3' => 'PRK','num_code' => '408','phone_code' => '850','stripe_country'=>'No'],
      ['short_name' => 'KR','long_name' => 'Korea, Republic of','iso3' => 'KOR','num_code' => '410','phone_code' => '82','stripe_country'=>'No'],
      ['short_name' => 'KW','long_name' => 'Kuwait','iso3' => 'KWT','num_code' => '414','phone_code' => '965','stripe_country'=>'No'],
      ['short_name' => 'KG','long_name' => 'Kyrgyzstan','iso3' => 'KGZ','num_code' => '417','phone_code' => '996','stripe_country'=>'No'],
      ['short_name' => 'LA','long_name' => 'Lao People\'s Democratic Republic','iso3' => 'LAO','num_code' => '418','phone_code' => '856','stripe_country'=>'No'],
      ['short_name' => 'LV','long_name' => 'Latvia','iso3' => 'LVA','num_code' => '428','phone_code' => '371','stripe_country'=>'No'],
      ['short_name' => 'LB','long_name' => 'Lebanon','iso3' => 'LBN','num_code' => '422','phone_code' => '961','stripe_country'=>'No'],
      ['short_name' => 'LS','long_name' => 'Lesotho','iso3' => 'LSO','num_code' => '426','phone_code' => '266','stripe_country'=>'No'],
      ['short_name' => 'LR','long_name' => 'Liberia','iso3' => 'LBR','num_code' => '430','phone_code' => '231','stripe_country'=>'No'],
      ['short_name' => 'LY','long_name' => 'Libyan Arab Jamahiriya','iso3' => 'LBY','num_code' => '434','phone_code' => '218','stripe_country'=>'No'],
      ['short_name' => 'LI','long_name' => 'Liechtenstein','iso3' => 'LIE','num_code' => '438','phone_code' => '423','stripe_country'=>'No'],
      ['short_name' => 'LT','long_name' => 'Lithuania','iso3' => 'LTU','num_code' => '440','phone_code' => '370','stripe_country'=>'No'],
      ['short_name' => 'LU','long_name' => 'Luxembourg','iso3' => 'LUX','num_code' => '442','phone_code' => '352','stripe_country'=>'Yes'],
      ['short_name' => 'MO','long_name' => 'Macao','iso3' => 'MAC','num_code' => '446','phone_code' => '853','stripe_country'=>'No'],
      ['short_name' => 'MK','long_name' => 'Macedonia, the Former Yugoslav Republic of','iso3' => 'MKD','num_code' => '807','phone_code' => '389','stripe_country'=>'No'],
      ['short_name' => 'MG','long_name' => 'Madagascar','iso3' => 'MDG','num_code' => '450','phone_code' => '261','stripe_country'=>'No'],
      ['short_name' => 'MW','long_name' => 'Malawi','iso3' => 'MWI','num_code' => '454','phone_code' => '265','stripe_country'=>'No'],
      ['short_name' => 'MY','long_name' => 'Malaysia','iso3' => 'MYS','num_code' => '458','phone_code' => '60','stripe_country'=>'No'],
      ['short_name' => 'MV','long_name' => 'Maldives','iso3' => 'MDV','num_code' => '462','phone_code' => '960','stripe_country'=>'No'],
      ['short_name' => 'ML','long_name' => 'Mali','iso3' => 'MLI','num_code' => '466','phone_code' => '223','stripe_country'=>'No'],
      ['short_name' => 'MT','long_name' => 'Malta','iso3' => 'MLT','num_code' => '470','phone_code' => '356','stripe_country'=>'No'],
      ['short_name' => 'MH','long_name' => 'Marshall Islands','iso3' => 'MHL','num_code' => '584','phone_code' => '692','stripe_country'=>'No'],
      ['short_name' => 'MQ','long_name' => 'Martinique','iso3' => 'MTQ','num_code' => '474','phone_code' => '596','stripe_country'=>'No'],
      ['short_name' => 'MR','long_name' => 'Mauritania','iso3' => 'MRT','num_code' => '478','phone_code' => '222','stripe_country'=>'No'],
      ['short_name' => 'MU','long_name' => 'Mauritius','iso3' => 'MUS','num_code' => '480','phone_code' => '230','stripe_country'=>'No'],
      ['short_name' => 'YT','long_name' => 'Mayotte','iso3' => NULL,'num_code' => NULL,'phone_code' => '269','stripe_country'=>'No'],
      ['short_name' => 'MX','long_name' => 'Mexico','iso3' => 'MEX','num_code' => '484','phone_code' => '52','stripe_country'=>'No'],
      ['short_name' => 'FM','long_name' => 'Micronesia, Federated States of','iso3' => 'FSM','num_code' => '583','phone_code' => '691','stripe_country'=>'No'],
      ['short_name' => 'MD','long_name' => 'Moldova, Republic of','iso3' => 'MDA','num_code' => '498','phone_code' => '373','stripe_country'=>'No'],
      ['short_name' => 'MC','long_name' => 'Monaco','iso3' => 'MCO','num_code' => '492','phone_code' => '377','stripe_country'=>'No'],
      ['short_name' => 'MN','long_name' => 'Mongolia','iso3' => 'MNG','num_code' => '496','phone_code' => '976','stripe_country'=>'No'],
      ['short_name' => 'MS','long_name' => 'Montserrat','iso3' => 'MSR','num_code' => '500','phone_code' => '1','stripe_country'=>'No'],
      ['short_name' => 'MA','long_name' => 'Morocco','iso3' => 'MAR','num_code' => '504','phone_code' => '212','stripe_country'=>'No'],
      ['short_name' => 'MZ','long_name' => 'Mozambique','iso3' => 'MOZ','num_code' => '508','phone_code' => '258','stripe_country'=>'No'],
      ['short_name' => 'MM','long_name' => 'Myanmar','iso3' => 'MMR','num_code' => '104','phone_code' => '95','stripe_country'=>'No'],
      ['short_name' => 'NA','long_name' => 'Namibia','iso3' => 'NAM','num_code' => '516','phone_code' => '264','stripe_country'=>'No'],
      ['short_name' => 'NR','long_name' => 'Nauru','iso3' => 'NRU','num_code' => '520','phone_code' => '674','stripe_country'=>'No'],
      ['short_name' => 'NP','long_name' => 'Nepal','iso3' => 'NPL','num_code' => '524','phone_code' => '977','stripe_country'=>'No'],
      ['short_name' => 'NL','long_name' => 'Netherlands','iso3' => 'NLD','num_code' => '528','phone_code' => '31','stripe_country'=>'Yes'],
      ['short_name' => 'AN','long_name' => 'Netherlands Antilles','iso3' => 'ANT','num_code' => '530','phone_code' => '599','stripe_country'=>'No'],
      ['short_name' => 'NC','long_name' => 'New Caledonia','iso3' => 'NCL','num_code' => '540','phone_code' => '687','stripe_country'=>'No'],
      ['short_name' => 'NZ','long_name' => 'New Zealand','iso3' => 'NZL','num_code' => '554','phone_code' => '64','stripe_country'=>'Yes'],
      ['short_name' => 'NI','long_name' => 'Nicaragua','iso3' => 'NIC','num_code' => '558','phone_code' => '505','stripe_country'=>'No'],
      ['short_name' => 'NE','long_name' => 'Niger','iso3' => 'NER','num_code' => '562','phone_code' => '227','stripe_country'=>'No'],
      ['short_name' => 'NG','long_name' => 'Nigeria','iso3' => 'NGA','num_code' => '566','phone_code' => '234','stripe_country'=>'No'],
      ['short_name' => 'NU','long_name' => 'Niue','iso3' => 'NIU','num_code' => '570','phone_code' => '683','stripe_country'=>'No'],
      ['short_name' => 'NF','long_name' => 'Norfolk Island','iso3' => 'NFK','num_code' => '574','phone_code' => '672','stripe_country'=>'No'],
      ['short_name' => 'MP','long_name' => 'Northern Mariana Islands','iso3' => 'MNP','num_code' => '580','phone_code' => '1','stripe_country'=>'No'],
      ['short_name' => 'NO','long_name' => 'Norway','iso3' => 'NOR','num_code' => '578','phone_code' => '47','stripe_country'=>'Yes'],
      ['short_name' => 'OM','long_name' => 'Oman','iso3' => 'OMN','num_code' => '512','phone_code' => '968','stripe_country'=>'No'],
      ['short_name' => 'PK','long_name' => 'Pakistan','iso3' => 'PAK','num_code' => '586','phone_code' => '92','stripe_country'=>'No'],
      ['short_name' => 'PW','long_name' => 'Palau','iso3' => 'PLW','num_code' => '585','phone_code' => '680','stripe_country'=>'No'],
      ['short_name' => 'PS','long_name' => 'Palestinian Territory, Occupied','iso3' => NULL,'num_code' => NULL,'phone_code' => '970','stripe_country'=>'No'],
      ['short_name' => 'PA','long_name' => 'Panama','iso3' => 'PAN','num_code' => '591','phone_code' => '507','stripe_country'=>'No'],
      ['short_name' => 'PG','long_name' => 'Papua New Guinea','iso3' => 'PNG','num_code' => '598','phone_code' => '675','stripe_country'=>'No'],
      ['short_name' => 'PY','long_name' => 'Paraguay','iso3' => 'PRY','num_code' => '600','phone_code' => '595','stripe_country'=>'No'],
      ['short_name' => 'PE','long_name' => 'Peru','iso3' => 'PER','num_code' => '604','phone_code' => '51','stripe_country'=>'No'],
      ['short_name' => 'PH','long_name' => 'Philippines','iso3' => 'PHL','num_code' => '608','phone_code' => '63','stripe_country'=>'No'],
      ['short_name' => 'PN','long_name' => 'Pitcairn','iso3' => 'PCN','num_code' => '612','phone_code' => '0','stripe_country'=>'No'],
      ['short_name' => 'PL','long_name' => 'Poland','iso3' => 'POL','num_code' => '616','phone_code' => '48','stripe_country'=>'No'],
      ['short_name' => 'PT','long_name' => 'Portugal','iso3' => 'PRT','num_code' => '620','phone_code' => '351','stripe_country'=>'Yes'],
      ['short_name' => 'PR','long_name' => 'Puerto Rico','iso3' => 'PRI','num_code' => '630','phone_code' => '1','stripe_country'=>'No'],
      ['short_name' => 'QA','long_name' => 'Qatar','iso3' => 'QAT','num_code' => '634','phone_code' => '974','stripe_country'=>'No'],
      ['short_name' => 'RE','long_name' => 'Reunion','iso3' => 'REU','num_code' => '638','phone_code' => '262','stripe_country'=>'No'],
      ['short_name' => 'RO','long_name' => 'Romania','iso3' => 'ROM','num_code' => '642','phone_code' => '40','stripe_country'=>'No'],
      ['short_name' => 'RU','long_name' => 'Russian Federation','iso3' => 'RUS','num_code' => '643','phone_code' => '70','stripe_country'=>'No'],
      ['short_name' => 'RW','long_name' => 'Rwanda','iso3' => 'RWA','num_code' => '646','phone_code' => '250','stripe_country'=>'No'],
      ['short_name' => 'SH','long_name' => 'Saint Helena','iso3' => 'SHN','num_code' => '654','phone_code' => '290','stripe_country'=>'No'],
      ['short_name' => 'KN','long_name' => 'Saint Kitts and Nevis','iso3' => 'KNA','num_code' => '659','phone_code' => '1','stripe_country'=>'No'],
      ['short_name' => 'LC','long_name' => 'Saint Lucia','iso3' => 'LCA','num_code' => '662','phone_code' => '1','stripe_country'=>'No'],
      ['short_name' => 'PM','long_name' => 'Saint Pierre and Miquelon','iso3' => 'SPM','num_code' => '666','phone_code' => '508','stripe_country'=>'No'],
      ['short_name' => 'VC','long_name' => 'Saint Vincent and the Grenadines','iso3' => 'VCT','num_code' => '670','phone_code' => '1','stripe_country'=>'No'],
      ['short_name' => 'WS','long_name' => 'Samoa','iso3' => 'WSM','num_code' => '882','phone_code' => '684','stripe_country'=>'No'],
      ['short_name' => 'SM','long_name' => 'San Marino','iso3' => 'SMR','num_code' => '674','phone_code' => '378','stripe_country'=>'No'],
      ['short_name' => 'ST','long_name' => 'Sao Tome and Principe','iso3' => 'STP','num_code' => '678','phone_code' => '239','stripe_country'=>'No'],
      ['short_name' => 'SA','long_name' => 'Saudi Arabia','iso3' => 'SAU','num_code' => '682','phone_code' => '966','stripe_country'=>'No'],
      ['short_name' => 'SN','long_name' => 'Senegal','iso3' => 'SEN','num_code' => '686','phone_code' => '221','stripe_country'=>'No'],
      ['short_name' => 'RS','long_name' => 'Serbia and Montenegro','iso3' => NULL,'num_code' => NULL,'phone_code' => '381','stripe_country'=>'No'],
      ['short_name' => 'SC','long_name' => 'Seychelles','iso3' => 'SYC','num_code' => '690','phone_code' => '248','stripe_country'=>'No'],
      ['short_name' => 'SL','long_name' => 'Sierra Leone','iso3' => 'SLE','num_code' => '694','phone_code' => '232','stripe_country'=>'No'],
      ['short_name' => 'SG','long_name' => 'Singapore','iso3' => 'SGP','num_code' => '702','phone_code' => '65','stripe_country'=>'Yes'],
      ['short_name' => 'SK','long_name' => 'Slovakia','iso3' => 'SVK','num_code' => '703','phone_code' => '421','stripe_country'=>'No'],
      ['short_name' => 'SI','long_name' => 'Slovenia','iso3' => 'SVN','num_code' => '705','phone_code' => '386','stripe_country'=>'No'],
      ['short_name' => 'SB','long_name' => 'Solomon Islands','iso3' => 'SLB','num_code' => '90','phone_code' => '677','stripe_country'=>'No'],
      ['short_name' => 'SO','long_name' => 'Somalia','iso3' => 'SOM','num_code' => '706','phone_code' => '252','stripe_country'=>'No'],
      ['short_name' => 'ZA','long_name' => 'South Africa','iso3' => 'ZAF','num_code' => '710','phone_code' => '27','stripe_country'=>'No'],
      ['short_name' => 'GS','long_name' => 'South Georgia and the South Sandwich Islands','iso3' => NULL,'num_code' => NULL,'phone_code' => '0','stripe_country'=>'No'],
      ['short_name' => 'ES','long_name' => 'Spain','iso3' => 'ESP','num_code' => '724','phone_code' => '34','stripe_country'=>'Yes'],
      ['short_name' => 'LK','long_name' => 'Sri Lanka','iso3' => 'LKA','num_code' => '144','phone_code' => '94','stripe_country'=>'No'],
      ['short_name' => 'SD','long_name' => 'Sudan','iso3' => 'SDN','num_code' => '736','phone_code' => '249','stripe_country'=>'No'],
      ['short_name' => 'SS','long_name' => 'South Sudan','iso3' => 'SSD','num_code' => '728','phone_code' => '211','stripe_country'=>'No'],
      ['short_name' => 'SR','long_name' => 'Suriname','iso3' => 'SUR','num_code' => '740','phone_code' => '597','stripe_country'=>'No'],
      ['short_name' => 'SJ','long_name' => 'Svalbard and Jan Mayen','iso3' => 'SJM','num_code' => '744','phone_code' => '47','stripe_country'=>'No'],
      ['short_name' => 'SZ','long_name' => 'Swaziland','iso3' => 'SWZ','num_code' => '748','phone_code' => '268','stripe_country'=>'No'],
      ['short_name' => 'SE','long_name' => 'Sweden','iso3' => 'SWE','num_code' => '752','phone_code' => '46','stripe_country'=>'Yes'],
      ['short_name' => 'CH','long_name' => 'Switzerland','iso3' => 'CHE','num_code' => '756','phone_code' => '41','stripe_country'=>'Yes'],
      ['short_name' => 'SY','long_name' => 'Syrian Arab Republic','iso3' => 'SYR','num_code' => '760','phone_code' => '963','stripe_country'=>'No'],
      ['short_name' => 'TW','long_name' => 'Taiwan, Province of China','iso3' => 'TWN','num_code' => '158','phone_code' => '886','stripe_country'=>'No'],
      ['short_name' => 'TJ','long_name' => 'Tajikistan','iso3' => 'TJK','num_code' => '762','phone_code' => '992','stripe_country'=>'No'],
      ['short_name' => 'TZ','long_name' => 'Tanzania, United Republic of','iso3' => 'TZA','num_code' => '834','phone_code' => '255','stripe_country'=>'No'],
      ['short_name' => 'TH','long_name' => 'Thailand','iso3' => 'THA','num_code' => '764','phone_code' => '66','stripe_country'=>'No'],
      ['short_name' => 'TL','long_name' => 'Timor-Leste','iso3' => NULL,'num_code' => NULL,'phone_code' => '670','stripe_country'=>'No'],
      ['short_name' => 'TG','long_name' => 'Togo','iso3' => 'TGO','num_code' => '768','phone_code' => '228','stripe_country'=>'No'],
      ['short_name' => 'TK','long_name' => 'Tokelau','iso3' => 'TKL','num_code' => '772','phone_code' => '690','stripe_country'=>'No'],
      ['short_name' => 'TO','long_name' => 'Tonga','iso3' => 'TON','num_code' => '776','phone_code' => '676','stripe_country'=>'No'],
      ['short_name' => 'TT','long_name' => 'Trinidad and Tobago','iso3' => 'TTO','num_code' => '780','phone_code' => '1','stripe_country'=>'No'],
      ['short_name' => 'TN','long_name' => 'Tunisia','iso3' => 'TUN','num_code' => '788','phone_code' => '216','stripe_country'=>'No'],
      ['short_name' => 'TR','long_name' => 'Turkey','iso3' => 'TUR','num_code' => '792','phone_code' => '90','stripe_country'=>'No'],
      ['short_name' => 'TM','long_name' => 'Turkmenistan','iso3' => 'TKM','num_code' => '795','phone_code' => '7370','stripe_country'=>'No'],
      ['short_name' => 'TC','long_name' => 'Turks and Caicos Islands','iso3' => 'TCA','num_code' => '796','phone_code' => '1','stripe_country'=>'No'],
      ['short_name' => 'TV','long_name' => 'Tuvalu','iso3' => 'TUV','num_code' => '798','phone_code' => '688','stripe_country'=>'No'],
      ['short_name' => 'UG','long_name' => 'Uganda','iso3' => 'UGA','num_code' => '800','phone_code' => '256','stripe_country'=>'No'],
      ['short_name' => 'UA','long_name' => 'Ukraine','iso3' => 'UKR','num_code' => '804','phone_code' => '380','stripe_country'=>'No'],
      ['short_name' => 'AE','long_name' => 'United Arab Emirates','iso3' => 'ARE','num_code' => '784','phone_code' => '971','stripe_country'=>'No'],
      ['short_name' => 'GB','long_name' => 'United Kingdom','iso3' => 'GBR','num_code' => '826','phone_code' => '44','stripe_country'=>'Yes'],
      ['short_name' => 'US','long_name' => 'United States','iso3' => 'USA','num_code' => '840','phone_code' => '1','stripe_country'=>'Yes'],
      ['short_name' => 'UM','long_name' => 'United States Minor Outlying Islands','iso3' => NULL,'num_code' => NULL,'phone_code' => '1','stripe_country'=>'No'],
      ['short_name' => 'UY','long_name' => 'Uruguay','iso3' => 'URY','num_code' => '858','phone_code' => '598','stripe_country'=>'No'],
      ['short_name' => 'UZ','long_name' => 'Uzbekistan','iso3' => 'UZB','num_code' => '860','phone_code' => '998','stripe_country'=>'No'],
      ['short_name' => 'VU','long_name' => 'Vanuatu','iso3' => 'VUT','num_code' => '548','phone_code' => '678','stripe_country'=>'No'],
      ['short_name' => 'VE','long_name' => 'Venezuela','iso3' => 'VEN','num_code' => '862','phone_code' => '58','stripe_country'=>'No'],
      ['short_name' => 'VN','long_name' => 'Viet Nam','iso3' => 'VNM','num_code' => '704','phone_code' => '84','stripe_country'=>'No'],
      ['short_name' => 'VG','long_name' => 'Virgin Islands, British','iso3' => 'VGB','num_code' => '92','phone_code' => '1','stripe_country'=>'No'],
      ['short_name' => 'VI','long_name' => 'Virgin Islands, U.s.','iso3' => 'VIR','num_code' => '850','phone_code' => '1','stripe_country'=>'No'],
      ['short_name' => 'WF','long_name' => 'Wallis and Futuna','iso3' => 'WLF','num_code' => '876','phone_code' => '681','stripe_country'=>'No'],
      ['short_name' => 'EH','long_name' => 'Western Sahara','iso3' => 'ESH','num_code' => '732','phone_code' => '212','stripe_country'=>'No'],
      ['short_name' => 'YE','long_name' => 'Yemen','iso3' => 'YEM','num_code' => '887','phone_code' => '967','stripe_country'=>'No'],
      ['short_name' => 'ZM','long_name' => 'Zambia','iso3' => 'ZMB','num_code' => '894','phone_code' => '260','stripe_country'=>'No'],
      ['short_name' => 'ZW','long_name' => 'Zimbabwe','iso3' => 'ZWE','num_code' => '716','phone_code' => '263','stripe_country'=>'No'],

          ]);
    }
}
