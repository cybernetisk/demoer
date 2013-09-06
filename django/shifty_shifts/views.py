# Create your views here.
from django.shortcuts import render_to_response

def function_name(request):
    print "=============================="
    print request
    print "=============================="
    print dir(request)
    print "=============================="
    print type(request)
    print "=============================="

    return "lol"