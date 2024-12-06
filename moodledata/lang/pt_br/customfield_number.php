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
 * Strings for component 'customfield_number', language 'pt_br', version '4.5'.
 *
 * @package     customfield_number
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitytypes'] = 'Tipos de atividades';
$string['automaticallypopulated'] = 'Preenchido automaticamente';
$string['crontaskname'] = 'Preenchendo campos personalizados de número automático';
$string['decimalplaces'] = 'Casas decimais';
$string['defaultvalueconfigerror'] = 'Valor padrão deve estar entre o mínimo e o máximo';
$string['display'] = 'Modelo de exibição';
$string['display_help'] = 'Como exibir o valor do campo. Use os seguintes marcadores:

* **{value}** - exibir valor em um formato geral (float com casas decimais configuradas no campo)
* **R$ {value}** - preço em Reais
* **{value} hrs** - duração em horas';
$string['displayvalueconfigerror'] = 'O espaço reservado não é inválido';
$string['displaywhenzero'] = 'Exibir quando zero';
$string['displaywhenzero_help'] = 'Como exibir o valor do campo quando o valor for "0". Por exemplo, no caso de um preço, você pode exibir a palavra "Grátis", mas no caso da duração, talvez queira deixá-lo em branco, pois isso significa que a duração não foi estimada.

Deixe em branco se você não quiser exibir nada quando o valor for definido como "0".';
$string['fieldtype'] = 'Tipo de campo';
$string['fieldtype_help'] = 'Selecione o tipo de campo numérico a ser definido. Algumas opções exigem entrada manual na página de configurações do curso, enquanto outras preencherão automaticamente valores, como com o número de atividades especificadas em um curso.';
$string['genericfield'] = 'Campo genérico para qualquer dado numérico';
$string['headerdisplaysettings'] = 'Formato de exibição';
$string['invalidprovider'] = 'Provedor inválido';
$string['manualinput'] = 'Entrada manual';
$string['maximumvalue'] = 'Valor máximo';
$string['maximumvalueerror'] = 'Valor deve ser menor ou igual a {$a}';
$string['minimumvalue'] = 'Valor mínimo';
$string['minimumvalueconfigerror'] = 'Valor mínimo deve ser menor do que o máximo';
$string['minimumvalueerror'] = 'Valor deve ser maior ou igual a {$a}';
$string['missingrequired'] = 'Instância ou campo de ID ausente';
$string['nofactivities'] = 'Número de atividades no curso';
$string['pluginname'] = 'Número';
$string['privacy:metadata'] = 'O plugin de campo personalizado de número não armazena nenhuma informação pessoal';
$string['specificsettings'] = 'Configurações do campo numérico';
