<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currencies = array(
            array('code' => 'AED','symbol' => 'د.إ','name' => 'United Arab Emirates dirham','fractional_unit' => 'Fils','created_at' => '2020-08-22 05:54:42','updated_at' => '2020-08-22 05:54:42'),
            array('code' => 'AFN','symbol' => '؋','name' => 'Afghan afghani','fractional_unit' => 'Pul','created_at' => '2020-08-22 05:54:43','updated_at' => '2020-08-22 05:54:43'),
            array('code' => 'ALL','symbol' => 'L','name' => 'Albanian lek','fractional_unit' => 'Qintar','created_at' => '2020-08-22 05:54:43','updated_at' => '2020-08-22 05:54:43'),
            array('code' => 'AMD','symbol' => 'դր.','name' => 'Armenian dram','fractional_unit' => 'Luma','created_at' => '2020-08-22 05:54:43','updated_at' => '2020-08-22 05:54:43'),
            array('code' => 'ANG','symbol' => 'ƒ','name' => 'Netherlands Antillean guilder','fractional_unit' => 'Cent','created_at' => '2020-08-22 05:54:43','updated_at' => '2020-08-22 05:54:43'),
            array('code' => 'AOA','symbol' => 'Kz','name' => 'Angolan kwanza','fractional_unit' => 'Cêntimo','created_at' => '2020-08-22 05:54:43','updated_at' => '2020-08-22 05:54:43'),
            array('code' => 'ARS','symbol' => '$','name' => 'Argentine peso','fractional_unit' => 'Centavo','created_at' => '2020-08-22 05:54:43','updated_at' => '2020-08-22 05:54:43'),
            array('code' => 'AUD','symbol' => 'A$','name' => 'Australian dollar','fractional_unit' => 'Cent','created_at' => '2020-08-22 05:54:43','updated_at' => '2020-08-22 05:54:43'),
            array('code' => 'AWG','symbol' => 'ƒ','name' => 'Aruban florin','fractional_unit' => 'Cent','created_at' => '2020-08-22 05:54:43','updated_at' => '2020-08-22 05:54:43'),
            array('code' => 'AZN','symbol' => '₼','name' => 'Azerbaijani manat','fractional_unit' => 'Qəpik','created_at' => '2020-08-22 05:54:43','updated_at' => '2020-08-22 05:54:43'),
            array('code' => 'BAM','symbol' => 'КМ','name' => 'Bosnia and Herzegovina convertible mark','fractional_unit' => 'Fening','created_at' => '2020-08-22 05:54:43','updated_at' => '2020-08-22 05:54:43'),
            array('code' => 'BBD','symbol' => '$','name' => 'Barbadian dollar','fractional_unit' => 'Cent','created_at' => '2020-08-22 05:54:43','updated_at' => '2020-08-22 05:54:43'),
            array('code' => 'BDT','symbol' => '৳','name' => 'Bangladeshi taka','fractional_unit' => 'Paisa','created_at' => '2020-08-22 05:54:43','updated_at' => '2020-08-22 05:54:43'),
            array('code' => 'BGN','symbol' => 'лв','name' => 'Bulgarian lev','fractional_unit' => 'Stotinka','created_at' => '2020-08-22 05:54:44','updated_at' => '2020-08-22 05:54:44'),
            array('code' => 'BHD','symbol' => 'ب.د','name' => 'Bahraini dinar','fractional_unit' => 'Fils','created_at' => '2020-08-22 05:54:44','updated_at' => '2020-08-22 05:54:44'),
            array('code' => 'BIF','symbol' => 'Fr','name' => 'Burundian franc','fractional_unit' => 'Centime','created_at' => '2020-08-22 05:54:44','updated_at' => '2020-08-22 05:54:44'),
            array('code' => 'BMD','symbol' => '$','name' => 'Bermudian dollar','fractional_unit' => 'Cent','created_at' => '2020-08-22 05:54:44','updated_at' => '2020-08-22 05:54:44'),
            array('code' => 'BND','symbol' => '$','name' => 'Brunei dollar','fractional_unit' => 'Sen','created_at' => '2020-08-22 05:54:44','updated_at' => '2020-08-22 05:54:44'),
            array('code' => 'BOB','symbol' => 'Bs.','name' => 'Bolivian boliviano','fractional_unit' => 'Centavo','created_at' => '2020-08-22 05:54:44','updated_at' => '2020-08-22 05:54:44'),
            array('code' => 'BRL','symbol' => 'R$','name' => 'Brazilian real','fractional_unit' => 'Centavo','created_at' => '2020-08-22 05:54:44','updated_at' => '2020-08-22 05:54:44'),
            array('code' => 'BSD','symbol' => '$','name' => 'Bahamian dollar','fractional_unit' => 'Cent','created_at' => '2020-08-22 05:54:44','updated_at' => '2020-08-22 05:54:44'),
            array('code' => 'BTN','symbol' => 'Nu.','name' => 'Bhutanese ngultrum','fractional_unit' => 'Chertrum','created_at' => '2020-08-22 05:54:44','updated_at' => '2020-08-22 05:54:44'),
            array('code' => 'BWP','symbol' => 'P','name' => 'Botswana pula','fractional_unit' => 'Thebe','created_at' => '2020-08-22 05:54:44','updated_at' => '2020-08-22 05:54:44'),
            array('code' => 'BYR','symbol' => 'Br','name' => 'Belarusian ruble','fractional_unit' => 'Kapyeyka','created_at' => '2020-08-22 05:54:44','updated_at' => '2020-08-22 05:54:44'),
            array('code' => 'BZD','symbol' => '$','name' => 'Belize dollar','fractional_unit' => 'Cent','created_at' => '2020-08-22 05:54:44','updated_at' => '2020-08-22 05:54:44'),
            array('code' => 'CAD','symbol' => '$','name' => 'Canadian dollar','fractional_unit' => 'Cent','created_at' => '2020-08-22 05:54:44','updated_at' => '2020-08-22 05:54:44'),
            array('code' => 'CDF','symbol' => 'Fr','name' => 'Congolese franc','fractional_unit' => 'Centime','created_at' => '2020-08-22 05:54:44','updated_at' => '2020-08-22 05:54:44'),
            array('code' => 'CHF','symbol' => 'Fr','name' => 'Swiss franc','fractional_unit' => 'Rappen','created_at' => '2020-08-22 05:54:44','updated_at' => '2020-08-22 05:54:44'),
            array('code' => 'CLP','symbol' => '$','name' => 'Chilean peso','fractional_unit' => 'Centavo','created_at' => '2020-08-22 05:54:44','updated_at' => '2020-08-22 05:54:44'),
            array('code' => 'CNY','symbol' => '元','name' => 'Chinese yuan','fractional_unit' => 'Fen','created_at' => '2020-08-22 05:54:44','updated_at' => '2020-08-22 05:54:44'),
            array('code' => 'COP','symbol' => '$','name' => 'Colombian peso','fractional_unit' => 'Centavo','created_at' => '2020-08-22 05:54:45','updated_at' => '2020-08-22 05:54:45'),
            array('code' => 'CRC','symbol' => '₡','name' => 'Costa Rican colón','fractional_unit' => 'Céntimo','created_at' => '2020-08-22 05:54:45','updated_at' => '2020-08-22 05:54:45'),
            array('code' => 'CUC','symbol' => '$','name' => 'Cuban convertible peso','fractional_unit' => 'Centavo','created_at' => '2020-08-22 05:54:45','updated_at' => '2020-08-22 05:54:45'),
            array('code' => 'CUP','symbol' => '$','name' => 'Cuban peso','fractional_unit' => 'Centavo','created_at' => '2020-08-22 05:54:45','updated_at' => '2020-08-22 05:54:45'),
            array('code' => 'CVE','symbol' => 'Esc','name' => 'Cape Verdean escudo','fractional_unit' => 'Centavo','created_at' => '2020-08-22 05:54:45','updated_at' => '2020-08-22 05:54:45'),
            array('code' => 'CZK','symbol' => 'Kč','name' => 'Czech koruna','fractional_unit' => 'Haléř','created_at' => '2020-08-22 05:54:45','updated_at' => '2020-08-22 05:54:45'),
            array('code' => 'DJF','symbol' => 'Fr','name' => 'Djiboutian franc','fractional_unit' => 'Centime','created_at' => '2020-08-22 05:54:45','updated_at' => '2020-08-22 05:54:45'),
            array('code' => 'DKK','symbol' => 'kr','name' => 'Danish krone','fractional_unit' => 'Øre','created_at' => '2020-08-22 05:54:45','updated_at' => '2020-08-22 05:54:45'),
            array('code' => 'DOP','symbol' => '$','name' => 'Dominican peso','fractional_unit' => 'Centavo','created_at' => '2020-08-22 05:54:45','updated_at' => '2020-08-22 05:54:45'),
            array('code' => 'DZD','symbol' => 'د.ج','name' => 'Algerian dinar','fractional_unit' => 'Centime','created_at' => '2020-08-22 05:54:45','updated_at' => '2020-08-22 05:54:45'),
            array('code' => 'EEK','symbol' => 'KR','name' => 'Estonian kroon','fractional_unit' => 'Sent','created_at' => '2020-08-22 05:54:45','updated_at' => '2020-08-22 05:54:45'),
            array('code' => 'EGP','symbol' => 'ج.م','name' => 'Egyptian pound','fractional_unit' => 'Piastre','created_at' => '2020-08-22 05:54:45','updated_at' => '2020-08-22 05:54:45'),
            array('code' => 'ERN','symbol' => 'Nfk','name' => 'Eritrean nakfa','fractional_unit' => 'Cent','created_at' => '2020-08-22 05:54:45','updated_at' => '2020-08-22 05:54:45'),
            array('code' => 'ETB','symbol' => 'ብር','name' => 'Ethiopian birr','fractional_unit' => 'Santim','created_at' => '2020-08-22 05:54:45','updated_at' => '2020-08-22 05:54:45'),
            array('code' => 'EUR','symbol' => '€','name' => 'Euro','fractional_unit' => 'Cent','created_at' => '2020-08-22 05:54:45','updated_at' => '2020-08-22 05:54:45'),
            array('code' => 'FJD','symbol' => '$','name' => 'Fijian dollar','fractional_unit' => 'Cent','created_at' => '2020-08-22 05:54:45','updated_at' => '2020-08-22 05:54:45'),
            array('code' => 'FKP','symbol' => '£','name' => 'Falkland Islands pound','fractional_unit' => 'Penny','created_at' => '2020-08-22 05:54:46','updated_at' => '2020-08-22 05:54:46'),
            array('code' => 'GBP','symbol' => '£','name' => 'British pound','fractional_unit' => 'Penny','created_at' => '2020-08-22 05:54:46','updated_at' => '2020-08-22 05:54:46'),
            array('code' => 'GEL','symbol' => 'ლ','name' => 'Georgian lari','fractional_unit' => 'Tetri','created_at' => '2020-08-22 05:54:46','updated_at' => '2020-08-22 05:54:46'),
            array('code' => 'GHS','symbol' => '₵','name' => 'Ghanaian cedi','fractional_unit' => 'Pesewa','created_at' => '2020-08-22 05:54:46','updated_at' => '2020-08-22 05:54:46'),
            array('code' => 'GIP','symbol' => '£','name' => 'Gibraltar pound','fractional_unit' => 'Penny','created_at' => '2020-08-22 05:54:46','updated_at' => '2020-08-22 05:54:46'),
            array('code' => 'GMD','symbol' => 'D','name' => 'Gambian dalasi','fractional_unit' => 'Butut','created_at' => '2020-08-22 05:54:46','updated_at' => '2020-08-22 05:54:46'),
            array('code' => 'GNF','symbol' => 'Fr','name' => 'Guinean franc','fractional_unit' => 'Centime','created_at' => '2020-08-22 05:54:46','updated_at' => '2020-08-22 05:54:46'),
            array('code' => 'GTQ','symbol' => 'Q','name' => 'Guatemalan quetzal','fractional_unit' => 'Centavo','created_at' => '2020-08-22 05:54:46','updated_at' => '2020-08-22 05:54:46'),
            array('code' => 'GYD','symbol' => '$','name' => 'Guyanese dollar','fractional_unit' => 'Cent','created_at' => '2020-08-22 05:54:46','updated_at' => '2020-08-22 05:54:46'),
            array('code' => 'HKD','symbol' => '$','name' => 'Hong Kong dollar','fractional_unit' => 'Cent','created_at' => '2020-08-22 05:54:46','updated_at' => '2020-08-22 05:54:46'),
            array('code' => 'HNL','symbol' => 'L','name' => 'Honduran lempira','fractional_unit' => 'Centavo','created_at' => '2020-08-22 05:54:46','updated_at' => '2020-08-22 05:54:46'),
            array('code' => 'HRK','symbol' => 'kn','name' => 'Croatian kuna','fractional_unit' => 'Lipa','created_at' => '2020-08-22 05:54:46','updated_at' => '2020-08-22 05:54:46'),
            array('code' => 'HTG','symbol' => 'G','name' => 'Haitian gourde','fractional_unit' => 'Centime','created_at' => '2020-08-22 05:54:46','updated_at' => '2020-08-22 05:54:46'),
            array('code' => 'HUF','symbol' => 'Ft','name' => 'Hungarian forint','fractional_unit' => 'Fillér','created_at' => '2020-08-22 05:54:46','updated_at' => '2020-08-22 05:54:46'),
            array('code' => 'IDR','symbol' => 'Rp','name' => 'Indonesian rupiah','fractional_unit' => 'Sen','created_at' => '2020-08-22 05:54:46','updated_at' => '2020-08-22 05:54:46'),
            array('code' => 'ILS','symbol' => '₪','name' => 'Israeli new sheqel','fractional_unit' => 'Agora','created_at' => '2020-08-22 05:54:46','updated_at' => '2020-08-22 05:54:46'),
            array('code' => 'INR','symbol' => '₹','name' => 'Indian rupee','fractional_unit' => 'Paisa','created_at' => '2020-08-22 05:54:46','updated_at' => '2020-08-22 05:54:46'),
            array('code' => 'IQD','symbol' => 'ع.د','name' => 'Iraqi dinar','fractional_unit' => 'Fils','created_at' => '2020-08-22 05:54:47','updated_at' => '2020-08-22 05:54:47'),
            array('code' => 'IRR','symbol' => '﷼','name' => 'Iranian rial','fractional_unit' => 'Dinar','created_at' => '2020-08-22 05:54:47','updated_at' => '2020-08-22 05:54:47'),
            array('code' => 'ISK','symbol' => 'kr','name' => 'Icelandic króna','fractional_unit' => 'Eyrir','created_at' => '2020-08-22 05:54:47','updated_at' => '2020-08-22 05:54:47'),
            array('code' => 'JMD','symbol' => '$','name' => 'Jamaican dollar','fractional_unit' => 'Cent','created_at' => '2020-08-22 05:54:47','updated_at' => '2020-08-22 05:54:47'),
            array('code' => 'JOD','symbol' => 'د.ا','name' => 'Jordanian dinar','fractional_unit' => 'Piastre','created_at' => '2020-08-22 05:54:47','updated_at' => '2020-08-22 05:54:47'),
            array('code' => 'JPY','symbol' => '¥','name' => 'Japanese yen','fractional_unit' => 'Sen','created_at' => '2020-08-22 05:54:47','updated_at' => '2020-08-22 05:54:47'),
            array('code' => 'KES','symbol' => 'Sh','name' => 'Kenyan shilling','fractional_unit' => 'Cent','created_at' => '2020-08-22 05:54:47','updated_at' => '2020-08-22 05:54:47'),
            array('code' => 'KGS','symbol' => 'Лв','name' => 'Kyrgyzstani som','fractional_unit' => 'Tyiyn','created_at' => '2020-08-22 05:54:47','updated_at' => '2020-08-22 05:54:47'),
            array('code' => 'KHR','symbol' => '៛','name' => 'Cambodian riel','fractional_unit' => 'Sen','created_at' => '2020-08-22 05:54:47','updated_at' => '2020-08-22 05:54:47'),
            array('code' => 'KMF','symbol' => 'Fr','name' => 'Comorian franc','fractional_unit' => 'Centime','created_at' => '2020-08-22 05:54:47','updated_at' => '2020-08-22 05:54:47'),
            array('code' => 'KPW','symbol' => '₩','name' => 'North Korean won','fractional_unit' => 'Chŏn','created_at' => '2020-08-22 05:54:47','updated_at' => '2020-08-22 05:54:47'),
            array('code' => 'KRW','symbol' => '₩','name' => 'South Korean won','fractional_unit' => 'Jeon','created_at' => '2020-08-22 05:54:47','updated_at' => '2020-08-22 05:54:47'),
            array('code' => 'KWD','symbol' => 'د.ك','name' => 'Kuwaiti dinar','fractional_unit' => 'Fils','created_at' => '2020-08-22 05:54:47','updated_at' => '2020-08-22 05:54:47'),
            array('code' => 'KYD','symbol' => '$','name' => 'Cayman Islands dollar','fractional_unit' => 'Cent','created_at' => '2020-08-22 05:54:47','updated_at' => '2020-08-22 05:54:47'),
            array('code' => 'KZT','symbol' => '〒','name' => 'Kazakhstani tenge','fractional_unit' => 'Tiyn','created_at' => '2020-08-22 05:54:47','updated_at' => '2020-08-22 05:54:47'),
            array('code' => 'LAK','symbol' => '₭','name' => 'Lao kip','fractional_unit' => 'Att','created_at' => '2020-08-22 05:54:47','updated_at' => '2020-08-22 05:54:47'),
            array('code' => 'LBP','symbol' => 'ل.ل','name' => 'Lebanese pound','fractional_unit' => 'Piastre','created_at' => '2020-08-22 05:54:47','updated_at' => '2020-08-22 05:54:47'),
            array('code' => 'LKR','symbol' => 'Rs','name' => 'Sri Lankan rupee','fractional_unit' => 'Cent','created_at' => '2020-08-22 05:54:47','updated_at' => '2020-08-22 05:54:47'),
            array('code' => 'LRD','symbol' => '$','name' => 'Liberian dollar','fractional_unit' => 'Cent','created_at' => '2020-08-22 05:54:47','updated_at' => '2020-08-22 05:54:47'),
            array('code' => 'LSL','symbol' => 'L','name' => 'Lesotho loti','fractional_unit' => 'Sente','created_at' => '2020-08-22 05:54:47','updated_at' => '2020-08-22 05:54:47'),
            array('code' => 'LTL','symbol' => 'Lt','name' => 'Lithuanian litas','fractional_unit' => 'Centas','created_at' => '2020-08-22 05:54:47','updated_at' => '2020-08-22 05:54:47'),
            array('code' => 'LVL','symbol' => 'Ls','name' => 'Latvian lats','fractional_unit' => 'Santīms','created_at' => '2020-08-22 05:54:48','updated_at' => '2020-08-22 05:54:48'),
            array('code' => 'LYD','symbol' => 'ل.د','name' => 'Libyan dinar','fractional_unit' => 'Dirham','created_at' => '2020-08-22 05:54:48','updated_at' => '2020-08-22 05:54:48'),
            array('code' => 'MAD','symbol' => 'د.م.','name' => 'Moroccan dirham','fractional_unit' => 'Centime','created_at' => '2020-08-22 05:54:48','updated_at' => '2020-08-22 05:54:48'),
            array('code' => 'MDL','symbol' => 'L','name' => 'Moldovan leu','fractional_unit' => 'Ban','created_at' => '2020-08-22 05:54:48','updated_at' => '2020-08-22 05:54:48'),
            array('code' => 'MGA','symbol' => 'Ar','name' => 'Malagasy ariary','fractional_unit' => 'Iraimbilanja','created_at' => '2020-08-22 05:54:48','updated_at' => '2020-08-22 05:54:48'),
            array('code' => 'MKD','symbol' => 'ден','name' => 'Macedonian denar','fractional_unit' => 'Deni','created_at' => '2020-08-22 05:54:48','updated_at' => '2020-08-22 05:54:48'),
            array('code' => 'MMK','symbol' => 'K','name' => 'Myanma kyat','fractional_unit' => 'Pya','created_at' => '2020-08-22 05:54:48','updated_at' => '2020-08-22 05:54:48'),
            array('code' => 'MNT','symbol' => '₮','name' => 'Mongolian tögrög','fractional_unit' => 'Möngö','created_at' => '2020-08-22 05:54:48','updated_at' => '2020-08-22 05:54:48'),
            array('code' => 'MOP','symbol' => 'P','name' => 'Macanese pataca','fractional_unit' => 'Avo','created_at' => '2020-08-22 05:54:48','updated_at' => '2020-08-22 05:54:48'),
            array('code' => 'MRO','symbol' => 'UM','name' => 'Mauritanian ouguiya','fractional_unit' => 'Khoums','created_at' => '2020-08-22 05:54:48','updated_at' => '2020-08-22 05:54:48'),
            array('code' => 'MUR','symbol' => '₨','name' => 'Mauritian rupee','fractional_unit' => 'Cent','created_at' => '2020-08-22 05:54:48','updated_at' => '2020-08-22 05:54:48'),
            array('code' => 'MVR','symbol' => 'ރ.','name' => 'Maldivian rufiyaa','fractional_unit' => 'Laari','created_at' => '2020-08-22 05:54:48','updated_at' => '2020-08-22 05:54:48'),
            array('code' => 'MWK','symbol' => 'MK','name' => 'Malawian kwacha','fractional_unit' => 'Tambala','created_at' => '2020-08-22 05:54:49','updated_at' => '2020-08-22 05:54:49'),
            array('code' => 'MXN','symbol' => '$','name' => 'Mexican peso','fractional_unit' => 'Centavo','created_at' => '2020-08-22 05:54:49','updated_at' => '2020-08-22 05:54:49'),
            array('code' => 'MYR','symbol' => 'RM','name' => 'Malaysian ringgit','fractional_unit' => 'Sen','created_at' => '2020-08-22 05:54:49','updated_at' => '2020-08-22 05:54:49'),
            array('code' => 'MZN','symbol' => 'MTn','name' => 'Mozambican metical','fractional_unit' => 'Centavo','created_at' => '2020-08-22 05:54:49','updated_at' => '2020-08-22 05:54:49'),
            array('code' => 'NAD','symbol' => '$','name' => 'Namibian dollar','fractional_unit' => 'Cent','created_at' => '2020-08-22 05:54:49','updated_at' => '2020-08-22 05:54:49'),
            array('code' => 'NGN','symbol' => '₦','name' => 'Nigerian naira','fractional_unit' => 'Kobo','created_at' => '2020-08-22 05:54:50','updated_at' => '2020-08-22 05:54:50'),
            array('code' => 'NIO','symbol' => 'C$','name' => 'Nicaraguan córdoba','fractional_unit' => 'Centavo','created_at' => '2020-08-22 05:54:50','updated_at' => '2020-08-22 05:54:50'),
            array('code' => 'NOK','symbol' => 'kr','name' => 'Norwegian krone','fractional_unit' => 'Øre','created_at' => '2020-08-22 05:54:50','updated_at' => '2020-08-22 05:54:50'),
            array('code' => 'NPR','symbol' => '₨','name' => 'Nepalese rupee','fractional_unit' => 'Paisa','created_at' => '2020-08-22 05:54:50','updated_at' => '2020-08-22 05:54:50'),
            array('code' => 'NZD','symbol' => '$','name' => 'New Zealand dollar','fractional_unit' => 'Cent','created_at' => '2020-08-22 05:54:50','updated_at' => '2020-08-22 05:54:50'),
            array('code' => 'OMR','symbol' => 'ر.ع.','name' => 'Omani rial','fractional_unit' => 'Baisa','created_at' => '2020-08-22 05:54:50','updated_at' => '2020-08-22 05:54:50'),
            array('code' => 'PAB','symbol' => 'B/.','name' => 'Panamanian balboa','fractional_unit' => 'Centésimo','created_at' => '2020-08-22 05:54:50','updated_at' => '2020-08-22 05:54:50'),
            array('code' => 'PEN','symbol' => 'S/.','name' => 'Peruvian nuevo sol','fractional_unit' => 'Céntimo','created_at' => '2020-08-22 05:54:50','updated_at' => '2020-08-22 05:54:50'),
            array('code' => 'PGK','symbol' => 'K','name' => 'Papua New Guinean kina','fractional_unit' => 'Toea','created_at' => '2020-08-22 05:54:50','updated_at' => '2020-08-22 05:54:50'),
            array('code' => 'PHP','symbol' => '₱','name' => 'Philippine peso','fractional_unit' => 'Centavo','created_at' => '2020-08-22 05:54:50','updated_at' => '2020-08-22 05:54:50'),
            array('code' => 'PKR','symbol' => '₨','name' => 'Pakistani rupee','fractional_unit' => 'Paisa','created_at' => '2020-08-22 05:54:50','updated_at' => '2020-08-22 05:54:50'),
            array('code' => 'PLN','symbol' => 'zł','name' => 'Polish złoty','fractional_unit' => 'Grosz','created_at' => '2020-08-22 05:54:50','updated_at' => '2020-08-22 05:54:50'),
            array('code' => 'PYG','symbol' => '₲','name' => 'Paraguayan guaraní','fractional_unit' => 'Céntimo','created_at' => '2020-08-22 05:54:50','updated_at' => '2020-08-22 05:54:50'),
            array('code' => 'QAR','symbol' => 'ر.ق','name' => 'Qatari riyal','fractional_unit' => 'Dirham','created_at' => '2020-08-22 05:54:50','updated_at' => '2020-08-22 05:54:50'),
            array('code' => 'RON','symbol' => 'L','name' => 'Romanian leu','fractional_unit' => 'Ban','created_at' => '2020-08-22 05:54:50','updated_at' => '2020-08-22 05:54:50'),
            array('code' => 'RSD','symbol' => 'дин.','name' => 'Serbian dinar','fractional_unit' => 'Para','created_at' => '2020-08-22 05:54:51','updated_at' => '2020-08-22 05:54:51'),
            array('code' => 'RUB','symbol' => 'руб.','name' => 'Russian ruble','fractional_unit' => 'Kopek','created_at' => '2020-08-22 05:54:51','updated_at' => '2020-08-22 05:54:51'),
            array('code' => 'RWF','symbol' => 'Fr','name' => 'Rwandan franc','fractional_unit' => 'Centime','created_at' => '2020-08-22 05:54:51','updated_at' => '2020-08-22 05:54:51'),
            array('code' => 'SAR','symbol' => 'ر.س','name' => 'Saudi riyal','fractional_unit' => 'Hallallah','created_at' => '2020-08-22 05:54:51','updated_at' => '2020-08-22 05:54:51'),
            array('code' => 'SBD','symbol' => '$','name' => 'Solomon Islands dollar','fractional_unit' => 'Cent','created_at' => '2020-08-22 05:54:51','updated_at' => '2020-08-22 05:54:51'),
            array('code' => 'SCR','symbol' => '₨','name' => 'Seychellois rupee','fractional_unit' => 'Cent','created_at' => '2020-08-22 05:54:51','updated_at' => '2020-08-22 05:54:51'),
            array('code' => 'SDG','symbol' => '£','name' => 'Sudanese pound','fractional_unit' => 'Piastre','created_at' => '2020-08-22 05:54:51','updated_at' => '2020-08-22 05:54:51'),
            array('code' => 'SEK','symbol' => 'kr','name' => 'Swedish krona','fractional_unit' => 'Öre','created_at' => '2020-08-22 05:54:51','updated_at' => '2020-08-22 05:54:51'),
            array('code' => 'SGD','symbol' => '$','name' => 'Singapore dollar','fractional_unit' => 'Cent','created_at' => '2020-08-22 05:54:51','updated_at' => '2020-08-22 05:54:51'),
            array('code' => 'SHP','symbol' => '£','name' => 'Saint Helena pound','fractional_unit' => 'Penny','created_at' => '2020-08-22 05:54:51','updated_at' => '2020-08-22 05:54:51'),
            array('code' => 'SLL','symbol' => 'Le','name' => 'Sierra Leonean leone','fractional_unit' => 'Cent','created_at' => '2020-08-22 05:54:51','updated_at' => '2020-08-22 05:54:51'),
            array('code' => 'SOS','symbol' => 'Sh','name' => 'Somali shilling','fractional_unit' => 'Cent','created_at' => '2020-08-22 05:54:51','updated_at' => '2020-08-22 05:54:51'),
            array('code' => 'SRD','symbol' => '$','name' => 'Surinamese dollar','fractional_unit' => 'Cent','created_at' => '2020-08-22 05:54:51','updated_at' => '2020-08-22 05:54:51'),
            array('code' => 'STD','symbol' => 'Db','name' => 'São Tomé and Príncipe dobra','fractional_unit' => 'Cêntimo','created_at' => '2020-08-22 05:54:52','updated_at' => '2020-08-22 05:54:52'),
            array('code' => 'SVC','symbol' => '₡','name' => 'Salvadoran colón','fractional_unit' => 'Centavo','created_at' => '2020-08-22 05:54:52','updated_at' => '2020-08-22 05:54:52'),
            array('code' => 'SYP','symbol' => 'ل.س','name' => 'Syrian pound','fractional_unit' => 'Piastre','created_at' => '2020-08-22 05:54:52','updated_at' => '2020-08-22 05:54:52'),
            array('code' => 'SZL','symbol' => 'L','name' => 'Swazi lilangeni','fractional_unit' => 'Cent','created_at' => '2020-08-22 05:54:52','updated_at' => '2020-08-22 05:54:52'),
            array('code' => 'THB','symbol' => '฿','name' => 'Thai baht','fractional_unit' => 'Satang','created_at' => '2020-08-22 05:54:52','updated_at' => '2020-08-22 05:54:52'),
            array('code' => 'TJS','symbol' => 'ЅМ','name' => 'Tajikistani somoni','fractional_unit' => 'Diram','created_at' => '2020-08-22 05:54:52','updated_at' => '2020-08-22 05:54:52'),
            array('code' => 'TMM','symbol' => 'm','name' => 'Turkmenistani manat','fractional_unit' => 'Tennesi','created_at' => '2020-08-22 05:54:52','updated_at' => '2020-08-22 05:54:52'),
            array('code' => 'TND','symbol' => 'د.ت','name' => 'Tunisian dinar','fractional_unit' => 'Millime','created_at' => '2020-08-22 05:54:52','updated_at' => '2020-08-22 05:54:52'),
            array('code' => 'TOP','symbol' => 'T$','name' => 'Tongan paʻanga','fractional_unit' => 'Seniti','created_at' => '2020-08-22 05:54:52','updated_at' => '2020-08-22 05:54:52'),
            array('code' => 'TRY','symbol' => '₺','name' => 'Turkish lira','fractional_unit' => 'Kuruş','created_at' => '2020-08-22 05:54:52','updated_at' => '2020-08-22 05:54:52'),
            array('code' => 'TTD','symbol' => '$','name' => 'Trinidad and Tobago dollar','fractional_unit' => 'Cent','created_at' => '2020-08-22 05:54:52','updated_at' => '2020-08-22 05:54:52'),
            array('code' => 'TWD','symbol' => '$','name' => 'New Taiwan dollar','fractional_unit' => 'Cent','created_at' => '2020-08-22 05:54:52','updated_at' => '2020-08-22 05:54:52'),
            array('code' => 'TZS','symbol' => 'Sh','name' => 'Tanzanian shilling','fractional_unit' => 'Cent','created_at' => '2020-08-22 05:54:52','updated_at' => '2020-08-22 05:54:52'),
            array('code' => 'UAH','symbol' => '₴','name' => 'Ukrainian hryvnia','fractional_unit' => 'Kopiyka','created_at' => '2020-08-22 05:54:52','updated_at' => '2020-08-22 05:54:52'),
            array('code' => 'UGX','symbol' => 'Sh','name' => 'Ugandan shilling','fractional_unit' => 'Cent','created_at' => '2020-08-22 05:54:52','updated_at' => '2020-08-22 05:54:52'),
            array('code' => 'USD','symbol' => '$','name' => 'United States dollar','fractional_unit' => 'Cent','created_at' => '2020-08-22 05:54:53','updated_at' => '2020-08-22 05:54:53'),
            array('code' => 'UYU','symbol' => '$','name' => 'Uruguayan peso','fractional_unit' => 'Centésimo','created_at' => '2020-08-22 05:54:53','updated_at' => '2020-08-22 05:54:53'),
            array('code' => 'UZS','symbol' => 'лв','name' => 'Uzbekistani som','fractional_unit' => 'Tiyin','created_at' => '2020-08-22 05:54:53','updated_at' => '2020-08-22 05:54:53'),
            array('code' => 'VEF','symbol' => 'Bs F','name' => 'Venezuelan bolívar','fractional_unit' => 'Céntimo','created_at' => '2020-08-22 05:54:53','updated_at' => '2020-08-22 05:54:53'),
            array('code' => 'VND','symbol' => '₫','name' => 'Vietnamese đồng','fractional_unit' => 'Hào','created_at' => '2020-08-22 05:54:53','updated_at' => '2020-08-22 05:54:53'),
            array('code' => 'VUV','symbol' => 'Vt','name' => 'Vanuatu vatu','fractional_unit' => 'None','created_at' => '2020-08-22 05:54:53','updated_at' => '2020-08-22 05:54:53'),
            array('code' => 'WST','symbol' => 'T','name' => 'Samoan tala','fractional_unit' => 'Sene','created_at' => '2020-08-22 05:54:53','updated_at' => '2020-08-22 05:54:53'),
            array('code' => 'XAF','symbol' => 'Fr','name' => 'Central African CFA franc','fractional_unit' => 'Centime','created_at' => '2020-08-22 05:54:53','updated_at' => '2020-08-22 05:54:53'),
            array('code' => 'XCD','symbol' => '$','name' => 'East Caribbean dollar','fractional_unit' => 'Cent','created_at' => '2020-08-22 05:54:53','updated_at' => '2020-08-22 05:54:53'),
            array('code' => 'XOF','symbol' => 'Fr','name' => 'West African CFA franc','fractional_unit' => 'Centime','created_at' => '2020-08-22 05:54:53','updated_at' => '2020-08-22 05:54:53'),
            array('code' => 'XPF','symbol' => 'Fr','name' => 'CFP franc','fractional_unit' => 'Centime','created_at' => '2020-08-22 05:54:53','updated_at' => '2020-08-22 05:54:53'),
            array('code' => 'YER','symbol' => '﷼','name' => 'Yemeni rial','fractional_unit' => 'Fils','created_at' => '2020-08-22 05:54:53','updated_at' => '2020-08-22 05:54:53'),
            array('code' => 'ZAR','symbol' => 'R','name' => 'South African rand','fractional_unit' => 'Cent','created_at' => '2020-08-22 05:54:53','updated_at' => '2020-08-22 05:54:53'),
            array('code' => 'ZMK','symbol' => 'ZK','name' => 'Zambian kwacha','fractional_unit' => 'Ngwee','created_at' => '2020-08-22 05:54:53','updated_at' => '2020-08-22 05:54:53'),
            array('code' => 'ZWL','symbol' => '$','name' => 'Zimbabwean dollar','fractional_unit' => 'Cent','created_at' => '2020-08-22 05:54:54','updated_at' => '2020-08-22 05:54:54')
        );

        foreach ($currencies as $key => $currency) {
            Currency::create($currency);
        }
    }
}