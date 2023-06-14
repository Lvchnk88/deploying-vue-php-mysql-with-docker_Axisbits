# Base image
FROM node:14-alpine

# Set the working directory
WORKDIR /app
COPY package.json /app
COPY package-lock.json /app

# Install dependencies
RUN npm install

# Copy the rest of the application files
COPY . .

# Build the application
RUN npm run build

# Expose the application port
EXPOSE 80

# Start the application
CMD ["npm", "run", "serve", "--", "--port", "80"]
