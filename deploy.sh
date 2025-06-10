#!/bin/bash

# Activer le mode strict pour arrêter en cas d'erreur
set -e

# Définir le dossier du projet (où le script est exécuté)
PROJECT_DIR="$(pwd)"
GIT_REPO="git@github.com:Eliphas-ratta/symfonypro.git"

echo "📍 Répertoire du projet : $PROJECT_DIR"

# Vérifier si le dossier contient déjà un dépôt Git
if [ -d "$PROJECT_DIR/.git" ]; then
    echo "📥 Le projet existe déjà, mise à jour avec Git pull..."
    cd "$PROJECT_DIR"
    git pull origin master
else
    echo "🆕 Le dossier existe mais n'est pas un repo Git."

    # Option 2 : Ajouter Git si nécessaire
    echo "📦 Initialisation Git et récupération du dépôt..."
    cd "$PROJECT_DIR"
    git init
    git remote add origin "$GIT_REPO"
    git fetch origin
    git checkout -t origin/master
fi

# Mise à jour des dépendances PHP
echo "📦 Mise à jour des dépendances PHP avec Composer..."
composer update --no-interaction --optimize-autoloader

# Construire les assets avec NPM
echo "⚙️  Construction des assets avec NPM..."
npm install
npm run build

# Vérifier si la base de données existe
echo "🔍 Vérification de l'existence de la base de données..."
if php bin/console doctrine:database:exists --no-interaction; then
    echo "✅ La base de données existe déjà."
else
    echo "🚀 La base de données n'existe pas, création en cours..."
    php bin/console doctrine:database:create --no-interaction
fi

# Exécuter les migrations
echo "🗄️  Migration de la base de données..."
php bin/console doctrine:migrations:migrate --no-interaction

echo "✅ Déploiement terminé avec succès !"
