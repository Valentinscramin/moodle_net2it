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
 * Strings for component 'portfolio_picasa', language 'pt_br', version '4.5'.
 *
 * @package     portfolio_picasa
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'ID do cliente';
$string['noauthtoken'] = 'Um token de autenticação não foi recebido do Google. Certifique-se que está permitindo que o Moodle acesse sua conta do Google';
$string['nooauthcredentials'] = 'Credenciais OAuth necessário.';
$string['nooauthcredentials_help'] = 'Para usar o plugin portfolio Picasa, você deve configurar credenciais OAuth nas configurações de carteira.';
$string['oauthinfo'] = '<p>Para usar este plugin, você deve registrar seu site no Google, conforme descrito na documentação <a href="{$a->docsurl}">Configuração do Google OAuth 2.0</a>.</p><p>Como parte do processo de registro, você precisará inserir a seguinte URL como "URI de redirecionamento autorizado":</p><p>{$a->callbackurl}</p><p>Depois de registrado, você receberá um ID e um segredo do cliente que podem ser usados para configurar todos os plugins do Google Drive e Picasa.</p>';
$string['pluginname'] = 'Picasa';
$string['privacy:metadata'] = 'Este plugin envia dados externamente para uma conta Picasa vinculada. Não armazena dados localmente.';
$string['privacy:metadata:data'] = 'Dados pessoais transmitidos do subsistema de portfólio.';
$string['secret'] = 'Segredo';
$string['sendfailed'] = 'Falha na transferência do arquivo {$a} para o Picasa';
