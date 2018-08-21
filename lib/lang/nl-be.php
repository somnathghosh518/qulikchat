<?php
/*
 * @package AJAX_Chat
 * @author Sebastian Tschan
 * @author Nic Mertens
 * @copyright (c) Sebastian Tschan
 * @license Modified MIT License
 * @link https://blueimp.net/ajax/
 */

$lang = array();
$lang['title'] = 'Qlik Chat';
$lang['userName'] = 'Gebruikersnaam';
$lang['password'] = 'Wachtwoord';
$lang['login'] = 'Inloggen';
$lang['logout'] = 'Uitloggen';
$lang['channel'] = 'Kanaal';
$lang['style'] = 'Stijl';
$lang['language'] = 'Taal';
$lang['inputLineBreak'] = 'Typ SHIFT+ENTER om een line break in te geven';
$lang['messageSubmit'] = 'Verzend';
$lang['registeredUsers'] = 'Geregistreerde gebruikers';
$lang['onlineUsers'] = 'Online gebruikers';
$lang['toggleAutoScroll'] = 'Autoscroll aan/uit';
$lang['toggleAudio'] = 'Geluid aan/uit';
$lang['toggleHelp'] = 'Toon/verberg help';
$lang['toggleSettings'] = 'Toon/verberg instellingen';
$lang['toggleOnlineList'] = 'Toon/verberg online lijst';
$lang['bbCodeLabelBold'] = 'b';
$lang['bbCodeLabelItalic'] = 'i';
$lang['bbCodeLabelUnderline'] = 'u';
$lang['bbCodeLabelQuote'] = 'Quote';
$lang['bbCodeLabelCode'] = 'Code';
$lang['bbCodeLabelURL'] = 'URL';
$lang['bbCodeLabelImg'] = 'Figuur';
$lang['bbCodeLabelColor'] = 'Kleur lettertype';
$lang['bbCodeLabelEmoticon'] = 'Emoticons';
$lang['bbCodeTitleBold'] = 'Tekst in vet: [b]text[/b]';
$lang['bbCodeTitleItalic'] = 'Tekst in cursief: [i]text[/i]';
$lang['bbCodeTitleUnderline'] = 'Tekst onderlijnd: [u]text[/u]';
$lang['bbCodeTitleQuote'] = 'Quote tekst: [quote]text[/quote] or [quote=author]text[/quote]';
$lang['bbCodeTitleCode'] = 'Code ingeven: [code]code[/code]';
$lang['bbCodeTitleURL'] = 'Voeg URL in: [url]http://example.org[/url] or [url=http://example.org]text[/url]';
$lang['bbCodeTitleImg'] = 'Voeg figuur toe: [img]http://example.org/image.jpg[/img]';
$lang['bbCodeTitleColor'] = 'Kleur lettertype: [color=red]text[/color]';
$lang['bbCodeTitleEmoticon'] = 'Emoticons list';
$lang['help'] = 'Help';
$lang['helpItemDescJoin'] = 'Betreed een kamer:';
$lang['helpItemCodeJoin'] = '/join Kanaalnaam';
$lang['helpItemDescJoinCreate'] = 'Maak een privékamer (Enkel geregistreerde gebruikers):';
$lang['helpItemCodeJoinCreate'] = '/join';
$lang['helpItemDescInvite'] = 'Nodig iemand uit (bv. naar een privékamer):';
$lang['helpItemCodeInvite'] = '/invite Gebruikersnaam';
$lang['helpItemDescUninvite'] = 'Annuleer de uitnodiging:';
$lang['helpItemCodeUninvite'] = '/uninvite Gebruikersnaam';
$lang['helpItemDescLogout'] = 'Uitloggen:';
$lang['helpItemCodeLogout'] = '/quit';
$lang['helpItemDescPrivateMessage'] = 'Privé bericht:';
$lang['helpItemCodePrivateMessage'] = '/msg Gebruikersnaam Tekst';
$lang['helpItemDescQueryOpen'] = 'Open een privékamer:';
$lang['helpItemCodeQueryOpen'] = '/query Gebruikersnaam';
$lang['helpItemDescQueryClose'] = 'Sluit een privékamer:';
$lang['helpItemCodeQueryClose'] = '/query';
$lang['helpItemDescAction'] = 'Beschrijf actie:';
$lang['helpItemCodeAction'] = '/action Tekst';
$lang['helpItemDescDescribe'] = 'Beschrijf actie in privébericht:';
$lang['helpItemCodeDescribe'] = '/describe Gebruikersnaam Tekst';
$lang['helpItemDescIgnore'] = 'Negeer/aanvaard berichten van gebruiker:';
$lang['helpItemCodeIgnore'] = '/ignore Gebruikersnaam';
$lang['helpItemDescIgnoreList'] = 'Toon de genegeerde gebruikers:';
$lang['helpItemCodeIgnoreList'] = '/ignore';
$lang['helpItemDescWhereis'] = 'Display user channel:';
$lang['helpItemCodeWhereis'] = '/whereis Gebruikersnaam';
$lang['helpItemDescKick'] = 'Kick een gebruiker (Enkel Moderators of Administrators):';
$lang['helpItemCodeKick'] = '/kick Gebruikersnaam [aantal minuten]';
$lang['helpItemDescUnban'] = 'Unban een gebruiker (Enkel Moderators of Administrators):';
$lang['helpItemCodeUnban'] = '/unban Gebruikersnaam';
$lang['helpItemDescBans'] = 'Lijst van gebande Gebruikers (Enkel Moderators of Administrators):';
$lang['helpItemCodeBans'] = '/bans';
$lang['helpItemDescWhois'] = 'Toon gebruikers-IP (Enkel Moderators of Administrators):';
$lang['helpItemCodeWhois'] = '/whois Gebruikersnaam';
$lang['helpItemDescWho'] = 'Lijst van gebruikers online:';
$lang['helpItemCodeWho'] = '/who [Kanaalnaam]';
$lang['helpItemDescList'] = 'Lijst van beschikbare kanalen:';
$lang['helpItemCodeList'] = '/list';
$lang['helpItemDescRoll'] = 'Werp dobbelsteen:';
$lang['helpItemCodeRoll'] = '/roll [number]d[sides]';
$lang['helpItemDescNick'] = 'Wijzig gebruikersnaam:';
$lang['helpItemCodeNick'] = '/nick Gebruikersnaam';
$lang['settings'] = 'Instellingen';
$lang['settingsBBCode'] = 'Inschakelen BBCode:';
$lang['settingsBBCodeImages'] = 'Inschakelen figuur BBCode:';
$lang['settingsBBCodeColors'] = 'Inschakelen lettertype kleur BBCode:';
$lang['settingsHyperLinks'] = 'Inschakelen hyperlinks:';
$lang['settingsLineBreaks'] = 'Inschakelen line breaks:';
$lang['settingsEmoticons'] = 'Inschakelen emoticons:';
$lang['settingsAutoFocus'] = 'Zet automatisch de focus in het invoerveld:';
$lang['settingsMaxMessages'] = 'Maximaal aantal berichten in de chatkamer:';
$lang['settingsWordWrap'] = 'Inschakelen wrapping van lange woorden:';
$lang['settingsMaxWordLength'] = 'Maximale lengte van een woord voor dat het gewrapped wordt:';
$lang['settingsDateFormat'] = 'Formaat van datum en tijd:';
$lang['settingsPersistFontColor'] = 'Persiste lettertype kleur:';
$lang['settingsAudioSupport'] = 'Audio Support:';
$lang['settingsAudioVolume'] = 'Volume geluid:';
$lang['settingsSoundReceive'] = 'Geluid voor inkomende berichten:';
$lang['settingsSoundSend'] = 'Geluid voor buitengaande berichten:';
$lang['settingsSoundEnter'] = 'Geluid voor login en chatkemer voor binnenkomende berichten:';
$lang['settingsSoundLeave'] = 'Geluid voor logout en verlaat berichten:';
$lang['settingsSoundChatBot'] = 'Geluid voor berichten van de bot:';
$lang['settingsSoundError'] = 'Geluid voor errorberichten:';
$lang['settingsSoundPrivate'] = 'Geluid voor privé berichten:';
$lang['settingsBlink'] = 'Blink window title on new messages:';
$lang['settingsBlinkInterval'] = 'Blink interval in milliseconds:';
$lang['settingsBlinkIntervalNumber'] = 'Number of blink intervals:';
$lang['playSelectedSound'] = 'Speel geselecteerd geluid';
$lang['requiresJavaScript'] = 'JavaScript is nodig voor deze chat.';
$lang['errorInvalidUser'] = 'Ongeldige gebruikersnaam.';
$lang['errorUserInUse'] = 'Gebruikersnaam is in gebruik, kies een andere.';
$lang['errorBanned'] = 'Gebruiker of gebruikers-IP is gebanned.';
$lang['errorMaxUsersLoggedIn'] = 'Dit chatkamer heeft het maximum toegelaten aantal ingelogde gebruikers bereikt.';
$lang['errorChatClosed'] = 'Dit chatkamer is momenteel gesloten.';
$lang['logsTitle'] = 'Qlik Chat - Logs';
$lang['logsDate'] = 'Datum';
$lang['logsTime'] = 'Tijd';
$lang['logsSearch'] = 'Zoek';
$lang['logsPrivateChannels'] = 'Privékanalen';
$lang['logsPrivateMessages'] = 'Privéberichten';
