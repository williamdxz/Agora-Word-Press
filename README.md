# Agora Video for WordPress #  
**Contributors:** jalamprea, digitallysavvy  
**Tags:** live streaming, video streaming, video call, video conference  
**Requires at least:** 5.0.0  
**Tested up to:** 5.2  
**Requires PHP:** 7.2  
**Stable tag:** 1.1  
**License:** CC BY-ND 4.0    
**License URI:** https://creativecommons.org/licenses/by-nd/4.0  
**GitHub:** https://github.com/AgoraIO/Agora-Word-Press  

Easily add live streaming and video conferencing functionality into your Wordpress posts and page.

## Description ##
The [Agora Video for WordPress](https://wordpress.org/plugins/wp-agora-io) plugin lets you easily add live streaming or video conferencing functionality to your WordPress posts and pages. You can easily create and configure streaming or communication channels through the WordPress Admin dashboard and embed real time communications without any coding required!

Features Include:
-  Live video streaming with Host UI template
-  Video calling with group video chat UI template
-  Cloud recording directly to Amazon S3
-  Screen sharing support
-  RTMP support
-  Customizable UI
-  Customizable configurations (credentials, video profile, Codec, etc.) and much more!

Agora is a Real-Time Engagement Platform as a Service that provides a fully encrypted, GDPR and HIPPA-compliant network. Agora delivers easy to embed Real-Time Communications (RTC) and Engagement APIs which include all the development tools and cloud infrastructure needed for mobile, web, and desktop applications.

With over 200+ data centers globally, the Agora’s Software-Defined Real-time Network (SD-RTN™) is trusted and  widely used by the world’s biggest brands and provides ease of scaling for up to 1 million peak concurrent users (PCU) in a single session with unmatched quality of experience.  
Agora  fully supports a range of development environments, making it easy to deliver deep integration of high-quality, extreme low-latency video calling across all platforms and channels.

Get started for free! The first 10,000 minutes each month are free, including free starter support through Slack. Agora offer a simple and affordable pricing model including volume discounts. See pricing details: [https://www.agora.io/price-2](https://www.agora.io/price-2)

- Terms of Service: [https://www.agora.io/en/terms-of-service](https://www.agora.io/en/terms-of-service)
- Privacy Policy: [https://www.agora.io/en/privacy-policy](https://www.agora.io/en/privacy-policy)
- Acceptable Use Policy: [https://www.agora.io/en/acceptable-use-policy](https://www.agora.io/en/acceptable-use-policy)
- Compliance Policy: [https://www.agora.io/en/compliance](https://www.agora.io/en/compliance)

## Features ##
-  Live video streaming with Host UI template
-  Video calling with group video chat UI template
-  Cloud recording directly to Amazon S3
-  Screen sharing support
-  RTMP support
-  Customizable UI
-  Customizable configurations (credentials, video profile, Codec, etc.) and much more!

# One-to-One Video Calls
Dramatically increase user engagement with Agora Video calling by delivering high quality, low-latency, one-to-one video call capabilities directly into your own applications. 

# Group Chat Video Calling
Group chat calls scales to include up to 17 participants – ensuring that you can handle all the use-cases you will ever need.

# Live Streaming
Agora’s flexible APIs enable deep integration of high quality, low latency – live video streaming experiences

## Installation ##
This section describes how to install the plugin and get it working.

# Plugin Installation
### WP Plugins
1.  Go to the Add New section of the Plugins section of your WordPress Admin Dashboard.
2.  Search for Agora.io 
3.  Click the Install Now button 
4.  Once the plugin status changes to “Installed”, the Active button will appear. Click the Activate button.
![WP Plugins Installation](/assets/plugins.gif?raw=true "WP Plugins Installation")

### Zip Upload
1.  Visit the [Agora Video for WordPress plugin](https://wordpress.org/plugins/wp-agora-io/) page and download the plugin zip.
2.  Go the Plugins section of your WordPress Admin Dashboard
3.  Click the "Upload" button and then upload the wp-agora-io.zip through the WordPress Admin Dashboard.
4.  The plugin upload screen will load. Once "Plugin installed successfully..." click the Activate button.
![Zip Upload Installation](/assets/upload.gif?raw=true "Zip Upload Installation")

### FTP
1.  Visit the [Agora Video for WordPress plugin](https://wordpress.org/plugins/wp-agora-io/) page and download the plugin zip.
2.  Upload the `Agora-Word-Press` folder to the `/wp-content/plugins/` directory
3.  Activate the plugin through the 'Plugins' menu in WordPress Admin Dashboard
![FTP Installation](/assets/ftp.gif?raw=true "FTP Installation")

### Agora setup (basic)
1.  Create or Log into an Agora developer account (https://console.agora.io)
2.  Create a project and take note of the `App ID` and `App certificate` keys
3.  Navigate to the plugin's Settings page and input `App ID` and `App certificate` keys

### Agora setup (advanced)
1.  Create or Log into an Agora developer account (https://console.agora.io)
2.  Create a project and take note of the `App ID` and `App certificate` keys
3.  Navigate to "Products and Usage" page. Enable `RTMP` and `Cloud Recording`.
4.  Navigate to the Dashboard API section of your Agora Dashboard (https://console.agora.io/restfulApi) and take note of your `Customer ID` and `Customer Certificate` keys.
5.  Navigate to the plugin's page and input `App ID`, `App certificate`, `Customer ID`, and `Customer Certificate` keys

# Screen Shots
![Channels List](/assets/screenshot-1.png?raw=true "Channels List")
![Broadcast Channel Settings](/assets/screenshot-2.png?raw=true "Broadcast Channel Settings")
![WP Agora.io Settings Page](/assets/screenshot-3.png?raw=true "WP Agora.io Settings Page")

## Frequently Asked Questions ##
1.  Why don't my proect credentials (App ID and App Certificate) get saved when I input them on the Settings tab? 

The issue happens when the AppID and App Certificate fail to save to the database. This could be occurring for a few different reasons. One of the more common issues is conflicts with plugins. To test if it is a plugin conflict, please disable all plugins except for Agora. Then, try to save your AppID and App Certificate. 
> If this does not resolve the issue and your App ID and App Certificate are still not getting stored, please file a support ticket: https://agora-ticket.agora.io

## Changelog ##

### 1.0.0 ###
* First version of this plugin.

### 1.1.0 ###
Hotfix - for environments where js global scope is limited to local file. Cleaned up some duplicate functions and ensure explicitly control scope.
