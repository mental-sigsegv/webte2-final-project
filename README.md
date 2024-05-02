
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

- Roles
    - [ ] Unauthenticated user
    - [ ] Authenticated user
    - [ ] Admin

- [ ] User manual
    - [ ] Export to PDF

- [ ] A video documenting the entire functionality

- [ ] Create poll

TODO
## Run Locally

Clone the project

```bash
  git clone https://link-to-project
```

Go to the project directory

```bash
  cd my-project
```

Install dependencies

```bash
  npm install
```

Start the server

```bash
  npm run start
```


## API Reference

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
