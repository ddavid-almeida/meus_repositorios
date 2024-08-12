FROM alpine:latest

# Instala o Git
RUN apk add --no-cache git

# Cria o diretório de trabalho
WORKDIR /usr/src/app

# Clona o repositório público
RUN git clone https://github.com/ddavid-almeida/meus_repositorios.git .

# Mantém o container em execução para que possamos verificar os arquivos
CMD ["tail", "-f", "/dev/null"]
