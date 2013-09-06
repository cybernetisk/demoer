from django.db import models

# Create your models here.

class Shift(models.Model):
    title = models.CharField(max_length=255)
    description = models.TextField()
    start = models.DateTimeField()
    stop = models.DateTimeField()

    def __str__(self):
        return self.title
