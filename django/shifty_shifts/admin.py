from django.contrib import admin
from shifty_shifts.models import Shift

class ShiftAdmin(admin.ModelAdmin):
    pass

admin.site.register(Shift, ShiftAdmin)
