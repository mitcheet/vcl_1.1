#!/home5/erikmitc/python/bin/python
import sys, os

# Add a custom Python path.
sys.path.insert(0, "/home5/erikmitc/python/lib/python2.7")
sys.path.insert(0, "/home5/erikmitc/.local/lib/python2.7/site_packages")
#sys.path.insert(0, "/home/erikmitc/.local/lib/python2.7/site-packages/librware")

# Switch to the directory of your project. (Optional.)
os.chdir("/home5/erikmitc/vcl_lab_new")

# Set the DJANGO_SETTINGS_MODULE environment variable.
os.environ['DJANGO_SETTINGS_MODULE'] = "vcl.settings"

from django.core.servers.fastcgi import runfastcgi
runfastcgi(method="threaded", daemonize="false")
################################################################
