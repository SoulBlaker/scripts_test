                    ___________________                      
                   /   _____/\______   \                     
                   \_____  \  |    |  _/                     
                   /        \ |    |   \                     
                  /_______  / |______  /                     
                          \/         \/                      
                   [ Advanced Scripts ]                      
                                                        v1.2 
	----------------------------------------------------------
	-            Documentação Oficial do Sistema             -
	----------------------------------------------------------
	Autor: Romulo de Sousa Mangueira. (SoulBlaker)
	Repositório: https://github.com/SoulBlaker
	Repositório do Sistema: https://github.com/SoulBlaker/scripts_test/tree/master/DeathArena
	Contato: romulo_c4aos@hotmail.com (Não é para suporte)
	
	* Índice
		1.0 - Funções do Script NPC
			1.1 - Instalação do Script NPC
			1.2 - Configurações do Script NPC
			1.3 - Instalação do Banco de Dados
			1.4 - Instalação do Unreal Tournament PATCH
		2.0 - Ranking Web.
			1.1 - Instalação dos arquivos na web.
			1.2 - Configurações dos arquivos web.
			1.3 - Instalação do Banco de Dados.
		3.0 - Utilizando o sistema in-game
			1.1 - Acesso menu de administrador.
			1.2 - Gerenciando Grupos de restrições.
			1.3 - Gerenciando Regras ao Grupo de Restrições.
			1.4 - Gerenciando Arenas.
			1.6 - Gerenciando Rankings.
	----------------------------------------------------------
	
	1.0 - Funções do Script NPC
		
			Este npc tem a função de prover arenas de batalhas entre jogadores com personalizações administrativa.
			O administrador do servidor pode cadastrar 120 arenas distinta de um tipo (Arena de Jogadores vs Jogadores, 
		Clãns vs Clãns ou Grupos vs Grupos).
			Cada tipo suporta no total de 120 arenas (total: 360) arenas que podem
		ser cadastrada.
			Cada arena deve ser vinculada a um Grupo de Restrição e cada Grupo de restrição suporta 120 itens e 120 classes
		a ser restringida.
			Cada arena tem pessoalmente suas configurações de acesso como máximo de jogadores, minimo de base ou máximo de base,
		podendo ser ilimitada ou desabilitada.
			Este npc possui um Ranking distinto por tipos (Jogadores, Clãns ou Grupos) com filtragem por vitórias, derrotas ou
		proporcional de vitórias sobre derrotas, pode ser acessível via o comando '@daranking'.
			Este npc também possui um sistema de sons podendo ser desativado, baseado no Unreal Tournament.
			O administrador pode acessar o painel administrativo, se dirigindo até o npc ou utilizando o comando '@damanager'.
	
	1.1 - Instalação do Script NPC

		Para instalar o script em seu servidor, copie o arquivo 'npc/death_arena.txt' e cole na pasta 'npc' do seu emulador,
	abra o arquivo 'noc/scripts.conf' e coloque no final do arquivo 'npc: npc/death_arena.txt'.
	
	1.3 - Configurações do Script NPC
	
		Abra o arquivo 'npc/death_arena.txt' e siga com as seguintes configurações:
		
			Var: $@da_BasicSettings$
			Type: Array
			Desc: Responsável pelas configurações básicas do npc.
			Index:
					0 -> Nível de GM para acessar o painel de administração.
					1 -> Sistemas de eventos de avisos nas arenas.
							0: Desativado
							1: Habilitar mensagens globais no mapa avisando quando o jogador derrota outro.
							2: Habilitar sons do Unreal Trounament.
							3: Habilitar ambos.
					2 -> Habilitar janela de chat que será exibido em cima do npc. (Abre suporte a um chat no npc com no máximo de 20 jogadores)
					3 -> Mensagem a ser exibida na janela de chat (se a opção acima estiver habilitada) ou sobre referência ao npc.
					4 -> Nome do npc a ser exibido nas janelas de dialogo.
					5 -> Checar se um item na restrição seja carta, se ela está equipada em um equipamento. (Em planejamento ainda)
					6 -> Total de resultados a ser exibido por página no raking do NPC. (Máximo 120 resultados)
					7 -> Nível de GM para utilizar o comando @daranking, 0 é para todos os jogadores.
			