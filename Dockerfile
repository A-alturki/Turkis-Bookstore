FROM php:8.1-apache

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql gd

# Copy entire project
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html

# Determine which folder contains your main PHP files
# You might need to adjust this based on your project structure
RUN if [ -d "/var/www/html/HTML" ]; then \
        mv /var/www/html/HTML/* /var/www/html/ ; \
    fi

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Expose port 80
EXPOSE 80

# Default Apache launch
CMD ["apache2-foreground"]