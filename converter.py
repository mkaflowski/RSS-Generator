from pydub import AudioSegment
import sys
from pathlib import Path
import os
from os import walk

try:
    f = []
    print("CONVERTER RUNNING")
    print(sys.argv)
    parent = str(Path(sys.argv[0]).parent)
    print(parent + "/" + sys.argv[1])

    os.chdir(parent)

    for (dirpath, dirnames, filenames) in walk(str(parent) + "/" + sys.argv[1]):
        print(filenames)
        print("PARENT = " + parent)
        for filename in filenames:
            try:
                print(filename)
                path = sys.argv[1] + "/" + filename
                p = Path(path)
                print(path)
                if p.suffix == '.aac':
                    print("LOADING...")
                    aac_version = AudioSegment.from_file(str(p), "aac")
                    print("CONVERTING...")
                    convertedPath = str(p.parent) + "/" + str(p.stem) + ".ogg"
                    print(convertedPath)
                    aac_version.export(convertedPath, format="ogg")
                    print("FINISHED!")
                    os.remove(str(p))
                else:
                    print("NOT CONVERTING!")
            except Exception as ex:
                print(ex)
        break
except Exception as ex:
    print("oops!")
    print(ex)
