# Init script for VVV usine.ch

noroot() {
  sudo -EH -u "vagrant" "$@";
}

echo "Commencing usine.ch local instance Setup"

# Make a database, if we don't already have one
echo "Creating database (if it's not already there)"
mysql -u root --password="root" -e "CREATE DATABASE IF NOT EXISTS wp_usine"
mysql -u root --password="root" -e "GRANT ALL PRIVILEGES ON wp_usine.* TO wp_usine@localhost IDENTIFIED BY 'wp_usine';"

# Run Composer
noroot composer install --prefer-dist

# Download WordPress
if [ ! -f htdocs/wordpress/wp-config.php ]
then
	echo "Creating wp-config.php and installing WordPress"
	noroot wp core config --dbname="wp_usine" --dbuser="wp_usine" --dbpass="wp_usine" --dbhost="localhost" --extra-php <<PHP
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/wp-content/' );
define( 'WP_SITEURL',     'http://local.usine.dev/wordpress/' );
define( 'WP_HOME',     'http://local.usine.dev/' );
PHP
	noroot wp core install --title="L'Usine" --admin_user="admin" --admin_password="admin" --admin_email="mehdi.lahlou@free.fr"
	noroot wp option update permalink_structure "/%year%/%monthnum%/%postname%/"
fi

# The Vagrant site setup script will restart Nginx for us

echo "Finished usine.ch local instance Setup";
echo "Visit local.usine.dev";
