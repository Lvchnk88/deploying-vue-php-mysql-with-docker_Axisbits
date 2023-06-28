# vue php and mysql project setup

#### Make frontend and backend app accessible with URL
#### Bash
```bash
sudo bash -c 'echo 127.0.0.1 app.loc >> /etc/hosts && echo 127.0.0.1 api.app.loc >> /etc/hosts'

```

#### PowerShell
```bash
Add-Content -Path $env:windir\System32\drivers\etc\hosts -Value "`n127.0.0.1`tapp.loc" -Force
Add-Content -Path $env:windir\System32\drivers\etc\hosts -Value "`n127.0.0.1`tapi.app.loc" -Force

```

#### Run Progect as Docker container 
```bash
cd {{ project }}
docker-compose up -d

```

#### Check the page
```bash
docker-compose logs -f frontend

```

#### You should see
```bash
frontend_container |  DONE  Compiled successfully in 945ms1:03:58 PM
frontend_container |
frontend_container | <s> [webpack.Progress] 100%
frontend_container |
frontend_container |
frontend_container |   App running at:
frontend_container |   - Local:   http://localhost:8080/
frontend_container |   - Network: http://172.19.0.3:8080/
frontend_container |
frontend_container |   Note that the development build is not optimized.
frontend_container |   To create a production build, run npm run build.

```

Check application on the address http://app.loc/

This project is licensed under the [MIT License](LICENSE).



TEST DESCRIPTION
----------------

**Containers**

We are starting a new project.
```
- Docker will be used for containers;
- the project will consist of two applications: Vue for frontend and PHP backend, that will perform as API
 for frontend (you can use empty files for frontend & backend);
- frontend will have “app.loc” domain;
- backend will have “api.app.loc” domain;
- as data storage – use MySQL;
- the project will be deployed to developer's machines and eventually to DEV-server.
```
**Propose and write:**
```
- Project file structure;
- docker-compose config(s);
- any additionals, you believe will increase QoL;
- deployment process for local environment and dev server;
- project must contain a short instruction on deployment process with commands, that can 
be followed until application will be up and running;
```

Please note, that project must be runnable. It will be checked by following deployment instructions and verified by visiting [http://app.loc](http://app.loc/) and [http://api.app.loc](http://api.app.loc/) addresses.

**Delivery**
```
Upload code you created to GitHub, GitLab or Bitbucket. Repository must be publicly accessible. We need to be
able to clone your code in order to test it. Provide us with a link.
```