<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Auth Lang - English
*
* Author: Ben Edmunds
* 		  ben.edmunds@gmail.com
*         @benedmunds
*
* Author: Daniel Davis
*         @ourmaninjapan
*
* Location: http://github.com/benedmunds/ion_auth/
*
* Created:  03.09.2013
*
* Description:  English language file for Ion Auth example views
*
*/

// Errors
$lang['error_csrf'] = 'This form post did not pass our security checks.';

// Login
$lang['login_heading']         = 'Giriş';
$lang['login_subheading']      = 'E-posta ve Şifreniz ile giriş yapınız.';
$lang['login_identity_label']  = 'Eposta';
$lang['login_password_label']  = 'Şifre';
$lang['login_remember_label']  = 'Beni Hatırla';
$lang['login_submit_btn']      = 'Giriş';
$lang['login_forgot_password'] = 'Şifrenizi mi unuttunuz?';

// Index
$lang['index_heading']           = 'Kullanıcılar';
$lang['index_subheading']        = 'Kullanıcıların listesi.';
$lang['index_fname_th']          = 'Adı';
$lang['index_lname_th']          = 'Soyadı';
$lang['index_email_th']          = 'E-posta';
$lang['index_groups_th']         = 'Gruplar';
$lang['index_status_th']         = 'Durum';
$lang['index_action_th']         = 'İşlem';
$lang['index_active_link']       = 'Aktif';
$lang['index_inactive_link']     = 'Devredışı';
$lang['index_create_user_link']  = 'Yeni Kullanıcı';
$lang['index_create_group_link'] = 'Yeni Grup';

// Deactivate User
$lang['deactivate_heading']                  = 'Kullanıcıyı devredışı bırak';
$lang['deactivate_subheading']               = ' \'%s\' kullanıcısını devredışı bırakmak istediğinize emin misiniz?';
$lang['deactivate_confirm_y_label']          = 'Evet';
$lang['deactivate_confirm_n_label']          = 'Hayır';
$lang['deactivate_submit_btn']               = 'Gönder';
$lang['deactivate_validation_confirm_label'] = 'Onaylama';
$lang['deactivate_validation_user_id_label'] = 'Kullanıcı ID';

// Create User
$lang['create_user_heading']                           = 'Kullanıcı Oluştur';
$lang['create_user_subheading']                        = 'Kullanıcı bilgilerini giriniz.';
$lang['create_user_fname_label']                       = 'Adı';
$lang['create_user_lname_label']                       = 'Soyadı';
$lang['create_user_company_label']                     = 'Şirket Adı';
$lang['create_user_email_label']                       = 'E-posta';
$lang['create_user_phone_label']                       = 'Telefon';
$lang['create_user_password_label']                    = 'Şifre';
$lang['create_user_password_confirm_label']            = 'Şifre tekrar';
$lang['create_user_submit_btn']                        = 'Kullanıcı Oluştur';
$lang['create_user_validation_fname_label']            = 'Adı';
$lang['create_user_validation_lname_label']            = 'Soyadı';
$lang['create_user_validation_email_label']            = 'E-posta Adresi';
$lang['create_user_validation_phone1_label']           = 'Alan Kodu';
$lang['create_user_validation_phone2_label']           = 'Numarası';
$lang['create_user_validation_phone3_label']           = 'Dahili';
$lang['create_user_validation_company_label']          = 'Firma';
$lang['create_user_validation_password_label']         = 'Şifre';
$lang['create_user_validation_password_confirm_label'] = 'Şifre Tekrar';

// Edit User
$lang['edit_user_heading']                           = 'Kullanıcı Düzenleme';
$lang['edit_user_subheading']                        = 'Kullanıcı bilgilerini giriniz.';
$lang['edit_user_fname_label']                       = 'Adı';
$lang['edit_user_lname_label']                       = 'Soyadı';
$lang['edit_user_company_label']                     = 'Şirket Adı';
$lang['edit_user_email_label']                       = 'E-posta';
$lang['edit_user_phone_label']                       = 'Telefon';
$lang['edit_user_password_label']                    = 'Şifre (değiştirmek istiyorsanız)';
$lang['edit_user_password_confirm_label']            = 'Şifre tekrar (değiştirmek istiyorsanız)';
$lang['edit_user_groups_heading']                    = 'Üye grupları';
$lang['edit_user_submit_btn']                        = 'Kullanıcıyı Kaydet';
$lang['edit_user_validation_fname_label']            = 'Adı';
$lang['edit_user_validation_lname_label']            = 'Soyadı';
$lang['edit_user_validation_email_label']            = 'E-posta Adresi';
$lang['edit_user_validation_phone1_label']           = 'Alan Kodu';
$lang['edit_user_validation_phone2_label']           = 'Numarası';
$lang['edit_user_validation_phone3_label']           = 'Dahili';
$lang['edit_user_validation_company_label']          = 'Şirket Adı';
$lang['edit_user_validation_groups_label']           = 'Gruplar';
$lang['edit_user_validation_password_label']         = 'Şifre';
$lang['edit_user_validation_password_confirm_label'] = 'Şifre tekrar';

// Create Group
$lang['create_group_title']                  = 'Grup Oluştur';
$lang['create_group_heading']                = 'Grup Oluştur';
$lang['create_group_subheading']             = 'Grup bilgilerini giriniz.';
$lang['create_group_name_label']             = 'Grup Adı';
$lang['create_group_desc_label']             = 'Açıklama';
$lang['create_group_submit_btn']             = 'Grup Oluştur';
$lang['create_group_validation_name_label']  = 'Grup Adı';
$lang['create_group_validation_desc_label']  = 'Açıklama';

// Edit Group
$lang['edit_group_title']                  = 'Grup Düzenleme';
$lang['edit_group_saved']                  = 'Grup Kaydet';
$lang['edit_group_heading']                = 'Grup Düzenleme';
$lang['edit_group_subheading']             = 'Grup bilgilerini giriniz.';
$lang['edit_group_name_label']             = 'Grup Adı';
$lang['edit_group_desc_label']             = 'Açıklama';
$lang['edit_group_submit_btn']             = 'Grup Kaydet';
$lang['edit_group_validation_name_label']  = 'Grup Adı';
$lang['edit_group_validation_desc_label']  = 'Açıklama';

// Change Password
$lang['change_password_heading']                               = 'Şifre Değiştir';
$lang['change_password_old_password_label']                    = 'Eski Şifre';
$lang['change_password_new_password_label']                    = 'Yeni Şifre (%s karakterden uzun olmalıdır)';
$lang['change_password_new_password_confirm_label']            = 'Yeni Şifre Tekrar';
$lang['change_password_submit_btn']                            = 'Değiştir';
$lang['change_password_validation_old_password_label']         = 'Eski Şifre';
$lang['change_password_validation_new_password_label']         = 'Yeni Şifre';
$lang['change_password_validation_new_password_confirm_label'] = 'Yeni Şifre Tekrar';

// Forgot Password
$lang['forgot_password_heading']                 = 'Şifremi Unuttum';
$lang['forgot_password_subheading']              = 'Lütfen şifrenizi sıfırlamak için e-posta adresinizi yazınız %s.';
$lang['forgot_password_email_label']             = '%s';
$lang['forgot_password_submit_btn']              = 'Gönder';
$lang['forgot_password_validation_email_label']  = 'E-posta Adresiniz';
$lang['forgot_password_username_identity_label'] = 'Kullanıcı Adı';
$lang['forgot_password_email_identity_label']    = 'Eposta';
$lang['forgot_password_email_not_found']         = 'Bu e-posta adresi ile kayıt bulunamadı.';

// Reset Password
$lang['reset_password_heading']                               = 'Şifreyi Değiştir';
$lang['reset_password_new_password_label']                    = 'Yeni şifre (Şifreniz en az %s karakter olmalıdır)';
$lang['reset_password_new_password_confirm_label']            = 'Yeni Şifre tekrar';
$lang['reset_password_submit_btn']                            = 'Değiştir';
$lang['reset_password_validation_new_password_label']         = 'Yeni Şifre';
$lang['reset_password_validation_new_password_confirm_label'] = 'Yeni Şifre Tekrar';
