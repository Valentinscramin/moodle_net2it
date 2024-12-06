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
 * Strings for component 'aiprovider_openai', language 'pt_br', version '4.5'.
 *
 * @package     aiprovider_openai
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:generate_image:endpoint'] = 'Endpoint API';
$string['action:generate_image:model'] = 'Modelo IA';
$string['action:generate_image:model_desc'] = 'O modelo utilizado para gerar imagens a partir das solicitações do usuário.';
$string['action:generate_text:endpoint'] = 'Endpoint API';
$string['action:generate_text:model'] = 'Modelo IA';
$string['action:generate_text:model_desc'] = 'O modelo utilizado para gerar a resposta em texto.';
$string['action:generate_text:systeminstruction'] = 'Instrução do sistema';
$string['action:generate_text:systeminstruction_desc'] = 'Esta instrução é enviada ao modelo de IA junto com a solicitação do usuário. Editar essa instrução não é recomendado, a menos que seja absolutamente necessário.';
$string['action:summarise_text:endpoint'] = 'Ponto de extremidade da API';
$string['action:summarise_text:model'] = 'Modelo de IA';
$string['action:summarise_text:model_desc'] = 'O modelo utilizado para resumir o texto fornecido.';
$string['action:summarise_text:systeminstruction'] = 'Instrução do sistema';
$string['action:summarise_text:systeminstruction_desc'] = 'Esta instrução é enviada ao modelo de IA junto com a solicitação do usuário. Editar essa instrução não é recomendado, a menos que seja absolutamente necessário.';
$string['apikey'] = 'Chave da API do OpenAI';
$string['apikey_desc'] = 'Obtenha uma chave em suas <a href="https://platform.openai.com/account/api-keys" target="_blank">Chaves de API do OpenAI</a>.';
$string['enableglobalratelimit'] = 'Definir limite de taxa para todo o site';
$string['enableglobalratelimit_desc'] = 'Limite o número de solicitações que o provedor de API OpenAI pode receber em todo o site a cada hora.';
$string['enableuserratelimit'] = 'Definir limite de taxa para o usuário';
$string['enableuserratelimit_desc'] = 'Limite o número de solicitações que cada usuário pode fazer ao provedor de API OpenAI a cada hora.';
$string['globalratelimit'] = 'Número máximo de solicitações para o site';
$string['globalratelimit_desc'] = 'O número de solicitações permitidas no site por hora.';
$string['orgid'] = 'ID da organização OpenAI';
$string['orgid_desc'] = 'Obtenha seu ID de organização OpenAI em sua <a href="https://platform.openai.com/account/org-settings" target="_blank">conta OpenAI</a>.';
$string['pluginname'] = 'Provedor da API do OpenAI';
$string['privacy:metadata'] = 'O plugin do provedor da API do OpenAI não armazena nenhum dado pessoal.';
$string['privacy:metadata:aiprovider_openai:externalpurpose'] = 'Essas informações são enviadas para a API do OpenAI para que uma resposta seja gerada. As configurações da sua conta OpenAI podem alterar como o OpenAI armazena e retém esses dados. Nenhum dado do usuário é enviado explicitamente para o OpenAI ou armazenado no Moodle LMS por este plugin.';
$string['privacy:metadata:aiprovider_openai:model'] = 'O modelo usado para gerar a resposta.';
$string['privacy:metadata:aiprovider_openai:numberimages'] = 'O número de imagens usadas na resposta. Ao gerar imagens.';
$string['privacy:metadata:aiprovider_openai:prompttext'] = 'O prompt de texto inserido pelo usuário usado para gerar a resposta.';
$string['privacy:metadata:aiprovider_openai:responseformat'] = 'O formato da resposta. Ao gerar imagens.';
$string['userratelimit'] = 'Número máximo de requisições por usuário';
$string['userratelimit_desc'] = 'Número máximo de requisições permitidas por hora, por usuário.';
