# vue php and mysql project setup

### Make frontend and backend app accessible with URL
```
sudo bash -c 'echo 127.0.0.1 app.loc >> /etc/hosts && echo 127.0.0.1 api.app.loc >> /etc/hosts'

```

### Run Progect as Docker container 
```
cd {{ project }}
docker-compose up --build -d

```

### Check the page
```
docker-compose logs -f frontend
```
You should see

```bash
frontend_container  | Compiling...
 DONE  Compiled successfully in 473ms3:24:33 AM
frontend_container  | 

frontend_container  |   App running at:
frontend_container  |   - Local:   http://localhost:8080/ 
frontend_container  |   - Network: http://172.19.0.2:8080/
frontend_container  | 
Build finished at 03:24:33 by 0.000s
```

Check application on the address http://app.loc/

