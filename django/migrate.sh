#!/bin/bash
python manage.py schemamigration shifty_shifts --auto
python manage.py migrate shifty_shifts
