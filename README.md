# My React Plugin

## Description

This WordPress plugin integrates a simple React application into your WordPress site. It enqueues a React bundle and renders it within a `div` with the ID `root` in the footer of your site.

## Installation

1. **Clone the Repository:**

   ```bash
   git clone <repository-url>
   cd <repository-directory>
   ```

Install Dependencies:

Navigate to the react-app directory and install the required dependencies:

cd react-app
npm install

Build the React App:

Build the React application using webpack:

npm run build
This will generate a bundle.js file in the dist directory.

Install the Plugin:

Upload the plugin folder to your WordPress wp-content/plugins directory.
Go to the WordPress admin panel, navigate to Plugins, and activate the "My React Plugin" plugin.

The plugin will automatically add a <div id="root"></div> to the footer of your WordPress site and load the React bundle. You can customize the React application by modifying the index.js file in the react-app directory.

Development
To delve into development:

Modify React Components:

Edit index.js and other React files as needed.

Rebuild React App:

After making changes, rebuild the app with:

npm run build
Refresh Plugin:

The changes will be reflected in your WordPress site automatically.
