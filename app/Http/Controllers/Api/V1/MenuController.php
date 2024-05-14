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
                "img" => "https://app.ariyarestoran.com/storage//tickets/1715685632-salad-fasl.png",
                "category" => "سالاد ها"
            ],
            "en" => [
                "title" => "Seasonal Salad",
                "desc" => "Lettuce, tomato, cucumber, carrot, red cabbage (Olive oil, lemon, pomegranate sauce)",
                "img" => "https://app.ariyarestoran.com/storage//tickets/1715685632-salad-fasl.png",
                "category" => "Salads"
            ],
            "ar" => [
                "title" => "Seasonal Salad",
                "desc" => "خس، طماطم، خيار، جزر، كرفس أحمر (زيتون زيت، ليمون، صلصة رمان)",
                "img" => "https://app.ariyarestoran.com/storage//tickets/1715685632-salad-fasl.png",
                "category" => "سلطة"
            ],
            "tr" => [
                "title" => "Seasonal Salad",
                "desc" => "Marul, domates, salatalık, havuç, kırmızı lahana (Zeytinyağı, limon, nar sosu)",
                "img" => "https://app.ariyarestoran.com/storage//tickets/1715685632-salad-fasl.png",
                "category" => "Salatalar"
            ],],
            [
                "fa" => [
                    "title" => "سالاد باغچه",
                    "desc" => "پنیر سفید، کلم بروکلی تازه، کاهو، گوجه فرنگی، خیار، (روغن زیتون، آبلیمو، سس آنار)",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686177-salad-bakhche.png",
                    "category" => "سالاد ها"
                ],
                "en" => [
                    "title" => "Garden Salad",
                    "desc" => "White cheese, fresh broccoli, lettuce, tomatoes, cucumbers (Olive oil, lemon, pomegranate sauce)",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686177-salad-bakhche.png",
                    "category" => "Salads"
                ],
                "ar" => [
                    "title" => "Garden Salad",
                    "desc" => "جبن أبيض، بروكلي طازج، خس، طماطم، خيار (زيتون زيت، ليمون، صلصة رمان)",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686177-salad-bakhche.png",
                    "category" => "سلطة"
                ],
                "tr" => [
                    "title" => "Garden Salad",
                    "desc" => "Beyaz peynir, taze brokoli, marul, domates, salatalık (Zeytinyağı, limon, nar sosu)",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686177-salad-bakhche.png",
                    "category" => "Salatalar"
                ]
            ],
            [
                "fa" => [
                    "title" => "سالاد آواکادو",
                    "desc" => "آووکادو، فیله مرغ گریل شده، گردو، کاهو، گوجه فرنگی، خیار، هویج، کلم قرمز، (روغن زیتون، آبلیمو، سس آنار)",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686266-salad-avacado.png",
                    "category" => "سالاد ها"
                ],
                "en" => [
                    "title" => "Avocado Salad",
                    "desc" => "Avocado, grilled chicken fillet, walnuts, lettuce, tomatoes, cucumbers, carrots, red cabbage (Olive oil, lemon, pomegranate sauce)",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686266-salad-avacado.png",
                    "category" => "Salads"
                ],
                "ar" => [
                    "title" => "Avocado Salad",
                    "desc" => "أفوكادو، صدر الدجاج المشوي، جوز، خس، طماطم، خيار، جزر، كرفس أحمر (زيتون زيت، ليمون، صلصة رمان)",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686266-salad-avacado.png",
                    "category" => "سلطة"
                ],
                "tr" => [
                    "title" => "Avocado Salad",
                    "desc" => "Avokado, ızgara tavuk göğsü, ceviz, marul, domates, salatalık, havuç, kırmızı lahana (Zeytinyağı, limon, nar sosu)",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686266-salad-avacado.png",
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
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686357-shirazi.png",
                    "category" => "سالاد ها"
                ],
                "en" => [
                    "title" => "Shirazi Salad",
                    "desc" => "Cucumber, tomato, onion, lemon, olive oil",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686357-shirazi.png",
                    "category" => "Salads"
                ],
                "ar" => [
                    "title" => "Shirazi Salad",
                    "desc" => "خيار، طماطم، بصل، ليمون، زيتون زيت",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686357-shirazi.png",
                    "category" => "سلطة"
                ],
                "tr" => [
                    "title" => "Shirazi Salad",
                    "desc" => "Salatalık, domates, soğan, limon, zeytinyağı",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686357-shirazi.png",
                    "category" => "Salatalar"
                ]
            ],
            [
                "fa" => [
                    "title" => "بورانی اسفناج",
                    "desc" => "ماست، اسفناج، سیر",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715688435-mast-ispnaj.png",
                    "category" => "مزه ها"
                ],
                "en" => [
                    "title" => "Spinach Borani",
                    "desc" => "Yogurt, spinach, garlic",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715688435-mast-ispnaj.png",
                    "category" => "Appetizers"
                ],
                "ar" => [
                    "title" => "Spinach Borani",
                    "desc" => "لبن، سبانخ، ثوم",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715688435-mast-ispnaj.png",
                    "category" => "مقبلات"
                ],
                "tr" => [
                    "title" => "Spinach Borani",
                    "desc" => "Yoğurt, ıspanak, sarımsak",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715688435-mast-ispnaj.png",
                    "category" => "Mezeler"
                ]
            ],
            [
                "fa" => [
                    "title" => "بورانی بادمجان",
                    "desc" => "ماست، بادمجان، سیر، ارده",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715688490-mast-bademjan.png",
                    "category" => "مزه ها"
                ],
                "en" => [
                    "title" => "Eggplant Borani",
                    "desc" => "Yogurt, eggplant, garlic, mint",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715688490-mast-bademjan.png",
                    "category" => "Appetizers"
                ],
                "ar" => [
                    "title" => "Eggplant Borani",
                    "desc" => "لبن، باذنجان، ثوم، نعناع",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715688490-mast-bademjan.png",
                    "category" => "مقبلات"
                ],
                "tr" => [
                    "title" => "Eggplant Borani",
                    "desc" => "Yoğurt, patlıcan, sarımsak, nane",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715688490-mast-bademjan.png",
                    "category" => "Mezeler"
                ]
            ],
            [
                "fa" => [
                    "title" => "ماست و خیار",
                    "desc" => "ماست، خیار خرد شده، نعناع",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686497-mast-khiyar.png",
                    "category" => "مزه ها"
                ],
                "en" => [
                    "title" => "Yogurt and Cucumber",
                    "desc" => "Yogurt, chopped cucumber, mint",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686497-mast-khiyar.png",
                    "category" => "Appetizers"
                ],
                "ar" => [
                    "title" => "Yogurt and Cucumber",
                    "desc" => "زبادي، خيار مقطع، نعناع",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686497-mast-khiyar.png",
                    "category" => "مقبلات"
                ],
                "tr" => [
                    "title" => "Yogurt and Cucumber",
                    "desc" => "Yoğurt, doğranmış salatalık, nane",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686497-mast-khiyar.png",
                    "category" => "Mezeler"
                ]
            ],
            [
                "fa" => [
                    "title" => "سیر ترشی",
                    "desc" => "حبه‌های سیر، سرکه",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686540-sir-torshi.png",
                    "category" => "مزه ها"
                ],
                "en" => [
                    "title" => "sir turshi",
                    "desc" => "Cloves of garlic, vinegar",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686540-sir-torshi.png",
                    "category" => "Appetizers"
                ],
                "ar" => [
                    "title" => "sir turshi",
                    "desc" => "فصوص الثوم، خل",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686540-sir-torshi.png",
                    "category" => "مقبلات"
                ],
                "tr" => [
                    "title" => "sir turshi",
                    "desc" => "Sarımsak dişleri, sirke",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686540-sir-torshi.png",
                    "category" => "Ara Sıcaklar"
                ]
            ],
            [
                "fa" => [
                    "title" => "ترشی لیته",
                    "desc" => "بادمجان، نعنا، گیشنیز، فلفل، سیر",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686580-lite-torshi.png",
                    "category" => "مزه ها"
                ],
                "en" => [
                    "title" => "Liteh Pickle",
                    "desc" => "Eggplant, mint, coriander, pepper, garlic",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686580-lite-torshi.png",
                    "category" => "Appetizers"
                ],
                "ar" => [
                    "title" => "ليته مخلل",
                    "desc" => "باذنجان، نعناع، كزبرة، فلفل، ثوم",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686580-lite-torshi.png",
                    "category" => "مقبلات"
                ],
                "tr" => [
                    "title" => "Liteh Turşu",
                    "desc" => "Patlıcan, nane, kişniş, biber, sarımsak",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686580-lite-torshi.png",
                    "category" => "Ara Sıcaklar"
                ]
            ],
            [
                "fa" => [
                    "title" => "زیتون پرورده",
                    "desc" => "زیتون، گیشنیز، گردو، سیر، رب انار",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686611-zeyton.png",
                    "category" => "مزه ها"
                ],
                "en" => [
                    "title" => "Zeytun parvarde",
                    "desc" => "Olives, coriander, walnuts, garlic, pomegranate paste",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686611-zeyton.png",
                    "category" => "Appetizers"
                ],
                "ar" => [
                    "title" => "Zeytun parvarde",
                    "desc" => "زيتون، كزبرة، جوز، ثوم، معجون الرمان",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686611-zeyton.png",
                    "category" => "مقبلات"
                ],
                "tr" => [
                    "title" => "Zeytun parvarde",
                    "desc" => "Zeytin, kişniş, ceviz, sarımsak, nar pekmezi",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686611-zeyton.png",
                    "category" => "Ara Sıcaklar"
                ]
            ],
            [
                "fa" => [
                    "title" => "سوپ جو",
                    "desc" => "جو پوست‌کنده، هویج، خامه تازه",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686656-soup-jo.png",
                    "category" => "سوپ ها"
                ],
                "en" => [
                    "title" => "Barley Soup",
                    "desc" => "Pearled barley, carrot, fresh cream",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686656-soup-jo.png",
                    "category" => "Soups"
                ],
                "ar" => [
                    "title" => "Barley Soup",
                    "desc" => "شعير مقشر، جزر، كريمة طازجة",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686656-soup-jo.png",
                    "category" => "شوربات"
                ],
                "tr" => [
                    "title" => "Barley Soup",
                    "desc" => "Arpa şehriye, havuç, taze krema",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686656-soup-jo.png",
                    "category" => "Çorbalar"
                ]
            ],
            [
                "fa" => [
                    "title" => "سوپ دال عدس",
                    "desc" => "دال عدس، کدو، سیب زمینی، هویج، پیاز",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686703-soup-adas.png",
                    "category" => "سوپ ها"
                ],
                "en" => [
                    "title" => "Lentil Soup",
                    "desc" => "Lentils, zucchini, potato, carrot, onion",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686703-soup-adas.png",
                    "category" => "Soups"
                ],
                "ar" => [
                    "title" => "Lentil Soup",
                    "desc" => "عدس، كوسة، بطاطا، جزر، بصل",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686703-soup-adas.png",
                    "category" => "شوربات"
                ],
                "tr" => [
                    "title" => "Lentil Soup",
                    "desc" => "Mercimek, kabak, patates, havuç, soğan",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686703-soup-adas.png",
                    "category" => "Çorbalar"
                ]
            ],
            [
                "fa" => [
                    "title" => "چلو زعفرانی",
                    "desc" => "گرم 260 برنج ایرانی درجه یک، زعفران قائنات ، کره 10 گرمی بسته بندی",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715688545-berenj-zaferani.png",
                    "category" => "برنج ها"
                ],
                "en" => [
                    "title" => "Saffron Rice",
                    "desc" => "260g premium Iranian rice, Qaenat saffron, 10g packaged butter",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715688545-berenj-zaferani.png",
                    "category" => "Rice Dishes"
                ],
                "ar" => [
                    "title" => "Saffron Rice",
                    "desc" => "260 جم من الأرز الإيراني الفاخر، زعفران قائنات، 10 جم زبدة معبأة",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715688545-berenj-zaferani.png",
                    "category" => "أطباق الأرز"
                ],
                "tr" => [
                    "title" => "Saffron Rice",
                    "desc" => "260g premium İran pirinci, Qaenat safran, 10g paketlenmiş tereyağı",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715688545-berenj-zaferani.png",
                    "category" => "Pilavlar"
                ]
            ],
            [
                "fa" => [
                    "title" => "زرشک پلو",
                    "desc" => "برنج هاشمی درجه یک ، زرشک، خلال بادام، خلال پسته، زعفران قائنات",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686780-zereshkpolo.png",
//                    "img" => "https://app.ariyarestoran.com/storage//tickets/1705760674-14.jpg",
                    "category" => "برنج ها"
                ],
                "en" => [
                    "title" => "Zereshk Polo",
                    "desc" => "Premium Hashemi rice, barberries, chopped almonds, chopped pistachios, Qaenat saffron",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686780-zereshkpolo.png",
                    "category" => "Rice Dishes"
                ],
                "ar" => [
                    "title" => "Zereshk Polo",
                    "desc" => "أرز هاشمي فاخر، زرشك، لوز مفروم، فستق مفروم، زعفران قائنات",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686780-zereshkpolo.png",
                    "category" => "أطباق الأرز"
                ],
                "tr" => [
                    "title" => "Zereshk Polo",
                    "desc" => "Premium Hashemi pirinci, zereshk, doğranmış badem, doğranmış antep fıstığı, Qaenat safran",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686780-zereshkpolo.png",
                    "category" => "Pilavlar"
                ]
            ],
            [
                "fa" => [
                    "title" => "باقالی‌پلو",
                    "desc" => "قائنات برنج هاشمی درجه یک، باقالی، شوید، زعفران.",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686854-baghali-polo.png",
//                    "img" => "https://app.ariyarestoran.com/storage//tickets/1705759246-photo_2024-01-20_17-30-08.jpg",
                    "category" => "برنج ها"
                ],
                "en" => [
                    "title" => "Baghali Polo",
                    "desc" => "Qaenat premium Hashemi rice, fava beans, dill, Qaenat saffron",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686854-baghali-polo.png",
                    "category" => "Rice Dishes"
                ],
                "ar" => [
                    "title" => "Baghali Polo",
                    "desc" => "أرز هاشمي قائنات فاخر، فاصوليا، شبت، زعفران قائنات",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686854-baghali-polo.png",
                    "category" => "أطباق الأرز"
                ],
                "tr" => [
                    "title" => "Baghali Polo",
                    "desc" => "Qaenat premium Hashemi pirinci, bakla, dereotu, Qaenat safran",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686854-baghali-polo.png",
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
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686953-gheyme.png",
                    "category" => "خورشت ها"
                ],
                "en" => [
                    "title" => "Gheimeh stew",
                    "desc" => "125g fresh lamb leg, split peas, fried potatoes, dried lime, tomato paste",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686953-gheyme.png",
                    "category" => "Stews"
                ],
                "ar" => [
                    "title" => "Gheimeh stew",
                    "desc" => "125 جم من لحم الخروف الطازج، البازلاء المقسومة، البطاطا المقلية، الليمون المجفف، معجون الطماطم",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686953-gheyme.png",
                    "category" => "الحساء"
                ],
                "tr" => [
                    "title" => "Gheimeh stew",
                    "desc" => "125g taze kuzu budu, baklagil, kızarmış patates, kurutulmuş limon, domates salçası",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686953-gheyme.png",
                    "category" => "Güveçler"
                ]
            ],
            [
                "fa" => [
                    "title" => "خورشت فسنجان",
                    "desc" => "سینه پاک کرده مرغ 200 گرم، گردوآسیاب شده ،رب انار.",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686979-fesenjan.png",
                    "category" => "خورشت ها"
                ],
                "en" => [
                    "title" => "Fesenjan Stew",
                    "desc" => "200g boneless chicken breast, ground walnuts, pomegranate paste",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686979-fesenjan.png",
                    "category" => "Stews"
                ],
                "ar" => [
                    "title" => "Fesenjan Stew",
                    "desc" => "200 جم من صدر الدجاج بدون عظم، جوز الهند المطحون، معجون الرمان",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686979-fesenjan.png",
                    "category" => "الحساء"
                ],
                "tr" => [
                    "title" => "Fesenjan Stew",
                    "desc" => "200g kemiksiz tavuk göğsü, çekilmiş ceviz, nar pekmezi",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715686979-fesenjan.png",
                    "category" => "Güveçler"
                ]
            ],
            [
                "fa" => [
                    "title" => "خورشت کرفس",
                    "desc" => "۱۲۵ گوشت تازه از ران گوسفندی 125 گرم، کرفس",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687009-karafs.png",
                    "category" => "خورشت ها"
                ],
                "en" => [
                    "title" => "karafs Stew",
                    "desc" => "125g fresh lamb leg, celery",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687009-karafs.png",
                    "category" => "Stews"
                ],
                "ar" => [
                    "title" => "karafs Stew",
                    "desc" => "125 جم من صدر الدجاج بدون عظم، جوز الهند المطحون، معجون الرمان",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687009-karafs.png",
                    "category" => "الحساء"
                ],
                "tr" => [
                    "title" => "karafs Stew",
                    "desc" => "125g taze kuzu budu, kereviz",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687009-karafs.png",
                    "category" => "Güveçler"
                ]
            ],
            [
                "fa" => [
                    "title" => "خورشت قرمه سبزی",
                    "desc" => "۱۲۵ گوشت تازه از ران گوسفندی 120 گرم، ، لوبیا قرمز، جعفری، شنبلیله، لیمو عمانی",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687045-ghorme.png",
                    "category" => "خورشت ها"
                ],
                "en" => [
                    "title" => "Ghormeh Sabzi Stew",
                    "desc" => "120g fresh lamb leg, red kidney beans, parsley, fenugreek, dried lime",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687045-ghorme.png",
                    "category" => "Stews"
                ],
                "ar" => [
                    "title" => "Ghormeh Sabzi Stew",
                    "desc" => "120 جم من صدر الدجاج بدون عظم، فاصوليا حمراء، بقدونس، حلبة، ليمون مجفف",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687045-ghorme.png",
                    "category" => "الحساء"
                ],
                "tr" => [
                    "title" => "Ghormeh Sabzi Stew",
                    "desc" => "120g taze kuzu budu, kırmızı fasulye, maydanoz, çemen otu, kurutulmuş limon",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687045-ghorme.png",
                    "category" => "Güveçler"
                ]
            ],
            [
                "fa" => [
                    "title" => "خوراک گردن",
                    "desc" => "750 گرم گوشت تازه از گردن گوسفند",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687077-gardan.png",
//                    "img" => "https://app.ariyarestoran.com/storage//tickets/1705759864-4.jpg",
                    "category" => "خوراک ها"
                ],
                "en" => [
                    "title" => "gardan",
                    "desc" => "750g fresh lamb neck",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687077-gardan.png",
                    "category" => "Main Courses"
                ],
                "ar" => [
                    "title" => "gardan",
                    "desc" => "750 جم من عنق الخروف الطازج",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687077-gardan.png",
                    "category" => "الأطباق الرئيسية"
                ],
                "tr" => [
                    "title" => "gardan",
                    "desc" => "750g taze kuzu boyun",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687077-gardan.png",
                    "category" => "Ana Yemekler"
                ]
            ],
            [
                "fa" => [
                    "title" => "خوراک ماهیچه",
                    "desc" => "500 گرم ماهیچه تازه از ران گوسفندی",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687122-mahiche.png",
//                    "img" => "https://app.ariyarestoran.com/storage//tickets/1705760279-9.jpg",
                    "category" => "خوراک ها"
                ],
                "en" => [
                    "title" => "Mahiche",
                    "desc" => "500g fresh lamb tongue",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687122-mahiche.png",
                    "category" => "Main Courses"
                ],
                "ar" => [
                    "title" => "Mahiche",
                    "desc" => "500 جم من لسان الخروف الطازج",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687122-mahiche.png",
                    "category" => "الأطباق الرئيسية"
                ],
                "tr" => [
                    "title" => "Mahiche",
                    "desc" => "500g taze kuzu dil",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687122-mahiche.png",
                    "category" => "Ana Yemekler"
                ]
            ],
            [
                "fa" => [
                    "title" => "مرغ زرشک پلویی",
                    "desc" => "۳۵۰ گرم سینه یا ران مرغ",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687200-morg-zereshk-polo.png",
//                    "img" => "https://app.ariyarestoran.com/storage//tickets/1705760320-10.jpg",
                    "category" => "خوراک ها"
                ],
                "en" => [
                    "title" => "Morg Zereshk poloyi",
                    "desc" => "350g chicken breast or thigh",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687200-morg-zereshk-polo.png",
                    "category" => "Main Courses"
                ],
                "ar" => [
                    "title" => "Morg Zereshk poloyi",
                    "desc" => "350 جم صدر الدجاج أو فخذ",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687200-morg-zereshk-polo.png",
                    "category" => "الأطباق الرئيسية"
                ],
                "tr" => [
                    "title" => "Morg Zereshk poloyi",
                    "desc" => "350g tavuk göğsü veya uyluk",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687200-morg-zereshk-polo.png",
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
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687315-mirzaghasemi.png",
                    "category" => "پیش غذا ها"
                ],
                "en" => [
                    "title" => "Mirza Ghasemi",
                    "desc" => "Grilled eggplant, tomatoes, eggs, onion, garlic.",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687315-mirzaghasemi.png",
                    "category" => "Appetizers"
                ],
                "ar" => [
                    "title" => "Mirza Ghasemi",
                    "desc" => "باذنجان مشوي، طماطم، بيض، بصل، ثوم.",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687315-mirzaghasemi.png",
                    "category" => "المقبلات"
                ],
                "tr" => [
                    "title" => "Mirza Ghasemi",
                    "desc" => "Izgara patlıcan, domates, yumurta, soğan, sarımsak.",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687315-mirzaghasemi.png",
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
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687395-mahi-ghezel.png",
                    "category" => "ماهی ها"
                ],
                "en" => [
                    "title" => "Trout",
                    "desc" => "Freshly caught rainbow trout weighing 700 to 850 grams",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687395-mahi-ghezel.png",
                    "category" => "Fish Dishes"
                ],
                "ar" => [
                    "title" => "Trout",
                    "desc" => "صيد سلمون قزل ألبو الطازج وزنه 700 إلى 850 غرامًا",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687395-mahi-ghezel.png",
                    "category" => "أطباق السمك"
                ],
                "tr" => [
                    "title" => "Trout",
                    "desc" => "700 ila 850 gram ağırlığında taze yakalanan gökkuşağı alabalığı",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687395-mahi-ghezel.png",
                    "category" => "Balık Yemekleri"
                ]
            ],
            [
                "fa" => [
                    "title" => "ماهی لورک",
                    "desc" => "ماهی صید روز لورک بمیزان 600 تا 650 گرم",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687428-mahi-levrek.png",
//                    "img" => "https://app.ariyarestoran.com/storage//tickets/1705759967-5.jpg",
                    "category" => "ماهی ها"
                ],
                "en" => [
                    "title" => "Lurk Fish",
                    "desc" => "Daily caught lurk fish weighing 600 to 650 grams",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687428-mahi-levrek.png",
                    "category" => "Fish Dishes"
                ],
                "ar" => [
                    "title" => "Lurk Fish",
                    "desc" => "صيد يومي لسمك لورك يزن 600 إلى 650 جرامًا",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687428-mahi-levrek.png",
                    "category" => "أطباق السمك"
                ],
                "tr" => [
                    "title" => "Lurk Fish",
                    "desc" => "Günlük olarak yakalanan 600 ila 650 gram ağırlığındaki lurk balığı",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687428-mahi-levrek.png",
                    "category" => "Balık Yemekleri"
                ]
            ],
            [
                "fa" => [
                    "title" => "کباب لقمه",
                    "desc" => "مخلوطی از گوشت  تازه از سردست و قلوگاه گوسفند",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687567-kabab-koobide.png",
//                    "img" => "https://app.ariyarestoran.com/storage//tickets/1705760235-8.jpg",
                    "category" => "کباب ها"
                ],
                "en" => [
                    "title" => "Kabab Koobideh",
                    "desc" => "Mixture of fresh lamb shoulder and lamb flank",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687567-kabab-koobide.png",
                    "category" => "Kebabs"
                ],
                "ar" => [
                    "title" => "Kabab Koobideh",
                    "desc" => "مزيج من لحم الخروف الطازج من الكتف وجناح الخروف",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687567-kabab-koobide.png",
                    "category" => "أطباق الكباب"
                ],
                "tr" => [
                    "title" => "Kabab Koobideh",
                    "desc" => "Taze kuzu omuz ve kuzu yan karışımı",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687567-kabab-koobide.png",
                    "category" => "Kebaplar"
                ]
            ],
            [
                "fa" => [
                    "title" => "کباب سلطانی",
                    "desc" => "یک سیخ گوشت آماده لقمه و 240 گرم راسته گوسفند",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687630-kabab-soltani.png",
//                    "img" => "https://app.ariyarestoran.com/storage//tickets/1705760503-13.jpg",
                    "category" => "کباب ها"
                ],
                "en" => [
                    "title" => "Sultani",
                    "desc" => "One skewer of ready-made kebab and 240g lamb fillet",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687630-kabab-soltani.png",
                    "category" => "Kebabs"
                ],
                "ar" => [
                    "title" => "Sultani",
                    "desc" => "سيخ واحدة من الكباب الجاهز و 240 جرامًا من لحم الخروف",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687630-kabab-soltani.png",
                    "category" => "أطباق الكباب"
                ],
                "tr" => [
                    "title" => "Sultani",
                    "desc" => "Hazır kebap bir şiş ve 240g kuzu filetosu",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687630-kabab-soltani.png",
                    "category" => "Kebaplar"
                ]
            ],
            [
                "fa" => [
                    "title" => "کباب لقمه نگینی",
                    "desc" => "300 گرم گوشت گوسفندی، ۶۰ گرم سینه مرغ",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687695-kabab-negini.png",
//                    "img" => "https://app.ariyarestoran.com/storage//tickets/1705760376-11.jpg",
                    "category" => "کباب ها"
                ],
                "en" => [
                    "title" => "Kebab Koobideh negini",
                    "desc" => "300g lamb meat, 60g chicken breast",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687695-kabab-negini.png",
                    "category" => "Kebabs"
                ],
                "ar" => [
                    "title" => "Kebab Koobideh negini",
                    "desc" => "300 جرام لحم خروف، 60 جرام صدر دجاج",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687695-kabab-negini.png",
                    "category" => "أطباق الكباب"
                ],
                "tr" => [
                    "title" => "Kebab Koobideh negini",
                    "desc" => "300g kuzu eti, 60g tavuk göğsü",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687695-kabab-negini.png",
                    "category" => "Kebaplar"
                ]
            ],
            [
                "fa" => [
                    "title" => "جوجه کباب بی استخوان",
                    "desc" => "مقدار 350 گرم از سینه پاک کرده مرغ",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687757-kabab-joje-bi-ostkhan.png",
//                    "img" => "https://app.ariyarestoran.com/storage//tickets/1705760015-6.jpg",
                    "category" => "کباب ها"
                ],
                "en" => [
                    "title" => "Jooje Kebab bi Ostokhan",
                    "desc" => "350 grams of boneless chicken breast",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687757-kabab-joje-bi-ostkhan.png",
                    "category" => "Kebabs"
                ],
                "ar" => [
                    "title" => "Jooje Kebab bi Ostokhan",
                    "desc" => "350 جرام من صدر الدجاج بدون عظم",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687757-kabab-joje-bi-ostkhan.png",
                    "category" => "كباب"
                ],
                "tr" => [
                    "title" => "Jooje Kebab bi Ostokhan",
                    "desc" => "350 gram kemiksiz tavuk göğsü",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687757-kabab-joje-bi-ostkhan.png",
                    "category" => "Şişler"
                ]
            ],
            [
                "fa" => [
                    "title" => "جوجه کباب با استخوان",
                    "desc" => "بمقدار 550 گرم ران و سینه مرغ با استخوان",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687822-kabab-joje-ba-ostkhan.png",
//                    "img" => "https://app.ariyarestoran.com/storage//tickets/1705760189-7.jpg",
                    "category" => "کباب ها"
                ],
                "en" => [
                    "title" => "Jooje Kebab ba Ostokhan",
                    "desc" => "550 grams of bone-in chicken thigh and breast",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687822-kabab-joje-ba-ostkhan.png",
                    "category" => "Kebabs"
                ],
                "ar" => [
                    "title" => "Jooje Kebab ba Ostokhan",
                    "desc" => "550 جرامًا من فخذ وصدر الدجاج بالعظم",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687822-kabab-joje-ba-ostkhan.png",
                    "category" => "كباب"
                ],
                "tr" => [
                    "title" => "Jooje Kebab ba Ostokhan",
                    "desc" => "550 gram kemikli tavuk but ve göğüs",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687822-kabab-joje-ba-ostkhan.png",
                    "category" => "Şişler"
                ]
            ],
            [
                "fa" => [
                    "title" => "جوجه کباب لاری",
                    "desc" => "ران بدون استخوان مرغ بمیزان 350 گرم",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687873-kabab-lari.png",
                    "category" => "کباب ها"
                ],
                "en" => [
                    "title" => "Lari  Kebab",
                    "desc" => "350 grams of boneless chicken thigh",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687873-kabab-lari.png",
                    "category" => "Kebabs"
                ],
                "ar" => [
                    "title" => "Lari  Kebab",
                    "desc" => "350 جرامًا من فخذ الدجاج بدون عظم",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687873-kabab-lari.png",
                    "category" => "كباب"
                ],
                "tr" => [
                    "title" => "Lari  Kebab",
                    "desc" => "350 gram kemiksiz tavuk but",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687873-kabab-lari.png",
                    "category" => "Şişler"
                ]
            ],
            [
                "fa" => [
                    "title" => "کباب برگ مخصوص آریا",
                    "desc" => "300 گرم راسته گوسفند",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687990-kabab-ariya-ozal.png",
//                    "img" => "https://app.ariyarestoran.com/storage//tickets/1705759760-3.jpg",
                    "category" => "کباب ها"
                ],
                "en" => [
                    "title" => "Aria Special Kebab",
                    "desc" => "300 grams of lamb tenderloin",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687990-kabab-ariya-ozal.png",
                    "category" => "Kebabs"
                ],
                "ar" => [
                    "title" => "Aria Special Kebab",
                    "desc" => "300 جرام من اللحم الناعم",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687990-kabab-ariya-ozal.png",
                    "category" => "كباب"
                ],
                "tr" => [
                    "title" => "Aria Special Kebab",
                    "desc" => "300 gram kuzu bonfile",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715687990-kabab-ariya-ozal.png",
                    "category" => "Şişler"
                ]
            ],
            [
                "fa" => [
                    "title" => "شیشلیک دسته دار",
                    "desc" => "تعداد 6 قطعه از راسته گوسفندی بمیزان 450 گرم",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715688043-kabab-shishlik.png",
//                    "img" => "https://app.ariyarestoran.com/storage//tickets/1705760419-12.jpg",
                    "category" => "کباب ها"
                ],
                "en" => [
                    "title" => "Shishlik",
                    "desc" => "6 pieces of lamb tenderloin, 450 grams",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715688043-kabab-shishlik.png",
                    "category" => "Kebabs"
                ],
                "ar" => [
                    "title" => "Shishlik",
                    "desc" => "6 قطع من لحم الحمل، 450 جرام",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715688043-kabab-shishlik.png",
                    "category" => "كباب"
                ],
                "tr" => [
                    "title" => "Shishlik",
                    "desc" => "6 parça kuzu bonfile, 450 gram",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715688043-kabab-shishlik.png",
                    "category" => "Şişler"
                ]
            ],
            [
                "fa" => [
                    "title" => "کباب برگ",
                    "desc" => "240 گرم راسته گوسفند",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715688088-kabab-barg.png",
                    "category" => "کباب ها"
                ],
                "en" => [
                    "title" => "Kebab Barg",
                    "desc" => "240 grams of lamb tenderloin",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715688088-kabab-barg.png",
                    "category" => "Kebabs"
                ],
                "ar" => [
                    "title" => "Kebab Barg",
                    "desc" => "240 جرامًا من لحم الحمل",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715688088-kabab-barg.png",
                    "category" => "كباب"
                ],
                "tr" => [
                    "title" => "Kebab Barg",
                    "desc" => "240 gram kuzu bonfile",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715688088-kabab-barg.png",
                    "category" => "Şişler"
                ]
            ],
            [
                "fa" => [
                    "title" => "کباب بختیاری",
                    "desc" => "مقدار 160 گرم راسته گوسفند و 14 گرم سینه مرغ",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715688130-kabab-bakhtiari.png",
//                    "img" => "https://app.ariyarestoran.com/storage//tickets/1705759334-2.jpg",
                    "category" => "کباب ها"
                ],
                "en" => [
                    "title" => "Bakhtiari Kebab",
                    "desc" => "160 grams of lamb tenderloin and 14 grams of chicken breast",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715688130-kabab-bakhtiari.png",
                    "category" => "Kebabs"
                ],
                "ar" => [
                    "title" => "Bakhtiari Kebab",
                    "desc" => "160 جرامًا من لحم الحمل و 14 جرامًا من صدر الدجاج",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715688130-kabab-bakhtiari.png",
                    "category" => "كباب"
                ],
                "tr" => [
                    "title" => "Bakhtiari Kebab",
                    "desc" => "160 gram kuzu bonfile ve 14 gram tavuk göğsü",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715688130-kabab-bakhtiari.png",
                    "category" => "Şişler"
                ]
            ],
            [
                "fa" => [
                    "title" => "کباب چنجه",
                    "desc" => "۳۰۰ گرم گوشت راسته گوسفند",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715688174-kabab-chenje.png",
                    "category" => "کباب ها"
                ],
                "en" => [
                    "title" => "Chenje Kebab",
                    "desc" => "300 grams of lamb tenderloin",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715688174-kabab-chenje.png",
                    "category" => "Kebabs"
                ],
                "ar" => [
                    "title" => "Chenje Kebab",
                    "desc" => "300 جرام من لحم الحمل",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715688174-kabab-chenje.png",
                    "category" => "كباب"
                ],
                "tr" => [
                    "title" => "Chenje Kebab",
                    "desc" => "300 gram kuzu bonfile",
                    "img" => "https://app.ariyarestoran.com/storage//tickets/1715688174-kabab-chenje.png",
                    "category" => "Şişler"
                ]
            ],
            [
            "fa" => [
                "title" => "اکبر جوجه",
                "desc" => "جوجه کوچک یک کیلویی، رب انار، کره",
                "img" => "",
                "category" => "کباب ها"
            ],
            "en" => [
                "title" => "Akbar Joje",
                "desc" => "Small chicken, pomegranate sauce, butter",
                "img" => "",
                "category" => "Kebabs"
            ],
            "ar" => [
                "title" => "Akbar Joje",
                "desc" => " دجاجة صغيرة، صلصة الرمان، زبدة",
                "img" => "",
                "category" => "كباب"
            ],
            "tr" => [
                "title" => "Akbar Joje",
                "desc" => " Küçük tavuk, nar sosu, tereyağı",
                "img" => "",
                "category" => "Şişler"
            ]
        ]
        ];

        return $this->successResponse(['data'=>$menu], '');

    }

}
