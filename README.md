# Iframe integration for FarmOS

This module provides iframes functionality for farmOS.

After installing this module you will be able to link a specific iframe panel to an Asset. All Asset-Types inside farmOS will have a new field called iframe Panel Link. Also a new menu entry is added on the toolbar. It allows to directly access iframes from inside farmOS without opening another tab in your browser.

## Installation

1. Download the repo, either by cloning it or by using the "Download as Zip" function from GitHub. 
1. Copy the folder (farm_iframe) (!not the zip) into `/www/web/sites/all/modules/farm/`.
1. Open your farmOS instance online. Go to `Administration -> Extend`. 
1. Search for "iframe".
1. Select it by clicking the checkbox and scroll down to the bottom of the page and hit `Install`
1. Finished

## Usage

### Using the iFrame Module in farmOS

1. Click `Settings` in the top right corner.
1. Click on the `iframe`-Tab.
1. Paste in your iframe URL and click `Save configuration`.

If you click on `Iframe` entry in the left toolbar, you will open up the site you just pasted inside the settings.

### Link a specific panel to an Asset

1. Open up the Asset you want the panel linked to inside farmOS. Scroll in the edit/create window until yu find the `iframe Panel Link` input.
1. Paste the panel URL into that field. Save the Asset.

If you now navigate to this specific Asset the Panel will be shown there.

## What is happening in the background

No matter what URL you paste in, may it be Grafana or something else, that website will be displayed.
In the background everything is done via iFrames.

Maybe you want to link Grafana, a calendar or a Node-Red instance or something completly different. Be creative!


## Troubles in production

I use NGINX to make my services available. In the configuration of my Grafana Service I had to set this option:

```
proxy_hide_header X-Frame-Options;
```

Otherwise Grafana would not load up. Also worth mentioning is: My farmOS and Grafana instance run on the same server with the same URL (other then the subdomain). I didn't test this module with external services.

## Special Thanks
Special Thanks go out to:
- Michael Stenta - https://github.com/mstenta
- Paul Weidner - https://github.com/paul121


** This module is mostly a re-branding of SirSundays/farm_grafana_integration**
