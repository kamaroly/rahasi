<div id="subnavigation" class="account-settings-navigation-view">
    <ul>
        <li class="account {{(Request::is('account/general') ? 'selected' : '')}}">
            <a href="{{ route('account.general') }}" class="general_icon">General</a>
            <span class="border left"></span>
            <span class="border right"></span>
        </li>
         <li class="apikeys {{(Request::is('account/api*') ? 'selected' : '')}} ">
            <a href="{{ route('account.apikeys') }}" class="key_icon">API Keys</a>
        </li>
         <li class="transfers {{(Request::is('account/transfers') ? 'selected' : '')}}">
            <a href="{{ route('account.banks') }}" class="transfers_icon">Banks</a>
        </li>
        <li class="emails {{(Request::is('account/email') ? 'selected' : '')}}">
            <a href="{{ route('account.emails') }}" class="emails_icon">Emails</a>
        </li>
    </ul>
</div>