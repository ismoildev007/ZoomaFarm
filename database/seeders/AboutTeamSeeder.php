<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('about_teams')->insert([
            'short_content_uz' => 'Biz diabet va boshqa jiddiy surunkali kasalliklar bilan yashayotgan kishilar uchun yanada samaraliroq davolash usullarini kashf qilamiz.',
            'short_content_ru' => 'Мы открываем более эффективные методы лечения для людей, страдающих диабетом и другими серьезными хроническими заболеваниями.',
            'short_content_en' => 'We are discovering more effective treatments for people living with diabetes and other serious chronic diseases.',
            'about_or_company_uz' => 'Biz 1923 yilda asos solingan va shtab-kvartirasi Daniyaning Kopengagen shahrining shundoq tashqarisida joylashgan sog‘liqni saqlash bo‘yicha global kompaniyamiz.

Maqsadimiz diabet va semizlik kabi boshqa jiddiy surunkali kasalliklar hamda kam uchraydigan qon va kam uchraydigan endokrin tizimi kasalliklarini yengish uchun o‘zgarishlarni ilgari surishdir

Biz buni novatorlik ilmiy yutuqlari, dori-darmonlardan foydalana olish imkoniyatini kengaytirish va o‘zimiz davolaydigan kasalliklarning oldini olish va davolash ustida ishlash orqali amalga oshirmoqdamiz.

Biz butun dunyo bo‘ylab 80 ta ofisda 64,000 dan ortiq kishilarni ish bilan ta’minlaymiz va 170 ortiq mamlakatda mahsulotlarimizni sotamiz.',
            'about_or_company_ru' => 'Мы — международная компания в сфере здравоохранения, основанная в 1923 году, со штаб-квартирой недалеко от Копенгагена, Дания.

Наша цель — способствовать переменам, направленным на преодоление других серьезных хронических заболеваний, таких как диабет и ожирение, а также редких заболеваний крови и эндокринной системы.

Мы делаем это с помощью инновационных научных достижений, расширения доступа к лекарствам и работы по профилактике и лечению заболеваний, которые мы лечим.

У нас работают более 64 000 человек в 80 офисах по всему миру, а наша продукция продается более чем в 170 странах.',
            'about_or_company_en' => 'We are a global healthcare company founded in 1923 and headquartered just outside Copenhagen, Denmark.

Our mission is to drive change to overcome serious chronic diseases such as diabetes and obesity, as well as rare blood and endocrine diseases.

We do this by pioneering scientific breakthroughs, expanding access to medicines, and working to prevent and treat the diseases we treat.

We employ more than 64,000 people in 80 offices around the world and sell our products in more than 170 countries.',

            'description_title_uz' => 'G ‘oyalaringizni amalga oshirishga yordam beruvchi hamkor',
            'description_title_ru' => 'Партнер, который поможет вам реализовать ваши идеи',
            'description_title_en' => 'A partner who helps you realize your ideas',

            'description_uz' => 'Yangi dorilarni kashf qilishda hamkorlik qilish va bu jarayonni tezlashtirish uchun biz butun dunyodagi yetakchi universitetlar va biotexnologik kompaniyalar bilan yaqin hamkorlikda ishlaymiz.

Biz o‘zimiz bir-birini to‘ldiruvchi imkoniyatlar va umumiy qiziqishlarni baham ko‘radigan va yangi peptidlar va oqsillarning analoglarini hamda klinikagacha bo‘lgan tadqiqotlar uchun antitanachalarni ochiq holda bo‘lishadigan yangi hamkorlarni muntazam ravishda qidiramiz.

Biz butun dunyo bo‘ylab qiziquvchan va jo‘shqin olimlarga tanlangan yuqori sifatli va yaxshi o‘rganilgan birikmalardan oson va erkin foydalanish imkoniyatlarini taklif qilamiz.',
            'description_ru' => 'Мы тесно сотрудничаем с ведущими университетами и биотехнологическими компаниями по всему миру для сотрудничества и ускорения открытия новых лекарственных препаратов.

Мы постоянно ищем новых партнеров, которые разделяют взаимодополняющие возможности и общие интересы и которые будут открыто делиться новыми аналогами пептидов и белков, а также антителами для доклинических исследований.

Мы предлагаем простой и бесплатный доступ к избранным высококачественным и хорошо изученным соединениям любознательным и энтузиастичным ученым по всему миру.',
            'description_en' => 'We work closely with leading universities and biotech companies around the world to collaborate and accelerate the discovery of new drugs.

We are constantly looking for new partners with whom we share complementary capabilities and common interests, and who will openly share novel peptide and protein analogs and antibodies for preclinical research.

We offer curious and motivated scientists around the world easy and free access to selected high-quality and well-studied compounds.',

            'content_title_uz' => 'Novo Nordisk Way',
            'content_title_ru' => 'Ново Нордиск Вэй',
            'content_title_en' => 'Novo Nordisk Way',

            'content_uz' => 'Novo Nordisk Way - bu biz tomonimizdan qabul qilinadigan har qanday qaror ostida yotuvchi yo‘riqnomali tamoyillar to‘plami.  U bizning kimligimiz, qanday ishlashimiz va nimalarga erishishni xohlashimizni bayon qiladi va kompaniyamiz va xodimlarimiz uchun aniq yo‘nalish o‘rnatadi. Umuman olganda u bir-birlarimizga - va butun dunyo bo‘ylab to‘liq va sog‘lom yashash uchun mahsulotlarimizga suyanuvchi millionlab bemorlarga beradigan va’dadir.

1923 yili Daniyalik asoschilarimiz diabetni o‘zgartirish bo‘yicha sayohatni boshladilar. Bugungi kunda bizlar butun dunyo bo‘ylab diabet va boshqa jiddiy surunkali kasalliklarni yengish uchun o‘zgarishni ilgari surish ishtiyoqi, malakalari va majburiyatiga ega bo‘lgan minglab xodimlarmiz.

Bizlar o‘zimiz faol bo‘lgan barcha kasallik sohalarida yetakchi bo‘lishni maqsad qilamiz.
Bizning asosiy hissamiz innovatsion biologik dori vositalari kashf qilish va ishlab chiqish va ularni dunyo bo‘ylab bemorlarga foydalanish mumkin bo‘ladigan qilishdan iborat.
Biznesimizning o‘sib borishi va raqobatbardosh moliyaviy natijalarni yetkazib berish bemorlarga yaxshiroq yashashda yordam berishimiz, aksiyadorlarimizga jozibador daromadlar taklif qilishimiz va hamjamiyatlarimizga hissa qo‘shishimizga imkon beruvchi narsadir.
Biznes falsafamiz moliyaviy, ijtimoiy va ekologik mulohazalarni muvozanatlashdan biridir - biz buni “Uchta tag chiziq” deb ataymiz.
Biz ochiq va sofdil, ulkan maqsadlarni ko‘zlovchi va mas’uliyatlimiz va boshqalarga hurmat bilan munosabatda bo‘lamiz.
Biz odamlarimizga o‘z qobiliyatlarini ochib berish uchun imkoniyatlar taklif etamiz.
Biz sifat va biznes ahloqiga nisbatan hech qachon kompromissga bormaymiz.
Biz har kuni bemorlar, xodimlarimiz va aksiyadorlarimiz uchun uzoq muddatli istiqbolda nima eng yaxshiligini yodda saqlagan holda qiyin tanlovlar qilishimiz kerak.

Bu bizning yo‘limizdir. Bu Novo Nordisk Way.',
            'content_ru' => 'Novo Nordisk Way — это набор руководящих принципов, которые лежат в основе каждого принимаемого нами решения. Он описывает, кто мы, как мы работаем и чего хотим достичь, а также задает четкое направление для нашей компании и наших сотрудников. В конечном итоге, это обещание, которое мы даем друг другу и миллионам пациентов по всему миру, которые полагаются на нашу продукцию, чтобы жить полноценной и здоровой жизнью.

В 1923 году наши датские основатели начали путь трансформации диабета. Сегодня мы — это тысячи сотрудников, обладающих энтузиазмом, навыками и преданностью делу, направленным на достижение перемен для борьбы с диабетом и другими серьезными хроническими заболеваниями по всему миру.

Мы стремимся стать лидерами во всех областях заболеваний, в которых мы работаем.
Наш основной вклад — открытие и разработка инновационных биологических препаратов и предоставление их пациентам по всему миру.
Развитие нашего бизнеса и достижение конкурентоспособных финансовых результатов позволяют нам помогать пациентам жить лучше, обеспечивать привлекательную прибыль нашим акционерам и вносить вклад в наши сообщества.
Философия нашего бизнеса заключается в поиске баланса между финансовыми, социальными и экологическими соображениями. Мы называем это «тройным итогом».
Мы открыты и честны, амбициозны и ответственны, относимся к другим с уважением.
Мы предоставляем нашим людям возможности раскрыть свой потенциал.
Мы никогда не идем на компромисс в вопросах качества и деловой этики.
Каждый день нам приходится делать трудный выбор, думая о том, что будет лучше для наших пациентов, наших сотрудников и наших акционеров в долгосрочной перспективе.

Это наш путь. Это Novo Nordisk Way.',
            'content_en' => 'The Novo Nordisk Way is a set of guiding principles that underpin every decision we make. It explains who we are, how we work and what we want to achieve, and sets a clear direction for our company and our employees. In short, it is a promise we make to each other – and to the millions of patients around the world who rely on our products to live full and healthy lives.

In 1923, our Danish founders began a journey to change diabetes. Today, we are thousands of employees with the passion, skills and commitment to drive change to overcome diabetes and other serious chronic diseases around the world.

We aim to be leaders in all the disease areas in which we are active.

Our core contribution is to discover and develop innovative biologic medicines and make them available to patients around the world.

Growing our business and delivering competitive financial results is what enables us to help patients live better lives, offer attractive returns to our shareholders and contribute to our communities.
Our business philosophy is one of balancing financial, social and environmental considerations – we call it the “Triple Bottom Line”.
We are open and honest, ambitious and responsible, and treat others with respect.
We offer our people opportunities to unleash their potential.
We never compromise on quality and business ethics.
We have to make difficult choices every day, always keeping in mind what is best for patients, our employees and our shareholders in the long term.

This is our way. This is the Novo Nordisk Way.',

            'production' => '9',
            'research_and_development' => '5',
            'our_employees_work' => '6400',
            'countries_use' => '140',
            'image' => 'default_image.jpg',
            'content_image' => 'default_content_image.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
