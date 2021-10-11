#!/usr/bin/env python
import os
import subprocess
import sys
import locale


file_path = os.path.dirname(sys.argv[0])
# print("\n")
# print("Generating: "+file_path+'/do_dechy/do_dechy.rss')
try:
    cmd = 'PYTHONIOENCODING=utf-8 python '+file_path+'/generator.py --dirname '+file_path+'/example --extensions "aac,mp3" --title \"RSS Title\" \
               --description \"Lorem Ipsum description.\"\
               --image https://cdn.r357.eu/1560090d-c91f-4893-8e15-94920309131b.jpeg\
               --sort-creation -H https://kofii12345.usermd.net\
               --author \"Authors\"\
               --out '+file_path+'/example/rss.rss'


    # print(cmd.encode('utf8','surrogateescape').decode('utf8','surrogateescape'))
    res = subprocess.call(cmd, shell=True)
    print(res)
except Exception as ex:
    trace = []
    tb = ex.__traceback__
    while tb is not None:
        trace.append({
            "filename": tb.tb_frame.f_code.co_filename,
            "name": tb.tb_frame.f_code.co_name,
            "lineno": tb.tb_lineno
        })
        tb = tb.tb_next
    print(str({
        'type': type(ex).__name__,
        'message': str(ex),
        'trace': trace
    }))
