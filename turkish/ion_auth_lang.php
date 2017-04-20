<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Ion Auth Lang - English
*
* Author: Ben Edmunds
* 		  ben.edmunds@gmail.com
*         @benedmunds
*
* Location: http://github.com/benedmunds/ion_auth/
*
* Created:  03.14.2010
*
* Description:  English language file for Ion Auth messages and errors
*
*/

// Account Creation
$lang['account_creation_successful'] 	  	 = 'Hesap Başarıyla Oluşturuldu';
$lang['account_creation_unsuccessful'] 	 	 = 'Hesap Oluşturma Başarısız';
$lang['account_creation_duplicate_email'] 	 = 'E-posta adresi kullanılıyor ya da geçersiz';
$lang['account_creation_duplicate_username'] = 'Kullanıcı Adı kullanılıyor ya da geçersiz';
$lang['account_creation_missing_default_group'] = 'Varsayılan grup tanımlanmamış';
$lang['account_creation_invalid_default_group'] = 'Geçersiz grup tanımlaması';


// Password
$lang['password_change_successful'] 	 	 = 'Şifre başarıyla değiştirilmiştir.';
$lang['password_change_unsuccessful'] 	  	 = 'Şifre değişikliği başarısız';
$lang['forgot_password_successful'] 	 	 = 'Şifre sıfırlama linki gönderildi';
$lang['forgot_password_unsuccessful'] 	 	 = 'Şifre sıfırlama başarısız';

// Activation
$lang['activate_successful'] 		  	     = 'Hesap etkinleştirilmiştir.';
$lang['activate_unsuccessful'] 		 	     = 'Hesap etkinleştirme başarısız.';
$lang['deactivate_successful'] 		  	     = 'Hesap devre dışı bırakılmıştır';
$lang['deactivate_unsuccessful'] 	  	     = 'Hesap devre dışı bırakma başarısız';
$lang['activation_email_successful'] 	  	 = 'Etkinleştirme linki gönderilmiştir.';
$lang['activation_email_unsuccessful']   	 = 'Etkinleştirme linki başarısız.';

// Login / Logout
$lang['login_successful'] 		  	         = 'Giriş başarılıdır.';
$lang['login_unsuccessful'] 		  	     = 'Geçersiz giriş';
$lang['login_unsuccessful_not_active'] 		 = 'Hesap aktif değil';
$lang['login_timeout']                       = 'Geçici olarak devredışıdır. Daha sonra tekrar deneyin.';
$lang['logout_successful'] 		 	         = 'Çıkış başarılı';

// Account Changes
$lang['update_successful'] 		 	         = 'Hesap bilgileri başarıyla güncellenmiştir.';
$lang['update_unsuccessful'] 		 	     = 'Hesap bilgileri güncellenmesi başarısız.';
$lang['delete_successful']               	 = 'Kullanıcı Silindi';
$lang['delete_unsuccessful']           		 = 'Kullanıcı Silinemedi';

// Groups
$lang['group_creation_successful']  		 = 'Grup oluşturma başarılı';
$lang['group_already_exists']       		 = 'Grup adı zaten kullanımda';
$lang['group_update_successful']   		 	 = 'Grup detayları güncellendi';
$lang['group_delete_successful']    		 = 'Grup silindi';
$lang['group_delete_unsuccessful'] 			 = 'Grup silme başarısız';
$lang['group_name_required'] 				 = 'Grup adı zorunludur.';

// Activation Email
$lang['email_activation_subject']            = 'Hesap Etkinleştirme';
$lang['email_activate_heading']    			 = 'Hesabı Etkinleştir: %s';
$lang['email_activate_subheading'] 			 = 'Lütfen %s linkine tıklayın.';
$lang['email_activate_link']       			 = 'Hesabınızı etkinleştiriniz.';

// Forgot Password Email
$lang['email_forgotten_password_subject']    = 'Şifremi unuttum onayı';
$lang['email_forgot_password_heading']    	 = 'Şifrenizi sıfırlayın %s';
$lang['email_forgot_password_subheading']	 = 'Lütfen %s linkine tıklayın.';
$lang['email_forgot_password_link']      	 = 'Şifrenizi sıfırlayın';

// New Password Email
$lang['email_new_password_subject']          = 'Yeni Şifre';
$lang['email_new_password_heading']   		 = 'Yeni Şifreniz: %s';
$lang['email_new_password_subheading']		 = 'Şifreniz değiştirilmiştir: %s';
