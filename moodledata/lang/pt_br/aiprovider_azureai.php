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
 * Strings for component 'aiprovider_azureai', language 'pt_br', version '4.5'.
 *
 * @package     aiprovider_azureai
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action_apiversion'] = 'Versão da API';
$string['action_deployment'] = 'ID de implantação';
$string['action_deployment_desc'] = 'O ID de implantação relacionado ao endpoint da API que o provedor usa para esta ação.';
$string['action_systeminstruction'] = 'Instrução do Sistema';
$string['action_systeminstruction_desc'] = 'Esta instrução é enviada ao modelo AI junto com o prompt do usuário. A edição desta instrução não é recomendada, a menos que seja absolutamente necessário.';
$string['apikey'] = 'Chave da API Azure AI';
$string['apikey_desc'] = 'Insira a chave da API Azure AI';
$string['deployment'] = 'Nome de implementação da API Azure AI';
$string['deployment_desc'] = 'Insira o nome da implantação da API do Azure AI.';
$string['enableglobalratelimit'] = 'Definir limite de taxa para todo o site';
$string['enableglobalratelimit_desc'] = 'Limitar o número de solicitações que o provedor da API Azure AI pode receber em todo o site a cada hora.';
$string['enableuserratelimit'] = 'Definir limite de taxa do usuário';
$string['enableuserratelimit_desc'] = 'Limitar o número de requisições que cada usuário pode fazer para a API Azure AI a cada hora.';
$string['endpoint'] = 'Endpoint da API Azure AI';
$string['endpoint_desc'] = 'Insira a URL do endpoint da API do Azure AI no seguinte formato: https://YOUR_RESOURCE_NAME.openai.azure.com';
$string['globalratelimit'] = 'Número máximo de solicitações em todo o site';
$string['globalratelimit_desc'] = 'O número de solicitações permitidas em todo o site por hora.';
$string['pluginname'] = 'Provedor de API de IA do Azure';
$string['privacy:metadata'] = 'O plugin do provedor de API Azure Ai não armazena dados pessoais.';
$string['privacy:metadata:aiprovider_azureai:externalpurpose'] = 'Esta informação é enviada para a API do Azure para que seja gerada uma resposta. As configurações da sua conta do Azure AI podem alterar a forma como a Microsoft armazena e retém esses dados. Nenhum dado do usuário é enviado explicitamente à Microsoft ou armazenado no Moodle LMS por este plugin.';
$string['privacy:metadata:aiprovider_azureai:model'] = 'O modelo usado para gerar a resposta.';
$string['privacy:metadata:aiprovider_azureai:numberimages'] = 'O número de imagens usadas na resposta. Quando gerou imagens.';
$string['privacy:metadata:aiprovider_azureai:prompttext'] = 'O usuário digitou o prompt de texto usado para gerar a resposta.';
$string['privacy:metadata:aiprovider_azureai:responseformat'] = 'O formato da resposta. Quando gerou imagens.';
$string['userratelimit'] = 'Número máximo de requisições por usuário';
$string['userratelimit_desc'] = 'Número máximo de requisições permitidas por hora, por usuário.';
