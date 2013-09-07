from django.contrib import admin
from shifty_shifts.models import Shift, ShiftType


class ShiftAdmin(admin.ModelAdmin):
    list_display = ('__unicode__', 'getType')
    pass

class ShiftTypeAdmin(admin.ModelAdmin):
    pass

admin.site.register(Shift, ShiftAdmin)
admin.site.register(ShiftType, ShiftTypeAdmin)