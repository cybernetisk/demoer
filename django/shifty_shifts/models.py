from django.db import models
from django.contrib.auth.models import User

# Create your models here.

class Shift(models.Model):
    title = models.CharField(max_length=255)
    description = models.TextField(blank=True)
    shift_type = models.ForeignKey("ShiftType", null=False)
    volunteer = models.ForeignKey(User, null=True, blank=True)
    start = models.DateTimeField()
    stop = models.DateTimeField()
    
    def __unicode__(self):
        return self.title

    def getType(self):
        return self.shift_type
    getType.short_description = "Shift-type"


class ShiftType(models.Model):
    def __unicode__(self):
        return self.title

    title = models.CharField(max_length=30)
    description = models.TextField(blank=True)