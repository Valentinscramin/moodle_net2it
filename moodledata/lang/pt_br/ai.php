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
 * Strings for component 'ai', language 'pt_br', version '4.5'.
 *
 * @package     ai
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptai'] = 'Aceitar e continuar';
$string['action'] = 'Ação';
$string['action_generate_image'] = 'Gerar imagem';
$string['action_generate_image_desc'] = 'Gera uma imagem com base em um prompt de texto.';
$string['action_generate_text'] = 'Gerar texto';
$string['action_generate_text_desc'] = 'Gera texto com base em um prompt de texto.';
$string['action_generate_text_instruction'] = 'Você receberá uma entrada de texto do usuário. Sua tarefa é gerar um texto com base na solicitação deles. Siga estas instruções importantes:
    1. Retorne o resumo apenas em texto simples.
    2. Não inclua nenhuma formatação markdown, saudações ou formalidades.';
$string['action_summarise_text'] = 'Resumir texto';
$string['action_summarise_text_desc'] = 'Resume o conteúdo textual em uma página de curso';
$string['action_summarise_text_instruction'] = 'Você receberá uma entrada de texto do usuário. Sua tarefa é resumir o texto fornecido. Siga estas diretrizes:
    1. Condensar: Resuma longas passagens em pontos-chave.
    2. Simplificar: Torne informações complexas mais fáceis de entender, especialmente para aprendizes.

Instruções Importantes:
    1. Retorne o resumo apenas em texto simples.
    2. Não inclua qualquer formatação em markdown, saudações ou clichês.
    3. Foque na clareza, concisão e acessibilidade.

Garanta que o resumo seja fácil de ler e transmita efetivamente os principais pontos do texto original.';
$string['action_translate_text'] = 'Traduzir texto';
$string['action_translate_text_desc'] = 'Traduz o texto fornecido de um idioma para outro.';
$string['actionsettingprovider'] = 'Configurações de ação {$a}';
$string['actionsettingprovider_desc'] = 'Essas configurações controlam como o {$a->providername} executa a ação {$a->actionname}.';
$string['ai'] = 'IA';
$string['aiplacements'] = 'Posicionamentos de IA';
$string['aiproviders'] = 'Provedores de IA';
$string['aiusagepolicy'] = 'Política de uso de IA';
$string['availableplacements'] = 'Escolha onde as ações de IA estão disponíveis';
$string['availableplacements_desc'] = 'Os posicionamentos definem como e onde as ações de IA podem ser usadas no seu site. Você pode escolher quais ações estão disponíveis em cada posicionamento através das configurações.';
$string['availableproviders'] = 'Gerencie os provedores de IA conectados ao seu LMS';
$string['availableproviders_desc'] = 'Os provedores de IA adicionam funcionalidades de IA ao seu site por meio de "ações", como resumo de texto ou geração de imagens.
Você pode gerenciar as ações de cada provedor em suas configurações.';
$string['contentwatermark'] = 'Gerado por IA';
$string['declineaipolicy'] = 'Recusar';
$string['manageaiplacements'] = 'Gerenciar posicionamentos de IA';
$string['manageaiproviders'] = 'Gerenciar provedores de IA';
$string['noproviders'] = 'Esta ação não está disponível. Nenhum <a href="{$a}">provedor</a> está configurado para esta ação';
$string['placement'] = 'Posicionamento';
$string['placementactionsettings'] = 'Ações';
$string['placementactionsettings_desc'] = 'As ações de IA disponíveis para este posicionamento.';
$string['placementsettings'] = 'Configurações específicas de posicionamento';
$string['placementsettings_desc'] = 'Essas configurações controlam vários aspectos deste posicionamento de IA.<br/>
Elas determinam como o posicionamento se conecta ao serviço de IA e as operações relacionadas.';
$string['privacy:metadata:ai_action_generate_image'] = 'Uma tabela que armazena as solicitações de geração de imagens feitas pelos usuários.';
$string['privacy:metadata:ai_action_generate_image:aspectratio'] = 'A proporção das imagens geradas.';
$string['privacy:metadata:ai_action_generate_image:numberimages'] = 'O número de imagens geradas.';
$string['privacy:metadata:ai_action_generate_image:prompt'] = 'O prompt para o pedido de geração de imagem.';
$string['privacy:metadata:ai_action_generate_image:quality'] = 'A qualidade das imagens geradas.';
$string['privacy:metadata:ai_action_generate_image:revisedprompt'] = 'O prompt revisado das imagens geradas.';
$string['privacy:metadata:ai_action_generate_image:sourceurl'] = 'A URL de origem das imagens geradas.';
$string['privacy:metadata:ai_action_generate_image:style'] = 'O estilo das imagens geradas.';
$string['privacy:metadata:ai_action_generate_text'] = 'Uma tabela que armazena as solicitações de geração de texto feitas pelos usuários.';
$string['privacy:metadata:ai_action_generate_text:completiontoken'] = 'Os tokens de conclusão usados para gerar o texto.';
$string['privacy:metadata:ai_action_generate_text:fingerprint'] = 'O hash único representando o estado/versão do modelo e conteúdo.';
$string['privacy:metadata:ai_action_generate_text:generatedcontent'] = 'O texto real gerado pelo modelo de IA com base no prompt de entrada.';
$string['privacy:metadata:ai_action_generate_text:prompt'] = 'O prompt para o pedido de geração de texto.';
$string['privacy:metadata:ai_action_generate_text:prompttokens'] = 'Os tokens de prompt usados para gerar o texto.';
$string['privacy:metadata:ai_action_generate_text:responseid'] = 'O ID da resposta.';
$string['privacy:metadata:ai_action_register'] = 'Uma tabela armazenando os pedidos de ação feitos pelos usuários.';
$string['privacy:metadata:ai_action_register:actionid'] = 'O ID do pedido de ação.';
$string['privacy:metadata:ai_action_register:actionname'] = 'O nome da ação da solicitação.';
$string['privacy:metadata:ai_action_register:provider'] = 'O nome do provedor que processou a solicitação.';
$string['privacy:metadata:ai_action_register:success'] = 'O estado da solicitação de ação.';
$string['privacy:metadata:ai_action_register:timecompleted'] = 'O horário de conclusão da solicitação.';
$string['privacy:metadata:ai_action_register:timecreated'] = 'O horário de criação da solicitação.';
$string['privacy:metadata:ai_action_register:userid'] = 'O ID do usuário que fez a solicitação.';
$string['privacy:metadata:ai_action_summarise_text'] = 'Uma tabela que armazena as solicitações de resumo de texto feitas pelos usuários.';
$string['privacy:metadata:ai_action_summarise_text:completiontoken'] = 'Os tokens de conclusão usados para resumir o texto.';
$string['privacy:metadata:ai_action_summarise_text:fingerprint'] = 'O hash único que representa o estado/versão do modelo e do conteúdo.';
$string['privacy:metadata:ai_action_summarise_text:generatedcontent'] = 'O texto real gerado pelo modelo de IA com base no prompt de entrada.';
$string['privacy:metadata:ai_action_summarise_text:prompt'] = 'O prompt para a solicitação de resumo de texto.';
$string['privacy:metadata:ai_action_summarise_text:prompttokens'] = 'Os tokens do prompt usados para resumir o texto.';
$string['privacy:metadata:ai_action_summarise_text:responseid'] = 'O ID da resposta.';
$string['privacy:metadata:ai_policy_register'] = 'Uma tabela que armazena o status de aceitação da política de IA para cada usuário.';
$string['privacy:metadata:ai_policy_register:contextid'] = 'O ID do contexto cujos dados foram salvos.';
$string['privacy:metadata:ai_policy_register:timeaccepted'] = 'O momento em que o usuário aceitou a política de IA.';
$string['privacy:metadata:ai_policy_register:userid'] = 'O ID do usuário cujos dados foram salvos.';
$string['provider'] = 'Provedor';
$string['provideractionsettings'] = 'Ações do provedor';
$string['provideractionsettings_desc'] = 'Escolha e configure as ações que o {$a} pode executar no seu site.';
$string['providers'] = 'Provedores';
$string['providersettings'] = 'Configurações';
$string['userpolicy'] = '<b>Bem-vindo ao novo recurso de IA!</b>
<br>
Este recurso de Inteligência Artificial (IA) é baseado exclusivamente em Modelos de Linguagem de Grande Escala (LLM) externos para melhorar sua experiência de aprendizado e ensino. Antes de começar a usar esses serviços de IA, leia esta política de uso.
<br><br>
<b>Precisão do conteúdo gerado por IA</b>
<br>
A IA pode fornecer sugestões e informações úteis, mas sua precisão pode variar. Você deve sempre verificar as informações fornecidas para garantir que elas são precisas, completas e adequadas para sua situação específica.
<br><br>
<b>Como seus dados são processados</b>
<br>
Este recurso de IA utiliza Modelos de Linguagem de Grande Escala (LLM) externos. Se você usar este recurso, qualquer informação ou dado pessoal compartilhado será tratado de acordo com a política de privacidade desses LLMs. Recomendamos que você leia a política de privacidade para entender como seus dados serão tratados.
Além disso, um registro de suas interações com os recursos de IA pode ser salvo neste site.
<br>
Se você tiver dúvidas sobre como seus dados são processados, consulte seus professores ou organização de ensino.
<br>
Ao continuar, você reconhece que compreende e concorda com esta política.';
