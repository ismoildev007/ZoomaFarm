<?php
use App\Models\Contact;
$contact = Contact::first();
$vacancy = \App\Models\Vacancy::where('id', 7)->get();
 ?>
<div class="footer experiencefragment">
    <div class="cmp-experiencefragment cmp-experiencefragment--xf-footer">
        <div class="xf-content-height">
            <footer id="footer" class="ft-wrapper gutters">
                <div class="tb-Grid tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24 position-relative">
                    <div class="tb-GridColumn tb-GridColumn--l--5 tb-GridColumn--offset--l--0">
                        <p class="tagline">{{ __('messages.company_name') }}</p>
                        <div class="infotext">
                            <p>{{ __('messages.address') }}</p>
                            <p>{{ __('messages.phone') }}</p>
                            <p><a href="mailto:{{ __('messages.email') }}">{{ __('messages.email') }}</a></p>
                        </div>
                    </div>

                    <div class="tb-GridColumn tb-GridColumn--l--5 tb-GridColumn--offset--l--1">
                        <p class="tagline">{{ __('messages.useful_links') }}</p>
                        <div class="list">
                            <a href="{{ route('contact') }}" class="infotext">
                                {{ __('messages.contact_us') }} <span class="icon icon-right-arrow"></span>
                            </a>
                            <a href="{{ route('single.vacancy', $vacancy) }}#resumeForm" class="infotext">
                                {{ __('messages.vacancy') }} <span class="icon icon-right-arrow"></span>
                            </a>
                            <a href="{{ route('cooperation') }}#partner-form-wrapper" class="infotext">
                                {{ __('messages.cooperation') }} <span class="icon icon-right-arrow"></span>
                            </a>
                        </div>
                    </div>

                    <div class="tb-GridColumn tb-GridColumn--l--5 tb-GridColumn--offset--l--1">
                        <p class="tagline">{{ __('messages.follow_us') }}</p>
                        <div class="list">
                            <a href="{{ $contact->telegram ?? 'https://t.me/Zuma_pharma' }}" class="infotext">Telegram</a>
                            <a href="{{ $contact->youtube ?? 'https://www.youtube.com/' }}" class="infotext">YouTube</a>
                            <a href="{{ $contact->facebook ?? 'https://www.facebook.com' }}" class="infotext">Facebook</a>
                            <a href="{{ $contact->twitter ?? 'https://twitter.com' }}" class="infotext">X (Twitter)</a>
                            <a href="{{ $contact->instagram ?? 'https://www.instagram.com' }}" class="infotext">Instagram</a>
                            <a href="{{ $contact->linkedIn ?? 'https://www.linkedIn.com' }}" class="infotext">LinkedIN</a>
                        </div>
                    </div>

                    <div class="tb-GridColumn tb-GridColumn--l--6 tb-GridColumn--offset--l--1">
                        <p class="tagline">{{ __('messages.other_offices') }}</p>
                        <a href="https://maps.app.goo.gl/fwrYwkV2dNSBGt3p8" class="infotext" target="_black">
                            <span class="icon icon-location-blue-edge"></span>
                            {{ __('messages.choose_country') }}
                        </a>
                    </div>

                    <div class="tb-GridColumn tb-GridColumn--l--24 legal-links">
                        <a href="{{ route('privacy_policy') }}" class="infotext">{{ __('messages.copyright') }}</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>

<style>
    .item.animate {
        font-size: 34px;
    }
    .dr_menu-lang-items a{
        margin: 0 5px;
    }
    .nncorp-navigation .cmp-navigation .cmp-navigation__item a {
        font-size: 18px;
    }
</style>

<script>
    function openModalMenu () {
        document.body.style.overflow = "hidden";
    }
    function closeModalMenu () {
        document.body.style.overflow = "auto";
    }
</script>
