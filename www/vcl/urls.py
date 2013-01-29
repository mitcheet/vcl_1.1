from django.conf.urls import patterns, include, url
#from django.http import HttpResponsePermanentRedirect

# Uncomment the next two lines to enable the admin:
from django.contrib import admin
admin.autodiscover()

urlpatterns = patterns('',
	#url, (r'^$', 'django.views.generic.simple.redirect_to', {'url': '/lab'}, name='home'),
        url(r'^$', 'lab.views.index'),
        url(r'^logout/', 'lab.views.logout_view'),
	url(r'^500.shtml', 'lab.views.index'),
        url(r'^downloadrdp/$','lab.views.create_rdp_file'),
	url(r'^accounts/', include('registration.backends.default.urls')),
	url(r'^admin/', include(admin.site.urls)),

)
