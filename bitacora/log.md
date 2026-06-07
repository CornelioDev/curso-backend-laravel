# Bitácora de aprendizaje

Una entrada por sesión cerrada. La escribe Claude Code automáticamente al pasar
el test en verde. Formato:

```
## <id> · <título>      (YYYY-MM-DD)
- Aprendido: ...
- Gotcha: ...
- Commit: <hash>
```

---

<!-- Las entradas se agregan debajo, en orden cronológico. -->

## 01 · Instalación y arranque      (2026-06-07)
- Aprendido: Laravel se instala con `laravel new`, que requiere el instalador global de Composer. La app necesita un archivo SQLite físico para desarrollo y phpunit.xml apunta a `:memory:` para que los tests sean rápidos y aislados.
- Gotcha: el instalador no escribe sobre carpetas no vacías; hay que instalar en un subdirectorio y mover los archivos a la raíz manualmente. Además, `mv *` no captura archivos ocultos — se necesita un segundo `mv .*` para llevarlos también.
- Commit: 47940da
