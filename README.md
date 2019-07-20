# wordpress-starter

Repositório para desenvolvimento do tema WordPress GESAD

## Instalação

OS X & Linux:

```sh
# First, set enviroment properties in .env.prod (or .env.dev)
# Run the follow script to generate docker-compose.yml with enviroment variables
./build-compose.sh

# Run the application
docker-compose up -d

# Fix permissions (workaround)
# See https://github.com/docker/compose/issues/3270
sudo chown -R www-data:www-data .wp-app
sudo chown -R $USER:$USER gesad-theme && sudo chown -R $USER:$USER gesad-plugin

```

>Ative o tema no painel administrativo do WordPress

Limpando o ambiente:

```bash
docker-compose down -v
```

>Elimina os volumes dos serviço `wordpress` e `mysqldb` definidos em `template.yml`
