<?php

class __Mustache_3b4bd58c542556478c9be96cde437f1f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('couses');
        $buffer .= $this->sectionB5d5dc38fd492be14681cc5928b963b2($context, $indent, $value);

        return $buffer;
    }

    private function sectionE9310845a93617a569eced83843ec4c2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'vvveb_home_access, local_kopere_dashboard';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'vvveb_home_access, local_kopere_dashboard';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB5d5dc38fd492be14681cc5928b963b2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '

    <div class="col-lg-3 col-md-4 col-6 mb-4">
        <a href="{{accesslink}}"
           class="d-block mb-1">
            <img src="{{{courseimage}}}"
                 class="img-fluid img-thumbnail">
        </a>

        <h6 data-v-course-name="">
            {{{fullname}}}
        </h6>

        <div class="hover-content">
            <div class="add-to-cart-btn">
                <a href="{{accesslink}}"
                    class="btn btn-primary w-100"
                    data-id="{{id}}">
                    {{#str}}vvveb_home_access, local_kopere_dashboard{{/str}}
                </a>
            </div>
        </div>
    </div>

';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <div class="col-lg-3 col-md-4 col-6 mb-4">
';
                $buffer .= $indent . '        <a href="';
                $value = $this->resolveValue($context->find('accesslink'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '           class="d-block mb-1">
';
                $buffer .= $indent . '            <img src="';
                $value = $this->resolveValue($context->find('courseimage'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                 class="img-fluid img-thumbnail">
';
                $buffer .= $indent . '        </a>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <h6 data-v-course-name="">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        </h6>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <div class="hover-content">
';
                $buffer .= $indent . '            <div class="add-to-cart-btn">
';
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('accesslink'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                    class="btn btn-primary w-100"
';
                $buffer .= $indent . '                    data-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    ';
                $value = $context->find('str');
                $buffer .= $this->sectionE9310845a93617a569eced83843ec4c2($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
