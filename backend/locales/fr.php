<?php

// Copyright (C) 2015-2019 Jacob Barkdull
// This file is part of HashOver.
//
// I, Jacob Barkdull, hereby release this work into the public domain.
// This applies worldwide. If this is not legally possible, I grant any
// entity the right to use this work for any purpose, without any
// conditions, unless such conditions are required by law.
//
// French fixed by Stéphane Mourey
//
// I, Stéphane Mourey, hereby release this work into the public domain.
// This applies worldwide. If this is not legally possible, I grant any
// entity the right to use this work for any purpose, without any
// conditions, unless such conditions are required by law.


// French text for forms, buttons, links, and tooltips
$locale = array (
	'comment-form'		=> 'Écrivez ici votre commentaire...',
	'reply-form'		=> 'Écrivez ici votre réponse...',
	'comment-formatting'	=> 'Formats',
	'accepted-format'	=> '%s accepté',
	'accepted-html'		=> '&lt;b&gt;, &lt;strong&gt;, &lt;u&gt;, &lt;i&gt;, &lt;em&gt;, &lt;s&gt;, &lt;big&gt;, &lt;small&gt;, &lt;sup&gt;, &lt;sub&gt;, &lt;pre&gt;, &lt;ul&gt;, &lt;ol&gt;, &lt;li&gt;, &lt;blockquote&gt;, &lt;code&gt; échappe le HTML, les URLs sont transformées en liens, et [img]URL ici[/img] fait apparaître une image externe.',
	'accepted-markdown'	=> '**Gras**, _souligné_, *italique*, ~~barré~~, `souligné`, ```code``` échappe au format HTML. HTML et Markdown peuvent être utilisés ensemble dans votre commentaire.',
	'post-button'		=> 'Publier ce commentaire',
	'login'			=> 'Identifiant',
	'login-tip'		=> 'Identifiant (optionnel)',
	'logout'		=> 'Déconnexion',
	'be-first-name'		=> 'Aucun commentaire pour l\'instant.',
	'pending-name'		=> 'En attente...',
	'deleted-name'		=> 'Supprimé...',
	'error-name'		=> 'Erreur...',
	'be-first-note'		=> 'Soyez le premier à commenter !',
	'login-required'	=> 'Vous devez être connecté pour commenter!',
	'pending-note'		=> 'Ce commentaire est en attente d\'approbation.',
	'deleted-note'		=> 'Ce commentaire a été supprimé.',
	'error-note'		=> 'Quelque chose a mal tourné. Impossible de récupérer ce commentaire.',
	'options'		=> 'Options',
	'cancel'		=> 'Annuler',
	'reply-to-comment'	=> 'Répondre au commentaire',
	'edit-your-comment'	=> 'Éditer votre commentaire',
	'optional'		=> 'Optionnel',
	'required'		=> 'Obligatoire',
	'name'			=> 'Nom',
	'name-tip'		=> 'Nom (%s)',
	'password'		=> 'Mot de passe',
	'password-tip'		=> 'Mot de passe (%s, vous permettra d\'éditer ou de supprimer ce commentaire)',
	'confirm-password'	=> 'Confirmer le mot de passe',
	'email'			=> 'Adresse E-mail',
	'email-tip'		=> 'Adresse E-mail (%s, pour les notifications e-mail)',
	'website'		=> array ('Site Internet', 'Sites Internet'),
	'website-tip'		=> 'Site Internet (%s)',
	'logged-in'		=> 'Vous vous êtes connecté avec succès !',
	'logged-out'		=> 'Vous vous êtes deconnecté avec succès !',
	'comment-needed'	=> 'Vous avez échoué à entrer un commentaire approprié. Veuillez réessayer.',
	'reply-needed'		=> 'Vous avez échoué à entrer une réponse appropriée. Veuillez réessayer.',
	'field-needed'		=> 'Le champ "%s" est obligatoire.',
	'post-fail'		=> 'Impossible de publier ce commentaire ! Vous n\'avez pas les permissions suffisantes.',
	'comment-deleted'	=> 'Commentaire supprimé !',
	'post-reply'		=> 'Publier cette réponse',
	'delete'		=> 'Supprimer',
	'permanently-delete'	=> 'Supprimer Définitivement',
	'subscribe'		=> 'Avertissez-moi des réponses',
	'subscribe-tip'		=> 'Souscrire aux notifications par e-mail',
	'edit-comment'		=> 'Éditer ce commentaire',
	'status'		=> 'Statut',
	'status-approved'	=> 'Approuvé',
	'status-pending'	=> 'En attente d\'approbation',
	'status-deleted'	=> 'Marqué supprimé',
	'save'			=> 'Enregistrer',
	'no-email-warning'	=> 'Vous ne recevrez pas de notifications en cas de réponse si vous ne fournissez pas d\'e-mail.',
	'invalid-email'		=> 'L\'adresse e-mail que vous avez entrée n\'est pas valide.',
	'delete-comment'	=> 'Confirmez-vous la suppression de ce commentaire ?',
	'post-comment-on'	=> array ('Poster un Commentaire', 'Poster un Commentaire sur "%s"'),
	'most-popular-comments'	=> array ('Commentaire le Plus Populaire', 'Commentaires les Plus Populaires'),
	'showing-comments'	=> array ('%d Commentaire Affiché', '%d Commentaires Affichés'),
	'count-link'		=> array ('%d Commentaire', '%d Commentaires'),
	'count-replies'		=> array ('%d compter réponse', '%d compter réponses'),
	'sort'			=> 'Trier',
	'sort-ascending'	=> 'Dans l\'ordre',
	'sort-descending'	=> 'Dans l\'ordre inverse',
	'sort-by-date'		=> 'La plus récente en premier',
	'sort-by-likes'		=> 'Par aiments',
	'sort-by-replies'	=> 'Par réponses',
	'sort-by-discussion'	=> 'Par discussion',
	'sort-by-popularity'	=> 'Par popularité',
	'sort-by-name'		=> 'Par commentateur',
	'sort-threads'		=> 'Fils',
	'thread'		=> 'En réponse à %s',
	'thread-tip'		=> 'Aller en haut de la discussion',
	'comments'		=> 'Commentaires',
	'replies'		=> 'Réponses',
	'edit'			=> 'Éditer',
	'reply'			=> 'Répondre',
	'like'			=> array ('J\'aime', 'Aiments'),
	'liked'			=> 'J\'aime',
	'unlike'		=> 'Défaire',
	'like-comment'		=> '\'J\'aime\' ce commentaire',
	'liked-comment'		=> 'Défaire \'J\'aime\'',
	'dislike'		=> array ('N\'aime pas', 'N\'aiment pas'),
	'disliked'		=> 'N\'aime pas',
	'dislike-comment'	=> 'Je n\'aime pas ce commentaire',
	'disliked-comment'	=> 'Vous n\'aimez pas ce commentaire',
	'commenter-tip'		=> 'Vous serez notifié par e-mail',
	'subscribed-tip'	=> 'sera notifié par e-mail',
	'unsubscribed-tip'	=> 'n\'a pas souscrit aux notifications',
	'show-other-comments'	=> array ('Afficher %d Autre Commentaire', 'Afficher %d Autres Commentaires'),
	'show-number-comments'	=> array ('Afficher %d Commentaire', 'Afficher %d Commentaires'),
	'date-time'		=> '%s \à %s',
	'date-years'		=> array ('Il y a %d an', 'Il y a %d ans'),
	'date-months'		=> array ('Il y a %d un mois', 'Il y a %d mois'),
	'date-days'		=> array ('Il y a %d jour', 'Il y a %d jours'),
	'date-today'		=> '%s aujourd\'hui',
	'date-day-names'	=> array ('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'),
	'date-month-names'	=> array ('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'),
	'untitled'		=> 'Sans titre',
	'external-image-tip'	=> 'Cliquez pour voir image externe',
	'loading'		=> 'Chargement...',
	'click-to-close'	=> 'Cliquez pour fermer',
	'hashover-comments'	=> 'HashOver Commentaires',
	'rss-feed'		=> 'Flux RSS',
	'source-code'		=> 'Source Code',
	'new-comment'		=> 'Nouveau commentaire',
	'from'			=> 'De %s',
	'comment'		=> 'Commentaire',
	'page'			=> 'Page',
	'sent-by'		=> 'Cet e-mail a été envoyé par %s via HashOver.',

	'source-code-sub'	=> 'HashOver visionneuse de code source côté serveur',
	'type'			=> 'Type',
	'path'			=> 'Chemin',
	'view-as'		=> 'Voir comme',
	'text'			=> 'Texte',
	'download'		=> 'Télécharger',

	'documentation'		=> 'Documentation',
	'coming-soon'		=> 'Prochainement',
	'example'		=> 'Exemple',
	'back'			=> 'Retour',
	'value'			=> 'Valeur',

	'successful-save'	=> 'Sauvegardé avec succès!',
	'failed-to-save'	=> 'Impossible d\'enregistrer! Vérifiez les autorisations.',
	'permissions-info'	=> 'Donne "%s" les permissions 0755 et la propriété à l\'utilisateur "%s".',

	'admin'			=> 'Admin',
	'moderation'		=> 'Modération',
	'block-ip-addresses'	=> 'Bloquer les adresses IP',
	'filter-url-queries'	=> 'Filtrer les requêtes URL',
	'check-for-updates'	=> 'Vérifier les mises à jour',
	'settings'		=> 'Paramètres',

	'admin-required'	=> 'Vous devez être connecté en tant qu\'admin',

	'blocklist-title'	=> 'Liste d\'adresses IP bloquées',
	'blocklist-sub'		=> 'Bloquer les adresses IP spécifiques',
	'blocklist-ip-tip'	=> 'Adresse IP ou vide à supprimer',

	'url-queries-title'	=> 'Requêtes URL ignorées',
	'url-queries-sub'	=> 'Filtrer quelles requêtes d\'URL doivent être ignorées',
	'url-queries-name-tip'	=> 'Nom de la requête ou vide à supprimer',
	'url-queries-value-tip'	=> 'Valeur de requête ou vide pour toute valeur',

	'settings-sub'		=> 'Modifier les différents paramètres',
	'moderation-sub'	=> 'Publier, éditer, approuver et supprimer les commentaires',

	'setting-language'			=> 'Langue',
	'setting-theme'				=> 'Thème',
	'setting-default-sorting'		=> 'Ordre de tri des commentaires par défaut',
	'setting-uses-moderation'		=> 'Les commentaires postés par les utilisateurs normaux nécessitent une modération',
	'setting-pends-user-edits'		=> 'Les commentaires édités par des utilisateurs normaux nécessitent une modération',
	'setting-data-format'			=> 'Format des données de commentaire',
	'setting-mailer'			=> 'Méthode de livraison de courrier électronique de notification',
	'setting-mail-type'			=> 'Format des e-mails de notification',
	'setting-default-name'			=> 'Nom du commentateur par défaut',
	'setting-allows-images'			=> 'Autoriser l\'affichage des images dans les commentaires',
	'setting-allows-login'			=> 'Autoriser les utilisateurs à se connecter',
	'setting-allows-likes'			=> 'Autoriser les utilisateurs à aimer les commentaires',
	'setting-allows-dislikes'		=> 'Autoriser les utilisateurs à ne pas aimer les commentaires',
	'setting-uses-ajax'			=> 'Activer les fonctionnalités JavaScript asynchrones',
	'setting-collapses-interface'		=> 'Réduire l\'intégralité de l\'interface utilisateur HashOver',
	'setting-collapses-comments'		=> 'Réduire un nombre configurable de commentaires',
	'setting-collapse-limit'		=> 'Nombre de commentaires à réduire',
	'setting-reply-mode'			=> 'Mode d\'affichage des fils de commentaires',
	'setting-stream-depth'			=> 'Nombre d\'indentions de réponse avant que le flux ne soit aplati',
	'setting-popularity-threshold'		=> 'Nombre net de likes un commentaire doit être populaire',
	'setting-popularity-limit'		=> 'Nombre de commentaires populaires à afficher',
	'setting-uses-markdown'			=> 'Activer le support de Markdown',
	'setting-server-timezone'		=> 'Fuseau horaire du serveur',
	'setting-uses-user-timezone'		=> 'Afficher les dates / heures dans le fuseau horaire de l\'utilisateur (mode JavaScript)',
	'setting-uses-short-dates'		=> 'Activer des dates / heures plus courtes (exemple "il y a 1 jour")',
	'setting-time-format'			=> 'Format de l\'heure, utilisez "H:i" pour le format 24 heures',
	'setting-date-format'			=> 'Format de date',
	'setting-displays-title'		=> 'Activer l\'affichage du titre de la page',
	'setting-form-position'			=> 'Position pour le formulaire de commentaire principal',
	'setting-uses-auto-login'		=> 'Consigner automatiquement les utilisateurs lorsqu\'ils publient des commentaires',
	'setting-shows-reply-count'		=> 'Afficher le nombre de réponses séparément du nombre total',
	'setting-count-includes-deleted'	=> 'Inclure les commentaires supprimés dans le compte des commentaires',
	'setting-icon-mode'			=> 'Mode d\'affichage de l\'avatar',
	'setting-icon-size'			=> 'Taille de l\'icône de l\'avatar',
	'setting-image-format'			=> 'Format pour les icônes et autres images',
	'setting-uses-labels'			=> 'Afficher les étiquettes au-dessus des entrées',
	'setting-uses-cancel-buttons'		=> 'Si les formulaires ont des boutons d\'annulation',
	'setting-appends-css'			=> 'Ajouter automatiquement CSS HashOver à la page',
	'setting-appends-rss'			=> 'Ajouter des liens HashOver RSS Feed à la page',
	'setting-login-method'			=> 'Système de connexion utilisateur',
	'setting-sets-cookies'			=> 'Activer les cookies',
	'setting-secure-cookies'		=> 'Utiliser des cookies HTTPS-only sécurisés',
	'setting-stores-ip-address'		=> 'Activer le stockage des adresses IP des utilisateurs',
	'setting-subscribes-user'		=> 'Abonnez l\'utilisateur aux notifications par courrier électronique par défaut',
	'setting-allows-user-replies'		=> 'Définir l\'adresse e-mail de l\'utilisateur comme "Répondre à" dans les notifications de réponse',
	'setting-noreply-email'			=> 'Adresse e-mail utilisée si aucun e-mail n\'est donné',
	'setting-spam-batabase'			=> 'Emplacement de la base de données SPAM',
	'setting-spam-check-modes'		=> 'Modes pour effectuer un test de SPAM sous',
	'setting-gravatar-force'		=> 'Utilise des images gravatariques à la place des avatars',
	'setting-gravatar-default'		=> 'Thème Gravatar par défaut à utiliser',
	'setting-minifies-javascript'		=> 'Activer la minification JavaScript',
	'setting-minify-level'			=> 'Niveau de minimisation JavaScript',
	'setting-allow-local-metadata'		=> 'Autoriser la mise à jour des métadonnées de page depuis localhost'
);
