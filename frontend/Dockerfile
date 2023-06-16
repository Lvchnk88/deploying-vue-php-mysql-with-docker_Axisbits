FROM node:14-alpine
WORKDIR /app
COPY package.json /app
COPY package-lock.json /app
RUN npm install
COPY . .
RUN npm run build
EXPOSE 8080
CMD ["npm", "run", "serve", "--", "--port", "80"]
