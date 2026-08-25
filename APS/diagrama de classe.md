<h1>Diagrama de Classes UML — Sistema Integrado de Gestão Hospitalar</h1>
atividade do dia15/08/2026

<h2>Objetivo do Documento</h2>
<p>Esterelatório documenta e justifica a lógica de modelagem do Diagrama de Classes UML do Sistema
Integrado de Gestão Hospitalar exatamente como construído no Astah, reproduzindo os nomes de classe,
atributos, métodos, interface, enumerações e relacionamentos definidos no projeto final entregue.</p>

<h2> Diagrama de Classes</h2>
<p>Afigura a seguir reproduz o diagrama construído no Astah, Convenção de notação: losango preenchido = composição; losango vazio = agregação; triângulo
vazio (linha cheia) = generalização/herança; triângulo vazio (linha tracejada) = realização de interface; linha
tracejada fina até o ponto médio de uma associação = classe de associação; linha tracejada com seta =
dependência de tipo (uso de enumeração); linha simples = associação.</p>

<h3>Imagem do diagrma de classe do hospital</h3>


<img width="1069" height="644" alt="Captura de tela 2026-08-20 213742" src="https://github.com/user-attachments/assets/10d5eaa4-d692-4732-9670-46389e481711" />

<h1>Lógica da Modelagem</h1>
<h3>4.1 Generalização de pessoa</h3>
A classe pessoa concentra os dados comuns a qualquer cadastro (cpf, nome, dataNascimento, sexo,
endereco, telefone) e os métodos de manutenção de cadastro (cadastrar, atualizar, excluir). As classes
paciente, medico e funcionarioAdministrativo herdam de pessoa e acrescentam os atributos e
comportamentos específicos de cada papel exigidos pelo enunciado (prontuário/tipo sanguíneo/alergias
no paciente; CRM/especialidade/situação no médico; matrícula/cargo/departamento no funcionário).

<h3>4.2 Interface ipagavel</h3>
A classe cobranca implementa a interface ipagavel, que define o contrato pagar(): void. A escolha de
isolar essa capacidade em uma interface, em vez de um método comum da classe, permite que outras
formas de cobrança futuras (por exemplo, taxas avulsas) também possam implementar o mesmo
contrato de pagamento sem precisar herdar de cobranca.

<h3>4.3 Composições</h3>

paciente–internacao: a internação pertence exclusivamente a um paciente e não existe de forma
independente dele.

cobranca–pagamento: os lançamentos de pagamento existem apenas no contexto de uma cobrança
específica, permitindo inclusive múltiplos pagamentos parciais para a mesma cobrança.

<h3>4.4 Agregações</h3>
Foram modeladas três agregações, todas partindo de internacao — o que faz sentido, já que a internação é
o contexto que reúne, sem ser dono exclusivo, vários eventos que também existem fora dela:
 internacao–exame: os exames realizados durante a internação estão agregados a ela, mas a classe
exame tem existência própria e independente (também é solicitada em consultas fora de internação).

internacao–consulta: da mesma forma, uma internação agrega as consultas realizadas durante o
período de internação, mas a consulta também existe de forma independente para pacientes não
internados — por isso é agregação, e não composição.

internacao–solicitacaoExame: as solicitações de exame feitas durante a internação também são
agregadas a ela pelo mesmo motivo: solicitacaoExame é, por si só, o vínculo entre consulta e exame,
e continua existindo em atendimentos que não envolvem internação.

<h3>4.5 Enumerações</h3>
Foram criadas quatro enumerações para representar domínios fechados de valores citados no
enunciado: statusConsulta (agendada, realizada, cancelada), sexo (masculino, feminino, outro),
situacaoMedico (ativo, afastado) e situacaoCobranca (pendente, parcial, paga).

<h3>4.6 Classes de associação: itemPrescricao e solicitacaoExame</h3>
Estas duas classes foram modeladas com a notação formal de classe de associação (linha tracejada
ligando a classe ao ponto médio da associação entre as duas classes principais), pois seus atributos
pertencem exclusivamente ao vínculo entre um par de objetos, e não a nenhuma das classes
isoladamente:

itemPrescricao é a classe de associação da relação prescricao–medicamento (1 — 0..
*): guarda
dosagem, frequência, duração do tratamento e observações de cada medicamento dentro de uma
prescrição específica. Um mesmo medicamento pode aparecer em várias prescrições, e cada
aparição tem seus próprios dados de uso.
solicitacaoExame é a classe de associação da relação consulta–exame (1 — 0..
*): guarda a data da
solicitação e observações de cada exame pedido em cada consulta. Uma consulta pode solicitar
vários exames, e um mesmo exame pode ser solicitado em consultas diferentes.

<h3>4.7 Faturamento e convênio</h3>
Cada cobranca está associada à consulta ou à internação que a originou, e pode gerar um ou mais
lançamentos de pagamento. O pagamento pode, opcionalmente, estar vinculado a um convenio,
refletindo a regra de que a cobrança pode ser paga pelo paciente, pelo convênio, ou parcialmente por
ambos.
