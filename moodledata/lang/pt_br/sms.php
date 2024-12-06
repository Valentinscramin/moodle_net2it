<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'sms', language 'pt_br', version '4.5'.
 *
 * @package     sms
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Ações';
$string['countrycode'] = 'Código de país padrão';
$string['countrycode_help'] = 'Código de país a ser adicionado aos números de telefone se os usuários não digitarem seu próprio código de país. Digite o número sem o símbolo "+".';
$string['createnewgateway'] = 'Criar novo gateway de SMS';
$string['delete_sms_gateway'] = 'Excluir gateway de SMS';
$string['delete_sms_gateway_confirmation'] = 'Isso excluirá o gateway de SMS {$a->gateway}.';
$string['edit_sms_gateway'] = 'Editar o gateway de SMS {$a->gateway}';
$string['gateway'] = 'Gateway';
$string['gateway_name'] = 'Nome do gateway';
$string['manage_sms_gateways'] = 'Gerenciar gateways de SMS';
$string['phonenumbernotvalid'] = 'Formato do número de telefone não reconhecido: {$a->message}';
$string['privacy:metadata:sms_messages'] = 'Armazena mensagens enviadas via SMS';
$string['privacy:metadata:sms_messages:content'] = 'O texto da mensagem';
$string['privacy:metadata:sms_messages:id'] = 'O ID da mensagem';
$string['privacy:metadata:sms_messages:recipient'] = 'O número de telefone para o qual a mensagem foi enviada';
$string['privacy:metadata:sms_messages:recipientuserid'] = 'O usuário para quem a mensagem foi enviada, se conhecido';
$string['privacy:metadata:sms_messages:status'] = 'O status da mensagem';
$string['privacy:metadata:sms_messages:timecreated'] = 'O momento em que a mensagem foi criada';
$string['privacy:sms:sensitive_not_shown'] = 'O conteúdo desta mensagem não foi armazenado, pois foi marcado como contendo conteúdo sensível.';
$string['select_sms_gateways'] = 'Provedor de gateway de SMS';
$string['sms'] = 'SMS';
$string['sms_gateway_delete_failed'] = 'Não é possível excluir o gateway de SMS {$a->gateway}. O gateway está em uso ou há um problema no banco de dados. Verifique se o gateway está ativo ou entre em contato com o administrador do banco de dados para obter ajuda.';
$string['sms_gateway_deleted'] = 'Gateway de SMS {$a->gateway} excluído';
$string['sms_gateway_disable_failed'] = 'Não é possível desativar o gateway de SMS. O gateway está em uso ou há um problema no banco de dados. Verifique se o gateway está ativo ou entre em contato com o administrador do banco de dados para obter ajuda.';
$string['sms_gateways'] = 'Gateways de SMS';
$string['sms_gateways_info'] = 'Crie e gerencie gateways de SMS para enviar mensagens de SMS do seu site.';
$string['status:gateway_failed'] = 'O gateway falhou ao enviar a mensagem';
$string['status:gateway_not_available'] = 'O gateway não está disponível para enviar a mensagem';
$string['status:gateway_queued'] = 'A mensagem está na fila para ser enviada pelo gateway';
$string['status:gateway_rejected'] = 'O gateway rejeitou a mensagem';
$string['status:gateway_sent'] = 'A mensagem foi enviada pelo gateway';
$string['status:message_over_size'] = 'A mensagem é muito grande para ser enviada pelo gateway';
$string['status:unknown'] = 'Não foi possível determinar o status da mensagem';
