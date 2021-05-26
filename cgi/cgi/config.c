// includes
#include "config.h"
#include "parsing.h"

// fonction principale
int main(void){

	struct s_parametres* param; // structure contenant les parametres parses envoyes par le formulaires HTML

	// creation d'une structure vide pour contenir les parametres
	// TODO

	printf("Content-Type: text/plain \n\n");
	printf("CGI C Capteur Configuration \n\n");

	// lecture des donnees du formulaire
	// parse_formulaire(param);

	// affichage des donnees du formulaire
	// TODO

	// traitement des donnees du formulaire
	// TODO

	return EXIT_SUCCESS;
}

void afficher_parametres(struct s_parametres* param){
	// TODO
}

float generer_valeur_aleatoire(float v_min, float v_max){
	// TODO
	return 0.0;
}

/*
void commande_objet(char code_maison, int numero_objet, bool etat){
	// PAS DE BEAGLEBONE CETTE ANNEE
	// CETTE FONCTION N'EST PAS A CODER CETTE ANNEE
}
*/

void traiter_parametres(struct s_parametres* param){
	// TODO
}
