# vue php and mysql project setup

## Frontend Project setup (only for Sergiy)

This will generate default vue project with basic hello world application.
```
cd frontend 
npm install
npm run serve
```

### Make frontend and backend app accessible on the name

echo "127.0.0.1   app.loc" | sudo tee -a /etc/hosts
echo "127.0.0.1   api.app.loc" | sudo tee -a /etc/hosts



### Run Frontend as Docker container 
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

