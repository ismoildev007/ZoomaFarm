﻿@extends('layouts.product-news-contact')

@section('content')
    <div class="root responsivegrid">
        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
            <div class="container responsivegrid aem-GridColumn aem-GridColumn--default--12">
                <link rel="stylesheet"
                      href="/etc.clientlibs/nncorp/clientlibs/vuejs/components/loading-indicator.min.css"
                      type="text/css"/>
                <link rel="stylesheet" href="/etc.clientlibs/nncorp/clientlibs/vuejs/components/loading-button.min.css"
                      type="text/css"/>
                <link
                    rel="stylesheet"
                    href="/etc.clientlibs/nncorp/clientlibs/vuejs/form-components/singleselect.min.cfb02a6d5ae1ecbca186a7f8f4c8c325.css"
                    type="text/css"
                />
                <link
                    rel="stylesheet"
                    href="/etc.clientlibs/nncorp/clientlibs/vuejs/form-components/multiselect.min.03524b97bec855b9db1d835e51b4037a.css"
                    type="text/css"
                />
                <link rel="stylesheet"
                      href="/etc.clientlibs/nncorp/clientlibs/vuejs/components/form-multiple-products.min.css"
                      type="text/css"/>
                <link
                    rel="stylesheet"
                    href="/etc.clientlibs/nncorp/components/content/form/form-recaptcha/clientlibs.min.d41d8cd98f00b204e9800998ecf8427e.css"
                    type="text/css"
                />
                <link
                    rel="stylesheet"
                    href="/etc.clientlibs/nncorp/components/content/form/multiupload/clientlibs.min.44492d4d021a0636443e9962f589015a.css"
                    type="text/css"
                />
                <link
                    rel="stylesheet"
                    href="/etc.clientlibs/nncorp/components/content/form/form-date-picker/clientlibs.min.6b61762a2bb149294f65b444b16c1b09.css"
                    type="text/css"
                />
                <link
                    rel="stylesheet"
                    href="/etc.clientlibs/nncorp/components/content/form/container/clientlibs.min.d75af82e6d7d6ab6cb96f077a5a64f6d.css"
                    type="text/css"
                />

                <div class="form-container-wrapper gutters component-padding" :class="{loaded: loaded }">
                    <form v-on:submit.prevent="submitForm" class="cmp-form light" method="post">
                        <input type="hidden" ref="endpoint" value="/bin/nncorp/contact-us"/>
                        <input
                            type="hidden"
                            ref="submitErrMsg"
                            value="Nimadir noto‘g‘ri bajarildi. Afsuski, sizning arizangizni yuborib bo‘lmadi, chunki ba‘zi zarur ma’lumotlar yetishmayapti. Ma’lumot kiritishingizni talab qiladigan kataklar yuqorida belgilangan.,Nimadir noto‘g‘ri bajarildi. Afsuski, sizning arizangizni yuborib bo‘lmadi, chunki ba‘zi zarur ma’lumotlar yetishmayapti. Ma’lumot kiritishingizni talab qiladigan kataklar yuqorida belgilangan.,Nimadir noto‘g‘ri bajarildi. Afsuski, sizning arizangizni yuborib bo‘lmadi, chunki ba‘zi zarur ma’lumotlar yetishmayapti. Ma’lumot kiritishingizni talab qiladigan kataklar yuqorida belgilangan."
                        />
                        <input type="hidden" ref="pageHeader" value="Biz bilan bog‘lanish"/>
                        <input type="hidden" ref="resourcePath"
                               value="/content/nncorp/uz/uz/contact-us/jcr:content/root/container"/>
                        <input type="hidden" ref="redirect"
                               value="/content/nncorp/uz/uz/contact-us/thank-you-contact-us.html"/>
                        <input ref="redirect" type="hidden" name=":redirect"
                               value="/content/nncorp/uz/uz/contact-us/thank-you-contact-us.html"/>
                        <input type="hidden" id="fieldsCrossValidation" ref="fieldsCrossValidation"/>
                        <div class="tb-Grid tb-Grid--l--24">
                            <div
                                class="tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--offset--l--2 title-frame desktop large">
                                <h1 class="color-blue h1-l" v-html="applyContentStyle('Biz bilan bog‘lanish')"></h1>
                            </div>
                        </div>
                        <div class="tb-Grid tb-Grid--l--24 frame-padding has-title large"
                             style="background-color: #fcf2f5">
                            <div
                                class="tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--offset--l--2 title-frame mobile">
                                <div class="tagline color-blue"></div>
                                <p class="color-blue h1-l" v-html="applyContentStyle('Biz bilan bog‘lanish')"></p>
                            </div>

                            <input
                                type="hidden"
                                id="validationConfig"
                                ref="validationConfig"
                                value='{"validations": {
  &#34;emailAddress&#34;: {
    &#34;required&#34;: &#34;true&#34;,
    &#34;type&#34;: &#34;email&#34;,
    &#34;groupName&#34;: &#34;&#34;
  },
  &#34;attachment&#34;: {
    &#34;acceptedTypes&#34;: &#34;.xls,.xlsx,.doc,.docx,.ppt,.pptx,.pdf,.msg,.eml,.jpeg,.png&#34;,
    &#34;groupName&#34;: &#34;&#34;
  },
  &#34;yuborish&#34;: {
    &#34;type&#34;: &#34;submit&#34;,
    &#34;groupName&#34;: &#34;&#34;
  },
  &#34;name&#34;: {
    &#34;required&#34;: &#34;true&#34;,
    &#34;type&#34;: &#34;text&#34;,
    &#34;groupName&#34;: &#34;&#34;
  },
  &#34;Maxfiylik bo‘yicha javobgarliklarni rad qilish&#34;: {
    &#34;required&#34;: &#34;true&#34;,
    &#34;type&#34;: &#34;checkbox&#34;,
    &#34;groupName&#34;: &#34;&#34;
  },
  &#34;location&#34;: {
    &#34;groupName&#34;: &#34;&#34;
  },
  &#34;message&#34;: {
    &#34;required&#34;: &#34;true&#34;,
    &#34;type&#34;: &#34;textarea&#34;,
    &#34;groupName&#34;: &#34;&#34;
  }
}, "groups": ""}'
                            />
                            <div class="tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--offset--l--2">
                                <div class="tb-Grid tb-Grid--l--20 tb-Grid--m--20 tb-Grid--s--20 tb-Grid--xs--20">
                                    <div class="hidden tb-GridColumn">
                                        <input type="hidden" id="form-hidden-1452412041" name="location"
                                               value="Uzbekistan:io-rom-safety@novonordisk.com"/>
                                    </div>
                                    <div
                                        class="text tb-GridColumn--m--9 tb-GridColumn tb-GridColumn--s--20 tb-GridColumn--xs--20 tb-GridColumn--l--9">
                                        <div
                                            class="form-control m-m-bottom"
                                            :class="{'error': $v.model['name'].$invalid || $v.modelCrossValidation['name'] && $v.modelCrossValidation['name'].$error,
        'touched': $v.model['name'].$dirty || $v.modelCrossValidation['name'] && $v.modelCrossValidation['name'].$dirty}"
                                        >
                                            <h4 class="h4 label">
                                                Ismingiz
                                                <span class="asterisk">*</span>
                                            </h4>
                                            <div class="position-relative">
                                                <button type="button" class="left-button" v-if="'text' == 'email'">
                                                    <span class="icon icon-email"></span>
                                                </button>
                                                <input
                                                    class="textbox"
                                                    :class="{'has-left-icon': 'text' == 'email'}"
                                                    data-cmp-hook-form-text="input"
                                                    type="text"
                                                    id="form-text-354937868"
                                                    v-model="model.name"
                                                    name="name"
                                                    @blur="crossValidateFields('name'); $v.model['name'].$touch()"
                                                />
                                            </div>
                                            <span class="infotext color-blue"></span>
                                            <span class="infotext error-mgs" v-if="!$v.model['name'].required">Iltimos, ismingizni kiriting</span>
                                            <span class="infotext error-mgs" v-if="!$v.model['name'].email"></span>
                                            <span class="infotext error-mgs" v-if="!$v.model['name'].sameAs"></span>

                                            <span class="infotext error-mgs"
                                                  v-if="$v.model['name'].minLength === false"> </span>
                                            <span class="infotext error-mgs" v-if="!$v.model['name'].maxLength"></span>
                                        </div>
                                    </div>
                                    <div
                                        class="text tb-GridColumn--m--9 tb-GridColumn tb-GridColumn--offset--m--2 tb-GridColumn--s--20 tb-GridColumn--xs--20 tb-GridColumn--offset--l--2 tb-GridColumn--offset--s--0 tb-GridColumn--offset--xs--0 tb-GridColumn--l--9"
                                    >
                                        <div
                                            class="form-control m-m-bottom"
                                            :class="{'error': $v.model['emailAddress'].$invalid || $v.modelCrossValidation['emailAddress'] && $v.modelCrossValidation['emailAddress'].$error,
        'touched': $v.model['emailAddress'].$dirty || $v.modelCrossValidation['emailAddress'] && $v.modelCrossValidation['emailAddress'].$dirty}"
                                        >
                                            <h4 class="h4 label">
                                                Elektron pochta manzilingiz
                                                <span class="asterisk">*</span>
                                            </h4>
                                            <div class="position-relative">
                                                <button type="button" class="left-button" v-if="'email' == 'email'">
                                                    <span class="icon icon-email"></span>
                                                </button>
                                                <input
                                                    class="textbox"
                                                    :class="{'has-left-icon': 'email' == 'email'}"
                                                    data-cmp-hook-form-text="input"
                                                    type="email"
                                                    id="form-text-1744986291"
                                                    v-model="model.emailAddress"
                                                    name="emailAddress"
                                                    @blur="crossValidateFields('emailAddress'); $v.model['emailAddress'].$touch()"
                                                />
                                            </div>
                                            <span class="infotext color-blue"></span>
                                            <span class="infotext error-mgs" v-if="!$v.model['emailAddress'].required">Haqiqiy elektron pochta manzili bo‘lishi kerak</span>
                                            <span class="infotext error-mgs" v-if="!$v.model['emailAddress'].email">Qiymat haqiqiy elektron pochta bo‘lishi kerak</span>
                                            <span class="infotext error-mgs"
                                                  v-if="!$v.model['emailAddress'].sameAs"></span>

                                            <span class="infotext error-mgs"
                                                  v-if="$v.model['emailAddress'].minLength === false"> </span>
                                            <span class="infotext error-mgs"
                                                  v-if="!$v.model['emailAddress'].maxLength"></span>
                                        </div>
                                    </div>
                                    <div
                                        class="text tb-GridColumn tb-GridColumn--l--24 tb-GridColumn--m--24 tb-GridColumn--s--24">
                                        <div
                                            class="form-control m-m-top"
                                            :class="{'error': $v.model['message'].$invalid || $v.modelCrossValidation['message'] && $v.modelCrossValidation['message'].$error,
        'touched': $v.model['message'].$dirty || $v.modelCrossValidation['message'] && $v.modelCrossValidation['message'].$dirty}"
                                        >
                                            <h4 class="h4 label">
                                                Sizning xabaringiz
                                                <span class="asterisk">* </span>
                                            </h4>
                                            <textarea
                                                class="textbox paragraph-s"
                                                data-cmp-hook-form-text="input"
                                                id="form-text-288326652"
                                                name="message"
                                                v-model="model.message"
                                                rows="10"
                                                @blur="crossValidateFields('message'); $v.model['message'].$touch()"
                                            ></textarea>
                                            <span class="infotext color-blue"></span>
                                            <span class="infotext error-mgs" v-if="!$v.model['message'].required">Iltimos, xabar qo‘shing </span>

                                            <span class="infotext error-mgs"
                                                  v-if="$v.model['message'].minLength === false"></span>
                                            <span class="infotext error-mgs"
                                                  v-if="$v.model['message'].maxLength === false"></span>
                                        </div>
                                    </div>
                                    <div
                                        class="multiupload text tb-GridColumn tb-GridColumn--l--12 tb-GridColumn--m--12 tb-GridColumn--s--12">
                                        <div class="cpm-form-text form-multi-upload">
                                            <div
                                                class="form-control m-m-top"
                                                :class="{'error': $v.model['attachment'].$invalid || $v.modelCrossValidation['attachment'] && $v.modelCrossValidation['attachment'].$error,
        'touched': $v.model['attachment'].$dirty || $v.modelCrossValidation['attachment'] && $v.modelCrossValidation['attachment'].$dirty}"
                                            >
                                                <h4 class="h4 label">
                                                            <span
                                                                v-if="$v.modelCrossValidation['attachment'] && $v.modelCrossValidation['attachment'].$invalid"
                                                                class="asterisk"
                                                            >*</span
                                                            >
                                                </h4>
                                                <span class="color-blue"></span>
                                                <div class="display-flex m-xxs-top m-xxs-bottom">
                                                    <label for="attachment"
                                                           class="h4 attachment-label label color-blue">Fayl biriktirish
                                                        +</label>
                                                    <input id="attachment" name="attachment" ref="model-attachment"
                                                           class="file-upload-input" type="file"
                                                           accept=".xls,.xlsx,.doc,.docx,.ppt,.pptx,.pdf,.msg,.eml,.jpeg,.png"
                                                           @change="selectFile" @click="cleanMultiUploadField"
                                                           multiple/="">
                                                    <template v-if="model['attachment']">
                                                        <div class="file-upload-group">
                                                            <button v-for="file in attachmentFileNames" type="button"
                                                                    class="button seablue tag m-xs-left m-xxs-bottom">
                                                                <span class="text infotext">{{$file}}</span>
                                                                <span
                                                                    class="icon icon-plus-white"
                                                                    @click="removeFile('attachment', file); crossValidateFields('attachment');"
                                                                ><span class="path1"></span><span
                                                                        class="path2"></span><span class="path3"></span
                                                                    ><span class="path4"></span
                                                                    ></span>
                                                            </button>
                                                        </div>
                                                    </template>
                                                </div>

                                                <span class="infotext error-mgs"
                                                      v-if="!$v.model['attachment'].required"></span>

                                                <span class="infotext error-mgs"
                                                      v-if="!$v.model['attachment'].maxFileSize"
                                                >Your attachment is too big. You can attach up to 20MB</span
                                                >

                                                <span class="infotext error-mgs"
                                                      v-if="!$v.model['attachment'].acceptedTypes"
                                                >Quyidagi fayl kengaytmalariga ruxsat beriladi .xls,.xlsx,.doc,.docx,.ppt,.pptx,.pdf,.msg,.eml,.jpeg,.png</span
                                                >
                                                <span
                                                    class="infotext error-mgs"
                                                    v-if="$v.modelCrossValidation['attachment'] && $v.modelCrossValidation['attachment'].$invalid && !$v.modelCrossValidation['attachment'].required"
                                                >
                                                            {{$crossValidationError}}
                                                        </span>
                                                <span class="color-blue"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-plaintext text tb-GridColumn">
                                        <link
                                            rel="stylesheet"
                                            href="/etc.clientlibs/nncorp/components/content/form/form-plaintext/clientlibs.min.d41d8cd98f00b204e9800998ecf8427e.css"
                                            type="text/css"
                                        />

                                        <div class="form-plaintext paragraph-s color-blue">
                                            Masalan, siz shikoyatingizni tushunishda va ko‘rib chiqishda yordam
                                            beradigan rasmlarni, hisobotlarni yoki boshqa fayllarni
                                            biriktirishingiz mumkin. Biriktirganingizda, iltimos, xabaringizni
                                            yuborishda sabrli bo‘ling
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <script
                    src="/etc.clientlibs/nncorp/clientlibs/vuejs/services/base-http.min.0977b3d22d6ef3c04a2b1fc94d6581bc.js"></script>
                <script src="/etc.clientlibs/nncorp/clientlibs/vuejs/components/loading-indicator.min.js"></script>
                <script src="/etc.clientlibs/nncorp/clientlibs/vuejs/components/loading-button.min.js"></script>
                <script
                    src="/etc.clientlibs/nncorp/clientlibs/vuejs/form-components/singleselect.min.29ad457e9b535d669a85127fc4b7d0a7.js"></script>
                <script
                    src="/etc.clientlibs/nncorp/clientlibs/vuejs/form-components/multiselect.min.e660c8a9708ee64b3264b08c8311a7aa.js"></script>
                <script src="/etc.clientlibs/nncorp/clientlibs/vendor/clientlib-vuejs-validate.min.js"></script>
                <script src="/etc.clientlibs/nncorp/clientlibs/vuejs/components/form-multiple-products.min.js"></script>
                <script
                    src="/etc.clientlibs/nncorp/components/content/form/form-recaptcha/clientlibs.min.d41d8cd98f00b204e9800998ecf8427e.js"></script>
                <script src="/etc.clientlibs/nncorp/clientlibs/vendor/clientlib-vuejs-datepicker.min.js"></script>
                <script
                    src="/etc.clientlibs/nncorp/components/content/form/form-date-picker/clientlibs.min.8f9c112fdaf8a5a4898b7e5a826c1065.js"></script>
                <script
                    src="/etc.clientlibs/clientlibs/granite/jquery/granite/csrf.min.652a558c3774088b61b0530c184710d1.js"></script>
                <script
                    src="/etc.clientlibs/nncorp/components/content/form/container/clientlibs.min.2d0bd70974e33057df9696ae3b2d784c.js"></script>
            </div>

            <div class="layoutcontainergrid responsivegrid aem-GridColumn aem-GridColumn--default--12">
                <link
                    rel="stylesheet"
                    href="/etc.clientlibs/nncorp/components/content/layoutcontainergrid/clientlibs.min.8e68a20a5b5ff888db6d5b26377b9644.css"
                    type="text/css"
                />
                <script
                    type="text/javascript"
                    src="/etc.clientlibs/nncorp/components/content/layoutcontainergrid/clientlibs.min.171a7ca77be56f15301624914902fc77.js"
                    async=""
                ></script>

                <div class="layout-container-grid">
                    <div class="gutters component-padding-none white outer-container" style="background-color: white">
                        <div class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24">
                            <div
                                class="frame-padding tb-GridColumn tb-GridColumn--l--24 tb-GridColumn--m--22 tb-GridColumn--s--22 tb-GridColumn--offset--l--none tb-GridColumn--offset--m--1 tb-GridColumn--offset--s--1"
                                style="background-color: white"
                            >
                                <div class="tb-Grid tb-Grid--24 tb-Grid--l--22 tb-Grid--m--24 tb-Grid--s--24">
                                    <div
                                        class="tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--m--22 tb-GridColumn--s--22 tb-GridColumn--offset--l--2 tb-GridColumn--offset--m--1 tb-GridColumn--offset--s--1"
                                    ></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="plaintext aem-GridColumn aem-GridColumn--default--12">
                <div>
                    <div
                        class="background gutters component-padding-topAndBottom frame tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24 tb-Grid--xs--24"
                        style="background-color: white"
                    >
                        <div>
                            <div class="introplaintext-wrapper">
                                <div
                                    class="titlegrid tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24 tb-Grid--xs--24">
                                    <div
                                        class="titleframe frame xsmall tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--xs--20 tb-GridColumn--offset--l--2">
                                        <div
                                            class="tb-Grid tb-Grid--20 tb-Grid--l--20 tb-Grid--m--20 tb-Grid--s--20 tb-Grid--xs--20">
                                            <div
                                                class="tb-GridColumn tb-GridColumn--l--6 tb-GridColumn--m--9 tb-GridColumn--s--12 tb-GridColumn--xs--20"></div>

                                            <div
                                                class="tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--m--16 tb-GridColumn--s--18 tb-GridColumn--xs--20">
                                                <h1
                                                    class="text plaintexttitle title color-blue xsmalltitle"
                                                    v-html="applyContentStyle('Nojo’ya ta’sir ro’y berganda sizning harakatlaringiz')"
                                                ></h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24 tb-Grid--xs--24">
                                    <div
                                        class="tb-GridColumn tb-GridColumn--l--24 tb-GridColumn--m--22 tb-GridColumn--s--22 tb-GridColumn--xs--22 tb-GridColumn--offset--l--none tb-GridColumn--offset--m--1 tb-GridColumn--offset--s--1 tb-GridColumn--offset--xs--1"
                                    >
                                        <div
                                            class="frame-box tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--22 tb-Grid--s--22 tb-Grid--xs--22 frame-padding frame xsmall"
                                            style="background-color: #fcf2f5"
                                        >
                                            <div>
                                                <div>
                                                    <div
                                                        class="columns tb-Grid tb-Grid--l--24 tb-Grid--m--22 tb-Grid--s--22 tb-Grid--xs--22">
                                                        <div
                                                            class="left-column tb-GridColumn tb-GridColumn--l--5 tb-GridColumn--m--5 tb-GridColumn--s--20 tb-GridColumn--xs--20 tb-GridColumn--offset--l--2 tb-GridColumn--offset--m--1"
                                                        >
                                                            <h2 class="h2 color-blue text">
                                                                <b v-html="applyContentStyle('')"></b>
                                                            </h2>
                                                        </div>
                                                        <div
                                                            class="right-column color-blue paragraph-l tb-GridColumn tb-GridColumn--l--13 tb-GridColumn--m--13 tb-GridColumn--s--20 tb-GridColumn--xs--20 tb-GridColumn--offset--l--2 tb-GridColumn--offset--m--2 tb-GridColumn--offset--s--1 tb-GridColumn--offset--xs--1"
                                                        >
                                                            <div>
                                                                <div
                                                                    class="text section-wrapper richtext color-blue introtextsection">
                                                                    <h3 class="text color-blue subsubheader"
                                                                        v-html="applyContentStyle('')"></h3>

                                                                    <div class="text color-blue introtext">
                                                                        <p>
                                                                            Bemorlar xavfsizligi Novo Nordisk uchun
                                                                            ustuvor hisoblanadi.<br/>
                                                                            Iltimos, nojo’ya ta’sir ro’y bergan holda
                                                                            elektron pochta orqali<br/>
                                                                            <a href="mailto:io-rom-safety@novonordisk.com">io-rom-safety@novonordisk.com</a> ga
                                                                            yoki telefon
                                                                            orqali +99 878 120 6655 raqamiga murojaat
                                                                            qiling.<br/>
                                                                            Shuningdek “<a
                                                                                href="{{ route('contact') }}">Biz bilan
                                                                                bog‘lanish</a>” bo’limida biz bilan
                                                                            aloqaga
                                                                            chiqishingiz mumkin.
                                                                        </p>
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
                    </div>
                </div>
            </div>
            <div class="layoutcontainergrid responsivegrid aem-GridColumn aem-GridColumn--default--12">
                <div class="layout-container-grid">
                    <div class="gutters component-padding-topAndBottom white outer-container"
                         style="background-color: white">
                        <div class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24">
                            <div
                                class="frame-padding tb-GridColumn tb-GridColumn--l--24 tb-GridColumn--m--22 tb-GridColumn--s--22 tb-GridColumn--offset--l--none tb-GridColumn--offset--m--1 tb-GridColumn--offset--s--1"
                                style="background-color: white"
                            >
                                <div class="tb-Grid tb-Grid--24 tb-Grid--l--22 tb-Grid--m--24 tb-Grid--s--24">
                                    <div
                                        class="tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--m--22 tb-GridColumn--s--22 tb-GridColumn--offset--l--2 tb-GridColumn--offset--m--1 tb-GridColumn--offset--s--1"
                                    >
                                        <div>
                                            <div class="rowcontainer">
                                                <div>
                                                    <div class="contentgrid_row">
                                                        <div
                                                            class="columns-2 column has-content-true column-0 top_align contentgrid_column">
                                                            <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
                                                                <div
                                                                    class="image-video image aem-GridColumn aem-GridColumn--default--12">
                                                                    <!-- /* Image Video clientlib can not be placed here due to VueJS compile error once Image Video component is added along with Content Grid */ -->
                                                                    <!-- /* Image Video clientlib will be added into Base clientlib due to Image Video can be stand alone */ -->

                                                                    <div>
                                                                        <a target="_self">
                                                                            <div class="image-video-wrapper">
                                                                                <div
                                                                                    class="image-video-content-wrapper m-xs-bottom">
                                                                                    <picture>
                                                                                        <source
                                                                                            srcset="
                                                                                                        /is/image/novonordiskas/NovoNordisk-Bagsvaerd-HQ-drone-1280px-34-1?wid=525&fit=constrain&qlt=90&$$
                                                                                                    "
                                                                                            media="(max-width: 525px)"
                                                                                        />
                                                                                        <source
                                                                                            srcset="
                                                                                                        /is/image/novonordiskas/NovoNordisk-Bagsvaerd-HQ-drone-1280px-34?wid=768&fit=constrain&qlt=90&$$
                                                                                                    "
                                                                                            media="(max-width: 768px)"
                                                                                        />
                                                                                        <source
                                                                                            srcset="
                                                                                                        /is/image/novonordiskas/NovoNordisk-Bagsvaerd-HQ-drone-1280px-34?wid=768&fit=constrain&qlt=90&$$
                                                                                                    "
                                                                                            media="(max-width: 1280px)"
                                                                                        />
                                                                                        <source
                                                                                            srcset="
                                                                                                        /is/image/novonordiskas/NovoNordisk-Bagsvaerd-HQ-drone-1280px-34?wid=768&fit=constrain&qlt=90&$$
                                                                                                    "
                                                                                            media="(max-width: 8000px)"
                                                                                        />
                                                                                        <img
                                                                                            src="/is/image/novonordiskas/NovoNordisk-Bagsvaerd-HQ-drone-1280px-34?wid=768&fit=constrain&qlt=90&$$"
                                                                                            loading="eager"
                                                                                        />
                                                                                    </picture>
                                                                                </div>

                                                                                <div class="right-arrow-animation">
                                                                                    <h3
                                                                                        class="color-blue subtext subheadline paragraph-s rtl-text"
                                                                                        v-html="applyContentStyle('Ново Нордиск А\/С Ўзбекистон Республикасидаги ваколатхонаси')"
                                                                                    ></h3>
                                                                                    <p
                                                                                        class="color-blue subtext paragraph-s paragraph-line-break rtl-text"
                                                                                        v-html="applyContentStyle('Ўзбекистон Республикаси, 100017, Тошкент шахри, Юнусобод тумани, Ц\u002D5, 57\u002Dуй, 3\u002Dофис. \r\nТелефон: +998 78 120 66 55, +998 78 120 66 90\r\nФакс: +998 78 120 65 41\r\nnovonordisk.com | io\u002Drom\u002Dsafety@novonordisk.com')"
                                                                                    ></p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div
                                                            class="columns-2 column has-content-true column-1 top_align contentgrid_column">
                                                            <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
                                                                <div
                                                                    class="image-video image aem-GridColumn aem-GridColumn--default--12">
                                                                    <!-- /* Image Video clientlib can not be placed here due to VueJS compile error once Image Video component is added along with Content Grid */ -->
                                                                    <!-- /* Image Video clientlib will be added into Base clientlib due to Image Video can be stand alone */ -->

                                                                    <div>
                                                                        <a target="_self">
                                                                            <div class="image-video-wrapper">
                                                                                <div
                                                                                    class="image-video-content-wrapper m-xs-bottom">
                                                                                    <picture>
                                                                                        <source
                                                                                            srcset="
                                                                                                        /is/image/novonordiskas/NovoNordisk-Bagsvaerd-HQ-drone-1280px-34-1?wid=525&fit=constrain&qlt=90&$$
                                                                                                    "
                                                                                            media="(max-width: 525px)"
                                                                                        />
                                                                                        <source
                                                                                            srcset="
                                                                                                        /is/image/novonordiskas/NovoNordisk-Bagsvaerd-HQ-drone-1280px-34?wid=768&fit=constrain&qlt=90&$$
                                                                                                    "
                                                                                            media="(max-width: 768px)"
                                                                                        />
                                                                                        <source
                                                                                            srcset="
                                                                                                        /is/image/novonordiskas/NovoNordisk-Bagsvaerd-HQ-drone-1280px-34?wid=768&fit=constrain&qlt=90&$$
                                                                                                    "
                                                                                            media="(max-width: 1280px)"
                                                                                        />
                                                                                        <source
                                                                                            srcset="
                                                                                                        /is/image/novonordiskas/NovoNordisk-Bagsvaerd-HQ-drone-1280px-34?wid=768&fit=constrain&qlt=90&$$
                                                                                                    "
                                                                                            media="(max-width: 8000px)"
                                                                                        />
                                                                                        <img
                                                                                            src="/is/image/novonordiskas/NovoNordisk-Bagsvaerd-HQ-drone-1280px-34?wid=768&fit=constrain&qlt=90&$$"
                                                                                            loading="eager"
                                                                                        />
                                                                                    </picture>
                                                                                </div>

                                                                                <div class="right-arrow-animation">
                                                                                    <h3
                                                                                        class="color-blue subtext subheadline paragraph-s rtl-text"
                                                                                        v-html="applyContentStyle('Kompaniya shtab\u002Dkvartiralari')"
                                                                                    ></h3>
                                                                                    <p
                                                                                        class="color-blue subtext paragraph-s paragraph-line-break rtl-text"
                                                                                        v-html="applyContentStyle('Novo Nordisk A\/S Novo Allé, 2880 Bagsvaerd Daniya Tel: +45 4444 8888')"
                                                                                    ></p>
                                                                                </div>
                                                                            </div>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection