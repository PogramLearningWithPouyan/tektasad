<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menu = [[
            "fa" => [
                "title" => "سالاد فصل",
                "desc" => "کاهو، گوجه فرنگی، خیار، هویج، کلم قرمز، (روغن زیتون، آبلیمو، سس آنار)",
                "img" => "",
                "category" => "سالاد ها"
            ],
            "en" => [
                "title" => "Seasonal Salad",
                "desc" => "Lettuce, tomato, cucumber, carrot, red cabbage (Olive oil, lemon, pomegranate sauce)",
                "img" => "",
                "category" => "Salads"
            ],
            "ar" => [
                "title" => "Seasonal Salad",
                "desc" => "خس، طماطم، خيار، جزر، كرفس أحمر (زيتون زيت، ليمون، صلصة رمان)",
                "img" => "",
                "category" => "سلطة"
            ],
            "tr" => [
                "title" => "Seasonal Salad",
                "desc" => "Marul, domates, salatalık, havuç, kırmızı lahana (Zeytinyağı, limon, nar sosu)",
                "img" => "",
                "category" => "Salatalar"
            ],],
            [
                "fa" => [
                    "title" => "سالاد باغچه",
                    "desc" => "پنیر سفید، کلم بروکلی تازه، کاهو، گوجه فرنگی، خیار، (روغن زیتون، آبلیمو، سس آنار)",
                    "img" => "",
                    "category" => "سالاد ها"
                ],
                "en" => [
                    "title" => "Garden Salad",
                    "desc" => "White cheese, fresh broccoli, lettuce, tomatoes, cucumbers (Olive oil, lemon, pomegranate sauce)",
                    "img" => "",
                    "category" => "Salads"
                ],
                "ar" => [
                    "title" => "Garden Salad",
                    "desc" => "جبن أبيض، بروكلي طازج، خس، طماطم، خيار (زيتون زيت، ليمون، صلصة رمان)",
                    "img" => "",
                    "category" => "سلطة"
                ],
                "tr" => [
                    "title" => "Garden Salad",
                    "desc" => "Beyaz peynir, taze brokoli, marul, domates, salatalık (Zeytinyağı, limon, nar sosu)",
                    "img" => "",
                    "category" => "Salatalar"
                ]
            ],
            [
                "fa" => [
                    "title" => "سالاد آواکادو",
                    "desc" => "آووکادو، فیله مرغ گریل شده، گردو، کاهو، گوجه فرنگی، خیار، هویج، کلم قرمز، (روغن زیتون، آبلیمو، سس آنار)",
                    "img" => "",
                    "category" => "سالاد ها"
                ],
                "en" => [
                    "title" => "Avocado Salad",
                    "desc" => "Avocado, grilled chicken fillet, walnuts, lettuce, tomatoes, cucumbers, carrots, red cabbage (Olive oil, lemon, pomegranate sauce)",
                    "img" => "",
                    "category" => "Salads"
                ],
                "ar" => [
                    "title" => "Avocado Salad",
                    "desc" => "أفوكادو، صدر الدجاج المشوي، جوز، خس، طماطم، خيار، جزر، كرفس أحمر (زيتون زيت، ليمون، صلصة رمان)",
                    "img" => "",
                    "category" => "سلطة"
                ],
                "tr" => [
                    "title" => "Avocado Salad",
                    "desc" => "Avokado, ızgara tavuk göğsü, ceviz, marul, domates, salatalık, havuç, kırmızı lahana (Zeytinyağı, limon, nar sosu)",
                    "img" => "",
                    "category" => "Salatalar"
                ]
            ],
            [
                "fa" => [
                    "title" => "سالاد میوه",
                    "desc" => "بشقابی از بهترین میوه‌های فصل",
                    "img" => "",
                    "category" => "سالاد ها"
                ],
                "en" => [
                    "title" => "Fruit Salad",
                    "desc" => "A plate of the best seasonal fruits",
                    "img" => "",
                    "category" => "Salads"
                ],
                "ar" => [
                    "title" => "Fruit Salad",
                    "desc" => "صحن من أفضل الفواكه الطازجة",
                    "img" => "",
                    "category" => "سلطة"
                ],
                "tr" => [
                    "title" => "Fruit Salad",
                    "desc" => "En iyi meyvelerin bulunduğu tabak",
                    "img" => "",
                    "category" => "Salatalar"
                ]
            ],
            [
                "fa" => [
                    "title" => "سالاد شیرازی",
                    "desc" => "خیار، گوجه، پیاز، آبلیمو، روغن زیتون",
                    "img" => "",
                    "category" => "سالاد ها"
                ],
                "en" => [
                    "title" => "Shirazi Salad",
                    "desc" => "Cucumber, tomato, onion, lemon, olive oil",
                    "img" => "",
                    "category" => "Salads"
                ],
                "ar" => [
                    "title" => "Shirazi Salad",
                    "desc" => "خيار، طماطم، بصل، ليمون، زيتون زيت",
                    "img" => "",
                    "category" => "سلطة"
                ],
                "tr" => [
                    "title" => "Shirazi Salad",
                    "desc" => "Salatalık, domates, soğan, limon, zeytinyağı",
                    "img" => "",
                    "category" => "Salatalar"
                ]
            ],
            [
                "fa" => [
                    "title" => "بورانی اسفناج",
                    "desc" => "ماست، اسفناج، سیر",
                    "img" => "",
                    "category" => "مزه ها"
                ],
                "en" => [
                    "title" => "Spinach Borani",
                    "desc" => "Yogurt, spinach, garlic",
                    "img" => "",
                    "category" => "Appetizers"
                ],
                "ar" => [
                    "title" => "Spinach Borani",
                    "desc" => "لبن، سبانخ، ثوم",
                    "img" => "",
                    "category" => "مقبلات"
                ],
                "tr" => [
                    "title" => "Spinach Borani",
                    "desc" => "Yoğurt, ıspanak, sarımsak",
                    "img" => "",
                    "category" => "Mezeler"
                ]
            ],
            [
                "fa" => [
                    "title" => "بورانی بادمجان",
                    "desc" => "ماست، بادمجان، سیر، ارده",
                    "img" => "",
                    "category" => "مزه ها"
                ],
                "en" => [
                    "title" => "Eggplant Borani",
                    "desc" => "Yogurt, eggplant, garlic, mint",
                    "img" => "",
                    "category" => "Appetizers"
                ],
                "ar" => [
                    "title" => "Eggplant Borani",
                    "desc" => "لبن، باذنجان، ثوم، نعناع",
                    "img" => "",
                    "category" => "مقبلات"
                ],
                "tr" => [
                    "title" => "Eggplant Borani",
                    "desc" => "Yoğurt, patlıcan, sarımsak, nane",
                    "img" => "",
                    "category" => "Mezeler"
                ]
            ],
            [
                "fa" => [
                    "title" => "ماست و خیار",
                    "desc" => "ماست، خیار خرد شده، نعناع",
                    "img" => "",
                    "category" => "مزه ها"
                ],
                "en" => [
                    "title" => "Yogurt and Cucumber",
                    "desc" => "Yogurt, chopped cucumber, mint",
                    "img" => "",
                    "category" => "Appetizers"
                ],
                "ar" => [
                    "title" => "Yogurt and Cucumber",
                    "desc" => "زبادي، خيار مقطع، نعناع",
                    "img" => "",
                    "category" => "مقبلات"
                ],
                "tr" => [
                    "title" => "Yogurt and Cucumber",
                    "desc" => "Yoğurt, doğranmış salatalık, nane",
                    "img" => "",
                    "category" => "Mezeler"
                ]
            ],
            [
                "fa" => [
                    "title" => "سیر ترشی",
                    "desc" => "حبه‌های سیر، سرکه",
                    "img" => "",
                    "category" => "مزه ها"
                ],
                "en" => [
                    "title" => "sir turshi",
                    "desc" => "Cloves of garlic, vinegar",
                    "img" => "",
                    "category" => "Appetizers"
                ],
                "ar" => [
                    "title" => "sir turshi",
                    "desc" => "فصوص الثوم، خل",
                    "img" => "",
                    "category" => "مقبلات"
                ],
                "tr" => [
                    "title" => "sir turshi",
                    "desc" => "Sarımsak dişleri, sirke",
                    "img" => "",
                    "category" => "Ara Sıcaklar"
                ]
            ],
            [
                "fa" => [
                    "title" => "ترشی لیته",
                    "desc" => "بادمجان، نعنا، گیشنیز، فلفل، سیر",
                    "img" => "",
                    "category" => "مزه ها"
                ],
                "en" => [
                    "title" => "Liteh Pickle",
                    "desc" => "Eggplant, mint, coriander, pepper, garlic",
                    "img" => "",
                    "category" => "Appetizers"
                ],
                "ar" => [
                    "title" => "ليته مخلل",
                    "desc" => "باذنجان، نعناع، كزبرة، فلفل، ثوم",
                    "img" => "",
                    "category" => "مقبلات"
                ],
                "tr" => [
                    "title" => "Liteh Turşu",
                    "desc" => "Patlıcan, nane, kişniş, biber, sarımsak",
                    "img" => "",
                    "category" => "Ara Sıcaklar"
                ]
            ],
            [
                "fa" => [
                    "title" => "زیتون پرورده",
                    "desc" => "زیتون، گیشنیز، گردو، سیر، رب انار",
                    "img" => "",
                    "category" => "مزه ها"
                ],
                "en" => [
                    "title" => "Zeytun parvarde",
                    "desc" => "Olives, coriander, walnuts, garlic, pomegranate paste",
                    "img" => "",
                    "category" => "Appetizers"
                ],
                "ar" => [
                    "title" => "Zeytun parvarde",
                    "desc" => "زيتون، كزبرة، جوز، ثوم، معجون الرمان",
                    "img" => "",
                    "category" => "مقبلات"
                ],
                "tr" => [
                    "title" => "Zeytun parvarde",
                    "desc" => "Zeytin, kişniş, ceviz, sarımsak, nar pekmezi",
                    "img" => "",
                    "category" => "Ara Sıcaklar"
                ]
            ],
            [
                "fa" => [
                    "title" => "سوپ جو",
                    "desc" => "جو پوست‌کنده، هویج، خامه تازه",
                    "img" => "",
                    "category" => "سوپ ها"
                ],
                "en" => [
                    "title" => "Barley Soup",
                    "desc" => "Pearled barley, carrot, fresh cream",
                    "img" => "",
                    "category" => "Soups"
                ],
                "ar" => [
                    "title" => "Barley Soup",
                    "desc" => "شعير مقشر، جزر، كريمة طازجة",
                    "img" => "",
                    "category" => "شوربات"
                ],
                "tr" => [
                    "title" => "Barley Soup",
                    "desc" => "Arpa şehriye, havuç, taze krema",
                    "img" => "",
                    "category" => "Çorbalar"
                ]
            ],
            [
                "fa" => [
                    "title" => "سوپ دال عدس",
                    "desc" => "دال عدس، کدو، سیب زمینی، هویج، پیاز",
                    "img" => "",
                    "category" => "سوپ ها"
                ],
                "en" => [
                    "title" => "Lentil Soup",
                    "desc" => "Lentils, zucchini, potato, carrot, onion",
                    "img" => "",
                    "category" => "Soups"
                ],
                "ar" => [
                    "title" => "Lentil Soup",
                    "desc" => "عدس، كوسة، بطاطا، جزر، بصل",
                    "img" => "",
                    "category" => "شوربات"
                ],
                "tr" => [
                    "title" => "Lentil Soup",
                    "desc" => "Mercimek, kabak, patates, havuç, soğan",
                    "img" => "",
                    "category" => "Çorbalar"
                ]
            ],
            [
                "fa" => [
                    "title" => "چلو زعفرانی",
                    "desc" => "گرم 260 برنج ایرانی درجه یک، زعفران قائنات ، کره 10 گرمی بسته بندی",
                    "img" => "",
                    "category" => "برنج ها"
                ],
                "en" => [
                    "title" => "Saffron Rice",
                    "desc" => "260g premium Iranian rice, Qaenat saffron, 10g packaged butter",
                    "img" => "",
                    "category" => "Rice Dishes"
                ],
                "ar" => [
                    "title" => "Saffron Rice",
                    "desc" => "260 جم من الأرز الإيراني الفاخر، زعفران قائنات، 10 جم زبدة معبأة",
                    "img" => "",
                    "category" => "أطباق الأرز"
                ],
                "tr" => [
                    "title" => "Saffron Rice",
                    "desc" => "260g premium İran pirinci, Qaenat safran, 10g paketlenmiş tereyağı",
                    "img" => "",
                    "category" => "Pilavlar"
                ]
            ],
            [
                "fa" => [
                    "title" => "زرشک پلو",
                    "desc" => "برنج هاشمی درجه یک ، زرشک، خلال بادام، خلال پسته، زعفران قائنات",
                    "img" => "",
                    "category" => "برنج ها"
                ],
                "en" => [
                    "title" => "Zereshk Polo",
                    "desc" => "Premium Hashemi rice, barberries, chopped almonds, chopped pistachios, Qaenat saffron",
                    "img" => "",
                    "category" => "Rice Dishes"
                ],
                "ar" => [
                    "title" => "Zereshk Polo",
                    "desc" => "أرز هاشمي فاخر، زرشك، لوز مفروم، فستق مفروم، زعفران قائنات",
                    "img" => "",
                    "category" => "أطباق الأرز"
                ],
                "tr" => [
                    "title" => "Zereshk Polo",
                    "desc" => "Premium Hashemi pirinci, zereshk, doğranmış badem, doğranmış antep fıstığı, Qaenat safran",
                    "img" => "",
                    "category" => "Pilavlar"
                ]
            ],
            [
                "fa" => [
                    "title" => "باقالی‌پلو",
                    "desc" => "قائنات برنج هاشمی درجه یک، باقالی، شوید، زعفران.",
                    "img" => "",
                    "category" => "برنج ها"
                ],
                "en" => [
                    "title" => "Baghali Polo",
                    "desc" => "Qaenat premium Hashemi rice, fava beans, dill, Qaenat saffron",
                    "img" => "",
                    "category" => "Rice Dishes"
                ],
                "ar" => [
                    "title" => "Baghali Polo",
                    "desc" => "أرز هاشمي قائنات فاخر، فاصوليا، شبت، زعفران قائنات",
                    "img" => "",
                    "category" => "أطباق الأرز"
                ],
                "tr" => [
                    "title" => "Baghali Polo",
                    "desc" => "Qaenat premium Hashemi pirinci, bakla, dereotu, Qaenat safran",
                    "img" => "",
                    "category" => "Pilavlar"
                ]
            ],
            [
                "fa" => [
                    "title" => "سبزی پلو",
                    "desc" => "رنج هاشمی درجه یک، گیشنیز، شوید، سیرو زعفران قائنات",
                    "img" => "",
                    "category" => "برنج ها"
                ],
                "en" => [
                    "title" => "Sabzi Polo",
                    "desc" => "Premium Hashemi rice, coriander, dill, chopped leeks, Qaenat saffron",
                    "img" => "",
                    "category" => "Rice Dishes"
                ],
                "ar" => [
                    "title" => "Sabzi Polo",
                    "desc" => "أرز هاشمي فاخر، كزبرة، شبت، كراث مفروم، زعفران قائنات",
                    "img" => "",
                    "category" => "أطباق الأرز"
                ],
                "tr" => [
                    "title" => "Sabzi Polo",
                    "desc" => "Premium Hashemi pirinci, kişniş, dereotu, doğranmış pırasa, Qaenat safran",
                    "img" => "",
                    "category" => "Pilavlar"
                ]
            ],
            [
                "fa" => [
                    "title" => "خورشت قیمه سیب زمینی",
                    "desc" => "گوشت تازه از ران گوسفندی 125 گرم، لپه، سیب زمینی سرخ شده، لیمو عمانی، رب گوجه فرنگی",
                    "img" => "",
                    "category" => "خورشت ها"
                ],
                "en" => [
                    "title" => "Gheimeh stew",
                    "desc" => "125g fresh lamb leg, split peas, fried potatoes, dried lime, tomato paste",
                    "img" => "",
                    "category" => "Stews"
                ],
                "ar" => [
                    "title" => "Gheimeh stew",
                    "desc" => "125 جم من لحم الخروف الطازج، البازلاء المقسومة، البطاطا المقلية، الليمون المجفف، معجون الطماطم",
                    "img" => "",
                    "category" => "الحساء"
                ],
                "tr" => [
                    "title" => "Gheimeh stew",
                    "desc" => "125g taze kuzu budu, baklagil, kızarmış patates, kurutulmuş limon, domates salçası",
                    "img" => "",
                    "category" => "Güveçler"
                ]
            ],
            [
                "fa" => [
                    "title" => "خورشت فسنجان",
                    "desc" => "سینه پاک کرده مرغ 200 گرم، گردوآسیاب شده ،رب انار.",
                    "img" => "",
                    "category" => "خورشت ها"
                ],
                "en" => [
                    "title" => "Fesenjan Stew",
                    "desc" => "200g boneless chicken breast, ground walnuts, pomegranate paste",
                    "img" => "",
                    "category" => "Stews"
                ],
                "ar" => [
                    "title" => "Fesenjan Stew",
                    "desc" => "200 جم من صدر الدجاج بدون عظم، جوز الهند المطحون، معجون الرمان",
                    "img" => "",
                    "category" => "الحساء"
                ],
                "tr" => [
                    "title" => "Fesenjan Stew",
                    "desc" => "200g kemiksiz tavuk göğsü, çekilmiş ceviz, nar pekmezi",
                    "img" => "",
                    "category" => "Güveçler"
                ]
            ],
            [
                "fa" => [
                    "title" => "خورشت کرفس",
                    "desc" => "۱۲۵ گوشت تازه از ران گوسفندی 125 گرم، کرفس",
                    "img" => "",
                    "category" => "خورشت ها"
                ],
                "en" => [
                    "title" => "karafs Stew",
                    "desc" => "125g fresh lamb leg, celery",
                    "img" => "",
                    "category" => "Stews"
                ],
                "ar" => [
                    "title" => "karafs Stew",
                    "desc" => "125 جم من صدر الدجاج بدون عظم، جوز الهند المطحون، معجون الرمان",
                    "img" => "",
                    "category" => "الحساء"
                ],
                "tr" => [
                    "title" => "karafs Stew",
                    "desc" => "125g taze kuzu budu, kereviz",
                    "img" => "",
                    "category" => "Güveçler"
                ]
            ],
            [
                "fa" => [
                    "title" => "خورشت قرمه سبزی",
                    "desc" => "۱۲۵ گوشت تازه از ران گوسفندی 120 گرم، ، لوبیا قرمز، جعفری، شنبلیله، لیمو عمانی",
                    "img" => "",
                    "category" => "خورشت ها"
                ],
                "en" => [
                    "title" => "Ghormeh Sabzi Stew",
                    "desc" => "120g fresh lamb leg, red kidney beans, parsley, fenugreek, dried lime",
                    "img" => "",
                    "category" => "Stews"
                ],
                "ar" => [
                    "title" => "Ghormeh Sabzi Stew",
                    "desc" => "120 جم من صدر الدجاج بدون عظم، فاصوليا حمراء، بقدونس، حلبة، ليمون مجفف",
                    "img" => "",
                    "category" => "الحساء"
                ],
                "tr" => [
                    "title" => "Ghormeh Sabzi Stew",
                    "desc" => "120g taze kuzu budu, kırmızı fasulye, maydanoz, çemen otu, kurutulmuş limon",
                    "img" => "",
                    "category" => "Güveçler"
                ]
            ],
            [
                "fa" => [
                    "title" => "خوراک گردن",
                    "desc" => "750 گرم گوشت تازه از گردن گوسفند",
                    "img" => "",
                    "category" => "خوراک ها"
                ],
                "en" => [
                    "title" => "gardan",
                    "desc" => "750g fresh lamb neck",
                    "img" => "",
                    "category" => "Main Courses"
                ],
                "ar" => [
                    "title" => "gardan",
                    "desc" => "750 جم من عنق الخروف الطازج",
                    "img" => "",
                    "category" => "الأطباق الرئيسية"
                ],
                "tr" => [
                    "title" => "gardan",
                    "desc" => "750g taze kuzu boyun",
                    "img" => "",
                    "category" => "Ana Yemekler"
                ]
            ],
            [
                "fa" => [
                    "title" => "خوراک ماهیچه",
                    "desc" => "500 گرم ماهیچه تازه از ران گوسفندی",
                    "img" => "",
                    "category" => "خوراک ها"
                ],
                "en" => [
                    "title" => "Mahiche",
                    "desc" => "500g fresh lamb tongue",
                    "img" => "",
                    "category" => "Main Courses"
                ],
                "ar" => [
                    "title" => "Mahiche",
                    "desc" => "500 جم من لسان الخروف الطازج",
                    "img" => "",
                    "category" => "الأطباق الرئيسية"
                ],
                "tr" => [
                    "title" => "Mahiche",
                    "desc" => "500g taze kuzu dil",
                    "img" => "",
                    "category" => "Ana Yemekler"
                ]
            ],
            [
                "fa" => [
                    "title" => "مرغ زرشک پلویی",
                    "desc" => "۳۵۰ گرم سینه یا ران مرغ",
                    "img" => "",
                    "category" => "خوراک ها"
                ],
                "en" => [
                    "title" => "Morg Zereshk poloyi",
                    "desc" => "350g chicken breast or thigh",
                    "img" => "",
                    "category" => "Main Courses"
                ],
                "ar" => [
                    "title" => "Morg Zereshk poloyi",
                    "desc" => "350 جم صدر الدجاج أو فخذ",
                    "img" => "",
                    "category" => "الأطباق الرئيسية"
                ],
                "tr" => [
                    "title" => "Morg Zereshk poloyi",
                    "desc" => "350g tavuk göğsü veya uyluk",
                    "img" => "",
                    "category" => "Ana Yemekler"
                ]
            ],
            [
                "fa" => [
                    "title" => "کشک بادمجان",
                    "desc" => "بادمجان کبابی، کشک، پیاز و نعنا داغ.",
                    "img" => "",
                    "category" => "پیش غذا ها"
                ],
                "en" => [
                    "title" => "Kashk Bademjan",
                    "desc" => "Grilled eggplant, kashk (strained yogurt), onion, dried mint.",
                    "img" => "",
                    "category" => "Appetizers"
                ],
                "ar" => [
                    "title" => "Kashk Bademjan",
                    "desc" => "باذنجان مشوي، كشك (لبنة مصفاة)، بصل، نعناع مجفف.",
                    "img" => "",
                    "category" => "المقبلات"
                ],
                "tr" => [
                    "title" => "Kashk Bademjan",
                    "desc" => "Izgara patlıcan, kashk (süzme yoğurt), soğan, kuru nane.",
                    "img" => "",
                    "category" => "Ara Sıcaklar"
                ]
            ],
            [
                "fa" => [
                    "title" => "میرزاقاسمی",
                    "desc" => "بادمجان کبابی، گوجه فرنگی، تخم مرغ، پیاز، سیر.",
                    "img" => "",
                    "category" => "پیش غذا ها"
                ],
                "en" => [
                    "title" => "Mirza Ghasemi",
                    "desc" => "Grilled eggplant, tomatoes, eggs, onion, garlic.",
                    "img" => "",
                    "category" => "Appetizers"
                ],
                "ar" => [
                    "title" => "Mirza Ghasemi",
                    "desc" => "باذنجان مشوي، طماطم، بيض، بصل، ثوم.",
                    "img" => "",
                    "category" => "المقبلات"
                ],
                "tr" => [
                    "title" => "Mirza Ghasemi",
                    "desc" => "Izgara patlıcan, domates, yumurta, soğan, sarımsak.",
                    "img" => "",
                    "category" => "Ara Sıcaklar"
                ]
            ],
            [
                "fa" => [
                    "title" => "آش رشته",
                    "desc" => "رشته، لوبیا سفید، نخود، عدس، تره، جعفری، گیشنیز.",
                    "img" => "",
                    "category" => "پیش غذا ها"
                ],
                "en" => [
                    "title" => "Ash Reshteh",
                    "desc" => "Reshteh (noodle), white beans, chickpeas, lentils, herbs, parsley, fenugreek.",
                    "img" => "",
                    "category" => "Appetizers"
                ],
                "ar" => [
                    "title" => "Ash Reshteh",
                    "desc" => "رشتة (مكرونة)، فاصوليا بيضاء، حمص، عدس، أعشاب، بقدونس، حلبة.",
                    "img" => "",
                    "category" => "المقبلات"
                ],
                "tr" => [
                    "title" => "Ash Reshteh",
                    "desc" => "Reshteh (erişte), beyaz fasulye, nohut, mercimek, otlar, maydanoz, çemen otu.",
                    "img" => "",
                    "category" => "Ara Sıcaklar"
                ]
            ],
            [
                "fa" => [
                    "title" => "شله زرد",
                    "desc" => "دسر برنجی با زعفران و گلاب",
                    "img" => "",
                    "category" => "پیش غذا ها"
                ],
                "en" => [
                    "title" => "Shole Zard Dessert",
                    "desc" => "Saffron and Rosewater Rice Pudding",
                    "img" => "",
                    "category" => "Appetizers"
                ],
                "ar" => [
                    "title" => "Shole Zard Dessert",
                    "desc" => "حلوى الأرز بالزعفران وماء الورد",
                    "img" => "",
                    "category" => "المقبلات"
                ],
                "tr" => [
                    "title" => "Shole Zard Dessert",
                    "desc" => "Safranlı ve Gül Suyu ile Pirinç Pudingi",
                    "img" => "",
                    "category" => "Ara Sıcaklar"
                ]
            ],
            [
                "fa" => [
                    "title" => "ماهی قزل آلا",
                    "desc" => "به وزن 700 تا 850 گرم ماهی قزل آلا صید روز",
                    "img" => "",
                    "category" => "ماهی ها"
                ],
                "en" => [
                    "title" => "Trout",
                    "desc" => "Freshly caught rainbow trout weighing 700 to 850 grams",
                    "img" => "",
                    "category" => "Fish Dishes"
                ],
                "ar" => [
                    "title" => "Trout",
                    "desc" => "صيد سلمون قزل ألبو الطازج وزنه 700 إلى 850 غرامًا",
                    "img" => "",
                    "category" => "أطباق السمك"
                ],
                "tr" => [
                    "title" => "Trout",
                    "desc" => "700 ila 850 gram ağırlığında taze yakalanan gökkuşağı alabalığı",
                    "img" => "",
                    "category" => "Balık Yemekleri"
                ]
            ],
            [
                "fa" => [
                    "title" => "ماهی لورک",
                    "desc" => "ماهی صید روز لورک بمیزان 600 تا 650 گرم",
                    "img" => "",
                    "category" => "ماهی ها"
                ],
                "en" => [
                    "title" => "Lurk Fish",
                    "desc" => "Daily caught lurk fish weighing 600 to 650 grams",
                    "img" => "",
                    "category" => "Fish Dishes"
                ],
                "ar" => [
                    "title" => "Lurk Fish",
                    "desc" => "صيد يومي لسمك لورك يزن 600 إلى 650 جرامًا",
                    "img" => "",
                    "category" => "أطباق السمك"
                ],
                "tr" => [
                    "title" => "Lurk Fish",
                    "desc" => "Günlük olarak yakalanan 600 ila 650 gram ağırlığındaki lurk balığı",
                    "img" => "",
                    "category" => "Balık Yemekleri"
                ]
            ],
            [
                "fa" => [
                    "title" => "کباب لقمه",
                    "desc" => "مخلوطی از گوشت  تازه از سردست و قلوگاه گوسفند",
                    "img" => "",
                    "category" => "کباب ها"
                ],
                "en" => [
                    "title" => "Kabab Koobideh",
                    "desc" => "Mixture of fresh lamb shoulder and lamb flank",
                    "img" => "",
                    "category" => "Kebabs"
                ],
                "ar" => [
                    "title" => "Kabab Koobideh",
                    "desc" => "مزيج من لحم الخروف الطازج من الكتف وجناح الخروف",
                    "img" => "",
                    "category" => "أطباق الكباب"
                ],
                "tr" => [
                    "title" => "Kabab Koobideh",
                    "desc" => "Taze kuzu omuz ve kuzu yan karışımı",
                    "img" => "",
                    "category" => "Kebaplar"
                ]
            ],
            [
                "fa" => [
                    "title" => "کباب سلطانی",
                    "desc" => "یک سیخ گوشت آماده لقمه و 240 گرم راسته گوسفند",
                    "img" => "",
                    "category" => "کباب ها"
                ],
                "en" => [
                    "title" => "Sultani",
                    "desc" => "One skewer of ready-made kebab and 240g lamb fillet",
                    "img" => "",
                    "category" => "Kebabs"
                ],
                "ar" => [
                    "title" => "Sultani",
                    "desc" => "سيخ واحدة من الكباب الجاهز و 240 جرامًا من لحم الخروف",
                    "img" => "",
                    "category" => "أطباق الكباب"
                ],
                "tr" => [
                    "title" => "Sultani",
                    "desc" => "Hazır kebap bir şiş ve 240g kuzu filetosu",
                    "img" => "",
                    "category" => "Kebaplar"
                ]
            ],
            [
                "fa" => [
                    "title" => "کباب لقمه نگینی",
                    "desc" => "300 گرم گوشت گوسفندی، ۶۰ گرم سینه مرغ",
                    "img" => "",
                    "category" => "کباب ها"
                ],
                "en" => [
                    "title" => "Kebab Koobideh negini",
                    "desc" => "300g lamb meat, 60g chicken breast",
                    "img" => "",
                    "category" => "Kebabs"
                ],
                "ar" => [
                    "title" => "Kebab Koobideh negini",
                    "desc" => "300 جرام لحم خروف، 60 جرام صدر دجاج",
                    "img" => "",
                    "category" => "أطباق الكباب"
                ],
                "tr" => [
                    "title" => "Kebab Koobideh negini",
                    "desc" => "300g kuzu eti, 60g tavuk göğsü",
                    "img" => "",
                    "category" => "Kebaplar"
                ]
            ],
            [
                "fa" => [
                    "title" => "جوجه کباب بی استخوان",
                    "desc" => "مقدار 350 گرم از سینه پاک کرده مرغ",
                    "img" => "",
                    "category" => "کباب ها"
                ],
                "en" => [
                    "title" => "Jooje Kebab bi Ostokhan",
                    "desc" => "350 grams of boneless chicken breast",
                    "img" => "",
                    "category" => "Kebabs"
                ],
                "ar" => [
                    "title" => "Jooje Kebab bi Ostokhan",
                    "desc" => "350 جرام من صدر الدجاج بدون عظم",
                    "img" => "",
                    "category" => "كباب"
                ],
                "tr" => [
                    "title" => "Jooje Kebab bi Ostokhan",
                    "desc" => "350 gram kemiksiz tavuk göğsü",
                    "img" => "",
                    "category" => "Şişler"
                ]
            ],
            [
                "fa" => [
                    "title" => "جوجه کباب با استخوان",
                    "desc" => "بمقدار 550 گرم ران و سینه مرغ با استخوان",
                    "img" => "",
                    "category" => "کباب ها"
                ],
                "en" => [
                    "title" => "Jooje Kebab ba Ostokhan",
                    "desc" => "550 grams of bone-in chicken thigh and breast",
                    "img" => "",
                    "category" => "Kebabs"
                ],
                "ar" => [
                    "title" => "Jooje Kebab ba Ostokhan",
                    "desc" => "550 جرامًا من فخذ وصدر الدجاج بالعظم",
                    "img" => "",
                    "category" => "كباب"
                ],
                "tr" => [
                    "title" => "Jooje Kebab ba Ostokhan",
                    "desc" => "550 gram kemikli tavuk but ve göğüs",
                    "img" => "",
                    "category" => "Şişler"
                ]
            ],
            [
                "fa" => [
                    "title" => "جوجه کباب لاری",
                    "desc" => "ران بدون استخوان مرغ بمیزان 350 گرم",
                    "img" => "",
                    "category" => "کباب ها"
                ],
                "en" => [
                    "title" => "Lari  Kebab",
                    "desc" => "350 grams of boneless chicken thigh",
                    "img" => "",
                    "category" => "Kebabs"
                ],
                "ar" => [
                    "title" => "Lari  Kebab",
                    "desc" => "350 جرامًا من فخذ الدجاج بدون عظم",
                    "img" => "",
                    "category" => "كباب"
                ],
                "tr" => [
                    "title" => "Lari  Kebab",
                    "desc" => "350 gram kemiksiz tavuk but",
                    "img" => "",
                    "category" => "Şişler"
                ]
            ],
            [
                "fa" => [
                    "title" => "کباب برگ مخصوص آریا",
                    "desc" => "300 گرم راسته گوسفند",
                    "img" => "",
                    "category" => "کباب ها"
                ],
                "en" => [
                    "title" => "Aria Special  Kebab",
                    "desc" => "300 grams of lamb tenderloin",
                    "img" => "",
                    "category" => "Kebabs"
                ],
                "ar" => [
                    "title" => "Aria Special  Kebab",
                    "desc" => "300 جرام من اللحم الناعم",
                    "img" => "",
                    "category" => "كباب"
                ],
                "tr" => [
                    "title" => "Aria Special  Kebab",
                    "desc" => "300 gram kuzu bonfile",
                    "img" => "",
                    "category" => "Şişler"
                ]
            ],
            [
                "fa" => [
                    "title" => "شیشلیک دسته دار",
                    "desc" => "تعداد 6 قطعه از راسته گوسفندی بمیزان 450 گرم",
                    "img" => "",
                    "category" => "کباب ها"
                ],
                "en" => [
                    "title" => "Shishlik",
                    "desc" => "6 pieces of lamb tenderloin, 450 grams",
                    "img" => "",
                    "category" => "Kebabs"
                ],
                "ar" => [
                    "title" => "Shishlik",
                    "desc" => "6 قطع من لحم الحمل، 450 جرام",
                    "img" => "",
                    "category" => "كباب"
                ],
                "tr" => [
                    "title" => "Shishlik",
                    "desc" => "6 parça kuzu bonfile, 450 gram",
                    "img" => "",
                    "category" => "Şişler"
                ]
            ],
            [
                "fa" => [
                    "title" => "کباب برگ",
                    "desc" => "240 گرم راسته گوسفند",
                    "img" => "",
                    "category" => "کباب ها"
                ],
                "en" => [
                    "title" => "Kebab Barg",
                    "desc" => "240 grams of lamb tenderloin",
                    "img" => "",
                    "category" => "Kebabs"
                ],
                "ar" => [
                    "title" => "Kebab Barg",
                    "desc" => "240 جرامًا من لحم الحمل",
                    "img" => "",
                    "category" => "كباب"
                ],
                "tr" => [
                    "title" => "Kebab Barg",
                    "desc" => "240 gram kuzu bonfile",
                    "img" => "",
                    "category" => "Şişler"
                ]
            ],
            [
                "fa" => [
                    "title" => "کباب بختیاری",
                    "desc" => "مقدار 160 گرم راسته گوسفند و 14 گرم سینه مرغ",
                    "img" => "",
                    "category" => "کباب ها"
                ],
                "en" => [
                    "title" => "Bakhtiari Kebab",
                    "desc" => "160 grams of lamb tenderloin and 14 grams of chicken breast",
                    "img" => "",
                    "category" => "Kebabs"
                ],
                "ar" => [
                    "title" => "Bakhtiari Kebab",
                    "desc" => "160 جرامًا من لحم الحمل و 14 جرامًا من صدر الدجاج",
                    "img" => "",
                    "category" => "كباب"
                ],
                "tr" => [
                    "title" => "Bakhtiari Kebab",
                    "desc" => "160 gram kuzu bonfile ve 14 gram tavuk göğsü",
                    "img" => "",
                    "category" => "Şişler"
                ]
            ],
            [
                "fa" => [
                    "title" => "کباب چنجه",
                    "desc" => "۳۰۰ گرم گوشت راسته گوسفند",
                    "img" => "",
                    "category" => "کباب ها"
                ],
                "en" => [
                    "title" => "Chenje Kebab",
                    "desc" => "300 grams of lamb tenderloin",
                    "img" => "",
                    "category" => "Kebabs"
                ],
                "ar" => [
                    "title" => "Chenje Kebab",
                    "desc" => "300 جرام من لحم الحمل",
                    "img" => "",
                    "category" => "كباب"
                ],
                "tr" => [
                    "title" => "Chenje Kebab",
                    "desc" => "300 gram kuzu bonfile",
                    "img" => "",
                    "category" => "Şişler"
                ]
            ]
        ];

        return $this->successResponse(['data'=>$menu], '');

    }

}
