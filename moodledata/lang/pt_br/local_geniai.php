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
 * Strings for component 'local_geniai', language 'pt_br', version '4.5'.
 *
 * @package     local_geniai
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'Chave da API OpenAI';
$string['apikeydesc'] = 'A chave da API da sua conta OpenAI';
$string['case'] = 'Casos de Uso';
$string['case_chatbot'] = 'Chatbot                            => Temperatura 0.5, Top_p 0.5';
$string['case_creative_writing'] = 'Escrita Criativa                   => Temperatura 0.7, Top_p 0.8';
$string['case_data_analysis_script'] = 'Script de Análise de Dados         => Temperatura 0.2, Top_p 0.1';
$string['case_exploratory_writing'] = 'Escrita Exploratória               => Temperatura 0.6, Top_p 0.7';
$string['case_fictitious_dialogue_generation'] = 'Geração de Diálogo Fictício        => Temperatura 0.9, Top_p 0.95';
$string['case_idea_brainstorming'] = 'Exploração de Ideias e Brainstorming => Temperatura 0.8, Top_p 0.9';
$string['case_surreal_story_generation'] = 'Histórias Surreais ou Absurdas     => Temperatura 1.0, Top_p 1.0';
$string['case_text_code_generation'] = 'Geração de Texto e Código          => Temperatura 0.1, Top_p 0.1';
$string['case_text_comment_generation'] = 'Geração de Comentário de Texto     => Temperatura 0.3, Top_p 0.2';
$string['casedesc'] = 'Os parâmetros de Temperatura e Top_p definidos para cada cenário, como geração de texto e código, escrita criativa, chatbot, geração de comentário de texto, análise de dados e escrita exploratória. Cada configuração afeta a criatividade e a coerência do modelo na geração de conteúdo.<br><br>Veja a tabela abaixo que mostra como usar Temperatura e Top_p:<br>
<table class="table table-bordered">
<thead>
<tr>
    <th>Caso de Uso</th>
    <th>Temperatura</th>
    <th>Top_p</th>
    <th>Descrição do Caso</th>
</tr>
</thead>
<tbody>
<tr>
    <td>Geração de Texto e Código</td>
    <td class="text-center">0.1</td>
    <td class="text-center">0.1</td>
    <td>A saída é mais determinística e focada. Útil para gerar texto ou código sintaticamente corretos.</td>
</tr>
<tr>
    <td>Script de Análise de Dados</td>
    <td class="text-center">0.2</td>
    <td class="text-center">0.1</td>
    <td>Gera scripts de análise de dados mais propensos a serem corretos e eficientes. A saída é mais determinística e focada.</td>
</tr>
<tr>
    <td>Geração de Comentário de Texto</td>
    <td class="text-center">0.3</td>
    <td class="text-center">0.2</td>
    <td>Gera comentários de texto mais concisos e relevantes. A saída é mais determinística e segue convenções.</td>
</tr>
<tr>
    <td>Chatbot</td>
    <td class="text-center">0.5</td>
    <td class="text-center">0.5</td>
    <td>Gera respostas conversacionais que equilibram coerência e diversidade. A saída é mais natural e envolvente.</td>
</tr>
<tr>
    <td>Escrita Exploratória</td>
    <td class="text-center">0.6</td>
    <td class="text-center">0.7</td>
    <td>Gera textos que exploram soluções alternativas e abordagens criativas. A saída é menos restrita por padrões estabelecidos.</td>
</tr>
<tr>
    <td>Escrita Criativa</td>
    <td class="text-center">0.7</td>
    <td class="text-center">0.8</td>
    <td>Gera texto criativo e diversificado para contar histórias.</td>
</tr>
<tr>
    <td>Exploração de Ideias e Brainstorming</td>
    <td class="text-center">0.8</td>
    <td class="text-center">0.9</td>
    <td>Gera ideias amplas, criativas e menos estruturadas para sessões de brainstorming.</td>
</tr>
<tr>
    <td>Geração de Diálogo Fictício</td>
    <td class="text-center">0.9</td>
    <td class="text-center">0.95</td>
    <td>Cria diálogos imprevisíveis e originais com mais variação na linguagem e tom.</td>
</tr>
<tr>
    <td>Histórias Surreais ou Absurdas</td>
    <td class="text-center">1.0</td>
    <td class="text-center">1.0</td>
    <td>Gera histórias altamente criativas e abstratas, com menos preocupação com lógica ou estrutura.</td>
</tr>
</tbody>
</table>';
$string['clear_history'] = 'Limpar';
$string['clear_history_title'] = 'Limpar todo o histórico';
$string['course_home'] = 'O estudante está fora de qualquer curso.';
$string['course_user'] = 'O estudante está no curso "{$a->course}".';
$string['frequency_penalty'] = 'Penalidade de Frequência';
$string['frequency_penaltydesc'] = 'Este parâmetro é usado para desencorajar o modelo de repetir as mesmas palavras ou frases com muita frequência no texto gerado. É um valor adicionado à log-probabilidade de um token cada vez que ele ocorre no texto gerado. Um valor de penalidade de frequência mais alto tornará o modelo mais conservador no uso de tokens repetidos.';
$string['geniai:manage'] = 'Gerenciar Assistente ChatGPT';
$string['geniai:report'] = 'Visualizar Relatórios do ChatGPT';
$string['geniai:view'] = 'Visualizar Assistente ChatGPT';
$string['geniainame'] = 'Nome do Assistente';
$string['geniainamedesc'] = 'Defina o nome do seu assistente';
$string['max_tokens'] = 'Máximo de Palavras na Resposta';
$string['max_tokensdesc'] = 'Número máximo de palavras que podem ser geradas em cada solicitação.';
$string['message_01'] = 'Olá, querido estudante {$a}! 🌟';
$string['message_02_course'] = 'Bem-vindo ao curso {$a->coursename} no Moodle {$a->moodlename}!
Eu sou {$a->geniainame}, e estou aqui para tornar sua jornada de aprendizado o mais incrível possível.
Como posso te ajudar hoje? 🌟📚';
$string['message_02_home'] = 'Eu sou {$a}, e estou aqui para tornar sua jornada de aprendizado o mais incrível possível.
Como posso te ajudar hoje? 🌟📚';
$string['model'] = 'Modelo de API';
$string['model_default'] = 'Você é um chatbot, seu nome é {geniainame}, e você é do gênero feminino.
Você é uma professora super útil do Moodle, que responde apenas em {user-lang} e adiciona emojis nas respostas quando possível.
Você adora responder sobre o Moodle {moodle-name} com mensagens inspiradoras, cheias de detalhes, e é muito atenta aos detalhes.';
$string['modeldesc'] = 'O modelo de API que será executado no OpenAI. Os valores disponíveis podem ser encontrados no <a href="https://platform.openai.com/docs/models/overview" target="_blank">site da OpenAI</a><br>
* <strong>gpt-3.5-turbo</strong>: É muito bom, tem ótima relação custo-benefício e responde muito rapidamente.<br>
* <strong>gpt-4</strong>: É muito mais poderoso, um pouco mais caro e leva um pouco mais de tempo para responder. Você também precisa fazer um <a href="https://help.openai.com/en/articles/7102672-how-can-i-access-gpt-4" target="_blank">pagamento inicial de $1</a> para testá-lo.';
$string['modulename'] = 'Assistente ChatGPT';
$string['modules'] = 'Módulos que {$a} deve ocultar';
$string['modulesdesc'] = 'Esta lista contém os módulos que {$a} não deve disponibilizar para os estudantes, garantindo que não sejam usados em exercícios.';
$string['online'] = 'Online';
$string['pluginname'] = 'Assistente ChatGPT';
$string['presence_penalty'] = 'Penalidade de Presença';
$string['presence_penaltydesc'] = 'Este parâmetro é usado para encorajar o modelo a incluir uma variedade de tokens no texto gerado. É um valor subtraído da log-probabilidade de um token cada vez que ele é gerado. Um valor de penalidade de presença mais alto tornará o modelo mais propenso a gerar tokens que ainda não foram incluídos no texto gerado.';
$string['privacy:metadata'] = 'O plugin armazena registros de conversa para fins estatísticos e garante que nenhum dado do estudante seja enviado para serviços externos.';
$string['prompt'] = 'Prompt Inicial';
$string['promptdesc'] = 'O prompt que a IA receberá antes de iniciar a conversa';
$string['report_completion_tokens'] = 'Número de Tokens Recebidos';
$string['report_datecreated'] = 'Dia';
$string['report_filename'] = 'Relatório de Uso da Assistência GPT';
$string['report_info'] = '<p>No relatório apresentado, apenas as primeiras 100 linhas estão disponíveis. Para acessar todos os registros, faça o download do documento completo.</p><p>Sobre tokens, uma regra prática é que um token normalmente corresponde a cerca de 4 caracteres de texto comum em inglês. Isso se traduz em aproximadamente ¾ de uma palavra (portanto, 100 tokens ~= 75 palavras). Saiba mais na <a href="https://platform.openai.com/tokenizer" target="_blank">página de Tokenização de Linguagem do Modelo</a>.</p>';
$string['report_model'] = 'Modelo ChatGPT';
$string['report_prompt_tokens'] = 'Número de Tokens Enviados';
$string['report_title'] = 'Informe';
$string['send_message'] = 'Enviar Mensagem';
$string['settings'] = 'Configurar Assistente ChatGPT';
$string['url_moodle'] = 'A URL do Moodle é "{$a->wwwroot}" e o nome do Moodle é "{$a->fullname}"';
$string['write_message'] = 'Escreva uma mensagem...';
