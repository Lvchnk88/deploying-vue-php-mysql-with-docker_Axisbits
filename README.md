# vue php and mysql project setup

### Make frontend and backend app accessible with URL
bash
```
sudo bash -c 'echo 127.0.0.1 app.loc >> /etc/hosts && echo 127.0.0.1 api.app.loc >> /etc/hosts'

```

PowerShell
```
Add-Content -Path $env:windir\System32\drivers\etc\hosts -Value "`n127.0.0.1`tapp.loc" -Force
Add-Content -Path $env:windir\System32\drivers\etc\hosts -Value "`n127.0.0.1`tapi.app.loc" -Force

```

### Run Progect as Docker container 
```
cd {{ project }}
docker-compose up -d

```

### Check the page
```
docker-compose logs -f frontend

```

You should see
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

