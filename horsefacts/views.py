from django.shortcuts import render
from django.http import HttpResponse
from .models import HorseFact

# Create your views here.

def random(request):
    # lots of people claiming this is inefficient, but we won't have many facts (<200)
    fact = HorseFact.objects.order_by('?').first()

    return HttpResponse(fact)
