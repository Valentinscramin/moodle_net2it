<?php

class __Mustache_d14a100bf9578edf018ed310fee273a1 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="container-fluid">
';
        $buffer .= $indent . '    <div class="row my-5 defaultactivitycompletion-header">
';
        $buffer .= $indent . '        <div class="col">
';
        $buffer .= $indent . '            ';
        $value = $context->find('issite');
        $buffer .= $this->sectionE485fb6006eda27462e0d9928b50e221($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            ';
        $value = $context->find('issite');
        if (empty($value)) {
            
            $value = $context->find('str');
            $buffer .= $this->section78ebb28f426f51ec09feb41629ce55eb($context, $indent, $value);
        }
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="modules pt-3">
';
        $value = $context->find('modules');
        $buffer .= $this->sectionAfe90c408016db10c0808dd096fa7c6b($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionFc0b9a6c5324954f342363356c320a93(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'defaultactivitycompletionsite, core_completion';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'defaultactivitycompletionsite, core_completion';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE485fb6006eda27462e0d9928b50e221(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}}defaultactivitycompletionsite, core_completion{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('str');
                $buffer .= $this->sectionFc0b9a6c5324954f342363356c320a93($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section78ebb28f426f51ec09feb41629ce55eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'defaultactivitycompletioncourse, core_completion';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'defaultactivitycompletioncourse, core_completion';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7df0e231697f3a9dfdd1138e1b79a2b0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'collapsed';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'collapsed';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3d743337d1ee557b470226701b73da47(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'false';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'false';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4152a3985188512641ff1a0e2de6e03f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' expandcategory, core, {{formattedname}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' expandcategory, core, ';
                $value = $this->resolveValue($context->find('formattedname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8a8ae941fd79f459323bea8528b0311c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/collapsedchevron, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/collapsedchevron, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section99c846dfb5f618178bca670626f33c8b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/collapsedchevron_rtl, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/collapsedchevron_rtl, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF6ff6290743abd5ce23673441c1c0b0b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' collapsecategory, core, {{formattedname}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' collapsecategory, core, ';
                $value = $this->resolveValue($context->find('formattedname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEce766800de4730c5a948801df414738(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/expandedchevron, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/expandedchevron, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section34724155278c6ef4528ff276dcf3f0b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' collapsecategory, core, {{formatedname}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' collapsecategory, core, ';
                $value = $this->resolveValue($context->find('formatedname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEa014f6bc3ec2de9aeb7bc7aa001d01b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="defaultactivitycompletion-item d-flex"
                    id="activitycompletion-{{id}}"
                >
                    <a data-toggle="collapse"
                        href="#activitycompletioncollapse-{{id}}"
                        class="icons-collapse-expand {{#modulecollapsed}}collapsed{{/modulecollapsed}}"
                        aria-expanded="{{^modulecollapsed}}true{{/modulecollapsed}}{{#modulecollapsed}}false{{/modulecollapsed}}"
                        role="button"
                    >
                        <span class="collapsed-icon icon-no-margin me-1"
                            title="{{#str}} expandcategory, core, {{formattedname}} {{/str}}">
                            <span class="dir-rtl-hide">{{#pix}} t/collapsedchevron, core {{/pix}}</span>
                            <span class="dir-ltr-hide">{{#pix}} t/collapsedchevron_rtl, core {{/pix}}</span>
                            <span class="sr-only">{{#str}} expandcategory, core, {{formattedname}} {{/str}}</span>
                        </span>
                        <span class="expanded-icon icon-no-margin me-1"
                            title="{{#str}} collapsecategory, core, {{formattedname}} {{/str}}">
                            {{#pix}} t/expandedchevron, core {{/pix}}
                            <span class="sr-only">{{#str}} collapsecategory, core, {{formatedname}} {{/str}}</span>
                        </span>
                        <img class="activityicon ms-4" src="{{icon}}" alt="" aria-hidden="true">
                        <h2 class="activityname ms-3 mb-0">{{{formattedname}}}</h2>
                    </a>
                </div>
                <div id="activitycompletioncollapse-{{id}}"
                    class="defaultactivitycompletion-item-content collapse multi-collapse {{^modulecollapsed}}show{{/modulecollapsed}}"
                    aria-labelledby="activitycompletion-{{id}}" role="group"
                    data-region="activitycompletion-{{name}}"
                >
                    <hr class="row">
                    <div class="py-3">{{{formhtml}}}</div>
                </div>

                <hr class="row">
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="defaultactivitycompletion-item d-flex"
';
                $buffer .= $indent . '                    id="activitycompletion-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                >
';
                $buffer .= $indent . '                    <a data-toggle="collapse"
';
                $buffer .= $indent . '                        href="#activitycompletioncollapse-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                        class="icons-collapse-expand ';
                $value = $context->find('modulecollapsed');
                $buffer .= $this->section7df0e231697f3a9dfdd1138e1b79a2b0($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                        aria-expanded="';
                $value = $context->find('modulecollapsed');
                if (empty($value)) {
                    
                    $buffer .= 'true';
                }
                $value = $context->find('modulecollapsed');
                $buffer .= $this->section3d743337d1ee557b470226701b73da47($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                        role="button"
';
                $buffer .= $indent . '                    >
';
                $buffer .= $indent . '                        <span class="collapsed-icon icon-no-margin me-1"
';
                $buffer .= $indent . '                            title="';
                $value = $context->find('str');
                $buffer .= $this->section4152a3985188512641ff1a0e2de6e03f($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                            <span class="dir-rtl-hide">';
                $value = $context->find('pix');
                $buffer .= $this->section8a8ae941fd79f459323bea8528b0311c($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                            <span class="dir-ltr-hide">';
                $value = $context->find('pix');
                $buffer .= $this->section99c846dfb5f618178bca670626f33c8b($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                            <span class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->section4152a3985188512641ff1a0e2de6e03f($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                        </span>
';
                $buffer .= $indent . '                        <span class="expanded-icon icon-no-margin me-1"
';
                $buffer .= $indent . '                            title="';
                $value = $context->find('str');
                $buffer .= $this->sectionF6ff6290743abd5ce23673441c1c0b0b($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                            ';
                $value = $context->find('pix');
                $buffer .= $this->sectionEce766800de4730c5a948801df414738($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            <span class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->section34724155278c6ef4528ff276dcf3f0b3($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                        </span>
';
                $buffer .= $indent . '                        <img class="activityicon ms-4" src="';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="" aria-hidden="true">
';
                $buffer .= $indent . '                        <h2 class="activityname ms-3 mb-0">';
                $value = $this->resolveValue($context->find('formattedname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h2>
';
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div id="activitycompletioncollapse-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                    class="defaultactivitycompletion-item-content collapse multi-collapse ';
                $value = $context->find('modulecollapsed');
                if (empty($value)) {
                    
                    $buffer .= 'show';
                }
                $buffer .= '"
';
                $buffer .= $indent . '                    aria-labelledby="activitycompletion-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" role="group"
';
                $buffer .= $indent . '                    data-region="activitycompletion-';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                >
';
                $buffer .= $indent . '                    <hr class="row">
';
                $buffer .= $indent . '                    <div class="py-3">';
                $value = $this->resolveValue($context->find('formhtml'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                <hr class="row">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAfe90c408016db10c0808dd096fa7c6b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#canmanage}}
                <div class="defaultactivitycompletion-item d-flex"
                    id="activitycompletion-{{id}}"
                >
                    <a data-toggle="collapse"
                        href="#activitycompletioncollapse-{{id}}"
                        class="icons-collapse-expand {{#modulecollapsed}}collapsed{{/modulecollapsed}}"
                        aria-expanded="{{^modulecollapsed}}true{{/modulecollapsed}}{{#modulecollapsed}}false{{/modulecollapsed}}"
                        role="button"
                    >
                        <span class="collapsed-icon icon-no-margin me-1"
                            title="{{#str}} expandcategory, core, {{formattedname}} {{/str}}">
                            <span class="dir-rtl-hide">{{#pix}} t/collapsedchevron, core {{/pix}}</span>
                            <span class="dir-ltr-hide">{{#pix}} t/collapsedchevron_rtl, core {{/pix}}</span>
                            <span class="sr-only">{{#str}} expandcategory, core, {{formattedname}} {{/str}}</span>
                        </span>
                        <span class="expanded-icon icon-no-margin me-1"
                            title="{{#str}} collapsecategory, core, {{formattedname}} {{/str}}">
                            {{#pix}} t/expandedchevron, core {{/pix}}
                            <span class="sr-only">{{#str}} collapsecategory, core, {{formatedname}} {{/str}}</span>
                        </span>
                        <img class="activityicon ms-4" src="{{icon}}" alt="" aria-hidden="true">
                        <h2 class="activityname ms-3 mb-0">{{{formattedname}}}</h2>
                    </a>
                </div>
                <div id="activitycompletioncollapse-{{id}}"
                    class="defaultactivitycompletion-item-content collapse multi-collapse {{^modulecollapsed}}show{{/modulecollapsed}}"
                    aria-labelledby="activitycompletion-{{id}}" role="group"
                    data-region="activitycompletion-{{name}}"
                >
                    <hr class="row">
                    <div class="py-3">{{{formhtml}}}</div>
                </div>

                <hr class="row">
            {{/canmanage}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('canmanage');
                $buffer .= $this->sectionEa014f6bc3ec2de9aeb7bc7aa001d01b($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
