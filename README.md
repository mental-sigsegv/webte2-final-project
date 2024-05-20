
# Project Title

Create an online voting system application for use during lectures. Ensure a well-designed graphical interface, intuitive navigation, and robust security measures.


## Run Locally

- Install Ubuntu 22.04.3 LTS

---

- Update ubuntu
```bash
  sudo apt-get update
```

---

- Clone the project (you could use IDE / https clone / ssh clone)

```bash
  git clone https://github.com/mental-sigsegv/webte2-final-project
```

---

- Go to the project directory

```bash
  cd webte2
```

---

- Checkout dev branch

```bash
  git checkout dev
```

---

- Create .env file in root dir (based on .env example)

---

- Composer

```bash
  composer install
```

## Docker

 Setup Docker Alias

```bash
  sudo nano ~/.bashrc 
```

---

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


## Authors

- Backend
  - Martin Klacik [@mental-sigsegv](https://github.com/mental-sigsegv)
  - Erik Póczoš [@ErikPoczos](https://github.com/ErikPoczos)
  - Ján Demeter [@jandemeter](https://github.com/jandemeter)
  

- Frontend
  - Slavomír Tung Le Minh [@slavkoleminh](https://github.com/slavkoleminh)


## Used Technologies

Backend : Laravel 11
Frontend : Livewire 3, Tailwind

Others defined in composer.json and package.json
