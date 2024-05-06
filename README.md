
# Project Title

Create an online voting system application for use during lectures. Ensure a well-designed graphical interface, intuitive navigation, and robust security measures.


## Roadmap

- [x] Version Control System (GIT)

- [ ] Multilanguage (EN, SK)

- [ ] Responsive

- [ ] Authentication
    - [ ] Login
    - [ ] Logout
    - [ ] Register
    - [ ] Change password

- [ ] Roles
    - [ ] Unauthenticated user
    - [ ] Authenticated user
    - [ ] Admin

- [ ] User manual
    - [ ] Export to PDF

- [ ] A video documenting the entire functionality

- [ ] Create poll

TODO
## Run Locally

- Install Ubuntu 22.04.3 LTS


- Update ubuntu
```bash
  sudo apt-get update
```

- Download php8
```bash
  sudo apt install php8.1-cli
```
```bash
  sudo apt install php-curl -y
```
```bash
  sudo apt install php-xml -y
```
```bash
  sudo apt install php-zip -y
```
```bash
  sudo apt install php-gd -y
```

- Clone the project (you could use IDE / https clone / ssh clone)

```bash
  git clone https://github.com/mental-sigsegv/webte2-final-project
```

- Go to the project directory

```bash
  cd webte2
```

- NPM
```bash
  sudo apt-get install npm 
```

- Checkout dev branch

```bash
  git checkout dev
```

- Create .env file in root dir


- Composer

```bash
  composer update
```

---


## Docker

 Setup Docker Alias

```bash
  sudo nano ~/.bashrc 
```

- Append to end of file
> alias sail='sh $([ -f sail ] && echo sail || echo vendor/bin/sail)'" >> ~/.bashrc

---

Start Docker
```bash
  sail up -d
```

---

Stop Docker
```bash
  sail down
```

Shell Docker
```bash
  sail shell
```

## Localhost
[Localhost](http://localhost:8000)

[phpMyAdmin](http://localhost:8080)


#### Get all items

```http
  GET /api/items
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `api_key` | `string` | **Required**. Your API key |

#### Get item

```http
  GET /api/items/${id}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `id`      | `string` | **Required**. Id of item to fetch |

#### add(num1, num2)

Takes two numbers and returns the sum.


## Deployment

To deploy this project run

```bash
  npm run deploy
```


## Authors

- [@octokatherine](https://www.github.com/octokatherine)


## Docker

Run once for storing alias

```bash
echo "alias sail='sh \$([ -f sail ] && echo sail || echo vendor/bin/sail)'" >> ~/.bashrc
```

Run Docker

```bash
sail up -d --remove-orphans
```

Stop Docker

```bash
sail down
```

## Cache
