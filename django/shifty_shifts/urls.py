from django.conf.urls import patterns, url
from shifty_shifts import views

urlpatterns = patterns('',
    url(r'^$', views.index, name='index')
)