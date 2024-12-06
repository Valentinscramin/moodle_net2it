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
 * Strings for component 'quiz_overview', language 'pt_br', version '4.5'.
 *
 * @package     quiz_overview
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allattempts'] = 'Mostrar todas as tentativas';
$string['allattemptscontributetograde'] = 'Todas as tentativas contribuem para a nota final do usuário.';
$string['allstudents'] = 'Mostrar todos os {$a}';
$string['attemptsonly'] = 'Mostrar apenas {$a} com tentativas';
$string['attemptsprepage'] = 'Tentativas mostradas por página';
$string['deleteselected'] = 'Excluir tentativas selecionadas';
$string['done'] = 'Terminado';
$string['err_failedtodeleteregrades'] = 'Falha ao excluir avaliação de tentativa calculada';
$string['err_failedtorecalculateattemptgrades'] = 'Falha ao reaclcular avaliação de tentativa';
$string['highlightinggraded'] = 'A tentativa considerada na nota final está evidenciada.';
$string['needed'] = 'Necessário';
$string['noattemptsonly'] = 'Mostrar apenas {$a} sem tentativas';
$string['noattemptstoregrade'] = 'Nenhuma tentativa necessita de reavaliação';
$string['nogradepermission'] = 'Você não tem permissão para classificar este questionário.';
$string['onlyoneattemptallowed'] = 'Cada usuário pode fazer apenas uma tentativa neste questionário.';
$string['optallattempts'] = 'todas as tentativas';
$string['optallstudents'] = 'todas as \'{$a}\'';
$string['optattemptsonly'] = 'apenas \'{$a}\' com tentativas';
$string['optnoattemptsonly'] = 'apenas \'{$a}\' sem tentativas';
$string['optonlyregradedattempts'] = 'que foram reavaliados / são marcados como necessitando de reavaliação';
$string['overview'] = 'Notas';
$string['overviewdownload'] = 'Baixar sinopse';
$string['overviewfilename'] = 'notas';
$string['overviewreport'] = 'Grades relatar';
$string['overviewreportgraph'] = 'Número de estudantes por intervalos de nota';
$string['overviewreportgraphgroup'] = 'Número de estudantes no grupo \'{$a}\' atingindo os níveis de avaliação';
$string['pagesize'] = 'Tamanho da página';
$string['pluginname'] = 'Notas';
$string['preferencespage'] = 'Preferências para esta página';
$string['preferencessave'] = 'Salvar preferências';
$string['preferencesuser'] = 'As suas preferências';
$string['privacy:metadata:preference:quiz_overview_slotmarks'] = 'Se deve mostrar pontuações no espaço de cada questão.';
$string['privacy:preference:slotmarks:no'] = 'As pontuações não são mostradas no espaço ao lado da questão.';
$string['privacy:preference:slotmarks:yes'] = 'As pontuações são mostradas no espaço ao lado da questão.';
$string['regrade'] = 'Reavaliar';
$string['regrade_allattempts'] = 'Todas as tentativas';
$string['regrade_allquestions'] = 'Todas as questões';
$string['regrade_attempts'] = 'Recalcular tentativas...';
$string['regrade_commitregrade'] = 'Confirmar reavaliação';
$string['regrade_dryrun'] = 'Execução de teste';
$string['regrade_help'] = 'Reavaliar recalcula a avaliação automatizada das tentativas, usando a versão atual de cada questão se possível. Uma execução de teste permite que você visualize as mudanças na nota sem afetar as tentativas.';
$string['regrade_link'] = 'Quiz_grades_report#Re-grading_attempts';
$string['regrade_regradeneedednotificationmessage'] = 'A última execução de teste de uma reavaliação descobriu que a reavaliação mudaria as notas de {$a->questions} questões em {$a->attempts} tentativas.';
$string['regrade_regradenow'] = 'Reavaliar agora';
$string['regrade_selectedattempts'] = 'Tentativas selecionadas';
$string['regrade_selectedquestions'] = 'Questões selecionadas';
$string['regradeall'] = 'Reavaliar tudo';
$string['regradealldry'] = 'Simular reavaliação completa';
$string['regradealldrydo'] = 'Reavaliação de tentativas marcadas como necessitando reavaliação ({$a})';
$string['regradealldrydogroup'] = 'Tentativas de reavaliação ({$a->countregradeneeded}) marcadas como necessitando reavaliação no grupo \'{$a->groupname}\'';
$string['regradealldrygroup'] = 'Simular reavaliação completa para o grupo \'{$a->groupname}\'';
$string['regradeallgroup'] = 'Reavaliação completa para grupo \'{$a->groupname}\'';
$string['regradecomplete'] = 'Reavaliação concluída';
$string['regradedsuccessfullyxofy'] = 'Reavaliado com sucesso ({$a->done}/{$a->count})';
$string['regradeheader'] = 'Reclassificação';
$string['regradeselected'] = 'Reavaliar tentativas selecionadas';
$string['regradingattemptissue'] = 'Intervalo {$a->slot}: {$a->reason}';
$string['regradingattemptxofy'] = 'Reavaliando tentativa ({$a->done} / {$a->count})';
$string['regradingattemptxofyproblem'] = 'As questões a seguir não puderam ser reavaliadas na tentativa {$a->attemptnum} por {$a->name} (id {$a->attemptid})';
$string['regradingattemptxofywithdetails'] = 'Reavaliando tentativa ({$a->done}/{$a->count}) - Tentativa {$a->attemptnum} de {$a->name} (id {$a->attemptid})';
$string['show'] = 'Mostrar / download';
$string['showattempts'] = 'Mostrar apenas / baixar tentativas';
$string['showdetailedmarks'] = 'Pontos para cada questão';
$string['showinggraded'] = 'Mostrando apenas a tentativa avaliada de cada usuário.';
$string['showinggradedandungraded'] = 'Mostrando todas as tentativas de cada usuário. A tentativa avaliada está evidenciada. O método de avaliação deste questionário é {$a}.';
$string['studentingroup'] = '\'{$a->coursestudent}\' no grupo \'{$a->groupname}\'';
$string['studentingrouplong'] = '\'{$a->coursestudent}\' neste grupo';
