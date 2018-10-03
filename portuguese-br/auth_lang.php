<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Auth Lang - Portuguese BR
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
* Description:  Portuguese BR language file for Ion Auth example views
*
*/

// Errors
$lang['error_csrf'] = 'Este post de forma não passou nossas verificações de segurança.';

// Login
$lang['login_heading']         = 'Logar';
$lang['login_subheading']      = 'Faça o login com seu e-mail e senha abaixo.';
$lang['login_identity_label']  = 'E-mail';
$lang['login_password_label']  = 'Senha';
$lang['login_remember_label']  = 'Lembrar-me';
$lang['login_submit_btn']      = 'Logar';
$lang['login_forgot_password'] = 'Esqueceu sua senha?';

// Index
$lang['index_heading']           = 'Usuários';
$lang['index_subheading']        = 'Abaixo está uma lista dos usuários.';
$lang['index_fname_th']          = 'Primeiro nome';
$lang['index_lname_th']          = 'Último nome';
$lang['index_email_th']          = 'E-mail';
$lang['index_groups_th']         = 'Grupos';
$lang['index_status_th']         = 'Status';
$lang['index_action_th']         = 'Ação';
$lang['index_active_link']       = 'Ativo';
$lang['index_inactive_link']     = 'Inativo';
$lang['index_create_user_link']  = 'Criar um novo usuário';
$lang['index_create_group_link'] = 'Criar um novo grupo';

// Deactivate User
$lang['deactivate_heading']                  = 'Desativar usuário';
$lang['deactivate_subheading']               = 'Tem certeza de que você deseja desativar o usuário \'%s \'';
$lang['deactivate_confirm_y_label']          = 'Sim';
$lang['deactivate_confirm_n_label']          = 'Não';
$lang['deactivate_submit_btn']               = 'Enviar';
$lang['deactivate_validation_confirm_label'] = 'confirmação';
$lang['deactivate_validation_user_id_label'] = 'iD de usuário';

// Create User
$lang['create_user_heading']                           = 'Criar usuário';
$lang['create_user_subheading']                        = 'Por favor, insira as informações do usuário abaixo.';
$lang['create_user_fname_label']                       = 'Nome';
$lang['create_user_lname_label']                       = 'Sobrenome';
$lang['create_user_company_label']                     = 'Nome da empresa';
$lang['create_user_email_label']                       = 'E-mail';
$lang['create_user_phone_label']                       = 'Telefone';
$lang['create_user_password_label']                    = 'Senha';
$lang['create_user_password_confirm_label']            = 'Confirmar senha';
$lang['create_user_submit_btn']                        = 'Criar usuário';
$lang['create_user_validation_fname_label']            = 'Nome';
$lang['create_user_validation_lname_label']            = 'Sobrenome';
$lang['create_user_validation_email_label']            = 'Endereço de e-mail';
$lang['create_user_validation_phone1_label']           = 'Primeira parte do telefone';
$lang['create_user_validation_phone2_label']           = 'Segunda parte do telefone';
$lang['create_user_validation_phone3_label']           = 'Terceira parte do telefone';
$lang['create_user_validation_company_label']          = 'Nome da empresa';
$lang['create_user_validation_password_label']         = 'Senha';
$lang['create_user_validation_password_confirm_label'] = 'Confirmação de senha';

// Edit User
$lang['edit_user_heading']                           = 'Editar usuário';
$lang['edit_user_subheading']                        = 'Por favor, insira as informações do usuário abaixo.';
$lang['edit_user_fname_label']                       = 'Nome';
$lang['edit_user_lname_label']                       = 'Sobrenome';
$lang['edit_user_company_label']                     = 'Nome da empresa';
$lang['edit_user_email_label']                       = 'E-mail';
$lang['edit_user_phone_label']                       = 'Telefone';
$lang['edit_user_password_label']                    = 'Senha (se alterar senha)';
$lang['edit_user_password_confirm_label']            = 'Confirmar senha (se alterar senha)';
$lang['edit_user_groups_heading']                    = 'Membros de grupos';
$lang['edit_user_submit_btn']                        = 'Salvar usuário';
$lang['edit_user_validation_fname_label']            = 'Nome';
$lang['edit_user_validation_lname_label']            = 'Sobrenome';
$lang['edit_user_validation_email_label']            = 'Endereço de e-mail';
$lang['edit_user_validation_phone1_label']           = 'Primeira parte do telefone';
$lang['edit_user_validation_phone2_label']           = 'Segunda parte do telefone';
$lang['edit_user_validation_phone3_label']           = 'Terceira parte do telefone';
$lang['edit_user_validation_company_label']          = 'Nome da empresa';
$lang['edit_user_validation_groups_label']           = 'Grupos';
$lang['edit_user_validation_password_label']         = 'Senha';
$lang['edit_user_validation_password_confirm_label'] = 'Confirmação de senha';

// Create Group
$lang['create_group_title']                  = 'Criar grupo';
$lang['create_group_heading']                = 'Criar grupo';
$lang['create_group_subheading']             = 'Por favor, insira as informações do usuário abaixo.';
$lang['create_group_name_label']             = 'Nome do grupo';
$lang['create_group_desc_label']             = 'Descrição';
$lang['create_group_submit_btn']             = 'Criar grupo';
$lang['create_group_validation_name_label']  = 'Nome do grupo';
$lang['create_group_validation_desc_label']  = 'Descrição';

// Edit Group
$lang['edit_group_title']                  = 'Editar grupo';
$lang['edit_group_saved']                  = 'Nome do grupo';
$lang['edit_group_heading']                = 'Editar grupo';
$lang['edit_group_subheading']             = 'Por favor, insira as informações de grupo abaixo.';
$lang['edit_group_name_label']             = 'Nome do grupo';
$lang['edit_group_desc_label']             = 'Descrição';
$lang['edit_group_submit_btn']             = 'Salvar Grupo';
$lang['edit_group_validation_name_label']  = 'Nome do grupo';
$lang['edit_group_validation_desc_label']  = 'Descrição';

// Change Password
$lang['change_password_heading']                               = 'Alterar senha';
$lang['change_password_old_password_label']                    = 'Senha antiga';
$lang['change_password_new_password_label']                    = 'Nova senha (pelo menos %s caracteres)';
$lang['change_password_new_password_confirm_label']            = 'Confirmar senha';
$lang['change_password_submit_btn']                            = 'Alterar';
$lang['change_password_validation_old_password_label']         = 'Senha antiga';
$lang['change_password_validation_new_password_label']         = 'Nova senha';
$lang['change_password_validation_new_password_confirm_label'] = 'Confirmar nova senha';

// Forgot Password
$lang['forgot_password_heading']                 = 'Esqueceu sua senha';
$lang['forgot_password_subheading']              = 'Por favor, insira seu %s para que possamos lhe enviar um e-mail para redefinir sua senha.';
$lang['forgot_password_email_label']             = '%s';
$lang['forgot_password_submit_btn']              = 'Enviar';
$lang['forgot_password_validation_email_label']  = 'Endereço de e-mail';
$lang['forgot_password_username_identity_label'] = 'Usuário';
$lang['forgot_password_email_identity_label']    = 'E-mail';
$lang['forgot_password_email_not_found']         = 'Não há registro desse endereço de e-mail.';

// Reset Password
$lang['reset_password_heading']                               = 'Alterar senha';
$lang['reset_password_new_password_label']                    = 'Nova senha (pelo menos %s caracteres)';
$lang['reset_password_new_password_confirm_label']            = 'Confirmar senha';
$lang['reset_password_submit_btn']                            = 'Alterar';
$lang['reset_password_validation_new_password_label']         = 'Nova senha';
$lang['reset_password_validation_new_password_confirm_label'] = 'Confirmar senha';
