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
	
	1.0 - Funções do Script NPC.
		
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