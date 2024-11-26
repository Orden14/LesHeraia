# Les Héraia Web

<div align="center">
    <p>Website project for Les Héraia (French podcast group)</p>
    <h4>(Still in early development)</h4>
    <img src="/public/images/logo/lesheraia_large.jpg" alt="lesheraia" height="380px">
</div>

## Author
- Orden14  
- [GitHub profile](https://github.com/Orden14)
- [Repository link](https://github.com/Orden14/LesHeraiaWeb)


## Running the project locally

### Prerequisites
- Composer 2.7 or above [\<link\>](https://getcomposer.org/doc/00-intro.md)
- Symfony CLI [\<link\>](https://symfony.com/download#step-1-install-symfony-cli)
- Node 20 or above [\<link\>](https://nodejs.org/en/download/)
- Yarn 1.22 or above [\<link\>](https://yarnpkg.com/getting-started/install)
- PHP 8.2 or above [\<link\>](https://www.php.net/downloads)
- Docker 27 or above [\<link\>](https://docs.docker.com/get-docker/)

### Installation
1. Clone the repository and navigate to its folder :
```bash
git clone https://github.com/Orden14/LesHeraiaWeb

cd LesHeraiaWeb
```

2. Install the dependencies and build the project :
```bash
yarn dependencies
```

3. Execute the docker compose to have the database, PhpMyAdmin and MailDev running : 
```bash
docker-compose up -d
```

4. Truncate the database and populate it with test data :
```bash
yarn truncate-database
```

5. Start the development web server
```bash
yarn server-start
```

### Accessing the project in the local environment
- The project will be available at `http://localhost:8002`
- MailDev will be available at `http://localhost:1080`
- PhpMyAdmin will be available at `http://localhost:8080`
