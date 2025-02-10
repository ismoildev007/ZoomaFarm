<div class="footer experiencefragment">
    <div class="cmp-experiencefragment cmp-experiencefragment--xf-footer">
        <div class="xf-content-height">
            <footer id="footer" class="ft-wrapper gutters">
                <div class="tb-Grid tb-Grid--l--24 tb-Grid--m--24 tb-Grid--s--24 position-relative">
                    <div class="tb-GridColumn tb-GridColumn--l--5 tb-GridColumn--offset--l--0">
                        <p class="tagline">{{ __('messages.company_name') }}</p>
                        <div class="infotext">
                            <p>{{ __('messages.office_info') }}</p>
                            <p>{{ __('messages.address') }}</p>
                            <p>{{ __('messages.phone') }}</p>
                            <p><a href="index.htm">{{ __('messages.website') }}</a></p>
                            <p><a href="mailto:{{ __('messages.email') }}">{{ __('messages.email') }}</a></p>
                        </div>
                    </div>

                    <div class="tb-GridColumn tb-GridColumn--l--5 tb-GridColumn--offset--l--1">
                        <p class="tagline">{{ __('messages.useful_links') }}</p>
                        <div class="list">
                            <a href="{{ route('contact') }}" class="infotext">
                                {{ __('messages.contact_us') }} <span class="icon icon-right-arrow"></span>
                            </a>
                        </div>
                    </div>

                    <div class="tb-GridColumn tb-GridColumn--l--5 tb-GridColumn--offset--l--1">
                        <p class="tagline">{{ __('messages.follow_us') }}</p>
                        <div class="list">
                            <a href="https://www.linkedin.com/company/novo-nordisk" class="infotext">LinkedIn</a>
                            <a href="https://www.youtube.com/user/novonordisk" class="infotext">YouTube</a>
                            <a href="https://www.facebook.com/novonordisk" class="infotext">Facebook</a>
                            <a href="https://twitter.com/novonordisk" class="infotext">X (Twitter)</a>
                            <a href="https://www.instagram.com/novonordisk" class="infotext">Instagram</a>
                        </div>
                    </div>

                    <div class="tb-GridColumn tb-GridColumn--l--6 tb-GridColumn--offset--l--1">
                        <p class="tagline">{{ __('messages.other_offices') }}</p>
                        <a href="" class="infotext">
                            <span class="icon icon-location-blue-edge"></span>
                            {{ __('messages.choose_country') }}
                        </a>
                    </div>

                    <div class="tb-GridColumn tb-GridColumn--l--24 legal-links">
                        <a href="" class="infotext">{{ __('messages.copyright') }}</a>
                        <a href="" class="infotext">{{ __('messages.privacy_policy') }}</a>
                        <a href="" class="infotext">{{ __('messages.cookie_policy') }}</a>
                        <a href="" class="infotext">{{ __('messages.data_processing') }}</a>
                        <a href="" class="infotext">{{ __('messages.terms_of_use') }}</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>
