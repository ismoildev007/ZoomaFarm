@extends('layouts.pages')

@section('content')
    <div class="root responsivegrid">
        <div class="supergraphic focuspointimage image aem-GridColumn aem-GridColumn--default--12">
            <link rel="stylesheet" href="../../etc.clientlibs/nncorp/clientlibs/vuejs/components/gradient-cover.min.css"
                  type="text/css">
            <link rel="stylesheet"
                  href="../../etc.clientlibs/nncorp/clientlibs/vuejs/components/focuspoint-image.min.css"
                  type="text/css">
            <link rel="stylesheet"
                  href="../../etc.clientlibs/nncorp/components/content/supergraphic/clientlib.min.8a33ce8cddfa7f9231da5479d3864335.css"
                  type="text/css">

            <div id="supergraphic" class="super-graphic-wrapper" style="background-color: white;">
                <div class="box box-image tb-Grid tb-Grid--24 tb-Grid--l--24">
                    <div class="image"><!----> <span><div class="focuspoint-image desktop focuspoint-container"
                                                          style="background-image: url(&quot;/assets/news5.jpg?wid=1440&amp;fit=constrain&amp;qlt=90&quot;); background-position: 52% 35%; background-size: cover;"></div>
                            <!----> <!----> <!----></span>
                        <div class="image-info m-xxs-top desktop">
                            <div><b class="infotext"></b></div>
                            <div><span class="infotext"></span></div>
                        </div>
                    </div>
                    <div class="overlay gutters">
                        <div class="tb-Grid tb-Grid--24 tb-Grid--l--24 tb-Grid--m--24 tb-Grid--xs--24 full-height">
                            <div
                                class="tb-GridColumn tb-GridColumn--l--24 full-height tb-GridColumn--m--20 tb-GridColumn--offset--m--2 tb-GridColumn--xs--20 tb-GridColumn--offset--xs--2">
                                <div class="container">
                                    <div class="title-wrapper mobileScreenHeight"><p class="tagline m-xxs-bottom">{{ __('messages.our_partners_tagline') ?? 'Bizning hamkorlar' }}</p>
                                        <h6 class="title smalltitle m-xs-bottom">{{ __('messages.our_partners_title') ?? 'Ishonchli hamkorlar bilan ishlaymiz' }}</h6>
                                        <p class="img-des paragraph-l">{{ __('messages.our_partners_description') ?? 'ZUMA PHARMA bir nechta nufuzli kompaniyalar bilan uzoq muddatli hamkorlik aloqalarini rivojlantirmoqda. Ularning tajribasi va ishonchi biz uchun katta ahamiyatga ega.' }}</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="icon-box display-flex"><span class="icon icon-right-arrow-white"></span></div>
                    </div>



                </div>
            </div>

            <script type="text/javascript"
                    src="../../etc.clientlibs/nncorp/clientlibs/vuejs/components/gradient-cover.min.js"></script>
            <script type="text/javascript"
                    src="../../etc.clientlibs/nncorp/clientlibs/vuejs/components/focuspoint-image.min.js"></script>
            <script type="text/javascript"
                    src="../../etc.clientlibs/nncorp/components/content/supergraphic/clientlib.min.a6c04bd87d43dc3059886559ee41a1de.js"
                    async=""></script>
        </div>
        <!-- Hamkorlik -->
        <div class="root responsivegrid">
            <section style="background-color: #f9fbfd; padding: 60px 20px;">
                <div class="container" style="max-width: 1200px; margin: auto;">
                    <div class="partner-grid" style="
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                    gap: 30px;
                ">
                        @foreach($partners as $partner)
                            <div class="partner-card" style="
                            background-color: #ffffff;
                            border-radius: 12px;
                            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
                            padding: 24px;
                            display: flex;
                            flex-direction: column;
                            align-items: center;
                            text-align: center;
                            transition: transform 0.3s;
                        ">
                                <!-- Logo -->
                                <img src="{{ asset('storage/' . $partner->logo) ?? '/assets/img/ugp.png' }}"
                                     alt="{{ $partner['name_' . $lang] }}"
                                     style="height: 70px; object-fit: contain; margin-bottom: 20px;">
                                <!-- Name -->
                                <h3 style="font-size: 20px; color: #0056a4; margin-bottom: 12px;">
                                    {{ $partner['name_' . $lang] ?? 'UZGERMED PHARM' }}
                                </h3>
                                <!-- Description -->
                                <p style="font-size: 14px; color: #444; margin-bottom: 20px;">
                                    {{ $partner['description_' . $lang] ?? 'Biz yangi texnologiyalarni ilgari suramiz va tadqiqotlar uchun ochiqmiz.' }}
                                </p>
                                <!-- Link with arrow -->
                                <a href="{{ $partner->website }}" target="_blank" style="
                                color: #0056a4;
                                font-weight: 500;
                                text-decoration: none;
                                display: inline-flex;
                                align-items: center;
                                gap: 6px;
                                margin-top: auto;
                            ">
                                    {{ __('messages.visit_site') }}
                                    <span style="font-size: 18px;">→</span>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
        <div class="partner-form-wrapper" style="padding: 60px 20px; background-color: #ffffff;">
            <div class="container" style="max-width: 800px; margin: auto;">
                <h2 style="text-align: center; color: #0056a4; margin-bottom: 30px;">
                    {{ __('messages.partner_form_title') ?? 'Hamkorlik uchun murojaat' }}
                </h2>

                <form action="{{ route('partner.postStore') }}" method="POST" enctype="multipart/form-data"
                      style="display: flex; flex-direction: column; gap: 20px;">
                    @csrf
                    <input type="text" name="inn" placeholder="{{ __('messages.inn') }}" required
                           style="padding: 12px; border: 1px solid #ccc; border-radius: 8px;">

                    <input type="text" name="company_name" placeholder="{{ __('messages.placeholder_company_name') }}"
                           required
                           style="padding: 12px; border: 1px solid #ccc; border-radius: 8px;">
                    <input type="text" name="contact_person"
                           placeholder="{{ __('messages.placeholder_contact_person') }}" required
                           style="padding: 12px; border: 1px solid #ccc; border-radius: 8px;">
                    <input type="text" name="phone" placeholder="{{ __('messages.placeholder_phone') }}" required
                           style="padding: 12px; border: 1px solid #ccc; border-radius: 8px;">
                    <input type="email" name="email" placeholder="{{ __('messages.placeholder_email') }}"
                           style="padding: 12px; border: 1px solid #ccc; border-radius: 8px;">
                    <textarea name="message" rows="4" placeholder="{{ __('messages.placeholder_message') }}"
                              style="padding: 12px; border: 1px solid #ccc; border-radius: 8px;"></textarea>
                    <button type="submit"
                            style="background-color: #0056a4; color: #fff; border: none; padding: 14px; border-radius: 8px; font-weight: bold; cursor: pointer; transition: background 0.3s;">
                        {{ __('messages.send') ?? 'Yuborish' }}
                    </button>
                </form>
            </div>
        </div>

        <div class="plaintext aem-GridColumn aem-GridColumn--default--12">
            <div class="background gutters component-padding-top frame">
                <div class="introplaintext-wrapper">
                    <div class="tb-Grid tb-Grid--24">
                        <div class="frame-box tb-Grid--l--24 tb-Grid--m--22 tb-Grid--s--22 frame-padding small">
                            <div class="text color-blue intro leadtext frame right-column tb-GridColumn--l--16">
                                {{ __('messages.cooperation_text') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
