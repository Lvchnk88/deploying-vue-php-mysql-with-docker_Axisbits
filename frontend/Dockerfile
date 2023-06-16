# Base image
FROM node:14-alpine

# Set working directory
WORKDIR /app

# Copy package.json and package-lock.json
COPY app/package*.json ./

# Install dependencies
RUN npm install \
    && npm install axios

# Copy app files
COPY app/ .

# Build the app
RUN npm run build

# Expose the app port
EXPOSE 8080

# Start the app
CMD ["npm", "run", "serve"]