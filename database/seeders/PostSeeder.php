<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('posts')->insert([
            [
                'category_id' => 2,
                'slug' => \Str::slug('Электропроводка в доме','_'),
                'title' => 'Электропроводка в доме',
                'description' =>
                    '<ul class="uk-nav">
                        <li>Монтаж электроповодки в доме 90 м&sup2 от <span class="uk-badge">60 т.руб</span></li>
                        <li>Монтаж электроповодки в доме 120 м&sup2 от <span class="uk-badge">80 т.руб</span></li>
                        <li>Монтаж электроповодки в доме 150 м&sup2 от <span class="uk-badge">100 т.руб</span></li>
                    </ul>
                    <p>
                        Качественно и грамотно выполненный монтаж электрической системы в частном доме либо коттедже под ключ будет гарантировать безопасную и бесперебойную эксплуатацию бытовой техники, электроприборов и осветительного оборудования.
                        Наши специалисты имеют большой опыт и соответствующие навыки в этой области, поэтому им под силу справиться с работой любой сложности.
                        Лишь квалифицированный подход сможет гарантировать высококачественный результат.
                    </p>
                    <h3 class="uk-h3">Особенности монтажа электропроводки</h3>
                    <p>
                        Выполняется разработка проекта с соблюдением всех правил и общеустановленных норм, в котором будут обозначены места расположения точек подключения, электрического щитка, распределительных коробок.
                        Вся проводка в доме прокладывается закрытым способом, что позволяет не нарушать эстетического вида помещения. При желании клиента может использоваться открытый метод монтажа.
                        Углубления на всех поверхностях производятся с помощью специализированных инструментов, поэтому процесс не занимает много времени. Для организации места под установку подрозетников применяются коронки, оснащенные насечками, благодаря которым удается достичь нужной глубины и соответствующего диаметра отверстия.
                        После прокладки кабеля и разключения распределительных коробок производится контрольная прозвонка электросети на работоспособность.
                    </p>

                    <h3 class="uk-h3">Преимущества профессионального монтажа электрики под ключ:</h3>
                    <ul>
                        <li>качество и надежность предоставляемых услуг;</li>
                        <li>приемлемые и демократичные цены на все виды работ;</li>
                        <li>использование современных расходных материалов;</li>
                        <li>выполнение работ любой сложности за минимальный период;</li>
                        <li>предоставление гарантии;</li>
                    </ul>',
                'published' => 1,
                'created_at' => '2021-04-17 16:22:44'
            ],
            [
                'category_id' => 2,
                'slug' => \Str::slug('Электропроводка в квартире','_'),
                'title' => 'Электропроводка в квартире',
                'description' =>
                    '<ul class="uk-nav">
                        <li>Монтаж электроповодки в квартире 45 м&sup2 от <span class="uk-badge">25 т.руб</span></li>
                        <li>Монтаж электроповодки в квартире 60 м&sup2 от <span class="uk-badge">35 т.руб</span></li>
                        <li>Монтаж электроповодки в квартире 90 м&sup2 от <span class="uk-badge">50 т.руб</span></li>
                    </ul>
                    <p>
                        Электропроводка в квартире должна быть сконструирована правильно. Ошибки, допущенные на этапе монтажа чреваты плачевными последствиями, вплоть до пожара.
                        Замена проводов не займет много времени, если за дело возьмутся профессионалы. При необходимости может быть выполнен срочный ремонт.
                    </p>
                    <h3>Услуги профессиональных электриков</h3>
                    <p>
                        Наши специалисты  предоставляют услуги профессиональных электриков, готовых смонтировать электропроводку в квартире и на других объектах, среди которых могут быть:
                    </p>
                    <ul>
                        <li>Частные  дома;</li>
                        <li>Офисы;</li>
                    </ul>
                    <p>
                        Замена электрики требует профессиональных навыков, которыми в полной мере обладают наши специалисты.
                        Проведение электромонтажных работ выполняется с соблюдением техники безопасности. Проводка в помещениях прокладываются так, чтобы их не было видно, они не портят интерьер.
                        Услугами электриков можно воспользоваться и при необходимости подключения электрооборудования. Они проконтролируют, чтобы в квартире не выбивало пробки.
                    </p>
                    <h3>Сколько стоит поменять старую проводку?</h3>
                    <p>
                        Чтобы поменять старую проводку в квартире, больших финансовых расходов не потребуется. Примерные цены указаны в <a class="uk-button uk-button-text" style="vertical-align: baseline" href="#">прайсе</a>. Стоимость рассчитывается индивидуально и зависит от площади здания. Специалисту подготовят смету, в которую включат стоимость электрокабелей и прочего оборудования.
                        Старая проводка создает опасность для эксплуатации здания, поэтому с ее заменой нельзя медлить.<br>
                        Обращаясь к нам, электропроводка в квартире будет заменена качественно и в срок. Профессионалы выполнят работу «под ключ», используют расходные материалы высокого качества. Опытные электрики проследят за тем, чтобы проводка в квартире была в идеальном состоянии.
                    </p>',
                'published' => 1,
                'created_at' => '2021-04-17 16:23:14'
            ],
            [
                'category_id' => 2,
                'slug' => \Str::slug('Электропроводка в офисе','_'),
                'title' => 'Электропроводка в офисе',
                'description' =>
                    '<p>
                        Офисные и складские помещения особенно нуждаются в специальном техническом оборудовании, которое требует огромного расхода электрической энергии. Работы по монтажу электрики должны быть поручены настоящим профессионалам. Это поможет избежать частых поломок и неисправностей, что негативно отразится на всем рабочем процессе. Специалисты имеют многолетний опыт работы. Для электрического монтажа потребуется разработка индивидуальной схемы электрификации с учетом приблизительной нагрузкой сети.
                    </p>
                    <h3>Особенности монтажных работ</h3>
                    <p>
                        Многие офисы располагаются в очень старых постройках и домах, которые могут быть выведены из жилого фонда. В таких помещениях обычно используется старая проводка, ее обязательно нужно поменять. Заменой розеток и выключателей в таком случае не обойтись.
                        Монтаж электрики нужно проводить по уже существующим правилам и стандартам. При работе применяются только качественные материалы и профессиональное оборудование. В ином случае есть риск возгорания, нарушения целостности изоляции и прочих непредвиденных ситуаций. Монтажные работы на складе и в офисе отличаются от работ в жилых помещениях.
                        В квартирах и домах питание сети осуществляется от одной фазы, в нежилых помещениях – от трех.
                        На складах и в офисах осуществляется установка заземления. Поскольку существует большая вероятность пожаров и взрывов, государственной пожарной службой разработаны специальные требования и стандарты. В производственных зданиях и офисах необходимо устанавливать систему сигнализации.
                        <br>В электрической схеме должны отражаться следующие важные моменты:
                    </p>
                    <ul>
                        <li>нахождение подключенной офисной техники и производственного оборудования;</li>
                        <li>разводка кабельных систем и проводки;</li>
                        <li>расположение приборов защитного отключения;</li>
                        <li>монтаж рубильников и автоматических выключателей.</li>
                    </ul>
                    <p>
                        Некоторое оборудование может нуждаться в особой подаче и потребления электричества. Это стоит учитывать при монтажных работах.
                        Когда все работы будут завершены, нужно убедиться в исправной работе всей системы.
                    </p>',
                'published' => 1,
                'created_at' => '2021-04-17 16:23:34'
            ],
            [
                'category_id' => 3,
                'slug' => \Str::slug('Установка и замена электросчетчика','_'),
                'title' => 'Установка и замена электросчетчика',
                'description' =>
                    '<p>
                        Прибор в виде электрического счетчика есть в каждой квартире и частном доме. Благодаря оборудованию можно вести учет потребляемой электроэнергии за конкретный промежуток времени. Замена устройства может выполняться в случае выхода из рабочего состояния либо по истечении эксплуатационного периода.
                    </p>
                    <p>
                        Новый аппарат программируется в специальной организации, после монтажа проверяется службой энергонадзора, которая составляет акт, затем электрический счетчик можно вводить в эксплуатацию. Демонтировать самостоятельно старое устройство категорически запрещено, этим должны заниматься специалисты.
                        Прежде чем приступить к установке, изначально стоит определиться с моделью. Во время приобретения нового счетчика стоит ориентироваться на фазы и тарифы, так как они могут различаться. Например, однофазный прибор подходит лишь для однофазных сетей, трехфазные пригодны для соответствующих сетей, тем не менее могут подсоединяться и к однофазным.
                        <br>Замена счетчика и порядок выполнения процедуры:
                    </p>
                    <ul>
                        <li>
                            для защиты электрического счетчика понадобится металлический либо пластиковый щиток, куда будут устанавливаться автоматические выключатели;
                        </li>
                        <li>
                            старый счетчик демонтируется. Перед выполнением работ помещение обязательно обесточивается. Вводные провода изолируются или на них надеваются защитные средства;
                        </li>
                        <li>
                            далее определяется место установки нового оборудования. Поскольку вес щитка с надлежащими приборами внушительный, заранее продумывается надежное крепление;
                        </li>
                        <li>
                            короб комплектуется соответствующими элементами, подробный план схемы идет в наборе с каждым новым аппаратом. Затем счетчик подключается к системе электроснабжения.
                        </li>
                    </ul>
                    <p>
                        Монтаж оборудования должен проводиться со знанием дела и соблюдением допустимых показателей. Электросчетчик можно устанавливать на высоте от 80 до 170 см, в отдельных случаях расстояние места установки может быть снижено на 40 см.
                        К прибору должен иметься свободный доступ, чтобы на случай возникновения неполадок мастер смог легко добраться до аппарата и устранить причину неисправности.
                        На первый взгляд процедура может показаться достаточно легкой и несложной, тем не менее отсутствие навыков и знаний могут спровоцировать негативные последствия. Работу лучше доверить специалистам, которые имеют не только опыт, но и современное оборудование, высококачественный инструмент.
                    </p>',
                'published' => 1,
                'created_at' => '2021-04-17 16:23:34'
            ],
            [
                'category_id' => 1,
                'slug' => \Str::slug('Освещение','_'),
                'title' => 'Освещение',
                'description' =>
                    '<p>
                        Сегодня освещение квартир и частных домов не ограничивается использованием классической люстры. Широкий представленный ассортимент разнообразных светильников на отечественном рынке буквально поражает воображение покупателей. Но установка и подключение светильника являются достаточно сложным делом, требующим применения профессиональных навыков.
                    </p>
                    <h3>Виды осветительных приборов.</h3>
                    <p>По виду своего размещение осветительные приборы подразделяются на следующие виды:</p>
                    <ul>
                        <li>настенные модели;</li>
                        <li>напольные устройства;</li>
                        <li>переносные приборы освещения;</li>
                        <li>потолочные светильники;</li>
                        <li>настольные лампы и торшеры.</li>
                    </ul>
                    <p>
                        Монтаж светильников требует обязательного соблюдения правил техники безопасности при выполнении работ с электричеством.

                    </p>
                    <h3>Монтаж современных потолочных светильников.</h3>
                    <p>
                        Сегодня известны следующие типы современных потолочных светильников:
                    </p>
                    <ul>
                        <li>
                            Встраиваемые модели, полноценно освещающие помещение без потери окружающего пространства.
                        </li>
                        <li>
                            Точечные светильники, чаще всего используемые для локального получения освещения. В таких типах устройств рассеиватель поворачивается совместно с лампой.
                        </li>
                        <li>
                            Накладные приборы освещения, размещаемые прямо на потолочной поверхности. Устройства могут быть использованы с любой мощностью и любым видом приобретаемых лампочек.
                        </li>
                    </ul>
                    <p>
                        Перед монтажом потолочных светильников выполняются разные подготовительные работы с соблюдением следующего порядка: определение необходимого числа светильников и места их предстоящего размещения; подготовка для выполнения работы всех инструментов и используемых материалов; установка распределительных коробок на приборы освещения; отвод от коробок электропроводов во все места размещения потолочных светильников; установка блока питания — 12 В.
                    </p>
                    <h3>Установка точечных типов светильников.</h3>
                    <p>
                        При самостоятельном монтаже точечных типов светильников не требуется проделывание отверстий в потолочном покрытии. Рекомендуется доверить такое дело опытным квалифицированным специалистам. Для прикрепления светильника обязательно потребуется предварительный выбор крепления, размещаемого на потолке. Это имеет связь с тем фактом, что плёнка, используемая для таких потолочных конструкций, может, просто не выдержать вес современных осветительных приборов. После выполнения отверстия на потолке через него наружу вытягивается конец электропровода. Затем процесс установки зависит от конструкции приобретённого прибора: У осветительных приборов из хрупких материалов в конструкции присутствует специальный патрон. Провода устанавливаемого электроприбора подсоединяются к кабелю с помощью клеммника, устанавливаемого прямо в отверстие. Внутренние пружины поднимаются и опускаются уже при нахождении в межпотолочном пространстве. Процесс установки должен быть завершён вкручиванием необходимых лампочек. Некоторые типы светильников подразумевают присоединение патрона прямо к корпусу рабочей проводки, состоящему из всего лишь пары проводков. Для проведения монтажа провода протягиваются через клеммник, затем плафон фиксируется вместе с лампочкой с помощью фиксирующей пружины.
                        При завершении выполняется установка лампочки в осветительный плафон, а затем готовый светильник устанавливается в отверстие. Более лёгким является монтаж светильника, имеющего на цоколе лампочку. В подобных используемых конструкциях патроны оснащены винтовыми зажимами, из-за этого потребуется только зачистка проводов. Затем светильник подключается и устанавливается на своё положенное место.
                    </p>',
                'published' => 1,
                'created_at' => '2021-04-17 16:23:34'
            ],
            [
                'category_id' => 1,
                'slug' => \Str::slug('Теплый пол','_'),
                'title' => 'Теплый пол',
                'description' =>
                    '<p>
                        Существует два основных вида теплых полов: водяные и электрические. Они также разделяются на подвиды, каждый из которых при монтаже требует знания своих особенностей и нюансов. Любая из этих систем включает нагревательные элементы, регуляторы и датчики температуры в помещении. Работы по установке лучше производить на первом этапе ремонтных операций в здании.
                    </p>
                    <h3>Монтаж кабельного теплого пола</h3>
                    <p>
                        В данной системе нагревательным элементом служат одно- и двухкабельные маты, нагревающиеся от электрической сети. Их установка происходит в следующей последовательности:
                    </p>
                    <ul>
                        <li>
                            Составление схемы укладки кабелей с обозначением точек размещения датчиков.
                        </li>
                        <li>
                            На выровненном полу размещается теплоизолирующий слой с отражающей поверхностью.
                        </li>
                        <li>
                            Осуществление укладки кабелей и монтаж системы терморегуляции.
                        </li>
                        <li>
                            Заливка цементом с контролем заполнения пустот. Высыхание поверхности происходит в течение 1 месяца.
                        </li>
                        <li>
                            Осуществление стяжки и проверка на работоспособность конструкции.
                        </li>
                    </ul>
                    <h3>Установка ИК-полов</h3>
                    <p>
                        Этот инновационный способ отопления помещения опирается на использование тонких, легких пленочных панелей.
                    </p>
                    <ul>
                        <li>
                            Подготовка основания, включающая стяжку полов. Такой вид отопления может монтироваться только на идеально гладкую поверхность.
                        </li>
                        <li>
                            Расположение ИК-панелей с подключением системы контроля температуры и регулировки. Проверка работоспособности конструкции.
                        </li>
                        <li>
                            Осуществление сухого или мокрого типа монтажа: укладка теплозащитных элементов или заливка раствором. Его просушка занимает примерно 1 месяц.
                        </li>
                    </ul>',
                'published' => 1,
                'created_at' => '2021-04-17 16:23:34'
            ],
            [
                'category_id' => 1,
                'slug' => \Str::slug('Обогрев кровли','_'),
                'title' => 'Обогрев кровли',
                'description' =>
                    '<p>
                        Свисающая длинная, острая наледь – реальная опасность для здоровья и жизни обитателей дома. Вот почему в условиях российских зим особенно важно позаботиться об установке антиобледенительной системы.
                        Какой бы совершенной ни была теплоизоляция крыши, при близкой к нулю температуре в ендовах, желобах и водостоках появляются наледи и ледяные пробки. Они не дают оттаявшему снегу стекать к земле, что, естественно, приводит к протечкам. А повисающие на крышах сосульки в любой момент могут упасть на головы выходящих из дома жильцов. Механическое удаление льда с помощью лопаты и топора губительно для кровли. Для этой цели существуют отработанные технологии и специальные виды нагревательных кабелей, которые в северных странах Европы используются уже полстолетия. По краю крыши «змейкой» параллельно водостоку, а также в сами желоба и трубы укладывают нагревательный кабель. По сигналу датчиков температуры и влажности этот провод с помощью терморегулятора будет подогревать участки крыши и трубы всякий раз, когда выпавшие осадки начнут замерзать. В результате направление для передвижения воды останется всегда свободным, и вы забудете о неприятностях, связанных с обледенением!
                        Думаете, с наступлением зимы система будет действовать непрерывно, «накручивая» на вашем счетчике киловатт-часы? Вот и ошибаетесь. Правильно отрегулированная система работает только в случае снегопадов или оттепелей с температурой, близкой к нулю. Количество таких дней на большей части России не превышает 30-40 в год. Средний показатель удельного расхода электроэнергии на 1 м периметра крыши в Москве составляет примерно 150 кВт/ч, за сезон работы. Достаточно умножить эту цифру на величину периметра вашей крыши и тарифную цену одного кВт/ч, и вы получите примерную стоимость очистки крыши ото льда, которая вполне сопоставима с расходами на грубую механическую очистку.
                        Если учесть, что срок службы нагревательного кабеля на крыше, по данным пионеров этой технологии, составляет 35 лет, можете себе представить, какой экономический эффект приносит удивительная система электроподогрева. Правда, при одном условии — при грамотной установке системы. Установить систему снеготаяния на российской крыше сложнее, нежели, к примеру, на скандинавской. Дело в том, что в России — континентальный климат. Зимой при температуре от -10 до -15°С у нас часто идет снег, тогда как в скандинавских странах при -5°С и ниже
                        снегопадов, как правило, не бывает. В Европе более ответственно относятся и к теплоизоляции зданий.
                        <br>Как система функционирует:<br>
                        • Антиобледелительные системы работают, как правило, в осенне-весенний сезон и в оттепель.
                        <br>• В системе должны находится датчики температуры и влажности, которые скорее можно назвать мини-метеостанцией, а также терморегулятором.
                        <br>• Кабели устанавливаются на всем пути талой воды, начиная с горизонтальных желобов и лотков и заканчивая выходами из водостоков.
                        <br>• Необходимо верно определить мощность нагревательных кабелей для различных частей системы.
                        <br>Нагревательный кабель на кромке крыши<br>
                        При установке кабеля используются монтажные крепления. Не лишней предосторожностью будет предохранить кабель около или вблизи водоотбойника защитными листами, предохраняющими его от повреждений.
                        Нагревательные кабели в желобах и водосточных трубах могут крепиться по-разному. Хотя и для желоба, и для трубы используется один и тот же кабель. Линии нагревательного кабеля в желобах удерживаются на необходимом расстоянии друг от друга с помощью пластмассовых скобок. Внутри трубы крепится металлическая цепь, к которой крепятся пластмассовые обоймы, удерживающие линии кабеля от соприкосновения друг с другом. При длине кабеля менее 50 см металлическая цепь не требуется. Нагревательный провод в ендовах укладывается линиями вдоль желоба. Для крепления его в ендовах применяется монтажная лента. Водосточные трубы, выходящие в ендовы, нагреваются кабелем, который вставляется таким же способом, как и в трубах, которые сообщаются с желобами.
                        Для Непосвященных: все провода одинаковы, разве что отличаются цветом и толщиной. Между тем различия между ними куда более существенные. Мощность и марка кабеля определяются исходя из площади, которую следует обогреть, и возможностей
                        питающей подстанции. Кроме того, для решения конкретных проблем требуется определенный вид кабеля. Например, нагревательный элемент для квартирных «теплых полов» быстро выйдет из строя, если использовать его в системе «антилед». Нагревательные кабели бывают нескольких видов: резистивные (от английского resistance — сопротивление) и саморегулирующиеся. Первые имеют постоянное сопротивление по всей длине и, следовательно, выделяют тепло равномерно. Вторые способны самостоятельно регулировать выделение тепла в зависимости от среды, в которой находятся различные участки кабеля. Таким образом, минимизируется расход энергии. Резистивные кабели, рассчитанные для конкретных целей, поставляются заказчику строго определенной длины с заранее подготовленными для монтажа концами. Саморегулирующийся кабель можно резать сразу в момент проведения работ и при необходимости соединять отрезки между собой. Существует еще масса всевозможных нюансов, связанных с установкой антиобледенительных систем. Поэтому лучше обращаться в крупные фирмы, имеющие значительный опыт и предоставляющие гарантию на свою работу.
                        <br>
                        Нередко монтажом антиобледенительных систем занимаются лица не обладающие достаточным опытом для проведения такого рода работ. В результате допущенные ими инженерные ошибки в расчетах или отступления от технологии монтажа приводят к сбоям в работе системы.
                        Между тем у дилеров ведущих производителей вы сможете не только приобрести качественные компоненты систем: терморегуляторы, датчики влажности и температуры, устройства защитного отключения, теплоизоляционные и крепежные материалы, -но и с их помощью квалифицированно смонтировать на своих объектах системы любой сложности. Достаточно сформулировать проблему, чтобы получить полный комплекс работ для ее решения. Каждая солидная фирма дает на свою продукцию многолетнюю гарантию, чего не скажешь об эпизодически появляющихся на рынке чешских, польских и некоторых других продавцах, не заинтересованных в последующих сервисных услугах.
                    </p>',
                'published' => 1,
                'created_at' => '2021-04-17 16:23:34'
            ],
            [
                'category_id' => 1,
                'slug' => \Str::slug('Вызов электрика','_'),
                'title' => 'Вызов электрика',
                'description' =>
                    'Вызов электрика',
                'published' => 1,
                'created_at' => '2021-04-17 16:23:34'
            ],
        ]);
    }
}
