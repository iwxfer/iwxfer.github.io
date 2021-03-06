# Remote desktop
rdesktop 143.210.123.456
rdesktop -u __USERNAME__ 143.210.123.456
rdesktop -u __USERNAME__ -fP 143.210.123.456

# Specify Window size:
rdesktop -u __USERNAME__ -g 100% -PKD 143.210.123.456
rdesktop -u Administrador -g 90% -pPASSWORD 192.168.1.35

# Important options
   -D: hide window manager decorations
   -K: keep window manager key bindings
   -z: enable rdp compression
   -P: use persistent bitmap caching