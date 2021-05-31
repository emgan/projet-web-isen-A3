// includes
#include "config.h"
#include "parsing.h"

// fonction principale
int main(void){

	//struct s_parametres* param; // structure contenant les parametres parses envoyes par le formulaires HTML

	// creation d'une structure vide pour contenir les parametres
	// DONE
	struct s_parametres* param = malloc(sizeof(struct s_parametres));



	printf("Content-Type: text/plain \n\n");
	printf("CGI C Capteur Configuration \n\n");

	// lecture des donnees du formulaire
	parse_formulaire(param);
	// affichage des donnees du formulaire
	// DONE
	afficher_parametres(param);
	// traitement des donnees du formulaire
	// TODO
	traiter_parametres(param);
	free(param);
	return EXIT_SUCCESS;
}

void afficher_parametres(struct s_parametres* param){
	//afficher les données du formulaires
	//DONE

	if(param->frm_type == 1){ //si on a un form de type GET
		printf("type de form: %d\n", param->frm_type);
		printf("il y a %d paramètres envoyés\n",param->nb_param );
		printf("capteur choisie: %s\n", param->choix_capteur);
		printf("valeur minimale: %f\n", param->val_min);
		printf("valeur maximale: %f\n", param->val_max);
		printf("unité choisie: %s\n", param->unite);
		printf("On/Off: %d\n", param->on_off);
		printf("le mot de passe envoyé est : %d\n",param->password );
	}
	else{ //sinon on a un from de type POST
		printf("type de form: %d\n", param->frm_type);
		printf("il y a %d paramètres envoyés\n",param->nb_param );
		printf("capteur choisie: %s\n", param->choix_capteur);
		printf("intensité de la lumière: %d\n", param->range_lum);
		printf("code maison: %c\n", param->code_maison);
		printf("On/Off: %d\n", param->on_off);
		printf("le mot de passe envoyé est : %d\n",param->password );
	}


}

float generer_valeur_aleatoire(float v_min, float v_max){
	// DONE
	float randNumber;
	srand(time(NULL));
	randNumber = rand()/(float)RAND_MAX;

	//printf("%f\n",v_min+randNumber*(v_max-v_min) );
	return v_min+randNumber*(v_max-v_min);
}

/*
void commande_objet(char code_maison, int numero_objet, bool etat){
	// PAS DE BEAGLEBONE CETTE ANNEE
	// CETTE FONCTION N'EST PAS A CODER CETTE ANNEE
}
*/

void traiter_parametres(struct s_parametres* param){
	// // TODO
	char* filename = (char*)malloc(40);
	FILE* pf = NULL;
	strcpy(filename, "../");
	strcat(filename, param->choix_capteur);
	strcat(filename, ".txt"); //on a notre chemin d'accès au fichier
	if(param->password != PASSWORD){
		printf("Votre mot de passe n'est pas le bon\n");
	}
	else{
		pf = fopen(filename, "w");
		printf("%s\n",filename );
		if (pf == NULL) {
			printf("erreur\n"); //s'il n'y a pas de fichier erreur
		}
		if (param->frm_type == 1 && param->on_off == 1) {
			float newVal = generer_valeur_aleatoire(param->val_min, param->val_max); //on génére un nombre aléatoire entre val_min et val_max
			float rounded = roundf(newVal*100)/100;
			fprintf(pf,"%.2f",rounded ); //sinon on écrit la valeur dans le fichier
		}
		else if (param->frm_type == 1 && param->on_off == 0) {
				fprintf(pf,"INACTIF"); //sinon on écrit la valeur dans le fichier
		}
		else if(param->frm_type == 2 && param->on_off == 1){
			fprintf(pf,"%d",param->range_lum ); //sinon on écrit la valeur dans le fichier
		}
		else if(param->frm_type ==2 && param->on_off == 0){
			fprintf(pf,"INACTIF"); //sinon on écrit la valeur dans le fichier
		}
		fclose(pf);
	}
	free(filename);
}
