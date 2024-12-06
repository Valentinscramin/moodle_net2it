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
 * Strings for component 'certificatebeautiful', language 'pt_br', version '4.5'.
 *
 * @package     certificatebeautiful
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_new_model'] = 'Adicionar novo modelo';
$string['add_new_page'] = 'Adicionar uma nova página ao certificado';
$string['best'] = 'Melhor';
$string['certdate'] = 'Data';
$string['certificate-appreciation'] = 'Certificado de Apreciação';
$string['certificate-details'] = 'Detalhes do Certificado';
$string['certificate-elegant'] = 'Certificado Elegante';
$string['certificate-flat-modern'] = 'Certificado Moderno e Simples';
$string['certificate-golden'] = 'Certificado Dourado';
$string['certificate-gradient-golden-luxury'] = 'Certificado de Luxo Dourado com Gradiente';
$string['certificate-kids-animals'] = 'Para crianças com animais';
$string['certificate-kids-child-medical'] = 'Certificado médico infantil';
$string['certificate-kids-gradient-modern'] = 'Modelo de certificado moderno com gradiente';
$string['certificate-kids-hand-drawn'] = 'Certificado infantil desenhado à mão';
$string['certificate-kids-pastel'] = 'Certificado educacional pastel fofo';
$string['certificate-modern'] = 'Certificado Moderno';
$string['certificate-modern-2'] = 'Certificado Moderno 2';
$string['certificate-simple'] = 'Certificado Simples';
$string['certificate-vintage'] = 'Certificado Vintage';
$string['certificate_description'] = 'Descreva o certificado';
$string['certificate_description_help'] = 'Texto de descrição do certificado. Pode conter HTML simples como &amp;lt;b&amp;gt;, &amp;lt;i&amp;gt;, &amp;lt;u&amp;gt; e estilos de cor, mas tenha cuidado, pois o <a href="https://mpdf.github.io/" target="_blank">conversor de PDF possui limitações</a>.';
$string['certificatebeautiful-page_empty'] = 'Vazio';
$string['certificatebeautiful:addinstance'] = 'Adicionar instância';
$string['certificatebeautiful:view'] = 'Permitir que o usuário visualize o certificado Bonito';
$string['certificatebeautiful:viewreport'] = 'Visualizar relatórios do certificado Bonito';
$string['certpresented'] = 'Este certificado é orgulhosamente apresentado a';
$string['certsignature'] = 'Diretor';
$string['certtitle'] = 'Certificado';
$string['config_signature_color'] = 'Cor da linha de assinatura';
$string['config_signature_color_desc'] = 'Selecione a cor da linha de escrita para a assinatura.';
$string['config_signature_enable'] = 'Habilitar assinatura dinâmica';
$string['config_signature_enable_desc'] = 'Quando marcado, o Certificado Bonito criará uma assinatura personalizada com base na caligrafia escolhida, texto especificado e cor.';
$string['config_signature_heading'] = 'Configurações de Assinatura';
$string['config_signature_heading_desc'] = 'Neste ponto, você deve decidir se deseja criar uma assinatura personalizada a partir das {$a} caligrafias pré-carregadas. Suas opções incluem:';
$string['config_signature_text'] = 'Texto da Assinatura';
$string['config_signature_text_desc'] = 'Para habilitar a geração automática de assinaturas pelo Certificado Bonito, é necessário fornecer uma sequência de até 10 caracteres. Certifique-se de que a sequência não contenha espaços, números ou acentos. Vale notar que uma sequência composta por 5 a 7 caracteres resultará em uma assinatura visualmente agradável.';
$string['config_signature_typography'] = 'Estilo de Texto da Assinatura';
$string['config_signature_typography_desc'] = 'Por padrão, o Certificado Bonito gerará uma assinatura usando o seguinte texto e empregará esta caligrafia para personalizar o conteúdo.';
$string['course'] = 'Curso';
$string['course_certificates'] = 'Certificados de cursos';
$string['create_after_model'] = 'Salve primeiro o modelo antes de adicionar páginas ao certificado';
$string['create_at_certificate'] = 'Certificado para {$a}';
$string['create_model'] = 'Criar modelo';
$string['default-description'] = 'Este certificado certifica que o estudante <b>{$USER->fullname}</b> concluiu com sucesso o <b>{$course->fullname}</b> com distinção, consolidando um conjunto abrangente de conhecimentos e habilidades essenciais para se destacar em ambientes dinâmicos.';
$string['download_my_certificate'] = 'Baixar meu certificado';
$string['edit_page'] = 'Editar página do certificado';
$string['edit_page_instruction'] = '<p>O certificado é criado usando o <a target="_blank" href="https://github.com/GrapesJS/grapesjs">GrapesJS</a> como editor. O editor está configurado em <a target="_blank" href="https://github.com/GrapesJS/grapesjs/issues/1936">dragMode:"absolute"</a>, permitindo que você arraste e solte componentes dentro do editor. Após a edição, clique em "<strong>Testar PDF</strong>" para visualizar o resultado, e quando terminar, use o botão "<strong>Salvar Página do Certificado</strong>" para salvar o certificado gerado.</p><p>Devido às limitações do <a target="_blank" href="https://mpdf.github.io/">mPDF</a>, apenas elementos na raiz do certificado suportam posicionamento absoluto. Portanto, outros componentes dentro do DIV raiz estão restritos ao movimento para evitar inconsistências no PDF final. O mPDF suporta posicionamento absoluto apenas para elementos <code>&amp;lt;div&amp;gt;</code>, então ao usar Código Personalizado para inserir novos componentes, sempre comece com <code>&amp;lt;div&amp;gt;</code>.</p><p>Após o editor, você encontrará chaves que podem ser adicionadas ao certificado para personalização. Sobre o QRCode, note que a imagem <code>qr-code.svg</code> é substituída pelo QRCode gerado pelo plugin. Portanto, se você editar a imagem, a funcionalidade pode ser comprometida. Quanto à assinatura gerada pelo sistema, ela substituirá a imagem <code>signature.png</code> no projeto. Se você escolher uma imagem personalizada para o certificado, o plugin não fará a modificação automaticamente.</p>';
$string['edit_signature_certificate'] = 'Personalize sua assinatura do certificado aqui';
$string['edit_this_page'] = 'Editar esta página do certificado';
$string['from_certificates'] = 'Certificados do estudante {$a}';
$string['help_base_title'] = 'Chaves disponíveis para substituição no certificado:';
$string['help_certificate_issue__name'] = 'Dados do certificado';
$string['help_certificate_issue_code'] = 'Código único do certificado.';
$string['help_certificate_issue_description'] = 'Descrição do certificado';
$string['help_certificate_issue_name'] = 'Nome do certificado';
$string['help_certificate_issue_timecreated'] = 'Data de criação do certificado.';
$string['help_certificate_issue_url'] = 'URL de validação do certificado';
$string['help_course__name'] = 'Dados do curso para o qual o certificado está sendo gerado';
$string['help_course_categories__name'] = 'Dados da categoria do curso para o qual o certificado está sendo gerado';
$string['help_course_categories_description'] = 'Descrição da categoria do curso.';
$string['help_course_categories_id'] = 'Identificador único da categoria do curso.';
$string['help_course_categories_idnumber'] = 'Número de identificação único da categoria do curso.';
$string['help_course_categories_name'] = 'Nome da categoria do curso.';
$string['help_course_categories_timemodified'] = 'Timestamp da última modificação na categoria do curso.';
$string['help_course_category'] = 'Identificador da categoria à qual o curso pertence.';
$string['help_course_enddate'] = 'Data de término do curso.';
$string['help_course_fullname'] = 'Nome completo do curso.';
$string['help_course_id'] = 'Identificador único para cada curso.';
$string['help_course_lang'] = 'Idioma do curso.';
$string['help_course_shortname'] = 'Nome curto ou código único para o curso.';
$string['help_course_startdate'] = 'Data de início do curso.';
$string['help_course_summary'] = 'Resumo ou descrição breve do curso.';
$string['help_enrolments__name'] = 'Dados da inscrição do estudante no curso';
$string['help_enrolments_timestart'] = 'Data de inscrição do usuário';
$string['help_functions__name'] = 'Executar funções das seguintes funções nativas do Moodle e PHP';
$string['help_functions_date'] = 'Função PHP <a href="https://php.net/date" target="_blank">date()</a>';
$string['help_functions_time'] = 'Função PHP <a href="https://php.net/time" target="_blank">time()</a>';
$string['help_functions_userdate'] = 'Função Moodle <a href="https://moodledev.io/docs/apis/subsystems/time" target="_blank">userdate()</a>';
$string['help_grade__name'] = 'Nota do estudante no curso';
$string['help_grade_finalgrade'] = 'Nota final do estudante';
$string['help_grade_table'] = 'Tabela com as notas do estudante';
$string['help_site__name'] = 'Dados da instância Moodle para a qual o certificado está sendo gerado';
$string['help_site_fullname'] = 'Nome completo do Moodle.';
$string['help_site_shortname'] = 'Nome curto do Moodle.';
$string['help_site_summary'] = 'Resumo ou descrição breve do Moodle.';
$string['help_teachers__name'] = 'Professores do curso';
$string['help_teachers_teacher1'] = 'Apenas o primeiro professor';
$string['help_teachers_teacher2'] = 'Apenas os dois primeiros professores';
$string['help_teachers_teacherall'] = 'Todos os professores';
$string['help_user__name'] = 'Dados do usuário';
$string['help_user_address'] = 'Endereço do usuário.';
$string['help_user_alternatename'] = 'Nome alternativo do usuário.';
$string['help_user_calendartype'] = 'Tipo de calendário preferido do usuário.';
$string['help_user_city'] = 'Cidade do usuário.';
$string['help_user_country'] = 'Código do país do usuário.';
$string['help_user_currentlogin'] = 'Timestamp do login atual do usuário.';
$string['help_user_department'] = 'Departamento do usuário.';
$string['help_user_description'] = 'Descrição do usuário.';
$string['help_user_email'] = 'Endereço de e-mail do usuário.';
$string['help_user_firstaccess'] = 'Timestamp do primeiro acesso do usuário.';
$string['help_user_firstname'] = 'Primeiro nome do usuário.';
$string['help_user_fullname'] = 'Nome completo do usuário, gerado pela função fullname().';
$string['help_user_id'] = 'Identificador único para cada usuário.';
$string['help_user_idnumber'] = 'Número de identificação do usuário.';
$string['help_user_institution'] = 'Instituição do usuário.';
$string['help_user_lang'] = 'Idioma preferido do usuário.';
$string['help_user_lastaccess'] = 'Timestamp do último acesso do usuário.';
$string['help_user_lastip'] = 'Endereço IP do último acesso do usuário.';
$string['help_user_lastlogin'] = 'Timestamp do último login do usuário.';
$string['help_user_lastname'] = 'Sobrenome do usuário.';
$string['help_user_middlename'] = 'Nome do meio do usuário.';
$string['help_user_phone1'] = 'Número de telefone principal do usuário.';
$string['help_user_phone2'] = 'Número de telefone secundário do usuário.';
$string['help_user_profile__name'] = 'Dados do perfil do usuário';
$string['help_user_timecreated'] = 'Timestamp da criação da conta do usuário.';
$string['help_user_timemodified'] = 'Timestamp da última modificação na conta do usuário.';
$string['help_user_timezone'] = 'Fuso horário preferido do usuário.';
$string['help_user_username'] = 'Nome de usuário.';
$string['list_model'] = 'Lista de modelos';
$string['manage_models'] = 'Gerenciar modelos de certificados';
$string['model_name'] = 'Nome do modelo';
$string['model_name_missing'] = 'O nome do modelo é obrigatório';
$string['model_page_name'] = 'Página: {$a}';
$string['modulename'] = 'Certificado bonito';
$string['modulenameplural'] = 'Certificados bonitos';
$string['my_certificates'] = 'Meus certificados';
$string['new_model'] = 'Novo modelo';
$string['pages_certificate'] = 'Páginas do certificado';
$string['pluginadministration'] = 'Administração de certificados do curso';
$string['pluginname'] = 'Certificado bonito';
$string['preview_certificate'] = 'Visualização do certificado';
$string['privacy:metadata:certificatebeautiful_issue'] = 'Informações sobre os certificados emitidos para os usuários.';
$string['privacy:metadata:certificatebeautiful_issue:userid'] = 'Armazena o ID do usuário que recebeu o certificado.';
$string['report'] = 'Visualizar certificados gerados';
$string['report_code'] = 'Código do certificado';
$string['report_confirm_delete_certificate'] = 'Tem certeza de que deseja excluir este certificado?';
$string['report_delete_certificate'] = 'Excluir';
$string['report_deleted_certificate'] = 'Certificado excluído com sucesso!';
$string['report_filename'] = 'Certificados gerados pelos estudantes';
$string['report_timecreated'] = 'Criado em';
$string['report_title'] = 'Relatório';
$string['report_useremail'] = 'E-mail do estudante';
$string['report_usernome'] = 'Nome do estudante';
$string['report_view_certificate'] = 'Visualizar';
$string['save_model'] = 'Salvar modelo';
$string['select_a_model'] = 'Selecionar um modelo';
$string['select_background_image'] = 'Selecione a nova imagem de fundo para o certificado';
$string['select_background_image_info'] = 'Por favor, substitua o fundo do certificado pela imagem abaixo. A imagem original possui dimensões de 1684×1190 pixels, o que corresponde a 21x29,7 centímetros, equivalente ao tamanho de uma página A4.<br>Certifique-se de que a imagem seja ajustada no certificado final mantendo essas proporções para evitar distorção ou pixelização.';
$string['select_background_preview'] = 'Alterar a imagem de fundo do certificado';
$string['select_model'] = 'Selecionar modelo';
$string['select_model_preview'] = 'Selecione um modelo pré-existente para atualizar o design desta página';
$string['select_the_model'] = 'Selecione o modelo';
$string['subtititle'] = 'De conclusão';
$string['sumary'] = 'Resumo';
$string['sumary-secound-page'] = 'Resumo do Certificado';
$string['using_this_page'] = 'Use esta página';
$string['validate_certificate_code'] = 'Código de autenticidade';
$string['validate_certificate_course'] = 'Curso do certificado';
$string['validate_certificate_date'] = 'Emitido na data de';
$string['validate_certificate_name'] = 'Nome do certificado';
$string['validate_certificate_notfound'] = 'Código de autenticidade não encontrado!';
$string['validate_certificate_submit'] = 'Validar código';
$string['validate_certificate_title'] = 'Verificar autenticidade do certificado';
$string['validate_certificate_user'] = 'Emitido para';
$string['view_my_certificate'] = 'Visualizar meu certificado em uma nova aba';
