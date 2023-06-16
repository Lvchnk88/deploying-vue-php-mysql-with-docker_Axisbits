# Base image
FROM node:14-alpine
WORKDIR /app
COPY app/package*.json ./
RUN npm install \
    && npm install axios
COPY app/ .
RUN npm run build
EXPOSE 8080
CMD ["npm", "run", "serve"]