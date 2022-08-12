#!/bin/bash
#############################################################
# Excluir o numero identificador do processo.
# @autor Wanderlei Silva do Carmo <wander.silva@gmail.com>
# @Version 1.0
#############################################################

# Esta linha de comando descobre qual o número identificador do processo (PID) e o "mata"
# retornando a mensagem de sucesso ou não
export PID=$(lsof -i  :7000|awk '{print $2}'|grep -v '^PID') 
kill -9 $PID  2> 'logs/err.log' \
        && echo "Processo $PID finalizado com sucesso" \
        ||echo "Erro ao tentar finalizar o processo $PID\nou processo inexistente."

