pkg="apt-get"
[[ "${HOME}" == "/data/data/com.termux/files/home" ]] && pkg="pkg"
printf " Instalando as dependências!"
${pkg} install clang -y &> /dev/null
[[ -z $(command -v clang ) ]] && echo " Erro" && exit 1
gcc main.c -o main
./main
