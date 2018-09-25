<?php

return array(
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Active Directory Domäne',
    'ad_domain_help'			=> 'Meistens dieselbe wie die E-Mail Domäne.',
    'admin_cc_email'            => 'CC Email',
    'admin_cc_email_help'       => 'Wenn Sie eine Kopie der Rücknahme- / Herausgabe-E-Mails, die an Benutzer gehen auch an zusätzliche E-Mail-Empfänger versenden möchten, geben Sie sie hier ein. Ansonsten lassen Sie dieses Feld leer.',
    'is_ad'				        => 'Dies ist ein Active Directory Server',
	'alert_email'				=> 'Alarme senden an',
	'alerts_enabled'			=> 'E-Mail-Benachrichtigungen aktiviert',
	'alert_interval'			=> 'Ablauf Alarmschwelle (in Tagen)',
	'alert_inv_threshold'		=> 'Inventar Alarmschwelle',
	'asset_ids'					=> 'Asset IDs',
	'audit_interval'            => 'Auditintervall',
    'audit_interval_help'       => 'Wenn Sie Ihre Assets regelmäßig physisch überprüfen müssen, geben Sie das Intervall in Monaten ein.',
	'audit_warning_days'        => 'Audit-Warnschwelle',
    'audit_warning_days_help'   => 'Wie viele Tage im Voraus sollten wir Sie warnen, wenn Vermögenswerte zur Prüfung fällig werden?',
	'auto_increment_assets'		=> 'Erzeugen von fortlaufenden Asset IDs',
	'auto_increment_prefix'		=> 'Präfix (optional)',
	'auto_incrementing_help'    => 'Aktiviere zuerst fortlaufende Asset IDs um dies zu setzen',
	'backups'					=> 'Sicherungen',
	'barcode_settings'			=> 'Barcode Einstellungen',
    'zpl_printer'               => 'ZPL Drucker IP/Port',
    'zpl_template'              => 'ZPL Vorlage Markup',
    'zpl_print_on_asset_create' => 'Label bei Asseterstellung drucken (nur ZPL)',
    'confirm_purge'			    => 'Bereinigung bestätigen',
    'confirm_purge_help'		=> 'Geben Sie das Wort "DELETE" in das untere Feld ein um die gelöschten Einträge zu bereinigen. Dies kann nicht rückgängig gemacht werden.',
	'custom_css'				=> 'Eigenes CSS',
	'custom_css_help'			=> 'Füge eigenes CSS hinzu. Benutze keine &lt;style&gt;&lt;/style&gt; tags.',
    'custom_forgot_pass_url'	=> 'Benutzerdefinierte Passwort Reset URL',
    'custom_forgot_pass_url_help'	=> 'Dadurch wird die integrierte URL für vergessene Passwörter auf dem Anmeldebildschirm ersetzt. Dies ist nützlich, um Benutzer zur internen oder gehosteten Funktion zum Zurücksetzen von LDAP-Passwörtern zu leiten. Es wird effektiv die Funktionalität des lokalen, vergessenen Passworts deaktiviert.',
    'dashboard_message'			=> 'Dashboard-Nachricht',
    'dashboard_message_help'	=> 'Dieser Text wird für jeden sichtbar sein, der Berechtigungen hat das Dashboard zu sehen.',
	'default_currency'  		=> 'Standardwährung',
	'default_eula_text'			=> 'Standard EULA',
  'default_language'			=> 'Standardsprache',
	'default_eula_help_text'	=> 'Sie können ebenfalls eigene EULA\'s mit spezifischen Asset Kategorien verknüpfen.',
    'display_asset_name'        => 'Zeige Assetname an',
    'display_checkout_date'     => 'Zeige Herausgabedatum',
    'display_eol'               => 'Zeige EOL in der Tabellenansicht',
    'display_qr'                => 'Zeige quadratische Codes',
	'display_alt_barcode'		=> 'Zeige 1D Barcode an',
	'barcode_type'				=> '2D Barcode Typ',
	'alt_barcode_type'			=> '1D Barcode Typ',
    'eula_settings'				=> 'EULA Einstellungen',
    'eula_markdown'				=> 'Diese EULA <a href="https://help.github.com/articles/github-flavored-markdown/"> erlaubt Github Flavored Markdown</a>.',
    'footer_text'               => 'Zusätzlicher Fußzeilentext ',
    'footer_text_help'          => 'Dieser Text wird in der rechten Fußzeile angezeigt. Links sind erlaubt mit <a href="https://help.github.com/articles/github-flavored-markdown/">Github Flavored Markdown</a>. Zeilenumbrüche, Kopfzeilen, Bilder usw. können zu unvorhersehbaren Verhalten führen.',
    'general_settings'			=> 'Allgemeine Einstellungen',
	'generate_backup'			=> 'Backup erstellen',
    'header_color'              => 'Farbe der Kopfzeile',
    'info'                      => 'Mit diesen Einstellungen können Sie verschiedene Bereiche Ihrer Installation anpassen.',
    'laravel'                   => 'Laravel Version',
    'ldap_enabled'              => 'LDAP aktiviert',
    'ldap_integration'          => 'LDAP Integration',
    'ldap_settings'             => 'LDAP Einstellungen',
    'ldap_login_test_help'      => 'Geben Sie einen gültigen LDAP-Benutzernamen und ein Passwort von der oben angegebenen Basis-DN ein, um zu testen, ob Ihre LDAP-Anmeldung korrekt konfiguriert ist. SIE MÜSSEN IHRE AKTUALISIERTEN LDAP-EINSTELLUNGEN ZUERST SPEICHERN.',
    'ldap_login_sync_help'      => 'Dies testet nur, ob LDAP korrekt synchronisiert werden kann. Wenn Ihre LDAP-Authentifizierungsabfrage nicht korrekt ist, können sich Benutzer möglicherweise nicht anmelden. SIE MÜSSEN IHRE AKTUALISIERTEN LDAP-EINSTELLUNGEN ZUERST SPEICHERN.',
    'ldap_server'               => 'LDAP Server',
    'ldap_server_help'          => 'Sollte mit ldap:// (für unencrypted oder TLS) oder ldaps:// (für SSL) starten',
	'ldap_server_cert'			=> 'LDAP SSL Zertifikatsüberprüfung',
	'ldap_server_cert_ignore'	=> 'Erlaube ungültige SSL Zertifikate',
	'ldap_server_cert_help'		=> 'Wählen Sie diese Option, wenn Sie selbstsignierte SSL Zertifikate verwenden und diese gegebenenfalls ungültigen Zertifikate akzeptieren möchten.',
    'ldap_tls'                  => 'TLS verwenden',
    'ldap_tls_help'             => 'Sollte nur wenn STARTTLS am LDAP Server verwendet wird, aktiviert sein. ',
    'ldap_uname'                => 'LDAP Bind Nutzername',
    'ldap_pword'                => 'LDAP Bind Passwort',
    'ldap_basedn'               => 'Basis Bind DN',
    'ldap_filter'               => 'LDAP Filter',
    'ldap_pw_sync'              => 'LDAP Passwörter synchronisieren',
    'ldap_pw_sync_help'         => 'Deaktivieren Sie diese Option, wenn Sie nicht möchten, dass LDAP-Passwörter mit lokalen Passwörtern synchronisiert werden. Wenn Sie dies deaktivieren, kann es sein, dass Benutzer sich möglicherweise nicht anmelden können falls der LDAP-Server aus irgendeinem Grund nicht erreichbar ist.',
    'ldap_username_field'       => 'Benutzername',
    'ldap_lname_field'          => 'Nachname',
    'ldap_fname_field'          => 'LDAP Vorname',
    'ldap_auth_filter_query'    => 'LDAP Authentifikationsabfrage',
    'ldap_version'              => 'LDAP Version',
    'ldap_active_flag'          => 'LDAP Aktiv-Markierung',
    'ldap_emp_num'              => 'LDAP Mitarbeiternummer',
    'ldap_email'                => 'LDAP E-Mail',
    'license'                  => 'Softwarelizenz',
    'load_remote_text'          => 'Remote Skripte',
    'load_remote_help_text'		=> 'Diese Installation von Snipe-IT kann Skripte von außerhalb laden.',
    'login_note'                => 'Anmeldenotiz',
    'login_note_help'           => 'Fügen Sie optional ein paar Sätze zu Ihrem Anmeldebildschirm hinzu, beispielsweise um Personen zu helfen, welche ein verlorenes oder gestohlenes Gerät gefunden haben. Dieses Feld akzeptiert <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>',
    'login_remote_user_text'    => 'Remote Benutzer Login Optionen',
    'login_remote_user_enabled_text' => 'Aktiviere Login mit Remote User Header',
    'login_remote_user_enabled_help' => 'Diese Option aktiviert die Authentifizierung über den REMOTE_USER header gemäss dem "Common Gateway Interface (rfc3875)"',
    'login_common_disabled_text' => 'Deaktiviere andere Authentifizierungsmethoden',
    'login_common_disabled_help' => 'Diese Option deaktiviert andere Authentifizierungsmethoden. Aktivieren Sie diese Option nur, wenn Sie sich sicher sind, dass REMOTE_USER Login bereits funktioniert',
    'login_remote_user_custom_logout_url_text' => 'Benutzerdefinierte Abmelde-URL',
    'login_remote_user_custom_logout_url_help' => 'If a url is provided here, users will get redirected to this URL after the user logs out of Snipe-IT. This is useful to close the user sessions of your Authentication provider correctly.',
    'logo'                    	=> 'Logo',
    'full_multiple_companies_support_help_text' => 'Beschränkung von Benutzern (inklusive Administratoren) die einer Firma zugewiesen sind zu den Assets der Firma.',
    'full_multiple_companies_support_text' => 'Volle Mehrmandanten-Unterstützung für Firmen',
    'show_in_model_list'   => 'In Modell-Dropdown-Liste anzeigen',
    'optional'					=> 'optional',
    'per_page'                  => 'Ergebnisse pro Seite',
    'php'                       => 'PHP Version',
    'php_gd_info'               => 'Um QR-Codes anzeigen zu können muss php-gd installiert sein, siehe Installationshinweise.',
    'php_gd_warning'            => 'PHP Image Processing and GD Plugin ist NICHT installiert.',
    'pwd_secure_complexity'     => 'Passwortkomplexität',
    'pwd_secure_complexity_help' => 'Wählen Sie aus, welche Komplexitätsregeln Sie für Passwörter erzwingen möchten.',
    'pwd_secure_min'            => 'Minimale Passwortlänge',
    'pwd_secure_min_help'       => 'Minimal zulässiger Wert ist 5',
    'pwd_secure_uncommon'       => 'Gebräuchliche Passwörter verhindern',
    'pwd_secure_uncommon_help'  => 'Verhindert die Verwendung der 10.000 häufigsten Passwörter aus im Internet geleakten Quellen.',
    'qr_help'                   => 'Schalte zuerst QR Codes an um dies zu setzen',
    'qr_text'                   => 'QR Code Text',
    'setting'                   => 'Einstellung',
    'settings'                  => 'Einstellungen',
    'show_alerts_in_menu'       => 'Warnungen im oberen Menü anzeigen',
    'show_archived_in_list'     => 'Archivierte Assets',
    'show_archived_in_list_text'     => 'Zeige archivierte Assets in der "Alle auflisten" Liste',
    'show_images_in_email'     => 'Verwende Bilder in E-Mals',
    'show_images_in_email_help'   => 'Deaktivieren Sie dieses Kontrollkästchen, wenn sich Ihre Snipe-IT-Installation hinter einem VPN oder einem geschlossenen Netzwerk befindet und Benutzer außerhalb des Netzwerks keine Bilder von dieser Installation in ihre E-Mails laden können.',
    'site_name'                 => 'Seitenname',
    'slack_botname'             => 'Slack Botname',
    'slack_channel'             => 'Slack Kanal',
    'slack_endpoint'            => 'Slack Endpunkt',
    'slack_integration'         => 'Slack Einstellungen',
    'slack_integration_help'    => 'Die Slackintegration ist optional. Der Endpunkt und kanal werden benötigt, wenn man Slack benutzen will. Um Slack zu konfigurieren muss zuerst <a href=":slack_link" target="_new"> einen eingehenden Webhook</a> in seinem Slackkonto einrichten.',
    'slack_integration_help_button'    => 'Sobald Sie Ihre Slack-Informationen gespeichert haben, erscheint eine Test-Schaltfläche.',
    'slack_test_help'           => 'Testen Sie, ob die Slack-Integration korrekt konfiguriert ist. ZUERST MÜSSEN DIE AKTUALISIERTEN SLACK EINSTELLUNGEN GESPEICHERT WERDEN.',
    'snipe_version'  			=> 'Snipe-IT Version',
    'support_footer'            => 'Fußzeile Support-Link ',
    'support_footer_help'       => 'Geben Sie an, wer die Links zum Snipe-IT Support-Info und Benutzerhandbuch sieht',
    'version_footer'            => 'Version in Footer ',
    'version_footer_help'       => 'Specify who sees the Snipe-IT version and build number.',
    'system'                    => 'Systeminformationen',
    'update'                    => 'Einstellungen übernehmen',
    'value'                     => 'Wert',
    'brand'                     => 'Branding',
    'about_settings_title'      => 'Über Einstellungen',
    'about_settings_text'       => 'Mit diesen Einstellungen können Sie verschiedene Aspekte Ihrer Installation anpassen.',
    'labels_per_page'           => 'Etiketten pro Seite',
    'label_dimensions'          => 'Etikettengröße (Zoll)',
    'next_auto_tag_base'        => 'Nächster Auto-Inkrement',
    'page_padding'              => 'Seiten Ränder (Zoll)',
    'privacy_policy_link'       => 'Link zur Datenschutzrichtlinie',
    'privacy_policy'            => 'Datenschutzrichtlinie',
    'privacy_policy_link_help'  => 'Wenn hier ein Link zu Ihrer Datenschutzerklärung enthalten ist, wird dieser in der Fußzeile der App und in allen E-Mails, die das System in Übereinstimmung mit der DSGVO versendet, hinzugefügt. ',
    'purge'                     => 'Gelöschte Einträge bereinigen',
    'labels_display_bgutter'    => 'Ettiketten Spaltenzwischenraum unterhalb',
    'labels_display_sgutter'    => 'Ettikett Seitenabstand',
    'labels_fontsize'           => 'Schriftgröße der Etiketten',
    'labels_pagewidth'          => 'Etiketten Blatt Breite',
    'labels_pageheight'         => 'Etiketten Blatt Höhe',
    'label_gutters'        => 'Etikettenabstand (Zoll)',
    'page_dimensions'        => 'Seitengröße (Zoll)',
    'label_fields'          => 'sichtbare Beschriftungsfelder',
    'inches'        => 'Zoll',
    'width_w'        => 'b',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Link zu Snipe-IT in E-Mails',
    'show_url_in_emails_help_text'      => 'Deaktivieren Sie dieses Kontrollkästchen, wenn Sie in Ihren E-Mail-Fußzeilen keine Verbindung zu Ihrer Snipe-IT-Installation herstellen möchten. Nützlich, wenn die meisten Ihrer Benutzer sich nie einloggen.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Maximale Höhe der Miniaturansicht',
    'thumbnail_max_h_help'   => 'Maximale Höhe für Miniaturansichten in der Listenansicht in Pixel. Min. 25, Max. 500.',
    'two_factor'        => 'Zwei-Faktor-Authentifizierung',
    'two_factor_secret'        => 'Zwei-Faktor Code',
    'two_factor_enrollment'        => 'Zwei-Faktor Registrierung',
    'two_factor_enabled_text'        => 'Zwei-Faktor-Authentifizierung aktivieren',
    'two_factor_reset'        => 'Zwei-Faktor-Geheimnis zurücksetzen',
    'two_factor_reset_help'        => 'Dies zwingt den Benutzer sein Gerät mit der Google Authenticator App erneut zu registrieren. Dies kann nützlich sein, wenn das aktuell registrierte Gerät verloren ging oder gestohlen wurde. ',
    'two_factor_reset_success'          => 'Zwei-Faktor-Gerät erfolgreich zurückgesetzt',
    'two_factor_reset_error'          => 'Zwei-Faktor-Gerät zurücksetzen fehlgeschlagen',
    'two_factor_enabled_warning'        => 'Die Aktivierung der Zwei-Faktor-Authentifizierung bewirkt, dass Sie sich sofort mit einem bei der Google Authenticator App registrierten Gerät authentifizieren müssen. Sie haben die Möglichkeit ihr Gerät hinzuzufügen falls derzeit keines registriert ist.',
    'two_factor_enabled_help'        => 'Aktiviert die Zwei-Faktor-Authentifizierung mit der Google Authenticator App.',
    'two_factor_optional'        => 'Auswählbar (Benutzer können aktivieren oder deaktivieren, wenn erlaubt)',
    'two_factor_required'        => 'Für alle Benutzer erforderlich',
    'two_factor_disabled'        => 'Deaktiviert',
    'two_factor_enter_code'	=> 'Zwei-Faktor Code eingeben',
    'two_factor_config_complete'	=> 'Code absenden',
    'two_factor_enabled_edit_not_allowed' => 'Der Administrator erlaubt nicht, diese Einstellung zu ändern.',
    'two_factor_enrollment_text'	=> "Zwei-Faktor-Authentifizierung ist erforderlich, Ihr Gerät wurde jedoch noch nicht hinzugefügt. Öffnen Sie die Google Authenticator App und scannen Sie den QR-Code unterhalb um Ihr Gerät hinzuzufügen. Geben Sie anschließend den Code ein",
    'require_accept_signature'      => 'Signatur erforderlich',
    'require_accept_signature_help_text'      => 'Wenn aktiviert, wird eine physische Unterschrift durch den Benutzer notwendig, der das Asset erhält.',
    'left'        => 'links',
    'right'        => 'rechts',
    'top'        => 'Oben',
    'bottom'        => 'Unten',
    'vertical'        => 'Vertikal',
    'horizontal'        => 'Horizontal',
    'unique_serial'                => 'Unique serial numbers',
    'unique_serial_help_text'                => 'Checking this box will enforce a uniqueness constraint on asset serials',
    'zerofill_count'        => 'Länge der Asset Tags, inklusive zerofill',
);
