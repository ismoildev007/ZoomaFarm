@extends('layouts.pages')

@section('content')
    <div class="root responsivegrid">
        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12">
            <div class="supergraphicjobagent focuspointimage image aem-GridColumn aem-GridColumn--default--12">
                <link rel="stylesheet" href="../../etc.clientlibs/nncorp/clientlibs/vuejs/components/focuspoint-image.min.css" type="text/css" /><link
                    rel="stylesheet"
                    href="../../etc.clientlibs/nncorp/components/careers/supergraphicjobagent/clientlib.min.a7480eb52034998a135a4279032f83e2.css"
                    type="text/css"
                />

                <div
                    id="supergraphicjobagent"
                    data-success="/content/nncorp/uz/en/careers/job-agent/sign-up-successful"
                    class="super-graphic-job-agent-wrapper super-graphic-ja-wrapper"
                    :class="readDetails"
                    v-cloak=""
                >
                    <div class="box box-image tb-Grid tb-Grid--24 tb-Grid--l--24">
                        <div class="image">
                            <gradient-cover :visibility="fullImageLoaded"></gradient-cover>

                            <focuspoint-image
                                :image-url="'/content/dam/nncorp/language-masters/uz/careers/images/Quality Control - KLTY JDBU AO6I1573-Edit.jpg'"
                                :coordinates="'0.09:-0.00'"
                                :dynamic-media-info="{
                            dynamicMediaImagePath: 'https://images.novonordisk.com/is/image/novonordiskas/Quality Control - KLTY JDBU AO6I1573-Edit-35',
                            disableDynamicMedia: false,
                            mobileDynamicMediaWidth: '525',
                            tabletPortraitDynamicMediaWidth: '768',
                            tabletLandscapeDynamicMediaWidth: '1280',
                            desktopDynamicMediaWidth: '1440',
                            jpegQuality: '90',
                            urlModifiers: ''
                          }"
                                :renditions-image-info="{
                            typeOfRendition: '',
                            mobileRenditionSuffix: '.corpimgw.525.525.jpg',
                            tabletPortraitRenditionSuffix: '.corpimgw.768.768.jpg',
                            tabletLandscapeRenditionSuffix: '.corpimgw.1280.1280.jpg',
                            desktopRenditionSuffix: '.corpimgw.2000.2000.jpg'
                          }"
                                :has-prohibited-extension="'false'"
                            >
                            </focuspoint-image>

                            <div class="image-info" ref="imageInfo">
                                <div><b class="infotext"></b></div>
                                <div><span class="infotext"></span></div>
                            </div>
                            <div
                                class="overlay gutters component-padding-topAndBottom tb-GridColumn tb-GridColumn--l--24 tb-GridColumn--m--24 tb-GridColumn--s--24 tb-GridColumn--xs--24"
                            >
                                <div class="tb-Grid tb-Grid--24 tb-Grid--m--24 tb-Grid--xs--24">
                                    <div class="container tb-GridColumn tb-GridColumn--offset--m--2 tb-GridColumn--xs--20 tb-GridColumn--offset--xs--2">
                                        <p class="tagline m-xxs-bottom">Yangilangan holda turing</p>
                                        <h1 class="title h1-s m-xs-bottom">Bo‘sh ish o‘rinlari bo‘yicha agent</h1>
                                        <p class="img-des paragraph-l">Hayotingizni o‘zgartiruvchi karyera uchun ro‘yxatdan o‘ting</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form
                            class="light jobAgentSignUpForm email-job-agent-signup-wrapper"
                            id="jobAgentSignUpForm"
                            @submit.prevent="submitForm"
                            novalidate=""
                            style="background-color: #fcf2f5"
                            method="post"
                        >
                            <div class="tb-Grid tb-Grid--l--20 tb-Grid--xs--20">
                                <div class="tb-GridColumn tb-GridColumn--l--9 tb-GridColumn--xs--20">
                                    <div
                                        class="form-control m-m-bottom"
                                        :class="{'error': $v.personalInfo.firstName.$invalid, 'touched': $v.personalInfo.firstName.$dirty}"
                                    >
                                        <h4 class="h4 label">Ism<span class="asterisk">*</span></h4>
                                        <input
                                            type="text"
                                            name="firstName"
                                            required=""
                                            class="textbox"
                                            v-model="personalInfo.firstName"
                                            @blur="$v.personalInfo.firstName.$touch()"
                                            :disabled="editMode"
                                        />
                                        <span class="infotext error-mgs" v-if="!$v.personalInfo.firstName.required">Katakni to‘ldirish shart*</span>
                                    </div>
                                </div>
                                <div class="tb-GridColumn tb-GridColumn--l--9 tb-GridColumn--offset--l--2 tb-GridColumn--xs--20 tb-GridColumn--offset--xs--0 right-column">
                                    <div class="form-control m-m-bottom" :class="{'error': $v.personalInfo.lastName.$invalid, 'touched': $v.personalInfo.lastName.$dirty}">
                                        <h4 class="h4 label">Familiya<span class="asterisk">*</span></h4>
                                        <input
                                            type="text"
                                            class="textbox"
                                            required=""
                                            v-model="personalInfo.lastName"
                                            :disabled="editMode"
                                            @blur="$v.personalInfo.lastName.$touch()"
                                        />
                                        <span class="infotext error-mgs" v-if="!$v.personalInfo.lastName.required">Katakni to‘ldirish shart*</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tb-Grid tb-Grid--l--20 tb-Grid--xs--20">
                                <div class="tb-GridColumn tb-GridColumn--l--9 tb-GridColumn--xs--20">
                                    <div class="form-control m-m-bottom" :class="{'error': $v.personalInfo.email.$invalid, 'touched': $v.personalInfo.email.$dirty}">
                                        <h4 class="h4 label">Elektron pochta<span class="asterisk">*</span></h4>
                                        <input
                                            type="text"
                                            class="textbox"
                                            required=""
                                            v-model="personalInfo.email"
                                            :disabled="editMode"
                                            @blur="$v.personalInfo.email.$touch()"
                                        />
                                        <span class="infotext error-mgs" v-if="!$v.personalInfo.email.required">Katakni to‘ldirish shart*</span>
                                        <span class="infotext error-mgs" v-if="!$v.personalInfo.email.email">Elektron pochta noto‘g‘ri*</span>
                                    </div>
                                </div>

                            </div>
                            <div class="tb-Grid tb-Grid--l--20 tb-Grid--m--20 tb-Grid--s--20 tb-Grid--xs--20">
                                <div class="tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--m--20 tb-GridColumn--s--20 tb-GridColumn--xs--20">
                                    <div
                                        class="form-control m-m-bottom"
                                        :class="{'error': $v.personalInfo.experienceLevel.$invalid, 'touched': $v.personalInfo.experienceLevel.$dirty}"
                                    >
                                        <h4 class="h4 label">Ish tajribasi<span class="asterisk">*</span></h4>
                                        <div class="display-flex experience-section">
                                            <div class="radio-section m-m-right">
                                                <input
                                                    :id="'0-2 yosh'.replace(/\s+/g, '-')"
                                                    required=""
                                                    :value="'0-2 yosh'.match(/[+<>]?\s?\d+.?\d+/g)[0].concat('-years').replace(/\s+/g, '')"
                                                    v-model="personalInfo.experienceLevel"
                                                    type="radio"
                                                    class="radio"
                                                />
                                                <label :for="'0-2 yosh'.replace(/\s+/g, '-')" class="paragraph-s color-blue label">0-2 yil</label>
                                            </div>

                                            <div class="radio-section m-m-right">
                                                <input
                                                    :id="'2-5 yosh'.replace(/\s+/g, '-')"
                                                    required=""
                                                    :value="'2-5 yosh'.match(/[+<>]?\s?\d+.?\d+/g)[0].concat('-years').replace(/\s+/g, '')"
                                                    v-model="personalInfo.experienceLevel"
                                                    type="radio"
                                                    class="radio"
                                                />
                                                <label :for="'2-5 yosh'.replace(/\s+/g, '-')" class="paragraph-s color-blue label">2-5 yil</label>
                                            </div>

                                            <div class="radio-section m-m-right">
                                                <input
                                                    :id="'5-10 yosh'.replace(/\s+/g, '-')"
                                                    required=""
                                                    :value="'5-10 yosh'.match(/[+<>]?\s?\d+.?\d+/g)[0].concat('-years').replace(/\s+/g, '')"
                                                    v-model="personalInfo.experienceLevel"
                                                    type="radio"
                                                    class="radio"
                                                />
                                                <label :for="'5-10 yosh'.replace(/\s+/g, '-')" class="paragraph-s color-blue label">5-10 yil</label>
                                            </div>

                                            <div class="radio-section m-m-right">
                                                <input
                                                    :id="'10 yoshdan katta'.replace(/\s+/g, '-')"
                                                    required=""
                                                    :value="'10 yoshdan katta'.match(/[+<>]?\s?\d+.?\d+/g)[0].concat('-years').replace(/\s+/g, '')"
                                                    v-model="personalInfo.experienceLevel"
                                                    type="radio"
                                                    class="radio"
                                                />
                                                <label :for="'10 yoshdan katta'.replace(/\s+/g, '-')" class="paragraph-s color-blue label">10 yildan katta</label>
                                            </div>
                                        </div>
                                        <span class="infotext error-mgs" v-if="!$v.personalInfo.experienceLevel.required">Katakni to‘ldirish shart*</span>
                                    </div>
                                </div>
                            </div>


                            <div class="tb-Grid tb-Grid--l--20 tb-Grid--xs--20">
                                <div class="tb-GridColumn tb-GridColumn--l--9 tb-GridColumn--xs--20">
                                    <h2 class="h2 color-blue">Qonuniy</h2>
                                </div>
                            </div>
                            <div class="tb-Grid tb-Grid--l--20 tb-Grid--m--20 tb-Grid--s--20 tb-Grid--xs--20 m-xs-bottom">
                                <div class="buttons-wrapper tb-GridColumn tb-GridColumn--l--9 tb-GridColumn--m--9 tb-GridColumn--s--20 tb-GridColumn--xs--20 m-xl-bottom">

                                    <div class="checkbox-group m-m-top">
                                        <input type="checkbox" v-model="personalInfo.contactConsent" class="checkbox" id="checkbox2" />
                                        <label class="label richtext color-blue" for="checkbox2"
                                        >Ha, men Novo Nordisk kompaniyasining karyera qilish imkoniyatlari bilan bog‘liq ravishda va karyera bilan bog‘liq yangiliklar
                                            bilan menga elektron pochta orqali murojaat qila olishini tasdiqlayman</label
                                        >
                                        <span class="infotext error-mgs" v-if="$v.personalInfo.contactConsent.$error">Katakni to‘ldirish shart*</span>
                                    </div>

                                    <div class="form-control buttons-section m-xs-bottom m-l-top">
                                        <div class="button-wrapper">
                                            <button ref="submitForm" type="submit" class="button seablue button-link-animation">
                                                <span class="text" v-if="!editMode">Ro‘yxatdan o‘tish</span>
                                                <span class="text" v-if="editMode">Yangilash</span>
                                                <span class="icon icon-right-arrow"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <span class="infotext error-mgs" v-if="submitError">Siz bu elektron pochta manzili bilan ro‘yxatdan o‘tgansiz.</span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <script type="text/javascript" src="../../etc.clientlibs/clientlibs/granite/jquery.min.cee8557e8779d371fe722bbcdd3b3eb7.js"></script>
                <script type="text/javascript" src="../../etc.clientlibs/clientlibs/granite/utils.min.4a192b590a2c2926fb000264370c0588.js"></script>
                <script type="text/javascript" src="../../etc.clientlibs/clientlibs/granite/jquery/granite.min.543d214c88dfa6f4a3233b630c82d875.js"></script>
                <script type="text/javascript" src="../../etc.clientlibs/foundation/clientlibs/jquery.min.dd9b395c741ce2784096e26619e14910.js"></script>
                <script type="text/javascript" src="../../etc.clientlibs/nncorp/clientlibs/vendor/clientlib-vuejs-validate.min.js"></script>
                <script type="text/javascript" src="../../etc.clientlibs/nncorp/clientlibs/vendor/clientlib-axios.min.js"></script>
                <script type="text/javascript" src="../../etc.clientlibs/nncorp/clientlibs/vuejs/services/base-http.min.0977b3d22d6ef3c04a2b1fc94d6581bc.js"></script>
                <script type="text/javascript" src="../../etc.clientlibs/nncorp/clientlibs/vendor/clientlib-cookie.min.js"></script>
                <script type="text/javascript" src="../../etc.clientlibs/clientlibs/granite/jquery/granite/csrf.min.652a558c3774088b61b0530c184710d1.js"></script>
                <script
                    type="text/javascript"
                    src="../../etc.clientlibs/nncorp/clientlibs/vuejs/services/job-agent-service.min.ce3680d301a77ae344c6589cf5a2cee2.js"
                ></script>
                <script type="text/javascript" src="../../etc.clientlibs/nncorp/clientlibs/vuejs/directives/click-outside.min.808c9a0a7850458b70c96ec4b0362a48.js"></script>
                <script type="text/javascript" src="../../etc.clientlibs/nncorp/clientlibs/vuejs/components/focuspoint-image.min.js"></script>
                <script
                    type="text/javascript"
                    src="../../etc.clientlibs/nncorp/components/careers/supergraphicjobagent/clientlib.min.62db8193da3c7bf7f4d68b5f79aa40a9.js"
                    async=""
                ></script>
            </div>
        </div>
    </div>
@endsection
