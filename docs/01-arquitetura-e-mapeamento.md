# Arquitetura e Mapeamento do Projeto

## Visão da estrutura
O projeto é organizado como uma landing page estática com foco em apresentação comercial e conversão.

## Estrutura de pastas
- `index.html` — página principal
- `css/` — estilos globais e customizados
- `js/` — scripts de interação e animações
- `images/` — imagens da marca e do portfólio
- `fonts/` — fontes e assets tipográficos
- `admin/` — área administrativa local, se mantida para uso interno
- `docs/` — documentação viva do projeto

## Mapeamento da página principal
### 1. Navegação
- link para início
- link para sobre
- link para portfólio
- link para parceiros
- link para colaboradores
- link para contato

### 2. Hero / slider
- imagens destacadas;
- mensagens de posicionamento da marca;
- foco em valor, referência e atendimento.

### 3. Sobre nós
- apresentação da empresa;
- histórico e diferenciais;
- reforço da experiência e da credibilidade.

### 4. Portfólio
- exibição de projetos por categoria;
- modal com visualização maior da imagem;
- destaque para cozinhas, escritório, salas, banheiros, roupeiros e projetos customizados.

### 5. Parceiros
- reforço de rede comercial e credibilidade;
- imagens institucionais ou de relacionamento.

### 6. Colaboradores
- perfil da equipe e suas funções;
- reforço da especialização.

### 7. Contato
- endereço;
- telefone;
- WhatsApp;
- Instagram;
- Facebook;
- e-mail;
- horários de funcionamento.

## Observações de arquitetura
- O projeto depende fortemente de assets locais para manter consistência visual.
- O comportamento é baseado em Bootstrap e jQuery, com pouca lógica em JS.
- A navegação é simples e direta, priorizando rapidez e conversão.

## Regras de expansão
- novas seções só devem ser criadas quando houver necessidade comercial clara;
- a arquitetura atual deve ser preservada sempre que possível;
- qualquer alteração em navegação ou estrutura precisa ser registrada em documentação.
