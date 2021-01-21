#!/bin/bash

parameterName='id'

setTemplate="public function set${parameterName^}(\$$parameterName) : void { \$this->$parameterName = \$$parameterName; }"
getTemplate="public function get${parameterName^}() { return \$this->$parameterName; }"

template="\n$setTemplate\n$getTemplate"
echo -e $template

target='../dst/src/Member/Model/Member.php'

sed -i "18i $template" $target