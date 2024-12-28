@extends('layouts.product-news-contact')

@section('content')
    <div class="root responsivegrid">
        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
            <div class="investornews aem-GridColumn aem-GridColumn--default--12">
                <link
                    rel="stylesheet"
                    href="../../etc.clientlibs/nncorp/components/content/investornews/clientlibs.min.441ea127d28c5e527124ca862bc7f8c6.css"
                    type="text/css"
                />
                <script
                    type="text/javascript"
                    src="../../etc.clientlibs/nncorp/components/content/investornews/clientlibs.min.3a2957e9d0a43b4564bea444aaf9fe37.js"
                    async=""
                ></script>

                <div>
                    <div class="background gutters component-padding" style="background-color: #fcf2f5">
                        <div class="investornews-wrapper" v-cloak="">
                            <div class="titlegrid tb-Grid tb-Grid--24">
                                <div
                                    class="titleframe frameinverted xsmall tb-GridColumn tb-GridColumn--l--19 tb-GridColumn--m--20 tb-GridColumn--offset--l--2">
                                    <div class="tb-Grid tb-Grid--l--19 tb-Grid--m--20 tb-Grid--s--20 tb-Grid--xs--20">
                                        <div
                                            class="tb-GridColumn tb-GridColumn--l--6 tb-GridColumn--m--9 tb-GridColumn--s--12 tb-GridColumn--xs--20">
                                            <p class="tagline color-blue m-xxs-bottom">Novo Nordisk</p>
                                        </div>
                                        <div
                                            class="tb-GridColumn tb-GridColumn--l--19 tb-GridColumn--m--16 tb-GridColumn--s--18 tb-GridColumn--xs--20">
                                            <h1 class="plaintexttitle title color-blue xsmalltitle"
                                                v-html="applyContentStyle('Kompaniya bayonoti ')"></h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <img
                                src="https://www.novonordisk.com/content/dam/nncorp/global/en/media/images/latest-news/novo-nordisk-new-hillerod-facility-drawing.jpg.corpimgo.jpg"
                                alt=""
                            />
                            <div class="tb-Grid tb-Grid--24">
                                <div
                                    class="tb-GridColumn tb-GridColumn--l--24 tb-GridColumn--m--22 tb-GridColumn--offset--m--1">
                                    <div class="frame-box tb-Grid tb-Grid--l--24 tb-Grid--m--22 frame-padding">
                                        <div
                                            class="below-title-container tb-GridColumn tb-GridColumn--l--17 tb-GridColumn--m--20 tb-GridColumn--offset--l--4 tb-GridColumn--offset--m--1"
                                        >
                                            <div class="datetime">
                                                <p id="news_time" class="paragraph-s color-blue">
                                                    2024-12-20T10:41:55Z</p>
                                                <p id="news_date" class="paragraph-s color-blue">
                                                    2024-12-20T10:41:55Z</p>
                                            </div>
                                            <div class="pdfs-container">
                                                <a
                                                    class="download-link"
                                                    aria-label="Download pdf"
                                                    @click="downloadPDF('Novo Nordisk A\/S: CagriSema demonstrates superior weight loss in adults with obesity or overweight in the REDEFINE 1 trial', '4723091','https://ml-eu.globenewswire.com/Resource/Download/7c3d19b8-3501-4dcf-b698-33a21f73cbbe')"
                                                >
                                                    <span class="icon icon-download-seablue"></span>
                                                    Announcement.pdf
                                                </a>
                                            </div>
                                        </div>

                                        <div
                                            class="news-content color-blue paragraph-l tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--m--20 tb-GridColumn--offset--l--2 tb-GridColumn--offset--m--1"
                                        >
                                            <div class="section-wrapper richtext color-blue introtextsection">
                                                <h2 class="subsubheader h2 m-m-bottom">
                                                    Novo Holdings tomonidan Catalentni sotib olish va Novo Nordisk
                                                    tomonidan Novo Holdingsdan uchta ishlab chiqarish
                                                    maydonchasini sotib olish yakunlandi.
                                                </h2>
                                                <p></p>
                                                <p>
                                                    <strong>Bagsværd, Daniya, 2024 yil 18 dekabr</strong> – - Bugun Novo
                                                    Nordisk Novo Holdings A/S dan uchta ishlab
                                                    chiqarish maydonchasini sotib olishni yakunladi. Novo Holdings
                                                    kompaniyasi shtab-kvartirasi Nyu-Jersi (AQSh)da
                                                    joylashgan shartnomalarni ishlab chiqish va ishlab chiqarish
                                                    bo‘yicha global tashkilot bo‘lgan Catalent, Inc.
                                                </p>
                                                <p>
                                                    Uchta ishlab chiqarish maydonchasini sotib olish bo'yicha kelishuv
                                                    2024-yil 5-fevralda e'lon qilingan. Qo'shimcha
                                                    ma'lumot uchun kompaniya e'loniga qarang . with CagriSema versus
                                                    placebo.
                                                </p>
                                                <p>
                                                    “Biz sotib olish yakunlanganidan juda mamnunmiz. Uchta sayt bizning
                                                    ishlab chiqarish quvvatimizni miqyosda va tezlikda
                                                    kengaytiradi, shu bilan birga davom etayotgan ichki ta'minot zanjiri
                                                    kengayishlarini to'ldiradi. Sotib olish bizga
                                                    jiddiy surunkali kasalliklarga chalingan odamlarni sezilarli
                                                    darajada ko‘proq qamrab olish imkonini beradi”, dedi Novo
                                                    Nordisk prezidenti va bosh ijrochi direktori Lars Fruergaard
                                                    Yorgensen.
                                                </p>
                                                <p>
                                                    Sotib olishning 2024 va 2025 yillardagi kutilayotgan moliyaviy
                                                    ta'siri 2024 yil 14 dekabrda oshkor qilingan. Qo'shimcha
                                                    ma'lumot uchun kompaniya e'loniga qarang .
                                                </p>

                                                <p>
                                                    <strong>Novo Nordisk haqida</strong><br/><em
                                                    >Novo Nordisk 1923-yilda tashkil etilgan va bosh qarorgohi Daniyada
                                                        joylashgan yetakchi global sog‘liqni saqlash
                                                        kompaniyasidir. Bizning maqsadimiz diabetga oid merosimizga
                                                        asoslangan jiddiy surunkali kasalliklarni yengish uchun
                                                        o'zgarishlarni amalga oshirishdir. Biz buni ilm-fan yutuqlari,
                                                        dori vositalaridan foydalanish imkoniyatini
                                                        kengaytirish va kasallikning oldini olish va oxir-oqibatda
                                                        davolash orqali amalga oshiramiz. Novo Nordisk dunyoning
                                                        80 ta davlatida 72 000 ga yaqin xodimni ish bilan ta'minlaydi va
                                                        o'z mahsulotlarini 170 ga yaqin mamlakatda sotadi.
                                                        Novo Nordiskning B aktsiyalari Nasdaq Kopengagen (Novo-B)
                                                        ro'yxatiga kiritilgan. Uning ADRlari Nyu-York fond
                                                        birjasida (NVO) ro'yxatga olingan. Qo'shimcha ma'lumot olish
                                                        uchun novonordisk.com , Facebook , Instagram , X ,
                                                        LinkedIn va YouTube ga tashrif buyuring . </em
                                                    ><a
                                                        href="https://www.globenewswire.com/Tracker?data=VYF5icL46uobBu0Ky9Sq7ibXKz_-luj36GSMdqbJnYg6k-xwOtFwPAoY3h_JYR_oXzIAuZN-9cOTfitES2okQc_dsw26xmNQCx8mBlUqSFE="
                                                        rel="nofollow"
                                                        target="_blank"
                                                        title=""
                                                    ><em>novonordisk.com</em></a
                                                    ><em>,</em>
                                                    <a
                                                        href="https://www.globenewswire.com/Tracker?data=mGII9MeToF0RQlv7ovao-VO9Uto2ffMOUFbJuR7KHiVK9FQEUnQWoaBbXvZsPIpD5tomqvzpHfOv8DxBGcy03htyUud4Uy4mnpCxiMUzuIY="
                                                        rel="nofollow"
                                                        target="_blank"
                                                        title=""
                                                    ><em>Facebook</em></a
                                                    ><em>, </em
                                                    ><a
                                                        href="https://www.globenewswire.com/Tracker?data=Q8P6ED8DWgu22DDbEFgyUjldfzByoOSQP4fo_WtettsEn5EcIADkXsS2wfjSexElz_SZG8o1llsbz72v8QqtMJj28dbEmbFJfEfDWbrKNjU="
                                                        rel="nofollow"
                                                        target="_blank"
                                                        title=""
                                                    ><em>Instagram</em></a
                                                    ><em>, </em
                                                    ><a
                                                        href="https://www.globenewswire.com/Tracker?data=3M189jjkBggL_y3Mw5SpliVcS9eme_usfCnVkVon5qUrAfDcXS4GZoPzZHmKMURtNc4qzeJ0LwpNQdBP0R9XXA=="
                                                        rel="nofollow"
                                                        target="_blank"
                                                        title=""
                                                    ><em>X</em></a
                                                    ><em>, </em
                                                    ><a
                                                        href="https://www.globenewswire.com/Tracker?data=DQi4Op8Ii_sEoq8Ue0Ekqmt2-M4R_ga0ayqv_l8dJjz7GL--TsngvL0eHN2fpIq_d64YkVUM-uqFaxOaTg-NupNYZOMHYYuoFNEVGAcjA0g="
                                                        rel="nofollow"
                                                        target="_blank"
                                                        title=""
                                                    ><em>LinkedIn</em></a
                                                    ><em> and</em>
                                                    <a
                                                        href="https://www.globenewswire.com/Tracker?data=9tCzrOcb8YiatR69YcUfkRthD0m0hMs8mSmDoOSHnFdn9-huM_KT1GhbnC3RZL055aFJOHgi8FC5ijHSzjZDXazsugHY5aMvlqIofGleQFE="
                                                        rel="nofollow"
                                                        target="_blank"
                                                        title=""
                                                    ><em>YouTube</em></a
                                                    ><em>.</em>
                                                </p>
                                                <p><strong>Qo'shimcha ma'lumot uchun kontaktlar</strong></p>
                                                <table
                                                    style="border-collapse: collapse; width: 326.05pt; border-collapse: collapse">
                                                    <tr>
                                                        <td style="width: 217.4px; vertical-align: top">
                                                            <strong>Media:</strong></td>
                                                        <td style="width: 217.34px; vertical-align: top"> </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 217.4px; vertical-align: top">
                                                            <strong>Ambre James-Brown </strong><br/>+45 3079 9289<br/><a
                                                                href="mailto:abmo@novonordisk.com"
                                                                rel="nofollow"
                                                                target="_blank"
                                                                title="abmo@novonordisk.com"
                                                            >abmo@novonordisk.com</a
                                                            ><br/><br/>
                                                        </td>
                                                        <td style="width: 217.34px; vertical-align: top">
                                                            <strong>Liz Skrbkova (US)</strong><br/>+1 609 917
                                                            0632<br/><a
                                                                href="mailto:lzsk@novonordisk.com"
                                                                rel="nofollow"
                                                                target="_blank"
                                                                title="lzsk@novonordisk.com"
                                                            >lzsk@novonordisk.com</a
                                                            ><br/><br/>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 217.4px; vertical-align: top"><strong>Investors:</strong>
                                                        </td>
                                                        <td style="width: 217.34px; vertical-align: top"> </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 217.4px; vertical-align: top">
                                                            <strong>Jacob Martin Wiborg Rode</strong><br/>+45 3075
                                                            5956<br/><a
                                                                href="mailto:jrde@novonordisk.com"
                                                                rel="nofollow"
                                                                target="_blank"
                                                                title="jrde@novonordisk.com"
                                                            >jrde@novonordisk.com</a
                                                            ><br/><br/>
                                                        </td>
                                                        <td style="width: 217.34px; vertical-align: top">
                                                            <strong>David Heiberg Landsted</strong> <br/>+45 3077 6915
                                                            <br/><a
                                                                href="mailto:dhel@novonordisk.com"
                                                                rel="nofollow"
                                                                target="_blank"
                                                                title="dhel@novonordisk.com"
                                                            >dhel@novonordisk.com</a
                                                            ><br/><br/>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 217.4px; vertical-align: top">
                                                            <strong>Sina Meyer </strong><br/>+45 3079 6656<br/><a
                                                                href="mailto:azey@novonordisk.com"
                                                                rel="nofollow"
                                                                target="_blank"
                                                                title="azey@novonordisk.com"
                                                            >azey@novonordisk.com</a
                                                            ><br/><br/>
                                                        </td>
                                                        <td style="width: 217.34px; vertical-align: top">
                                                            <strong>Ida Schaap Melvold </strong><br/>+45 3077
                                                            5649<br/><a
                                                                href="mailto:idmg@novonordisk.com"
                                                                rel="nofollow"
                                                                target="_blank"
                                                                title="idmg@novonordisk.com"
                                                            >idmg@novonordisk.com</a
                                                            ><br/><br/>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 217.4px; vertical-align: top">
                                                            <strong>Frederik Taylor Pitter </strong><br/>+1 609 613 0568<br/><a
                                                                href="mailto:fptr@novonordisk.com"
                                                                rel="nofollow"
                                                                target="_blank"
                                                                title="fptr@novonordisk.com"
                                                            >fptr@novonordisk.com</a
                                                            ><br/><br/>
                                                        </td>
                                                        <td style="width: 217.34px; vertical-align: top"> </td>
                                                    </tr>
                                                </table>
                                                <p>Kompaniya e'loni No 99 / 2024</p>

                                                <ul id="gnw_attachments_section-items">
                                                    <li>
                                                        <a
                                                            target="_blank"
                                                            href="https://www.globenewswire.com/Tracker?data=5PJCxSSkSZdEzzByJDXoc8D7c0lwpym2oPUMF6tCeu3fG22zz-jwev357_mu91SMBF3px677osT2Ubcy0a_n4HQxEeqNOk5Rg4Uy0GVy0h9p77Kv58-r-h8I4uaUDcOuX_86ERO2guWG8YSVdr_aXAQF-fvSWoFdN0fn0mZ_7XC1R8bRXSelq8rd0HIs3vyL"
                                                            title="PR241220-CagriSema-Obesity"
                                                            rel="nofollow"
                                                        >PR241220-CagriSema-Obesity</a
                                                        >
                                                    </li>
                                                </ul>
                                                <br/><img
                                                    alt=""
                                                    src="../../media/MDM3ZTFhZWMtM2M1ZS00ZDkzLWEwYzAtZWVmMmZjMmY5YWU0LTEwMTQxMzQ%3D/tiny/Novo-Nordisk-A-S.png"
                                                    referrerpolicy="no-referrer-when-downgrade"
                                                />
                                            </div>

                                            <div class="download-section-wrapper">
                                                <h2 class="subsubheader h2 m-m-bottom">Yuklab olish</h2>
                                                <div class="pdfs-container">
                                                    <a
                                                        class="download-link"
                                                        aria-label="Download pdf"
                                                        @click="downloadPDF('Novo Nordisk A\/S: CagriSema demonstrates superior weight loss in adults with obesity or overweight in the REDEFINE 1 trial', '4723091','https://ml-eu.globenewswire.com/Resource/Download/7c3d19b8-3501-4dcf-b698-33a21f73cbbe')"
                                                    >
                                                        <span class="icon icon-download-seablue"></span>
                                                        Announcement.pdf
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

