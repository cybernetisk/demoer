# Create your views here.
from django.shortcuts import render_to_response
from django.template import RequestContext, loader
from django.http import HttpResponse
from shifty_shifts.models import Shift


def index(request):
    shifts_list = Shift.objects.all
    template = loader.get_template("index.html")
    context = RequestContext(request, {
        'shifts_list': shifts_list
    })
    return HttpResponse(template.render(context))

def function_name(request):
    print "=============================="
    print request
    print "=============================="
    print dir(request)
    print "=============================="
    print type(request)
    print "=============================="

    return "lol"