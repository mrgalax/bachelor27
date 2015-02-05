<?php

/**
 * Please note: we can use unencoded characters like ö, é etc here as we use the html5 doctype with utf8 encoding
 * in the application's header (in views/_header.php). To add new languages simply copy this file,
 * and create a language switch in your root files.
 */

// login & registration classes
define("MESSAGE_ACCOUNT_NOT_ACTIVATED","Din bruger er ikke aktiveret. klik på på linket i den mail vi har sendt." );
define("MESSAGE_CAPTCHA_WRONG", "Captcha var forkert!");
define("MESSAGE_COOKIE_INVALID", "Invalid cookie");
define("MESSAGE_DATABASE_ERROR", "Database connection problem.");
define("MESSAGE_EMAIL_ALREADY_EXISTS", "Denne email adresse er allerede ibrug. prøv \"glemt kodeord\"  ");
define("MESSAGE_EMAIL_CHANGE_FAILED","Dit skift af email er gået galt." );
define("MESSAGE_EMAIL_CHANGED_SUCCESSFULLY", "Din email er blivet udskiftet succefyldt. ny email er:");
define("MESSAGE_EMAIL_EMPTY", "Email kan ikke være tom");
define("MESSAGE_EMAIL_INVALID","Din indtastede Email er ikke en valid email format");
define("MESSAGE_EMAIL_SAME_LIKE_OLD_ONE", "Din valgte email er den samme som du har pt. vælg en anden!");
define("MESSAGE_EMAIL_TOO_LONG", "Email kan ikke være længere ind 64 karektere");
define("MESSAGE_LINK_PARAMETER_EMPTY", "Empty link parameter data.");
define("MESSAGE_LOGGED_OUT", "Du er logged ud.");
// The "login failed"-message is a security improved feedback that doesn't show a potential attacker if the user exists or not
define("MESSAGE_LOGIN_FAILED", "Dit forsøg misløkedes");
define("MESSAGE_OLD_PASSWORD_WRONG","Dit gamle kodeord var forkert");
define("MESSAGE_PASSWORD_BAD_CONFIRM", "Kodeord og gentagelsen af kodeord var ikke den samme.");
define("MESSAGE_PASSWORD_CHANGE_FAILED","Dit kodeord skift fajlede");
define("MESSAGE_PASSWORD_CHANGED_SUCCESSFULLY", "Kodeord skiftede planmæssigt");
define("MESSAGE_PASSWORD_EMPTY", "kodeord felt er tomt");
define("MESSAGE_PASSWORD_RESET_MAIL_FAILED", "Kodeord skift mail NOT sendt ERROR!");
define("MESSAGE_PASSWORD_RESET_MAIL_SUCCESSFULLY_SENT", "Kodeord skift mail er sendt succefyldt");
define("MESSAGE_PASSWORD_TOO_SHORT","Kodeord har en minimum længde på 6 karektere" );
define("MESSAGE_PASSWORD_WRONG", "Forkert kodeord. Prøv igen");
define("MESSAGE_PASSWORD_WRONG_3_TIMES", "Du har indtastet et forkert kodeord 3 eller flere gange. vent i 30 sikkunder!");
define("MESSAGE_REGISTRATION_ACTIVATION_NOT_SUCCESSFUL", "Der er ingen id/verification code kombination her");
define("MESSAGE_REGISTRATION_ACTIVATION_SUCCESSFUL","Din aktivering gik igennem. Du kan nu logge ind" );
define("MESSAGE_REGISTRATION_FAILED","Din registrering misløkkedes, prøv igen.");
define("MESSAGE_RESET_LINK_HAS_EXPIRED", "Dit link til nyt kodeord er udløbet. brug linket inden for 1 time");
define("MESSAGE_VERIFICATION_MAIL_ERROR", "Vi kan ikke sende dig en aktivering mail, din bruger er ikke blivet fremstillet");
define("MESSAGE_VERIFICATION_MAIL_NOT_SENT","Aktiverings mail NOT sendt! ERROR!");
define("MESSAGE_VERIFICATION_MAIL_SENT", "Din bruger er blivet fremstillet og vi har sendt en mail til dig. Klik på linket i mailen som vil aktivere din bruger");
define("MESSAGE_USER_DOES_NOT_EXIST", "Denne bruger findes ikke" );
define("MESSAGE_USERNAME_BAD_LENGTH", "Brugernavn kan ikke være kortere ind 2 eller længere ind 64 karektere." );
define("MESSAGE_USERNAME_CHANGE_FAILED", "dit valgte brugernavn er fejlet");
define("MESSAGE_USERNAME_CHANGED_SUCCESSFULLY", "Dit brugernavn er succefyldt skiftet. Nyt bruger navn er:");
define("MESSAGE_USERNAME_EMPTY", "Brugernavn felt er tomt" );
define("MESSAGE_USERNAME_EXISTS", "Dit valgte brugernavn er brugt. find et andet et.");
define("MESSAGE_USERNAME_INVALID", "Brug kun bogstaver a-Z og numre. 2 til 64 karektere");
define("MESSAGE_USERNAME_SAME_LIKE_OLD_ONE", "Dit valgte brugernavn er det samme som du har pt. vælg et andet" );

// views
define("WORDING_BACK_TO_LOGIN", "Tilbage til login siden");
define("WORDING_CHANGE_EMAIL", "Skift email" );
define("WORDING_CHANGE_PASSWORD", "Skift kodeord");
define("WORDING_CHANGE_USERNAME", "Skift brugernavn");
define("WORDING_CURRENTLY", "currently");
define("WORDING_EDIT_USER_DATA", "Ændre bruger data");
define("WORDING_EDIT_YOUR_CREDENTIALS", "Du er logged ind og kan ændre dine data");
define("WORDING_FORGOT_MY_PASSWORD", "glemt kodeord?");
define("WORDING_LOGIN", "Log in");
define("WORDING_LOGOUT", "Log ud");
define("WORDING_NEW_EMAIL", "ny email");
define("WORDING_NEW_PASSWORD", "Ny kodeord");
define("WORDING_NEW_PASSWORD_REPEAT", "gentag nyt kodeord");
define("WORDING_NEW_USERNAME", "Nyt brugernavn (brugernavn kan kun være azAZ09 og 2 til 64 karektere)" );
define("WORDING_OLD_PASSWORD", "Dit gamle kodeord");
define("WORDING_PASSWORD", "Kodeord");
define("WORDING_PROFILE_PICTURE", " Dit profil billede");
define("WORDING_REGISTER", "registrer");
define("WORDING_REGISTER_NEW_ACCOUNT", "Registrer ny bruger");
define("WORDING_REGISTRATION_CAPTCHA", "Udfyld dette tegn med de karektere du ser.");
define("WORDING_REGISTRATION_EMAIL","Email (Brug en rigtig email. da du vil modtage en email med et aktiverings link.)" );
define("WORDING_REGISTRATION_PASSWORD", "Kodeord (Minimun 6 karektere.)");
define("WORDING_REGISTRATION_PASSWORD_REPEAT", "Gentag kodeord");
define("WORDING_REGISTRATION_USERNAME","Brugernavn (benyt kun bogstaver og numre. 2 min og 64 max karektere)" );
define("WORDING_REMEMBER_ME", "Husk mig?");
define("WORDING_REQUEST_PASSWORD_RESET", "Anmod om et kodeord reset. skriv dit brugernavn og kodeord og du modtager en mail");
define("WORDING_RESET_PASSWORD", "nyt kodeord");
define("WORDING_SUBMIT_NEW_PASSWORD", "bestil  nyt kodeord");
define("WORDING_USERNAME", "Brugernavn");
define("WORDING_YOU_ARE_LOGGED_IN_AS", "Du er log ind som ");
