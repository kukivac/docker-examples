# Docker Examples

This repository provides a collection of Docker-based examples intended for educational use at a secondary IT school. Each example demonstrates how to set up and run various services and applications using Docker, helping students gain hands-on experience with containerization technologies.

## Overview

Docker has become a standard tool in modern software development, enabling developers to package applications and their dependencies into isolated, reproducible containers. These examples focus on practical scenarios that students might encounter when working with PHP applications, Node.js services, and popular databases like PostgreSQL and MongoDB.

## What You’ll Find Here

- **PHP Application Containers:**  
  Learn how to containerize simple PHP applications and run them consistently across different environments.
  
- **Node.js Application Containers:**  
  Understand the basics of packaging Node.js applications for easy deployment, scaling, and distribution.
  
- **PostgreSQL Integration:**  
  Explore how to run a PostgreSQL database server in a container and connect it to a PHP or Node.js application.
  
- **PHP App with MongoDB:**  
  Dive into using MongoDB by running it inside a container, then linking it to a PHP application to perform database operations.

## Why Use These Examples?

1. **Hands-On Learning:**  
   These examples are created to help you practice the fundamentals of containerization, giving you direct experience with Docker commands, Dockerfiles, and `docker-compose` configurations.
   
2. **Reproducible Environments:**  
   Eliminate the "it works on my machine" problem by running the same containers anywhere Docker is supported.
   
3. **Ease of Setup:**  
   Each example comes with straightforward instructions and configuration files, making it simple to get started with minimal prior knowledge.
   
4. **Adaptability and Extension:**  
   Once you understand the basics, you can extend these examples to more complex scenarios, adding additional services or scaling out microservices.

## Requirements

- **Docker Engine:**  
  Make sure you have Docker installed on your system. You can find installation instructions on the [official Docker website](https://docs.docker.com/get-docker/).

- **docker-compose (Optional):**  
  Some examples may use `docker-compose` for multi-container environments. Install `docker-compose` by following the instructions in the [official documentation](https://docs.docker.com/compose/install/).

## Getting Started

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/kukivac/docker-examples.git
   ```

2. **Navigate to an Example Directory:**
   Each example is located in its own directory. For instance:
   ```bash
   cd docker-examples/php-app
   ```
   
3. **Build and Run the Containers:**
   Use `docker build` and `docker run` or `docker-compose up` depending on the example. For example:
   ```bash
   docker-compose up --build
   ```
   
4. **Access the Application:**
   Open your browser or API client and navigate to the URL specified in the example’s README (often `http://localhost:8080` or a similar address).

## Example Structure

Most examples include:

- **Dockerfile:**  
  A set of instructions to build the application’s Docker image.

- **docker-compose.yml:**  
  For multi-container setups, this file orchestrates how the containers interact, specifying services, networks, and volumes.

- **Application Files:**  
  Example source code (PHP, Node.js) and configuration files demonstrating how to integrate containers with your application’s logic.

## Contributing

Contributions are welcome! If you have suggestions for improvements, additional examples, or feature requests, feel free to open an issue or submit a pull request.

## License

This project is provided under the [MIT License](LICENSE).

---

*These Docker examples are designed to empower students and newcomers to containerization, giving them the skills to streamline development, deployment, and scaling of their applications.*  
